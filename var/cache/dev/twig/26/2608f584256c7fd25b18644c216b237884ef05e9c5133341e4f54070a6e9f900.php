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

/* @EasyAdmin/page/login.html.twig */
class __TwigTemplate_caf5ec4ff9e6ac09b187b9aaa2ed370eb8434e1928e8d6b4cb332016fc440e89 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body_class' => [$this, 'block_body_class'],
            'wrapper_wrapper' => [$this, 'block_wrapper_wrapper'],
            'header_logo' => [$this, 'block_header_logo'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return $this->loadTemplate($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.templates.layout"), "@EasyAdmin/page/login.html.twig", 2);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/page/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/page/login.html.twig"));

        // line 1
        $context["__internal_d1035f8ca020a5d77fd638958fbf56b393357d8316ace0686239d131f9249fc7"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("translation_domain");
        // line 2
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        echo "page-login";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_wrapper_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "wrapper_wrapper"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "wrapper_wrapper"));

        // line 7
        echo "    ";
        $context["_username_label"] = (((isset($context["username_label"]) || array_key_exists("username_label", $context))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["username_label"]) || array_key_exists("username_label", $context) ? $context["username_label"] : (function () { throw new RuntimeError('Variable "username_label" does not exist.', 7, $this->source); })()), [],         // line 1
(isset($context["__internal_d1035f8ca020a5d77fd638958fbf56b393357d8316ace0686239d131f9249fc7"]) || array_key_exists("__internal_d1035f8ca020a5d77fd638958fbf56b393357d8316ace0686239d131f9249fc7", $context) ? $context["__internal_d1035f8ca020a5d77fd638958fbf56b393357d8316ace0686239d131f9249fc7"] : (function () { throw new RuntimeError('Variable "__internal_d1035f8ca020a5d77fd638958fbf56b393357d8316ace0686239d131f9249fc7" does not exist.', 1, $this->source); })()))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login.username", [], "EasyAdminBundle")));
        // line 8
        echo "    ";
        $context["_password_label"] = (((isset($context["password_label"]) || array_key_exists("password_label", $context))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["password_label"]) || array_key_exists("password_label", $context) ? $context["password_label"] : (function () { throw new RuntimeError('Variable "password_label" does not exist.', 8, $this->source); })()), [],         // line 1
(isset($context["__internal_d1035f8ca020a5d77fd638958fbf56b393357d8316ace0686239d131f9249fc7"]) || array_key_exists("__internal_d1035f8ca020a5d77fd638958fbf56b393357d8316ace0686239d131f9249fc7", $context) ? $context["__internal_d1035f8ca020a5d77fd638958fbf56b393357d8316ace0686239d131f9249fc7"] : (function () { throw new RuntimeError('Variable "__internal_d1035f8ca020a5d77fd638958fbf56b393357d8316ace0686239d131f9249fc7" does not exist.', 1, $this->source); })()))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login.password", [], "EasyAdminBundle")));
        // line 9
        echo "    ";
        $context["_sign_in_label"] = (((isset($context["sign_in_label"]) || array_key_exists("sign_in_label", $context))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["sign_in_label"]) || array_key_exists("sign_in_label", $context) ? $context["sign_in_label"] : (function () { throw new RuntimeError('Variable "sign_in_label" does not exist.', 9, $this->source); })()), [],         // line 1
(isset($context["__internal_d1035f8ca020a5d77fd638958fbf56b393357d8316ace0686239d131f9249fc7"]) || array_key_exists("__internal_d1035f8ca020a5d77fd638958fbf56b393357d8316ace0686239d131f9249fc7", $context) ? $context["__internal_d1035f8ca020a5d77fd638958fbf56b393357d8316ace0686239d131f9249fc7"] : (function () { throw new RuntimeError('Variable "__internal_d1035f8ca020a5d77fd638958fbf56b393357d8316ace0686239d131f9249fc7" does not exist.', 1, $this->source); })()))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login.sign_in", [], "EasyAdminBundle")));
        // line 10
        echo "
    <div class=\"login-wrapper\">
        <header class=\"main-header mb-4\">
            <div id=\"header-logo\">
                ";
        // line 14
        $this->displayBlock('header_logo', $context, $blocks);
        // line 19
        echo "            </div>
        </header>

        ";
        // line 22
        if ((((isset($context["error"]) || array_key_exists("error", $context))) ? (_twig_default_filter((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 22, $this->source); })()), false)) : (false))) {
            // line 23
            echo "            <div class=\"w-100 alert alert-danger\">
                ";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 24, $this->source); })()), "messageKey", [], "any", false, false, false, 24), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 24, $this->source); })()), "messageData", [], "any", false, false, false, 24), "security"), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 27
        echo "
        <section class=\"content\">
            <form method=\"post\" action=\"";
        // line 29
        echo twig_escape_filter($this->env, (((isset($context["action"]) || array_key_exists("action", $context))) ? (_twig_default_filter((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 29, $this->source); })()), "")) : ("")), "html", null, true);
        echo "\">
                ";
        // line 30
        if ((((isset($context["csrf_token_intention"]) || array_key_exists("csrf_token_intention", $context))) ? (_twig_default_filter((isset($context["csrf_token_intention"]) || array_key_exists("csrf_token_intention", $context) ? $context["csrf_token_intention"] : (function () { throw new RuntimeError('Variable "csrf_token_intention" does not exist.', 30, $this->source); })()), false)) : (false))) {
            // line 31
            echo "                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken((isset($context["csrf_token_intention"]) || array_key_exists("csrf_token_intention", $context) ? $context["csrf_token_intention"] : (function () { throw new RuntimeError('Variable "csrf_token_intention" does not exist.', 31, $this->source); })())), "html", null, true);
            echo "\">
                ";
        }
        // line 33
        echo "
                <input type=\"hidden\" name=\"";
        // line 34
        echo twig_escape_filter($this->env, (((isset($context["target_path_parameter"]) || array_key_exists("target_path_parameter", $context))) ? (_twig_default_filter((isset($context["target_path_parameter"]) || array_key_exists("target_path_parameter", $context) ? $context["target_path_parameter"] : (function () { throw new RuntimeError('Variable "target_path_parameter" does not exist.', 34, $this->source); })()), "_target_path")) : ("_target_path")), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (((isset($context["target_path"]) || array_key_exists("target_path", $context))) ? (_twig_default_filter((isset($context["target_path"]) || array_key_exists("target_path", $context) ? $context["target_path"] : (function () { throw new RuntimeError('Variable "target_path" does not exist.', 34, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin"))), "html", null, true);
        echo "\" />

                <div class=\"form-group field-text\">
                    <label for=\"username\" class=\"sr-only form-control-label required\">";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["_username_label"]) || array_key_exists("_username_label", $context) ? $context["_username_label"] : (function () { throw new RuntimeError('Variable "_username_label" does not exist.', 37, $this->source); })()), "html", null, true);
        echo "</label>
                    <div class=\"form-widget form-widget-with-icon\">
                        <i class=\"fa fa-fw fa-user\"></i>
                        <input type=\"text\" id=\"username\" name=\"";
        // line 40
        echo twig_escape_filter($this->env, (((isset($context["username_parameter"]) || array_key_exists("username_parameter", $context))) ? (_twig_default_filter((isset($context["username_parameter"]) || array_key_exists("username_parameter", $context) ? $context["username_parameter"] : (function () { throw new RuntimeError('Variable "username_parameter" does not exist.', 40, $this->source); })()), "_username")) : ("_username")), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"";
        echo twig_escape_filter($this->env, (isset($context["_username_label"]) || array_key_exists("_username_label", $context) ? $context["_username_label"] : (function () { throw new RuntimeError('Variable "_username_label" does not exist.', 40, $this->source); })()), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (((isset($context["last_username"]) || array_key_exists("last_username", $context))) ? (_twig_default_filter((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 40, $this->source); })()), "")) : ("")), "html", null, true);
        echo "\" required autofocus>
                    </div>
                </div>

                <div class=\"form-group field-password\">
                    <label for=\"password\" class=\"sr-only form-control-label required\">";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["_password_label"]) || array_key_exists("_password_label", $context) ? $context["_password_label"] : (function () { throw new RuntimeError('Variable "_password_label" does not exist.', 45, $this->source); })()), "html", null, true);
        echo "</label>
                    <div class=\"form-widget form-widget-with-icon\">
                        <i class=\"fa fa-fw fa-lock\"></i>
                        <input type=\"password\" id=\"password\" name=\"";
        // line 48
        echo twig_escape_filter($this->env, (((isset($context["password_parameter"]) || array_key_exists("password_parameter", $context))) ? (_twig_default_filter((isset($context["password_parameter"]) || array_key_exists("password_parameter", $context) ? $context["password_parameter"] : (function () { throw new RuntimeError('Variable "password_parameter" does not exist.', 48, $this->source); })()), "_password")) : ("_password")), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"";
        echo twig_escape_filter($this->env, (isset($context["_password_label"]) || array_key_exists("_password_label", $context) ? $context["_password_label"] : (function () { throw new RuntimeError('Variable "_password_label" does not exist.', 48, $this->source); })()), "html", null, true);
        echo "\" required>
                    </div>
                </div>

                <div class=\"form-group field-button\">
                    <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\" onclick=\"this.form.submit(); this.disabled=true;\">";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["_sign_in_label"]) || array_key_exists("_sign_in_label", $context) ? $context["_sign_in_label"] : (function () { throw new RuntimeError('Variable "_sign_in_label" does not exist.', 53, $this->source); })()), "html", null, true);
        echo "</button>
                </div>
            </form>
        </section>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_header_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_logo"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_logo"));

        // line 15
        echo "                    <a class=\"logo ";
        echo ((1 === twig_compare(twig_length_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("site_name")), 14)) ? ("logo-long") : (""));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, strip_tags($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("site_name")), "html", null, true);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin");
        echo "\">
                        ";
        // line 16
        echo $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("site_name");
        echo "
                    </a>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/page/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 16,  214 => 15,  204 => 14,  188 => 53,  178 => 48,  172 => 45,  160 => 40,  154 => 37,  146 => 34,  143 => 33,  137 => 31,  135 => 30,  131 => 29,  127 => 27,  121 => 24,  118 => 23,  116 => 22,  111 => 19,  109 => 14,  103 => 10,  101 => 1,  99 => 9,  97 => 1,  95 => 8,  93 => 1,  91 => 7,  81 => 6,  62 => 4,  52 => 2,  50 => 1,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% trans_default_domain easyadmin_config('translation_domain') %}
{% extends easyadmin_config('design.templates.layout') %}

{% block body_class 'page-login' %}

{% block wrapper_wrapper %}
    {% set _username_label = username_label is defined ? username_label|trans : 'login.username'|trans({}, 'EasyAdminBundle') %}
    {% set _password_label = password_label is defined ? password_label|trans : 'login.password'|trans({}, 'EasyAdminBundle') %}
    {% set _sign_in_label = sign_in_label is defined ? sign_in_label|trans : 'login.sign_in'|trans({}, 'EasyAdminBundle') %}

    <div class=\"login-wrapper\">
        <header class=\"main-header mb-4\">
            <div id=\"header-logo\">
                {% block header_logo %}
                    <a class=\"logo {{ easyadmin_config('site_name')|length > 14 ? 'logo-long' }}\" title=\"{{ easyadmin_config('site_name')|striptags }}\" href=\"{{ path('easyadmin') }}\">
                        {{ easyadmin_config('site_name')|raw }}
                    </a>
                {% endblock header_logo %}
            </div>
        </header>

        {% if error|default(false) %}
            <div class=\"w-100 alert alert-danger\">
                {{ error.messageKey|trans(error.messageData, 'security') }}
            </div>
        {% endif %}

        <section class=\"content\">
            <form method=\"post\" action=\"{{ action|default('') }}\">
                {% if csrf_token_intention|default(false) %}
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token(csrf_token_intention) }}\">
                {% endif %}

                <input type=\"hidden\" name=\"{{ target_path_parameter|default('_target_path') }}\" value=\"{{ target_path|default(path('easyadmin')) }}\" />

                <div class=\"form-group field-text\">
                    <label for=\"username\" class=\"sr-only form-control-label required\">{{ _username_label }}</label>
                    <div class=\"form-widget form-widget-with-icon\">
                        <i class=\"fa fa-fw fa-user\"></i>
                        <input type=\"text\" id=\"username\" name=\"{{ username_parameter|default('_username') }}\" class=\"form-control\" placeholder=\"{{ _username_label }}\" value=\"{{ last_username|default('') }}\" required autofocus>
                    </div>
                </div>

                <div class=\"form-group field-password\">
                    <label for=\"password\" class=\"sr-only form-control-label required\">{{ _password_label }}</label>
                    <div class=\"form-widget form-widget-with-icon\">
                        <i class=\"fa fa-fw fa-lock\"></i>
                        <input type=\"password\" id=\"password\" name=\"{{ password_parameter|default('_password') }}\" class=\"form-control\" placeholder=\"{{ _password_label }}\" required>
                    </div>
                </div>

                <div class=\"form-group field-button\">
                    <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\" onclick=\"this.form.submit(); this.disabled=true;\">{{ _sign_in_label }}</button>
                </div>
            </form>
        </section>
    </div>
{% endblock %}
", "@EasyAdmin/page/login.html.twig", "C:\\Users\\AYOUB\\Desktop\\projet_symfony_finale\\symfony_project_2\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\page\\login.html.twig");
    }
}
