<?php

namespace Store\AlbumBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('StoreAlbumBundle:Default:index.html.twig', array('name' => $name));
    }
}
