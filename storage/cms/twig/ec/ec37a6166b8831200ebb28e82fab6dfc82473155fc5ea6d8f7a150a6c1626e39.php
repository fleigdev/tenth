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

/* /var/www/public/tenth/themes/tenth/pages/blog.htm */
class __TwigTemplate_e1154550796c4ff2e26e4d6cd619beaa0c31ca19f3c92b83be9dece9f69fdf8a extends \Twig\Template
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
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/cover1.jpg");
        echo "\">
            >
            <h2 class=\"text-lg m-b-10 text-light text-center\" style=\"color:white;\">Blog</h1>
        </section>
        <!-- end: Page title -->
        <!-- Content -->
        <section id=\"page-content\">
            <div class=\"container\">
                <div class=\"grid-system-demo-live\">

                </div>
            </div>
        </section>
        <!-- end: Content -->";
    }

    public function getTemplateName()
    {
        return "/var/www/public/tenth/themes/tenth/pages/blog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"page-title\" class=\"text-light\" data-bg-parallax=\"{{ 'assets/img/cover1.jpg'|theme }}\">
            >
            <h2 class=\"text-lg m-b-10 text-light text-center\" style=\"color:white;\">Blog</h1>
        </section>
        <!-- end: Page title -->
        <!-- Content -->
        <section id=\"page-content\">
            <div class=\"container\">
                <div class=\"grid-system-demo-live\">

                </div>
            </div>
        </section>
        <!-- end: Content -->", "/var/www/public/tenth/themes/tenth/pages/blog.htm", "");
    }
}
