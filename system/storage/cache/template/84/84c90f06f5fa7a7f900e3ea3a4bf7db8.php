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

/* admin/view/template/catalog/product_list.twig */
class __TwigTemplate_422e075251997b7d0097efb42a247ed1 extends Template
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
        yield "<form id=\"form-product\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
        yield ($context["action"] ?? null);
        yield "\" data-oc-target=\"#product\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <th class=\"text-center\" style=\"width: 1px;\" title=\"Select all products\">
            <input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/>
          </th>
          <th class=\"text-center\" title=\"Product image\">
            <span class=\"d-block mb-1\">";
        // line 10
        yield ($context["column_image"] ?? null);
        yield "</span>
            <small class=\"text-muted d-block\" style=\"font-size: 11px; font-weight: normal;\">Image</small>
          </th>
          <th title=\"Product name\">
            <span class=\"d-block mb-1\"><a href=\"";
        // line 14
        yield ($context["sort_name"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "pd.name")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_name"] ?? null);
        yield "</a></span>
            <small class=\"text-muted d-block\" style=\"font-size: 11px; font-weight: normal;\">Click to sort by name</small>
          </th>
          <th class=\"d-none d-lg-table-cell\" title=\"Product model\">
            <span class=\"d-block mb-1\"><a href=\"";
        // line 18
        yield ($context["sort_model"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "p.model")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_model"] ?? null);
        yield "</a></span>
            <small class=\"text-muted d-block\" style=\"font-size: 11px; font-weight: normal;\">Product model/SKU</small>
          </th>
          <th class=\"text-end\" title=\"Product price\">
            <span class=\"d-block mb-1\"><a href=\"";
        // line 22
        yield ($context["sort_price"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "p.price")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_price"] ?? null);
        yield "</a></span>
            <small class=\"text-muted d-block\" style=\"font-size: 11px; font-weight: normal;\">Price per unit</small>
          </th>
          <th class=\"text-end\" title=\"Stock quantity\">
            <span class=\"d-block mb-1\"><a href=\"";
        // line 26
        yield ($context["sort_quantity"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "p.quantity")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_quantity"] ?? null);
        yield "</a></span>
            <small class=\"text-muted d-block\" style=\"font-size: 11px; font-weight: normal;\">Items in stock</small>
          </th>
          <th class=\"text-end\" title=\"Actions\">
            <span class=\"d-block mb-1\">";
        // line 30
        yield ($context["column_action"] ?? null);
        yield "</span>
            <small class=\"text-muted d-block\" style=\"font-size: 11px; font-weight: normal;\">Edit product</small>
          </th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 36
        if (($context["products"] ?? null)) {
            // line 37
            yield "          ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 38
                yield "            <tr class=\"";
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["product"], "variant", [], "any", false, false, false, 38)) {
                    yield "table-warning";
                }
                yield " ";
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["product"], "status", [], "any", false, false, false, 38)) {
                    yield "opacity-50";
                }
                yield "\">
              <td class=\"text-center\">
                <input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 40
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 40);
                yield "\" class=\"form-check-input\" title=\"Select this product\"/>
              </td>
              <td class=\"text-center\">
                ";
                // line 43
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 43)) {
                    // line 44
                    yield "                  <img src=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 44);
                    yield "\" alt=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 44);
                    yield "\" class=\"img-thumbnail\" style=\"max-width: 60px; max-height: 60px;\" title=\"Product image: ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 44);
                    yield "\"/>
                ";
                } else {
                    // line 46
                    yield "                  <span class=\"text-muted\" style=\"font-size: 12px;\">No image</span>
                ";
                }
                // line 48
                yield "              </td>
              <td>
                <strong>";
                // line 50
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 50);
                yield "</strong>
                ";
                // line 51
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["product"], "status", [], "any", false, false, false, 51)) {
                    // line 52
                    yield "                  <span class=\"badge bg-danger ms-2\" title=\"This product is disabled\">Disabled</span>
                ";
                } else {
                    // line 54
                    yield "                  <span class=\"badge bg-success ms-2\" title=\"This product is enabled\">Enabled</span>
                ";
                }
                // line 56
                yield "                ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "variant", [], "any", false, false, false, 56)) {
                    // line 57
                    yield "                  <span class=\"badge bg-info ms-2\" title=\"This product has variants\">Has Variants</span>
                ";
                }
                // line 59
                yield "              </td>
              <td class=\"d-none d-lg-table-cell\">
                <code style=\"font-size: 13px;\" title=\"Product model/SKU\">";
                // line 61
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 61)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 61)) : ("N/A"));
                yield "</code>
              </td>
              <td class=\"text-end\">
                ";
                // line 64
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 64)) {
                    // line 65
                    yield "                  <div title=\"Original price\">
                    <span style=\"text-decoration: line-through; color: #999; font-size: 13px;\">";
                    // line 66
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 66);
                    yield "</span>
                  </div>
                  <div class=\"text-danger fw-bold\" title=\"Special price\">";
                    // line 68
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 68);
                    yield "</div>
                ";
                } else {
                    // line 70
                    yield "                  <span class=\"fw-bold\" title=\"Product price\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 70);
                    yield "</span>
                ";
                }
                // line 72
                yield "              </td>
              <td class=\"text-end\">
                ";
                // line 74
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 74) <= 0)) {
                    // line 75
                    yield "                  <span class=\"badge bg-warning\" title=\"Out of stock - ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 75);
                    yield " items\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 75);
                    yield "</span>
                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 76
$context["product"], "quantity", [], "any", false, false, false, 76) <= 5)) {
                    // line 77
                    yield "                  <span class=\"badge bg-danger\" title=\"Low stock - ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 77);
                    yield " items remaining\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 77);
                    yield "</span>
                ";
                } else {
                    // line 79
                    yield "                  <span class=\"badge bg-success\" title=\"In stock - ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 79);
                    yield " items\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 79);
                    yield "</span>
                ";
                }
                // line 81
                yield "              </td>
              <td class=\"text-end\">
                ";
                // line 83
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "variant", [], "any", false, false, false, 83)) {
                    // line 84
                    yield "                  <div class=\"btn-group\">
                    <a href=\"";
                    // line 85
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "edit", [], "any", false, false, false, 85);
                    yield "\" data-bs-toggle=\"tooltip\" title=\"Edit product: ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 85);
                    yield "\" class=\"btn btn-primary btn-sm\">
                      <i class=\"fa-solid fa-pencil\"></i> Edit
                    </a>
                    <button type=\"button\" class=\"btn btn-primary btn-sm dropdown-toggle dropdown-toggle-split\" data-bs-toggle=\"dropdown\" title=\"More options\">
                      <i class=\"fa-solid fa-caret-down\"></i>
                    </button>
                    <div class=\"dropdown-menu dropdown-menu-end\">
                      <a href=\"";
                    // line 92
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "variant", [], "any", false, false, false, 92);
                    yield "\" class=\"dropdown-item\">
                        <i class=\"fa-solid fa-plus\"></i> ";
                    // line 93
                    yield ($context["text_variant_add"] ?? null);
                    yield "
                      </a>
                    </div>
                  </div>
                ";
                } else {
                    // line 98
                    yield "                  <a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "edit", [], "any", false, false, false, 98);
                    yield "\" data-bs-toggle=\"tooltip\" title=\"Edit product: ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 98);
                    yield "\" class=\"btn btn-primary btn-sm\">
                    <i class=\"fa-solid fa-pencil\"></i> Edit
                  </a>
                ";
                }
                // line 102
                yield "              </td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            yield "        ";
        } else {
            // line 106
            yield "          <tr>
            <td class=\"text-center\" colspan=\"7\">";
            // line 107
            yield ($context["text_no_results"] ?? null);
            yield "</td>
          </tr>
        ";
        }
        // line 110
        yield "      </tbody>
    </table>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-6 text-start\">";
        // line 114
        yield ($context["pagination"] ?? null);
        yield "</div>
    <div class=\"col-sm-6 text-end\">";
        // line 115
        yield ($context["results"] ?? null);
        yield "</div>
  </div>
</form>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/view/template/catalog/product_list.twig";
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
        return array (  332 => 115,  328 => 114,  322 => 110,  316 => 107,  313 => 106,  310 => 105,  302 => 102,  292 => 98,  284 => 93,  280 => 92,  268 => 85,  265 => 84,  263 => 83,  259 => 81,  251 => 79,  243 => 77,  241 => 76,  234 => 75,  232 => 74,  228 => 72,  222 => 70,  217 => 68,  212 => 66,  209 => 65,  207 => 64,  201 => 61,  197 => 59,  193 => 57,  190 => 56,  186 => 54,  182 => 52,  180 => 51,  176 => 50,  172 => 48,  168 => 46,  158 => 44,  156 => 43,  150 => 40,  138 => 38,  133 => 37,  131 => 36,  122 => 30,  107 => 26,  92 => 22,  77 => 18,  62 => 14,  55 => 10,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form id=\"form-product\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"{{ action }}\" data-oc-target=\"#product\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <th class=\"text-center\" style=\"width: 1px;\" title=\"Select all products\">
            <input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/>
          </th>
          <th class=\"text-center\" title=\"Product image\">
            <span class=\"d-block mb-1\">{{ column_image }}</span>
            <small class=\"text-muted d-block\" style=\"font-size: 11px; font-weight: normal;\">Image</small>
          </th>
          <th title=\"Product name\">
            <span class=\"d-block mb-1\"><a href=\"{{ sort_name }}\"{% if sort == 'pd.name' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_name }}</a></span>
            <small class=\"text-muted d-block\" style=\"font-size: 11px; font-weight: normal;\">Click to sort by name</small>
          </th>
          <th class=\"d-none d-lg-table-cell\" title=\"Product model\">
            <span class=\"d-block mb-1\"><a href=\"{{ sort_model }}\"{% if sort == 'p.model' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_model }}</a></span>
            <small class=\"text-muted d-block\" style=\"font-size: 11px; font-weight: normal;\">Product model/SKU</small>
          </th>
          <th class=\"text-end\" title=\"Product price\">
            <span class=\"d-block mb-1\"><a href=\"{{ sort_price }}\"{% if sort == 'p.price' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_price }}</a></span>
            <small class=\"text-muted d-block\" style=\"font-size: 11px; font-weight: normal;\">Price per unit</small>
          </th>
          <th class=\"text-end\" title=\"Stock quantity\">
            <span class=\"d-block mb-1\"><a href=\"{{ sort_quantity }}\"{% if sort == 'p.quantity' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_quantity }}</a></span>
            <small class=\"text-muted d-block\" style=\"font-size: 11px; font-weight: normal;\">Items in stock</small>
          </th>
          <th class=\"text-end\" title=\"Actions\">
            <span class=\"d-block mb-1\">{{ column_action }}</span>
            <small class=\"text-muted d-block\" style=\"font-size: 11px; font-weight: normal;\">Edit product</small>
          </th>
        </tr>
      </thead>
      <tbody>
        {% if products %}
          {% for product in products %}
            <tr class=\"{% if not product.variant %}table-warning{% endif %} {% if not product.status %}opacity-50{% endif %}\">
              <td class=\"text-center\">
                <input type=\"checkbox\" name=\"selected[]\" value=\"{{ product.product_id }}\" class=\"form-check-input\" title=\"Select this product\"/>
              </td>
              <td class=\"text-center\">
                {% if product.image %}
                  <img src=\"{{ product.image }}\" alt=\"{{ product.name }}\" class=\"img-thumbnail\" style=\"max-width: 60px; max-height: 60px;\" title=\"Product image: {{ product.name }}\"/>
                {% else %}
                  <span class=\"text-muted\" style=\"font-size: 12px;\">No image</span>
                {% endif %}
              </td>
              <td>
                <strong>{{ product.name }}</strong>
                {% if not product.status %}
                  <span class=\"badge bg-danger ms-2\" title=\"This product is disabled\">Disabled</span>
                {% else %}
                  <span class=\"badge bg-success ms-2\" title=\"This product is enabled\">Enabled</span>
                {% endif %}
                {% if product.variant %}
                  <span class=\"badge bg-info ms-2\" title=\"This product has variants\">Has Variants</span>
                {% endif %}
              </td>
              <td class=\"d-none d-lg-table-cell\">
                <code style=\"font-size: 13px;\" title=\"Product model/SKU\">{{ product.model ?: 'N/A' }}</code>
              </td>
              <td class=\"text-end\">
                {% if product.special %}
                  <div title=\"Original price\">
                    <span style=\"text-decoration: line-through; color: #999; font-size: 13px;\">{{ product.price }}</span>
                  </div>
                  <div class=\"text-danger fw-bold\" title=\"Special price\">{{ product.special }}</div>
                {% else %}
                  <span class=\"fw-bold\" title=\"Product price\">{{ product.price }}</span>
                {% endif %}
              </td>
              <td class=\"text-end\">
                {% if product.quantity <= 0 %}
                  <span class=\"badge bg-warning\" title=\"Out of stock - {{ product.quantity }} items\">{{ product.quantity }}</span>
                {% elseif product.quantity <= 5 %}
                  <span class=\"badge bg-danger\" title=\"Low stock - {{ product.quantity }} items remaining\">{{ product.quantity }}</span>
                {% else %}
                  <span class=\"badge bg-success\" title=\"In stock - {{ product.quantity }} items\">{{ product.quantity }}</span>
                {% endif %}
              </td>
              <td class=\"text-end\">
                {% if product.variant %}
                  <div class=\"btn-group\">
                    <a href=\"{{ product.edit }}\" data-bs-toggle=\"tooltip\" title=\"Edit product: {{ product.name }}\" class=\"btn btn-primary btn-sm\">
                      <i class=\"fa-solid fa-pencil\"></i> Edit
                    </a>
                    <button type=\"button\" class=\"btn btn-primary btn-sm dropdown-toggle dropdown-toggle-split\" data-bs-toggle=\"dropdown\" title=\"More options\">
                      <i class=\"fa-solid fa-caret-down\"></i>
                    </button>
                    <div class=\"dropdown-menu dropdown-menu-end\">
                      <a href=\"{{ product.variant }}\" class=\"dropdown-item\">
                        <i class=\"fa-solid fa-plus\"></i> {{ text_variant_add }}
                      </a>
                    </div>
                  </div>
                {% else %}
                  <a href=\"{{ product.edit }}\" data-bs-toggle=\"tooltip\" title=\"Edit product: {{ product.name }}\" class=\"btn btn-primary btn-sm\">
                    <i class=\"fa-solid fa-pencil\"></i> Edit
                  </a>
                {% endif %}
              </td>
            </tr>
          {% endfor %}
        {% else %}
          <tr>
            <td class=\"text-center\" colspan=\"7\">{{ text_no_results }}</td>
          </tr>
        {% endif %}
      </tbody>
    </table>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-6 text-start\">{{ pagination }}</div>
    <div class=\"col-sm-6 text-end\">{{ results }}</div>
  </div>
</form>
", "admin/view/template/catalog/product_list.twig", "/var/www/opencart/admin/view/template/catalog/product_list.twig");
    }
}
