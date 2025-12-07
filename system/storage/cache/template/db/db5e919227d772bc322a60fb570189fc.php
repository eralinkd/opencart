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

/* catalog/view/template/auth/email_sent.twig */
class __TwigTemplate_f72847a7317d130fc0f0f24edb6cdd90 extends Template
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
  <img src=\"";
        // line 4
        yield ($context["server"] ?? null);
        yield "image/icons/email-sent.png\" alt=\"Email sent\" class=\"email-sent-icon\">
  <h1 class=\"title\">The email was sent!</h1>
  <p>We have sent you an email with instruction to reset your password.</p>
  <a href=\"";
        // line 7
        yield ($context["login_url"] ?? null);
        yield "\" class=\"login\">
    <ui-button-secondary class=\"button\">
      <span slot=\"text\">Back to login</span>
    </ui-button-secondary>
  </a>
</div>

";
        // line 14
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/auth/email_sent.twig";
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
        return array (  64 => 14,  54 => 7,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}

<div class=\"auth-form\">
  <img src=\"{{ server }}image/icons/email-sent.png\" alt=\"Email sent\" class=\"email-sent-icon\">
  <h1 class=\"title\">The email was sent!</h1>
  <p>We have sent you an email with instruction to reset your password.</p>
  <a href=\"{{ login_url }}\" class=\"login\">
    <ui-button-secondary class=\"button\">
      <span slot=\"text\">Back to login</span>
    </ui-button-secondary>
  </a>
</div>

{{ footer }}", "catalog/view/template/auth/email_sent.twig", "D:\\xampp\\htdocs\\opencart\\catalog\\view\\template\\auth\\email_sent.twig");
    }
}
