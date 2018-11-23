<?php

/* modular/showcase.html.twig */
class __TwigTemplate_dd851d7b3320083ad948474a3a47df941c220d4c3b4f3a388ac5ddb5eb5cf955 extends Twig_Template
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
        echo "<section id=\"hero\">
 <div class=\"row\">
   <div class=\"twelve columns\">

     <div class=\"hero-text\">
      <h1 class=\"responsive-headline\">";
        // line 6
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "title", array());
        echo "</h1>
      ";
        // line 7
        echo ($context["content"] ?? null);
        echo "
    </div>

    ";
        // line 10
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "buttons", array())) {
            // line 11
            echo "     <div class=\"buttons\">
       ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "buttons", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                // line 13
                echo "         <a class=\"";
                echo $this->getAttribute($context["button"], "class", array());
                echo "\" href=\"";
                echo $this->getAttribute($context["button"], "url", array());
                echo "\">";
                echo $this->getAttribute($context["button"], "text", array());
                echo "</a>
       ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "     </div>
   ";
        }
        // line 17
        echo "   <div class=\"hero-image\">
    ";
        // line 18
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "showcase_image", array()), array(), "array"), "html", array(), "method");
        echo "
   </div>

</div>
</div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/showcase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 18,  62 => 17,  58 => 15,  45 => 13,  41 => 12,  38 => 11,  36 => 10,  30 => 7,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"hero\">
 <div class=\"row\">
   <div class=\"twelve columns\">

     <div class=\"hero-text\">
      <h1 class=\"responsive-headline\">{{ page.header.title }}</h1>
      {{ content }}
    </div>

    {% if page.header.buttons %}
     <div class=\"buttons\">
       {% for button in page.header.buttons %}
         <a class=\"{{ button.class }}\" href=\"{{ button.url }}\">{{ button.text }}</a>
       {% endfor %}
     </div>
   {% endif %}
   <div class=\"hero-image\">
    {{ page.media[page.header.showcase_image].html() }}
   </div>

</div>
</div>
</section>
", "modular/showcase.html.twig", "/Volumes/Data/mywiki/htdocs/fs/user/themes/woo/templates/modular/showcase.html.twig");
    }
}
