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

/* forms/fields/enc-password/enc-password.html.twig */
class __TwigTemplate_ea87b72b9e8c444fef68de963c47a1f6a1dca62cdc1c6e20f7bd33b85e1f2db5 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'input_attributes' => [$this, 'block_input_attributes'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $context["passwordStored"] = ((($context["value"] ?? null)) ? (1) : (0));
        // line 4
        $context["isEncrypted"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->startsWithFilter(($context["value"] ?? null), "gitsync-");
        // line 5
        $context["value"] = "";
        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/enc-password/enc-password.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_input_attributes($context, array $blocks = [])
    {
        // line 8
        echo "    type=\"password\"
    class=\"input\"
    placeholder=\"";
        // line 10
        ((($context["passwordStored"] ?? null)) ? (print (((($context["isEncrypted"] ?? null)) ? ("Your password is securely stored.") : ("Your password is stored but not encrypted.")))) : (print (twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "placeholder", []), "html", null, true))));
        echo "\"
    ";
        // line 11
        $this->displayParentBlock("input_attributes", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "forms/fields/enc-password/enc-password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 11,  53 => 10,  49 => 8,  46 => 7,  41 => 1,  39 => 5,  37 => 4,  35 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"forms/field.html.twig\" %}

{% set passwordStored = value ? 1 : 0 %}
{% set isEncrypted = value|starts_with('gitsync-') %}
{% set value = '' %}

{% block input_attributes %}
    type=\"password\"
    class=\"input\"
    placeholder=\"{{ passwordStored ? (isEncrypted ? 'Your password is securely stored.' : 'Your password is stored but not encrypted.') : field.placeholder }}\"
    {{ parent() }}
{% endblock %}
", "forms/fields/enc-password/enc-password.html.twig", "/var/www/html/grav/user/plugins/git-sync/templates/forms/fields/enc-password/enc-password.html.twig");
    }
}
