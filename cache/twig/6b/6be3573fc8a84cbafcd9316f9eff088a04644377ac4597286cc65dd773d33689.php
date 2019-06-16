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

/* forms/default/field.html.twig */
class __TwigTemplate_8249e357b5a54199bd34ff6f1e9aeb829026a93f04ffe9b9bd60874ad94b89d9 extends \Twig\Template
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
        if ( !$this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "ignore", [])) {
            // line 2
            echo "
";
            // line 3
            $context["field_name"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", [])));
            // line 4
            $context["vertical"] = ($this->getAttribute(($context["field"] ?? null), "style", []) == "vertical");
            // line 5
            echo "
";
            // line 6
            if (( !($context["blueprints"] ?? null) || (((($this->getAttribute($this->getAttribute($this->getAttribute(($context["blueprints"] ?? null), "schema", [], "any", false, true), "type", [0 => $this->getAttribute(($context["field"] ?? null), "type", [])], "method", false, true), "input@", [], "array", true, true) &&  !(null === $this->getAttribute($this->getAttribute($this->getAttribute(($context["blueprints"] ?? null), "schema", [], "any", false, true), "type", [0 => $this->getAttribute(($context["field"] ?? null), "type", [])], "method", false, true), "input@", [], "array")))) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["blueprints"] ?? null), "schema", [], "any", false, true), "type", [0 => $this->getAttribute(($context["field"] ?? null), "type", [])], "method", false, true), "input@", [], "array")) : (true)) === true))) {
                // line 7
                echo "    ";
                $context["toggleable"] = ((($this->getAttribute(($context["field"] ?? null), "toggleable", [], "any", true, true) &&  !(null === $this->getAttribute(($context["field"] ?? null), "toggleable", [])))) ? ($this->getAttribute(($context["field"] ?? null), "toggleable", [])) : (false));
                // line 8
                echo "    ";
                if (($context["toggleable"] ?? null)) {
                    // line 9
                    echo "        ";
                    $context["originalValue"] = (((isset($context["originalValue"]) || array_key_exists("originalValue", $context))) ? (($context["originalValue"] ?? null)) : (($context["value"] ?? null)));
                    // line 10
                    echo "        ";
                    $context["toggleableChecked"] = ( !(null === ($context["originalValue"] ?? null)) &&  !twig_test_empty(($context["originalValue"] ?? null)));
                    // line 11
                    echo "    ";
                } elseif ($this->getAttribute(($context["field"] ?? null), "overridable", [])) {
                    // line 12
                    echo "        ";
                    $context["toggleable"] = true;
                    // line 13
                    echo "        ";
                    $context["default"] = ((($this->getAttribute(($context["form"] ?? null), "getDefaultValue", [0 => $this->getAttribute(($context["field"] ?? null), "name", [])], "method", true, true) &&  !(null === $this->getAttribute(($context["form"] ?? null), "getDefaultValue", [0 => $this->getAttribute(($context["field"] ?? null), "name", [])], "method")))) ? ($this->getAttribute(($context["form"] ?? null), "getDefaultValue", [0 => $this->getAttribute(($context["field"] ?? null), "name", [])], "method")) : ($this->getAttribute(($context["field"] ?? null), "default", [])));
                    // line 14
                    echo "        ";
                    $context["toggleableChecked"] = (($context["value"] ?? null) != ($context["default"] ?? null));
                    // line 15
                    echo "    ";
                }
                // line 16
                echo "
    ";
                // line 17
                $context["cookie_name"] = ((("forms-" . $this->getAttribute(($context["form"] ?? null), "name", [])) . "-") . $this->getAttribute(($context["field"] ?? null), "name", []));
                // line 18
                echo "    ";
                $context["value"] = (($context["value"]) ?? ((( !(null === $this->env->getExtension('Grav\Common\Twig\TwigExtension')->getCookie(($context["cookie_name"] ?? null)))) ? ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->getCookie(($context["cookie_name"] ?? null))) : ($this->getAttribute(($context["field"] ?? null), "default", [])))));
                // line 19
                echo "
    ";
                // line 20
                if ((($this->getAttribute(($context["field"] ?? null), "yaml", []) || ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "type", []) == "yaml")) && twig_test_iterable(($context["value"] ?? null)))) {
                    // line 21
                    echo "        ";
                    $context["value"] = call_user_func_array($this->env->getFilter('toYaml')->getCallable(), [($context["value"] ?? null)]);
                    // line 22
                    echo "    ";
                }
            } else {
                // line 24
                echo "    ";
                $context["toggleable"] = false;
            }
            // line 26
            echo "
";
            // line 28
            $context["isDisabledToggleable"] = (($context["toggleable"] ?? null) &&  !($context["toggleableChecked"] ?? null));
            // line 29
            echo "
";
            // line 30
            $context["errors"] = $this->getAttribute($this->getAttribute(($context["form"] ?? null), "messages", []), $this->getAttribute(($context["field"] ?? null), "name", []));
            // line 31
            $context["required"] = (($context["client_side_validation"] ?? null) && twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "required", []), [0 => "on", 1 => "true", 2 => 1]));
            // line 32
            $context["autofocus"] = ((($context["inline_errors"] ?? null) == false) && twig_in_filter($this->getAttribute(($context["field"] ?? null), "autofocus", []), [0 => "on", 1 => "true", 2 => 1]));
            // line 33
            echo "
";
            // line 34
            if ((($context["inline_errors"] ?? null) && ($context["errors"] ?? null))) {
                // line 35
                echo "    ";
                $context["autofocus"] = true;
            }
            // line 37
            echo "
";
            // line 38
            $this->displayBlock('field', $context, $blocks);
            // line 138
            echo "
";
        }
    }

    // line 38
    public function block_field($context, array $blocks = [])
    {
        // line 39
        echo "    <div class=\"form-field ";
        echo ($context["form_field_outer_classes"] ?? null);
        echo " ";
        echo $this->getAttribute(($context["field"] ?? null), "outerclasses", []);
        echo " ";
        if (($context["errors"] ?? null)) {
            echo " has-errors";
        }
        echo " ";
        $this->displayBlock('outer_field_classes', $context, $blocks);
        echo " ";
        if (($context["toggleable"] ?? null)) {
            echo " form-field-toggleable";
        }
        echo "\">
        ";
        // line 40
        $this->displayBlock('contents', $context, $blocks);
        // line 136
        echo "    </div>
";
    }

    // line 39
    public function block_outer_field_classes($context, array $blocks = [])
    {
    }

    // line 40
    public function block_contents($context, array $blocks = [])
    {
        // line 41
        echo "            ";
        if (( !($this->getAttribute(($context["field"] ?? null), "label", []) === false) &&  !($this->getAttribute(($context["field"] ?? null), "display_label", []) === false))) {
            // line 42
            echo "                <div class=\"";
            echo ((($context["form_field_outer_label_classes"] ?? null)) ? (($context["form_field_outer_label_classes"] ?? null)) : ("form-label"));
            echo " ";
            echo $this->getAttribute(($context["field"] ?? null), "labelclasses", []);
            echo "\">
                    ";
            // line 43
            if (($context["toggleable"] ?? null)) {
                // line 44
                echo "                        ";
                $this->loadTemplate("forms/default/toggleable.html.twig", "forms/default/field.html.twig", 44)->display(twig_array_merge($context, ["field_name" => ($context["field_name"] ?? null), "field" => ($context["field"] ?? null), "checked" => ($context["toggleableChecked"] ?? null)]));
                // line 45
                echo "                    ";
            }
            // line 46
            echo "                    <label class=\"";
            echo ((($context["form_field_label_classes"] ?? null)) ? (($context["form_field_label_classes"] ?? null)) : ("inline"));
            echo " ";
            echo ((($context["toggleable"] ?? null)) ? ("toggleable") : (""));
            echo "\" ";
            if ($this->getAttribute(($context["field"] ?? null), "id", [], "any", true, true)) {
                echo "for=\"";
                echo ((($context["toggleable"] ?? null)) ? (("toggleable_" . $this->getAttribute(($context["field"] ?? null), "name", []))) : (twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "id", []))));
                echo "\" ";
            }
            echo " >
                    ";
            // line 47
            $this->displayBlock('label', $context, $blocks);
            // line 64
            echo "                    </label>
                </div>
            ";
        }
        // line 67
        echo "            <div class=\"";
        echo ((($context["form_field_outer_data_classes"] ?? null)) ? (($context["form_field_outer_data_classes"] ?? null)) : ("form-data"));
        echo " ";
        echo $this->getAttribute(($context["field"] ?? null), "dataclasses", []);
        echo "\"
                ";
        // line 68
        $this->displayBlock('global_attributes', $context, $blocks);
        // line 73
        echo "            >
                ";
        // line 74
        $this->displayBlock('group', $context, $blocks);
        // line 122
        echo "                ";
        if ($this->getAttribute(($context["field"] ?? null), "description", [])) {
            // line 123
            echo "                    <div class=\"form-extra-wrapper ";
            echo $this->getAttribute(($context["field"] ?? null), "wrapper_classes", []);
            echo "\">
                        <span class=\"form-description\">
                            ";
            // line 125
            if ($this->getAttribute(($context["field"] ?? null), "markdown", [])) {
                // line 126
                echo "                                ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "description", [])), false);
                echo "
                            ";
            } else {
                // line 128
                echo "                                ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "description", []));
                echo "
                            ";
            }
            // line 130
            echo "                        </span>
                    </div>
                ";
        }
        // line 133
        echo "
            </div>
        ";
    }

    // line 47
    public function block_label($context, array $blocks = [])
    {
        // line 48
        echo "                        ";
        if ($this->getAttribute(($context["field"] ?? null), "help", [])) {
            // line 49
            echo "                            ";
            if ($this->getAttribute(($context["field"] ?? null), "markdown", [])) {
                // line 50
                echo "                                <span class=\"tooltip\" data-asTooltip-position=\"w\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "help", [])), false));
                echo "\">";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, _twig_default_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->getAttribute(($context["field"] ?? null), "label", []), false), twig_capitalize_string_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", []))));
                echo "</span>
                            ";
            } else {
                // line 52
                echo "                                <span class=\"tooltip\" data-asTooltip-position=\"w\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "help", [])));
                echo "\">";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, (($this->getAttribute(($context["field"] ?? null), "label", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "label", []), twig_capitalize_string_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", [])))) : (twig_capitalize_string_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", [])))));
                echo "</span>
                            ";
            }
            // line 54
            echo "                        ";
        } else {
            // line 55
            echo "                            ";
            if ($this->getAttribute(($context["field"] ?? null), "markdown", [])) {
                // line 56
                echo "                                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, _twig_default_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->getAttribute(($context["field"] ?? null), "label", []), false), twig_capitalize_string_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", [])))), "html_attr");
                echo "
                            ";
            } else {
                // line 58
                echo "                                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, (($this->getAttribute(($context["field"] ?? null), "label", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "label", []), twig_capitalize_string_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", [])))) : (twig_capitalize_string_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", []))))), "html_attr");
                echo "
                            ";
            }
            // line 60
            echo "                        ";
        }
        // line 61
        echo "
                        ";
        // line 62
        echo ((twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "required", []), [0 => "on", 1 => "true", 2 => 1])) ? ("<span class=\"required\">*</span>") : (""));
        echo "
                    ";
    }

    // line 68
    public function block_global_attributes($context, array $blocks = [])
    {
        // line 69
        echo "                data-grav-field=\"";
        echo $this->getAttribute(($context["field"] ?? null), "type", []);
        echo "\"
                data-grav-disabled=\"";
        // line 70
        echo (($context["toggleable"] ?? null) && ($context["toggleableChecked"] ?? null));
        echo "\"
                data-grav-default=\"";
        // line 71
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["field"] ?? null), "default", [])), "html_attr");
        echo "\"
                ";
    }

    // line 74
    public function block_group($context, array $blocks = [])
    {
        // line 75
        echo "                    ";
        $this->displayBlock('input', $context, $blocks);
        // line 121
        echo "                ";
    }

    // line 75
    public function block_input($context, array $blocks = [])
    {
        // line 76
        echo "                        <div class=\"";
        echo ((($context["form_field_wrapper_classes"] ?? null)) ? (($context["form_field_wrapper_classes"] ?? null)) : ("form-input-wrapper"));
        echo " ";
        echo $this->getAttribute(($context["field"] ?? null), "size", []);
        echo " ";
        echo $this->getAttribute(($context["field"] ?? null), "wrapper_classes", []);
        echo "\">
                            ";
        // line 77
        $this->displayBlock('prepend', $context, $blocks);
        // line 78
        echo "                            <input
                                ";
        // line 80
        echo "                                name=\"";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", [])));
        echo "\"
                                value=\"";
        // line 81
        echo twig_escape_filter($this->env, twig_join_filter(($context["value"] ?? null), ", "), "html_attr");
        echo "\"
                                ";
        // line 83
        echo "                                ";
        $this->displayBlock('input_attributes', $context, $blocks);
        // line 112
        echo "                            />
                            ";
        // line 113
        $this->displayBlock('append', $context, $blocks);
        // line 114
        echo "                            ";
        if ((($context["inline_errors"] ?? null) && ($context["errors"] ?? null))) {
            // line 115
            echo "                                <div class=\"";
            echo ((($context["form_errors_classes"] ?? null)) ? (($context["form_errors_classes"] ?? null)) : ("form-errors"));
            echo "\">
                                  <p class=\"form-message\"><i class=\"fa fa-exclamation-circle\"></i> ";
            // line 116
            echo twig_first($this->env, ($context["errors"] ?? null));
            echo "</p>
                                </div>
                            ";
        }
        // line 119
        echo "                        </div>
                    ";
    }

    // line 77
    public function block_prepend($context, array $blocks = [])
    {
    }

    // line 83
    public function block_input_attributes($context, array $blocks = [])
    {
        // line 84
        echo "                                    class=\"";
        echo ($context["form_field_input_classes"] ?? null);
        echo " ";
        echo $this->getAttribute(($context["field"] ?? null), "classes", []);
        echo " ";
        echo $this->getAttribute(($context["field"] ?? null), "size", []);
        echo "\"
                                    ";
        // line 85
        if ($this->getAttribute(($context["field"] ?? null), "id", [], "any", true, true)) {
            echo "id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "id", []));
            echo "\" ";
        }
        // line 86
        echo "                                    ";
        if ($this->getAttribute(($context["field"] ?? null), "style", [], "any", true, true)) {
            echo "style=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "style", []));
            echo "\" ";
        }
        // line 87
        echo "                                    ";
        if (($this->getAttribute(($context["field"] ?? null), "disabled", []) || ($context["isDisabledToggleable"] ?? null))) {
            echo "disabled=\"disabled\"";
        }
        // line 88
        echo "                                    ";
        if ($this->getAttribute(($context["field"] ?? null), "placeholder", [])) {
            echo "placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "placeholder", [])), "html_attr");
            echo "\"";
        }
        // line 89
        echo "                                    ";
        if (($context["autofocus"] ?? null)) {
            echo "autofocus=\"autofocus\"";
        }
        // line 90
        echo "                                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "novalidate", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "novalidate=\"novalidate\"";
        }
        // line 91
        echo "                                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "readonly", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "readonly=\"readonly\"";
        }
        // line 92
        echo "                                    ";
        if ($this->getAttribute(($context["field"] ?? null), "autocomplete", [], "any", true, true)) {
            echo "autocomplete=\"";
            echo $this->getAttribute(($context["field"] ?? null), "autocomplete", []);
            echo "\"";
        }
        // line 93
        echo "                                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "autocapitalize", []), [0 => "off", 1 => "characters", 2 => "words", 3 => "sentences"])) {
            echo "autocapitalize=\"";
            echo $this->getAttribute(($context["field"] ?? null), "autocapitalize", []);
            echo "\"";
        }
        // line 94
        echo "                                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "inputmode", []), [0 => "none", 1 => "text", 2 => "decimal", 3 => "numeric", 4 => "tel", 5 => "search", 6 => "email", 7 => "url"])) {
            echo "inputmode=\"";
            echo $this->getAttribute(($context["field"] ?? null), "inputmode", []);
            echo "\"";
        }
        // line 95
        echo "                                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "spellcheck", []), [0 => "true", 1 => "false"])) {
            echo "spellcheck=\"";
            echo $this->getAttribute(($context["field"] ?? null), "spellcheck", []);
            echo "\"";
        }
        // line 96
        echo "
                                    ";
        // line 97
        if ($this->getAttribute(($context["field"] ?? null), "attributes", [], "any", true, true)) {
            // line 98
            echo "                                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field"] ?? null), "attributes", []));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                // line 99
                echo "                                          ";
                echo $this->getAttribute($context["attribute"], "name", []);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["attribute"], "value", []));
                echo "\"
                                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "                                    ";
        }
        // line 102
        echo "                                    ";
        if (($context["required"] ?? null)) {
            echo "required=\"required\"";
        }
        // line 103
        echo "                                    ";
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "pattern", [])) {
            echo "pattern=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "pattern", []));
            echo "\"";
        }
        // line 104
        echo "                                    ";
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "message", [])) {
            echo "title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "message", [])));
            echo "\"
                                    ";
        } elseif ($this->getAttribute(        // line 105
($context["field"] ?? null), "title", [], "any", true, true)) {
            echo "title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "title", [])));
            echo "\" ";
        }
        // line 106
        echo "                                    ";
        if ($this->getAttribute(($context["field"] ?? null), "datasets", [])) {
            // line 107
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field"] ?? null), "datasets", []));
            foreach ($context['_seq'] as $context["datakey"] => $context["datavalue"]) {
                // line 108
                echo "                                            data-";
                echo $context["datakey"];
                echo "=\"";
                echo twig_escape_filter($this->env, $context["datavalue"], "html_attr");
                echo "\"
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['datakey'], $context['datavalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "                                    ";
        }
        // line 111
        echo "                                ";
    }

    // line 113
    public function block_append($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "forms/default/field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  556 => 113,  552 => 111,  549 => 110,  538 => 108,  533 => 107,  530 => 106,  524 => 105,  517 => 104,  510 => 103,  505 => 102,  502 => 101,  491 => 99,  486 => 98,  484 => 97,  481 => 96,  474 => 95,  467 => 94,  460 => 93,  453 => 92,  448 => 91,  443 => 90,  438 => 89,  431 => 88,  426 => 87,  419 => 86,  413 => 85,  404 => 84,  401 => 83,  396 => 77,  391 => 119,  385 => 116,  380 => 115,  377 => 114,  375 => 113,  372 => 112,  369 => 83,  365 => 81,  360 => 80,  357 => 78,  355 => 77,  346 => 76,  343 => 75,  339 => 121,  336 => 75,  333 => 74,  327 => 71,  323 => 70,  318 => 69,  315 => 68,  309 => 62,  306 => 61,  303 => 60,  297 => 58,  291 => 56,  288 => 55,  285 => 54,  277 => 52,  269 => 50,  266 => 49,  263 => 48,  260 => 47,  254 => 133,  249 => 130,  243 => 128,  237 => 126,  235 => 125,  229 => 123,  226 => 122,  224 => 74,  221 => 73,  219 => 68,  212 => 67,  207 => 64,  205 => 47,  192 => 46,  189 => 45,  186 => 44,  184 => 43,  177 => 42,  174 => 41,  171 => 40,  166 => 39,  161 => 136,  159 => 40,  142 => 39,  139 => 38,  133 => 138,  131 => 38,  128 => 37,  124 => 35,  122 => 34,  119 => 33,  117 => 32,  115 => 31,  113 => 30,  110 => 29,  108 => 28,  105 => 26,  101 => 24,  97 => 22,  94 => 21,  92 => 20,  89 => 19,  86 => 18,  84 => 17,  81 => 16,  78 => 15,  75 => 14,  72 => 13,  69 => 12,  66 => 11,  63 => 10,  60 => 9,  57 => 8,  54 => 7,  52 => 6,  49 => 5,  47 => 4,  45 => 3,  42 => 2,  40 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if not field.validate.ignore %}

{% set field_name = (scope ~ field.name)|fieldName %}
{% set vertical = field.style == 'vertical' %}

{% if not blueprints or (blueprints.schema.type(field.type)['input@'] ?? true) is same as(true) %}
    {% set toggleable = field.toggleable ?? false %}
    {% if toggleable %}
        {% set originalValue = originalValue is defined ? originalValue : value %}
        {% set toggleableChecked = originalValue is not null and originalValue is not empty %}
    {% elseif field.overridable %}
        {% set toggleable = true %}
        {% set default = form.getDefaultValue(field.name) ?? field.default %}
        {% set toggleableChecked = value != default %}
    {% endif %}

    {% set cookie_name = 'forms-' ~ form.name ~ '-' ~ field.name %}
    {% set value = value ?? (get_cookie(cookie_name) is not null ? get_cookie(cookie_name) : field.default) %}

    {% if (field.yaml or field.validate.type == 'yaml') and value is iterable %}
        {% set value = value|toYaml %}
    {% endif %}
{% else %}
    {% set toggleable = false %}
{% endif %}

{# DEPRECATED: Needed by old form fields; remove when backwards compatibility breaks are allowed #}
{% set isDisabledToggleable = toggleable and not toggleableChecked %}

{% set errors = attribute(form.messages, field.name) %}
{% set required = client_side_validation and field.validate.required in ['on', 'true', 1] %}
{% set autofocus = (inline_errors == false) and field.autofocus in ['on', 'true', 1] %}

{% if inline_errors and errors %}
    {% set autofocus = true %}
{% endif %}

{% block field %}
    <div class=\"form-field {{ form_field_outer_classes }} {{ field.outerclasses }} {% if errors %} has-errors{% endif %} {% block outer_field_classes %}{% endblock %} {% if toggleable %} form-field-toggleable{% endif %}\">
        {% block contents %}
            {% if field.label is not same as(false) and field.display_label is not same as(false) %}
                <div class=\"{{ form_field_outer_label_classes ?: 'form-label' }} {{ field.labelclasses }}\">
                    {% if toggleable %}
                        {% include 'forms/default/toggleable.html.twig' with {field_name: field_name, field: field, checked: toggleableChecked} %}
                    {% endif %}
                    <label class=\"{{ form_field_label_classes ?: 'inline' }} {{ toggleable ? 'toggleable' }}\" {% if field.id is defined %}for=\"{{ toggleable ? 'toggleable_' ~ field.name : field.id|e }}\" {% endif %} >
                    {% block label %}
                        {% if field.help %}
                            {% if field.markdown %}
                                <span class=\"tooltip\" data-asTooltip-position=\"w\" title=\"{{ field.help|t|markdown(false)|e }}\">{{ field.label|markdown(false)|default(field.name|capitalize)|t }}</span>
                            {% else %}
                                <span class=\"tooltip\" data-asTooltip-position=\"w\" title=\"{{ field.help|t|e }}\">{{ field.label|default(field.name|capitalize)|t }}</span>
                            {% endif %}
                        {% else %}
                            {% if field.markdown %}
                                {{ field.label|markdown(false)|default(field.name|capitalize)|t|e('html_attr') }}
                            {% else %}
                                {{ field.label|default(field.name|capitalize)|t|e('html_attr') }}
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
                data-grav-disabled=\"{{ toggleable and toggleableChecked }}\"
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
                                    class=\"{{ form_field_input_classes }} {{ field.classes }} {{ field.size }}\"
                                    {% if field.id is defined %}id=\"{{ field.id|e }}\" {% endif %}
                                    {% if field.style is defined %}style=\"{{ field.style|e }}\" {% endif %}
                                    {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
                                    {% if field.placeholder %}placeholder=\"{{ field.placeholder|t|e('html_attr') }}\"{% endif %}
                                    {% if autofocus %}autofocus=\"autofocus\"{% endif %}
                                    {% if field.novalidate in ['on', 'true', 1] %}novalidate=\"novalidate\"{% endif %}
                                    {% if field.readonly in ['on', 'true', 1] %}readonly=\"readonly\"{% endif %}
                                    {% if field.autocomplete is defined %}autocomplete=\"{{ field.autocomplete }}\"{% endif %}
                                    {% if field.autocapitalize in ['off', 'characters', 'words', 'sentences'] %}autocapitalize=\"{{ field.autocapitalize }}\"{% endif %}
                                    {% if field.inputmode in ['none', 'text', 'decimal', 'numeric', 'tel', 'search', 'email', 'url'] %}inputmode=\"{{ field.inputmode }}\"{% endif %}
                                    {% if field.spellcheck in ['true', 'false'] %}spellcheck=\"{{ field.spellcheck }}\"{% endif %}

                                    {% if field.attributes is defined %}
                                      {% for attribute in field.attributes %}
                                          {{ attribute.name }}=\"{{ attribute.value|e }}\"
                                      {% endfor %}
                                    {% endif %}
                                    {% if required %}required=\"required\"{% endif %}
                                    {% if field.validate.pattern %}pattern=\"{{ field.validate.pattern|e }}\"{% endif %}
                                    {% if field.validate.message %}title=\"{{ field.validate.message|t|e }}\"
                                    {% elseif field.title is defined %}title=\"{{ field.title|t|e }}\" {% endif %}
                                    {% if field.datasets %}
                                        {% for datakey, datavalue in field.datasets %}
                                            data-{{ datakey }}=\"{{ datavalue|e('html_attr') }}\"
                                        {% endfor %}
                                    {% endif %}
                                {% endblock %}
                            />
                            {% block append %}{% endblock append %}
                            {% if inline_errors and errors %}
                                <div class=\"{{ form_errors_classes ?: 'form-errors' }}\">
                                  <p class=\"form-message\"><i class=\"fa fa-exclamation-circle\"></i> {{ errors|first }}</p>
                                </div>
                            {% endif %}
                        </div>
                    {% endblock %}
                {% endblock %}
                {% if field.description %}
                    <div class=\"form-extra-wrapper {{ field.wrapper_classes }}\">
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

{% endif %}
", "forms/default/field.html.twig", "/var/www/html/grav/user/plugins/form/templates/forms/default/field.html.twig");
    }
}
