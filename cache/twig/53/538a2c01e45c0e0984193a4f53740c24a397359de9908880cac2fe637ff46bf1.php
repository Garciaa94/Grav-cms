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

/* forms/field.html.twig */
class __TwigTemplate_827c92b3230776585d9942b5469f8a388b37849480bdb5ed496ff0d154a5c080 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'field' => [$this, 'block_field'],
            'contents' => [$this, 'block_contents'],
            'group' => [$this, 'block_group'],
            'input' => [$this, 'block_input'],
            'prepend' => [$this, 'block_prepend'],
            'input_attributes' => [$this, 'block_input_attributes'],
            'append' => [$this, 'block_append'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["originalValue"] = (((isset($context["originalValue"]) || array_key_exists("originalValue", $context))) ? (($context["originalValue"] ?? null)) : (($context["value"] ?? null)));
        // line 2
        $context["toggleableChecked"] = ($this->getAttribute(($context["field"] ?? null), "toggleable", []) && ( !(null === ($context["originalValue"] ?? null)) &&  !twig_test_empty(($context["originalValue"] ?? null))));
        // line 3
        $context["isDisabledToggleable"] = ($this->getAttribute(($context["field"] ?? null), "toggleable", []) &&  !($context["toggleableChecked"] ?? null));
        // line 4
        $context["value"] = (((is_object(($context["value"] ?? null)) || (null === ($context["value"] ?? null)))) ? ($this->getAttribute(($context["field"] ?? null), "default", [])) : (($context["value"] ?? null)));
        // line 5
        $context["cookie_name"] = ((("forms-" . $this->getAttribute(($context["form"] ?? null), "name", [])) . "-") . $this->getAttribute(($context["field"] ?? null), "name", []));
        // line 6
        $context["value"] = (((is_object(($context["value"] ?? null)) || (null === ($context["value"] ?? null)))) ? ((((null === $this->env->getExtension('Grav\Common\Twig\TwigExtension')->getCookie(($context["cookie_name"] ?? null)))) ? ($this->getAttribute(($context["field"] ?? null), "default", [])) : ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->getCookie(($context["cookie_name"] ?? null))))) : (($context["value"] ?? null)));
        // line 7
        $context["errors"] = $this->getAttribute($this->getAttribute(($context["form"] ?? null), "messages", []), $this->getAttribute(($context["field"] ?? null), "name", []));
        // line 8
        $context["required"] = (($context["client_side_validation"] ?? null) && twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "required", []), [0 => "on", 1 => "true", 2 => 1]));
        // line 9
        $context["autofocus"] = ((($context["inline_errors"] ?? null) == false) && twig_in_filter($this->getAttribute(($context["field"] ?? null), "autofocus", []), [0 => "on", 1 => "true", 2 => 1]));
        // line 10
        echo "
";
        // line 11
        if ((($context["inline_errors"] ?? null) && ($context["errors"] ?? null))) {
            // line 12
            echo "    ";
            $context["autofocus"] = true;
        }
        // line 14
        echo "

";
        // line 16
        $this->displayBlock('field', $context, $blocks);
    }

    public function block_field($context, array $blocks = [])
    {
        // line 17
        echo "    <div class=\"row control-group\">
        <div class=\"form-group col-xs-12 floating-label-form-group controls\">
        ";
        // line 19
        $this->displayBlock('contents', $context, $blocks);
        // line 60
        echo "        </div>
    </div>
";
    }

    // line 19
    public function block_contents($context, array $blocks = [])
    {
        // line 20
        echo "            ";
        $this->displayBlock('group', $context, $blocks);
        // line 54
        echo "            ";
        if ($this->getAttribute(($context["field"] ?? null), "description", [])) {
            // line 55
            echo "                <div class=\"form-extra-wrapper ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "size", []));
            echo " ";
            echo $this->getAttribute(($context["field"] ?? null), "wrapper_classes", []);
            echo "\">
                    <span class=\"form-description\">";
            // line 56
            echo $this->getAttribute(($context["field"] ?? null), "description", []);
            echo "</span>
                </div>
            ";
        }
        // line 59
        echo "        ";
    }

    // line 20
    public function block_group($context, array $blocks = [])
    {
        // line 21
        echo "                ";
        $this->displayBlock('input', $context, $blocks);
        // line 53
        echo "            ";
    }

    // line 21
    public function block_input($context, array $blocks = [])
    {
        // line 22
        echo "                    ";
        $this->displayBlock('prepend', $context, $blocks);
        // line 23
        echo "                    <input
                        ";
        // line 25
        echo "                        name=\"";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", [])));
        echo "\"
                        value=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_join_filter(($context["value"] ?? null), ", "), "html_attr");
        echo "\"
                        ";
        // line 28
        echo "                        ";
        $this->displayBlock('input_attributes', $context, $blocks);
        // line 43
        echo "                    />
                    ";
        // line 44
        $this->displayBlock('append', $context, $blocks);
        // line 45
        echo "                    ";
        if (($this->getAttribute(($context["form"] ?? null), "inline_errors", []) && ($context["errors"] ?? null))) {
            // line 46
            echo "                        <div class=\"form-errors\">
                            ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 48
                echo "                                <p class=\"form-message\"><i class=\"fa fa-exclamation-circle\"></i> ";
                echo $context["error"];
                echo "</p>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "                        </div>
                    ";
        }
        // line 52
        echo "                ";
    }

    // line 22
    public function block_prepend($context, array $blocks = [])
    {
    }

    // line 28
    public function block_input_attributes($context, array $blocks = [])
    {
        // line 29
        echo "                            ";
        if ($this->getAttribute(($context["field"] ?? null), "classes", [], "any", true, true)) {
            echo "class=\"";
            echo $this->getAttribute(($context["field"] ?? null), "classes", []);
            echo "\" ";
        }
        // line 30
        echo "                            ";
        if ($this->getAttribute(($context["field"] ?? null), "id", [], "any", true, true)) {
            echo "id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "id", []));
            echo "\" ";
        }
        // line 31
        echo "                            ";
        if ($this->getAttribute(($context["field"] ?? null), "style", [], "any", true, true)) {
            echo "style=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "style", []));
            echo "\" ";
        }
        // line 32
        echo "                            ";
        if (($this->getAttribute(($context["field"] ?? null), "disabled", []) || ($context["isDisabledToggleable"] ?? null))) {
            echo "disabled=\"disabled\"";
        }
        // line 33
        echo "                            ";
        if ($this->getAttribute(($context["field"] ?? null), "placeholder", [])) {
            echo "placeholder=\"";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "placeholder", []));
            echo "\"";
        }
        // line 34
        echo "                            ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "autofocus", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "autofocus=\"autofocus\"";
        }
        // line 35
        echo "                            ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "novalidate", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "novalidate=\"novalidate\"";
        }
        // line 36
        echo "                            ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "readonly", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "readonly=\"readonly\"";
        }
        // line 37
        echo "                            ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "autocomplete", []), [0 => "on", 1 => "off"])) {
            echo "autocomplete=\"";
            echo $this->getAttribute(($context["field"] ?? null), "autocomplete", []);
            echo "\"";
        }
        // line 38
        echo "                            ";
        if (twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "required", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "required=\"required\"";
        }
        // line 39
        echo "                            ";
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "pattern", [])) {
            echo "pattern=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "pattern", []));
            echo "\"";
        }
        // line 40
        echo "                            ";
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "message", [])) {
            echo "title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "message", [])));
            echo "\"
                            ";
        } elseif ($this->getAttribute(        // line 41
($context["field"] ?? null), "title", [], "any", true, true)) {
            echo "title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "title", [])));
            echo "\" ";
        }
        // line 42
        echo "                        ";
    }

    // line 44
    public function block_append($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "forms/field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 44,  263 => 42,  257 => 41,  250 => 40,  243 => 39,  238 => 38,  231 => 37,  226 => 36,  221 => 35,  216 => 34,  209 => 33,  204 => 32,  197 => 31,  190 => 30,  183 => 29,  180 => 28,  175 => 22,  171 => 52,  167 => 50,  158 => 48,  154 => 47,  151 => 46,  148 => 45,  146 => 44,  143 => 43,  140 => 28,  136 => 26,  131 => 25,  128 => 23,  125 => 22,  122 => 21,  118 => 53,  115 => 21,  112 => 20,  108 => 59,  102 => 56,  95 => 55,  92 => 54,  89 => 20,  86 => 19,  80 => 60,  78 => 19,  74 => 17,  68 => 16,  64 => 14,  60 => 12,  58 => 11,  55 => 10,  53 => 9,  51 => 8,  49 => 7,  47 => 6,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set originalValue = originalValue is defined ? originalValue : value %}
{% set toggleableChecked = field.toggleable and (originalValue is not null and originalValue is not empty) %}
{% set isDisabledToggleable = field.toggleable and not toggleableChecked %}
{% set value = (is_object(value) or value is null ? field.default : value) %}
{% set cookie_name = 'forms-' ~ form.name ~ '-' ~ field.name %}
{% set value = (is_object(value) or value is null ? (get_cookie(cookie_name) is null ? field.default : get_cookie(cookie_name)) : value) %}
{% set errors = attribute(form.messages, field.name) %}
{% set required = client_side_validation and field.validate.required in ['on', 'true', 1] %}
{% set autofocus = (inline_errors == false) and field.autofocus in ['on', 'true', 1] %}

{% if inline_errors and errors %}
    {% set autofocus = true %}
{% endif %}


{% block field %}
    <div class=\"row control-group\">
        <div class=\"form-group col-xs-12 floating-label-form-group controls\">
        {% block contents %}
            {% block group %}
                {% block input %}
                    {% block prepend %}{% endblock prepend %}
                    <input
                        {# required attribute structures #}
                        name=\"{{ (scope ~ field.name)|fieldName }}\"
                        value=\"{{ value|join(', ')|e('html_attr') }}\"
                        {# input attribute structures #}
                        {% block input_attributes %}
                            {% if field.classes is defined %}class=\"{{ field.classes }}\" {% endif %}
                            {% if field.id is defined %}id=\"{{ field.id|e }}\" {% endif %}
                            {% if field.style is defined %}style=\"{{ field.style|e }}\" {% endif %}
                            {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
                            {% if field.placeholder %}placeholder=\"{{ field.placeholder|t }}\"{% endif %}
                            {% if field.autofocus in ['on', 'true', 1] %}autofocus=\"autofocus\"{% endif %}
                            {% if field.novalidate in ['on', 'true', 1] %}novalidate=\"novalidate\"{% endif %}
                            {% if field.readonly in ['on', 'true', 1] %}readonly=\"readonly\"{% endif %}
                            {% if field.autocomplete in ['on', 'off'] %}autocomplete=\"{{ field.autocomplete }}\"{% endif %}
                            {% if field.validate.required in ['on', 'true', 1] %}required=\"required\"{% endif %}
                            {% if field.validate.pattern %}pattern=\"{{ field.validate.pattern|e }}\"{% endif %}
                            {% if field.validate.message %}title=\"{{ field.validate.message|t|e }}\"
                            {% elseif field.title is defined %}title=\"{{ field.title|t|e }}\" {% endif %}
                        {% endblock %}
                    />
                    {% block append %}{% endblock append %}
                    {% if form.inline_errors and errors %}
                        <div class=\"form-errors\">
                            {% for error in errors %}
                                <p class=\"form-message\"><i class=\"fa fa-exclamation-circle\"></i> {{ error }}</p>
                            {% endfor %}
                        </div>
                    {% endif %}
                {% endblock %}
            {% endblock %}
            {% if field.description %}
                <div class=\"form-extra-wrapper {{ field.size|e }} {{ field.wrapper_classes }}\">
                    <span class=\"form-description\">{{ field.description|raw }}</span>
                </div>
            {% endif %}
        {% endblock %}
        </div>
    </div>
{% endblock %}
", "forms/field.html.twig", "/var/www/html/grav/user/themes/clean-blog/templates/forms/field.html.twig");
    }
}
