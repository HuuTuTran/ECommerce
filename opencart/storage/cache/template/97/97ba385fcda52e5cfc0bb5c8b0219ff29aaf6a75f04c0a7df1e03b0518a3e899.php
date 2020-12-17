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

/* oc-furniture/template/common/currency.twig */
class __TwigTemplate_522d2f9790bbdbf6bdac535776b622a73958a6d15a21ed62864706b4a1957671 extends \Twig\Template
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
        if ((twig_length_filter($this->env, ($context["currencies"] ?? null)) > 1)) {
            // line 2
            echo "<div class=\"btn-group\">
  <form action=\"";
            // line 3
            echo ($context["action"] ?? null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-currency\">
    
      <button class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 6
                echo "      ";
                if ((twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 6) && (twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 6) == ($context["code"] ?? null)))) {
                    echo " <strong>";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 6);
                    echo "</strong> ";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_right", [], "any", false, false, false, 6) && (twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 6) == ($context["code"] ?? null)))) {
                    echo " <strong>";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_right", [], "any", false, false, false, 6);
                    echo "</strong> ";
                }
                // line 7
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</button>
      <ul class=\"dropdown-menu d-h\">
        ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 10
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 10)) {
                    // line 11
                    echo "        <li>
          <a class=\"currency-select btn btn-link btn-block\" type=\"button\" name=\"";
                    // line 12
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 12);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 12);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 12);
                    echo "</a>
        </li>
        ";
                } else {
                    // line 15
                    echo "        <li>
          <a class=\"currency-select btn btn-link btn-block\" type=\"button\" name=\"";
                    // line 16
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 16);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_right", [], "any", false, false, false, 16);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 16);
                    echo "</a>
        </li>
        ";
                }
                // line 19
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "      </ul>
   
    <input type=\"hidden\" name=\"code\" value=\"\" />
    <input type=\"hidden\" name=\"redirect\" value=\"";
            // line 23
            echo ($context["redirect"] ?? null);
            echo "\" />
  </form>
</div>
";
        }
        // line 26
        echo " ";
    }

    public function getTemplateName()
    {
        return "oc-furniture/template/common/currency.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 26,  115 => 23,  110 => 20,  104 => 19,  94 => 16,  91 => 15,  81 => 12,  78 => 11,  75 => 10,  71 => 9,  62 => 7,  51 => 6,  47 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oc-furniture/template/common/currency.twig", "");
    }
}
