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
class __TwigTemplate_cbd6ba37f9749f565e7f7d4524f021cc798bcf5e4596ea9fca3c9fc019e37303 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'assets' => [$this, 'block_assets'],
            'header' => [$this, 'block_header'],
            'header_navigation' => [$this, 'block_header_navigation'],
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
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute(($context["theme_config"] ?? null), "default_lang", [])));
        echo "\">
<head>
";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 24
        echo "</head>
<body id=\"top\" class=\"";
        // line 25
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "body_classes", []);
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "navbar", []), "sticky", [])) {
            echo " sticky";
        }
        echo "\">
";
        // line 26
        $this->displayBlock('header', $context, $blocks);
        // line 60
        echo "
<div class=\"wrapper\">
    ";
        // line 62
        $this->displayBlock('content', $context, $blocks);
        // line 63
        echo "</div>

";
        // line 65
        $this->displayBlock('footer', $context, $blocks);
        // line 77
        echo "
";
        // line 78
        if ($this->getAttribute(($context["theme_config"] ?? null), "back_to_top_button", [])) {
            // line 79
            echo "    <a id=\"back-to-top\" href=\"#\" class=\"btn btn-";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "style", []), "primary");
            echo " btn-lg back-to-top\" role=\"button\" title=\"";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "BOOTSTRAP_BLOG.RETURN_TOP_PAGE");
            echo "\" data-toggle=\"tooltip\"
       data-placement=\"left\"><span class=\"fas fa-chevron-up\"></span></a>
";
        }
        // line 82
        echo "
";
        // line 83
        $this->displayBlock('bottom', $context, $blocks);
        // line 86
        echo "</body>
</html>";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
        // line 6
        echo "    <meta charset=\"utf-8\"/>
    <title>";
        // line 7
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
        echo "</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 10
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 10)->display($context);
        // line 11
        echo "    ";
        $context["favicon"] = (($this->getAttribute(($context["theme_config"] ?? null), "favicon", [])) ? (twig_first($this->env, $this->getAttribute(($context["theme_config"] ?? null), "favicon", []))) : (["type" => "image/png", "path" => $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/logo.png")]));
        // line 12
        echo "    <link rel=\"icon\" type=\"";
        echo $this->getAttribute(($context["favicon"] ?? null), "type", []);
        echo "\" href=\"";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["favicon"] ?? null), "path", []));
        echo "\"/>
    <link rel=\"canonical\" href=\"";
        // line 13
        echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method");
        echo "\"/>

    ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "
    ";
        // line 17
        $this->displayBlock('javascripts', $context, $blocks);
        // line 18
        echo "
    ";
        // line 19
        $this->displayBlock('assets', $context, $blocks);
    }

    // line 15
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    // line 17
    public function block_javascripts($context, array $blocks = [])
    {
    }

    public function block_assets($context, array $blocks = array())
    {
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->defer($this, 'assets');
    }

    // line 19
    public function block_assets_deferred($context, array $blocks = array())
    {
        // line 20
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
        ";
        // line 21
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
    ";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 26
    public function block_header($context, array $blocks = [])
    {
        // line 27
        echo "    ";
        $context["navbarStyle"] = $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "navbar", []), "style", []);
        // line 28
        echo "    ";
        if (($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "navbar", []), "override_page_style", []) && $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "style", []))) {
            // line 29
            echo "        ";
            $context["navbarStyle"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "style", []);
            // line 30
            echo "    ";
        }
        // line 31
        echo "
    <nav class=\"navbar navbar-expand-md ";
        // line 32
        echo ("bg-" . ($context["navbarStyle"] ?? null));
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "navbar", []), "sticky", [])) {
            echo " fixed-top";
        }
        echo "\" role=\"navigation\"
        ";
        // line 33
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "navbar", []), "background_color", [])) {
            echo "style=\"background-color:";
            echo $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "navbar", []), "background_color", []);
            echo "\"";
        }
        echo ">
        <a class=\"navbar-brand\" href=\"";
        // line 34
        echo (((($context["base_url"] ?? null) == "")) ? ("/") : (($context["base_url"] ?? null)));
        echo "\">
            ";
        // line 35
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "navbar", []), "image", [])) {
            // line 36
            echo "                ";
            $context["navbar_image"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "navbar", []), "image", []));
            // line 37
            echo "                <img class=\"d-inline-block align-center\" src=\"";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["navbar_image"] ?? null), "path", []));
            echo "\" alt=\"\"/>
            ";
        }
        // line 39
        echo "            ";
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "navbar", []), "icon", [])) {
            // line 40
            echo "                <i class=\"fas fa-";
            echo $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "navbar", []), "icon", []);
            echo "\"></i>
            ";
        }
        // line 42
        echo "            ";
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "navbar", []), "display_site_name", [])) {
            // line 43
            echo "                ";
            echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "site", []), "title", []);
            echo "
            ";
        }
        // line 45
        echo "        </a>
        ";
        // line 46
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "langswitcher", []), "enabled", [])) {
            // line 47
            echo "            ";
            $this->loadTemplate("partials/langswitcher.html.twig", "partials/base.html.twig", 47)->display($context);
            // line 48
            echo "        ";
        }
        // line 49
        echo "        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#mainNavbar\" aria-controls=\"mainNavbar\" aria-expanded=\"false\"
                aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"mainNavbar\">
            ";
        // line 54
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 57
        echo "        </div>
    </nav>
";
    }

    // line 54
    public function block_header_navigation($context, array $blocks = [])
    {
        // line 55
        echo "                ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 55)->display($context);
        // line 56
        echo "            ";
    }

    // line 62
    public function block_content($context, array $blocks = [])
    {
    }

    // line 65
    public function block_footer($context, array $blocks = [])
    {
        // line 66
        echo "    <footer class=\"footer";
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "footer", []), "style", [])) {
            echo " bg-";
            echo $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "footer", []), "style", []);
        }
        echo "\">
        <div class=\"container";
        // line 67
        if ($this->getAttribute(($context["theme_config"] ?? null), "fluid_container", [])) {
            echo "-fluid";
        }
        echo "\">
            <div class=\"d-flex flex-row justify-content-center\">
                ";
        // line 69
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "footer", []), "legal", [])) {
            // line 70
            echo "                    <div class=\"footer-legal mr-auto\">";
            echo $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "footer", []), "legal", []);
            echo "</div>
                ";
        }
        // line 72
        echo "                <div class=\"footer-text\">";
        echo $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "footer", []), "text", []);
        echo "</div>
            </div>
        </div>
    </footer>
";
    }

    // line 83
    public function block_bottom($context, array $blocks = [])
    {
        // line 84
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
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
        return array (  323 => 84,  320 => 83,  310 => 72,  304 => 70,  302 => 69,  295 => 67,  287 => 66,  284 => 65,  279 => 62,  275 => 56,  272 => 55,  269 => 54,  263 => 57,  261 => 54,  254 => 49,  251 => 48,  248 => 47,  246 => 46,  243 => 45,  237 => 43,  234 => 42,  228 => 40,  225 => 39,  219 => 37,  216 => 36,  214 => 35,  210 => 34,  202 => 33,  195 => 32,  192 => 31,  189 => 30,  186 => 29,  183 => 28,  180 => 27,  177 => 26,  170 => 21,  165 => 20,  162 => 19,  152 => 17,  147 => 15,  143 => 19,  140 => 18,  138 => 17,  135 => 16,  133 => 15,  128 => 13,  121 => 12,  118 => 11,  116 => 10,  106 => 7,  103 => 6,  100 => 5,  94 => 86,  92 => 83,  89 => 82,  80 => 79,  78 => 78,  75 => 77,  73 => 65,  69 => 63,  67 => 62,  63 => 60,  61 => 26,  54 => 25,  51 => 24,  49 => 5,  44 => 3,  41 => 2,  39 => 1,);
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
<html lang=\"{{ grav.language.getActive ?: theme_config.default_lang }}\">
<head>
{% block head %}
    <meta charset=\"utf-8\"/>
    <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% include 'partials/metadata.html.twig' %}
    {% set favicon = theme_config.favicon ? theme_config.favicon|first : { type:'image/png', path: url('theme://images/logo.png') } %}
    <link rel=\"icon\" type=\"{{ favicon.type }}\" href=\"{{ url( favicon.path ) }}\"/>
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\"/>

    {% block stylesheets %}{% endblock %}

    {% block javascripts %}{% endblock %}

    {% block assets deferred %}
        {{ assets.css()|raw }}
        {{ assets.js()|raw }}
    {% endblock %}
{% endblock head %}
</head>
<body id=\"top\" class=\"{{ page.header.body_classes }}{% if theme_config.navbar.sticky %} sticky{% endif %}\">
{% block header %}
    {% set navbarStyle = theme_config.navbar.style %}
    {% if theme_config.navbar.override_page_style and page.header.style %}
        {% set navbarStyle = page.header.style %}
    {% endif %}

    <nav class=\"navbar navbar-expand-md {{ 'bg-' ~ navbarStyle}}{% if theme_config.navbar.sticky %} fixed-top{% endif %}\" role=\"navigation\"
        {% if theme_config.navbar.background_color %}style=\"background-color:{{ theme_config.navbar.background_color }}\"{% endif %}>
        <a class=\"navbar-brand\" href=\"{{ base_url == '' ? '/' : base_url }}\">
            {% if theme_config.navbar.image %}
                {% set navbar_image = theme_config.navbar.image|first %}
                <img class=\"d-inline-block align-center\" src=\"{{ url(navbar_image.path) }}\" alt=\"\"/>
            {% endif %}
            {% if theme_config.navbar.icon %}
                <i class=\"fas fa-{{ theme_config.navbar.icon }}\"></i>
            {% endif %}
            {% if theme_config.navbar.display_site_name %}
                {{ config.site.title }}
            {% endif %}
        </a>
        {% if config.plugins.langswitcher.enabled %}
            {% include 'partials/langswitcher.html.twig' %}
        {% endif %}
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#mainNavbar\" aria-controls=\"mainNavbar\" aria-expanded=\"false\"
                aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"mainNavbar\">
            {% block header_navigation %}
                {% include 'partials/navigation.html.twig' %}
            {% endblock %}
        </div>
    </nav>
{% endblock %}

<div class=\"wrapper\">
    {% block content %}{% endblock %}
</div>

{% block footer %}
    <footer class=\"footer{% if theme_config.footer.style %} bg-{{ theme_config.footer.style }}{% endif %}\">
        <div class=\"container{% if theme_config.fluid_container %}-fluid{% endif %}\">
            <div class=\"d-flex flex-row justify-content-center\">
                {% if theme_config.footer.legal %}
                    <div class=\"footer-legal mr-auto\">{{ theme_config.footer.legal|raw }}</div>
                {% endif %}
                <div class=\"footer-text\">{{ theme_config.footer.text|raw }}</div>
            </div>
        </div>
    </footer>
{% endblock %}

{% if theme_config.back_to_top_button %}
    <a id=\"back-to-top\" href=\"#\" class=\"btn btn-{{ page.header.style|defined('primary') }} btn-lg back-to-top\" role=\"button\" title=\"{{ 'BOOTSTRAP_BLOG.RETURN_TOP_PAGE'|t }}\" data-toggle=\"tooltip\"
       data-placement=\"left\"><span class=\"fas fa-chevron-up\"></span></a>
{% endif %}

{% block bottom %}
    {{ assets.js('bottom')|raw }}
{% endblock %}
</body>
</html>", "partials/base.html.twig", "/var/www/html/grav/user/themes/bootstrap-blog/templates/partials/base.html.twig");
    }
}
