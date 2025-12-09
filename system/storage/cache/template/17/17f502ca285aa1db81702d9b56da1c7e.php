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

/* catalog/view/template/checkout/new_customer.twig */
class __TwigTemplate_ac070abb764007317d6f480909df9f35 extends Template
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
      <li class=\"active\">I’m New</li>
    </a>
    <a href=\"";
        // line 10
        yield ($context["url_checkout_existing"] ?? null);
        yield "\">
      <li>I Have an Account</li>
    </a>
  </ul>
</div>

<div class=\"container content\">
  <div>
    <div class=\"block login\">
      <h1 class=\"title\">Login</h1>
      <div class=\"auth-form\">
        <form class=\"form\">
          <ui-input label=\"Email\" placeholder=\"Enter\"></ui-input>
          <ui-input label=\"Password\" placeholder=\"Enter\" type=\"password\"></ui-input>
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
      </div>
    </div>
    <div class=\"block fields\">
      <p class=\"fields-title\">Contact information</p>
      <div class=\"grid\">
        <ui-input label=\"First Name\" placeholder=\"Enter\"></ui-input>
        <ui-input label=\"Last Name\" placeholder=\"Enter\"></ui-input>
        <ui-input label=\"Phone\" placeholder=\"Enter\"></ui-input>
        <ui-input label=\"Email\" placeholder=\"Enter\"></ui-input>
      </div>

      <p class=\"fields-title mt-32\">Delivery Information</p>
      <div class=\"delivery-methods\">
        ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["delivery_methods"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["method"]) {
            // line 50
            yield "        <label class=\"delivery-option\">
          <input type=\"radio\" name=\"delivery_method\" value=\"";
            // line 51
            yield CoreExtension::getAttribute($this->env, $this->source, $context["method"], "id", [], "any", false, false, false, 51);
            yield "\" ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 51)) {
                yield "checked";
            }
            yield ">
          <div class=\"delivery-option__content\">
            <p class=\"delivery-option__title\">";
            // line 53
            yield CoreExtension::getAttribute($this->env, $this->source, $context["method"], "title", [], "any", false, false, false, 53);
            yield "</p>
          </div>
        </label>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['method'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        yield "      </div>
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
        // line 75
        yield ($context["url_checkout_new"] ?? null);
        yield "\">
      <ui-button-secondary class=\"button\">
        <span slot=\"text\">Continue to Checkout</span>
      </ui-button-secondary>
    </a>
  </div>
</div>


";
        // line 84
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/checkout/new_customer.twig";
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
        return array (  178 => 84,  166 => 75,  146 => 57,  128 => 53,  119 => 51,  116 => 50,  99 => 49,  57 => 10,  51 => 7,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{header}}

<div class=\"container\">
  <h1 class=\"title\">Checkout</h1>

  <ul class=\"navigation\">
    <a href=\"{{ url_checkout_new }}\">
      <li class=\"active\">I’m New</li>
    </a>
    <a href=\"{{ url_checkout_existing }}\">
      <li>I Have an Account</li>
    </a>
  </ul>
</div>

<div class=\"container content\">
  <div>
    <div class=\"block login\">
      <h1 class=\"title\">Login</h1>
      <div class=\"auth-form\">
        <form class=\"form\">
          <ui-input label=\"Email\" placeholder=\"Enter\"></ui-input>
          <ui-input label=\"Password\" placeholder=\"Enter\" type=\"password\"></ui-input>
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
      </div>
    </div>
    <div class=\"block fields\">
      <p class=\"fields-title\">Contact information</p>
      <div class=\"grid\">
        <ui-input label=\"First Name\" placeholder=\"Enter\"></ui-input>
        <ui-input label=\"Last Name\" placeholder=\"Enter\"></ui-input>
        <ui-input label=\"Phone\" placeholder=\"Enter\"></ui-input>
        <ui-input label=\"Email\" placeholder=\"Enter\"></ui-input>
      </div>

      <p class=\"fields-title mt-32\">Delivery Information</p>
      <div class=\"delivery-methods\">
        {% for method in delivery_methods %}
        <label class=\"delivery-option\">
          <input type=\"radio\" name=\"delivery_method\" value=\"{{ method.id }}\" {% if loop.first %}checked{% endif %}>
          <div class=\"delivery-option__content\">
            <p class=\"delivery-option__title\">{{ method.title }}</p>
          </div>
        </label>
        {% endfor %}
      </div>
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


{{footer}}", "catalog/view/template/checkout/new_customer.twig", "/var/www/opencart/catalog/view/template/checkout/new_customer.twig");
    }
}
