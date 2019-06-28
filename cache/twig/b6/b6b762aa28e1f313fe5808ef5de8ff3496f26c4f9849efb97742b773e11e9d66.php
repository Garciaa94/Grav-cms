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

/* partials/header.html.twig */
class __TwigTemplate_3f895fee75c5a5cbff408ff948b6329ca939c3ca218f38c57c609e5d2371813f extends \Twig\Template
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
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header_image", [])) {
            // line 2
            echo "    ";
            $context["style"] = ((" style=\"background-image: url('" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header_image", []), [], "array"), "cache", []), "url", [], "method")) . "')\"");
        } elseif ($this->getAttribute(        // line 3
($context["theme_config"] ?? null), "default_header_image", [])) {
            // line 4
            echo "    ";
            $context["style"] = ((" style=\"background-image: url('" . $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(("theme://img/" . $this->getAttribute(($context["theme_config"] ?? null), "default_header_image", [])))) . "')\"");
        } else {
            // line 6
            echo "    ";
            $context["style"] = "";
        }
        // line 8
        echo "
<header class=\"intro-header\"";
        // line 9
        echo ($context["style"] ?? null);
        echo ">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                <div class=\"site-heading\">
                    <h1>";
        // line 14
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "</h1>
                    ";
        // line 15
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "subheading", [])) {
            // line 16
            echo "                    <hr class=\"small\">
                    <span class=\"subheading\">";
            // line 17
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "subheading", []);
            echo "</span>
                    ";
        }
        // line 19
        echo "                </div>
            </div>
        </div>
    </div>
</header>
";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 19,  65 => 17,  62 => 16,  60 => 15,  56 => 14,  48 => 9,  45 => 8,  41 => 6,  37 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if page.header.header_image %}
    {% set style = ' style=\"background-image: url(\\'' ~ page.media.images[page.header.header_image].cache.url()  ~ '\\')\"' %}
{% elseif theme_config.default_header_image %}
    {% set style = ' style=\"background-image: url(\\'' ~ url('theme://img/' ~ theme_config.default_header_image)  ~ '\\')\"' %}
{% else %}
    {% set style = '' %}
{% endif %}

<header class=\"intro-header\"{{ style }}>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                <div class=\"site-heading\">
                    <h1>{{ page.title }}</h1>
                    {% if page.header.subheading %}
                    <hr class=\"small\">
                    <span class=\"subheading\">{{ page.header.subheading }}</span>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
</header>
", "partials/header.html.twig", "/var/www/html/grav/user/themes/clean-blog/templates/partials/header.html.twig");
    }
}
