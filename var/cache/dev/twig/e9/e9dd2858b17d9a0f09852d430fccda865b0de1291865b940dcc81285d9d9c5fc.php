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

/* home/index.html.twig */
class __TwigTemplate_4e1626163e42e334f6741089744ee393b26c2ccc9945e8aeef0619f5a95de72c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "

  <!-- Home-slider  -->
    <section class=\"pt-5 pb-5 mt-0 align-items-center d-flex bg-dark bgsec1\"  >

      <div id=\"carouselExampleIndicators\" class=\"carousel slide carousel-fade container\" data-ride=\"carousel\">
      
        <div class=\"carousel-inner row\">
          
              
          <div class=\"carousel-item active col-lg-6 gauche\">
              
            <div class=\"col-lg-12 gauche carousel_caption\">
              <h2 class=\"headsize\"><span class=\"headgr\">THE BEST</span><br><span class=\"colorprima\">WOOCEMERCE</span></h2>
              <p class=\"headgr\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
               eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
               <div class=\"\">
               <a class=\"btn a2\" href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("products");
        echo "\">BUY NOW!</a>
             </div>
              </div>
      
               </div>
               <div class=\"carousel-item col-lg-6 gauche\">
              
                <div class=\"col-lg-12 gauche carousel_caption\">
                  <h2 class=\"headsize\"><span class=\"headgr\">THE BEST</span><br><span class=\"colorprima\">WOOCEMERCE</span></h2>
                  <p class=\"headgr\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                   eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                   <div class=\"\">
                   <a class=\"btn  a2\" href=\"products\">BUY NOW!</a>
                 </div>
                  </div>
          
                   </div>
        </div>
      </div>
       
     </div> 
    </section>
    <!-- end Home-slider -->

    <!-- Home-Best seller --> 
    <section class=\"container-fluid no-gutters\">
      


        <div class=\"row  justify-content-center p-5\">
          
          <div class=\"col-md-3 col-sm-6 align-self-center p-5 m-3\">
            <h2 class=\"font-weight-bold \">FEATURED PRODUCTS</h2>
            <p><small class=\"font-italic colorprima\">best production from us</small></p>
          
            
            <p>Lorem ipsum, dolor sit amet consectetur 
              adipisicing elit. Nobis, facilis ipsam </p>
             
          </div>
            ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["bestar"]) || array_key_exists("bestar", $context) ? $context["bestar"] : (function () { throw new RuntimeError('Variable "bestar" does not exist.', 62, $this->source); })()), 0, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 63
            echo "            <div class=\"col-md-2 col-sm-6\">
                <div class=\"product-grid7\">
                    <div class=\"product-image7\">
                        <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "getId", [], "method", false, false, false, 66)]), "html", null, true);
            echo "\">
                            <img class=\"pic-1\" src=\"";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getPhotoPath", [], "method", false, false, false, 67), "html", null, true);
            echo "\">
                        </a>
                        <ul class=\"social\">
                            ";
            // line 71
            echo "                           <span class=\"badge badge-success\">New</span>
                            <li><a href=\"\" class=\"fas fa-heart\"></a></li>
                            <li><a href=\"\" class=\"fas fa-retweet\"></a></li>
                        </ul>
                    </div>
                    <div class=\"product-content\">
                        <h3 class=\"title\"><a href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "getId", [], "method", false, false, false, 77)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getNomArticle", [], "method", false, false, false, 77), "html", null, true);
            echo "</a></h3>
                        <div class=\"price\">";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getPrixArticle", [], "method", false, false, false, 78), "html", null, true);
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
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "            

        
            
                </div>
        
    
    



    </section>
    <!-- end best seller -->
    <!-- section card with icon -->
    <section class=\"container-fluid\">
      <div class=\"row text-center p-5\">
         <div class=\"col-md-3\">
           <img src=\"coustumcss/images/diamond.png\">
           
           <p class=\"font-weight-bold\"><br>SPECIAL OFFERS<br>
            <small class=\"font-weight-light font-size-11\">Shop big save big</small></p>
        </div>

        <div class=\"col-md-3\">
          <img src=\"coustumcss/images/plane.png\">
          
          <p class=\"font-weight-bold\"><br>FREE DELIVERY<br>
           <small class=\"font-weight-light font-size-11\">On orders Above 599</small></p>
       </div>

       <div class=\"col-md-3\">
        <img src=\"coustumcss/images/share.png\">
        
        <p class=\"font-weight-bold\"><br>30 DAYS RETURN<br>
         <small class=\"font-weight-light font-size-11\">Policy we offers</small></p>
     </div>

     <div class=\"col-md-3\">
      <img src=\"coustumcss/images/rocket.png\">
      
      <p class=\"font-weight-bold\"><br>FASTEST SHIPPING<br>
       <small class=\"font-weight-light font-size-11\">2 Days Express</small></p>
   </div>

      </div>
    </section>
<!-- end card with icons -->
<!-- 3images  -->
    <section class=\"\">
            <div class=\"row no-gutters\">
              <div class=\"col-md-4 parent\">
                <img src=\"coustumcss/images/bg.png\" class=\"w-100 \" alt=\"\">
               
              </div>
              <div class=\"col-md-4 parent\">
                <img src=\"coustumcss/images/bg-1.png\" class=\"w-100\" alt=\"\">
                
              </div>
              <div class=\"col-md-4 parent\">
                <img src=\"coustumcss/images/bg-2.png\" class=\"w-100\" alt=\"\">
                
              </div>
            </div>
    </section>
<!-- end 3images -->
<!-- featured products -->
    <section class=\"p-5\">

      <h3 class=\"text-center font-weight-bold\">PRODUCTS<br>
        <small class=\"font-weight-lighter font-italic colorprima font-size-15\">Newest trends top brands</small></h3>
      ";
        // line 162
        if ((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 162, $this->source); })())) {
            // line 163
            echo "            <!-- first row -->
        <div class=\"row  justify-content-center \">
         
          ";
            // line 166
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 166, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 167
                echo "          
            <div class=\"col-md-2 col-sm-6\">
                <div class=\"product-grid7\">
                    <div class=\"product-image7\">
                       <a href=\"";
                // line 171
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "getId", [], "method", false, false, false, 171)]), "html", null, true);
                echo "\">
                            <img class=\"pic-1\" src=\"";
                // line 172
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getPhotoPath", [], "method", false, false, false, 172), "html", null, true);
                echo "\">
                        </a>
                        <ul class=\"social\">
                           ";
                // line 176
                echo "                            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AddPanier", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 176)]), "html", null, true);
                echo "\" class=\"fa fa-shopping-cart\"></a></li>
                            <li><a href=\"\" class=\"fas fa-heart\"></a></li>
                            <li><a href=\"\" class=\"fas fa-retweet\"></a></li>
                        </ul>
                    </div>
                    <div class=\"product-content\">
                              <h3 class=\"title\"><a href=\"";
                // line 182
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "getId", [], "method", false, false, false, 182)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getNomArticle", [], "method", false, false, false, 182), "html", null, true);
                echo "</a></h3>
                        <div class=\"price\">";
                // line 183
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getPrixArticle", [], "method", false, false, false, 183), "html", null, true);
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
                </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 197
            echo "        </div>
               ";
        } else {
            // line 198
            echo " 
    <p>Aucun articles trouveé </p>
  ";
        }
        // line 200
        echo " 
    ";
        // line 201
        if ((isset($context["paginations"]) || array_key_exists("paginations", $context) ? $context["paginations"] : (function () { throw new RuntimeError('Variable "paginations" does not exist.', 201, $this->source); })())) {
            echo "  
            <div class=\"d-flex justify-content-center\">";
            // line 202
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 202, $this->source); })()));
            echo "</div> 
   ";
        }
        // line 204
        echo "
    </section>
    <section>
     <div class=\"row no-gutters text-center\">
       <div class=\"col-md-6 \">
         <img src=\"coustumcss/images/bg3.png\" class=\"w-100\" alt=\"\">
         <div class=\"centered my-auto\">
         <p class=\"font-weight-bold font-size-21\">Get Out Special Discount<br>
           <small class=\"font-size-12\">Donec eu tristique felis. Duis augue mi, auctor ut purus et, dignissim aliquet quam. 
          register your email for news and specialeu tristique felis. Duis augue mi</small></p>
          <div class=\"input-group\">
            <input type=\"text\"  class=\"form-control\" placeholder=\"Email address...\" aria-label=\"Email address...\" aria-describedby=\"button-addon2\">
            <div class=\"input-group-append\">
              <button class=\"btn btn-outline-success ml-2\" type=\"button\" id=\"button-addon2\">GET COUPON NOW</button>
            </div>
          </div>
          </div>
       </div> 
       <div class=\"col-md-6 my-auto\">
         <img src=\"coustumcss/images/brand-logo-4a.png\" class=\"mr-4 imgsize\" alt=\"\">
         <img src=\"coustumcss/images/brand-logo-1a.png\" class=\"mr-4 imgsize\" alt=\"\">
         <img src=\"coustumcss/images/brand-logo-2a.png\" class=\"mr-4 imgsize\" alt=\"\">
         <img src=\"coustumcss/images/brand-logo-3a.png\" class=\"imgsize\" alt=\"\">
      </div>
     </div>


    </section>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  359 => 204,  354 => 202,  350 => 201,  347 => 200,  342 => 198,  338 => 197,  318 => 183,  312 => 182,  302 => 176,  296 => 172,  292 => 171,  286 => 167,  282 => 166,  277 => 163,  275 => 162,  203 => 92,  183 => 78,  177 => 77,  169 => 71,  163 => 67,  159 => 66,  154 => 63,  150 => 62,  107 => 22,  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title%}Home{% endblock %}

{% block body %}


  <!-- Home-slider  -->
    <section class=\"pt-5 pb-5 mt-0 align-items-center d-flex bg-dark bgsec1\"  >

      <div id=\"carouselExampleIndicators\" class=\"carousel slide carousel-fade container\" data-ride=\"carousel\">
      
        <div class=\"carousel-inner row\">
          
              
          <div class=\"carousel-item active col-lg-6 gauche\">
              
            <div class=\"col-lg-12 gauche carousel_caption\">
              <h2 class=\"headsize\"><span class=\"headgr\">THE BEST</span><br><span class=\"colorprima\">WOOCEMERCE</span></h2>
              <p class=\"headgr\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
               eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
               <div class=\"\">
               <a class=\"btn a2\" href=\"{{path('products')}}\">BUY NOW!</a>
             </div>
              </div>
      
               </div>
               <div class=\"carousel-item col-lg-6 gauche\">
              
                <div class=\"col-lg-12 gauche carousel_caption\">
                  <h2 class=\"headsize\"><span class=\"headgr\">THE BEST</span><br><span class=\"colorprima\">WOOCEMERCE</span></h2>
                  <p class=\"headgr\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                   eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                   <div class=\"\">
                   <a class=\"btn  a2\" href=\"products\">BUY NOW!</a>
                 </div>
                  </div>
          
                   </div>
        </div>
      </div>
       
     </div> 
    </section>
    <!-- end Home-slider -->

    <!-- Home-Best seller --> 
    <section class=\"container-fluid no-gutters\">
      


        <div class=\"row  justify-content-center p-5\">
          
          <div class=\"col-md-3 col-sm-6 align-self-center p-5 m-3\">
            <h2 class=\"font-weight-bold \">FEATURED PRODUCTS</h2>
            <p><small class=\"font-italic colorprima\">best production from us</small></p>
          
            
            <p>Lorem ipsum, dolor sit amet consectetur 
              adipisicing elit. Nobis, facilis ipsam </p>
             
          </div>
            {% for article in bestar|slice(0, 4) %}
            <div class=\"col-md-2 col-sm-6\">
                <div class=\"product-grid7\">
                    <div class=\"product-image7\">
                        <a href=\"{{path('detail',{'id': article.getId()})}}\">
                            <img class=\"pic-1\" src=\"{{article.getPhotoPath()}}\">
                        </a>
                        <ul class=\"social\">
                            {# <li><a href=\"{{path('AddPanier',{'id': article.id})}}\" class=\"fa fa-shopping-cart\"></a></li> #}
                           <span class=\"badge badge-success\">New</span>
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
                </div>
            </div>
            {% endfor %}
            

        
            
                </div>
        
    
    



    </section>
    <!-- end best seller -->
    <!-- section card with icon -->
    <section class=\"container-fluid\">
      <div class=\"row text-center p-5\">
         <div class=\"col-md-3\">
           <img src=\"coustumcss/images/diamond.png\">
           
           <p class=\"font-weight-bold\"><br>SPECIAL OFFERS<br>
            <small class=\"font-weight-light font-size-11\">Shop big save big</small></p>
        </div>

        <div class=\"col-md-3\">
          <img src=\"coustumcss/images/plane.png\">
          
          <p class=\"font-weight-bold\"><br>FREE DELIVERY<br>
           <small class=\"font-weight-light font-size-11\">On orders Above 599</small></p>
       </div>

       <div class=\"col-md-3\">
        <img src=\"coustumcss/images/share.png\">
        
        <p class=\"font-weight-bold\"><br>30 DAYS RETURN<br>
         <small class=\"font-weight-light font-size-11\">Policy we offers</small></p>
     </div>

     <div class=\"col-md-3\">
      <img src=\"coustumcss/images/rocket.png\">
      
      <p class=\"font-weight-bold\"><br>FASTEST SHIPPING<br>
       <small class=\"font-weight-light font-size-11\">2 Days Express</small></p>
   </div>

      </div>
    </section>
<!-- end card with icons -->
<!-- 3images  -->
    <section class=\"\">
            <div class=\"row no-gutters\">
              <div class=\"col-md-4 parent\">
                <img src=\"coustumcss/images/bg.png\" class=\"w-100 \" alt=\"\">
               
              </div>
              <div class=\"col-md-4 parent\">
                <img src=\"coustumcss/images/bg-1.png\" class=\"w-100\" alt=\"\">
                
              </div>
              <div class=\"col-md-4 parent\">
                <img src=\"coustumcss/images/bg-2.png\" class=\"w-100\" alt=\"\">
                
              </div>
            </div>
    </section>
<!-- end 3images -->
<!-- featured products -->
    <section class=\"p-5\">

      <h3 class=\"text-center font-weight-bold\">PRODUCTS<br>
        <small class=\"font-weight-lighter font-italic colorprima font-size-15\">Newest trends top brands</small></h3>
      {% if articles %}
            <!-- first row -->
        <div class=\"row  justify-content-center \">
         
          {% for article in articles %}
          
            <div class=\"col-md-2 col-sm-6\">
                <div class=\"product-grid7\">
                    <div class=\"product-image7\">
                       <a href=\"{{path('detail',{'id': article.getId()})}}\">
                            <img class=\"pic-1\" src=\"{{article.getPhotoPath()}}\">
                        </a>
                        <ul class=\"social\">
                           {#  <li><a href=\"{{path('AddPanier',{'id': article.id})}}\" class=\"fa fa-shopping-cart\"></a></li> #}
                            <li><a href=\"{{path('AddPanier',{'id': article.id})}}\" class=\"fa fa-shopping-cart\"></a></li>
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
                </div>
            </div>
            {% endfor %}
        </div>
               {% else %} 
    <p>Aucun articles trouveé </p>
  {% endif %} 
    {% if(paginations) %}  
            <div class=\"d-flex justify-content-center\">{{knp_pagination_render(articles)}}</div> 
   {% endif %}

    </section>
    <section>
     <div class=\"row no-gutters text-center\">
       <div class=\"col-md-6 \">
         <img src=\"coustumcss/images/bg3.png\" class=\"w-100\" alt=\"\">
         <div class=\"centered my-auto\">
         <p class=\"font-weight-bold font-size-21\">Get Out Special Discount<br>
           <small class=\"font-size-12\">Donec eu tristique felis. Duis augue mi, auctor ut purus et, dignissim aliquet quam. 
          register your email for news and specialeu tristique felis. Duis augue mi</small></p>
          <div class=\"input-group\">
            <input type=\"text\"  class=\"form-control\" placeholder=\"Email address...\" aria-label=\"Email address...\" aria-describedby=\"button-addon2\">
            <div class=\"input-group-append\">
              <button class=\"btn btn-outline-success ml-2\" type=\"button\" id=\"button-addon2\">GET COUPON NOW</button>
            </div>
          </div>
          </div>
       </div> 
       <div class=\"col-md-6 my-auto\">
         <img src=\"coustumcss/images/brand-logo-4a.png\" class=\"mr-4 imgsize\" alt=\"\">
         <img src=\"coustumcss/images/brand-logo-1a.png\" class=\"mr-4 imgsize\" alt=\"\">
         <img src=\"coustumcss/images/brand-logo-2a.png\" class=\"mr-4 imgsize\" alt=\"\">
         <img src=\"coustumcss/images/brand-logo-3a.png\" class=\"imgsize\" alt=\"\">
      </div>
     </div>


    </section>


{% endblock %}

 

", "home/index.html.twig", "C:\\Users\\AYOUB\\Desktop\\projet_symfony_finale\\symfony_project_2\\templates\\home\\index.html.twig");
    }
}
