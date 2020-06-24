<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /var/www/public/tenth/themes/tenth/partials/html_base/meta_head.htm */
class __TwigTemplate_401d364ede978a64582879e7d31ea457963aef691149dfcb8ac51c6216b3d73a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />    <meta name=\"author\" content=\"Mfleig\" />
<meta name=\"description\" content=\"TENTH\">
<link rel=\"icon\" type=\"image/png\" href=\"images/favicon.png\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<!-- Document title -->
<title>TENTH</title>
<!-- Stylesheets & Fonts -->
<link rel=\"stylesheet\" href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/plugins.css");
        echo "\" type=\"text/css\" >
<link rel=\"stylesheet\" href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/style.css");
        echo "\"  type=\"text/css\" >
<link href=\"https://fonts.googleapis.com/css2?family=Ubuntu&display=swap\" rel=\"stylesheet\">
<link href=\"https://fonts.googleapis.com/css2?family=Open+Sans&display=swap\" rel=\"stylesheet\">
<link href=\"https://fonts.googleapis.com/css2?family=Raleway&display=swap\" rel=\"stylesheet\">

<link rel=\"stylesheet\" href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/custom.css");
        echo "\"  type=\"text/css\" >

  ";
        // line 17
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
    }

    public function getTemplateName()
    {
        return "/var/www/public/tenth/themes/tenth/partials/html_base/meta_head.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 17,  59 => 15,  51 => 10,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />    <meta name=\"author\" content=\"Mfleig\" />
<meta name=\"description\" content=\"TENTH\">
<link rel=\"icon\" type=\"image/png\" href=\"images/favicon.png\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<!-- Document title -->
<title>TENTH</title>
<!-- Stylesheets & Fonts -->
<link rel=\"stylesheet\" href=\"{{ 'assets/css/plugins.css'|theme }}\" type=\"text/css\" >
<link rel=\"stylesheet\" href=\"{{ 'assets/css/style.css'|theme }}\"  type=\"text/css\" >
<link href=\"https://fonts.googleapis.com/css2?family=Ubuntu&display=swap\" rel=\"stylesheet\">
<link href=\"https://fonts.googleapis.com/css2?family=Open+Sans&display=swap\" rel=\"stylesheet\">
<link href=\"https://fonts.googleapis.com/css2?family=Raleway&display=swap\" rel=\"stylesheet\">

<link rel=\"stylesheet\" href=\"{{ 'assets/css/custom.css'|theme }}\"  type=\"text/css\" >

  {% styles %}", "/var/www/public/tenth/themes/tenth/partials/html_base/meta_head.htm", "");
    }
}
