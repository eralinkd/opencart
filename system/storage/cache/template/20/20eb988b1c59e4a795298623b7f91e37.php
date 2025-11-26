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

/* admin/view/template/cms/comment.twig */
class __TwigTemplate_4fde89c936dbc3c36fdb2e2135bf5bda extends Template
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
        yield "\" onclick=\"\$('#filter-comment').toggleClass('d-none');\" class=\"btn btn-light d-lg-none\"><i class=\"fa-solid fa-filter\"></i></button>
        <button type=\"button\" id=\"button-rating\" data-bs-toggle=\"tooltip\" title=\"";
        // line 7
        yield ($context["button_rating"] ?? null);
        yield "\" class=\"btn btn-light\"><i class=\"fa-solid fa-sync\"></i></button>
        <div class=\"btn-group\">
          <button type=\"button\" class=\"btn btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\"><i class=\"fa-solid fa-list-check\"></i> ";
        // line 9
        yield ($context["button_action"] ?? null);
        yield " <i class=\"fa-solid fa-caret-down fa-fw\"></i></button>
          <ul class=\"dropdown-menu\">
            <li><button type=\"submit\" form=\"form-comment\" formaction=\"";
        // line 11
        yield ($context["approve"] ?? null);
        yield "\" class=\"dropdown-item\"><i class=\"fa-solid fa-check text-success\"></i> ";
        yield ($context["button_approve"] ?? null);
        yield "</button></li>
            <li><button type=\"submit\" form=\"form-comment\" formaction=\"";
        // line 12
        yield ($context["spam"] ?? null);
        yield "\" class=\"dropdown-item\"><i class=\"fa-solid fa-ban text-danger\"></i> ";
        yield ($context["button_spam"] ?? null);
        yield "</button></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><button type=\"submit\" form=\"form-comment\" formaction=\"";
        // line 14
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
        // line 18
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 21
            yield "          <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 21);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 21);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        yield "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"row\">
      <div id=\"filter-comment\" class=\"col-lg-3 col-md-12 order-lg-last d-none d-lg-block mb-3\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa fa-filter\"></i> ";
        // line 30
        yield ($context["text_filter"] ?? null);
        yield "</div>
          <div class=\"card-body\">
            <form id=\"form-filter\">
              <div class=\"mb-3\">
                <label for=\"input-keyword\" class=\"form-label\">";
        // line 34
        yield ($context["entry_keyword"] ?? null);
        yield "</label>
                <input type=\"text\" name=\"filter_keyword\" value=\"\" placeholder=\"";
        // line 35
        yield ($context["entry_keyword"] ?? null);
        yield "\" id=\"input-keyword\" class=\"form-control\"/>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-article\" class=\"form-label\">";
        // line 38
        yield ($context["entry_article"] ?? null);
        yield "</label>
                <input type=\"text\" name=\"filter_article\" value=\"\" placeholder=\"";
        // line 39
        yield ($context["entry_article"] ?? null);
        yield "\" id=\"input-article\" class=\"form-control\"/>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-customer\" class=\"form-label\">";
        // line 42
        yield ($context["entry_customer"] ?? null);
        yield "</label>
                <input type=\"text\" name=\"filter_customer\" value=\"\" placeholder=\"";
        // line 43
        yield ($context["entry_customer"] ?? null);
        yield "\" id=\"input-customer\" class=\"form-control\"/>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-status\" class=\"form-label\">";
        // line 46
        yield ($context["entry_status"] ?? null);
        yield "</label>
                <select name=\"filter_status\" id=\"input-status\" class=\"form-control\"/>
                  <option value=\"\"></option>
                  <option value=\"0\">";
        // line 49
        yield ($context["text_disabled"] ?? null);
        yield "</option>
                  <option value=\"1\">";
        // line 50
        yield ($context["text_enabled"] ?? null);
        yield "</option>
                </select>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-date-from\" class=\"form-label\">";
        // line 54
        yield ($context["entry_date_from"] ?? null);
        yield "</label>
                <input type=\"date\" name=\"filter_date_from\" value=\"";
        // line 55
        yield ($context["filter_date_from"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_date_from"] ?? null);
        yield "\" id=\"input-date-from\" class=\"form-control\"/>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-date-to\" class=\"form-label\">";
        // line 58
        yield ($context["entry_date_to"] ?? null);
        yield "</label>
                <input type=\"date\" name=\"filter_date_to\" value=\"";
        // line 59
        yield ($context["filter_date_to"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_date_to"] ?? null);
        yield "\" id=\"input-date-to\" class=\"form-control\"/>
              </div>
              <div class=\"text-end\">
                <button type=\"submit\" id=\"button-filter\" class=\"btn btn-light\"><i class=\"fa fa-filter\"></i> ";
        // line 62
        yield ($context["button_filter"] ?? null);
        yield "</button>
                <button type=\"reset\" data-bs-toggle=\"tooltip\" title=\"";
        // line 63
        yield ($context["button_reset"] ?? null);
        yield "\" class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-filter-circle-xmark\"></i></button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class=\"col-lg-9 col-md-12\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa fa-list\"></i> ";
        // line 71
        yield ($context["text_list"] ?? null);
        yield "</div>
          <div class=\"card-body\">
            <div id=\"list\">";
        // line 73
        yield ($context["list"] ?? null);
        yield "</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\" src=\"view/javascript/comment.js\"></script>
";
        // line 81
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
        return "admin/view/template/cms/comment.twig";
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
        return array (  227 => 81,  216 => 73,  211 => 71,  200 => 63,  196 => 62,  188 => 59,  184 => 58,  176 => 55,  172 => 54,  165 => 50,  161 => 49,  155 => 46,  149 => 43,  145 => 42,  139 => 39,  135 => 38,  129 => 35,  125 => 34,  118 => 30,  109 => 23,  98 => 21,  94 => 20,  89 => 18,  78 => 14,  71 => 12,  65 => 11,  60 => 9,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"button\" data-bs-toggle=\"tooltip\" title=\"{{ button_filter }}\" onclick=\"\$('#filter-comment').toggleClass('d-none');\" class=\"btn btn-light d-lg-none\"><i class=\"fa-solid fa-filter\"></i></button>
        <button type=\"button\" id=\"button-rating\" data-bs-toggle=\"tooltip\" title=\"{{ button_rating }}\" class=\"btn btn-light\"><i class=\"fa-solid fa-sync\"></i></button>
        <div class=\"btn-group\">
          <button type=\"button\" class=\"btn btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\"><i class=\"fa-solid fa-list-check\"></i> {{ button_action }} <i class=\"fa-solid fa-caret-down fa-fw\"></i></button>
          <ul class=\"dropdown-menu\">
            <li><button type=\"submit\" form=\"form-comment\" formaction=\"{{ approve }}\" class=\"dropdown-item\"><i class=\"fa-solid fa-check text-success\"></i> {{ button_approve }}</button></li>
            <li><button type=\"submit\" form=\"form-comment\" formaction=\"{{ spam }}\" class=\"dropdown-item\"><i class=\"fa-solid fa-ban text-danger\"></i> {{ button_spam }}</button></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><button type=\"submit\" form=\"form-comment\" formaction=\"{{ delete }}\" onclick=\"return confirm('{{ text_confirm }}');\" class=\"dropdown-item\"><i class=\"fa-regular fa-trash-can text-danger\"></i> {{ text_delete }}</button></li>
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
      <div id=\"filter-comment\" class=\"col-lg-3 col-md-12 order-lg-last d-none d-lg-block mb-3\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa fa-filter\"></i> {{ text_filter }}</div>
          <div class=\"card-body\">
            <form id=\"form-filter\">
              <div class=\"mb-3\">
                <label for=\"input-keyword\" class=\"form-label\">{{ entry_keyword }}</label>
                <input type=\"text\" name=\"filter_keyword\" value=\"\" placeholder=\"{{ entry_keyword }}\" id=\"input-keyword\" class=\"form-control\"/>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-article\" class=\"form-label\">{{ entry_article }}</label>
                <input type=\"text\" name=\"filter_article\" value=\"\" placeholder=\"{{ entry_article }}\" id=\"input-article\" class=\"form-control\"/>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-customer\" class=\"form-label\">{{ entry_customer }}</label>
                <input type=\"text\" name=\"filter_customer\" value=\"\" placeholder=\"{{ entry_customer }}\" id=\"input-customer\" class=\"form-control\"/>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-status\" class=\"form-label\">{{ entry_status }}</label>
                <select name=\"filter_status\" id=\"input-status\" class=\"form-control\"/>
                  <option value=\"\"></option>
                  <option value=\"0\">{{ text_disabled }}</option>
                  <option value=\"1\">{{ text_enabled }}</option>
                </select>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-date-from\" class=\"form-label\">{{ entry_date_from }}</label>
                <input type=\"date\" name=\"filter_date_from\" value=\"{{ filter_date_from }}\" placeholder=\"{{ entry_date_from }}\" id=\"input-date-from\" class=\"form-control\"/>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-date-to\" class=\"form-label\">{{ entry_date_to }}</label>
                <input type=\"date\" name=\"filter_date_to\" value=\"{{ filter_date_to }}\" placeholder=\"{{ entry_date_to }}\" id=\"input-date-to\" class=\"form-control\"/>
              </div>
              <div class=\"text-end\">
                <button type=\"submit\" id=\"button-filter\" class=\"btn btn-light\"><i class=\"fa fa-filter\"></i> {{ button_filter }}</button>
                <button type=\"reset\" data-bs-toggle=\"tooltip\" title=\"{{ button_reset }}\" class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-filter-circle-xmark\"></i></button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class=\"col-lg-9 col-md-12\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa fa-list\"></i> {{ text_list }}</div>
          <div class=\"card-body\">
            <div id=\"list\">{{ list }}</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\" src=\"view/javascript/comment.js\"></script>
{{ footer }}
", "admin/view/template/cms/comment.twig", "/var/www/opencart/admin/view/template/cms/comment.twig");
    }
}
