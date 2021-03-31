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

/* home/allproduct.html.twig */
class __TwigTemplate_db94c01a18ebf86a5232407b2ab15be2e6d3559793e8be992d1f05a773e05d57 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/allproduct.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/allproduct.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/allproduct.html.twig", 1);
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

        echo "Tous les Produits";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container-fluid p-5\">
\t\t
\t\t\t\t\t\t<h3 class=\"text-center\">Products</h3>
                        
  

\t\t\t\t\t\t";
        // line 10
        if ((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 10, $this->source); })())) {
            // line 11
            echo "\t\t\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t\t
      
\t\t";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 14, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 15
                echo "\t\t\t<div class=\"col-md-2 col-sm-6\">
                <div class=\"product-grid7\">
                    <div class=\"product-image7\">
                        <a href=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "getId", [], "method", false, false, false, 18)]), "html", null, true);
                echo "\">
                            <img class=\"pic-1\" src=\"";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getPhotoPath", [], "method", false, false, false, 19), "html", null, true);
                echo "\">
                        </a>
                        <ul class=\"social\">
                            ";
                // line 23
                echo "                            <li><a href=\"\" class=\"fas fa-heart\"></a></li>
                            <li><a href=\"\" class=\"fas fa-retweet\"></a></li>
                        </ul>
                    </div>
                    <div class=\"product-content\">
                        <h3 class=\"title\"><a href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "getId", [], "method", false, false, false, 28)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getNomArticle", [], "method", false, false, false, 28), "html", null, true);
                echo "</a></h3>
                        <div class=\"price\">";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getPrixArticle", [], "method", false, false, false, 29), "html", null, true);
                echo " Dh
                      </div>
                        <ul class=\"rating\">
                            <li class=\"fa fa-star\"></li>
                            <li class=\"fa fa-star\"></li>
                            <li class=\"fa fa-star\"></li>
                            <li class=\"fa fa-star\"></li>
                            <li class=\"fa fa-star\"></li>
                        </ul>
                        
                    </div>

\t\t\t\t\t</div>  
                </div>
\t\t\t\t ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "\t\t\t\t         
</div>
  ";
        } else {
            // line 46
            echo " 
    <p>Aucun articles trouveé </p>
  ";
        }
        // line 48
        echo " 
    ";
        // line 49
        if ((isset($context["paginations"]) || array_key_exists("paginations", $context) ? $context["paginations"] : (function () { throw new RuntimeError('Variable "paginations" does not exist.', 49, $this->source); })())) {
            echo "  
            <div class=\"d-flex justify-content-center\">";
            // line 50
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 50, $this->source); })()));
            echo "</div> 
   ";
        }
        // line 52
        echo "</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/allproduct.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 52,  173 => 50,  169 => 49,  166 => 48,  161 => 46,  156 => 44,  135 => 29,  129 => 28,  122 => 23,  116 => 19,  112 => 18,  107 => 15,  103 => 14,  98 => 11,  96 => 10,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Tous les Produits{% endblock %}
{% block body %}
    <div class=\"container-fluid p-5\">
\t\t
\t\t\t\t\t\t<h3 class=\"text-center\">Products</h3>
                        
  

\t\t\t\t\t\t{% if articles %}
\t\t\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t\t
      
\t\t{% for article in articles %}
\t\t\t<div class=\"col-md-2 col-sm-6\">
                <div class=\"product-grid7\">
                    <div class=\"product-image7\">
                        <a href=\"{{path('detail',{'id': article.getId()})}}\">
                            <img class=\"pic-1\" src=\"{{article.getPhotoPath()}}\">
                        </a>
                        <ul class=\"social\">
                            {# <li><a href=\"{{path('AddPanier',{'id': article.id})}}\" class=\"fa fa-shopping-cart\"></a></li> #}
                            <li><a href=\"\" class=\"fas fa-heart\"></a></li>
                            <li><a href=\"\" class=\"fas fa-retweet\"></a></li>
                        </ul>
                    </div>
                    <div class=\"product-content\">
                        <h3 class=\"title\"><a href=\"{{path('detail',{'id': article.getId()})}}\">{{article.getNomArticle()}}</a></h3>
                        <div class=\"price\">{{article.getPrixArticle()}} Dh
                      </div>
                        <ul class=\"rating\">
                            <li class=\"fa fa-star\"></li>
                            <li class=\"fa fa-star\"></li>
                            <li class=\"fa fa-star\"></li>
                            <li class=\"fa fa-star\"></li>
                            <li class=\"fa fa-star\"></li>
                        </ul>
                        
                    </div>

\t\t\t\t\t</div>  
                </div>
\t\t\t\t {% endfor %}
\t\t\t\t         
</div>
  {% else %} 
    <p>Aucun articles trouveé </p>
  {% endif %} 
    {% if (paginations) %}  
            <div class=\"d-flex justify-content-center\">{{knp_pagination_render(articles)}}</div> 
   {% endif %}
</div>

{% endblock  %}", "home/allproduct.html.twig", "C:\\Users\\AYOUB\\Desktop\\projet_symfony_finale\\symfony_project_2\\templates\\home\\allproduct.html.twig");
    }
}
