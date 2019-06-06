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

/* partials/tools-direct-install.html.twig */
class __TwigTemplate_7d52384f290b244faf1e150655887256eb2d0801725678ef9100cae2fb1620f8 extends \Twig\Template
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
        echo "<h1>
    Direct install of packages
</h1>

<div class=\"direct-install-content\">

\t<h2>Install a zip package by uploading it</h2>

\t<form action=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
        echo "/tools/task:directInstall\" method=\"post\" enctype=\"multipart/form-data\">
\t    <input type=\"file\" name=\"uploaded_file\" id=\"uploaded_file\" required accept=\"application/zip, application/octet-stream\">
\t    <input type=\"submit\" value=\"Upload and install\" name=\"submit\" class=\"button\">
\t    <input type=\"hidden\" name=\"task\" value=\"directInstall\" />

\t\t";
        // line 14
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->nonceFieldFunc("admin-form", "admin-nonce");
        echo "
\t</form>


\t<h2>Install a zip package from a remote location</h2>

\t<form action=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
        echo "/tools/task:directInstall\" method=\"post\">
\t\t<input type=\"text\" name=\"file_path\" required />
\t    <input type=\"submit\" value=\"Install\" name=\"submit\" class=\"button\">
        <input type=\"hidden\" name=\"task\" value=\"directInstall\" />

\t    ";
        // line 25
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->nonceFieldFunc("admin-form", "admin-nonce");
        echo "
\t</form>


</div>

";
    }

    public function getTemplateName()
    {
        return "partials/tools-direct-install.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 25,  57 => 20,  48 => 14,  40 => 9,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<h1>
    Direct install of packages
</h1>

<div class=\"direct-install-content\">

\t<h2>Install a zip package by uploading it</h2>

\t<form action=\"{{ base_url_relative }}/tools/task:directInstall\" method=\"post\" enctype=\"multipart/form-data\">
\t    <input type=\"file\" name=\"uploaded_file\" id=\"uploaded_file\" required accept=\"application/zip, application/octet-stream\">
\t    <input type=\"submit\" value=\"Upload and install\" name=\"submit\" class=\"button\">
\t    <input type=\"hidden\" name=\"task\" value=\"directInstall\" />

\t\t{{ nonce_field('admin-form', 'admin-nonce')|raw }}
\t</form>


\t<h2>Install a zip package from a remote location</h2>

\t<form action=\"{{ base_url_relative }}/tools/task:directInstall\" method=\"post\">
\t\t<input type=\"text\" name=\"file_path\" required />
\t    <input type=\"submit\" value=\"Install\" name=\"submit\" class=\"button\">
        <input type=\"hidden\" name=\"task\" value=\"directInstall\" />

\t    {{ nonce_field('admin-form', 'admin-nonce')|raw }}
\t</form>


</div>

", "partials/tools-direct-install.html.twig", "/var/www/html/grav/user/plugins/admin/themes/grav/templates/partials/tools-direct-install.html.twig");
    }
}
