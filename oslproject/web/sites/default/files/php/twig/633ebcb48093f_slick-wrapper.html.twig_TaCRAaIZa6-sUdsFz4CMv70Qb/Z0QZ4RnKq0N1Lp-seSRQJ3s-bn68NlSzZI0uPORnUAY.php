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

/* modules/contrib/slick/templates/slick-wrapper.html.twig */
class __TwigTemplate_e1700f33a5643d69f765c755ee00518d extends \Twig\Template
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
        // line 16
        $context["classes"] = [0 => "slick-wrapper", 1 => ((twig_get_attribute($this->env, $this->source,         // line 18
($context["settings"] ?? null), "nav", [], "any", false, false, true, 18)) ? ("slick-wrapper--asnavfor") : ("")), 2 => ((twig_get_attribute($this->env, $this->source,         // line 19
($context["settings"] ?? null), "skin", [], "any", false, false, true, 19)) ? (("slick-wrapper--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "skin", [], "any", false, false, true, 19), 19, $this->source)))) : ("")), 3 => ((twig_get_attribute($this->env, $this->source,         // line 20
($context["settings"] ?? null), "skin_thumbnail", [], "any", false, false, true, 20)) ? (("slick-wrapper--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "skin_thumbnail", [], "any", false, false, true, 20), 20, $this->source)))) : ("")), 4 => ((twig_get_attribute($this->env, $this->source,         // line 21
($context["settings"] ?? null), "vertical", [], "any", false, false, true, 21)) ? ("slick-wrapper--v") : ("")), 5 => ((twig_get_attribute($this->env, $this->source,         // line 22
($context["settings"] ?? null), "vertical_tn", [], "any", false, false, true, 22)) ? ("slick-wrapper--v-tn") : ("")), 6 => ((twig_get_attribute($this->env, $this->source,         // line 23
($context["settings"] ?? null), "thumbnail_position", [], "any", false, false, true, 23)) ? (("slick-wrapper--tn-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "thumbnail_position", [], "any", false, false, true, 23), 23, $this->source)))) : ("")), 7 => ((twig_in_filter("over", twig_get_attribute($this->env, $this->source,         // line 24
($context["settings"] ?? null), "thumbnail_position", [], "any", false, false, true, 24))) ? ("slick-wrapper--tn-overlay") : ("")), 8 => ((twig_in_filter("over", twig_get_attribute($this->env, $this->source,         // line 25
($context["settings"] ?? null), "thumbnail_position", [], "any", false, false, true, 25))) ? (("slick-wrapper--tn-" . twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "thumbnail_position", [], "any", false, false, true, 25), 25, $this->source), ["over-" => ""]))) : (""))];
        // line 28
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "nav", [], "any", false, false, true, 28)) {
            // line 29
            echo "  <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 29), 29, $this->source), "id"), "html", null, true);
            echo ">
    ";
            // line 30
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["items"] ?? null), 30, $this->source), "html", null, true);
            echo "
  </div>
";
        } else {
            // line 33
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["items"] ?? null), 33, $this->source), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "modules/contrib/slick/templates/slick-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 33,  56 => 30,  51 => 29,  49 => 28,  47 => 25,  46 => 24,  45 => 23,  44 => 22,  43 => 21,  42 => 20,  41 => 19,  40 => 18,  39 => 16,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for a slick wrapper.
 *
 * Available variables:
 * - items: A list of items containing main and thumbnail of slick.html.twig
 *   which can be re-position using option Thumbnail position.
 * - attributes: HTML attributes to be applied to the list.
 * - settings: An array containing the given settings.
 *
 * @ingroup themeable
 */
#}
{%
  set classes = [
    'slick-wrapper',
    settings.nav ? 'slick-wrapper--asnavfor',
    settings.skin ? 'slick-wrapper--' ~ settings.skin|clean_class,
    settings.skin_thumbnail ? 'slick-wrapper--' ~ settings.skin_thumbnail|clean_class,
    settings.vertical ? 'slick-wrapper--v',
    settings.vertical_tn ? 'slick-wrapper--v-tn',
    settings.thumbnail_position ? 'slick-wrapper--tn-' ~ settings.thumbnail_position|clean_class,
    'over' in settings.thumbnail_position ? 'slick-wrapper--tn-overlay',
    'over' in settings.thumbnail_position ? 'slick-wrapper--tn-' ~ settings.thumbnail_position|replace({ 'over-' : '' })
  ]
%}
{% if settings.nav %}
  <div{{ attributes.addClass(classes)|without('id') }}>
    {{ items }}
  </div>
{% else %}
  {{ items }}
{% endif %}
", "modules/contrib/slick/templates/slick-wrapper.html.twig", "/home/lenovo/Desktop/OSLBHO_Assignments/oslproject/web/modules/contrib/slick/templates/slick-wrapper.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 16, "if" => 28);
        static $filters = array("clean_class" => 19, "replace" => 25, "escape" => 29, "without" => 29);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'replace', 'escape', 'without'],
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
