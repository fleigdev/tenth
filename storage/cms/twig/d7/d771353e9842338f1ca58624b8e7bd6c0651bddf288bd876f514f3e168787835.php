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

/* /var/www/public/tenth/themes/tenth/partials/all_pages/header.htm */
class __TwigTemplate_d8fc0507e05d48f3dc6ab3ae99578538fc3f5a43bf3bfd98b3fb2ee511077feb extends \Twig\Template
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
        echo "<!-- Header -->
<header id=\"header\" data-transparent=\"true\" data-fullwidth=\"true\" class=\"dark\">
    <div class=\"header-inner\">
        <div class=\"container\">
            <!--Logo-->
            <div id=\"logo\"> <a href=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\"><span class=\"logo-default\">TENTH</span><span class=\"logo-dark\">TENTH</span></a> </div>
            <!--End: Logo-->


            <!--Navigation Resposnive Trigger-->
            <div id=\"mainMenu-trigger\"> <a class=\"lines-button x\"><span class=\"lines\"></span></a> </div>
            <!--end: Navigation Resposnive Trigger-->
            <!--Navigation-->
            <div id=\"mainMenu\">
                <div class=\"container\">
                    <nav>
                        <ul class=\"main-nav\">
                            <li><a href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Home</a>
                            <li class=\"dropdown\"><a href=\"#\">Servicios</a>
                                <ul class=\"dropdown-menu\">
                                    <li ><a href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("vr");
        echo "\">Realidad Virtual</a></li>
                                    <li ><a href=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("ar");
        echo "\">Realidad Aumentada</a></li>
                                    <li><a href=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("3d");
        echo "\">Modelado 3-D</a></li>
                                </ul>
                            <li><a href=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog");
        echo "\">Blog</a>
                            <li><a href=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("nosotros");
        echo "\">Nosotros</a>
                            <li><a href=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contacto");
        echo "\">Contacto</a>
                        </ul>
                    </nav>
                </div>
            </div>
            <!--end: Navigation-->
        </div>
    </div>
</header>
<!-- end: Header -->";
    }

    public function getTemplateName()
    {
        return "/var/www/public/tenth/themes/tenth/partials/all_pages/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 27,  82 => 26,  78 => 25,  73 => 23,  69 => 22,  65 => 21,  59 => 18,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Header -->
<header id=\"header\" data-transparent=\"true\" data-fullwidth=\"true\" class=\"dark\">
    <div class=\"header-inner\">
        <div class=\"container\">
            <!--Logo-->
            <div id=\"logo\"> <a href=\"{{ 'home'|page }}\"><span class=\"logo-default\">TENTH</span><span class=\"logo-dark\">TENTH</span></a> </div>
            <!--End: Logo-->


            <!--Navigation Resposnive Trigger-->
            <div id=\"mainMenu-trigger\"> <a class=\"lines-button x\"><span class=\"lines\"></span></a> </div>
            <!--end: Navigation Resposnive Trigger-->
            <!--Navigation-->
            <div id=\"mainMenu\">
                <div class=\"container\">
                    <nav>
                        <ul class=\"main-nav\">
                            <li><a href=\"{{ 'home'|page }}\">Home</a>
                            <li class=\"dropdown\"><a href=\"#\">Servicios</a>
                                <ul class=\"dropdown-menu\">
                                    <li ><a href=\"{{ 'vr'|page }}\">Realidad Virtual</a></li>
                                    <li ><a href=\"{{ 'ar'|page }}\">Realidad Aumentada</a></li>
                                    <li><a href=\"{{ '3d'|page }}\">Modelado 3-D</a></li>
                                </ul>
                            <li><a href=\"{{ 'blog'|page }}\">Blog</a>
                            <li><a href=\"{{ 'nosotros'|page }}\">Nosotros</a>
                            <li><a href=\"{{ 'contacto'|page }}\">Contacto</a>
                        </ul>
                    </nav>
                </div>
            </div>
            <!--end: Navigation-->
        </div>
    </div>
</header>
<!-- end: Header -->", "/var/www/public/tenth/themes/tenth/partials/all_pages/header.htm", "");
    }
}
