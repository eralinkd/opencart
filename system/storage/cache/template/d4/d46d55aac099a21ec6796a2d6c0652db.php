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
  <h2 style=\"font-size: 2rem; margin-bottom: 1rem; color: #4b5563;\">Page not found</h2>
  <p style=\"font-size: 1.125rem; color: #6b7280; margin-bottom: 2rem;\">
    The requested page does not exist.
  </p>
</div>
";
        // line 9
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
        return array (  53 => 9,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div style=\"max-width: 1200px; margin: 0 auto; padding: 4rem 1rem; text-align: center;\">
  <h1 style=\"font-size: 4rem; font-weight: bold; margin-bottom: 1rem; color: #1f2937;\">404</h1>
  <h2 style=\"font-size: 2rem; margin-bottom: 1rem; color: #4b5563;\">Page not found</h2>
  <p style=\"font-size: 1.125rem; color: #6b7280; margin-bottom: 2rem;\">
    The requested page does not exist.
  </p>
</div>
{{ footer }}

", "catalog/view/template/error/not_found.twig", "/var/www/opencart/catalog/view/template/error/not_found.twig");
    }
}
