<?php

namespace Akcii\AkciiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class AkciiController extends Controller
{
    public function indexAction()
    {
        return $this -> render('AkciiAkciiBundle:Akcii:index.html.twig');
    }

    public function serviceAction()
    {
        return $this -> render('AkciiAkciiBundle:Akcii:service.html.twig');
    }
}