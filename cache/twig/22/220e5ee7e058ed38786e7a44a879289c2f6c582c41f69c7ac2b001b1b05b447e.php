<?php

/* modular/features.html.twig */
class __TwigTemplate_ad8c872d8df92328d64c0dc2b05f14d906b735c5f92772972821973d7d78eb66 extends Twig_Template
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
        echo "<section id='features'>
  <div class=\"row section-head\">
      ";
        // line 3
        echo ($context["content"] ?? null);
        echo "
  </div>
  ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "rows", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 6
            echo "    <div class=\"row feature ";
            echo $this->getAttribute($context["row"], "name", array());
            echo "\">
      <div class=\"";
            // line 7
            if (($this->getAttribute($context["row"], "image", array()) || $this->getAttribute($context["row"], "video", array()))) {
                echo "six";
            } else {
                echo "twelve";
            }
            echo " columns ";
            echo $this->getAttribute($context["row"], "description_position", array());
            echo "\">
        <h3><i class=\"fa fa-";
            // line 8
            echo $this->getAttribute($context["row"], "icon", array());
            echo " fa-lg\"></i> ";
            echo $this->getAttribute($context["row"], "title", array());
            echo "</h3>
        <p>";
            // line 9
            echo $this->getAttribute($context["row"], "description", array());
            echo "</p>
        <footer class=\"features-sign-up\">
          ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["row"], "buttons", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                // line 12
                echo "           <a class=\"button\" href=\"";
                echo $this->getAttribute($context["button"], "url", array());
                echo "\">";
                echo $this->getAttribute($context["button"], "text", array());
                echo "</a>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        </footer>
      </div>
      <div class=\"";
            // line 16
            if (($this->getAttribute($context["row"], "image", array()) || $this->getAttribute($context["row"], "video", array()))) {
                echo "six";
            } else {
                echo "twelve";
            }
            echo " columns feature-media ";
            if (($this->getAttribute($context["row"], "description_position", array()) == "right")) {
                echo "left";
            } else {
                echo "right";
            }
            echo "\">
        ";
            // line 17
            if ($this->getAttribute($context["row"], "image", array())) {
                // line 18
                echo "          ";
                echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute($context["row"], "image", array()), array(), "array"), "html", array(), "method");
                echo "
        ";
            }
            // line 20
            echo "        ";
            if ($this->getAttribute($context["row"], "video", array())) {
                // line 21
                echo "          <div class=\"fluid-video-wrapper\">
            <iframe src=\"";
                // line 22
                echo $this->getAttribute($context["row"], "video", array());
                echo "?title=0&amp;byline=0&amp;portrait=0&amp;color=F64B39\" width=\"500\" height=\"281\" frameborder=\"0\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
          </div>
        ";
            }
            // line 25
            echo "      </div>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "</section>
";
    }

    public function getTemplateName()
    {
        return "modular/features.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 28,  111 => 25,  105 => 22,  102 => 21,  99 => 20,  93 => 18,  91 => 17,  77 => 16,  73 => 14,  62 => 12,  58 => 11,  53 => 9,  47 => 8,  37 => 7,  32 => 6,  28 => 5,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id='features'>
  <div class=\"row section-head\">
      {{ content }}
  </div>
  {% for row in page.header.rows %}
    <div class=\"row feature {{row.name}}\">
      <div class=\"{% if row.image or row.video %}six{% else %}twelve{% endif %} columns {{ row.description_position }}\">
        <h3><i class=\"fa fa-{{ row.icon }} fa-lg\"></i> {{ row.title }}</h3>
        <p>{{ row.description }}</p>
        <footer class=\"features-sign-up\">
          {% for button in row.buttons %}
           <a class=\"button\" href=\"{{ button.url }}\">{{ button.text }}</a>
          {% endfor %}
        </footer>
      </div>
      <div class=\"{% if row.image or row.video %}six{% else %}twelve{% endif %} columns feature-media {% if row.description_position == 'right' %}left{% else %}right{% endif %}\">
        {% if row.image %}
          {{ page.media[row.image].html() }}
        {% endif %}
        {% if row.video %}
          <div class=\"fluid-video-wrapper\">
            <iframe src=\"{{ row.video }}?title=0&amp;byline=0&amp;portrait=0&amp;color=F64B39\" width=\"500\" height=\"281\" frameborder=\"0\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
          </div>
        {% endif %}
      </div>
    </div>
  {% endfor %}
</section>
", "modular/features.html.twig", "/Volumes/Data/mywiki/htdocs/fs/user/themes/woo/templates/modular/features.html.twig");
    }
}
