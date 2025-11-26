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

/* catalog/view/template/checkout/register.twig */
class __TwigTemplate_0f50b9a568c3b22b1d5442189c3811cf extends Template
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
        yield "<form id=\"form-register\">
  <p>";
        // line 2
        yield ($context["text_login"] ?? null);
        yield "</p>
  <fieldset>
    <legend>";
        // line 4
        yield ($context["heading_title"] ?? null);
        yield "</legend>
    <div class=\"row\">
      ";
        // line 6
        if (($context["config_checkout_guest"] ?? null)) {
            // line 7
            yield "        <div class=\"col mb-3\">
          <div class=\"form-check form-check-inline\">
            <input type=\"radio\" name=\"account\" value=\"1\" id=\"input-register\" class=\"form-check-input\"";
            // line 9
            if (($context["account"] ?? null)) {
                yield " checked";
            }
            yield "/>
            <label for=\"input-register\" class=\"form-check-label\">";
            // line 10
            yield ($context["text_register"] ?? null);
            yield "</label>
          </div>
          <div class=\"form-check form-check-inline\">
            <input type=\"radio\" name=\"account\" value=\"0\" id=\"input-guest\" class=\"form-check-input\"";
            // line 13
            if ( !($context["account"] ?? null)) {
                yield " checked";
            }
            yield "/>
            <label for=\"input-guest\" class=\"form-check-label\">";
            // line 14
            yield ($context["text_guest"] ?? null);
            yield "</label>
          </div>
        </div>
      ";
        }
        // line 18
        yield "      <div class=\"col mb-3";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["customer_groups"] ?? null)) <= 1)) {
            yield " d-none";
        }
        yield "\">
        <label class=\"form-label\">";
        // line 19
        yield ($context["entry_customer_group"] ?? null);
        yield "</label>
        <select name=\"customer_group_id\" id=\"input-customer-group\" class=\"form-select\" required>
          ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 22
            yield "            <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 22);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 22) == ($context["customer_group_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 22);
            yield "</option>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['customer_group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        yield "        </select>
      </div>
    </div>
    <div class=\"row row-cols-1 row-cols-md-2\">
      <div class=\"col mb-3\">
        <label for=\"input-firstname\" class=\"form-label\">";
        // line 29
        yield ($context["entry_firstname"] ?? null);
        yield "</label> <input type=\"text\" name=\"firstname\" value=\"";
        yield ($context["firstname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_firstname"] ?? null);
        yield "\" id=\"input-firstname\" class=\"form-control\" required/>
        <div id=\"error-firstname\" class=\"invalid-feedback\"></div>
      </div>
      <div class=\"col mb-3\">
        <label for=\"input-lastname\" class=\"form-label\">";
        // line 33
        yield ($context["entry_lastname"] ?? null);
        yield "</label> <input type=\"text\" name=\"lastname\" value=\"";
        yield ($context["lastname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_lastname"] ?? null);
        yield "\" id=\"input-lastname\" class=\"form-control\" required/>
        <div id=\"error-lastname\" class=\"invalid-feedback\"></div>
      </div>
      <div class=\"col mb-3\">
        <label for=\"input-email\" class=\"form-label\">";
        // line 37
        yield ($context["entry_email"] ?? null);
        yield "</label>
        <input type=\"text\" name=\"email\" value=\"";
        // line 38
        yield ($context["email"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_email"] ?? null);
        yield "\" id=\"input-email\" class=\"form-control\" required/>
        <div id=\"error-email\" class=\"invalid-feedback\"></div>
      </div>
      ";
        // line 41
        if (($context["config_telephone_display"] ?? null)) {
            // line 42
            yield "        <div class=\"col mb-3\">
          <label for=\"input-telephone\" class=\"form-label\">";
            // line 43
            yield ($context["entry_telephone"] ?? null);
            yield "</label>
          <input type=\"text\" name=\"telephone\" value=\"";
            // line 44
            yield ($context["telephone"] ?? null);
            yield "\" placeholder=\"";
            yield ($context["entry_telephone"] ?? null);
            yield "\" id=\"input-telephone\" class=\"form-control\"";
            if (($context["config_telephone_required"] ?? null)) {
                yield " required";
            }
            yield "/>
          <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
        </div>
      ";
        }
        // line 48
        yield "      ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 49
            yield "
        ";
            // line 50
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 50) == "account")) {
                // line 51
                yield "
          ";
                // line 52
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 52) == "select")) {
                    // line 53
                    yield "            <div class=\"col mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 53);
                    yield "\">
              <label for=\"input-custom-field-";
                    // line 54
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 54);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 54);
                    yield "</label> <select name=\"custom_field[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 54);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 54);
                    yield "]\" id=\"input-customer-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 54);
                    yield "\" class=\"form-select\">
                <option value=\"\">";
                    // line 55
                    yield ($context["text_select"] ?? null);
                    yield "</option>
                ";
                    // line 56
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 56));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 57
                        yield "                  <option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 57);
                        yield "\"";
                        if (((($_v0 = ($context["account_custom_field"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 57)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 57) == (($_v1 = ($context["account_custom_field"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 57)] ?? null) : null)))) {
                            yield " selected";
                        }
                        yield ">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 57);
                        yield "</option>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 59
                    yield "              </select>
              <div id=\"error-custom-field-";
                    // line 60
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 60);
                    yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 63
                yield "
          ";
                // line 64
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 64) == "radio")) {
                    // line 65
                    yield "            <div class=\"col mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 65);
                    yield "\">
              <label class=\"form-label\">";
                    // line 66
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 66);
                    yield "</label>
              <div id=\"input-custom-field-";
                    // line 67
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 67);
                    yield "\">
                ";
                    // line 68
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 68));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 69
                        yield "                  <div class=\"form-check\">
                    <input type=\"radio\" name=\"custom_field[";
                        // line 70
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 70);
                        yield "][";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 70);
                        yield "]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 70);
                        yield "\" id=\"input-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 70);
                        yield "\" class=\"form-check-input\"";
                        if (((($_v2 = ($context["account_custom_field"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 70)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 70) == (($_v3 = ($context["account_custom_field"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 70)] ?? null) : null)))) {
                            yield " checked";
                        }
                        yield "/> <label for=\"input-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 70);
                        yield "\" class=\"form-check-label\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 70);
                        yield "</label>
                  </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 73
                    yield "              </div>
              <div id=\"error-custom-field-";
                    // line 74
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 74);
                    yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 77
                yield "
          ";
                // line 78
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 78) == "checkbox")) {
                    // line 79
                    yield "            <div class=\"col mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 79);
                    yield "\">
              <label class=\"form-label\">";
                    // line 80
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 80);
                    yield "</label>
              <div id=\"input-custom-field-";
                    // line 81
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 81);
                    yield "\">
                ";
                    // line 82
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 82));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 83
                        yield "                  <div class=\"form-check\">
                    <input type=\"checkbox\" name=\"custom_field[";
                        // line 84
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 84);
                        yield "][";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 84);
                        yield "][]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 84);
                        yield "\" id=\"input-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 84);
                        yield "\" class=\"form-check-input\"";
                        if (((($_v4 = ($context["account_custom_field"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 84)] ?? null) : null) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 84), (($_v5 = ($context["account_custom_field"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 84)] ?? null) : null)))) {
                            yield " checked";
                        }
                        yield "/> <label for=\"input-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 84);
                        yield "\" class=\"form-check-label\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 84);
                        yield "</label>
                  </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 87
                    yield "              </div>
              <div id=\"error-custom-field-";
                    // line 88
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 88);
                    yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 91
                yield "
          ";
                // line 92
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 92) == "text")) {
                    // line 93
                    yield "            <div class=\"col mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 93);
                    yield "\">
              <label for=\"input-custom-field-";
                    // line 94
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 94);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 94);
                    yield "</label> <input type=\"text\" name=\"custom_field[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 94);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 94);
                    yield "]\" value=\"";
                    if ((($_v6 = ($context["account_custom_field"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 94)] ?? null) : null)) {
                        yield (($_v7 = ($context["account_custom_field"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 94)] ?? null) : null);
                    } else {
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 94);
                    }
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 94);
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 94);
                    yield "\" class=\"form-control\"/>
              <div id=\"error-custom-field-";
                    // line 95
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 95);
                    yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 98
                yield "
          ";
                // line 99
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 99) == "textarea")) {
                    // line 100
                    yield "            <div class=\"col mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 100);
                    yield "\">
              <label for=\"input-custom-field-";
                    // line 101
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 101);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 101);
                    yield "</label> <textarea name=\"custom_field[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 101);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 101);
                    yield "]\" rows=\"5\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 101);
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 101);
                    yield "\" class=\"form-control\">";
                    if ((($_v8 = ($context["account_custom_field"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 101)] ?? null) : null)) {
                        yield (($_v9 = ($context["account_custom_field"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 101)] ?? null) : null);
                    } else {
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 101);
                    }
                    yield "</textarea>
              <div id=\"error-custom-field-";
                    // line 102
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 102);
                    yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 105
                yield "
          ";
                // line 106
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 106) == "file")) {
                    // line 107
                    yield "            <div class=\"col mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 107);
                    yield "\">
              <label for=\"input-custom-field-";
                    // line 108
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 108);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 108);
                    yield "</label>
              <div>
                <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                    // line 110
                    yield ($context["upload"] ?? null);
                    yield "\" data-oc-size-max=\"";
                    yield ($context["config_file_max_size"] ?? null);
                    yield "\" data-oc-size-error=\"";
                    yield ($context["error_upload_size"] ?? null);
                    yield "\" data-oc-target=\"#input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 110);
                    yield "\" class=\"btn btn-light\"><i class=\"fa-solid fa-upload\"></i> ";
                    yield ($context["button_upload"] ?? null);
                    yield "</button>
                <input type=\"hidden\" name=\"custom_field[";
                    // line 111
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 111);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 111);
                    yield "]\" value=\"";
                    if ((($_v10 = ($context["account_custom_field"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 111)] ?? null) : null)) {
                        yield (($_v11 = ($context["account_custom_field"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 111)] ?? null) : null);
                    }
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 111);
                    yield "\"/>
              </div>
              <div id=\"error-custom-field-";
                    // line 113
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 113);
                    yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 116
                yield "
          ";
                // line 117
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 117) == "date")) {
                    // line 118
                    yield "            <div class=\"col mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 118);
                    yield "\">
              <label for=\"input-custom-field-";
                    // line 119
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 119);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 119);
                    yield "</label> <input type=\"date\" name=\"custom_field[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 119);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 119);
                    yield "]\" value=\"";
                    if ((($_v12 = ($context["account_custom_field"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 119)] ?? null) : null)) {
                        yield (($_v13 = ($context["account_custom_field"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 119)] ?? null) : null);
                    } else {
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 119);
                    }
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 119);
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 119);
                    yield "\" class=\"form-control\"/>
              <div id=\"error-custom-field-";
                    // line 120
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 120);
                    yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 123
                yield "
          ";
                // line 124
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 124) == "time")) {
                    // line 125
                    yield "            <div class=\"col mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 125);
                    yield "\">
              <label for=\"input-custom-field-";
                    // line 126
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 126);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 126);
                    yield "</label> <input type=\"time\" name=\"custom_field[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 126);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 126);
                    yield "]\" value=\"";
                    if ((($_v14 = ($context["account_custom_field"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 126)] ?? null) : null)) {
                        yield (($_v15 = ($context["account_custom_field"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 126)] ?? null) : null);
                    } else {
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 126);
                    }
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 126);
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 126);
                    yield "\" class=\"form-control\"/>
              <div id=\"error-custom-field-";
                    // line 127
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 127);
                    yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 130
                yield "
          ";
                // line 131
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 131) == "datetime")) {
                    // line 132
                    yield "            <div class=\"col mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 132);
                    yield "\">
              <label for=\"input-custom-field-";
                    // line 133
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 133);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 133);
                    yield "</label> <input type=\"datetime-local\" name=\"custom_field[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 133);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 133);
                    yield "]\" value=\"";
                    if ((($_v16 = ($context["account_custom_field"] ?? null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 133)] ?? null) : null)) {
                        yield (($_v17 = ($context["account_custom_field"] ?? null)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 133)] ?? null) : null);
                    } else {
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 133);
                    }
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 133);
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 133);
                    yield "\" class=\"form-control\"/>
              <div id=\"error-custom-field-";
                    // line 134
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 134);
                    yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 137
                yield "
        ";
            }
            // line 139
            yield "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['custom_field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        yield "    </div>
  </fieldset>
  ";
        // line 142
        if (($context["config_checkout_payment_address"] ?? null)) {
            // line 143
            yield "    <fieldset>
      <legend>";
            // line 144
            yield ($context["text_payment_address"] ?? null);
            yield "</legend>
      <div class=\"row row-cols-1 row-cols-md-2\">
        <div class=\"col mb-3\">
          <label for=\"input-payment-company\" class=\"form-label\">";
            // line 147
            yield ($context["entry_company"] ?? null);
            yield "</label> <input type=\"text\" name=\"payment_company\" value=\"";
            yield ($context["payment_company"] ?? null);
            yield "\" placeholder=\"";
            yield ($context["entry_company"] ?? null);
            yield "\" id=\"input-payment-company\" class=\"form-control\"/>
        </div>
        <div class=\"col mb-3\">
          <label for=\"input-payment-address-1\" class=\"form-label\">";
            // line 150
            yield ($context["entry_address_1"] ?? null);
            yield "</label> <input type=\"text\" name=\"payment_address_1\" value=\"";
            yield ($context["payment_address_1"] ?? null);
            yield "\" placeholder=\"";
            yield ($context["entry_address_1"] ?? null);
            yield "\" id=\"input-payment-address-1\" class=\"form-control\" required/>
          <div id=\"error-payment-address-1\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3\">
          <label for=\"input-payment-address-2\" class=\"form-label\">";
            // line 154
            yield ($context["entry_address_2"] ?? null);
            yield "</label> <input type=\"text\" name=\"payment_address_2\" value=\"";
            yield ($context["payment_address_2"] ?? null);
            yield "\" placeholder=\"";
            yield ($context["entry_address_2"] ?? null);
            yield "\" id=\"input-payment-address-2\" class=\"form-control\"/>
        </div>
        <div class=\"col mb-3\">
          <label for=\"input-payment-city\" class=\"form-label\">";
            // line 157
            yield ($context["entry_city"] ?? null);
            yield "</label> <input type=\"text\" name=\"payment_city\" value=\"";
            yield ($context["payment_city"] ?? null);
            yield "\" placeholder=\"";
            yield ($context["entry_city"] ?? null);
            yield "\" id=\"input-payment-city\" class=\"form-control\" required/>
          <div id=\"error-payment-city\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3\">
          <label for=\"input-payment-postcode\" class=\"form-label\">";
            // line 161
            yield ($context["entry_postcode"] ?? null);
            yield "</label> <input type=\"text\" name=\"payment_postcode\" value=\"";
            yield ($context["payment_postcode"] ?? null);
            yield "\" placeholder=\"";
            yield ($context["entry_postcode"] ?? null);
            yield "\" id=\"input-payment-postcode\" class=\"form-control\" required/>
          <div id=\"error-payment-postcode\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3\">
          <label for=\"input-payment-country\" class=\"form-label\">";
            // line 165
            yield ($context["entry_country"] ?? null);
            yield "</label>
          <x-country name=\"payment_country_id\" value=\"";
            // line 166
            yield ($context["payment_country_id"] ?? null);
            yield "\" id=\"x-payment-country\" postcode=\"1\" target=\"input-payment-postcode\" input-id=\"input-payment-country\" input-class=\"form-select\" required>
            <option value=\"0\">";
            // line 167
            yield ($context["text_select"] ?? null);
            yield "</option>
          </x-country>
          <div id=\"error-payment-country\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3\">
          <label for=\"input-payment-zone\" class=\"form-label\">";
            // line 172
            yield ($context["entry_zone"] ?? null);
            yield "</label>
          <x-zone name=\"payment_zone_id\" value=\"";
            // line 173
            yield ($context["payment_zone_id"] ?? null);
            yield "\" target=\"x-payment-country\" input-id=\"input-payment-zone\" input-class=\"form-select\" required>
            <option value=\"0\">";
            // line 174
            yield ($context["text_select"] ?? null);
            yield "</option>
          </x-zone>
          <div id=\"error-payment-zone\" class=\"invalid-feedback\"></div>
        </div>
        ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["custom_fields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
                // line 179
                yield "          ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 179) == "address")) {
                    // line 180
                    yield "
            ";
                    // line 181
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 181) == "select")) {
                        // line 182
                        yield "              <div class=\"col mb-3";
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 182)) {
                            yield " required";
                        }
                        yield " custom-field custom-field-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 182);
                        yield "\">
                <label for=\"input-payment-custom-field-";
                        // line 183
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 183);
                        yield "\" class=\"form-label\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 183);
                        yield "</label> <select name=\"payment_custom_field[";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 183);
                        yield "][";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 183);
                        yield "]\" id=\"input-payment-custom-field-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 183);
                        yield "\" class=\"form-select\">
                  <option value=\"\">";
                        // line 184
                        yield ($context["text_select"] ?? null);
                        yield "</option>
                  ";
                        // line 185
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 185));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                            // line 186
                            yield "                    <option value=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 186);
                            yield "\"";
                            if (((($_v18 = ($context["payment_custom_field"] ?? null)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 186)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 186) == (($_v19 = ($context["payment_custom_field"] ?? null)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 186)] ?? null) : null)))) {
                                yield " selected";
                            }
                            yield ">";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 186);
                            yield "</option>
                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 188
                        yield "                </select>
                <div id=\"error-payment-custom-field-";
                        // line 189
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 189);
                        yield "\" class=\"invalid-feedback\"></div>
              </div>
            ";
                    }
                    // line 192
                    yield "
            ";
                    // line 193
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 193) == "radio")) {
                        // line 194
                        yield "              <div class=\"col mb-3";
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 194)) {
                            yield " required";
                        }
                        yield " custom-field custom-field-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 194);
                        yield "\">
                <label class=\"form-label\">";
                        // line 195
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 195);
                        yield "</label>
                <div id=\"input-payment-custom-field-";
                        // line 196
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 196);
                        yield "\">
                  ";
                        // line 197
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 197));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                            // line 198
                            yield "                    <div class=\"form-check\">
                      <input type=\"radio\" name=\"payment_custom_field[";
                            // line 199
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 199);
                            yield "][";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 199);
                            yield "]\" value=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 199);
                            yield "\" id=\"input-payment-custom-value-";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 199);
                            yield "\" class=\"form-check-input\"";
                            if (((($_v20 = ($context["payment_custom_field"] ?? null)) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 199)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 199) == (($_v21 = ($context["payment_custom_field"] ?? null)) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 199)] ?? null) : null)))) {
                                yield " checked";
                            }
                            yield "/> <label for=\"input-payment-custom-value-";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 199);
                            yield "\" class=\"form-check-label\">";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 199);
                            yield "</label>
                    </div>
                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 202
                        yield "                </div>
                <div id=\"error-payment-custom-field-";
                        // line 203
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 203);
                        yield "\" class=\"invalid-feedback\"></div>
              </div>
            ";
                    }
                    // line 206
                    yield "            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 206) == "checkbox")) {
                        // line 207
                        yield "              <div class=\"col mb-3";
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 207)) {
                            yield " required";
                        }
                        yield " custom-field custom-field-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 207);
                        yield "\">
                <label class=\"form-label\">";
                        // line 208
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 208);
                        yield "</label>
                <div id=\"input-payment-custom-field-";
                        // line 209
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 209);
                        yield "\">
                  ";
                        // line 210
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 210));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                            // line 211
                            yield "                    <div class=\"form-check\">
                      <input type=\"checkbox\" name=\"payment_custom_field[";
                            // line 212
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 212);
                            yield "][";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 212);
                            yield "][]\" value=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 212);
                            yield "\" id=\"input-payment-custom-value-";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 212);
                            yield "\" class=\"form-check-input\"";
                            if (((($_v22 = ($context["address_custom_field"] ?? null)) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 212)] ?? null) : null) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 212), (($_v23 = ($context["address_custom_field"] ?? null)) && is_array($_v23) || $_v23 instanceof ArrayAccess ? ($_v23[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 212)] ?? null) : null)))) {
                                yield " checked";
                            }
                            yield "/> <label for=\"input-payment-custom-value-";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 212);
                            yield "\" class=\"form-check-label\">";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 212);
                            yield "</label>
                    </div>
                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 215
                        yield "                </div>
                <div id=\"error-payment-custom-field-";
                        // line 216
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 216);
                        yield "\" class=\"invalid-feedback\"></div>
              </div>
            ";
                    }
                    // line 219
                    yield "            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 219) == "text")) {
                        // line 220
                        yield "              <div class=\"col mb-3";
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 220)) {
                            yield " required";
                        }
                        yield " custom-field custom-field-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 220);
                        yield "\">
                <label for=\"input-payment-custom-field-";
                        // line 221
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 221);
                        yield "\" class=\"form-label\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 221);
                        yield "</label> <input type=\"text\" name=\"payment_custom_field[";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 221);
                        yield "][";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 221);
                        yield "]\" value=\"";
                        if ((($_v24 = ($context["address_custom_field"] ?? null)) && is_array($_v24) || $_v24 instanceof ArrayAccess ? ($_v24[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 221)] ?? null) : null)) {
                            yield (($_v25 = ($context["address_custom_field"] ?? null)) && is_array($_v25) || $_v25 instanceof ArrayAccess ? ($_v25[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 221)] ?? null) : null);
                        } else {
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 221);
                        }
                        yield "\" placeholder=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 221);
                        yield "\" id=\"input-payment-custom-field-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 221);
                        yield "\" class=\"form-control\"/>
                <div id=\"error-payment-custom-field-";
                        // line 222
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 222);
                        yield "\" class=\"invalid-feedback\"></div>
              </div>
            ";
                    }
                    // line 225
                    yield "            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 225) == "textarea")) {
                        // line 226
                        yield "              <div class=\"col mb-3";
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 226)) {
                            yield " required";
                        }
                        yield " custom-field custom-field-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 226);
                        yield "\">
                <label for=\"input-payment-custom-field-";
                        // line 227
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 227);
                        yield "\" class=\"form-label\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 227);
                        yield "</label> <textarea name=\"payment_custom_field[";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 227);
                        yield "][";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 227);
                        yield "]\" rows=\"5\" placeholder=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 227);
                        yield "\" id=\"input-payment-custom-field-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 227);
                        yield "\" class=\"form-control\">";
                        if ((($_v26 = ($context["address_custom_field"] ?? null)) && is_array($_v26) || $_v26 instanceof ArrayAccess ? ($_v26[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 227)] ?? null) : null)) {
                            yield (($_v27 = ($context["address_custom_field"] ?? null)) && is_array($_v27) || $_v27 instanceof ArrayAccess ? ($_v27[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 227)] ?? null) : null);
                        } else {
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 227);
                        }
                        yield "</textarea>
                <div id=\"error-payment-custom-field-";
                        // line 228
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 228);
                        yield "\" class=\"invalid-feedback\"></div>
              </div>
            ";
                    }
                    // line 231
                    yield "            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 231) == "file")) {
                        // line 232
                        yield "              <div class=\"col mb-3";
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 232)) {
                            yield " required";
                        }
                        yield " custom-field custom-field-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 232);
                        yield "\">
                <label class=\"form-label\">";
                        // line 233
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 233);
                        yield "</label>
                <div>
                  <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                        // line 235
                        yield ($context["upload"] ?? null);
                        yield "\" data-oc-size-max=\"";
                        yield ($context["config_file_max_size"] ?? null);
                        yield "\" data-oc-size-error=\"";
                        yield ($context["error_upload_size"] ?? null);
                        yield "\" data-oc-target=\"#input-payment-custom-field-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 235);
                        yield "\" class=\"btn btn-light\"><i class=\"fa-solid fa-upload\"></i> ";
                        yield ($context["button_upload"] ?? null);
                        yield "</button>
                  <input type=\"hidden\" name=\"payment_custom_field[";
                        // line 236
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 236);
                        yield "][";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 236);
                        yield "]\" value=\"";
                        if ((($_v28 = ($context["payment_custom_field"] ?? null)) && is_array($_v28) || $_v28 instanceof ArrayAccess ? ($_v28[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 236)] ?? null) : null)) {
                            yield (($_v29 = ($context["payment_custom_field"] ?? null)) && is_array($_v29) || $_v29 instanceof ArrayAccess ? ($_v29[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 236)] ?? null) : null);
                        }
                        yield "\" id=\"input-payment-custom-field-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 236);
                        yield "\"/>
                </div>
                <div id=\"error-payment-custom-field-";
                        // line 238
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 238);
                        yield "\" class=\"invalid-feedback\"></div>
              </div>
            ";
                    }
                    // line 241
                    yield "            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 241) == "date")) {
                        // line 242
                        yield "              <div class=\"col mb-3";
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 242)) {
                            yield " required";
                        }
                        yield " custom-field custom-field-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 242);
                        yield "\">
                <label for=\"input-payment-custom-field-";
                        // line 243
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 243);
                        yield "\" class=\"form-label\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 243);
                        yield "</label> <input type=\"date\" name=\"payment_custom_field[";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 243);
                        yield "][";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 243);
                        yield "]\" value=\"";
                        if ((($_v30 = ($context["payment_custom_field"] ?? null)) && is_array($_v30) || $_v30 instanceof ArrayAccess ? ($_v30[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 243)] ?? null) : null)) {
                            yield (($_v31 = ($context["payment_custom_field"] ?? null)) && is_array($_v31) || $_v31 instanceof ArrayAccess ? ($_v31[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 243)] ?? null) : null);
                        } else {
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 243);
                        }
                        yield "\" placeholder=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 243);
                        yield "\" id=\"input-payment-custom-field-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 243);
                        yield "\" class=\"form-control\"/>
                <div id=\"error-payment-custom-field-";
                        // line 244
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 244);
                        yield "\" class=\"invalid-feedback\"></div>
              </div>
            ";
                    }
                    // line 247
                    yield "            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 247) == "time")) {
                        // line 248
                        yield "              <div class=\"col mb-3";
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 248)) {
                            yield " required";
                        }
                        yield " custom-field custom-field-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 248);
                        yield "\">
                <label for=\"input-payment-custom-field-";
                        // line 249
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 249);
                        yield "\" class=\"form-label\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 249);
                        yield "</label> <input type=\"time\" name=\"payment_custom_field[";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 249);
                        yield "][";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 249);
                        yield "]\" value=\"";
                        if ((($_v32 = ($context["payment_custom_field"] ?? null)) && is_array($_v32) || $_v32 instanceof ArrayAccess ? ($_v32[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 249)] ?? null) : null)) {
                            yield (($_v33 = ($context["payment_custom_field"] ?? null)) && is_array($_v33) || $_v33 instanceof ArrayAccess ? ($_v33[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 249)] ?? null) : null);
                        } else {
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 249);
                        }
                        yield "\" placeholder=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 249);
                        yield "\" id=\"input-payment-custom-field-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 249);
                        yield "\" class=\"form-control\"/>
                <div id=\"error-payment-custom-field-";
                        // line 250
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 250);
                        yield "\" class=\"invalid-feedback\"></div>
              </div>
            ";
                    }
                    // line 253
                    yield "
            ";
                    // line 254
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 254) == "datetime")) {
                        // line 255
                        yield "              <div class=\"col mb-3";
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 255)) {
                            yield " required";
                        }
                        yield " custom-field custom-field-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 255);
                        yield "\">
                <label for=\"input-payment-custom-field-";
                        // line 256
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 256);
                        yield "\" class=\"form-label\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 256);
                        yield "</label> <input type=\"datetime-local\" name=\"payment_custom_field[";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 256);
                        yield "][";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 256);
                        yield "]\" value=\"";
                        if ((($_v34 = ($context["payment_custom_field"] ?? null)) && is_array($_v34) || $_v34 instanceof ArrayAccess ? ($_v34[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 256)] ?? null) : null)) {
                            yield (($_v35 = ($context["payment_custom_field"] ?? null)) && is_array($_v35) || $_v35 instanceof ArrayAccess ? ($_v35[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 256)] ?? null) : null);
                        } else {
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 256);
                        }
                        yield "\" placeholder=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 256);
                        yield "\" id=\"input-payment-custom-field-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 256);
                        yield "\" class=\"form-control\"/>
                <div id=\"error-payment-custom-field-";
                        // line 257
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 257);
                        yield "\" class=\"invalid-feedback\"></div>
              </div>
            ";
                    }
                    // line 260
                    yield "
          ";
                }
                // line 262
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['custom_field'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 263
            yield "
        ";
            // line 264
            if (($context["shipping_required"] ?? null)) {
                // line 265
                yield "          <div class=\"col mb-3\">
            <x-switch name=\"address_match\" value=\"1\" checked=\"";
                // line 266
                yield ($context["address_match"] ?? null);
                yield "\" input-id=\"input-address-match\" input-class=\"form-switch form-switch-lg form-check-inline me-0\"></x-switch>
            <label for=\"input-address-match\" class=\"form-check-label\">";
                // line 267
                yield ($context["entry_match"] ?? null);
                yield "</label>
          </div>
        ";
            }
            // line 270
            yield "
      </div>
    </fieldset>
  ";
        }
        // line 274
        yield "  <fieldset id=\"shipping-address\" style=\"display: ";
        if ( !($context["config_checkout_payment_address"] ?? null)) {
            yield "block";
        } else {
            yield "none";
        }
        yield ";\">
    <legend>";
        // line 275
        yield ($context["text_shipping_address"] ?? null);
        yield "</legend>
    <div class=\"row row-cols-1 row-cols-md-2\">
      ";
        // line 277
        if (($context["config_checkout_payment_address"] ?? null)) {
            // line 278
            yield "        <div class=\"col mb-3\">
          <label for=\"input-shipping-firstname\" class=\"form-label\">";
            // line 279
            yield ($context["entry_firstname"] ?? null);
            yield "</label> <input type=\"text\" name=\"shipping_firstname\" value=\"";
            yield ($context["shipping_firstname"] ?? null);
            yield "\" placeholder=\"";
            yield ($context["entry_firstname"] ?? null);
            yield "\" id=\"input-shipping-firstname\" class=\"form-control\" required/>
          <div id=\"error-shipping-firstname\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3\">
          <label for=\"input-shipping-lastname\" class=\"form-label\">";
            // line 283
            yield ($context["entry_lastname"] ?? null);
            yield "</label> <input type=\"text\" name=\"shipping_lastname\" value=\"";
            yield ($context["shipping_lastname"] ?? null);
            yield "\" placeholder=\"";
            yield ($context["entry_lastname"] ?? null);
            yield "\" id=\"input-shipping-lastname\" class=\"form-control\" required/>
          <div id=\"error-shipping-lastname\" class=\"invalid-feedback\"></div>
        </div>
      ";
        }
        // line 287
        yield "      <div class=\"col mb-3\">
        <label for=\"input-shipping-company\" class=\"form-label\">";
        // line 288
        yield ($context["entry_company"] ?? null);
        yield "</label> <input type=\"text\" name=\"shipping_company\" value=\"";
        yield ($context["shipping_company"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_company"] ?? null);
        yield "\" id=\"input-shipping-company\" class=\"form-control\"/>
      </div>
      <div class=\"col mb-3\">
        <label for=\"input-shipping-address-1\" class=\"form-label\">";
        // line 291
        yield ($context["entry_address_1"] ?? null);
        yield "</label> <input type=\"text\" name=\"shipping_address_1\" value=\"";
        yield ($context["shipping_address_1"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_address_1"] ?? null);
        yield "\" id=\"input-shipping-address-1\" class=\"form-control\" required/>
        <div id=\"error-shipping-address-1\" class=\"invalid-feedback\"></div>
      </div>
      <div class=\"col mb-3\">
        <label for=\"input-shipping-address-2\" class=\"form-label\">";
        // line 295
        yield ($context["entry_address_2"] ?? null);
        yield "</label> <input type=\"text\" name=\"shipping_address_2\" value=\"";
        yield ($context["shipping_address_2"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_address_2"] ?? null);
        yield "\" id=\"input-shipping-address-2\" class=\"form-control\"/>
      </div>
      <div class=\"col mb-3\">
        <label for=\"input-shipping-city\" class=\"form-label\">";
        // line 298
        yield ($context["entry_city"] ?? null);
        yield "</label> <input type=\"text\" name=\"shipping_city\" value=\"";
        yield ($context["shipping_city"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_city"] ?? null);
        yield "\" id=\"input-shipping-city\" class=\"form-control\" required/>
        <div id=\"error-shipping-city\" class=\"invalid-feedback\"></div>
      </div>
      <div class=\"col mb-3\">
        <label for=\"input-shipping-postcode\" class=\"form-label\">";
        // line 302
        yield ($context["entry_postcode"] ?? null);
        yield "</label> <input type=\"text\" name=\"shipping_postcode\" value=\"";
        yield ($context["shipping_postcode"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_postcode"] ?? null);
        yield "\" id=\"input-shipping-postcode\" class=\"form-control\" required/>
        <div id=\"error-shipping-postcode\" class=\"invalid-feedback\"></div>
      </div>
      <div class=\"col mb-3\">
        <label for=\"input-shipping-country\" class=\"form-label\">";
        // line 306
        yield ($context["entry_country"] ?? null);
        yield "</label>
        <x-country name=\"shipping_country_id\" value=\"";
        // line 307
        yield ($context["shipping_country_id"] ?? null);
        yield "\" id=\"x-shipping-country\" postcode=\"1\" target=\"input-shipping-postcode\" input-id=\"input-shipping-country\" input-class=\"form-select\" required>
          <option value=\"0\">";
        // line 308
        yield ($context["text_select"] ?? null);
        yield "</option>
        </x-country>
        <div id=\"error-shipping-country\" class=\"invalid-feedback\"></div>
      </div>
      <div class=\"col mb-3\">
        <label for=\"input-shipping-zone\" class=\"form-label\">";
        // line 313
        yield ($context["entry_zone"] ?? null);
        yield "</label>
        <x-zone name=\"shipping_zone_id\" value=\"";
        // line 314
        yield ($context["shipping_zone_id"] ?? null);
        yield "\" target=\"x-shipping-country\" input-id=\"input-shipping-zone\" input-class=\"form-select\" required>
          <option value=\"0\">";
        // line 315
        yield ($context["text_select"] ?? null);
        yield "</option>
        </x-zone>
        <div id=\"error-shipping-zone\" class=\"invalid-feedback\"></div>
      </div>
      ";
        // line 319
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 320
            yield "        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 320) == "address")) {
                // line 321
                yield "
          ";
                // line 322
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 322) == "select")) {
                    // line 323
                    yield "            <div class=\"col mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 323)) {
                        yield " required";
                    }
                    yield " custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 323);
                    yield "\">
              <label for=\"input-shipping-custom-field-";
                    // line 324
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 324);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 324);
                    yield "</label> <select name=\"shipping_custom_field[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 324);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 324);
                    yield "]\" id=\"input-shipping-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 324);
                    yield "\" class=\"form-select\">
                <option value=\"\">";
                    // line 325
                    yield ($context["text_select"] ?? null);
                    yield "</option>
                ";
                    // line 326
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 326));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 327
                        yield "                  <option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 327);
                        yield "\"";
                        if (((($_v36 = ($context["shipping_custom_field"] ?? null)) && is_array($_v36) || $_v36 instanceof ArrayAccess ? ($_v36[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 327)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 327) == (($_v37 = ($context["shipping_custom_field"] ?? null)) && is_array($_v37) || $_v37 instanceof ArrayAccess ? ($_v37[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 327)] ?? null) : null)))) {
                            yield " selected";
                        }
                        yield ">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 327);
                        yield "</option>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 329
                    yield "              </select>
              <div id=\"error-shipping-custom-field-";
                    // line 330
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 330);
                    yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 333
                yield "
          ";
                // line 334
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 334) == "radio")) {
                    // line 335
                    yield "            <div class=\"col mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 335)) {
                        yield " required";
                    }
                    yield " custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 335);
                    yield "\">
              <label class=\"form-label\">";
                    // line 336
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 336);
                    yield "</label>
              <div id=\"input-shipping-custom-field-";
                    // line 337
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 337);
                    yield "\">
                ";
                    // line 338
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 338));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 339
                        yield "                  <div class=\"form-check\">
                    <input type=\"radio\" name=\"shipping_custom_field[";
                        // line 340
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 340);
                        yield "][";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 340);
                        yield "]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 340);
                        yield "\" id=\"input-shipping-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 340);
                        yield "\" class=\"form-check-input\"";
                        if (((($_v38 = ($context["shipping_custom_field"] ?? null)) && is_array($_v38) || $_v38 instanceof ArrayAccess ? ($_v38[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 340)] ?? null) : null) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 340), (($_v39 = ($context["shipping_custom_field"] ?? null)) && is_array($_v39) || $_v39 instanceof ArrayAccess ? ($_v39[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 340)] ?? null) : null)))) {
                            yield " checked";
                        }
                        yield "/> <label for=\"input-shipping-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 340);
                        yield "\" class=\"form-check-label\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 340);
                        yield "</label>
                  </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 343
                    yield "              </div>
              <div id=\"error-shipping-custom-field-";
                    // line 344
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 344);
                    yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 347
                yield "
          ";
                // line 348
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 348) == "checkbox")) {
                    // line 349
                    yield "            <div class=\"col mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 349)) {
                        yield " required";
                    }
                    yield " custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 349);
                    yield "\">
              <label class=\"form-label\">";
                    // line 350
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 350);
                    yield "</label>
              <div id=\"input-shipping-custom-field-";
                    // line 351
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 351);
                    yield "\">
                ";
                    // line 352
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 352));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 353
                        yield "                  <div class=\"form-check\">
                    <input type=\"checkbox\" name=\"shipping_custom_field[";
                        // line 354
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 354);
                        yield "][";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 354);
                        yield "][]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 354);
                        yield "\" id=\"input-shipping-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 354);
                        yield "\" class=\"form-check-input\"";
                        if (((($_v40 = ($context["shipping_custom_field"] ?? null)) && is_array($_v40) || $_v40 instanceof ArrayAccess ? ($_v40[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 354)] ?? null) : null) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 354), (($_v41 = ($context["shipping_custom_field"] ?? null)) && is_array($_v41) || $_v41 instanceof ArrayAccess ? ($_v41[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 354)] ?? null) : null)))) {
                            yield " checked";
                        }
                        yield "/> <label for=\"input-shipping-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 354);
                        yield "\" class=\"form-check-label\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 354);
                        yield "</label>
                  </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 357
                    yield "              </div>
              <div id=\"error-shipping-custom-field-";
                    // line 358
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 358);
                    yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 361
                yield "
          ";
                // line 362
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 362) == "text")) {
                    // line 363
                    yield "            <div class=\"col mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 363)) {
                        yield " required";
                    }
                    yield " custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 363);
                    yield "\">
              <label for=\"input-shipping-custom-field-";
                    // line 364
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 364);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 364);
                    yield "</label> <input type=\"text\" name=\"shipping_custom_field[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 364);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 364);
                    yield "]\" value=\"";
                    if ((($_v42 = ($context["shipping_custom_field"] ?? null)) && is_array($_v42) || $_v42 instanceof ArrayAccess ? ($_v42[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 364)] ?? null) : null)) {
                        yield (($_v43 = ($context["shipping_custom_field"] ?? null)) && is_array($_v43) || $_v43 instanceof ArrayAccess ? ($_v43[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 364)] ?? null) : null);
                    } else {
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 364);
                    }
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 364);
                    yield "\" id=\"input-shipping-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 364);
                    yield "\" class=\"form-control\"/>
              <div id=\"error-shipping-custom-field-";
                    // line 365
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 365);
                    yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 368
                yield "
          ";
                // line 369
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 369) == "textarea")) {
                    // line 370
                    yield "            <div class=\"col mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 370)) {
                        yield " required";
                    }
                    yield " custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 370);
                    yield "\">
              <label for=\"input-shipping-custom-field-";
                    // line 371
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 371);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 371);
                    yield "</label> <textarea name=\"shipping_custom_field[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 371);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 371);
                    yield "]\" rows=\"5\" placeholder=\"";
                    if ((($_v44 = ($context["shipping_custom_field"] ?? null)) && is_array($_v44) || $_v44 instanceof ArrayAccess ? ($_v44[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 371)] ?? null) : null)) {
                        yield (($_v45 = ($context["shipping_custom_field"] ?? null)) && is_array($_v45) || $_v45 instanceof ArrayAccess ? ($_v45[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 371)] ?? null) : null);
                    } else {
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 371);
                    }
                    yield "\" id=\"input-shipping-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 371);
                    yield "\" class=\"form-control\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 371);
                    yield "</textarea>
              <div id=\"error-shipping-custom-field-";
                    // line 372
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 372);
                    yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 375
                yield "          ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 375) == "file")) {
                    // line 376
                    yield "            <div class=\"col mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 376)) {
                        yield " required";
                    }
                    yield " custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 376);
                    yield "\">
              <label class=\"form-label\">";
                    // line 377
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 377);
                    yield "</label>
              <div>
                <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                    // line 379
                    yield ($context["upload"] ?? null);
                    yield "\" data-oc-size-max=\"";
                    yield ($context["config_file_max_size"] ?? null);
                    yield "\" data-oc-size-error=\"";
                    yield ($context["error_upload_size"] ?? null);
                    yield "\" data-oc-target=\"#input-shipping-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 379);
                    yield "\" class=\"btn btn-light\"><i class=\"fa-solid fa-upload\"></i> ";
                    yield ($context["button_upload"] ?? null);
                    yield "</button>
                <input type=\"hidden\" name=\"shipping_custom_field[";
                    // line 380
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 380);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 380);
                    yield "]\" value=\"";
                    if ((($_v46 = ($context["shipping_custom_field"] ?? null)) && is_array($_v46) || $_v46 instanceof ArrayAccess ? ($_v46[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 380)] ?? null) : null)) {
                        yield (($_v47 = ($context["shipping_custom_field"] ?? null)) && is_array($_v47) || $_v47 instanceof ArrayAccess ? ($_v47[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 380)] ?? null) : null);
                    }
                    yield "\" id=\"input-shipping-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 380);
                    yield "\"/>
                <div id=\"error-shipping-custom-field-";
                    // line 381
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 381);
                    yield "\" class=\"invalid-feedback\"></div>
              </div>
            </div>
          ";
                }
                // line 385
                yield "
          ";
                // line 386
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 386) == "date")) {
                    // line 387
                    yield "            <div class=\"col mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 387)) {
                        yield " required";
                    }
                    yield " custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 387);
                    yield "\">
              <label for=\"input-shipping-custom-field-";
                    // line 388
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 388);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 388);
                    yield "</label> <input type=\"date\" name=\"shipping_custom_field[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 388);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 388);
                    yield "]\" value=\"";
                    if ((($_v48 = ($context["shipping_custom_field"] ?? null)) && is_array($_v48) || $_v48 instanceof ArrayAccess ? ($_v48[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 388)] ?? null) : null)) {
                        yield (($_v49 = ($context["shipping_custom_field"] ?? null)) && is_array($_v49) || $_v49 instanceof ArrayAccess ? ($_v49[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 388)] ?? null) : null);
                    } else {
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 388);
                    }
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 388);
                    yield "\" id=\"input-shipping-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 388);
                    yield "\" class=\"form-control\"/>
              <div id=\"error-shipping-custom-field-";
                    // line 389
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 389);
                    yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 392
                yield "
          ";
                // line 393
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 393) == "time")) {
                    // line 394
                    yield "            <div class=\"col mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 394)) {
                        yield " required";
                    }
                    yield " custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 394);
                    yield "\">
              <label for=\"input-shipping-custom-field-";
                    // line 395
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 395);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 395);
                    yield "</label> <input type=\"time\" name=\"shipping_custom_field[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 395);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 395);
                    yield "]\" value=\"";
                    if ((($_v50 = ($context["shipping_custom_field"] ?? null)) && is_array($_v50) || $_v50 instanceof ArrayAccess ? ($_v50[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 395)] ?? null) : null)) {
                        yield (($_v51 = ($context["shipping_custom_field"] ?? null)) && is_array($_v51) || $_v51 instanceof ArrayAccess ? ($_v51[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 395)] ?? null) : null);
                    } else {
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 395);
                    }
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 395);
                    yield "\" id=\"input-shipping-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 395);
                    yield "\" class=\"form-control\"/>
              <div id=\"error-shipping-custom-field-";
                    // line 396
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 396);
                    yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 399
                yield "
          ";
                // line 400
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 400) == "datetime")) {
                    // line 401
                    yield "            <div class=\"col mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 401)) {
                        yield " required";
                    }
                    yield " custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 401);
                    yield "\">
              <label for=\"input-shipping-custom-field-";
                    // line 402
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 402);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 402);
                    yield "</label> <input type=\"datetime-local\" name=\"shipping_custom_field[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 402);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 402);
                    yield "]\" value=\"";
                    if ((($_v52 = ($context["shipping_custom_field"] ?? null)) && is_array($_v52) || $_v52 instanceof ArrayAccess ? ($_v52[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 402)] ?? null) : null)) {
                        yield (($_v53 = ($context["shipping_custom_field"] ?? null)) && is_array($_v53) || $_v53 instanceof ArrayAccess ? ($_v53[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 402)] ?? null) : null);
                    } else {
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 402);
                    }
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 402);
                    yield "\" id=\"input-shipping-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 402);
                    yield "\" class=\"form-control\"/>
              <div id=\"error-shipping-custom-field-";
                    // line 403
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 403);
                    yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 406
                yield "        ";
            }
            // line 407
            yield "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['custom_field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 408
        yield "    </div>
  </fieldset>
  <div class=\"row row-cols-1 row-cols-md-2\">
    <div id=\"password\" class=\"col mb-2\">
      <fieldset>
        <legend>";
        // line 413
        yield ($context["text_your_password"] ?? null);
        yield "</legend>
        <div class=\"row\">
          <div class=\"col mb-3\">
            <label for=\"input-password\" class=\"form-label\">";
        // line 416
        yield ($context["entry_password"] ?? null);
        yield "</label> <input type=\"password\" name=\"password\" value=\"\" placeholder=\"";
        yield ($context["entry_password"] ?? null);
        yield "\" id=\"input-password\" class=\"form-control\" required/>
            <div id=\"error-password\" class=\"invalid-feedback\"></div>
          </div>
        </div>
      </fieldset>
    </div>
    <div class=\"col mb-3\">";
        // line 422
        yield ($context["captcha"] ?? null);
        yield "</div>
  </div>
  <div class=\"mb-3\">
    <div>
      <x-switch name=\"agree\" value=\"0\" input-id=\"input-newsletter\" input-class=\"form-switch form-switch-lg form-check-inline me-0\"></x-switch>
      <label for=\"input-newsletter\" class=\"form-check-label\">";
        // line 427
        yield ($context["entry_newsletter"] ?? null);
        yield "</label>
    </div>
    ";
        // line 429
        if (($context["text_agree"] ?? null)) {
            // line 430
            yield "      <div>
        <x-switch name=\"agree\" value=\"1\" checked=\"";
            // line 431
            yield ($context["agree"] ?? null);
            yield "\" input-id=\"input-register-agree\" input-class=\"form-switch form-switch-lg form-check-inline me-0\"></x-switch>
        <label for=\"input-register-agree\" class=\"form-check-label\">";
            // line 432
            yield ($context["text_agree"] ?? null);
            yield "</label>
      </div>
    ";
        }
        // line 435
        yield "  </div>
  <button type=\"submit\" id=\"button-register\" class=\"btn btn-primary mt-2\">";
        // line 436
        yield ($context["button_continue"] ?? null);
        yield "</button>
</form>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/checkout/register.twig";
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
        return array (  1781 => 436,  1778 => 435,  1772 => 432,  1768 => 431,  1765 => 430,  1763 => 429,  1758 => 427,  1750 => 422,  1739 => 416,  1733 => 413,  1726 => 408,  1720 => 407,  1717 => 406,  1711 => 403,  1691 => 402,  1682 => 401,  1680 => 400,  1677 => 399,  1671 => 396,  1651 => 395,  1642 => 394,  1640 => 393,  1637 => 392,  1631 => 389,  1611 => 388,  1602 => 387,  1600 => 386,  1597 => 385,  1590 => 381,  1578 => 380,  1566 => 379,  1561 => 377,  1552 => 376,  1549 => 375,  1543 => 372,  1523 => 371,  1514 => 370,  1512 => 369,  1509 => 368,  1503 => 365,  1483 => 364,  1474 => 363,  1472 => 362,  1469 => 361,  1463 => 358,  1460 => 357,  1437 => 354,  1434 => 353,  1430 => 352,  1426 => 351,  1422 => 350,  1413 => 349,  1411 => 348,  1408 => 347,  1402 => 344,  1399 => 343,  1376 => 340,  1373 => 339,  1369 => 338,  1365 => 337,  1361 => 336,  1352 => 335,  1350 => 334,  1347 => 333,  1341 => 330,  1338 => 329,  1323 => 327,  1319 => 326,  1315 => 325,  1303 => 324,  1294 => 323,  1292 => 322,  1289 => 321,  1286 => 320,  1282 => 319,  1275 => 315,  1271 => 314,  1267 => 313,  1259 => 308,  1255 => 307,  1251 => 306,  1240 => 302,  1229 => 298,  1219 => 295,  1208 => 291,  1198 => 288,  1195 => 287,  1184 => 283,  1173 => 279,  1170 => 278,  1168 => 277,  1163 => 275,  1154 => 274,  1148 => 270,  1142 => 267,  1138 => 266,  1135 => 265,  1133 => 264,  1130 => 263,  1124 => 262,  1120 => 260,  1114 => 257,  1094 => 256,  1085 => 255,  1083 => 254,  1080 => 253,  1074 => 250,  1054 => 249,  1045 => 248,  1042 => 247,  1036 => 244,  1016 => 243,  1007 => 242,  1004 => 241,  998 => 238,  985 => 236,  973 => 235,  968 => 233,  959 => 232,  956 => 231,  950 => 228,  930 => 227,  921 => 226,  918 => 225,  912 => 222,  892 => 221,  883 => 220,  880 => 219,  874 => 216,  871 => 215,  848 => 212,  845 => 211,  841 => 210,  837 => 209,  833 => 208,  824 => 207,  821 => 206,  815 => 203,  812 => 202,  789 => 199,  786 => 198,  782 => 197,  778 => 196,  774 => 195,  765 => 194,  763 => 193,  760 => 192,  754 => 189,  751 => 188,  736 => 186,  732 => 185,  728 => 184,  716 => 183,  707 => 182,  705 => 181,  702 => 180,  699 => 179,  695 => 178,  688 => 174,  684 => 173,  680 => 172,  672 => 167,  668 => 166,  664 => 165,  653 => 161,  642 => 157,  632 => 154,  621 => 150,  611 => 147,  605 => 144,  602 => 143,  600 => 142,  596 => 140,  590 => 139,  586 => 137,  580 => 134,  560 => 133,  555 => 132,  553 => 131,  550 => 130,  544 => 127,  524 => 126,  519 => 125,  517 => 124,  514 => 123,  508 => 120,  488 => 119,  483 => 118,  481 => 117,  478 => 116,  472 => 113,  459 => 111,  447 => 110,  440 => 108,  435 => 107,  433 => 106,  430 => 105,  424 => 102,  404 => 101,  399 => 100,  397 => 99,  394 => 98,  388 => 95,  368 => 94,  363 => 93,  361 => 92,  358 => 91,  352 => 88,  349 => 87,  326 => 84,  323 => 83,  319 => 82,  315 => 81,  311 => 80,  306 => 79,  304 => 78,  301 => 77,  295 => 74,  292 => 73,  269 => 70,  266 => 69,  262 => 68,  258 => 67,  254 => 66,  249 => 65,  247 => 64,  244 => 63,  238 => 60,  235 => 59,  220 => 57,  216 => 56,  212 => 55,  200 => 54,  195 => 53,  193 => 52,  190 => 51,  188 => 50,  185 => 49,  180 => 48,  167 => 44,  163 => 43,  160 => 42,  158 => 41,  150 => 38,  146 => 37,  135 => 33,  124 => 29,  117 => 24,  102 => 22,  98 => 21,  93 => 19,  86 => 18,  79 => 14,  73 => 13,  67 => 10,  61 => 9,  57 => 7,  55 => 6,  50 => 4,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form id=\"form-register\">
  <p>{{ text_login }}</p>
  <fieldset>
    <legend>{{ heading_title }}</legend>
    <div class=\"row\">
      {% if config_checkout_guest %}
        <div class=\"col mb-3\">
          <div class=\"form-check form-check-inline\">
            <input type=\"radio\" name=\"account\" value=\"1\" id=\"input-register\" class=\"form-check-input\"{% if account %} checked{% endif %}/>
            <label for=\"input-register\" class=\"form-check-label\">{{ text_register }}</label>
          </div>
          <div class=\"form-check form-check-inline\">
            <input type=\"radio\" name=\"account\" value=\"0\" id=\"input-guest\" class=\"form-check-input\"{% if not account %} checked{% endif %}/>
            <label for=\"input-guest\" class=\"form-check-label\">{{ text_guest }}</label>
          </div>
        </div>
      {% endif %}
      <div class=\"col mb-3{% if customer_groups|length <= 1 %} d-none{% endif %}\">
        <label class=\"form-label\">{{ entry_customer_group }}</label>
        <select name=\"customer_group_id\" id=\"input-customer-group\" class=\"form-select\" required>
          {% for customer_group in customer_groups %}
            <option value=\"{{ customer_group.customer_group_id }}\"{% if customer_group.customer_group_id == customer_group_id %} selected{% endif %}>{{ customer_group.name }}</option>
          {% endfor %}
        </select>
      </div>
    </div>
    <div class=\"row row-cols-1 row-cols-md-2\">
      <div class=\"col mb-3\">
        <label for=\"input-firstname\" class=\"form-label\">{{ entry_firstname }}</label> <input type=\"text\" name=\"firstname\" value=\"{{ firstname }}\" placeholder=\"{{ entry_firstname }}\" id=\"input-firstname\" class=\"form-control\" required/>
        <div id=\"error-firstname\" class=\"invalid-feedback\"></div>
      </div>
      <div class=\"col mb-3\">
        <label for=\"input-lastname\" class=\"form-label\">{{ entry_lastname }}</label> <input type=\"text\" name=\"lastname\" value=\"{{ lastname }}\" placeholder=\"{{ entry_lastname }}\" id=\"input-lastname\" class=\"form-control\" required/>
        <div id=\"error-lastname\" class=\"invalid-feedback\"></div>
      </div>
      <div class=\"col mb-3\">
        <label for=\"input-email\" class=\"form-label\">{{ entry_email }}</label>
        <input type=\"text\" name=\"email\" value=\"{{ email }}\" placeholder=\"{{ entry_email }}\" id=\"input-email\" class=\"form-control\" required/>
        <div id=\"error-email\" class=\"invalid-feedback\"></div>
      </div>
      {% if config_telephone_display %}
        <div class=\"col mb-3\">
          <label for=\"input-telephone\" class=\"form-label\">{{ entry_telephone }}</label>
          <input type=\"text\" name=\"telephone\" value=\"{{ telephone }}\" placeholder=\"{{ entry_telephone }}\" id=\"input-telephone\" class=\"form-control\"{% if config_telephone_required %} required{% endif %}/>
          <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
        </div>
      {% endif %}
      {% for custom_field in custom_fields %}

        {% if custom_field.location == 'account' %}

          {% if custom_field.type == 'select' %}
            <div class=\"col mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <select name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" id=\"input-customer-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-select\">
                <option value=\"\">{{ text_select }}</option>
                {% for custom_field_value in custom_field.custom_field_value %}
                  <option value=\"{{ custom_field_value.custom_field_value_id }}\"{% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == account_custom_field[custom_field.custom_field_id] %} selected{% endif %}>{{ custom_field_value.name }}</option>
                {% endfor %}
              </select>
              <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}

          {% if custom_field.type == 'radio' %}
            <div class=\"col mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label class=\"form-label\">{{ custom_field.name }}</label>
              <div id=\"input-custom-field-{{ custom_field.custom_field_id }}\">
                {% for custom_field_value in custom_field.custom_field_value %}
                  <div class=\"form-check\">
                    <input type=\"radio\" name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" value=\"{{ custom_field_value.custom_field_value_id }}\" id=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-input\"{% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == account_custom_field[custom_field.custom_field_id] %} checked{% endif %}/> <label for=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-label\">{{ custom_field_value.name }}</label>
                  </div>
                {% endfor %}
              </div>
              <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}

          {% if custom_field.type == 'checkbox' %}
            <div class=\"col mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label class=\"form-label\">{{ custom_field.name }}</label>
              <div id=\"input-custom-field-{{ custom_field.custom_field_id }}\">
                {% for custom_field_value in custom_field.custom_field_value %}
                  <div class=\"form-check\">
                    <input type=\"checkbox\" name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}][]\" value=\"{{ custom_field_value.custom_field_value_id }}\" id=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-input\"{% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in account_custom_field[custom_field.custom_field_id] %} checked{% endif %}/> <label for=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-label\">{{ custom_field_value.name }}</label>
                  </div>
                {% endfor %}
              </div>
              <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}

          {% if custom_field.type == 'text' %}
            <div class=\"col mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <input type=\"text\" name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" value=\"{% if account_custom_field[custom_field.custom_field_id] %}{{ account_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
              <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}

          {% if custom_field.type == 'textarea' %}
            <div class=\"col mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <textarea name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" rows=\"5\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\">{% if account_custom_field[custom_field.custom_field_id] %}{{ account_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}</textarea>
              <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}

          {% if custom_field.type == 'file' %}
            <div class=\"col mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label>
              <div>
                <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"{{ upload }}\" data-oc-size-max=\"{{ config_file_max_size }}\" data-oc-size-error=\"{{ error_upload_size }}\" data-oc-target=\"#input-custom-field-{{ custom_field.custom_field_id }}\" class=\"btn btn-light\"><i class=\"fa-solid fa-upload\"></i> {{ button_upload }}</button>
                <input type=\"hidden\" name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" value=\"{% if account_custom_field[custom_field.custom_field_id] %}{{ account_custom_field[custom_field.custom_field_id] }}{% endif %}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\"/>
              </div>
              <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}

          {% if custom_field.type == 'date' %}
            <div class=\"col mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <input type=\"date\" name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" value=\"{% if account_custom_field[custom_field.custom_field_id] %}{{ account_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
              <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}

          {% if custom_field.type == 'time' %}
            <div class=\"col mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <input type=\"time\" name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" value=\"{% if account_custom_field[custom_field.custom_field_id] %}{{ account_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
              <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}

          {% if custom_field.type == 'datetime' %}
            <div class=\"col mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <input type=\"datetime-local\" name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" value=\"{% if account_custom_field[custom_field.custom_field_id] %}{{ account_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
              <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}

        {% endif %}
      {% endfor %}
    </div>
  </fieldset>
  {% if config_checkout_payment_address %}
    <fieldset>
      <legend>{{ text_payment_address }}</legend>
      <div class=\"row row-cols-1 row-cols-md-2\">
        <div class=\"col mb-3\">
          <label for=\"input-payment-company\" class=\"form-label\">{{ entry_company }}</label> <input type=\"text\" name=\"payment_company\" value=\"{{ payment_company }}\" placeholder=\"{{ entry_company }}\" id=\"input-payment-company\" class=\"form-control\"/>
        </div>
        <div class=\"col mb-3\">
          <label for=\"input-payment-address-1\" class=\"form-label\">{{ entry_address_1 }}</label> <input type=\"text\" name=\"payment_address_1\" value=\"{{ payment_address_1 }}\" placeholder=\"{{ entry_address_1 }}\" id=\"input-payment-address-1\" class=\"form-control\" required/>
          <div id=\"error-payment-address-1\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3\">
          <label for=\"input-payment-address-2\" class=\"form-label\">{{ entry_address_2 }}</label> <input type=\"text\" name=\"payment_address_2\" value=\"{{ payment_address_2 }}\" placeholder=\"{{ entry_address_2 }}\" id=\"input-payment-address-2\" class=\"form-control\"/>
        </div>
        <div class=\"col mb-3\">
          <label for=\"input-payment-city\" class=\"form-label\">{{ entry_city }}</label> <input type=\"text\" name=\"payment_city\" value=\"{{ payment_city }}\" placeholder=\"{{ entry_city }}\" id=\"input-payment-city\" class=\"form-control\" required/>
          <div id=\"error-payment-city\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3\">
          <label for=\"input-payment-postcode\" class=\"form-label\">{{ entry_postcode }}</label> <input type=\"text\" name=\"payment_postcode\" value=\"{{ payment_postcode }}\" placeholder=\"{{ entry_postcode }}\" id=\"input-payment-postcode\" class=\"form-control\" required/>
          <div id=\"error-payment-postcode\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3\">
          <label for=\"input-payment-country\" class=\"form-label\">{{ entry_country }}</label>
          <x-country name=\"payment_country_id\" value=\"{{ payment_country_id }}\" id=\"x-payment-country\" postcode=\"1\" target=\"input-payment-postcode\" input-id=\"input-payment-country\" input-class=\"form-select\" required>
            <option value=\"0\">{{ text_select }}</option>
          </x-country>
          <div id=\"error-payment-country\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3\">
          <label for=\"input-payment-zone\" class=\"form-label\">{{ entry_zone }}</label>
          <x-zone name=\"payment_zone_id\" value=\"{{ payment_zone_id }}\" target=\"x-payment-country\" input-id=\"input-payment-zone\" input-class=\"form-select\" required>
            <option value=\"0\">{{ text_select }}</option>
          </x-zone>
          <div id=\"error-payment-zone\" class=\"invalid-feedback\"></div>
        </div>
        {% for custom_field in custom_fields %}
          {% if custom_field.location == 'address' %}

            {% if custom_field.type == 'select' %}
              <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
                <label for=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <select name=\"payment_custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-select\">
                  <option value=\"\">{{ text_select }}</option>
                  {% for custom_field_value in custom_field.custom_field_value %}
                    <option value=\"{{ custom_field_value.custom_field_value_id }}\"{% if payment_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == payment_custom_field[custom_field.custom_field_id] %} selected{% endif %}>{{ custom_field_value.name }}</option>
                  {% endfor %}
                </select>
                <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
              </div>
            {% endif %}

            {% if custom_field.type == 'radio' %}
              <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
                <label class=\"form-label\">{{ custom_field.name }}</label>
                <div id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\">
                  {% for custom_field_value in custom_field.custom_field_value %}
                    <div class=\"form-check\">
                      <input type=\"radio\" name=\"payment_custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" value=\"{{ custom_field_value.custom_field_value_id }}\" id=\"input-payment-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-input\"{% if payment_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == payment_custom_field[custom_field.custom_field_id] %} checked{% endif %}/> <label for=\"input-payment-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-label\">{{ custom_field_value.name }}</label>
                    </div>
                  {% endfor %}
                </div>
                <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
              </div>
            {% endif %}
            {% if custom_field.type == 'checkbox' %}
              <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
                <label class=\"form-label\">{{ custom_field.name }}</label>
                <div id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\">
                  {% for custom_field_value in custom_field.custom_field_value %}
                    <div class=\"form-check\">
                      <input type=\"checkbox\" name=\"payment_custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}][]\" value=\"{{ custom_field_value.custom_field_value_id }}\" id=\"input-payment-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-input\"{% if address_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in address_custom_field[custom_field.custom_field_id] %} checked{% endif %}/> <label for=\"input-payment-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-label\">{{ custom_field_value.name }}</label>
                    </div>
                  {% endfor %}
                </div>
                <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
              </div>
            {% endif %}
            {% if custom_field.type == 'text' %}
              <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
                <label for=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <input type=\"text\" name=\"payment_custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" value=\"{% if address_custom_field[custom_field.custom_field_id] %}{{ address_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" placeholder=\"{{ custom_field.name }}\" id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
              </div>
            {% endif %}
            {% if custom_field.type == 'textarea' %}
              <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
                <label for=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <textarea name=\"payment_custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" rows=\"5\" placeholder=\"{{ custom_field.name }}\" id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\">{% if address_custom_field[custom_field.custom_field_id] %}{{ address_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}</textarea>
                <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
              </div>
            {% endif %}
            {% if custom_field.type == 'file' %}
              <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
                <label class=\"form-label\">{{ custom_field.name }}</label>
                <div>
                  <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"{{ upload }}\" data-oc-size-max=\"{{ config_file_max_size }}\" data-oc-size-error=\"{{ error_upload_size }}\" data-oc-target=\"#input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"btn btn-light\"><i class=\"fa-solid fa-upload\"></i> {{ button_upload }}</button>
                  <input type=\"hidden\" name=\"payment_custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" value=\"{% if payment_custom_field[custom_field.custom_field_id] %}{{ payment_custom_field[custom_field.custom_field_id] }}{% endif %}\" id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\"/>
                </div>
                <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
              </div>
            {% endif %}
            {% if custom_field.type == 'date' %}
              <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
                <label for=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <input type=\"date\" name=\"payment_custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" value=\"{% if payment_custom_field[custom_field.custom_field_id] %}{{ payment_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" placeholder=\"{{ custom_field.name }}\" id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
              </div>
            {% endif %}
            {% if custom_field.type == 'time' %}
              <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
                <label for=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <input type=\"time\" name=\"payment_custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" value=\"{% if payment_custom_field[custom_field.custom_field_id] %}{{ payment_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" placeholder=\"{{ custom_field.name }}\" id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
              </div>
            {% endif %}

            {% if custom_field.type == 'datetime' %}
              <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
                <label for=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <input type=\"datetime-local\" name=\"payment_custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" value=\"{% if payment_custom_field[custom_field.custom_field_id] %}{{ payment_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" placeholder=\"{{ custom_field.name }}\" id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
              </div>
            {% endif %}

          {% endif %}
        {% endfor %}

        {% if shipping_required %}
          <div class=\"col mb-3\">
            <x-switch name=\"address_match\" value=\"1\" checked=\"{{ address_match }}\" input-id=\"input-address-match\" input-class=\"form-switch form-switch-lg form-check-inline me-0\"></x-switch>
            <label for=\"input-address-match\" class=\"form-check-label\">{{ entry_match }}</label>
          </div>
        {% endif %}

      </div>
    </fieldset>
  {% endif %}
  <fieldset id=\"shipping-address\" style=\"display: {% if not config_checkout_payment_address %}block{% else %}none{% endif %};\">
    <legend>{{ text_shipping_address }}</legend>
    <div class=\"row row-cols-1 row-cols-md-2\">
      {% if config_checkout_payment_address %}
        <div class=\"col mb-3\">
          <label for=\"input-shipping-firstname\" class=\"form-label\">{{ entry_firstname }}</label> <input type=\"text\" name=\"shipping_firstname\" value=\"{{ shipping_firstname }}\" placeholder=\"{{ entry_firstname }}\" id=\"input-shipping-firstname\" class=\"form-control\" required/>
          <div id=\"error-shipping-firstname\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3\">
          <label for=\"input-shipping-lastname\" class=\"form-label\">{{ entry_lastname }}</label> <input type=\"text\" name=\"shipping_lastname\" value=\"{{ shipping_lastname }}\" placeholder=\"{{ entry_lastname }}\" id=\"input-shipping-lastname\" class=\"form-control\" required/>
          <div id=\"error-shipping-lastname\" class=\"invalid-feedback\"></div>
        </div>
      {% endif %}
      <div class=\"col mb-3\">
        <label for=\"input-shipping-company\" class=\"form-label\">{{ entry_company }}</label> <input type=\"text\" name=\"shipping_company\" value=\"{{ shipping_company }}\" placeholder=\"{{ entry_company }}\" id=\"input-shipping-company\" class=\"form-control\"/>
      </div>
      <div class=\"col mb-3\">
        <label for=\"input-shipping-address-1\" class=\"form-label\">{{ entry_address_1 }}</label> <input type=\"text\" name=\"shipping_address_1\" value=\"{{ shipping_address_1 }}\" placeholder=\"{{ entry_address_1 }}\" id=\"input-shipping-address-1\" class=\"form-control\" required/>
        <div id=\"error-shipping-address-1\" class=\"invalid-feedback\"></div>
      </div>
      <div class=\"col mb-3\">
        <label for=\"input-shipping-address-2\" class=\"form-label\">{{ entry_address_2 }}</label> <input type=\"text\" name=\"shipping_address_2\" value=\"{{ shipping_address_2 }}\" placeholder=\"{{ entry_address_2 }}\" id=\"input-shipping-address-2\" class=\"form-control\"/>
      </div>
      <div class=\"col mb-3\">
        <label for=\"input-shipping-city\" class=\"form-label\">{{ entry_city }}</label> <input type=\"text\" name=\"shipping_city\" value=\"{{ shipping_city }}\" placeholder=\"{{ entry_city }}\" id=\"input-shipping-city\" class=\"form-control\" required/>
        <div id=\"error-shipping-city\" class=\"invalid-feedback\"></div>
      </div>
      <div class=\"col mb-3\">
        <label for=\"input-shipping-postcode\" class=\"form-label\">{{ entry_postcode }}</label> <input type=\"text\" name=\"shipping_postcode\" value=\"{{ shipping_postcode }}\" placeholder=\"{{ entry_postcode }}\" id=\"input-shipping-postcode\" class=\"form-control\" required/>
        <div id=\"error-shipping-postcode\" class=\"invalid-feedback\"></div>
      </div>
      <div class=\"col mb-3\">
        <label for=\"input-shipping-country\" class=\"form-label\">{{ entry_country }}</label>
        <x-country name=\"shipping_country_id\" value=\"{{ shipping_country_id }}\" id=\"x-shipping-country\" postcode=\"1\" target=\"input-shipping-postcode\" input-id=\"input-shipping-country\" input-class=\"form-select\" required>
          <option value=\"0\">{{ text_select }}</option>
        </x-country>
        <div id=\"error-shipping-country\" class=\"invalid-feedback\"></div>
      </div>
      <div class=\"col mb-3\">
        <label for=\"input-shipping-zone\" class=\"form-label\">{{ entry_zone }}</label>
        <x-zone name=\"shipping_zone_id\" value=\"{{ shipping_zone_id }}\" target=\"x-shipping-country\" input-id=\"input-shipping-zone\" input-class=\"form-select\" required>
          <option value=\"0\">{{ text_select }}</option>
        </x-zone>
        <div id=\"error-shipping-zone\" class=\"invalid-feedback\"></div>
      </div>
      {% for custom_field in custom_fields %}
        {% if custom_field.location == 'address' %}

          {% if custom_field.type == 'select' %}
            <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label for=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <select name=\"shipping_custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" id=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-select\">
                <option value=\"\">{{ text_select }}</option>
                {% for custom_field_value in custom_field.custom_field_value %}
                  <option value=\"{{ custom_field_value.custom_field_value_id }}\"{% if shipping_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == shipping_custom_field[custom_field.custom_field_id] %} selected{% endif %}>{{ custom_field_value.name }}</option>
                {% endfor %}
              </select>
              <div id=\"error-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}

          {% if custom_field.type == 'radio' %}
            <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label class=\"form-label\">{{ custom_field.name }}</label>
              <div id=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\">
                {% for custom_field_value in custom_field.custom_field_value %}
                  <div class=\"form-check\">
                    <input type=\"radio\" name=\"shipping_custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" value=\"{{ custom_field_value.custom_field_value_id }}\" id=\"input-shipping-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-input\"{% if shipping_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in shipping_custom_field[custom_field.custom_field_id] %} checked{% endif %}/> <label for=\"input-shipping-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-label\">{{ custom_field_value.name }}</label>
                  </div>
                {% endfor %}
              </div>
              <div id=\"error-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}

          {% if custom_field.type == 'checkbox' %}
            <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label class=\"form-label\">{{ custom_field.name }}</label>
              <div id=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\">
                {% for custom_field_value in custom_field.custom_field_value %}
                  <div class=\"form-check\">
                    <input type=\"checkbox\" name=\"shipping_custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}][]\" value=\"{{ custom_field_value.custom_field_value_id }}\" id=\"input-shipping-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-input\"{% if shipping_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in shipping_custom_field[custom_field.custom_field_id] %} checked{% endif %}/> <label for=\"input-shipping-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-label\">{{ custom_field_value.name }}</label>
                  </div>
                {% endfor %}
              </div>
              <div id=\"error-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}

          {% if custom_field.type == 'text' %}
            <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label for=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <input type=\"text\" name=\"shipping_custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" value=\"{% if shipping_custom_field[custom_field.custom_field_id] %}{{ shipping_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" placeholder=\"{{ custom_field.name }}\" id=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
              <div id=\"error-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}

          {% if custom_field.type == 'textarea' %}
            <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label for=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <textarea name=\"shipping_custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" rows=\"5\" placeholder=\"{% if shipping_custom_field[custom_field.custom_field_id] %}{{ shipping_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" id=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\">{{ custom_field.value }}</textarea>
              <div id=\"error-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}
          {% if custom_field.type == 'file' %}
            <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label class=\"form-label\">{{ custom_field.name }}</label>
              <div>
                <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"{{ upload }}\" data-oc-size-max=\"{{ config_file_max_size }}\" data-oc-size-error=\"{{ error_upload_size }}\" data-oc-target=\"#input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"btn btn-light\"><i class=\"fa-solid fa-upload\"></i> {{ button_upload }}</button>
                <input type=\"hidden\" name=\"shipping_custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" value=\"{% if shipping_custom_field[custom_field.custom_field_id] %}{{ shipping_custom_field[custom_field.custom_field_id] }}{% endif %}\" id=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\"/>
                <div id=\"error-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
              </div>
            </div>
          {% endif %}

          {% if custom_field.type == 'date' %}
            <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label for=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <input type=\"date\" name=\"shipping_custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" value=\"{% if shipping_custom_field[custom_field.custom_field_id] %}{{ shipping_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" placeholder=\"{{ custom_field.name }}\" id=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
              <div id=\"error-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}

          {% if custom_field.type == 'time' %}
            <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label for=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <input type=\"time\" name=\"shipping_custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" value=\"{% if shipping_custom_field[custom_field.custom_field_id] %}{{ shipping_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" placeholder=\"{{ custom_field.name }}\" id=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
              <div id=\"error-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}

          {% if custom_field.type == 'datetime' %}
            <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label for=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <input type=\"datetime-local\" name=\"shipping_custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" value=\"{% if shipping_custom_field[custom_field.custom_field_id] %}{{ shipping_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" placeholder=\"{{ custom_field.name }}\" id=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
              <div id=\"error-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}
        {% endif %}
      {% endfor %}
    </div>
  </fieldset>
  <div class=\"row row-cols-1 row-cols-md-2\">
    <div id=\"password\" class=\"col mb-2\">
      <fieldset>
        <legend>{{ text_your_password }}</legend>
        <div class=\"row\">
          <div class=\"col mb-3\">
            <label for=\"input-password\" class=\"form-label\">{{ entry_password }}</label> <input type=\"password\" name=\"password\" value=\"\" placeholder=\"{{ entry_password }}\" id=\"input-password\" class=\"form-control\" required/>
            <div id=\"error-password\" class=\"invalid-feedback\"></div>
          </div>
        </div>
      </fieldset>
    </div>
    <div class=\"col mb-3\">{{ captcha }}</div>
  </div>
  <div class=\"mb-3\">
    <div>
      <x-switch name=\"agree\" value=\"0\" input-id=\"input-newsletter\" input-class=\"form-switch form-switch-lg form-check-inline me-0\"></x-switch>
      <label for=\"input-newsletter\" class=\"form-check-label\">{{ entry_newsletter }}</label>
    </div>
    {% if text_agree %}
      <div>
        <x-switch name=\"agree\" value=\"1\" checked=\"{{ agree }}\" input-id=\"input-register-agree\" input-class=\"form-switch form-switch-lg form-check-inline me-0\"></x-switch>
        <label for=\"input-register-agree\" class=\"form-check-label\">{{ text_agree }}</label>
      </div>
    {% endif %}
  </div>
  <button type=\"submit\" id=\"button-register\" class=\"btn btn-primary mt-2\">{{ button_continue }}</button>
</form>
", "catalog/view/template/checkout/register.twig", "/var/www/opencart/catalog/view/template/checkout/register.twig");
    }
}
