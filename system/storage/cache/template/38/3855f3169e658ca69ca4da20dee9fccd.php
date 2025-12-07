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

/* catalog/view/template/auth/login.twig */
class __TwigTemplate_84f7e7fd5006dcaf53743dfaa6d14b86 extends Template
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
  <h1 class=\"title\">Login</h1>
  <form class=\"form\">
    <ui-input label=\"Email\" placeholder=\"Enter\"></ui-input>
    <ui-input label=\"Password\" placeholder=\"Enter\" type=\"password\"></ui-input>
    <a href=\"";
        // line 8
        yield ($context["forgot_password_url"] ?? null);
        yield "\" class=\"forgot-password\">Forgot password?</a>
    <ui-button-secondary class=\"button\">
      <span slot=\"text\">Login</span>
    </ui-button-secondary>
  </form>
  <div class=\"separator\">
    <div class=\"divider\">
    </div>
    <div class=\"text\">or</div>
    <div class=\"divider\">
    </div>
  </div>
  <div class=\"oauth-button\">Continue with Google</div>
  <div class=\"signup-link\">Don't have an account? <a href=\"";
        // line 21
        yield ($context["signup_url"] ?? null);
        yield "\">Sign up</a></div>

</div>

";
        // line 25
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/auth/login.twig";
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
        return array (  75 => 25,  68 => 21,  52 => 8,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}

<div class=\"auth-form\">
  <h1 class=\"title\">Login</h1>
  <form class=\"form\">
    <ui-input label=\"Email\" placeholder=\"Enter\"></ui-input>
    <ui-input label=\"Password\" placeholder=\"Enter\" type=\"password\"></ui-input>
    <a href=\"{{ forgot_password_url }}\" class=\"forgot-password\">Forgot password?</a>
    <ui-button-secondary class=\"button\">
      <span slot=\"text\">Login</span>
    </ui-button-secondary>
  </form>
  <div class=\"separator\">
    <div class=\"divider\">
    </div>
    <div class=\"text\">or</div>
    <div class=\"divider\">
    </div>
  </div>
  <div class=\"oauth-button\">Continue with Google</div>
  <div class=\"signup-link\">Don't have an account? <a href=\"{{ signup_url }}\">Sign up</a></div>

</div>

{{ footer }}", "catalog/view/template/auth/login.twig", "D:\\xampp\\htdocs\\opencart\\catalog\\view\\template\\auth\\login.twig");
    }
}
