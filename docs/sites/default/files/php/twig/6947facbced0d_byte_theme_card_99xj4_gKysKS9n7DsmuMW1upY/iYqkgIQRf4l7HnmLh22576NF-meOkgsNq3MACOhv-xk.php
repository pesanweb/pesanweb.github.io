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

/* byte_theme:card */
class __TwigTemplate_75d82d56c140765f77c9f826df14b9b2 extends Template
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
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.byte_theme--card"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "byte_theme:card"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "byte_theme:card"));
        $context["card_orientation"] = ((array_key_exists("orientation", $context)) ? (Twig\Extension\CoreExtension::default(($context["orientation"] ?? null), "vertical")) : ("vertical"));
        // line 2
        $context["card_style"] = ((array_key_exists("style", $context)) ? (Twig\Extension\CoreExtension::default(($context["style"] ?? null), "framed")) : ("framed"));
        // line 3
        $context["card_background"] = ((array_key_exists("background", $context)) ? (Twig\Extension\CoreExtension::default(($context["background"] ?? null), "noColor")) : ("noColor"));
        // line 4
        $context["is_text_centered"] = (((($tmp = ((array_key_exists("is_text_centered", $context)) ? (Twig\Extension\CoreExtension::default(($context["is_text_centered"] ?? null), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("yes") : ("no"));
        // line 5
        $context["is_clickable"] = ((( !Twig\Extension\CoreExtension::testEmpty(($context["url"] ?? null)) && (($context["url"] ?? null) != "No URL"))) ? ("yes") : ("no"));
        // line 6
        yield "
";
        // line 7
        $context["card"] = Twig\Extra\Html\HtmlExtension::htmlCva(["group relative flex rounded-md shadow-lg in-[.views-row]:h-full"], ["orientation" => ["vertical" => "flex-col", "horizontal" => "md:flex-row"], "isTextCentered" => ["yes" => "text-center", "no" => "text-left"], "clickable" => ["yes" => "cursor-pointer transition duration-300 hover:scale-103", "no" => ""], "style" => ["framed" => "gap-4 p-4", "full" => ""], "backgroundColor" => ["default" => "bg-card text-card-foreground hover:bg-card/80", "accent" => "bg-accent text-accent-foreground hover:bg-accent/80", "primary" => "bg-primary text-primary-foreground hover:bg-primary/80", "inverted" => "bg-foreground text-background hover:bg-foreground/80", "noColor" => "shadow-none"]]);
        // line 37
        yield "
";
        // line 38
        $context["card_media"] = Twig\Extra\Html\HtmlExtension::htmlCva("aspect-video overflow-hidden", ["orientation" => ["vertical" => "", "horizontal" => "md:aspect-auto md:flex-[0_1_50%]"]], [["orientation" => ["horizontal"], "style" => ["full"], "class" => "rounded-l-md"], ["orientation" => ["vertical"], "style" => ["full"], "class" => "rounded-t-md"]]);
        // line 61
        yield "
";
        // line 62
        $context["card_content"] = Twig\Extra\Html\HtmlExtension::htmlCva("flex w-full flex-col items-baseline", ["orientation" => ["vertical" => "", "horizontal" => "md:flex-[0_1_50%]"], "style" => ["framed" => "", "full" => "rounded-b p-4"]], [["orientation" => ["horizontal"], "style" => ["full"], "class" => "p-4 lg:p-6"], ["orientation" => ["horizontal"], "style" => ["framed"], "class" => ""], ["orientation" => ["vertical"], "backgroundColor" => ["noColor"], "style" => ["full"], "class" => "px-0!"], ["orientation" => ["horizontal"], "backgroundColor" => ["noColor"], "style" => ["full"], "class" => "py-0!"]]);
        // line 101
        yield "
<div
  class=\"";
        // line 103
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source,         // line 104
($context["card"] ?? null), "apply", [["orientation" =>         // line 106
($context["card_orientation"] ?? null), "isTextCentered" =>         // line 107
($context["is_text_centered"] ?? null), "clickable" =>         // line 108
($context["is_clickable"] ?? null), "style" =>         // line 109
($context["card_style"] ?? null), "backgroundColor" =>         // line 110
($context["card_background"] ?? null)], ((        // line 112
array_key_exists("card_classes", $context)) ? (Twig\Extension\CoreExtension::default(($context["card_classes"] ?? null), "")) : (""))], "method", false, false, true, 104), "html", null, true);
        // line 114
        yield "\"
>
  ";
        // line 116
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["media"] ?? null), "src", [], "any", false, false, true, 116))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 117
            yield "    <div
      class=\"";
            // line 118
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source,             // line 119
($context["card_media"] ?? null), "apply", [["orientation" =>             // line 120
($context["card_orientation"] ?? null), "style" =>             // line 121
($context["card_style"] ?? null)]], "method", false, false, true, 119), "html", null, true);
            // line 123
            yield "\"
    >
      ";
            // line 125
            yield from $this->unwrap()->yieldBlock('media', $context, $blocks);
            // line 135
            yield "    </div>
  ";
        }
        // line 137
        yield "
  <div
    class=\"";
        // line 139
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source,         // line 140
($context["card_content"] ?? null), "apply", [["orientation" =>         // line 141
($context["card_orientation"] ?? null), "style" =>         // line 142
($context["card_style"] ?? null), "backgroundColor" =>         // line 143
($context["card_background"] ?? null)]], "method", false, false, true, 140), "html", null, true);
        // line 145
        yield "\"
  >
    <div class=\"flex w-full flex-col gap-1 md:gap-2\">
      <h3 class=\"font-semibold\">
        ";
        // line 149
        if ((($tmp = ($context["is_clickable"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 150
            yield "          <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true);
            yield "\" class=\"after:absolute after:inset-0 after:content-['']\">";
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("heading_text", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "heading_text");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "heading_text");
                }
            }
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["heading_text"] ?? null), "html", null, true);
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("heading_text", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "heading_text");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "heading_text");
                }
            }
            yield "</a>
        ";
        }
        // line 152
        yield "      </h3>
      ";
        // line 153
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["text"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 154
            yield "        <p class=\"mb-0 text-lg xl:text-xl\">
          ";
            // line 155
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
        }
        // line 158
        yield "    </div>
  </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["orientation", "style", "background", "url", "card_classes", "media", "heading_text", "text"]);        yield from [];
    }

    // line 125
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_media(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 126
        yield "        ";
        try {
            $_v0 = $this->load("canvas:image", 126);
        } catch (LoaderError $e) {
            // ignore missing template
            $_v0 = null;
        }
        if ($_v0) {
            yield from $_v0->unwrap()->yield(CoreExtension::toArray(["src" => CoreExtension::getAttribute($this->env, $this->source,             // line 127
($context["media"] ?? null), "src", [], "any", false, false, true, 127), "alt" => CoreExtension::getAttribute($this->env, $this->source,             // line 128
($context["media"] ?? null), "alt", [], "any", false, false, true, 128), "class" => "object-cover w-full h-full", "width" => CoreExtension::getAttribute($this->env, $this->source,             // line 130
($context["media"] ?? null), "width", [], "any", false, false, true, 130), "height" => CoreExtension::getAttribute($this->env, $this->source,             // line 131
($context["media"] ?? null), "height", [], "any", false, false, true, 131), "sizes" => (((            // line 132
($context["card_orientation"] ?? null) == "stacked")) ? ("auto, 100vw") : ("50vw"))]));
        }
        // line 134
        yield "      ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "byte_theme:card";
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
        return array (  210 => 134,  207 => 132,  206 => 131,  205 => 130,  204 => 128,  203 => 127,  194 => 126,  187 => 125,  178 => 158,  158 => 155,  155 => 154,  153 => 153,  150 => 152,  128 => 150,  126 => 149,  120 => 145,  118 => 143,  117 => 142,  116 => 141,  115 => 140,  114 => 139,  110 => 137,  106 => 135,  104 => 125,  100 => 123,  98 => 121,  97 => 120,  96 => 119,  95 => 118,  92 => 117,  90 => 116,  86 => 114,  84 => 112,  83 => 110,  82 => 109,  81 => 108,  80 => 107,  79 => 106,  78 => 104,  77 => 103,  73 => 101,  71 => 62,  68 => 61,  66 => 38,  63 => 37,  61 => 7,  58 => 6,  56 => 5,  54 => 4,  52 => 3,  50 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "byte_theme:card", "themes/contrib/byte_theme/components/card/card.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "if" => 116, "block" => 125, "include" => 126];
        static $filters = ["default" => 1, "escape" => 104];
        static $functions = ["html_cva" => 8];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block', 'include'],
                ['default', 'escape'],
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
