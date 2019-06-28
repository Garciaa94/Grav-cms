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

/* partials/langswitcher.html.twig */
class __TwigTemplate_60abd4ed0c6f169c013a1d8e5377ac665e2e1bd099432d08872589c9854a7343 extends \Twig\Template
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
        echo "<div class=\"navbar-nav mr-auto\">
    <div class=\"nav-item dropdown\">
        <a id=\"languageSelector\" href=\"#\" class=\"nav-link dropdown-toggle\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
           aria-expanded=\"false\">
            ";
        // line 5
        echo twig_capitalize_string_filter($this->env, call_user_func_array($this->env->getFunction('native_name')->getCallable(), [$this->getAttribute(($context["langswitcher"] ?? null), "current", [])]));
        echo "
        </a>
        <div class=\"dropdown-menu\" aria-labelledby=\"languageSelector\">
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["langswitcher"] ?? null), "languages", []));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 9
            echo "
                ";
            // line 10
            $context["show_language"] = true;
            // line 11
            echo "                ";
            if (($context["language"] == $this->getAttribute(($context["langswitcher"] ?? null), "current", []))) {
                // line 12
                echo "                    ";
                $context["lang_url"] = $this->getAttribute(($context["page"] ?? null), "url", []);
                // line 13
                echo "                    ";
                $context["active_class"] = " active";
                // line 14
                echo "                ";
            } else {
                // line 15
                echo "                    ";
                $context["base_lang_url"] = (($context["base_url_simple"] ?? null) . $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getLanguageURLPrefix", [0 => $context["language"]], "method"));
                // line 16
                echo "                    ";
                $context["lang_url"] = ((($context["base_lang_url"] ?? null) . $this->getAttribute(($context["langswitcher"] ?? null), "page_route", [])) . $this->getAttribute(($context["page"] ?? null), "urlExtension", []));
                // line 17
                echo "                    ";
                $context["untranslated_pages_behavior"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "plugins", []), "langswitcher", []), "untranslated_pages_behavior", []);
                // line 18
                echo "                    ";
                if ((($context["untranslated_pages_behavior"] ?? null) != "none")) {
                    // line 19
                    echo "                        ";
                    $context["translated_page"] = $this->getAttribute($this->getAttribute(($context["langswitcher"] ?? null), "translated_pages", []), $context["language"], [], "array");
                    // line 20
                    echo "                        ";
                    if (( !($context["translated_page"] ?? null) ||  !$this->getAttribute(($context["translated_page"] ?? null), "published", []))) {
                        // line 21
                        echo "                            ";
                        if ((($context["untranslated_pages_behavior"] ?? null) == "redirect")) {
                            // line 22
                            echo "                                ";
                            $context["lang_url"] = (($context["base_lang_url"] ?? null) . "/");
                            // line 23
                            echo "                            ";
                        } elseif ((($context["untranslated_pages_behavior"] ?? null) == "hide")) {
                            // line 24
                            echo "                                ";
                            $context["show_language"] = false;
                            // line 25
                            echo "                            ";
                        }
                        // line 26
                        echo "                        ";
                    }
                    // line 27
                    echo "                    ";
                }
                // line 28
                echo "                    ";
                $context["active_class"] = "";
                // line 29
                echo "                ";
            }
            // line 30
            echo "
                ";
            // line 31
            if (($context["show_language"] ?? null)) {
                // line 32
                echo "                    <a href=\"";
                echo (($context["lang_url"] ?? null) . $this->getAttribute(($context["uri"] ?? null), "params", []));
                echo "\" class=\"dropdown-item\">";
                echo twig_capitalize_string_filter($this->env, call_user_func_array($this->env->getFunction('native_name')->getCallable(), [$context["language"]]));
                echo "</a>
                ";
            }
            // line 34
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/langswitcher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 36,  121 => 34,  113 => 32,  111 => 31,  108 => 30,  105 => 29,  102 => 28,  99 => 27,  96 => 26,  93 => 25,  90 => 24,  87 => 23,  84 => 22,  81 => 21,  78 => 20,  75 => 19,  72 => 18,  69 => 17,  66 => 16,  63 => 15,  60 => 14,  57 => 13,  54 => 12,  51 => 11,  49 => 10,  46 => 9,  42 => 8,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"navbar-nav mr-auto\">
    <div class=\"nav-item dropdown\">
        <a id=\"languageSelector\" href=\"#\" class=\"nav-link dropdown-toggle\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
           aria-expanded=\"false\">
            {{ native_name(langswitcher.current)|capitalize }}
        </a>
        <div class=\"dropdown-menu\" aria-labelledby=\"languageSelector\">
            {% for language in langswitcher.languages %}

                {% set show_language = true %}
                {% if language == langswitcher.current %}
                    {% set lang_url = page.url %}
                    {% set active_class = ' active' %}
                {% else %}
                    {% set base_lang_url = base_url_simple ~ grav.language.getLanguageURLPrefix(language) %}
                    {% set lang_url = base_lang_url ~ langswitcher.page_route ~ page.urlExtension %}
                    {% set untranslated_pages_behavior = grav.config.plugins.langswitcher.untranslated_pages_behavior %}
                    {% if untranslated_pages_behavior != 'none' %}
                        {% set translated_page = langswitcher.translated_pages[language] %}
                        {% if (not translated_page) or (not translated_page.published) %}
                            {% if untranslated_pages_behavior == 'redirect' %}
                                {% set lang_url = base_lang_url ~ '/' %}
                            {% elseif untranslated_pages_behavior == 'hide' %}
                                {% set show_language = false %}
                            {% endif %}
                        {% endif %}
                    {% endif %}
                    {% set active_class = '' %}
                {% endif %}

                {% if show_language %}
                    <a href=\"{{ lang_url ~ uri.params }}\" class=\"dropdown-item\">{{ native_name(language)|capitalize }}</a>
                {% endif %}

            {% endfor %}
        </div>
    </div>
</div>
", "partials/langswitcher.html.twig", "/var/www/html/grav/user/themes/bootstrap-blog/templates/partials/langswitcher.html.twig");
    }
}
