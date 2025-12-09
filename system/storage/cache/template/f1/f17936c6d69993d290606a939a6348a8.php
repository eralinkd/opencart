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

<div class=\"container wide hero\">
\t<div class=\"content\">
\t\t<img class=\"image\" src=\"";
        // line 5
        yield ($context["server"] ?? null);
        yield "image/home/banner.png\" alt=\"Hero\">
\t\t<div class=\"decor\"></div>
\t\t<h1 class=\"text-white\">Drone parts built for any load</h1>
\t\t";
        // line 16
        yield "\t</div>
</div>

<div class=\"container products\" id=\"batteries\">
\t<h3 class=\"products-title\">Batteries</h3>
\t<div class=\"swiper products-swiper\">
\t\t<div class=\"swiper-wrapper\">
\t\t\t";
        // line 23
        if (($context["battery_products"] ?? null)) {
            // line 24
            yield "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["battery_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 25
                yield "\t\t\t<div class=\"swiper-slide\">
\t\t\t\t<div class=\"product-card\" data-product-url=\"";
                // line 26
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "url_raw", [], "any", false, false, false, 26);
                yield "\">
\t\t\t\t\t<div class=\"wishlist-icon\"><img src=\"";
                // line 27
                yield ($context["server"] ?? null);
                yield "image/icons/heart-yellow.svg\" alt=\"add to wishlist\"></div>
\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t<img src=\"";
                // line 29
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 29);
                yield "\" alt=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 29);
                yield "\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"product-info\">
\t\t\t\t\t\t<p class=\"availability text-16\">";
                // line 32
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "availability", [], "any", false, false, false, 32);
                yield "</p>
\t\t\t\t\t\t<h4 class=\"product-title\">";
                // line 33
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 33);
                yield "</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<p class=\"text-16\">Model: ";
                // line 35
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 35);
                yield "</p>
\t\t\t\t\t<p class=\"product-price text-32\">\$";
                // line 36
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price_formatted", [], "any", false, false, false, 36);
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
            // line 43
            yield "\t\t\t";
        } else {
            // line 44
            yield "\t\t\t<div class=\"swiper-slide\">
\t\t\t\t<div class=\"product-card\">
\t\t\t\t\t<div class=\"product-info\">
\t\t\t\t\t\t<p class=\"text-20\">Battery catalog is being prepared. Stay tuned!</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        // line 52
        yield "\t\t</div>
\t\t<div class=\"swiper-pagination\"></div>
\t</div>
</div>

<div class=\"container wide why-us\">
\t<h2>Why SkyFix?</h2>
\t<div class=\"grid\">
\t\t<div class=\"item\">
\t\t\t<div class=\"icon\"><img src=\"";
        // line 61
        yield ($context["server"] ?? null);
        yield "image/home/whyus/icon1.svg\" alt=\"Icon\"></div>
\t\t\t<p class=\"text-20\">Our team of enthusiasts will help you choose the right part
\t\t\t</p>
\t\t</div>
\t\t<div class=\"item\">
\t\t\t<div class=\"icon\"><img src=\"";
        // line 66
        yield ($context["server"] ?? null);
        yield "image/home/whyus/icon2.svg\" alt=\"Icon\"></div>
\t\t\t<p class=\"text-20\">Verified batteries and controllers for stable flight
\t\t\t</p>
\t\t</div>
\t\t<div class=\"item\">
\t\t\t<div class=\"icon\"><img src=\"";
        // line 71
        yield ($context["server"] ?? null);
        yield "image/home/whyus/icon3.svg\" alt=\"Icon\"></div>
\t\t\t<p class=\"text-20\">Fast shipping and money-back guarantee
\t\t\t</p>
\t\t</div>
\t</div>
</div>

<div class=\"container products\" id=\"controllers\">
\t<h3 class=\"products-title\">Controllers</h3>
\t<div class=\"swiper products-swiper\">
\t\t<div class=\"swiper-wrapper\">
\t\t\t";
        // line 82
        if (($context["controller_products"] ?? null)) {
            // line 83
            yield "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["controller_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 84
                yield "\t\t\t<div class=\"swiper-slide\">
\t\t\t\t<div class=\"product-card\" data-product-url=\"";
                // line 85
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "url_raw", [], "any", false, false, false, 85);
                yield "\">
\t\t\t\t\t<div class=\"wishlist-icon\"><img src=\"";
                // line 86
                yield ($context["server"] ?? null);
                yield "image/icons/heart-yellow.svg\" alt=\"add to wishlist\"></div>
\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t<img src=\"";
                // line 88
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 88);
                yield "\" alt=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 88);
                yield "\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"product-info\">
\t\t\t\t\t\t<p class=\"availability text-16\">";
                // line 91
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "availability", [], "any", false, false, false, 91);
                yield "</p>
\t\t\t\t\t\t<h4 class=\"product-title\">";
                // line 92
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 92);
                yield "</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<p class=\"text-16\">Model: ";
                // line 94
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 94);
                yield "</p>
\t\t\t\t\t<p class=\"product-price text-32\">\$";
                // line 95
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price_formatted", [], "any", false, false, false, 95);
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
            // line 102
            yield "\t\t\t";
        } else {
            // line 103
            yield "\t\t\t<div class=\"swiper-slide\">
\t\t\t\t<div class=\"product-card\">
\t\t\t\t\t<div class=\"product-info\">
\t\t\t\t\t\t<p class=\"text-20\">Battery catalog is being prepared. Stay tuned!</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        // line 111
        yield "\t\t</div>
\t\t<div class=\"swiper-pagination\"></div>
\t</div>
</div>

<div class=\"container wide reliability-drones\">
\t<img class=\"image\" src=\"";
        // line 117
        yield ($context["server"] ?? null);
        yield "image/home/reabilitydrones.png\" alt=\"bg\">
\t<div class=\"text\">
\t\t<div class=\"empty\"></div>
\t\t<div class=\"block\">
\t\t\t<p class=\"text-40\">Reliability for Your Drones</p>
\t\t\t<p class=\"text-24\">We provide proven solutions for heavy-duty use. Our team of enthusiasts tests every component
\t\t\t\tto ensure your drone always performs reliably.</p>
\t\t\t";
        // line 130
        yield "\t\t</div>
\t</div>
</div>

<script>
\tfunction initProductsSwiper() {
\t\tif (typeof Swiper === 'undefined') {
\t\t\tsetTimeout(initProductsSwiper, 100);
\t\t\treturn;
\t\t}

\t\tnew Swiper('.products-swiper', {
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

\tfunction initWishlistIcons() {
\t\tconst wishlistIcons = document.querySelectorAll('.products .wishlist-icon');

\t\twishlistIcons.forEach((icon) => {
\t\t\ticon.addEventListener('click', (event) => {
\t\t\t\tevent.preventDefault();
\t\t\t\tevent.stopPropagation();

\t\t\t\tconst heart = icon.querySelector('img');
\t\t\t\tif (heart) {
\t\t\t\t\theart.classList.toggle('active');
\t\t\t\t}

\t\t\t\ticon.classList.toggle('is-active');
\t\t\t});
\t\t});
\t}

\tfunction initHomePage() {
\t\tinitProductsSwiper();
\t\tinitWishlistIcons();
\t}

\tif (document.readyState === 'loading') {
\t\tdocument.addEventListener('DOMContentLoaded', initHomePage);
\t} else {
\t\tinitHomePage();
\t}

\tdocument.addEventListener('click', function (event) {
\t\tconst card = event.target.closest('.product-card[data-product-url]');
\t\tif (card) {
\t\t\twindow.location.href = card.getAttribute('data-product-url');
\t\t}
\t});
</script>

";
        // line 206
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
        return array (  333 => 206,  255 => 130,  245 => 117,  237 => 111,  227 => 103,  224 => 102,  211 => 95,  207 => 94,  202 => 92,  198 => 91,  190 => 88,  185 => 86,  181 => 85,  178 => 84,  173 => 83,  171 => 82,  157 => 71,  149 => 66,  141 => 61,  130 => 52,  120 => 44,  117 => 43,  104 => 36,  100 => 35,  95 => 33,  91 => 32,  83 => 29,  78 => 27,  74 => 26,  71 => 25,  66 => 24,  64 => 23,  55 => 16,  49 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}

<div class=\"container wide hero\">
\t<div class=\"content\">
\t\t<img class=\"image\" src=\"{{ server }}image/home/banner.png\" alt=\"Hero\">
\t\t<div class=\"decor\"></div>
\t\t<h1 class=\"text-white\">Drone parts built for any load</h1>
\t\t{# <a href=\"{{ catalog_link }}\" class=\"hero-cta\" data-oc-router=\"link\">
\t\t\t<ui-button>
\t\t\t\t<img slot=\"icon\" style=\"display: block; width: 100%; height: 100%; object-fit: contain;\"
\t\t\t\t\tsrc=\"{{ server }}image/icons/arrow-top-right.svg\" alt=\"Arrow Right\">
\t\t\t\t<span slot=\"text\">See catalog
\t\t\t\t</span>
\t\t\t</ui-button>
\t\t</a> #}
\t</div>
</div>

<div class=\"container products\" id=\"batteries\">
\t<h3 class=\"products-title\">Batteries</h3>
\t<div class=\"swiper products-swiper\">
\t\t<div class=\"swiper-wrapper\">
\t\t\t{% if battery_products %}
\t\t\t{% for product in battery_products %}
\t\t\t<div class=\"swiper-slide\">
\t\t\t\t<div class=\"product-card\" data-product-url=\"{{ product.url_raw }}\">
\t\t\t\t\t<div class=\"wishlist-icon\"><img src=\"{{ server }}image/icons/heart-yellow.svg\" alt=\"add to wishlist\"></div>
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

<div class=\"container products\" id=\"controllers\">
\t<h3 class=\"products-title\">Controllers</h3>
\t<div class=\"swiper products-swiper\">
\t\t<div class=\"swiper-wrapper\">
\t\t\t{% if controller_products %}
\t\t\t{% for product in controller_products %}
\t\t\t<div class=\"swiper-slide\">
\t\t\t\t<div class=\"product-card\" data-product-url=\"{{ product.url_raw }}\">
\t\t\t\t\t<div class=\"wishlist-icon\"><img src=\"{{ server }}image/icons/heart-yellow.svg\" alt=\"add to wishlist\"></div>
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

<div class=\"container wide reliability-drones\">
\t<img class=\"image\" src=\"{{ server }}image/home/reabilitydrones.png\" alt=\"bg\">
\t<div class=\"text\">
\t\t<div class=\"empty\"></div>
\t\t<div class=\"block\">
\t\t\t<p class=\"text-40\">Reliability for Your Drones</p>
\t\t\t<p class=\"text-24\">We provide proven solutions for heavy-duty use. Our team of enthusiasts tests every component
\t\t\t\tto ensure your drone always performs reliably.</p>
\t\t\t{# <ui-button is-white>
\t\t\t\t<img slot=\"icon\" style=\"display: block; width: 100%; height: 100%; object-fit: contain; filter: invert(1);\"
\t\t\t\t\tsrc=\"{{ server }}image/icons/arrow-top-right.svg\" alt=\"Arrow Right\">
\t\t\t\t<span slot=\"text\">See catalog
\t\t\t\t</span>
\t\t\t</ui-button> #}
\t\t</div>
\t</div>
</div>

<script>
\tfunction initProductsSwiper() {
\t\tif (typeof Swiper === 'undefined') {
\t\t\tsetTimeout(initProductsSwiper, 100);
\t\t\treturn;
\t\t}

\t\tnew Swiper('.products-swiper', {
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

\tfunction initWishlistIcons() {
\t\tconst wishlistIcons = document.querySelectorAll('.products .wishlist-icon');

\t\twishlistIcons.forEach((icon) => {
\t\t\ticon.addEventListener('click', (event) => {
\t\t\t\tevent.preventDefault();
\t\t\t\tevent.stopPropagation();

\t\t\t\tconst heart = icon.querySelector('img');
\t\t\t\tif (heart) {
\t\t\t\t\theart.classList.toggle('active');
\t\t\t\t}

\t\t\t\ticon.classList.toggle('is-active');
\t\t\t});
\t\t});
\t}

\tfunction initHomePage() {
\t\tinitProductsSwiper();
\t\tinitWishlistIcons();
\t}

\tif (document.readyState === 'loading') {
\t\tdocument.addEventListener('DOMContentLoaded', initHomePage);
\t} else {
\t\tinitHomePage();
\t}

\tdocument.addEventListener('click', function (event) {
\t\tconst card = event.target.closest('.product-card[data-product-url]');
\t\tif (card) {
\t\t\twindow.location.href = card.getAttribute('data-product-url');
\t\t}
\t});
</script>

{{ footer }}", "catalog/view/template/common/home.twig", "D:\\xampp\\htdocs\\opencart\\catalog\\view\\template\\common\\home.twig");
    }
}
