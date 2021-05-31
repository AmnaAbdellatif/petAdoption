<?php


namespace App\Controller\Admin;


use App\Entity\Maison;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class MaisonController extends AbstractCrudController
{

    public static function getEntityFqcn(): string
    {
        return Maison::class;
    }
}