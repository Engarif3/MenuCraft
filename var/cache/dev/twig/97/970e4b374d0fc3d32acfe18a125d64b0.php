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

/* dish/edit.html.twig */
class __TwigTemplate_017a3e4ebe2c69a2076180322b28991a extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dish/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dish/edit.html.twig", 1);
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

        yield "Edit dish";
        
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
        yield "    <div class=\"container mx-auto p-6\">
        <h1 class=\"text-4xl font-bold text-center text-blue-500 mb-8\">Edit dish: ";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["dish"]) || array_key_exists("dish", $context) ? $context["dish"] : (function () { throw new RuntimeError('Variable "dish" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7), "html", null, true);
        yield "</h1>

        <div class=\"bg-white rounded-lg shadow-lg p-6\">
            <form method=\"POST\" action=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dish_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["dish"]) || array_key_exists("dish", $context) ? $context["dish"] : (function () { throw new RuntimeError('Variable "dish" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10)]), "html", null, true);
        yield "\" enctype=\"multipart/form-data\">
                ";
        // line 11
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start');
        yield "
                
                <div class=\"mb-4 font-semibold\">
                    ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "name", [], "any", false, false, false, 14), 'label', ["label" => "dish Name"]);
        yield "
                    ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "name", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "form-input p-3 border rounded-md w-full"]]);
        yield "
                </div>
                
                <div class=\"mb-4 font-semibold\">
                    ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "price", [], "any", false, false, false, 19), 'label', ["label" => "Price (€)"]);
        yield "
                    ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "price", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "form-input p-3 border rounded-md w-full"]]);
        yield "
                </div>
                
                <div class=\"mb-4 font-semibold\">
                    ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "description", [], "any", false, false, false, 24), 'label', ["label" => "Description"]);
        yield "
                    ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "description", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-input p-3 border rounded-md w-full"]]);
        yield "
                </div>

                <div class=\"mb-4 font-semibold\">
                    ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "category", [], "any", false, false, false, 29), 'label', ["label" => "Category"]);
        yield "
                    ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "category", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "form-input p-3 border rounded-md w-full"]]);
        yield "
                </div>
                
               <!-- Image Upload or URL -->
                <div class=\"mb-4 font-semibold\">
    <label for=\"dish_image\" class=\"form-label\">Upload Image or Enter Image URL</label>

    <!-- File Upload Input -->
    <div>
        ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "image", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-input p-3 border rounded-md w-full"]]);
        yield "
    </div>

    <!-- Image URL Input -->
    <div class=\"mt-2\">
        <label for=\"image_url\" class=\"form-label\">Or Image URL</label>
        <input type=\"url\" id=\"image_url\" name=\"image_url\" class=\"form-input p-3 border rounded-md w-full\" placeholder=\"Enter Image URL\">
    </div>
</div>

                <!-- Add flexbox for submit button alignment -->
                <div class=\"flex justify-end items-center space-x-4 mt-4\">
                    <!-- Cancel button -->
                    <a href=\"";
        // line 52
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dishes");
        yield "\" class=\"bg-gray-500 text-white py-2 px-4 rounded-lg hover:bg-gray-600 transition\">Cancel</a>

                    <!-- Submit button (styled) -->
                    ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "save", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "bg-green-500 text-white py-2 px-4 rounded-lg hover:bg-green-600 transition"]]);
        yield "
                </div>

                ";
        // line 58
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), 'form_end');
        yield "
            </form>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "dish/edit.html.twig";
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
        return array (  181 => 58,  175 => 55,  169 => 52,  153 => 39,  141 => 30,  137 => 29,  130 => 25,  126 => 24,  119 => 20,  115 => 19,  108 => 15,  104 => 14,  98 => 11,  94 => 10,  88 => 7,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Edit dish{% endblock %}

{% block body %}
    <div class=\"container mx-auto p-6\">
        <h1 class=\"text-4xl font-bold text-center text-blue-500 mb-8\">Edit dish: {{ dish.name }}</h1>

        <div class=\"bg-white rounded-lg shadow-lg p-6\">
            <form method=\"POST\" action=\"{{ path('app_dish_edit', {'id': dish.id}) }}\" enctype=\"multipart/form-data\">
                {{ form_start(form) }}
                
                <div class=\"mb-4 font-semibold\">
                    {{ form_label(form.name, 'dish Name') }}
                    {{ form_widget(form.name, {'attr': {'class': 'form-input p-3 border rounded-md w-full'}}) }}
                </div>
                
                <div class=\"mb-4 font-semibold\">
                    {{ form_label(form.price, 'Price (€)') }}
                    {{ form_widget(form.price, {'attr': {'class': 'form-input p-3 border rounded-md w-full'}}) }}
                </div>
                
                <div class=\"mb-4 font-semibold\">
                    {{ form_label(form.description, 'Description') }}
                    {{ form_widget(form.description, {'attr': {'class': 'form-input p-3 border rounded-md w-full'}}) }}
                </div>

                <div class=\"mb-4 font-semibold\">
                    {{ form_label(form.category, 'Category') }}
                    {{ form_widget(form.category, {'attr': {'class': 'form-input p-3 border rounded-md w-full'}}) }}
                </div>
                
               <!-- Image Upload or URL -->
                <div class=\"mb-4 font-semibold\">
    <label for=\"dish_image\" class=\"form-label\">Upload Image or Enter Image URL</label>

    <!-- File Upload Input -->
    <div>
        {{ form_widget(form.image, {'attr': {'class': 'form-input p-3 border rounded-md w-full'}}) }}
    </div>

    <!-- Image URL Input -->
    <div class=\"mt-2\">
        <label for=\"image_url\" class=\"form-label\">Or Image URL</label>
        <input type=\"url\" id=\"image_url\" name=\"image_url\" class=\"form-input p-3 border rounded-md w-full\" placeholder=\"Enter Image URL\">
    </div>
</div>

                <!-- Add flexbox for submit button alignment -->
                <div class=\"flex justify-end items-center space-x-4 mt-4\">
                    <!-- Cancel button -->
                    <a href=\"{{ path('app_dishes') }}\" class=\"bg-gray-500 text-white py-2 px-4 rounded-lg hover:bg-gray-600 transition\">Cancel</a>

                    <!-- Submit button (styled) -->
                    {{ form_widget(form.save, {'attr': {'class': 'bg-green-500 text-white py-2 px-4 rounded-lg hover:bg-green-600 transition'}}) }}
                </div>

                {{ form_end(form) }}
            </form>
        </div>
    </div>
{% endblock %}
", "dish/edit.html.twig", "E:\\for aws\\MenuCraft\\templates\\dish\\edit.html.twig");
    }
}
