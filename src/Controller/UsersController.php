<?php

namespace App\Controller;

use App\Entity\Users;
use App\EventSubscriber\ClientSubscriber;
use App\Form\SearchUserType;
use App\Form\UserType;
use App\Repository\UsersRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Attribute\Route;

class UsersController extends AbstractController
{
    #[Route('/users', name: 'users.index')]
    public function index(Request $request, UsersRepository $usersRepository): Response
    {
        $formSearch = $this->createForm(SearchUserType::class, null, [
            'method' => 'GET',
        ]);
        $formSearch->handleRequest($request);
        $page = $request->query->getInt('page', 1);
        $limit = 4;

        $totalUsers = $usersRepository->count([]);
        $totalPages = ceil($totalUsers / $limit);

        if ($formSearch->isSubmitted($request) && $formSearch->isValid()) {
            $login = $formSearch->get('login')->getData();
            $users = $usersRepository->paginateUser(1, 1, $login);
        } else {
            $users = $usersRepository->paginateUser($page, $limit);
        }
        return $this->render('users/index.html.twig', [
            'users' => $users,
            'formSearch' => $formSearch->createView(),
            'currentPage' => $page,
            'totalPages' => $totalPages,
        ]);
    }

    #[Route('/user/create', name: 'user.create', methods: ['GET', 'POST'])]
    public function create(Request $request, EntityManagerInterface $entityManager, MailerInterface $mailer): Response
    {
        $users = new Users();

        $formUser = $this->createForm(UserType::class, $users, [
            'mailer' => $mailer,
        ]);

        $formUser->handleRequest($request);

        if ($formUser->isSubmitted() && $formUser->isValid()) {

            $users->setBlocked(false);
            $entityManager->persist($users);
            $entityManager->flush();

            return $this->redirectToRoute('users.index');
        }
        return $this->render('users/form.html.twig', [
            'formUser' => $formUser->createView(),
        ]);
    }
}