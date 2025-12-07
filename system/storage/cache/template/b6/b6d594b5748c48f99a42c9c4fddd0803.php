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

/* admin/view/template/catalog/category_list.twig */
class __TwigTemplate_2c33aaa373e3b297df0bbac5579d15bb extends Template
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
        yield "<form id=\"form-category\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
        yield ($context["action"] ?? null);
        yield "\" data-oc-target=\"#category\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <th class=\"text-center\" style=\"width: 1px;\" title=\"Select all categories\">
            <input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/>
          </th>
          <th class=\"text-center col-1\" title=\"Category image\">
            <span class=\"d-block mb-1\">";
        // line 10
        yield ($context["column_image"] ?? null);
        yield "</span>
            <small class=\"text-muted d-block\" style=\"font-size: 11px; font-weight: normal;\">Image</small>
          </th>
          <th title=\"Category name\">
            <span class=\"d-block mb-1\"><a href=\"";
        // line 14
        yield ($context["sort_name"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "name")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_name"] ?? null);
        yield "</a></span>
            <small class=\"text-muted d-block\" style=\"font-size: 11px; font-weight: normal;\">Click to sort by name</small>
          </th>
          <th class=\"text-end\" title=\"Sort order\">
            <span class=\"d-block mb-1\"><a href=\"";
        // line 18
        yield ($context["sort_sort_order"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "sort_order")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_sort_order"] ?? null);
        yield "</a></span>
            <small class=\"text-muted d-block\" style=\"font-size: 11px; font-weight: normal;\">Display order</small>
          </th>
          <th class=\"text-end col-1\" title=\"Actions\">
            <span class=\"d-block mb-1\">";
        // line 22
        yield ($context["column_action"] ?? null);
        yield "</span>
            <small class=\"text-muted d-block\" style=\"font-size: 11px; font-weight: normal;\">Edit category</small>
          </th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 28
        if (($context["categories"] ?? null)) {
            // line 29
            yield "          ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 30
                yield "            <tr";
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["category"], "status", [], "any", false, false, false, 30)) {
                    yield " class=\"table-active opacity-50\"";
                }
                yield ">
              <td class=\"text-center\">
                <input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 32
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 32);
                yield "\" class=\"form-check-input\" title=\"Select this category\"/>
              </td>
              <td class=\"text-center\">
                ";
                // line 35
                if (CoreExtension::getAttribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 35)) {
                    // line 36
                    yield "                  <img src=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 36);
                    yield "\" alt=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 36);
                    yield "\" class=\"img-thumbnail\" style=\"max-width: 60px; max-height: 60px;\" title=\"Category image: ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 36);
                    yield "\"/>
                ";
                } else {
                    // line 38
                    yield "                  <span class=\"text-muted\" style=\"font-size: 12px;\">No image</span>
                ";
                }
                // line 40
                yield "              </td>
              <td>
                <strong>";
                // line 42
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 42);
                yield "</strong>
                ";
                // line 43
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["category"], "status", [], "any", false, false, false, 43)) {
                    // line 44
                    yield "                  <span class=\"badge bg-danger ms-2\" title=\"This category is disabled\">Disabled</span>
                ";
                } else {
                    // line 46
                    yield "                  <span class=\"badge bg-success ms-2\" title=\"This category is enabled\">Enabled</span>
                ";
                }
                // line 48
                yield "              </td>
              <td class=\"text-end\">
                <span class=\"badge bg-secondary\" title=\"Display order: ";
                // line 50
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "sort_order", [], "any", false, false, false, 50);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "sort_order", [], "any", false, false, false, 50);
                yield "</span>
              </td>
              <td class=\"text-end\">
                <a href=\"";
                // line 53
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "edit", [], "any", false, false, false, 53);
                yield "\" data-bs-toggle=\"tooltip\" title=\"Edit category: ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 53);
                yield "\" class=\"btn btn-primary btn-sm\">
                  <i class=\"fa-solid fa-pencil\"></i> Edit
                </a>
              </td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            yield "        ";
        } else {
            // line 60
            yield "          <tr>
            <td class=\"text-center\" colspan=\"5\">";
            // line 61
            yield ($context["text_no_results"] ?? null);
            yield "</td>
          </tr>
        ";
        }
        // line 64
        yield "      </tbody>
    </table>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-6 text-start\">";
        // line 68
        yield ($context["pagination"] ?? null);
        yield "</div>
    <div class=\"col-sm-6 text-end\">";
        // line 69
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
        return "admin/view/template/catalog/category_list.twig";
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
        return array (  204 => 69,  200 => 68,  194 => 64,  188 => 61,  185 => 60,  182 => 59,  168 => 53,  160 => 50,  156 => 48,  152 => 46,  148 => 44,  146 => 43,  142 => 42,  138 => 40,  134 => 38,  124 => 36,  122 => 35,  116 => 32,  108 => 30,  103 => 29,  101 => 28,  92 => 22,  77 => 18,  62 => 14,  55 => 10,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form id=\"form-category\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"{{ action }}\" data-oc-target=\"#category\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <th class=\"text-center\" style=\"width: 1px;\" title=\"Select all categories\">
            <input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/>
          </th>
          <th class=\"text-center col-1\" title=\"Category image\">
            <span class=\"d-block mb-1\">{{ column_image }}</span>
            <small class=\"text-muted d-block\" style=\"font-size: 11px; font-weight: normal;\">Image</small>
          </th>
          <th title=\"Category name\">
            <span class=\"d-block mb-1\"><a href=\"{{ sort_name }}\"{% if sort == 'name' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_name }}</a></span>
            <small class=\"text-muted d-block\" style=\"font-size: 11px; font-weight: normal;\">Click to sort by name</small>
          </th>
          <th class=\"text-end\" title=\"Sort order\">
            <span class=\"d-block mb-1\"><a href=\"{{ sort_sort_order }}\"{% if sort == 'sort_order' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_sort_order }}</a></span>
            <small class=\"text-muted d-block\" style=\"font-size: 11px; font-weight: normal;\">Display order</small>
          </th>
          <th class=\"text-end col-1\" title=\"Actions\">
            <span class=\"d-block mb-1\">{{ column_action }}</span>
            <small class=\"text-muted d-block\" style=\"font-size: 11px; font-weight: normal;\">Edit category</small>
          </th>
        </tr>
      </thead>
      <tbody>
        {% if categories %}
          {% for category in categories %}
            <tr{% if not category.status %} class=\"table-active opacity-50\"{% endif %}>
              <td class=\"text-center\">
                <input type=\"checkbox\" name=\"selected[]\" value=\"{{ category.category_id }}\" class=\"form-check-input\" title=\"Select this category\"/>
              </td>
              <td class=\"text-center\">
                {% if category.image %}
                  <img src=\"{{ category.image }}\" alt=\"{{ category.name }}\" class=\"img-thumbnail\" style=\"max-width: 60px; max-height: 60px;\" title=\"Category image: {{ category.name }}\"/>
                {% else %}
                  <span class=\"text-muted\" style=\"font-size: 12px;\">No image</span>
                {% endif %}
              </td>
              <td>
                <strong>{{ category.name }}</strong>
                {% if not category.status %}
                  <span class=\"badge bg-danger ms-2\" title=\"This category is disabled\">Disabled</span>
                {% else %}
                  <span class=\"badge bg-success ms-2\" title=\"This category is enabled\">Enabled</span>
                {% endif %}
              </td>
              <td class=\"text-end\">
                <span class=\"badge bg-secondary\" title=\"Display order: {{ category.sort_order }}\">{{ category.sort_order }}</span>
              </td>
              <td class=\"text-end\">
                <a href=\"{{ category.edit }}\" data-bs-toggle=\"tooltip\" title=\"Edit category: {{ category.name }}\" class=\"btn btn-primary btn-sm\">
                  <i class=\"fa-solid fa-pencil\"></i> Edit
                </a>
              </td>
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
    <div class=\"col-sm-6 text-start\">{{ pagination }}</div>
    <div class=\"col-sm-6 text-end\">{{ results }}</div>
  </div>
</form>

", "admin/view/template/catalog/category_list.twig", "D:\\xampp\\htdocs\\opencart\\admin\\view\\template\\catalog\\category_list.twig");
    }
}
