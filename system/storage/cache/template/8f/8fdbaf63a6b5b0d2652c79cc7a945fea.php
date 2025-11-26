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

/* admin/view/template/common/security_list.twig */
class __TwigTemplate_2410aca384b67e6f589f834ae4c0b7f6 extends Template
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
        yield "<div id=\"modal-security\" class=\"modal show\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title text-danger\"><i class=\"fa-solid fa-triangle-exclamation\"></i> ";
        // line 5
        yield ($context["heading_title"] ?? null);
        yield "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div id=\"accordion\" class=\"accordion\">
        ";
        // line 9
        if (($context["install"] ?? null)) {
            // line 10
            yield "          <div id=\"security-install\" class=\"accordion-item\">
            <h5 class=\"accordion-header\"><button type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#accordion-install\" class=\"accordion-button collapsed\"><i class=\"fa-solid fa-trash-can me-1\"></i> ";
            // line 11
            yield ($context["text_install"] ?? null);
            yield "</button></h5>
            <div id=\"accordion-install\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion\">
              <div class=\"modal-body\">
                <div id=\"alert-install\"></div>
                <p>";
            // line 15
            yield ($context["text_install_description"] ?? null);
            yield "</p>
                <div class=\"input-group mb-3\">
                  <div class=\"input-group-text\">";
            // line 17
            yield ($context["text_path"] ?? null);
            yield "</div>
                  <input type=\"text\" value=\"";
            // line 18
            yield ($context["install"] ?? null);
            yield "\" class=\"form-control is-invalid\" readonly/>
                </div>
                <div class=\"text-end\">
                  <button type=\"button\" id=\"button-install\" class=\"btn btn-danger\"><i class=\"fa-regular fa-trash-can\"></i> ";
            // line 21
            yield ($context["button_delete"] ?? null);
            yield "</button>
                </div>
              </div>
            </div>
          </div>
        ";
        }
        // line 27
        yield "        ";
        if (($context["storage"] ?? null)) {
            // line 28
            yield "          <div id=\"security-storage\" class=\"accordion-item\">
            <h2 class=\"accordion-header\"><button type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#accordion-storage\" class=\"accordion-button collapsed\"><i class=\"fa-solid fa-folder me-1\"></i> ";
            // line 29
            yield ($context["text_storage"] ?? null);
            yield "</button></h2>
            <div id=\"accordion-storage\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion\">
              <div class=\"modal-body\">
                <div id=\"alert-storage\"></div>
                <form id=\"form-storage\">
                  <p>";
            // line 34
            yield ($context["text_storage_description"] ?? null);
            yield "</p>
                  <div class=\"mb-3\">
                    <label class=\"form-label\">";
            // line 36
            yield ($context["entry_path_current"] ?? null);
            yield "</label>
                    <input type=\"text\" value=\"";
            // line 37
            yield ($context["storage"] ?? null);
            yield "\" class=\"form-control is-invalid\" readonly/>
                  </div>
                  <div class=\"mb-3\">
                    <label class=\"form-label\">";
            // line 40
            yield ($context["entry_path_new"] ?? null);
            yield "</label>
                    <div class=\"input-group\">
                      <select name=\"path\" id=\"input-path\" class=\"form-select\">
                        ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["paths"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["path"]) {
                // line 44
                yield "                          <option value=\"";
                yield $context["path"];
                yield "\">";
                yield $context["path"];
                yield "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['path'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            yield "                      </select>
                      <input type=\"text\" name=\"name\" value=\"storage\" placeholder=\"";
            // line 47
            yield ($context["text_path"] ?? null);
            yield "\" id=\"input-storage\" class=\"form-control w-50\"/>
                    </div>
                    <div class=\"form-text\">";
            // line 49
            yield ($context["help_storage"] ?? null);
            yield "</div>
                  </div>
                  <div class=\"text-end\">
                    <button type=\"submit\" id=\"button-storage\" class=\"btn btn-danger\"><i class=\"fa-solid fa-circle-right\"></i> ";
            // line 52
            yield ($context["button_move"] ?? null);
            yield "</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        ";
        }
        // line 59
        yield "        ";
        if (($context["storage_delete"] ?? null)) {
            // line 60
            yield "          <div id=\"security-storage-delete\" class=\"accordion-item\">
            <h5 class=\"accordion-header\"><button type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#accordion-storage-delete\" class=\"accordion-button collapsed\"><i class=\"fa-solid fa-trash-can me-1\"></i> ";
            // line 61
            yield ($context["text_storage_delete"] ?? null);
            yield "</button></h5>
            <div id=\"accordion-storage-delete\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion\">
              <div class=\"modal-body\">
                <div id=\"alert-storage\"></div>
                <p>";
            // line 65
            yield ($context["text_storage_description_delete"] ?? null);
            yield "</p>
                <div class=\"input-group mb-3\">
                  <div class=\"input-group-text\">";
            // line 67
            yield ($context["text_path"] ?? null);
            yield "</div>
                  <input type=\"text\" value=\"";
            // line 68
            yield ($context["storage_delete"] ?? null);
            yield "\" class=\"form-control is-invalid\" readonly/>
                </div>
                <div class=\"text-end\">
                  <button type=\"button\" value=\"storage\" id=\"button-storage-delete\" class=\"btn btn-danger\"><i class=\"fa-regular fa-trash-can\"></i> ";
            // line 71
            yield ($context["button_delete"] ?? null);
            yield "</button>
                </div>
              </div>
            </div>
          </div>
        ";
        }
        // line 77
        yield "        ";
        if (($context["admin"] ?? null)) {
            // line 78
            yield "          <div id=\"security-admin\" class=\"accordion-item\">
            <h2 class=\"accordion-header\"><button type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#accordion-admin\" class=\"accordion-button collapsed\"><i class=\"fa-solid fa-folder me-1\"></i> ";
            // line 79
            yield ($context["text_admin"] ?? null);
            yield "</button></h2>
            <div id=\"accordion-admin\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion\">
              <div class=\"modal-body\">
                <div id=\"alert-admin\"></div>
                <form id=\"form-admin\">
                  <p>";
            // line 84
            yield ($context["text_admin_description"] ?? null);
            yield "</p>
                  <div class=\"mb-3\">
                    <div class=\"input-group\">
                      <div class=\"input-group-text\">";
            // line 87
            yield ($context["text_path"] ?? null);
            yield "</div>
                      <input type=\"text\" name=\"name\" value=\"admin\" placeholder=\"";
            // line 88
            yield ($context["entry_name"] ?? null);
            yield "\" id=\"input-admin\" class=\"form-control is-invalid\"/>
                    </div>
                  </div>
                  <div class=\"text-end\">
                    <button type=\"submit\" id=\"button-admin\" class=\"btn btn-danger\"><i class=\"fa-solid fa-circle-right\"></i> ";
            // line 92
            yield ($context["button_move"] ?? null);
            yield "</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        ";
        }
        // line 99
        yield "        ";
        if (($context["admin_delete"] ?? null)) {
            // line 100
            yield "          <div id=\"security-admin-delete\" class=\"accordion-item\">
            <h2 class=\"accordion-header\"><button type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#accordion-admin-delete\" class=\"accordion-button collapsed\"><i class=\"fa-solid fa-trash-can me-1\"></i> ";
            // line 101
            yield ($context["text_admin_delete"] ?? null);
            yield "</button></h2>
            <div id=\"accordion-admin-delete\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion\">
              <div class=\"modal-body\">
                <div id=\"alert-admin\"></div>
                <p>";
            // line 105
            yield ($context["text_admin_description_delete"] ?? null);
            yield "</p>
                <div class=\"input-group mb-3\">
                  <div class=\"input-group-text\">";
            // line 107
            yield ($context["text_path"] ?? null);
            yield "</div>
                  <input type=\"text\" value=\"";
            // line 108
            yield ($context["admin_delete"] ?? null);
            yield "\" class=\"form-control is-invalid\" readonly/>
                </div>
                <div class=\"text-end\">
                  <button type=\"button\" value=\"admin\" id=\"button-admin-delete\" class=\"btn btn-danger\"><i class=\"fa-solid fa-trash-can\"></i> ";
            // line 111
            yield ($context["button_delete"] ?? null);
            yield "</button>
                </div>
              </div>
            </div>
          </div>
        ";
        }
        // line 117
        yield "      </div>
    </div>
  </div>
</div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/view/template/common/security_list.twig";
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
        return array (  280 => 117,  271 => 111,  265 => 108,  261 => 107,  256 => 105,  249 => 101,  246 => 100,  243 => 99,  233 => 92,  226 => 88,  222 => 87,  216 => 84,  208 => 79,  205 => 78,  202 => 77,  193 => 71,  187 => 68,  183 => 67,  178 => 65,  171 => 61,  168 => 60,  165 => 59,  155 => 52,  149 => 49,  144 => 47,  141 => 46,  130 => 44,  126 => 43,  120 => 40,  114 => 37,  110 => 36,  105 => 34,  97 => 29,  94 => 28,  91 => 27,  82 => 21,  76 => 18,  72 => 17,  67 => 15,  60 => 11,  57 => 10,  55 => 9,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div id=\"modal-security\" class=\"modal show\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title text-danger\"><i class=\"fa-solid fa-triangle-exclamation\"></i> {{ heading_title }}</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div id=\"accordion\" class=\"accordion\">
        {% if install %}
          <div id=\"security-install\" class=\"accordion-item\">
            <h5 class=\"accordion-header\"><button type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#accordion-install\" class=\"accordion-button collapsed\"><i class=\"fa-solid fa-trash-can me-1\"></i> {{ text_install }}</button></h5>
            <div id=\"accordion-install\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion\">
              <div class=\"modal-body\">
                <div id=\"alert-install\"></div>
                <p>{{ text_install_description }}</p>
                <div class=\"input-group mb-3\">
                  <div class=\"input-group-text\">{{ text_path }}</div>
                  <input type=\"text\" value=\"{{ install }}\" class=\"form-control is-invalid\" readonly/>
                </div>
                <div class=\"text-end\">
                  <button type=\"button\" id=\"button-install\" class=\"btn btn-danger\"><i class=\"fa-regular fa-trash-can\"></i> {{ button_delete }}</button>
                </div>
              </div>
            </div>
          </div>
        {% endif %}
        {% if storage %}
          <div id=\"security-storage\" class=\"accordion-item\">
            <h2 class=\"accordion-header\"><button type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#accordion-storage\" class=\"accordion-button collapsed\"><i class=\"fa-solid fa-folder me-1\"></i> {{ text_storage }}</button></h2>
            <div id=\"accordion-storage\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion\">
              <div class=\"modal-body\">
                <div id=\"alert-storage\"></div>
                <form id=\"form-storage\">
                  <p>{{ text_storage_description }}</p>
                  <div class=\"mb-3\">
                    <label class=\"form-label\">{{ entry_path_current }}</label>
                    <input type=\"text\" value=\"{{ storage }}\" class=\"form-control is-invalid\" readonly/>
                  </div>
                  <div class=\"mb-3\">
                    <label class=\"form-label\">{{ entry_path_new }}</label>
                    <div class=\"input-group\">
                      <select name=\"path\" id=\"input-path\" class=\"form-select\">
                        {% for path in paths %}
                          <option value=\"{{ path }}\">{{ path }}</option>
                        {% endfor %}
                      </select>
                      <input type=\"text\" name=\"name\" value=\"storage\" placeholder=\"{{ text_path }}\" id=\"input-storage\" class=\"form-control w-50\"/>
                    </div>
                    <div class=\"form-text\">{{ help_storage }}</div>
                  </div>
                  <div class=\"text-end\">
                    <button type=\"submit\" id=\"button-storage\" class=\"btn btn-danger\"><i class=\"fa-solid fa-circle-right\"></i> {{ button_move }}</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        {% endif %}
        {% if storage_delete %}
          <div id=\"security-storage-delete\" class=\"accordion-item\">
            <h5 class=\"accordion-header\"><button type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#accordion-storage-delete\" class=\"accordion-button collapsed\"><i class=\"fa-solid fa-trash-can me-1\"></i> {{ text_storage_delete }}</button></h5>
            <div id=\"accordion-storage-delete\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion\">
              <div class=\"modal-body\">
                <div id=\"alert-storage\"></div>
                <p>{{ text_storage_description_delete }}</p>
                <div class=\"input-group mb-3\">
                  <div class=\"input-group-text\">{{ text_path }}</div>
                  <input type=\"text\" value=\"{{ storage_delete }}\" class=\"form-control is-invalid\" readonly/>
                </div>
                <div class=\"text-end\">
                  <button type=\"button\" value=\"storage\" id=\"button-storage-delete\" class=\"btn btn-danger\"><i class=\"fa-regular fa-trash-can\"></i> {{ button_delete }}</button>
                </div>
              </div>
            </div>
          </div>
        {% endif %}
        {% if admin %}
          <div id=\"security-admin\" class=\"accordion-item\">
            <h2 class=\"accordion-header\"><button type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#accordion-admin\" class=\"accordion-button collapsed\"><i class=\"fa-solid fa-folder me-1\"></i> {{ text_admin }}</button></h2>
            <div id=\"accordion-admin\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion\">
              <div class=\"modal-body\">
                <div id=\"alert-admin\"></div>
                <form id=\"form-admin\">
                  <p>{{ text_admin_description }}</p>
                  <div class=\"mb-3\">
                    <div class=\"input-group\">
                      <div class=\"input-group-text\">{{ text_path }}</div>
                      <input type=\"text\" name=\"name\" value=\"admin\" placeholder=\"{{ entry_name }}\" id=\"input-admin\" class=\"form-control is-invalid\"/>
                    </div>
                  </div>
                  <div class=\"text-end\">
                    <button type=\"submit\" id=\"button-admin\" class=\"btn btn-danger\"><i class=\"fa-solid fa-circle-right\"></i> {{ button_move }}</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        {% endif %}
        {% if admin_delete %}
          <div id=\"security-admin-delete\" class=\"accordion-item\">
            <h2 class=\"accordion-header\"><button type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#accordion-admin-delete\" class=\"accordion-button collapsed\"><i class=\"fa-solid fa-trash-can me-1\"></i> {{ text_admin_delete }}</button></h2>
            <div id=\"accordion-admin-delete\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion\">
              <div class=\"modal-body\">
                <div id=\"alert-admin\"></div>
                <p>{{ text_admin_description_delete }}</p>
                <div class=\"input-group mb-3\">
                  <div class=\"input-group-text\">{{ text_path }}</div>
                  <input type=\"text\" value=\"{{ admin_delete }}\" class=\"form-control is-invalid\" readonly/>
                </div>
                <div class=\"text-end\">
                  <button type=\"button\" value=\"admin\" id=\"button-admin-delete\" class=\"btn btn-danger\"><i class=\"fa-solid fa-trash-can\"></i> {{ button_delete }}</button>
                </div>
              </div>
            </div>
          </div>
        {% endif %}
      </div>
    </div>
  </div>
</div>", "admin/view/template/common/security_list.twig", "/var/www/opencart/admin/view/template/common/security_list.twig");
    }
}
