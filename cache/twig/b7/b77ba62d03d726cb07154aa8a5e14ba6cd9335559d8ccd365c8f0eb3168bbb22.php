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

/* partials/footer.html.twig */
class __TwigTemplate_273836c32d1927f0ad5c6d90bdcd1128e13787580ef38b61880bd64d2e45ccd9 extends \Twig\Template
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
        echo "<hr>

<footer>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                ";
        // line 7
        if ((twig_length_filter($this->env, $this->getAttribute(($context["theme_config"] ?? null), "social_icons", [])) > 0)) {
            // line 8
            echo "                <ul class=\"list-inline text-center\">
                    ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["theme_config"] ?? null), "social_icons", []));
            foreach ($context['_seq'] as $context["_key"] => $context["icon"]) {
                // line 10
                echo "                    <li>
                        <a href=\"";
                // line 11
                echo $this->getAttribute($context["icon"], "url", []);
                echo "\" target=\"_blank\">
                            <span class=\"fa-stack fa-lg\">
                                <i class=\"fa fa-circle fa-stack-2x\"></i>
                                <i class=\"fa fa-stack-1x fa-inverse ";
                // line 14
                echo $this->getAttribute($context["icon"], "icon", []);
                echo "\"></i>
                            </span>
                        </a>
                    </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['icon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "                </ul>
                ";
        }
        // line 21
        echo "                ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "copyright", [])) {
            // line 22
            echo "                <p class=\"copyright text-muted\">";
            echo $this->getAttribute(($context["theme_config"] ?? null), "copyright", []);
            echo "</p>
                ";
        }
        // line 24
        echo "            </div>
        </div>
    </div>
</footer>
";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 24,  74 => 22,  71 => 21,  67 => 19,  56 => 14,  50 => 11,  47 => 10,  43 => 9,  40 => 8,  38 => 7,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<hr>

<footer>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                {% if theme_config.social_icons|length > 0 %}
                <ul class=\"list-inline text-center\">
                    {% for icon in theme_config.social_icons %}
                    <li>
                        <a href=\"{{ icon.url }}\" target=\"_blank\">
                            <span class=\"fa-stack fa-lg\">
                                <i class=\"fa fa-circle fa-stack-2x\"></i>
                                <i class=\"fa fa-stack-1x fa-inverse {{ icon.icon }}\"></i>
                            </span>
                        </a>
                    </li>
                    {% endfor %}
                </ul>
                {% endif %}
                {% if theme_config.copyright %}
                <p class=\"copyright text-muted\">{{ theme_config.copyright }}</p>
                {% endif %}
            </div>
        </div>
    </div>
</footer>
", "partials/footer.html.twig", "/var/www/html/grav/user/themes/clean-blog/templates/partials/footer.html.twig");
    }
}
