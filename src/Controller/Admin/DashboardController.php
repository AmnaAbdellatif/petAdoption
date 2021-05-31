<?php

namespace App\Controller\Admin;

use App\Entity\Appartement;
use App\Entity\Commentaire;
use App\Entity\Maison;
use App\Entity\Photo;
use App\Entity\Studio;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\CrudUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        $routeBuilder = $this->get(CrudUrlGenerator::class)->build();
        return
            $this->redirect($routeBuilder->setController(UserCrudController::class)->generateUrl());
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('LocationMaison');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Photo','fa fa-file-pdf',Photo::class);
        yield MenuItem::linkToCrud('Maison','fa fa-file-pdf',Maison::class);
        yield MenuItem::linkToCrud('Appartement','fa fa-file-pdf',Appartement::class);
        yield MenuItem::linkToCrud('Commentaire','fa fa-file-pdf',Commentaire::class);
        yield MenuItem::linkToCrud('Studio','fa fa-file-pdf',Studio::class);
        // yield MenuItem::linkToCrud('The Label', 'fas fa-list', EntityClass::class);
    }
}
