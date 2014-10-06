<?php

namespace Acme\Bundle\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProductsController extends Controller
{
    public function indexAction()
    {
        $repository =   $this->getDoctrine()->getRepository("AcmeTestBundle:Cond");
        $conditions =   $repository->findAll();
        $conditionsCnt  =count($conditions);
        
        /*$category   =   new \Acme\Bundle\TestBundle\Entity\Category();
        $category->setCtgName("Main Products");
        
        $product    =   new \Acme\Bundle\TestBundle\Entity\Products();
        $product->setName("Foo");
        $product->setPrice(1000);
        $product->setDescription("T-Shirt");
        $product->setCategory($category);
        
        $em =   $this->getDoctrine()->getManager();
        $em->persist($category);
        $em->persist($product);
        $em->flush();
        */
        $repository =   $this->getDoctrine()->getRepository("AcmeTestBundle:Products");
        $products   =   $repository->findAll();
        $productsCnt=   count($products);
        
        //echo '<pre>'.print_r( $products ).'</pre>';
        //echo '<br />Products Cnt:'.$productsCnt;
        
       /*return $this->render('AcmeTestBundle:Products:index.html.twig', array(
                "conditions"=>$conditions,
                "conditionsCnt"=>$conditionsCnt
            ));   
        * 
        */
        return $this->render('AcmeTestBundle:Products:index.html.twig', array(
                "products"=>$products,
                "productsCnt"=>$productsCnt
            ));    
        
    }
    
    public function addProductAction(\Symfony\Component\HttpFoundation\Request $request){
        $products   =   new \Acme\Bundle\TestBundle\Entity\Products();
        $form       =   $this->createForm(new \Acme\Bundle\TestBundle\Form\ProductsType(), $products );
        $form->handleRequest($request);
        
        if ($form->isValid()) {
            //print_r( $form );
            //print_r( $request );u
            $em =   $this->getDoctrine()->getManager();
            $em->persist($products);
            $em->flush();
            
            return $this->redirect($this->generateUrl("index"));
        }
        
        return $this->render('AcmeTestBundle:Products:add.html.twig', array(
            'form'=>$form->createView()
        ));
    }

    
}
