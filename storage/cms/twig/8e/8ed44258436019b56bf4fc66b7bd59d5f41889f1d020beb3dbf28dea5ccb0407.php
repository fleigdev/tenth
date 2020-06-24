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

/* /var/www/public/tenth/themes/tenth/layouts/index.htm */
class __TwigTemplate_74359c062602367e6b0e83ec153187cf60447fff888a3ce60624621303ef72c6 extends \Twig\Template
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
        echo "<!DOCTYPE HTML>
<!--
\tPage designed by Martin Fleig
-->
<html>
\t<head>
    ";
        // line 7
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("html_base/meta_head"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 8
        echo "    </head>
\t<body>




\t\t<!-- Wrapper -->
\t\t\t<div id=\"wrapper\">
\t\t\t\t";
        // line 16
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("all_pages/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 17
        echo "




\t\t\t\t        ";
        // line 22
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 23
        echo "

\t\t\t\t";
        // line 25
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("all_pages/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 26
        echo "
\t\t\t</div>
\t\t\t<!-- Scripts -->
\t\t\t";
        // line 29
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("html_base/meta_foot"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 30
        echo "\t\t\t
        ";
        // line 31
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 32
        echo "\t</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/public/tenth/themes/tenth/layouts/index.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 32,  92 => 31,  89 => 30,  85 => 29,  80 => 26,  76 => 25,  72 => 23,  70 => 22,  63 => 17,  59 => 16,  49 => 8,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE HTML>
<!--
\tPage designed by Martin Fleig
-->
<html>
\t<head>
    {% partial \"html_base/meta_head\" %}
    </head>
\t<body>




\t\t<!-- Wrapper -->
\t\t\t<div id=\"wrapper\">
\t\t\t\t{% partial 'all_pages/header' %}





\t\t\t\t        {% page %}


\t\t\t\t{% partial 'all_pages/footer' %}

\t\t\t</div>
\t\t\t<!-- Scripts -->
\t\t\t{% partial \"html_base/meta_foot\" %}
\t\t\t
        {% scripts %}
\t</body>
</html>", "/var/www/public/tenth/themes/tenth/layouts/index.htm", "");
    }
}
