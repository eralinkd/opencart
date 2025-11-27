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

/* catalog/view/template/common/components.twig */
class __TwigTemplate_ab20010c47bada1fd191e38aacdd98fd extends Template
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
        // line 8
        yield "
";
        // line 33
        yield "
";
        yield from [];
    }

    // line 10
    public function macro_button($text = null, $href = null, $type = "primary", $icon = null, $tooltip = null, $onclick = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "text" => $text,
            "href" => $href,
            "type" => $type,
            "icon" => $icon,
            "tooltip" => $tooltip,
            "onclick" => $onclick,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 11
            yield "  <span class=\"oc-button-wrapper\">
    ";
            // line 12
            if (($context["href"] ?? null)) {
                // line 13
                yield "      <a href=\"";
                yield ($context["href"] ?? null);
                yield "\" 
         class=\"oc-button oc-button-";
                // line 14
                yield ($context["type"] ?? null);
                yield "\"
         ";
                // line 15
                if (($context["tooltip"] ?? null)) {
                    yield "title=\"";
                    yield ($context["tooltip"] ?? null);
                    yield "\"";
                }
                // line 16
                yield "         ";
                if (($context["onclick"] ?? null)) {
                    yield "onclick=\"";
                    yield ($context["onclick"] ?? null);
                    yield "\"";
                }
                yield ">
        ";
                // line 17
                if (($context["icon"] ?? null)) {
                    yield "<i class=\"fa-solid fa-";
                    yield ($context["icon"] ?? null);
                    yield "\"></i>";
                }
                // line 18
                yield "        ";
                if ((($context["icon"] ?? null) && ($context["text"] ?? null))) {
                    yield " ";
                }
                // line 19
                yield "        ";
                yield ($context["text"] ?? null);
                yield "
      </a>
    ";
            } else {
                // line 22
                yield "      <button type=\"button\"
              class=\"oc-button oc-button-";
                // line 23
                yield ($context["type"] ?? null);
                yield "\"
              ";
                // line 24
                if (($context["tooltip"] ?? null)) {
                    yield "title=\"";
                    yield ($context["tooltip"] ?? null);
                    yield "\"";
                }
                // line 25
                yield "              ";
                if (($context["onclick"] ?? null)) {
                    yield "onclick=\"";
                    yield ($context["onclick"] ?? null);
                    yield "\"";
                }
                yield ">
        ";
                // line 26
                if (($context["icon"] ?? null)) {
                    yield "<i class=\"fa-solid fa-";
                    yield ($context["icon"] ?? null);
                    yield "\"></i>";
                }
                // line 27
                yield "        ";
                if ((($context["icon"] ?? null) && ($context["text"] ?? null))) {
                    yield " ";
                }
                // line 28
                yield "        ";
                yield ($context["text"] ?? null);
                yield "
      </button>
    ";
            }
            // line 31
            yield "  </span>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/common/components.twig";
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
        return array (  155 => 31,  148 => 28,  143 => 27,  137 => 26,  128 => 25,  122 => 24,  118 => 23,  115 => 22,  108 => 19,  103 => 18,  97 => 17,  88 => 16,  82 => 15,  78 => 14,  73 => 13,  71 => 12,  68 => 11,  51 => 10,  45 => 33,  42 => 8,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
  Компоненты для каталога
  
  Использование:
  {% import 'common/components.twig' as components %}
  {{ components.button('Кнопка', '#', 'primary') }}
#}

{# Компонент кнопки #}
{% macro button(text, href = null, type = 'primary', icon = null, tooltip = null, onclick = null) %}
  <span class=\"oc-button-wrapper\">
    {% if href %}
      <a href=\"{{ href }}\" 
         class=\"oc-button oc-button-{{ type }}\"
         {% if tooltip %}title=\"{{ tooltip }}\"{% endif %}
         {% if onclick %}onclick=\"{{ onclick }}\"{% endif %}>
        {% if icon %}<i class=\"fa-solid fa-{{ icon }}\"></i>{% endif %}
        {% if icon and text %} {% endif %}
        {{ text }}
      </a>
    {% else %}
      <button type=\"button\"
              class=\"oc-button oc-button-{{ type }}\"
              {% if tooltip %}title=\"{{ tooltip }}\"{% endif %}
              {% if onclick %}onclick=\"{{ onclick }}\"{% endif %}>
        {% if icon %}<i class=\"fa-solid fa-{{ icon }}\"></i>{% endif %}
        {% if icon and text %} {% endif %}
        {{ text }}
      </button>
    {% endif %}
  </span>
{% endmacro %}

", "catalog/view/template/common/components.twig", "D:\\xampp\\htdocs\\opencart\\catalog\\view\\template\\common\\components.twig");
    }
}
