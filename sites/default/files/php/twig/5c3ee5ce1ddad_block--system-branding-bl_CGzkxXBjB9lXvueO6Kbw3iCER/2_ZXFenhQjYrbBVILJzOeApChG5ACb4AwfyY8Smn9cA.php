<?php

/* themes/contrib/omega/omega/templates/block--system-branding-block.html.twig */
class __TwigTemplate_a600af341f819181cf0fa20d6f4c20f3f4d18224b0028d3f0adbf1e0d192a9c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@block/block.html.twig", "themes/contrib/omega/omega/templates/block--system-branding-block.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@block/block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 21);
        $filters = array("t" => 23, "e" => 32);
        $functions = array("url" => 23);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('t', 'e'),
                array('url')
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        // line 19
        echo "  
  <div id=\"site-branding\">
    ";
        // line 21
        if (($context["site_logo"] ?? null)) {
            // line 22
            echo "      <div id=\"logo\">
        <a href=\"";
            // line 23
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>")));
            echo "\" title=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home")));
            echo "\" rel=\"home\" class=\"site-logo\">
          <img src=\"";
            // line 24
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["site_logo"] ?? null), "html", null, true));
            echo "\" alt=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home")));
            echo "\" />
        </a>
      </div>
    ";
        }
        // line 28
        echo "    
    ";
        // line 29
        if (($context["site_name"] ?? null)) {
            // line 30
            echo "      <div id=\"name-slogan\" class=\"site-name-slogan clearfix\">    
        <div class=\"site-name\">
          <a href=\"";
            // line 32
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>")));
            echo "\" title=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home")));
            echo "\" rel=\"home\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["site_name"] ?? null)));
            echo "</a>
        </div>
      
      ";
            // line 35
            if (($context["site_slogan"] ?? null)) {
                // line 36
                echo "        <div class=\"site-slogan\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["site_slogan"] ?? null), "html", null, true));
                echo "</div>
      ";
            }
            // line 38
            echo "      
      </div>
    ";
        }
        // line 41
        echo "    
  </div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/omega/omega/templates/block--system-branding-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 41,  106 => 38,  100 => 36,  98 => 35,  88 => 32,  84 => 30,  82 => 29,  79 => 28,  70 => 24,  64 => 23,  61 => 22,  59 => 21,  55 => 19,  52 => 18,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@block/block.html.twig\" %}
{#
/**
 * @file
 * Default theme implementation for a branding block.
 *
 * Each branding element variable (logo, name, slogan) is only available if
 * enabled in the block configuration.
 *
 * Available variables:
 * - site_logo: Logo for site as defined in Appearance or theme settings.
 * - site_name: Name for site as defined in Site information settings.
 * - site_slogan: Slogan for site as defined in Site information settings.
 *
 * @ingroup themeable
 */
#}
{% block content %}
  
  <div id=\"site-branding\">
    {% if site_logo %}
      <div id=\"logo\">
        <a href=\"{{ url('<front>') }}\" title=\"{{ 'Home'|t }}\" rel=\"home\" class=\"site-logo\">
          <img src=\"{{ site_logo }}\" alt=\"{{ 'Home'|t }}\" />
        </a>
      </div>
    {% endif %}
    
    {% if site_name %}
      <div id=\"name-slogan\" class=\"site-name-slogan clearfix\">    
        <div class=\"site-name\">
          <a href=\"{{ url('<front>') }}\" title=\"{{ 'Home'|t }}\" rel=\"home\">{{ site_name|e }}</a>
        </div>
      
      {% if site_slogan %}
        <div class=\"site-slogan\">{{ site_slogan }}</div>
      {% endif %}
      
      </div>
    {% endif %}
    
  </div>
{% endblock %}
", "themes/contrib/omega/omega/templates/block--system-branding-block.html.twig", "/var/www/mental/themes/contrib/omega/omega/templates/block--system-branding-block.html.twig");
    }
}
