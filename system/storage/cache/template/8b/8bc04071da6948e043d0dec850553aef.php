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
class __TwigTemplate_d695cc152fa15d1c65f45a47c11c608f extends Template
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
\t\t<a href=\"";
        // line 8
        yield ($context["catalog_link"] ?? null);
        yield "\" class=\"hero-cta\" data-oc-router=\"link\">
\t\t<custom-button>
\t\t\t<img slot=\"icon\" style=\"display: block; width: 100%; height: 100%; object-fit: contain;\"
\t\t\t\tsrc=\"";
        // line 11
        yield ($context["server"] ?? null);
        yield "image/icons/arrow-top-right.svg\" alt=\"Arrow Right\">
\t\t\t<span slot=\"text\">See catalog
\t\t\t</span>
\t\t</custom-button>
\t\t</a>
\t</div>
</div>

<div class=\"container products\">
\t<h3 class=\"products-title\">Batteries</h3>
\t<div class=\"swiper products-swiper\">
\t\t<div class=\"swiper-wrapper\">
\t\t\t";
        // line 23
        if (($context["battery_products"] ?? null)) {
            // line 24
            yield "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["battery_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 25
                yield "\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t<div class=\"product-card\" data-product-url=\"";
                // line 26
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "url_raw", [], "any", false, false, false, 26);
                yield "\">
\t\t\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t\t\t<img src=\"";
                // line 28
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 28);
                yield "\" alt=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 28);
                yield "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"product-info\">
\t\t\t\t\t\t\t\t<p class=\"availability text-16\">";
                // line 31
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "availability", [], "any", false, false, false, 31);
                yield "</p>
\t\t\t\t\t\t\t\t<h4 class=\"product-title\">";
                // line 32
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 32);
                yield "</h4>
\t\t\t\t\t\t\t</div>
                            <p class=\"text-16\">Model: ";
                // line 34
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 34);
                yield "</p>
                            <p class=\"product-price text-32\">\$";
                // line 35
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price_formatted", [], "any", false, false, false, 35);
                yield "</p>
                            <button-secondary class=\"product-button\">
                                <span slot=\"text\">View product</span>
                            </button-secondary>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            yield "\t\t\t";
        } else {
            // line 43
            yield "\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t<div class=\"product-card\">
\t\t\t\t\t\t<div class=\"product-info\">
\t\t\t\t\t\t\t<p class=\"text-20\">Battery catalog is being prepared. Stay tuned!</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 51
        yield "\t\t</div>
\t\t<div class=\"swiper-pagination\"></div>
\t</div>
</div>

<div class=\"container wide why-us\">
\t<h2>Why SkyFix?</h2>
\t<div class=\"grid\">
\t\t<div class=\"item\">
\t\t\t<div class=\"icon\"><img src=\"";
        // line 60
        yield ($context["server"] ?? null);
        yield "image/home/whyus/icon1.svg\" alt=\"Icon\"></div>
\t\t\t<p class=\"text-20\">Our team of enthusiasts will help you choose the right part
\t\t\t</p>
\t\t</div>
\t\t<div class=\"item\">
\t\t\t<div class=\"icon\"><img src=\"";
        // line 65
        yield ($context["server"] ?? null);
        yield "image/home/whyus/icon2.svg\" alt=\"Icon\"></div>
\t\t\t<p class=\"text-20\">Verified batteries and controllers for stable flight
\t\t\t</p>
\t\t</div>
\t\t<div class=\"item\">
\t\t\t<div class=\"icon\"><img src=\"";
        // line 70
        yield ($context["server"] ?? null);
        yield "image/home/whyus/icon3.svg\" alt=\"Icon\"></div>
\t\t\t<p class=\"text-20\">Fast shipping and money-back guarantee
\t\t\t</p>
\t\t</div>
\t</div>
</div>

<div class=\"container products\">
    <h3 class=\"products-title\">Controllers</h3>
    <div class=\"swiper products-swiper\">
        <div class=\"swiper-wrapper\">
            ";
        // line 81
        if (($context["controller_products"] ?? null)) {
            // line 82
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["controller_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 83
                yield "                    <div class=\"swiper-slide\">
                        <div class=\"product-card\" data-product-url=\"";
                // line 84
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "url_raw", [], "any", false, false, false, 84);
                yield "\">
                            <div class=\"product-image\">
                                <img src=\"";
                // line 86
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 86);
                yield "\" alt=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 86);
                yield "\">
                            </div>
                            <div class=\"product-info\">
                                <p class=\"availability text-16\">";
                // line 89
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "availability", [], "any", false, false, false, 89);
                yield "</p>
                                <h4 class=\"product-title\">";
                // line 90
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 90);
                yield "</h4>
                            </div>
                            <p class=\"text-16\">Model: ";
                // line 92
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 92);
                yield "</p>
                            <p class=\"product-price text-32\">\$";
                // line 93
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price_formatted", [], "any", false, false, false, 93);
                yield "</p>
                            <button-secondary class=\"product-button\">
                                <span slot=\"text\">View product</span>
                            </button-secondary>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            yield "            ";
        } else {
            // line 101
            yield "                <div class=\"swiper-slide\">
                    <div class=\"product-card\">
                        <div class=\"product-info\">
                            <p class=\"text-20\">Battery catalog is being prepared. Stay tuned!</p>
                        </div>
                    </div>
                </div>
            ";
        }
        // line 109
        yield "        </div>
        <div class=\"swiper-pagination\"></div>
    </div>
</div>

<div class=\"container wide reliability-drones\">
    <div class=\"content\">
        <img class=\"image\" src=\"";
        // line 116
        yield ($context["server"] ?? null);
        yield "image/home/reabilitydrones.png\" alt=\"Hero\">
        <div class=\"decor\"></div>
        <h4 class=\"text-black\">Drone parts built for any load</h4>
        <a href=\"";
        // line 119
        yield ($context["catalog_link"] ?? null);
        yield "\" class=\"hero-cta\" data-oc-router=\"link\">
            <custom-button>
                <img slot=\"icon\" style=\"display: block; width: 100%; height: 100%; object-fit: contain;\"
                     src=\"";
        // line 122
        yield ($context["server"] ?? null);
        yield "image/icons/arrow-top-right.svg\" alt=\"Arrow Right\">
                <span slot=\"text\">See catalog
                </span>
            </custom-button>
        </a>
    </div>
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

\tdocument.addEventListener('click', function (event) {
\t\tconst card = event.target.closest('.product-card[data-product-url]');
\t\tif (card) {
\t\t\twindow.location.href = card.getAttribute('data-product-url');
\t\t}
\t});
</script>

";
        // line 179
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
        return array (  322 => 179,  262 => 122,  256 => 119,  250 => 116,  241 => 109,  231 => 101,  228 => 100,  215 => 93,  211 => 92,  206 => 90,  202 => 89,  194 => 86,  189 => 84,  186 => 83,  181 => 82,  179 => 81,  165 => 70,  157 => 65,  149 => 60,  138 => 51,  128 => 43,  125 => 42,  112 => 35,  108 => 34,  103 => 32,  99 => 31,  91 => 28,  86 => 26,  83 => 25,  78 => 24,  76 => 23,  61 => 11,  55 => 8,  49 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}

<div class=\"container wide hero\">
\t<div class=\"content\">
\t\t<img class=\"image\" src=\"{{ server }}image/home/banner.png\" alt=\"Hero\">
\t\t<div class=\"decor\"></div>
\t\t<h1 class=\"text-white\">Drone parts built for any load</h1>
\t\t<a href=\"{{ catalog_link }}\" class=\"hero-cta\" data-oc-router=\"link\">
\t\t<custom-button>
\t\t\t<img slot=\"icon\" style=\"display: block; width: 100%; height: 100%; object-fit: contain;\"
\t\t\t\tsrc=\"{{ server }}image/icons/arrow-top-right.svg\" alt=\"Arrow Right\">
\t\t\t<span slot=\"text\">See catalog
\t\t\t</span>
\t\t</custom-button>
\t\t</a>
\t</div>
</div>

<div class=\"container products\">
\t<h3 class=\"products-title\">Batteries</h3>
\t<div class=\"swiper products-swiper\">
\t\t<div class=\"swiper-wrapper\">
\t\t\t{% if battery_products %}
\t\t\t\t{% for product in battery_products %}
\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t<div class=\"product-card\" data-product-url=\"{{ product.url_raw }}\">
\t\t\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t\t\t<img src=\"{{ product.image }}\" alt=\"{{ product.name }}\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"product-info\">
\t\t\t\t\t\t\t\t<p class=\"availability text-16\">{{ product.availability }}</p>
\t\t\t\t\t\t\t\t<h4 class=\"product-title\">{{ product.name }}</h4>
\t\t\t\t\t\t\t</div>
                            <p class=\"text-16\">Model: {{ product.model }}</p>
                            <p class=\"product-price text-32\">\${{ product.price_formatted }}</p>
                            <button-secondary class=\"product-button\">
                                <span slot=\"text\">View product</span>
                            </button-secondary>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t{% else %}
\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t<div class=\"product-card\">
\t\t\t\t\t\t<div class=\"product-info\">
\t\t\t\t\t\t\t<p class=\"text-20\">Battery catalog is being prepared. Stay tuned!</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
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

<div class=\"container products\">
    <h3 class=\"products-title\">Controllers</h3>
    <div class=\"swiper products-swiper\">
        <div class=\"swiper-wrapper\">
            {% if controller_products %}
                {% for product in controller_products %}
                    <div class=\"swiper-slide\">
                        <div class=\"product-card\" data-product-url=\"{{ product.url_raw }}\">
                            <div class=\"product-image\">
                                <img src=\"{{ product.image }}\" alt=\"{{ product.name }}\">
                            </div>
                            <div class=\"product-info\">
                                <p class=\"availability text-16\">{{ product.availability }}</p>
                                <h4 class=\"product-title\">{{ product.name }}</h4>
                            </div>
                            <p class=\"text-16\">Model: {{ product.model }}</p>
                            <p class=\"product-price text-32\">\${{ product.price_formatted }}</p>
                            <button-secondary class=\"product-button\">
                                <span slot=\"text\">View product</span>
                            </button-secondary>
                        </div>
                    </div>
                {% endfor %}
            {% else %}
                <div class=\"swiper-slide\">
                    <div class=\"product-card\">
                        <div class=\"product-info\">
                            <p class=\"text-20\">Battery catalog is being prepared. Stay tuned!</p>
                        </div>
                    </div>
                </div>
            {% endif %}
        </div>
        <div class=\"swiper-pagination\"></div>
    </div>
</div>

<div class=\"container wide reliability-drones\">
    <div class=\"content\">
        <img class=\"image\" src=\"{{ server }}image/home/reabilitydrones.png\" alt=\"Hero\">
        <div class=\"decor\"></div>
        <h4 class=\"text-black\">Drone parts built for any load</h4>
        <a href=\"{{ catalog_link }}\" class=\"hero-cta\" data-oc-router=\"link\">
            <custom-button>
                <img slot=\"icon\" style=\"display: block; width: 100%; height: 100%; object-fit: contain;\"
                     src=\"{{ server }}image/icons/arrow-top-right.svg\" alt=\"Arrow Right\">
                <span slot=\"text\">See catalog
                </span>
            </custom-button>
        </a>
    </div>
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

\tdocument.addEventListener('click', function (event) {
\t\tconst card = event.target.closest('.product-card[data-product-url]');
\t\tif (card) {
\t\t\twindow.location.href = card.getAttribute('data-product-url');
\t\t}
\t});
</script>

{{ footer }}", "catalog/view/template/common/home.twig", "/var/www/opencart/catalog/view/template/common/home.twig");
    }
}
