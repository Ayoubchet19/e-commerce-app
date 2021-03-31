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

/* home/Contact.html.twig */
class __TwigTemplate_ad617cbd19f0a05d895d304fd626d5a0ed34b52e25c85b9b437205fdaa39d626 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/Contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/Contact.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/Contact.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Contact";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link href=\"https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700\" rel=\"stylesheet\">
\t<link
      rel=\"stylesheet\"
      href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css\"
      integrity=\"sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=\"
      crossorigin=\"anonymous\"
    />
    <link rel=\"stylesheet\" href=\"../coustumcss/css/styles.css\" />
     <link rel=\"stylesheet\" href=\"../../coustumcss/css/styles.css\" />
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "    <div class=\"container\">
\t\t";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            echo " 
            <div class=\"alert alert-success\">
                ";
            // line 19
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "\t</div>
      <div class=\"container-fluid\">
    <div class=\"row justify-content-center\">
              
\t\t\t\t\t<div class=\"col-md-10 col-md-offset-1\">
\t\t\t\t\t\t<h3 class=\"text-center\">Contact Information</h3>
\t\t\t\t\t\t<div class=\"row justify-content-center p-3\">
\t\t\t\t\t\t\t<div class=\"mr-5\">
\t\t\t\t\t\t\t\t<p><span><i class=\"fas fa-address-card\"></i></span> Maroc Oujda , r 27 10016</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mr-5\">
\t\t\t\t\t\t\t\t<p><span><i class=\"fas fa-phone\"></i></span>+212 06654333</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mr-5\">
\t\t\t\t\t\t\t\t<p><span><i class=\"fas fa-envelope\"></i></span> ecomercnet@gmail.com</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mr-5\">
\t\t\t\t\t\t\t\t<p><span><i class=\"fas fa-globe\"></i></span> <a href=\"#\">MyEcom.com</a></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"col-md-10 col-md-offset-1\">
\t\t\t\t\t\t<div class=\"contact-wrap\">
\t\t\t\t\t\t\t<h3>Envoi d'email</h3>
\t\t\t\t\t\t\t<form action=\"\" method=\"post\">
\t\t\t\t\t\t\t\t<div class=\"row form-group\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 padding-bottom\">
\t\t\t\t\t\t\t\t\t ";
        // line 51
        if (((isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 51, $this->source); })()) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY"))) {
            // line 52
            echo "                                      <label for=\"name\">From</label>
\t\t\t\t\t\t\t\t\t  <input type=\"text\" id=\"from\" name=\"name\" class=\"form-control\" placeholder=\"from\" value=\"";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53), "nom", [], "any", false, false, false, 53), "html", null, true);
            echo "\" disabled>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 55
            echo "                                        <label for=\"name\">Nom</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"nom\" id=\"name\" class=\"form-control\" placeholder=\"Nom\" required>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 58
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row form-group\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t<label for=\"email\">Email</label>
\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t<input type=\"email\"  name=\"email\" class=\"form-control\"   placeholder=\"email\">
                                           
 

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"row form-group\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t<label for=\"subject\">Sujet</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"sujet\" id=\"sujet\" class=\"form-control\" placeholder=\"Sujet\" required>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row form-group\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t<label for=\"message\">Message</label>
\t\t\t\t\t\t\t\t\t\t<textarea name=\"message\" id=\"message\" cols=\"30\" rows=\"10\" class=\"form-control\" placeholder=\"Msg\" required></textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group text-center\">
\t\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"Envoi de Message\" class=\"btn btn-success\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>\t\t
    </div> 
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/Contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 58,  181 => 55,  176 => 53,  173 => 52,  171 => 51,  140 => 22,  131 => 19,  124 => 17,  121 => 16,  111 => 15,  89 => 4,  79 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Contact{% endblock %}
{% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{asset('bootstrap/css/bootstrap.min.css')}}\">
        <link href=\"https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700\" rel=\"stylesheet\">
\t<link
      rel=\"stylesheet\"
      href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css\"
      integrity=\"sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=\"
      crossorigin=\"anonymous\"
    />
    <link rel=\"stylesheet\" href=\"../coustumcss/css/styles.css\" />
     <link rel=\"stylesheet\" href=\"../../coustumcss/css/styles.css\" />
        {% endblock %}
{% block body %}
    <div class=\"container\">
\t\t{% for message in app.flashes('success') %} 
            <div class=\"alert alert-success\">
                {{ message }}
            </div>
        {% endfor %}
\t</div>
      <div class=\"container-fluid\">
    <div class=\"row justify-content-center\">
              
\t\t\t\t\t<div class=\"col-md-10 col-md-offset-1\">
\t\t\t\t\t\t<h3 class=\"text-center\">Contact Information</h3>
\t\t\t\t\t\t<div class=\"row justify-content-center p-3\">
\t\t\t\t\t\t\t<div class=\"mr-5\">
\t\t\t\t\t\t\t\t<p><span><i class=\"fas fa-address-card\"></i></span> Maroc Oujda , r 27 10016</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mr-5\">
\t\t\t\t\t\t\t\t<p><span><i class=\"fas fa-phone\"></i></span>+212 06654333</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mr-5\">
\t\t\t\t\t\t\t\t<p><span><i class=\"fas fa-envelope\"></i></span> ecomercnet@gmail.com</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mr-5\">
\t\t\t\t\t\t\t\t<p><span><i class=\"fas fa-globe\"></i></span> <a href=\"#\">MyEcom.com</a></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"col-md-10 col-md-offset-1\">
\t\t\t\t\t\t<div class=\"contact-wrap\">
\t\t\t\t\t\t\t<h3>Envoi d'email</h3>
\t\t\t\t\t\t\t<form action=\"\" method=\"post\">
\t\t\t\t\t\t\t\t<div class=\"row form-group\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 padding-bottom\">
\t\t\t\t\t\t\t\t\t {% if admin and is_granted('IS_AUTHENTICATED_FULLY') %}
                                      <label for=\"name\">From</label>
\t\t\t\t\t\t\t\t\t  <input type=\"text\" id=\"from\" name=\"name\" class=\"form-control\" placeholder=\"from\" value=\"{{ app.user.nom }}\" disabled>
\t\t\t\t\t\t\t\t\t\t{% else %}
                                        <label for=\"name\">Nom</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"nom\" id=\"name\" class=\"form-control\" placeholder=\"Nom\" required>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row form-group\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t<label for=\"email\">Email</label>
\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t<input type=\"email\"  name=\"email\" class=\"form-control\"   placeholder=\"email\">
                                           
 

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"row form-group\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t<label for=\"subject\">Sujet</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"sujet\" id=\"sujet\" class=\"form-control\" placeholder=\"Sujet\" required>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row form-group\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t<label for=\"message\">Message</label>
\t\t\t\t\t\t\t\t\t\t<textarea name=\"message\" id=\"message\" cols=\"30\" rows=\"10\" class=\"form-control\" placeholder=\"Msg\" required></textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group text-center\">
\t\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"Envoi de Message\" class=\"btn btn-success\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>\t\t
    </div> 
</div>

{% endblock  %}", "home/Contact.html.twig", "C:\\Users\\AYOUB\\Desktop\\projet_symfony_finale\\symfony_project_2\\templates\\home\\Contact.html.twig");
    }
}
