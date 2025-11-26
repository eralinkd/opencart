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
class __TwigTemplate_a31db1a5dc4c585fc7aba534599c8f8c extends Template
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
        <div class=\"btn-group\">
          <button type=\"button\" class=\"btn btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\"><i class=\"fa-solid fa-list-check\"></i> ";
        // line 9
        yield ($context["button_action"] ?? null);
        yield " <i class=\"fa-solid fa-caret-down fa-fw\"></i></button>
          <ul class=\"dropdown-menu\">
            <li><button type=\"submit\" form=\"form-product\" formaction=\"";
        // line 11
        yield ($context["copy"] ?? null);
        yield "\" class=\"dropdown-item\"><i class=\"fa-solid fa-copy\"></i> ";
        yield ($context["text_copy"] ?? null);
        yield "</button></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><button type=\"submit\" form=\"form-product\" formaction=\"";
        // line 13
        yield ($context["enable"] ?? null);
        yield "\" class=\"dropdown-item\"><i class=\"fa-solid fa-toggle-on text-success\"></i> ";
        yield ($context["text_enable"] ?? null);
        yield "</button></li>
            <li><button type=\"submit\" form=\"form-product\" formaction=\"";
        // line 14
        yield ($context["disable"] ?? null);
        yield "\" class=\"dropdown-item\"><i class=\"fa-solid fa-toggle-off text-danger\"></i> ";
        yield ($context["text_disable"] ?? null);
        yield "</button></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><button type=\"submit\" form=\"form-product\" formaction=\"";
        // line 16
        yield ($context["delete"] ?? null);
        yield "\" onclick=\"return confirm('";
        yield ($context["text_confirm"] ?? null);
        yield "');\" class=\"dropdown-item\"><i class=\"fa-regular fa-trash-can text-danger\"></i> ";
        yield ($context["text_delete"] ?? null);
        yield "</button></li>
          </ul>
        </div>
      </div>
      <h1>";
        // line 20
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 23
            yield "          <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 23);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 23);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        yield "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"row\">
      <div id=\"filter-product\" class=\"col-lg-3 col-md-12 order-lg-last d-none d-lg-block mb-3\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa-solid fa-filter\"></i> ";
        // line 32
        yield ($context["text_filter"] ?? null);
        yield "</div>
          <div class=\"card-body\">
            <form id=\"form-filter\">
              <div class=\"mb-3\">
                <label for=\"input-name\" class=\"form-label\">";
        // line 36
        yield ($context["entry_name"] ?? null);
        yield "</label> <input type=\"text\" name=\"filter_name\" value=\"";
        yield ($context["filter_name"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_name"] ?? null);
        yield "\" id=\"input-name\" data-oc-target=\"autocomplete-name\" class=\"form-control\" autocomplete=\"off\"/>
                <ul id=\"autocomplete-name\" class=\"dropdown-menu\"></ul>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-model\" class=\"form-label\">";
        // line 40
        yield ($context["entry_model"] ?? null);
        yield "</label> <input type=\"text\" name=\"filter_model\" value=\"";
        yield ($context["filter_model"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_model"] ?? null);
        yield "\" id=\"input-model\" data-oc-target=\"autocomplete-model\" class=\"form-control\" autocomplete=\"off\"/>
                <ul id=\"autocomplete-model\" class=\"dropdown-menu\"></ul>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-category\" class=\"form-label\">";
        // line 44
        yield ($context["entry_category"] ?? null);
        yield "</label> <input type=\"text\" name=\"filter_category\" value=\"";
        yield ($context["filter_category"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_category"] ?? null);
        yield "\" id=\"input-category\" data-oc-target=\"autocomplete-category\" class=\"form-control\" autocomplete=\"off\"/>
                <input type=\"hidden\" name=\"filter_category_id\" value=\"";
        // line 45
        yield ($context["filter_category_id"] ?? null);
        yield "\" id=\"input-category-id\"/>
                <ul id=\"autocomplete-category\" class=\"dropdown-menu\"></ul>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-manufacturer\" class=\"form-label\">";
        // line 49
        yield ($context["entry_manufacturer"] ?? null);
        yield "</label> <input type=\"text\" name=\"filter_manufacturer\" value=\"";
        yield ($context["filter_manufacturer"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_manufacturer"] ?? null);
        yield "\" id=\"input-manufacturer\" data-oc-target=\"autocomplete-manufacturer\" class=\"form-control\" autocomplete=\"off\"/>
                <input type=\"hidden\" name=\"filter_manufacturer_id\" value=\"";
        // line 50
        yield ($context["filter_manufacturer_id"] ?? null);
        yield "\" id=\"input-manufacturer-id\"/>
                <ul id=\"autocomplete-manufacturer\" class=\"dropdown-menu\"></ul>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-price-from\" class=\"form-label\">";
        // line 54
        yield ($context["entry_price"] ?? null);
        yield "</label>
                <div class=\"input-group\">
                  <input type=\"text\" name=\"filter_price_from\" value=\"";
        // line 56
        yield ($context["filter_price_from"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["text_from"] ?? null);
        yield "\" id=\"input-price-from\" class=\"form-control\"/>
                  <div class=\"input-group-text\"> - </div>
                  <input type=\"text\" name=\"filter_price_to\" value=\"";
        // line 58
        yield ($context["filter_price_to"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["text_to"] ?? null);
        yield "\" id=\"input-price-to\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-quantity-from\" class=\"form-label\">";
        // line 62
        yield ($context["entry_quantity"] ?? null);
        yield "</label>
                <div class=\"input-group\">
                  <input type=\"text\" name=\"filter_quantity_from\" value=\"";
        // line 64
        yield ($context["filter_quantity_from"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["text_from"] ?? null);
        yield "\" id=\"input-quantity-from\" class=\"form-control\"/>
                  <div class=\"input-group-text\"> - </div>
                  <input type=\"text\" name=\"filter_quantity_to\" value=\"";
        // line 66
        yield ($context["filter_quantity_to"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["text_to"] ?? null);
        yield "\" id=\"input-quantity-to\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-store-id\" class=\"form-label\">";
        // line 70
        yield ($context["entry_store"] ?? null);
        yield "</label>
                <select name=\"filter_store_id\" id=\"input-store-id\" class=\"form-select\">
                  <option value=\"\"></option>
                  ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 74
            yield "                    <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 74);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 74) == ($context["filter_store_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 74);
            yield "</option>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['store'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        yield "                </select>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-language\" class=\"form-label\">";
        // line 79
        yield ($context["entry_language"] ?? null);
        yield "</label>
                <select name=\"filter_language_id\" id=\"input-store\" class=\"form-select\">
                  <option value=\"\"></option>
                  ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 83
            yield "                    <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 83);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 83) == ($context["filter_language_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 83);
            yield "</option>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        yield "                </select>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-status\" class=\"form-label\">";
        // line 88
        yield ($context["entry_status"] ?? null);
        yield "</label> <select name=\"filter_status\" id=\"input-status\" class=\"form-select\">
                  <option value=\"\"></option>
                  <option value=\"1\"";
        // line 90
        if ((($context["filter_status"] ?? null) == "1")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_enabled"] ?? null);
        yield "</option>
                  <option value=\"0\"";
        // line 91
        if ((($context["filter_status"] ?? null) == "0")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_disabled"] ?? null);
        yield "</option>
                </select>
              </div>
              <div class=\"text-end\">
                <button type=\"submit\" id=\"button-filter\" class=\"btn btn-light\"><i class=\"fa-solid fa-filter\"></i> ";
        // line 95
        yield ($context["button_filter"] ?? null);
        yield "</button>
                <button type=\"reset\" data-bs-toggle=\"tooltip\" title=\"";
        // line 96
        yield ($context["button_reset"] ?? null);
        yield "\" class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-filter-circle-xmark\"></i></button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class=\"col col-lg-9 col-md-12\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa-solid fa-list\"></i> ";
        // line 104
        yield ($context["text_list"] ?? null);
        yield "</div>
          <div id=\"list\" class=\"card-body\">";
        // line 105
        yield ($context["list"] ?? null);
        yield "</div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\" src=\"view/javascript/product.js\"></script>
";
        // line 112
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
        return array (  341 => 112,  331 => 105,  327 => 104,  316 => 96,  312 => 95,  301 => 91,  293 => 90,  288 => 88,  283 => 85,  268 => 83,  264 => 82,  258 => 79,  253 => 76,  238 => 74,  234 => 73,  228 => 70,  219 => 66,  212 => 64,  207 => 62,  198 => 58,  191 => 56,  186 => 54,  179 => 50,  171 => 49,  164 => 45,  156 => 44,  145 => 40,  134 => 36,  127 => 32,  118 => 25,  107 => 23,  103 => 22,  98 => 20,  87 => 16,  80 => 14,  74 => 13,  67 => 11,  62 => 9,  55 => 7,  51 => 6,  42 => 1,);
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
        <div class=\"btn-group\">
          <button type=\"button\" class=\"btn btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\"><i class=\"fa-solid fa-list-check\"></i> {{ button_action }} <i class=\"fa-solid fa-caret-down fa-fw\"></i></button>
          <ul class=\"dropdown-menu\">
            <li><button type=\"submit\" form=\"form-product\" formaction=\"{{ copy }}\" class=\"dropdown-item\"><i class=\"fa-solid fa-copy\"></i> {{ text_copy }}</button></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><button type=\"submit\" form=\"form-product\" formaction=\"{{ enable }}\" class=\"dropdown-item\"><i class=\"fa-solid fa-toggle-on text-success\"></i> {{ text_enable }}</button></li>
            <li><button type=\"submit\" form=\"form-product\" formaction=\"{{ disable }}\" class=\"dropdown-item\"><i class=\"fa-solid fa-toggle-off text-danger\"></i> {{ text_disable }}</button></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><button type=\"submit\" form=\"form-product\" formaction=\"{{ delete }}\" onclick=\"return confirm('{{ text_confirm }}');\" class=\"dropdown-item\"><i class=\"fa-regular fa-trash-can text-danger\"></i> {{ text_delete }}</button></li>
          </ul>
        </div>
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
                <label for=\"input-name\" class=\"form-label\">{{ entry_name }}</label> <input type=\"text\" name=\"filter_name\" value=\"{{ filter_name }}\" placeholder=\"{{ entry_name }}\" id=\"input-name\" data-oc-target=\"autocomplete-name\" class=\"form-control\" autocomplete=\"off\"/>
                <ul id=\"autocomplete-name\" class=\"dropdown-menu\"></ul>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-model\" class=\"form-label\">{{ entry_model }}</label> <input type=\"text\" name=\"filter_model\" value=\"{{ filter_model }}\" placeholder=\"{{ entry_model }}\" id=\"input-model\" data-oc-target=\"autocomplete-model\" class=\"form-control\" autocomplete=\"off\"/>
                <ul id=\"autocomplete-model\" class=\"dropdown-menu\"></ul>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-category\" class=\"form-label\">{{ entry_category }}</label> <input type=\"text\" name=\"filter_category\" value=\"{{ filter_category }}\" placeholder=\"{{ entry_category }}\" id=\"input-category\" data-oc-target=\"autocomplete-category\" class=\"form-control\" autocomplete=\"off\"/>
                <input type=\"hidden\" name=\"filter_category_id\" value=\"{{ filter_category_id }}\" id=\"input-category-id\"/>
                <ul id=\"autocomplete-category\" class=\"dropdown-menu\"></ul>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-manufacturer\" class=\"form-label\">{{ entry_manufacturer }}</label> <input type=\"text\" name=\"filter_manufacturer\" value=\"{{ filter_manufacturer }}\" placeholder=\"{{ entry_manufacturer }}\" id=\"input-manufacturer\" data-oc-target=\"autocomplete-manufacturer\" class=\"form-control\" autocomplete=\"off\"/>
                <input type=\"hidden\" name=\"filter_manufacturer_id\" value=\"{{ filter_manufacturer_id }}\" id=\"input-manufacturer-id\"/>
                <ul id=\"autocomplete-manufacturer\" class=\"dropdown-menu\"></ul>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-price-from\" class=\"form-label\">{{ entry_price }}</label>
                <div class=\"input-group\">
                  <input type=\"text\" name=\"filter_price_from\" value=\"{{ filter_price_from }}\" placeholder=\"{{ text_from }}\" id=\"input-price-from\" class=\"form-control\"/>
                  <div class=\"input-group-text\"> - </div>
                  <input type=\"text\" name=\"filter_price_to\" value=\"{{ filter_price_to }}\" placeholder=\"{{ text_to }}\" id=\"input-price-to\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-quantity-from\" class=\"form-label\">{{ entry_quantity }}</label>
                <div class=\"input-group\">
                  <input type=\"text\" name=\"filter_quantity_from\" value=\"{{ filter_quantity_from }}\" placeholder=\"{{ text_from }}\" id=\"input-quantity-from\" class=\"form-control\"/>
                  <div class=\"input-group-text\"> - </div>
                  <input type=\"text\" name=\"filter_quantity_to\" value=\"{{ filter_quantity_to }}\" placeholder=\"{{ text_to }}\" id=\"input-quantity-to\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-store-id\" class=\"form-label\">{{ entry_store }}</label>
                <select name=\"filter_store_id\" id=\"input-store-id\" class=\"form-select\">
                  <option value=\"\"></option>
                  {% for store in stores %}
                    <option value=\"{{ store.store_id }}\"{% if store.store_id == filter_store_id %} selected{% endif %}>{{ store.name }}</option>
                  {% endfor %}
                </select>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-language\" class=\"form-label\">{{ entry_language }}</label>
                <select name=\"filter_language_id\" id=\"input-store\" class=\"form-select\">
                  <option value=\"\"></option>
                  {% for language in languages %}
                    <option value=\"{{ language.language_id }}\"{% if language.language_id == filter_language_id %} selected{% endif %}>{{ language.name }}</option>
                  {% endfor %}
                </select>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-status\" class=\"form-label\">{{ entry_status }}</label> <select name=\"filter_status\" id=\"input-status\" class=\"form-select\">
                  <option value=\"\"></option>
                  <option value=\"1\"{% if filter_status == '1' %} selected{% endif %}>{{ text_enabled }}</option>
                  <option value=\"0\"{% if filter_status == '0' %} selected{% endif %}>{{ text_disabled }}</option>
                </select>
              </div>
              <div class=\"text-end\">
                <button type=\"submit\" id=\"button-filter\" class=\"btn btn-light\"><i class=\"fa-solid fa-filter\"></i> {{ button_filter }}</button>
                <button type=\"reset\" data-bs-toggle=\"tooltip\" title=\"{{ button_reset }}\" class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-filter-circle-xmark\"></i></button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class=\"col col-lg-9 col-md-12\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa-solid fa-list\"></i> {{ text_list }}</div>
          <div id=\"list\" class=\"card-body\">{{ list }}</div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\" src=\"view/javascript/product.js\"></script>
{{ footer }}
", "admin/view/template/catalog/product.twig", "/var/www/opencart/admin/view/template/catalog/product.twig");
    }
}
