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

/* byte_theme:section */
class __TwigTemplate_91618ecc5225bed2413a6fa3169ea8da extends Template
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
            'background_media_block' => [$this, 'block_background_media_block'],
            'header_slot' => [$this, 'block_header_slot'],
            'main_slot' => [$this, 'block_main_slot'],
            'footer_slot' => [$this, 'block_footer_slot'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.byte_theme--section"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "byte_theme:section"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "byte_theme:section"));
        // line 2
        $context["has_background_image"] = ( !Twig\Extension\CoreExtension::testEmpty(($context["background_media"] ?? null)) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["background_media"] ?? null), "src", [], "any", false, false, true, 2)));
        // line 4
        $context["has_background_image_variant"] = (((($tmp = ($context["has_background_image"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("yes") : ("no"));
        // line 5
        yield "
";
        // line 6
        $context["section"] = Twig\Extra\Html\HtmlExtension::htmlCva(["relative", "flex", "flex-col", "items-stretch", "mx-auto"], ["width" => ["100%" => "lg:max-w-full", "90%" => "lg:max-w-9/10", "80%" => "lg:max-w-8/10", "75%" => "lg:max-w-3/4", "50%" => "lg:max-w-1/2"], "marginBlockStart" => ["0" => "mt-0", "8" => "mt-2", "20" => "mt-5", "32" => "mt-6 md:mt-7 xl:mt-8", "48" => "mt-8 md:mt-10 xl:mt-12", "64" => "mt-10 md:mt-13 xl:mt-16", "96" => "mt-16 md:mt-20 xl:mt-24", "128" => "mt-20 md:mt-24 xl:mt-32"], "marginBlockEnd" => ["0" => "mb-0", "8" => "mb-2", "20" => "mb-5", "32" => "mb-6 md:mb-7 xl:mb-8", "48" => "mb-8 md:mb-10 xl:mb-12", "64" => "mb-10 md:mb-13 xl:mb-16", "96" => "mb-16 md:mb-20 xl:mb-24", "128" => "mb-20 md:mb-24 xl:mb-32"], "paddingBlockStart" => ["0" => "pt-0", "16" => "pt-4", "32" => "pt-6 md:pt-7 xl:pt-8", "64" => "pt-10 md:pt-13 xl:pt-16"], "paddingBlockEnd" => ["0" => "pb-0", "16" => "pb-4", "32" => "pb-6 md:pb-7 xl:pb-8", "64" => "pb-10 md:pb-13 xl:pb-16"], "backgroundColor" => ["primary" => "text-primary-foreground", "secondary" => "text-secondary-foreground", "accent" => "text-accent-foreground", "muted" => "text-muted-foreground", "noColor" => "text-foreground"]]);
        // line 59
        yield "
";
        // line 60
        $context["section_classes"] = CoreExtension::getAttribute($this->env, $this->source,         // line 61
($context["section"] ?? null), "apply", [["marginBlockStart" =>         // line 62
($context["margin_block_start"] ?? null), "marginBlockEnd" =>         // line 63
($context["margin_block_end"] ?? null), "paddingBlockStart" =>         // line 64
($context["padding_block_start"] ?? null), "paddingBlockEnd" =>         // line 65
($context["padding_block_end"] ?? null), "backgroundColor" => ((        // line 66
array_key_exists("background_color", $context)) ? (Twig\Extension\CoreExtension::default(($context["background_color"] ?? null), "noColor")) : ("noColor"))]], "method", false, false, true, 61);
        // line 69
        yield "
";
        // line 70
        $context["section_content"] = CoreExtension::getAttribute($this->env, $this->source,         // line 71
($context["section"] ?? null), "apply", [["width" => ((        // line 72
array_key_exists("width", $context)) ? (Twig\Extension\CoreExtension::default(($context["width"] ?? null), "100%")) : ("100%"))]], "method", false, false, true, 71);
        // line 75
        yield "
";
        // line 76
        $context["background"] = Twig\Extra\Html\HtmlExtension::htmlCva(["absolute", "inset-0", "z-[-1]"], ["backgroundColor" => ["primary" => "bg-primary", "secondary" => "bg-secondary", "accent" => "bg-accent", "muted" => "bg-muted", "noColor" => "bg-none"], "backgroundImage" => ["yes" => "opacity-50", "no" => ""]]);
        // line 94
        yield "
";
        // line 95
        $context["background_classes"] = CoreExtension::getAttribute($this->env, $this->source,         // line 96
($context["background"] ?? null), "apply", [["backgroundColor" => ((        // line 97
array_key_exists("background_color", $context)) ? (Twig\Extension\CoreExtension::default(($context["background_color"] ?? null), "noColor")) : ("noColor")), "backgroundImage" =>         // line 98
($context["has_background_image_variant"] ?? null)]], "method", false, false, true, 96);
        // line 101
        yield "
";
        // line 102
        $context["grid"] = Twig\Extra\Html\HtmlExtension::htmlCva(["grid", "w-full", "gap-4", "md:gap-6", "xl:gap-8", "min-w-0", "[&>*]:w-full", "[&>*]:min-w-0"], ["columns" => ["100" => "grid-cols-1", "50-50" => "md:grid-cols-2", "33-33-33" => "md:grid-cols-3", "75-25" => "md:grid-cols-[minmax(0,3fr)_minmax(0,1fr)]", "25-75" => "md:grid-cols-[minmax(0,1fr)_minmax(0,3fr)]", "67-33" => "md:grid-cols-[minmax(0,2fr)_minmax(0,1fr)]", "33-67" => "md:grid-cols-[minmax(0,1fr)_minmax(0,2fr)]", "50-25-25" => "md:grid-cols-[minmax(0,2fr)_minmax(0,1fr)_minmax(0,1fr)]", "25-25-50" => "md:grid-cols-[minmax(0,1fr)_minmax(0,1fr)_minmax(0,2fr)]", "25-25-25-25" => "grid-cols-1 sm:grid-cols-2 lg:grid-cols-4"], "mobileColumns" => ["1" => "", "2" => "grid-cols-2", "3" => "grid-cols-3"]]);
        // line 126
        yield "
";
        // line 127
        $context["grid_classes"] = CoreExtension::getAttribute($this->env, $this->source,         // line 128
($context["grid"] ?? null), "apply", [["columns" => ((        // line 129
array_key_exists("columns", $context)) ? (Twig\Extension\CoreExtension::default(($context["columns"] ?? null), "100")) : ("100")), "mobileColumns" => ((        // line 130
array_key_exists("mobile_columns", $context)) ? (Twig\Extension\CoreExtension::default(($context["mobile_columns"] ?? null), "1")) : ("1"))]], "method", false, false, true, 128);
        // line 133
        yield "
<section class=\"";
        // line 134
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["section_classes"] ?? null), "html", null, true);
        yield "\">
  ";
        // line 136
        yield "  ";
        if (( !Twig\Extension\CoreExtension::testEmpty(($context["background_media"] ?? null)) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["background_media"] ?? null), "src", [], "any", false, false, true, 136)))) {
            // line 137
            yield "    ";
            yield from $this->unwrap()->yieldBlock('background_media_block', $context, $blocks);
            // line 148
            yield "  ";
        }
        // line 149
        yield "
  ";
        // line 151
        yield "  ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["background_color"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 152
            yield "    <div class=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["background_classes"] ?? null), "html", null, true);
            yield "\"></div>
  ";
        }
        // line 154
        yield "
  <div class=\"container mx-auto px-4\">
    <div class=\"";
        // line 156
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["section_content"] ?? null), "html", null, true);
        yield "\">
      ";
        // line 157
        if ((($tmp = ($context["section_header"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 158
            yield "        ";
            $context["header_content"] = ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
                // line 159
                yield "          ";
                yield from $this->unwrap()->yieldBlock('header_slot', $context, $blocks);
                // line 162
                yield "        ";
                yield from [];
            })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 163
            yield "        ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim(($context["header_content"] ?? null)))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 164
                yield "          <header class=\"mb-6 md:mb-8 xl:mb-10\">
            ";
                // line 165
                if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                    if (array_key_exists("canvas_slot_ids", $context) && in_array("header_content", $context["canvas_slot_ids"], TRUE)) {
                        yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "header_content");
                    } else {
                        yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "header_content");
                    }
                }
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header_content"] ?? null), "html", null, true);
                if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                    if (array_key_exists("canvas_slot_ids", $context) && in_array("header_content", $context["canvas_slot_ids"], TRUE)) {
                        yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "header_content");
                    } else {
                        yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "header_content");
                    }
                }
                yield "
          </header>
        ";
            }
            // line 168
            yield "      ";
        }
        // line 169
        yield "
      <div class=\"";
        // line 170
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["grid_classes"] ?? null), "html", null, true);
        yield "\">
        ";
        // line 171
        yield from $this->unwrap()->yieldBlock('main_slot', $context, $blocks);
        // line 174
        yield "      </div>

      ";
        // line 176
        if ((($tmp = ($context["section_footer"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 177
            yield "        ";
            $context["footer_content"] = ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
                // line 178
                yield "          ";
                yield from $this->unwrap()->yieldBlock('footer_slot', $context, $blocks);
                // line 181
                yield "        ";
                yield from [];
            })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 182
            yield "        ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim(($context["footer_content"] ?? null)))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 183
                yield "          <footer class=\"mt-6 md:mt-8 xl:mt-10\">
            ";
                // line 184
                if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                    if (array_key_exists("canvas_slot_ids", $context) && in_array("footer_content", $context["canvas_slot_ids"], TRUE)) {
                        yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "footer_content");
                    } else {
                        yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "footer_content");
                    }
                }
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_content"] ?? null), "html", null, true);
                if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                    if (array_key_exists("canvas_slot_ids", $context) && in_array("footer_content", $context["canvas_slot_ids"], TRUE)) {
                        yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "footer_content");
                    } else {
                        yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "footer_content");
                    }
                }
                yield "
          </footer>
        ";
            }
            // line 187
            yield "      ";
        }
        // line 188
        yield "    </div>
  </div>
</section>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["background_media", "margin_block_start", "margin_block_end", "padding_block_start", "padding_block_end", "background_color", "width", "columns", "mobile_columns", "section_header", "section_footer"]);        yield from [];
    }

    // line 137
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_background_media_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 138
        yield "      <div class=\"absolute inset-0 z-[-1]\">
        ";
        // line 139
        try {
            $_v0 = $this->load("canvas:image", 139);
        } catch (LoaderError $e) {
            // ignore missing template
            $_v0 = null;
        }
        if ($_v0) {
            yield from $_v0->unwrap()->yield(CoreExtension::toArray(["src" => CoreExtension::getAttribute($this->env, $this->source,             // line 140
($context["background_media"] ?? null), "src", [], "any", false, false, true, 140), "alt" => CoreExtension::getAttribute($this->env, $this->source,             // line 141
($context["background_media"] ?? null), "alt", [], "any", false, false, true, 141), "class" => "object-cover w-full h-full", "width" => CoreExtension::getAttribute($this->env, $this->source,             // line 143
($context["background_media"] ?? null), "width", [], "any", false, false, true, 143), "height" => CoreExtension::getAttribute($this->env, $this->source,             // line 144
($context["background_media"] ?? null), "height", [], "any", false, false, true, 144)]));
        }
        // line 146
        yield "      </div>
    ";
        yield from [];
    }

    // line 159
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header_slot(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 160
        yield "
          ";
        yield from [];
    }

    // line 171
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main_slot(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 172
        yield "
        ";
        yield from [];
    }

    // line 178
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer_slot(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 179
        yield "
          ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "byte_theme:section";
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
        return array (  308 => 179,  301 => 178,  295 => 172,  288 => 171,  282 => 160,  275 => 159,  269 => 146,  266 => 144,  265 => 143,  264 => 141,  263 => 140,  255 => 139,  252 => 138,  245 => 137,  236 => 188,  233 => 187,  213 => 184,  210 => 183,  207 => 182,  203 => 181,  200 => 178,  197 => 177,  195 => 176,  191 => 174,  189 => 171,  185 => 170,  182 => 169,  179 => 168,  159 => 165,  156 => 164,  153 => 163,  149 => 162,  146 => 159,  143 => 158,  141 => 157,  137 => 156,  133 => 154,  127 => 152,  124 => 151,  121 => 149,  118 => 148,  115 => 137,  112 => 136,  108 => 134,  105 => 133,  103 => 130,  102 => 129,  101 => 128,  100 => 127,  97 => 126,  95 => 102,  92 => 101,  90 => 98,  89 => 97,  88 => 96,  87 => 95,  84 => 94,  82 => 76,  79 => 75,  77 => 72,  76 => 71,  75 => 70,  72 => 69,  70 => 66,  69 => 65,  68 => 64,  67 => 63,  66 => 62,  65 => 61,  64 => 60,  61 => 59,  59 => 6,  56 => 5,  54 => 4,  52 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "byte_theme:section", "themes/contrib/byte_theme/components/section/section.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 2, "if" => 136, "block" => 137, "include" => 139];
        static $filters = ["default" => 66, "escape" => 134, "trim" => 163];
        static $functions = ["html_cva" => 7];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block', 'include'],
                ['default', 'escape', 'trim'],
                ['html_cva'],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
