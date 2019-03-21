<?php

/* modules/custom/cart_checkout/templates/cart-items-template.html.twig */
class __TwigTemplate_33adce0bd556ffdd0697e1598ca324c369e08bdfd06a25c2051f5987a902d180 extends Twig_Template
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
        $tags = ["for" => 16];
        $filters = [];
        $functions = [];

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                ['for'],
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
        echo "<div>
  <div>
    <h1>OK, the item \"";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["product"] ?? null), "title", []), "html", null, true));
        echo "\" was added to your cart. What next?</h1>
    <img src=\"";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["product"] ?? null), "image", []), "html", null, true));
        echo "\">
    <h2>";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["product"] ?? null), "var_title", []), "html", null, true));
        echo ", ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["product"] ?? null), "price", []), "html", null, true));
        echo "</h2>
    <h3>Your cart contains ";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["cart_info"] ?? null), "total_items", []), "html", null, true));
        echo " items</h3>
  </div>
  <div>
    <table>
      <tr>
        <th>Title</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Total</th>
      </tr>
      ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["build"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 17
            echo "        <tr>
          <th>";
            // line 18
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", []), "html", null, true));
            echo "</th>
          <th>";
            // line 19
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "unit_price", []), "html", null, true));
            echo "</th>
          <th>";
            // line 20
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "quantity", []), "html", null, true));
            echo "</th>
          <th>";
            // line 21
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "total_price", []), "html", null, true));
            echo "</th>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    </table>
  </div>
  <div>
    <h3>Total price: </h3>
    <p>";
        // line 28
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["cart_info"] ?? null), "total_cart", []), "html", null, true));
        echo "</p>
  </div>
  <div>
    <form action=\"";
        // line 31
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["cart_info"] ?? null), "checkout", []), "html", null, true));
        echo "\">
      <input type=\"submit\" value=\"Proceed to Checkout\" />
    </form>
    <a href=\"/cart\">
      <p>Edit your cart</p>
    </a>
  </div>
  <div>
    <h2> You May Also Like...</h2>
  </div>
  <div>
    ";
        // line 42
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["render"] ?? null), "html", null, true));
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/cart_checkout/templates/cart-items-template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 42,  114 => 31,  108 => 28,  102 => 24,  93 => 21,  89 => 20,  85 => 19,  81 => 18,  78 => 17,  74 => 16,  61 => 6,  55 => 5,  51 => 4,  47 => 3,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
  <div>
    <h1>OK, the item \"{{ product.title }}\" was added to your cart. What next?</h1>
    <img src=\"{{ product.image }}\">
    <h2>{{ product.var_title }}, {{ product.price }}</h2>
    <h3>Your cart contains {{ cart_info.total_items }} items</h3>
  </div>
  <div>
    <table>
      <tr>
        <th>Title</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Total</th>
      </tr>
      {% for item in build %}
        <tr>
          <th>{{ item.title }}</th>
          <th>{{ item.unit_price }}</th>
          <th>{{ item.quantity }}</th>
          <th>{{ item.total_price }}</th>
        </tr>
      {% endfor %}
    </table>
  </div>
  <div>
    <h3>Total price: </h3>
    <p>{{ cart_info.total_cart }}</p>
  </div>
  <div>
    <form action=\"{{ cart_info.checkout }}\">
      <input type=\"submit\" value=\"Proceed to Checkout\" />
    </form>
    <a href=\"/cart\">
      <p>Edit your cart</p>
    </a>
  </div>
  <div>
    <h2> You May Also Like...</h2>
  </div>
  <div>
    {{ render }}
  </div>
</div>
", "modules/custom/cart_checkout/templates/cart-items-template.html.twig", "/var/www/mental/modules/custom/cart_checkout/templates/cart-items-template.html.twig");
    }
}
