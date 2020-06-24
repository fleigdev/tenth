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

/* /var/www/public/tenth/plugins/watchlearn/contact/components/contactform/default.htm */
class __TwigTemplate_a3b51eb7a03647e1675ac09def5b49cdbececf920152123517086826df5c6997 extends \Twig\Template
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
        echo "

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-6\">
            <h3>Hablemos de tu próximo proyecto!</h3>
            <span class=\"lead\">Te intersa alguno de nuestros servicios? Dejanos tu comentario y para ponernos en contacto. Tambíen respondemos tus llamadas
              o mensajes por Whatsapp.</span>

            <div class=\"row m-t-40\">
                <div class=\"col-lg-6\">
                    <address>
                        <strong>Tenth S.R.L.</strong><br>
                        Av. San Martín - Calle I #406<br>
                        Santa Cruz de la Sierra, Bolivia<br>
                        <abbr title=\"Phone\">Tel:</h4> (+591) 755-21925
                    </address>
                </div>

            </div>
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
        <div class=\"col-lg-6\">
            <form  data-request=\"contactform::onSend\" class=\"contact-form\" data-request-validate data-request-flash>
                <div class=\"row\">
                    <div class=\"form-group col-md-6\">

                        <input type=\"text\" name=\"name\" aria-required=\"true\"  class=\"form-control required\" placeholder=\"Ingresa tu nombre\">
                        <span data-validate-for=\"name\"></span>
                    </div>
                    <div class=\"form-group col-md-6\">

                        <input type=\"email\" name=\"email\" aria-required=\"true\" required  class=\"form-control required\" placeholder=\"Ingresa tu correo\">
                        <span data-validate-for=\"email\"></span>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"form-group col-md-12\">

                        <input type=\"text\" name=\"mailsubject\" required class=\"form-control required\" placeholder=\"Ingresa el título de tu mensaje\">
                        <span data-validate-for=\"mailsubject\"></span>
                    </div>
                </div>
                <div class=\"form-group\">
                    
                    <textarea type=\"text\" name=\"content\" required rows=\"5\" class=\"form-control required\" placeholder=\"Ingresa tu comentario\"></textarea>
                    <span data-validate-for=\"content\"></span>
                </div>


                <a id=\"button-1\" class=\"buttondark\" type=\"submit\" href=\"#\">Enviar<img id=\"arrow-hover\" src=\"https://github.com/atloomer/atloomer.github.io/blob/master/img/iconmonstr-paper-plane-1-120.png?raw=true\"/></a>
            </form>

            <div class=\"tostr error\">
                Oops
            </div>

            <div class=\"tostr success\">
                Good
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/public/tenth/plugins/watchlearn/contact/components/contactform/default.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-6\">
            <h3>Hablemos de tu próximo proyecto!</h3>
            <span class=\"lead\">Te intersa alguno de nuestros servicios? Dejanos tu comentario y para ponernos en contacto. Tambíen respondemos tus llamadas
              o mensajes por Whatsapp.</span>

            <div class=\"row m-t-40\">
                <div class=\"col-lg-6\">
                    <address>
                        <strong>Tenth S.R.L.</strong><br>
                        Av. San Martín - Calle I #406<br>
                        Santa Cruz de la Sierra, Bolivia<br>
                        <abbr title=\"Phone\">Tel:</h4> (+591) 755-21925
                    </address>
                </div>

            </div>
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
        <div class=\"col-lg-6\">
            <form  data-request=\"contactform::onSend\" class=\"contact-form\" data-request-validate data-request-flash>
                <div class=\"row\">
                    <div class=\"form-group col-md-6\">

                        <input type=\"text\" name=\"name\" aria-required=\"true\"  class=\"form-control required\" placeholder=\"Ingresa tu nombre\">
                        <span data-validate-for=\"name\"></span>
                    </div>
                    <div class=\"form-group col-md-6\">

                        <input type=\"email\" name=\"email\" aria-required=\"true\" required  class=\"form-control required\" placeholder=\"Ingresa tu correo\">
                        <span data-validate-for=\"email\"></span>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"form-group col-md-12\">

                        <input type=\"text\" name=\"mailsubject\" required class=\"form-control required\" placeholder=\"Ingresa el título de tu mensaje\">
                        <span data-validate-for=\"mailsubject\"></span>
                    </div>
                </div>
                <div class=\"form-group\">
                    
                    <textarea type=\"text\" name=\"content\" required rows=\"5\" class=\"form-control required\" placeholder=\"Ingresa tu comentario\"></textarea>
                    <span data-validate-for=\"content\"></span>
                </div>


                <a id=\"button-1\" class=\"buttondark\" type=\"submit\" href=\"#\">Enviar<img id=\"arrow-hover\" src=\"https://github.com/atloomer/atloomer.github.io/blob/master/img/iconmonstr-paper-plane-1-120.png?raw=true\"/></a>
            </form>

            <div class=\"tostr error\">
                Oops
            </div>

            <div class=\"tostr success\">
                Good
            </div>
        </div>
    </div>
</div>
", "/var/www/public/tenth/plugins/watchlearn/contact/components/contactform/default.htm", "");
    }
}
