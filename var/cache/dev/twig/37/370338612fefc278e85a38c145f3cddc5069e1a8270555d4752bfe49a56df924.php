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

/* @EasyAdmin/default/list.html.twig */
class __TwigTemplate_04b8cd0680afac005ba0205bff40a45bc70c02dab7fcfc097ae48f4bb47f1f3c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body_id' => [$this, 'block_body_id'],
            'body_class' => [$this, 'block_body_class'],
            'content_title' => [$this, 'block_content_title'],
            'global_actions' => [$this, 'block_global_actions'],
            'search_action' => [$this, 'block_search_action'],
            'search_form' => [$this, 'block_search_form'],
            'filters_action' => [$this, 'block_filters_action'],
            'new_action' => [$this, 'block_new_action'],
            'batch_actions' => [$this, 'block_batch_actions'],
            'content_header' => [$this, 'block_content_header'],
            'main' => [$this, 'block_main'],
            'table_head' => [$this, 'block_table_head'],
            'table_body' => [$this, 'block_table_body'],
            'item_actions' => [$this, 'block_item_actions'],
            'delete_form' => [$this, 'block_delete_form'],
            'content_footer' => [$this, 'block_content_footer'],
            'paginator' => [$this, 'block_paginator'],
            'body_javascript' => [$this, 'block_body_javascript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 5
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 5, $this->source); })()), "templates", [], "any", false, false, false, 5), "layout", [], "any", false, false, false, 5), "@EasyAdmin/default/list.html.twig", 5);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/default/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/default/list.html.twig"));

        // line 1
        $context["_entity_config"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getEntityConfiguration(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "request", [], "any", false, false, false, 1), "query", [], "any", false, false, false, 1), "get", [0 => "entity"], "method", false, false, false, 1));
        // line 2
        $context["__internal_c4c1956a976172526c3ef373a0d4b22838c18a56e0c98c8c6c31562095b96cfe"] = twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 2, $this->source); })()), "translation_domain", [], "any", false, false, false, 2);
        // line 3
        $context["_trans_parameters"] = ["%entity_name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), [],         // line 2
(isset($context["__internal_c4c1956a976172526c3ef373a0d4b22838c18a56e0c98c8c6c31562095b96cfe"]) || array_key_exists("__internal_c4c1956a976172526c3ef373a0d4b22838c18a56e0c98c8c6c31562095b96cfe", $context) ? $context["__internal_c4c1956a976172526c3ef373a0d4b22838c18a56e0c98c8c6c31562095b96cfe"] : (function () { throw new RuntimeError('Variable "__internal_c4c1956a976172526c3ef373a0d4b22838c18a56e0c98c8c6c31562095b96cfe" does not exist.', 2, $this->source); })())), "%entity_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source,         // line 3
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 3, $this->source); })()), "label", [], "any", false, false, false, 3), [],         // line 2
(isset($context["__internal_c4c1956a976172526c3ef373a0d4b22838c18a56e0c98c8c6c31562095b96cfe"]) || array_key_exists("__internal_c4c1956a976172526c3ef373a0d4b22838c18a56e0c98c8c6c31562095b96cfe", $context) ? $context["__internal_c4c1956a976172526c3ef373a0d4b22838c18a56e0c98c8c6c31562095b96cfe"] : (function () { throw new RuntimeError('Variable "__internal_c4c1956a976172526c3ef373a0d4b22838c18a56e0c98c8c6c31562095b96cfe" does not exist.', 2, $this->source); })()))];
        // line 7
        $context["_request_parameters"] = twig_array_merge(twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "request", [], "any", false, false, false, 7), "query", [], "any", false, false, false, 7), "all", [], "any", false, false, false, 7), (((isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context))) ? (_twig_default_filter((isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new RuntimeError('Variable "_request_parameters" does not exist.', 7, $this->source); })()), [])) : ([]))), ["action" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 8
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "request", [], "any", false, false, false, 8), "get", [0 => "action"], "method", false, false, false, 8), "entity" => twig_get_attribute($this->env, $this->source,         // line 9
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 9, $this->source); })()), "name", [], "any", false, false, false, 9), "menuIndex" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 10
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "request", [], "any", false, false, false, 10), "get", [0 => "menuIndex"], "method", false, false, false, 10), "submenuIndex" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 11
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "request", [], "any", false, false, false, 11), "get", [0 => "submenuIndex"], "method", false, false, false, 11), "sortField" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 12
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "request", [], "any", false, false, false, 12), "get", [0 => "sortField"], "method", false, false, false, 12), "sortDirection" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 13
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "request", [], "any", false, false, false, 13), "get", [0 => "sortDirection"], "method", false, false, false, 13), "page" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 14
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "request", [], "any", false, false, false, 14), "get", [0 => "page", 1 => 1], "method", false, false, false, 14), "filters" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 15
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "request", [], "any", false, false, false, 15), "get", [0 => "filters", 1 => []], "method", false, false, false, 15), "referer" => null]);
        // line 19
        if (0 === twig_compare("search", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "request", [], "any", false, false, false, 19), "get", [0 => "action"], "method", false, false, false, 19))) {
            // line 20
            $context["_request_parameters"] = twig_array_merge((isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new RuntimeError('Variable "_request_parameters" does not exist.', 20, $this->source); })()), ["query" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 21
($context["app"] ?? null), "request", [], "any", false, true, false, 21), "get", [0 => "query"], "method", true, true, false, 21)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 21), "get", [0 => "query"], "method", false, false, false, 21), "")) : (""))]);
        }
        // line 25
        $context["_request_parameters"] = twig_array_merge((isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new RuntimeError('Variable "_request_parameters" does not exist.', 25, $this->source); })()), ["referer" => twig_urlencode_filter($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", (isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new RuntimeError('Variable "_request_parameters" does not exist.', 25, $this->source); })())))]);
        // line 26
        $context["_has_batch_actions"] = ((isset($context["batch_form"]) || array_key_exists("batch_form", $context)) && 1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["batch_form"]) || array_key_exists("batch_form", $context) ? $context["batch_form"] : (function () { throw new RuntimeError('Variable "batch_form" does not exist.', 26, $this->source); })()), "vars", [], "any", false, false, false, 26), "batch_actions", [], "any", false, false, false, 26)), 0));
        // line 27
        $context["_has_filters"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "list", [], "any", false, true, false, 27), "filters", [], "any", true, true, false, 27)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "list", [], "any", false, true, false, 27), "filters", [], "any", false, false, false, 27), false)) : (false));
        // line 5
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 29
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-list-" . twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 29, $this->source); })()), "name", [], "any", false, false, false, 29)), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 30
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("list list-" . twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 30, $this->source); })()), "name", [], "any", false, false, false, 30))), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 32
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_title"));

        // line 33
        echo "    ";
        ob_start();
        // line 34
        echo "        ";
        if (0 === twig_compare("search", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "request", [], "any", false, false, false, 34), "get", [0 => "action"], "method", false, false, false, 34))) {
            // line 35
            echo "            ";
            $context["_default_title"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->transchoice("search.page_title", twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 35, $this->source); })()), "nbResults", [], "any", false, false, false, 35), [], "EasyAdminBundle");
            // line 36
            echo "            ";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "search", [], "any", false, true, false, 36), "title", [], "any", true, true, false, 36)) ? ($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->transchoice(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 36, $this->source); })()), "search", [], "any", false, false, false, 36), "title", [], "any", false, false, false, 36), twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 36, $this->source); })()), "nbResults", [], "any", false, false, false, 36), [],             // line 2
(isset($context["__internal_c4c1956a976172526c3ef373a0d4b22838c18a56e0c98c8c6c31562095b96cfe"]) || array_key_exists("__internal_c4c1956a976172526c3ef373a0d4b22838c18a56e0c98c8c6c31562095b96cfe", $context) ? $context["__internal_c4c1956a976172526c3ef373a0d4b22838c18a56e0c98c8c6c31562095b96cfe"] : (function () { throw new RuntimeError('Variable "__internal_c4c1956a976172526c3ef373a0d4b22838c18a56e0c98c8c6c31562095b96cfe" does not exist.', 2, $this->source); })()))) : (            // line 36
(isset($context["_default_title"]) || array_key_exists("_default_title", $context) ? $context["_default_title"] : (function () { throw new RuntimeError('Variable "_default_title" does not exist.', 36, $this->source); })())));
            echo "
        ";
        } else {
            // line 38
            echo "            ";
            $context["_default_title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("list.page_title", (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new RuntimeError('Variable "_trans_parameters" does not exist.', 38, $this->source); })()), "EasyAdminBundle");
            // line 39
            echo "            ";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "list", [], "any", false, true, false, 39), "title", [], "any", true, true, false, 39)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 39, $this->source); })()), "list", [], "any", false, false, false, 39), "title", [], "any", false, false, false, 39), (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new RuntimeError('Variable "_trans_parameters" does not exist.', 39, $this->source); })()),             // line 2
(isset($context["__internal_c4c1956a976172526c3ef373a0d4b22838c18a56e0c98c8c6c31562095b96cfe"]) || array_key_exists("__internal_c4c1956a976172526c3ef373a0d4b22838c18a56e0c98c8c6c31562095b96cfe", $context) ? $context["__internal_c4c1956a976172526c3ef373a0d4b22838c18a56e0c98c8c6c31562095b96cfe"] : (function () { throw new RuntimeError('Variable "__internal_c4c1956a976172526c3ef373a0d4b22838c18a56e0c98c8c6c31562095b96cfe" does not exist.', 2, $this->source); })()))) : (            // line 39
(isset($context["_default_title"]) || array_key_exists("_default_title", $context) ? $context["_default_title"] : (function () { throw new RuntimeError('Variable "_default_title" does not exist.', 39, $this->source); })())));
            echo "
        ";
        }
        // line 41
        echo "    ";
        $___internal_6f6b739bcbdf4ca234c388aa0a6820fa13aa88e4991a88b6a4df9ff7a2e05aa8_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 33
        echo twig_spaceless($___internal_6f6b739bcbdf4ca234c388aa0a6820fa13aa88e4991a88b6a4df9ff7a2e05aa8_);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 44
    public function block_global_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "global_actions"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "global_actions"));

        // line 45
        echo "    ";
        if ($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->isActionEnabled("list", "search", twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 45, $this->source); })()), "name", [], "any", false, false, false, 45))) {
            // line 46
            echo "        ";
            $context["_action"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getActionConfiguration("list", "search", twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 46, $this->source); })()), "name", [], "any", false, false, false, 46));
            // line 47
            echo "
        ";
            // line 48
            $this->displayBlock('search_action', $context, $blocks);
            // line 80
            echo "    ";
        }
        // line 81
        echo "
    ";
        // line 82
        if ((isset($context["_has_filters"]) || array_key_exists("_has_filters", $context) ? $context["_has_filters"] : (function () { throw new RuntimeError('Variable "_has_filters" does not exist.', 82, $this->source); })())) {
            // line 83
            echo "        ";
            $context["_applied_filters"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 83), "attributes", [], "any", false, true, false, 83), "get", [0 => "easyadmin"], "method", false, true, false, 83), "filters", [], "any", false, true, false, 83), "applied", [], "any", true, true, false, 83)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 83), "attributes", [], "any", false, true, false, 83), "get", [0 => "easyadmin"], "method", false, true, false, 83), "filters", [], "any", false, true, false, 83), "applied", [], "any", false, false, false, 83), false)) : (false));
            // line 84
            echo "        ";
            $this->displayBlock('filters_action', $context, $blocks);
            // line 96
            echo "    ";
        }
        // line 97
        echo "
    ";
        // line 98
        if ($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->isActionEnabled("list", "new", twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 98, $this->source); })()), "name", [], "any", false, false, false, 98))) {
            // line 99
            echo "        ";
            $context["_action"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getActionConfiguration("list", "new", twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 99, $this->source); })()), "name", [], "any", false, false, false, 99));
            // line 100
            echo "        ";
            $this->displayBlock('new_action', $context, $blocks);
            // line 108
            echo "    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 48
    public function block_search_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search_action"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search_action"));

        // line 49
        echo "            <div class=\"form-action form-action-search ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "css_class", [], "any", true, true, false, 49)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "css_class", [], "any", false, false, false, 49), "")) : ("")), "html", null, true);
        echo "\">
                <form method=\"get\" action=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin");
        echo "\">
                    ";
        // line 51
        $this->displayBlock('search_form', $context, $blocks);
        // line 77
        echo "                </form>
            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 51
    public function block_search_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search_form"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search_form"));

        // line 52
        echo "                        <input type=\"hidden\" name=\"action\" value=\"search\">
                        <input type=\"hidden\" name=\"entity\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new RuntimeError('Variable "_request_parameters" does not exist.', 53, $this->source); })()), "entity", [], "any", false, false, false, 53), "html", null, true);
        echo "\">
                        ";
        // line 60
        echo "                        ";
        if (twig_in_filter("sortField", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "request", [], "any", false, false, false, 60), "uri", [], "any", false, false, false, 60))) {
            // line 61
            echo "                            <input type=\"hidden\" name=\"sortField\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new RuntimeError('Variable "_request_parameters" does not exist.', 61, $this->source); })()), "sortField", [], "any", false, false, false, 61), "html", null, true);
            echo "\">
                        ";
        }
        // line 63
        echo "                        ";
        if (twig_in_filter("sortDirection", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "request", [], "any", false, false, false, 63), "uri", [], "any", false, false, false, 63))) {
            // line 64
            echo "                            <input type=\"hidden\" name=\"sortDirection\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new RuntimeError('Variable "_request_parameters" does not exist.', 64, $this->source); })()), "sortDirection", [], "any", false, false, false, 64), "html", null, true);
            echo "\">
                        ";
        }
        // line 66
        echo "                        <input type=\"hidden\" name=\"menuIndex\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new RuntimeError('Variable "_request_parameters" does not exist.', 66, $this->source); })()), "menuIndex", [], "any", false, false, false, 66), "html", null, true);
        echo "\">
                        <input type=\"hidden\" name=\"submenuIndex\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new RuntimeError('Variable "_request_parameters" does not exist.', 67, $this->source); })()), "submenuIndex", [], "any", false, false, false, 67), "html", null, true);
        echo "\">
                        ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getFormHiddenParams(twig_get_attribute($this->env, $this->source, (isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new RuntimeError('Variable "_request_parameters" does not exist.', 68, $this->source); })()), "filters", [], "any", false, false, false, 68), "filters"));
        foreach ($context['_seq'] as $context["name"] => $context["value"]) {
            // line 69
            echo "                        <input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\">
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                        <div class=\"form-group\">
                            <div class=\"form-widget\">
                                <input class=\"form-control\" type=\"search\" name=\"query\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 73), "get", [0 => "query"], "method", true, true, false, 73)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 73), "get", [0 => "query"], "method", false, false, false, 73), "")) : ("")), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "label", [], "any", true, true, false, 73)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "label", [], "any", false, false, false, 73), "action.search")) : ("action.search")), (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new RuntimeError('Variable "_trans_parameters" does not exist.', 73, $this->source); })()),         // line 2
(isset($context["__internal_c4c1956a976172526c3ef373a0d4b22838c18a56e0c98c8c6c31562095b96cfe"]) || array_key_exists("__internal_c4c1956a976172526c3ef373a0d4b22838c18a56e0c98c8c6c31562095b96cfe", $context) ? $context["__internal_c4c1956a976172526c3ef373a0d4b22838c18a56e0c98c8c6c31562095b96cfe"] : (function () { throw new RuntimeError('Variable "__internal_c4c1956a976172526c3ef373a0d4b22838c18a56e0c98c8c6c31562095b96cfe" does not exist.', 2, $this->source); })())), "html", null, true);
        // line 73
        echo "\">
                            </div>
                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 84
    public function block_filters_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "filters_action"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "filters_action"));

        // line 85
        echo "            <div class=\"btn-group action-filters\">
                <a href=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", twig_array_merge((isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new RuntimeError('Variable "_request_parameters" does not exist.', 86, $this->source); })()), ["action" => "filters", "referer_action" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 86, $this->source); })()), "request", [], "any", false, false, false, 86), "get", [0 => "action"], "method", false, false, false, 86)])), "html", null, true);
        echo "\" class=\"btn btn-secondary btn-labeled btn-labeled-right action-filters-button ";
        echo (((isset($context["_applied_filters"]) || array_key_exists("_applied_filters", $context) ? $context["_applied_filters"] : (function () { throw new RuntimeError('Variable "_applied_filters" does not exist.', 86, $this->source); })())) ? ("action-filters-applied") : (""));
        echo "\" data-modal=\"#modal-filters\">
                    <i class=\"fa fa-filter fa-fw\"></i> ";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filter.title", (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new RuntimeError('Variable "_trans_parameters" does not exist.', 87, $this->source); })()), "EasyAdminBundle"), "html", null, true);
        if ((isset($context["_applied_filters"]) || array_key_exists("_applied_filters", $context) ? $context["_applied_filters"] : (function () { throw new RuntimeError('Variable "_applied_filters" does not exist.', 87, $this->source); })())) {
            echo " <span class=\"text-primary\">(";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["_applied_filters"]) || array_key_exists("_applied_filters", $context) ? $context["_applied_filters"] : (function () { throw new RuntimeError('Variable "_applied_filters" does not exist.', 87, $this->source); })())), "html", null, true);
            echo ")</span>";
        }
        // line 88
        echo "                </a>
                ";
        // line 89
        if ((isset($context["_applied_filters"]) || array_key_exists("_applied_filters", $context) ? $context["_applied_filters"] : (function () { throw new RuntimeError('Variable "_applied_filters" does not exist.', 89, $this->source); })())) {
            // line 90
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", twig_array_merge((isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new RuntimeError('Variable "_request_parameters" does not exist.', 90, $this->source); })()), ["filters" => null])), "html", null, true);
            echo "\" class=\"btn btn-secondary action-filters-reset\">
                        <i class=\"fa fa-close\"></i>
                    </a>
                ";
        }
        // line 94
        echo "            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 100
    public function block_new_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "new_action"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "new_action"));

        // line 101
        echo "            <div class=\"button-action\">
                <a class=\"";
        // line 102
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "css_class", [], "any", true, true, false, 102)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "css_class", [], "any", false, false, false, 102), "")) : ("")), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", twig_array_merge((isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new RuntimeError('Variable "_request_parameters" does not exist.', 102, $this->source); })()), ["action" => twig_get_attribute($this->env, $this->source, (isset($context["_action"]) || array_key_exists("_action", $context) ? $context["_action"] : (function () { throw new RuntimeError('Variable "_action" does not exist.', 102, $this->source); })()), "name", [], "any", false, false, false, 102)])), "html", null, true);
        echo "\" target=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["_action"]) || array_key_exists("_action", $context) ? $context["_action"] : (function () { throw new RuntimeError('Variable "_action" does not exist.', 102, $this->source); })()), "target", [], "any", false, false, false, 102), "html", null, true);
        echo "\">
                    ";
        // line 103
        if (twig_get_attribute($this->env, $this->source, (isset($context["_action"]) || array_key_exists("_action", $context) ? $context["_action"] : (function () { throw new RuntimeError('Variable "_action" does not exist.', 103, $this->source); })()), "icon", [], "any", false, false, false, 103)) {
            echo "<i class=\"fa fa-fw fa-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["_action"]) || array_key_exists("_action", $context) ? $context["_action"] : (function () { throw new RuntimeError('Variable "_action" does not exist.', 103, $this->source); })()), "icon", [], "any", false, false, false, 103), "html", null, true);
            echo "\"></i>";
        }
        // line 104
        echo "                    ";
        (((twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "label", [], "any", true, true, false, 104) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["_action"]) || array_key_exists("_action", $context) ? $context["_action"] : (function () { throw new RuntimeError('Variable "_action" does not exist.', 104, $this->source); })()), "label", [], "any", false, false, false, 104)))) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["_action"]) || array_key_exists("_action", $context) ? $context["_action"] : (function () { throw new RuntimeError('Variable "_action" does not exist.', 104, $this->source); })()), "label", [], "any", false, false, false, 104), (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new RuntimeError('Variable "_trans_parameters" does not exist.', 104, $this->source); })()),         // line 2
(isset($context["__internal_c4c1956a976172526c3ef373a0d4b22838c18a56e0c98c8c6c31562095b96cfe"]) || array_key_exists("__internal_c4c1956a976172526c3ef373a0d4b22838c18a56e0c98c8c6c31562095b96cfe", $context) ? $context["__internal_c4c1956a976172526c3ef373a0d4b22838c18a56e0c98c8c6c31562095b96cfe"] : (function () { throw new RuntimeError('Variable "__internal_c4c1956a976172526c3ef373a0d4b22838c18a56e0c98c8c6c31562095b96cfe" does not exist.', 2, $this->source); })())), "html", null, true))) : (print ("")));
        // line 104
        echo "
                </a>
            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 111
    public function block_batch_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "batch_actions"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "batch_actions"));

        // line 112
        echo "    ";
        if ((isset($context["_has_batch_actions"]) || array_key_exists("_has_batch_actions", $context) ? $context["_has_batch_actions"] : (function () { throw new RuntimeError('Variable "_has_batch_actions" does not exist.', 112, $this->source); })())) {
            // line 113
            echo "        <div class=\"batch-actions\" style=\"display: none\">
            ";
            // line 114
            $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["batch_form"]) || array_key_exists("batch_form", $context) ? $context["batch_form"] : (function () { throw new RuntimeError('Variable "batch_form" does not exist.', 114, $this->source); })()), $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.form_theme"), false);
            // line 115
            echo "            ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["batch_form"]) || array_key_exists("batch_form", $context) ? $context["batch_form"] : (function () { throw new RuntimeError('Variable "batch_form" does not exist.', 115, $this->source); })()), 'form');
            echo "

            ";
            // line 117
            echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_batch_action_modal.html.twig", ["_translation_domain" => twig_get_attribute($this->env, $this->source,             // line 118
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 118, $this->source); })()), "translation_domain", [], "any", false, false, false, 118), "_trans_parameters" =>             // line 119
(isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new RuntimeError('Variable "_trans_parameters" does not exist.', 119, $this->source); })()), "_entity_config" =>             // line 120
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 120, $this->source); })())], false);
            // line 121
            echo "
        </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 126
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        // line 127
        echo "    ";
        $this->displayParentBlock("content_header", $context, $blocks);
        echo "
    ";
        // line 128
        $this->displayBlock("batch_actions", $context, $blocks);
        echo "
    ";
        // line 129
        if ((isset($context["_has_filters"]) || array_key_exists("_has_filters", $context) ? $context["_has_filters"] : (function () { throw new RuntimeError('Variable "_has_filters" does not exist.', 129, $this->source); })())) {
            // line 130
            echo "        ";
            echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_filters_modal.html.twig");
            echo "
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 134
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 135
        echo "    ";
        $context["_fields_visible_by_user"] = twig_array_filter((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 135, $this->source); })()), function ($__metadata__, $__field__) use ($context, $macros) { $context["metadata"] = $__metadata__; $context["field"] = $__field__; return $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->isGranted(twig_get_attribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 135, $this->source); })()), "permission", [], "any", false, false, false, 135)); });
        // line 136
        echo "    ";
        $context["_number_of_hidden_results"] = 0;
        // line 137
        echo "    ";
        $context["_list_item_actions"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getActionsForItem("list", twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 137, $this->source); })()), "name", [], "any", false, false, false, 137));
        // line 138
        echo "
    <table class=\"table datagrid\">
        <thead>
        ";
        // line 141
        $this->displayBlock('table_head', $context, $blocks);
        // line 171
        echo "        </thead>

        <tbody>
        ";
        // line 174
        $this->displayBlock('table_body', $context, $blocks);
        // line 233
        echo "        </tbody>
    </table>

    ";
        // line 236
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 141
    public function block_table_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_head"));

        // line 142
        echo "            <tr>
                ";
        // line 143
        if ((isset($context["_has_batch_actions"]) || array_key_exists("_has_batch_actions", $context) ? $context["_has_batch_actions"] : (function () { throw new RuntimeError('Variable "_has_batch_actions" does not exist.', 143, $this->source); })())) {
            // line 144
            echo "                    <th width=\"1px\"><span><input type=\"checkbox\" class=\"form-batch-checkbox-all\"></span></th>
                ";
        }
        // line 146
        echo "
                ";
        // line 147
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["_fields_visible_by_user"]) || array_key_exists("_fields_visible_by_user", $context) ? $context["_fields_visible_by_user"] : (function () { throw new RuntimeError('Variable "_fields_visible_by_user" does not exist.', 147, $this->source); })()));
        foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
            // line 148
            echo "                    ";
            $context["isSortingField"] = (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["metadata"], "property", [], "any", false, false, false, 148), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 148, $this->source); })()), "request", [], "any", false, false, false, 148), "get", [0 => "sortField"], "method", false, false, false, 148)) || (0 === twig_compare("association", twig_get_attribute($this->env, $this->source, $context["metadata"], "type", [], "any", false, false, false, 148)) && (is_string($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 148, $this->source); })()), "request", [], "any", false, false, false, 148), "get", [0 => "sortField"], "method", false, false, false, 148)) && is_string($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = (twig_get_attribute($this->env, $this->source, $context["metadata"], "property", [], "any", false, false, false, 148) . ".")) && ('' === $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 || 0 === strpos($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144)))));
            // line 149
            echo "                    ";
            $context["nextSortDirection"] = (((isset($context["isSortingField"]) || array_key_exists("isSortingField", $context) ? $context["isSortingField"] : (function () { throw new RuntimeError('Variable "isSortingField" does not exist.', 149, $this->source); })())) ? (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 149, $this->source); })()), "request", [], "any", false, false, false, 149), "get", [0 => "sortDirection"], "method", false, false, false, 149), "DESC")) ? ("ASC") : ("DESC"))) : ("DESC"));
            // line 150
            echo "                    ";
            $context["_column_label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["metadata"], "label", [], "any", false, false, false, 150), (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new RuntimeError('Variable "_trans_parameters" does not exist.', 150, $this->source); })()),             // line 2
(isset($context["__internal_c4c1956a976172526c3ef373a0d4b22838c18a56e0c98c8c6c31562095b96cfe"]) || array_key_exists("__internal_c4c1956a976172526c3ef373a0d4b22838c18a56e0c98c8c6c31562095b96cfe", $context) ? $context["__internal_c4c1956a976172526c3ef373a0d4b22838c18a56e0c98c8c6c31562095b96cfe"] : (function () { throw new RuntimeError('Variable "__internal_c4c1956a976172526c3ef373a0d4b22838c18a56e0c98c8c6c31562095b96cfe" does not exist.', 2, $this->source); })()));
            // line 151
            echo "                    ";
            $context["_column_icon"] = (((isset($context["isSortingField"]) || array_key_exists("isSortingField", $context) ? $context["isSortingField"] : (function () { throw new RuntimeError('Variable "isSortingField" does not exist.', 151, $this->source); })())) ? (((0 === twig_compare((isset($context["nextSortDirection"]) || array_key_exists("nextSortDirection", $context) ? $context["nextSortDirection"] : (function () { throw new RuntimeError('Variable "nextSortDirection" does not exist.', 151, $this->source); })()), "DESC")) ? ("fa-arrow-up") : ("fa-arrow-down"))) : ("fa-sort"));
            // line 152
            echo "
                    <th class=\"";
            // line 153
            echo (((isset($context["isSortingField"]) || array_key_exists("isSortingField", $context) ? $context["isSortingField"] : (function () { throw new RuntimeError('Variable "isSortingField" does not exist.', 153, $this->source); })())) ? ("sorted") : (""));
            echo " ";
            echo ((twig_get_attribute($this->env, $this->source, $context["metadata"], "virtual", [], "any", false, false, false, 153)) ? ("virtual") : (""));
            echo " ";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["metadata"], "dataType", [], "any", false, false, false, 153)), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["metadata"], "css_class", [], "any", false, false, false, 153), "html", null, true);
            echo "\" ";
            echo (($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.rtl")) ? ("dir=\"rtl\"") : (""));
            echo ">
                        ";
            // line 154
            if (twig_get_attribute($this->env, $this->source, $context["metadata"], "sortable", [], "any", false, false, false, 154)) {
                // line 155
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", twig_array_merge((isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new RuntimeError('Variable "_request_parameters" does not exist.', 155, $this->source); })()), ["page" => 1, "sortField" => twig_get_attribute($this->env, $this->source, $context["metadata"], "property", [], "any", false, false, false, 155), "sortDirection" => (isset($context["nextSortDirection"]) || array_key_exists("nextSortDirection", $context) ? $context["nextSortDirection"] : (function () { throw new RuntimeError('Variable "nextSortDirection" does not exist.', 155, $this->source); })())])), "html", null, true);
                echo "\">
                                ";
                // line 156
                echo (isset($context["_column_label"]) || array_key_exists("_column_label", $context) ? $context["_column_label"] : (function () { throw new RuntimeError('Variable "_column_label" does not exist.', 156, $this->source); })());
                echo " <i class=\"fa fa-fw ";
                echo twig_escape_filter($this->env, (isset($context["_column_icon"]) || array_key_exists("_column_icon", $context) ? $context["_column_icon"] : (function () { throw new RuntimeError('Variable "_column_icon" does not exist.', 156, $this->source); })()), "html", null, true);
                echo "\"></i>
                            </a>
                        ";
            } else {
                // line 159
                echo "                            <span>";
                echo (isset($context["_column_label"]) || array_key_exists("_column_label", $context) ? $context["_column_label"] : (function () { throw new RuntimeError('Variable "_column_label" does not exist.', 159, $this->source); })());
                echo "</span>
                        ";
            }
            // line 161
            echo "                    </th>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "
                ";
        // line 164
        if (1 === twig_compare(twig_length_filter($this->env, (isset($context["_list_item_actions"]) || array_key_exists("_list_item_actions", $context) ? $context["_list_item_actions"] : (function () { throw new RuntimeError('Variable "_list_item_actions" does not exist.', 164, $this->source); })())), 0)) {
            // line 165
            echo "                    <th ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 165, $this->source); })()), "list", [], "any", false, false, false, 165), "collapse_actions", [], "any", false, false, false, 165)) {
                echo "width=\"10px\"";
            }
            echo " ";
            echo (($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.rtl")) ? ("dir=\"rtl\"") : (""));
            echo ">
                        <span class=\"sr-only\">";
            // line 166
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("list.row_actions", (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new RuntimeError('Variable "_trans_parameters" does not exist.', 166, $this->source); })()), "EasyAdminBundle"), "html", null, true);
            echo "</span>
                    </th>
                ";
        }
        // line 169
        echo "            </tr>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 174
    public function block_table_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_body"));

        // line 175
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 175, $this->source); })()), "currentPageResults", [], "any", false, false, false, 175));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 176
            echo "                ";
            if ( !$this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->isGranted(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 176, $this->source); })()), "list", [], "any", false, false, false, 176), "item_permission", [], "any", false, false, false, 176), $context["item"])) {
                // line 177
                echo "                    ";
                $context["_number_of_hidden_results"] = ((isset($context["_number_of_hidden_results"]) || array_key_exists("_number_of_hidden_results", $context) ? $context["_number_of_hidden_results"] : (function () { throw new RuntimeError('Variable "_number_of_hidden_results" does not exist.', 177, $this->source); })()) + 1);
                // line 178
                echo "                ";
            } else {
                // line 179
                echo "                    ";
                // line 180
                echo "                    ";
                $context["_item_id"] = ("" . twig_get_attribute($this->env, $this->source, $context["item"], twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 180, $this->source); })()), "primary_key_field_name", [], "any", false, false, false, 180), [], "any", false, false, false, 180));
                // line 181
                echo "                    <tr data-id=\"";
                echo twig_escape_filter($this->env, (isset($context["_item_id"]) || array_key_exists("_item_id", $context) ? $context["_item_id"] : (function () { throw new RuntimeError('Variable "_item_id" does not exist.', 181, $this->source); })()), "html", null, true);
                echo "\">
                        ";
                // line 182
                if ((isset($context["_has_batch_actions"]) || array_key_exists("_has_batch_actions", $context) ? $context["_has_batch_actions"] : (function () { throw new RuntimeError('Variable "_has_batch_actions" does not exist.', 182, $this->source); })())) {
                    // line 183
                    echo "                            <td><input type=\"checkbox\" class=\"form-batch-checkbox\" value=\"";
                    echo twig_escape_filter($this->env, (isset($context["_item_id"]) || array_key_exists("_item_id", $context) ? $context["_item_id"] : (function () { throw new RuntimeError('Variable "_item_id" does not exist.', 183, $this->source); })()), "html", null, true);
                    echo "\"></td>
                        ";
                }
                // line 185
                echo "
                        ";
                // line 186
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["_fields_visible_by_user"]) || array_key_exists("_fields_visible_by_user", $context) ? $context["_fields_visible_by_user"] : (function () { throw new RuntimeError('Variable "_fields_visible_by_user" does not exist.', 186, $this->source); })()));
                foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
                    // line 187
                    echo "                            ";
                    $context["isSortingField"] = 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["metadata"], "property", [], "any", false, false, false, 187), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 187, $this->source); })()), "request", [], "any", false, false, false, 187), "get", [0 => "sortField"], "method", false, false, false, 187));
                    // line 188
                    echo "                            ";
                    $context["_column_label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, $context["metadata"], "label", [], "any", false, false, false, 188)) ? (twig_get_attribute($this->env, $this->source, $context["metadata"], "label", [], "any", false, false, false, 188)) : ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize($context["field"]))), (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new RuntimeError('Variable "_trans_parameters" does not exist.', 188, $this->source); })()),                     // line 2
(isset($context["__internal_c4c1956a976172526c3ef373a0d4b22838c18a56e0c98c8c6c31562095b96cfe"]) || array_key_exists("__internal_c4c1956a976172526c3ef373a0d4b22838c18a56e0c98c8c6c31562095b96cfe", $context) ? $context["__internal_c4c1956a976172526c3ef373a0d4b22838c18a56e0c98c8c6c31562095b96cfe"] : (function () { throw new RuntimeError('Variable "__internal_c4c1956a976172526c3ef373a0d4b22838c18a56e0c98c8c6c31562095b96cfe" does not exist.', 2, $this->source); })()));
                    // line 189
                    echo "
                            <td class=\"";
                    // line 190
                    echo (((isset($context["isSortingField"]) || array_key_exists("isSortingField", $context) ? $context["isSortingField"] : (function () { throw new RuntimeError('Variable "isSortingField" does not exist.', 190, $this->source); })())) ? ("sorted") : (""));
                    echo " ";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["metadata"], "dataType", [], "any", false, false, false, 190)), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["metadata"], "css_class", [], "any", false, false, false, 190), "html", null, true);
                    echo "\" ";
                    echo (($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.rtl")) ? ("dir=\"rtl\"") : (""));
                    echo ">
                                ";
                    // line 191
                    echo $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->renderEntityField($this->env, "list", twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 191, $this->source); })()), "name", [], "any", false, false, false, 191), $context["item"], $context["metadata"]);
                    echo "
                            </td>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 194
                echo "
                        ";
                // line 195
                if (1 === twig_compare(twig_length_filter($this->env, (isset($context["_list_item_actions"]) || array_key_exists("_list_item_actions", $context) ? $context["_list_item_actions"] : (function () { throw new RuntimeError('Variable "_list_item_actions" does not exist.', 195, $this->source); })())), 0)) {
                    // line 196
                    echo "                            ";
                    $context["_column_label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("list.row_actions", (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new RuntimeError('Variable "_trans_parameters" does not exist.', 196, $this->source); })()), "EasyAdminBundle");
                    // line 197
                    echo "                            <td class=\"actions\">
                                ";
                    // line 198
                    $this->displayBlock('item_actions', $context, $blocks);
                    // line 213
                    echo "                            </td>
                        ";
                }
                // line 215
                echo "                    </tr>
                ";
            }
            // line 217
            echo "            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 218
            echo "                <tr>
                    <td class=\"no-results\" colspan=\"";
            // line 219
            echo twig_escape_filter($this->env, (twig_length_filter($this->env, (isset($context["_fields_visible_by_user"]) || array_key_exists("_fields_visible_by_user", $context) ? $context["_fields_visible_by_user"] : (function () { throw new RuntimeError('Variable "_fields_visible_by_user" does not exist.', 219, $this->source); })())) + 1), "html", null, true);
            echo "\">
                        ";
            // line 220
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("search.no_results", (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new RuntimeError('Variable "_trans_parameters" does not exist.', 220, $this->source); })()), "EasyAdminBundle"), "html", null, true);
            echo "
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 224
        echo "
            ";
        // line 225
        if (1 === twig_compare((isset($context["_number_of_hidden_results"]) || array_key_exists("_number_of_hidden_results", $context) ? $context["_number_of_hidden_results"] : (function () { throw new RuntimeError('Variable "_number_of_hidden_results" does not exist.', 225, $this->source); })()), 0)) {
            // line 226
            echo "                <tr class=\"datagrid-row-empty\">
                    <td class=\"text-center\" colspan=\"";
            // line 227
            echo twig_escape_filter($this->env, (twig_length_filter($this->env, (isset($context["_fields_visible_by_user"]) || array_key_exists("_fields_visible_by_user", $context) ? $context["_fields_visible_by_user"] : (function () { throw new RuntimeError('Variable "_fields_visible_by_user" does not exist.', 227, $this->source); })())) + 1), "html", null, true);
            echo "\">
                        <span class=\"datagrid-row-empty-message\"><i class=\"fa fa-lock mr-1\"></i> ";
            // line 228
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.list.hidden_results", [], "EasyAdminBundle"), "html", null, true);
            echo "</span>
                    </td>
                </tr>
            ";
        }
        // line 232
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 198
    public function block_item_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "item_actions"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "item_actions"));

        // line 199
        echo "                                    ";
        $context["_actions_template"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 199, $this->source); })()), "list", [], "any", false, false, false, 199), "collapse_actions", [], "any", false, false, false, 199)) ? ("@EasyAdmin/default/includes/_actions_dropdown.html.twig") : ("@EasyAdmin/default/includes/_actions.html.twig"));
        // line 203
        echo "                                    ";
        echo twig_include($this->env, $context, (isset($context["_actions_template"]) || array_key_exists("_actions_template", $context) ? $context["_actions_template"] : (function () { throw new RuntimeError('Variable "_actions_template" does not exist.', 203, $this->source); })()), ["actions" =>         // line 204
(isset($context["_list_item_actions"]) || array_key_exists("_list_item_actions", $context) ? $context["_list_item_actions"] : (function () { throw new RuntimeError('Variable "_list_item_actions" does not exist.', 204, $this->source); })()), "entity_config" =>         // line 205
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 205, $this->source); })()), "request_parameters" =>         // line 206
(isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new RuntimeError('Variable "_request_parameters" does not exist.', 206, $this->source); })()), "translation_domain" => twig_get_attribute($this->env, $this->source,         // line 207
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 207, $this->source); })()), "translation_domain", [], "any", false, false, false, 207), "trans_parameters" =>         // line 208
(isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new RuntimeError('Variable "_trans_parameters" does not exist.', 208, $this->source); })()), "item_id" =>         // line 209
(isset($context["_item_id"]) || array_key_exists("_item_id", $context) ? $context["_item_id"] : (function () { throw new RuntimeError('Variable "_item_id" does not exist.', 209, $this->source); })()), "item" =>         // line 210
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 210, $this->source); })())], false);
        // line 211
        echo "
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 236
    public function block_delete_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "delete_form"));

        // line 237
        echo "        ";
        $context["referer"] = ((((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 237, $this->source); })()), "currentPage", [], "any", false, false, false, 237), twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 237, $this->source); })()), "nbPages", [], "any", false, false, false, 237)) && 0 !== twig_compare(1, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 237, $this->source); })()), "currentPage", [], "any", false, false, false, 237))) && 0 === twig_compare(1, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 237, $this->source); })()), "currentPageResults", [], "any", false, false, false, 237))))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 238
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 238, $this->source); })()), "request", [], "any", false, false, false, 238), "query", [], "any", false, false, false, 238), ["page" => (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 238, $this->source); })()), "request", [], "any", false, false, false, 238), "query", [], "any", false, false, false, 238), "get", [0 => "page"], "method", false, false, false, 238) - 1)]))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 239
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 239, $this->source); })()), "request", [], "any", false, false, false, 239), "requestUri", [], "any", false, false, false, 239)));
        // line 241
        echo "
        ";
        // line 242
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", ["view" => "list", "referer" =>         // line 244
(isset($context["referer"]) || array_key_exists("referer", $context) ? $context["referer"] : (function () { throw new RuntimeError('Variable "referer" does not exist.', 244, $this->source); })()), "delete_form" =>         // line 245
(isset($context["delete_form_template"]) || array_key_exists("delete_form_template", $context) ? $context["delete_form_template"] : (function () { throw new RuntimeError('Variable "delete_form_template" does not exist.', 245, $this->source); })()), "_translation_domain" => twig_get_attribute($this->env, $this->source,         // line 246
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 246, $this->source); })()), "translation_domain", [], "any", false, false, false, 246), "_trans_parameters" =>         // line 247
(isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new RuntimeError('Variable "_trans_parameters" does not exist.', 247, $this->source); })()), "_entity_config" =>         // line 248
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 248, $this->source); })())], false);
        // line 249
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 253
    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        // line 254
        echo "    ";
        $this->displayBlock('paginator', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_paginator($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "paginator"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "paginator"));

        // line 255
        echo "        ";
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 255, $this->source); })()), "templates", [], "any", false, false, false, 255), "paginator", [], "any", false, false, false, 255));
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 259
    public function block_body_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 260
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            const toggles = document.querySelectorAll('.checkbox-switch input[type=\"checkbox\"]');
            for (i = 0; i < toggles.length; i++) {
                toggles[i].addEventListener('change', function () {
                    const toggle = this;
                    const newValue = this.checked;
                    const oldValue = !newValue;
                    const propertyName = this.closest('.checkbox-switch').dataset.propertyname;

                    const toggleUrl = \"";
        // line 272
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", ["action" => "edit", "entity" => twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 272, $this->source); })()), "name", [], "any", false, false, false, 272), "view" => "list"]);
        echo "\"
                        + \"&id=\" + this.closest('tr').dataset.id
                        + \"&property=\" + propertyName
                        + \"&newValue=\" + newValue.toString();

                    let toggleRequest = \$.ajax({ type: \"GET\", url: toggleUrl, data: {} });

                    toggleRequest.done(function(result) {});

                    toggleRequest.fail(function() {
                        // in case of error, restore the original value and disable the toggle
                        toggle.checked = oldValue;
                        toggle.disabled = true;
                        toggle.closest('.checkbox-switch').classList.add('disabled');
                    });
                });
            }

            \$('.action-delete').on('click', function(e) {
                e.preventDefault();
                const id = \$(this).parents('tr').first().data('id');

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        let deleteForm = \$('#delete-form');
                        deleteForm.attr('action', deleteForm.attr('action').replace('__id__', id));
                        deleteForm.trigger('submit');
                    });
            });

            ";
        // line 303
        if ((isset($context["_has_filters"]) || array_key_exists("_has_filters", $context) ? $context["_has_filters"] : (function () { throw new RuntimeError('Variable "_has_filters" does not exist.', 303, $this->source); })())) {
            // line 304
            echo "            // HTML5 specifies that a <script> tag inserted with innerHTML should not execute
            // https://developer.mozilla.org/en-US/docs/Web/API/Element/innerHTML#Security_considerations
            // That's why we can't use just 'innerHTML'. See https://stackoverflow.com/a/47614491/2804294
            var setInnerHTML = function(element, htmlContent) {
                element.innerHTML = htmlContent;
                Array.from(element.querySelectorAll('script')).forEach( oldScript => {
                    const newScript = document.createElement('script');
                    Array.from(oldScript.attributes)
                        .forEach(attr => newScript.setAttribute(attr.name, attr.value));
                    newScript.appendChild(document.createTextNode(oldScript.innerHTML));
                    oldScript.parentNode.replaceChild(newScript, oldScript);
                });
            };

            document.querySelector('.action-filters-button').addEventListener('click', function(event) {
                let filterButton = event.currentTarget;
                let filterModal = document.querySelector(filterButton.dataset.modal);
                let filterModalBody = filterModal.querySelector('.modal-body');

                \$(filterModal).modal({ backdrop: true, keyboard: true });
                filterModalBody.innerHTML = '<div class=\"fa-3x px-3 py-3 text-muted text-center\"><i class=\"fas fa-circle-notch fa-spin\"></i></div>';

                \$.get(filterButton.getAttribute('href'), function (response) {
                    setInnerHTML(filterModalBody, response);
                });

                event.preventDefault();
                event.stopPropagation();
            });
            ";
        }
        // line 334
        echo "
            ";
        // line 335
        if ((isset($context["_has_batch_actions"]) || array_key_exists("_has_batch_actions", $context) ? $context["_has_batch_actions"] : (function () { throw new RuntimeError('Variable "_has_batch_actions" does not exist.', 335, $this->source); })())) {
            // line 336
            echo "            const titleContent = \$('.content-header-title > .title').html();
            \$(document).on('click', '.deselect-batch-button', function () {
                \$(this).closest('.content').find(':checkbox.form-batch-checkbox-all').prop('checked', false).trigger('change');
            });
            \$(document).on('change', '.form-batch-checkbox-all', function () {
                \$(this).closest('.content').find(':checkbox.form-batch-checkbox').prop('checked', \$(this).prop('checked')).trigger('change');
            });
            \$(document).on('change', '.form-batch-checkbox', function () {
                const \$content = \$(this).closest('.content');
                let \$input = \$content.find(':hidden#batch_form_ids');
                let ids = \$input.val() ? \$input.val().split(',') : [];
                const id = \$(this).val();

                if (\$(this).prop('checked')) {
                    if (-1 === ids.indexOf(id)) {
                        ids.push(id);
                    }
                } else {
                    ids = ids.filter(function(value) { return value !== id });
                    \$content.find(':checkbox.form-batch-checkbox-all').prop('checked', false);
                }

                if (0 === ids.length) {
                    \$content.find('.global-actions').show();
                    \$content.find('.batch-actions').hide();
                    \$content.find('table').removeClass('table-batch');
                } else {
                    \$content.find('.batch-actions').show();
                    \$content.find('.global-actions').hide();
                    \$content.find('table').addClass('table-batch');
                }

                \$input.val(ids.join(','));
                \$content.find('.content-header-title > .title').html(0 === ids.length ? titleContent : '');
            });

            let modalTitle = \$('#batch-action-confirmation-title');
            const titleContentWithPlaceholders = modalTitle.text();
            \$('button[name=\"batch_form[name]\"].batch-action-requires-confirmation').on('click', function (event) {
                event.preventDefault();
                event.stopPropagation();
                let \$button = \$(this);

                const actionName = \$button.text();
                const numberOfSelectedItems = \$('input[type=\"checkbox\"].form-batch-checkbox:checked').length;
                modalTitle.text(titleContentWithPlaceholders
                    .replace('%action_name%', actionName)
                    .replace('%num_items%', numberOfSelectedItems));

                \$('#modal-batch-action').modal({ backdrop : true, keyboard : true })
                    .off('click', '#modal-batch-action-button')
                    .on('click', '#modal-batch-action-button', function () {
                        \$button.unbind('click');
                        \$button.trigger('click');

                        modalTitle.text(titleContentWithPlaceholders);
                    });
            });
            ";
        }
        // line 395
        echo "        });
    </script>

    ";
        // line 398
        if (0 === twig_compare("search", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 398, $this->source); })()), "request", [], "any", false, false, false, 398), "get", [0 => "action"], "method", false, false, false, 398))) {
            // line 399
            echo "        <script type=\"text/javascript\">
            const _search_query = \"";
            // line 400
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 400), "get", [0 => "query"], "method", true, true, false, 400)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 400), "get", [0 => "query"], "method", false, false, false, 400), "")) : ("")), "js"), "html", null, true);
            echo "\";
            // the original query is prepended to allow matching exact phrases in addition to single words
            \$('#main').find('table tbody td:not(.actions)').highlight(\$.merge([_search_query], _search_query.split(' ')));
        </script>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1156 => 400,  1153 => 399,  1151 => 398,  1146 => 395,  1085 => 336,  1083 => 335,  1080 => 334,  1048 => 304,  1046 => 303,  1012 => 272,  996 => 260,  986 => 259,  973 => 255,  953 => 254,  943 => 253,  932 => 249,  930 => 248,  929 => 247,  928 => 246,  927 => 245,  926 => 244,  925 => 242,  922 => 241,  920 => 239,  919 => 238,  917 => 237,  907 => 236,  896 => 211,  894 => 210,  893 => 209,  892 => 208,  891 => 207,  890 => 206,  889 => 205,  888 => 204,  886 => 203,  883 => 199,  873 => 198,  863 => 232,  856 => 228,  852 => 227,  849 => 226,  847 => 225,  844 => 224,  834 => 220,  830 => 219,  827 => 218,  814 => 217,  810 => 215,  806 => 213,  804 => 198,  801 => 197,  798 => 196,  796 => 195,  793 => 194,  784 => 191,  774 => 190,  771 => 189,  769 => 2,  767 => 188,  764 => 187,  760 => 186,  757 => 185,  751 => 183,  749 => 182,  744 => 181,  741 => 180,  739 => 179,  736 => 178,  733 => 177,  730 => 176,  711 => 175,  701 => 174,  690 => 169,  684 => 166,  675 => 165,  673 => 164,  670 => 163,  663 => 161,  657 => 159,  649 => 156,  644 => 155,  642 => 154,  630 => 153,  627 => 152,  624 => 151,  622 => 2,  620 => 150,  617 => 149,  614 => 148,  610 => 147,  607 => 146,  603 => 144,  601 => 143,  598 => 142,  588 => 141,  578 => 236,  573 => 233,  571 => 174,  566 => 171,  564 => 141,  559 => 138,  556 => 137,  553 => 136,  550 => 135,  540 => 134,  526 => 130,  524 => 129,  520 => 128,  515 => 127,  505 => 126,  492 => 121,  490 => 120,  489 => 119,  488 => 118,  487 => 117,  481 => 115,  479 => 114,  476 => 113,  473 => 112,  463 => 111,  450 => 104,  448 => 2,  446 => 104,  440 => 103,  432 => 102,  429 => 101,  419 => 100,  408 => 94,  400 => 90,  398 => 89,  395 => 88,  388 => 87,  382 => 86,  379 => 85,  369 => 84,  356 => 73,  354 => 2,  351 => 73,  347 => 71,  336 => 69,  332 => 68,  328 => 67,  323 => 66,  317 => 64,  314 => 63,  308 => 61,  305 => 60,  301 => 53,  298 => 52,  288 => 51,  276 => 77,  274 => 51,  270 => 50,  265 => 49,  255 => 48,  244 => 108,  241 => 100,  238 => 99,  236 => 98,  233 => 97,  230 => 96,  227 => 84,  224 => 83,  222 => 82,  219 => 81,  216 => 80,  214 => 48,  211 => 47,  208 => 46,  205 => 45,  195 => 44,  185 => 33,  182 => 41,  177 => 39,  176 => 2,  174 => 39,  171 => 38,  166 => 36,  165 => 2,  163 => 36,  160 => 35,  157 => 34,  154 => 33,  144 => 32,  125 => 30,  106 => 29,  96 => 5,  94 => 27,  92 => 26,  90 => 25,  87 => 21,  86 => 20,  84 => 19,  82 => 15,  81 => 14,  80 => 13,  79 => 12,  78 => 11,  77 => 10,  76 => 9,  75 => 8,  74 => 7,  72 => 2,  71 => 3,  70 => 2,  69 => 3,  67 => 2,  65 => 1,  52 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("{% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans } %}

{% extends _entity_config.templates.layout %}

{% set _request_parameters = app.request.query.all|merge(_request_parameters|default({}))|merge({
    action: app.request.get('action'),
    entity: _entity_config.name,
    menuIndex: app.request.get('menuIndex'),
    submenuIndex: app.request.get('submenuIndex'),
    sortField: app.request.get('sortField'),
    sortDirection: app.request.get('sortDirection'),
    page: app.request.get('page', 1),
    filters: app.request.get('filters', []),
    referer: null
}) %}

{% if 'search' == app.request.get('action') %}
    {% set _request_parameters = _request_parameters|merge({
        query: app.request.get('query')|default(''),
    }) %}
{% endif %}

{% set _request_parameters = _request_parameters|merge({ referer: path('easyadmin', _request_parameters)|url_encode }) %}
{% set _has_batch_actions = batch_form is defined and batch_form.vars.batch_actions|length > 0 %}
{% set _has_filters = _entity_config.list.filters|default(false) %}

{% block body_id 'easyadmin-list-' ~ _entity_config.name %}
{% block body_class 'list list-' ~ _entity_config.name|lower %}

{% block content_title %}
    {% apply spaceless %}
        {% if 'search' == app.request.get('action') %}
            {% set _default_title = 'search.page_title'|transchoice(paginator.nbResults, {}, 'EasyAdminBundle') %}
            {{ (_entity_config.search.title is defined ? _entity_config.search.title|transchoice(paginator.nbResults) : _default_title)|raw }}
        {% else %}
            {% set _default_title = 'list.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
            {{ (_entity_config.list.title is defined ? _entity_config.list.title|trans(_trans_parameters) : _default_title)|raw }}
        {% endif %}
    {% endapply %}
{% endblock %}

{% block global_actions %}
    {% if easyadmin_action_is_enabled_for_list_view('search', _entity_config.name) %}
        {% set _action = easyadmin_get_action_for_list_view('search', _entity_config.name) %}

        {% block search_action %}
            <div class=\"form-action form-action-search {{ _action.css_class|default('') }}\">
                <form method=\"get\" action=\"{{ path('easyadmin') }}\">
                    {% block search_form %}
                        <input type=\"hidden\" name=\"action\" value=\"search\">
                        <input type=\"hidden\" name=\"entity\" value=\"{{ _request_parameters.entity }}\">
                        {# if the Request query doesn't define 'sortField' and 'sortDirection', we add them in the
                           controller (but they don't appear in the request URI). When users click on a column to
                           sort results, 'sortField' and 'sortDirection' are added to the Request query and they
                            appear in the request URI too. So, checking if 'sortField' and 'sortDirection' is the
                            only way to differentiate between sorting made by user and sorting made by us. We only
                            need to persist the sorting if it's explicitly made by the user. #}
                        {% if 'sortField' in app.request.uri %}
                            <input type=\"hidden\" name=\"sortField\" value=\"{{ _request_parameters.sortField }}\">
                        {% endif %}
                        {% if 'sortDirection' in app.request.uri %}
                            <input type=\"hidden\" name=\"sortDirection\" value=\"{{ _request_parameters.sortDirection }}\">
                        {% endif %}
                        <input type=\"hidden\" name=\"menuIndex\" value=\"{{ _request_parameters.menuIndex }}\">
                        <input type=\"hidden\" name=\"submenuIndex\" value=\"{{ _request_parameters.submenuIndex }}\">
                        {% for name, value in _request_parameters.filters|easyadmin_form_hidden_params('filters') %}
                        <input type=\"hidden\" name=\"{{ name }}\" value=\"{{ value }}\">
                        {% endfor %}
                        <div class=\"form-group\">
                            <div class=\"form-widget\">
                                <input class=\"form-control\" type=\"search\" name=\"query\" value=\"{{ app.request.get('query')|default('') }}\" placeholder=\"{{ _action.label|default('action.search')|trans(_trans_parameters) }}\">
                            </div>
                        </div>
                    {% endblock %}
                </form>
            </div>
        {% endblock search_action %}
    {% endif %}

    {% if _has_filters %}
        {% set _applied_filters = app.request.attributes.get('easyadmin').filters.applied|default(false) %}
        {% block filters_action %}
            <div class=\"btn-group action-filters\">
                <a href=\"{{ path('easyadmin', _request_parameters|merge({ action: 'filters', referer_action: app.request.get('action') })) }}\" class=\"btn btn-secondary btn-labeled btn-labeled-right action-filters-button {{ _applied_filters ? 'action-filters-applied' }}\" data-modal=\"#modal-filters\">
                    <i class=\"fa fa-filter fa-fw\"></i> {{ 'filter.title'|trans(_trans_parameters, 'EasyAdminBundle') }}{% if _applied_filters %} <span class=\"text-primary\">({{ _applied_filters|length }})</span>{% endif %}
                </a>
                {% if _applied_filters %}
                    <a href=\"{{ path('easyadmin', _request_parameters|merge({ filters: null })) }}\" class=\"btn btn-secondary action-filters-reset\">
                        <i class=\"fa fa-close\"></i>
                    </a>
                {% endif %}
            </div>
        {% endblock filters_action %}
    {% endif %}

    {% if easyadmin_action_is_enabled_for_list_view('new', _entity_config.name) %}
        {% set _action = easyadmin_get_action_for_list_view('new', _entity_config.name) %}
        {% block new_action %}
            <div class=\"button-action\">
                <a class=\"{{ _action.css_class|default('') }}\" href=\"{{ path('easyadmin', _request_parameters|merge({ action: _action.name })) }}\" target=\"{{ _action.target }}\">
                    {% if _action.icon %}<i class=\"fa fa-fw fa-{{ _action.icon }}\"></i>{% endif %}
                    {{ _action.label is defined and not _action.label is empty ? _action.label|trans(_trans_parameters) }}
                </a>
            </div>
        {% endblock new_action %}
    {% endif %}
{% endblock global_actions %}

{% block batch_actions %}
    {% if _has_batch_actions %}
        <div class=\"batch-actions\" style=\"display: none\">
            {% form_theme batch_form with easyadmin_config('design.form_theme') only %}
            {{ form(batch_form) }}

            {{ include('@EasyAdmin/default/includes/_batch_action_modal.html.twig', {
                _translation_domain: _entity_config.translation_domain,
                _trans_parameters: _trans_parameters,
                _entity_config: _entity_config,
            }, with_context = false) }}
        </div>
    {% endif %}
{% endblock batch_actions %}

{% block content_header %}
    {{ parent() }}
    {{ block('batch_actions') }}
    {% if _has_filters %}
        {{ include('@EasyAdmin/default/includes/_filters_modal.html.twig') }}
    {% endif %}
{% endblock content_header %}

{% block main %}
    {% set _fields_visible_by_user = fields|filter((metadata, field) => easyadmin_is_granted(metadata.permission)) %}
    {% set _number_of_hidden_results = 0 %}
    {% set _list_item_actions = easyadmin_get_actions_for_list_item(_entity_config.name) %}

    <table class=\"table datagrid\">
        <thead>
        {% block table_head %}
            <tr>
                {% if _has_batch_actions %}
                    <th width=\"1px\"><span><input type=\"checkbox\" class=\"form-batch-checkbox-all\"></span></th>
                {% endif %}

                {% for field, metadata in _fields_visible_by_user %}
                    {% set isSortingField = (metadata.property == app.request.get('sortField')) or ('association' == metadata.type and app.request.get('sortField') starts with metadata.property ~ '.') %}
                    {% set nextSortDirection = isSortingField ? (app.request.get('sortDirection') == 'DESC' ? 'ASC' : 'DESC') : 'DESC' %}
                    {% set _column_label = metadata.label|trans(_trans_parameters) %}
                    {% set _column_icon = isSortingField ? (nextSortDirection == 'DESC' ? 'fa-arrow-up' : 'fa-arrow-down') : 'fa-sort' %}

                    <th class=\"{{ isSortingField ? 'sorted' }} {{ metadata.virtual ? 'virtual' }} {{ metadata.dataType|lower }} {{ metadata.css_class }}\" {{ easyadmin_config('design.rtl') ? 'dir=\"rtl\"' }}>
                        {% if metadata.sortable %}
                            <a href=\"{{ path('easyadmin', _request_parameters|merge({ page: 1, sortField: metadata.property, sortDirection: nextSortDirection })) }}\">
                                {{ _column_label|raw }} <i class=\"fa fa-fw {{ _column_icon }}\"></i>
                            </a>
                        {% else %}
                            <span>{{ _column_label|raw }}</span>
                        {% endif %}
                    </th>
                {% endfor %}

                {% if _list_item_actions|length > 0 %}
                    <th {% if _entity_config.list.collapse_actions %}width=\"10px\"{% endif %} {{ easyadmin_config('design.rtl') ? 'dir=\"rtl\"' }}>
                        <span class=\"sr-only\">{{ 'list.row_actions'|trans(_trans_parameters, 'EasyAdminBundle') }}</span>
                    </th>
                {% endif %}
            </tr>
        {% endblock table_head %}
        </thead>

        <tbody>
        {% block table_body %}
            {% for item in paginator.currentPageResults %}
                {% if not easyadmin_is_granted(_entity_config.list.item_permission, item) %}
                    {% set _number_of_hidden_results = _number_of_hidden_results + 1 %}
                {% else %}
                    {# the empty string concatenation is needed when the primary key is an object (e.g. an Uuid object) #}
                    {% set _item_id = '' ~ attribute(item, _entity_config.primary_key_field_name) %}
                    <tr data-id=\"{{ _item_id }}\">
                        {% if _has_batch_actions %}
                            <td><input type=\"checkbox\" class=\"form-batch-checkbox\" value=\"{{ _item_id }}\"></td>
                        {% endif %}

                        {% for field, metadata in _fields_visible_by_user %}
                            {% set isSortingField = metadata.property == app.request.get('sortField') %}
                            {% set _column_label =  (metadata.label ?: field|humanize)|trans(_trans_parameters)  %}

                            <td class=\"{{ isSortingField ? 'sorted' }} {{ metadata.dataType|lower }} {{ metadata.css_class }}\" {{ easyadmin_config('design.rtl') ? 'dir=\"rtl\"' }}>
                                {{ easyadmin_render_field_for_list_view(_entity_config.name, item, metadata) }}
                            </td>
                        {% endfor %}

                        {% if _list_item_actions|length > 0 %}
                            {% set _column_label =  'list.row_actions'|trans(_trans_parameters, 'EasyAdminBundle') %}
                            <td class=\"actions\">
                                {% block item_actions %}
                                    {% set _actions_template = _entity_config.list.collapse_actions
                                        ? '@EasyAdmin/default/includes/_actions_dropdown.html.twig'
                                        : '@EasyAdmin/default/includes/_actions.html.twig'
                                    %}
                                    {{ include(_actions_template, {
                                        actions: _list_item_actions,
                                        entity_config: _entity_config,
                                        request_parameters: _request_parameters,
                                        translation_domain: _entity_config.translation_domain,
                                        trans_parameters: _trans_parameters,
                                        item_id: _item_id,
                                        item: item
                                    }, with_context = false) }}
                                {% endblock item_actions %}
                            </td>
                        {% endif %}
                    </tr>
                {% endif %}
            {% else %}
                <tr>
                    <td class=\"no-results\" colspan=\"{{ _fields_visible_by_user|length + 1 }}\">
                        {{ 'search.no_results'|trans(_trans_parameters, 'EasyAdminBundle') }}
                    </td>
                </tr>
            {% endfor %}

            {% if _number_of_hidden_results > 0 %}
                <tr class=\"datagrid-row-empty\">
                    <td class=\"text-center\" colspan=\"{{ _fields_visible_by_user|length + 1 }}\">
                        <span class=\"datagrid-row-empty-message\"><i class=\"fa fa-lock mr-1\"></i> {{ 'security.list.hidden_results'|trans({}, 'EasyAdminBundle') }}</span>
                    </td>
                </tr>
            {% endif %}
        {% endblock table_body %}
        </tbody>
    </table>

    {% block delete_form %}
        {% set referer = paginator.currentPage == paginator.nbPages and 1 != paginator.currentPage and 1 == paginator.currentPageResults|length
            ? path('easyadmin', app.request.query|merge({ page: app.request.query.get('page') - 1 }))
            : app.request.requestUri
        %}

        {{ include('@EasyAdmin/default/includes/_delete_form.html.twig', {
            view: 'list',
            referer: referer,
            delete_form: delete_form_template,
            _translation_domain: _entity_config.translation_domain,
            _trans_parameters: _trans_parameters,
            _entity_config: _entity_config,
        }, with_context = false) }}
    {% endblock delete_form %}
{% endblock main %}

{% block content_footer %}
    {% block paginator %}
        {{ include(_entity_config.templates.paginator) }}
    {% endblock paginator %}
{% endblock %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            const toggles = document.querySelectorAll('.checkbox-switch input[type=\"checkbox\"]');
            for (i = 0; i < toggles.length; i++) {
                toggles[i].addEventListener('change', function () {
                    const toggle = this;
                    const newValue = this.checked;
                    const oldValue = !newValue;
                    const propertyName = this.closest('.checkbox-switch').dataset.propertyname;

                    const toggleUrl = \"{{ path('easyadmin', { action: 'edit', entity: _entity_config.name, view: 'list' })|raw }}\"
                        + \"&id=\" + this.closest('tr').dataset.id
                        + \"&property=\" + propertyName
                        + \"&newValue=\" + newValue.toString();

                    let toggleRequest = \$.ajax({ type: \"GET\", url: toggleUrl, data: {} });

                    toggleRequest.done(function(result) {});

                    toggleRequest.fail(function() {
                        // in case of error, restore the original value and disable the toggle
                        toggle.checked = oldValue;
                        toggle.disabled = true;
                        toggle.closest('.checkbox-switch').classList.add('disabled');
                    });
                });
            }

            \$('.action-delete').on('click', function(e) {
                e.preventDefault();
                const id = \$(this).parents('tr').first().data('id');

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        let deleteForm = \$('#delete-form');
                        deleteForm.attr('action', deleteForm.attr('action').replace('__id__', id));
                        deleteForm.trigger('submit');
                    });
            });

            {% if _has_filters %}
            // HTML5 specifies that a <script> tag inserted with innerHTML should not execute
            // https://developer.mozilla.org/en-US/docs/Web/API/Element/innerHTML#Security_considerations
            // That's why we can't use just 'innerHTML'. See https://stackoverflow.com/a/47614491/2804294
            var setInnerHTML = function(element, htmlContent) {
                element.innerHTML = htmlContent;
                Array.from(element.querySelectorAll('script')).forEach( oldScript => {
                    const newScript = document.createElement('script');
                    Array.from(oldScript.attributes)
                        .forEach(attr => newScript.setAttribute(attr.name, attr.value));
                    newScript.appendChild(document.createTextNode(oldScript.innerHTML));
                    oldScript.parentNode.replaceChild(newScript, oldScript);
                });
            };

            document.querySelector('.action-filters-button').addEventListener('click', function(event) {
                let filterButton = event.currentTarget;
                let filterModal = document.querySelector(filterButton.dataset.modal);
                let filterModalBody = filterModal.querySelector('.modal-body');

                \$(filterModal).modal({ backdrop: true, keyboard: true });
                filterModalBody.innerHTML = '<div class=\"fa-3x px-3 py-3 text-muted text-center\"><i class=\"fas fa-circle-notch fa-spin\"></i></div>';

                \$.get(filterButton.getAttribute('href'), function (response) {
                    setInnerHTML(filterModalBody, response);
                });

                event.preventDefault();
                event.stopPropagation();
            });
            {% endif %}

            {% if _has_batch_actions %}
            const titleContent = \$('.content-header-title > .title').html();
            \$(document).on('click', '.deselect-batch-button', function () {
                \$(this).closest('.content').find(':checkbox.form-batch-checkbox-all').prop('checked', false).trigger('change');
            });
            \$(document).on('change', '.form-batch-checkbox-all', function () {
                \$(this).closest('.content').find(':checkbox.form-batch-checkbox').prop('checked', \$(this).prop('checked')).trigger('change');
            });
            \$(document).on('change', '.form-batch-checkbox', function () {
                const \$content = \$(this).closest('.content');
                let \$input = \$content.find(':hidden#batch_form_ids');
                let ids = \$input.val() ? \$input.val().split(',') : [];
                const id = \$(this).val();

                if (\$(this).prop('checked')) {
                    if (-1 === ids.indexOf(id)) {
                        ids.push(id);
                    }
                } else {
                    ids = ids.filter(function(value) { return value !== id });
                    \$content.find(':checkbox.form-batch-checkbox-all').prop('checked', false);
                }

                if (0 === ids.length) {
                    \$content.find('.global-actions').show();
                    \$content.find('.batch-actions').hide();
                    \$content.find('table').removeClass('table-batch');
                } else {
                    \$content.find('.batch-actions').show();
                    \$content.find('.global-actions').hide();
                    \$content.find('table').addClass('table-batch');
                }

                \$input.val(ids.join(','));
                \$content.find('.content-header-title > .title').html(0 === ids.length ? titleContent : '');
            });

            let modalTitle = \$('#batch-action-confirmation-title');
            const titleContentWithPlaceholders = modalTitle.text();
            \$('button[name=\"batch_form[name]\"].batch-action-requires-confirmation').on('click', function (event) {
                event.preventDefault();
                event.stopPropagation();
                let \$button = \$(this);

                const actionName = \$button.text();
                const numberOfSelectedItems = \$('input[type=\"checkbox\"].form-batch-checkbox:checked').length;
                modalTitle.text(titleContentWithPlaceholders
                    .replace('%action_name%', actionName)
                    .replace('%num_items%', numberOfSelectedItems));

                \$('#modal-batch-action').modal({ backdrop : true, keyboard : true })
                    .off('click', '#modal-batch-action-button')
                    .on('click', '#modal-batch-action-button', function () {
                        \$button.unbind('click');
                        \$button.trigger('click');

                        modalTitle.text(titleContentWithPlaceholders);
                    });
            });
            {% endif %}
        });
    </script>

    {% if 'search' == app.request.get('action') %}
        <script type=\"text/javascript\">
            const _search_query = \"{{ app.request.get('query')|default('')|e('js') }}\";
            // the original query is prepended to allow matching exact phrases in addition to single words
            \$('#main').find('table tbody td:not(.actions)').highlight(\$.merge([_search_query], _search_query.split(' ')));
        </script>
    {% endif %}
{% endblock %}
", "@EasyAdmin/default/list.html.twig", "C:\\Users\\AYOUB\\Desktop\\projet_symfony_finale\\symfony_project_2\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\default\\list.html.twig");
    }
}
