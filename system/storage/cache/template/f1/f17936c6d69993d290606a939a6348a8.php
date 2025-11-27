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

/* catalog/view/template/common/home.twig */
class __TwigTemplate_26f3baffc38463740621a491e0c161b3 extends Template
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
        // line 5
        yield "
<div class=\"container wide hero\">
\t<div class=\"content\">
\t\t<img class=\"image\" src=\"";
        // line 8
        yield ($context["server"] ?? null);
        yield "image/home/banner.png\" alt=\"Hero\">
\t\t<div class=\"decor\"></div>
\t\t<h1 class=\"text-white\">Drone parts built for any load</h1>
\t\t<custom-button>
\t\t\t<img slot=\"icon\" style=\"display: block; width: 100%; height: 100%; object-fit: contain;\"
\t\t\t\tsrc=\"";
        // line 13
        yield ($context["server"] ?? null);
        yield "image/icons/arrow-top-right.svg\" alt=\"Arrow Right\">
\t\t\t<span slot=\"text\">See catalog
\t\t\t</span>
\t\t</custom-button>
\t</div>
</div>

<div class=\"container products\">
\t<h3 class=\"products-title\">Featured Products</h3>
\t<div class=\"swiper products-swiper\">
\t\t<div class=\"swiper-wrapper\">
\t\t\t";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 25
            yield "\t\t\t<div class=\"swiper-slide\">
\t\t\t\t<div class=\"product-card\">
\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t<img src=\"";
            // line 28
            yield ($context["server"] ?? null);
            yield "image/product1.png\" alt=\"Product\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"product-info\">
\t\t\t\t\t\t<p class=\"availability text-16\">In Stock</p>
\t\t\t\t\t\t<h4 class=\"product-title\">Battery FPV 6S3P 12000mAh Li-ion Zeeepower</h4>
\t\t\t\t\t\t<p class=\"text-16\">Model: ZEEE12000-10-6S</p>
\t\t\t\t\t\t<p class=\"product-price text-32\">\$35</p>
\t\t\t\t\t\t<button-secondary class=\"product-button\">
\t\t\t\t\t\t\t<span slot=\"text\">Add to Cart</span>
\t\t\t\t\t\t</button-secondary>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "\t\t</div>
\t\t<div class=\"swiper-pagination\"></div>
\t</div>
</div>

<div class=\"container wide why-us\">
\t<h2>Why SkyFix?</h2>
\t<div class=\"grid\">
\t\t<div class=\"item\">
\t\t\t<div class=\"icon\"><img src=\"";
        // line 51
        yield ($context["server"] ?? null);
        yield "image/home/whyus/icon1.svg\" alt=\"Icon\"></div>
\t\t\t<p class=\"text-20\">Our team of enthusiasts will help you choose the right part
\t\t\t</p>
\t\t</div>
\t\t<div class=\"item\">
\t\t\t<div class=\"icon\"><img src=\"";
        // line 56
        yield ($context["server"] ?? null);
        yield "image/home/whyus/icon2.svg\" alt=\"Icon\"></div>
\t\t\t<p class=\"text-20\">Verified batteries and controllers for stable flight
\t\t\t</p>
\t\t</div>
\t\t<div class=\"item\">
\t\t\t<div class=\"icon\"><img src=\"";
        // line 61
        yield ($context["server"] ?? null);
        yield "image/home/whyus/icon3.svg\" alt=\"Icon\"></div>
\t\t\t<p class=\"text-20\">Fast shipping and money-back guarantee
\t\t\t</p>
\t\t</div>
\t</div>
</div>

<div class=\"container products\">
\t<h3 class=\"products-title\">Controllers</h3>
\t<div class=\"swiper products-swiper\">
\t\t<div class=\"swiper-wrapper\">
\t\t\t";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 73
            yield "\t\t\t<div class=\"swiper-slide\">
\t\t\t\t<div class=\"product-card\">
\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t<img src=\"";
            // line 76
            yield ($context["server"] ?? null);
            yield "image/product1.png\" alt=\"Product\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"product-info\">
\t\t\t\t\t\t<p class=\"availability text-16\">In Stock</p>
\t\t\t\t\t\t<h4 class=\"product-title\">Battery FPV 6S3P 12000mAh Li-ion Zeeepower</h4>
\t\t\t\t\t\t<p class=\"text-16\">Model: ZEEE12000-10-6S</p>
\t\t\t\t\t\t<p class=\"product-price text-32\">\$35</p>
\t\t\t\t\t\t<button-secondary class=\"product-button\">
\t\t\t\t\t\t\t<span slot=\"text\">Add to Cart</span>
\t\t\t\t\t\t</button-secondary>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        yield "\t\t</div>
\t\t<div class=\"swiper-pagination\"></div>
\t</div>
</div>

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
</script>

";
        // line 137
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/common/home.twig";
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
        return array (  222 => 137,  173 => 90,  153 => 76,  148 => 73,  144 => 72,  130 => 61,  122 => 56,  114 => 51,  103 => 42,  83 => 28,  78 => 25,  74 => 24,  60 => 13,  52 => 8,  47 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}

{# Подключаем локальный компонент карточки только для этой страницы #}
{# {{ card_component|raw }} #}

<div class=\"container wide hero\">
\t<div class=\"content\">
\t\t<img class=\"image\" src=\"{{ server }}image/home/banner.png\" alt=\"Hero\">
\t\t<div class=\"decor\"></div>
\t\t<h1 class=\"text-white\">Drone parts built for any load</h1>
\t\t<custom-button>
\t\t\t<img slot=\"icon\" style=\"display: block; width: 100%; height: 100%; object-fit: contain;\"
\t\t\t\tsrc=\"{{ server }}image/icons/arrow-top-right.svg\" alt=\"Arrow Right\">
\t\t\t<span slot=\"text\">See catalog
\t\t\t</span>
\t\t</custom-button>
\t</div>
</div>

<div class=\"container products\">
\t<h3 class=\"products-title\">Featured Products</h3>
\t<div class=\"swiper products-swiper\">
\t\t<div class=\"swiper-wrapper\">
\t\t\t{% for i in range(1, 10) %}
\t\t\t<div class=\"swiper-slide\">
\t\t\t\t<div class=\"product-card\">
\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t<img src=\"{{ server }}image/product1.png\" alt=\"Product\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"product-info\">
\t\t\t\t\t\t<p class=\"availability text-16\">In Stock</p>
\t\t\t\t\t\t<h4 class=\"product-title\">Battery FPV 6S3P 12000mAh Li-ion Zeeepower</h4>
\t\t\t\t\t\t<p class=\"text-16\">Model: ZEEE12000-10-6S</p>
\t\t\t\t\t\t<p class=\"product-price text-32\">\$35</p>
\t\t\t\t\t\t<button-secondary class=\"product-button\">
\t\t\t\t\t\t\t<span slot=\"text\">Add to Cart</span>
\t\t\t\t\t\t</button-secondary>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>
\t\t<div class=\"swiper-pagination\"></div>
\t</div>
</div>

<div class=\"container wide why-us\">
\t<h2>Why SkyFix?</h2>
\t<div class=\"grid\">
\t\t<div class=\"item\">
\t\t\t<div class=\"icon\"><img src=\"{{ server }}image/home/whyus/icon1.svg\" alt=\"Icon\"></div>
\t\t\t<p class=\"text-20\">Our team of enthusiasts will help you choose the right part
\t\t\t</p>
\t\t</div>
\t\t<div class=\"item\">
\t\t\t<div class=\"icon\"><img src=\"{{ server }}image/home/whyus/icon2.svg\" alt=\"Icon\"></div>
\t\t\t<p class=\"text-20\">Verified batteries and controllers for stable flight
\t\t\t</p>
\t\t</div>
\t\t<div class=\"item\">
\t\t\t<div class=\"icon\"><img src=\"{{ server }}image/home/whyus/icon3.svg\" alt=\"Icon\"></div>
\t\t\t<p class=\"text-20\">Fast shipping and money-back guarantee
\t\t\t</p>
\t\t</div>
\t</div>
</div>

<div class=\"container products\">
\t<h3 class=\"products-title\">Controllers</h3>
\t<div class=\"swiper products-swiper\">
\t\t<div class=\"swiper-wrapper\">
\t\t\t{% for i in range(1, 10) %}
\t\t\t<div class=\"swiper-slide\">
\t\t\t\t<div class=\"product-card\">
\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t<img src=\"{{ server }}image/product1.png\" alt=\"Product\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"product-info\">
\t\t\t\t\t\t<p class=\"availability text-16\">In Stock</p>
\t\t\t\t\t\t<h4 class=\"product-title\">Battery FPV 6S3P 12000mAh Li-ion Zeeepower</h4>
\t\t\t\t\t\t<p class=\"text-16\">Model: ZEEE12000-10-6S</p>
\t\t\t\t\t\t<p class=\"product-price text-32\">\$35</p>
\t\t\t\t\t\t<button-secondary class=\"product-button\">
\t\t\t\t\t\t\t<span slot=\"text\">Add to Cart</span>
\t\t\t\t\t\t</button-secondary>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>
\t\t<div class=\"swiper-pagination\"></div>
\t</div>
</div>

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
</script>

{{ footer }}", "catalog/view/template/common/home.twig", "D:\\xampp\\htdocs\\opencart\\catalog\\view\\template\\common\\home.twig");
    }
}
