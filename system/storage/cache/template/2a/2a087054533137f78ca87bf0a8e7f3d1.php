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

/* catalog/view/template/common/components/CartItem.twig */
class __TwigTemplate_e56ddd8a2cd9508d5178e73b286aa380 extends Template
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
        yield "<template id=\"cart-item-template\">
  <style scoped>
    :host {
      display: block;
      width: 100%;
    }

    .cart-item {
      width: 100%;
      display: flex;
      gap: 20px;
      justify-content: space-between;
    }

    .item-info {
      display: flex;
      gap: 16px;
    }

    .image {
      padding: 10px;
      width: 100px;
      height: 100px;
      border-radius: 5px;
      border: 1px solid #D2D2D2;

      img {
        width: 100%;
        height: 100%;
        object-fit: contain;
      }
    }

    .info {
      display: flex;
      flex-direction: column;
      gap: 10px;
      max-width: 297px;
    }

    .product-name {
      color: #1F1F1F;
      font-family: Manrope;
      font-size: 18px;
      font-style: normal;
      font-weight: 500;
      line-height: normal;
      letter-spacing: -0.198px;
    }

    .product-description {
      color: #6D6D6D;
      font-family: Manrope;
      font-size: 14px;
      font-style: normal;
      font-weight: 400;
      line-height: normal;
      letter-spacing: -0.154px;
    }

    .quantity-block {
      display: flex;
      align-items: center;
      gap: 16px;
    }

    .quantity {
      color: #1F1F1F;
      font-family: Manrope;
      font-size: 16px;
      font-style: normal;
      font-weight: 500;
      line-height: normal;
      letter-spacing: -0.176px;
    }

    .control-add,
    .control-minus {
      width: 36px;
      height: 36px;
      cursor: pointer;
      transition: all 0.2s ease-in-out;
    }

    .control-add:hover,
    .control-minus:hover {
      filter: brightness(0.8);
    }

    .total-block {
      display: flex;
      align-items: center;
      gap: 32px;
    }

    .price {
      color: #000;
      font-family: Inter;
      font-size: 20px;
      font-style: normal;
      font-weight: 500;
      line-height: 120%;
      /* 24px */
    }

    .delete {
      width: 42px;
      height: 42px;
      cursor: pointer;
      transition: all 0.2s ease-in-out;
    }

    .delete:hover {
      filter: brightness(0.9);
    }
  </style>

  <div class=\"cart-item\">
    <div class=\"item-info\">
      <div class=\"image\">
        <img src=\"";
        // line 121
        yield ($context["server"] ?? null);
        yield "image/product-cart-placeholder.png\" alt=\"product image\">
      </div>
      <div class=\"info\">
        <div class=\"text-18 product-name\">Battery FPV 6S3P 12000mAh Li-ion Zeeepower</div>
        <div class=\"text-14 product-description\">Model: ZEEE12000-10-6S</div>
      </div>
    </div>
    <div class=\"quantity-block\">
      <div class=\"control-add\"><img src=\"";
        // line 129
        yield ($context["server"] ?? null);
        yield "image/cart/control-add.svg\" alt=\"plus\"></div>
      <div class=\"quantity\">1</div>
      <div class=\"control-minus\"><img src=\"";
        // line 131
        yield ($context["server"] ?? null);
        yield "image/cart/control-minus.svg\" alt=\"minus\"></div>
    </div>
    <div class=\"total-block\">
      <div class=\"price\">\$35</div>
      <div class=\"delete\"><img src=\"";
        // line 135
        yield ($context["server"] ?? null);
        yield "image/cart/trash.svg\" alt=\"delete\"></div>
    </div>
</template>

<script>
  if (!customElements.get('cart-item')) {
    class CartItem extends HTMLElement {
      constructor() {
        super();

        const template = document.getElementById('cart-item-template');
        if (!template) {
          console.error('Template \"cart-item-template\" not found');
          return;
        }

        const shadowRoot = this.attachShadow({ mode: 'open' });
        shadowRoot.appendChild(template.content.cloneNode(true));
      }
    }

    customElements.define('cart-item', CartItem);
  }
</script>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/common/components/CartItem.twig";
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
        return array (  187 => 135,  180 => 131,  175 => 129,  164 => 121,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<template id=\"cart-item-template\">
  <style scoped>
    :host {
      display: block;
      width: 100%;
    }

    .cart-item {
      width: 100%;
      display: flex;
      gap: 20px;
      justify-content: space-between;
    }

    .item-info {
      display: flex;
      gap: 16px;
    }

    .image {
      padding: 10px;
      width: 100px;
      height: 100px;
      border-radius: 5px;
      border: 1px solid #D2D2D2;

      img {
        width: 100%;
        height: 100%;
        object-fit: contain;
      }
    }

    .info {
      display: flex;
      flex-direction: column;
      gap: 10px;
      max-width: 297px;
    }

    .product-name {
      color: #1F1F1F;
      font-family: Manrope;
      font-size: 18px;
      font-style: normal;
      font-weight: 500;
      line-height: normal;
      letter-spacing: -0.198px;
    }

    .product-description {
      color: #6D6D6D;
      font-family: Manrope;
      font-size: 14px;
      font-style: normal;
      font-weight: 400;
      line-height: normal;
      letter-spacing: -0.154px;
    }

    .quantity-block {
      display: flex;
      align-items: center;
      gap: 16px;
    }

    .quantity {
      color: #1F1F1F;
      font-family: Manrope;
      font-size: 16px;
      font-style: normal;
      font-weight: 500;
      line-height: normal;
      letter-spacing: -0.176px;
    }

    .control-add,
    .control-minus {
      width: 36px;
      height: 36px;
      cursor: pointer;
      transition: all 0.2s ease-in-out;
    }

    .control-add:hover,
    .control-minus:hover {
      filter: brightness(0.8);
    }

    .total-block {
      display: flex;
      align-items: center;
      gap: 32px;
    }

    .price {
      color: #000;
      font-family: Inter;
      font-size: 20px;
      font-style: normal;
      font-weight: 500;
      line-height: 120%;
      /* 24px */
    }

    .delete {
      width: 42px;
      height: 42px;
      cursor: pointer;
      transition: all 0.2s ease-in-out;
    }

    .delete:hover {
      filter: brightness(0.9);
    }
  </style>

  <div class=\"cart-item\">
    <div class=\"item-info\">
      <div class=\"image\">
        <img src=\"{{ server }}image/product-cart-placeholder.png\" alt=\"product image\">
      </div>
      <div class=\"info\">
        <div class=\"text-18 product-name\">Battery FPV 6S3P 12000mAh Li-ion Zeeepower</div>
        <div class=\"text-14 product-description\">Model: ZEEE12000-10-6S</div>
      </div>
    </div>
    <div class=\"quantity-block\">
      <div class=\"control-add\"><img src=\"{{ server }}image/cart/control-add.svg\" alt=\"plus\"></div>
      <div class=\"quantity\">1</div>
      <div class=\"control-minus\"><img src=\"{{ server }}image/cart/control-minus.svg\" alt=\"minus\"></div>
    </div>
    <div class=\"total-block\">
      <div class=\"price\">\$35</div>
      <div class=\"delete\"><img src=\"{{ server }}image/cart/trash.svg\" alt=\"delete\"></div>
    </div>
</template>

<script>
  if (!customElements.get('cart-item')) {
    class CartItem extends HTMLElement {
      constructor() {
        super();

        const template = document.getElementById('cart-item-template');
        if (!template) {
          console.error('Template \"cart-item-template\" not found');
          return;
        }

        const shadowRoot = this.attachShadow({ mode: 'open' });
        shadowRoot.appendChild(template.content.cloneNode(true));
      }
    }

    customElements.define('cart-item', CartItem);
  }
</script>", "catalog/view/template/common/components/CartItem.twig", "D:\\xampp\\htdocs\\opencart\\catalog\\view\\template\\common\\components\\CartItem.twig");
    }
}
