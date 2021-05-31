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

/* @EasyAdmin/crud/includes/_select2_widget.html.twig */
class __TwigTemplate_9117ae838a8e040554723a50fbe05ca57fed3a88a1190d7cc01cc5ca56516975 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/includes/_select2_widget.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/includes/_select2_widget.html.twig"));

        // line 2
        $context["ea_select2_locales"] = [0 => "af", 1 => "ar", 2 => "az", 3 => "bg", 4 => "bn", 5 => "bs", 6 => "ca", 7 => "cs", 8 => "da", 9 => "de", 10 => "dsb", 11 => "el", 12 => "en", 13 => "es", 14 => "et", 15 => "eu", 16 => "fa", 17 => "fi", 18 => "fr", 19 => "gl", 20 => "he", 21 => "hi", 22 => "hr", 23 => "hsb", 24 => "hu", 25 => "hy", 26 => "id", 27 => "is", 28 => "it", 29 => "ja", 30 => "ka", 31 => "km", 32 => "ko", 33 => "lt", 34 => "lv", 35 => "mk", 36 => "ms", 37 => "nb", 38 => "ne", 39 => "nl", 40 => "pl", 41 => "ps", 42 => "pt", 43 => "pt-BR", 44 => "ro", 45 => "ru", 46 => "sk", 47 => "sl", 48 => "sq", 49 => "sr", 50 => "sr-Cyrl", 51 => "sv", 52 => "th", 53 => "tk", 54 => "tr", 55 => "uk", 56 => "vi", 57 => "zh-CN", 58 => "zh-TW"];
        // line 3
        echo "
";
        // line 4
        $context["ea_select2_locale"] = ((twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 4, $this->source); })()), "i18n", [], "any", false, false, false, 4), "htmlLocale", [], "any", false, false, false, 4), (isset($context["ea_select2_locales"]) || array_key_exists("ea_select2_locales", $context) ? $context["ea_select2_locales"] : (function () { throw new RuntimeError('Variable "ea_select2_locales" does not exist.', 4, $this->source); })()))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 5
(isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 5, $this->source); })()), "i18n", [], "any", false, false, false, 5), "htmlLocale", [], "any", false, false, false, 5)) : (((twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 6
(isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 6, $this->source); })()), "i18n", [], "any", false, false, false, 6), "language", [], "any", false, false, false, 6), (isset($context["ea_select2_locales"]) || array_key_exists("ea_select2_locales", $context) ? $context["ea_select2_locales"] : (function () { throw new RuntimeError('Variable "ea_select2_locales" does not exist.', 6, $this->source); })()))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 6, $this->source); })()), "i18n", [], "any", false, false, false, 6), "language", [], "any", false, false, false, 6)) : ("en"))));
        // line 8
        echo "
";
        // line 9
        if ((0 !== twig_compare((isset($context["ea_select2_locale"]) || array_key_exists("ea_select2_locale", $context) ? $context["ea_select2_locale"] : (function () { throw new RuntimeError('Variable "ea_select2_locale" does not exist.', 9, $this->source); })()), "en"))) {
            // line 10
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("bundles/easyadmin/select2/i18n/" . (isset($context["ea_select2_locale"]) || array_key_exists("ea_select2_locale", $context) ? $context["ea_select2_locale"] : (function () { throw new RuntimeError('Variable "ea_select2_locale" does not exist.', 10, $this->source); })())) . ".js")), "html", null, true);
            echo "\"></script>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/crud/includes/_select2_widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 10,  55 => 9,  52 => 8,  50 => 6,  49 => 5,  48 => 4,  45 => 3,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{% set ea_select2_locales = ['af', 'ar', 'az', 'bg', 'bn', 'bs', 'ca', 'cs', 'da', 'de', 'dsb', 'el', 'en', 'es', 'et', 'eu', 'fa', 'fi', 'fr', 'gl', 'he', 'hi', 'hr', 'hsb', 'hu', 'hy', 'id', 'is', 'it', 'ja', 'ka', 'km', 'ko', 'lt', 'lv', 'mk', 'ms', 'nb', 'ne', 'nl', 'pl', 'ps', 'pt', 'pt-BR', 'ro', 'ru', 'sk', 'sl', 'sq', 'sr', 'sr-Cyrl', 'sv', 'th', 'tk', 'tr', 'uk', 'vi', 'zh-CN', 'zh-TW'] %}

{% set ea_select2_locale = ea.i18n.htmlLocale in ea_select2_locales
    ? ea.i18n.htmlLocale
    : ea.i18n.language in ea_select2_locales ? ea.i18n.language : 'en'
%}

{% if ea_select2_locale != 'en' %}
    <script src=\"{{ asset('bundles/easyadmin/select2/i18n/' ~ ea_select2_locale ~ '.js') }}\"></script>
{% endif %}
", "@EasyAdmin/crud/includes/_select2_widget.html.twig", "C:\\Users\\MARYEM\\React\\Projet_Portail\\pet-adoption\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\crud\\includes\\_select2_widget.html.twig");
    }
}
