<?php

/* forms/default/data.txt.twig */
class __TwigTemplate_d04c0972ab54dc26aff2b5cf155ebd83487b3d7e24d0e50b0e07758fc0fcacff extends Twig_Template
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
        // line 16
        echo ($this->getAttribute($this, "render_field", array(0 => ($context["form"] ?? null), 1 => $this->getAttribute(($context["form"] ?? null), "fields", array()), 2 => ""), "method") . "
");
    }

    // line 1
    public function getrender_field($__form__ = null, $__fields__ = null, $__scope__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "fields" => $__fields__,
            "scope" => $__scope__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
            foreach ($context['_seq'] as $context["index"] => $context["field"]) {
                // line 3
                $context["input"] = $this->getAttribute($context["field"], "input@");
                // line 4
                if (((null === ($context["input"] ?? null)) || (($context["input"] ?? null) == true))) {
                    // line 5
                    $context["value"] = $this->getAttribute(($context["form"] ?? null), "value", array(0 => (($context["scope"] ?? null) . ((($this->getAttribute($context["field"], "name", array(), "any", true, true) &&  !(null === $this->getAttribute($context["field"], "name", array())))) ? ($this->getAttribute($context["field"], "name", array())) : ($context["index"])))), "method");
                    // line 6
                    echo (($context["scope"] ?? null) . ((($this->getAttribute($context["field"], "name", array(), "any", true, true) &&  !(null === $this->getAttribute($context["field"], "name", array())))) ? ($this->getAttribute($context["field"], "name", array())) : ($context["index"])));
                    echo ": ";
                    echo ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->stringFunc(((twig_test_iterable(($context["value"] ?? null))) ? (twig_jsonencode_filter(($context["value"] ?? null))) : (twig_escape_filter($this->env, ($context["value"] ?? null), "yaml")))) . "
");
                } else {
                    // line 8
                    if ($this->getAttribute($context["field"], "fields", array())) {
                        // line 9
                        $context["new_scope"] = (($this->getAttribute($context["field"], "nest_id", array())) ? (((($context["scope"] ?? null) . $this->getAttribute($context["field"], "name", array())) . ".")) : (($context["scope"] ?? null)));
                        // line 10
                        echo $this->getAttribute($this, "render_field", array(0 => ($context["form"] ?? null), 1 => $this->getAttribute($context["field"], "fields", array()), 2 => ($context["new_scope"] ?? null)), "method");
                    }
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['index'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "forms/default/data.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 10,  56 => 9,  54 => 8,  48 => 6,  46 => 5,  44 => 4,  42 => 3,  38 => 2,  24 => 1,  19 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%- macro render_field(form, fields, scope) %}
{%- for index, field in fields %}
    {%- set input = attribute(field, \"input@\") %}
        {%- if input is null or input == true %}
        {%- set value = form.value(scope ~ (field.name ?? index)) %}
        {{- scope ~ (field.name ?? index) }}: {{ string(value is iterable ? value|json_encode : value|escape('yaml')) ~ \"\\r\\n\" }}
    {%- else %}
        {%- if field.fields %}
        {%- set new_scope = field.nest_id ? scope ~ field.name ~ '.' : scope -%}
        {{- _self.render_field(form, field.fields, new_scope) }}
        {%- endif %}
    {%- endif %}
{%- endfor %}
{%- endmacro %}
{%- autoescape false %}
{{- _self.render_field(form, form.fields, '') ~ \"\\r\\n\" }}
{%- endautoescape %}", "forms/default/data.txt.twig", "/Volumes/Data/mywiki/htdocs/fs/user/plugins/form/templates/forms/default/data.txt.twig");
    }
}
