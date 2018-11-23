<?php

/* partials/footer.html.twig */
class __TwigTemplate_6348ca4d5483a0321a50e0ab0e1e8945083aca6f3074d2a7a6093e9b116f768c extends Twig_Template
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
        echo "<footer>
    <div class=\"row\">
        <div class=\"six columns info\">
            <div class=\"footer-logo\">
                <a href=\"";
        // line 5
        echo ($context["base_url_absolute"] ?? null);
        echo "\">
                    <img src=\"";
        // line 6
        echo ($context["theme_url"] ?? null);
        echo "/images/footer-logo.png\" alt=\"\" />
                </a>
            </div>
            <p>
                ";
        // line 10
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "footer", array()), "text", array());
        echo "
            </p>
        </div>
        <div class=\"six columns right-cols\">
            <div class=\"row\">
                <div class=\"columns\">
                    <h3 class=\"address\">";
        // line 16
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["site"] ?? null), "footer", array()), "address", array()), "title", array());
        echo "</h3>
                    <p>
                        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["site"] ?? null), "footer", array()), "address", array()), "lines", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 19
            echo "                           ";
            echo $this->getAttribute($context["item"], "line", array());
            echo " <br>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "                    </p>
                </div>
                <div class=\"columns\">
                    <h3 class=\"social\">";
        // line 24
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "footer", array()), "social_title", array());
        echo "</h3>
                    <ul>
                        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "social", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 27
            echo "                            <li><a href=\"";
            echo $this->getAttribute($context["item"], "url", array());
            echo "\">";
            echo twig_capitalize_string_filter($this->env, $this->getAttribute($context["item"], "icon", array()));
            echo "</a></li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                    </ul>
                </div>
                <div class=\"columns last\">
                    <h3 class=\"contact\">";
        // line 32
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["site"] ?? null), "footer", array()), "contact", array()), "title", array());
        echo "</h3>
                    <ul>
                        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["site"] ?? null), "footer", array()), "contact", array()), "lines", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 35
            echo "                            <li><a href=\"";
            echo $this->getAttribute($context["item"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["item"], "text", array());
            echo "</a></li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                    </ul>
                </div>
            </div>
        </div>
        <p class=\"copyright\">&copy; 2018 aiming-inc.com.ph</p>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css\" />
        <script src=\"//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js\"></script>
        <script>
        window.addEventListener(\"load\", function(){
        window.cookieconsent.initialise({
          \"palette\": {
            \"popup\": {
              \"background\": \"#000\"
            },
            \"button\": {
              \"background\": \"#f1d600\"
            }
          },
          \"showLink\": false,
          \"theme\": \"edgeless\",
          \"content\": {
            \"message\": \"We use cookies to ensure that we give you the best experience on our website. We will assume that you agree for us to do this. However, you can change your settings at any time according with your browser.\"
          }
        })});
        </script>

        <div id=\"go-top\">
              <a class=\"go-top\" title=\"Back to Top\" href=\"#\"><i class=\"icon-up-open\"></i></a>
  \t    </div>
    </div>

</footer>
";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 37,  102 => 35,  98 => 34,  93 => 32,  88 => 29,  77 => 27,  73 => 26,  68 => 24,  63 => 21,  54 => 19,  50 => 18,  45 => 16,  36 => 10,  29 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<footer>
    <div class=\"row\">
        <div class=\"six columns info\">
            <div class=\"footer-logo\">
                <a href=\"{{ base_url_absolute }}\">
                    <img src=\"{{ theme_url }}/images/footer-logo.png\" alt=\"\" />
                </a>
            </div>
            <p>
                {{ site.footer.text }}
            </p>
        </div>
        <div class=\"six columns right-cols\">
            <div class=\"row\">
                <div class=\"columns\">
                    <h3 class=\"address\">{{ site.footer.address.title }}</h3>
                    <p>
                        {% for item in site.footer.address.lines %}
                           {{ item.line }} <br>
                        {% endfor %}
                    </p>
                </div>
                <div class=\"columns\">
                    <h3 class=\"social\">{{ site.footer.social_title }}</h3>
                    <ul>
                        {% for item in site.social %}
                            <li><a href=\"{{ item.url }}\">{{ item.icon|capitalize }}</a></li>
                        {% endfor %}
                    </ul>
                </div>
                <div class=\"columns last\">
                    <h3 class=\"contact\">{{ site.footer.contact.title }}</h3>
                    <ul>
                        {% for item in site.footer.contact.lines %}
                            <li><a href=\"{{ item.url }}\">{{ item.text }}</a></li>
                        {% endfor %}
                    </ul>
                </div>
            </div>
        </div>
        <p class=\"copyright\">&copy; 2018 aiming-inc.com.ph</p>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css\" />
        <script src=\"//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js\"></script>
        <script>
        window.addEventListener(\"load\", function(){
        window.cookieconsent.initialise({
          \"palette\": {
            \"popup\": {
              \"background\": \"#000\"
            },
            \"button\": {
              \"background\": \"#f1d600\"
            }
          },
          \"showLink\": false,
          \"theme\": \"edgeless\",
          \"content\": {
            \"message\": \"We use cookies to ensure that we give you the best experience on our website. We will assume that you agree for us to do this. However, you can change your settings at any time according with your browser.\"
          }
        })});
        </script>

        <div id=\"go-top\">
              <a class=\"go-top\" title=\"Back to Top\" href=\"#\"><i class=\"icon-up-open\"></i></a>
  \t    </div>
    </div>

</footer>
", "partials/footer.html.twig", "/Volumes/Data/mywiki/htdocs/fs/user/themes/woo/templates/partials/footer.html.twig");
    }
}
