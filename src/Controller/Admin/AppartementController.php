<?php


namespace App\Controller\Admin;


use App\Entity\Appartement;
use App\Form\PhotoType;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Vich\UploaderBundle\Form\Type\VichImageType;

class AppartementController extends AbstractCrudController
{

    public static function getEntityFqcn(): string
    {
        return Appartement::class;
    }
    public function configureFields(string $pageName): iterable
    {
        //$imageFile = ImageField::new('imageFile')->setFormType(VichImageType::class);
        //->setBasePath( 'images/uploads/files')->setUploadDir('public/images/uploads/files/');;
        $image =ImageField::new('photo')->setLabel('/images/uploads/files');
        $flields =  [
            TextField::new('num'),
            Field::new('etat'),
            CollectionField::new('photo')->setEntryType(PhotoType::class)->onlyOnForms()
        ];

        if ($pageName == Crud::PAGE_INDEX || $pageName == Crud::PAGE_DETAIL ){
            $flields[] = $image;
        }
        //else  $flields[] = $imageFile;

       return $flields;
    }
}