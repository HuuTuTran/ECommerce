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

/* oc-furniture/template/extension/module/featured.twig */
class __TwigTemplate_6311b4772f4c94e8e75336f7cfc4f1091895ba4848b3f3c6878270d4022335ae extends \Twig\Template
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
        echo "<h3 class=\"linetitle\"><span>";
        echo ($context["heading_title"] ?? null);
        echo "</span></h3>
<div class=\"row\">
 ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 4
            echo "  <div class=\"product-layout col-lg-3 col-md-3 col-sm-6 col-xs-6\">
    <div class=\"product-thumb transition\">
      <div class=\"image m-4\"><a href=\"";
            // line 6
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 6);
            echo "\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 6);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 6);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 6);
            echo "\" class=\"img-responsive\" /></a></div>
      <div class=\"caption equal text-center\">
        <h4><a href=\"";
            // line 8
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 8);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 8);
            echo "</a></h4>
        ";
            // line 9
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 9)) {
                // line 10
                echo "        <div class=\"rating\">
          ";
                // line 11
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(5);
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 12
                    echo "          ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 12) < $context["i"])) {
                        // line 13
                        echo "          <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
          ";
                    } else {
                        // line 15
                        echo "          <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
          ";
                    }
                    // line 17
                    echo "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 18
                echo "        </div>
        ";
            }
            // line 20
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 20)) {
                // line 21
                echo "        <div class=\"price-b\">
            <p class=\"price\">
          ";
                // line 23
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 23)) {
                    // line 24
                    echo "          ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 24);
                    echo "
          ";
                } else {
                    // line 26
                    echo "          <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 26);
                    echo "</span> <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 26);
                    echo "</span>
          </p>
          ";
                }
                // line 29
                echo "          ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 29)) {
                    // line 30
                    echo "          <div class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 30);
                    echo "</div>
          ";
                }
                // line 32
                echo "        </div>
        ";
            }
            // line 34
            echo "      </div>
    </div>
  </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "oc-furniture/template/extension/module/featured.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 38,  137 => 34,  133 => 32,  125 => 30,  122 => 29,  113 => 26,  107 => 24,  105 => 23,  101 => 21,  98 => 20,  94 => 18,  88 => 17,  84 => 15,  80 => 13,  77 => 12,  73 => 11,  70 => 10,  68 => 9,  62 => 8,  51 => 6,  47 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oc-furniture/template/extension/module/featured.twig", "");
    }
}
