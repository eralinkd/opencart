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

/* admin/view/template/common/dashboard.twig */
class __TwigTemplate_606347ecb669c88e12d9fa207eaf279d extends Template
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
      <h1>";
        // line 5
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 8
            yield "          <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 8);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 8);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        yield "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"row\">
      <div class=\"col-12\">
        <div class=\"card\" style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border: none; color: white;\">
          <div class=\"card-body\" style=\"padding: 40px;\">
            <h5 class=\"card-title\" style=\"color: white; font-size: 24px; margin-bottom: 16px;\">Welcome to SkyFix Admin Panel</h5>
            <p class=\"card-text\" style=\"color: rgba(255, 255, 255, 0.9); font-size: 16px; margin-bottom: 24px;\">Use the left menu to manage categories and products for your drone parts store.</p>
            <a href=\"";
        // line 20
        yield ($context["catalog_url"] ?? null);
        yield "\" class=\"btn btn-primary\" style=\"background: white; color: #667eea; font-weight: 600;\">Manage Catalog</a>
          </div>
        </div>
      </div>
    </div>
    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 26
            yield "      <div class=\"row mt-3\">
        ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["dashboard_1"]) {
                // line 28
                yield "          ";
                $context["class"] = Twig\Extension\CoreExtension::sprintf("col-lg-%s %s", CoreExtension::getAttribute($this->env, $this->source, $context["dashboard_1"], "width", [], "any", false, false, false, 28), "col-md-3 col-sm-6");
                // line 29
                yield "          ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["row"]);
                foreach ($context['_seq'] as $context["_key"] => $context["dashboard_2"]) {
                    // line 30
                    yield "            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["dashboard_2"], "width", [], "any", false, false, false, 30) > 3)) {
                        // line 31
                        yield "              ";
                        $context["class"] = Twig\Extension\CoreExtension::sprintf("col-lg-%s %s", CoreExtension::getAttribute($this->env, $this->source, $context["dashboard_1"], "width", [], "any", false, false, false, 31), "col-md-12 col-sm-12");
                        // line 32
                        yield "            ";
                    }
                    // line 33
                    yield "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['dashboard_2'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                yield "          <div class=\"";
                yield ($context["class"] ?? null);
                yield " mb-3\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["dashboard_1"], "output", [], "any", false, false, false, 34);
                yield "</div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['dashboard_1'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            yield "      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "  </div>
</div>
";
        // line 40
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/view/template/common/dashboard.twig";
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
        return array (  146 => 40,  142 => 38,  135 => 36,  124 => 34,  118 => 33,  115 => 32,  112 => 31,  109 => 30,  104 => 29,  101 => 28,  97 => 27,  94 => 26,  90 => 25,  82 => 20,  70 => 10,  59 => 8,  55 => 7,  50 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
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
      <div class=\"col-12\">
        <div class=\"card\" style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border: none; color: white;\">
          <div class=\"card-body\" style=\"padding: 40px;\">
            <h5 class=\"card-title\" style=\"color: white; font-size: 24px; margin-bottom: 16px;\">Welcome to SkyFix Admin Panel</h5>
            <p class=\"card-text\" style=\"color: rgba(255, 255, 255, 0.9); font-size: 16px; margin-bottom: 24px;\">Use the left menu to manage categories and products for your drone parts store.</p>
            <a href=\"{{ catalog_url }}\" class=\"btn btn-primary\" style=\"background: white; color: #667eea; font-weight: 600;\">Manage Catalog</a>
          </div>
        </div>
      </div>
    </div>
    {% for row in rows %}
      <div class=\"row mt-3\">
        {% for dashboard_1 in row %}
          {% set class = 'col-lg-%s %s'|format(dashboard_1.width, 'col-md-3 col-sm-6') %}
          {% for dashboard_2 in row %}
            {% if dashboard_2.width > 3 %}
              {% set class = 'col-lg-%s %s'|format(dashboard_1.width, 'col-md-12 col-sm-12') %}
            {% endif %}
          {% endfor %}
          <div class=\"{{ class }} mb-3\">{{ dashboard_1.output }}</div>
        {% endfor %}
      </div>
    {% endfor %}
  </div>
</div>
{{ footer }}", "admin/view/template/common/dashboard.twig", "/var/www/opencart/admin/view/template/common/dashboard.twig");
    }
}
