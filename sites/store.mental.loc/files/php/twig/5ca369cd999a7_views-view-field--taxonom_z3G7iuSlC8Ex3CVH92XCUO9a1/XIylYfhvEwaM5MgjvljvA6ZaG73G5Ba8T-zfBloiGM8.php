<?php

/* themes/custom/flex_store/templates/views-view-field--taxonomy-products--page-1--variations.html.twig */
class __TwigTemplate_a9da99028b783a5695d1c42b83d4adf90509bf573be8604835d3609ac218e038 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $tags = ["if" => 24];
        $filters = [];
        $functions = [];

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                ['if'],
                [],
                []
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 23
        echo "
";
        // line 24
        if ($this->getAttribute(($context["product"] ?? null), "is_default", [])) {
            // line 25
            echo "  ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["output"] ?? null), "html", null, true));
        } else {
            // line 27
            echo "  <form method=\"post\" action=\"/product/";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["product"] ?? null), "product_id", []), "html", null, true));
            echo "\"><input class=\"button--add-to-cart button button--primary js-form-submit form-submit btn-success btn\" type=\"submit\" value=\"CHOOSE OPTION\"></form>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/flex_store/templates/views-view-field--taxonomy-products--page-1--variations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 27,  48 => 25,  46 => 24,  43 => 23,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * @file
 * Default theme implementation for a single field in a view.
 *
 * Available variables:
 * - view: The view that the field belongs to.
 * - field: The field handler that can process the input.
 * - row: The raw result of the database query that generated this field.
 * - output: The processed output that will normally be used.
 *
 * When fetching output from the row this construct should be used:
 * data = row[field.field_alias]
 *
 * The above will guarantee that you'll always get the correct data, regardless
 * of any changes in the aliasing that might happen if the view is modified.
 *
 * @see template_preprocess_views_view_field()
 *
 * @ingroup themeable
 */
#}

{% if product.is_default %}
  {{ output -}}
{% else %}
  <form method=\"post\" action=\"/product/{{ product.product_id }}\"><input class=\"button--add-to-cart button button--primary js-form-submit form-submit btn-success btn\" type=\"submit\" value=\"CHOOSE OPTION\"></form>
{% endif %}
", "themes/custom/flex_store/templates/views-view-field--taxonomy-products--page-1--variations.html.twig", "/var/www/mental/themes/custom/flex_store/templates/views-view-field--taxonomy-products--page-1--variations.html.twig");
    }
}
