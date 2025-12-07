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

/* catalog/view/template/product/product.twig */
class __TwigTemplate_79eaa4a829e1e45d985521157daabd60 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield ($context["header"] ?? null);
        yield "

<section class=\"product-hero\">
\t<div class=\"container\">
\t\t<div class=\"gallery\">
\t\t\t<img src=\"";
        // line 6
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "image", [], "any", false, false, false, 6);
        yield "\" alt=\"";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 6);
        yield "\">
\t\t</div>
\t\t<div class=\"info\">
\t\t\t<p class=\"badge\">";
        // line 9
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "category", [], "any", false, false, false, 9);
        yield "</p>
\t\t\t<h1>";
        // line 10
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 10);
        yield "</h1>
\t\t\t<p class=\"price\">";
        // line 11
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "price_formatted", [], "any", false, false, false, 11);
        yield "</p>
\t\t\t<p class=\"availability\">";
        // line 12
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "availability", [], "any", false, false, false, 12);
        yield " · ";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "stock_text", [], "any", false, false, false, 12);
        yield "</p>
\t\t\t<div class=\"highlights\">
\t\t\t\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "highlights", [], "any", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 15
            yield "\t\t\t\t\t<div class=\"highlight\">
\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t<span>";
            // line 17
            yield $context["item"];
            yield "</span>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        yield "\t\t\t</div>
\t\t\t<div class=\"cta\">
\t\t\t\t<custom-button>
\t\t\t\t\t<span slot=\"text\">Add to cart</span>
\t\t\t\t</custom-button>
\t\t\t\t<button-secondary>
\t\t\t\t\t<span slot=\"text\">Request a quote</span>
\t\t\t\t</button-secondary>
\t\t\t</div>
\t\t</div>
\t</div>
</section>

<section class=\"product-details\">
\t<div class=\"container split\">
\t\t<div class=\"description\">
\t\t\t<h2>Product overview</h2>
\t\t\t<p>";
        // line 37
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "description", [], "any", false, false, false, 37);
        yield "</p>
\t\t</div>
\t\t<div class=\"specs\">
\t\t\t<h3>Tech specs</h3>
\t\t\t<ul>
\t\t\t\t";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "specs", [], "any", false, false, false, 42));
        foreach ($context['_seq'] as $context["_key"] => $context["spec"]) {
            // line 43
            yield "\t\t\t\t\t<li>
\t\t\t\t\t\t<span>";
            // line 44
            yield CoreExtension::getAttribute($this->env, $this->source, $context["spec"], "label", [], "any", false, false, false, 44);
            yield "</span>
\t\t\t\t\t\t<strong>";
            // line 45
            yield CoreExtension::getAttribute($this->env, $this->source, $context["spec"], "value", [], "any", false, false, false, 45);
            yield "</strong>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['spec'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        yield "\t\t\t</ul>
\t\t</div>
\t</div>
</section>

";
        // line 53
        if (($context["related_products"] ?? null)) {
            // line 54
            yield "<section class=\"product-related\">
\t<div class=\"container\">
\t\t<h3>Recommended for you</h3>
\t\t<div class=\"cards\">
\t\t\t";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["related_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 59
                yield "\t\t\t<div class=\"card\">
\t\t\t\t<img src=\"";
                // line 60
                yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 60);
                yield "\" alt=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 60);
                yield "\">
\t\t\t\t<div>
\t\t\t\t\t<p class=\"name\">";
                // line 62
                yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 62);
                yield "</p>
\t\t\t\t\t<p class=\"price\">";
                // line 63
                yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 63);
                yield "</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            yield "\t\t</div>
\t</div>
</section>
";
        }
        // line 71
        yield "
";
        // line 72
        yield ($context["footer"] ?? null);
        yield "

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/product/product.twig";
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
        return array (  193 => 72,  190 => 71,  184 => 67,  174 => 63,  170 => 62,  163 => 60,  160 => 59,  156 => 58,  150 => 54,  148 => 53,  141 => 48,  132 => 45,  128 => 44,  125 => 43,  121 => 42,  113 => 37,  94 => 20,  85 => 17,  81 => 15,  77 => 14,  70 => 12,  66 => 11,  62 => 10,  58 => 9,  50 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}

<section class=\"product-hero\">
\t<div class=\"container\">
\t\t<div class=\"gallery\">
\t\t\t<img src=\"{{ product.image }}\" alt=\"{{ product.name }}\">
\t\t</div>
\t\t<div class=\"info\">
\t\t\t<p class=\"badge\">{{ product.category }}</p>
\t\t\t<h1>{{ product.name }}</h1>
\t\t\t<p class=\"price\">{{ product.price_formatted }}</p>
\t\t\t<p class=\"availability\">{{ product.availability }} · {{ product.stock_text }}</p>
\t\t\t<div class=\"highlights\">
\t\t\t\t{% for item in product.highlights %}
\t\t\t\t\t<div class=\"highlight\">
\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t<span>{{ item }}</span>
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t\t<div class=\"cta\">
\t\t\t\t<custom-button>
\t\t\t\t\t<span slot=\"text\">Add to cart</span>
\t\t\t\t</custom-button>
\t\t\t\t<button-secondary>
\t\t\t\t\t<span slot=\"text\">Request a quote</span>
\t\t\t\t</button-secondary>
\t\t\t</div>
\t\t</div>
\t</div>
</section>

<section class=\"product-details\">
\t<div class=\"container split\">
\t\t<div class=\"description\">
\t\t\t<h2>Product overview</h2>
\t\t\t<p>{{ product.description }}</p>
\t\t</div>
\t\t<div class=\"specs\">
\t\t\t<h3>Tech specs</h3>
\t\t\t<ul>
\t\t\t\t{% for spec in product.specs %}
\t\t\t\t\t<li>
\t\t\t\t\t\t<span>{{ spec.label }}</span>
\t\t\t\t\t\t<strong>{{ spec.value }}</strong>
\t\t\t\t\t</li>
\t\t\t\t{% endfor %}
\t\t\t</ul>
\t\t</div>
\t</div>
</section>

{% if related_products %}
<section class=\"product-related\">
\t<div class=\"container\">
\t\t<h3>Recommended for you</h3>
\t\t<div class=\"cards\">
\t\t\t{% for item in related_products %}
\t\t\t<div class=\"card\">
\t\t\t\t<img src=\"{{ item.image }}\" alt=\"{{ item.name }}\">
\t\t\t\t<div>
\t\t\t\t\t<p class=\"name\">{{ item.name }}</p>
\t\t\t\t\t<p class=\"price\">{{ item.price }}</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>
\t</div>
</section>
{% endif %}

{{ footer }}

", "catalog/view/template/product/product.twig", "/var/www/opencart/catalog/view/template/product/product.twig");
    }
}
