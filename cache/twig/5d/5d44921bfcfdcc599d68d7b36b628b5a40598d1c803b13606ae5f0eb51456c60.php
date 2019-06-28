<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @admin-images/logo.svg */
class __TwigTemplate_511f2f4402459bc6a6f02c8dc65b1aa771e5cd7a37e3738eb36b3b7519ad1e02 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "
<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"-15 0 216 55\" width=\"216\" height=\"55\">
\t<style>
\t\ttspan { white-space:pre }
\t\t.txt0 { font-size: 70px;fill: rgb(129,126,125);font-family: \"Deja Vu Sans\" } 
\t</style>
\t<text id=\"Garcia \" style=\"transform: matrix(1,0,0,1,-3,54)\" >
\t\t<tspan x=\"0\" y=\"0\" class=\"txt0\">Garcia</tspan>
\t</text>
</svg>";
    }

    public function getTemplateName()
    {
        return "@admin-images/logo.svg";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("
<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"-15 0 216 55\" width=\"216\" height=\"55\">
\t<style>
\t\ttspan { white-space:pre }
\t\t.txt0 { font-size: 70px;fill: rgb(129,126,125);font-family: \"Deja Vu Sans\" } 
\t</style>
\t<text id=\"Garcia \" style=\"transform: matrix(1,0,0,1,-3,54)\" >
\t\t<tspan x=\"0\" y=\"0\" class=\"txt0\">Garcia</tspan>
\t</text>
</svg>", "@admin-images/logo.svg", "/var/www/html/grav/user/plugins/admin/themes/grav/images/logo.svg");
    }
}
