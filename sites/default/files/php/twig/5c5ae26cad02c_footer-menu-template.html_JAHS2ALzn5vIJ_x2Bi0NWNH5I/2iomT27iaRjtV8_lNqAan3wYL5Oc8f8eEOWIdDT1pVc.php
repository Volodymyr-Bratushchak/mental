<?php

/* modules/custom/footer_menu/templates/footer-menu-template.html.twig */
class __TwigTemplate_b8762997c09fad644339bb970ae2be1ef4e12b3a4f6f4dcb04c1c5b29e4af652 extends Twig_Template
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
        $functions = ["attach_library" => 1];

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                [],
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
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("footer_menu/footer_menu"), "html", null, true));
        echo "

<div class=\"footer-section\">
  <div class=\"column\">
    <div>
      MENTAL FLOSS
    </div>
    <div>
      <a src=\"\">ABOUT</a>
      <a src=\"\">RSS</a>
      <a src=\"\">CONTACT US</a>
      <a src=\"\">SHOP</a>
    </div>
    <div>
      <h1></h1>
    </div>
    <div>
      <a src=\"\">FLOOP8</a>
      <a src=\"\">12UP</a>
      <a src=\"\">90MIN</a>
    </div>
  </div>
  <div class=\"column\">
    <div>
      <a href=\"https://youtube.com/\">
        <i class=\"fa fa-youtube\"></i>
      </a>
      <a href=\"https://www.instagram.com/\">
        <i class=\"fa fa-instagram\"></i>
      </a>
      <a href=\"https://www.facebook.com/\">
        <i class=\"fa fa-facebook\"></i>
      </a>
      <a href=\"https://twitter.com/\">
        <i class=\"fa fa-twitter\"></i>
      </a>
    </div>
    <div>
      <div>
        <p>Subscribe to our Newsletter</p>
      </div>
      <a src=\"/subscribe_form\">
        <button class=\"button\">SIGN UP NOW</button>
      </a>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/footer_menu/templates/footer-menu-template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ attach_library('footer_menu/footer_menu') }}

<div class=\"footer-section\">
  <div class=\"column\">
    <div>
      MENTAL FLOSS
    </div>
    <div>
      <a src=\"\">ABOUT</a>
      <a src=\"\">RSS</a>
      <a src=\"\">CONTACT US</a>
      <a src=\"\">SHOP</a>
    </div>
    <div>
      <h1></h1>
    </div>
    <div>
      <a src=\"\">FLOOP8</a>
      <a src=\"\">12UP</a>
      <a src=\"\">90MIN</a>
    </div>
  </div>
  <div class=\"column\">
    <div>
      <a href=\"https://youtube.com/\">
        <i class=\"fa fa-youtube\"></i>
      </a>
      <a href=\"https://www.instagram.com/\">
        <i class=\"fa fa-instagram\"></i>
      </a>
      <a href=\"https://www.facebook.com/\">
        <i class=\"fa fa-facebook\"></i>
      </a>
      <a href=\"https://twitter.com/\">
        <i class=\"fa fa-twitter\"></i>
      </a>
    </div>
    <div>
      <div>
        <p>Subscribe to our Newsletter</p>
      </div>
      <a src=\"/subscribe_form\">
        <button class=\"button\">SIGN UP NOW</button>
      </a>
    </div>
  </div>
</div>
", "modules/custom/footer_menu/templates/footer-menu-template.html.twig", "/var/www/mental/modules/custom/footer_menu/templates/footer-menu-template.html.twig");
    }
}
