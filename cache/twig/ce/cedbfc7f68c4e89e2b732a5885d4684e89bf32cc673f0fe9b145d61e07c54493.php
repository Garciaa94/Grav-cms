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
class __TwigTemplate_a0c7638ae54cb02fdb68e8b289c89346af24324d17300c2413252db478f90d12 extends \Twig\Template
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
            'sidebar' => [$this, 'block_sidebar'],
            'body' => [$this, 'block_body'],
            'topbar' => [$this, 'block_topbar'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'navigation' => [$this, 'block_navigation'],
            'analytics' => [$this, 'block_analytics'],
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
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", [])));
        echo "\">
<head>
    ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 42
        echo "</head>
<body class=\"searchbox-hidden ";
        // line 43
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "body_classes", []);
        echo "\" data-url=\"";
        echo $this->getAttribute(($context["page"] ?? null), "route", []);
        echo "\">
  ";
        // line 44
        $this->displayBlock('sidebar', $context, $blocks);
        // line 58
        echo "
    ";
        // line 59
        $this->displayBlock('body', $context, $blocks);
        // line 92
        echo "    ";
        $this->displayBlock('analytics', $context, $blocks);
        // line 97
        echo "
    ";
        // line 98
        $this->displayBlock('bottom', $context, $blocks);
        // line 101
        echo "
    ";
        // line 103
        echo "    ";
        $this->loadTemplate("partials/scripts.html.twig", "partials/base.html.twig", 103)->display($context);
        // line 104
        echo "
 </body>
</html>
";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
        // line 6
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 7
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo $this->getAttribute(($context["header"] ?? null), "title", []);
            echo " | ";
        }
        echo $this->getAttribute(($context["site"] ?? null), "title", []);
        echo "</title>
    ";
        // line 8
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 8)->display($context);
        // line 9
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no\" />
    <link rel=\"alternate\" type=\"application/atom+xml\" href=\"";
        // line 10
        echo ($context["base_url_absolute"] ?? null);
        echo "/feed.atom\" title=\"Atom Feed\" />
    <link rel=\"alternate\" type=\"application/rss+xml\" href=\"";
        // line 11
        echo ($context["base_url_absolute"] ?? null);
        echo "/feed.rss\" title=\"RSS Feed\" />
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 12
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.png");
        echo "\">

    ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "
    ";
        // line 27
        $this->displayBlock('javascripts', $context, $blocks);
        // line 35
        echo "
    ";
        // line 36
        $this->displayBlock('assets', $context, $blocks);
        // line 40
        echo "
    ";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 15
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css-compiled/nucleus.css", 1 => 102], "method");
        // line 16
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/custom.css", 1 => 100], "method");
        // line 17
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/font-awesome.min.css", 1 => 100], "method");
        // line 18
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/featherlight.min.css"], "method");
        // line 19
        echo "
        ";
        // line 20
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) >= 8)) && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) <= 9))) {
            // line 21
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/nucleus-ie9.css"], "method");
            // line 22
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/pure-0.5.0/grids-min.css"], "method");
            // line 23
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/html5shiv-printshiv.min.js"], "method");
            // line 24
            echo "        ";
        }
        // line 25
        echo "    ";
    }

    // line 27
    public function block_javascripts($context, array $blocks = [])
    {
        // line 28
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => 101], "method");
        // line 29
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/modernizr.custom.71422.js", 1 => 100], "method");
        // line 30
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/featherlight.min.js"], "method");
        // line 31
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/clipboard.min.js"], "method");
        // line 32
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.scrollbar.min.js"], "method");
        // line 33
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/learn.js"], "method");
        // line 34
        echo "    ";
    }

    public function block_assets($context, array $blocks = array())
    {
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->defer($this, 'assets');
    }

    // line 36
    public function block_assets_deferred($context, array $blocks = array())
    {
        // line 37
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
        ";
        // line 38
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
    ";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 44
    public function block_sidebar($context, array $blocks = [])
    {
        // line 45
        echo "  <nav id=\"sidebar\">
      <div id=\"header-wrapper\">
          <div id=\"header\">
              <a id=\"logo\" href=\"";
        // line 48
        echo (($this->getAttribute(($context["theme_config"] ?? null), "home_url", [])) ? ($this->getAttribute(($context["theme_config"] ?? null), "home_url", [])) : (($context["base_url_absolute"] ?? null)));
        echo "\">";
        $this->loadTemplate("partials/logo.html.twig", "partials/base.html.twig", 48)->display($context);
        echo "</a>
              ";
        // line 49
        if ($this->getAttribute(($context["theme_config"] ?? null), "enable_doc_versioning", [])) {
            // line 50
            echo "                ";
            $this->loadTemplate("partials/versions.html.twig", "partials/base.html.twig", 50)->display($context);
            // line 51
            echo "              ";
        }
        // line 52
        echo "              ";
        $this->loadTemplate("partials/search.html.twig", "partials/base.html.twig", 52)->display($context);
        // line 53
        echo "          </div>
      </div>
      ";
        // line 55
        $this->loadTemplate("partials/sidebar.html.twig", "partials/base.html.twig", 55)->display($context);
        // line 56
        echo "  </nav>
  ";
    }

    // line 59
    public function block_body($context, array $blocks = [])
    {
        // line 60
        echo "    <section id=\"body\">
        <div id=\"overlay\"></div>

        <div class=\"padding highlightable\">
            <a href=\"#\" id=\"sidebar-toggle\" data-sidebar-toggle><i class=\"fa fa-2x fa-bars\"></i></a>

            ";
        // line 66
        $this->displayBlock('topbar', $context, $blocks);
        // line 79
        echo "
            ";
        // line 80
        $this->displayBlock('content', $context, $blocks);
        // line 81
        echo "
            ";
        // line 82
        $this->displayBlock('footer', $context, $blocks);
        // line 87
        echo "
        </div>
        ";
        // line 89
        $this->displayBlock('navigation', $context, $blocks);
        // line 90
        echo "    </section>
    ";
    }

    // line 66
    public function block_topbar($context, array $blocks = [])
    {
        if ((($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "github", []), "position", []) == "top") || $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "breadcrumbs", []), "enabled", []))) {
            // line 67
            echo "            <div id=\"top-bar\">
                ";
            // line 68
            if ((($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "github", []), "position", []) == "top") &&  !twig_in_filter("search", $this->getAttribute(($context["page"] ?? null), "name", [])))) {
                // line 69
                echo "                <div id=\"top-github-link\">
                ";
                // line 70
                $this->loadTemplate("partials/github_link.html.twig", "partials/base.html.twig", 70)->display($context);
                // line 71
                echo "                </div>
                ";
            }
            // line 73
            echo "
                ";
            // line 74
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "breadcrumbs", []), "enabled", [])) {
                // line 75
                echo "                ";
                $this->loadTemplate("partials/breadcrumbs.html.twig", "partials/base.html.twig", 75)->display($context);
                // line 76
                echo "                ";
            }
            // line 77
            echo "            </div>
            ";
        }
    }

    // line 80
    public function block_content($context, array $blocks = [])
    {
    }

    // line 82
    public function block_footer($context, array $blocks = [])
    {
        // line 83
        echo "                ";
        if ((($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "github", []), "position", []) == "bottom") &&  !twig_in_filter("search", $this->getAttribute(($context["page"] ?? null), "name", [])))) {
            // line 84
            echo "                ";
            $this->loadTemplate("partials/github_note.html.twig", "partials/base.html.twig", 84)->display($context);
            // line 85
            echo "                ";
        }
        // line 86
        echo "            ";
    }

    // line 89
    public function block_navigation($context, array $blocks = [])
    {
    }

    // line 92
    public function block_analytics($context, array $blocks = [])
    {
        // line 93
        echo "        ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "google_analytics_code", [])) {
            // line 94
            echo "        ";
            $this->loadTemplate("partials/analytics.html.twig", "partials/base.html.twig", 94)->display($context);
            // line 95
            echo "        ";
        }
        // line 96
        echo "    ";
    }

    // line 98
    public function block_bottom($context, array $blocks = [])
    {
        // line 99
        echo "        ";
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
        return array (  372 => 99,  369 => 98,  365 => 96,  362 => 95,  359 => 94,  356 => 93,  353 => 92,  348 => 89,  344 => 86,  341 => 85,  338 => 84,  335 => 83,  332 => 82,  327 => 80,  321 => 77,  318 => 76,  315 => 75,  313 => 74,  310 => 73,  306 => 71,  304 => 70,  301 => 69,  299 => 68,  296 => 67,  292 => 66,  287 => 90,  285 => 89,  281 => 87,  279 => 82,  276 => 81,  274 => 80,  271 => 79,  269 => 66,  261 => 60,  258 => 59,  253 => 56,  251 => 55,  247 => 53,  244 => 52,  241 => 51,  238 => 50,  236 => 49,  230 => 48,  225 => 45,  222 => 44,  215 => 38,  210 => 37,  207 => 36,  198 => 34,  195 => 33,  192 => 32,  189 => 31,  186 => 30,  183 => 29,  180 => 28,  177 => 27,  173 => 25,  170 => 24,  167 => 23,  164 => 22,  161 => 21,  159 => 20,  156 => 19,  153 => 18,  150 => 17,  147 => 16,  144 => 15,  141 => 14,  136 => 40,  134 => 36,  131 => 35,  129 => 27,  126 => 26,  124 => 14,  119 => 12,  115 => 11,  111 => 10,  108 => 9,  106 => 8,  98 => 7,  95 => 6,  92 => 5,  84 => 104,  81 => 103,  78 => 101,  76 => 98,  73 => 97,  70 => 92,  68 => 59,  65 => 58,  63 => 44,  57 => 43,  54 => 42,  52 => 5,  47 => 3,  44 => 2,  42 => 1,);
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
<html lang=\"{{ grav.language.getActive ?: grav.config.site.default_lang }}\">
<head>
    {% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>
    {% include 'partials/metadata.html.twig' %}
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no\" />
    <link rel=\"alternate\" type=\"application/atom+xml\" href=\"{{ base_url_absolute}}/feed.atom\" title=\"Atom Feed\" />
    <link rel=\"alternate\" type=\"application/rss+xml\" href=\"{{ base_url_absolute}}/feed.rss\" title=\"RSS Feed\" />
    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png') }}\">

    {% block stylesheets %}
        {% do assets.addCss('theme://css-compiled/nucleus.css', 102) %}
        {% do assets.addCss('theme://css/custom.css', 100) %}
        {% do assets.addCss('theme://css/font-awesome.min.css',100) %}
        {% do assets.addCss('theme://css/featherlight.min.css') %}

        {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}
            {% do assets.addCss('theme://css/nucleus-ie9.css') %}
            {% do assets.addCss('theme://css/pure-0.5.0/grids-min.css') %}
            {% do assets.addJs('theme://js/html5shiv-printshiv.min.js') %}
        {% endif %}
    {% endblock %}

    {% block javascripts %}
        {% do assets.addJs('jquery',101) %}
        {% do assets.addJs('theme://js/modernizr.custom.71422.js',100) %}
        {% do assets.addJs('theme://js/featherlight.min.js') %}
        {% do assets.addJs('theme://js/clipboard.min.js') %}
        {% do assets.addJs('theme://js/jquery.scrollbar.min.js') %}
        {% do assets.addJs('theme://js/learn.js') %}
    {% endblock %}

    {% block assets deferred %}
        {{ assets.css()|raw }}
        {{ assets.js()|raw }}
    {% endblock %}

    {% endblock %}
</head>
<body class=\"searchbox-hidden {{ page.header.body_classes }}\" data-url=\"{{ page.route }}\">
  {% block sidebar %}
  <nav id=\"sidebar\">
      <div id=\"header-wrapper\">
          <div id=\"header\">
              <a id=\"logo\" href=\"{{ theme_config.home_url ?: base_url_absolute }}\">{% include 'partials/logo.html.twig' %}</a>
              {% if theme_config.enable_doc_versioning %}
                {% include 'partials/versions.html.twig' %}
              {% endif %}
              {% include 'partials/search.html.twig' %}
          </div>
      </div>
      {% include 'partials/sidebar.html.twig' %}
  </nav>
  {% endblock %}

    {% block body %}
    <section id=\"body\">
        <div id=\"overlay\"></div>

        <div class=\"padding highlightable\">
            <a href=\"#\" id=\"sidebar-toggle\" data-sidebar-toggle><i class=\"fa fa-2x fa-bars\"></i></a>

            {% block topbar %}{% if theme_config.github.position == 'top' or config.plugins.breadcrumbs.enabled %}
            <div id=\"top-bar\">
                {% if theme_config.github.position == 'top' and not ('search' in page.name)  %}
                <div id=\"top-github-link\">
                {% include 'partials/github_link.html.twig' %}
                </div>
                {% endif %}

                {% if config.plugins.breadcrumbs.enabled %}
                {% include 'partials/breadcrumbs.html.twig' %}
                {% endif %}
            </div>
            {% endif %}{% endblock %}

            {% block content %}{% endblock %}

            {% block footer %}
                {% if theme_config.github.position == 'bottom' and not ('search' in page.name) %}
                {% include 'partials/github_note.html.twig' %}
                {% endif %}
            {% endblock %}

        </div>
        {% block navigation %}{% endblock %}
    </section>
    {% endblock %}
    {% block analytics %}
        {% if theme_config.google_analytics_code %}
        {% include 'partials/analytics.html.twig' %}
        {% endif %}
    {% endblock %}

    {% block bottom %}
        {{ assets.js('bottom')|raw }}
    {% endblock %}

    {# added global scripts - hibbittsdesign.org #}
    {% include 'partials/scripts.html.twig' %}

 </body>
</html>
", "partials/base.html.twig", "/var/www/html/grav/user/themes/learn2-git-sync/templates/partials/base.html.twig");
    }
}
