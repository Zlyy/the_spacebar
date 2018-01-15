<?php
/**
 * Created by PhpStorm.
 * User: zly
 * Date: 15.01.18
 * Time: 23:45
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticleController {

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
        return new Response(sprintf('Some stuff will be here about: %s', $slug));
    }
}