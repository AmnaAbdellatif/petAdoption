<?php

namespace App\Controller;



use App\Repository\ClientRepository;
use App\Repository\UserRepository;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class MailerController extends AbstractFOSRestController
{
    /**
     * @var UserRepository
     */
    private $userRepository;
    /**
     * @var ClientRepository
     */
    private $clientRepository;

    public function __construct(UserRepository $userRepository, ClientRepository $clientRepository)
    {
        $this->userRepository = $userRepository;
        $this->clientRepository = $clientRepository;
    }

    /**
     * @Route("/api/mailer", name="mailing_api", methods={"POST"})
     */
    public function index(Request $request, \Swift_Mailer $mailer): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        $subject = $data["subject"];
        $body = $data["body"];
        $user = $this->userRepository->findOneBy([
            'username' => $data["username"],
        ]);

        $instance_id = $user->getId();

        if(!is_null($instance_id)){
            $client = $this->clientRepository->findOneBy([
                'userInstance' => $instance_id,
            ]);
            if(is_null($client)){
                return new JsonResponse(["Failure" => "Operation Failed"], 404);
            }


        }else{
            return new JsonResponse(["Failure" => "Operation Failed" ], 404);
        }
        $destAddress = $client->getEmail();
        $message = (new \Swift_Message($subject))
            ->setFrom('HouseRenting99@gmail.com')
            ->setTo($destAddress)
            ->setBody($body)
        ;
        $mailer->send($message);

        return new JsonResponse(["success" => "Message Successfully sent" ], 200);

    }
}