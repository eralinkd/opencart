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

/* catalog/view/template/account/history.twig */
class __TwigTemplate_59de930cdb16101036a2ac25f058ae19 extends Template
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

<div class=\"container title\">
  <h1>My Profile</h1>
</div>

<div class=\"container content\">
  <ul class=\"navigation\">
    <a href=\"";
        // line 9
        yield ($context["general_url"] ?? null);
        yield "\">
      <li>General</li>
    </a>
    <a href=\"";
        // line 12
        yield ($context["history_url"] ?? null);
        yield "\">
      <li class=\"active\">Order History</li>
    </a>
    <a href=\"#\">
      <li>Email Notification</li>
    </a>
    <a href=\"#\">
      <li>Wishlist</li>
    </a>
  </ul>

  <div class=\"block\">
    <h2 class=\"block-title\">Personal Info</h2>
  </div>
</div>

";
        // line 28
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/account/history.twig";
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
        return array (  78 => 28,  59 => 12,  53 => 9,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}

<div class=\"container title\">
  <h1>My Profile</h1>
</div>

<div class=\"container content\">
  <ul class=\"navigation\">
    <a href=\"{{ general_url }}\">
      <li>General</li>
    </a>
    <a href=\"{{ history_url }}\">
      <li class=\"active\">Order History</li>
    </a>
    <a href=\"#\">
      <li>Email Notification</li>
    </a>
    <a href=\"#\">
      <li>Wishlist</li>
    </a>
  </ul>

  <div class=\"block\">
    <h2 class=\"block-title\">Personal Info</h2>
  </div>
</div>

{{ footer }}", "catalog/view/template/account/history.twig", "D:\\xampp\\htdocs\\opencart\\catalog\\view\\template\\account\\history.twig");
    }
}
