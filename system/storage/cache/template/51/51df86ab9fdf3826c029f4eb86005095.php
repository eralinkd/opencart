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

/* catalog/view/template/common/button_secondary.twig */
class __TwigTemplate_0be0bbff957c632227cb6f43a510058a extends Template
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
        yield "<template id=\"button-secondary-template\">
\t<style>
\t\t:host {
\t\t\tdisplay: inline-block;
\t\t\twidth: 100%;
\t\t}

\t\t.button-secondary {
\t\t\twidth: 100%;
\t\t\tpadding: 16px 32px;
\t\t\tborder-radius: 10px;
\t\t\tbackground: #4075AB;
\t\t\tborder: none;
\t\t\tcursor: pointer;
\t\t\tcolor: white;
\t\t\tcolor: #FFF;
\t\t\tfont-family: \"Inter\", sans-serif;
\t\t\tfont-size: 18px;
\t\t\tfont-style: normal;
\t\t\tfont-weight: 600;
\t\t\tline-height: 20px;
\t\t\tdisplay: flex;
\t\t\talign-items: center;
\t\t\tjustify-content: center;
\t\t\tgap: 10px;
\t\t\ttransition: all 0.2s ease-in-out;
\t\t}

\t\t.button-secondary:hover {
\t\t\tbackground: #2A5E91;
\t\t}
\t</style>

\t<button class=\"button-secondary\" type=\"button\">
\t\t<slot name=\"text\">Button</slot>
\t</button>
</template>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/common/button_secondary.twig";
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
        return new Source("<template id=\"button-secondary-template\">
\t<style>
\t\t:host {
\t\t\tdisplay: inline-block;
\t\t\twidth: 100%;
\t\t}

\t\t.button-secondary {
\t\t\twidth: 100%;
\t\t\tpadding: 16px 32px;
\t\t\tborder-radius: 10px;
\t\t\tbackground: #4075AB;
\t\t\tborder: none;
\t\t\tcursor: pointer;
\t\t\tcolor: white;
\t\t\tcolor: #FFF;
\t\t\tfont-family: \"Inter\", sans-serif;
\t\t\tfont-size: 18px;
\t\t\tfont-style: normal;
\t\t\tfont-weight: 600;
\t\t\tline-height: 20px;
\t\t\tdisplay: flex;
\t\t\talign-items: center;
\t\t\tjustify-content: center;
\t\t\tgap: 10px;
\t\t\ttransition: all 0.2s ease-in-out;
\t\t}

\t\t.button-secondary:hover {
\t\t\tbackground: #2A5E91;
\t\t}
\t</style>

\t<button class=\"button-secondary\" type=\"button\">
\t\t<slot name=\"text\">Button</slot>
\t</button>
</template>", "catalog/view/template/common/button_secondary.twig", "D:\\xampp\\htdocs\\opencart\\catalog\\view\\template\\common\\button_secondary.twig");
    }
}
