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

/* admin/view/template/marketplace/installer_extension.twig */
class __TwigTemplate_c5bfb3d6166fd741c2320fab2a0efe13 extends Template
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
        yield "<div class=\"table-responsive\">
  <table class=\"table table-bordered table-hover\">
    <thead>
      <tr>
        <th>";
        // line 5
        yield ($context["column_name"] ?? null);
        yield "</th>
        <th>";
        // line 6
        yield ($context["column_version"] ?? null);
        yield "</th>
        <th class=\"text-center\">";
        // line 7
        yield ($context["column_status"] ?? null);
        yield "</th>
        <th>";
        // line 8
        yield ($context["column_date_added"] ?? null);
        yield "</th>
        <th class=\"text-end\" style=\"min-width: 105px;\">";
        // line 9
        yield ($context["column_action"] ?? null);
        yield "</th>
      </tr>
    </thead>
    <tbody>
      ";
        // line 13
        if (($context["extensions"] ?? null)) {
            // line 14
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["extensions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                // line 15
                yield "          <tr";
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "status", [], "any", false, false, false, 15)) {
                    yield " class=\"table-disabled\"";
                }
                yield ">
            <td>
              ";
                // line 17
                if (CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "link", [], "any", false, false, false, 17)) {
                    // line 18
                    yield "                <a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "link", [], "any", false, false, false, 18);
                    yield "\" target=\"_blank\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 18);
                    yield "</a>
              ";
                } else {
                    // line 20
                    yield "                ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 20);
                    yield "
              ";
                }
                // line 21
                yield "</td>
            <td>";
                // line 22
                yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "version", [], "any", false, false, false, 22);
                yield "</td>
            <td class=\"text-center\">";
                // line 23
                if (CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "status", [], "any", false, false, false, 23)) {
                    // line 24
                    yield "                <span class=\"badge bg-success\">";
                    yield ($context["text_enabled"] ?? null);
                    yield "</span>
              ";
                } else {
                    // line 26
                    yield "                <span class=\"badge bg-danger\">";
                    yield ($context["text_disabled"] ?? null);
                    yield "</span>
              ";
                }
                // line 27
                yield "</td>
            <td>";
                // line 28
                yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "date_added", [], "any", false, false, false, 28);
                yield "</td>
            <td class=\"text-end text-nowrap\">";
                // line 29
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "status", [], "any", false, false, false, 29)) {
                    // line 30
                    yield "                <a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "install", [], "any", false, false, false, 30);
                    yield "\" data-bs-toggle=\"tooltip\" title=\"";
                    yield ($context["button_install"] ?? null);
                    yield "\" class=\"btn btn-success\"><i class=\"fa-solid fa-plus-circle\"></i></a>
                <a href=\"";
                    // line 31
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "delete", [], "any", false, false, false, 31);
                    yield "\" data-bs-toggle=\"tooltip\" title=\"";
                    yield ($context["button_delete"] ?? null);
                    yield "\" class=\"btn btn-danger\"><i class=\"fa-regular fa-trash-can\"></i></a>
              ";
                } else {
                    // line 33
                    yield "                <a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "uninstall", [], "any", false, false, false, 33);
                    yield "\" data-bs-toggle=\"tooltip\" title=\"";
                    yield ($context["button_uninstall"] ?? null);
                    yield "\" class=\"btn btn-warning\"><i class=\"fa-solid fa-minus-circle\"></i></a>
                <button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
                    // line 34
                    yield ($context["button_delete"] ?? null);
                    yield "\" class=\"btn btn-danger\" disabled><i class=\"fa-regular fa-trash-can\"></i></button>
              ";
                }
                // line 36
                yield "              <button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#extension-install-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "extension_install_id", [], "any", false, false, false, 36);
                yield "\" class=\"btn btn-info\"><i class=\"fa-solid fa-info-circle\"></i></button></td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['extension'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            yield "      ";
        } else {
            // line 40
            yield "        <tr>
          <td class=\"text-center\" colspan=\"5\">";
            // line 41
            yield ($context["text_no_results"] ?? null);
            yield "</td>
        </tr>
      ";
        }
        // line 44
        yield "    </tbody>
  </table>
</div>
<div class=\"row\">
  <div class=\"col-sm-6 text-start\"><x-pagination href=\"";
        // line 48
        yield ($context["pagination"] ?? null);
        yield "\" target=\"#extension\" page=\"";
        yield ($context["page"] ?? null);
        yield "\" limit=\"";
        yield ($context["limit"] ?? null);
        yield "\" total=\"";
        yield ($context["total"] ?? null);
        yield "\"></x-pagination></div>
  <div class=\"col-sm-6 text-end\">";
        // line 49
        yield ($context["results"] ?? null);
        yield "</div>
</div>
";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 52
            yield "  <div id=\"extension-install-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "extension_install_id", [], "any", false, false, false, 52);
            yield "\" class=\"modal\">
    <div class=\"modal-dialog\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\"><i class=\"fa-solid fa-info-circle\"></i> ";
            // line 56
            yield ($context["text_info"] ?? null);
            yield "</h5>
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
        </div>
        <div class=\"modal-body\">
          <div class=\"mb-3\">
            <label class=\"form-label\">";
            // line 61
            yield ($context["entry_name"] ?? null);
            yield "</label> <input type=\"text\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 61);
            yield "\" class=\"form-control\" readonly/>
          </div>
          <div class=\"mb-3\">
            <label class=\"form-label\">";
            // line 64
            yield ($context["entry_description"] ?? null);
            yield "</label> <textarea rows=\"5\" class=\"form-control\" readonly>";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "description", [], "any", false, false, false, 64);
            yield "</textarea>
          </div>
          <div>
            <label class=\"form-label\">";
            // line 67
            yield ($context["entry_code"] ?? null);
            yield "</label> <input type=\"text\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 67);
            yield "\" class=\"form-control\" readonly/>
          </div>
        </div>
      </div>
    </div>
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['extension'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/view/template/marketplace/installer_extension.twig";
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
        return array (  237 => 67,  229 => 64,  221 => 61,  213 => 56,  205 => 52,  201 => 51,  196 => 49,  186 => 48,  180 => 44,  174 => 41,  171 => 40,  168 => 39,  158 => 36,  153 => 34,  146 => 33,  139 => 31,  132 => 30,  130 => 29,  126 => 28,  123 => 27,  117 => 26,  111 => 24,  109 => 23,  105 => 22,  102 => 21,  96 => 20,  88 => 18,  86 => 17,  78 => 15,  73 => 14,  71 => 13,  64 => 9,  60 => 8,  56 => 7,  52 => 6,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"table-responsive\">
  <table class=\"table table-bordered table-hover\">
    <thead>
      <tr>
        <th>{{ column_name }}</th>
        <th>{{ column_version }}</th>
        <th class=\"text-center\">{{ column_status }}</th>
        <th>{{ column_date_added }}</th>
        <th class=\"text-end\" style=\"min-width: 105px;\">{{ column_action }}</th>
      </tr>
    </thead>
    <tbody>
      {% if extensions %}
        {% for extension in extensions %}
          <tr{% if not extension.status %} class=\"table-disabled\"{% endif %}>
            <td>
              {% if extension.link %}
                <a href=\"{{ extension.link }}\" target=\"_blank\">{{ extension.name }}</a>
              {% else %}
                {{ extension.name }}
              {% endif %}</td>
            <td>{{ extension.version }}</td>
            <td class=\"text-center\">{% if extension.status %}
                <span class=\"badge bg-success\">{{ text_enabled }}</span>
              {% else %}
                <span class=\"badge bg-danger\">{{ text_disabled }}</span>
              {% endif %}</td>
            <td>{{ extension.date_added }}</td>
            <td class=\"text-end text-nowrap\">{% if not extension.status %}
                <a href=\"{{ extension.install }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_install }}\" class=\"btn btn-success\"><i class=\"fa-solid fa-plus-circle\"></i></a>
                <a href=\"{{ extension.delete }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_delete }}\" class=\"btn btn-danger\"><i class=\"fa-regular fa-trash-can\"></i></a>
              {% else %}
                <a href=\"{{ extension.uninstall }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_uninstall }}\" class=\"btn btn-warning\"><i class=\"fa-solid fa-minus-circle\"></i></a>
                <button type=\"button\" data-bs-toggle=\"tooltip\" title=\"{{ button_delete }}\" class=\"btn btn-danger\" disabled><i class=\"fa-regular fa-trash-can\"></i></button>
              {% endif %}
              <button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#extension-install-{{ extension.extension_install_id }}\" class=\"btn btn-info\"><i class=\"fa-solid fa-info-circle\"></i></button></td>
          </tr>
        {% endfor %}
      {% else %}
        <tr>
          <td class=\"text-center\" colspan=\"5\">{{ text_no_results }}</td>
        </tr>
      {% endif %}
    </tbody>
  </table>
</div>
<div class=\"row\">
  <div class=\"col-sm-6 text-start\"><x-pagination href=\"{{ pagination }}\" target=\"#extension\" page=\"{{ page }}\" limit=\"{{ limit }}\" total=\"{{ total }}\"></x-pagination></div>
  <div class=\"col-sm-6 text-end\">{{ results }}</div>
</div>
{% for extension in extensions %}
  <div id=\"extension-install-{{ extension.extension_install_id }}\" class=\"modal\">
    <div class=\"modal-dialog\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\"><i class=\"fa-solid fa-info-circle\"></i> {{ text_info }}</h5>
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
        </div>
        <div class=\"modal-body\">
          <div class=\"mb-3\">
            <label class=\"form-label\">{{ entry_name }}</label> <input type=\"text\" value=\"{{ extension.name }}\" class=\"form-control\" readonly/>
          </div>
          <div class=\"mb-3\">
            <label class=\"form-label\">{{ entry_description }}</label> <textarea rows=\"5\" class=\"form-control\" readonly>{{ extension.description }}</textarea>
          </div>
          <div>
            <label class=\"form-label\">{{ entry_code }}</label> <input type=\"text\" value=\"{{ extension.code }}\" class=\"form-control\" readonly/>
          </div>
        </div>
      </div>
    </div>
  </div>
{% endfor %}
", "admin/view/template/marketplace/installer_extension.twig", "/var/www/opencart/admin/view/template/marketplace/installer_extension.twig");
    }
}
