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

/* core/themes/seven/templates/node-edit-form.html.twig */
class __TwigTemplate_4962537114638476ccb5093f362b4a06 extends \Twig\Template
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
        // line 18
        echo "<div class=\"layout-node-form clearfix\">
  <div class=\"layout-region layout-region-node-main\">
    ";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 20, $this->source), "advanced", "footer", "actions"), "html", null, true);
        echo "
  </div>
  <div class=\"layout-region layout-region-node-secondary\">
    ";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "advanced", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
        echo "
  </div>
  <div class=\"layout-region layout-region-node-footer\">
    <div class=\"layout-region-node-footer__content\">
      ";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "footer", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
        echo "
      ";
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "actions", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
        echo "
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/seven/templates/node-edit-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 28,  56 => 27,  49 => 23,  43 => 20,  39 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for a node edit form.
 *
 * Two column template for the node add/edit form.
 *
 * This template will be used when a node edit form specifies 'node_edit_form'
 * as its #theme callback.  Otherwise, by default, node add/edit forms will be
 * themed by form.html.twig.
 *
 * Available variables:
 * - form: The node add/edit form.
 *
 * @see seven_form_node_form_alter()
 */
#}
<div class=\"layout-node-form clearfix\">
  <div class=\"layout-region layout-region-node-main\">
    {{ form|without('advanced', 'footer', 'actions') }}
  </div>
  <div class=\"layout-region layout-region-node-secondary\">
    {{ form.advanced }}
  </div>
  <div class=\"layout-region layout-region-node-footer\">
    <div class=\"layout-region-node-footer__content\">
      {{ form.footer }}
      {{ form.actions }}
    </div>
  </div>
</div>
", "core/themes/seven/templates/node-edit-form.html.twig", "/home/lenovo/Desktop/OSLBHO_Assignments/oslproject/web/core/themes/seven/templates/node-edit-form.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 20, "without" => 20);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'without'],
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
