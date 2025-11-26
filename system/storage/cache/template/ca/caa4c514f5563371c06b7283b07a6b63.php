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

/* admin/view/template/common/footer.twig */
class __TwigTemplate_3587e28cd07e39f094c8d1a2fa6c4b57 extends Template
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
        yield "<footer id=\"footer\">";
        yield ($context["text_footer"] ?? null);
        yield "
  <br/>";
        // line 2
        yield ($context["text_version"] ?? null);
        yield "</footer>
</div>
<script src=\"../assets/jquery/jquery-3.7.1.min.js\" type=\"module\"></script>
<script src=\"../assets/bootstrap/js/bootstrap.bundle.min.js\" type=\"module\"></script>
<script src=\"./view/javascript/common.js\" type=\"module\"></script>
";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 8
            yield "  <script src=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["script"], "href", [], "any", false, false, false, 8);
            yield "\" type=\"module\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['script'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        yield "</body>
</html>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/view/template/common/footer.twig";
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
        return array (  68 => 10,  59 => 8,  55 => 7,  47 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<footer id=\"footer\">{{ text_footer }}
  <br/>{{ text_version }}</footer>
</div>
<script src=\"../assets/jquery/jquery-3.7.1.min.js\" type=\"module\"></script>
<script src=\"../assets/bootstrap/js/bootstrap.bundle.min.js\" type=\"module\"></script>
<script src=\"./view/javascript/common.js\" type=\"module\"></script>
{% for script in scripts %}
  <script src=\"{{ script.href }}\" type=\"module\"></script>
{% endfor %}
</body>
</html>", "admin/view/template/common/footer.twig", "/var/www/opencart/admin/view/template/common/footer.twig");
    }
}
