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

/* catalog/view/template/common/components/ui/Button.twig */
class __TwigTemplate_ae5425685929f69087b0172e9874d56b extends Template
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
        yield "<template id=\"ui-button-template\">
\t<style>
\t\t:host {
\t\t\tdisplay: inline-block;
\t\t\twidth: fit-content;
\t\t}

\t\t:host([is-white]) .ui-button {
\t\t\tbackground: #FFF;
\t\t\tcolor: #1F1F1F;
\t\t}

\t\t:host([is-white]) .ui-button:hover {
\t\t\tbackground: #d8d8d8;
\t\t}

\t\t.ui-button {
\t\t\twidth: 100%;
\t\t\tdisplay: flex;
\t\t\talign-items: center;
\t\t\tjustify-content: center;
\t\t\tpadding: 16px 32px;
\t\t\tborder-radius: 10px;
\t\t\tbackground: #4075AB;
\t\t\tborder: none;
\t\t\tcursor: pointer;
\t\t\tcolor: white;
\t\t\tcolor: #FFF;
\t\t\tfont-family: \"Inter\", sans-serif;
\t\t\tfont-size: 20px;
\t\t\tfont-style: normal;
\t\t\tfont-weight: 500;
\t\t\tline-height: 24px;
\t\t\t/* 120% */
\t\t\tletter-spacing: -0.22px;
\t\t\tdisplay: flex;
\t\t\talign-items: center;
\t\t\tgap: 10px;
\t\t\ttransition: all 0.2s ease-in-out;
\t\t}

\t\t.ui-button.is-white {
\t\t\tbackground: #FFF;
\t\t\tcolor: #4075AB;
\t\t}

\t\t.ui-button.is-white:hover {
\t\t\tbackground: #F5F5F5;
\t\t}

\t\t.ui-button:hover {
\t\t\tbackground: #2A5E91;
\t\t}

\t\t.ui-button-icon-wrapper {
\t\t\tposition: relative;
\t\t\tflex-shrink: 0;
\t\t}
\t</style>

\t<button class=\"ui-button\" type=\"button\">
\t\t<slot name=\"text\">Button</slot>
\t\t<div class=\"ui-button-icon-wrapper\">
\t\t\t<slot name=\"icon\"></slot>
\t\t</div>

\t</button>
</template>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/common/components/ui/Button.twig";
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
        return new Source("<template id=\"ui-button-template\">
\t<style>
\t\t:host {
\t\t\tdisplay: inline-block;
\t\t\twidth: fit-content;
\t\t}

\t\t:host([is-white]) .ui-button {
\t\t\tbackground: #FFF;
\t\t\tcolor: #1F1F1F;
\t\t}

\t\t:host([is-white]) .ui-button:hover {
\t\t\tbackground: #d8d8d8;
\t\t}

\t\t.ui-button {
\t\t\twidth: 100%;
\t\t\tdisplay: flex;
\t\t\talign-items: center;
\t\t\tjustify-content: center;
\t\t\tpadding: 16px 32px;
\t\t\tborder-radius: 10px;
\t\t\tbackground: #4075AB;
\t\t\tborder: none;
\t\t\tcursor: pointer;
\t\t\tcolor: white;
\t\t\tcolor: #FFF;
\t\t\tfont-family: \"Inter\", sans-serif;
\t\t\tfont-size: 20px;
\t\t\tfont-style: normal;
\t\t\tfont-weight: 500;
\t\t\tline-height: 24px;
\t\t\t/* 120% */
\t\t\tletter-spacing: -0.22px;
\t\t\tdisplay: flex;
\t\t\talign-items: center;
\t\t\tgap: 10px;
\t\t\ttransition: all 0.2s ease-in-out;
\t\t}

\t\t.ui-button.is-white {
\t\t\tbackground: #FFF;
\t\t\tcolor: #4075AB;
\t\t}

\t\t.ui-button.is-white:hover {
\t\t\tbackground: #F5F5F5;
\t\t}

\t\t.ui-button:hover {
\t\t\tbackground: #2A5E91;
\t\t}

\t\t.ui-button-icon-wrapper {
\t\t\tposition: relative;
\t\t\tflex-shrink: 0;
\t\t}
\t</style>

\t<button class=\"ui-button\" type=\"button\">
\t\t<slot name=\"text\">Button</slot>
\t\t<div class=\"ui-button-icon-wrapper\">
\t\t\t<slot name=\"icon\"></slot>
\t\t</div>

\t</button>
</template>", "catalog/view/template/common/components/ui/Button.twig", "D:\\xampp\\htdocs\\opencart\\catalog\\view\\template\\common\\components\\ui\\Button.twig");
    }
}
