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

/* admin/view/template/common/header.twig */
class __TwigTemplate_42432a881f673862a2ff3b16f4368a82 extends Template
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
        yield "<!DOCTYPE html>
<html dir=\"";
        // line 2
        yield ($context["direction"] ?? null);
        yield "\" lang=\"";
        yield ($context["lang"] ?? null);
        yield "\">
\t<head>
\t\t<meta charset=\"UTF-8\"/>
\t\t<title>";
        // line 5
        yield ($context["title"] ?? null);
        yield "</title>
\t\t<base href=\"";
        // line 6
        yield ($context["base"] ?? null);
        yield "\"/>
\t\t";
        // line 7
        if (($context["description"] ?? null)) {
            // line 8
            yield "\t\t\t<meta name=\"description\" content=\"";
            yield ($context["description"] ?? null);
            yield "\"/>
\t\t";
        }
        // line 10
        yield "\t\t";
        if (($context["keywords"] ?? null)) {
            // line 11
            yield "\t\t\t<meta name=\"keywords\" content=\"";
            yield ($context["keywords"] ?? null);
            yield "\"/>
\t\t";
        }
        // line 13
        yield "\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"/>
\t\t<meta http-equiv=\"cache-control\" content=\"no-cache\">
\t\t<meta http-equiv=\"expires\" content=\"0\">
\t\t<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
\t\t<link href=\"https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 19
        yield ($context["icons"] ?? null);
        yield "\" rel=\"stylesheet\" type=\"text/css\"/>
\t\t<link href=\"";
        // line 20
        yield ($context["stylesheet"] ?? null);
        yield "\" rel=\"stylesheet\" type=\"text/css\"/>
\t\t<link href=\"";
        // line 21
        yield ($context["components"] ?? null);
        yield "\" rel=\"stylesheet\" type=\"text/css\"/>
\t\t<link href=\"view/stylesheet/admin_custom.css\" rel=\"stylesheet\" type=\"text/css\"/>
\t\t<script src=\"";
        // line 23
        yield ($context["jquery"] ?? null);
        yield "\" type=\"text/javascript\"></script>
\t\t<script type=\"text/javascript\" src=\"view/javascript/common.js\"></script>
\t\t";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 26
            yield "\t\t\t<link type=\"text/css\" href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 26);
            yield "\" rel=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 26);
            yield "\" media=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 26);
            yield "\"/>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['style'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        yield "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 29
            yield "\t\t\t<link href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 29);
            yield "\" rel=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 29);
            yield "\"/>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['link'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        yield "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 32
            yield "\t\t\t<script type=\"text/javascript\" src=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["script"], "href", [], "any", false, false, false, 32);
            yield "\"></script>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['script'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        yield "\t</head>
\t<body>
\t\t<div id=\"alert\"></div>
\t\t<div id=\"container\">
\t\t\t<header id=\"header\" class=\"navbar navbar-expand navbar-light border-bottom\" style=\"position: fixed; top: 0; left: 0; right: 0; width: 100%; z-index: 1000;\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<a href=\"";
        // line 40
        yield ($context["home"] ?? null);
        yield "\" class=\"navbar-brand\" style=\"padding: 0 50px;\">
\t\t\t\t\t\t<span style=\"font-size: 24px; font-weight: 600; color: #1F1F1F; letter-spacing: -0.5px;\">SkyFix</span>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</header>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/view/template/common/header.twig";
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
        return array (  159 => 40,  151 => 34,  142 => 32,  137 => 31,  126 => 29,  121 => 28,  108 => 26,  104 => 25,  99 => 23,  94 => 21,  90 => 20,  86 => 19,  78 => 13,  72 => 11,  69 => 10,  63 => 8,  61 => 7,  57 => 6,  53 => 5,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html dir=\"{{ direction }}\" lang=\"{{ lang }}\">
\t<head>
\t\t<meta charset=\"UTF-8\"/>
\t\t<title>{{ title }}</title>
\t\t<base href=\"{{ base }}\"/>
\t\t{% if description %}
\t\t\t<meta name=\"description\" content=\"{{ description }}\"/>
\t\t{% endif %}
\t\t{% if keywords %}
\t\t\t<meta name=\"keywords\" content=\"{{ keywords }}\"/>
\t\t{% endif %}
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"/>
\t\t<meta http-equiv=\"cache-control\" content=\"no-cache\">
\t\t<meta http-equiv=\"expires\" content=\"0\">
\t\t<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
\t\t<link href=\"https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap\" rel=\"stylesheet\">
\t\t<link href=\"{{ icons }}\" rel=\"stylesheet\" type=\"text/css\"/>
\t\t<link href=\"{{ stylesheet }}\" rel=\"stylesheet\" type=\"text/css\"/>
\t\t<link href=\"{{ components }}\" rel=\"stylesheet\" type=\"text/css\"/>
\t\t<link href=\"view/stylesheet/admin_custom.css\" rel=\"stylesheet\" type=\"text/css\"/>
\t\t<script src=\"{{ jquery }}\" type=\"text/javascript\"></script>
\t\t<script type=\"text/javascript\" src=\"view/javascript/common.js\"></script>
\t\t{% for style in styles %}
\t\t\t<link type=\"text/css\" href=\"{{ style.href }}\" rel=\"{{ style.rel }}\" media=\"{{ style.media }}\"/>
\t\t{% endfor %}
\t\t{% for link in links %}
\t\t\t<link href=\"{{ link.href }}\" rel=\"{{ link.rel }}\"/>
\t\t{% endfor %}
\t\t{% for script in scripts %}
\t\t\t<script type=\"text/javascript\" src=\"{{ script.href }}\"></script>
\t\t{% endfor %}
\t</head>
\t<body>
\t\t<div id=\"alert\"></div>
\t\t<div id=\"container\">
\t\t\t<header id=\"header\" class=\"navbar navbar-expand navbar-light border-bottom\" style=\"position: fixed; top: 0; left: 0; right: 0; width: 100%; z-index: 1000;\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<a href=\"{{ home }}\" class=\"navbar-brand\" style=\"padding: 0 50px;\">
\t\t\t\t\t\t<span style=\"font-size: 24px; font-weight: 600; color: #1F1F1F; letter-spacing: -0.5px;\">SkyFix</span>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</header>
", "admin/view/template/common/header.twig", "D:\\xampp\\htdocs\\opencart\\admin\\view\\template\\common\\header.twig");
    }
}
