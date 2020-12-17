<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* oc-furniture/template/common/header.twig */
class __TwigTemplate_079516b6fd9830c66501527cfc235788619b1ce9ff02d1cfdd6a0451fdbde426 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<!--<![endif]-->
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 12
        echo ($context["title"] ?? null);
        echo "</title>
<base href=\"";
        // line 13
        echo ($context["base"] ?? null);
        echo "\" />
";
        // line 14
        if (($context["description"] ?? null)) {
            // line 15
            echo "<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
";
        }
        // line 17
        if (($context["keywords"] ?? null)) {
            // line 18
            echo "<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
";
        }
        // line 20
        echo "<script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap\" rel=\"stylesheet\">
";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 26
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 26);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 26);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 26);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "<link href=\"catalog/view/theme/oc-furniture/stylesheet/stylesheet.css\" rel=\"stylesheet\">
";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 30
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "<script src=\"catalog/view/theme/oc-furniture/js/common.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/theme/oc-furniture/js/equal.js\" type=\"text/javascript\"></script>

";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 36
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 36);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 36);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 39
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "</head>
<body>
<div class=\"h-m\">
<header>
    
    
   
  <div id=\"top\" class=\"container\">
    ";
        // line 49
        echo ($context["language"] ?? null);
        echo "
       ";
        // line 50
        echo ($context["currency"] ?? null);
        echo "
    <div id=\"top-links\" class=\"nav pull-right\">
      <ul class=\"list-inline\">
        <li><a href=\"";
        // line 53
        echo ($context["contact"] ?? null);
        echo "\"><i class=\"fa fa-phone\"></i></a> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo ($context["telephone"] ?? null);
        echo "</span></li>
      </ul>
    </div>
  </div>

    
    
    
    
  <div class=\"container\">
    <div class=\"row mt-4\">
     
      <div class=\"col-sm-12  col-lg-3\">
        <div id=\"logo\">";
        // line 66
        if (($context["logo"] ?? null)) {
            echo "<a href=\"";
            echo ($context["home"] ?? null);
            echo "\"><img src=\"";
            echo ($context["logo"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"img-responsive logod\" /></a>";
        } else {
            // line 67
            echo "          <h1 class=\"so-logo-text\" ><a  href=\"";
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h1>
          ";
        }
        // line 68
        echo "</div>
      </div>
      <div class=\"col-sm-12 col-lg-6 text-right \">";
        // line 70
        echo ($context["search"] ?? null);
        echo "</div>
      <div id=\"l-nav\" class=\"col-sm-12 col-lg-3 \">
     
  
          
      <div class=\"btn-group\">
      <button class=\"btn btn-default bg-t dropdown-toggle\" data-toggle=\"dropdown\"><a  href=\"";
        // line 76
        echo ($context["account"] ?? null);
        echo "\" title=\"";
        echo ($context["text_account"] ?? null);
        echo "\" ><i class=\"fa fa-user c-fa-h\"></i></a></button>
        
          <ul class=\"dropdown-menu\">
            ";
        // line 79
        if (($context["logged"] ?? null)) {
            // line 80
            echo "            <li><a href=\"";
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a></li>
            <li><a href=\"";
            // line 81
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["text_order"] ?? null);
            echo "</a></li>
            <li><a href=\"";
            // line 82
            echo ($context["transaction"] ?? null);
            echo "\">";
            echo ($context["text_transaction"] ?? null);
            echo "</a></li>
            <li><a href=\"";
            // line 83
            echo ($context["download"] ?? null);
            echo "\">";
            echo ($context["text_download"] ?? null);
            echo "</a></li>
            <li><a href=\"";
            // line 84
            echo ($context["logout"] ?? null);
            echo "\">";
            echo ($context["text_logout"] ?? null);
            echo "</a></li>
            ";
        } else {
            // line 86
            echo "            <li><a href=\"";
            echo ($context["register"] ?? null);
            echo "\">";
            echo ($context["text_register"] ?? null);
            echo "</a></li>
            <li><a href=\"";
            // line 87
            echo ($context["login"] ?? null);
            echo "\">";
            echo ($context["text_login"] ?? null);
            echo "</a></li>
            ";
        }
        // line 89
        echo "          </ul>
       </div>
      ";
        // line 91
        echo ($context["cart"] ?? null);
        echo "</div>
    </div>
  </div>
  ";
        // line 94
        echo ($context["menu"] ?? null);
        echo " 
</header>
</div>
";
    }

    public function getTemplateName()
    {
        return "oc-furniture/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  298 => 94,  292 => 91,  288 => 89,  281 => 87,  274 => 86,  267 => 84,  261 => 83,  255 => 82,  249 => 81,  242 => 80,  240 => 79,  232 => 76,  223 => 70,  219 => 68,  211 => 67,  199 => 66,  181 => 53,  175 => 50,  171 => 49,  161 => 41,  153 => 39,  149 => 38,  138 => 36,  134 => 35,  129 => 32,  120 => 30,  116 => 29,  113 => 28,  100 => 26,  96 => 25,  89 => 20,  83 => 18,  81 => 17,  75 => 15,  73 => 14,  69 => 13,  65 => 12,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oc-furniture/template/common/header.twig", "");
    }
}
