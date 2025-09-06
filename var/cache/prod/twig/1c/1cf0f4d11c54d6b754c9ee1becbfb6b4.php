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
class __TwigTemplate_38eed56c0c22da568bc4a3e16144524c extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "dish/edit.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Edit dish";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "    <div class=\"container mx-auto p-6\">
        <h1 class=\"text-4xl font-bold text-center text-blue-500 mb-8\">Edit dish: ";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["dish"] ?? null), "name", [], "any", false, false, false, 7), "html", null, true);
        yield "</h1>

        <div class=\"bg-white rounded-lg shadow-lg p-6\">
            <form method=\"POST\" action=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dish_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["dish"] ?? null), "id", [], "any", false, false, false, 10)]), "html", null, true);
        yield "\" enctype=\"multipart/form-data\">
                ";
        // line 11
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        yield "
                
                <div class=\"mb-4 font-semibold\">
                    ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 14), 'label', ["label" => "dish Name"]);
        yield "
                    ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "form-input p-3 border rounded-md w-full"]]);
        yield "
                </div>
                
                <div class=\"mb-4 font-semibold\">
                    ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "price", [], "any", false, false, false, 19), 'label', ["label" => "Price (€)"]);
        yield "
                    ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "price", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "form-input p-3 border rounded-md w-full"]]);
        yield "
                </div>
                
                <div class=\"mb-4 font-semibold\">
                    ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 24), 'label', ["label" => "Description"]);
        yield "
                    ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-input p-3 border rounded-md w-full"]]);
        yield "
                </div>

                <div class=\"mb-4 font-semibold\">
                    ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "category", [], "any", false, false, false, 29), 'label', ["label" => "Category"]);
        yield "
                    ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "category", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "form-input p-3 border rounded-md w-full"]]);
        yield "
                </div>
                
               <!-- Image Upload or URL -->
                <div class=\"mb-4 font-semibold\">
    <label for=\"dish_image\" class=\"form-label\">Upload Image or Enter Image URL</label>

    <!-- File Upload Input -->
    <div>
        ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "image", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-input p-3 border rounded-md w-full"]]);
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "save", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "bg-green-500 text-white py-2 px-4 rounded-lg hover:bg-green-600 transition"]]);
        yield "
                </div>

                ";
        // line 58
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
            </form>
        </div>
    </div>
";
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
        return array (  166 => 58,  160 => 55,  154 => 52,  138 => 39,  126 => 30,  122 => 29,  115 => 25,  111 => 24,  104 => 20,  100 => 19,  93 => 15,  89 => 14,  83 => 11,  79 => 10,  73 => 7,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "dish/edit.html.twig", "E:\\for aws\\MenuCraft\\templates\\dish\\edit.html.twig");
    }
}
