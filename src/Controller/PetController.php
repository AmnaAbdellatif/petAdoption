<?php

namespace App\Controller;

use App\Entity\Pet;
use App\Repository\PetRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DomCrawler\Image;

/**
     * @Route("/pet", name="pet")
     */
class PetController extends AbstractController
{

    
public function __construct(EntityManagerInterface $entityManagerInterface, PetRepository $petRepository)
{
    $this->entityManagerInterface=$entityManagerInterface;
    $this->petRepository=$petRepository; 
}
 
    public function index(): Response
    {
        return $this->render('pet/index.html.twig', [
            'controller_name' => 'PetController',
        ]);
    }
    
    /**
     * @Route("/findpets", name="findpets")
     */
    public function find()
    {
        $pets=$this->petRepository->findAll(); 
        $arrayOfPets=[]; 
        foreach($pets as $pet){

            $arrayOfPets[]=$pet->toArray(); 
        }
/*     
    foreach ($arrayOfPets as $key => $entity) {
        foreach ($entity as $k => $v) {
        
            $arrayOfPets[$key][$k] = $v -> displayPhoto();
    
}} */
/* $images = array();
foreach ($entities as $key => $entity) {
  $images[$key] = base64_encode(stream_get_contents($entity->getFoto()));
} */
      
        return $this->json($arrayOfPets); 
    }


/**
     * @Route("/filtrepets", name="filtrepets" , methods={"POST"})
     */
    public function findbycreteria(Request $resquest): Response
    {  
        $data = $resquest->getContent();
        $data = json_decode($data,true); 
        $type = $data["type"];  
        $gender = $data["gender"];  
        $address = $data["address"];  
        $animaux=$this->petRepository->findBy(['type' => $type], ['gender' => $gender] , ['address' => $address]); 
        $arrayPets=[]; 
        foreach($animaux as $pet){

            $arrayPets[]=$pet->toArray(); 
        }
        
        return $this->json($arrayPets);
    }
}
