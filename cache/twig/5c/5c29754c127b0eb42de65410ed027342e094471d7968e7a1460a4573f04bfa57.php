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

/* partials/github_link.html.twig */
class __TwigTemplate_ba5a0ac7e1711f5463f1c58d981bba9dd7a49f26ad2389d81d574de64808b021 extends \Twig\Template
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
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "github", []), "tree", [])) {
            // line 2
            echo "  ";
            $context["git_repo_link_url"] = $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "github", []), "tree", []);
            // line 3
            echo "  ";
            if (twig_in_filter("github", ($context["git_repo_link_url"] ?? null))) {
                // line 4
                echo "    ";
                $context["git_repo_link_icon"] = "github";
                // line 5
                echo "  ";
            } elseif (twig_in_filter("gitlab", ($context["git_repo_link_url"] ?? null))) {
                // line 6
                echo "    ";
                $context["git_repo_link_icon"] = "gitlab";
                // line 7
                echo "  ";
            } elseif (twig_in_filter("bitbucket", ($context["git_repo_link_url"] ?? null))) {
                // line 8
                echo "    ";
                $context["git_repo_link_icon"] = "bitbucket";
                // line 9
                echo "  ";
            } else {
                // line 10
                echo "   ";
                $context["git_repo_link_icon"] = "git";
                // line 11
                echo "  ";
            }
            // line 12
            echo "  ";
            if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "github", []), "icon", [])) {
                // line 13
                echo "    ";
                $context["git_repo_link_icon"] = $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "github", []), "icon", []);
                // line 14
                echo "  ";
            }
            // line 15
            echo "  ";
            $context["git_repo_edit_link_url"] = (($context["git_repo_link_url"] ?? null) . twig_replace_filter(("/" . $this->getAttribute(($context["page"] ?? null), "filePathClean", [])), ["/user/" => "/"]));
            // line 16
            echo "  <a class=\"github-link\" href=\"";
            echo ($context["git_repo_edit_link_url"] ?? null);
            echo " \" target=\"_blank\">
  <i class=\"fa fa-";
            // line 17
            echo ($context["git_repo_link_icon"] ?? null);
            echo "\"></i>
  ";
            // line 18
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "THEME_LEARN2_GIT_EDIT_THIS_PAGE");
            echo "</a>
";
        } else {
            // line 20
            echo "  ";
            if ( !$this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "git-sync", [], "array"), "enabled", [])) {
                // line 21
                echo "    ";
                $context["admin_panel_appearance_url"] = ($this->getAttribute(($context["grav"] ?? null), "base_url", []) . "/admin/plugins/");
                // line 22
                echo "    <a class=\"github-link\" href=\"";
                echo ($context["admin_panel_appearance_url"] ?? null);
                echo "\" title=\"";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "THEME_LEARN2_GIT_ADD_SETUP_GIT_SYNC_PLUGIN");
                echo "\">
    <i class=\"fa fa-cog\" aria-hidden=\"true\"></i>
    ";
                // line 24
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "THEME_LEARN2_GIT_ADD_SETUP_GIT_SYNC_PLUGIN");
                echo "</a>
  ";
            } else {
                // line 26
                echo "    ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "git-sync", [], "array"), "enabled", []) && twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "git-sync", [], "array"), "repository", [])))) {
                    // line 27
                    echo "      ";
                    $context["admin_panel_appearance_url"] = ($this->getAttribute(($context["grav"] ?? null), "base_url", []) . "/admin/plugins/git-sync");
                    // line 28
                    echo "      <a class=\"github-link\" href=\"";
                    echo ($context["admin_panel_appearance_url"] ?? null);
                    echo "\" title=\"";
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "THEME_LEARN2_GIT_SETUP_GIT_SYNC_PLUGIN");
                    echo "\">
      <i class=\"fa fa-cog\" aria-hidden=\"true\"></i>
      ";
                    // line 30
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "THEME_LEARN2_GIT_SETUP_GIT_SYNC_PLUGIN");
                    echo "</a>
    ";
                } else {
                    // line 32
                    echo "    ";
                    $context["git_sync_repo"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "git-sync", [], "array"), "repository", []);
                    // line 33
                    echo "    ";
                    $context["git_sync_repo_link"] = twig_replace_filter(($context["git_sync_repo"] ?? null), [".git" => "/"]);
                    // line 34
                    echo "    ";
                    if (twig_in_filter("github", ($context["git_sync_repo_link"] ?? null))) {
                        // line 35
                        echo "      ";
                        $context["git_repo_link_icon"] = "github";
                        // line 36
                        echo "      ";
                        $context["git_repo_edit_link_url"] = ((($context["git_sync_repo_link"] ?? null) . "blob/master") . twig_replace_filter($this->getAttribute(($context["page"] ?? null), "filePathClean", []), ["user/" => "/"]));
                        // line 37
                        echo "    ";
                    } elseif (twig_in_filter("gitlab", ($context["git_sync_repo_link"] ?? null))) {
                        // line 38
                        echo "      ";
                        $context["git_repo_link_icon"] = "gitlab";
                        // line 39
                        echo "      ";
                        $context["git_repo_edit_link_url"] = ((($context["git_sync_repo_link"] ?? null) . "blob/master") . twig_replace_filter($this->getAttribute(($context["page"] ?? null), "filePathClean", []), ["user/" => "/"]));
                        // line 40
                        echo "    ";
                    } elseif (twig_in_filter("bitbucket", ($context["git_sync_repo_link"] ?? null))) {
                        // line 41
                        echo "      ";
                        $context["git_repo_link_icon"] = "bitbucket";
                        // line 42
                        echo "      ";
                        $context["git_repo_edit_link_url"] = ((($context["git_sync_repo_link"] ?? null) . "src/master") . twig_replace_filter($this->getAttribute(($context["page"] ?? null), "filePathClean", []), ["user/" => "/"]));
                        // line 43
                        echo "    ";
                    } else {
                        // line 44
                        echo "\t    ";
                        $context["git_repo_link_icon"] = "git";
                        // line 45
                        echo "      ";
                        $context["git_repo_edit_link_url"] = ((($context["git_sync_repo_link"] ?? null) . "blob/master") . twig_replace_filter($this->getAttribute(($context["page"] ?? null), "filePathClean", []), ["user/" => "/"]));
                        // line 46
                        echo "\t  ";
                    }
                    // line 47
                    echo "      ";
                    if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "github", []), "icon", [])) {
                        // line 48
                        echo "        ";
                        $context["git_repo_link_icon"] = $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "github", []), "icon", []);
                        // line 49
                        echo "      ";
                    }
                    // line 50
                    echo "      <a class=\"github-link\" href=\"";
                    echo ($context["git_repo_edit_link_url"] ?? null);
                    echo " \" title=\"";
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "THEME_LEARN2_GIT_EDIT_THIS_PAGE");
                    echo "\" target=\"_blank\">
      <i class=\"fa fa-";
                    // line 51
                    echo ($context["git_repo_link_icon"] ?? null);
                    echo "\"></i>
      ";
                    // line 52
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "THEME_LEARN2_GIT_EDIT_THIS_PAGE");
                    echo "</a>
    ";
                }
                // line 54
                echo "  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "partials/github_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 54,  191 => 52,  187 => 51,  180 => 50,  177 => 49,  174 => 48,  171 => 47,  168 => 46,  165 => 45,  162 => 44,  159 => 43,  156 => 42,  153 => 41,  150 => 40,  147 => 39,  144 => 38,  141 => 37,  138 => 36,  135 => 35,  132 => 34,  129 => 33,  126 => 32,  121 => 30,  113 => 28,  110 => 27,  107 => 26,  102 => 24,  94 => 22,  91 => 21,  88 => 20,  83 => 18,  79 => 17,  74 => 16,  71 => 15,  68 => 14,  65 => 13,  62 => 12,  59 => 11,  56 => 10,  53 => 9,  50 => 8,  47 => 7,  44 => 6,  41 => 5,  38 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if theme_config.github.tree  %}
  {% set git_repo_link_url = theme_config.github.tree %}
  {% if 'github' in git_repo_link_url %}
    {% set git_repo_link_icon = \"github\" %}
  {% elseif 'gitlab' in git_repo_link_url %}
    {% set git_repo_link_icon = \"gitlab\" %}
  {% elseif 'bitbucket' in git_repo_link_url %}
    {% set git_repo_link_icon = \"bitbucket\" %}
  {% else %}
   {% set git_repo_link_icon = \"git\" %}
  {% endif %}
  {% if theme_config.github.icon %}
    {% set git_repo_link_icon = theme_config.github.icon %}
  {% endif %}
  {% set git_repo_edit_link_url = git_repo_link_url ~  ('/'~page.filePathClean)|replace({'/user/':'/'}) %}
  <a class=\"github-link\" href=\"{{ git_repo_edit_link_url }} \" target=\"_blank\">
  <i class=\"fa fa-{{ git_repo_link_icon }}\"></i>
  {{ 'THEME_LEARN2_GIT_EDIT_THIS_PAGE'|t }}</a>
{% else %}
  {% if not config.plugins['git-sync'].enabled  %}
    {% set admin_panel_appearance_url = grav.base_url ~ '/admin/plugins/' %}
    <a class=\"github-link\" href=\"{{ admin_panel_appearance_url }}\" title=\"{{ 'THEME_LEARN2_GIT_ADD_SETUP_GIT_SYNC_PLUGIN'|t }}\">
    <i class=\"fa fa-cog\" aria-hidden=\"true\"></i>
    {{ 'THEME_LEARN2_GIT_ADD_SETUP_GIT_SYNC_PLUGIN'|t }}</a>
  {% else %}
    {% if config.plugins['git-sync'].enabled and config.plugins['git-sync'].repository is empty %}
      {% set admin_panel_appearance_url = grav.base_url ~ '/admin/plugins/git-sync' %}
      <a class=\"github-link\" href=\"{{ admin_panel_appearance_url }}\" title=\"{{ 'THEME_LEARN2_GIT_SETUP_GIT_SYNC_PLUGIN'|t }}\">
      <i class=\"fa fa-cog\" aria-hidden=\"true\"></i>
      {{ 'THEME_LEARN2_GIT_SETUP_GIT_SYNC_PLUGIN'|t }}</a>
    {% else %}
    {% set git_sync_repo = config.plugins['git-sync'].repository %}
    {% set git_sync_repo_link = (git_sync_repo | replace({'.git': '/'})) %}
    {% if 'github' in git_sync_repo_link %}
      {% set git_repo_link_icon = \"github\" %}
      {% set git_repo_edit_link_url = git_sync_repo_link ~ 'blob/master' ~ (page.filePathClean)|replace({'user/':'/'}) %}
    {% elseif 'gitlab' in git_sync_repo_link %}
      {% set git_repo_link_icon = \"gitlab\" %}
      {% set git_repo_edit_link_url = git_sync_repo_link ~ 'blob/master' ~ (page.filePathClean)|replace({'user/':'/'}) %}
    {% elseif 'bitbucket' in git_sync_repo_link %}
      {% set git_repo_link_icon = \"bitbucket\" %}
      {% set git_repo_edit_link_url = git_sync_repo_link ~ 'src/master' ~ (page.filePathClean)|replace({'user/':'/'}) %}
    {% else %}
\t    {% set git_repo_link_icon = \"git\" %}
      {% set git_repo_edit_link_url = git_sync_repo_link ~ 'blob/master' ~ (page.filePathClean)|replace({'user/':'/'}) %}
\t  {% endif %}
      {% if theme_config.github.icon %}
        {% set git_repo_link_icon = theme_config.github.icon %}
      {% endif %}
      <a class=\"github-link\" href=\"{{ git_repo_edit_link_url }} \" title=\"{{ 'THEME_LEARN2_GIT_EDIT_THIS_PAGE'|t }}\" target=\"_blank\">
      <i class=\"fa fa-{{ git_repo_link_icon }}\"></i>
      {{ 'THEME_LEARN2_GIT_EDIT_THIS_PAGE'|t }}</a>
    {% endif %}
  {% endif %}
{% endif %}
", "partials/github_link.html.twig", "/var/www/html/grav/user/themes/learn2-git-sync/templates/partials/github_link.html.twig");
    }
}
