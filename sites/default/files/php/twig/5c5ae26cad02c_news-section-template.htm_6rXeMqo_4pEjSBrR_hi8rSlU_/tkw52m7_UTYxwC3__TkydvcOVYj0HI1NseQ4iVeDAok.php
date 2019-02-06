<?php

/* modules/custom/news_section/templates/news-section-template.html.twig */
class __TwigTemplate_c3d007d1890a2b4c1ea4f9f231c0d5269938699572b7fdcf6e5dd71a42f8a7c5 extends Twig_Template
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
        $tags = ["for" => 3];
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
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("news_section/news_section"), "html", null, true));
        echo "
<div id=\"sections\">
  ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sections"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 4
            echo "    <a href=\"/news_section/";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["section"], "tid", []), "html", null, true));
            echo "\">
      <p>";
            // line 5
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["section"], "name", []), "html", null, true));
            echo "</p>
    </a>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "</div>
";
        // line 10
        echo "<div class=\"news\" id=\"news_block\">
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/news_section/templates/news-section-template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 10,  66 => 8,  57 => 5,  52 => 4,  48 => 3,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ attach_library('news_section/news_section') }}
<div id=\"sections\">
  {% for section in sections %}
    <a href=\"/news_section/{{ section.tid }}\">
      <p>{{ section.name }}</p>
    </a>
  {% endfor %}
</div>
{# AJAX part #}
<div class=\"news\" id=\"news_block\">
</div>
{#AJAX part end#}", "modules/custom/news_section/templates/news-section-template.html.twig", "/var/www/mental/modules/custom/news_section/templates/news-section-template.html.twig");
    }
}
