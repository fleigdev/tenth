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

/* /var/www/public/tenth/themes/tenth/partials/all_pages/footer.htm */
class __TwigTemplate_6b0f86bad2248a6908d95ce61777b1cfcb7e8111cd7cd25f211bb98b2806dd0a extends \Twig\Template
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
        echo "<footer id=\"footer\" class=\"background-black text-light\">
     <div class=\"footer-content\">
         <div class=\"container\">
             <div class=\"row\">
                 <div class=\"col-lg-5\">
                     <div class=\"widget\">
                         <div class=\"widget-title\">TENTH SRL</div>
                         <p class=\"mb-5\">Soluciones Digitales<br>
                             VR-AR-XR</p>
                        
                         <div class=\"social-icons m-t-30 social-icons-colored\">
                             <ul>
                                 <li class=\"social-facebook\"><a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a></li>
                                 <li class=\"social-twitter\"><a href=\"#\"><i class=\"fab fa-twitter\"></i></a></li>
                                 <li class=\"social-google\"><a href=\"#\"><i class=\"fab fa-google-plus-g\"></i></a></li>
                                 <li class=\"social-pinterest\"><a href=\"#\"><i class=\"fab fa-pinterest\"></i></a></li>
                                 <li class=\"social-vimeo\"><a href=\"#\"><i class=\"fab fa-vimeo\"></i></a></li>
                                 <li class=\"social-linkedin\"><a href=\"#\"><i class=\"fab fa-linkedin\"></i></a></li>
                             </ul>
                         </div>
                     </div>
                 </div>
                 <div class=\"col-lg-7\">
                     <div class=\"row\">
                         <div class=\"col-lg-3\">
                             <div class=\"widget\">
                                 <div class=\"widget-title\">Servicios</div>
                                 <ul class=\"list\">
                                     <li><a href=\"#\">Realidad Virtual</a></li>
                                     <li><a href=\"#\">Realidad Aumentada</a></li>
                                     <li><a href=\"#\">Modelado 3D</a></li>

                                 </ul>
                             </div>
                         </div>

                         <div class=\"col-lg-3\">
                             <div class=\"widget\">
                                 <div class=\"widget-title\">Aprende más de nosotros!</div>
                                 <ul class=\"list\">

                                     <li><a href=\"#\">Blog</a></li>
                                     <li><a href=\"#\">Nosotros</a></li>

                                 </ul>
                             </div>
                         </div>
                         <div class=\"col-lg-3\">
                             <div class=\"widget\">
                                 <div class=\"widget-title\">Soporte</div>
                                 <ul class=\"list\">
                                     <li><a href=\"#\">Contacto</a></li>

                                 </ul>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class=\"copyright-content background-black text-light\">
         <div class=\"container\">
             <div class=\"copyright-text text-center\">&copy; 2020 TENTH - Website made by @Mfleig. </div>
         </div>
     </div>
 </footer>";
    }

    public function getTemplateName()
    {
        return "/var/www/public/tenth/themes/tenth/partials/all_pages/footer.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer id=\"footer\" class=\"background-black text-light\">
     <div class=\"footer-content\">
         <div class=\"container\">
             <div class=\"row\">
                 <div class=\"col-lg-5\">
                     <div class=\"widget\">
                         <div class=\"widget-title\">TENTH SRL</div>
                         <p class=\"mb-5\">Soluciones Digitales<br>
                             VR-AR-XR</p>
                        
                         <div class=\"social-icons m-t-30 social-icons-colored\">
                             <ul>
                                 <li class=\"social-facebook\"><a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a></li>
                                 <li class=\"social-twitter\"><a href=\"#\"><i class=\"fab fa-twitter\"></i></a></li>
                                 <li class=\"social-google\"><a href=\"#\"><i class=\"fab fa-google-plus-g\"></i></a></li>
                                 <li class=\"social-pinterest\"><a href=\"#\"><i class=\"fab fa-pinterest\"></i></a></li>
                                 <li class=\"social-vimeo\"><a href=\"#\"><i class=\"fab fa-vimeo\"></i></a></li>
                                 <li class=\"social-linkedin\"><a href=\"#\"><i class=\"fab fa-linkedin\"></i></a></li>
                             </ul>
                         </div>
                     </div>
                 </div>
                 <div class=\"col-lg-7\">
                     <div class=\"row\">
                         <div class=\"col-lg-3\">
                             <div class=\"widget\">
                                 <div class=\"widget-title\">Servicios</div>
                                 <ul class=\"list\">
                                     <li><a href=\"#\">Realidad Virtual</a></li>
                                     <li><a href=\"#\">Realidad Aumentada</a></li>
                                     <li><a href=\"#\">Modelado 3D</a></li>

                                 </ul>
                             </div>
                         </div>

                         <div class=\"col-lg-3\">
                             <div class=\"widget\">
                                 <div class=\"widget-title\">Aprende más de nosotros!</div>
                                 <ul class=\"list\">

                                     <li><a href=\"#\">Blog</a></li>
                                     <li><a href=\"#\">Nosotros</a></li>

                                 </ul>
                             </div>
                         </div>
                         <div class=\"col-lg-3\">
                             <div class=\"widget\">
                                 <div class=\"widget-title\">Soporte</div>
                                 <ul class=\"list\">
                                     <li><a href=\"#\">Contacto</a></li>

                                 </ul>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class=\"copyright-content background-black text-light\">
         <div class=\"container\">
             <div class=\"copyright-text text-center\">&copy; 2020 TENTH - Website made by @Mfleig. </div>
         </div>
     </div>
 </footer>", "/var/www/public/tenth/themes/tenth/partials/all_pages/footer.htm", "");
    }
}
