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

/* partials/navigation.html.twig */
class __TwigTemplate_5992ba1a9d2e10ca9ca4d665fbb9222ce289829f0269fef00a3a1cdd4440348e extends \Twig\Template
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
        // line 51
        echo "
<div class=\"navbar-nav ml-auto\">
    ";
        // line 53
        if (($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "navbar", []), "dropdown", []) == true)) {
            // line 54
            echo "        ";
            echo $this->getAttribute($this, "loop", [0 => ($context["pages"] ?? null)], "method");
            echo "
    ";
        } else {
            // line 56
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", []), "visible", []));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 57
                echo "            ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", []) || $this->getAttribute($context["page"], "activeChild", []))) ? ("active") : (""));
                // line 58
                echo "            <div class=\"nav-item ";
                echo ($context["current_page"] ?? null);
                echo "\">
                <a class=\"nav-link\" href=\"";
                // line 59
                echo $this->getAttribute($context["page"], "url", []);
                echo "\">
                    ";
                // line 60
                if ($this->getAttribute($this->getAttribute($context["page"], "header", []), "icon", [])) {
                    echo "<i class=\"fas fa-";
                    echo $this->getAttribute($this->getAttribute($context["page"], "header", []), "icon", []);
                    echo "\"></i>";
                }
                // line 61
                echo "                    ";
                echo $this->getAttribute($context["page"], "menu", []);
                echo "
                </a>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "    ";
        }
        // line 66
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "menu", []));
        foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
            // line 67
            echo "        <div class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 68
            echo $this->getAttribute($context["mitem"], "url", []);
            echo "\">
                ";
            // line 69
            if ($this->getAttribute($context["mitem"], "icon", [])) {
                echo "<i class=\"fas fa-";
                echo $this->getAttribute($context["mitem"], "icon", []);
                echo "\"></i>";
            }
            // line 70
            echo "                ";
            echo $this->getAttribute($context["mitem"], "text", []);
            echo "
            </a>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "login", []), "enabled", []) && $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", []), "username", []))) {
            // line 75
            echo "        ";
            $this->loadTemplate("partials/login-status.html.twig", "partials/navigation.html.twig", 75)->display($context);
            // line 76
            echo "    ";
        }
        // line 77
        echo "</div>
";
    }

    // line 1
    public function getloop($__page__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "page" => $__page__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", []), "visible", []));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 3
                echo "        ";
                $context["current_page"] = ((($this->getAttribute($context["p"], "active", []) || $this->getAttribute($context["p"], "activeChild", []))) ? ("active") : (""));
                // line 4
                echo "        ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", []), "visible", []), "count", []) > 0)) {
                    // line 5
                    echo "            ";
                    if ($this->getAttribute($this->getAttribute($context["p"], "header", []), "split_menu", [])) {
                        // line 6
                        echo "                <li class=\"nav-item dropdown dropdown-split-menu ";
                        echo ($context["current_page"] ?? null);
                        echo "\">
                    <div class=\"btn-group\">
                        <a class=\"nav-link\" href=\"";
                        // line 8
                        echo $this->getAttribute($context["p"], "url", []);
                        echo "\">
                            ";
                        // line 9
                        if ($this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", [])) {
                            echo "<i class=\"fas fa-";
                            echo $this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", []);
                            echo "\"></i>";
                        }
                        // line 10
                        echo "                            ";
                        echo $this->getAttribute($context["p"], "menu", []);
                        echo "
                        </a>
                        <a href=\"#\" id=\"dropdown-";
                        // line 12
                        echo $this->getAttribute($context["p"], "id", []);
                        echo "\" class=\"nav-link dropdown-toggle dropdown-toggle-split\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                            aria-expanded=\"false\"></a>
                        <div class=\"dropdown-menu";
                        // line 14
                        if ($this->getAttribute($this->getAttribute($context["p"], "header", []), "menu_right", [])) {
                            echo " dropdown-menu-right";
                        }
                        echo "\" arial-labelledby=\"dropdown-";
                        echo $this->getAttribute($context["p"], "id", []);
                        echo "\">
                            ";
                        // line 15
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["p"], "children", []), "visible", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                            // line 16
                            echo "                                <a class=\"dropdown-item\" href=\"";
                            echo $this->getAttribute($context["c"], "url", []);
                            echo "\">
                                    ";
                            // line 17
                            if ($this->getAttribute($this->getAttribute($context["c"], "header", []), "icon", [])) {
                                echo "<i class=\"fas fa-";
                                echo $this->getAttribute($this->getAttribute($context["c"], "header", []), "icon", []);
                                echo "\"></i>";
                            }
                            // line 18
                            echo "                                    ";
                            echo $this->getAttribute($context["c"], "menu", []);
                            echo "
                                </a>
                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 21
                        echo "                        </div>
                    </div>
                </li>
            ";
                    } else {
                        // line 25
                        echo "                <li class=\"nav-item dropdown ";
                        echo ($context["current_page"] ?? null);
                        echo "\">
                    <a id=\"dropdown-";
                        // line 26
                        echo $this->getAttribute($context["p"], "id", []);
                        echo "\" class=\"nav-link dropdown-toggle\" href=\"";
                        echo $this->getAttribute($context["p"], "url", []);
                        echo "\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                    aria-expanded=\"false\">
                        ";
                        // line 28
                        if ($this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", [])) {
                            echo "<i class=\"fas fa-";
                            echo $this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", []);
                            echo "\"></i>";
                        }
                        // line 29
                        echo "                        ";
                        echo $this->getAttribute($context["p"], "menu", []);
                        echo "
                    </a>
                    <div class=\"dropdown-menu";
                        // line 31
                        if ($this->getAttribute($this->getAttribute($context["p"], "header", []), "menu_right", [])) {
                            echo " dropdown-menu-right";
                        }
                        echo "\" arial-labelledby=\"dropdown-";
                        echo $this->getAttribute($context["p"], "id", []);
                        echo "\">
                        ";
                        // line 32
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["p"], "children", []), "visible", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                            // line 33
                            echo "                            <a class=\"dropdown-item\" href=\"";
                            echo $this->getAttribute($context["c"], "url", []);
                            echo "\">
                                ";
                            // line 34
                            if ($this->getAttribute($this->getAttribute($context["c"], "header", []), "icon", [])) {
                                echo "<i class=\"fas fa-";
                                echo $this->getAttribute($this->getAttribute($context["c"], "header", []), "icon", []);
                                echo "\"></i>";
                            }
                            // line 35
                            echo "                                ";
                            echo $this->getAttribute($context["c"], "menu", []);
                            echo "
                            </a>
                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 38
                        echo "                    </div>
                </li>
            ";
                    }
                    // line 41
                    echo "        ";
                } else {
                    // line 42
                    echo "            <li class=\"nav-item ";
                    echo ($context["current_page"] ?? null);
                    echo "\">
                <a class=\"nav-link\" href=\"";
                    // line 43
                    echo $this->getAttribute($context["p"], "url", []);
                    echo "\">
                    ";
                    // line 44
                    if ($this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", [])) {
                        echo "<i class=\"fas fa-";
                        echo $this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", []);
                        echo "\"></i>";
                    }
                    // line 45
                    echo "                    ";
                    echo $this->getAttribute($context["p"], "menu", []);
                    echo "
                </a>
            </li>
        ";
                }
                // line 49
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
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
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  302 => 49,  294 => 45,  288 => 44,  284 => 43,  279 => 42,  276 => 41,  271 => 38,  261 => 35,  255 => 34,  250 => 33,  246 => 32,  238 => 31,  232 => 29,  226 => 28,  219 => 26,  214 => 25,  208 => 21,  198 => 18,  192 => 17,  187 => 16,  183 => 15,  175 => 14,  170 => 12,  164 => 10,  158 => 9,  154 => 8,  148 => 6,  145 => 5,  142 => 4,  139 => 3,  134 => 2,  122 => 1,  117 => 77,  114 => 76,  111 => 75,  108 => 74,  97 => 70,  91 => 69,  87 => 68,  84 => 67,  79 => 66,  76 => 65,  65 => 61,  59 => 60,  55 => 59,  50 => 58,  47 => 57,  42 => 56,  36 => 54,  34 => 53,  30 => 51,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% macro loop(page) %}
    {% for p in page.children.visible %}
        {% set current_page = (p.active or p.activeChild) ? 'active' : '' %}
        {% if p.children.visible.count > 0 %}
            {% if p.header.split_menu %}
                <li class=\"nav-item dropdown dropdown-split-menu {{ current_page }}\">
                    <div class=\"btn-group\">
                        <a class=\"nav-link\" href=\"{{ p.url }}\">
                            {% if p.header.icon %}<i class=\"fas fa-{{ p.header.icon }}\"></i>{% endif %}
                            {{ p.menu }}
                        </a>
                        <a href=\"#\" id=\"dropdown-{{ p.id }}\" class=\"nav-link dropdown-toggle dropdown-toggle-split\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                            aria-expanded=\"false\"></a>
                        <div class=\"dropdown-menu{% if p.header.menu_right %} dropdown-menu-right{% endif %}\" arial-labelledby=\"dropdown-{{ p.id }}\">
                            {% for c in p.children.visible %}
                                <a class=\"dropdown-item\" href=\"{{ c.url }}\">
                                    {% if c.header.icon %}<i class=\"fas fa-{{ c.header.icon }}\"></i>{% endif %}
                                    {{ c.menu }}
                                </a>
                            {% endfor %}
                        </div>
                    </div>
                </li>
            {% else %}
                <li class=\"nav-item dropdown {{ current_page }}\">
                    <a id=\"dropdown-{{ p.id }}\" class=\"nav-link dropdown-toggle\" href=\"{{ p.url }}\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                    aria-expanded=\"false\">
                        {% if p.header.icon %}<i class=\"fas fa-{{ p.header.icon }}\"></i>{% endif %}
                        {{ p.menu }}
                    </a>
                    <div class=\"dropdown-menu{% if p.header.menu_right %} dropdown-menu-right{% endif %}\" arial-labelledby=\"dropdown-{{ p.id }}\">
                        {% for c in p.children.visible %}
                            <a class=\"dropdown-item\" href=\"{{ c.url }}\">
                                {% if c.header.icon %}<i class=\"fas fa-{{ c.header.icon }}\"></i>{% endif %}
                                {{ c.menu }}
                            </a>
                        {% endfor %}
                    </div>
                </li>
            {% endif %}
        {% else %}
            <li class=\"nav-item {{ current_page }}\">
                <a class=\"nav-link\" href=\"{{ p.url }}\">
                    {% if p.header.icon %}<i class=\"fas fa-{{ p.header.icon }}\"></i>{% endif %}
                    {{ p.menu }}
                </a>
            </li>
        {% endif %}
    {% endfor %}
{% endmacro %}

<div class=\"navbar-nav ml-auto\">
    {% if theme_config.navbar.dropdown == true %}
        {{ _self.loop(pages) }}
    {% else %}
        {% for page in pages.children.visible %}
            {% set current_page = (page.active or page.activeChild) ? 'active' : '' %}
            <div class=\"nav-item {{ current_page }}\">
                <a class=\"nav-link\" href=\"{{ page.url }}\">
                    {% if page.header.icon %}<i class=\"fas fa-{{ page.header.icon }}\"></i>{% endif %}
                    {{ page.menu }}
                </a>
            </div>
        {% endfor %}
    {% endif %}
    {% for mitem in site.menu %}
        <div class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ mitem.url }}\">
                {% if mitem.icon %}<i class=\"fas fa-{{ mitem.icon }}\"></i>{% endif %}
                {{ mitem.text }}
            </a>
        </div>
    {% endfor %}
    {% if config.plugins.login.enabled and grav.user.username %}
        {% include 'partials/login-status.html.twig' %}
    {% endif %}
</div>
", "partials/navigation.html.twig", "/var/www/html/grav/user/themes/bootstrap-blog/templates/partials/navigation.html.twig");
    }
}
