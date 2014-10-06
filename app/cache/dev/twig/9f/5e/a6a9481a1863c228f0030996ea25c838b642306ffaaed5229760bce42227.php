<?php

/* AcmeTestBundle:Symptom:cond.html.twig */
class __TwigTemplate_9f5ea6a9481a1863c228f0030996ea25c838b642306ffaaed5229760bce42227 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeTestBundle::home.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeTestBundle::home.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "AcmeTestBundle:Products:index";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<h1>Welcome to the Products:index page</h1>
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "    <h2> List Conditions & Symptoms</h2>
    
    ";
        // line 12
        if (((isset($context["conditionsCnt"]) ? $context["conditionsCnt"] : $this->getContext($context, "conditionsCnt")) > 0)) {
            // line 13
            echo "        <ul>
        ";
            // line 14
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["conditions"]) ? $context["conditions"] : $this->getContext($context, "conditions")));
            foreach ($context['_seq'] as $context["_key"] => $context["condition"]) {
                // line 15
                echo "                    
                      <li>";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["condition"]) ? $context["condition"] : $this->getContext($context, "condition")), "name"), "html", null, true);
                echo "</li>
                      
                           ";
                // line 18
                if (($this->getAttribute($this->getAttribute((isset($context["condition"]) ? $context["condition"] : $this->getContext($context, "condition")), "symptoms"), "count") > 0)) {
                    // line 19
                    echo "                            <li style=\"list-style-type:none;\"><ul>
                                ";
                    // line 20
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["condition"]) ? $context["condition"] : $this->getContext($context, "condition")), "symptoms"));
                    foreach ($context['_seq'] as $context["_key"] => $context["symptom"]) {
                        // line 21
                        echo "                                    <li>";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["symptom"]) ? $context["symptom"] : $this->getContext($context, "symptom")), "name"), "html", null, true);
                        echo "</li>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['symptom'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 23
                    echo "                            </ul></li>
                           ";
                }
                // line 25
                echo "                           
                       
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['condition'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "        </ul>    
    ";
        }
    }

    public function getTemplateName()
    {
        return "AcmeTestBundle:Symptom:cond.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 28,  90 => 25,  86 => 23,  77 => 21,  73 => 20,  70 => 19,  68 => 18,  63 => 16,  60 => 15,  56 => 14,  53 => 13,  51 => 12,  47 => 10,  44 => 9,  39 => 6,  36 => 5,  30 => 3,);
    }
}
