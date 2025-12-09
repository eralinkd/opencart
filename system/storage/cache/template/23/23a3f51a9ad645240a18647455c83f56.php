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

/* catalog/view/template/common/components/ui/Input.twig */
class __TwigTemplate_5a57a8b37264343466b5ae7bb9d4b045 extends Template
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
        yield "<template id=\"ui-input-template\">
  <style>
    :host {
      display: block;
      width: 100%;
    }

    :host([hidden]) {
      display: none;
    }

    .ui-input {
      display: flex;
      flex-direction: column;
      gap: 4px;
      font-family: Manrope;
    }

    .ui-input__label {
      color: #6C757D;
      font-family: Manrope;
      font-size: 12px;
      font-style: normal;
      font-weight: 400;
      line-height: normal;
      letter-spacing: 0.048px;
    }

    :host([required]) .ui-input__label::after {
      content: ' *';
      color: #E53935;
    }

    .ui-input__field {
      display: flex;
      align-items: center;
      gap: 10px;
      padding: 12px;
      border-radius: 10px;
      border: 1px solid #CED4DA;
      background: #FFF;
      transition: border-color 0.2s ease, box-shadow 0.2s ease;
    }

    .ui-input__field:focus-within {
      border-color: #4075AB;
      box-shadow: 0 0 0 1px rgba(64, 117, 171, 0.15);
    }

    :host([error]) .ui-input__field {
      border-color: #E53935;
    }

    input {
      width: 100%;
      border: none;
      outline: none;
      background: transparent;
      color: #1F1F1F;
      font-size: 16px;
      letter-spacing: -0.176px;
    }

    input::placeholder {
      color: #ADB5BD;
      font-family: Manrope;
      font-size: 16px;
      font-style: normal;
      font-weight: 400;
      line-height: normal;
      letter-spacing: 0.08px;
    }

    :host([disabled]) .ui-input__field {
      background: #F3F3F3;
      cursor: not-allowed;
    }

    :host([disabled]) input {
      color: #9F9F9F;
      cursor: not-allowed;
    }

    .ui-input__helper {
      display: none;
      font-size: 12px;
      color: #6D6D6D;
      min-height: 16px;
    }

    :host([error]) .ui-input__helper {
      color: #E53935;
    }
  </style>

  <label class=\"ui-input\">
    <span class=\"ui-input__label\">
      <slot name=\"label\">Label</slot>
    </span>
    <div class=\"ui-input__field\">
      <slot name=\"prefix\"></slot>
      <input type=\"text\" />
      <slot name=\"suffix\"></slot>
    </div>
    <span class=\"ui-input__helper\">
      <slot name=\"helper\"></slot>
    </span>
  </label>
</template>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/common/components/ui/Input.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<template id=\"ui-input-template\">
  <style>
    :host {
      display: block;
      width: 100%;
    }

    :host([hidden]) {
      display: none;
    }

    .ui-input {
      display: flex;
      flex-direction: column;
      gap: 4px;
      font-family: Manrope;
    }

    .ui-input__label {
      color: #6C757D;
      font-family: Manrope;
      font-size: 12px;
      font-style: normal;
      font-weight: 400;
      line-height: normal;
      letter-spacing: 0.048px;
    }

    :host([required]) .ui-input__label::after {
      content: ' *';
      color: #E53935;
    }

    .ui-input__field {
      display: flex;
      align-items: center;
      gap: 10px;
      padding: 12px;
      border-radius: 10px;
      border: 1px solid #CED4DA;
      background: #FFF;
      transition: border-color 0.2s ease, box-shadow 0.2s ease;
    }

    .ui-input__field:focus-within {
      border-color: #4075AB;
      box-shadow: 0 0 0 1px rgba(64, 117, 171, 0.15);
    }

    :host([error]) .ui-input__field {
      border-color: #E53935;
    }

    input {
      width: 100%;
      border: none;
      outline: none;
      background: transparent;
      color: #1F1F1F;
      font-size: 16px;
      letter-spacing: -0.176px;
    }

    input::placeholder {
      color: #ADB5BD;
      font-family: Manrope;
      font-size: 16px;
      font-style: normal;
      font-weight: 400;
      line-height: normal;
      letter-spacing: 0.08px;
    }

    :host([disabled]) .ui-input__field {
      background: #F3F3F3;
      cursor: not-allowed;
    }

    :host([disabled]) input {
      color: #9F9F9F;
      cursor: not-allowed;
    }

    .ui-input__helper {
      display: none;
      font-size: 12px;
      color: #6D6D6D;
      min-height: 16px;
    }

    :host([error]) .ui-input__helper {
      color: #E53935;
    }
  </style>

  <label class=\"ui-input\">
    <span class=\"ui-input__label\">
      <slot name=\"label\">Label</slot>
    </span>
    <div class=\"ui-input__field\">
      <slot name=\"prefix\"></slot>
      <input type=\"text\" />
      <slot name=\"suffix\"></slot>
    </div>
    <span class=\"ui-input__helper\">
      <slot name=\"helper\"></slot>
    </span>
  </label>
</template>", "catalog/view/template/common/components/ui/Input.twig", "/var/www/opencart/catalog/view/template/common/components/ui/Input.twig");
    }
}
