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

/* catalog/view/template/common/button_component.twig */
class __TwigTemplate_e16948717a7d51c05ab8dfecb3493046 extends Template
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
        yield "<template id=\"custom-button-template\">
\t<style>:host
\t{
\t\tdisplay: inline-block;
\t\twidth: fit-content;
\t}
\t.ui-button {
\t\tpadding: 16px 32px;
\t\tborder-radius: 10px;
\t\tbackground: #4075AB;
\t\tborder: none;
\t\tcursor: pointer;
\t\tcolor: white;
\t\tcolor: #FFF;
\t\tfont-family: \"Inter\", sans-serif;
\t\tfont-size: 20px;
\t\tfont-style: normal;
\t\tfont-weight: 500;
\t\tline-height: 24px; /* 120% */
\t\tletter-spacing: -0.22px;
\t\tdisplay: flex;
\t\talign-items: center;
\t\tgap: 10px;
\t\ttransition: all 0.2s ease-in-out;
\t}

\t.ui-button:hover {
\t\tbackground: #2A5E91;
\t}

\t.ui-button-icon-wrapper {
\t\twidth: 14px;
\t\theight: 15px;
\t\tposition: relative;
\t}
</style>

<button class=\"ui-button\" type=\"button\">
\t<slot name=\"text\">Button</slot>
\t<div class=\"ui-button-icon-wrapper\">
\t\t<slot name=\"icon\"></slot>
\t</div>

</button></template>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/common/button_component.twig";
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
        return new Source("<template id=\"custom-button-template\">
\t<style>:host
\t{
\t\tdisplay: inline-block;
\t\twidth: fit-content;
\t}
\t.ui-button {
\t\tpadding: 16px 32px;
\t\tborder-radius: 10px;
\t\tbackground: #4075AB;
\t\tborder: none;
\t\tcursor: pointer;
\t\tcolor: white;
\t\tcolor: #FFF;
\t\tfont-family: \"Inter\", sans-serif;
\t\tfont-size: 20px;
\t\tfont-style: normal;
\t\tfont-weight: 500;
\t\tline-height: 24px; /* 120% */
\t\tletter-spacing: -0.22px;
\t\tdisplay: flex;
\t\talign-items: center;
\t\tgap: 10px;
\t\ttransition: all 0.2s ease-in-out;
\t}

\t.ui-button:hover {
\t\tbackground: #2A5E91;
\t}

\t.ui-button-icon-wrapper {
\t\twidth: 14px;
\t\theight: 15px;
\t\tposition: relative;
\t}
</style>

<button class=\"ui-button\" type=\"button\">
\t<slot name=\"text\">Button</slot>
\t<div class=\"ui-button-icon-wrapper\">
\t\t<slot name=\"icon\"></slot>
\t</div>

</button></template>
", "catalog/view/template/common/button_component.twig", "D:\\xampp\\htdocs\\opencart\\catalog\\view\\template\\common\\button_component.twig");
    }
}
