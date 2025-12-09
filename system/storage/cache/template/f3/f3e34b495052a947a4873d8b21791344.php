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

/* catalog/view/template/account/history.twig */
class __TwigTemplate_f8954aea51f22c3d9820085f891ea447 extends Template
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
      <li class=\"active\">Order History</li>
    </a>
    <a href=\"#\">
      <li>Email Notification</li>
    </a>
    <a href=\"#\">
      <li>Wishlist</li>
    </a>
  </ul>

  <div class=\"block\">
    <h2 class=\"block-title\">Order History</h2>

    <div class=\"orders\">
      ";
        // line 27
        if (($context["orders"] ?? null)) {
            // line 28
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 29
                yield "          <div class=\"order-card\">
            <button class=\"order-summary\" type=\"button\">
              <div class=\"summary-left\">
                <p class=\"stamp\">";
                // line 32
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "number", [], "any", false, false, false, 32);
                yield ", ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "datetime", [], "any", false, false, false, 32);
                yield "</p>
              </div>
              <div class=\"summary-right\">
                <span class=\"status ";
                // line 35
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status_class", [], "any", true, true, false, 35)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status_class", [], "any", false, false, false, 35), "processing")) : ("processing"));
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 35);
                yield "</span>
                <div class=\"control\" aria-hidden=\"true\">
                  <img src=\"";
                // line 37
                yield ($context["server"] ?? null);
                yield "image/history/arrow-down.svg\" alt=\"Toggle order\">
                </div>
              </div>
            </button>

            <div class=\"order-details\">
              <div class=\"order-items\">
                ";
                // line 44
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "items", [], "any", false, false, false, 44));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 45
                    yield "                  <div class=\"order-item\">
                    <div class=\"order-item__product\">
                      <div class=\"thumb\">
                        <img src=\"";
                    // line 48
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 48);
                    yield "\" alt=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 48);
                    yield "\">
                      </div>
                      <div>
                        <p class=\"name\">";
                    // line 51
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 51);
                    yield "</p>
                        <p class=\"model\">Model: ";
                    // line 52
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "model", [], "any", false, false, false, 52);
                    yield "</p>
                      </div>
                    </div>
                    <div class=\"order-item__numbers\">
                      <span class=\"price\">";
                    // line 56
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 56);
                    yield "</span>
                      <span class=\"qty\">";
                    // line 57
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "qty", [], "any", false, false, false, 57);
                    yield "</span>
                      <span class=\"amount\">";
                    // line 58
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "amount", [], "any", false, false, false, 58);
                    yield "</span>
                    </div>
                  </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 62
                yield "              </div>

              <div class=\"order-meta\">
                <div class=\"left\">
                  <p>Delivery address</p>
                  <p>";
                // line 67
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "delivery_address", [], "any", false, false, false, 67);
                yield "</p>
                  <p>Recipient info</p>
                  <p>";
                // line 69
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "recipient_name", [], "any", false, false, false, 69);
                yield "</p>
                  <p>";
                // line 70
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "recipient_phone", [], "any", false, false, false, 70);
                yield "</p>
                </div>
                <div class=\"right\">
                  <div class=\"row\">
                    <p>Payment method</p>
                    <p>";
                // line 75
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "payment_method", [], "any", false, false, false, 75);
                yield "</p>
                  </div>
                  <div class=\"row\">
                    <p>Shipping</p>
                    <p>";
                // line 79
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "shipping", [], "any", false, false, false, 79);
                yield "</p>
                  </div>
                  <div class=\"row\">
                    <p>Subtotal</p>
                    <p>";
                // line 83
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "subtotal", [], "any", false, false, false, 83);
                yield "</p>
                  </div>
                  <div class=\"divider\"></div>
                  <div class=\"row\">
                    <p>Total</p>
                    <p>";
                // line 88
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 88);
                yield "</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['order'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            yield "      ";
        } else {
            // line 96
            yield "        <p class=\"empty-state\">You do not have any orders yet.</p>
      ";
        }
        // line 98
        yield "    </div>
  </div>

  <script>
    (function () {
      function initHistoryAccordion() {
        var cards = document.querySelectorAll('.order-card');

        cards.forEach(function (card) {
          var summary = card.querySelector('.order-summary');
          if (!summary) {
            return;
          }

          summary.addEventListener('click', function () {
            var isOpen = card.classList.toggle('is-open');
            summary.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
          });
        });
      }

      if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initHistoryAccordion);
      } else {
        initHistoryAccordion();
      }
    })();
  </script>

  ";
        // line 127
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/account/history.twig";
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
        return array (  257 => 127,  226 => 98,  222 => 96,  219 => 95,  206 => 88,  198 => 83,  191 => 79,  184 => 75,  176 => 70,  172 => 69,  167 => 67,  160 => 62,  150 => 58,  146 => 57,  142 => 56,  135 => 52,  131 => 51,  123 => 48,  118 => 45,  114 => 44,  104 => 37,  97 => 35,  89 => 32,  84 => 29,  79 => 28,  77 => 27,  59 => 12,  53 => 9,  42 => 1,);
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
      <li class=\"active\">Order History</li>
    </a>
    <a href=\"#\">
      <li>Email Notification</li>
    </a>
    <a href=\"#\">
      <li>Wishlist</li>
    </a>
  </ul>

  <div class=\"block\">
    <h2 class=\"block-title\">Order History</h2>

    <div class=\"orders\">
      {% if orders %}
        {% for order in orders %}
          <div class=\"order-card\">
            <button class=\"order-summary\" type=\"button\">
              <div class=\"summary-left\">
                <p class=\"stamp\">{{ order.number }}, {{ order.datetime }}</p>
              </div>
              <div class=\"summary-right\">
                <span class=\"status {{ order.status_class|default('processing') }}\">{{ order.status }}</span>
                <div class=\"control\" aria-hidden=\"true\">
                  <img src=\"{{ server }}image/history/arrow-down.svg\" alt=\"Toggle order\">
                </div>
              </div>
            </button>

            <div class=\"order-details\">
              <div class=\"order-items\">
                {% for item in order.items %}
                  <div class=\"order-item\">
                    <div class=\"order-item__product\">
                      <div class=\"thumb\">
                        <img src=\"{{ item.image }}\" alt=\"{{ item.name }}\">
                      </div>
                      <div>
                        <p class=\"name\">{{ item.name }}</p>
                        <p class=\"model\">Model: {{ item.model }}</p>
                      </div>
                    </div>
                    <div class=\"order-item__numbers\">
                      <span class=\"price\">{{ item.price }}</span>
                      <span class=\"qty\">{{ item.qty }}</span>
                      <span class=\"amount\">{{ item.amount }}</span>
                    </div>
                  </div>
                {% endfor %}
              </div>

              <div class=\"order-meta\">
                <div class=\"left\">
                  <p>Delivery address</p>
                  <p>{{ order.delivery_address }}</p>
                  <p>Recipient info</p>
                  <p>{{ order.recipient_name }}</p>
                  <p>{{ order.recipient_phone }}</p>
                </div>
                <div class=\"right\">
                  <div class=\"row\">
                    <p>Payment method</p>
                    <p>{{ order.payment_method }}</p>
                  </div>
                  <div class=\"row\">
                    <p>Shipping</p>
                    <p>{{ order.shipping }}</p>
                  </div>
                  <div class=\"row\">
                    <p>Subtotal</p>
                    <p>{{ order.subtotal }}</p>
                  </div>
                  <div class=\"divider\"></div>
                  <div class=\"row\">
                    <p>Total</p>
                    <p>{{ order.total }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        {% endfor %}
      {% else %}
        <p class=\"empty-state\">You do not have any orders yet.</p>
      {% endif %}
    </div>
  </div>

  <script>
    (function () {
      function initHistoryAccordion() {
        var cards = document.querySelectorAll('.order-card');

        cards.forEach(function (card) {
          var summary = card.querySelector('.order-summary');
          if (!summary) {
            return;
          }

          summary.addEventListener('click', function () {
            var isOpen = card.classList.toggle('is-open');
            summary.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
          });
        });
      }

      if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initHistoryAccordion);
      } else {
        initHistoryAccordion();
      }
    })();
  </script>

  {{ footer }}", "catalog/view/template/account/history.twig", "/var/www/opencart/catalog/view/template/account/history.twig");
    }
}
