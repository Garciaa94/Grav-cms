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

/* presentation.html.twig */
class __TwigTemplate_ce49bd64d68ac2947fb5e0c591594b01a4ddd027b17be3b3a9fb77a142866cc0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'meta' => [$this, 'block_meta'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'scripts' => [$this, 'block_scripts'],
            'content' => [$this, 'block_content'],
            'plugin_init' => [$this, 'block_plugin_init'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "pages", []), "theme", []));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getLanguage", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getLanguage", [])) : ("en"));
        echo "\">
  ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 88
        echo "  <body id=\"top\" class=\"";
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "body_classes", []);
        echo "\">
    ";
        // line 89
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "presentation", [], "array"), "transition", [])) {
            // line 90
            echo "    <div id=\"page_transition\">
      <div class=\"la-line-scale la-dark la-3x\">
        <div style=\"color: #0B110D;\"></div>
        <div style=\"color: #2C4D56;\"></div>
        <div style=\"color: #C3AA72;\"></div>
        <div style=\"color: #DC7612;\"></div>
        <div style=\"color: #BD3200;\"></div>
      </div>
    </div>
    ";
        }
        // line 100
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        // line 107
        echo "    ";
        $this->displayBlock('plugin_init', $context, $blocks);
        // line 162
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "presentation", [], "array"), "sync", []) == "browser")) {
            // line 163
            echo "      ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "plugin://presentation/js/broadcast.js", 1 => ["group" => "bottom"]], "method");
            // line 164
            echo "    ";
        } elseif (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "presentation", [], "array"), "sync", []) == "poll")) {
            // line 165
            echo "      ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "plugin://presentation/node_modules/axios/dist/axios.min.js", 1 => ["group" => "presentation"]], "method");
            // line 166
            echo "      ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "plugin://presentation/js/poll.js", 1 => ["group" => "bottom"]], "method");
            // line 167
            echo "    ";
        }
        // line 168
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "presentation", [], "array"), "all_assets", []) || $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "debugger", []), "enabled", []))) {
            // line 169
            echo "      ";
            echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
            echo "
      ";
            // line 170
            echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
            echo "
    ";
        }
        // line 172
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
    <div id=\"snackbar\">
      <span id=\"snackbar-message\"></span>
      <a href=\"javascript:window.location.reload(true)\">Reload?</a>
    </div>
  </body>
</html>";
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        // line 5
        echo "  <head>
    ";
        // line 6
        $this->displayBlock('meta', $context, $blocks);
        // line 12
        echo "    <link rel=\"icon\" type=\"image/png\" href=\"";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.png");
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 13
        echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method");
        echo "\" />
    ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 55
        echo "    ";
        $this->displayBlock('scripts', $context, $blocks);
        // line 83
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [0 => "critical"], "method");
        echo "
    ";
        // line 84
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "critical"], "method");
        echo "
    ";
        // line 85
        echo $this->getAttribute(($context["assets"] ?? null), "css", [0 => "presentation"], "method");
        echo "
  </head>
  ";
    }

    // line 6
    public function block_meta($context, array $blocks = [])
    {
        // line 7
        echo "      <meta charset=\"utf-8\" />
      <title>";
        // line 8
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
        echo "</title>
      ";
        // line 9
        $this->loadTemplate("partials/metadata.html.twig", "presentation.html.twig", 9)->display($context);
        // line 10
        echo "      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    ";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 15
        echo "      ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "presentation", [], "array"), "transition", [])) {
            // line 16
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "plugin://presentation/css/transition.css", 1 => ["group" => "critical"]], "method");
            // line 17
            echo "      ";
        }
        // line 18
        echo "      ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "presentation", [], "array"), "builtin_css", [])) {
            // line 19
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "plugin://presentation/node_modules/reveal.js/css/reveal.css", 1 => ["group" => "presentation"]], "method");
            // line 20
            echo "        ";
            if (($this->getAttribute(($context["uri"] ?? null), "query", [0 => "print-pdf"], "method") != "true")) {
                // line 21
                echo "          ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "presentation", [], "array"), "theme", []) != "none")) {
                    // line 22
                    echo "            ";
                    $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => (("user://plugins/presentation/node_modules/reveal.js/css/theme/" . $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "presentation", [], "array"), "theme", [])) . ".css"), 1 => ["group" => "presentation"]], "method");
                    // line 23
                    echo "          ";
                }
                // line 24
                echo "        ";
            } else {
                // line 25
                echo "          ";
                $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "plugin://presentation/node_modules/reveal.js/css/print/pdf.css", 1 => ["group" => "presentation"]], "method");
                // line 26
                echo "          ";
                if (($this->getAttribute(($context["uri"] ?? null), "query", [0 => "theme"], "method") == "preset")) {
                    // line 27
                    echo "            ";
                    $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => (("user://plugins/presentation/node_modules/reveal.js/css/theme/" . $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "presentation", [], "array"), "theme", [])) . ".css"), 1 => ["group" => "presentation"]], "method");
                    // line 28
                    echo "          ";
                } else {
                    // line 29
                    echo "            ";
                    $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "plugin://presentation/css/paper.css", 1 => ["group" => "presentation"]], "method");
                    // line 30
                    echo "          ";
                }
                // line 31
                echo "          <style type=\"text/css\">
          .reveal.print {
            background: unset !important;
          }
          .reveal.print .slides section {
            color: black !important;
          }
          .reveal.print embed, iframe, video, .pause-overlay, #snackbar {
            display: none;
          }
          .reveal.print pre code {
            padding: 0 !important;
            border: 0 !important;
          }
          </style>
        ";
            }
            // line 47
            echo "      ";
        }
        // line 48
        echo "      ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "presentation", [], "array"), "plugin_css", []) && ($this->getAttribute(($context["uri"] ?? null), "query", [0 => "print-pdf"], "method") != "true"))) {
            // line 49
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "plugin://presentation/css/presentation.css", 1 => ["group" => "presentation"]], "method");
            // line 50
            echo "      ";
        }
        // line 51
        echo "      ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "presentation", [], "array"), "theme_css", [])) {
            // line 52
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/custom.css", 1 => ["group" => "presentation"]], "method");
            // line 53
            echo "      ";
        }
        // line 54
        echo "    ";
    }

    // line 55
    public function block_scripts($context, array $blocks = [])
    {
        // line 56
        echo "      ";
        $this->getAttribute(($context["assets"] ?? null), "addInlineJs", [0 => (("const reveal_init = " . ($context["reveal_init"] ?? null)) . ";"), 1 => ["group" => "presentation"]], "method");
        // line 57
        echo "      ";
        // line 58
        echo "      ";
        // line 59
        echo "      ";
        $this->getAttribute(($context["assets"] ?? null), "addInlineJs", [0 => (("const presentationAPIRoute = \"/" . $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "presentation", [], "array"), "api_route", [])) . "\";"), 1 => ["group" => "presentation"]], "method");
        // line 60
        echo "      ";
        $this->getAttribute(($context["assets"] ?? null), "addInlineJs", [0 => (("const presentationAPITimeout = " . $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "presentation", [], "array"), "poll_timeout", [])) . ";"), 1 => ["group" => "presentation"]], "method");
        // line 61
        echo "      ";
        $this->getAttribute(($context["assets"] ?? null), "addInlineJs", [0 => (("const presentationAPIRetryLimit = " . $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "presentation", [], "array"), "poll_retry_limit", [])) . ";"), 1 => ["group" => "presentation"]], "method");
        // line 62
        echo "      ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "presentation", [], "array"), "token_auth", []) == true)) {
            // line 63
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addInlineJs", [0 => "const presentationAPIAuth = true;", 1 => ["group" => "presentation"]], "method");
            // line 64
            echo "      ";
        } else {
            // line 65
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addInlineJs", [0 => "const presentationAPIAuth = false;", 1 => ["group" => "presentation"]], "method");
            // line 66
            echo "      ";
        }
        // line 67
        echo "      ";
        if (($this->getAttribute(($context["uri"] ?? null), "query", [0 => "admin"], "method") == true)) {
            // line 68
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addInlineJs", [0 => (("const presentationAuthToken = \"" . $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "presentation", [], "array"), "token", [])) . "\";"), 1 => ["group" => "presentation"]], "method");
            // line 69
            echo "      ";
        }
        // line 70
        echo "      ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "presentation", [], "array"), "builtin_js", [])) {
            // line 71
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "plugin://presentation/node_modules/reveal.js/lib/js/head.min.js", 1 => ["group" => "presentation"]], "method");
            // line 72
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "plugin://presentation/node_modules/reveal.js/js/reveal.js", 1 => ["group" => "presentation"]], "method");
            // line 73
            echo "      ";
        }
        // line 74
        echo "      ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "presentation", [], "array"), "plugin_js", [])) {
            // line 75
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "plugin://presentation/js/presentation.js", 1 => ["group" => "presentation"]], "method");
            // line 76
            echo "      ";
        }
        // line 77
        echo "      ";
        // line 78
        echo "      ";
        // line 82
        echo "    ";
    }

    // line 100
    public function block_content($context, array $blocks = [])
    {
        // line 101
        echo "    <div class=\"reveal ";
        if (($this->getAttribute(($context["uri"] ?? null), "query", [0 => "print-pdf"], "method") == "true")) {
            echo "print";
        }
        echo "\" id=\"presentation\">
      <div class=\"slides\">
        ";
        // line 103
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
      </div>
    </div>
    ";
    }

    // line 107
    public function block_plugin_init($context, array $blocks = [])
    {
        // line 108
        echo "      ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "presentation"], "method");
        echo "
      ";
        // line 109
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "presentation", [], "array"), "builtin_js", [])) {
            // line 110
            echo "      <script type=\"text/javascript\">
      window.addEventListener('load', function(event) {
        Reveal.initialize(reveal_init);
        Reveal.addEventListener('ready', function( event ) {
          elevateIframe(event)
        });
        Reveal.addEventListener('slidechanged', function( event ) {
          elevateIframe(event)
        });
        if (findGetParameter('admin') == 'true') {
          Reveal.addEventListener('ready', function(event) {
            var body = document.getElementById('top');
            body.insertAdjacentHTML('beforeend', '<div id=\"clockbox\"></div>');
            initClock();
            setInterval(initClock, 1000);
          });
        }
        if (findGetParameter('print-pdf') == 'true') {
          Reveal.addEventListener('ready', function(event) {
            var slides = document.querySelectorAll('.reveal.print .slides > section');
            for (var i = 0; i < slides.length; i++) {
              if (slides[i].querySelector('section')) {
                slides[i].style.background = \"initial\";
                slides[i].style.backgroundPosition = \"50% 50%\";
                slides[i].style.backgroundRepeat = \"no-repeat\";
                if (slides[i].querySelector('section').dataset.backgroundImage) {
                  slides[i].style.backgroundImage = \"url(\" + slides[i].querySelector('section').dataset.backgroundImage + \")\";
                }
                if (slides[i].querySelector('section').dataset.backgroundSize) {
                  slides[i].style.backgroundSize = slides[i].querySelector('section').dataset.backgroundSize;
                }
                if (slides[i].querySelector('section').dataset.backgroundColor) {
                  slides[i].style.backgroundColor = slides[i].querySelector('section').dataset.backgroundColor;
                }
              }
                
            }
          });
        }
      }, false);
      </script>
        ";
            // line 151
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "presentation", [], "array"), "transition", [])) {
                // line 152
                echo "        <script type=\"text/javascript\">
        Reveal.addEventListener('ready', function (event) {
          javascript:document.getElementById(\"page_transition\").style.visibility=\"hidden\";
          javascript:document.getElementById(\"page_transition\").style.opacity=0;
          javascript:document.getElementById(\"page_transition\").style.display=\"none\";
        });
        </script>
        ";
            }
            // line 160
            echo "      ";
        }
        // line 161
        echo "    ";
    }

    public function getTemplateName()
    {
        return "presentation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  427 => 161,  424 => 160,  414 => 152,  412 => 151,  369 => 110,  367 => 109,  362 => 108,  359 => 107,  351 => 103,  343 => 101,  340 => 100,  336 => 82,  334 => 78,  332 => 77,  329 => 76,  326 => 75,  323 => 74,  320 => 73,  317 => 72,  314 => 71,  311 => 70,  308 => 69,  305 => 68,  302 => 67,  299 => 66,  296 => 65,  293 => 64,  290 => 63,  287 => 62,  284 => 61,  281 => 60,  278 => 59,  276 => 58,  274 => 57,  271 => 56,  268 => 55,  264 => 54,  261 => 53,  258 => 52,  255 => 51,  252 => 50,  249 => 49,  246 => 48,  243 => 47,  225 => 31,  222 => 30,  219 => 29,  216 => 28,  213 => 27,  210 => 26,  207 => 25,  204 => 24,  201 => 23,  198 => 22,  195 => 21,  192 => 20,  189 => 19,  186 => 18,  183 => 17,  180 => 16,  177 => 15,  174 => 14,  169 => 10,  167 => 9,  159 => 8,  156 => 7,  153 => 6,  146 => 85,  142 => 84,  137 => 83,  134 => 55,  132 => 14,  128 => 13,  123 => 12,  121 => 6,  118 => 5,  115 => 4,  103 => 172,  98 => 170,  93 => 169,  90 => 168,  87 => 167,  84 => 166,  81 => 165,  78 => 164,  75 => 163,  72 => 162,  69 => 107,  66 => 100,  54 => 90,  52 => 89,  47 => 88,  45 => 4,  41 => 3,  38 => 2,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getLanguage ?: 'en' }}\">
  {% block head %}
  <head>
    {% block meta %}
      <meta charset=\"utf-8\" />
      <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>
      {% include 'partials/metadata.html.twig' %}
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    {% endblock meta %}
    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png') }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />
    {% block stylesheets %}
      {% if config.plugins['presentation'].transition %}
        {% do assets.addCss('plugin://presentation/css/transition.css', {'group': 'critical'}) %}
      {% endif %}
      {% if config.plugins['presentation'].builtin_css %}
        {% do assets.addCss('plugin://presentation/node_modules/reveal.js/css/reveal.css', {'group': 'presentation'}) %}
        {% if uri.query('print-pdf') != 'true' %}
          {% if config.plugins['presentation'].theme != 'none' %}
            {% do assets.addCss('user://plugins/presentation/node_modules/reveal.js/css/theme/' ~ config.plugins['presentation'].theme ~ '.css', {'group': 'presentation'}) %}
          {% endif %}
        {% else %}
          {% do assets.addCss('plugin://presentation/node_modules/reveal.js/css/print/pdf.css', {'group': 'presentation'}) %}
          {% if uri.query('theme') == 'preset' %}
            {% do assets.addCss('user://plugins/presentation/node_modules/reveal.js/css/theme/' ~ config.plugins['presentation'].theme ~ '.css', {'group': 'presentation'}) %}
          {% else %}
            {% do assets.addCss('plugin://presentation/css/paper.css', {'group': 'presentation'}) %}
          {% endif %}
          <style type=\"text/css\">
          .reveal.print {
            background: unset !important;
          }
          .reveal.print .slides section {
            color: black !important;
          }
          .reveal.print embed, iframe, video, .pause-overlay, #snackbar {
            display: none;
          }
          .reveal.print pre code {
            padding: 0 !important;
            border: 0 !important;
          }
          </style>
        {% endif %}
      {% endif %}
      {% if config.plugins['presentation'].plugin_css and uri.query('print-pdf') != 'true' %}
        {% do assets.addCss('plugin://presentation/css/presentation.css', {'group': 'presentation'}) %}
      {% endif %}
      {% if config.plugins['presentation'].theme_css %}
        {% do assets.addCss('theme://css/custom.css', {'group': 'presentation'}) %}
      {% endif %}
    {% endblock %}
    {% block scripts %}
      {% do assets.addInlineJs('const reveal_init = ' ~ reveal_init ~ ';', {'group': 'presentation'}) %}
      {# Deprecated v1.2.1 #}
      {# {% do assets.addInlineJs('const presentationBreakpoints = ' ~ presentation_breakpoints ~ ';', {'group': 'presentation'}) %} #}
      {% do assets.addInlineJs('const presentationAPIRoute = \"/' ~ config.plugins['presentation'].api_route ~ '\";', {'group': 'presentation'}) %}
      {% do assets.addInlineJs('const presentationAPITimeout = ' ~ config.plugins['presentation'].poll_timeout ~ ';', {'group': 'presentation'}) %}
      {% do assets.addInlineJs('const presentationAPIRetryLimit = ' ~ config.plugins['presentation'].poll_retry_limit ~ ';', {'group': 'presentation'}) %}
      {% if config.plugins['presentation'].token_auth == true %}
        {% do assets.addInlineJs('const presentationAPIAuth = true;', {'group': 'presentation'}) %}
      {% else %}
        {% do assets.addInlineJs('const presentationAPIAuth = false;', {'group': 'presentation'}) %}
      {% endif %}
      {% if uri.query('admin') == true %}
        {% do assets.addInlineJs('const presentationAuthToken = \"' ~ config.plugins['presentation'].token ~ '\";', {'group': 'presentation'}) %}
      {% endif %}
      {% if config.plugins['presentation'].builtin_js %}
        {% do assets.addJs('plugin://presentation/node_modules/reveal.js/lib/js/head.min.js', {'group': 'presentation'}) %}
        {% do assets.addJs('plugin://presentation/node_modules/reveal.js/js/reveal.js', {'group': 'presentation'}) %}
      {% endif %}
      {% if config.plugins['presentation'].plugin_js %}
        {% do assets.addJs('plugin://presentation/js/presentation.js', {'group': 'presentation'}) %}
      {% endif %}
      {# Deprecated v1.2.1 #}
      {# {% if config.plugins['presentation'].plugin_js and config.plugins['presentation'].textsizing %}
        {% do assets.addJs('plugin://presentation/js/modular-scale.package.js', {'group': 'critical'}) %}
        {% do assets.addJs('plugin://presentation/js/modular-scale.js', {'group': 'critical'}) %}
      {% endif %} #}
    {% endblock %}
    {{ assets.css('critical')|raw }}
    {{ assets.js('critical')|raw }}
    {{ assets.css('presentation')|raw }}
  </head>
  {% endblock head %}
  <body id=\"top\" class=\"{{ page.header.body_classes }}\">
    {% if config.plugins['presentation'].transition %}
    <div id=\"page_transition\">
      <div class=\"la-line-scale la-dark la-3x\">
        <div style=\"color: #0B110D;\"></div>
        <div style=\"color: #2C4D56;\"></div>
        <div style=\"color: #C3AA72;\"></div>
        <div style=\"color: #DC7612;\"></div>
        <div style=\"color: #BD3200;\"></div>
      </div>
    </div>
    {% endif %}
    {% block content %}
    <div class=\"reveal {% if uri.query('print-pdf') == 'true' %}print{% endif %}\" id=\"presentation\">
      <div class=\"slides\">
        {{ page.content|raw }}
      </div>
    </div>
    {% endblock content %}
    {% block plugin_init %}
      {{ assets.js('presentation')|raw }}
      {% if config.plugins['presentation'].builtin_js %}
      <script type=\"text/javascript\">
      window.addEventListener('load', function(event) {
        Reveal.initialize(reveal_init);
        Reveal.addEventListener('ready', function( event ) {
          elevateIframe(event)
        });
        Reveal.addEventListener('slidechanged', function( event ) {
          elevateIframe(event)
        });
        if (findGetParameter('admin') == 'true') {
          Reveal.addEventListener('ready', function(event) {
            var body = document.getElementById('top');
            body.insertAdjacentHTML('beforeend', '<div id=\"clockbox\"></div>');
            initClock();
            setInterval(initClock, 1000);
          });
        }
        if (findGetParameter('print-pdf') == 'true') {
          Reveal.addEventListener('ready', function(event) {
            var slides = document.querySelectorAll('.reveal.print .slides > section');
            for (var i = 0; i < slides.length; i++) {
              if (slides[i].querySelector('section')) {
                slides[i].style.background = \"initial\";
                slides[i].style.backgroundPosition = \"50% 50%\";
                slides[i].style.backgroundRepeat = \"no-repeat\";
                if (slides[i].querySelector('section').dataset.backgroundImage) {
                  slides[i].style.backgroundImage = \"url(\" + slides[i].querySelector('section').dataset.backgroundImage + \")\";
                }
                if (slides[i].querySelector('section').dataset.backgroundSize) {
                  slides[i].style.backgroundSize = slides[i].querySelector('section').dataset.backgroundSize;
                }
                if (slides[i].querySelector('section').dataset.backgroundColor) {
                  slides[i].style.backgroundColor = slides[i].querySelector('section').dataset.backgroundColor;
                }
              }
                
            }
          });
        }
      }, false);
      </script>
        {% if config.plugins['presentation'].transition %}
        <script type=\"text/javascript\">
        Reveal.addEventListener('ready', function (event) {
          javascript:document.getElementById(\"page_transition\").style.visibility=\"hidden\";
          javascript:document.getElementById(\"page_transition\").style.opacity=0;
          javascript:document.getElementById(\"page_transition\").style.display=\"none\";
        });
        </script>
        {% endif %}
      {% endif %}
    {% endblock %}
    {% if config.plugins['presentation'].sync == 'browser' %}
      {% do assets.addJs('plugin://presentation/js/broadcast.js', {'group': 'bottom'}) %}
    {% elseif config.plugins['presentation'].sync == 'poll' %}
      {% do assets.addJs('plugin://presentation/node_modules/axios/dist/axios.min.js', {'group': 'presentation'}) %}
      {% do assets.addJs('plugin://presentation/js/poll.js', {'group': 'bottom'}) %}
    {% endif %}
    {% if config.plugins['presentation'].all_assets or config.system.debugger.enabled %}
      {{ assets.css() }}
      {{ assets.js() }}
    {% endif %}
    {{ assets.js('bottom')|raw }}
    <div id=\"snackbar\">
      <span id=\"snackbar-message\"></span>
      <a href=\"javascript:window.location.reload(true)\">Reload?</a>
    </div>
  </body>
</html>", "presentation.html.twig", "/var/www/html/grav/user/plugins/presentation/templates/presentation.html.twig");
    }
}
