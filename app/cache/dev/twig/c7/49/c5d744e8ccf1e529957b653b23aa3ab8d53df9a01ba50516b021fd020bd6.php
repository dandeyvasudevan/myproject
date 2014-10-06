<?php

/* AcmeTestBundle::layout.html.twig */
class __TwigTemplate_c749c5d744e8ccf1e529957b653b23aa3ab8d53df9a01ba50516b021fd020bd6 extends Twig_Template
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
            <div class=\"header\" style=\"text-align: center;\">
                <h2>Admin Module</h2>
                <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">Logout</a>
            </div>
            <hr />
            <div class=\"row\" style=\"margin-top:10px;\">
                <div class=\"col-lg-3\">
                    <div class=\"well sidebar-nav\">  
                        <ul class=\"nav nav-list\">  
                          <li class=\"nav-header\">Conditions</li>  
                          <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("cond");
        echo "\">List Conditions</a></li>  
                          <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("cond_new");
        echo "\">Add Condition</a></li>  
                          <li class=\"nav-header\">Symptoms</li>
                          <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("symptom");
        echo "\">List Symptoms</a></li>
                          <li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("symptom_new");
        echo "\">Add Symptom</a></li>
                        </ul>  
                    </div><!--/.well -->  
                </div>
                <div class=\"col-lg-9\">
                    ";
        // line 33
        $this->displayBlock('content', $context, $blocks);
        // line 34
        echo "                </div>
            </div>
        </div>
    </body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Test Application";
    }

    // line 33
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "AcmeTestBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 33,  92 => 6,  84 => 34,  82 => 33,  74 => 28,  65 => 25,  61 => 24,  50 => 16,  41 => 10,  37 => 9,  33 => 8,  21 => 1,  90 => 37,  83 => 32,  70 => 27,  64 => 22,  57 => 18,  51 => 17,  48 => 16,  44 => 15,  31 => 4,  28 => 6,);
    }
}
