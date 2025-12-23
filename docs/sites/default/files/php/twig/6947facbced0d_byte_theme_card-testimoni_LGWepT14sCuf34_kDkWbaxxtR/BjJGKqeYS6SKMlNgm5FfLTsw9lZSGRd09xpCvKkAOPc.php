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

/* byte_theme:card-testimonial */
class __TwigTemplate_03c84e550c2d2c8f4494b93e2771463d extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.byte_theme--card-testimonial"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "byte_theme:card-testimonial"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "byte_theme:card-testimonial"));
        $context["card"] = Twig\Extra\Html\HtmlExtension::htmlCva(["flex flex-col self-start rounded-md p-8 shadow-lg"], ["align" => ["center" => "items-center gap-6 text-center", "left" => "items-start gap-4 text-left"], "style" => ["default" => "bg-card text-card-foreground", "inverted" => "bg-foreground text-background"]]);
        // line 16
        yield "
";
        // line 17
        $context["svg"] = Twig\Extra\Html\HtmlExtension::htmlCva(["absolute"], ["style" => ["default" => "text-muted", "inverted" => "text-card-foreground"]]);
        // line 28
        yield "
";
        // line 29
        $context["footer"] = Twig\Extra\Html\HtmlExtension::htmlCva(["flex flex-row items-center gap-4 text-left text-base font-bold"], ["align" => ["center" => "justify-center", "left" => "justify-start"]]);
        // line 40
        yield "
";
        // line 41
        $context["svg_classes"] = CoreExtension::getAttribute($this->env, $this->source,         // line 42
($context["svg"] ?? null), "apply", [["style" => ((        // line 43
array_key_exists("style", $context)) ? (Twig\Extension\CoreExtension::default(($context["style"] ?? null), "default")) : ("default"))]], "method", false, false, true, 42);
        // line 46
        yield "
";
        // line 47
        $context["card_classes"] = CoreExtension::getAttribute($this->env, $this->source,         // line 48
($context["card"] ?? null), "apply", [["align" => ((        // line 49
array_key_exists("align", $context)) ? (Twig\Extension\CoreExtension::default(($context["align"] ?? null), "center")) : ("center")), "style" => ((        // line 50
array_key_exists("style", $context)) ? (Twig\Extension\CoreExtension::default(($context["style"] ?? null), "default")) : ("default"))]], "method", false, false, true, 48);
        // line 53
        yield "
";
        // line 54
        $context["footer_classes"] = CoreExtension::getAttribute($this->env, $this->source,         // line 55
($context["footer"] ?? null), "apply", [["align" => ((        // line 56
array_key_exists("align", $context)) ? (Twig\Extension\CoreExtension::default(($context["align"] ?? null), "center")) : ("center"))]], "method", false, false, true, 55);
        // line 59
        yield "
<div class=\"";
        // line 60
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["card_classes"] ?? null), "html", null, true);
        yield " relative\">
  <svg
    class=\"";
        // line 62
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["svg_classes"] ?? null), "html", null, true);
        yield " start-2 top-2 size-16\"
    width=\"16\"
    height=\"16\"
    viewBox=\"0 0 16 16\"
    fill=\"none\"
    xmlns=\"http://www.w3.org/2000/svg\"
    aria-hidden=\"true\"
  >
    <path
      d=\"M7.39762 10.3C7.39762 11.0733 7.14888 11.7 6.6514 12.18C6.15392 12.6333 5.52552 12.86 4.76621 12.86C3.84979 12.86 3.09047 12.5533 2.48825 11.94C1.91222 11.3266 1.62421 10.4467 1.62421 9.29999C1.62421 8.07332 1.96459 6.87332 2.64535 5.69999C3.35231 4.49999 4.33418 3.55332 5.59098 2.85999L6.4943 4.25999C5.81354 4.73999 5.26369 5.27332 4.84476 5.85999C4.45201 6.44666 4.19017 7.12666 4.05926 7.89999C4.29491 7.79332 4.56983 7.73999 4.88403 7.73999C5.61716 7.73999 6.21938 7.97999 6.69067 8.45999C7.16197 8.93999 7.39762 9.55333 7.39762 10.3ZM14.6242 10.3C14.6242 11.0733 14.3755 11.7 13.878 12.18C13.3805 12.6333 12.7521 12.86 11.9928 12.86C11.0764 12.86 10.3171 12.5533 9.71484 11.94C9.13881 11.3266 8.85079 10.4467 8.85079 9.29999C8.85079 8.07332 9.19117 6.87332 9.87194 5.69999C10.5789 4.49999 11.5608 3.55332 12.8176 2.85999L13.7209 4.25999C13.0401 4.73999 12.4903 5.27332 12.0713 5.85999C11.6786 6.44666 11.4168 7.12666 11.2858 7.89999C11.5215 7.79332 11.7964 7.73999 12.1106 7.73999C12.8437 7.73999 13.446 7.97999 13.9173 8.45999C14.3886 8.93999 14.6242 9.55333 14.6242 10.3Z\"
      fill=\"currentColor\"
    ></path>
  </svg>
  <blockquote class=\"relative z-10 flex flex-col gap-4\" cite=\"";
        // line 75
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["cite_url"] ?? null), "html", null, true);
        yield "\">
    <p class=\"text-xl text-inherit\">
      ";
        // line 77
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

    <footer class=\"";
        // line 80
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_classes"] ?? null), "html", null, true);
        yield "\">
      <div class=\"aspect-square w-[60px] overflow-hidden rounded-full\">
        ";
        // line 82
        yield from $this->unwrap()->yieldBlock('media', $context, $blocks);
        // line 92
        yield "      </div>
      <div>
        ";
        // line 94
        $context["citation"] = ($context["cite_name"] ?? null);
        // line 95
        yield "        ";
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("citation", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "citation");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "citation");
            }
        }
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["citation"] ?? null), "html", null, true);
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("citation", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "citation");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "citation");
            }
        }
        yield "
        <cite class=\"font-normal not-italic\">
          <br />
          ";
        // line 98
        if ((($context["cite_url"] ?? null) && (($context["cite_url"] ?? null) != "No URL"))) {
            // line 99
            yield "            <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["cite_url"] ?? null), "html", null, true);
            yield "\" target=\"_blank\" class=\"underline underline-offset-2 hover:opacity-80\">";
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("cite_text", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "cite_text");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "cite_text");
                }
            }
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["cite_text"] ?? null), "html", null, true);
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("cite_text", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "cite_text");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "cite_text");
                }
            }
            yield "</a>
          ";
        } else {
            // line 101
            yield "            <span class=\"text-base\">";
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("cite_text", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "cite_text");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "cite_text");
                }
            }
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["cite_text"] ?? null), "html", null, true);
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("cite_text", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "cite_text");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "cite_text");
                }
            }
            yield "</span>
          ";
        }
        // line 103
        yield "        </cite>
      </div>
    </footer>
  </blockquote>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["style", "align", "cite_url", "text", "cite_name", "cite_text", "media"]);        yield from [];
    }

    // line 82
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_media(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 83
        yield "          ";
        try {
            $_v0 = $this->load("canvas:image", 83);
        } catch (LoaderError $e) {
            // ignore missing template
            $_v0 = null;
        }
        if ($_v0) {
            yield from $_v0->unwrap()->yield(CoreExtension::toArray(["src" => CoreExtension::getAttribute($this->env, $this->source,             // line 84
($context["media"] ?? null), "src", [], "any", false, false, true, 84), "alt" => CoreExtension::getAttribute($this->env, $this->source,             // line 85
($context["media"] ?? null), "alt", [], "any", false, false, true, 85), "class" => "object-cover w-full h-full", "width" => CoreExtension::getAttribute($this->env, $this->source,             // line 87
($context["media"] ?? null), "width", [], "any", false, false, true, 87), "height" => CoreExtension::getAttribute($this->env, $this->source,             // line 88
($context["media"] ?? null), "height", [], "any", false, false, true, 88), "sizes" => "60px"]));
        }
        // line 91
        yield "        ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "byte_theme:card-testimonial";
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
        return array (  242 => 91,  239 => 88,  238 => 87,  237 => 85,  236 => 84,  227 => 83,  220 => 82,  209 => 103,  189 => 101,  167 => 99,  165 => 98,  144 => 95,  142 => 94,  138 => 92,  136 => 82,  131 => 80,  111 => 77,  106 => 75,  90 => 62,  85 => 60,  82 => 59,  80 => 56,  79 => 55,  78 => 54,  75 => 53,  73 => 50,  72 => 49,  71 => 48,  70 => 47,  67 => 46,  65 => 43,  64 => 42,  63 => 41,  60 => 40,  58 => 29,  55 => 28,  53 => 17,  50 => 16,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "byte_theme:card-testimonial", "themes/contrib/byte_theme/components/card-testimonial/card-testimonial.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "block" => 82, "if" => 98, "include" => 83];
        static $filters = ["default" => 43, "escape" => 60];
        static $functions = ["html_cva" => 2];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if', 'include'],
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
