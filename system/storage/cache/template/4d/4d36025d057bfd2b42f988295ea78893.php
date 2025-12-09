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

/* catalog/view/template/account/wishlist.twig */
class __TwigTemplate_99d3a4fe185f0a71ff8ff606c815f306 extends Template
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
      <li>Order History</li>
    </a>
    <a href=\"";
        // line 15
        yield ($context["wishlist_url"] ?? null);
        yield "\">
      <li class=\"active\">Wishlist</li>
    </a>
  </ul>

  <div class=\"block\">
    <h2 class=\"block-title\">Wishlist</h2>
    <div class=\"grid\">
      ";
        // line 23
        if (($context["wishlist_products"] ?? null)) {
            // line 24
            yield "      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["wishlist_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 25
                yield "      <div class=\"product-card\" data-product-url=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "url_raw", [], "any", false, false, false, 25);
                yield "\">
        <div class=\"wishlist-icon\"><img src=\"";
                // line 26
                yield ($context["server"] ?? null);
                yield "image/icons/heart-yellow.svg\" alt=\"add to wishlist\"></div>
        <div class=\"product-image\">
          <img src=\"";
                // line 28
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 28);
                yield "\" alt=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 28);
                yield "\">
        </div>
        <div class=\"product-info\">
          <p class=\"availability text-16\">";
                // line 31
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "availability", [], "any", false, false, false, 31);
                yield "</p>
          <h4 class=\"product-title\">";
                // line 32
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 32);
                yield "</h4>
        </div>
        <p class=\"text-16\">Model: ";
                // line 34
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 34);
                yield "</p>
        <p class=\"product-price text-32\">";
                // line 35
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price_formatted", [], "any", false, false, false, 35);
                yield "</p>
        <ui-button-secondary class=\"product-button\">
          <span slot=\"text\">View product</span>
        </ui-button-secondary>
      </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            yield "      ";
        } else {
            // line 42
            yield "      <p class=\"text-16\">No products in wishlist</p>
      ";
        }
        // line 44
        yield "    </div>
  </div>

</div>

<script>
  document.addEventListener('click', function (event) {
    const card = event.target.closest('.product-card[data-product-url]');
    if (card) {
      window.location.href = card.getAttribute('data-product-url');
    }
  });
</script>

";
        // line 58
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/account/wishlist.twig";
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
        return array (  149 => 58,  133 => 44,  129 => 42,  126 => 41,  114 => 35,  110 => 34,  105 => 32,  101 => 31,  93 => 28,  88 => 26,  83 => 25,  78 => 24,  76 => 23,  65 => 15,  59 => 12,  53 => 9,  42 => 1,);
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
      <li>Order History</li>
    </a>
    <a href=\"{{ wishlist_url }}\">
      <li class=\"active\">Wishlist</li>
    </a>
  </ul>

  <div class=\"block\">
    <h2 class=\"block-title\">Wishlist</h2>
    <div class=\"grid\">
      {% if wishlist_products %}
      {% for product in wishlist_products %}
      <div class=\"product-card\" data-product-url=\"{{ product.url_raw }}\">
        <div class=\"wishlist-icon\"><img src=\"{{ server }}image/icons/heart-yellow.svg\" alt=\"add to wishlist\"></div>
        <div class=\"product-image\">
          <img src=\"{{ product.image }}\" alt=\"{{ product.name }}\">
        </div>
        <div class=\"product-info\">
          <p class=\"availability text-16\">{{ product.availability }}</p>
          <h4 class=\"product-title\">{{ product.name }}</h4>
        </div>
        <p class=\"text-16\">Model: {{ product.model }}</p>
        <p class=\"product-price text-32\">{{ product.price_formatted }}</p>
        <ui-button-secondary class=\"product-button\">
          <span slot=\"text\">View product</span>
        </ui-button-secondary>
      </div>
      {% endfor %}
      {% else %}
      <p class=\"text-16\">No products in wishlist</p>
      {% endif %}
    </div>
  </div>

</div>

<script>
  document.addEventListener('click', function (event) {
    const card = event.target.closest('.product-card[data-product-url]');
    if (card) {
      window.location.href = card.getAttribute('data-product-url');
    }
  });
</script>

{{ footer }}", "catalog/view/template/account/wishlist.twig", "D:\\xampp\\htdocs\\opencart\\catalog\\view\\template\\account\\wishlist.twig");
    }
}
