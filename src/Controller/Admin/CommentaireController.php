<?php


namespace App\Controller\Admin;


use App\Entity\Commentaire;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class CommentaireController extends AbstractCrudController
{

    public static function getEntityFqcn(): string
    {
        return Commentaire::class;
    }
}