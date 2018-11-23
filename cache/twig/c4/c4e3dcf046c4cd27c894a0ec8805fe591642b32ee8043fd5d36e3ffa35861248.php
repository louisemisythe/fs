<?php

/* modular/contact.html.twig */
class __TwigTemplate_6232c4ed1697c5db74d868c4ed4bee6ba3551c0efc280e5cf395a21d7de3f91a extends Twig_Template
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
<section id=\"contact\">
  <div class=\"row section-head\">
      ";
        // line 4
        echo ($context["content"] ?? null);
        echo "
  </div>
  <div class=\"row contact\">
        ";
        // line 7
        $this->loadTemplate("forms/form.html.twig", "modular/contact.html.twig", 7)->display(array_merge($context, array("form" => call_user_func_array($this->env->getFunction('forms')->getCallable(), array("contact")))));
        // line 8
        echo "  </div>

</section>
";
    }

    public function getTemplateName()
    {
        return "modular/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 8,  30 => 7,  24 => 4,  19 => 1,);
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
<section id=\"contact\">
  <div class=\"row section-head\">
      {{ content }}
  </div>
  <div class=\"row contact\">
        {% include \"forms/form.html.twig\" with {'form': forms('contact')} %}
  </div>

</section>
", "modular/contact.html.twig", "/Volumes/Data/mywiki/htdocs/fs/user/themes/woo/templates/modular/contact.html.twig");
    }
}
