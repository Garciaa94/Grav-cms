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

/* partials/showcase.html.twig */
class __TwigTemplate_4ffbe0e6075c324fe9a7903e8f3463cc57e1acb4e821ef1783a8ae7be1a2e581 extends \Twig\Template
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
        $context["showcase_image_file"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "image_file", []);
        // line 2
        $context["showcase_image_actions"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "image_actions", []);
        // line 3
        echo "
";
        // line 4
        if (($context["showcase_image_file"] ?? null)) {
            // line 5
            echo "    ";
            $context["showcase_image"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), ($context["showcase_image_file"] ?? null), [], "array");
        } else {
            // line 7
            echo "    ";
            $context["showcase_image"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []));
        }
        // line 9
        echo "
";
        // line 10
        if (($context["showcase_image"] ?? null)) {
            // line 11
            echo "    ";
            if (($context["showcase_image_actions"] ?? null)) {
                // line 12
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["showcase_image_actions"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["arg"]) {
                    // line 13
                    echo "            ";
                    $context["showcase_image"] = $this->getAttribute(($context["showcase_image"] ?? null), $context["key"], _twig_default_filter(twig_split_filter($this->env, $context["arg"], ","), []));
                    // line 14
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['arg'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 15
                echo "    ";
            } else {
                // line 16
                echo "        ";
                $context["showcase_image"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["showcase_image"] ?? null), "contrast", [0 => 20], "method"), "brightness", [0 =>  -80], "method"), "gaussianBlur", [0 => 2], "method");
                // line 17
                echo "    ";
            }
            // line 18
            echo "<section class=\"modular-row showcase ";
            echo ("bg-" . $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "style", []), "dark"));
            echo "\" style=\"background-image: url(";
            echo $this->getAttribute(($context["showcase_image"] ?? null), "url", []);
            echo ");\">
";
        } else {
            // line 20
            echo "<section class=\"modular-row box-inset-shadow showcase-text ";
            echo ("bg-" . $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "style", []), "primary"));
            echo "\">
";
        }
        // line 22
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"content text-";
        // line 25
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "text_align", []), "center");
        echo "\">
                    ";
        // line 26
        echo ($context["content"] ?? null);
        echo "
                </div>
                ";
        // line 28
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "buttons", [])) {
            // line 29
            echo "                <div class=\"buttons text-";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "buttons_align", []), "center");
            echo "\">
                    ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "buttons", []));
            foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                // line 31
                echo "                        <a href=\"";
                echo $this->getAttribute($context["button"], "url", []);
                echo "\" 
                            class=\"btn btn-";
                // line 32
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($context["button"], "size", []), "lg");
                echo " btn-";
                echo (((($this->getAttribute($context["button"], "is_outline", []) === false)) ? ("") : ("outline-")) . $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($context["button"], "style", []), $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "style", []), "light")));
                echo "\">
                            ";
                // line 33
                if ($this->getAttribute($context["button"], "icon", [])) {
                    // line 34
                    echo "                                <i class=\"fas fa-";
                    echo $this->getAttribute($context["button"], "icon", []);
                    echo "\"></i>
                            ";
                }
                // line 36
                echo "                            ";
                echo $this->getAttribute($context["button"], "text", []);
                echo "
                        </a>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "                </div>
                ";
        }
        // line 41
        echo "            </div>
        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "partials/showcase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 41,  146 => 39,  136 => 36,  130 => 34,  128 => 33,  122 => 32,  117 => 31,  113 => 30,  108 => 29,  106 => 28,  101 => 26,  97 => 25,  92 => 22,  86 => 20,  78 => 18,  75 => 17,  72 => 16,  69 => 15,  63 => 14,  60 => 13,  55 => 12,  52 => 11,  50 => 10,  47 => 9,  43 => 7,  39 => 5,  37 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set showcase_image_file = page.header.image_file %}
{% set showcase_image_actions = page.header.image_actions %}

{% if showcase_image_file %}
    {% set showcase_image = page.media.images[showcase_image_file] %}
{% else %}
    {% set showcase_image = page.media.images|first %}
{% endif %}

{% if showcase_image %}
    {% if showcase_image_actions %}
        {% for key, arg in showcase_image_actions %}
            {% set showcase_image = attribute( showcase_image, key, arg|split(',')|default([]) ) %}
        {% endfor %}
    {% else %}
        {% set showcase_image = showcase_image.contrast(20).brightness(-80).gaussianBlur(2) %}
    {% endif %}
<section class=\"modular-row showcase {{ 'bg-' ~ page.header.style|defined('dark') }}\" style=\"background-image: url({{ showcase_image.url }});\">
{% else %}
<section class=\"modular-row box-inset-shadow showcase-text {{ 'bg-' ~ page.header.style|defined('primary') }}\">
{% endif %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"content text-{{ page.header.text_align|defined('center') }}\">
                    {{ content }}
                </div>
                {% if page.header.buttons %}
                <div class=\"buttons text-{{ page.header.buttons_align|defined('center') }}\">
                    {% for button in page.header.buttons %}
                        <a href=\"{{ button.url }}\" 
                            class=\"btn btn-{{ button.size|defined('lg') }} btn-{{ (button.is_outline is same as(false) ? '' : 'outline-') ~ button.style|defined(page.header.style|defined('light')) }}\">
                            {% if button.icon %}
                                <i class=\"fas fa-{{ button.icon }}\"></i>
                            {% endif %}
                            {{ button.text }}
                        </a>
                    {% endfor %}
                </div>
                {% endif %}
            </div>
        </div>
    </div>
</section>
", "partials/showcase.html.twig", "/var/www/html/grav/user/themes/bootstrap-blog/templates/partials/showcase.html.twig");
    }
}
