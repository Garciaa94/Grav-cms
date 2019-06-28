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
class __TwigTemplate_c26a78907f335c53be5ca7b4dff3d398234039191ac886ebea8ac7e9bcca0ff7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'field' => [$this, 'block_field'],
            'outer_field_classes' => [$this, 'block_outer_field_classes'],
            'contents' => [$this, 'block_contents'],
            'label' => [$this, 'block_label'],
            'global_attributes' => [$this, 'block_global_attributes'],
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
        // line 15
        $this->displayBlock('field', $context, $blocks);
    }

    public function block_field($context, array $blocks = [])
    {
        // line 16
        echo "    <div class=\"";
        echo ((($context["form_field_outer_classes"] ?? null)) ? (($context["form_field_outer_classes"] ?? null)) : ("form-group"));
        echo " ";
        echo $this->getAttribute(($context["field"] ?? null), "outerclasses", []);
        echo "
        ";
        // line 17
        if (($context["errors"] ?? null)) {
            echo " has-errors";
        }
        echo " ";
        $this->displayBlock('outer_field_classes', $context, $blocks);
        echo "\">
        ";
        // line 18
        $this->displayBlock('contents', $context, $blocks);
        // line 109
        echo "    </div>
";
    }

    // line 17
    public function block_outer_field_classes($context, array $blocks = [])
    {
    }

    // line 18
    public function block_contents($context, array $blocks = [])
    {
        // line 19
        echo "            ";
        if ( !($this->getAttribute(($context["field"] ?? null), "label", []) === false)) {
            // line 20
            echo "                <div class=\"";
            echo ((($context["form_field_outer_label_classes"] ?? null)) ? (($context["form_field_outer_label_classes"] ?? null)) : ("form-label"));
            echo " ";
            echo $this->getAttribute(($context["field"] ?? null), "labelclasses", []);
            echo "\">
                    <label class=\"";
            // line 21
            echo ((($context["form_field_label_classes"] ?? null)) ? (($context["form_field_label_classes"] ?? null)) : ("inline"));
            echo "\" ";
            if ($this->getAttribute(($context["field"] ?? null), "id", [], "any", true, true)) {
                echo "for=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "id", []));
                echo "\" ";
            }
            echo " >
                        ";
            // line 22
            $this->displayBlock('label', $context, $blocks);
            // line 41
            echo "                    </label>
                </div>
            ";
        }
        // line 44
        echo "            <div class=\"";
        echo ((($context["form_field_outer_data_classes"] ?? null)) ? (($context["form_field_outer_data_classes"] ?? null)) : ("form-data"));
        echo " ";
        echo $this->getAttribute(($context["field"] ?? null), "dataclasses", []);
        echo "\"
                ";
        // line 45
        $this->displayBlock('global_attributes', $context, $blocks);
        // line 50
        echo "            >

                ";
        // line 52
        $this->displayBlock('group', $context, $blocks);
        // line 96
        echo "                ";
        if ($this->getAttribute(($context["field"] ?? null), "description", [])) {
            // line 97
            echo "                    <div class=\"form-extra-wrapper ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "size", []));
            echo " ";
            echo $this->getAttribute(($context["field"] ?? null), "wrapper_classes", []);
            echo "\">
                        <span class=\"form-description\">
                            ";
            // line 99
            if ($this->getAttribute(($context["field"] ?? null), "markdown", [])) {
                // line 100
                echo "                                ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "description", [])), false);
                echo "
                            ";
            } else {
                // line 102
                echo "                                ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "description", []));
                echo "
                            ";
            }
            // line 104
            echo "                        </span>
                    </div>
                ";
        }
        // line 107
        echo "            </div>
        ";
    }

    // line 22
    public function block_label($context, array $blocks = [])
    {
        // line 23
        echo "                            ";
        if ($this->getAttribute(($context["field"] ?? null), "help", [])) {
            // line 24
            echo "                                ";
            if ($this->getAttribute(($context["field"] ?? null), "markdown", [])) {
                // line 25
                echo "                                    <span data-toggle=\"tooltip\" class=\"tooltip\" data-asTooltip-position=\"w\"
                                          title=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "help", [])), false));
                echo "\">";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, _twig_default_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->getAttribute(($context["field"] ?? null), "label", []), false), twig_capitalize_string_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", []))));
                echo "</span>
                                ";
            } else {
                // line 28
                echo "                                    <span data-toggle=\"tooltip\" class=\"tooltip\" data-asTooltip-position=\"w\"
                                          title=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "help", [])));
                echo "\">";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, (($this->getAttribute(($context["field"] ?? null), "label", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "label", []), twig_capitalize_string_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", [])))) : (twig_capitalize_string_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", [])))));
                echo "</span>
                                ";
            }
            // line 31
            echo "                            ";
        } else {
            // line 32
            echo "                                ";
            if ($this->getAttribute(($context["field"] ?? null), "markdown", [])) {
                // line 33
                echo "                                    ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, _twig_default_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->getAttribute(($context["field"] ?? null), "label", []), false), twig_capitalize_string_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", []))));
                echo "
                                ";
            } else {
                // line 35
                echo "                                    ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, (($this->getAttribute(($context["field"] ?? null), "label", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "label", []), twig_capitalize_string_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", [])))) : (twig_capitalize_string_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", [])))));
                echo "
                                ";
            }
            // line 37
            echo "                            ";
        }
        // line 38
        echo "
                            ";
        // line 39
        echo ((twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "required", []), [0 => "on", 1 => "true", 2 => 1])) ? ("<span class=\"required\">*</span>") : (""));
        echo "
                        ";
    }

    // line 45
    public function block_global_attributes($context, array $blocks = [])
    {
        // line 46
        echo "                    data-grav-field=\"";
        echo $this->getAttribute(($context["field"] ?? null), "type", []);
        echo "\"
                    data-grav-disabled=\"";
        // line 47
        echo (((null === ($context["originalValue"] ?? null))) ? ("true") : ("false"));
        echo "\"
                    data-grav-default=\"";
        // line 48
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["field"] ?? null), "default", [])), "html_attr");
        echo "\"
                ";
    }

    // line 52
    public function block_group($context, array $blocks = [])
    {
        // line 53
        echo "                    ";
        $this->displayBlock('input', $context, $blocks);
        // line 95
        echo "                ";
    }

    // line 53
    public function block_input($context, array $blocks = [])
    {
        // line 54
        echo "                        <div class=\"";
        echo ((($context["form_field_wrapper_classes"] ?? null)) ? (($context["form_field_wrapper_classes"] ?? null)) : ("form-input-wrapper"));
        echo " ";
        echo $this->getAttribute(($context["field"] ?? null), "size", []);
        echo " ";
        echo $this->getAttribute(($context["field"] ?? null), "wrapper_classes", []);
        echo "\">

                            ";
        // line 56
        $this->displayBlock('prepend', $context, $blocks);
        // line 57
        echo "                            <input
                                ";
        // line 59
        echo "                                name=\"";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", [])));
        echo "\"
                                value=\"";
        // line 60
        echo twig_escape_filter($this->env, twig_join_filter(($context["value"] ?? null), ", "), "html_attr");
        echo "\"
                                ";
        // line 62
        echo "                                ";
        $this->displayBlock('input_attributes', $context, $blocks);
        // line 82
        echo "                            />

                            ";
        // line 84
        $this->displayBlock('append', $context, $blocks);
        // line 85
        echo "                            ";
        if ((($context["inline_errors"] ?? null) && ($context["errors"] ?? null))) {
            // line 86
            echo "                            <div class=\"";
            echo ((($context["form_errors_classes"] ?? null)) ? (($context["form_errors_classes"] ?? null)) : ("form-errors"));
            echo "\">
                                ";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 88
                echo "                                    <p class=\"form-message\"><i class=\"fa fa-exclamation-circle\"></i> ";
                echo $context["error"];
                echo "</p>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "                            </div>
                            ";
        }
        // line 92
        echo "
                        </div>
                    ";
    }

    // line 56
    public function block_prepend($context, array $blocks = [])
    {
    }

    // line 62
    public function block_input_attributes($context, array $blocks = [])
    {
        // line 63
        echo "                                class=\"form-control ";
        echo ($context["form_field_input_classes"] ?? null);
        echo " ";
        echo $this->getAttribute(($context["field"] ?? null), "classes", []);
        echo "\"
                                ";
        // line 64
        if ($this->getAttribute(($context["field"] ?? null), "id", [], "any", true, true)) {
            echo "id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "id", []));
            echo "\" ";
        }
        // line 65
        echo "                                ";
        if ($this->getAttribute(($context["field"] ?? null), "style", [], "any", true, true)) {
            echo "style=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "style", []));
            echo "\" ";
        }
        // line 66
        echo "                                ";
        if (($this->getAttribute(($context["field"] ?? null), "disabled", []) || ($context["isDisabledToggleable"] ?? null))) {
            echo "disabled=\"disabled\"";
        }
        // line 67
        echo "                                ";
        if ($this->getAttribute(($context["field"] ?? null), "placeholder", [])) {
            echo "placeholder=\"";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "placeholder", []));
            echo "\"";
        }
        // line 68
        echo "                                ";
        if (($context["autofocus"] ?? null)) {
            echo "autofocus=\"autofocus\"";
        }
        // line 69
        echo "                                ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "novalidate", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "novalidate=\"novalidate\"";
        }
        // line 70
        echo "                                ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "readonly", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "readonly=\"readonly\"";
        }
        // line 71
        echo "                                ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "autocomplete", []), [0 => "on", 1 => "off", 2 => "new-password"])) {
            echo "autocomplete=\"";
            echo $this->getAttribute(($context["field"] ?? null), "autocomplete", []);
            echo "\"";
        }
        // line 72
        echo "                            ";
        if ($this->getAttribute(($context["field"] ?? null), "attributes", [], "any", true, true)) {
            // line 73
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field"] ?? null), "attributes", []));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                // line 74
                echo "                            ";
                echo $this->getAttribute($context["attribute"], "name", []);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["attribute"], "value", []));
                echo "\"
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "                            ";
        }
        // line 77
        echo "                            ";
        if (($context["required"] ?? null)) {
            echo "required=\"required\"";
        }
        // line 78
        echo "                            ";
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "pattern", [])) {
            echo "pattern=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "pattern", []));
            echo "\"";
        }
        // line 79
        echo "                            ";
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "message", [])) {
            echo "title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "message", [])));
            echo "\"
                            ";
        } elseif ($this->getAttribute(        // line 80
($context["field"] ?? null), "title", [], "any", true, true)) {
            echo "title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "title", [])));
            echo "\" ";
        }
        // line 81
        echo "                            ";
    }

    // line 84
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
        return array (  450 => 84,  446 => 81,  440 => 80,  433 => 79,  426 => 78,  421 => 77,  418 => 76,  407 => 74,  402 => 73,  399 => 72,  392 => 71,  387 => 70,  382 => 69,  377 => 68,  370 => 67,  365 => 66,  358 => 65,  352 => 64,  345 => 63,  342 => 62,  337 => 56,  331 => 92,  327 => 90,  318 => 88,  314 => 87,  309 => 86,  306 => 85,  304 => 84,  300 => 82,  297 => 62,  293 => 60,  288 => 59,  285 => 57,  283 => 56,  273 => 54,  270 => 53,  266 => 95,  263 => 53,  260 => 52,  254 => 48,  250 => 47,  245 => 46,  242 => 45,  236 => 39,  233 => 38,  230 => 37,  224 => 35,  218 => 33,  215 => 32,  212 => 31,  205 => 29,  202 => 28,  195 => 26,  192 => 25,  189 => 24,  186 => 23,  183 => 22,  178 => 107,  173 => 104,  167 => 102,  161 => 100,  159 => 99,  151 => 97,  148 => 96,  146 => 52,  142 => 50,  140 => 45,  133 => 44,  128 => 41,  126 => 22,  116 => 21,  109 => 20,  106 => 19,  103 => 18,  98 => 17,  93 => 109,  91 => 18,  83 => 17,  76 => 16,  70 => 15,  67 => 14,  63 => 12,  61 => 11,  58 => 10,  56 => 9,  54 => 8,  52 => 7,  50 => 6,  48 => 5,  46 => 4,  44 => 3,  42 => 2,  40 => 1,);
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
    <div class=\"{{ form_field_outer_classes ?: 'form-group' }} {{ field.outerclasses }}
        {% if errors %} has-errors{% endif %} {% block outer_field_classes %}{% endblock %}\">
        {% block contents %}
            {% if field.label is not same as(false) %}
                <div class=\"{{ form_field_outer_label_classes ?: 'form-label' }} {{ field.labelclasses }}\">
                    <label class=\"{{ form_field_label_classes ?: 'inline' }}\" {% if field.id is defined %}for=\"{{ field.id|e }}\" {% endif %} >
                        {% block label %}
                            {% if field.help %}
                                {% if field.markdown %}
                                    <span data-toggle=\"tooltip\" class=\"tooltip\" data-asTooltip-position=\"w\"
                                          title=\"{{ field.help|t|markdown(false)|e }}\">{{ field.label|markdown(false)|default(field.name|capitalize)|t }}</span>
                                {% else %}
                                    <span data-toggle=\"tooltip\" class=\"tooltip\" data-asTooltip-position=\"w\"
                                          title=\"{{ field.help|t|e }}\">{{ field.label|default(field.name|capitalize)|t }}</span>
                                {% endif %}
                            {% else %}
                                {% if field.markdown %}
                                    {{ field.label|markdown(false)|default(field.name|capitalize)|t }}
                                {% else %}
                                    {{ field.label|default(field.name|capitalize)|t }}
                                {% endif %}
                            {% endif %}

                            {{ field.validate.required in ['on', 'true', 1] ? '<span class=\"required\">*</span>' }}
                        {% endblock %}
                    </label>
                </div>
            {% endif %}
            <div class=\"{{ form_field_outer_data_classes ?: 'form-data' }} {{ field.dataclasses }}\"
                {% block global_attributes %}
                    data-grav-field=\"{{ field.type }}\"
                    data-grav-disabled=\"{{ originalValue is null ? 'true' : 'false' }}\"
                    data-grav-default=\"{{ field.default|json_encode()|e('html_attr') }}\"
                {% endblock %}
            >

                {% block group %}
                    {% block input %}
                        <div class=\"{{ form_field_wrapper_classes ?: 'form-input-wrapper' }} {{ field.size }} {{ field.wrapper_classes }}\">

                            {% block prepend %}{% endblock prepend %}
                            <input
                                {# required attribute structures #}
                                name=\"{{ (scope ~ field.name)|fieldName }}\"
                                value=\"{{ value|join(', ')|e('html_attr') }}\"
                                {# input attribute structures #}
                                {% block input_attributes %}
                                class=\"form-control {{ form_field_input_classes }} {{ field.classes }}\"
                                {% if field.id is defined %}id=\"{{ field.id|e }}\" {% endif %}
                                {% if field.style is defined %}style=\"{{ field.style|e }}\" {% endif %}
                                {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
                                {% if field.placeholder %}placeholder=\"{{ field.placeholder|t }}\"{% endif %}
                                {% if autofocus %}autofocus=\"autofocus\"{% endif %}
                                {% if field.novalidate in ['on', 'true', 1] %}novalidate=\"novalidate\"{% endif %}
                                {% if field.readonly in ['on', 'true', 1] %}readonly=\"readonly\"{% endif %}
                                {% if field.autocomplete in ['on', 'off', 'new-password'] %}autocomplete=\"{{ field.autocomplete }}\"{% endif %}
                            {% if field.attributes is defined %}
                            {% for attribute in field.attributes %}
                            {{ attribute.name }}=\"{{ attribute.value|e }}\"
                            {% endfor %}
                            {% endif %}
                            {% if required %}required=\"required\"{% endif %}
                            {% if field.validate.pattern %}pattern=\"{{ field.validate.pattern|e }}\"{% endif %}
                            {% if field.validate.message %}title=\"{{ field.validate.message|t|e }}\"
                            {% elseif field.title is defined %}title=\"{{ field.title|t|e }}\" {% endif %}
                            {% endblock %}
                            />

                            {% block append %}{% endblock append %}
                            {% if inline_errors and errors %}
                            <div class=\"{{ form_errors_classes ?: 'form-errors' }}\">
                                {% for error in errors %}
                                    <p class=\"form-message\"><i class=\"fa fa-exclamation-circle\"></i> {{ error }}</p>
                                {% endfor %}
                            </div>
                            {% endif %}

                        </div>
                    {% endblock %}
                {% endblock %}
                {% if field.description %}
                    <div class=\"form-extra-wrapper {{ field.size|e }} {{ field.wrapper_classes }}\">
                        <span class=\"form-description\">
                            {% if field.markdown %}
                                {{ field.description|t|markdown(false)|raw }}
                            {% else %}
                                {{ field.description|t|raw }}
                            {% endif %}
                        </span>
                    </div>
                {% endif %}
            </div>
        {% endblock %}
    </div>
{% endblock %}
", "forms/field.html.twig", "/var/www/html/grav/user/themes/bootstrap-blog/templates/forms/field.html.twig");
    }
}
