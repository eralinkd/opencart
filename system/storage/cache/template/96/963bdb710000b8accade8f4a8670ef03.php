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

/* admin/view/template/marketplace/marketplace_list.twig */
class __TwigTemplate_410bd7c615ada83809423bf6e38f6fff extends Template
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
        if (($context["promotions"] ?? null)) {
            // line 2
            yield "  <h3>";
            yield ($context["text_featured"] ?? null);
            yield "</h3>
  <div class=\"row\">
    ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["promotions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                // line 5
                yield "      ";
                if ($context["extension"]) {
                    // line 6
                    yield "        <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
          <section>
            <div class=\"extension-preview text-center\">
              <a href=\"";
                    // line 9
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "href", [], "any", false, false, false, 9);
                    yield "\">
                <div class=\"extension-description\"></div>
                <img src=\"";
                    // line 11
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "image", [], "any", false, false, false, 11);
                    yield "\" alt=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 11);
                    yield "\" title=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 11);
                    yield "\" class=\"img-fluid\"/> </a>
            </div>
            <div class=\"extension-name\">
              <h4><a href=\"";
                    // line 14
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "href", [], "any", false, false, false, 14);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 14);
                    yield "</a></h4>
              ";
                    // line 15
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "price", [], "any", false, false, false, 15);
                    yield "
            </div>
            <div class=\"extension-rate\">
              <div class=\"row\">
                <div class=\"col-6\">
                  ";
                    // line 20
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 21
                        yield "                    ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "rating", [], "any", false, false, false, 21) < $context["i"])) {
                            // line 22
                            yield "                      <i class=\"fa-regular fa-star\"></i>
                    ";
                        } else {
                            // line 24
                            yield "                      <i class=\"fa-solid fa-star\"></i>
                    ";
                        }
                        // line 26
                        yield "                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 27
                    yield "                </div>
                <div class=\"col-6\">
                  <div class=\"text-end\">";
                    // line 29
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "rating_total", [], "any", false, false, false, 29);
                    yield " ";
                    yield ($context["text_reviews"] ?? null);
                    yield "</div>
                </div>
              </div>
            </div>
          </section>
        </div>
      ";
                }
                // line 36
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['extension'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            yield "  </div>
  <hr/>
";
        }
        // line 40
        yield "
";
        // line 41
        if (($context["extensions"] ?? null)) {
            // line 42
            yield "  <div class=\"row\">
    ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["extensions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                // line 44
                yield "
      <div class=\"col-lg-3 col-md-4 col-sm-6 col-12 mb-3\">
        <section>
          <div class=\"extension-preview text-center\">
            <a href=\"";
                // line 48
                yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "href", [], "any", false, false, false, 48);
                yield "\">
              <div class=\"extension-description\"></div>
              <img src=\"";
                // line 50
                yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "image", [], "any", false, false, false, 50);
                yield "\" alt=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 50);
                yield "\" title=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 50);
                yield "\" class=\"img-fluid\"/> </a>
          </div>
          <div class=\"extension-name\">
            <h4><a href=\"";
                // line 53
                yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "href", [], "any", false, false, false, 53);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 53);
                yield "</a></h4>
            ";
                // line 54
                yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "price", [], "any", false, false, false, 54);
                yield "
          </div>
          <div class=\"extension-rate\">
            <div class=\"row\">
              <div class=\"col-6\">
                ";
                // line 59
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 60
                    yield "                  ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "rating", [], "any", false, false, false, 60) < $context["i"])) {
                        // line 61
                        yield "                    <i class=\"fa-regular fa-star\"></i>
                  ";
                    } else {
                        // line 63
                        yield "                    <i class=\"fa-solid fa-star\"></i>
                  ";
                    }
                    // line 65
                    yield "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 66
                yield "              </div>
              <div class=\"col-6\">
                <div class=\"text-end\">";
                // line 68
                yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "rating_total", [], "any", false, false, false, 68);
                yield " ";
                yield ($context["text_reviews"] ?? null);
                yield "</div>
              </div>
            </div>
          </div>
        </section>
      </div>

    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['extension'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            yield "  </div>
";
        } else {
            // line 78
            yield "  <p class=\"text-center\">";
            yield ($context["text_no_results"] ?? null);
            yield "</p>
";
        }
        // line 80
        yield "
<div class=\"row\">
  <div class=\"col-sm-12 text-center\">";
        // line 82
        yield ($context["pagination"] ?? null);
        yield "</div>
</div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/view/template/marketplace/marketplace_list.twig";
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
        return array (  241 => 82,  237 => 80,  231 => 78,  227 => 76,  211 => 68,  207 => 66,  201 => 65,  197 => 63,  193 => 61,  190 => 60,  186 => 59,  178 => 54,  172 => 53,  162 => 50,  157 => 48,  151 => 44,  147 => 43,  144 => 42,  142 => 41,  139 => 40,  134 => 37,  128 => 36,  116 => 29,  112 => 27,  106 => 26,  102 => 24,  98 => 22,  95 => 21,  91 => 20,  83 => 15,  77 => 14,  67 => 11,  62 => 9,  57 => 6,  54 => 5,  50 => 4,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if promotions %}
  <h3>{{ text_featured }}</h3>
  <div class=\"row\">
    {% for extension in promotions %}
      {% if extension %}
        <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
          <section>
            <div class=\"extension-preview text-center\">
              <a href=\"{{ extension.href }}\">
                <div class=\"extension-description\"></div>
                <img src=\"{{ extension.image }}\" alt=\"{{ extension.name }}\" title=\"{{ extension.name }}\" class=\"img-fluid\"/> </a>
            </div>
            <div class=\"extension-name\">
              <h4><a href=\"{{ extension.href }}\">{{ extension.name }}</a></h4>
              {{ extension.price }}
            </div>
            <div class=\"extension-rate\">
              <div class=\"row\">
                <div class=\"col-6\">
                  {% for i in 1..5 %}
                    {% if extension.rating < i %}
                      <i class=\"fa-regular fa-star\"></i>
                    {% else %}
                      <i class=\"fa-solid fa-star\"></i>
                    {% endif %}
                  {% endfor %}
                </div>
                <div class=\"col-6\">
                  <div class=\"text-end\">{{ extension.rating_total }} {{ text_reviews }}</div>
                </div>
              </div>
            </div>
          </section>
        </div>
      {% endif %}
    {% endfor %}
  </div>
  <hr/>
{% endif %}

{% if extensions %}
  <div class=\"row\">
    {% for extension in extensions %}

      <div class=\"col-lg-3 col-md-4 col-sm-6 col-12 mb-3\">
        <section>
          <div class=\"extension-preview text-center\">
            <a href=\"{{ extension.href }}\">
              <div class=\"extension-description\"></div>
              <img src=\"{{ extension.image }}\" alt=\"{{ extension.name }}\" title=\"{{ extension.name }}\" class=\"img-fluid\"/> </a>
          </div>
          <div class=\"extension-name\">
            <h4><a href=\"{{ extension.href }}\">{{ extension.name }}</a></h4>
            {{ extension.price }}
          </div>
          <div class=\"extension-rate\">
            <div class=\"row\">
              <div class=\"col-6\">
                {% for i in 1..5 %}
                  {% if extension.rating < i %}
                    <i class=\"fa-regular fa-star\"></i>
                  {% else %}
                    <i class=\"fa-solid fa-star\"></i>
                  {% endif %}
                {% endfor %}
              </div>
              <div class=\"col-6\">
                <div class=\"text-end\">{{ extension.rating_total }} {{ text_reviews }}</div>
              </div>
            </div>
          </div>
        </section>
      </div>

    {% endfor %}
  </div>
{% else %}
  <p class=\"text-center\">{{ text_no_results }}</p>
{% endif %}

<div class=\"row\">
  <div class=\"col-sm-12 text-center\">{{ pagination }}</div>
</div>", "admin/view/template/marketplace/marketplace_list.twig", "/var/www/opencart/admin/view/template/marketplace/marketplace_list.twig");
    }
}
