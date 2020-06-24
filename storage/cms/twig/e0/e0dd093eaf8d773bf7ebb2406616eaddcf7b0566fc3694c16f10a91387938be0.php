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

/* /var/www/public/tenth/themes/tenth/partials/html_base/meta_foot.htm */
class __TwigTemplate_7af796e152144205a1868a362b17b19af051f1ad5d140ae3ad293ed7d0f64e3a extends \Twig\Template
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
        echo "<!--Plugins-->
<script src=\"";
        // line 2
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.js");
        echo "\"></script>
<script src=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/plugins.js");
        echo "\"></script>

<!--Template functions-->
<script src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/functions.js");
        echo "\"></script>

<!-- Partical Js files  -->
<script src=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/particles/particles.js");
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/particles/particles-dots.js");
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/particles/particles-stars.js");
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/particles/particles-bubble.js");
        echo "\" type=\"text/javascript\"></script>

<script type=\"text/javascript\">

jQuery(document).ready(function(\$){
      \$('.contact-form').on('ajaxError', function(event, message){
      \$('.tostr').removeClass('active');

      \$('.tostr.error').addClass('active');
    });

      \$('.contact-form').on('ajaxSuccess', function(event, message){
      \$('.tostr').removeClass('active');

      \$('.tostr.success').addClass('active');
    });
});

</script>
";
        // line 31
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework'.($_minify ? '-min' : '').'.js"></script>'.PHP_EOL;
        unset($_minify);
        // line 32
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
    }

    public function getTemplateName()
    {
        return "/var/www/public/tenth/themes/tenth/partials/html_base/meta_foot.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 32,  90 => 31,  68 => 12,  64 => 11,  60 => 10,  56 => 9,  50 => 6,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--Plugins-->
<script src=\"{{ 'assets/js/jquery.js'|theme }}\"></script>
<script src=\"{{ 'assets/js/plugins.js'|theme }}\"></script>

<!--Template functions-->
<script src=\"{{ 'assets/js/functions.js'|theme }}\"></script>

<!-- Partical Js files  -->
<script src=\"{{ 'assets/plugins/particles/particles.js'|theme }}\" type=\"text/javascript\"></script>
<script src=\"{{ 'assets/plugins/particles/particles-dots.js'|theme }}\" type=\"text/javascript\"></script>
<script src=\"{{ 'assets/plugins/particles/particles-stars.js'|theme }}\" type=\"text/javascript\"></script>
<script src=\"{{ 'assets/plugins/particles/particles-bubble.js'|theme }}\" type=\"text/javascript\"></script>

<script type=\"text/javascript\">

jQuery(document).ready(function(\$){
      \$('.contact-form').on('ajaxError', function(event, message){
      \$('.tostr').removeClass('active');

      \$('.tostr.error').addClass('active');
    });

      \$('.contact-form').on('ajaxSuccess', function(event, message){
      \$('.tostr').removeClass('active');

      \$('.tostr.success').addClass('active');
    });
});

</script>
{% framework %}
{% framework extras %}", "/var/www/public/tenth/themes/tenth/partials/html_base/meta_foot.htm", "");
    }
}
