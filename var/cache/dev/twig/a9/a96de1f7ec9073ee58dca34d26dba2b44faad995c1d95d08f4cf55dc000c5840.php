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

/* home/offre.html.twig */
class __TwigTemplate_7f9c9304069b6dc2b8757037081a01401195d4d65c1fe2dae7af82be97744ac2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/offre.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/offre.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/offre.html.twig", 1);
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

        echo "Home";
        
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
        echo "
<div class=\"colorlib-shop\">
\t\t\t<div class=\"container-fluid p-4\">
\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t<div class=\"col-md-6 col-md-offset-3 text-center colorlib-heading\">
\t\t\t\t\t\t<h2><span>Les Offres</span></h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
 ";
        // line 12
        if ((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 12, $this->source); })())) {
            // line 13
            echo " \t              
\t\t\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t\t
\t\t\t\t\t\t";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 16, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 17
                echo "\t\t\t\t\t\t
\t\t\t<div class=\"col-md-2 col-sm-6\">
                <div class=\"product-grid7\">
                    <div class=\"product-image7\">
                    <span class=\"badge badge-secondary\"></span>
                    
                        <a href=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "getId", [], "method", false, false, false, 23)]), "html", null, true);
                echo "\">
                            <img class=\"pic-1\" src=\"";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getPhotoPath", [], "method", false, false, false, 24), "html", null, true);
                echo "\">
                        </a>
                        
                        <ul class=\"social\">
                            ";
                // line 29
                echo "                            <span class=\"badge badge-success\">SOLDE</span>
                        </ul>
                    
                    </div>
                    <div class=\"product-content\">
                        <h3 class=\"title\"><a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "getId", [], "method", false, false, false, 34)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getNomArticle", [], "method", false, false, false, 34), "html", null, true);
                echo "</a></h3>
                        <span class=\"span1\">";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getPrixArticle", [], "method", false, false, false, 35), "html", null, true);
                echo " Dh </span>
                        <div class=\"price\">";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["monta"]) || array_key_exists("monta", $context) ? $context["monta"] : (function () { throw new RuntimeError('Variable "monta" does not exist.', 36, $this->source); })()), (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 36) - 1), [], "array", false, false, false, 36), "html", null, true);
                echo " Dh  </div>
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
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "        </div>  
   ";
        } else {
            // line 51
            echo " 
    <p>Aucun Offre trouveé </p>
  ";
        }
        // line 53
        echo " 
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/offre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 53,  190 => 51,  186 => 50,  158 => 36,  154 => 35,  148 => 34,  141 => 29,  134 => 24,  130 => 23,  122 => 17,  105 => 16,  100 => 13,  98 => 12,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title%}Home{% endblock %}
{% block body %}

<div class=\"colorlib-shop\">
\t\t\t<div class=\"container-fluid p-4\">
\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t<div class=\"col-md-6 col-md-offset-3 text-center colorlib-heading\">
\t\t\t\t\t\t<h2><span>Les Offres</span></h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
 {% if articles %}
 \t              
\t\t\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t\t
\t\t\t\t\t\t{% for article in articles %}
\t\t\t\t\t\t
\t\t\t<div class=\"col-md-2 col-sm-6\">
                <div class=\"product-grid7\">
                    <div class=\"product-image7\">
                    <span class=\"badge badge-secondary\"></span>
                    
                        <a href=\"{{path('detail',{'id': article.getId()})}}\">
                            <img class=\"pic-1\" src=\"{{article.getPhotoPath()}}\">
                        </a>
                        
                        <ul class=\"social\">
                            {# <li><a href=\"{{path('AddPanier',{'id': article.id})}}\" class=\"fa fa-shopping-cart\"></a></li> #}
                            <span class=\"badge badge-success\">SOLDE</span>
                        </ul>
                    
                    </div>
                    <div class=\"product-content\">
                        <h3 class=\"title\"><a href=\"{{path('detail',{'id': article.getId()})}}\">{{article.getNomArticle()}}</a></h3>
                        <span class=\"span1\">{{article.getPrixArticle()}} Dh </span>
                        <div class=\"price\">{{monta[ loop.index -1 ]}} Dh  </div>
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
        </div>  
   {% else %} 
    <p>Aucun Offre trouveé </p>
  {% endif %} 
  {% endblock %}", "home/offre.html.twig", "C:\\Users\\AYOUB\\Desktop\\projet_symfony_finale\\symfony_project_2\\templates\\home\\offre.html.twig");
    }
}
