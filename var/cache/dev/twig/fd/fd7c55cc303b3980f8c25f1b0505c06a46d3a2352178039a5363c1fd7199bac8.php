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

/* @EasyAdmin/default/field_country.html.twig */
class __TwigTemplate_e422a1ab9f489cfb98527eafb2e703e5c609d6c36aaaabb6bf80b58aa5e7f947 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_country.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_country.html.twig"));

        // line 1
        if (((((twig_get_attribute($this->env, $this->source, ($context["field_options"] ?? null), "with_flag", [], "any", true, true, false, 1) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["field_options"] ?? null), "with_flag", [], "any", false, false, false, 1)))) ? (twig_get_attribute($this->env, $this->source, ($context["field_options"] ?? null), "with_flag", [], "any", false, false, false, 1)) : (true)) &&  !(null === (isset($context["country_name"]) || array_key_exists("country_name", $context) ? $context["country_name"] : (function () { throw new RuntimeError('Variable "country_name" does not exist.', 1, $this->source); })())))) {
            // line 2
            echo "    <img class=\"country-flag\" alt=\"";
            echo twig_escape_filter($this->env, (isset($context["country_name"]) || array_key_exists("country_name", $context) ? $context["country_name"] : (function () { throw new RuntimeError('Variable "country_name" does not exist.', 2, $this->source); })()), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("bundles/easyadmin/images/flags/" . (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 2, $this->source); })())) . ".png")), "html", null, true);
            echo "\">
";
        }
        // line 4
        if ((((twig_get_attribute($this->env, $this->source, ($context["field_options"] ?? null), "with_name", [], "any", true, true, false, 4) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["field_options"] ?? null), "with_name", [], "any", false, false, false, 4)))) ? (twig_get_attribute($this->env, $this->source, ($context["field_options"] ?? null), "with_name", [], "any", false, false, false, 4)) : (true))) {
            // line 5
            echo "    ";
            ((((isset($context["country_name"]) || array_key_exists("country_name", $context)) &&  !(null === (isset($context["country_name"]) || array_key_exists("country_name", $context) ? $context["country_name"] : (function () { throw new RuntimeError('Variable "country_name" does not exist.', 5, $this->source); })())))) ? (print (twig_escape_filter($this->env, (isset($context["country_name"]) || array_key_exists("country_name", $context) ? $context["country_name"] : (function () { throw new RuntimeError('Variable "country_name" does not exist.', 5, $this->source); })()), "html", null, true))) : (print ("")));
            echo "
";
        }
        // line 7
        if ((null === (isset($context["country_name"]) || array_key_exists("country_name", $context) ? $context["country_name"] : (function () { throw new RuntimeError('Variable "country_name" does not exist.', 7, $this->source); })()))) {
            // line 8
            echo "    ";
            echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity_config"]) || array_key_exists("entity_config", $context) ? $context["entity_config"] : (function () { throw new RuntimeError('Variable "entity_config" does not exist.', 8, $this->source); })()), "templates", [], "any", false, false, false, 8), "label_null", [], "any", false, false, false, 8));
            echo "
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_country.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 8,  61 => 7,  55 => 5,  53 => 4,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if field_options.with_flag ?? true and country_name is not null %}
    <img class=\"country-flag\" alt=\"{{ country_name }}\" src=\"{{ asset('bundles/easyadmin/images/flags/' ~ value ~ '.png') }}\">
{% endif %}
{% if field_options.with_name ?? true %}
    {{ country_name ?? '' }}
{% endif %}
{% if country_name is null %}
    {{ include(entity_config.templates.label_null) }}
{% endif %}
", "@EasyAdmin/default/field_country.html.twig", "C:\\Users\\AYOUB\\Desktop\\projet_symfony_finale\\symfony_project_2\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\default\\field_country.html.twig");
    }
}
