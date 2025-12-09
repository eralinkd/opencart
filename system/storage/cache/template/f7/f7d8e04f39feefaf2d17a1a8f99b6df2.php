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

/* catalog/view/template/account/general.twig */
class __TwigTemplate_63726fbfca77a5b2521d2676ccc8e583 extends Template
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
      <li class=\"active\">General</li>
    </a>
    <a href=\"";
        // line 12
        yield ($context["history_url"] ?? null);
        yield "\">
      <li>Order History</li>
    </a>
    ";
        // line 18
        yield "    <a href=\"";
        yield ($context["wishlist_url"] ?? null);
        yield "\">
      <li>Wishlist</li>
    </a>
  </ul>

  <div class=\"block\">
    <h2 class=\"block-title\">Personal Info</h2>
    <div class=\"grid\">
      <ui-input label=\"First Name\" placeholder=\"Enter\"></ui-input>
      <ui-input label=\"Last Name\" placeholder=\"Enter\"></ui-input>
      <ui-input label=\"Phone\" placeholder=\"Enter\"></ui-input>
      <ui-input label=\"Email\" placeholder=\"Enter\"></ui-input>
      <ui-input label=\"Password\" placeholder=\"********\"></ui-input>
      <a href=\"";
        // line 31
        yield ($context["reset_password_url"] ?? null);
        yield "\" class=\"change-password\">Change Password</a>
    </div>
    <h2 class=\"block-title\">Delivery Info</h2>
    <div class=\"grid\">
      <ui-input label=\"Address\" placeholder=\"Kyiv, Nova Poshta branch № 1234 \"></ui-input>
      <a href=\"";
        // line 36
        yield ($context["change_delivery_info_url"] ?? null);
        yield "\" class=\"change-delivery-info\">Change Delivery Info</a>

    </div>
  </div>

  ";
        // line 41
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/account/general.twig";
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
        return array (  98 => 41,  90 => 36,  82 => 31,  65 => 18,  59 => 12,  53 => 9,  42 => 1,);
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
      <li class=\"active\">General</li>
    </a>
    <a href=\"{{ history_url }}\">
      <li>Order History</li>
    </a>
    {# <a href=\"#\">
      <li>Email Notification</li>
    </a> #}
    <a href=\"{{ wishlist_url }}\">
      <li>Wishlist</li>
    </a>
  </ul>

  <div class=\"block\">
    <h2 class=\"block-title\">Personal Info</h2>
    <div class=\"grid\">
      <ui-input label=\"First Name\" placeholder=\"Enter\"></ui-input>
      <ui-input label=\"Last Name\" placeholder=\"Enter\"></ui-input>
      <ui-input label=\"Phone\" placeholder=\"Enter\"></ui-input>
      <ui-input label=\"Email\" placeholder=\"Enter\"></ui-input>
      <ui-input label=\"Password\" placeholder=\"********\"></ui-input>
      <a href=\"{{reset_password_url}}\" class=\"change-password\">Change Password</a>
    </div>
    <h2 class=\"block-title\">Delivery Info</h2>
    <div class=\"grid\">
      <ui-input label=\"Address\" placeholder=\"Kyiv, Nova Poshta branch № 1234 \"></ui-input>
      <a href=\"{{change_delivery_info_url}}\" class=\"change-delivery-info\">Change Delivery Info</a>

    </div>
  </div>

  {{ footer }}", "catalog/view/template/account/general.twig", "D:\\xampp\\htdocs\\opencart\\catalog\\view\\template\\account\\general.twig");
    }
}
