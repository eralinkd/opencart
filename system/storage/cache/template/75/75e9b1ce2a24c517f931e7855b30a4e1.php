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

/* catalog/view/template/product/review.twig */
class __TwigTemplate_56a34ce7ee0b3db88e7facf0f0fa1dea extends Template
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
        yield "<form id=\"form-review\">
  <div id=\"review\">";
        // line 2
        yield ($context["list"] ?? null);
        yield "</div>
  <h2>";
        // line 3
        yield ($context["text_write"] ?? null);
        yield "</h2>
  ";
        // line 4
        if (($context["review_guest"] ?? null)) {
            // line 5
            yield "    <div class=\"mb-3\">
      <label for=\"input-author\" class=\"form-label\">";
            // line 6
            yield ($context["entry_author"] ?? null);
            yield "</label>
      <input type=\"text\" name=\"author\" value=\"";
            // line 7
            yield ($context["customer"] ?? null);
            yield "\" id=\"input-author\" class=\"form-control\" required/>
      <div id=\"error-author\" class=\"invalid-feedback\"></div>
    </div>
    <div class=\"mb-3\">
      <label for=\"input-text\" class=\"form-label\">";
            // line 11
            yield ($context["entry_review"] ?? null);
            yield "</label>
      <textarea name=\"text\" rows=\"5\" id=\"input-text\" class=\"form-control\" required></textarea>
      <div id=\"error-text\" class=\"invalid-feedback\"></div>
      <div class=\"invalid-feedback\">";
            // line 14
            yield ($context["text_note"] ?? null);
            yield "</div>
    </div>
    <div class=\"row mb-3\">
      <label class=\"form-label required\">";
            // line 17
            yield ($context["entry_rating"] ?? null);
            yield "</label>
      <div id=\"input-rating\">
        ";
            // line 19
            yield ($context["entry_bad"] ?? null);
            yield "&nbsp;
        <input type=\"radio\" name=\"rating\" value=\"1\" class=\"form-check-input\"/>
        &nbsp;
        <input type=\"radio\" name=\"rating\" value=\"2\" class=\"form-check-input\"/>
        &nbsp;
        <input type=\"radio\" name=\"rating\" value=\"3\" class=\"form-check-input\"/>
        &nbsp;
        <input type=\"radio\" name=\"rating\" value=\"4\" class=\"form-check-input\"/>
        &nbsp;
        <input type=\"radio\" name=\"rating\" value=\"5\" class=\"form-check-input\"/>
        &nbsp;";
            // line 29
            yield ($context["entry_good"] ?? null);
            yield "
      </div>
      <div id=\"error-rating\" class=\"invalid-feedback\"></div>
    </div>
    ";
            // line 33
            yield ($context["captcha"] ?? null);
            yield "
    <div class=\"text-end\">
      <button type=\"submit\" id=\"button-review\" class=\"btn btn-primary\">";
            // line 35
            yield ($context["button_continue"] ?? null);
            yield "</button>
    </div>
  ";
        } else {
            // line 38
            yield "    ";
            yield ($context["text_login"] ?? null);
            yield "
  ";
        }
        // line 40
        yield "</form>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/product/review.twig";
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
        return array (  123 => 40,  117 => 38,  111 => 35,  106 => 33,  99 => 29,  86 => 19,  81 => 17,  75 => 14,  69 => 11,  62 => 7,  58 => 6,  55 => 5,  53 => 4,  49 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form id=\"form-review\">
  <div id=\"review\">{{ list }}</div>
  <h2>{{ text_write }}</h2>
  {% if review_guest %}
    <div class=\"mb-3\">
      <label for=\"input-author\" class=\"form-label\">{{ entry_author }}</label>
      <input type=\"text\" name=\"author\" value=\"{{ customer }}\" id=\"input-author\" class=\"form-control\" required/>
      <div id=\"error-author\" class=\"invalid-feedback\"></div>
    </div>
    <div class=\"mb-3\">
      <label for=\"input-text\" class=\"form-label\">{{ entry_review }}</label>
      <textarea name=\"text\" rows=\"5\" id=\"input-text\" class=\"form-control\" required></textarea>
      <div id=\"error-text\" class=\"invalid-feedback\"></div>
      <div class=\"invalid-feedback\">{{ text_note }}</div>
    </div>
    <div class=\"row mb-3\">
      <label class=\"form-label required\">{{ entry_rating }}</label>
      <div id=\"input-rating\">
        {{ entry_bad }}&nbsp;
        <input type=\"radio\" name=\"rating\" value=\"1\" class=\"form-check-input\"/>
        &nbsp;
        <input type=\"radio\" name=\"rating\" value=\"2\" class=\"form-check-input\"/>
        &nbsp;
        <input type=\"radio\" name=\"rating\" value=\"3\" class=\"form-check-input\"/>
        &nbsp;
        <input type=\"radio\" name=\"rating\" value=\"4\" class=\"form-check-input\"/>
        &nbsp;
        <input type=\"radio\" name=\"rating\" value=\"5\" class=\"form-check-input\"/>
        &nbsp;{{ entry_good }}
      </div>
      <div id=\"error-rating\" class=\"invalid-feedback\"></div>
    </div>
    {{ captcha }}
    <div class=\"text-end\">
      <button type=\"submit\" id=\"button-review\" class=\"btn btn-primary\">{{ button_continue }}</button>
    </div>
  {% else %}
    {{ text_login }}
  {% endif %}
</form>", "catalog/view/template/product/review.twig", "/var/www/opencart/catalog/view/template/product/review.twig");
    }
}
