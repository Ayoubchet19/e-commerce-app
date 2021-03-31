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

/* home/afficher.html.twig */
class __TwigTemplate_d502bcb323a58ded0e7c0b5733f67927b6a56e5c031d43bb2ab546bedbafcc7d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/afficher.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/afficher.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/afficher.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
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
    
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Product";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "      <div class=\"container p-4\">
      <div class=\"row \">
                <div class=\"product-grid7 col\">
                    <div class=\" product-image7 w-50\">
                        <a href=\"#\">
                            <img class=\"pic-1\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 22, $this->source); })()), "getPhotoPath", [], "method", false, false, false, 22), "html", null, true);
        echo "\">
                        </a>
                        <ul class=\"social\">
                             <li><a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AddPanier", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25)]), "html", null, true);
        echo "\" class=\"fa fa-shopping-cart\"></a></li> 
                            <li><a href=\"\" class=\"fas fa-heart\"></a></li>
                            
                        </ul>
                    </div> 
                    </div>

                    <div class=\"product-grid7 col\">
                        <h3 class=\"title\"><a href=\"#\">";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 33, $this->source); })()), "getNomArticle", [], "method", false, false, false, 33), "html", null, true);
        echo "</a></h3>
                        <div class=\"\">";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 34, $this->source); })()), "getPrixArticle", [], "method", false, false, false, 34), "html", null, true);
        echo " Dh
                        <p>Dans la categorie : ";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 35, $this->source); })()), "categorie", [], "any", false, false, false, 35), "getNomCat", [], "method", false, false, false, 35), "html", null, true);
        echo "</p> 
                        <p class=\"color-desc\"> Color: ";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 36, $this->source); })()), "getCouleur", [], "method", false, false, false, 36), "html", null, true);
        echo "</p>
                        <p style=\"color:black;\">";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 37, $this->source); })()), "getDescriptionArticle", [], "method", false, false, false, 37), "html", null, true);
        echo "</p>
                        <ul class=\"rating\">
                            <li class=\"fa fa-star\"></li>
                            <li class=\"fa fa-star\"></li>
                            <li class=\"fa fa-star\"></li>
                            <li class=\"fa fa-star\"></li>
                            <li class=\"fa fa-star\"></li>
                        </ul>
                        </div>
                        
                        <form action=\"\" method=\"POST\">
                          <input type=\"number\" id=\"tentacles\"  name=\"qunt\" min=\"1\" max=\"100\" value=\"1\">
                        ";
        // line 50
        echo "                         <input type=\"submit\" class=\"btn btn-success\" value=\"add\" name=\"add\">
                          ";
        // line 52
        echo "                         </form>
                        
                        </div>         
      </div>

    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/afficher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 52,  176 => 50,  161 => 37,  157 => 36,  153 => 35,  149 => 34,  145 => 33,  134 => 25,  128 => 22,  121 => 17,  111 => 16,  92 => 14,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
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
    
        {% endblock %}
{% block title %}Product{% endblock %}
 
{% block body %}
      <div class=\"container p-4\">
      <div class=\"row \">
                <div class=\"product-grid7 col\">
                    <div class=\" product-image7 w-50\">
                        <a href=\"#\">
                            <img class=\"pic-1\" src=\"{{article.getPhotoPath()}}\">
                        </a>
                        <ul class=\"social\">
                             <li><a href=\"{{path('AddPanier',{'id': article.id})}}\" class=\"fa fa-shopping-cart\"></a></li> 
                            <li><a href=\"\" class=\"fas fa-heart\"></a></li>
                            
                        </ul>
                    </div> 
                    </div>

                    <div class=\"product-grid7 col\">
                        <h3 class=\"title\"><a href=\"#\">{{article.getNomArticle()}}</a></h3>
                        <div class=\"\">{{article.getPrixArticle()}} Dh
                        <p>Dans la categorie : {{article.categorie.getNomCat() }}</p> 
                        <p class=\"color-desc\"> Color: {{article.getCouleur()}}</p>
                        <p style=\"color:black;\">{{article.getDescriptionArticle() }}</p>
                        <ul class=\"rating\">
                            <li class=\"fa fa-star\"></li>
                            <li class=\"fa fa-star\"></li>
                            <li class=\"fa fa-star\"></li>
                            <li class=\"fa fa-star\"></li>
                            <li class=\"fa fa-star\"></li>
                        </ul>
                        </div>
                        
                        <form action=\"\" method=\"POST\">
                          <input type=\"number\" id=\"tentacles\"  name=\"qunt\" min=\"1\" max=\"100\" value=\"1\">
                        {# <a id='link' href=\"{{path('detail',{'id': article.id})}}\" class=\"btn btn1\">Panier</a> #}
                         <input type=\"submit\" class=\"btn btn-success\" value=\"add\" name=\"add\">
                          {# <a id='link' href=\"{{path('AddPanier',{'id': article.id})}}\" class=\"btn btn1\">Panier</a> #}
                         </form>
                        
                        </div>         
      </div>

    </div>
{% endblock  %}

", "home/afficher.html.twig", "C:\\Users\\AYOUB\\Desktop\\projet_symfony_finale\\symfony_project_2\\templates\\home\\afficher.html.twig");
    }
}
