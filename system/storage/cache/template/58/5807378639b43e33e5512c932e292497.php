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

/* catalog/view/template/auth/forgot_password.twig */
class __TwigTemplate_1269956e1e71800c9eef8534f129d30c extends Template
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
  <h1 class=\"title\">Forgot password</h1>
  <form class=\"form\">
    <p class=\"description\">Submit your email address and we will send you a link to reset your password.</p>
    <ui-input label=\"Email\" placeholder=\"Enter\"></ui-input>
    <a href=\"";
        // line 8
        yield ($context["email_sent_url"] ?? null);
        yield "\" class=\"email-sent\">
      <ui-button-secondary class=\"button\">
        <span slot=\"text\">Confirm</span>
      </ui-button-secondary>
    </a>
  </form>
</div>

";
        // line 16
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/auth/forgot_password.twig";
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
        return array (  63 => 16,  52 => 8,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}

<div class=\"auth-form\">
  <h1 class=\"title\">Forgot password</h1>
  <form class=\"form\">
    <p class=\"description\">Submit your email address and we will send you a link to reset your password.</p>
    <ui-input label=\"Email\" placeholder=\"Enter\"></ui-input>
    <a href=\"{{ email_sent_url }}\" class=\"email-sent\">
      <ui-button-secondary class=\"button\">
        <span slot=\"text\">Confirm</span>
      </ui-button-secondary>
    </a>
  </form>
</div>

{{ footer }}", "catalog/view/template/auth/forgot_password.twig", "D:\\xampp\\htdocs\\opencart\\catalog\\view\\template\\auth\\forgot_password.twig");
    }
}
