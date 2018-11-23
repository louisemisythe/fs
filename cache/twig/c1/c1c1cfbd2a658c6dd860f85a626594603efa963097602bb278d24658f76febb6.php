<?php

/* modular/pricing.html.twig */
class __TwigTemplate_58117451d7921844b449c3cb24954eaa7620517bb581cccda941ff012081dfe3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<section id=\"pricing\">

  <div class=\"row section-head\">
    ";
        // line 5
        echo ($context["content"] ?? null);
        echo "
  </div>

  <div class=\"row\">
    <div class=\"pricing-tables bgrid-quarters s-bgrid-halves\">
      ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "columns", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 11
            echo "        <div class=\"column\">
          <div class=\"price-block\">
            <h3 class=\"plan-title\"><i class=\"fa fa-";
            // line 13
            echo $this->getAttribute($context["column"], "icon", array());
            echo "\"></i>";
            echo $this->getAttribute($context["column"], "title", array());
            echo "</h3>
            <p class=\"plan-price\">";
            // line 14
            echo $this->getAttribute($context["column"], "price1", array());
            echo " <span>";
            echo $this->getAttribute($context["column"], "price2", array());
            echo "</span></p>

            <ul class=\"features\">
              ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["column"], "features", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
                // line 18
                echo "               <li>";
                echo $this->getAttribute($context["feature"], "name", array());
                echo "</li>
             ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "            </ul>

            <footer class=\"plan-sign-up\">
              ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["column"], "buttons", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                // line 24
                echo "               <a class=\"button\" href=\"";
                echo $this->getAttribute($context["button"], "url", array());
                echo "\">";
                echo $this->getAttribute($context["button"], "text", array());
                echo "</a>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "            </footer>
       </div>
     </div>
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo " </div>

</div>

</section>
";
    }

    public function getTemplateName()
    {
        return "modular/pricing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 30,  88 => 26,  77 => 24,  73 => 23,  68 => 20,  59 => 18,  55 => 17,  47 => 14,  41 => 13,  37 => 11,  33 => 10,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<section id=\"pricing\">

  <div class=\"row section-head\">
    {{ content }}
  </div>

  <div class=\"row\">
    <div class=\"pricing-tables bgrid-quarters s-bgrid-halves\">
      {% for column in page.header.columns %}
        <div class=\"column\">
          <div class=\"price-block\">
            <h3 class=\"plan-title\"><i class=\"fa fa-{{ column.icon }}\"></i>{{ column.title }}</h3>
            <p class=\"plan-price\">{{ column.price1 }} <span>{{ column.price2 }}</span></p>

            <ul class=\"features\">
              {% for feature in column.features %}
               <li>{{ feature.name }}</li>
             {% endfor %}
            </ul>

            <footer class=\"plan-sign-up\">
              {% for button in column.buttons %}
               <a class=\"button\" href=\"{{ button.url }}\">{{ button.text }}</a>
              {% endfor %}
            </footer>
       </div>
     </div>
   {% endfor %}
 </div>

</div>

</section>
", "modular/pricing.html.twig", "/Volumes/Data/mywiki/htdocs/fs/user/themes/woo/templates/modular/pricing.html.twig");
    }
}
