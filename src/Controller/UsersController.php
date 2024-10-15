<?php

namespace App\Controller;

use App\Entity\Users;
use App\Form\UserType;
use App\Repository\UsersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class UsersController extends AbstractController
{
    #[Route('/users', name: 'users.index')]
    public function index(UsersRepository $usersRepository): Response
    {
        $users = $usersRepository->findAll();
        return $this->render('users/index.html.twig', [
            'users' => $users,
        ]);
    }

    #[Route('/user/create', name: 'user.create', methods: ['GET', 'POST'])]
    public function create(Request $request): Response
    {
        $users = new Users();
        $formUser = $this->createForm(UserType::class, $users);
        $formUser->handleRequest($request);
        return $this->render('users/form.html.twig', [
            'formUser' => $formUser->createView(),
        ]);
    }
}