<?php

namespace App\Controller;

use App\Entity\Detail;
use App\Entity\Dette;
use App\Repository\ArticleRepository;
use App\Repository\ClientRepository;
use App\Repository\DetteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Attribute\Route;

class DetteController extends AbstractController
{
    #[Route('/dette', name: 'dette.index')]
    public function index(Request $request, DetteRepository $detteRepository): Response
    {
        $page = $request->query->getInt('page', 1);
        $limit = 4;

        $etat = $request->query->getInt('etat', 3);

        $totalDettes = $detteRepository->countByEtat($etat);
        $totalPages = ceil($totalDettes / $limit);

        $dettes = $detteRepository->paginateDette($page, $limit, $etat);

        return $this->render('dette/index.html.twig', [
            'dettes' => $dettes,
            'currentPage' => $page,
            'totalPages' => $totalPages,
            'etat' => $etat,
        ]);
    }

    #[Route('/dette/create', name: 'dette.create', methods: ['GET', 'POST'])]
    public function create(Request $request, ArticleRepository $articleRepository, ClientRepository $clientRepository, SessionInterface $session, EntityManagerInterface $em): Response
    {
        $articles = $articleRepository->findAll();
        $clients = $clientRepository->findAll();

        $panier = $session->get('panier', []);

        if ($request->isMethod('POST') && $request->request->has('addArticle')) {

            // dd($request);

            // Récupérer les données de l'article sélectionné
            $articleId = $request->request->get('article');
            $quantity = $request->request->get('quantity');

            $article = $articleRepository->find($articleId);

            if ($article) {

                $panier[] = [
                    'article' => $article->getLibelle(),
                    'quantity' => $quantity,
                    'price' => $article->getPrix(),
                    'total' => $article->getPrix() * $quantity,
                    'articleDette' => $article,
                ];

                $session->set('panier', $panier);
            }
        }


        if ($request->isMethod('POST') && $request->request->has('saveDette')) {
            // dd($request);
            $clientId = $request->get('client');
            // dd($clientId);
            $client = $clientRepository->find($clientId);

            if ($client && !empty($panier)) {

                $dette = new Dette();
                $dette->setClient($client);
                $bigTotal = 0;
                foreach ($panier as $item) {
                    $detail = new Detail();
                    $articleDet = $item['articleDette'];
                    $detail->setArticle($articleDet);
                    $detail->setDette($dette);
                    $detail->setQte($item['quantity']);
                    $detail->setMontant($item['total']);
                    $em->persist($detail);
                    $dette->addDetail($detail);
                    $dette->addArticle($articleDet);
                    $bigTotal += $item['total'];
                }
                $dette->setMontant($bigTotal);
                $em->persist($dette);
                $em->flush();

                $session->remove('panier');

                return $this->redirectToRoute('dette.index');
            }
        }

        return $this->render('dette/form.html.twig', [
            'articles' => $articles,
            'clients' => $clients,
            'panier' => $panier,
        ]);
    }
}
