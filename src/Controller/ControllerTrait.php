<?php


namespace App\Controller;


use http\Env\Response;
use Twig\Environment;

trait ControllerTrait
{
    /**
     *Le but de cette fonction sera de retourner à l'utilisateur une page
     * on utilise twig pour cela
     */
    protected function render(string $view, array $parameters = []): Response
    {
        # 1.Récupération de Twig dans le container
        /** @var Environment $twig */
        $twig = $this->container->get('twig');
        $content = $twig->render($view, $parameters);

        # 2. Fabrication d'une réponse
        $response = new Response();

        # 3. Affectation du contenu de twig
        $response->setContent($content);

        # 4. Retour de la réponse au controleur
        return $response;


    }
}