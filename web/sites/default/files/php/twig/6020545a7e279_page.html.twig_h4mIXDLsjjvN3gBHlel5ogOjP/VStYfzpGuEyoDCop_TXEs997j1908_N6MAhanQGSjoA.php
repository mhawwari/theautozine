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

/* themes/custom/bind/templates/page.html.twig */
class __TwigTemplate_f8c9cd80f9fa4375abc7d9597d9fb99660487779cdac6c29d293cee0271cfc66 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        $context["nav_classes"] = ((("navbar navbar-expand-lg" . (((        // line 47
($context["b4_navbar_schema"] ?? null) != "none")) ? ((" navbar-" . $this->sandbox->ensureToStringAllowed(($context["b4_navbar_schema"] ?? null), 47, $this->source))) : (" "))) . (((        // line 48
($context["b4_navbar_schema"] ?? null) != "none")) ? ((((($context["b4_navbar_schema"] ?? null) == "dark")) ? (" text-light") : (" text-dark"))) : (" "))) . (((        // line 49
($context["b4_navbar_bg_schema"] ?? null) != "none")) ? ((" bg-" . $this->sandbox->ensureToStringAllowed(($context["b4_navbar_bg_schema"] ?? null), 49, $this->source))) : (" ")));
        // line 51
        echo "
";
        // line 53
        $context["footer_classes"] = (((" " . (((        // line 54
($context["b4_footer_schema"] ?? null) != "none")) ? ((" footer-" . $this->sandbox->ensureToStringAllowed(($context["b4_footer_schema"] ?? null), 54, $this->source))) : (" "))) . (((        // line 55
($context["b4_footer_schema"] ?? null) != "none")) ? ((((($context["b4_footer_schema"] ?? null) == "dark")) ? (" text-light") : (" text-dark"))) : (" "))) . (((        // line 56
($context["b4_footer_bg_schema"] ?? null) != "none")) ? ((" bg-" . $this->sandbox->ensureToStringAllowed(($context["b4_footer_bg_schema"] ?? null), 56, $this->source))) : (" ")));
        // line 58
        echo "
<header>
  ";
        // line 60
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
        echo "  

  ";
        // line 62
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "nav_branding", [], "any", false, false, true, 62) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "nav_main", [], "any", false, false, true, 62)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "nav_additional", [], "any", false, false, true, 62))) {
            echo "  
  <nav class=\"";
            // line 63
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["nav_classes"] ?? null), 63, $this->source), "html", null, true);
            echo "\">
    <div class=\"";
            // line 64
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["b4_top_container"] ?? null), 64, $this->source), "html", null, true);
            echo " row mx-auto\">
      <div class=\"col-auto p-0\">
      ";
            // line 66
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "nav_branding", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
            echo "  
      </div>

      <div class=\"col-3 col-md-auto p-0 text-right\">
        <button class=\"navbar-toggler collapsed\" type=\"button\" data-toggle=\"collapse\"
                data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\"
                aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <svg class=\"ham hamRotate ham4\" viewBox=\"0 0 100 100\" width=\"35\" onclick=\"this.classList.toggle('active')\">
            <path
                  class=\"line top\"
                  d=\"m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20\" />
            <path
                  class=\"line middle\"
                  d=\"m 70,50 h -40\" />
            <path
                  class=\"line bottom\"
                  d=\"m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20\" />
          </svg>
        </button>
      </div>

      <div class=\"collapse navbar-collapse col-12 col-md-auto p-0 justify-content-end\" id=\"navbarSupportedContent\">
        ";
            // line 88
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "nav_main", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
            echo "      
        ";
            // line 89
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "nav_additional", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
            echo "      
      </div>
    </div>
  </nav>
  ";
        }
        // line 94
        echo "
</header>

<main role=\"main\">
  <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 99
        echo "
  ";
        // line 101
        $context["sidebar_first_classes"] = (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 101) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 101))) ? ("col-12 col-sm-6 col-lg-3") : ("col-12 col-lg-3"));
        // line 103
        echo "  
  ";
        // line 105
        $context["sidebar_second_classes"] = (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 105) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 105))) ? ("col-12 col-sm-6 col-lg-3") : ("col-12 col-lg-3"));
        // line 107
        echo "  
  ";
        // line 109
        $context["content_classes"] = (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 109) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 109))) ? ("col-12 col-lg-6") : ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 109) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 109))) ? ("col-12 col-lg-9") : ("col-12"))));
        // line 111
        echo "

  <div class=\"";
        // line 113
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["b4_top_container"] ?? null), 113, $this->source), "html", null, true);
        echo "\">
    ";
        // line 114
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 114)) {
            // line 115
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 115), 115, $this->source), "html", null, true);
            echo "
    ";
        }
        // line 117
        echo "    <div class=\"row no-gutters\">
      ";
        // line 118
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 118)) {
            // line 119
            echo "        <div class=\"order-2 order-lg-1 ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_classes"] ?? null), 119, $this->source), "html", null, true);
            echo "\">
          ";
            // line 120
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 120), 120, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 123
        echo "      <div class=\"order-1 order-lg-2 ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_classes"] ?? null), 123, $this->source), "html", null, true);
        echo "\">
        ";
        // line 124
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 124), 124, $this->source), "html", null, true);
        echo "
      </div>
      ";
        // line 126
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 126)) {
            // line 127
            echo "        <div class=\"order-3 ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_classes"] ?? null), 127, $this->source), "html", null, true);
            echo "\">
          ";
            // line 128
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 128), 128, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 131
        echo "    </div>
  </div>

</main>

";
        // line 136
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 136)) {
            // line 137
            echo "<footer class=\"mt-auto ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_classes"] ?? null), 137, $this->source), "html", null, true);
            echo "\">
  <div class=\"";
            // line 138
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["b4_top_container"] ?? null), 138, $this->source), "html", null, true);
            echo "\">
    ";
            // line 139
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 139), 139, $this->source), "html", null, true);
            echo "
  </div>
</footer>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/bind/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 139,  201 => 138,  196 => 137,  194 => 136,  187 => 131,  181 => 128,  176 => 127,  174 => 126,  169 => 124,  164 => 123,  158 => 120,  153 => 119,  151 => 118,  148 => 117,  142 => 115,  140 => 114,  136 => 113,  132 => 111,  130 => 109,  127 => 107,  125 => 105,  122 => 103,  120 => 101,  117 => 99,  111 => 94,  103 => 89,  99 => 88,  74 => 66,  69 => 64,  65 => 63,  61 => 62,  56 => 60,  52 => 58,  50 => 56,  49 => 55,  48 => 54,  47 => 53,  44 => 51,  42 => 49,  41 => 48,  40 => 47,  39 => 46,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/bind/templates/page.html.twig", "/var/www/html/repos/bind/web/themes/custom/bind/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 46, "if" => 62);
        static $filters = array("escape" => 60);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
