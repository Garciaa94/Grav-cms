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

/* blog.html.twig */
class __TwigTemplate_f00fd8f842d7d78e408ce4538fb4af140926868a52efde44e1882f61be0260dd extends \Twig\Template
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "blog.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", [], "method");
        // line 5
        $context["dateformat"] = (($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "page", []), "dateformat", [])) ? ($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "page", []), "dateformat", [])) : ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "pages", []), "dateformat", []), "short", [])) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "pages", []), "dateformat", []), "short", [])) : ("F d, Y"))));
        // line 6
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 10
            echo "        <div class=\"post-preview\">
            <a href=\"";
            // line 11
            echo $this->getAttribute($context["post"], "url", []);
            echo "\">
                <h2 class=\"post-title\">";
            // line 12
            echo $this->getAttribute($context["post"], "title", []);
            echo "</h2>
                ";
            // line 13
            if ($this->getAttribute($this->getAttribute($context["post"], "header", []), "subheading", [])) {
                // line 14
                echo "                <h3 class=\"post-subtitle\">";
                echo $this->getAttribute($this->getAttribute($context["post"], "header", []), "subheading", []);
                echo "</h3>
                ";
            }
            // line 16
            echo "
            </a>
            <p class=\"post-meta\">";
            // line 18
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "THEME_CLEAN_BLOG.POST_BY");
            echo " ";
            echo $this->getAttribute($this->getAttribute($context["post"], "header", []), "author", []);
            echo " ";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "THEME_CLEAN_BLOG.POST_ON");
            echo " ";
            echo twig_date_format_filter($this->env, $this->getAttribute($context["post"], "date", []), ($context["dateformat"] ?? null));
            echo "</p>
        </div>
        <hr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "        ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "pagination", []), "enabled", []) && $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", []))) {
            // line 23
            echo "            ";
            $this->loadTemplate("partials/pagination.html.twig", "blog.html.twig", 23)->display(twig_array_merge($context, ["base_url" => $this->getAttribute(($context["page"] ?? null), "url", []), "pagination" => $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", [])]));
            // line 24
            echo "        ";
        }
        // line 25
        echo "        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 25,  100 => 24,  97 => 23,  94 => 22,  78 => 18,  74 => 16,  68 => 14,  66 => 13,  62 => 12,  58 => 11,  55 => 10,  51 => 9,  46 => 6,  44 => 5,  42 => 4,  39 => 3,  29 => 1,);
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
{% set collection = page.collection() %}
{% set dateformat = admin.page.dateformat ?: config.system.pages.dateformat.short ?: \"F d, Y\" %}
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
        {% for post in collection %}
        <div class=\"post-preview\">
            <a href=\"{{ post.url }}\">
                <h2 class=\"post-title\">{{ post.title }}</h2>
                {% if post.header.subheading %}
                <h3 class=\"post-subtitle\">{{ post.header.subheading }}</h3>
                {% endif %}

            </a>
            <p class=\"post-meta\">{{ 'THEME_CLEAN_BLOG.POST_BY'|t }} {{ post.header.author }} {{ 'THEME_CLEAN_BLOG.POST_ON'|t }} {{ post.date|date(dateformat) }}</p>
        </div>
        <hr>
        {% endfor %}
        {% if config.plugins.pagination.enabled and collection.params.pagination %}
            {% include 'partials/pagination.html.twig' with {'base_url':page.url, 'pagination':collection.params.pagination} %}
        {% endif %}
        </div>
    </div>
</div>
{% endblock %}
", "blog.html.twig", "/var/www/html/grav/user/themes/clean-blog/templates/blog.html.twig");
    }
}
