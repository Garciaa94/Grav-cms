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

/* partials/simplesearch_searchbox.html.twig */
class __TwigTemplate_5e79568babfbab72637525c4f4af4193f27685db43e0d9630f51664db98d198c extends \Twig\Template
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
        $context["min_chars"] = $this->getAttribute(($context["config"] ?? null), "get", [0 => "plugins.simplesearch.min_query_length", 1 => 3], "method");
        // line 2
        echo "<div class=\"search-wrapper\">
    <form name=\"search\" data-simplesearch-form>
        <input
            name=\"searchfield\"
            class=\"search-input\"
            type=\"text\"
            ";
        // line 8
        if ((($context["min_chars"] ?? null) > 0)) {
            echo " min=\"";
            echo ($context["min_chars"] ?? null);
            echo "\" ";
        }
        // line 9
        echo "            required
            placeholder=\"";
        // line 10
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "PLUGIN_SIMPLESEARCH.SEARCH_PLACEHOLDER");
        echo "\"
            value=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["query"] ?? null));
        echo "\"
            data-search-invalid=\"";
        // line 12
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "PLUGIN_SIMPLESEARCH.SEARCH_FIELD_MINIMUM_CHARACTERS", ($context["min_chars"] ?? null));
        echo "\"
            data-search-separator=\"";
        // line 13
        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", []);
        echo "\"
            data-search-input=\"";
        // line 14
        echo ($context["base_url"] ?? null);
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "simplesearch", []), "route", []) == "@self")) ? ("") : (((($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "simplesearch", []), "route", []) == "/")) ? ("") : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "simplesearch", []), "route", [])))));
        echo "/query\"
        />
        ";
        // line 16
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "simplesearch", []), "display_button", [])) {
            // line 17
            echo "            <button type=\"submit\" class=\"search-submit\">
                <img src=\"";
            // line 18
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("plugin://simplesearch/assets/search.svg");
            echo "\" />
            </button>
        ";
        }
        // line 21
        echo "    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/simplesearch_searchbox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 21,  76 => 18,  73 => 17,  71 => 16,  65 => 14,  61 => 13,  57 => 12,  53 => 11,  49 => 10,  46 => 9,  40 => 8,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set min_chars = config.get('plugins.simplesearch.min_query_length', 3) %}
<div class=\"search-wrapper\">
    <form name=\"search\" data-simplesearch-form>
        <input
            name=\"searchfield\"
            class=\"search-input\"
            type=\"text\"
            {% if min_chars > 0 %} min=\"{{- min_chars -}}\" {% endif %}
            required
            placeholder=\"{{\"PLUGIN_SIMPLESEARCH.SEARCH_PLACEHOLDER\"|t}}\"
            value=\"{{ query|e }}\"
            data-search-invalid=\"{{ \"PLUGIN_SIMPLESEARCH.SEARCH_FIELD_MINIMUM_CHARACTERS\"|t(min_chars)|raw }}\"
            data-search-separator=\"{{ config.system.param_sep }}\"
            data-search-input=\"{{ base_url }}{{ config.plugins.simplesearch.route == '@self' ? '' : (config.plugins.simplesearch.route == '/' ? '' : config.plugins.simplesearch.route) }}/query\"
        />
        {% if config.plugins.simplesearch.display_button %}
            <button type=\"submit\" class=\"search-submit\">
                <img src=\"{{ url('plugin://simplesearch/assets/search.svg') }}\" />
            </button>
        {% endif %}
    </form>
</div>
", "partials/simplesearch_searchbox.html.twig", "/var/www/html/grav/user/plugins/simplesearch/templates/partials/simplesearch_searchbox.html.twig");
    }
}
