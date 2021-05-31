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

/* @EasyAdmin/crud/paginator.html.twig */
class __TwigTemplate_27b07315231d78d2afe8277677469197dbd08e4c6f788dd0acfd98229ed4b229 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/paginator.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/paginator.html.twig"));

        // line 4
        echo "
<div class=\"list-pagination\">
    <div class=\"list-pagination-counter\">
        ";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.results", ["%count%" => twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 7, $this->source); })()), "numResults", [], "any", false, false, false, 7)], "EasyAdminBundle");
        echo "
    </div>

    <nav class=\"pager list-pagination-paginator ";
        // line 10
        echo (( !twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 10, $this->source); })()), "hasPreviousPage", [], "any", false, false, false, 10)) ? ("first-page") : (""));
        echo " ";
        echo (( !twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 10, $this->source); })()), "hasNextPage", [], "any", false, false, false, 10)) ? ("last-page") : (""));
        echo "\">
        <ul class=\"pagination\">
            <li class=\"page-item ";
        // line 12
        echo (( !twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 12, $this->source); })()), "hasPreviousPage", [], "any", false, false, false, 12)) ? ("disabled") : (""));
        echo "\">
                <a class=\"page-link\" href=\"";
        // line 13
        (( !twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 13, $this->source); })()), "hasPreviousPage", [], "any", false, false, false, 13)) ? (print ("#")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 13, $this->source); })()), "generateUrlForPage", [0 => twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 13, $this->source); })()), "previousPage", [], "any", false, false, false, 13)], "method", false, false, false, 13), "html", null, true))));
        echo "\">
                    <i class=\"fa fa-angle-left mx-1\"></i> <span class=\"btn-label\">";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.previous", [], "EasyAdminBundle"), "html", null, true);
        echo "</span>
                </a>
            </li>

            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 18, $this->source); })()), "pageRange", [], "any", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 19
            echo "                <li class=\"page-item ";
            echo (((0 === twig_compare($context["page"], twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 19, $this->source); })()), "currentPage", [], "any", false, false, false, 19)))) ? ("active") : (""));
            echo " ";
            echo (((null === $context["page"])) ? ("disabled") : (""));
            echo "\">
                    ";
            // line 20
            if ((null === $context["page"])) {
                // line 21
                echo "                        <span class=\"page-link\">&hellip;</span>
                    ";
            } else {
                // line 23
                echo "                        <a class=\"page-link\" href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 23, $this->source); })()), "generateUrlForPage", [0 => $context["page"]], "method", false, false, false, 23), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
                    ";
            }
            // line 25
            echo "                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "
            <li class=\"page-item ";
        // line 28
        echo (( !twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 28, $this->source); })()), "hasNextPage", [], "any", false, false, false, 28)) ? ("disabled") : (""));
        echo "\">
                <a class=\"page-link\" href=\"";
        // line 29
        (( !twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 29, $this->source); })()), "hasNextPage", [], "any", false, false, false, 29)) ? (print ("#")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 29, $this->source); })()), "generateUrlForPage", [0 => twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 29, $this->source); })()), "nextPage", [], "any", false, false, false, 29)], "method", false, false, false, 29), "html", null, true))));
        echo "\">
                    <span class=\"btn-label\">";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.next", [], "EasyAdminBundle"), "html", null, true);
        echo "</span> <i class=\"fa fa-angle-right mx-1\"></i>
                </a>
            </li>
        </ul>
    </nav>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/crud/paginator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 30,  115 => 29,  111 => 28,  108 => 27,  101 => 25,  93 => 23,  89 => 21,  87 => 20,  80 => 19,  76 => 18,  69 => 14,  65 => 13,  61 => 12,  54 => 10,  48 => 7,  43 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{# @var paginator \\EasyCorp\\Bundle\\EasyAdminBundle\\Orm\\EntityPaginator #}
{% trans_default_domain 'EasyAdminBundle' %}

<div class=\"list-pagination\">
    <div class=\"list-pagination-counter\">
        {{ 'paginator.results'|trans({'%count%': paginator.numResults})|raw }}
    </div>

    <nav class=\"pager list-pagination-paginator {{ not paginator.hasPreviousPage ? 'first-page' }} {{ not paginator.hasNextPage ? 'last-page' }}\">
        <ul class=\"pagination\">
            <li class=\"page-item {{ not paginator.hasPreviousPage ? 'disabled' }}\">
                <a class=\"page-link\" href=\"{{ not paginator.hasPreviousPage ? '#' : paginator.generateUrlForPage(paginator.previousPage) }}\">
                    <i class=\"fa fa-angle-left mx-1\"></i> <span class=\"btn-label\">{{ 'paginator.previous'|trans }}</span>
                </a>
            </li>

            {% for page in paginator.pageRange %}
                <li class=\"page-item {{ page == paginator.currentPage ? 'active' }} {{ page is null ? 'disabled' }}\">
                    {% if page is null %}
                        <span class=\"page-link\">&hellip;</span>
                    {% else %}
                        <a class=\"page-link\" href=\"{{ paginator.generateUrlForPage(page) }}\">{{ page }}</a>
                    {% endif %}
                </li>
            {% endfor %}

            <li class=\"page-item {{ not paginator.hasNextPage ? 'disabled' }}\">
                <a class=\"page-link\" href=\"{{ not paginator.hasNextPage ? '#' : paginator.generateUrlForPage(paginator.nextPage) }}\">
                    <span class=\"btn-label\">{{ 'paginator.next'|trans }}</span> <i class=\"fa fa-angle-right mx-1\"></i>
                </a>
            </li>
        </ul>
    </nav>
</div>
", "@EasyAdmin/crud/paginator.html.twig", "C:\\Users\\HP\\Desktop\\HouseRenting\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\crud\\paginator.html.twig");
    }
}
