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

/* partials/github_note.html.twig */
class __TwigTemplate_f0775e5201bf58efeae8e350836250d661ea8f91e346d0cfb399e7870e70f883 extends \Twig\Template
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
        echo "<blockquote><blockquote><blockquote><blockquote><blockquote>
<p>
    ";
        // line 3
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "THEME_LEARN2_GIT_NOTE");
        echo "

    ";
        // line 5
        $this->loadTemplate("partials/github_link.html.twig", "partials/github_note.html.twig", 5)->display($context);
        // line 6
        echo "</p>
</blockquote></blockquote></blockquote></blockquote></blockquote>
";
    }

    public function getTemplateName()
    {
        return "partials/github_note.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 6,  39 => 5,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<blockquote><blockquote><blockquote><blockquote><blockquote>
<p>
    {{ 'THEME_LEARN2_GIT_NOTE'|t }}

    {% include 'partials/github_link.html.twig' %}
</p>
</blockquote></blockquote></blockquote></blockquote></blockquote>
", "partials/github_note.html.twig", "/var/www/html/grav/user/themes/learn2-git-sync/templates/partials/github_note.html.twig");
    }
}
