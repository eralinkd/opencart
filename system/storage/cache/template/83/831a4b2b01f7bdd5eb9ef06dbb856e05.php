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

/* admin/view/template/marketplace/marketplace.twig */
class __TwigTemplate_661d6566de08605919029ad53444f160 extends Template
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
        ";
        // line 6
        if (($context["signature"] ?? null)) {
            // line 7
            yield "          <button type=\"button\" id=\"button-api\" data-bs-toggle=\"tooltip\" title=\"";
            yield ($context["button_api"] ?? null);
            yield "\" class=\"btn btn-info\"><i class=\"fa-solid fa-cog\"></i></button>
        ";
        } else {
            // line 9
            yield "          <button type=\"button\" id=\"button-api\" data-bs-toggle=\"tooltip\" title=\"";
            yield ($context["button_api"] ?? null);
            yield "\" data-placement=\"left\" class=\"btn btn-danger\"><i class=\"fa-solid fa-triangle-exclamation\"></i></button>
        ";
        }
        // line 11
        yield "      </div>
      <h1>";
        // line 12
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 15
            yield "          <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 15);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 15);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        yield "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 21
        if (($context["error_warning"] ?? null)) {
            // line 22
            yield "      <div class=\"alert alert-danger\"><i class=\"fa-solid fa-triangle-exclamation\"></i> ";
            yield ($context["error_warning"] ?? null);
            yield "</div>
    ";
        }
        // line 24
        yield "    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-puzzle-piece\"></i> ";
        // line 25
        yield ($context["text_list"] ?? null);
        yield "</div>
      <div class=\"card-body\">
        <form id=\"form-filter\">
          <div class=\"card bg-light\">
            <div class=\"card-body\">
              <div class=\"input-group\">
                <input type=\"text\" name=\"filter_search\" value=\"";
        // line 31
        yield ($context["filter_search"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["text_search"] ?? null);
        yield "\" id=\"input-search\" class=\"form-control\"/>
                <select name=\"filter_category\" id=\"input-category\" class=\"form-select\">
                  ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 34
            yield "                    <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "value", [], "any", false, false, false, 34);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "value", [], "any", false, false, false, 34) == ($context["filter_category"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "text", [], "any", false, false, false, 34);
            yield "</option>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "                </select>
                <button type=\"submit\" id=\"button-filter\" data-bs-toggle=\"tooltip\" title=\"";
        // line 37
        yield ($context["button_filter"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-filter\"></i></button>
              </div>
              <input type=\"hidden\" name=\"filter_rating\" value=\"";
        // line 39
        yield ($context["filter_rating"] ?? null);
        yield "\"/>
              <input type=\"hidden\" name=\"filter_partner\" value=\"";
        // line 40
        yield ($context["filter_partner"] ?? null);
        yield "\"/>
            </div>
          </div>
          <br/>
          <div class=\"row mb-4\">
            <div class=\"col-sm-auto me-sm-auto mb-2 mb-lg-0\">
              <div id=\"filter-license\" class=\"btn-group\">
                ";
        // line 47
        $context["license_row"] = 0;
        // line 48
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["licenses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["license"]) {
            // line 49
            yield "                  <input type=\"radio\" name=\"filter_license\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["license"], "value", [], "any", false, false, false, 49);
            yield "\" id=\"input-license-";
            yield ($context["license_row"] ?? null);
            yield "\" class=\"btn-check\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["license"], "value", [], "any", false, false, false, 49) == ($context["filter_license"] ?? null))) {
                yield " checked";
            }
            yield ">
                  <label class=\"btn btn-outline-secondary\" for=\"input-license-";
            // line 50
            yield ($context["license_row"] ?? null);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["license"], "text", [], "any", false, false, false, 50);
            yield "</label>
                  ";
            // line 51
            $context["license_row"] = (($context["license_row"] ?? null) + 1);
            // line 52
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['license'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        yield "              </div>
            </div>
            <div class=\"col-xl-3 col-lg-5 col-sm-auto\">
              <div class=\"input-group float-end\">
                <div class=\"input-group-text\"><i class=\"fa-solid fa-arrow-down-short-wide\"></i></div>
                <select name=\"sort\" id=\"input-sort\" class=\"form-select\">
                  ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($context["sorts"]);
        foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
            // line 60
            yield "                    <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 60);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 60) == ($context["sort"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 60);
            yield "</option>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['sorts'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        yield "                </select>
              </div>
            </div>
          </div>
        </form>
        <div id=\"list\">";
        // line 67
        yield ($context["list"] ?? null);
        yield "</div>
      </div>
    </div>
  </div>
</div>
";
        // line 72
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/view/template/marketplace/marketplace.twig";
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
        return array (  236 => 72,  228 => 67,  221 => 62,  206 => 60,  202 => 59,  194 => 53,  188 => 52,  186 => 51,  180 => 50,  169 => 49,  164 => 48,  162 => 47,  152 => 40,  148 => 39,  143 => 37,  140 => 36,  125 => 34,  121 => 33,  114 => 31,  105 => 25,  102 => 24,  96 => 22,  94 => 21,  88 => 17,  77 => 15,  73 => 14,  68 => 12,  65 => 11,  59 => 9,  53 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        {% if signature %}
          <button type=\"button\" id=\"button-api\" data-bs-toggle=\"tooltip\" title=\"{{ button_api }}\" class=\"btn btn-info\"><i class=\"fa-solid fa-cog\"></i></button>
        {% else %}
          <button type=\"button\" id=\"button-api\" data-bs-toggle=\"tooltip\" title=\"{{ button_api }}\" data-placement=\"left\" class=\"btn btn-danger\"><i class=\"fa-solid fa-triangle-exclamation\"></i></button>
        {% endif %}
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
    {% if error_warning %}
      <div class=\"alert alert-danger\"><i class=\"fa-solid fa-triangle-exclamation\"></i> {{ error_warning }}</div>
    {% endif %}
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-puzzle-piece\"></i> {{ text_list }}</div>
      <div class=\"card-body\">
        <form id=\"form-filter\">
          <div class=\"card bg-light\">
            <div class=\"card-body\">
              <div class=\"input-group\">
                <input type=\"text\" name=\"filter_search\" value=\"{{ filter_search }}\" placeholder=\"{{ text_search }}\" id=\"input-search\" class=\"form-control\"/>
                <select name=\"filter_category\" id=\"input-category\" class=\"form-select\">
                  {% for category in categories %}
                    <option value=\"{{ category.value }}\"{% if category.value == filter_category %} selected{% endif %}>{{ category.text }}</option>
                  {% endfor %}
                </select>
                <button type=\"submit\" id=\"button-filter\" data-bs-toggle=\"tooltip\" title=\"{{ button_filter }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-filter\"></i></button>
              </div>
              <input type=\"hidden\" name=\"filter_rating\" value=\"{{ filter_rating }}\"/>
              <input type=\"hidden\" name=\"filter_partner\" value=\"{{ filter_partner }}\"/>
            </div>
          </div>
          <br/>
          <div class=\"row mb-4\">
            <div class=\"col-sm-auto me-sm-auto mb-2 mb-lg-0\">
              <div id=\"filter-license\" class=\"btn-group\">
                {% set license_row = 0 %}
                {% for license in licenses %}
                  <input type=\"radio\" name=\"filter_license\" value=\"{{ license.value }}\" id=\"input-license-{{ license_row }}\" class=\"btn-check\"{% if license.value == filter_license %} checked{% endif %}>
                  <label class=\"btn btn-outline-secondary\" for=\"input-license-{{ license_row }}\">{{ license.text }}</label>
                  {% set license_row = license_row + 1 %}
                {% endfor %}
              </div>
            </div>
            <div class=\"col-xl-3 col-lg-5 col-sm-auto\">
              <div class=\"input-group float-end\">
                <div class=\"input-group-text\"><i class=\"fa-solid fa-arrow-down-short-wide\"></i></div>
                <select name=\"sort\" id=\"input-sort\" class=\"form-select\">
                  {% for sorts in sorts %}
                    <option value=\"{{ sorts.value }}\"{% if sorts.value == sort %} selected{% endif %}>{{ sorts.text }}</option>
                  {% endfor %}
                </select>
              </div>
            </div>
          </div>
        </form>
        <div id=\"list\">{{ list }}</div>
      </div>
    </div>
  </div>
</div>
{{ footer }}", "admin/view/template/marketplace/marketplace.twig", "/var/www/opencart/admin/view/template/marketplace/marketplace.twig");
    }
}
