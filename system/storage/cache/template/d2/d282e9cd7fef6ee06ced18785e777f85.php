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

/* catalog/view/template/auth/register.twig */
class __TwigTemplate_9934c9b6b2149e71f8cd2dcbdd6a02ea extends Template
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
  <h1 class=\"title\">Register</h1>
  <form class=\"form\">
    <ui-input label=\"Email\" placeholder=\"Enter\"></ui-input>
    <ui-input label=\"Password\" placeholder=\"Enter\" type=\"password\"></ui-input>
    <ui-button-secondary class=\"button\">
      <span slot=\"text\">Register</span>
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
  <div class=\"signup-link\">Already have an account? <a href=\"";
        // line 20
        yield ($context["login_url"] ?? null);
        yield "\">Login</a></div>

</div>

";
        // line 24
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/auth/register.twig";
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
        return array (  71 => 24,  64 => 20,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}

<div class=\"auth-form\">
  <h1 class=\"title\">Register</h1>
  <form class=\"form\">
    <ui-input label=\"Email\" placeholder=\"Enter\"></ui-input>
    <ui-input label=\"Password\" placeholder=\"Enter\" type=\"password\"></ui-input>
    <ui-button-secondary class=\"button\">
      <span slot=\"text\">Register</span>
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
  <div class=\"signup-link\">Already have an account? <a href=\"{{ login_url }}\">Login</a></div>

</div>

{{ footer }}", "catalog/view/template/auth/register.twig", "D:\\xampp\\htdocs\\opencart\\catalog\\view\\template\\auth\\register.twig");
    }
}
