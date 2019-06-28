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

/* forms/fields/presentation_button_bar/presentation_button_bar.html.twig */
class __TwigTemplate_91080b4aa205fd5293ad69573d8f00fb31d2f4f4ab2c31758ef4c665427621a8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'contents' => [$this, 'block_contents'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/presentation_button_bar/presentation_button_bar.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_contents($context, array $blocks = [])
    {
        // line 4
        echo "    <div class=\"button-bar\" style=\"margin:0;padding:0;text-align:left;background:0;z-index:2;\">";
        // line 5
        if ($this->getAttribute(($context["field"] ?? null), "fields", [])) {
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field"] ?? null), "fields", []));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 7
                if (($this->getAttribute($context["child"], "name", []) != "save")) {
                    // line 9
                    $this->loadTemplate([0 => (((("forms/fields/" . $this->getAttribute(                    // line 10
$context["child"], "type", [])) . "/") . $this->getAttribute($context["child"], "type", [])) . ".html.twig"), 1 => "forms/fields/text/text.html.twig"], "forms/fields/presentation_button_bar/presentation_button_bar.html.twig", 9)->display(twig_array_merge($context, ["field" =>                     // line 12
$context["child"], "value" => null]));
                } else {
                    // line 15
                    if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "presentation", [], "array"), "admin_async_save", []) && ($this->getAttribute(($context["context"] ?? null), "modified", []) != null))) {
                        // line 16
                        echo "                <div style=\"float:right;padding-right:1.5rem;display:flex;align-items:center;justify-content:center;\">
                    <div id=\"last-saved\" style=\"display:none;margin-right:1em;\">
                        <span>";
                        // line 18
                        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $this->getAttribute($context["child"], "prefix", [])), "html_attr");
                        echo "</span>
                        <span id=\"last-saved-value\"></span>
                    </div>
                    <div class=\"button-group\">
                        <button id=\"presentation-save\" class=\"button\" style=\"padding: 0.3rem 1.25rem 0.3rem 1rem;\"><i class=\"fa fa-bolt\"></i> ";
                        // line 22
                        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $this->getAttribute($context["child"], "label", [])), "html_attr");
                        echo "</button>
                    </div>
                </div>
                ";
                    }
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 29
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/presentation_button_bar/presentation_button_bar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 29,  83 => 22,  76 => 18,  72 => 16,  70 => 15,  67 => 12,  66 => 10,  65 => 9,  63 => 7,  46 => 6,  44 => 5,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"forms/field.html.twig\" %}

{% block contents %}
    <div class=\"button-bar\" style=\"margin:0;padding:0;text-align:left;background:0;z-index:2;\">
        {%- if field.fields -%}
        {%- for child in field.fields -%}
            {%- if child.name != 'save' -%}
            {%-
                include [
                    \"forms/fields/#{child.type}/#{child.type}.html.twig\",
                    'forms/fields/text/text.html.twig'
                ] with { field: child, value: null }
            -%}
            {%- else -%}
                {% if config.plugins['presentation'].admin_async_save and context.modified != null %}
                <div style=\"float:right;padding-right:1.5rem;display:flex;align-items:center;justify-content:center;\">
                    <div id=\"last-saved\" style=\"display:none;margin-right:1em;\">
                        <span>{{ child.prefix|t|e('html_attr') }}</span>
                        <span id=\"last-saved-value\"></span>
                    </div>
                    <div class=\"button-group\">
                        <button id=\"presentation-save\" class=\"button\" style=\"padding: 0.3rem 1.25rem 0.3rem 1rem;\"><i class=\"fa fa-bolt\"></i> {{ child.label|t|e('html_attr') }}</button>
                    </div>
                </div>
                {% endif %}
            {%- endif -%}
        {%- endfor -%}
        {%- endif -%}
    </div>
{% endblock %}", "forms/fields/presentation_button_bar/presentation_button_bar.html.twig", "/var/www/html/grav/user/plugins/presentation/templates/forms/fields/presentation_button_bar/presentation_button_bar.html.twig");
    }
}
