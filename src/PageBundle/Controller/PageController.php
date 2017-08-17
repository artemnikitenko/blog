<?php


namespace PageBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Class PageController
 * @package PageBundle\Controller
 * @Route("/page")
 */
class PageController extends Controller
{
    /**
     * @Route("/add/{type}", name="page_add")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function addAction($type = null)
    {
        echo('<pre>');
        var_dump('add');

        return $this->render('WebBundle:Page:page.html.twig');
    }

    /**
     * @Route("/{id}", name="page_view", requirements={"id" = "\d+"})
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function viewAction($id = null)
    {
        echo('<pre>');
        var_dump('view');

        return $this->render('WebBundle:Page:page.html.twig');
    }

    /**
     * @Route("/{id}/edit", name="page_edit", requirements={"id" = "\d+"})
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function editAction($id = 1)
    {
        echo('<pre>');
        var_dump('edit');
        return $this->render('WebBundle:Page:page.html.twig');
    }
}