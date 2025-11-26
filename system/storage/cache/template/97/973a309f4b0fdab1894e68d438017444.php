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

/* extension/opencart/admin/view/template/dashboard/chart_info.twig */
class __TwigTemplate_fd3dc68a1bca67709fe8506a2cf0fb59 extends Template
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
        yield "<div class=\"card mb-3\">
  <div class=\"card-header\">
    <div class=\"float-end\"><a href=\"#\" class=\"dropdown-toggle\" data-bs-toggle=\"dropdown\"><i class=\"fa-regular fa-calendar\"></i> <i class=\"fa-solid fa-caret-down\"></i></a>
      <div id=\"range\" class=\"dropdown-menu dropdown-menu-right\">
        <a href=\"day\" class=\"dropdown-item\">";
        // line 5
        yield ($context["text_day"] ?? null);
        yield "</a> <a href=\"week\" class=\"dropdown-item\">";
        yield ($context["text_week"] ?? null);
        yield "</a> <a href=\"month\" class=\"dropdown-item active\">";
        yield ($context["text_month"] ?? null);
        yield "</a> <a href=\"year\" class=\"dropdown-item\">";
        yield ($context["text_year"] ?? null);
        yield "</a>
      </div>
    </div>
    <i class=\"fa-solid fa-chart-bar\"></i> ";
        // line 8
        yield ($context["heading_title"] ?? null);
        yield "
  </div>
  <div class=\"card-body\">
    <div id=\"chart-sale\" style=\"width: 100%; height: 260px;\"></div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "extension/opencart/admin/view/template/dashboard/chart_info.twig";
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
        return array (  60 => 8,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"card mb-3\">
  <div class=\"card-header\">
    <div class=\"float-end\"><a href=\"#\" class=\"dropdown-toggle\" data-bs-toggle=\"dropdown\"><i class=\"fa-regular fa-calendar\"></i> <i class=\"fa-solid fa-caret-down\"></i></a>
      <div id=\"range\" class=\"dropdown-menu dropdown-menu-right\">
        <a href=\"day\" class=\"dropdown-item\">{{ text_day }}</a> <a href=\"week\" class=\"dropdown-item\">{{ text_week }}</a> <a href=\"month\" class=\"dropdown-item active\">{{ text_month }}</a> <a href=\"year\" class=\"dropdown-item\">{{ text_year }}</a>
      </div>
    </div>
    <i class=\"fa-solid fa-chart-bar\"></i> {{ heading_title }}
  </div>
  <div class=\"card-body\">
    <div id=\"chart-sale\" style=\"width: 100%; height: 260px;\"></div>
</div>
", "extension/opencart/admin/view/template/dashboard/chart_info.twig", "/var/www/opencart/extension/opencart/admin/view/template/dashboard/chart_info.twig");
    }
}
