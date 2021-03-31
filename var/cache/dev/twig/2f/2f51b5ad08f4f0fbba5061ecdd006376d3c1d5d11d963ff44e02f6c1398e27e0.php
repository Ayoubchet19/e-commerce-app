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

/* @EasyAdmin/default/field_avatar.html.twig */
class __TwigTemplate_ab1e6fb799c98682a865d7b7e9c4eb7e70f5895569789140854e72ffe5d3ac38 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_avatar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_avatar.html.twig"));

        // line 1
        if ((null === (isset($context["image_url"]) || array_key_exists("image_url", $context) ? $context["image_url"] : (function () { throw new RuntimeError('Variable "image_url" does not exist.', 1, $this->source); })()))) {
            // line 2
            echo "    ";
            echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity_config"]) || array_key_exists("entity_config", $context) ? $context["entity_config"] : (function () { throw new RuntimeError('Variable "entity_config" does not exist.', 2, $this->source); })()), "templates", [], "any", false, false, false, 2), "label_null", [], "any", false, false, false, 2));
            echo "
";
        } else {
            // line 4
            echo "    <img class=\"image-avatar\" height=\"";
            echo twig_escape_filter($this->env, (isset($context["image_height"]) || array_key_exists("image_height", $context) ? $context["image_height"] : (function () { throw new RuntimeError('Variable "image_height" does not exist.', 4, $this->source); })()), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["image_url"]) || array_key_exists("image_url", $context) ? $context["image_url"] : (function () { throw new RuntimeError('Variable "image_url" does not exist.', 4, $this->source); })()), "html", null, true);
            echo "\">
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_avatar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 4,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if image_url is null %}
    {{ include(entity_config.templates.label_null) }}
{% else %}
    <img class=\"image-avatar\" height=\"{{ image_height }}\" src=\"{{ image_url }}\">
{% endif %}
", "@EasyAdmin/default/field_avatar.html.twig", "C:\\Users\\AYOUB\\Desktop\\projet_symfony_finale\\symfony_project_2\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\default\\field_avatar.html.twig");
    }
}
