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

/* partials/comments.html.twig */
class __TwigTemplate_08c2186285f07d560928b47cb6ffae787e62c5fb0b2bb1981ea2aebc2b73ab2f extends \Twig\Template
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
        if ($this->getAttribute(($context["config"] ?? null), "disqus_shortname", [])) {
            // line 2
            echo "    <div id=\"disqus_thread\"></div>
    <script>
        var disqus_config = function () {
            this.page.url = '";
            // line 5
            echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true], "method");
            echo "';
            this.page.identifier = '";
            // line 6
            echo $this->getAttribute(($context["page"] ?? null), "id", []);
            echo "';
            this.page.title = '";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html");
            echo "';
        };

        (function () { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
            s.src = 'https://";
            // line 12
            echo $this->getAttribute(($context["config"] ?? null), "disqus_shortname", []);
            echo ".disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href=\"https://disqus.com/?ref_noscript\">comments powered by Disqus.</a></noscript>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/comments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 12,  45 => 7,  41 => 6,  37 => 5,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if config.disqus_shortname %}
    <div id=\"disqus_thread\"></div>
    <script>
        var disqus_config = function () {
            this.page.url = '{{ page.url(true) }}';
            this.page.identifier = '{{ page.id }}';
            this.page.title = '{{ page.title|raw|e('html') }}';
        };

        (function () { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
            s.src = 'https://{{ config.disqus_shortname }}.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href=\"https://disqus.com/?ref_noscript\">comments powered by Disqus.</a></noscript>
{% endif %}
", "partials/comments.html.twig", "/var/www/html/grav/user/themes/bootstrap-blog/templates/partials/comments.html.twig");
    }
}
