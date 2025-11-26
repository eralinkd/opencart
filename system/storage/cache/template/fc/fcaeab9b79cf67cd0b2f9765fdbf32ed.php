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

/* catalog/view/template/common/header.twig */
class __TwigTemplate_4dc9f38746f4d20ffa5821c1ba661ad9 extends Template
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
        yield "<!DOCTYPE html>
<html dir=\"";
        // line 2
        yield ($context["direction"] ?? null);
        yield "\" lang=\"";
        yield ($context["lang"] ?? null);
        yield "\">
<head>
  <meta charset=\"UTF-8\"/>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <title>";
        // line 6
        yield ($context["title"] ?? null);
        yield "</title>
  <base href=\"";
        // line 7
        yield ($context["base"] ?? null);
        yield "\"/>
  ";
        // line 8
        if (($context["description"] ?? null)) {
            // line 9
            yield "    <meta name=\"description\" content=\"";
            yield ($context["description"] ?? null);
            yield "\"/>
  ";
        }
        // line 11
        yield "  ";
        if (($context["keywords"] ?? null)) {
            // line 12
            yield "    <meta name=\"keywords\" content=\"";
            yield ($context["keywords"] ?? null);
            yield "\"/>
  ";
        }
        // line 14
        yield "  <link href=\"catalog/view/stylesheet/stylesheet.css\" type=\"text/css\" rel=\"stylesheet\"/>
  ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 16
            yield "    <link href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["link"] ?? null), "href", [], "any", false, false, false, 16);
            yield "\" rel=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["link"] ?? null), "rel", [], "any", false, false, false, 16);
            yield "\"/>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['style'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        yield "  ";
        if (($context["icon"] ?? null)) {
            // line 19
            yield "    <link rel=\"icon\" href=\"";
            yield ($context["icon"] ?? null);
            yield "\" type=\"image/png\">
  ";
        }
        // line 21
        yield "  ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 22
            yield "    <link href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 22);
            yield "\" rel=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 22);
            yield "\"/>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['link'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        yield "</head>
<body>
  <div id=\"container\" class=\"d-flex flex-column min-vh-100\">
    <div id=\"alert\"></div>
    <nav id=\"top\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-4\">
            <ul class=\"list-inline\">
              <li class=\"list-inline-item me-3\">";
        // line 33
        yield ($context["currency"] ?? null);
        yield "</li>
              <li class=\"list-inline-item\">";
        // line 34
        yield ($context["language"] ?? null);
        yield "</li>
            </ul>
          </div>
          <div class=\"col text-end\">
            <ul class=\"list-inline\">
              <li class=\"list-inline-item\"><a href=\"";
        // line 39
        yield ($context["contact"] ?? null);
        yield "\"><i class=\"fa-solid fa-phone\"></i> <span class=\"d-none d-lg-inline\">";
        yield ($context["telephone"] ?? null);
        yield "</span></a></li>
              <li class=\"list-inline-item\">
                <div class=\"dropdown\">
                  <a href=\"#\" class=\"dropdown-toggle\" data-bs-toggle=\"dropdown\"><i class=\"fa-solid fa-user\"></i> <span class=\"d-none d-lg-inline\">";
        // line 42
        yield ($context["text_account"] ?? null);
        yield "</span> <i class=\"fa-solid fa-caret-down\"></i></a>
                  <ul class=\"dropdown-menu dropdown-menu-right\">
                    ";
        // line 44
        if ( !($context["logged"] ?? null)) {
            // line 45
            yield "                      <li><a href=\"";
            yield ($context["register"] ?? null);
            yield "\" class=\"dropdown-item\">";
            yield ($context["text_register"] ?? null);
            yield "</a></li>
                      <li><a href=\"";
            // line 46
            yield ($context["login"] ?? null);
            yield "\" class=\"dropdown-item\">";
            yield ($context["text_login"] ?? null);
            yield "</a></li>
                    ";
        } else {
            // line 48
            yield "                      <li><a href=\"";
            yield ($context["account"] ?? null);
            yield "\" class=\"dropdown-item\">";
            yield ($context["text_account"] ?? null);
            yield "</a></li>
                      <li><a href=\"";
            // line 49
            yield ($context["order"] ?? null);
            yield "\" class=\"dropdown-item\">";
            yield ($context["text_order"] ?? null);
            yield "</a></li>
                      <li><a href=\"";
            // line 50
            yield ($context["transaction"] ?? null);
            yield "\" class=\"dropdown-item\">";
            yield ($context["text_transaction"] ?? null);
            yield "</a></li>
                      <li><a href=\"";
            // line 51
            yield ($context["download"] ?? null);
            yield "\" class=\"dropdown-item\">";
            yield ($context["text_download"] ?? null);
            yield "</a></li>
                      <li><a href=\"";
            // line 52
            yield ($context["logout"] ?? null);
            yield "\" class=\"dropdown-item\">";
            yield ($context["text_logout"] ?? null);
            yield "</a></li>
                    ";
        }
        // line 54
        yield "                  </ul>
                </div>
              </li>
              <li class=\"list-inline-item\"><a href=\"";
        // line 57
        yield ($context["wishlist"] ?? null);
        yield "\" id=\"wishlist-total\" title=\"";
        yield ($context["text_wishlist"] ?? null);
        yield "\"><i class=\"fa-solid fa-heart\"></i> <span class=\"d-none d-lg-inline\">";
        yield ($context["text_wishlist"] ?? null);
        yield "</span></a></li>
              <li class=\"list-inline-item\"><a href=\"";
        // line 58
        yield ($context["shopping_cart"] ?? null);
        yield "\" title=\"";
        yield ($context["text_shopping_cart"] ?? null);
        yield "\"><i class=\"fa-solid fa-cart-shopping\"></i> <span class=\"d-none d-lg-inline\">";
        yield ($context["text_shopping_cart"] ?? null);
        yield "</span></a></li>
              <li class=\"list-inline-item\"><a href=\"";
        // line 59
        yield ($context["checkout"] ?? null);
        yield "\" title=\"";
        yield ($context["text_checkout"] ?? null);
        yield "\"><i class=\"fa-solid fa-share\"></i> <span class=\"d-none d-lg-inline\">";
        yield ($context["text_checkout"] ?? null);
        yield "</span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <header>
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-3 col-lg-4\">
            <div id=\"logo\">
              ";
        // line 70
        if (($context["logo"] ?? null)) {
            // line 71
            yield "                <a href=\"";
            yield ($context["home"] ?? null);
            yield "\"><img src=\"";
            yield ($context["logo"] ?? null);
            yield "\" title=\"";
            yield ($context["name"] ?? null);
            yield "\" alt=\"";
            yield ($context["name"] ?? null);
            yield "\" class=\"img-fluid\"/></a>
              ";
        } else {
            // line 73
            yield "                <h1><a href=\"";
            yield ($context["home"] ?? null);
            yield "\">";
            yield ($context["name"] ?? null);
            yield "</a></h1>
              ";
        }
        // line 75
        yield "            </div>
          </div>
          <div class=\"col-md-5\">";
        // line 77
        yield ($context["search"] ?? null);
        yield "</div>
          <div id=\"cart\" class=\"col-md-4 col-lg-3 mb-2\">";
        // line 78
        yield ($context["cart"] ?? null);
        yield "</div>
        </div>
      </div>
    </header>
    <main class=\"flex-grow-1 mb-4\">
      ";
        // line 83
        yield ($context["menu"] ?? null);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/common/header.twig";
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
        return array (  283 => 83,  275 => 78,  271 => 77,  267 => 75,  259 => 73,  247 => 71,  245 => 70,  227 => 59,  219 => 58,  211 => 57,  206 => 54,  199 => 52,  193 => 51,  187 => 50,  181 => 49,  174 => 48,  167 => 46,  160 => 45,  158 => 44,  153 => 42,  145 => 39,  137 => 34,  133 => 33,  122 => 24,  111 => 22,  106 => 21,  100 => 19,  97 => 18,  86 => 16,  82 => 15,  79 => 14,  73 => 12,  70 => 11,  64 => 9,  62 => 8,  58 => 7,  54 => 6,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html dir=\"{{ direction }}\" lang=\"{{ lang }}\">
<head>
  <meta charset=\"UTF-8\"/>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <title>{{ title }}</title>
  <base href=\"{{ base }}\"/>
  {% if description %}
    <meta name=\"description\" content=\"{{ description }}\"/>
  {% endif %}
  {% if keywords %}
    <meta name=\"keywords\" content=\"{{ keywords }}\"/>
  {% endif %}
  <link href=\"catalog/view/stylesheet/stylesheet.css\" type=\"text/css\" rel=\"stylesheet\"/>
  {% for style in styles %}
    <link href=\"{{ link.href }}\" rel=\"{{ link.rel }}\"/>
  {% endfor %}
  {% if icon %}
    <link rel=\"icon\" href=\"{{ icon }}\" type=\"image/png\">
  {% endif %}
  {% for link in links %}
    <link href=\"{{ link.href }}\" rel=\"{{ link.rel }}\"/>
  {% endfor %}
</head>
<body>
  <div id=\"container\" class=\"d-flex flex-column min-vh-100\">
    <div id=\"alert\"></div>
    <nav id=\"top\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-4\">
            <ul class=\"list-inline\">
              <li class=\"list-inline-item me-3\">{{ currency }}</li>
              <li class=\"list-inline-item\">{{ language }}</li>
            </ul>
          </div>
          <div class=\"col text-end\">
            <ul class=\"list-inline\">
              <li class=\"list-inline-item\"><a href=\"{{ contact }}\"><i class=\"fa-solid fa-phone\"></i> <span class=\"d-none d-lg-inline\">{{ telephone }}</span></a></li>
              <li class=\"list-inline-item\">
                <div class=\"dropdown\">
                  <a href=\"#\" class=\"dropdown-toggle\" data-bs-toggle=\"dropdown\"><i class=\"fa-solid fa-user\"></i> <span class=\"d-none d-lg-inline\">{{ text_account }}</span> <i class=\"fa-solid fa-caret-down\"></i></a>
                  <ul class=\"dropdown-menu dropdown-menu-right\">
                    {% if not logged %}
                      <li><a href=\"{{ register }}\" class=\"dropdown-item\">{{ text_register }}</a></li>
                      <li><a href=\"{{ login }}\" class=\"dropdown-item\">{{ text_login }}</a></li>
                    {% else %}
                      <li><a href=\"{{ account }}\" class=\"dropdown-item\">{{ text_account }}</a></li>
                      <li><a href=\"{{ order }}\" class=\"dropdown-item\">{{ text_order }}</a></li>
                      <li><a href=\"{{ transaction }}\" class=\"dropdown-item\">{{ text_transaction }}</a></li>
                      <li><a href=\"{{ download }}\" class=\"dropdown-item\">{{ text_download }}</a></li>
                      <li><a href=\"{{ logout }}\" class=\"dropdown-item\">{{ text_logout }}</a></li>
                    {% endif %}
                  </ul>
                </div>
              </li>
              <li class=\"list-inline-item\"><a href=\"{{ wishlist }}\" id=\"wishlist-total\" title=\"{{ text_wishlist }}\"><i class=\"fa-solid fa-heart\"></i> <span class=\"d-none d-lg-inline\">{{ text_wishlist }}</span></a></li>
              <li class=\"list-inline-item\"><a href=\"{{ shopping_cart }}\" title=\"{{ text_shopping_cart }}\"><i class=\"fa-solid fa-cart-shopping\"></i> <span class=\"d-none d-lg-inline\">{{ text_shopping_cart }}</span></a></li>
              <li class=\"list-inline-item\"><a href=\"{{ checkout }}\" title=\"{{ text_checkout }}\"><i class=\"fa-solid fa-share\"></i> <span class=\"d-none d-lg-inline\">{{ text_checkout }}</span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <header>
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-3 col-lg-4\">
            <div id=\"logo\">
              {% if logo %}
                <a href=\"{{ home }}\"><img src=\"{{ logo }}\" title=\"{{ name }}\" alt=\"{{ name }}\" class=\"img-fluid\"/></a>
              {% else %}
                <h1><a href=\"{{ home }}\">{{ name }}</a></h1>
              {% endif %}
            </div>
          </div>
          <div class=\"col-md-5\">{{ search }}</div>
          <div id=\"cart\" class=\"col-md-4 col-lg-3 mb-2\">{{ cart }}</div>
        </div>
      </div>
    </header>
    <main class=\"flex-grow-1 mb-4\">
      {{ menu }}
", "catalog/view/template/common/header.twig", "/var/www/opencart/catalog/view/template/common/header.twig");
    }
}
