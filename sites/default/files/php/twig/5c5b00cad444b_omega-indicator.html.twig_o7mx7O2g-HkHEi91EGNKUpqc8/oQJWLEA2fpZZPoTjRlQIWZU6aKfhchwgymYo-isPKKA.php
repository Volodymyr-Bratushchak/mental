<?php

/* themes/contrib/omega/omega/templates/omega-indicator.html.twig */
class __TwigTemplate_0f9aadbc5e8009dc3746076d5baec046f0ae8b275752f00c30df988cbde484b8 extends Twig_Template
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
        $tags = [];
        $filters = [];
        $functions = [];

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                [],
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

        // line 1
        echo "<div id=\"omega-screen--indicator\" class=\"clearfix\">
  <div class=\"ologo\">
    ";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["logo"] ?? null), "html", null, true));
        echo "
  </div>
  <div class=\"indicator-data\">
    <div class=\"screen-size\">
      <h5>@screen width:</h5>
      <span class=\"data\"></span>
    </div>
    <div class=\"theme-name\">
      <h5>@theme:</h5>
      <span class=\"data\"></span>
    </div>
    <div class=\"screen-query\">
      <h5>@breakpoints:</h5>
      <span class=\"data\"></span>
    </div>
    <div class=\"screen-layout\">
      <h5>@layout:</h5>
      <span class=\"data\"></span>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/contrib/omega/omega/templates/omega-indicator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 3,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"omega-screen--indicator\" class=\"clearfix\">
  <div class=\"ologo\">
    {{ logo }}
  </div>
  <div class=\"indicator-data\">
    <div class=\"screen-size\">
      <h5>@screen width:</h5>
      <span class=\"data\"></span>
    </div>
    <div class=\"theme-name\">
      <h5>@theme:</h5>
      <span class=\"data\"></span>
    </div>
    <div class=\"screen-query\">
      <h5>@breakpoints:</h5>
      <span class=\"data\"></span>
    </div>
    <div class=\"screen-layout\">
      <h5>@layout:</h5>
      <span class=\"data\"></span>
    </div>
  </div>
</div>", "themes/contrib/omega/omega/templates/omega-indicator.html.twig", "/var/www/mental/themes/contrib/omega/omega/templates/omega-indicator.html.twig");
    }
}
