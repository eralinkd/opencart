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

/* catalog/view/template/auth/new_password.twig */
class __TwigTemplate_8a6e77a92551c1d40dc5e93fd03706e5 extends Template
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

<div class=\"auth-form\">
  <h1 class=\"title\">Create new passsword</h1>
  <form class=\"form\">
    <p class=\"description\">Set a new password and repeat it</p>
    <ui-input label=\"Password\" placeholder=\"Enter new Passsword \"></ui-input>
    <ui-input label=\"Password again\" placeholder=\"Enter new Passsword again\"></ui-input>
    <a href=\"";
        // line 9
        yield ($context["login_url"] ?? null);
        yield "\" class=\"login\">
      <ui-button-secondary class=\"button\">
        <span slot=\"text\">Confirm</span>
      </ui-button-secondary>
    </a>
  </form>
</div>

";
        // line 17
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/auth/new_password.twig";
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
        return array (  64 => 17,  53 => 9,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}

<div class=\"auth-form\">
  <h1 class=\"title\">Create new passsword</h1>
  <form class=\"form\">
    <p class=\"description\">Set a new password and repeat it</p>
    <ui-input label=\"Password\" placeholder=\"Enter new Passsword \"></ui-input>
    <ui-input label=\"Password again\" placeholder=\"Enter new Passsword again\"></ui-input>
    <a href=\"{{ login_url }}\" class=\"login\">
      <ui-button-secondary class=\"button\">
        <span slot=\"text\">Confirm</span>
      </ui-button-secondary>
    </a>
  </form>
</div>

{{ footer }}", "catalog/view/template/auth/new_password.twig", "D:\\xampp\\htdocs\\opencart\\catalog\\view\\template\\auth\\new_password.twig");
    }
}
