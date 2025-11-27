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

/* catalog/view/template/common/footer.twig */
class __TwigTemplate_a9f16eabb1eb76d8d2295fef732a8811 extends Template
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
        yield "</main>
<footer class=\"app-footer\">
\t<div class=\"container\">
\t\t<div class=\"left\">
\t\t\t<div class=\"logo\">
\t\t\t\t<a href=\"/\">
\t\t\t\t\t<img src=\"";
        // line 7
        yield ($context["server"] ?? null);
        yield "image/footer-logo.png\" alt=\"Logo\">
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"form\">
\t\t\t\t<p class=\"text-16 text-white\">
\t\t\t\t\tBe the first to know about new arrivals!
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"right\">
\t\t\t<ul class=\"nav text-18 text-white\">
\t\t\t\t<li><a href=\"#\">Catalog</a></li>
\t\t\t\t<li><a href=\"#\">Shipping & Payment</a></li>
\t\t\t\t<li><a href=\"#\">Batteries</a></li>
\t\t\t\t<li><a href=\"#\">Warranty & Returns</a></li>
\t\t\t\t<li><a href=\"#\">Controllers</a></li>
\t\t\t\t<li><a href=\"#\">Contacts</a></li>
\t\t\t\t<li><a href=\"#\">About Us</a></li>
\t\t\t\t<li><a href=\"#\">Privacy Policy</a></li>
\t\t\t\t<li><a href=\"#\">FAQs</a></li>
\t\t\t\t<li><a href=\"#\">Terms of Use</a></li>
\t\t\t</ul>
\t\t\t<div class=\"payments\">
\t\t\t\t<img src=\"";
        // line 30
        yield ($context["server"] ?? null);
        yield "image/footer/visa.png\" alt=\"Visa\">
\t\t\t\t<img src=\"";
        // line 31
        yield ($context["server"] ?? null);
        yield "image/footer/mastercard.png\" alt=\"Mastercard\">
\t\t\t\t<img src=\"";
        // line 32
        yield ($context["server"] ?? null);
        yield "image/footer/american.png\" alt=\"American Express\">
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"container copyright\">
\t\t<p class=\"text-14 text-white\">© 2025 All Rights Reserved</p>
\t</div>
</footer>
</body>

</html>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/common/footer.twig";
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
        return array (  84 => 32,  80 => 31,  76 => 30,  50 => 7,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("</main>
<footer class=\"app-footer\">
\t<div class=\"container\">
\t\t<div class=\"left\">
\t\t\t<div class=\"logo\">
\t\t\t\t<a href=\"/\">
\t\t\t\t\t<img src=\"{{ server }}image/footer-logo.png\" alt=\"Logo\">
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"form\">
\t\t\t\t<p class=\"text-16 text-white\">
\t\t\t\t\tBe the first to know about new arrivals!
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"right\">
\t\t\t<ul class=\"nav text-18 text-white\">
\t\t\t\t<li><a href=\"#\">Catalog</a></li>
\t\t\t\t<li><a href=\"#\">Shipping & Payment</a></li>
\t\t\t\t<li><a href=\"#\">Batteries</a></li>
\t\t\t\t<li><a href=\"#\">Warranty & Returns</a></li>
\t\t\t\t<li><a href=\"#\">Controllers</a></li>
\t\t\t\t<li><a href=\"#\">Contacts</a></li>
\t\t\t\t<li><a href=\"#\">About Us</a></li>
\t\t\t\t<li><a href=\"#\">Privacy Policy</a></li>
\t\t\t\t<li><a href=\"#\">FAQs</a></li>
\t\t\t\t<li><a href=\"#\">Terms of Use</a></li>
\t\t\t</ul>
\t\t\t<div class=\"payments\">
\t\t\t\t<img src=\"{{ server }}image/footer/visa.png\" alt=\"Visa\">
\t\t\t\t<img src=\"{{ server }}image/footer/mastercard.png\" alt=\"Mastercard\">
\t\t\t\t<img src=\"{{ server }}image/footer/american.png\" alt=\"American Express\">
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"container copyright\">
\t\t<p class=\"text-14 text-white\">© 2025 All Rights Reserved</p>
\t</div>
</footer>
</body>

</html>", "catalog/view/template/common/footer.twig", "D:\\xampp\\htdocs\\opencart\\catalog\\view\\template\\common\\footer.twig");
    }
}
