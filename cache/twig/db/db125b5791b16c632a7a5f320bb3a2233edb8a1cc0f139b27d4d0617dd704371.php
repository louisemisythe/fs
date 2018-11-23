<?php

/* partials/nav-up.html.twig */
class __TwigTemplate_1c15fcd1ac4a3a292fa5863c9c831f470821c0a3b318444702304adc8b9ef400 extends Twig_Template
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
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", array()), "route", array())) {
            // line 2
            echo "    ";
            $context["parent_url"] = ((($context["base_url"] ?? null) . "/pages") . $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", array()), "route", array()));
            // line 3
            echo "    <a class=\"button hidden-mobile\" href=\"";
            echo twig_escape_filter($this->env, ($context["parent_url"] ?? null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.UP"), "html", null, true);
            echo "\"><i
                class=\"fa fa-chevron-up\"></i></a>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/nav-up.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if page.parent.route %}
    {% set parent_url = base_url ~ '/pages' ~ page.parent.route %}
    <a class=\"button hidden-mobile\" href=\"{{ parent_url }}\" title=\"{{ \"PLUGIN_ADMIN.UP\"|tu }}\"><i
                class=\"fa fa-chevron-up\"></i></a>
{% endif %}
", "partials/nav-up.html.twig", "/Volumes/Data/mywiki/htdocs/fs/user/plugins/admin-power-tools/admin/templates/partials/nav-up.html.twig");
    }
}
