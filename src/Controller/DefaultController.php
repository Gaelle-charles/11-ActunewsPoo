<?php

namespace App\Controller;
use App\Model\Article;
use App\Model\Category;
use App\Model\User;
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
        # 1. Récupération des Articles de la BDD
        $article = (new Article())->findAll();


        # 2. Transmission des données à la vue
        return $this->render('default/home.html.twig', [
            'articles' => $article
        ]);
    }
    /**
     *Page permettant de lister les articles d'une catégorie
     */
    public function category ()
    {
        # Récupération de l'instance de Request dans le container
        $request = $this->getParameter('request');

        # Récupération de l'instance de Request du parametre GET ['id']
        $idCategorie = $request->get('id')  ?? 1;

        # Récupération  des articles de la catégorie
        $article = new Article();
        $where = 'idCategorie = ' . $idCategorie;
        $articles = $article->findAll($where);

        //dump($article);
        return $this->render('default/category.html.twig',[
                'articles'=> $articles
            ]);
    }
    /**
     *Page permettant d'afficher un article
     */
    public function article ()
    {
        # Récupération de l'instance de Request dans le container
        $request = $this->getParameter('request');

        # Récupération de l'instance de Request du parametre GET ['id']
        $idArticle = $request->get('id')  ?? 0;

        # Récupération des articles de la catégorie
        $article = (new Article())->findOne($idArticle);
        return $this->render('default/article.html.twig',[
            'article' => $article
        ]);
    }
}