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

/* home/panier.html.twig */
class __TwigTemplate_b0872227f1982c13db07863e1bbadd51de3463cdc1cc1884b3bd5f573f750a4b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/panier.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/panier.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/panier.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Panier";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container\">
    

<h1>Mon Panier</h1>
";
        // line 10
        if (1 === twig_compare(twig_length_filter($this->env, (isset($context["panierArticle"]) || array_key_exists("panierArticle", $context) ? $context["panierArticle"] : (function () { throw new RuntimeError('Variable "panierArticle" does not exist.', 10, $this->source); })())), 0)) {
            // line 11
            echo "    <table class=\"table table-bordered\">
    <thead><tr>
                <th scope=\"col\">Article</th>
                <th scope=\"col\">Prix</th>
                <th scope=\"col\">Quantité</th>
                <th></th>
            </tr>
    <tbody>
     <form method=\"post\" >
    ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["panierArticle"]) || array_key_exists("panierArticle", $context) ? $context["panierArticle"] : (function () { throw new RuntimeError('Variable "panierArticle" does not exist.', 20, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["panier"]) {
                echo "      
    <tr>
        <td> <img class=\"w-25\" src=\"";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["panier"], "article", [], "any", false, false, false, 22), "getPhotoPath", [], "method", false, false, false, 22), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["panier"], "article", [], "any", false, false, false, 22), "getNomArticle", [], "method", false, false, false, 22), "html", null, true);
                echo "</td> 
        <td>";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["panier"], "article", [], "any", false, false, false, 23), "getPrixArticle", [], "method", false, false, false, 23), "html", null, true);
                echo " Dh </td>
        <td>";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panier"], "quantite", [], "any", false, false, false, 24), "html", null, true);
                echo "</td> 
           
 
        <td>
          <div class=\"text-center\">
\t<!-- Button HTML (to Trigger Modal) -->
\t<a href=\"#myModal\" style=\"color:black;\" data-toggle=\"modal\"><i class=\"far fa-times-circle\"></i></a>
</div>
        </td> 
    </tr>   

    <!-- Modal HTML -->
<div id=\"myModal\" class=\"modal fade\">
\t<div class=\"modal-dialog modal-confirm\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<div class=\"icon-box\">
\t\t\t\t\t<i class=\"material-icons\">&#xE5CD;</i>
\t\t\t\t</div>\t\t\t\t
\t\t\t\t<h4 class=\"modal-title\">Vous Voulez suprimer? </h4>\t
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<p>Vous Voulez suprimer? .</p>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<button type=\"button\" class=\"btn btn-info\" data-dismiss=\"modal\">Annuler</button>
\t\t\t\t<a  href=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("RemovePanier", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["panier"], "article", [], "any", false, false, false, 51), "id", [], "any", false, false, false, 51)]), "html", null, true);
                echo "\" type=\"btn btn-danger\" class=\"btn btn-danger\">Delete</a>
\t\t\t</div>
\t\t</div>
\t</div>
</div>    
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['panier'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo " 
            </form> 
    <tfoot>
      ";
            // line 59
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
                echo " 
      <td></td>
      <td></td>
      <td></td>
    <td><a href=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("paiement", ["donnes" => (isset($context["donnes"]) || array_key_exists("donnes", $context) ? $context["donnes"] : (function () { throw new RuntimeError('Variable "donnes" does not exist.', 63, $this->source); })())]), "html", null, true);
                echo "\" class=\"btn btn-success btn-sm \">Payer</a></td>
        ";
            } else {
                // line 64
                echo " 
         <td><a href=\"";
                // line 65
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
                echo "\" class=\"btn btn-success btn-sm\">Connexion</a></td>
        ";
            }
            // line 66
            echo "         
    </tr>
    </tfoot></table>
    ";
        } else {
            // line 69
            echo " <h1>Votre Panier est Vide </h1>
    ";
        }
        // line 71
        echo "</div>  
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 71,  197 => 69,  191 => 66,  186 => 65,  183 => 64,  178 => 63,  171 => 59,  166 => 56,  154 => 51,  124 => 24,  120 => 23,  114 => 22,  107 => 20,  96 => 11,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Panier{% endblock %}

{% block body %}
<div class=\"container\">
    

<h1>Mon Panier</h1>
{%if panierArticle | length >0  %}
    <table class=\"table table-bordered\">
    <thead><tr>
                <th scope=\"col\">Article</th>
                <th scope=\"col\">Prix</th>
                <th scope=\"col\">Quantité</th>
                <th></th>
            </tr>
    <tbody>
     <form method=\"post\" >
    {% for panier in panierArticle %}      
    <tr>
        <td> <img class=\"w-25\" src=\"{{panier.article.getPhotoPath()}}\"> {{panier.article.getNomArticle()}}</td> 
        <td>{{panier.article.getPrixArticle()}} Dh </td>
        <td>{{panier.quantite}}</td> 
           
 
        <td>
          <div class=\"text-center\">
\t<!-- Button HTML (to Trigger Modal) -->
\t<a href=\"#myModal\" style=\"color:black;\" data-toggle=\"modal\"><i class=\"far fa-times-circle\"></i></a>
</div>
        </td> 
    </tr>   

    <!-- Modal HTML -->
<div id=\"myModal\" class=\"modal fade\">
\t<div class=\"modal-dialog modal-confirm\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<div class=\"icon-box\">
\t\t\t\t\t<i class=\"material-icons\">&#xE5CD;</i>
\t\t\t\t</div>\t\t\t\t
\t\t\t\t<h4 class=\"modal-title\">Vous Voulez suprimer? </h4>\t
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<p>Vous Voulez suprimer? .</p>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<button type=\"button\" class=\"btn btn-info\" data-dismiss=\"modal\">Annuler</button>
\t\t\t\t<a  href=\"{{path('RemovePanier',{'id':panier.article.id})}}\" type=\"btn btn-danger\" class=\"btn btn-danger\">Delete</a>
\t\t\t</div>
\t\t</div>
\t</div>
</div>    
    {% endfor %} 
            </form> 
    <tfoot>
      {% if  is_granted('IS_AUTHENTICATED_FULLY') %} 
      <td></td>
      <td></td>
      <td></td>
    <td><a href=\"{{path('paiement',{'donnes':donnes})}}\" class=\"btn btn-success btn-sm \">Payer</a></td>
        {% else %} 
         <td><a href=\"{{path('app_login')}}\" class=\"btn btn-success btn-sm\">Connexion</a></td>
        {% endif %}         
    </tr>
    </tfoot></table>
    {% else %} <h1>Votre Panier est Vide </h1>
    {% endif %}
</div>  
{% endblock %}
", "home/panier.html.twig", "C:\\Users\\AYOUB\\Desktop\\projet_symfony_finale\\symfony_project_2\\templates\\home\\panier.html.twig");
    }
}
