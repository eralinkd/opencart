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

/* catalog/view/template/cart/cart.twig */
class __TwigTemplate_3396dbbd28dfee0279d32bcbc7406f80 extends Template
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

";
        // line 3
        yield ($context["CartItem"] ?? null);
        yield "

<div class=\"container\">
  <div class=\"cart-title\">
    <h1 class=\"title\">Cart (1)</h1>
  </div>
</div>

<div class=\"container cart-content\">

  <div class=\"block cart-items\">
    <cart-item></cart-item>
    <div class=\"separator\"></div>
    <cart-item></cart-item>
    <div class=\"separator\"></div>
    <cart-item></cart-item>
  </div>
  <div class=\"block summary\">
    <p class=\"text-20 summary-title\">Order Summary</p>
    <div class=\"subtotal line\">
      <p class=\"text-16\">Subtotal</p>
      <p class=\"text-20\">\$35</p>
    </div>
    <div class=\"discount line\">
      <p class=\"text-16\">Discount</p>
      <p class=\"text-20\">0</p>
    </div>
    <div class=\"separator\"></div>
    <div class=\"total line\">
      <p class=\"text-16\">Total</p>
      <p class=\"text-20\">\$35</p>
    </div>
    <ui-button-secondary class=\"button\">
      <span slot=\"text\">Continue to Checkout</span>
    </ui-button-secondary>
  </div>
</div>

<div class=\"input-test\">
  <ui-input label=\"Promo code\" placeholder=\"PROMO2025\" helper=\"Discount applies automatically\"></ui-input>

  <ui-input placeholder=\"+1 555 123 456\" name=\"customer_phone\">
    <span slot=\"label\">Phone number</span>
    <span slot=\"helper\">We will use this number for delivery updates</span>
  </ui-input>
</div>

";
        // line 50
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/cart/cart.twig";
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
        return array (  97 => 50,  47 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}

{{ CartItem|raw }}

<div class=\"container\">
  <div class=\"cart-title\">
    <h1 class=\"title\">Cart (1)</h1>
  </div>
</div>

<div class=\"container cart-content\">

  <div class=\"block cart-items\">
    <cart-item></cart-item>
    <div class=\"separator\"></div>
    <cart-item></cart-item>
    <div class=\"separator\"></div>
    <cart-item></cart-item>
  </div>
  <div class=\"block summary\">
    <p class=\"text-20 summary-title\">Order Summary</p>
    <div class=\"subtotal line\">
      <p class=\"text-16\">Subtotal</p>
      <p class=\"text-20\">\$35</p>
    </div>
    <div class=\"discount line\">
      <p class=\"text-16\">Discount</p>
      <p class=\"text-20\">0</p>
    </div>
    <div class=\"separator\"></div>
    <div class=\"total line\">
      <p class=\"text-16\">Total</p>
      <p class=\"text-20\">\$35</p>
    </div>
    <ui-button-secondary class=\"button\">
      <span slot=\"text\">Continue to Checkout</span>
    </ui-button-secondary>
  </div>
</div>

<div class=\"input-test\">
  <ui-input label=\"Promo code\" placeholder=\"PROMO2025\" helper=\"Discount applies automatically\"></ui-input>

  <ui-input placeholder=\"+1 555 123 456\" name=\"customer_phone\">
    <span slot=\"label\">Phone number</span>
    <span slot=\"helper\">We will use this number for delivery updates</span>
  </ui-input>
</div>

{{ footer }}", "catalog/view/template/cart/cart.twig", "D:\\xampp\\htdocs\\opencart\\catalog\\view\\template\\cart\\cart.twig");
    }
}
