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

/* item.html.twig */
class __TwigTemplate_1a579cd2ef0fe1c94ecc35c1dac32aaa47a044ae41fb4440e6798b92c1c63b41 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "item.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "    ";
        $context["item_columns"] = "";
        // line 5
        echo "    ";
        $context["sidebar"] = false;
        // line 6
        echo "    ";
        if (( !($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "sidebar", []), "enabled", []) === false) &&  !($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "sidebar", []), "enabled", []) === false))) {
            // line 7
            echo "        ";
            $context["sidebar"] = true;
            // line 8
            echo "        ";
            $context["item_columns"] = "col-md-8";
            // line 9
            echo "    ";
        }
        // line 10
        echo "
    <div class=\"container";
        // line 11
        if ($this->getAttribute(($context["theme_config"] ?? null), "fluid_container", [])) {
            echo "-fluid";
        }
        echo "\">
        ";
        // line 12
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "breadcrumbs", []), "enabled", [])) {
            // line 13
            echo "            ";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "item.html.twig", 13)->display($context);
            // line 14
            echo "        ";
        }
        // line 15
        echo "        <div class=\"row\">
            <div id=\"item\" class=\"item col-12 ";
        // line 16
        echo ($context["item_columns"] ?? null);
        echo "\">
                ";
        // line 17
        $this->loadTemplate("partials/partial_item.html.twig", "item.html.twig", 17)->display(twig_array_merge($context, ["parent" => $this->getAttribute(($context["page"] ?? null), "parent", []), "truncate" => false]));
        // line 18
        echo "            </div>
            ";
        // line 19
        if (($context["sidebar"] ?? null)) {
            // line 20
            echo "            <div id=\"sidebar\" class=\"col-12 col-md-4";
            if (($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "sidebar", []), "align", []) == "left")) {
                echo " order-md-first";
            }
            echo "\">
                <div class=\"sidebar-content ";
            // line 21
            if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "sidebar", []), "border", [])) {
                echo "border-";
                echo $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "sidebar", []), "border", []);
            }
            echo "\">
                    ";
            // line 22
            $this->loadTemplate("partials/sidebar.html.twig", "item.html.twig", 22)->display(twig_array_merge($context, ["blog" => $this->getAttribute(($context["page"] ?? null), "parent", [])]));
            // line 23
            echo "                </div>
            </div>
            ";
        }
        // line 26
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 26,  107 => 23,  105 => 22,  98 => 21,  91 => 20,  89 => 19,  86 => 18,  84 => 17,  80 => 16,  77 => 15,  74 => 14,  71 => 13,  69 => 12,  63 => 11,  60 => 10,  57 => 9,  54 => 8,  51 => 7,  48 => 6,  45 => 5,  42 => 4,  39 => 3,  29 => 1,);
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
    {% set item_columns = '' %}
    {% set sidebar = false %}
    {% if theme_config.sidebar.enabled is not sameas(false) and page.header.sidebar.enabled is not sameas(false) %}
        {% set sidebar = true %}
        {% set item_columns = 'col-md-8' %}
    {% endif %}

    <div class=\"container{% if theme_config.fluid_container %}-fluid{% endif %}\">
        {% if config.plugins.breadcrumbs.enabled %}
            {% include 'partials/breadcrumbs.html.twig' %}
        {% endif %}
        <div class=\"row\">
            <div id=\"item\" class=\"item col-12 {{ item_columns }}\">
                {% include 'partials/partial_item.html.twig' with {'parent':page.parent, 'truncate':false} %}
            </div>
            {% if sidebar %}
            <div id=\"sidebar\" class=\"col-12 col-md-4{% if theme_config.sidebar.align == 'left' %} order-md-first{% endif %}\">
                <div class=\"sidebar-content {% if theme_config.sidebar.border %}border-{{ theme_config.sidebar.border }}{% endif %}\">
                    {% include 'partials/sidebar.html.twig' with { 'blog':page.parent } %}
                </div>
            </div>
            {% endif %}
        </div>
    </div>
{% endblock %}", "item.html.twig", "/var/www/html/grav/user/themes/bootstrap-blog/templates/item.html.twig");
    }
}
