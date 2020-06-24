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

/* /var/www/public/tenth/themes/tenth/pages/contacto.htm */
class __TwigTemplate_2fd12cd81277f5bb888286640dc6767e0fddb0210154e1b95ea86d1726173322 extends \Twig\Template
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
        echo "<section id=\"page-title\" class=\"text-light\" data-bg-parallax=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/contactcover.png");
        echo "\">
            
            <h2 class=\"text-lg m-b-10 text-light text-center\" style=\"color:white;\">Contacto</h1>
        </section>
        <!-- end: Page title -->
        <section>



          ";
        // line 10
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contactform"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 11
        echo "
        </section>";
    }

    public function getTemplateName()
    {
        return "/var/www/public/tenth/themes/tenth/pages/contacto.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 11,  50 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"page-title\" class=\"text-light\" data-bg-parallax=\"{{ 'assets/img/contactcover.png'|theme }}\">
            
            <h2 class=\"text-lg m-b-10 text-light text-center\" style=\"color:white;\">Contacto</h1>
        </section>
        <!-- end: Page title -->
        <section>



          {% component 'contactform' %}

        </section>", "/var/www/public/tenth/themes/tenth/pages/contacto.htm", "");
    }
}
