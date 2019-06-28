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

/* partials/sidebar.html.twig */
class __TwigTemplate_53561b97fd79c07a6dad6828c6913adec489651a0f9a870c0cb89d26154b7572 extends \Twig\Template
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
        $context["feed_url"] = (((($this->getAttribute(($context["blog"] ?? null), "url", []) == "/") || ($this->getAttribute(($context["blog"] ?? null), "url", []) == ($context["base_url_relative"] ?? null)))) ? (((($context["base_url_relative"] ?? null) . "/") . $this->getAttribute(($context["blog"] ?? null), "slug", []))) : ($this->getAttribute(($context["blog"] ?? null), "url", [])));
        // line 2
        $context["new_base_url"] = ((($this->getAttribute(($context["blog"] ?? null), "url", []) == "/")) ? ("") : ($this->getAttribute(($context["blog"] ?? null), "url", [])));
        // line 3
        echo "
";
        // line 4
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "simplesearch", []), "enabled", [])) {
            // line 5
            echo "    <div class=\"sidebar-content\">
        ";
            // line 6
            $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "partials/sidebar.html.twig", 6)->display($context);
            // line 7
            echo "    </div>
";
        }
        // line 9
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "relatedpages", []), "enabled", []) && (twig_length_filter($this->env, ($context["related_pages"] ?? null)) > 0))) {
            // line 10
            echo "    <div class=\"sidebar-content\">
        <h4>";
            // line 11
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "BOOTSTRAP_BLOG.SIDEBAR.RELATED_PAGES.HEADLINE");
            echo "</h4>
        ";
            // line 12
            $this->loadTemplate("partials/relatedpages.html.twig", "partials/sidebar.html.twig", 12)->display($context);
            // line 13
            echo "    </div>
";
        }
        // line 15
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "sidebar", []), "about", []), "enabled", [])) {
            // line 16
            echo "    <div class=\"sidebar-content\">
        ";
            // line 17
            $context["about_content"] = $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "sidebar", []), "about", []);
            // line 18
            echo "        ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "sidebar", []), "about", []), "page", [])) {
                // line 19
                echo "            ";
                $context["about_content"] = $this->getAttribute(($context["page"] ?? null), "find", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "sidebar", []), "about", []), "page", [])], "method");
                // line 20
                echo "        ";
            }
            // line 21
            echo "        <h4>";
            echo $this->getAttribute(($context["about_content"] ?? null), "title", []);
            echo "</h4>
        <p>";
            // line 22
            echo $this->getAttribute(($context["about_content"] ?? null), "content", []);
            echo "</p>
    </div>
";
        }
        // line 25
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "random", []), "enabled", [])) {
            // line 26
            echo "    <div class=\"sidebar-content\">
        <h4>";
            // line 27
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "BOOTSTRAP_BLOG.SIDEBAR.RANDOM.HEADLINE");
            echo "</h4>
        <a class=\"btn btn-outline-primary\" href=\"";
            // line 28
            echo ($context["base_url_relative"] ?? null);
            echo "/random\">
            <i class=\"fas fa-retweet\"></i> 
            ";
            // line 30
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "BOOTSTRAP_BLOG.SIDEBAR.RANDOM.FEELING_LUCKY");
            echo "
        </a>
    </div>
";
        }
        // line 34
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "taxonomylist", []), "enabled", [])) {
            // line 35
            echo "    <div class=\"sidebar-content\">
        <h4>";
            // line 36
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "BOOTSTRAP_BLOG.SIDEBAR.POPULAR_TAGS.HEADLINE");
            echo "</h4>
        ";
            // line 37
            $this->loadTemplate("partials/taxonomylist.html.twig", "partials/sidebar.html.twig", 37)->display(twig_array_merge($context, ["base_url" => ($context["new_base_url"] ?? null), "taxonomy" => "tag"]));
            // line 38
            echo "    </div>
";
        }
        // line 40
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "archives", []), "enabled", [])) {
            // line 41
            echo "    <div class=\"sidebar-content\">
        <h4>";
            // line 42
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "BOOTSTRAP_BLOG.SIDEBAR.ARCHIVES.HEADLINE");
            echo "</h4>
        ";
            // line 43
            $this->loadTemplate("partials/archives.html.twig", "partials/sidebar.html.twig", 43)->display(twig_array_merge($context, ["base_url" => ($context["new_base_url"] ?? null)]));
            // line 44
            echo "    </div>
";
        }
        // line 46
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "sidebar", []), "twitter", []), "enabled", [])) {
            // line 47
            echo "    <div class=\"sidebar-content\">
        ";
            // line 48
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "https://platform.twitter.com/widgets.js", 1 => ["loading" => "async", "group" => "bottom"]], "method");
            // line 49
            echo "        <a class=\"twitter-timeline\" data-height=\"";
            echo (($this->getAttribute($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "sidebar", [], "any", false, true), "twitter", [], "any", false, true), "height", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "sidebar", [], "any", false, true), "twitter", [], "any", false, true), "height", []), 600)) : (600));
            echo "\"
           data-theme=\"";
            // line 50
            echo (($this->getAttribute($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "sidebar", [], "any", false, true), "twitter", [], "any", false, true), "theme", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "sidebar", [], "any", false, true), "twitter", [], "any", false, true), "theme", []), "light")) : ("light"));
            echo "\"
           href=\"https://twitter.com/";
            // line 51
            echo (($this->getAttribute($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "sidebar", [], "any", false, true), "twitter", [], "any", false, true), "user", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "sidebar", [], "any", false, true), "twitter", [], "any", false, true), "user", []), "twitter")) : ("twitter"));
            echo "\">
        </a>
    </div>
";
        }
        // line 55
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "feed", []), "enabled", [])) {
            // line 56
            echo "    <div class=\"sidebar-content syndicate\">
        <h4>";
            // line 57
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "BOOTSTRAP_BLOG.SIDEBAR.SYNDICATE.HEADLINE");
            echo "</h4>
        <a class=\"btn btn-outline-primary\" href=\"";
            // line 58
            echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true], "method");
            echo ".atom\"><i class=\"fa fa-rss-square\"></i> Atom 1.0</a>
        <a class=\"btn btn-outline-primary\" href=\"";
            // line 59
            echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true], "method");
            echo ".rss\"><i class=\"fa fa-rss-square\"></i> RSS</a>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 59,  173 => 58,  169 => 57,  166 => 56,  164 => 55,  157 => 51,  153 => 50,  148 => 49,  146 => 48,  143 => 47,  141 => 46,  137 => 44,  135 => 43,  131 => 42,  128 => 41,  126 => 40,  122 => 38,  120 => 37,  116 => 36,  113 => 35,  111 => 34,  104 => 30,  99 => 28,  95 => 27,  92 => 26,  90 => 25,  84 => 22,  79 => 21,  76 => 20,  73 => 19,  70 => 18,  68 => 17,  65 => 16,  63 => 15,  59 => 13,  57 => 12,  53 => 11,  50 => 10,  48 => 9,  44 => 7,  42 => 6,  39 => 5,  37 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set feed_url = blog.url == '/' or blog.url == base_url_relative ? (base_url_relative~'/'~blog.slug) : blog.url %}
{% set new_base_url = blog.url == '/' ? '' : blog.url %}

{% if config.plugins.simplesearch.enabled %}
    <div class=\"sidebar-content\">
        {% include 'partials/simplesearch_searchbox.html.twig' %}
    </div>
{% endif %}
{% if config.plugins.relatedpages.enabled and related_pages|length > 0 %}
    <div class=\"sidebar-content\">
        <h4>{{ 'BOOTSTRAP_BLOG.SIDEBAR.RELATED_PAGES.HEADLINE'|t }}</h4>
        {% include 'partials/relatedpages.html.twig' %}
    </div>
{% endif %}
{% if theme_config.sidebar.about.enabled %}
    <div class=\"sidebar-content\">
        {% set about_content = theme_config.sidebar.about %}
        {% if theme_config.sidebar.about.page %}
            {% set about_content = page.find( theme_config.sidebar.about.page ) %}
        {% endif %}
        <h4>{{ about_content.title }}</h4>
        <p>{{ about_content.content }}</p>
    </div>
{% endif %}
{% if config.plugins.random.enabled %}
    <div class=\"sidebar-content\">
        <h4>{{ 'BOOTSTRAP_BLOG.SIDEBAR.RANDOM.HEADLINE'|t }}</h4>
        <a class=\"btn btn-outline-primary\" href=\"{{ base_url_relative }}/random\">
            <i class=\"fas fa-retweet\"></i> 
            {{ 'BOOTSTRAP_BLOG.SIDEBAR.RANDOM.FEELING_LUCKY'|t }}
        </a>
    </div>
{% endif %}
{% if config.plugins.taxonomylist.enabled %}
    <div class=\"sidebar-content\">
        <h4>{{ 'BOOTSTRAP_BLOG.SIDEBAR.POPULAR_TAGS.HEADLINE'|t }}</h4>
        {% include 'partials/taxonomylist.html.twig' with {'base_url':new_base_url, 'taxonomy':'tag'} %}
    </div>
{% endif %}
{% if config.plugins.archives.enabled %}
    <div class=\"sidebar-content\">
        <h4>{{ 'BOOTSTRAP_BLOG.SIDEBAR.ARCHIVES.HEADLINE'|t }}</h4>
        {% include 'partials/archives.html.twig' with {'base_url':new_base_url} %}
    </div>
{% endif %}
{% if theme_config.sidebar.twitter.enabled %}
    <div class=\"sidebar-content\">
        {% do assets.addJs('https://platform.twitter.com/widgets.js', { loading:'async', group: 'bottom'}) %}
        <a class=\"twitter-timeline\" data-height=\"{{ theme_config.sidebar.twitter.height|default(600) }}\"
           data-theme=\"{{ theme_config.sidebar.twitter.theme|default('light') }}\"
           href=\"https://twitter.com/{{ theme_config.sidebar.twitter.user|default('twitter') }}\">
        </a>
    </div>
{% endif %}
{% if config.plugins.feed.enabled %}
    <div class=\"sidebar-content syndicate\">
        <h4>{{ 'BOOTSTRAP_BLOG.SIDEBAR.SYNDICATE.HEADLINE'|t }}</h4>
        <a class=\"btn btn-outline-primary\" href=\"{{ page.url(true) }}.atom\"><i class=\"fa fa-rss-square\"></i> Atom 1.0</a>
        <a class=\"btn btn-outline-primary\" href=\"{{ page.url(true) }}.rss\"><i class=\"fa fa-rss-square\"></i> RSS</a>
    </div>
{% endif %}
", "partials/sidebar.html.twig", "/var/www/html/grav/user/themes/bootstrap-blog/templates/partials/sidebar.html.twig");
    }
}
