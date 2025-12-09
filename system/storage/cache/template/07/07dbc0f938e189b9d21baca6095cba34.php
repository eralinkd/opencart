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
class __TwigTemplate_13dc46807eb3136a5c5ef0e7264e3519 extends Template
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
    <h1 class=\"title\">Cart (";
        // line 7
        yield ($context["total_items"] ?? null);
        yield ")</h1>
  </div>
</div>

<div class=\"container cart-content\">
  ";
        // line 12
        if (($context["cart_items"] ?? null)) {
            // line 13
            yield "  <div class=\"block cart-items\" id=\"cart-items\">
    ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["cart_items"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 15
                yield "    <cart-item 
      data-cart-id=\"";
                // line 16
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "cart_id", [], "any", true, true, false, 16)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "cart_id", [], "any", false, false, false, 16), 0)) : (0));
                yield "\"
      data-product-id=\"";
                // line 17
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product_id", [], "any", true, true, false, 17)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product_id", [], "any", false, false, false, 17), 0)) : (0));
                yield "\"
      data-name=\"";
                // line 18
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", true, true, false, 18)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 18), "")) : ("")));
                yield "\"
      data-model=\"";
                // line 19
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "model", [], "any", true, true, false, 19)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "model", [], "any", false, false, false, 19), "")) : ("")));
                yield "\"
      data-image=\"";
                // line 20
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image", [], "any", true, true, false, 20)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 20), "")) : ("")));
                yield "\"
      data-quantity=\"";
                // line 21
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", true, true, false, 21)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 21), 1)) : (1));
                yield "\"
      data-price=\"";
                // line 22
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "price", [], "any", true, true, false, 22)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 22), 0)) : (0));
                yield "\"
      data-price-formatted=\"";
                // line 23
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "price_formatted", [], "any", true, true, false, 23)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "price_formatted", [], "any", false, false, false, 23), "\$0.00")) : ("\$0.00")));
                yield "\"
      data-total=\"";
                // line 24
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "total", [], "any", true, true, false, 24)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "total", [], "any", false, false, false, 24), 0)) : (0));
                yield "\"
      data-total-formatted=\"";
                // line 25
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "total_formatted", [], "any", true, true, false, 25)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "total_formatted", [], "any", false, false, false, 25), "\$0.00")) : ("\$0.00")));
                yield "\"
      data-stock-status=\"";
                // line 26
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "stock_status", [], "any", false, false, false, 26)) ? ("1") : ("0"));
                yield "\"
    ></cart-item>
    ";
                // line 28
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 28)) {
                    // line 29
                    yield "    <div class=\"separator\"></div>
    ";
                }
                // line 31
                yield "    ";
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
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            yield "  </div>
  ";
        } else {
            // line 34
            yield "  <div class=\"block cart-items\">
    <p class=\"text-20\" style=\"text-align: center; padding: 40px;\">Your cart is empty</p>
  </div>
  ";
        }
        // line 38
        yield "  <div class=\"block summary\">
    <p class=\"text-20 summary-title\">Order Summary</p>
    <div class=\"subtotal line\">
      <p class=\"text-16\">Subtotal</p>
      <p class=\"text-20\" id=\"cart-subtotal\">";
        // line 42
        yield ($context["subtotal_formatted"] ?? null);
        yield "</p>
    </div>
    <div class=\"discount line\">
      <p class=\"text-16\">Discount</p>
      <p class=\"text-20\" id=\"cart-discount\">";
        // line 46
        yield ($context["discount_formatted"] ?? null);
        yield "</p>
    </div>
    <div class=\"separator\"></div>
    <div class=\"total line\">
      <p class=\"text-16\">Total</p>
      <p class=\"text-20\" id=\"cart-total\">";
        // line 51
        yield ($context["total_formatted"] ?? null);
        yield "</p>
    </div>
    ";
        // line 53
        if (($context["cart_items"] ?? null)) {
            // line 54
            yield "    <a href=\"";
            yield ($context["url_checkout_new"] ?? null);
            yield "\">
      <ui-button-secondary class=\"button\">
        <span slot=\"text\">Continue to Checkout</span>
      </ui-button-secondary>
    </a>
    ";
        }
        // line 60
        yield "  </div>
</div>
</div>

<script>
  // Cart API URLs
  window.cartApi = {
    add: '";
        // line 67
        yield ($context["url_cart_add"] ?? null);
        yield "',
    update: '";
        // line 68
        yield ($context["url_cart_update"] ?? null);
        yield "',
    remove: '";
        // line 69
        yield ($context["url_cart_remove"] ?? null);
        yield "',
    get: '";
        // line 70
        yield ($context["url_cart_get"] ?? null);
        yield "'
  };
</script>

";
        // line 74
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
        return array (  228 => 74,  221 => 70,  217 => 69,  213 => 68,  209 => 67,  200 => 60,  190 => 54,  188 => 53,  183 => 51,  175 => 46,  168 => 42,  162 => 38,  156 => 34,  152 => 32,  138 => 31,  134 => 29,  132 => 28,  127 => 26,  123 => 25,  119 => 24,  115 => 23,  111 => 22,  107 => 21,  103 => 20,  99 => 19,  95 => 18,  91 => 17,  87 => 16,  84 => 15,  67 => 14,  64 => 13,  62 => 12,  54 => 7,  47 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}

{{ CartItem|raw }}

<div class=\"container\">
  <div class=\"cart-title\">
    <h1 class=\"title\">Cart ({{ total_items }})</h1>
  </div>
</div>

<div class=\"container cart-content\">
  {% if cart_items %}
  <div class=\"block cart-items\" id=\"cart-items\">
    {% for item in cart_items %}
    <cart-item 
      data-cart-id=\"{{ item.cart_id|default(0) }}\"
      data-product-id=\"{{ item.product_id|default(0) }}\"
      data-name=\"{{ item.name|default('')|e }}\"
      data-model=\"{{ item.model|default('')|e }}\"
      data-image=\"{{ item.image|default('')|e }}\"
      data-quantity=\"{{ item.quantity|default(1) }}\"
      data-price=\"{{ item.price|default(0) }}\"
      data-price-formatted=\"{{ item.price_formatted|default('\$0.00')|e }}\"
      data-total=\"{{ item.total|default(0) }}\"
      data-total-formatted=\"{{ item.total_formatted|default('\$0.00')|e }}\"
      data-stock-status=\"{{ item.stock_status ? '1' : '0' }}\"
    ></cart-item>
    {% if not loop.last %}
    <div class=\"separator\"></div>
    {% endif %}
    {% endfor %}
  </div>
  {% else %}
  <div class=\"block cart-items\">
    <p class=\"text-20\" style=\"text-align: center; padding: 40px;\">Your cart is empty</p>
  </div>
  {% endif %}
  <div class=\"block summary\">
    <p class=\"text-20 summary-title\">Order Summary</p>
    <div class=\"subtotal line\">
      <p class=\"text-16\">Subtotal</p>
      <p class=\"text-20\" id=\"cart-subtotal\">{{ subtotal_formatted }}</p>
    </div>
    <div class=\"discount line\">
      <p class=\"text-16\">Discount</p>
      <p class=\"text-20\" id=\"cart-discount\">{{ discount_formatted }}</p>
    </div>
    <div class=\"separator\"></div>
    <div class=\"total line\">
      <p class=\"text-16\">Total</p>
      <p class=\"text-20\" id=\"cart-total\">{{ total_formatted }}</p>
    </div>
    {% if cart_items %}
    <a href=\"{{ url_checkout_new }}\">
      <ui-button-secondary class=\"button\">
        <span slot=\"text\">Continue to Checkout</span>
      </ui-button-secondary>
    </a>
    {% endif %}
  </div>
</div>
</div>

<script>
  // Cart API URLs
  window.cartApi = {
    add: '{{ url_cart_add }}',
    update: '{{ url_cart_update }}',
    remove: '{{ url_cart_remove }}',
    get: '{{ url_cart_get }}'
  };
</script>

{{ footer }}", "catalog/view/template/cart/cart.twig", "/var/www/opencart/catalog/view/template/cart/cart.twig");
    }
}
