<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/back-office/articles")
 */
class BackArticleController extends AbstractController
{
    /**
     * @Route("/")
     * @return Response
     */
    public function list(): Response
    {
        return $this->render('back-office/articles/index.html.twig');
    }
    /**
     * @Route("/creation")
     * @return Response
     */
    public function create(): Response
    {
        // Ajout d'un message flash
        $this->addFlash('success', 'Votre article a été ajouté');

        return $this->render('back-office/articles/create.html.twig');
    }

    /**
     * @Route("/{slug}/modification")
     * @return Response
     */
    public function update(): Response
    {
        // Ajout d'un message flash
        $this->addFlash('success', 'Votre article a été modifié');

        return $this->render('back-office/articles/update.html.twig');
    }

    /**
     * @Route("/{slug}/suppression")
     * @return Response
     */
    public function delete(): Response
    {
        // Ajout d'un message flash
        $this->addFlash('danger', 'Votre article a été supprimé');

        return $this->render('back-office/articles/delete.html.twig');
    }
}
