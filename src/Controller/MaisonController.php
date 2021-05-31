<?php

namespace App\Controller;

use App\Entity\Maison;
use App\Repository\ClientRepository;
use App\Repository\CommentaireRepository;
use App\Repository\MaisonRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class MaisonController extends AbstractController
{
    private $commentaireRepository ;

    public function __construct(
        CommentaireRepository $commentaireRepository
    )
    {
        $this->commentaireRepository = $commentaireRepository;
    }

    /**
     * @Route("/api/commentaires/{idMaison}/maison", name="commentaire_by_maison", methods={"GET"})
     */
    public function getCommentaireByIdMaison($idMaison)
    {

        $commentaire = $this->commentaireRepository->findBy(['maison'=>$idMaison]);
       // dump($commentaire);die();
        $serializer = $this->container->get('serializer');
        $reports = $serializer->serialize($commentaire, 'json');
        return new Response($reports);
    }

}
