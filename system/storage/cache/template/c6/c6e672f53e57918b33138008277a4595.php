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

/* catalog/view/template/checkout/payment_method.twig */
class __TwigTemplate_63493f688942d4871e70e192377fcc11 extends Template
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
        yield "<fieldset>
  <legend>";
        // line 2
        yield ($context["heading_title"] ?? null);
        yield "</legend>
  <div class=\"input-group\">
    <span class=\"input-group-text\"><i class=\"fa fa-credit-card\"></i></span><input type=\"text\" name=\"payment_method\" value=\"";
        // line 4
        yield ($context["payment_method"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_payment_method"] ?? null);
        yield "\" id=\"input-payment-method\" class=\"form-control\" readonly/>
    <button type=\"button\" id=\"button-payment-methods\" class=\"btn btn-primary\">";
        // line 5
        yield ($context["button_choose"] ?? null);
        yield "</button>
  </div>
  <input type=\"hidden\" name=\"code\" value=\"";
        // line 7
        yield ($context["code"] ?? null);
        yield "\" id=\"input-payment-code\"/>
  <div id=\"error-payment-method\" class=\"invalid-feedback\"></div>
</fieldset>
<br/>
<div class=\"mb-2\">
  <label for=\"input-comment\" class=\"form-label\"><strong>";
        // line 12
        yield ($context["text_comments"] ?? null);
        yield "</strong></label>
  <textarea name=\"comment\" rows=\"4\" id=\"input-comment\" class=\"form-control\">";
        // line 13
        yield ($context["comment"] ?? null);
        yield "</textarea>
</div>
";
        // line 15
        if (($context["text_agree"] ?? null)) {
            // line 16
            yield "<div class=\"text-end\">
  <label for=\"input-checkout-agree\" class=\"form-check-label\">";
            // line 17
            yield ($context["text_agree"] ?? null);
            yield "</label>
  <x-switch name=\"agree\" value=\"1\" checked=\"";
            // line 18
            yield ($context["agree"] ?? null);
            yield "\" input-id=\"input-checkout-agree\" input-class=\"form-switch form-switch-lg form-check-reverse form-check-inline me-0\"></x-switch>
</div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/checkout/payment_method.twig";
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
        return array (  87 => 18,  83 => 17,  80 => 16,  78 => 15,  73 => 13,  69 => 12,  61 => 7,  56 => 5,  50 => 4,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<fieldset>
  <legend>{{ heading_title }}</legend>
  <div class=\"input-group\">
    <span class=\"input-group-text\"><i class=\"fa fa-credit-card\"></i></span><input type=\"text\" name=\"payment_method\" value=\"{{ payment_method }}\" placeholder=\"{{ entry_payment_method }}\" id=\"input-payment-method\" class=\"form-control\" readonly/>
    <button type=\"button\" id=\"button-payment-methods\" class=\"btn btn-primary\">{{ button_choose }}</button>
  </div>
  <input type=\"hidden\" name=\"code\" value=\"{{ code }}\" id=\"input-payment-code\"/>
  <div id=\"error-payment-method\" class=\"invalid-feedback\"></div>
</fieldset>
<br/>
<div class=\"mb-2\">
  <label for=\"input-comment\" class=\"form-label\"><strong>{{ text_comments }}</strong></label>
  <textarea name=\"comment\" rows=\"4\" id=\"input-comment\" class=\"form-control\">{{ comment }}</textarea>
</div>
{% if text_agree %}
<div class=\"text-end\">
  <label for=\"input-checkout-agree\" class=\"form-check-label\">{{ text_agree }}</label>
  <x-switch name=\"agree\" value=\"1\" checked=\"{{ agree }}\" input-id=\"input-checkout-agree\" input-class=\"form-switch form-switch-lg form-check-reverse form-check-inline me-0\"></x-switch>
</div>
{% endif %}", "catalog/view/template/checkout/payment_method.twig", "/var/www/opencart/catalog/view/template/checkout/payment_method.twig");
    }
}
