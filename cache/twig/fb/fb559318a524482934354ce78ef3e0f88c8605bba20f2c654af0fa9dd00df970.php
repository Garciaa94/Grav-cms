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

/* partials/base.html.twig */
class __TwigTemplate_3cc7cb2ebd8c587afa1680cd51186975f41d23c906183c1a397aae415d9343b1 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'navigation' => [$this, 'block_navigation'],
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'bottom' => [$this, 'block_bottom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "pages", []), "theme", []));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getLanguage", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getLanguage", [])) : ("en"));
        echo "\">
    <head>
        ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 8
        echo "    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('navigation', $context, $blocks);
        // line 13
        echo "
        ";
        // line 14
        $this->displayBlock('header', $context, $blocks);
        // line 17
        echo "
        ";
        // line 18
        $this->displayBlock('content', $context, $blocks);
        // line 19
        echo "
        ";
        // line 20
        $this->displayBlock('footer', $context, $blocks);
        // line 23
        echo "
        ";
        // line 24
        $this->displayBlock('bottom', $context, $blocks);
        // line 27
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
        // line 6
        echo "            ";
        $this->loadTemplate("partials/head.html.twig", "partials/base.html.twig", 6)->display($context);
        // line 7
        echo "        ";
    }

    // line 10
    public function block_navigation($context, array $blocks = [])
    {
        // line 11
        echo "            ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 11)->display($context);
        // line 12
        echo "        ";
    }

    // line 14
    public function block_header($context, array $blocks = [])
    {
        // line 15
        echo "            ";
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 15)->display($context);
        // line 16
        echo "        ";
    }

    // line 18
    public function block_content($context, array $blocks = [])
    {
    }

    // line 20
    public function block_footer($context, array $blocks = [])
    {
        // line 21
        echo "            ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 21)->display($context);
        // line 22
        echo "        ";
    }

    // line 24
    public function block_bottom($context, array $blocks = [])
    {
        // line 25
        echo "            ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 25,  125 => 24,  121 => 22,  118 => 21,  115 => 20,  110 => 18,  106 => 16,  103 => 15,  100 => 14,  96 => 12,  93 => 11,  90 => 10,  86 => 7,  83 => 6,  80 => 5,  74 => 27,  72 => 24,  69 => 23,  67 => 20,  64 => 19,  62 => 18,  59 => 17,  57 => 14,  54 => 13,  52 => 10,  48 => 8,  46 => 5,  41 => 3,  38 => 2,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getLanguage ?: 'en' }}\">
    <head>
        {% block head %}
            {% include 'partials/head.html.twig' %}
        {% endblock %}
    </head>
    <body>
        {% block navigation %}
            {% include 'partials/navigation.html.twig' %}
        {% endblock %}

        {% block header %}
            {% include 'partials/header.html.twig' %}
        {% endblock %}

        {% block content %}{% endblock %}

        {% block footer %}
            {% include 'partials/footer.html.twig' %}
        {% endblock %}

        {% block bottom %}
            {{ assets.js() }}
        {% endblock %}
    </body>
</html>
", "partials/base.html.twig", "/var/www/html/grav/user/themes/clean-blog/templates/partials/base.html.twig");
    }
}
