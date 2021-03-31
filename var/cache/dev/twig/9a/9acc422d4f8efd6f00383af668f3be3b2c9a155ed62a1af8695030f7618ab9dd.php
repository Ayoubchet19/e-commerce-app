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

/* base.html.twig */
class __TwigTemplate_dabbc8788576cf1d01bb68247d9234e8c0e699e33c20d189eb3f967095ecb8c9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
    <meta name=\"description\" content=\"\" />
    <meta name=\"keywords\" content=\"\" />
    <meta name=\"author\" content=\"\" />
        <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "    </head>
<header class=\"fixed\">

     <nav class=\"navbar navbar-dark  dark-bar\">
      <div class=\"container-fluid\">
      <div class=\"white\">
        <span class=\"icon imarg\"> <i class=\"fas fa-phone \"></i></span><span class=\"size1head\" style=\"margin-right: 40px;\">+1 123 456 789</span>

        <span class=\"icon imarg\"> <i class=\"fas fa-envelope \"></i></span><span class=\"size1head \">info@company.com</span>
\t\t\t\t\t
\t\t\t\t</div>
      <div class=\"btn-group pull-right white\">
        <a href=\"#\" class=\"white\"><i class=\"fab fa-facebook-f\"></i></a>
        <a href=\"#\" class=\"white\"><i class=\"fab fa-twitter\"></i></a>
        <a href=\"#\" class=\"white\"><i class=\"fab fa-instagram\"></i></a>
        <a href=\"#\" class=\"white\"><i class=\"fab fa-linkedin-in\"></i></a>
        <a href=\"#\" class=\"white\"><i class=\"fab fa-behance\"></i></a>
        </div>
        
      </div>
    </nav>
    <!-- navbar 2 -->
    <!-- nav-bar-area-start -->
  \t<nav class=\"navbar navbar-expand-lg navbar-light   bg-light sizenav\">
      <div class=\"container-fluid\">
    
        <!-- ====================nav-left-site==================== -->
        <a class=\"navbar-brand\" href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><img src=\"/coustumcss/images/Renoshopbee.png\"></a>
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
    
        <!-- ====================nav-middle-site==================== -->
      <div class=\"collapse navbar-collapse bg-light\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav m-auto fontheaderp bg\">
          <li class=\"nav-item\">
            <a class=\"nav-link fontheaderp\" href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">HOME</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link fontheaderp\" href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link fontheaderp\" href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
        echo "\">About</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link fontheaderp\" href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("products");
        echo "\">products</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link fontheaderp\" href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("offre");
        echo "\">Offre</a>
          </li>
            
\t\t  
        </ul>
       
        <!-- ====================nav-right-site==================== -->
        <ul class=\"navbar-nav  my-2 my-lg-0\" >
          ";
        // line 78
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 78, $this->source); })()), "session", [], "any", false, false, false, 78)) {
            // line 79
            echo "           <div class=\"icon-badge-container\">
         <a href=\"";
            // line 80
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier");
            echo "\" title=\"panier\" class=\"\"><i class=\"fas fa-shopping-cart black icon-badge-icon\"></i></a>
        ";
            // line 81
            if (1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 81, $this->source); })()), "session", [], "any", false, false, false, 81), "get", [0 => "count"], "method", false, false, false, 81), 0)) {
                // line 82
                echo "         <span class=\"icon-badge\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 82, $this->source); })()), "session", [], "any", false, false, false, 82), "get", [0 => "count"], "method", false, false, false, 82), "html", null, true);
                echo "</span>
          ";
            }
            // line 84
            echo "          </div>
           ";
        } else {
            // line 86
            echo "          <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier");
            echo "\" title=\"panier\" class=\"\"><i class=\"fas fa-shopping-cart black\"></i></a>
          ";
        }
        // line 88
        echo "           
          <form action=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("products");
        echo "\" class=\"searchbar\" method=\"post\">
          <input class=\"search_input\" type=\"text\" name=\"categorie\" placeholder=\"Search by categories...\">
         
           <label for=\"mySubmit\" class=\"\"><i class=\"fas fa-search black\"></i></label>
          <input type=\"submit\" id=\"mySubmit\" class=\"search_icon hidden btn\" name=\"btn\">
          </form>
  <div>

";
        // line 97
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPERADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 98
            echo "          
     <a class=\"\" title=\"dashboard\" href=\"";
            // line 99
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin");
            echo "\"><i class=\"fas fa-user black\"></i></a>
          
\t\t  ";
        }
        // line 102
        echo "
\t\t  ";
        // line 103
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            echo " 
         
   <a class=\"\" title=\"connecter\" href=\"";
            // line 105
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\"><i class=\"fas fa-sign-in-alt black\"></i></a>
          
\t\t  ";
        } else {
            // line 107
            echo " 
\t\t  
  <a class=\"\" title=\"deconnecter\" href=\"";
            // line 109
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\"><i class=\"fas fa-sign-out-alt black\"></i></a>
          
\t\t  ";
        }
        // line 112
        echo "       </div>   
          ";
        // line 114
        echo "        </ul>

        
      </div>
      </div>
      
    </nav>
\t\t
</header>
 
          ";
        // line 124
        $this->displayBlock('body', $context, $blocks);
        // line 127
        echo "        </div>  
     
\t\t <footer>
  <section >
    
      
     <div class=\"card\">   
    <div class=\"card-header \">
      <nav class=\"navbar container\">
        
        <div class=\"navfooter \">

          <span class=\"cardfoot\">We’re confident we’ve provided all the best for you. Stay connect with us</span>
            
          </div>
          <div class=\"btn-group float-right navfooter\">
            <a href=\"#\" class=\"cardfoot\"><i class=\"fab fa-facebook-f\"></i></a>
            <a href=\"#\" class=\"cardfoot\"><i class=\"fab fa-twitter\"></i></a>
            <a href=\"#\" class=\"cardfoot\"><i class=\"fab fa-instagram\"></i></a>
            <a href=\"#\" class=\"cardfoot\"><i class=\"fab fa-linkedin-in\"></i></a>
            <a href=\"#\" class=\"cardfoot\"><i class=\"fab fa-behance\"></i></a>
            </div>
          </nav>
    </div>
    <div class=\"card-body  text-center container align-items-center py-5\">
      
      <div class=\"row text-left\">
        <div class=\"col-md-3\">
          <h4>INFORMATION</h4>
          <ul class=\"list-unstyled mt-3\">
              <li><a href=\"#\" class=\"cardfoot\">Delivery Information</a></li>
              <div class=\"mb-2\"></div>
              <li><a href=\"#\" class=\"cardfoot\">Discount</a></li>
              <div class=\"mb-2\"></div>
              <li><a href=\"#\" class=\"cardfoot\">Sitemap</a></li>
              <div class=\"mb-2\"></div>
              <li><a href=\"#\" class=\"cardfoot\">Privacy Policy</a></li>
              <div class=\"mb-2\"></div>
              <li><a href=\"#\" class=\"cardfoot\">My account</a></li>
          </ul>
      </div>
      <div class=\"col-md-3\">
        <h4>MY ACCOUNT</h4>
        <ul class=\"list-unstyled mt-3\">
            <li><a href=\"#\" class=\"cardfoot\">About Us</a></li>
            <div class=\"mb-2\"></div>
            <li><a href=\"#\" class=\"cardfoot\">Contact Us</a></li>
            <div class=\"mb-2\"></div>
            <li><a href=\"#\" class=\"cardfoot\">Our Team</a></li>
            <div class=\"mb-2\"></div>
            <li><a href=\"#\" class=\"cardfoot\">Testimonials</a></li>
            <div class=\"mb-2\"></div>
              <li><a href=\"#\" class=\"cardfoot\">My account</a></li>
        </ul>
    </div><div class=\"col-md-3\">
      <h4>HELP</h4>
      <ul class=\"list-unstyled mt-3\">
          <li><a href=\"#\" class=\"cardfoot\">About Us</a></li>
          <div class=\"mb-2\"></div>
          <li><a href=\"#\" class=\"cardfoot\">Contact Us</a></li>
          <div class=\"mb-2\"></div>
          <li><a href=\"#\" class=\"cardfoot\">Our Team</a></li>
          <div class=\"mb-2\"></div>
          <li><a href=\"#\" class=\"cardfoot\">Testimonials</a></li>
        
      </ul>
  </div><div class=\"col-md-3\">
    <h4>CONTACT INFO</h4>
    <ul class=\"list-unstyled mt-3\">
        <li><a href=\"#\" class=\"cardfoot\"><i class=\"fas fa-globe-americas\"></i>1234 Your Adress,Country.</a></li>
        <div class=\"mb-2\"></div>
        <li><a href=\"#\" class=\"cardfoot\"><i class=\"fas fa-phone-alt\"></i>+1 234 5678 9999</a></li>
        <div class=\"mb-2\"></div>
        <li><a href=\"#\" class=\"cardfoot text-success\"><i class=\"fas fa-envelope cardfoot\"></i>mail@domain.com</a></li>
     
    </ul>
</div>
      </div>
      
      
    </div>
  </div>

    <nav class=\"navbar navbar-fixed-bottom navbar-dark dark-bar \">
     
      <div class=\"container\">
      <div class=\"navfooter\">

        <span class=\"size1head \">Copyright 2017 RenoshopBee all right reserved - Design by BeeStudios</span>
\t\t\t\t\t
\t\t\t\t</div>
      <div class=\"btn-group pull-right \">
        <img class=\"m-1\" src=\"/coustumcss/images/visa5.png\">
        <img class=\"m-1\" src=\"/coustumcss/images/amazon3.png\">
        <img class=\"m-1\" src=\"/coustumcss/images/card34.png\">
        <img class=\"m-1\" src=\"/coustumcss/images/maestro1.png\">
        <img class=\"m-1\" src=\"/coustumcss/images/paypal11.png\">
      
        </div>
        
    </div>
    </nav>
  </section>
</footer>
      ";
        // line 231
        $this->displayBlock('javascripts', $context, $blocks);
        // line 249
        echo "  
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome! ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
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
    <link rel=\"stylesheet\" href=\"coustumcss/css/styles.css\" />
\t
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 124
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 125
        echo "          
          ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 231
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 232
        echo " <script src=\"https://kit.fontawesome.com/yourcode.js\"></script>
    <script
      src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\"
      integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\"
      crossorigin=\"anonymous\"
    ></script>
    <script
      src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\"
      integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\"
      crossorigin=\"anonymous\"
    ></script>
    <script
      src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\"
      integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\"
      crossorigin=\"anonymous\"
    ></script>
      
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  434 => 232,  424 => 231,  413 => 125,  403 => 124,  381 => 11,  371 => 10,  352 => 9,  340 => 249,  338 => 231,  232 => 127,  230 => 124,  218 => 114,  215 => 112,  209 => 109,  205 => 107,  199 => 105,  194 => 103,  191 => 102,  185 => 99,  182 => 98,  180 => 97,  169 => 89,  166 => 88,  160 => 86,  156 => 84,  150 => 82,  148 => 81,  144 => 80,  141 => 79,  139 => 78,  128 => 70,  122 => 67,  116 => 64,  110 => 61,  104 => 58,  92 => 49,  63 => 22,  61 => 10,  57 => 9,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
    <meta name=\"description\" content=\"\" />
    <meta name=\"keywords\" content=\"\" />
    <meta name=\"author\" content=\"\" />
        <title>{% block title %}Welcome! {% endblock %}</title>
{% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{asset('bootstrap/css/bootstrap.min.css')}}\">
        <link href=\"https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700\" rel=\"stylesheet\">
\t<link
      rel=\"stylesheet\"
      href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css\"
      integrity=\"sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=\"
      crossorigin=\"anonymous\"
    />
    <link rel=\"stylesheet\" href=\"coustumcss/css/styles.css\" />
\t
        {% endblock %}
    </head>
<header class=\"fixed\">

     <nav class=\"navbar navbar-dark  dark-bar\">
      <div class=\"container-fluid\">
      <div class=\"white\">
        <span class=\"icon imarg\"> <i class=\"fas fa-phone \"></i></span><span class=\"size1head\" style=\"margin-right: 40px;\">+1 123 456 789</span>

        <span class=\"icon imarg\"> <i class=\"fas fa-envelope \"></i></span><span class=\"size1head \">info@company.com</span>
\t\t\t\t\t
\t\t\t\t</div>
      <div class=\"btn-group pull-right white\">
        <a href=\"#\" class=\"white\"><i class=\"fab fa-facebook-f\"></i></a>
        <a href=\"#\" class=\"white\"><i class=\"fab fa-twitter\"></i></a>
        <a href=\"#\" class=\"white\"><i class=\"fab fa-instagram\"></i></a>
        <a href=\"#\" class=\"white\"><i class=\"fab fa-linkedin-in\"></i></a>
        <a href=\"#\" class=\"white\"><i class=\"fab fa-behance\"></i></a>
        </div>
        
      </div>
    </nav>
    <!-- navbar 2 -->
    <!-- nav-bar-area-start -->
  \t<nav class=\"navbar navbar-expand-lg navbar-light   bg-light sizenav\">
      <div class=\"container-fluid\">
    
        <!-- ====================nav-left-site==================== -->
        <a class=\"navbar-brand\" href=\"{{path('home')}}\"><img src=\"/coustumcss/images/Renoshopbee.png\"></a>
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
    
        <!-- ====================nav-middle-site==================== -->
      <div class=\"collapse navbar-collapse bg-light\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav m-auto fontheaderp bg\">
          <li class=\"nav-item\">
            <a class=\"nav-link fontheaderp\" href=\"{{path('home')}}\">HOME</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link fontheaderp\" href=\"{{path('contact')}}\">Contact</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link fontheaderp\" href=\"{{path('about')}}\">About</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link fontheaderp\" href=\"{{path('products')}}\">products</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link fontheaderp\" href=\"{{path('offre')}}\">Offre</a>
          </li>
            
\t\t  
        </ul>
       
        <!-- ====================nav-right-site==================== -->
        <ul class=\"navbar-nav  my-2 my-lg-0\" >
          {% if app.session %}
           <div class=\"icon-badge-container\">
         <a href=\"{{path('panier')}}\" title=\"panier\" class=\"\"><i class=\"fas fa-shopping-cart black icon-badge-icon\"></i></a>
        {% if app.session.get('count') > 0 %}
         <span class=\"icon-badge\">{{app.session.get('count')}}</span>
          {% endif %}
          </div>
           {% else %}
          <a href=\"{{path('panier')}}\" title=\"panier\" class=\"\"><i class=\"fas fa-shopping-cart black\"></i></a>
          {% endif %}
           
          <form action=\"{{path('products')}}\" class=\"searchbar\" method=\"post\">
          <input class=\"search_input\" type=\"text\" name=\"categorie\" placeholder=\"Search by categories...\">
         
           <label for=\"mySubmit\" class=\"\"><i class=\"fas fa-search black\"></i></label>
          <input type=\"submit\" id=\"mySubmit\" class=\"search_icon hidden btn\" name=\"btn\">
          </form>
  <div>

{% if is_granted('ROLE_SUPERADMIN') or is_granted('ROLE_ADMIN') %}
          
     <a class=\"\" title=\"dashboard\" href=\"{{path('easyadmin')}}\"><i class=\"fas fa-user black\"></i></a>
          
\t\t  {% endif %}

\t\t  {% if not is_granted('IS_AUTHENTICATED_FULLY') %} 
         
   <a class=\"\" title=\"connecter\" href=\"{{path('app_login')}}\"><i class=\"fas fa-sign-in-alt black\"></i></a>
          
\t\t  {% else %} 
\t\t  
  <a class=\"\" title=\"deconnecter\" href=\"{{path('app_logout')}}\"><i class=\"fas fa-sign-out-alt black\"></i></a>
          
\t\t  {% endif %}
       </div>   
          {# <a href=\"#\" class=\"\"><i class=\"fas fa-bars black\"></i></a> #}
        </ul>

        
      </div>
      </div>
      
    </nav>
\t\t
</header>
 
          {% block body %}
          
          {% endblock %}
        </div>  
     
\t\t <footer>
  <section >
    
      
     <div class=\"card\">   
    <div class=\"card-header \">
      <nav class=\"navbar container\">
        
        <div class=\"navfooter \">

          <span class=\"cardfoot\">We’re confident we’ve provided all the best for you. Stay connect with us</span>
            
          </div>
          <div class=\"btn-group float-right navfooter\">
            <a href=\"#\" class=\"cardfoot\"><i class=\"fab fa-facebook-f\"></i></a>
            <a href=\"#\" class=\"cardfoot\"><i class=\"fab fa-twitter\"></i></a>
            <a href=\"#\" class=\"cardfoot\"><i class=\"fab fa-instagram\"></i></a>
            <a href=\"#\" class=\"cardfoot\"><i class=\"fab fa-linkedin-in\"></i></a>
            <a href=\"#\" class=\"cardfoot\"><i class=\"fab fa-behance\"></i></a>
            </div>
          </nav>
    </div>
    <div class=\"card-body  text-center container align-items-center py-5\">
      
      <div class=\"row text-left\">
        <div class=\"col-md-3\">
          <h4>INFORMATION</h4>
          <ul class=\"list-unstyled mt-3\">
              <li><a href=\"#\" class=\"cardfoot\">Delivery Information</a></li>
              <div class=\"mb-2\"></div>
              <li><a href=\"#\" class=\"cardfoot\">Discount</a></li>
              <div class=\"mb-2\"></div>
              <li><a href=\"#\" class=\"cardfoot\">Sitemap</a></li>
              <div class=\"mb-2\"></div>
              <li><a href=\"#\" class=\"cardfoot\">Privacy Policy</a></li>
              <div class=\"mb-2\"></div>
              <li><a href=\"#\" class=\"cardfoot\">My account</a></li>
          </ul>
      </div>
      <div class=\"col-md-3\">
        <h4>MY ACCOUNT</h4>
        <ul class=\"list-unstyled mt-3\">
            <li><a href=\"#\" class=\"cardfoot\">About Us</a></li>
            <div class=\"mb-2\"></div>
            <li><a href=\"#\" class=\"cardfoot\">Contact Us</a></li>
            <div class=\"mb-2\"></div>
            <li><a href=\"#\" class=\"cardfoot\">Our Team</a></li>
            <div class=\"mb-2\"></div>
            <li><a href=\"#\" class=\"cardfoot\">Testimonials</a></li>
            <div class=\"mb-2\"></div>
              <li><a href=\"#\" class=\"cardfoot\">My account</a></li>
        </ul>
    </div><div class=\"col-md-3\">
      <h4>HELP</h4>
      <ul class=\"list-unstyled mt-3\">
          <li><a href=\"#\" class=\"cardfoot\">About Us</a></li>
          <div class=\"mb-2\"></div>
          <li><a href=\"#\" class=\"cardfoot\">Contact Us</a></li>
          <div class=\"mb-2\"></div>
          <li><a href=\"#\" class=\"cardfoot\">Our Team</a></li>
          <div class=\"mb-2\"></div>
          <li><a href=\"#\" class=\"cardfoot\">Testimonials</a></li>
        
      </ul>
  </div><div class=\"col-md-3\">
    <h4>CONTACT INFO</h4>
    <ul class=\"list-unstyled mt-3\">
        <li><a href=\"#\" class=\"cardfoot\"><i class=\"fas fa-globe-americas\"></i>1234 Your Adress,Country.</a></li>
        <div class=\"mb-2\"></div>
        <li><a href=\"#\" class=\"cardfoot\"><i class=\"fas fa-phone-alt\"></i>+1 234 5678 9999</a></li>
        <div class=\"mb-2\"></div>
        <li><a href=\"#\" class=\"cardfoot text-success\"><i class=\"fas fa-envelope cardfoot\"></i>mail@domain.com</a></li>
     
    </ul>
</div>
      </div>
      
      
    </div>
  </div>

    <nav class=\"navbar navbar-fixed-bottom navbar-dark dark-bar \">
     
      <div class=\"container\">
      <div class=\"navfooter\">

        <span class=\"size1head \">Copyright 2017 RenoshopBee all right reserved - Design by BeeStudios</span>
\t\t\t\t\t
\t\t\t\t</div>
      <div class=\"btn-group pull-right \">
        <img class=\"m-1\" src=\"/coustumcss/images/visa5.png\">
        <img class=\"m-1\" src=\"/coustumcss/images/amazon3.png\">
        <img class=\"m-1\" src=\"/coustumcss/images/card34.png\">
        <img class=\"m-1\" src=\"/coustumcss/images/maestro1.png\">
        <img class=\"m-1\" src=\"/coustumcss/images/paypal11.png\">
      
        </div>
        
    </div>
    </nav>
  </section>
</footer>
      {% block javascripts %}
 <script src=\"https://kit.fontawesome.com/yourcode.js\"></script>
    <script
      src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\"
      integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\"
      crossorigin=\"anonymous\"
    ></script>
    <script
      src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\"
      integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\"
      crossorigin=\"anonymous\"
    ></script>
    <script
      src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\"
      integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\"
      crossorigin=\"anonymous\"
    ></script>
      
    {% endblock %}  
</html>
", "base.html.twig", "C:\\Users\\AYOUB\\Desktop\\projet_symfony_finale\\symfony_project_2\\templates\\base.html.twig");
    }
}
