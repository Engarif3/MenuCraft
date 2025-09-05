<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* dish/create.html.twig */
class __TwigTemplate_9af6b9a60dd8b10827c665e0ec756ef6 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dish/create.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dish/create.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Create dish";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <h1 class=\"text-4xl font-bold text-center text-gray-800 mt-12\">Create dish</h1>

    <div class=\"max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-lg mt-8\">
        ";
        // line 9
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 9, $this->source); })())) > 0)) {
            // line 10
            yield "            ";
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start');
            yield "
            
            <div class=\"mb-6\">
                <label for=\"";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), "vars", [], "any", false, false, false, 13), "id", [], "any", false, false, false, 13), "html", null, true);
            yield "\" class=\"block text-lg font-medium text-gray-700\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), 'label');
            yield "</label>
                <div class=\"mt-2\">
                    ";
            // line 15
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "name", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "form-input block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"]]);
            yield "
                </div>
                ";
            // line 17
            if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17), 'errors')) {
                // line 18
                yield "                    <p class=\"mt-2 text-sm text-red-500\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "name", [], "any", false, false, false, 18), 'errors');
                yield "</p>
                ";
            }
            // line 20
            yield "            </div>

            <div class=\"mb-6\">
                <label for=\"";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "description", [], "any", false, false, false, 23), "vars", [], "any", false, false, false, 23), "id", [], "any", false, false, false, 23), "html", null, true);
            yield "\" class=\"block text-lg font-medium text-gray-700\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "description", [], "any", false, false, false, 23), 'label');
            yield "</label>
                <div class=\"mt-2\">
                    ";
            // line 25
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "description", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-input block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"]]);
            yield "
                </div>
                ";
            // line 27
            if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "description", [], "any", false, false, false, 27), 'errors')) {
                // line 28
                yield "                    <p class=\"mt-2 text-sm text-red-500\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "description", [], "any", false, false, false, 28), 'errors');
                yield "</p>
                ";
            }
            // line 30
            yield "            </div>

            <div class=\"mb-6\">
                <label for=\"";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "image", [], "any", false, false, false, 33), "vars", [], "any", false, false, false, 33), "id", [], "any", false, false, false, 33), "html", null, true);
            yield "\" class=\"block text-lg font-medium text-gray-700\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "image", [], "any", false, false, false, 33), 'label');
            yield "</label>
                <div class=\"mt-2\">
                    ";
            // line 35
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "image", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "form-input block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"]]);
            yield "
                </div>
                ";
            // line 37
            if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "image", [], "any", false, false, false, 37), 'errors')) {
                // line 38
                yield "                    <p class=\"mt-2 text-sm text-red-500\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "image", [], "any", false, false, false, 38), 'errors');
                yield "</p>
                ";
            }
            // line 40
            yield "            </div>

            <div class=\"mb-6\">
                <label for=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "price", [], "any", false, false, false, 43), "vars", [], "any", false, false, false, 43), "id", [], "any", false, false, false, 43), "html", null, true);
            yield "\" class=\"block text-lg font-medium text-gray-700\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "price", [], "any", false, false, false, 43), 'label');
            yield "</label>
                <div class=\"mt-2\">
                    ";
            // line 45
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "price", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-input block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"]]);
            yield "
                </div>
                ";
            // line 47
            if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "price", [], "any", false, false, false, 47), 'errors')) {
                // line 48
                yield "                    <p class=\"mt-2 text-sm text-red-500\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "price", [], "any", false, false, false, 48), 'errors');
                yield "</p>
                ";
            }
            // line 50
            yield "            </div>

            <div class=\"mb-6\">
                <label for=\"";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "category", [], "any", false, false, false, 53), "vars", [], "any", false, false, false, 53), "id", [], "any", false, false, false, 53), "html", null, true);
            yield "\" class=\"block text-lg font-medium text-gray-700\">
                    ";
            // line 54
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "category", [], "any", false, false, false, 54), 'label');
            yield "
                </label>
                <div class=\"mt-2\">
                    ";
            // line 57
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "category", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "form-input block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"]]);
            yield "
                </div>
                ";
            // line 59
            if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "category", [], "any", false, false, false, 59), 'errors')) {
                // line 60
                yield "                    <p class=\"mt-2 text-sm text-red-500\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "category", [], "any", false, false, false, 60), 'errors');
                yield "</p>
                ";
            }
            // line 62
            yield "            </div>

            <div class=\"text-center\">
                ";
            // line 65
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "save", [], "any", false, false, false, 65), 'widget', ["attr" => ["class" => "btn btn-primary px-6 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-50"]]);
            yield "
            </div>
            
            ";
            // line 68
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), 'form_end');
            yield "
        ";
        } else {
            // line 70
            yield "            <div class=\"text-center\">
                <p class=\"text-lg text-gray-500\">No categories available. <a href=\"";
            // line 71
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_create");
            yield "\" class=\"text-indigo-500 underline\">Create a category first</a>.</p>
                <a href=\"";
            // line 72
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_create");
            yield "\" class=\"btn btn-primary mt-4 px-6 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-50\">
                    Create Category
                </a>
            </div>
        ";
        }
        // line 77
        yield "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "dish/create.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  253 => 77,  245 => 72,  241 => 71,  238 => 70,  233 => 68,  227 => 65,  222 => 62,  216 => 60,  214 => 59,  209 => 57,  203 => 54,  199 => 53,  194 => 50,  188 => 48,  186 => 47,  181 => 45,  174 => 43,  169 => 40,  163 => 38,  161 => 37,  156 => 35,  149 => 33,  144 => 30,  138 => 28,  136 => 27,  131 => 25,  124 => 23,  119 => 20,  113 => 18,  111 => 17,  106 => 15,  99 => 13,  92 => 10,  90 => 9,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Create dish{% endblock %}

{% block body %}
    <h1 class=\"text-4xl font-bold text-center text-gray-800 mt-12\">Create dish</h1>

    <div class=\"max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-lg mt-8\">
        {% if categories|length > 0 %}
            {{ form_start(form) }}
            
            <div class=\"mb-6\">
                <label for=\"{{ form.name.vars.id }}\" class=\"block text-lg font-medium text-gray-700\">{{ form_label(form.name) }}</label>
                <div class=\"mt-2\">
                    {{ form_widget(form.name, {'attr': {'class': 'form-input block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500'}}) }}
                </div>
                {% if form_errors(form.name) %}
                    <p class=\"mt-2 text-sm text-red-500\">{{ form_errors(form.name) }}</p>
                {% endif %}
            </div>

            <div class=\"mb-6\">
                <label for=\"{{ form.description.vars.id }}\" class=\"block text-lg font-medium text-gray-700\">{{ form_label(form.description) }}</label>
                <div class=\"mt-2\">
                    {{ form_widget(form.description, {'attr': {'class': 'form-input block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500'}}) }}
                </div>
                {% if form_errors(form.description) %}
                    <p class=\"mt-2 text-sm text-red-500\">{{ form_errors(form.description) }}</p>
                {% endif %}
            </div>

            <div class=\"mb-6\">
                <label for=\"{{ form.image.vars.id }}\" class=\"block text-lg font-medium text-gray-700\">{{ form_label(form.image) }}</label>
                <div class=\"mt-2\">
                    {{ form_widget(form.image, {'attr': {'class': 'form-input block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500'}}) }}
                </div>
                {% if form_errors(form.image) %}
                    <p class=\"mt-2 text-sm text-red-500\">{{ form_errors(form.image) }}</p>
                {% endif %}
            </div>

            <div class=\"mb-6\">
                <label for=\"{{ form.price.vars.id }}\" class=\"block text-lg font-medium text-gray-700\">{{ form_label(form.price) }}</label>
                <div class=\"mt-2\">
                    {{ form_widget(form.price, {'attr': {'class': 'form-input block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500'}}) }}
                </div>
                {% if form_errors(form.price) %}
                    <p class=\"mt-2 text-sm text-red-500\">{{ form_errors(form.price) }}</p>
                {% endif %}
            </div>

            <div class=\"mb-6\">
                <label for=\"{{ form.category.vars.id }}\" class=\"block text-lg font-medium text-gray-700\">
                    {{ form_label(form.category) }}
                </label>
                <div class=\"mt-2\">
                    {{ form_widget(form.category, {'attr': {'class': 'form-input block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500'}}) }}
                </div>
                {% if form_errors(form.category) %}
                    <p class=\"mt-2 text-sm text-red-500\">{{ form_errors(form.category) }}</p>
                {% endif %}
            </div>

            <div class=\"text-center\">
                {{ form_widget(form.save, {'attr': {'class': 'btn btn-primary px-6 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-50'}}) }}
            </div>
            
            {{ form_end(form) }}
        {% else %}
            <div class=\"text-center\">
                <p class=\"text-lg text-gray-500\">No categories available. <a href=\"{{ path('category_create') }}\" class=\"text-indigo-500 underline\">Create a category first</a>.</p>
                <a href=\"{{ path('category_create') }}\" class=\"btn btn-primary mt-4 px-6 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-50\">
                    Create Category
                </a>
            </div>
        {% endif %}
    </div>
{% endblock %}
", "dish/create.html.twig", "E:\\for aws\\MenuCraft\\templates\\dish\\create.html.twig");
    }
}
