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

/* forms/fields/presentation_dropdown/presentation_dropdown.html.twig */
class __TwigTemplate_81afbc7f90deeff709555f73e79546be3cfd9989b76a55743152ef539ba1d85a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'field' => [$this, 'block_field'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/presentation_dropdown/presentation_dropdown.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_field($context, array $blocks = [])
    {
        // line 27
        echo "    ";
        $context["self"] = $this;
        // line 28
        echo "    ";
        if (($this->getAttribute(($context["field"] ?? null), "fields", []) && ($this->getAttribute(($context["context"] ?? null), "modified", []) != null))) {
            // line 29
            echo "        <div class=\"button-group\">
        ";
            // line 30
            $context["route"] = (($context["presentation_base_url"] ?? null) . $this->getAttribute(($context["context"] ?? null), "route", []));
            // line 31
            echo "        ";
            $context["first"] = twig_first($this->env, $this->getAttribute(($context["field"] ?? null), "fields", []));
            // line 32
            echo "        ";
            echo $context["self"]->getquery($this->getAttribute(($context["first"] ?? null), "label", []), ($context["route"] ?? null), $this->getAttribute(($context["first"] ?? null), "mode", []));
            echo "
        ";
            // line 33
            if ((twig_length_filter($this->env, $this->getAttribute(($context["field"] ?? null), "fields", [])) > 1)) {
                // line 34
                echo "            <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                <i class=\"fa fa-caret-down\"></i>
            </button>
            <ul class=\"dropdown-menu\">
            ";
                // line 38
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
                    // line 39
                    echo "            ";
                    if (($this->getAttribute($context["loop"], "index", []) > 1)) {
                        // line 40
                        echo "                <li>";
                        echo $context["self"]->getquery($this->getAttribute($context["child"], "label", []), ($context["route"] ?? null), $this->getAttribute($context["child"], "mode", []));
                        echo "</li>
            ";
                    }
                    // line 42
                    echo "            ";
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
                // line 43
                echo "            </ul>
        ";
            }
            // line 45
            echo "        </div>
    ";
        }
    }

    // line 3
    public function getquery($__label__ = null, $__href__ = null, $__mode__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "href" => $__href__,
            "mode" => $__mode__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 4
            echo "    ";
            if ((isset($context["mode"]) || array_key_exists("mode", $context))) {
                // line 5
                echo "        ";
                if ((($context["mode"] ?? null) == "view_notes")) {
                    // line 6
                    echo "            ";
                    $context["query"] = "?showNotes=true";
                    // line 7
                    echo "        ";
                } elseif ((($context["mode"] ?? null) == "admin")) {
                    // line 8
                    echo "            ";
                    $context["query"] = "?admin=true";
                    // line 9
                    echo "        ";
                } elseif ((($context["mode"] ?? null) == "admin_notes")) {
                    // line 10
                    echo "            ";
                    $context["query"] = "?admin=true&showNotes=true";
                    // line 11
                    echo "        ";
                } elseif ((($context["mode"] ?? null) == "print")) {
                    // line 12
                    echo "            ";
                    $context["query"] = "?print-pdf=true";
                    // line 13
                    echo "        ";
                } elseif ((($context["mode"] ?? null) == "print_notes")) {
                    // line 14
                    echo "            ";
                    $context["query"] = "?print-pdf=true&showNotes=true";
                    // line 15
                    echo "        ";
                } elseif ((($context["mode"] ?? null) == "print_styled")) {
                    // line 16
                    echo "            ";
                    $context["query"] = "?print-pdf=true&theme=preset";
                    // line 17
                    echo "        ";
                } elseif ((($context["mode"] ?? null) == "print_styled_notes")) {
                    // line 18
                    echo "            ";
                    $context["query"] = "?print-pdf=true&theme=preset&showNotes=true";
                    // line 19
                    echo "        ";
                } else {
                    // line 20
                    echo "            ";
                    $context["query"] = "";
                    // line 21
                    echo "        ";
                }
                // line 22
                echo "    ";
            }
            // line 23
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, ($context["href"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, ($context["query"] ?? null), "html", null, true);
            echo "\" target=\"_blank\" class=\"button\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, ($context["label"] ?? null)), "html_attr");
            echo "</a>
";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "forms/fields/presentation_dropdown/presentation_dropdown.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 23,  187 => 22,  184 => 21,  181 => 20,  178 => 19,  175 => 18,  172 => 17,  169 => 16,  166 => 15,  163 => 14,  160 => 13,  157 => 12,  154 => 11,  151 => 10,  148 => 9,  145 => 8,  142 => 7,  139 => 6,  136 => 5,  133 => 4,  119 => 3,  113 => 45,  109 => 43,  95 => 42,  89 => 40,  86 => 39,  69 => 38,  63 => 34,  61 => 33,  56 => 32,  53 => 31,  51 => 30,  48 => 29,  45 => 28,  42 => 27,  39 => 26,  29 => 1,);
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

{% macro query(label, href, mode) %}
    {% if mode is defined %}
        {% if mode == 'view_notes' %}
            {% set query = '?showNotes=true' %}
        {% elseif mode == 'admin' %}
            {% set query = '?admin=true' %}
        {% elseif mode == 'admin_notes' %}
            {% set query = '?admin=true&showNotes=true' %}
        {% elseif mode == 'print' %}
            {% set query = '?print-pdf=true' %}
        {% elseif mode == 'print_notes' %}
            {% set query = '?print-pdf=true&showNotes=true' %}
        {% elseif mode == 'print_styled' %}
            {% set query = '?print-pdf=true&theme=preset' %}
        {% elseif mode == 'print_styled_notes' %}
            {% set query = '?print-pdf=true&theme=preset&showNotes=true' %}
        {% else %}
            {% set query = '' %}
        {% endif %}
    {% endif %}
    <a href=\"{{ href }}{{ query }}\" target=\"_blank\" class=\"button\">{{ label|t|e('html_attr') }}</a>
{% endmacro %}

{% block field %}
    {% import _self as self %}
    {% if field.fields and context.modified != null %}
        <div class=\"button-group\">
        {% set route = presentation_base_url ~ context.route %}
        {% set first = field.fields|first %}
        {{ self.query(first.label, route, first.mode) }}
        {% if field.fields|length > 1 %}
            <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                <i class=\"fa fa-caret-down\"></i>
            </button>
            <ul class=\"dropdown-menu\">
            {% for child in field.fields %}
            {% if loop.index > 1 %}
                <li>{{ self.query(child.label, route, child.mode) }}</li>
            {% endif %}
            {% endfor %}
            </ul>
        {% endif %}
        </div>
    {% endif %}
{% endblock %}", "forms/fields/presentation_dropdown/presentation_dropdown.html.twig", "/var/www/html/grav/user/plugins/presentation/templates/forms/fields/presentation_dropdown/presentation_dropdown.html.twig");
    }
}
