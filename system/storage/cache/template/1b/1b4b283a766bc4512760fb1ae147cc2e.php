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

/* admin/view/template/catalog/product.twig */
class __TwigTemplate_58f4117ea3e5b71ba8d7887190527756 extends Template
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
        yield ($context["column_left"] ?? null);
        yield "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        yield ($context["button_filter"] ?? null);
        yield "\" onclick=\"\$('#filter-product').toggleClass('d-none');\" class=\"btn btn-light d-lg-none\"><i class=\"fa-solid fa-filter\"></i></button>
        <a href=\"";
        // line 7
        yield ($context["add"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_add"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus\"></i></a>
        <button type=\"submit\" form=\"form-product\" formaction=\"";
        // line 8
        yield ($context["copy"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_copy"] ?? null);
        yield "\" class=\"btn btn-light\"><i class=\"fa-regular fa-copy\"></i></button>
        <button type=\"submit\" form=\"form-product\" formaction=\"";
        // line 9
        yield ($context["delete"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_delete"] ?? null);
        yield "\" onclick=\"return confirm('";
        yield ($context["text_confirm"] ?? null);
        yield "');\" class=\"btn btn-danger\"><i class=\"fa-regular fa-trash-can\"></i></button>
      </div>
      <h1>";
        // line 11
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
            yield "          <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 14);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 14);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        yield "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"row\">
      <div id=\"filter-product\" class=\"col-lg-3 col-md-12 order-lg-last d-none d-lg-block mb-3\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa-solid fa-filter\"></i> ";
        // line 23
        yield ($context["text_filter"] ?? null);
        yield "</div>
          <div class=\"card-body\">
            <form id=\"form-filter\">
              <div class=\"mb-3\">
                <label for=\"input-name\" class=\"form-label\">
                  ";
        // line 28
        yield ($context["entry_name"] ?? null);
        yield "
                  <span class=\"text-muted\" style=\"font-size: 12px; font-weight: normal;\">(Search by name)</span>
                </label>
                <input type=\"text\" name=\"filter_name\" value=\"";
        // line 31
        yield ($context["filter_name"] ?? null);
        yield "\" placeholder=\"Enter product name to search...\" id=\"input-name\" data-oc-target=\"autocomplete-name\" class=\"form-control\" autocomplete=\"off\"/>
                <div class=\"form-text\">Type product name to filter the list</div>
                <ul id=\"autocomplete-name\" class=\"dropdown-menu\"></ul>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-model\" class=\"form-label\">
                  ";
        // line 37
        yield ($context["entry_model"] ?? null);
        yield "
                  <span class=\"text-muted\" style=\"font-size: 12px; font-weight: normal;\">(Search by model/SKU)</span>
                </label>
                <input type=\"text\" name=\"filter_model\" value=\"";
        // line 40
        yield ($context["filter_model"] ?? null);
        yield "\" placeholder=\"Enter product model or SKU...\" id=\"input-model\" data-oc-target=\"autocomplete-model\" class=\"form-control\" autocomplete=\"off\"/>
                <div class=\"form-text\">Type product model or SKU to filter</div>
                <ul id=\"autocomplete-model\" class=\"dropdown-menu\"></ul>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-category\" class=\"form-label\">
                  ";
        // line 46
        yield ($context["entry_category"] ?? null);
        yield "
                  <span class=\"text-muted\" style=\"font-size: 12px; font-weight: normal;\">(Filter by category)</span>
                </label>
                <input type=\"text\" name=\"filter_category\" value=\"";
        // line 49
        yield ($context["filter_category"] ?? null);
        yield "\" placeholder=\"Select category...\" id=\"input-category\" data-oc-target=\"autocomplete-category\" class=\"form-control\" autocomplete=\"off\"/>
                <input type=\"hidden\" name=\"filter_category_id\" value=\"";
        // line 50
        yield ($context["filter_category_id"] ?? null);
        yield "\" id=\"input-category-id\"/>
                <div class=\"form-text\">Select a category to show only products from that category</div>
                <ul id=\"autocomplete-category\" class=\"dropdown-menu\"></ul>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-manufacturer\" class=\"form-label\">
                  ";
        // line 56
        yield ($context["entry_manufacturer"] ?? null);
        yield "
                  <span class=\"text-muted\" style=\"font-size: 12px; font-weight: normal;\">(Filter by manufacturer)</span>
                </label>
                <input type=\"text\" name=\"filter_manufacturer\" value=\"";
        // line 59
        yield ($context["filter_manufacturer"] ?? null);
        yield "\" placeholder=\"Select manufacturer...\" id=\"input-manufacturer\" data-oc-target=\"autocomplete-manufacturer\" class=\"form-control\" autocomplete=\"off\"/>
                <input type=\"hidden\" name=\"filter_manufacturer_id\" value=\"";
        // line 60
        yield ($context["filter_manufacturer_id"] ?? null);
        yield "\" id=\"input-manufacturer-id\"/>
                <div class=\"form-text\">Select a manufacturer to filter products</div>
                <ul id=\"autocomplete-manufacturer\" class=\"dropdown-menu\"></ul>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-price-from\" class=\"form-label\">
                  ";
        // line 66
        yield ($context["entry_price"] ?? null);
        yield "
                  <span class=\"text-muted\" style=\"font-size: 12px; font-weight: normal;\">(Price range)</span>
                </label>
                <div class=\"row\">
                  <div class=\"col\">
                    <input type=\"text\" name=\"filter_price_from\" value=\"";
        // line 71
        yield ($context["filter_price_from"] ?? null);
        yield "\" placeholder=\"Min price\" id=\"input-price-from\" class=\"form-control\" title=\"Minimum price\"/>
                  </div>
                  <label class=\"col-auto col-form-label px-0\" title=\"Price range separator\"><i class=\"fa-solid fa-minus\"></i></label>
                  <div class=\"col\">
                    <input type=\"text\" name=\"filter_price_to\" value=\"";
        // line 75
        yield ($context["filter_price_to"] ?? null);
        yield "\" placeholder=\"Max price\" id=\"input-price-to\" class=\"form-control\" title=\"Maximum price\"/>
                  </div>
                </div>
                <div class=\"form-text\">Enter price range (min - max) to filter products</div>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-quantity-from\" class=\"form-label\">
                  ";
        // line 82
        yield ($context["entry_quantity"] ?? null);
        yield "
                  <span class=\"text-muted\" style=\"font-size: 12px; font-weight: normal;\">(Stock quantity range)</span>
                </label>
                <div class=\"row\">
                  <div class=\"col\">
                    <input type=\"text\" name=\"filter_quantity_from\" value=\"";
        // line 87
        yield ($context["filter_quantity_from"] ?? null);
        yield "\" placeholder=\"Min quantity\" id=\"input-quantity-from\" class=\"form-control\" title=\"Minimum quantity\"/>
                  </div>
                  <label class=\"col-auto col-form-label px-0\" title=\"Quantity range separator\"><i class=\"fa-solid fa-minus\"></i></label>
                  <div class=\"col\">
                    <input type=\"text\" name=\"filter_quantity_to\" value=\"";
        // line 91
        yield ($context["filter_quantity_to"] ?? null);
        yield "\" placeholder=\"Max quantity\" id=\"input-quantity-to\" class=\"form-control\" title=\"Maximum quantity\"/>
                  </div>
                </div>
                <div class=\"form-text\">Enter stock quantity range (min - max) to filter products</div>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-status\" class=\"form-label\">
                  ";
        // line 98
        yield ($context["entry_status"] ?? null);
        yield "
                  <span class=\"text-muted\" style=\"font-size: 12px; font-weight: normal;\">(Filter by status)</span>
                </label>
                <select name=\"filter_status\" id=\"input-status\" class=\"form-select\">
                  <option value=\"\">All Statuses</option>
                  <option value=\"1\"";
        // line 103
        if ((($context["filter_status"] ?? null) == "1")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_enabled"] ?? null);
        yield " - Show only enabled products</option>
                  <option value=\"0\"";
        // line 104
        if ((($context["filter_status"] ?? null) == "0")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_disabled"] ?? null);
        yield " - Show only disabled products</option>
                </select>
                <div class=\"form-text\">Filter products by their status (enabled/disabled)</div>
              </div>
              <div class=\"text-end\">
                <button type=\"button\" id=\"button-filter\" class=\"btn btn-primary\">
                  <i class=\"fa-solid fa-filter\"></i> ";
        // line 110
        yield ($context["button_filter"] ?? null);
        yield "
                </button>
                <button type=\"reset\" data-bs-toggle=\"tooltip\" title=\"";
        // line 112
        yield ($context["button_reset"] ?? null);
        yield "\" class=\"btn btn-outline-secondary\">
                  <i class=\"fa-solid fa-filter-circle-xmark\"></i> Reset
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class=\"col col-lg-9 col-md-12\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa-solid fa-list\"></i> ";
        // line 122
        yield ($context["text_list"] ?? null);
        yield "</div>
          <div id=\"product\" class=\"card-body\">";
        // line 123
        yield ($context["list"] ?? null);
        yield "</div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#product').on('click', 'thead a, .pagination a', function(e) {
    e.preventDefault();

    \$('#product').load(this.href);
});

\$('#button-filter').on('click', function() {
    var url = '';

    var filter_name = \$('#input-name').val();

    if (filter_name) {
        url += '&filter_name=' + encodeURIComponent(filter_name);
    }

    var filter_model = \$('#input-model').val();

    if (filter_model) {
        url += '&filter_model=' + encodeURIComponent(filter_model);
    }

    var filter_category_id = \$('#input-category-id').val();

    if (filter_category_id) {
        url += '&filter_category_id=' + filter_category_id;
\t}

    var filter_manufacturer_id = \$('#input-manufacturer-id').val();

    if (filter_manufacturer_id) {
        url += '&filter_manufacturer_id=' + filter_manufacturer_id;
    }

    var filter_price_from = \$('#input-price-from').val();

    if (filter_price_from) {
        url += '&filter_price_from=' + encodeURIComponent(filter_price_from);
    }

    var filter_price_to = \$('#input-price-to').val();

    if (filter_price_to) {
        url += '&filter_price_to=' + encodeURIComponent(filter_price_to);
    }

    var filter_quantity_from = \$('#input-quantity-from').val();

    if (filter_quantity_from) {
        url += '&filter_quantity_from=' + filter_quantity_from;
    }

    var filter_quantity_to = \$('#input-quantity-to').val();

    if (filter_quantity_to) {
        url += '&filter_quantity_to=' + filter_quantity_to;
    }

    var filter_status = \$('#input-status').val();

    if (filter_status !== '') {
        url += '&filter_status=' + filter_status;
    }

    window.history.pushState({}, null, 'index.php?route=catalog/product&user_token=";
        // line 193
        yield ($context["user_token"] ?? null);
        yield "' + url);

    \$('#product').load('index.php?route=catalog/product.list&user_token=";
        // line 195
        yield ($context["user_token"] ?? null);
        yield "' + url);
});

\$('#input-name').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/product.autocomplete&user_token=";
        // line 201
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['product_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-name').val(decodeHTMLEntities(item['label']));
    }
});

\$('#input-model').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/product.autocomplete&user_token=";
        // line 221
        yield ($context["user_token"] ?? null);
        yield "&filter_model=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['model'],
                        value: item['product_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-model').val(decodeHTMLEntities(item['label']));
    }
});

\$('#input-category').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/category.autocomplete&user_token=";
        // line 241
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                json.unshift({
                    name: '";
        // line 245
        yield ($context["text_none"] ?? null);
        yield "',
                    category_id: '',
                });

                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['category_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        if (item['value']) {
            \$('#input-category').val(decodeHTMLEntities(item['label']));
            \$('#input-category-id').val(item['value']);
        } else {
            \$('#input-category').val('');
            \$('#input-category-id').val('');
        }
    }
});

\$('#input-manufacturer').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/manufacturer.autocomplete&user_token=";
        // line 272
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                json.unshift({
                    name: '";
        // line 276
        yield ($context["text_none"] ?? null);
        yield "',
                    category_id: '',
                });

                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['manufacturer_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        if (item['value']) {
            \$('#input-manufacturer').val(decodeHTMLEntities(item['label']));
            \$('#input-manufacturer-id').val(item['value']);
        } else {
            \$('#input-manufacturer').val('');
            \$('#input-manufacturer-id').val('');
        }
    }
});
//--></script>
";
        // line 300
        yield ($context["footer"] ?? null);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/view/template/catalog/product.twig";
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
        return array (  486 => 300,  459 => 276,  452 => 272,  422 => 245,  415 => 241,  392 => 221,  369 => 201,  360 => 195,  355 => 193,  282 => 123,  278 => 122,  265 => 112,  260 => 110,  247 => 104,  239 => 103,  231 => 98,  221 => 91,  214 => 87,  206 => 82,  196 => 75,  189 => 71,  181 => 66,  172 => 60,  168 => 59,  162 => 56,  153 => 50,  149 => 49,  143 => 46,  134 => 40,  128 => 37,  119 => 31,  113 => 28,  105 => 23,  96 => 16,  85 => 14,  81 => 13,  76 => 11,  67 => 9,  61 => 8,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"button\" data-bs-toggle=\"tooltip\" title=\"{{ button_filter }}\" onclick=\"\$('#filter-product').toggleClass('d-none');\" class=\"btn btn-light d-lg-none\"><i class=\"fa-solid fa-filter\"></i></button>
        <a href=\"{{ add }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_add }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus\"></i></a>
        <button type=\"submit\" form=\"form-product\" formaction=\"{{ copy }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_copy }}\" class=\"btn btn-light\"><i class=\"fa-regular fa-copy\"></i></button>
        <button type=\"submit\" form=\"form-product\" formaction=\"{{ delete }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_delete }}\" onclick=\"return confirm('{{ text_confirm }}');\" class=\"btn btn-danger\"><i class=\"fa-regular fa-trash-can\"></i></button>
      </div>
      <h1>{{ heading_title }}</h1>
      <ol class=\"breadcrumb\">
        {% for breadcrumb in breadcrumbs %}
          <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
        {% endfor %}
      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"row\">
      <div id=\"filter-product\" class=\"col-lg-3 col-md-12 order-lg-last d-none d-lg-block mb-3\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa-solid fa-filter\"></i> {{ text_filter }}</div>
          <div class=\"card-body\">
            <form id=\"form-filter\">
              <div class=\"mb-3\">
                <label for=\"input-name\" class=\"form-label\">
                  {{ entry_name }}
                  <span class=\"text-muted\" style=\"font-size: 12px; font-weight: normal;\">(Search by name)</span>
                </label>
                <input type=\"text\" name=\"filter_name\" value=\"{{ filter_name }}\" placeholder=\"Enter product name to search...\" id=\"input-name\" data-oc-target=\"autocomplete-name\" class=\"form-control\" autocomplete=\"off\"/>
                <div class=\"form-text\">Type product name to filter the list</div>
                <ul id=\"autocomplete-name\" class=\"dropdown-menu\"></ul>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-model\" class=\"form-label\">
                  {{ entry_model }}
                  <span class=\"text-muted\" style=\"font-size: 12px; font-weight: normal;\">(Search by model/SKU)</span>
                </label>
                <input type=\"text\" name=\"filter_model\" value=\"{{ filter_model }}\" placeholder=\"Enter product model or SKU...\" id=\"input-model\" data-oc-target=\"autocomplete-model\" class=\"form-control\" autocomplete=\"off\"/>
                <div class=\"form-text\">Type product model or SKU to filter</div>
                <ul id=\"autocomplete-model\" class=\"dropdown-menu\"></ul>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-category\" class=\"form-label\">
                  {{ entry_category }}
                  <span class=\"text-muted\" style=\"font-size: 12px; font-weight: normal;\">(Filter by category)</span>
                </label>
                <input type=\"text\" name=\"filter_category\" value=\"{{ filter_category }}\" placeholder=\"Select category...\" id=\"input-category\" data-oc-target=\"autocomplete-category\" class=\"form-control\" autocomplete=\"off\"/>
                <input type=\"hidden\" name=\"filter_category_id\" value=\"{{ filter_category_id }}\" id=\"input-category-id\"/>
                <div class=\"form-text\">Select a category to show only products from that category</div>
                <ul id=\"autocomplete-category\" class=\"dropdown-menu\"></ul>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-manufacturer\" class=\"form-label\">
                  {{ entry_manufacturer }}
                  <span class=\"text-muted\" style=\"font-size: 12px; font-weight: normal;\">(Filter by manufacturer)</span>
                </label>
                <input type=\"text\" name=\"filter_manufacturer\" value=\"{{ filter_manufacturer }}\" placeholder=\"Select manufacturer...\" id=\"input-manufacturer\" data-oc-target=\"autocomplete-manufacturer\" class=\"form-control\" autocomplete=\"off\"/>
                <input type=\"hidden\" name=\"filter_manufacturer_id\" value=\"{{ filter_manufacturer_id }}\" id=\"input-manufacturer-id\"/>
                <div class=\"form-text\">Select a manufacturer to filter products</div>
                <ul id=\"autocomplete-manufacturer\" class=\"dropdown-menu\"></ul>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-price-from\" class=\"form-label\">
                  {{ entry_price }}
                  <span class=\"text-muted\" style=\"font-size: 12px; font-weight: normal;\">(Price range)</span>
                </label>
                <div class=\"row\">
                  <div class=\"col\">
                    <input type=\"text\" name=\"filter_price_from\" value=\"{{ filter_price_from }}\" placeholder=\"Min price\" id=\"input-price-from\" class=\"form-control\" title=\"Minimum price\"/>
                  </div>
                  <label class=\"col-auto col-form-label px-0\" title=\"Price range separator\"><i class=\"fa-solid fa-minus\"></i></label>
                  <div class=\"col\">
                    <input type=\"text\" name=\"filter_price_to\" value=\"{{ filter_price_to }}\" placeholder=\"Max price\" id=\"input-price-to\" class=\"form-control\" title=\"Maximum price\"/>
                  </div>
                </div>
                <div class=\"form-text\">Enter price range (min - max) to filter products</div>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-quantity-from\" class=\"form-label\">
                  {{ entry_quantity }}
                  <span class=\"text-muted\" style=\"font-size: 12px; font-weight: normal;\">(Stock quantity range)</span>
                </label>
                <div class=\"row\">
                  <div class=\"col\">
                    <input type=\"text\" name=\"filter_quantity_from\" value=\"{{ filter_quantity_from }}\" placeholder=\"Min quantity\" id=\"input-quantity-from\" class=\"form-control\" title=\"Minimum quantity\"/>
                  </div>
                  <label class=\"col-auto col-form-label px-0\" title=\"Quantity range separator\"><i class=\"fa-solid fa-minus\"></i></label>
                  <div class=\"col\">
                    <input type=\"text\" name=\"filter_quantity_to\" value=\"{{ filter_quantity_to }}\" placeholder=\"Max quantity\" id=\"input-quantity-to\" class=\"form-control\" title=\"Maximum quantity\"/>
                  </div>
                </div>
                <div class=\"form-text\">Enter stock quantity range (min - max) to filter products</div>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-status\" class=\"form-label\">
                  {{ entry_status }}
                  <span class=\"text-muted\" style=\"font-size: 12px; font-weight: normal;\">(Filter by status)</span>
                </label>
                <select name=\"filter_status\" id=\"input-status\" class=\"form-select\">
                  <option value=\"\">All Statuses</option>
                  <option value=\"1\"{% if filter_status == '1' %} selected{% endif %}>{{ text_enabled }} - Show only enabled products</option>
                  <option value=\"0\"{% if filter_status == '0' %} selected{% endif %}>{{ text_disabled }} - Show only disabled products</option>
                </select>
                <div class=\"form-text\">Filter products by their status (enabled/disabled)</div>
              </div>
              <div class=\"text-end\">
                <button type=\"button\" id=\"button-filter\" class=\"btn btn-primary\">
                  <i class=\"fa-solid fa-filter\"></i> {{ button_filter }}
                </button>
                <button type=\"reset\" data-bs-toggle=\"tooltip\" title=\"{{ button_reset }}\" class=\"btn btn-outline-secondary\">
                  <i class=\"fa-solid fa-filter-circle-xmark\"></i> Reset
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class=\"col col-lg-9 col-md-12\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa-solid fa-list\"></i> {{ text_list }}</div>
          <div id=\"product\" class=\"card-body\">{{ list }}</div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#product').on('click', 'thead a, .pagination a', function(e) {
    e.preventDefault();

    \$('#product').load(this.href);
});

\$('#button-filter').on('click', function() {
    var url = '';

    var filter_name = \$('#input-name').val();

    if (filter_name) {
        url += '&filter_name=' + encodeURIComponent(filter_name);
    }

    var filter_model = \$('#input-model').val();

    if (filter_model) {
        url += '&filter_model=' + encodeURIComponent(filter_model);
    }

    var filter_category_id = \$('#input-category-id').val();

    if (filter_category_id) {
        url += '&filter_category_id=' + filter_category_id;
\t}

    var filter_manufacturer_id = \$('#input-manufacturer-id').val();

    if (filter_manufacturer_id) {
        url += '&filter_manufacturer_id=' + filter_manufacturer_id;
    }

    var filter_price_from = \$('#input-price-from').val();

    if (filter_price_from) {
        url += '&filter_price_from=' + encodeURIComponent(filter_price_from);
    }

    var filter_price_to = \$('#input-price-to').val();

    if (filter_price_to) {
        url += '&filter_price_to=' + encodeURIComponent(filter_price_to);
    }

    var filter_quantity_from = \$('#input-quantity-from').val();

    if (filter_quantity_from) {
        url += '&filter_quantity_from=' + filter_quantity_from;
    }

    var filter_quantity_to = \$('#input-quantity-to').val();

    if (filter_quantity_to) {
        url += '&filter_quantity_to=' + filter_quantity_to;
    }

    var filter_status = \$('#input-status').val();

    if (filter_status !== '') {
        url += '&filter_status=' + filter_status;
    }

    window.history.pushState({}, null, 'index.php?route=catalog/product&user_token={{ user_token }}' + url);

    \$('#product').load('index.php?route=catalog/product.list&user_token={{ user_token }}' + url);
});

\$('#input-name').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/product.autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['product_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-name').val(decodeHTMLEntities(item['label']));
    }
});

\$('#input-model').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/product.autocomplete&user_token={{ user_token }}&filter_model=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['model'],
                        value: item['product_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-model').val(decodeHTMLEntities(item['label']));
    }
});

\$('#input-category').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/category.autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                json.unshift({
                    name: '{{ text_none }}',
                    category_id: '',
                });

                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['category_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        if (item['value']) {
            \$('#input-category').val(decodeHTMLEntities(item['label']));
            \$('#input-category-id').val(item['value']);
        } else {
            \$('#input-category').val('');
            \$('#input-category-id').val('');
        }
    }
});

\$('#input-manufacturer').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/manufacturer.autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                json.unshift({
                    name: '{{ text_none }}',
                    category_id: '',
                });

                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['manufacturer_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        if (item['value']) {
            \$('#input-manufacturer').val(decodeHTMLEntities(item['label']));
            \$('#input-manufacturer-id').val(item['value']);
        } else {
            \$('#input-manufacturer').val('');
            \$('#input-manufacturer-id').val('');
        }
    }
});
//--></script>
{{ footer }}
", "admin/view/template/catalog/product.twig", "D:\\xampp\\htdocs\\opencart\\admin\\view\\template\\catalog\\product.twig");
    }
}
