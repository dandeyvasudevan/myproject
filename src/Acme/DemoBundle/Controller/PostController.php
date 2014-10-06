<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PostController extends Controller
{
    public function getListAction()
    {
        $repository =   $this->getDoctrine()->getRepository("AcmeDemoBundle:Product");
        $products   =   $repository->findAll();
        
        //print_r($products);
        /*foreach($products as $product){
            echo $product->getName();
        }*/
        
        return $this->render('AcmeDemoBundle:Post:list_posts.html.twig', array(
                "products"=>$products
            ));    
        
    }
    
    public function createAction(){
        $product = new \Acme\DemoBundle\Entity\Product();
        $product->setName("T-Shirt");
        $product->setPrice(1200);
        $product->setDescription("My first product");
        $product->setLocation("Hyderabad");
        
        $em =   $this->getDoctrine()->getManager();
        $em->persist($product);
        $em->flush();
        
        return new \Symfony\Component\HttpFoundation\Response("Created Product ID:".$product->getId());
    }

    public function randomAction($limit){
        return new \Symfony\Component\HttpFoundation\Response("<html><body>".rand(1,$limit)."</body></html>");
    }
}
