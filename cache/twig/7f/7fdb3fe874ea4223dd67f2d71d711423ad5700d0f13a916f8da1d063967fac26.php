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

/* error.html.twig */
class __TwigTemplate_71e416e3ae718617101aed312c182c112de2518225c05a26e56db8a6782e3a7f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/base.html.twig", "error.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "    <div class=\"container";
        if ($this->getAttribute(($context["theme_config"] ?? null), "fluid_container", [])) {
            echo "-fluid";
        }
        echo "\">
        <div class=\"row\" style=\"height: 80vh\">
            <div class=\"col my-auto text-center\">
                <i class=\"fas fa-exclamation-triangle fa-3x text-danger py-3\"></i>
                <h1>";
        // line 8
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "ERROR");
        echo " ";
        echo $this->getAttribute(($context["header"] ?? null), "http_response_code", []);
        echo "</h1>
                <div class=\"lead py-2\">";
        // line 9
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "</div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 9,  52 => 8,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}

{% block content %}
    <div class=\"container{% if theme_config.fluid_container %}-fluid{% endif %}\">
        <div class=\"row\" style=\"height: 80vh\">
            <div class=\"col my-auto text-center\">
                <i class=\"fas fa-exclamation-triangle fa-3x text-danger py-3\"></i>
                <h1>{{ 'ERROR'|t }} {{ header.http_response_code }}</h1>
                <div class=\"lead py-2\">{{ page.content }}</div>
            </div>
        </div>
    </div>
{% endblock %}
", "error.html.twig", "/var/www/html/grav/user/themes/bootstrap-blog/templates/error.html.twig");
    }
}
