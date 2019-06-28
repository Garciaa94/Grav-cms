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

/* partials/simplesearch_base.html.twig */
class __TwigTemplate_2fbdd67a7edd7ea7e1ed6c2b1a2bffbe416989233ccf42e03399a1f1e8d34d55 extends \Twig\Template
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
        $this->loadTemplate("partials/simplesearch_base.html.twig", "partials/simplesearch_base.html.twig", 1, "59119603")->display($context);
    }

    public function getTemplateName()
    {
        return "partials/simplesearch_base.html.twig";
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
        return new Source("{% embed 'partials/base.html.twig' %}

    {% block content %}
      <div class=\"modular-row box-inset-shadow showcase-text bg-primary text-light\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col text-left\">
              <h2>{{ 'BOOTSTRAP_BLOG.SIMPLESEARCH.SEARCH_RESULTS'|t }}</h2>
              <h4 class=\"font-weight-light\">
                  {% if query %}
                      {% set count = search_results ? search_results.count : 0 %}
                      {% if count == 1 %}
                          {{ \"PLUGIN_SIMPLESEARCH.SEARCH_RESULTS_SUMMARY_SINGULAR\"|t(query|e)|raw }}
                      {% else %}
                          {{ \"PLUGIN_SIMPLESEARCH.SEARCH_RESULTS_SUMMARY_PLURAL\"|t(query|e, count)|raw }}
                      {% endif %}
                  {% endif %}
              </h4>
            </div>
            <div class=\"col-12 col-md-4 mt-auto\">
                {% include 'partials/simplesearch_searchbox.html.twig' with { outter_classes: 'input-searchbox-addon' } %}   {# TODO apply faded css ;) #}
            </div>
          </div>
        </div>
      </div>
      <div class=\"container search-results\">
        <div class=\"row\">
          <div class=\"col-12 py-4\">
              {% for result in search_results %}
                  {% include 'partials/layouts/' ~ theme_config.simplesearch.layout|defined('boxed') ~ '.html.twig' with { 'page':result } %}
              {% endfor %}
          </div>
        </div>
      </div>
    {% endblock %}

{% endembed %}
", "partials/simplesearch_base.html.twig", "/var/www/html/grav/user/themes/bootstrap-blog/templates/partials/simplesearch_base.html.twig");
    }
}


/* partials/simplesearch_base.html.twig */
class __TwigTemplate_2fbdd67a7edd7ea7e1ed6c2b1a2bffbe416989233ccf42e03399a1f1e8d34d55___59119603 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/base.html.twig", "partials/simplesearch_base.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "      <div class=\"modular-row box-inset-shadow showcase-text bg-primary text-light\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col text-left\">
              <h2>";
        // line 8
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "BOOTSTRAP_BLOG.SIMPLESEARCH.SEARCH_RESULTS");
        echo "</h2>
              <h4 class=\"font-weight-light\">
                  ";
        // line 10
        if (($context["query"] ?? null)) {
            // line 11
            echo "                      ";
            $context["count"] = ((($context["search_results"] ?? null)) ? ($this->getAttribute(($context["search_results"] ?? null), "count", [])) : (0));
            // line 12
            echo "                      ";
            if ((($context["count"] ?? null) == 1)) {
                // line 13
                echo "                          ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "PLUGIN_SIMPLESEARCH.SEARCH_RESULTS_SUMMARY_SINGULAR", twig_escape_filter($this->env, ($context["query"] ?? null)));
                echo "
                      ";
            } else {
                // line 15
                echo "                          ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "PLUGIN_SIMPLESEARCH.SEARCH_RESULTS_SUMMARY_PLURAL", twig_escape_filter($this->env, ($context["query"] ?? null)), ($context["count"] ?? null));
                echo "
                      ";
            }
            // line 17
            echo "                  ";
        }
        // line 18
        echo "              </h4>
            </div>
            <div class=\"col-12 col-md-4 mt-auto\">
                ";
        // line 21
        $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "partials/simplesearch_base.html.twig", 21)->display(twig_array_merge($context, ["outter_classes" => "input-searchbox-addon"]));
        echo "   ";
        // line 22
        echo "            </div>
          </div>
        </div>
      </div>
      <div class=\"container search-results\">
        <div class=\"row\">
          <div class=\"col-12 py-4\">
              ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["search_results"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 30
            echo "                  ";
            $this->loadTemplate((("partials/layouts/" . $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "simplesearch", []), "layout", []), "boxed")) . ".html.twig"), "partials/simplesearch_base.html.twig", 30)->display(twig_array_merge($context, ["page" => $context["result"]]));
            // line 31
            echo "              ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "          </div>
        </div>
      </div>
    ";
    }

    public function getTemplateName()
    {
        return "partials/simplesearch_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 32,  193 => 31,  190 => 30,  173 => 29,  164 => 22,  161 => 21,  156 => 18,  153 => 17,  147 => 15,  141 => 13,  138 => 12,  135 => 11,  133 => 10,  128 => 8,  122 => 4,  119 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'partials/base.html.twig' %}

    {% block content %}
      <div class=\"modular-row box-inset-shadow showcase-text bg-primary text-light\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col text-left\">
              <h2>{{ 'BOOTSTRAP_BLOG.SIMPLESEARCH.SEARCH_RESULTS'|t }}</h2>
              <h4 class=\"font-weight-light\">
                  {% if query %}
                      {% set count = search_results ? search_results.count : 0 %}
                      {% if count == 1 %}
                          {{ \"PLUGIN_SIMPLESEARCH.SEARCH_RESULTS_SUMMARY_SINGULAR\"|t(query|e)|raw }}
                      {% else %}
                          {{ \"PLUGIN_SIMPLESEARCH.SEARCH_RESULTS_SUMMARY_PLURAL\"|t(query|e, count)|raw }}
                      {% endif %}
                  {% endif %}
              </h4>
            </div>
            <div class=\"col-12 col-md-4 mt-auto\">
                {% include 'partials/simplesearch_searchbox.html.twig' with { outter_classes: 'input-searchbox-addon' } %}   {# TODO apply faded css ;) #}
            </div>
          </div>
        </div>
      </div>
      <div class=\"container search-results\">
        <div class=\"row\">
          <div class=\"col-12 py-4\">
              {% for result in search_results %}
                  {% include 'partials/layouts/' ~ theme_config.simplesearch.layout|defined('boxed') ~ '.html.twig' with { 'page':result } %}
              {% endfor %}
          </div>
        </div>
      </div>
    {% endblock %}

{% endembed %}
", "partials/simplesearch_base.html.twig", "/var/www/html/grav/user/themes/bootstrap-blog/templates/partials/simplesearch_base.html.twig");
    }
}
