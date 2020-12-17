<?php

/* common/footer.twig */
class __TwigTemplate_d6d102d00bc7548a5b62d35b6739b5c3f54a7de87afc2c17ccd48cef948de285 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<footer>
  <div class=\"container\"><a href=\"http://www.opencart.com\" target=\"_blank\">";
        // line 2
        echo (isset($context["text_project"]) ? $context["text_project"] : null);
        echo "</a>|<a href=\"http://www.opencart.com/index.php?route=documentation/introduction\" target=\"_blank\">";
        echo (isset($context["text_documentation"]) ? $context["text_documentation"] : null);
        echo "</a>|<a href=\"http://forum.opencart.com\" target=\"_blank\">";
        echo (isset($context["text_support"]) ? $context["text_support"] : null);
        echo "</a><br />
    </div>
</footer>
</body></html>";
    }

    public function getTemplateName()
    {
        return "common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
/* <footer>*/
/*   <div class="container"><a href="http://www.opencart.com" target="_blank">{{ text_project }}</a>|<a href="http://www.opencart.com/index.php?route=documentation/introduction" target="_blank">{{ text_documentation }}</a>|<a href="http://forum.opencart.com" target="_blank">{{ text_support }}</a><br />*/
/*     </div>*/
/* </footer>*/
/* </body></html>*/
