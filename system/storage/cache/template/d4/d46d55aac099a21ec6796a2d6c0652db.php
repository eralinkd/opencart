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

/* catalog/view/template/error/not_found.twig */
class __TwigTemplate_fe8caee7472b75d314d6e4951e6b6ebb extends Template
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
<div style=\"max-width: 1200px; margin: 0 auto; padding: 4rem 1rem; text-align: center;\">
  <h1 style=\"font-size: 4rem; font-weight: bold; margin-bottom: 1rem; color: #1f2937;\">404</h1>
  <h2 style=\"font-size: 2rem; margin-bottom: 1rem; color: #4b5563;\">";
        // line 4
        yield ((array_key_exists("heading_title", $context)) ? (Twig\Extension\CoreExtension::default(($context["heading_title"] ?? null), "Page not found")) : ("Page not found"));
        yield "</h2>
  <p style=\"font-size: 1.125rem; color: #6b7280; margin-bottom: 2rem;\">
    ";
        // line 6
        yield ((array_key_exists("text_error", $context)) ? (Twig\Extension\CoreExtension::default(($context["text_error"] ?? null), "Запрашиваемая страница не существует.")) : ("Запрашиваемая страница не существует."));
        yield "
  </p>
  <a href=\"";
        // line 8
        yield ((array_key_exists("home", $context)) ? (Twig\Extension\CoreExtension::default(($context["home"] ?? null), "/")) : ("/"));
        yield "\" style=\"display: inline-block; padding: 0.75rem 1.5rem; background: #2563eb; color: white; border-radius: 0.375rem; text-decoration: none; font-weight: 600;\">
    Вернуться на главную
  </a>
</div>
";
        // line 12
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
        return "catalog/view/template/error/not_found.twig";
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
        return array (  65 => 12,  58 => 8,  53 => 6,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div style=\"max-width: 1200px; margin: 0 auto; padding: 4rem 1rem; text-align: center;\">
  <h1 style=\"font-size: 4rem; font-weight: bold; margin-bottom: 1rem; color: #1f2937;\">404</h1>
  <h2 style=\"font-size: 2rem; margin-bottom: 1rem; color: #4b5563;\">{{ heading_title|default('Page not found') }}</h2>
  <p style=\"font-size: 1.125rem; color: #6b7280; margin-bottom: 2rem;\">
    {{ text_error|default('Запрашиваемая страница не существует.') }}
  </p>
  <a href=\"{{ home|default('/') }}\" style=\"display: inline-block; padding: 0.75rem 1.5rem; background: #2563eb; color: white; border-radius: 0.375rem; text-decoration: none; font-weight: 600;\">
    Вернуться на главную
  </a>
</div>
{{ footer }}

", "catalog/view/template/error/not_found.twig", "/var/www/opencart/catalog/view/template/error/not_found.twig");
    }
}
