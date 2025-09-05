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

/* category/list.html.twig */
class __TwigTemplate_ba5539ca5a8c1efd0a2abfcb2db63f8c extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "category/list.html.twig", 1);
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

        yield "Category List";
        
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
        yield "    <h1 class=\"text-4xl font-bold text-center text-blue-500 mt-12\">List of Categories</h1>

    <!-- Category Table -->
    <div class=\"min-w-full flex justify-center items-center\">
        <table class=\"min-w-[80%] table-auto border-collapse m-8 text-center\">
            <thead>
                <tr>
                    <th class=\"border-b-2 border-gray-200 py-2 px-4 text-lg\">Category Name</th>
                    <th class=\"border-b-2 border-gray-200 py-2 px-4 text-lg\">Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categoriesWithDishes"]) || array_key_exists("categoriesWithDishes", $context) ? $context["categoriesWithDishes"] : (function () { throw new RuntimeError('Variable "categoriesWithDishes" does not exist.', 18, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 19
            yield "                    <tr>
                        <td class=\"border-b border-gray-200 py-2 px-4 font-semibold font-mono text-slate-600 \">";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 20), "categoryName", [], "any", false, false, false, 20), "html", null, true);
            yield "</td>
                        <td class=\"border-b border-gray-200 py-2 px-4\">
                            <!-- Edit Button -->
                            <a href=\"";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 23), "id", [], "any", false, false, false, 23)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-primary mx-2\">Edit</a>

                            <!-- Delete Button triggers modal -->
                            <button onclick=\"showDeleteModal('";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 26), "id", [], "any", false, false, false, 26)]), "html", null, true);
            yield "', ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 26), "id", [], "any", false, false, false, 26), "html", null, true);
            yield ", ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "dishes", [], "any", false, false, false, 26)), "html", null, true);
            yield ")\" class=\"btn btn-sm btn-error mx-2\">Delete</button>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 30
            yield "                    <tr>
                        <td colspan=\"2\" class=\"text-center py-4\">No categories found.</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        yield "            </tbody>
        </table>
    </div>

    <!-- Create New Category Button -->
    <div class=\"mt-12 text-center\">
        <a href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_create");
        yield "\" class=\"btn btn-accent text-lg\">Create New Category</a>
    </div>

    <!-- Delete Confirmation Modal -->
    <div id=\"deleteModal\" class=\"fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden\">
        <div class=\"bg-white rounded-lg shadow-lg p-8 text-center w-full max-w-sm mx-4\">
            <h2 class=\"text-2xl font-semibold mb-4\">Confirm Deletion</h2>
            <p id=\"modalMessage\" class=\"text-gray-700 mb-6\"></p>
            <div class=\"flex justify-center space-x-4\">
                <button id=\"confirmDeleteBtn\" class=\"btn btn-error\">Yes, Delete</button>
                <button onclick=\"hideDeleteModal()\" class=\"btn btn-secondary\">Cancel</button>
            </div>
        </div>
    </div>

    <script>
        let deleteUrl = '';
        let categoryId = '';

        function showDeleteModal(url, id, dishesCount) {
            deleteUrl = url; // Store URL
            categoryId = id; // Store category ID

            // Check if this category has associated dishes
            if (dishesCount > 0) {
                document.getElementById('modalMessage').innerText = \"This category is associated with dishes. Deleting this category will also delete all associated dishes.\";
                document.getElementById('confirmDeleteBtn').setAttribute('onclick', `deleteCategoryWithDishes(\${categoryId})`);
            } else {
                document.getElementById('modalMessage').innerText = \"Are you sure you want to delete this category?\";
                document.getElementById('confirmDeleteBtn').setAttribute('onclick', `deleteCategory(\${categoryId})`);
            }

            document.getElementById('deleteModal').classList.remove('hidden');
        }

        function hideDeleteModal() {
            document.getElementById('deleteModal').classList.add('hidden');
        }

        function deleteCategory(id) {
            // Proceed with the category deletion using the existing URL
            window.location.href = deleteUrl;
        }

        function deleteCategoryWithDishes(id) {
            // Use the same URL but now handle the deletion of both category and dishes in the backend
            window.location.href = deleteUrl; // This will trigger the deletion of both category and associated dishes
        }
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
        return "category/list.html.twig";
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
        return array (  149 => 40,  141 => 34,  132 => 30,  119 => 26,  113 => 23,  107 => 20,  104 => 19,  99 => 18,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Category List{% endblock %}

{% block body %}
    <h1 class=\"text-4xl font-bold text-center text-blue-500 mt-12\">List of Categories</h1>

    <!-- Category Table -->
    <div class=\"min-w-full flex justify-center items-center\">
        <table class=\"min-w-[80%] table-auto border-collapse m-8 text-center\">
            <thead>
                <tr>
                    <th class=\"border-b-2 border-gray-200 py-2 px-4 text-lg\">Category Name</th>
                    <th class=\"border-b-2 border-gray-200 py-2 px-4 text-lg\">Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for item in categoriesWithDishes %}
                    <tr>
                        <td class=\"border-b border-gray-200 py-2 px-4 font-semibold font-mono text-slate-600 \">{{ item.category.categoryName }}</td>
                        <td class=\"border-b border-gray-200 py-2 px-4\">
                            <!-- Edit Button -->
                            <a href=\"{{ path('category_edit', {'id': item.category.id}) }}\" class=\"btn btn-sm btn-primary mx-2\">Edit</a>

                            <!-- Delete Button triggers modal -->
                            <button onclick=\"showDeleteModal('{{ path('category_delete', {'id': item.category.id}) }}', {{ item.category.id }}, {{ item.dishes|length }})\" class=\"btn btn-sm btn-error mx-2\">Delete</button>
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"2\" class=\"text-center py-4\">No categories found.</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>

    <!-- Create New Category Button -->
    <div class=\"mt-12 text-center\">
        <a href=\"{{ path('category_create') }}\" class=\"btn btn-accent text-lg\">Create New Category</a>
    </div>

    <!-- Delete Confirmation Modal -->
    <div id=\"deleteModal\" class=\"fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden\">
        <div class=\"bg-white rounded-lg shadow-lg p-8 text-center w-full max-w-sm mx-4\">
            <h2 class=\"text-2xl font-semibold mb-4\">Confirm Deletion</h2>
            <p id=\"modalMessage\" class=\"text-gray-700 mb-6\"></p>
            <div class=\"flex justify-center space-x-4\">
                <button id=\"confirmDeleteBtn\" class=\"btn btn-error\">Yes, Delete</button>
                <button onclick=\"hideDeleteModal()\" class=\"btn btn-secondary\">Cancel</button>
            </div>
        </div>
    </div>

    <script>
        let deleteUrl = '';
        let categoryId = '';

        function showDeleteModal(url, id, dishesCount) {
            deleteUrl = url; // Store URL
            categoryId = id; // Store category ID

            // Check if this category has associated dishes
            if (dishesCount > 0) {
                document.getElementById('modalMessage').innerText = \"This category is associated with dishes. Deleting this category will also delete all associated dishes.\";
                document.getElementById('confirmDeleteBtn').setAttribute('onclick', `deleteCategoryWithDishes(\${categoryId})`);
            } else {
                document.getElementById('modalMessage').innerText = \"Are you sure you want to delete this category?\";
                document.getElementById('confirmDeleteBtn').setAttribute('onclick', `deleteCategory(\${categoryId})`);
            }

            document.getElementById('deleteModal').classList.remove('hidden');
        }

        function hideDeleteModal() {
            document.getElementById('deleteModal').classList.add('hidden');
        }

        function deleteCategory(id) {
            // Proceed with the category deletion using the existing URL
            window.location.href = deleteUrl;
        }

        function deleteCategoryWithDishes(id) {
            // Use the same URL but now handle the deletion of both category and dishes in the backend
            window.location.href = deleteUrl; // This will trigger the deletion of both category and associated dishes
        }
    </script>
{% endblock %}


", "category/list.html.twig", "E:\\for aws\\MenuCraft\\templates\\category\\list.html.twig");
    }
}
