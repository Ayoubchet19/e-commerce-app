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

/* paiement/index.html.twig */
class __TwigTemplate_3dac5095677e8a7e8c1c552bd80c7db7a131250486c90978ef6d1c641e618620 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "paiement/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "paiement/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "paiement/index.html.twig", 1);
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

        echo "Paiemnet";
        
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
\t
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
        echo "


        <div class=\"container\">   
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            echo " ";
            // line 21
            echo "            <div class=\"alert alert-success\">
                ";
            // line 22
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    <div class=\"row\">
    <div class=\"col p-3\">
      <nav aria-label=\"Page navigation\">
        <ul class=\"pagination pagi\">
          
          <li class=\"page-item\"><a class=\"m-2 pagi\" href=\"#\">Home</a>
          <a class=\"m-2 pagi\" href=\"#\" aria-label=\"Next\">
            <span aria-hidden=\"true\">&raquo;</span>
          </a></li>
          <li class=\"page-item\"><a class=\"m-2 pagi\" href=\"#\">Page</a>
          <a class=\"m-2 pagi\" href=\"#\" aria-label=\"Next\">
            <span aria-hidden=\"true\">&raquo;</span>
          </a></li>
          <li class=\"page-item\"><a class=\"m-2 pagi\" href=\"#\">Shop</a>
          <a class=\"m-2 pagi\" href=\"#\" aria-label=\"Next\">
            <span aria-hidden=\"true\">&raquo;</span>
          </a></li>
          <li class=\"page-item\"><a class=\"m-2 pagi\" href=\"#\">Comparison</a></li>
          
          
        </ul>
      </nav>
    </div>

  </div>
<div class=\"row justify-content-center p-3\" >
   <div class=\"col\">
        <form action=\"\" method=\"post\">
            <div class=\"form-row\">
              <div class=\"col\">
                <label>Prenom<span class=\"obligatoire\">*</span></label>
                <input type=\"text\" name=\"prenom\" class=\"form-control\" required>
              </div>
              <div class=\"col\">
                  <label>Nom<span class=\"obligatoire\">*</span></label>
                <input type=\"text\" name=\"nom\" class=\"form-control\" required>
              </div>
              
            </div>
               <div>
                <label>Email<span class=\"obligatoire\">*</span></label><br>
                <input type=\"email\" name=\"email\" class=\"form-control\"  value='";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "user", [], "any", false, false, false, 66), "email", [], "any", false, false, false, 66), "html", null, true);
        echo "' disabled=true >
                </div>
                <div>
                <label>Adresse<span class=\"obligatoire\">*</span></label><br>
                <input type=\"text\" name=\"adresse\" class=\"form-control\" required>
                </div>
                <div>
                <label>Telephone<span class=\"obligatoire\">*</span></label>
                <input type=\"text\" name=\"Tel\" class=\"form-control\" required>
                </div>
                <div>
                <label>Num Carte<span class=\"obligatoire\">*</span></label>
                <input type=\"text\" name=\"ncard\" class=\"form-control\" required>
                </div>
                <div>
                <label>CCV<span class=\"obligatoire\">*</span></label><br>
                <input type=\"text\" name=\"ccv\" class=\"form-control\" required>
                </div>

          
    </div>
    <div class=\"col\">
      <div class=\"your-order__wrap border border-secondary p-3\">
        <h5>Your Order</h5>
        <table class=\"table\">
          <tbody >
            <tr>
              <th>Product</th>
              <td>Prix</td>
            </tr>
            ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["panierArticle"]) || array_key_exists("panierArticle", $context) ? $context["panierArticle"] : (function () { throw new RuntimeError('Variable "panierArticle" does not exist.', 96, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["panier"]) {
            echo " 
            <tr>
              <th>";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["panier"], "article", [], "any", false, false, false, 98), "getNomArticle", [], "method", false, false, false, 98), "html", null, true);
            echo " x ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panier"], "quantite", [], "any", false, false, false, 98), "html", null, true);
            echo "</th>
              <td>";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["panier"], "article", [], "any", false, false, false, 99), "getPrixArticle", [], "method", false, false, false, 99), "html", null, true);
            echo " Dh</td>
              <td>Total ";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["prixt"]) || array_key_exists("prixt", $context) ? $context["prixt"] : (function () { throw new RuntimeError('Variable "prixt" does not exist.', 100, $this->source); })()), (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 100) - 1), [], "array", false, false, false, 100), "html", null, true);
            echo " Dh</td>
            </tr>
            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['panier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "            <tr>
              <th>Shipping</th>
              <td>Free Shipping</td>
            </tr>
            <tr>
              <th>Total Facture</th>
              <td>";
        // line 109
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 109, $this->source); })()), "html", null, true);
        echo " Dh</td>
            </tr>
            <td><button type=\"submit\" class=\"btn btn1\">Confirmer</button></td>
          </tbody>
        </table>
      </div>
    </div>
</div>
</form>
</div>  
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "paiement/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 109,  267 => 103,  250 => 100,  246 => 99,  240 => 98,  220 => 96,  187 => 66,  144 => 25,  135 => 22,  132 => 21,  127 => 20,  121 => 16,  111 => 15,  89 => 4,  79 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Paiemnet{% endblock %}
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
\t
        {% endblock %}
{% block body %}



        <div class=\"container\">   
        {% for message in app.flashes('success') %} {#Resp pour Afficher les message    #}
            <div class=\"alert alert-success\">
                {{ message }}
            </div>
        {% endfor %}
    <div class=\"row\">
    <div class=\"col p-3\">
      <nav aria-label=\"Page navigation\">
        <ul class=\"pagination pagi\">
          
          <li class=\"page-item\"><a class=\"m-2 pagi\" href=\"#\">Home</a>
          <a class=\"m-2 pagi\" href=\"#\" aria-label=\"Next\">
            <span aria-hidden=\"true\">&raquo;</span>
          </a></li>
          <li class=\"page-item\"><a class=\"m-2 pagi\" href=\"#\">Page</a>
          <a class=\"m-2 pagi\" href=\"#\" aria-label=\"Next\">
            <span aria-hidden=\"true\">&raquo;</span>
          </a></li>
          <li class=\"page-item\"><a class=\"m-2 pagi\" href=\"#\">Shop</a>
          <a class=\"m-2 pagi\" href=\"#\" aria-label=\"Next\">
            <span aria-hidden=\"true\">&raquo;</span>
          </a></li>
          <li class=\"page-item\"><a class=\"m-2 pagi\" href=\"#\">Comparison</a></li>
          
          
        </ul>
      </nav>
    </div>

  </div>
<div class=\"row justify-content-center p-3\" >
   <div class=\"col\">
        <form action=\"\" method=\"post\">
            <div class=\"form-row\">
              <div class=\"col\">
                <label>Prenom<span class=\"obligatoire\">*</span></label>
                <input type=\"text\" name=\"prenom\" class=\"form-control\" required>
              </div>
              <div class=\"col\">
                  <label>Nom<span class=\"obligatoire\">*</span></label>
                <input type=\"text\" name=\"nom\" class=\"form-control\" required>
              </div>
              
            </div>
               <div>
                <label>Email<span class=\"obligatoire\">*</span></label><br>
                <input type=\"email\" name=\"email\" class=\"form-control\"  value='{{app.user.email}}' disabled=true >
                </div>
                <div>
                <label>Adresse<span class=\"obligatoire\">*</span></label><br>
                <input type=\"text\" name=\"adresse\" class=\"form-control\" required>
                </div>
                <div>
                <label>Telephone<span class=\"obligatoire\">*</span></label>
                <input type=\"text\" name=\"Tel\" class=\"form-control\" required>
                </div>
                <div>
                <label>Num Carte<span class=\"obligatoire\">*</span></label>
                <input type=\"text\" name=\"ncard\" class=\"form-control\" required>
                </div>
                <div>
                <label>CCV<span class=\"obligatoire\">*</span></label><br>
                <input type=\"text\" name=\"ccv\" class=\"form-control\" required>
                </div>

          
    </div>
    <div class=\"col\">
      <div class=\"your-order__wrap border border-secondary p-3\">
        <h5>Your Order</h5>
        <table class=\"table\">
          <tbody >
            <tr>
              <th>Product</th>
              <td>Prix</td>
            </tr>
            {% for panier in panierArticle %} 
            <tr>
              <th>{{panier.article.getNomArticle()}} x {{panier.quantite}}</th>
              <td>{{panier.article.getPrixArticle()}} Dh</td>
              <td>Total {{prixt[ loop.index -1 ]}} Dh</td>
            </tr>
            {% endfor %}
            <tr>
              <th>Shipping</th>
              <td>Free Shipping</td>
            </tr>
            <tr>
              <th>Total Facture</th>
              <td>{{ total }} Dh</td>
            </tr>
            <td><button type=\"submit\" class=\"btn btn1\">Confirmer</button></td>
          </tbody>
        </table>
      </div>
    </div>
</div>
</form>
</div>  
{% endblock  %}", "paiement/index.html.twig", "C:\\Users\\AYOUB\\Desktop\\projet_symfony_finale\\symfony_project_2\\templates\\paiement\\index.html.twig");
    }
}
