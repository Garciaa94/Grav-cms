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

/* default.html.twig */
class __TwigTemplate_1a317327a49d1295d8224006d6b5d71fe9846850fff06ba1d8c4c59ffdd287c5 extends \Twig\Template
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
        $this->loadTemplate("default.html.twig", "default.html.twig", 1, "2110003470")->display(twig_array_merge($context, ["github_link_position" => false]));
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'partials/base.html.twig' with { github_link_position: false } %}

    {% block content %}
        {% include 'partials/page.html.twig' %}
    {% endblock %}

    {% block footer %}{% endblock %}

{% endembed %}
", "default.html.twig", "/var/www/html/grav/user/themes/learn2/templates/default.html.twig");
    }
}


/* default.html.twig */
class __TwigTemplate_1a317327a49d1295d8224006d6b5d71fe9846850fff06ba1d8c4c59ffdd287c5___2110003470 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/base.html.twig", "default.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "        ";
        $this->loadTemplate("partials/page.html.twig", "default.html.twig", 4)->display($context);
        // line 5
        echo "    ";
    }

    // line 7
    public function block_footer($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 7,  103 => 5,  100 => 4,  97 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'partials/base.html.twig' with { github_link_position: false } %}

    {% block content %}
        {% include 'partials/page.html.twig' %}
    {% endblock %}

    {% block footer %}{% endblock %}

{% endembed %}
", "default.html.twig", "/var/www/html/grav/user/themes/learn2/templates/default.html.twig");
    }
}
