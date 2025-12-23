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

/* byte_theme:cta */
class __TwigTemplate_5659933c2a822a8f55c120451a8c34d4 extends Template
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
            'media' => [$this, 'block_media'],
            'actions' => [$this, 'block_actions'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.byte_theme--cta"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "byte_theme:cta"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "byte_theme:cta"));
        $context["cta_text_align"] = ((array_key_exists("text_align", $context)) ? (Twig\Extension\CoreExtension::default(($context["text_align"] ?? null), "center")) : ("center"));
        // line 2
        $context["background_color"] = ((array_key_exists("background_color", $context)) ? (Twig\Extension\CoreExtension::default(($context["background_color"] ?? null), "noColor")) : ("noColor"));
        // line 3
        yield "
";
        // line 4
        $context["cta_variants"] = Twig\Extra\Html\HtmlExtension::htmlCva(["relative z-1"], ["backgroundColor" => ["primary" => "bg-primary text-primary-foreground", "secondary" => "bg-secondary text-secondary-foreground", "accent" => "bg-accent text-accent-foreground", "muted" => "bg-muted text-muted-foreground", "inverted" => "bg-foreground text-background", "noColor" => "bg-none text-foreground"]]);
        // line 19
        yield "
";
        // line 20
        $context["cta_content_variants"] = Twig\Extra\Html\HtmlExtension::htmlCva(["relative", "flex flex-col justify-center", "min-h-80", "gap-6 lg:gap-8", "py-[90px] lg:py-[115px] xl:py-[140px]"], ["textAlign" => ["left" => ["text-left"], "right" => ["text-right"], "center" => ["text-center", "lg:max-w-3/4", "mx-auto", "items-center"]], "hasBackground" => ["yes" => "text-white!", "no" => ""]]);
        // line 36
        yield "
";
        // line 37
        $context["cta_links_variants"] = Twig\Extra\Html\HtmlExtension::htmlCva(["flex", "w-full", "flex-col", "gap-6", "sm:flex-row"], ["textAlign" => ["left" => "md:justify-start", "right" => "md:justify-end", "center" => ["justify-center", "items-center"]]]);
        // line 49
        yield "
<section
  class=\"";
        // line 51
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source,         // line 52
($context["cta_variants"] ?? null), "apply", [["backgroundColor" =>         // line 53
($context["background_color"] ?? null)]], "method", false, false, true, 52), "html", null, true);
        // line 55
        yield "\"
>
  ";
        // line 57
        yield from $this->unwrap()->yieldBlock('media', $context, $blocks);
        // line 71
        yield "  <div
    class=\"";
        // line 72
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source,         // line 73
($context["cta_content_variants"] ?? null), "apply", [["textAlign" =>         // line 74
($context["cta_text_align"] ?? null)]], "method", false, false, true, 73), "html", null, true);
        // line 76
        yield " px-4\"
  >
    ";
        // line 78
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "byte_theme:heading", ["heading_text" => ((        // line 82
array_key_exists("heading_text", $context)) ? (Twig\Extension\CoreExtension::default(($context["heading_text"] ?? null), "")) : ("")), "level" => ((        // line 83
array_key_exists("level", $context)) ? (Twig\Extension\CoreExtension::default(($context["level"] ?? null), 2)) : (2)), "align" =>         // line 84
($context["cta_text_align"] ?? null), "text_color" => "default", "url" => "", "heading_classes" => "max-w-3xl", "text_size" => "heading-responsive-7xl"], false));
        // line 92
        yield "
    <p class=\"max-w-2xl text-xl font-normal\">
      ";
        // line 94
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("text", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "text");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "text");
            }
        }
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["text"] ?? null), "html", null, true);
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("text", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "text");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "text");
            }
        }
        yield "
    </p>
    ";
        // line 96
        if (        $this->unwrap()->hasBlock("actions", $context, $blocks)) {
            // line 97
            yield "      <div
        class=\"";
            // line 98
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source,             // line 99
($context["cta_links_variants"] ?? null), "apply", [["textAlign" =>             // line 100
($context["cta_text_align"] ?? null)]], "method", false, false, true, 99), "html", null, true);
            // line 102
            yield "\"
      >
        ";
            // line 104
            yield from $this->unwrap()->yieldBlock('actions', $context, $blocks);
            // line 107
            yield "      </div>
    ";
        }
        // line 109
        yield "  </div>
</section>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["text_align", "heading_text", "level", "text", "media"]);        yield from [];
    }

    // line 57
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_media(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 58
        yield "    ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["media"] ?? null), "src", [], "any", false, false, true, 58))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 59
            yield "      <div class=\"absolute z-[-1] h-full w-full\">
        <div class=\"absolute inset-0 bg-black/30\"></div>
        ";
            // line 61
            try {
                $_v0 = $this->load("canvas:image", 61);
            } catch (LoaderError $e) {
                // ignore missing template
                $_v0 = null;
            }
            if ($_v0) {
                yield from $_v0->unwrap()->yield(CoreExtension::toArray(["src" => CoreExtension::getAttribute($this->env, $this->source,                 // line 62
($context["media"] ?? null), "src", [], "any", false, false, true, 62), "alt" => CoreExtension::getAttribute($this->env, $this->source,                 // line 63
($context["media"] ?? null), "alt", [], "any", false, false, true, 63), "class" => "object-cover w-full h-full", "width" => CoreExtension::getAttribute($this->env, $this->source,                 // line 65
($context["media"] ?? null), "width", [], "any", false, false, true, 65), "height" => CoreExtension::getAttribute($this->env, $this->source,                 // line 66
($context["media"] ?? null), "height", [], "any", false, false, true, 66)]));
            }
            // line 68
            yield "      </div>
    ";
        }
        // line 70
        yield "  ";
        yield from [];
    }

    // line 104
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 105
        yield "
        ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "byte_theme:cta";
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
        return array (  192 => 105,  185 => 104,  180 => 70,  176 => 68,  173 => 66,  172 => 65,  171 => 63,  170 => 62,  162 => 61,  158 => 59,  155 => 58,  148 => 57,  140 => 109,  136 => 107,  134 => 104,  130 => 102,  128 => 100,  127 => 99,  126 => 98,  123 => 97,  121 => 96,  102 => 94,  98 => 92,  96 => 84,  95 => 83,  94 => 82,  93 => 78,  89 => 76,  87 => 74,  86 => 73,  85 => 72,  82 => 71,  80 => 57,  76 => 55,  74 => 53,  73 => 52,  72 => 51,  68 => 49,  66 => 37,  63 => 36,  61 => 20,  58 => 19,  56 => 4,  53 => 3,  51 => 2,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "byte_theme:cta", "themes/contrib/byte_theme/components/cta/cta.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "block" => 57, "if" => 96, "include" => 61];
        static $filters = ["default" => 1, "escape" => 52];
        static $functions = ["html_cva" => 5, "include" => 79];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if', 'include'],
                ['default', 'escape'],
                ['html_cva', 'include'],
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
