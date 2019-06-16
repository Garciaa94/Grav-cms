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

/* forms/fields/backupshistory/backupshistory.html.twig */
class __TwigTemplate_e6e593149a2ffbaa0d603c3aed452124c791cc566db84e7223ed5231ab595294 extends \Twig\Template
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
        $context["delete_url"] = $this->getAttribute(($context["uri"] ?? null), "addNonce", [0 => (((($context["base_url_relative"] ?? null) . "/backup.json/backup:%BACKUP_FILE/task") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", [])) . "backupDelete"), 1 => "admin-form", 2 => "admin-nonce"], "method");
        // line 2
        echo "<table class=\"backups-history noflex\">
    <thead>
    <tr>
        <th>#</th>
        <th>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACKUP_DATE"), "html", null, true);
        echo "</th>
        <th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.NAME"), "html", null, true);
        echo "</th>
        <th class=\"right pad\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SIZE"), "html", null, true);
        echo "</th>
        <th class=\"right pad\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ACTION"), "html", null, true);
        echo "</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 13
        if ((count(($context["backups"] ?? null)) == 0)) {
            // line 14
            echo "        <tr>
            <td colspan=\"5\" class=\"error\" style=\"text-align: center;\">";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACKUPS_NOT_GENERATED"), "html", null, true);
            echo "</td>
        </tr>
    ";
        } else {
            // line 18
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((((isset($context["backups"]) || array_key_exists("backups", $context))) ? (_twig_default_filter(($context["backups"] ?? null), [])) : ([])));
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
            foreach ($context['_seq'] as $context["_key"] => $context["backup"]) {
                // line 19
                echo "            ";
                $context["encoded_name"] = twig_urlencode_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->base64EncodeFilter($this->getAttribute($context["backup"], "filename", [])));
                // line 20
                echo "            ";
                $context["backup_delete"] = twig_replace_filter(($context["delete_url"] ?? null), ["%BACKUP_FILE" => ($context["encoded_name"] ?? null)]);
                // line 21
                echo "            <tr>
                <td>";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
                echo "</td>
                <td> <i class=\"fa fa-clock-o\"></i> ";
                // line 23
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["backup"], "date", [])), "html", null, true);
                echo "</td>
                <td>";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["backup"], "title", []), "html", null, true);
                echo "</td>
                <td class=\"right pad\">";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->niceFilesizeFunc($this->getAttribute($context["backup"], "size", [])), "html", null, true);
                echo "</td>
                <td class=\"right pad nowrap\" >
                    <a class=\"button button-small hint--bottom\" href=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "backups", []), "getBackupDownloadUrl", [0 => $this->getAttribute($context["backup"], "path", []), 1 => $this->getAttribute(($context["admin"] ?? null), "base", [])], "method"), "html", null, true);
                echo "\" data-hint=\"Download\"><i class=\"fa fa-download\"></i></a>
                    <span class=\"button button-small danger hint--bottom\" data-hint=\"Delete\" data-backup data-ajax=\"";
                // line 28
                echo twig_escape_filter($this->env, ($context["backup_delete"] ?? null), "html", null, true);
                echo "\"><i class=\"fa fa-close\"></i></span>
                </td>
            </tr>
        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['backup'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "    ";
        }
        // line 33
        echo "    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/backupshistory/backupshistory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  134 => 32,  116 => 28,  112 => 27,  107 => 25,  103 => 24,  99 => 23,  95 => 22,  92 => 21,  89 => 20,  86 => 19,  68 => 18,  62 => 15,  59 => 14,  57 => 13,  50 => 9,  46 => 8,  42 => 7,  38 => 6,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set delete_url = uri.addNonce(base_url_relative ~ \"/backup.json/backup:%BACKUP_FILE/task\" ~ config.system.param_sep ~ 'backupDelete', 'admin-form', 'admin-nonce') %}
<table class=\"backups-history noflex\">
    <thead>
    <tr>
        <th>#</th>
        <th>{{ \"PLUGIN_ADMIN.BACKUP_DATE\"|tu }}</th>
        <th>{{ \"PLUGIN_ADMIN.NAME\"|tu }}</th>
        <th class=\"right pad\">{{ \"PLUGIN_ADMIN.SIZE\"|tu }}</th>
        <th class=\"right pad\">{{ \"PLUGIN_ADMIN.ACTION\"|tu }}</th>
    </tr>
    </thead>
    <tbody>
    {% if backups|count == 0 %}
        <tr>
            <td colspan=\"5\" class=\"error\" style=\"text-align: center;\">{{ \"PLUGIN_ADMIN.BACKUPS_NOT_GENERATED\"|tu }}</td>
        </tr>
    {% else %}
        {% for backup in backups|default([]) %}
            {% set encoded_name = backup.filename|base64_encode|url_encode %}
            {% set backup_delete = delete_url|replace({'%BACKUP_FILE': encoded_name}) %}
            <tr>
                <td>{{ loop.index }}</td>
                <td> <i class=\"fa fa-clock-o\"></i> {{ backup.date|date }}</td>
                <td>{{ backup.title }}</td>
                <td class=\"right pad\">{{ backup.size|nicefilesize }}</td>
                <td class=\"right pad nowrap\" >
                    <a class=\"button button-small hint--bottom\" href=\"{{ grav.backups.getBackupDownloadUrl(backup.path, admin.base) }}\" data-hint=\"Download\"><i class=\"fa fa-download\"></i></a>
                    <span class=\"button button-small danger hint--bottom\" data-hint=\"Delete\" data-backup data-ajax=\"{{ backup_delete }}\"><i class=\"fa fa-close\"></i></span>
                </td>
            </tr>
        {% endfor %}
    {% endif %}
    </tbody>
</table>
", "forms/fields/backupshistory/backupshistory.html.twig", "/var/www/html/grav/user/plugins/admin/themes/grav/templates/forms/fields/backupshistory/backupshistory.html.twig");
    }
}
