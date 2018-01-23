<?php
/**
 * Created by PhpStorm.
 * User: zly
 * Date: 15.01.18
 * Time: 23:45
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends AbstractController {

    /**
     * @Route("/")
     */
    public function homepage() {
        return new Response('xD');
    }

    /**
     * @param string $slug
     * @Route("/news/{slug}")
     * @return Response
     */
    public function show(string $slug) {

        $comments = ['To jest pierwszy komentarz', 'to jest drugi', 'a to jest super partia bulwo'];

        return $this->render('article/show.html.twig',[
            'title' => ucwords(str_replace('-', ' ', $slug)),
            'comments' => $comments
        ]);
    }
}