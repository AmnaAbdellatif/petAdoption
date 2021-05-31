<?php


namespace App\Controller\Admin;


use App\Entity\Photo;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Vich\UploaderBundle\Form\Type\VichImageType;

class PhotoController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Photo::class;
    }
    public function configureFields(string $pageName): iterable
    {
        return [

            TextField::new('imageFile')
                ->setFormType(VichImageType::class)
                ->setLabel("image")
        ];
    }

}