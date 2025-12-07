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

/* catalog/view/template/product/product.twig */
class __TwigTemplate_9bff4839d072225e7981122a54f75ba9 extends Template
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
        $context["gallery_images"] = ($context["product_images"] ?? []);
        // line 4
        if (Twig\Extension\CoreExtension::testEmpty(($context["gallery_images"] ?? null))) {
            // line 5
            $context["fallback_image"] = (($context["server"] ?? null) . "image/product/product1.jpg");
            // line 6
            $context["gallery_images"] = [];
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 8
                $context["gallery_images"] = Twig\Extension\CoreExtension::merge(($context["gallery_images"] ?? null), [($context["fallback_image"] ?? null)]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 11
        yield "
<div class=\"container\">
\t<div class=\"product-title\">
\t\t<h1 class=\"title\">";
        // line 14
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 14);
        yield "</h1>
\t</div>
</div>

<div class=\"container product-info\">
\t<div class=\"images\">
\t\t<div class=\"image block\" data-gallery>
\t\t\t<div class=\"button-left\" role=\"button\" tabindex=\"0\" aria-label=\"Previous image\">
\t\t\t\t<img src=\"";
        // line 22
        yield ($context["server"] ?? null);
        yield "image/product/arrow-left.svg\" alt=\"arrow left\">
\t\t\t</div>
\t\t\t<img class=\"main-image\" src=\"";
        // line 24
        yield (($_v0 = ($context["gallery_images"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[0] ?? null) : null);
        yield "\" alt=\"";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 24);
        yield " main image\" data-index=\"0\">
\t\t\t<div class=\"button-right\" role=\"button\" tabindex=\"0\" aria-label=\"Next image\">
\t\t\t\t<img src=\"";
        // line 26
        yield ($context["server"] ?? null);
        yield "image/product/arrow-right.svg\" alt=\"arrow right\">
\t\t\t</div>
\t\t</div>
\t\t<div class=\"thumbs\" role=\"tablist\" aria-label=\"Product gallery thumbnails\">
\t\t\t";
        // line 35
        yield "\t\t\t<img class=\"block thumb active\" src=\"";
        yield ($context["server"] ?? null);
        yield "image/product/product1.jpg\" alt=\"";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 35);
        yield " thumbnail 1\"
\t\t\t\tdata-full-src=\"";
        // line 36
        yield ($context["server"] ?? null);
        yield "image/product/product1.jpg\" data-index=\"0\" tabindex=\"0\" role=\"tab\"
\t\t\t\taria-label=\"Show image 1\">
\t\t\t<img class=\"block thumb\" src=\"";
        // line 38
        yield ($context["server"] ?? null);
        yield "image/product/product2.jpg\" alt=\"";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 38);
        yield " thumbnail 2\"
\t\t\t\tdata-full-src=\"";
        // line 39
        yield ($context["server"] ?? null);
        yield "image/product/product2.jpg\" data-index=\"1\" tabindex=\"0\" role=\"tab\"
\t\t\t\taria-label=\"Show image 2\">
\t\t\t<img class=\"block thumb\" src=\"";
        // line 41
        yield ($context["server"] ?? null);
        yield "image/product/product3.png\" alt=\"";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 41);
        yield " thumbnail 3\"
\t\t\t\tdata-full-src=\"";
        // line 42
        yield ($context["server"] ?? null);
        yield "image/product/product3.png\" data-index=\"2\" tabindex=\"0\" role=\"tab\"
\t\t\t\taria-label=\"Show image 3\">
\t\t</div>
\t</div>
\t<div class=\"info block\">
\t\t<p class=\"text-20\">Key Features</p>
\t\t<div class=\"divider\"></div>
\t\t<ul class=\"list\">
\t\t\t<li>
\t\t\t\t<span class=\"key\">Brand</span><span class=\"value\">RadioMaster</span>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<span class=\"key\">Brand</span><span class=\"value\">RadioMaster</span>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<span class=\"key\">Brand</span><span class=\"value\">RadioMaster</span>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<span class=\"key\">Brand</span><span class=\"value\">RadioMaster</span>
\t\t\t</li>
\t\t</ul>
\t\t<p class=\"text-20\">Description</p>
\t\t<div class=\"divider\"></div>
\t\t<p class=\"text-16\">
\t\t\t";
        // line 66
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "description", [], "any", false, false, false, 66);
        yield "
\t\t</p>
\t</div>
\t<div class=\"payment\">
\t\t<div class=\"price block\">
\t\t\t<p class=\"text-32\">";
        // line 71
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "price_formatted", [], "any", false, false, false, 71);
        yield " uah</p>
\t\t\t<p class=\"text-16 availability\">";
        // line 72
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "stock_text", [], "any", false, false, false, 72) > 0)) {
            yield "In Stock";
        } else {
            yield "Out of Stock";
        }
        yield "</p>
\t\t\t<ui-button class=\"add-to-cart\">
\t\t\t\t<img slot=\"icon\" style=\"display: block; width: 32px; height: 32px; object-fit: contain\"
\t\t\t\t\tsrc=\"";
        // line 75
        yield ($context["server"] ?? null);
        yield "image/icons/cart.svg\" alt=\"Cart\" />
\t\t\t\t<span slot=\"text\">Add to cart </span>
\t\t\t</ui-button>
\t\t</div>
\t\t<div class=\"methods block\">
\t\t\t<p class=\"text-20\">Payment Methods</p>
\t\t\t<div class=\"list\">
\t\t\t\t<img class=\"item\" src=\"";
        // line 82
        yield ($context["server"] ?? null);
        yield "image/product/visa.png\" alt=\"Visa\">
\t\t\t\t<img class=\"item\" src=\"";
        // line 83
        yield ($context["server"] ?? null);
        yield "image/product/apple-pay.png\" alt=\"Apple Pay\">
\t\t\t\t<img class=\"item\" src=\"";
        // line 84
        yield ($context["server"] ?? null);
        yield "image/product/mastercard.png\" alt=\"Mastercard\">
\t\t\t\t<img class=\"item\" src=\"";
        // line 85
        yield ($context["server"] ?? null);
        yield "image/product/google-pay.png\" alt=\"Google Pay\">
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<div class=\"container products\" style=\"margin-bottom: 50px;\">
\t<h3 class=\"products-title\">You may also like</h3>
\t<div class=\"swiper products-swiper\">
\t\t<div class=\"swiper-wrapper\">
\t\t\t";
        // line 95
        if (($context["battery_products"] ?? null)) {
            // line 96
            yield "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["battery_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 97
                yield "\t\t\t<div class=\"swiper-slide\">
\t\t\t\t<div class=\"product-card\" data-product-url=\"";
                // line 98
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "url_raw", [], "any", false, false, false, 98);
                yield "\">
\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t<img src=\"";
                // line 100
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 100);
                yield "\" alt=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 100);
                yield "\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"product-info\">
\t\t\t\t\t\t<p class=\"availability text-16\">";
                // line 103
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "availability", [], "any", false, false, false, 103);
                yield "</p>
\t\t\t\t\t\t<h4 class=\"product-title\">";
                // line 104
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 104);
                yield "</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<p class=\"text-16\">Model: ";
                // line 106
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 106);
                yield "</p>
\t\t\t\t\t<p class=\"product-price text-32\">\$";
                // line 107
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price_formatted", [], "any", false, false, false, 107);
                yield "</p>
\t\t\t\t\t<ui-button-secondary class=\"product-button\">
\t\t\t\t\t\t<span slot=\"text\">View product</span>
\t\t\t\t\t</ui-button-secondary>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 114
            yield "\t\t\t";
        } else {
            // line 115
            yield "\t\t\t<div class=\"swiper-slide\">
\t\t\t\t<div class=\"product-card\">
\t\t\t\t\t<div class=\"product-info\">
\t\t\t\t\t\t<p class=\"text-20\">Battery catalog is being prepared. Stay tuned!</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        // line 123
        yield "\t\t</div>
\t\t<div class=\"swiper-pagination\"></div>
\t</div>
</div>


";
        // line 205
        yield "
<script>
\tfunction initProductsSwiper() {
\t\tif (typeof Swiper === 'undefined') {
\t\t\tsetTimeout(initProductsSwiper, 100);
\t\t\treturn;
\t\t}

\t\tconst productsSwiper = new Swiper('.products-swiper', {
\t\t\tslidesPerView: 3.5,
\t\t\tspaceBetween: 24,
\t\t\tloop: false,
\t\t\tpagination: {
\t\t\t\tel: '.swiper-pagination',
\t\t\t\tclickable: true,
\t\t\t\trenderBullet: function (index, className) {
\t\t\t\t\treturn '<span class=\"' + className + '\"></span>';
\t\t\t\t},
\t\t\t},
\t\t\tbreakpoints: {
\t\t\t\t320: {
\t\t\t\t\tslidesPerView: 1.2,
\t\t\t\t\tspaceBetween: 16,
\t\t\t\t},
\t\t\t\t768: {
\t\t\t\t\tslidesPerView: 2.5,
\t\t\t\t\tspaceBetween: 20,
\t\t\t\t},
\t\t\t\t1024: {
\t\t\t\t\tslidesPerView: 3.2,
\t\t\t\t\tspaceBetween: 24,
\t\t\t\t},
\t\t\t},
\t\t});
\t}

\tif (document.readyState === 'loading') {
\t\tdocument.addEventListener('DOMContentLoaded', initProductsSwiper);
\t} else {
\t\tinitProductsSwiper();
\t}

\tdocument.addEventListener('click', function (event) {
\t\tconst card = event.target.closest('.product-card[data-product-url]');
\t\tif (card) {
\t\t\twindow.location.href = card.getAttribute('data-product-url');
\t\t}
\t});
</script>

";
        // line 255
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/product/product.twig";
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
        return array (  336 => 255,  284 => 205,  276 => 123,  266 => 115,  263 => 114,  250 => 107,  246 => 106,  241 => 104,  237 => 103,  229 => 100,  224 => 98,  221 => 97,  216 => 96,  214 => 95,  201 => 85,  197 => 84,  193 => 83,  189 => 82,  179 => 75,  169 => 72,  165 => 71,  157 => 66,  130 => 42,  124 => 41,  119 => 39,  113 => 38,  108 => 36,  101 => 35,  94 => 26,  87 => 24,  82 => 22,  71 => 14,  66 => 11,  59 => 8,  55 => 7,  53 => 6,  51 => 5,  49 => 4,  47 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}

{% set gallery_images = product_images ?? [] %}
{% if gallery_images is empty %}
{% set fallback_image = server ~ 'image/product/product1.jpg' %}
{% set gallery_images = [] %}
{% for i in range(1, 5) %}
{% set gallery_images = gallery_images|merge([fallback_image]) %}
{% endfor %}
{% endif %}

<div class=\"container\">
\t<div class=\"product-title\">
\t\t<h1 class=\"title\">{{ product.name }}</h1>
\t</div>
</div>

<div class=\"container product-info\">
\t<div class=\"images\">
\t\t<div class=\"image block\" data-gallery>
\t\t\t<div class=\"button-left\" role=\"button\" tabindex=\"0\" aria-label=\"Previous image\">
\t\t\t\t<img src=\"{{ server }}image/product/arrow-left.svg\" alt=\"arrow left\">
\t\t\t</div>
\t\t\t<img class=\"main-image\" src=\"{{ gallery_images[0] }}\" alt=\"{{ product.name }} main image\" data-index=\"0\">
\t\t\t<div class=\"button-right\" role=\"button\" tabindex=\"0\" aria-label=\"Next image\">
\t\t\t\t<img src=\"{{ server }}image/product/arrow-right.svg\" alt=\"arrow right\">
\t\t\t</div>
\t\t</div>
\t\t<div class=\"thumbs\" role=\"tablist\" aria-label=\"Product gallery thumbnails\">
\t\t\t{# {% for image in gallery_images %}
\t\t\t<img class=\"block thumb{% if loop.first %} active{% endif %}\" src=\"{{ image }}\"
\t\t\t\talt=\"{{ product.name }} thumbnail {{ loop.index }}\" data-full-src=\"{{ image }}\" data-index=\"{{ loop.index0 }}\"
\t\t\t\ttabindex=\"0\" role=\"tab\" aria-label=\"Show image {{ loop.index }}\">
\t\t\t{% endfor %} #}
\t\t\t<img class=\"block thumb active\" src=\"{{ server }}image/product/product1.jpg\" alt=\"{{ product.name }} thumbnail 1\"
\t\t\t\tdata-full-src=\"{{ server }}image/product/product1.jpg\" data-index=\"0\" tabindex=\"0\" role=\"tab\"
\t\t\t\taria-label=\"Show image 1\">
\t\t\t<img class=\"block thumb\" src=\"{{ server }}image/product/product2.jpg\" alt=\"{{ product.name }} thumbnail 2\"
\t\t\t\tdata-full-src=\"{{ server }}image/product/product2.jpg\" data-index=\"1\" tabindex=\"0\" role=\"tab\"
\t\t\t\taria-label=\"Show image 2\">
\t\t\t<img class=\"block thumb\" src=\"{{ server }}image/product/product3.png\" alt=\"{{ product.name }} thumbnail 3\"
\t\t\t\tdata-full-src=\"{{ server }}image/product/product3.png\" data-index=\"2\" tabindex=\"0\" role=\"tab\"
\t\t\t\taria-label=\"Show image 3\">
\t\t</div>
\t</div>
\t<div class=\"info block\">
\t\t<p class=\"text-20\">Key Features</p>
\t\t<div class=\"divider\"></div>
\t\t<ul class=\"list\">
\t\t\t<li>
\t\t\t\t<span class=\"key\">Brand</span><span class=\"value\">RadioMaster</span>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<span class=\"key\">Brand</span><span class=\"value\">RadioMaster</span>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<span class=\"key\">Brand</span><span class=\"value\">RadioMaster</span>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<span class=\"key\">Brand</span><span class=\"value\">RadioMaster</span>
\t\t\t</li>
\t\t</ul>
\t\t<p class=\"text-20\">Description</p>
\t\t<div class=\"divider\"></div>
\t\t<p class=\"text-16\">
\t\t\t{{ product.description }}
\t\t</p>
\t</div>
\t<div class=\"payment\">
\t\t<div class=\"price block\">
\t\t\t<p class=\"text-32\">{{ product.price_formatted }} uah</p>
\t\t\t<p class=\"text-16 availability\">{% if product.stock_text > 0 %}In Stock{% else %}Out of Stock{% endif %}</p>
\t\t\t<ui-button class=\"add-to-cart\">
\t\t\t\t<img slot=\"icon\" style=\"display: block; width: 32px; height: 32px; object-fit: contain\"
\t\t\t\t\tsrc=\"{{ server }}image/icons/cart.svg\" alt=\"Cart\" />
\t\t\t\t<span slot=\"text\">Add to cart </span>
\t\t\t</ui-button>
\t\t</div>
\t\t<div class=\"methods block\">
\t\t\t<p class=\"text-20\">Payment Methods</p>
\t\t\t<div class=\"list\">
\t\t\t\t<img class=\"item\" src=\"{{ server }}image/product/visa.png\" alt=\"Visa\">
\t\t\t\t<img class=\"item\" src=\"{{ server }}image/product/apple-pay.png\" alt=\"Apple Pay\">
\t\t\t\t<img class=\"item\" src=\"{{ server }}image/product/mastercard.png\" alt=\"Mastercard\">
\t\t\t\t<img class=\"item\" src=\"{{ server }}image/product/google-pay.png\" alt=\"Google Pay\">
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<div class=\"container products\" style=\"margin-bottom: 50px;\">
\t<h3 class=\"products-title\">You may also like</h3>
\t<div class=\"swiper products-swiper\">
\t\t<div class=\"swiper-wrapper\">
\t\t\t{% if battery_products %}
\t\t\t{% for product in battery_products %}
\t\t\t<div class=\"swiper-slide\">
\t\t\t\t<div class=\"product-card\" data-product-url=\"{{ product.url_raw }}\">
\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t<img src=\"{{ product.image }}\" alt=\"{{ product.name }}\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"product-info\">
\t\t\t\t\t\t<p class=\"availability text-16\">{{ product.availability }}</p>
\t\t\t\t\t\t<h4 class=\"product-title\">{{ product.name }}</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<p class=\"text-16\">Model: {{ product.model }}</p>
\t\t\t\t\t<p class=\"product-price text-32\">\${{ product.price_formatted }}</p>
\t\t\t\t\t<ui-button-secondary class=\"product-button\">
\t\t\t\t\t\t<span slot=\"text\">View product</span>
\t\t\t\t\t</ui-button-secondary>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t{% endfor %}
\t\t\t{% else %}
\t\t\t<div class=\"swiper-slide\">
\t\t\t\t<div class=\"product-card\">
\t\t\t\t\t<div class=\"product-info\">
\t\t\t\t\t\t<p class=\"text-20\">Battery catalog is being prepared. Stay tuned!</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t{% endif %}
\t\t</div>
\t\t<div class=\"swiper-pagination\"></div>
\t</div>
</div>


{# <section class=\"product-hero\">
\t<div class=\"container\">
\t\t<div class=\"gallery\">
\t\t\t<img src=\"{{ product.image }}\" alt=\"{{ product.name }}\">
\t\t</div>
\t\t<div class=\"info\">
\t\t\t<p class=\"badge\">{{ product.category }}</p>
\t\t\t<h1>{{ product.name }}</h1>
\t\t\t<p class=\"price\">{{ product.price_formatted }}</p>
\t\t\t<p class=\"availability\">{{ product.availability }} · {{ product.stock_text }}</p>
\t\t\t<div class=\"highlights\">
\t\t\t\t{% for item in product.highlights %}
\t\t\t\t<div class=\"highlight\">
\t\t\t\t\t<i></i>
\t\t\t\t\t<span>{{ item }}</span>
\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t\t<div class=\"cta\">
\t\t\t\t<custom-button>
\t\t\t\t\t<span slot=\"text\">Add to cart</span>
\t\t\t\t</custom-button>
\t\t\t\t<button-secondary>
\t\t\t\t\t<span slot=\"text\">Request a quote</span>
\t\t\t\t</button-secondary>
\t\t\t</div>
\t\t\t<div class=\"description\">
\t\t\t\t<h2>Product overview</h2>
\t\t\t\t<p>{{ product.description }}</p>
\t\t\t</div>
\t\t\t<div class=\"specs\">
\t\t\t\t<h3>Tech specs</h3>
\t\t\t\t<ul>
\t\t\t\t\t{% for spec in product.specs %}
\t\t\t</div>
\t\t</div>
</section>

<section class=\"product-details\">
\t<div class=\"container split\">
\t\t<div class=\"description\">
\t\t\t<h2>Product overview</h2>
\t\t\t<p>{{ product.description }}</p>
\t\t</div>
\t\t<div class=\"specs\">
\t\t\t<h3>Tech specs</h3>
\t\t\t<ul>
\t\t\t\t{% for spec in product.specs %}
\t\t\t\t<li>
\t\t\t\t\t<span>{{ spec.label }}</span>
\t\t\t\t\t<strong>{{ spec.value }}</strong>
\t\t\t\t</li>
\t\t\t\t{% endfor %}
\t\t\t</ul>
\t\t</div>
\t</div>
</section>

{% if related_products %}
<section class=\"product-related\">
\t<div class=\"container\">
\t\t<h3>Recommended for you</h3>
\t\t<div class=\"cards\">
\t\t\t{% for item in related_products %}
\t\t\t<div class=\"card\">
\t\t\t\t<img src=\"{{ item.image }}\" alt=\"{{ item.name }}\">
\t\t\t\t<div>
\t\t\t\t\t<p class=\"name\">{{ item.name }}</p>
\t\t\t\t\t<p class=\"price\">{{ item.price }}</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>
\t</div>
</section>
{% endif %} #}

<script>
\tfunction initProductsSwiper() {
\t\tif (typeof Swiper === 'undefined') {
\t\t\tsetTimeout(initProductsSwiper, 100);
\t\t\treturn;
\t\t}

\t\tconst productsSwiper = new Swiper('.products-swiper', {
\t\t\tslidesPerView: 3.5,
\t\t\tspaceBetween: 24,
\t\t\tloop: false,
\t\t\tpagination: {
\t\t\t\tel: '.swiper-pagination',
\t\t\t\tclickable: true,
\t\t\t\trenderBullet: function (index, className) {
\t\t\t\t\treturn '<span class=\"' + className + '\"></span>';
\t\t\t\t},
\t\t\t},
\t\t\tbreakpoints: {
\t\t\t\t320: {
\t\t\t\t\tslidesPerView: 1.2,
\t\t\t\t\tspaceBetween: 16,
\t\t\t\t},
\t\t\t\t768: {
\t\t\t\t\tslidesPerView: 2.5,
\t\t\t\t\tspaceBetween: 20,
\t\t\t\t},
\t\t\t\t1024: {
\t\t\t\t\tslidesPerView: 3.2,
\t\t\t\t\tspaceBetween: 24,
\t\t\t\t},
\t\t\t},
\t\t});
\t}

\tif (document.readyState === 'loading') {
\t\tdocument.addEventListener('DOMContentLoaded', initProductsSwiper);
\t} else {
\t\tinitProductsSwiper();
\t}

\tdocument.addEventListener('click', function (event) {
\t\tconst card = event.target.closest('.product-card[data-product-url]');
\t\tif (card) {
\t\t\twindow.location.href = card.getAttribute('data-product-url');
\t\t}
\t});
</script>

{{ footer }}", "catalog/view/template/product/product.twig", "D:\\xampp\\htdocs\\opencart\\catalog\\view\\template\\product\\product.twig");
    }
}
