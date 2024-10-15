<?php

namespace App\Controller;

use App\DTO\ClientDTO;
use App\Entity\Client;
use App\Entity\Users;
use App\Form\ClientType;
use App\Form\SearchClientType;
use App\Form\UserType;
use App\Repository\ClientRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

use function PHPUnit\Framework\isNull;

class ClientController extends AbstractController
{
    #[Route('/client', name: 'client.index', methods: ['GET', 'POST'])]
    public function index(ClientRepository $clientRepository, Request $request): Response
    {

        $formSearch = $this->createForm(SearchClientType::class);
        $formSearch->handleRequest($request);

        $page = $request->query->getInt('page', 1);
        $limit = 4;

        $totalClients = $clientRepository->count([]);
        $totalPages = ceil($totalClients / $limit);

        if ($formSearch->isSubmitted($request) && $formSearch->isValid()) {
            $clients = $clientRepository->paginateClient($page, $limit, $formSearch->get('telephone')->getData());
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


    #[Route('/client/show/{id?}', name: 'client.show', methods: ['GET'])]
    public function show(int $id): Response
    {
        return $this->render('client/index.html.twig', [
            'controller_name' => 'ClientController',
        ]);
    }

    #[Route('/client/create', name: 'client.create', methods: ['GET', 'POST'])]
    public function create(Request $request, EntityManagerInterface $entityManager): Response
    {
        $client = new Client();
        $users = new Users();

        $formClient = $this->createForm(ClientType::class, $client);
        $formUser = $this->createForm(UserType::class, $users);

        $formClient->handleRequest($request);


        if ($formClient->isSubmitted() && $formClient->isValid()) {

            $client->setCreatedAt(new \DateTimeImmutable());
            $client->setUpdatedAt(new \DateTimeImmutable());

            if ($request->get('toggleSwitch') === 'on') {

                $formUser->handleRequest($request);
                $users->setCreatedAt(new \DateTimeImmutable());
                $users->setUpdatedAt(new \DateTimeImmutable());
                $users->setBlocked(false);

                $entityManager->persist($users);
                $client->setUsers($users);
            }

            $entityManager->persist($client);
            $entityManager->flush();

            return $this->redirectToRoute('client.index');
        }

        // Rendu du template avec les formulaires
        return $this->render('client/form.html.twig', [
            'formClient' => $formClient->createView(),
            'formUser' => $formUser->createView(),
        ]);
    }
}
