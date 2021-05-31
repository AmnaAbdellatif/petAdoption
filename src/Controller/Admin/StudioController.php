<?php


namespace App\Controller\Admin;


use App\Entity\Studio;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class StudioController extends AbstractCrudController
{

    public static function getEntityFqcn(): string
    {
        return Studio::class;
    }
}