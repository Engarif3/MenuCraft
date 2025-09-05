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

/* dish/list.html.twig */
class __TwigTemplate_01c1c1f5e42a83180ea4fd558f16b588 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dish/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dish/list.html.twig", 1);
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

        yield "List of dishes";
        
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
        <h1 class=\"text-4xl font-bold text-center text-blue-500 mb-8\">List of dishes</h1>

        ";
        // line 9
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["dishes"]) || array_key_exists("dishes", $context) ? $context["dishes"] : (function () { throw new RuntimeError('Variable "dishes" does not exist.', 9, $this->source); })()))) {
            // line 10
            yield "            <div class=\"text-center text-lg text-gray-500\">No dish available.</div>
        ";
        } else {
            // line 12
            yield "            <ul class=\"space-y-2\">
                ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["dishes"]) || array_key_exists("dishes", $context) ? $context["dishes"] : (function () { throw new RuntimeError('Variable "dishes" does not exist.', 13, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["dish"]) {
                // line 14
                yield "                <div class=\"border border-slate-200 rounded-lg shadow-lg p-2\">
                    
                    <li class=\" flex justify-between items-center\">
                       
                            <img
                                class=\"size-24 object-cover rounded-lg\"
                                src=\"";
                // line 20
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dish"], "image", [], "any", false, false, false, 20), "html", null, true);
                yield "\"
                            />
                    ";
                // line 23
                yield "                        <h3 class=\"text-2xl font-semibold text-center \">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dish"], "name", [], "any", false, false, false, 23), "html", null, true);
                yield "</h3>
                            
                       
                        <div class=\"flex items-center space-x-4\">
                            <span class=\"text-xl text-gray-700 font-bold\">";
                // line 27
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dish"], "price", [], "any", false, false, false, 27), "html", null, true);
                yield "€</span>
                            
                            <!-- View button -->
                            <a href=\"";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dish", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["dish"], "id", [], "any", false, false, false, 30)]), "html", null, true);
                yield "\" class=\"bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700 transition\">View</a>

                            <!-- Delete button (opens modal) -->
                            <button onclick=\"showDeleteModal('";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dish_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["dish"], "id", [], "any", false, false, false, 33)]), "html", null, true);
                yield "')\" class=\"bg-red-500 text-white py-2 px-4 rounded hover:bg-red-700 transition\">
                                Delete
                            </button>
                        </div>
                    </li>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['dish'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            yield "            </ul>
        ";
        }
        // line 42
        yield "
        <!-- Button to create a new dish -->
        <div class=\"mt-6 text-center\">
            <a href=\"";
        // line 45
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dish_create");
        yield "\" class=\"inline-block px-6 py-3 mt-4 bg-green-600 text-white rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-opacity-50\">Create New dish</a>
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div id=\"deleteModal\" class=\"fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden\">
        <div class=\"bg-white rounded-lg shadow-lg p-8 text-center w-full max-w-sm mx-4\">
            <h2 class=\"text-2xl font-semibold mb-4\">Confirm Deletion</h2>
            <p class=\"text-gray-700 mb-6\">Are you sure you want to delete this dish item?</p>
            <div class=\"flex justify-center space-x-4\">
                <button id=\"confirmDeleteBtn\" class=\"bg-red-500 text-white py-2 px-4 rounded\">Yes, Delete</button>
                <button onclick=\"hideDeleteModal()\" class=\"bg-gray-300 text-gray-800 py-2 px-4 rounded\">Cancel</button>
            </div>
        </div>
    </div>

    <script>
        let deleteUrl = ''; // Declare the deleteUrl variable here

        // Function to show the delete confirmation modal
        function showDeleteModal(url) {
            deleteUrl = url; // Store the delete URL
            document.getElementById('deleteModal').classList.remove('hidden'); // Show the modal
        }

        // Function to hide the delete confirmation modal
        function hideDeleteModal() {
            document.getElementById('deleteModal').classList.add('hidden'); // Hide the modal
        }

        // Confirm the deletion when the \"Yes, Delete\" button is clicked
        document.getElementById('confirmDeleteBtn').addEventListener('click', function() {
            window.location.href = deleteUrl; // Redirect to the delete URL
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "dish/list.html.twig";
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
        return array (  158 => 45,  153 => 42,  149 => 40,  136 => 33,  130 => 30,  124 => 27,  116 => 23,  111 => 20,  103 => 14,  99 => 13,  96 => 12,  92 => 10,  90 => 9,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}List of dishes{% endblock %}

{% block body %}
    <div class=\"container mx-auto p-6\">
        <h1 class=\"text-4xl font-bold text-center text-blue-500 mb-8\">List of dishes</h1>

        {% if dishes is empty %}
            <div class=\"text-center text-lg text-gray-500\">No dish available.</div>
        {% else %}
            <ul class=\"space-y-2\">
                {% for dish in dishes %}
                <div class=\"border border-slate-200 rounded-lg shadow-lg p-2\">
                    
                    <li class=\" flex justify-between items-center\">
                       
                            <img
                                class=\"size-24 object-cover rounded-lg\"
                                src=\"{{dish.image}}\"
                            />
                    {# <p class=\"text-sm text-center px-8 w-7/12\">{{ dish.description }}</p> #}
                        <h3 class=\"text-2xl font-semibold text-center \">{{ dish.name }}</h3>
                            
                       
                        <div class=\"flex items-center space-x-4\">
                            <span class=\"text-xl text-gray-700 font-bold\">{{ dish.price }}€</span>
                            
                            <!-- View button -->
                            <a href=\"{{ path('app_dish', {'id': dish.id}) }}\" class=\"bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700 transition\">View</a>

                            <!-- Delete button (opens modal) -->
                            <button onclick=\"showDeleteModal('{{ path('app_dish_delete', {'id': dish.id}) }}')\" class=\"bg-red-500 text-white py-2 px-4 rounded hover:bg-red-700 transition\">
                                Delete
                            </button>
                        </div>
                    </li>
                    </div>
                {% endfor %}
            </ul>
        {% endif %}

        <!-- Button to create a new dish -->
        <div class=\"mt-6 text-center\">
            <a href=\"{{ path('app_dish_create') }}\" class=\"inline-block px-6 py-3 mt-4 bg-green-600 text-white rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-opacity-50\">Create New dish</a>
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div id=\"deleteModal\" class=\"fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden\">
        <div class=\"bg-white rounded-lg shadow-lg p-8 text-center w-full max-w-sm mx-4\">
            <h2 class=\"text-2xl font-semibold mb-4\">Confirm Deletion</h2>
            <p class=\"text-gray-700 mb-6\">Are you sure you want to delete this dish item?</p>
            <div class=\"flex justify-center space-x-4\">
                <button id=\"confirmDeleteBtn\" class=\"bg-red-500 text-white py-2 px-4 rounded\">Yes, Delete</button>
                <button onclick=\"hideDeleteModal()\" class=\"bg-gray-300 text-gray-800 py-2 px-4 rounded\">Cancel</button>
            </div>
        </div>
    </div>

    <script>
        let deleteUrl = ''; // Declare the deleteUrl variable here

        // Function to show the delete confirmation modal
        function showDeleteModal(url) {
            deleteUrl = url; // Store the delete URL
            document.getElementById('deleteModal').classList.remove('hidden'); // Show the modal
        }

        // Function to hide the delete confirmation modal
        function hideDeleteModal() {
            document.getElementById('deleteModal').classList.add('hidden'); // Hide the modal
        }

        // Confirm the deletion when the \"Yes, Delete\" button is clicked
        document.getElementById('confirmDeleteBtn').addEventListener('click', function() {
            window.location.href = deleteUrl; // Redirect to the delete URL
        });
    </script>
{% endblock %}
", "dish/list.html.twig", "E:\\for aws\\MenuCraft\\templates\\dish\\list.html.twig");
    }
}
