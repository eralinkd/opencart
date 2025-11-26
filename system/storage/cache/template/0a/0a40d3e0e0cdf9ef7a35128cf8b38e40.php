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
class __TwigTemplate_27193f9315e28bcf1a5c7da4103a47c0 extends Template
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
<footer class=\"mt-auto\">
  <div class=\"container\">
    <div class=\"row\">
      ";
        // line 5
        if ((($context["informations"] ?? null) || ($context["blog"] ?? null))) {
            // line 6
            yield "        <div class=\"col-sm-3\">
          <h5>";
            // line 7
            yield ($context["text_information"] ?? null);
            yield "</h5>
          <ul class=\"list-unstyled\">
            ";
            // line 9
            if (($context["blog"] ?? null)) {
                // line 10
                yield "              <li><a href=\"";
                yield ($context["blog"] ?? null);
                yield "\">";
                yield ($context["text_blog"] ?? null);
                yield "</a></li>
            ";
            }
            // line 12
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 13
                yield "              <li><a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 13);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 13);
                yield "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['information'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            yield "          </ul>
        </div>
      ";
        }
        // line 18
        yield "      <div class=\"col-sm-3\">
        <h5>";
        // line 19
        yield ($context["text_service"] ?? null);
        yield "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 21
        yield ($context["contact"] ?? null);
        yield "\">";
        yield ($context["text_contact"] ?? null);
        yield "</a></li>
          <li><a href=\"";
        // line 22
        yield ($context["return"] ?? null);
        yield "\">";
        yield ($context["text_return"] ?? null);
        yield "</a></li>
          ";
        // line 23
        if (($context["gdpr"] ?? null)) {
            // line 24
            yield "            <li><a href=\"";
            yield ($context["gdpr"] ?? null);
            yield "\">";
            yield ($context["text_gdpr"] ?? null);
            yield "</a></li>
          ";
        }
        // line 26
        yield "          <li><a href=\"";
        yield ($context["sitemap"] ?? null);
        yield "\">";
        yield ($context["text_sitemap"] ?? null);
        yield "</a></li>
        </ul>
          
      </div>
      <div class=\"col-sm-3\">
        <h5>";
        // line 31
        yield ($context["text_extra"] ?? null);
        yield "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 33
        yield ($context["manufacturer"] ?? null);
        yield "\">";
        yield ($context["text_manufacturer"] ?? null);
        yield "</a></li>
          ";
        // line 34
        if (($context["affiliate"] ?? null)) {
            // line 35
            yield "            <li><a href=\"";
            yield ($context["affiliate"] ?? null);
            yield "\">";
            yield ($context["text_affiliate"] ?? null);
            yield "</a></li>
          ";
        }
        // line 37
        yield "          <li><a href=\"";
        yield ($context["special"] ?? null);
        yield "\">";
        yield ($context["text_special"] ?? null);
        yield "</a></li>
        </ul>
      </div>
      <div class=\"col-sm-3\">
        <h5>";
        // line 41
        yield ($context["text_account"] ?? null);
        yield "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 43
        yield ($context["account"] ?? null);
        yield "\">";
        yield ($context["text_account"] ?? null);
        yield "</a></li>
          <li><a href=\"";
        // line 44
        yield ($context["order"] ?? null);
        yield "\">";
        yield ($context["text_order"] ?? null);
        yield "</a></li>
          <li><a href=\"";
        // line 45
        yield ($context["wishlist"] ?? null);
        yield "\">";
        yield ($context["text_wishlist"] ?? null);
        yield "</a></li>
          <li><a href=\"";
        // line 46
        yield ($context["newsletter"] ?? null);
        yield "\">";
        yield ($context["text_newsletter"] ?? null);
        yield "</a></li>
        </ul>
      </div>
    </div>
    <hr>
  </div>
</footer>
</div>
";
        // line 54
        yield ($context["cookie"] ?? null);
        yield "
<script src=\"./assets/jquery/jquery-3.7.1.min.js\" type=\"module\"></script>
<script src=\"./assets/bootstrap/js/bootstrap.bundle.min.js\" type=\"module\"></script>
<script src=\"./catalog/view/javascript/common.js\" type=\"module\"></script>
";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 59
            yield "  <script src=\"./";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["script"], "href", [], "any", false, false, false, 59);
            yield "\" type=\"module\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['script'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        yield "</body></html>
";
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
        return array (  217 => 61,  208 => 59,  204 => 58,  197 => 54,  184 => 46,  178 => 45,  172 => 44,  166 => 43,  161 => 41,  151 => 37,  143 => 35,  141 => 34,  135 => 33,  130 => 31,  119 => 26,  111 => 24,  109 => 23,  103 => 22,  97 => 21,  92 => 19,  89 => 18,  84 => 15,  73 => 13,  68 => 12,  60 => 10,  58 => 9,  53 => 7,  50 => 6,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("</main>
<footer class=\"mt-auto\">
  <div class=\"container\">
    <div class=\"row\">
      {% if informations or blog %}
        <div class=\"col-sm-3\">
          <h5>{{ text_information }}</h5>
          <ul class=\"list-unstyled\">
            {% if blog %}
              <li><a href=\"{{ blog }}\">{{ text_blog }}</a></li>
            {% endif %}
            {% for information in informations %}
              <li><a href=\"{{ information.href }}\">{{ information.title }}</a></li>
            {% endfor %}
          </ul>
        </div>
      {% endif %}
      <div class=\"col-sm-3\">
        <h5>{{ text_service }}</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"{{ contact }}\">{{ text_contact }}</a></li>
          <li><a href=\"{{ return }}\">{{ text_return }}</a></li>
          {% if gdpr %}
            <li><a href=\"{{ gdpr }}\">{{ text_gdpr }}</a></li>
          {% endif %}
          <li><a href=\"{{ sitemap }}\">{{ text_sitemap }}</a></li>
        </ul>
          
      </div>
      <div class=\"col-sm-3\">
        <h5>{{ text_extra }}</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"{{ manufacturer }}\">{{ text_manufacturer }}</a></li>
          {% if affiliate %}
            <li><a href=\"{{ affiliate }}\">{{ text_affiliate }}</a></li>
          {% endif %}
          <li><a href=\"{{ special }}\">{{ text_special }}</a></li>
        </ul>
      </div>
      <div class=\"col-sm-3\">
        <h5>{{ text_account }}</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"{{ account }}\">{{ text_account }}</a></li>
          <li><a href=\"{{ order }}\">{{ text_order }}</a></li>
          <li><a href=\"{{ wishlist }}\">{{ text_wishlist }}</a></li>
          <li><a href=\"{{ newsletter }}\">{{ text_newsletter }}</a></li>
        </ul>
      </div>
    </div>
    <hr>
  </div>
</footer>
</div>
{{ cookie }}
<script src=\"./assets/jquery/jquery-3.7.1.min.js\" type=\"module\"></script>
<script src=\"./assets/bootstrap/js/bootstrap.bundle.min.js\" type=\"module\"></script>
<script src=\"./catalog/view/javascript/common.js\" type=\"module\"></script>
{% for script in scripts %}
  <script src=\"./{{ script.href }}\" type=\"module\"></script>
{% endfor %}
</body></html>
", "catalog/view/template/common/footer.twig", "/var/www/opencart/catalog/view/template/common/footer.twig");
    }
}
