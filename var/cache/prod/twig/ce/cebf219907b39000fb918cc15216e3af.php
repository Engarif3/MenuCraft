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

/* dish/show.html.twig */
class __TwigTemplate_a0d5cc545b0649c73750f9b307116da1 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "dish/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["dish"] ?? null), "name", [], "any", false, false, false, 1), "html", null, true);
        yield " - Dish Details";
        yield from [];
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
        yield "<div class=\"container mx-auto p-6\">
  <h1 class=\"text-4xl font-bold text-center text-blue-500 my-8\">
    ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["dish"] ?? null), "name", [], "any", false, false, false, 5), "html", null, true);
        yield "
  </h1>

  <div class=\" rounded-lg shadow-lg p-2 border border-slate-200\">
    <div class=\"flex justify-end items-center me-8 mt-2\">
      <span class=\"text-3xl text-gray-700 font-bold\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["dish"] ?? null), "price", [], "any", false, false, false, 10), "html", null, true);
        yield "€</span>
    </div>

    <div class=\"flex justify-between mx-12\">
      ";
        // line 14
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["dish"] ?? null), "image", [], "any", false, false, false, 14)) {
            // line 15
            yield "      <div class=\"mb-4\">
       
        <img
        class=\"w-[800px] h-[500px] rounded-lg\"
        src=\"";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["dish"] ?? null), "image", [], "any", false, false, false, 19), "html", null, true);
            yield "\"
        />
      </div>
      ";
        }
        // line 23
        yield "
      <div class=\" text-left w-8/12 ml-8\">
        <h3 class=\"text-3xl font-semibold text-gray-800 mb-4\">Description</h3>
        <p class=\"text-gray-600\">";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["dish"] ?? null), "description", [], "any", false, false, false, 26), "html", null, true);
        yield "</p>
      </div>
    </div>

    <!-- Edit and Delete Buttons -->
    <div class=\"flex flex-row-reverse justify-between \">
        <div class=\"flex justify-end  space-x-4 m-6\">
      <a
        href=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dish_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["dish"] ?? null), "id", [], "any", false, false, false, 34)]), "html", null, true);
        yield "\"
        class=\"bg-yellow-500 text-white py-2 px-4 rounded hover:bg-yellow-600 transition\"
        >Edit</a
      >
      <button
        onclick=\"showDeleteModal('";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dish_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source,         // line 40
($context["dish"] ?? null), "id", [], "any", false, false, false, 40)]), "html", null, true);
        // line 41
        yield "')\"
        class=\"bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600 transition\"
      >
        Delete
      </button>
    </div>

    <div class=\"m-6\">
      <a
        href=\"";
        // line 50
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dishes");
        yield "\"
        class=\"bg-blue-500 text-white p-2 ml-12 rounded hover:bg-blue-700 transition\"
        >Back to dish List</a
      >
    </div>
    </div>
  </div>
</div>

<!-- Delete Confirmation Modal -->
<div
  id=\"deleteModal\"
  class=\"fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden\"
>
  <div
    class=\"bg-white rounded-lg shadow-lg p-8 text-center w-full max-w-sm mx-4\"
  >
    <h2 class=\"text-2xl font-semibold mb-4\">Confirm Deletion</h2>
    <p class=\"text-gray-700 mb-6\">
      Are you sure you want to delete this dish item?
    </p>
    <div class=\"flex justify-center space-x-4\">
      <button
        id=\"confirmDeleteBtn\"
        class=\"bg-red-500 text-white py-2 px-4 rounded\"
      >
        Yes, Delete
      </button>
      <button
        onclick=\"hideDeleteModal()\"
        class=\"bg-gray-300 text-gray-800 py-2 px-4 rounded\"
      >
        Cancel
      </button>
    </div>
  </div>
</div>

<script>
  let deleteUrl = \"\";

  function showDeleteModal(url) {
    deleteUrl = url; // Store the delete URL
    document.getElementById(\"deleteModal\").classList.remove(\"hidden\");
  }

  function hideDeleteModal() {
    document.getElementById(\"deleteModal\").classList.add(\"hidden\");
  }

  document
    .getElementById(\"confirmDeleteBtn\")
    .addEventListener(\"click\", function () {
      window.location.href = deleteUrl; // Redirect to the delete URL
    });
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "dish/show.html.twig";
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
        return array (  142 => 50,  131 => 41,  129 => 40,  128 => 39,  120 => 34,  109 => 26,  104 => 23,  97 => 19,  91 => 15,  89 => 14,  82 => 10,  74 => 5,  70 => 3,  63 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "dish/show.html.twig", "E:\\for aws\\MenuCraft\\templates\\dish\\show.html.twig");
    }
}
