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

/* catalog/view/template/common/currency.twig */
class __TwigTemplate_6f9eab69f8e5a24c1909dd5161f36130 extends Template
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
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["currencies"] ?? null)) > 1)) {
            // line 2
            yield "  <form id=\"form-currency\">
    <div class=\"dropdown\">

      <a href=\"#\" data-bs-toggle=\"dropdown\" class=\"dropdown-toggle\">";
            // line 5
            if (($context["symbol_left"] ?? null)) {
                yield "<strong>";
                yield ($context["symbol_left"] ?? null);
                yield "</strong>";
            } elseif (($context["symbol_right"] ?? null)) {
                yield "<strong>";
                yield ($context["symbol_right"] ?? null);
                yield "</strong>";
            }
            // line 6
            yield "

        <span class=\"d-none d-md-inline\">";
            // line 8
            yield ($context["text_currency"] ?? null);
            yield "</span> <i class=\"fa-solid fa-caret-down\"></i></a>


      <ul class=\"dropdown-menu\">
        ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["currencies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 13
                yield "          ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 13)) {
                    // line 14
                    yield "            <li><a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 14);
                    yield "\" class=\"dropdown-item\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 14);
                    yield " ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 14);
                    yield "</a></li>
          ";
                } else {
                    // line 16
                    yield "            <li><a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 16);
                    yield "\" class=\"dropdown-item\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "symbol_right", [], "any", false, false, false, 16);
                    yield " ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 16);
                    yield "</a></li>
          ";
                }
                // line 18
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['currency'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            yield "      </ul>
    </div>
  </form>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/common/currency.twig";
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
        return array (  103 => 19,  97 => 18,  87 => 16,  77 => 14,  74 => 13,  70 => 12,  63 => 8,  59 => 6,  49 => 5,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if currencies|length > 1 %}
  <form id=\"form-currency\">
    <div class=\"dropdown\">

      <a href=\"#\" data-bs-toggle=\"dropdown\" class=\"dropdown-toggle\">{% if symbol_left %}<strong>{{ symbol_left }}</strong>{% elseif symbol_right %}<strong>{{ symbol_right }}</strong>{% endif %}


        <span class=\"d-none d-md-inline\">{{ text_currency }}</span> <i class=\"fa-solid fa-caret-down\"></i></a>


      <ul class=\"dropdown-menu\">
        {% for currency in currencies %}
          {% if currency.symbol_left %}
            <li><a href=\"{{ currency.code }}\" class=\"dropdown-item\">{{ currency.symbol_left }} {{ currency.title }}</a></li>
          {% else %}
            <li><a href=\"{{ currency.code }}\" class=\"dropdown-item\">{{ currency.symbol_right }} {{ currency.title }}</a></li>
          {% endif %}
        {% endfor %}
      </ul>
    </div>
  </form>
{% endif %}
", "catalog/view/template/common/currency.twig", "/var/www/opencart/catalog/view/template/common/currency.twig");
    }
}
