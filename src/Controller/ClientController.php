<?php

namespace App\Controller;

use App\DTO\ClientDTO;
use App\DTO\ClientSearchDTO;
use App\Entity\Client;
use App\Entity\Users;
use App\Form\ClientType;
use App\Form\SearchClientType;
use App\Form\UserType;
use App\Repository\ClientRepository;
use App\Repository\DetteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\String\Slugger\SluggerInterface;


class ClientController extends AbstractController
{

    #[Route('/client', name: 'client.index', methods: ['GET', 'POST'])]
    public function index(Request $request, ClientRepository $clientRepository): Response
    {
        $clientSearchDTO = new ClientSearchDTO();
        $formSearch = $this->createForm(SearchClientType::class, $clientSearchDTO, [
            'method' => 'GET',
        ]);
        $formSearch->handleRequest($request);

        $page = $request->query->getInt('page', 1);
        $limit = 4;

        $totalClients = $clientRepository->count([]);
        $totalPages = ceil($totalClients / $limit);

        if ($formSearch->isSubmitted($request) && $formSearch->isValid()) {

            $clients = $clientRepository->paginateClient($page, $limit, $clientSearchDTO->telephone);
            $page = 1;
            $totalPages = 1;
        } else {
            $clients = $clientRepository->paginateClient($page, $limit);
        }

        return $this->render('client/index.html.twig', [
            'clients' => $clients,
            'formSearch' => $formSearch->createView(),
            'currentPage' => $page,
            'totalPages' => $totalPages,
        ]);
    }

    #[Route('/client/create', name: 'client.create', methods: ['GET', 'POST'])]
    public function create(Request $request, EntityManagerInterface $entityManager, UserPasswordHasherInterface $encoder): Response
    {
        // dump($mailer);
        $client = new Client();
        $formClient = $this->createForm(ClientType::class, $client);

        $formClient->handleRequest($request);
        // dump($client->getUsers());            
        // dump($request->request->get('toggleSwitch'));

        if ($formClient->isSubmitted() && $formClient->isValid()) {
            if ($request->get('toggleSwitch') === 'on') {
                $users = $client->getUsers();
                $hashedPassword = $encoder->hashPassword($users, $users->getPassword());
                $users->setPassword($hashedPassword);
            } else {
                $client->setUsers(null);
            }

            $entityManager->persist($client);
            $entityManager->flush();
            return $this->redirectToRoute('client.index');
        }


        // Rendu du template avec les formulaires
        return $this->render('client/form.html.twig', [
            'formClient' => $formClient->createView(),
        ]);
    }


    #[Route('/client/show/{id?}', name: 'client.show', methods: ['GET'])]
    public function show(Request $request, DetteRepository $detteRepository, ClientRepository $clientRepository): Response
    {

        $id = $request->attributes->getInt('id');
        $client = $clientRepository->find($id);
        // dd($client);
        $dettes = $detteRepository->findByCientId($id);
        return $this->render('client/dette.client.html.twig', [
            'dettes' => $dettes,
            'client' => $client
        ]);
    }


    #[Route('/client/show/{id?}/{etat?}', name: 'client.showDette', methods: ['GET'])]
    public function showByEtat(Request $request, DetteRepository $detteRepository, ClientRepository $clientRepository): Response
    {

        $id = $request->attributes->getInt('id');
        $client = $clientRepository->find($id);
        $etat = $request->attributes->getInt('etat');
        // dd($id);
        $dettes = $detteRepository->findDetteClientEtat($id, $etat);

        return $this->render('client/dette.client.html.twig', [
            'dettes' => $dettes,
            'client' => $client
        ]);
    }
}
