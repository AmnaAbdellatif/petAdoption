<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @EasyAdmin/flash_messages.html.twig */
class __TwigTemplate_eda7d2af4be652934d6ebc5552160647619d9d6b04bdec8ff921d5a8ae843942 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/flash_messages.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/flash_messages.html.twig"));

        // line 1
        if (( !(null === twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "session", [], "any", false, false, false, 1)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "session", [], "any", false, false, false, 1), "started", [], "any", false, false, false, 1))) {
            // line 2
            echo "    ";
            $context["flash_messages"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "session", [], "any", false, false, false, 2), "flashbag", [], "any", false, false, false, 2), "all", [], "any", false, false, false, 2);
            // line 3
            echo "
    ";
            // line 4
            if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["flash_messages"]) || array_key_exists("flash_messages", $context) ? $context["flash_messages"] : (function () { throw new RuntimeError('Variable "flash_messages" does not exist.', 4, $this->source); })())), 0))) {
                // line 5
                echo "        <div id=\"flash-messages\">
            ";
                // line 6
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["flash_messages"]) || array_key_exists("flash_messages", $context) ? $context["flash_messages"] : (function () { throw new RuntimeError('Variable "flash_messages" does not exist.', 6, $this->source); })()));
                foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
                    // line 7
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["messages"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                        // line 8
                        echo "                    <div class=\"alert alert-";
                        echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                        echo "\">
                        <button type=\"button\" class=\"alert-close\" onclick=\"this.closest('div').style.display='none'\">&times;</button>

                        ";
                        // line 11
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"]);
                        echo "
                    </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 14
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 15
                echo "        </div>
    ";
            }
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/flash_messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 15,  81 => 14,  72 => 11,  65 => 8,  60 => 7,  56 => 6,  53 => 5,  51 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if app.session is not null and app.session.started %}
    {% set flash_messages = app.session.flashbag.all %}

    {% if flash_messages|length > 0 %}
        <div id=\"flash-messages\">
            {% for label, messages in flash_messages %}
                {% for message in messages %}
                    <div class=\"alert alert-{{ label }}\">
                        <button type=\"button\" class=\"alert-close\" onclick=\"this.closest('div').style.display='none'\">&times;</button>

                        {{ message|trans|raw }}
                    </div>
                {% endfor %}
            {% endfor %}
        </div>
    {% endif %}
{% endif %}
", "@EasyAdmin/flash_messages.html.twig", "C:\\Users\\HP\\Desktop\\HouseRenting\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\flash_messages.html.twig");
    }
}
