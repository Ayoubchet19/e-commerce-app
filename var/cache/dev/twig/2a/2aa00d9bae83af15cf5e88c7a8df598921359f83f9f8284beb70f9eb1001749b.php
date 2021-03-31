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

/* @EasyAdmin/default/filters.html.twig */
class __TwigTemplate_c60b668545e4a1c5f1285295091570e53cc9fb8316cb6fc94cda43783b456f22 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/default/filters.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/default/filters.html.twig"));

        // line 1
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["filters_form"]) || array_key_exists("filters_form", $context) ? $context["filters_form"] : (function () { throw new RuntimeError('Variable "filters_form" does not exist.', 1, $this->source); })()), $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.form_theme"), false);
        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["filters_form"]) || array_key_exists("filters_form", $context) ? $context["filters_form"] : (function () { throw new RuntimeError('Variable "filters_form" does not exist.', 3, $this->source); })()), 'form_start', ["attr" => ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["filters_form"]) || array_key_exists("filters_form", $context) ? $context["filters_form"] : (function () { throw new RuntimeError('Variable "filters_form" does not exist.', 3, $this->source); })()), "vars", [], "any", false, false, false, 3), "id", [], "any", false, false, false, 3)]]);
        echo "
    ";
        // line 4
        $context["_entity_config"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getEntityConfiguration(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "request", [], "any", false, false, false, 4), "query", [], "any", false, false, false, 4), "get", [0 => "entity"], "method", false, false, false, 4));
        // line 5
        echo "
    <input type=\"hidden\" name=\"action\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["referer_action"]) || array_key_exists("referer_action", $context) ? $context["referer_action"] : (function () { throw new RuntimeError('Variable "referer_action" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"entity\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"menuIndex\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "request", [], "any", false, false, false, 8), "get", [0 => "menuIndex"], "method", false, false, false, 8), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"submenuIndex\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "request", [], "any", false, false, false, 9), "get", [0 => "submenuIndex"], "method", false, false, false, 9), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"sortField\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "request", [], "any", false, false, false, 10), "get", [0 => "sortField", 1 => ""], "method", false, false, false, 10), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"sortDirection\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "request", [], "any", false, false, false, 11), "get", [0 => "sortDirection", 1 => "DESC"], "method", false, false, false, 11), "html", null, true);
        echo "\">

    ";
        // line 13
        if (0 === twig_compare("search", (isset($context["referer_action"]) || array_key_exists("referer_action", $context) ? $context["referer_action"] : (function () { throw new RuntimeError('Variable "referer_action" does not exist.', 13, $this->source); })()))) {
            // line 14
            echo "    <input type=\"hidden\" name=\"query\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "request", [], "any", false, false, false, 14), "get", [0 => "query"], "method", false, false, false, 14), "html", null, true);
            echo "\">
    ";
        }
        // line 16
        echo "
    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["filters_form"]) || array_key_exists("filters_form", $context) ? $context["filters_form"] : (function () { throw new RuntimeError('Variable "filters_form" does not exist.', 17, $this->source); })()), 'widget');
        echo "
";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["filters_form"]) || array_key_exists("filters_form", $context) ? $context["filters_form"] : (function () { throw new RuntimeError('Variable "filters_form" does not exist.', 18, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/filters.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 18,  93 => 17,  90 => 16,  84 => 14,  82 => 13,  77 => 11,  73 => 10,  69 => 9,  65 => 8,  61 => 7,  57 => 6,  54 => 5,  52 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% form_theme filters_form with easyadmin_config('design.form_theme') only %}

{{ form_start(filters_form, { attr: {'id': filters_form.vars.id} }) }}
    {% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}

    <input type=\"hidden\" name=\"action\" value=\"{{ referer_action }}\">
    <input type=\"hidden\" name=\"entity\" value=\"{{ _entity_config.name }}\">
    <input type=\"hidden\" name=\"menuIndex\" value=\"{{ app.request.get('menuIndex') }}\">
    <input type=\"hidden\" name=\"submenuIndex\" value=\"{{ app.request.get('submenuIndex') }}\">
    <input type=\"hidden\" name=\"sortField\" value=\"{{ app.request.get('sortField', '') }}\">
    <input type=\"hidden\" name=\"sortDirection\" value=\"{{ app.request.get('sortDirection', 'DESC') }}\">

    {% if 'search' == referer_action %}
    <input type=\"hidden\" name=\"query\" value=\"{{ app.request.get('query') }}\">
    {% endif %}

    {{ form_widget(filters_form) }}
{{ form_end(filters_form) }}
", "@EasyAdmin/default/filters.html.twig", "C:\\Users\\AYOUB\\Desktop\\projet_symfony_finale\\symfony_project_2\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\default\\filters.html.twig");
    }
}
