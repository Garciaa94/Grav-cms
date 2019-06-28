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

/* partials/partial_item.html.twig */
class __TwigTemplate_dcfb139fe6b04b5194e8a0ac0b817ec646e2293313caedd139a0588ae50fe558 extends \Twig\Template
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
        $context["header_image_file"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "image_file", []);
        // line 2
        if (($context["header_image_file"] ?? null)) {
            // line 3
            echo "    ";
            $context["header_image_media"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), ($context["header_image_file"] ?? null), [], "array");
        } else {
            // line 5
            echo "    ";
            $context["header_image_media"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []));
        }
        // line 7
        echo "
<div class=\"item-heading\">
\t<div class=\"row\">
\t\t<div class=\"col\">
\t\t\t<time data-toggle=\"tooltip\" title=\"";
        // line 11
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "pages", []), "dateformat", []), "long", []));
        echo "\" class=\"text-secondary\"
\t\t\t\tdatetime=\"";
        // line 12
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), "c");
        echo "\">
\t\t\t\t<small><i class=\"far fa-clock\"></i>&nbsp;";
        // line 13
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "pages", []), "dateformat", []), "short", []));
        echo "</small>
\t\t\t</time>
\t\t</div>
\t\t";
        // line 16
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "readingtime", []), "enabled", [])) {
            // line 17
            echo "\t\t\t<div class=\"col text-right readingtime\">
\t\t\t\t<small data-toggle=\"tooltip\" title=\"";
            // line 18
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "BOOTSTRAP_BLOG.ITEM.READING_TIME");
            echo "\" class=\"text-secondary\"><i class=\"fas fa-book-reader\"></i> ";
            echo call_user_func_array($this->env->getFilter('readingtime')->getCallable(), [$this->getAttribute(($context["page"] ?? null), "content", [])]);
            echo "</small>
\t\t\t</div>
\t\t";
        }
        // line 21
        echo "\t</div>
\t<h2 class=\"item-title\">
\t\t";
        // line 23
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "link", [])) {
            // line 24
            echo "\t\t\t<a class=\"btn btn-outline-secondary\" href=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "link", []);
            echo "\" target=\"_blank\"><i class=\"fas fa-link fa-md\"></i></a>
\t\t";
        }
        // line 26
        echo "\t\t";
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "
\t</h2>
\t<div class=\"item-categories\">
\t\t";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "category", []));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 30
            echo "\t\t\t<a data-toggle=\"tooltip\" title=\"";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "BOOTSTRAP_BLOG.TAXONOMY.SEE_OTHER_PAGES_OF", twig_capitalize_string_filter($this->env, $context["category"]));
            echo "\"
\t\t\tclass=\"badge badge-pill badge-";
            // line 31
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "style", []), "secondary");
            echo " text-uppercase font-weight-normal\"
\t\t\thref=\"";
            // line 32
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter($this->getAttribute(($context["parent"] ?? null), "url", []), "/");
            echo "/category";
            echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", []);
            echo $context["category"];
            echo "\">";
            echo $context["category"];
            echo "</a>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "\t</div>
</div>
";
        // line 36
        if ((($context["header_image_media"] ?? null) && $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "item", []), "featured_image", []))) {
            // line 37
            echo "\t<div class=\"featured-image text-";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header_image_align", []), "center");
            echo "\">
\t\t";
            // line 38
            echo $this->getAttribute(($context["header_image_media"] ?? null), "html", []);
            echo "
\t</div>
";
        }
        // line 41
        echo "<div class=\"item-content text-justify\">
    ";
        // line 42
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
</div>
<div class=\"btn-toolbar justify-content-between\" role=\"toolbar\" aria-label=\"Item toolbar buttons\">
    ";
        // line 45
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "tag", [])) {
            // line 46
            echo "      <div class=\"item-tags d-inline-block\">
        <i class=\"fas fa-tags text-";
            // line 47
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "style", []), "primary");
            echo "\"></i> 
\t\t";
            // line 48
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "BOOTSTRAP_BLOG.TAXONOMY.TAGS");
            echo ":
          ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "tag", []));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 50
                echo "            <a class=\"btn btn-sm ";
                echo ("btn-outline-" . $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "style", []), "dark"));
                echo "\"
               href=\"";
                // line 51
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter($this->getAttribute(($context["parent"] ?? null), "url", []), "/");
                echo "/tag";
                echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", []);
                echo $context["tag"];
                echo "\">";
                echo $context["tag"];
                echo "</a>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "      </div>
    ";
        }
        // line 55
        echo "\t<div class=\"btn-group\">
\t\t";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "buttons", []));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 57
            echo "\t\t\t<a href=\"";
            echo (((is_string($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $this->getAttribute($context["button"], "url", [])) && is_string($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = "http") && ('' === $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 || 0 === strpos($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144)))) ? ($this->getAttribute($context["button"], "url", [])) : ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc($this->getAttribute($context["button"], "url", []))));
            echo "\"
\t\t\tclass=\"btn ";
            // line 58
            echo ("btn-outline-" . $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "style", []), "dark"));
            echo "\">
\t\t\t\t";
            // line 59
            if ($this->getAttribute($context["button"], "icon", [])) {
                // line 60
                echo "\t\t\t\t<i class=\"fas fa-";
                echo $this->getAttribute($context["button"], "icon", []);
                echo "\"></i>
\t\t\t\t";
            }
            // line 62
            echo "\t\t\t\t";
            echo $this->getAttribute($context["button"], "text", []);
            echo "
\t\t\t</a>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "\t</div>
</div>

";
        // line 68
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "item", []), "show_prev_next", [])) {
            // line 69
            echo "\t<div class=\"d-flex flex-row py-3 mt-3\">
\t\t";
            // line 70
            if ( !$this->getAttribute(($context["page"] ?? null), "isLast", [])) {
                // line 71
                echo "\t\t\t<a class=\"btn ";
                echo ("btn-outline-" . $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "style", []), "primary"));
                echo "\" href=\"";
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "prevSibling", []), "url", []);
                echo "\">
\t\t\t<i class=\"fas fa-chevron-left\"></i> ";
                // line 72
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "BOOTSTRAP_BLOG.ITEM.PREVIOUS");
                echo "</a>
\t\t";
            }
            // line 74
            echo "\t\t";
            if ( !$this->getAttribute(($context["page"] ?? null), "isFirst", [])) {
                // line 75
                echo "\t\t\t<a class=\"ml-auto btn ";
                echo ("btn-outline-" . $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "style", []), "primary"));
                echo "\"
\t\t\thref=\"";
                // line 76
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "nextSibling", []), "url", []);
                echo "\">";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "BOOTSTRAP_BLOG.ITEM.NEXT");
                echo " <i class=\"fas fa-chevron-right\"></i></a>
\t\t";
            }
            // line 78
            echo "\t</div>
";
        }
        // line 80
        echo "
";
        // line 81
        if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "relatedpages", []), "enabled", []) && $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "item", []), "related_pages", [])) && (twig_length_filter($this->env, ($context["related_pages"] ?? null)) > 0))) {
            // line 82
            echo "    <div class=\"relatedpages row\">
        ";
            // line 83
            $this->loadTemplate("partials/item_relatedpages.html.twig", "partials/partial_item.html.twig", 83)->display(twig_array_merge($context, ($context["related_pages"] ?? null)));
            // line 84
            echo "    </div>
";
        }
        // line 86
        echo "
";
        // line 87
        $context["comments"] = array_merge($this->getAttribute(($context["theme_config"] ?? null), "comments", []), (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "comments", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "comments", []), [])) : ([])));
        // line 88
        if ($this->getAttribute(($context["comments"] ?? null), "enabled", [])) {
            // line 89
            echo "<div class=\"comments\">
\t";
            // line 90
            $this->loadTemplate("partials/comments.html.twig", "partials/partial_item.html.twig", 90)->display(twig_array_merge($context, ["page" => ($context["page"] ?? null), "config" => ($context["comments"] ?? null)]));
            // line 91
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/partial_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 91,  286 => 90,  283 => 89,  281 => 88,  279 => 87,  276 => 86,  272 => 84,  270 => 83,  267 => 82,  265 => 81,  262 => 80,  258 => 78,  251 => 76,  246 => 75,  243 => 74,  238 => 72,  231 => 71,  229 => 70,  226 => 69,  224 => 68,  219 => 65,  209 => 62,  203 => 60,  201 => 59,  197 => 58,  192 => 57,  188 => 56,  185 => 55,  181 => 53,  168 => 51,  163 => 50,  159 => 49,  155 => 48,  151 => 47,  148 => 46,  146 => 45,  140 => 42,  137 => 41,  131 => 38,  126 => 37,  124 => 36,  120 => 34,  107 => 32,  103 => 31,  98 => 30,  94 => 29,  87 => 26,  81 => 24,  79 => 23,  75 => 21,  67 => 18,  64 => 17,  62 => 16,  56 => 13,  52 => 12,  48 => 11,  42 => 7,  38 => 5,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set header_image_file = page.header.image_file %}
{% if header_image_file %}
    {% set header_image_media = page.media.images[header_image_file] %}
{% else %}
    {% set header_image_media = page.media.images|first %}
{% endif %}

<div class=\"item-heading\">
\t<div class=\"row\">
\t\t<div class=\"col\">
\t\t\t<time data-toggle=\"tooltip\" title=\"{{ page.date|date(config.system.pages.dateformat.long) }}\" class=\"text-secondary\"
\t\t\t\tdatetime=\"{{ page.date|date(\"c\") }}\">
\t\t\t\t<small><i class=\"far fa-clock\"></i>&nbsp;{{ page.date|date(config.system.pages.dateformat.short) }}</small>
\t\t\t</time>
\t\t</div>
\t\t{% if config.plugins.readingtime.enabled %}
\t\t\t<div class=\"col text-right readingtime\">
\t\t\t\t<small data-toggle=\"tooltip\" title=\"{{ 'BOOTSTRAP_BLOG.ITEM.READING_TIME'|t }}\" class=\"text-secondary\"><i class=\"fas fa-book-reader\"></i> {{ page.content|readingtime }}</small>
\t\t\t</div>
\t\t{% endif %}
\t</div>
\t<h2 class=\"item-title\">
\t\t{% if page.header.link %}
\t\t\t<a class=\"btn btn-outline-secondary\" href=\"{{ page.header.link }}\" target=\"_blank\"><i class=\"fas fa-link fa-md\"></i></a>
\t\t{% endif %}
\t\t{{ page.title }}
\t</h2>
\t<div class=\"item-categories\">
\t\t{% for category in page.taxonomy.category %}
\t\t\t<a data-toggle=\"tooltip\" title=\"{{ 'BOOTSTRAP_BLOG.TAXONOMY.SEE_OTHER_PAGES_OF'|t(category|capitalize) }}\"
\t\t\tclass=\"badge badge-pill badge-{{ page.header.style|defined('secondary') }} text-uppercase font-weight-normal\"
\t\t\thref=\"{{ parent.url|rtrim('/') }}/category{{ config.system.param_sep }}{{ category }}\">{{ category }}</a>
\t\t{% endfor %}
\t</div>
</div>
{% if header_image_media and theme_config.item.featured_image %}
\t<div class=\"featured-image text-{{ page.header.header_image_align|defined('center') }}\">
\t\t{{ header_image_media.html }}
\t</div>
{% endif %}
<div class=\"item-content text-justify\">
    {{ page.content }}
</div>
<div class=\"btn-toolbar justify-content-between\" role=\"toolbar\" aria-label=\"Item toolbar buttons\">
    {% if page.taxonomy.tag %}
      <div class=\"item-tags d-inline-block\">
        <i class=\"fas fa-tags text-{{ page.header.style|defined('primary') }}\"></i> 
\t\t{{ 'BOOTSTRAP_BLOG.TAXONOMY.TAGS'|t }}:
          {% for tag in page.taxonomy.tag %}
            <a class=\"btn btn-sm {{ 'btn-outline-' ~ page.header.style|defined('dark') }}\"
               href=\"{{ parent.url|rtrim('/') }}/tag{{ config.system.param_sep }}{{ tag }}\">{{ tag }}</a>
          {% endfor %}
      </div>
    {% endif %}
\t<div class=\"btn-group\">
\t\t{% for button in page.header.buttons %}
\t\t\t<a href=\"{{ button.url starts with 'http' ? button.url : url(button.url) }}\"
\t\t\tclass=\"btn {{ 'btn-outline-' ~ page.header.style|defined('dark') }}\">
\t\t\t\t{% if button.icon %}
\t\t\t\t<i class=\"fas fa-{{ button.icon }}\"></i>
\t\t\t\t{% endif %}
\t\t\t\t{{ button.text }}
\t\t\t</a>
\t\t{% endfor %}
\t</div>
</div>

{% if theme_config.item.show_prev_next %}
\t<div class=\"d-flex flex-row py-3 mt-3\">
\t\t{% if not page.isLast %}
\t\t\t<a class=\"btn {{ 'btn-outline-' ~ page.header.style|defined('primary') }}\" href=\"{{ page.prevSibling.url }}\">
\t\t\t<i class=\"fas fa-chevron-left\"></i> {{ 'BOOTSTRAP_BLOG.ITEM.PREVIOUS'|t }}</a>
\t\t{% endif %}
\t\t{% if not page.isFirst %}
\t\t\t<a class=\"ml-auto btn {{ 'btn-outline-' ~ page.header.style|defined('primary') }}\"
\t\t\thref=\"{{ page.nextSibling.url }}\">{{ 'BOOTSTRAP_BLOG.ITEM.NEXT'|t }} <i class=\"fas fa-chevron-right\"></i></a>
\t\t{% endif %}
\t</div>
{% endif %}

{% if config.plugins.relatedpages.enabled and theme_config.item.related_pages and related_pages|length > 0 %}
    <div class=\"relatedpages row\">
        {% include 'partials/item_relatedpages.html.twig' with related_pages %}
    </div>
{% endif %}

{% set comments = array_merge(theme_config.comments, page.header.comments|default({})) %}
{% if comments.enabled %}
<div class=\"comments\">
\t{% include 'partials/comments.html.twig' with {'page':page, 'config': comments} %}
</div>
{% endif %}
", "partials/partial_item.html.twig", "/var/www/html/grav/user/themes/bootstrap-blog/templates/partials/partial_item.html.twig");
    }
}
