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

/* catalog/view/template/checkout/existing_customer.twig */
class __TwigTemplate_46528d2c9a7577c6692694d6bbe9f118 extends Template
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

<div class=\"container\">
  <h1 class=\"title\">Checkout</h1>

  <ul class=\"navigation\">
    <a href=\"";
        // line 7
        yield ($context["url_checkout_new"] ?? null);
        yield "\">
      <li>I’m New</li>
    </a>
    <a href=\"";
        // line 10
        yield ($context["url_checkout_existing"] ?? null);
        yield "\">
      <li class=\"active\">I Have an Account</li>
    </a>
  </ul>
</div>

<div class=\"container content\">
  <div class=\"block customer-info\">
    <p class=\"fields-title\">Contact information</p>
    <div class=\"field\">
      <p>James Thor</p>
      <a href=\"";
        // line 21
        yield ($context["profile_url"] ?? null);
        yield "\">Change</a>
    </div>

    <p class=\"fields-title\">Delivery Information</p>
    <div class=\"field\">
      <p>Kyiv, Nova Poshta branch № 1234 </p>
      <a href=\"";
        // line 27
        yield ($context["profile_url"] ?? null);
        yield "\">Change</a>
    </div>
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
    <a href=\"";
        // line 45
        yield ($context["url_checkout_new"] ?? null);
        yield "\">
      <ui-button-secondary class=\"button\">
        <span slot=\"text\">Continue to Checkout</span>
      </ui-button-secondary>
    </a>
  </div>
</div>



";
        // line 55
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/checkout/existing_customer.twig";
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
        return array (  114 => 55,  101 => 45,  80 => 27,  71 => 21,  57 => 10,  51 => 7,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{header}}

<div class=\"container\">
  <h1 class=\"title\">Checkout</h1>

  <ul class=\"navigation\">
    <a href=\"{{ url_checkout_new }}\">
      <li>I’m New</li>
    </a>
    <a href=\"{{ url_checkout_existing }}\">
      <li class=\"active\">I Have an Account</li>
    </a>
  </ul>
</div>

<div class=\"container content\">
  <div class=\"block customer-info\">
    <p class=\"fields-title\">Contact information</p>
    <div class=\"field\">
      <p>James Thor</p>
      <a href=\"{{profile_url}}\">Change</a>
    </div>

    <p class=\"fields-title\">Delivery Information</p>
    <div class=\"field\">
      <p>Kyiv, Nova Poshta branch № 1234 </p>
      <a href=\"{{profile_url}}\">Change</a>
    </div>
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
    <a href=\"{{ url_checkout_new }}\">
      <ui-button-secondary class=\"button\">
        <span slot=\"text\">Continue to Checkout</span>
      </ui-button-secondary>
    </a>
  </div>
</div>



{{footer}}", "catalog/view/template/checkout/existing_customer.twig", "/var/www/opencart/catalog/view/template/checkout/existing_customer.twig");
    }
}
