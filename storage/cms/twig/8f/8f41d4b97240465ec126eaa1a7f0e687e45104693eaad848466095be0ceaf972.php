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

/* /var/www/public/tenth/themes/tenth/pages/3d.htm */
class __TwigTemplate_4a9edfd00e8c4e62bbc742b9956943560da4b127aa86f9d6d4f53d7c22e0a5f0 extends \Twig\Template
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
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/cybertruck.jpeg");
        echo "\">

            <h2 class=\"text-lg m-b-10 text-light text-center\" >Modelamiento 3-D</h1>
        </section>
        <!-- end: Page title -->
        <!-- Content -->
        <section id=\"page-content\">
          <div class=\"container\">
            <div class=\"grid-system-demo-live\">
                <div class=\"row\">
                  <div class=\"col-lg-12 m-t-60 lead\">
                      Los modelos 3D son un elemento esencial en muchas esferas de la producción
                      digital. Hoy en día, casi cualquier proyecto que requiera visualización se basa
                      en el formato 3D. Los modelos brillantes, coloridos y detallados son esenciales
                      para transferir una idea, presentar un concepto o complementar un juego. El uso
                      comercial del modelado 3D se encuentra en cada esfera que presenta su producto de
                      una manera visualmente atractiva.


                    </div>


                  </div>

                  <div class=\"lead\" style=\"padding-bottom: 30px;\">
                      La clara ventaja de los gráficos 3D es que hace que la exhibición de productos
                      existentes o potenciales sea más llamativa. La visualización 3D cierra eficientemente
                      la brecha entre una idea y su ilustración visual. El uso comercial del modelado y la
                      animación en 3D es ilimitado: publicidad, arquitectura, entretinimiento y mucho más.
                      En Tenth Studio estamos listos para ofrecerte soluciones gráficas de primer nivel
                      diseñado específicamente para tu negocio
                       </div>
                  </div>
          </div>
        </section>
        <!-- end: Content -->";
    }

    public function getTemplateName()
    {
        return "/var/www/public/tenth/themes/tenth/pages/3d.htm";
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
        return new Source("<section id=\"page-title\" class=\"text-light\" data-bg-parallax=\"{{ 'assets/img/cybertruck.jpeg'|theme }}\">

            <h2 class=\"text-lg m-b-10 text-light text-center\" >Modelamiento 3-D</h1>
        </section>
        <!-- end: Page title -->
        <!-- Content -->
        <section id=\"page-content\">
          <div class=\"container\">
            <div class=\"grid-system-demo-live\">
                <div class=\"row\">
                  <div class=\"col-lg-12 m-t-60 lead\">
                      Los modelos 3D son un elemento esencial en muchas esferas de la producción
                      digital. Hoy en día, casi cualquier proyecto que requiera visualización se basa
                      en el formato 3D. Los modelos brillantes, coloridos y detallados son esenciales
                      para transferir una idea, presentar un concepto o complementar un juego. El uso
                      comercial del modelado 3D se encuentra en cada esfera que presenta su producto de
                      una manera visualmente atractiva.


                    </div>


                  </div>

                  <div class=\"lead\" style=\"padding-bottom: 30px;\">
                      La clara ventaja de los gráficos 3D es que hace que la exhibición de productos
                      existentes o potenciales sea más llamativa. La visualización 3D cierra eficientemente
                      la brecha entre una idea y su ilustración visual. El uso comercial del modelado y la
                      animación en 3D es ilimitado: publicidad, arquitectura, entretinimiento y mucho más.
                      En Tenth Studio estamos listos para ofrecerte soluciones gráficas de primer nivel
                      diseñado específicamente para tu negocio
                       </div>
                  </div>
          </div>
        </section>
        <!-- end: Content -->", "/var/www/public/tenth/themes/tenth/pages/3d.htm", "");
    }
}
