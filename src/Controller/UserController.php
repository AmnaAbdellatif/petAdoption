<?php

namespace App\Controller;

use App\Repository\ClientRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class UserController extends AbstractController
{
    private $clientRepository;

    public function __construct(
        ClientRepository $clientRepository
    )
    {
        $this->clientRepository = $clientRepository;
    }

    /**
     * @Route("/api/users/_username", name="user_by_username", methods={"GET"})
     */
    public function getUserByUsername()
    {
        $user = $this->getUser();
        $client  = $this->clientRepository->findOneBy(['userInstance' => $user->getId()]);
        return $this->json([
            'id' => $user->getId(),
            'username' => $user->getUsername(),
            'roles' => $user->getRoles(),
            'idClient' => $client->getId(),
        ]);
    }

}
