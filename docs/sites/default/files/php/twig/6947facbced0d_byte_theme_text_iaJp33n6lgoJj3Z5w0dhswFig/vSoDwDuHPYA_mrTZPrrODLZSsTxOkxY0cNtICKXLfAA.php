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

/* byte_theme:text */
class __TwigTemplate_aeb40f738c3052998e729bb2c576b006 extends Template
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
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.byte_theme--text"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "byte_theme:text"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "byte_theme:text"));
        // line 2
        $context["text_text_color"] = ((array_key_exists("text_color", $context)) ? (Twig\Extension\CoreExtension::default(($context["text_color"] ?? null), "default")) : ("default"));
        // line 3
        $context["text_text_size"] = ((array_key_exists("text_size", $context)) ? (Twig\Extension\CoreExtension::default(($context["text_size"] ?? null), "normal")) : ("normal"));
        // line 4
        yield "
";
        // line 5
        $context["text_component"] = Twig\Extra\Html\HtmlExtension::htmlCva(["[&_h2]:mt-8 [&_h2]:mb-6 [&_h3]:mt-6 [&_h3]:mb-4 [&_h4]:mt-4 [&_h4]:mb-2 [&_h5]:my-2 [&_h6]:my-2", "[&_li]:mb-1 [&_ol]:my-4 [&_ol]:list-decimal [&_ul]:my-4", "[&>*:first-child]:mt-0 [&>*:last-child]:mb-0", "[&_a]:underline [&_a]:underline-offset-2"], ["textColor" => ["default" => "text-foreground [&_a]:hover:text-accent", "inverted" => "text-background [&_a]:hover:text-muted", "primary" => "text-primary [&_a]:hover:text-accent"], "textSize" => ["text-xs" => "text-xs xl:text-sm 2xl:text-md", "text-sm" => "text-sm xl:text-md 2xl:text-lg", "normal" => "text-base xl:text-lg 2xl:text-xl", "text-lg" => "text-lg xl:text-xl 2xl:text-2xl", "text-xl" => "text-xl xl:text-2xl 2xl:text-3xl", "text-2xl" => "text-2xl xl:text-3xl 2xl:text-4xl", "text-3xl" => "text-3xl xl:text-4xl 2xl:text-5xl"]]);
        // line 31
        yield "
";
        // line 32
        $context["text_classes"] = CoreExtension::getAttribute($this->env, $this->source,         // line 33
($context["text_component"] ?? null), "apply", [["textColor" =>         // line 34
($context["text_text_color"] ?? null), "textSize" =>         // line 35
($context["text_text_size"] ?? null)]], "method", false, false, true, 33);
        // line 38
        yield "
<div class=\"";
        // line 39
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["text_classes"] ?? null), "html", null, true);
        yield "\">
  ";
        // line 40
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
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["text_color", "text_size", "text"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "byte_theme:text";
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
        return array (  72 => 40,  68 => 39,  65 => 38,  63 => 35,  62 => 34,  61 => 33,  60 => 32,  57 => 31,  55 => 5,  52 => 4,  50 => 3,  48 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "byte_theme:text", "themes/contrib/byte_theme/components/text/text.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 2];
        static $filters = ["default" => 2, "escape" => 39];
        static $functions = ["html_cva" => 6];

        try {
            $this->sandbox->checkSecurity(
                ['set'],
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
