<?php

/* modules/custom/header_menu/templates/header-menu-template.html.twig */
class __TwigTemplate_f2eda12953398f4f8e2bd8d6f8927780046a551884ff33475391b58ca92fd6ca extends Twig_Template
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
        $tags = ["for" => 68];
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
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("header_menu/header_menu"), "html", null, true));
        echo "
<div class=\"header_menu\">
  <a href=\"/\">
    MF
  </a>

  <div>
    <ul>
      <li class=\"header_bar\">
        <a href=\"/\">
          SMART SHOPPING
        </a>
      </li>
      <li class=\"header_bar\">
        <a href=\"/\">
          QUIZZES
        </a>
      </li>
      <li class=\"header_bar\">
        <a href=\"/\">
          LISTS
        </a>
      </li>
      <li class=\"header_bar\">
        <a href=\"/\">
          VIDEOS
        </a>
      </li>
      <li class=\"header_bar\">
        <a href=\"/\">
          AMAZING FACTS
        </a>
      </li>
      <li class=\"header_bar\">
        <a href=\"/\">
          <span class=\"glyphicon glyphicon-shopping-cart\"></span> SHOP
        </a>
      </li>
      <li class=\"header_bar\">
        <a href=\"https://twitter.com/\">
          <i class=\"fa fa-twitter\"></i>
        </a>
      </li>
      <li class=\"header_bar\">
        <a href=\"https://www.facebook.com/\">
          <i class=\"fa fa-facebook\"></i>
        </a>
      </li>
      <li class=\"header_bar\">
        <a href=\"https://www.instagram.com/\">
          <i class=\"fa fa-instagram\"></i>
        </a>
      </li>
      <li class=\"header_bar\">
        <a href=\"https://youtube.com/\">
          <i class=\"fa fa-youtube\"></i>
        </a>
      </li>
      <li>
        <div class=\"header_menu\" id=\"menu_button\">
          Menu
        </div>
      </li>
    </ul>
  </div>
</div>
  <div class=\"menu_items\">
  ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["menu_items"] ?? null));
        foreach ($context['_seq'] as $context["section_name"] => $context["section"]) {
            // line 69
            echo "    <div class=\"section_name\">
      <h3>";
            // line 70
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["section_name"], "html", null, true));
            echo "</h3>
      <ul class=\"menu_list\">
        ";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["section"]);
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 73
                echo "          <li>
            <a href=\"/taxonomy/term/";
                // line 74
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "tid", []), "html", null, true));
                echo "\">
              <p>";
                // line 75
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "name", []), "html", null, true));
                echo "</p>
            </a>
          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "      </ul>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['section_name'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "</div>


";
    }

    public function getTemplateName()
    {
        return "modules/custom/header_menu/templates/header-menu-template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 82,  146 => 79,  136 => 75,  132 => 74,  129 => 73,  125 => 72,  120 => 70,  117 => 69,  113 => 68,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ attach_library('header_menu/header_menu') }}
<div class=\"header_menu\">
  <a href=\"/\">
    MF
  </a>

  <div>
    <ul>
      <li class=\"header_bar\">
        <a href=\"/\">
          SMART SHOPPING
        </a>
      </li>
      <li class=\"header_bar\">
        <a href=\"/\">
          QUIZZES
        </a>
      </li>
      <li class=\"header_bar\">
        <a href=\"/\">
          LISTS
        </a>
      </li>
      <li class=\"header_bar\">
        <a href=\"/\">
          VIDEOS
        </a>
      </li>
      <li class=\"header_bar\">
        <a href=\"/\">
          AMAZING FACTS
        </a>
      </li>
      <li class=\"header_bar\">
        <a href=\"/\">
          <span class=\"glyphicon glyphicon-shopping-cart\"></span> SHOP
        </a>
      </li>
      <li class=\"header_bar\">
        <a href=\"https://twitter.com/\">
          <i class=\"fa fa-twitter\"></i>
        </a>
      </li>
      <li class=\"header_bar\">
        <a href=\"https://www.facebook.com/\">
          <i class=\"fa fa-facebook\"></i>
        </a>
      </li>
      <li class=\"header_bar\">
        <a href=\"https://www.instagram.com/\">
          <i class=\"fa fa-instagram\"></i>
        </a>
      </li>
      <li class=\"header_bar\">
        <a href=\"https://youtube.com/\">
          <i class=\"fa fa-youtube\"></i>
        </a>
      </li>
      <li>
        <div class=\"header_menu\" id=\"menu_button\">
          Menu
        </div>
      </li>
    </ul>
  </div>
</div>
  <div class=\"menu_items\">
  {% for section_name, section in menu_items %}
    <div class=\"section_name\">
      <h3>{{ section_name }}</h3>
      <ul class=\"menu_list\">
        {% for item in section %}
          <li>
            <a href=\"/taxonomy/term/{{ item.tid }}\">
              <p>{{ item.name }}</p>
            </a>
          </li>
        {% endfor %}
      </ul>
    </div>
  {% endfor %}
</div>


", "modules/custom/header_menu/templates/header-menu-template.html.twig", "/var/www/mental/modules/custom/header_menu/templates/header-menu-template.html.twig");
    }
}
