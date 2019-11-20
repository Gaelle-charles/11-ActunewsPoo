<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController
{
    /**
     *La fonction home, est une "action" -> qui est une page
     * -------------
     * Page d'accueil du site
     */
    public function home ()
    {
        //echo '<h1>PAGE ACCUEIL | CONTROLLER</h1>';
        //return new Response('<h1>PAGE ACCUEIL | CONTROLLER | RESPONSE</h1>');
        return $this->render('default/home.html.twig');


    }
    /**
     *Page permettant de lister les articles d'une catégorie
     */
    public function category ()
    {
        echo '<h1>PAGE CATEGORIE | CONTROLLER</h1>';
        return new Response('<h1>PAGE CATEGORIE | CONTROLLER | RESPONSE</h1>');
    }
    /**
     *Page permettant d'afficher un article
     */
    public function article ()
    {
        echo '<h1>PAGE ARTICLE | CONTROLLER</h1>';
        return new Response('<h1>PAGE ARTICLE | CONTROLLER | RESPONSE</h1>');
    }
}