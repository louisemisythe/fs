<?php

/* forms/fields/section/section.html.twig */
class __TwigTemplate_f96a8c0f4644381970625bd9261eddae5cd635a9c78fd8301f328b9fec726acf extends Twig_Template
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
        if ((twig_test_empty($this->getAttribute(($context["field"] ?? null), "security", array())) || $this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize($this->env->getExtension('Grav\Common\Twig\TwigExtension')->arrayFilter($this->getAttribute(($context["field"] ?? null), "security", array()))))) {
            // line 2
            echo "    ";
            $context["tag"] = (($this->getAttribute(($context["field"] ?? null), "tag", array())) ? ($this->getAttribute(($context["field"] ?? null), "tag", array())) : ("p"));
            // line 3
            echo "    ";
            $context["style"] = (($this->getAttribute(($context["field"] ?? null), "style", array())) ? ($this->getAttribute(($context["field"] ?? null), "style", array())) : (null));
            // line 4
            echo "    ";
            if (($this->getAttribute(($context["field"] ?? null), "title", array()) || $this->getAttribute(($context["field"] ?? null), "underline", array()))) {
                // line 5
                echo "    <h1 ";
                if ( !$this->getAttribute(($context["field"] ?? null), "underline", array())) {
                    echo "class=\"no_underline\"";
                }
                echo ">";
                if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", array(), "any", false, true), "twig", array(), "any", false, true), "filters", array(), "any", false, true), "tu", array(), "array", true, true)) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "title", array())), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute(($context["field"] ?? null), "title", array())), "html", null, true);
                }
                echo "</h1>
    ";
            }
            // line 7
            echo "
    ";
            // line 8
            if ($this->getAttribute(($context["field"] ?? null), "text", array())) {
                // line 9
                echo "    <";
                echo twig_escape_filter($this->env, ($context["tag"] ?? null), "html", null, true);
                echo "  ";
                if (($context["style"] ?? null)) {
                    echo " style=\"";
                    echo twig_escape_filter($this->env, ($context["style"] ?? null), "html", null, true);
                    echo "\" ";
                }
                echo ">";
                if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", array(), "any", false, true), "twig", array(), "any", false, true), "filters", array(), "any", false, true), "tu", array(), "array", true, true)) {
                    echo $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "text", array()));
                } else {
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute(($context["field"] ?? null), "text", array()));
                }
                echo "</>
    ";
            }
            // line 11
            echo "
    ";
            // line 12
            if ($this->getAttribute(($context["field"] ?? null), "fields", array())) {
                // line 13
                echo "        <div class=\"form-section ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "field_classes", array()), "html", null, true);
                echo "\">
        ";
                // line 14
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["field"], "fields", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 15
                    echo "            ";
                    if ($this->getAttribute($context["field"], "type", array())) {
                        // line 16
                        echo "                ";
                        $context["value"] = (($this->getAttribute($context["field"], "name", array())) ? ($this->getAttribute(($context["data"] ?? null), "value", array(0 => $this->getAttribute($context["field"], "name", array())), "method")) : ($this->getAttribute(($context["data"] ?? null), "toArray", array())));
                        // line 17
                        echo "                ";
                        $this->loadTemplate(array(0 => (((("forms/fields/" . $this->getAttribute($context["field"], "type", array())) . "/") . $this->getAttribute($context["field"], "type", array())) . ".html.twig"), 1 => "forms/fields/text/text.html.twig"), "forms/fields/section/section.html.twig", 17)->display($context);
                        // line 18
                        echo "            ";
                    }
                    // line 19
                    echo "        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 20
                echo "        </div>
    ";
            }
            // line 22
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "forms/fields/section/section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 22,  120 => 20,  106 => 19,  103 => 18,  100 => 17,  97 => 16,  94 => 15,  77 => 14,  72 => 13,  70 => 12,  67 => 11,  49 => 9,  47 => 8,  44 => 7,  30 => 5,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if field.security is empty or authorize(array(field.security)) %}
    {% set tag = field.tag ?: 'p' %}
    {% set style = field.style ?: null %}
    {% if field.title or field.underline %}
    <h1 {% if not field.underline %}class=\"no_underline\"{% endif %}>{% if grav.twig.twig.filters['tu'] is defined %}{{ field.title|tu }}{% else %}{{ field.title|t }}{% endif %}</h1>
    {% endif %}

    {% if field.text %}
    <{{ tag }}  {% if style %} style=\"{{ style }}\" {% endif %}>{% if grav.twig.twig.filters['tu'] is defined %}{{ field.text|tu|raw }}{% else %}{{ field.text|t|raw }}{% endif %}</>
    {% endif %}

    {% if field.fields %}
        <div class=\"form-section {{ field.field_classes }}\">
        {% for field in field.fields %}
            {% if field.type %}
                {% set value = field.name ? data.value(field.name) : data.toArray %}
                {% include [\"forms/fields/#{field.type}/#{field.type}.html.twig\", 'forms/fields/text/text.html.twig'] %}
            {% endif %}
        {% endfor %}
        </div>
    {% endif %}

{% endif %}
", "forms/fields/section/section.html.twig", "/Volumes/Data/mywiki/htdocs/fs/user/plugins/admin-power-tools/admin/templates/forms/fields/section/section.html.twig");
    }
}
