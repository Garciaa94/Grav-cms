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

/* partials/sidebar.html.twig */
class __TwigTemplate_92e7b9efe863556972062f11199aed0269f720db1d08a6f637a837f4f7313f4b extends \Twig\Template
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
        // line 23
        echo "
";
        // line 36
        echo "
<div class=\"scrollbar-inner\">
    <div class=\"highlightable\">
        ";
        // line 39
        if ($this->getAttribute(($context["theme_config"] ?? null), "top_level_version", [])) {
            // line 40
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["pages"] ?? null), "children", []));
            foreach ($context['_seq'] as $context["slug"] => $context["ver"]) {
                // line 41
                echo "                ";
                echo $this->getAttribute($this, "version", [0 => $context["ver"]], "method");
                echo "
                <ul id=\"";
                // line 42
                echo $context["slug"];
                echo "\" class=\"topics\">
                ";
                // line 43
                echo $this->getAttribute($this, "loop", [0 => $context["ver"], 1 => ""], "method");
                echo "
                </ul>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['slug'], $context['ver'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "        ";
        } else {
            // line 47
            echo "            <ul class=\"topics\">
                ";
            // line 48
            if ($this->getAttribute(($context["theme_config"] ?? null), "root_page", [])) {
                // line 49
                echo "                    ";
                echo $this->getAttribute($this, "loop", [0 => $this->getAttribute(($context["page"] ?? null), "find", [0 => $this->getAttribute(($context["theme_config"] ?? null), "root_page", [])], "method"), 1 => ""], "method");
                echo "
                ";
            } else {
                // line 51
                echo "            ";
                echo $this->getAttribute($this, "loop", [0 => ($context["pages"] ?? null), 1 => ""], "method");
                echo "
                ";
            }
            // line 53
            echo "            </ul>
        ";
        }
        // line 55
        echo "        <hr />

        <a class=\"padding\" href=\"#\" data-clear-history-toggle><i
                    class=\"fa fa-fw fa-history\"></i> ";
        // line 58
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "THEME_LEARN2_CLEAR_HISTORY");
        echo "</a><br/>

        <section id=\"footer\">
            ";
        // line 61
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "feed", []), "enabled", []) && $this->getAttribute(($context["pages"] ?? null), "find", [0 => "/feed"], "method"))) {
            // line 62
            echo "              <a class=\"button\" href=\"";
            echo ($context["base_url"] ?? null);
            echo "/feed.atom\"><i class=\"fa fa-rss-square\"></i> Atom 1.0</a>
              <a class=\"button\" href=\"";
            // line 63
            echo ($context["base_url"] ?? null);
            echo "/feed.rss\"><i class=\"fa fa-rss-square\"></i> RSS</a><br><br>
            ";
        }
        // line 65
        echo "            <p>";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "THEME_LEARN2_BUILT_WITH_GRAV");
        echo "</p>
        </section>
    </div>
</div>
";
    }

    // line 1
    public function getloop($__page__ = null, $__parent_loop__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "page" => $__page__,
            "parent_loop" => $__parent_loop__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 2
            echo "    ";
            if ((twig_length_filter($this->env, ($context["parent_loop"] ?? null)) > 0)) {
                // line 3
                echo "        ";
                $context["data_level"] = ($context["parent_loop"] ?? null);
                // line 4
                echo "    ";
            } else {
                // line 5
                echo "        ";
                $context["data_level"] = 0;
                // line 6
                echo "    ";
            }
            // line 7
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", []), "visible", []));
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
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 8
                echo "        ";
                $context["parent_page"] = (($this->getAttribute($context["p"], "activeChild", [])) ? (" parent") : (""));
                // line 9
                echo "        ";
                $context["current_page"] = (($this->getAttribute($context["p"], "active", [])) ? (" active") : (""));
                // line 10
                echo "        <li class=\"dd-item";
                echo ($context["parent_page"] ?? null);
                echo ($context["current_page"] ?? null);
                echo "\" data-nav-id=\"";
                echo $this->getAttribute($context["p"], "route", []);
                echo "\">
            <a href=\"";
                // line 11
                echo $this->getAttribute($context["p"], "url", []);
                echo "\" ";
                if ($this->getAttribute($this->getAttribute($context["p"], "header", []), "class", [])) {
                    echo "class=\"";
                    echo $this->getAttribute($this->getAttribute($context["p"], "header", []), "class", []);
                    echo "\"";
                }
                echo ">
                <i class=\"fa fa-check read-icon\"></i>
                <span><b>";
                // line 13
                if ((($context["data_level"] ?? null) == 0)) {
                    echo $this->getAttribute($context["loop"], "index", []);
                    echo ". ";
                }
                echo "</b>";
                echo $this->getAttribute($context["p"], "menu", []);
                echo "</span>
            </a>
            ";
                // line 15
                if (($this->getAttribute($this->getAttribute($context["p"], "children", []), "count", []) > 0)) {
                    // line 16
                    echo "            <ul>
                ";
                    // line 17
                    echo $this->getAttribute($this, "loop", [0 => $context["p"], 1 => ((((isset($context["parent_loop"]) || array_key_exists("parent_loop", $context))) ? (_twig_default_filter(($context["parent_loop"] ?? null), 0)) : (0)) + $this->getAttribute($context["loop"], "index", []))], "method");
                    echo "
            </ul>
            ";
                }
                // line 20
                echo "        </li>
    ";
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

    // line 24
    public function getversion($__p__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "p" => $__p__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 25
            echo "    ";
            $context["parent_page"] = (($this->getAttribute(($context["p"] ?? null), "activeChild", [])) ? (" parent") : (""));
            // line 26
            echo "    ";
            $context["current_page"] = (($this->getAttribute(($context["p"] ?? null), "active", [])) ? (" active") : (""));
            // line 27
            echo "    <h5 class=\"";
            echo ($context["parent_page"] ?? null);
            echo ($context["current_page"] ?? null);
            echo "\">
        ";
            // line 28
            if (($this->getAttribute(($context["p"] ?? null), "activeChild", []) || $this->getAttribute(($context["p"] ?? null), "active", []))) {
                // line 29
                echo "        <i class=\"fa fa-chevron-down fa-fw\"></i>
        ";
            } else {
                // line 31
                echo "        <i class=\"fa fa-plus fa-fw\"></i>
        ";
            }
            // line 33
            echo "        <a href=\"";
            echo $this->getAttribute(($context["p"] ?? null), "url", []);
            echo "\">";
            echo $this->getAttribute(($context["p"] ?? null), "menu", []);
            echo "</a>
    </h5>
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
        return "partials/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 33,  270 => 31,  266 => 29,  264 => 28,  258 => 27,  255 => 26,  252 => 25,  240 => 24,  212 => 20,  206 => 17,  203 => 16,  201 => 15,  191 => 13,  180 => 11,  172 => 10,  169 => 9,  166 => 8,  148 => 7,  145 => 6,  142 => 5,  139 => 4,  136 => 3,  133 => 2,  120 => 1,  110 => 65,  105 => 63,  100 => 62,  98 => 61,  92 => 58,  87 => 55,  83 => 53,  77 => 51,  71 => 49,  69 => 48,  66 => 47,  63 => 46,  54 => 43,  50 => 42,  45 => 41,  40 => 40,  38 => 39,  33 => 36,  30 => 23,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% macro loop(page, parent_loop) %}
    {% if parent_loop|length > 0 %}
        {% set data_level = parent_loop %}
    {% else %}
        {% set data_level = 0 %}
    {% endif %}
    {% for p in page.children.visible %}
        {% set parent_page = p.activeChild ? ' parent' : '' %}
        {% set current_page = p.active ? ' active' : '' %}
        <li class=\"dd-item{{ parent_page }}{{ current_page }}\" data-nav-id=\"{{ p.route }}\">
            <a href=\"{{ p.url }}\" {% if p.header.class %}class=\"{{ p.header.class }}\"{% endif %}>
                <i class=\"fa fa-check read-icon\"></i>
                <span><b>{% if data_level == 0 %}{{ loop.index }}. {% endif %}</b>{{ p.menu }}</span>
            </a>
            {% if p.children.count > 0 %}
            <ul>
                {{ _self.loop(p, parent_loop|default(0)+loop.index) }}
            </ul>
            {% endif %}
        </li>
    {% endfor %}
{% endmacro %}

{% macro version(p) %}
    {% set parent_page = p.activeChild ? ' parent' : '' %}
    {% set current_page = p.active ? ' active' : '' %}
    <h5 class=\"{{ parent_page }}{{ current_page }}\">
        {% if p.activeChild or p.active %}
        <i class=\"fa fa-chevron-down fa-fw\"></i>
        {% else %}
        <i class=\"fa fa-plus fa-fw\"></i>
        {% endif %}
        <a href=\"{{ p.url }}\">{{ p.menu }}</a>
    </h5>
{% endmacro %}

<div class=\"scrollbar-inner\">
    <div class=\"highlightable\">
        {% if theme_config.top_level_version %}
            {% for slug, ver in pages.children %}
                {{ _self.version(ver) }}
                <ul id=\"{{ slug }}\" class=\"topics\">
                {{ _self.loop(ver, '') }}
                </ul>
            {% endfor %}
        {% else %}
            <ul class=\"topics\">
                {% if theme_config.root_page %}
                    {{ _self.loop(page.find(theme_config.root_page), '') }}
                {% else %}
            {{ _self.loop(pages, '') }}
                {% endif %}
            </ul>
        {% endif %}
        <hr />

        <a class=\"padding\" href=\"#\" data-clear-history-toggle><i
                    class=\"fa fa-fw fa-history\"></i> {{ 'THEME_LEARN2_CLEAR_HISTORY'|t }}</a><br/>

        <section id=\"footer\">
            {% if config.plugins.feed.enabled and pages.find('/feed') %}
              <a class=\"button\" href=\"{{ base_url }}/feed.atom\"><i class=\"fa fa-rss-square\"></i> Atom 1.0</a>
              <a class=\"button\" href=\"{{ base_url }}/feed.rss\"><i class=\"fa fa-rss-square\"></i> RSS</a><br><br>
            {% endif %}
            <p>{{ 'THEME_LEARN2_BUILT_WITH_GRAV'|t }}</p>
        </section>
    </div>
</div>
", "partials/sidebar.html.twig", "/var/www/html/grav/user/themes/learn2-git-sync/templates/partials/sidebar.html.twig");
    }
}
