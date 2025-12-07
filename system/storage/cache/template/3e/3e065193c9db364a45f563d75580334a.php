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

/* admin/view/template/catalog/product_form.twig */
class __TwigTemplate_9c4d5c922744e54f904be561a8031919 extends Template
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
        yield ($context["header"] ?? null);
        yield ($context["column_left"] ?? null);
        yield "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-product\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        yield ($context["button_save"] ?? null);
        yield "\" class=\"btn btn-primary btn-lg\"><i class=\"fa-solid fa-floppy-disk\"></i> Save Product</button>
        <a href=\"";
        // line 7
        yield ($context["back"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_back"] ?? null);
        yield "\" class=\"btn btn-light btn-lg\"><i class=\"fa-solid fa-reply\"></i> Back</a>
      </div>
      <h1>";
        // line 9
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            yield "          <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        yield "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 18
        if (($context["master_id"] ?? null)) {
            // line 19
            yield "      <div class=\"alert alert-warning\"><i class=\"fa-solid fa-circle-exclamation\"></i> ";
            yield ($context["text_variant"] ?? null);
            yield "</div>
    ";
        }
        // line 21
        yield "    <div class=\"card product-form-card\">
      <div class=\"card-header\">
        <h2 class=\"mb-0\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 23
        yield ($context["text_form"] ?? null);
        yield "</h2>
      </div>
      <div class=\"card-body\">
        <form id=\"form-product\" action=\"";
        // line 26
        yield ($context["save"] ?? null);
        yield "\" method=\"post\" data-oc-toggle=\"ajax\">
          <ul class=\"nav nav-tabs product-form-tabs\">
            <li class=\"nav-item\"><a href=\"#tab-general\" data-bs-toggle=\"tab\" class=\"nav-link active\"><i class=\"fa-solid fa-file-lines\"></i> General Information</a></li>
            <li class=\"nav-item\"><a href=\"#tab-data\" data-bs-toggle=\"tab\" class=\"nav-link\"><i class=\"fa-solid fa-dollar-sign\"></i> Price & Stock</a></li>
            <li class=\"nav-item\"><a href=\"#tab-image\" data-bs-toggle=\"tab\" class=\"nav-link\"><i class=\"fa-solid fa-image\"></i> Images</a></li>
          </ul>
          <div class=\"tab-content product-form-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <div class=\"form-section\">
                <ul class=\"nav nav-tabs language-tabs\">
                  ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 37
            yield "                    <li class=\"nav-item\"><a href=\"#language-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 37);
            yield "\" data-bs-toggle=\"tab\" class=\"nav-link";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 37)) {
                yield " active";
            }
            yield "\"><img src=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 37);
            yield "\" title=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 37);
            yield "\"/> ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 37);
            yield "</a></li>
                  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "                </ul>
                <div class=\"tab-content language-content\">
                  ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 42
            yield "                    <div id=\"language-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 42);
            yield "\" class=\"tab-pane";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 42)) {
                yield " active";
            }
            yield "\">
                      <div class=\"form-field-group\">
                        <label for=\"input-name-";
            // line 44
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 44);
            yield "\" class=\"form-label required\">
                          <i class=\"fa-solid fa-tag\"></i> Product Name
                          <span class=\"text-danger\">*</span>
                        </label>
                        <input type=\"text\" name=\"product_description[";
            // line 48
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 48);
            yield "][name]\" value=\"";
            yield (((($_v0 = ($context["product_description"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 48)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v1 = ($context["product_description"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 48)] ?? null) : null), "name", [], "any", false, false, false, 48)) : (""));
            yield "\" placeholder=\"Enter product name\" id=\"input-name-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 48);
            yield "\" class=\"form-control form-control-lg\"/>
                        <div class=\"form-help\">Enter the product name. This will be displayed on the product page and in product listings.</div>
                        <div id=\"error-name-";
            // line 50
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 50);
            yield "\" class=\"invalid-feedback\"></div>
                      </div>
                      <div class=\"form-field-group\">
                        <label for=\"input-description-";
            // line 53
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 53);
            yield "\" class=\"form-label\">
                          <i class=\"fa-solid fa-align-left\"></i> Description
                        </label>
                        <div class=\"description-wrapper\">
                          <textarea name=\"product_description[";
            // line 57
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 57);
            yield "][description]\" placeholder=\"Enter product description\" id=\"input-description-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 57);
            yield "\" data-oc-toggle=\"ckeditor\" data-lang=\"";
            yield ($context["ckeditor"] ?? null);
            yield "\" class=\"form-control description-textarea\" rows=\"12\">";
            yield (((($_v2 = ($context["product_description"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 57)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v3 = ($context["product_description"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 57)] ?? null) : null), "description", [], "any", false, false, false, 57)) : (""));
            yield "</textarea>
                        </div>
                        <div class=\"form-help\">Enter a detailed description of the product. Include features, specifications, and any important information customers should know.</div>
                      </div>
                    </div>
                  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        yield "                </div>
              </div>
            </div>
            <div id=\"tab-data\" class=\"tab-pane\">
              <input type=\"hidden\" name=\"master_id\" value=\"";
        // line 67
        yield ($context["master_id"] ?? null);
        yield "\"/>
              <div class=\"form-section\">
                <div class=\"form-grid\">
                  <div class=\"form-field-group\">
                    <label for=\"input-price\" class=\"form-label required\">
                      <i class=\"fa-solid fa-dollar-sign\"></i> Price
                      <span class=\"text-muted\">(per unit)</span>
                    </label>
                    <div class=\"input-with-icon\">
                      <span class=\"input-icon\">\$</span>
                      <input type=\"text\" name=\"price\" value=\"";
        // line 77
        yield ($context["price"] ?? null);
        yield "\" placeholder=\"0.00\" id=\"input-price\" class=\"form-control form-control-lg\"/>
                    </div>
                    <div class=\"form-help\">Enter the product price per unit. Use decimal format (e.g., 99.99).</div>
                  </div>
                  <div class=\"form-field-group\">
                    <label for=\"input-quantity\" class=\"form-label required\">
                      <i class=\"fa-solid fa-boxes-stacked\"></i> Quantity in Stock
                    </label>
                    <input type=\"number\" name=\"quantity\" value=\"";
        // line 85
        yield ($context["quantity"] ?? null);
        yield "\" placeholder=\"0\" id=\"input-quantity\" class=\"form-control form-control-lg\" min=\"0\"/>
                    <div class=\"form-help\">Enter the number of items available in stock. Set to 0 if out of stock.</div>
                  </div>
                </div>
                <div class=\"form-field-group status-field\">
                  <label class=\"form-label\">
                    <i class=\"fa-solid fa-toggle-on\"></i> Product Status
                  </label>
                  <div class=\"status-switch-wrapper\">
                    <div class=\"form-check form-switch form-switch-custom\">
                      <input type=\"hidden\" name=\"status\" value=\"0\"/> 
                      <input type=\"checkbox\" name=\"status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"";
        // line 96
        if (($context["status"] ?? null)) {
            yield " checked";
        }
        yield "/>
                      <label for=\"input-status\" class=\"form-check-label\">
                        <span class=\"status-label-text\">
                          ";
        // line 99
        if (($context["status"] ?? null)) {
            // line 100
            yield "                            <span class=\"status-enabled\"><i class=\"fa-solid fa-check-circle\"></i> Enabled</span>
                            <span class=\"status-description\">Product is visible in store</span>
                          ";
        } else {
            // line 103
            yield "                            <span class=\"status-disabled\"><i class=\"fa-solid fa-times-circle\"></i> Disabled</span>
                            <span class=\"status-description\">Product is hidden from store</span>
                          ";
        }
        // line 106
        yield "                        </span>
                      </label>
                    </div>
                  </div>
                  <div class=\"form-help\">Enable or disable the product. Disabled products are not visible to customers.</div>
                </div>
              </div>
            </div>
            <div id=\"tab-image\" class=\"tab-pane\">
              <div class=\"form-section\">
                <div class=\"form-field-group\">
                  <label class=\"form-label\">
                    <i class=\"fa-solid fa-image\"></i> Main Product Image
                  </label>
                  <div class=\"image-upload-wrapper\">
                    <div id=\"image\" class=\"image-preview-card\">
                      <div class=\"image-preview\">
                        <img src=\"";
        // line 123
        yield ($context["thumb"] ?? null);
        yield "\" alt=\"\" title=\"\" id=\"thumb-image\" data-oc-placeholder=\"";
        yield ($context["placeholder"] ?? null);
        yield "\" class=\"preview-img\"/> 
                        <input type=\"hidden\" name=\"image\" value=\"";
        // line 124
        yield ($context["image"] ?? null);
        yield "\" id=\"input-image\"/>
                        <div class=\"image-overlay\">
                          <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-primary btn-sm\"><i class=\"fa-solid fa-upload\"></i> Change</button>
                          <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-danger btn-sm\"><i class=\"fa-regular fa-trash-can\"></i> Remove</button>
                        </div>
                      </div>
                    </div>
                    <div class=\"form-help\">Upload the main product image. This will be displayed as the primary product image.</div>
                  </div>
                </div>
                <div class=\"form-field-group\">
                  <label class=\"form-label\">
                    <i class=\"fa-solid fa-images\"></i> Additional Product Images
                  </label>
                  <div class=\"additional-images-grid\" id=\"product-image-grid\">
                    ";
        // line 139
        $context["image_row"] = 0;
        // line 140
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["product_images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_image"]) {
            // line 141
            yield "                      <div class=\"image-item-card\" id=\"product-image-row-";
            yield ($context["image_row"] ?? null);
            yield "\">
                        <div class=\"image-item-preview\">
                          <img src=\"";
            // line 143
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_image"], "thumb", [], "any", false, false, false, 143);
            yield "\" alt=\"\" title=\"\" id=\"product-image-";
            yield ($context["image_row"] ?? null);
            yield "\" data-oc-placeholder=\"";
            yield ($context["placeholder"] ?? null);
            yield "\" class=\"preview-img\"/> 
                          <input type=\"hidden\" name=\"product_image[";
            // line 144
            yield ($context["image_row"] ?? null);
            yield "][image]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_image"], "image", [], "any", false, false, false, 144);
            yield "\" id=\"input-product-image-";
            yield ($context["image_row"] ?? null);
            yield "\"/>
                          <div class=\"image-item-overlay\">
                            <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-product-image-";
            // line 146
            yield ($context["image_row"] ?? null);
            yield "\" data-oc-thumb=\"#product-image-";
            yield ($context["image_row"] ?? null);
            yield "\" class=\"btn btn-primary btn-sm\"><i class=\"fa-solid fa-upload\"></i></button>
                            <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-product-image-";
            // line 147
            yield ($context["image_row"] ?? null);
            yield "\" data-oc-thumb=\"#product-image-";
            yield ($context["image_row"] ?? null);
            yield "\" class=\"btn btn-danger btn-sm\"><i class=\"fa-regular fa-trash-can\"></i></button>
                          </div>
                        </div>
                        <div class=\"image-item-controls\">
                          <input type=\"number\" name=\"product_image[";
            // line 151
            yield ($context["image_row"] ?? null);
            yield "][sort_order]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_image"], "sort_order", [], "any", false, false, false, 151);
            yield "\" placeholder=\"Sort order\" class=\"form-control form-control-sm\" min=\"0\"/>
                          <button type=\"button\" onclick=\"\$('#product-image-row-";
            // line 152
            yield ($context["image_row"] ?? null);
            yield "').remove();\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-trash\"></i></button>
                        </div>
                      </div>
                      ";
            // line 155
            $context["image_row"] = (($context["image_row"] ?? null) + 1);
            // line 156
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product_image'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 157
        yield "                  </div>
                  <button type=\"button\" id=\"button-image\" class=\"btn btn-outline-primary mt-3\"><i class=\"fa-solid fa-plus\"></i> Add Image</button>
                  <div class=\"form-help\">Add additional product images. These will be shown in the product gallery.</div>
                </div>
              </div>
            </div>
          </div>
          <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 164
        yield ($context["product_id"] ?? null);
        yield "\" id=\"input-product-id\"/>
          <input type=\"hidden\" name=\"user_token\" value=\"";
        // line 165
        yield ($context["user_token"] ?? null);
        yield "\" id=\"input-user-token\"/>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
var image_row = ";
        // line 172
        yield ($context["image_row"] ?? null);
        yield ";

\$('#button-image').on('click', function() {
    html = '<div class=\"image-item-card\" id=\"product-image-row-' + image_row + '\">';
    html += '  <div class=\"image-item-preview\">';
    html += '    <img src=\"";
        // line 177
        yield ($context["placeholder"] ?? null);
        yield "\" alt=\"\" title=\"\" id=\"product-image-' + image_row + '\" data-oc-placeholder=\"";
        yield ($context["placeholder"] ?? null);
        yield "\" class=\"preview-img\"/>';
    html += '    <input type=\"hidden\" name=\"product_image[' + image_row + '][image]\" value=\"\" id=\"input-product-image-' + image_row + '\"/>';
    html += '    <div class=\"image-item-overlay\">';
    html += '      <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-product-image-' + image_row + '\" data-oc-thumb=\"#product-image-' + image_row + '\" class=\"btn btn-primary btn-sm\"><i class=\"fa-solid fa-upload\"></i></button>';
    html += '      <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-product-image-' + image_row + '\" data-oc-thumb=\"#product-image-' + image_row + '\" class=\"btn btn-danger btn-sm\"><i class=\"fa-regular fa-trash-can\"></i></button>';
    html += '    </div>';
    html += '  </div>';
    html += '  <div class=\"image-item-controls\">';
    html += '    <input type=\"number\" name=\"product_image[' + image_row + '][sort_order]\" value=\"\" placeholder=\"Sort order\" class=\"form-control form-control-sm\" min=\"0\"/>';
    html += '    <button type=\"button\" onclick=\"\$(\\'#product-image-row-' + image_row + '\\').remove();\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-trash\"></i></button>';
    html += '  </div>';
    html += '</div>';

    \$('#product-image-grid').append(html);

    image_row++;
});

// Update status label on change
\$('#input-status').on('change', function() {
    var \$label = \$(this).next('label');
    if (\$(this).is(':checked')) {
        \$label.html('<span class=\"status-label-text\"><span class=\"status-enabled\"><i class=\"fa-solid fa-check-circle\"></i> Enabled</span><span class=\"status-description\">Product is visible in store</span></span>');
    } else {
        \$label.html('<span class=\"status-label-text\"><span class=\"status-disabled\"><i class=\"fa-solid fa-times-circle\"></i> Disabled</span><span class=\"status-description\">Product is hidden from store</span></span>');
    }
});
//--></script>
";
        // line 205
        yield ($context["filemanager"] ?? null);
        yield "
";
        // line 206
        yield ($context["footer"] ?? null);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/view/template/catalog/product_form.twig";
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
        return array (  489 => 206,  485 => 205,  452 => 177,  444 => 172,  434 => 165,  430 => 164,  421 => 157,  415 => 156,  413 => 155,  407 => 152,  401 => 151,  392 => 147,  386 => 146,  377 => 144,  369 => 143,  363 => 141,  358 => 140,  356 => 139,  338 => 124,  332 => 123,  313 => 106,  308 => 103,  303 => 100,  301 => 99,  293 => 96,  279 => 85,  268 => 77,  255 => 67,  249 => 63,  223 => 57,  216 => 53,  210 => 50,  201 => 48,  194 => 44,  184 => 42,  167 => 41,  163 => 39,  136 => 37,  119 => 36,  106 => 26,  100 => 23,  96 => 21,  90 => 19,  88 => 18,  82 => 14,  71 => 12,  67 => 11,  62 => 9,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-product\" data-bs-toggle=\"tooltip\" title=\"{{ button_save }}\" class=\"btn btn-primary btn-lg\"><i class=\"fa-solid fa-floppy-disk\"></i> Save Product</button>
        <a href=\"{{ back }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_back }}\" class=\"btn btn-light btn-lg\"><i class=\"fa-solid fa-reply\"></i> Back</a>
      </div>
      <h1>{{ heading_title }}</h1>
      <ol class=\"breadcrumb\">
        {% for breadcrumb in breadcrumbs %}
          <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
        {% endfor %}
      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    {% if master_id %}
      <div class=\"alert alert-warning\"><i class=\"fa-solid fa-circle-exclamation\"></i> {{ text_variant }}</div>
    {% endif %}
    <div class=\"card product-form-card\">
      <div class=\"card-header\">
        <h2 class=\"mb-0\"><i class=\"fa-solid fa-pencil\"></i> {{ text_form }}</h2>
      </div>
      <div class=\"card-body\">
        <form id=\"form-product\" action=\"{{ save }}\" method=\"post\" data-oc-toggle=\"ajax\">
          <ul class=\"nav nav-tabs product-form-tabs\">
            <li class=\"nav-item\"><a href=\"#tab-general\" data-bs-toggle=\"tab\" class=\"nav-link active\"><i class=\"fa-solid fa-file-lines\"></i> General Information</a></li>
            <li class=\"nav-item\"><a href=\"#tab-data\" data-bs-toggle=\"tab\" class=\"nav-link\"><i class=\"fa-solid fa-dollar-sign\"></i> Price & Stock</a></li>
            <li class=\"nav-item\"><a href=\"#tab-image\" data-bs-toggle=\"tab\" class=\"nav-link\"><i class=\"fa-solid fa-image\"></i> Images</a></li>
          </ul>
          <div class=\"tab-content product-form-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <div class=\"form-section\">
                <ul class=\"nav nav-tabs language-tabs\">
                  {% for language in languages %}
                    <li class=\"nav-item\"><a href=\"#language-{{ language.language_id }}\" data-bs-toggle=\"tab\" class=\"nav-link{% if loop.first %} active{% endif %}\"><img src=\"{{ language.image }}\" title=\"{{ language.name }}\"/> {{ language.name }}</a></li>
                  {% endfor %}
                </ul>
                <div class=\"tab-content language-content\">
                  {% for language in languages %}
                    <div id=\"language-{{ language.language_id }}\" class=\"tab-pane{% if loop.first %} active{% endif %}\">
                      <div class=\"form-field-group\">
                        <label for=\"input-name-{{ language.language_id }}\" class=\"form-label required\">
                          <i class=\"fa-solid fa-tag\"></i> Product Name
                          <span class=\"text-danger\">*</span>
                        </label>
                        <input type=\"text\" name=\"product_description[{{ language.language_id }}][name]\" value=\"{{ product_description[language.language_id] ? product_description[language.language_id].name }}\" placeholder=\"Enter product name\" id=\"input-name-{{ language.language_id }}\" class=\"form-control form-control-lg\"/>
                        <div class=\"form-help\">Enter the product name. This will be displayed on the product page and in product listings.</div>
                        <div id=\"error-name-{{ language.language_id }}\" class=\"invalid-feedback\"></div>
                      </div>
                      <div class=\"form-field-group\">
                        <label for=\"input-description-{{ language.language_id }}\" class=\"form-label\">
                          <i class=\"fa-solid fa-align-left\"></i> Description
                        </label>
                        <div class=\"description-wrapper\">
                          <textarea name=\"product_description[{{ language.language_id }}][description]\" placeholder=\"Enter product description\" id=\"input-description-{{ language.language_id }}\" data-oc-toggle=\"ckeditor\" data-lang=\"{{ ckeditor }}\" class=\"form-control description-textarea\" rows=\"12\">{{ product_description[language.language_id] ? product_description[language.language_id].description }}</textarea>
                        </div>
                        <div class=\"form-help\">Enter a detailed description of the product. Include features, specifications, and any important information customers should know.</div>
                      </div>
                    </div>
                  {% endfor %}
                </div>
              </div>
            </div>
            <div id=\"tab-data\" class=\"tab-pane\">
              <input type=\"hidden\" name=\"master_id\" value=\"{{ master_id }}\"/>
              <div class=\"form-section\">
                <div class=\"form-grid\">
                  <div class=\"form-field-group\">
                    <label for=\"input-price\" class=\"form-label required\">
                      <i class=\"fa-solid fa-dollar-sign\"></i> Price
                      <span class=\"text-muted\">(per unit)</span>
                    </label>
                    <div class=\"input-with-icon\">
                      <span class=\"input-icon\">\$</span>
                      <input type=\"text\" name=\"price\" value=\"{{ price }}\" placeholder=\"0.00\" id=\"input-price\" class=\"form-control form-control-lg\"/>
                    </div>
                    <div class=\"form-help\">Enter the product price per unit. Use decimal format (e.g., 99.99).</div>
                  </div>
                  <div class=\"form-field-group\">
                    <label for=\"input-quantity\" class=\"form-label required\">
                      <i class=\"fa-solid fa-boxes-stacked\"></i> Quantity in Stock
                    </label>
                    <input type=\"number\" name=\"quantity\" value=\"{{ quantity }}\" placeholder=\"0\" id=\"input-quantity\" class=\"form-control form-control-lg\" min=\"0\"/>
                    <div class=\"form-help\">Enter the number of items available in stock. Set to 0 if out of stock.</div>
                  </div>
                </div>
                <div class=\"form-field-group status-field\">
                  <label class=\"form-label\">
                    <i class=\"fa-solid fa-toggle-on\"></i> Product Status
                  </label>
                  <div class=\"status-switch-wrapper\">
                    <div class=\"form-check form-switch form-switch-custom\">
                      <input type=\"hidden\" name=\"status\" value=\"0\"/> 
                      <input type=\"checkbox\" name=\"status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"{% if status %} checked{% endif %}/>
                      <label for=\"input-status\" class=\"form-check-label\">
                        <span class=\"status-label-text\">
                          {% if status %}
                            <span class=\"status-enabled\"><i class=\"fa-solid fa-check-circle\"></i> Enabled</span>
                            <span class=\"status-description\">Product is visible in store</span>
                          {% else %}
                            <span class=\"status-disabled\"><i class=\"fa-solid fa-times-circle\"></i> Disabled</span>
                            <span class=\"status-description\">Product is hidden from store</span>
                          {% endif %}
                        </span>
                      </label>
                    </div>
                  </div>
                  <div class=\"form-help\">Enable or disable the product. Disabled products are not visible to customers.</div>
                </div>
              </div>
            </div>
            <div id=\"tab-image\" class=\"tab-pane\">
              <div class=\"form-section\">
                <div class=\"form-field-group\">
                  <label class=\"form-label\">
                    <i class=\"fa-solid fa-image\"></i> Main Product Image
                  </label>
                  <div class=\"image-upload-wrapper\">
                    <div id=\"image\" class=\"image-preview-card\">
                      <div class=\"image-preview\">
                        <img src=\"{{ thumb }}\" alt=\"\" title=\"\" id=\"thumb-image\" data-oc-placeholder=\"{{ placeholder }}\" class=\"preview-img\"/> 
                        <input type=\"hidden\" name=\"image\" value=\"{{ image }}\" id=\"input-image\"/>
                        <div class=\"image-overlay\">
                          <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-primary btn-sm\"><i class=\"fa-solid fa-upload\"></i> Change</button>
                          <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-danger btn-sm\"><i class=\"fa-regular fa-trash-can\"></i> Remove</button>
                        </div>
                      </div>
                    </div>
                    <div class=\"form-help\">Upload the main product image. This will be displayed as the primary product image.</div>
                  </div>
                </div>
                <div class=\"form-field-group\">
                  <label class=\"form-label\">
                    <i class=\"fa-solid fa-images\"></i> Additional Product Images
                  </label>
                  <div class=\"additional-images-grid\" id=\"product-image-grid\">
                    {% set image_row = 0 %}
                    {% for product_image in product_images %}
                      <div class=\"image-item-card\" id=\"product-image-row-{{ image_row }}\">
                        <div class=\"image-item-preview\">
                          <img src=\"{{ product_image.thumb }}\" alt=\"\" title=\"\" id=\"product-image-{{ image_row }}\" data-oc-placeholder=\"{{ placeholder }}\" class=\"preview-img\"/> 
                          <input type=\"hidden\" name=\"product_image[{{ image_row }}][image]\" value=\"{{ product_image.image }}\" id=\"input-product-image-{{ image_row }}\"/>
                          <div class=\"image-item-overlay\">
                            <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-product-image-{{ image_row }}\" data-oc-thumb=\"#product-image-{{ image_row }}\" class=\"btn btn-primary btn-sm\"><i class=\"fa-solid fa-upload\"></i></button>
                            <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-product-image-{{ image_row }}\" data-oc-thumb=\"#product-image-{{ image_row }}\" class=\"btn btn-danger btn-sm\"><i class=\"fa-regular fa-trash-can\"></i></button>
                          </div>
                        </div>
                        <div class=\"image-item-controls\">
                          <input type=\"number\" name=\"product_image[{{ image_row }}][sort_order]\" value=\"{{ product_image.sort_order }}\" placeholder=\"Sort order\" class=\"form-control form-control-sm\" min=\"0\"/>
                          <button type=\"button\" onclick=\"\$('#product-image-row-{{ image_row }}').remove();\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-trash\"></i></button>
                        </div>
                      </div>
                      {% set image_row = image_row + 1 %}
                    {% endfor %}
                  </div>
                  <button type=\"button\" id=\"button-image\" class=\"btn btn-outline-primary mt-3\"><i class=\"fa-solid fa-plus\"></i> Add Image</button>
                  <div class=\"form-help\">Add additional product images. These will be shown in the product gallery.</div>
                </div>
              </div>
            </div>
          </div>
          <input type=\"hidden\" name=\"product_id\" value=\"{{ product_id }}\" id=\"input-product-id\"/>
          <input type=\"hidden\" name=\"user_token\" value=\"{{ user_token }}\" id=\"input-user-token\"/>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
var image_row = {{ image_row }};

\$('#button-image').on('click', function() {
    html = '<div class=\"image-item-card\" id=\"product-image-row-' + image_row + '\">';
    html += '  <div class=\"image-item-preview\">';
    html += '    <img src=\"{{ placeholder }}\" alt=\"\" title=\"\" id=\"product-image-' + image_row + '\" data-oc-placeholder=\"{{ placeholder }}\" class=\"preview-img\"/>';
    html += '    <input type=\"hidden\" name=\"product_image[' + image_row + '][image]\" value=\"\" id=\"input-product-image-' + image_row + '\"/>';
    html += '    <div class=\"image-item-overlay\">';
    html += '      <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-product-image-' + image_row + '\" data-oc-thumb=\"#product-image-' + image_row + '\" class=\"btn btn-primary btn-sm\"><i class=\"fa-solid fa-upload\"></i></button>';
    html += '      <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-product-image-' + image_row + '\" data-oc-thumb=\"#product-image-' + image_row + '\" class=\"btn btn-danger btn-sm\"><i class=\"fa-regular fa-trash-can\"></i></button>';
    html += '    </div>';
    html += '  </div>';
    html += '  <div class=\"image-item-controls\">';
    html += '    <input type=\"number\" name=\"product_image[' + image_row + '][sort_order]\" value=\"\" placeholder=\"Sort order\" class=\"form-control form-control-sm\" min=\"0\"/>';
    html += '    <button type=\"button\" onclick=\"\$(\\'#product-image-row-' + image_row + '\\').remove();\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-trash\"></i></button>';
    html += '  </div>';
    html += '</div>';

    \$('#product-image-grid').append(html);

    image_row++;
});

// Update status label on change
\$('#input-status').on('change', function() {
    var \$label = \$(this).next('label');
    if (\$(this).is(':checked')) {
        \$label.html('<span class=\"status-label-text\"><span class=\"status-enabled\"><i class=\"fa-solid fa-check-circle\"></i> Enabled</span><span class=\"status-description\">Product is visible in store</span></span>');
    } else {
        \$label.html('<span class=\"status-label-text\"><span class=\"status-disabled\"><i class=\"fa-solid fa-times-circle\"></i> Disabled</span><span class=\"status-description\">Product is hidden from store</span></span>');
    }
});
//--></script>
{{ filemanager }}
{{ footer }}
", "admin/view/template/catalog/product_form.twig", "/var/www/opencart/admin/view/template/catalog/product_form.twig");
    }
}
