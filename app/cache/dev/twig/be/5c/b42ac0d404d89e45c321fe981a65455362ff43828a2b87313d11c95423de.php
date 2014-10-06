<?php

/* AcmeTestBundle::home.html.twig */
class __TwigTemplate_be5cb42ac0d404d89e45c321fe981a65455362ff43828a2b87313d11c95423de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetest/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetest/css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetest/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    </head>
    <body>
        <div class=\"container\">
            
            <div class=\"row\" style=\"margin-top:10px;\">
                ";
        // line 16
        $this->displayBlock('content', $context, $blocks);
        // line 17
        echo "            </div>
        </div>
    </body>
</html><?php
/* 
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/

";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Test Application";
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "AcmeTestBundle::home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 16,  66 => 6,  52 => 17,  50 => 16,  41 => 10,  37 => 9,  33 => 8,  28 => 6,  21 => 1,  98 => 28,  90 => 25,  86 => 23,  77 => 21,  73 => 20,  70 => 19,  68 => 18,  63 => 16,  60 => 15,  56 => 14,  53 => 13,  51 => 12,  47 => 10,  44 => 9,  39 => 6,  36 => 5,  30 => 3,);
    }
}
