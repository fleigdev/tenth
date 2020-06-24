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

/* /var/www/public/tenth/themes/tenth/pages/nosotros.htm */
class __TwigTemplate_9cdbf7451c7aa5fd1144717c04ed78b4a5c3431b98a20447c4ff75bdcf93c35b extends \Twig\Template
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
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/1.5.jpg");
        echo "\">

            <h2 class=\"text-lg m-b-10 text-light text-center\" style=\"color:white;\">Nosotros</h1>

</section>
        <!-- end: Page title -->
        <!-- Content -->
        <section id=\"page-content\">
            <div class=\"container\">
                <div class=\"grid-system-demo-live\">
                  <div class=\"row\">
                    <div class=\"col-lg-12 m-t-60 lead\">
                        Tenth Studio es una empresa de TI orientada a los negocios y centrada en el desarrollo de Realidad Virtual y
                        Aumentada con fines específicos. Nuestro enfoque orientado a la innovación está dedicado a ayudar a las empresas a
                        comenzar, crecer y tener éxito.


                      </div>




                    <div class=\"col-lg-6\">


                      <div class=\"lead smallpad\" style=\"padding-bottom: 30px;\">
                              Nacemos como la primera empresa orientada a la Realidad Virtual en Bolivia en el año 2017 y el año siguiente nos
                              convertimos en una empresa dedicada a la tecnología XR. Nuestra valiosa experiencia en experiencias VR nos permite crear
                              las experiencias de Realidad Virtual más de alta calidad para gafas VR, así como aplicaciones optimizadas para el mejor
                              rendimiento en plataformas móviles.

                              <br />

                              Nuestro objetivo es superar constantemente las expectativas del cliente y garantizar siempre que los servicios y soluciones
                              que ofrecemos son invariablemente de primera categoría, seguros, confiable y relevantes. Es por eso que estamos 100%
                              comprometidos con el resultado.


                      </div>

                    </div>

                    <div class=\"col-lg-6\">

                        <img class=\"transparent-img smallpad \"  src=\"";
        // line 45
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tenthcover.jpg");
        echo "\" style=\"text-align: center;width: 100%; height: auto; border-radius: 15%;\">

                    </div>



                    <div class=\"smallpad lead\" style=\"padding-bottom: 30px;\">
                      Estamos ansiosos por ser los mejores en lo que hacemos. Por eso nos centramos en un pequeño número de tecnologías.
                      Nuestra especialización principal es el desarrollo de experiencias inmersivas de Realidad Virtual y Realidad Aumentada.
                      Este claro enfoque de nuestra experiencia garantiza que nuestros clientes obtengan soluciones de primer nivel y de mejor ajuste.

                    </div>

                    <div class=\"smallpad lead\" style=\"padding-bottom: 30px;\">
                        Al mismo tiempo, hemos desarrollado amplias competencias que nos brindan capacidades para crear nuevos productos a lo largo de todo
                        el ciclo de vida del producto, desde la idea hasta el diseño, el desarrollo, las pruebas, hasta el lanzamiento y mantenimiento.
                    </div>


                  </div>
                  </div>
            </div>
        </section>
        <!-- end: Content -->";
    }

    public function getTemplateName()
    {
        return "/var/www/public/tenth/themes/tenth/pages/nosotros.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 45,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"page-title\" class=\"text-light\" data-bg-parallax=\"{{ 'assets/img/1.5.jpg'|theme }}\">

            <h2 class=\"text-lg m-b-10 text-light text-center\" style=\"color:white;\">Nosotros</h1>

</section>
        <!-- end: Page title -->
        <!-- Content -->
        <section id=\"page-content\">
            <div class=\"container\">
                <div class=\"grid-system-demo-live\">
                  <div class=\"row\">
                    <div class=\"col-lg-12 m-t-60 lead\">
                        Tenth Studio es una empresa de TI orientada a los negocios y centrada en el desarrollo de Realidad Virtual y
                        Aumentada con fines específicos. Nuestro enfoque orientado a la innovación está dedicado a ayudar a las empresas a
                        comenzar, crecer y tener éxito.


                      </div>




                    <div class=\"col-lg-6\">


                      <div class=\"lead smallpad\" style=\"padding-bottom: 30px;\">
                              Nacemos como la primera empresa orientada a la Realidad Virtual en Bolivia en el año 2017 y el año siguiente nos
                              convertimos en una empresa dedicada a la tecnología XR. Nuestra valiosa experiencia en experiencias VR nos permite crear
                              las experiencias de Realidad Virtual más de alta calidad para gafas VR, así como aplicaciones optimizadas para el mejor
                              rendimiento en plataformas móviles.

                              <br />

                              Nuestro objetivo es superar constantemente las expectativas del cliente y garantizar siempre que los servicios y soluciones
                              que ofrecemos son invariablemente de primera categoría, seguros, confiable y relevantes. Es por eso que estamos 100%
                              comprometidos con el resultado.


                      </div>

                    </div>

                    <div class=\"col-lg-6\">

                        <img class=\"transparent-img smallpad \"  src=\"{{ 'assets/img/tenthcover.jpg'|theme }}\" style=\"text-align: center;width: 100%; height: auto; border-radius: 15%;\">

                    </div>



                    <div class=\"smallpad lead\" style=\"padding-bottom: 30px;\">
                      Estamos ansiosos por ser los mejores en lo que hacemos. Por eso nos centramos en un pequeño número de tecnologías.
                      Nuestra especialización principal es el desarrollo de experiencias inmersivas de Realidad Virtual y Realidad Aumentada.
                      Este claro enfoque de nuestra experiencia garantiza que nuestros clientes obtengan soluciones de primer nivel y de mejor ajuste.

                    </div>

                    <div class=\"smallpad lead\" style=\"padding-bottom: 30px;\">
                        Al mismo tiempo, hemos desarrollado amplias competencias que nos brindan capacidades para crear nuevos productos a lo largo de todo
                        el ciclo de vida del producto, desde la idea hasta el diseño, el desarrollo, las pruebas, hasta el lanzamiento y mantenimiento.
                    </div>


                  </div>
                  </div>
            </div>
        </section>
        <!-- end: Content -->", "/var/www/public/tenth/themes/tenth/pages/nosotros.htm", "");
    }
}
