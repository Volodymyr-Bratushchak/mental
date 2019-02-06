<?php

/* modules/custom/article_slider/templates/article-slider-template.html.twig */
class __TwigTemplate_d381a27bff8243bb684fc19ed4edb0cbf67ac69fa790d255e4011229aaf0d58a extends Twig_Template
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
        $tags = ["for" => 4];
        $filters = [];
        $functions = ["attach_library" => 1];

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                ['for'],
                [],
                ['attach_library']
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
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("article_slider/article_slider"), "html", null, true));
        echo "
<div class=\"art-slider\" style=\"width: 1000px;
\">
  ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["slides"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 5
            echo "    <div class=\"slider_slide\"
      style=\"
        background: url('";
            // line 7
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["slide"], "image", []), "html", null, true));
            echo "');
        background-position: 50% 50%;
        background-repeat: no-repeat;
        background-size: 100% 100%;
        height: 440px;
     \">
    <div class=\"slider_lable\"
      style=\"
        color: whitesmoke;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: auto;
        text-align: center;
        vertical-align: middle;
        font-size: 250%;
    \">
        ";
            // line 23
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["slide"], "name", []), "html", null, true));
            echo "
      </div>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/article_slider/templates/article-slider-template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 27,  76 => 23,  57 => 7,  53 => 5,  49 => 4,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ attach_library('article_slider/article_slider') }}
<div class=\"art-slider\" style=\"width: 1000px;
\">
  {% for slide in slides %}
    <div class=\"slider_slide\"
      style=\"
        background: url('{{ slide.image }}');
        background-position: 50% 50%;
        background-repeat: no-repeat;
        background-size: 100% 100%;
        height: 440px;
     \">
    <div class=\"slider_lable\"
      style=\"
        color: whitesmoke;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: auto;
        text-align: center;
        vertical-align: middle;
        font-size: 250%;
    \">
        {{ slide.name }}
      </div>
    </div>
  {% endfor %}
</div>
", "modules/custom/article_slider/templates/article-slider-template.html.twig", "/var/www/mental/modules/custom/article_slider/templates/article-slider-template.html.twig");
    }
}
