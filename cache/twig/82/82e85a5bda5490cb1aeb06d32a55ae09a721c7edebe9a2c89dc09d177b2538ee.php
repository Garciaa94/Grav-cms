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

/* partials/head.html.twig */
class __TwigTemplate_a6d52538ecc2eaf66c53f2e69d1c8a16ba48427cc8416d6a6df4ad9f48c04813 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "metadata", []));
        foreach ($context['_seq'] as $context["_key"] => $context["meta"]) {
            // line 6
            echo "    ";
            if (($this->getAttribute($context["meta"], "name", []) != "generator")) {
                // line 7
                echo "    <meta ";
                if ($this->getAttribute($context["meta"], "name", [])) {
                    echo "name=\"";
                    echo $this->getAttribute($context["meta"], "name", []);
                    echo "\" ";
                }
                if ($this->getAttribute($context["meta"], "http_equiv", [])) {
                    echo "http-equiv=\"";
                    echo $this->getAttribute($context["meta"], "http_equiv", []);
                    echo "\" ";
                }
                if ($this->getAttribute($context["meta"], "charset", [])) {
                    echo "charset=\"";
                    echo $this->getAttribute($context["meta"], "charset", []);
                    echo "\" ";
                }
                if ($this->getAttribute($context["meta"], "property", [])) {
                    echo "property=\"";
                    echo $this->getAttribute($context["meta"], "property", []);
                    echo "\" ";
                }
                if ($this->getAttribute($context["meta"], "content", [])) {
                    echo "content=\"";
                    echo $this->getAttribute($context["meta"], "content", []);
                    echo "\" ";
                }
                echo "/>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "
";
        // line 11
        if (($this->getAttribute(($context["theme_config"] ?? null), "favicon", []) != "")) {
            // line 12
            echo "<link rel=\"icon\" href=\"";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(("theme://img/" . $this->getAttribute(($context["theme_config"] ?? null), "favicon", [])), true);
            echo "\" />
";
        }
        // line 14
        echo "
";
        // line 15
        if ($this->getAttribute(($context["header"] ?? null), "robots", [])) {
            // line 16
            echo "<meta name=\"robots\" content=\"";
            echo $this->getAttribute(($context["header"] ?? null), "robots", []);
            echo "\">
";
        }
        // line 18
        echo "
<title>";
        // line 19
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
        echo "</title>

";
        // line 21
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 32
        echo "
";
        // line 33
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "

";
        // line 35
        $this->displayBlock('javascripts', $context, $blocks);
        // line 45
        echo "
";
        // line 47
        $context["site_url"] = twig_replace_filter(($context["base_url_absolute"] ?? null), [($context["base_url"] ?? null) => ""]);
        // line 48
        echo "
";
        // line 49
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header_image", [])) {
            // line 50
            echo "    ";
            $context["og_image"] = (($context["site_url"] ?? null) . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header_image", []), [], "array"), "cache", []), "url", [], "method"));
        } elseif ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(        // line 51
($context["page"] ?? null), "media", []), "images", [])) > 0)) {
            // line 52
            echo "    ";
            $context["og_image"] = (($context["site_url"] ?? null) . $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", [])), "cache", []), "url", [], "method"));
        } else {
            // line 54
            echo "    ";
            $context["og_image"] = "";
        }
        // line 56
        echo "
<meta property=\"og:url\" content=\"";
        // line 57
        echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true], "method");
        echo "\" />
<meta property=\"og:title\" content=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html_attr");
        echo "\" />
<meta property=\"og:description\" content=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "metadata", []), "description", []), "html_attr");
        echo "\" />
";
        // line 60
        if ( !twig_test_empty(($context["og_image"] ?? null))) {
            // line 61
            echo "<meta property=\"og:image\" content=\"";
            echo ($context["og_image"] ?? null);
            echo "\" />
";
        }
    }

    // line 21
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 22
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://vendor/bootstrap/css/bootstrap.min.css"], "method");
        // line 23
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/clean-blog.min.css"], "method");
        // line 24
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://vendor/font-awesome/css/font-awesome.min.css"], "method");
        // line 25
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic"], "method");
        // line 26
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800"], "method");
        // line 27
        echo "
    ";
        // line 28
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) <= 8))) {
            // line 29
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/ie.css"], "method");
            // line 30
            echo "    ";
        }
    }

    // line 35
    public function block_javascripts($context, array $blocks = [])
    {
        // line 36
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => 101], "method");
        // line 37
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://vendor/bootstrap/js/bootstrap.min.js", 1 => 100], "method");
        // line 38
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/clean-blog.min.js"], "method");
        // line 39
        echo "
    ";
        // line 40
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) < 9))) {
            // line 41
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"], "method");
            // line 42
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"], "method");
            // line 43
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "partials/head.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 43,  224 => 42,  221 => 41,  219 => 40,  216 => 39,  213 => 38,  210 => 37,  207 => 36,  204 => 35,  199 => 30,  196 => 29,  194 => 28,  191 => 27,  188 => 26,  185 => 25,  182 => 24,  179 => 23,  176 => 22,  173 => 21,  165 => 61,  163 => 60,  159 => 59,  155 => 58,  151 => 57,  148 => 56,  144 => 54,  140 => 52,  138 => 51,  135 => 50,  133 => 49,  130 => 48,  128 => 47,  125 => 45,  123 => 35,  118 => 33,  115 => 32,  113 => 21,  104 => 19,  101 => 18,  95 => 16,  93 => 15,  90 => 14,  84 => 12,  82 => 11,  79 => 10,  45 => 7,  42 => 6,  38 => 5,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

{% for meta in page.metadata %}
    {% if meta.name != 'generator' %}
    <meta {% if meta.name %}name=\"{{ meta.name }}\" {% endif %}{% if meta.http_equiv %}http-equiv=\"{{ meta.http_equiv }}\" {% endif %}{% if meta.charset %}charset=\"{{ meta.charset }}\" {% endif %}{% if meta.property %}property=\"{{ meta.property }}\" {% endif %}{% if meta.content %}content=\"{{ meta.content }}\" {% endif %}/>
    {% endif %}
{% endfor %}

{% if theme_config.favicon != '' %}
<link rel=\"icon\" href=\"{{ url('theme://img/' ~ theme_config.favicon, true) }}\" />
{% endif %}

{% if header.robots %}
<meta name=\"robots\" content=\"{{ header.robots }}\">
{% endif %}

<title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>

{% block stylesheets %}
    {% do assets.addCss('theme://vendor/bootstrap/css/bootstrap.min.css') %}
    {% do assets.addCss('theme://css/clean-blog.min.css') %}
    {% do assets.addCss('theme://vendor/font-awesome/css/font-awesome.min.css') %}
    {% do assets.addCss('https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic') %}
    {% do assets.addCss('https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800') %}

    {% if browser.getBrowser == 'msie' and browser.getVersion <= 8 %}
        {% do assets.addCss('theme://css/ie.css') %}
    {% endif %}
{% endblock %}

{{ assets.css() }}

{% block javascripts %}
    {% do assets.addJs('jquery', 101) %}
    {% do assets.addJs('theme://vendor/bootstrap/js/bootstrap.min.js', 100) %}
    {% do assets.addJs('theme://js/clean-blog.min.js') %}

    {% if browser.getBrowser == 'msie' and browser.getVersion < 9 %}
        {% do assets.addJs('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') %}
        {% do assets.addJs('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') %}
    {% endif %}
{% endblock %}

{# Site URL is not correct if Grav is in subfolder #}
{% set site_url = base_url_absolute|replace({(base_url): ''}) %}

{% if page.header.header_image %}
    {% set og_image = site_url ~  page.media.images[page.header.header_image].cache.url() %}
{% elseif page.media.images|length > 0 %}
    {% set og_image = site_url ~  page.media.images|first.cache.url() %}
{% else %}
    {% set og_image = '' %}
{% endif %}

<meta property=\"og:url\" content=\"{{ page.url(true) }}\" />
<meta property=\"og:title\" content=\"{{ page.title|e('html_attr') }}\" />
<meta property=\"og:description\" content=\"{{ page.header.metadata.description|e('html_attr') }}\" />
{% if og_image is not empty %}
<meta property=\"og:image\" content=\"{{ og_image }}\" />
{% endif %}
", "partials/head.html.twig", "/var/www/html/grav/user/themes/clean-blog/templates/partials/head.html.twig");
    }
}
