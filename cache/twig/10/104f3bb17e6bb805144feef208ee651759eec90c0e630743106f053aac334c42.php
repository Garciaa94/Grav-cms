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

/* feed.atom.twig */
class __TwigTemplate_10e25e3dc140f9fd999f1b8d4e8501dd9c3613d88b84043535280c092de8ae7c extends \Twig\Template
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
        $context["collection"] = (((isset($context["collection"]) || array_key_exists("collection", $context))) ? (_twig_default_filter(($context["collection"] ?? null), $this->getAttribute(($context["page"] ?? null), "collection", []))) : ($this->getAttribute(($context["page"] ?? null), "collection", [])));
        // line 2
        echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>
<feed xmlns=\"http://www.w3.org/2005/Atom\">
    <title>";
        // line 4
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "</title>
    <link href=\"";
        // line 5
        echo $this->getAttribute(($context["uri"] ?? null), "rootUrl", [0 => true], "method");
        echo $this->getAttribute(($context["uri"] ?? null), "route", [], "method");
        echo ".";
        echo $this->getAttribute(($context["uri"] ?? null), "extension", [], "method");
        echo "\" rel=\"self\" />
    <subtitle>";
        // line 6
        echo $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "description", []);
        echo "</subtitle>
    <updated>";
        // line 7
        echo twig_date_format_filter($this->env, $this->getAttribute(twig_first($this->env, ($context["collection"] ?? null)), "date", []), "Y-m-d\\TH:i:sP");
        echo "</updated>
    <author>
        <name>";
        // line 9
        echo (($this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", [], "any", false, true), "name", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", [], "any", false, true), "name", []), "Grav User")) : ("Grav User"));
        echo "</name>
    </author>
    <id>";
        // line 11
        echo $this->getAttribute(($context["uri"] ?? null), "rootUrl", [0 => true], "method");
        echo $this->getAttribute(($context["uri"] ?? null), "route", [], "method");
        echo "</id>
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 13
            echo "    ";
            $context["banner"] = twig_first($this->env, $this->getAttribute($this->getAttribute($context["item"], "media", []), "images", []));
            // line 14
            echo "    <entry>
        <title>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", []));
            echo "</title>
        <id>";
            // line 16
            echo $this->getAttribute($context["item"], "url", [0 => true], "method");
            echo "</id>
        <updated>";
            // line 17
            echo twig_date_format_filter($this->env, $this->getAttribute($context["item"], "date", []), "Y-m-d\\TH:i:sP");
            echo "</updated>
        <published>";
            // line 18
            echo twig_date_format_filter($this->env, $this->getAttribute($context["item"], "date", []), "Y-m-d\\TH:i:sP");
            echo "</published>
        <link href=\"";
            // line 19
            echo $this->getAttribute($context["item"], "url", [0 => true], "method");
            echo "\"/>
        ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["item"], "taxonomy", []), "tag", []));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 21
                echo "        <category term=\"";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, $context["tag"]));
                echo "\" label=\"";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["tag"]));
                echo "\" />
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "        <content type=\"html\">
            <![CDATA[
            ";
            // line 25
            if (($context["banner"] ?? null)) {
                // line 26
                echo "            ";
                echo $this->getAttribute($this->getAttribute(($context["banner"] ?? null), "cropZoom", [0 => 600, 1 => 400], "method"), "html", []);
                echo "
            ";
            }
            // line 28
            echo "            ";
            echo \Grav\Common\Utils::safeTruncateHTML($this->getAttribute($context["item"], "content", []), $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "length", []));
            echo "
            ]]>
        </content>
    </entry>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "</feed>
";
    }

    public function getTemplateName()
    {
        return "feed.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 33,  123 => 28,  117 => 26,  115 => 25,  111 => 23,  100 => 21,  96 => 20,  92 => 19,  88 => 18,  84 => 17,  80 => 16,  76 => 15,  73 => 14,  70 => 13,  66 => 12,  61 => 11,  56 => 9,  51 => 7,  47 => 6,  40 => 5,  36 => 4,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set collection = collection|default(page.collection) %}
<?xml version=\"1.0\" encoding=\"utf-8\"?>
<feed xmlns=\"http://www.w3.org/2005/Atom\">
    <title>{{ page.title }}</title>
    <link href=\"{{ uri.rootUrl(true) }}{{ uri.route() }}.{{ uri.extension() }}\" rel=\"self\" />
    <subtitle>{{ collection.params.description }}</subtitle>
    <updated>{{ collection|first.date|date(\"Y-m-d\\\\TH:i:sP\") }}</updated>
    <author>
        <name>{{ site.author.name|default(\"Grav User\") }}</name>
    </author>
    <id>{{ uri.rootUrl(true) }}{{ uri.route() }}</id>
    {% for item in collection %}
    {% set banner = item.media.images|first %}
    <entry>
        <title>{{ item.title|e }}</title>
        <id>{{ item.url(true) }}</id>
        <updated>{{ item.date|date(\"Y-m-d\\\\TH:i:sP\") }}</updated>
        <published>{{ item.date|date(\"Y-m-d\\\\TH:i:sP\") }}</published>
        <link href=\"{{ item.url(true) }}\"/>
        {% for tag in item.taxonomy.tag %}
        <category term=\"{{ tag|lower|e }}\" label=\"{{ tag|capitalize|e }}\" />
        {% endfor %}
        <content type=\"html\">
            <![CDATA[
            {% if banner %}
            {{ banner.cropZoom(600,400).html|raw }}
            {% endif %}
            {{ item.content|safe_truncate_html(collection.params.length)|raw }}
            ]]>
        </content>
    </entry>
    {% endfor %}
</feed>
", "feed.atom.twig", "/var/www/html/grav/user/plugins/feed/templates/feed.atom.twig");
    }
}
