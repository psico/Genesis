<?php

namespace Genesis\CoreBundle\Controller;

use Documents\CustomRepository\Repository;
use Genesis\CoreBundle\Document\Product;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}")
     * @Template("GenesisCoreBundle:Default:index.html.twig")
     *
     */
    public function indexAction($name)
    {
        return array('name' => $name);
    }

    /**
     * @Route("/mongo")
     * @Template()
     *
     * @return Response
     */
    public function createAction()
    {
//        for ($i = 0; $i <= 10000; $i++) {
//            $product = new Product();
//            $product->setName('A Foo Bar');
//            $product->setPrice('19.99');
//
//            /** @var Repository $dm */
//            $dm = $this->get('doctrine_mongodb')->getManager();
//            $dm->persist($product);

//            echo 'Created product id '.$product->getId() .'<br/>';
//        }
//        $dm->flush();
        return new Response('<br/><br/><br/> FIM DE TUDO');
    }

    /**
     * @Route("/mongoShow")
     * @Template()
     *
     * @return bool
     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
     */
    public function showAction()
    {
//        $product = $this->get('doctrine_mongodb')
//            ->getRepository('GenesisCoreBundle:Product')
//            ->findAll();
//            ->find($id);

//        if (!$product) {
//            throw $this->createNotFoundException('No product found for id '.$id);
//        }
//
//        echo "<pre>";
//        var_dump($product); die;

        return true;
    }
}

