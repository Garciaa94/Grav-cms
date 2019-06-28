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
class __TwigTemplate_59723a0b71534c39451b9687277ed9a2e2ca1b1e5939ec22020e5dd88da8a795 extends \Twig\Template
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
        echo "<nav class=\"navbar navbar-default navbar-custom navbar-fixed-top\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header page-scroll\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar\">
                <span class=\"sr-only\">";
        // line 5
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "THEME_CLEAN_BLOG.TOGGLE_NAVIGATION");
        echo "</span>
                ";
        // line 6
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "THEME_CLEAN_BLOG.MENU");
        echo " <i class=\"fa fa-bars\"></i>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 8
        echo (((($context["base_url"] ?? null) == "")) ? ("/") : (($context["base_url"] ?? null)));
        echo "\">";
        echo $this->getAttribute(($context["site"] ?? null), "title", []);
        echo "</a>
        </div>

        <div class=\"collapse navbar-collapse\" id=\"navbar\">
            <ul class=\"nav navbar-nav navbar-right\">
                ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", []), "visible", []));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 14
            echo "                <li>
                    <a href=\"";
            // line 15
            echo $this->getAttribute($context["p"], "url", []);
            echo "\">";
            echo $this->getAttribute($context["p"], "menu", []);
            echo "</a>
                </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "            </ul>
        </div>
    </div>
</nav>
";
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
        return array (  73 => 18,  62 => 15,  59 => 14,  55 => 13,  45 => 8,  40 => 6,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-default navbar-custom navbar-fixed-top\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header page-scroll\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar\">
                <span class=\"sr-only\">{{ 'THEME_CLEAN_BLOG.TOGGLE_NAVIGATION'|t }}</span>
                {{ 'THEME_CLEAN_BLOG.MENU'|t }} <i class=\"fa fa-bars\"></i>
            </button>
            <a class=\"navbar-brand\" href=\"{{ base_url == '' ? '/' : base_url }}\">{{ site.title }}</a>
        </div>

        <div class=\"collapse navbar-collapse\" id=\"navbar\">
            <ul class=\"nav navbar-nav navbar-right\">
                {% for p in pages.children.visible %}
                <li>
                    <a href=\"{{ p.url }}\">{{ p.menu }}</a>
                </li>
                {% endfor %}
            </ul>
        </div>
    </div>
</nav>
", "partials/navigation.html.twig", "/var/www/html/grav/user/themes/clean-blog/templates/partials/navigation.html.twig");
    }
}
