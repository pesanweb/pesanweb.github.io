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

/* byte_theme:badge */
class __TwigTemplate_57063d547deb257f1640100d3beda74b extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.byte_theme--badge"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "byte_theme:badge"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "byte_theme:badge"));
        $context["has_url"] = ((( !Twig\Extension\CoreExtension::testEmpty(($context["url"] ?? null)) && (($context["url"] ?? null) != "No URL"))) ? ("yes") : ("no"));
        // line 2
        $context["is_icon_first"] = (((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["icon_first"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("yes") : ("no"));
        // line 3
        yield "
";
        // line 5
        $context["additional_classes"] = ((array_key_exists("badge_classes", $context)) ? (Twig\Extension\CoreExtension::default(($context["badge_classes"] ?? null), "")) : (""));
        // line 6
        if (is_iterable(($context["additional_classes"] ?? null))) {
            // line 7
            yield "  ";
            $context["additional_classes"] = Twig\Extension\CoreExtension::join(($context["additional_classes"] ?? null), " ");
        }
        // line 9
        yield "
";
        // line 10
        $context["badge"] = Twig\Extra\Html\HtmlExtension::htmlCva(["rounded-sm border", "flex inline-flex items-center gap-[2px] lg:gap-1", "px-[6px] py-[5px] lg:px-2 lg:py-[6px] 2xl:px-3 2xl:py-2", "focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px]"], ["style" => ["primary" => ["border-transparent bg-primary text-primary-foreground [a&]:hover:bg-primary/90"], "secondary" => ["border-transparent bg-secondary text-secondary-foreground [a&]:hover:bg-secondary/90"]], "iconFirst" => ["yes" => "flex-row", "no" => "flex-row-reverse"]]);
        // line 30
        yield "
";
        // line 31
        $context["badge_classes"] = CoreExtension::getAttribute($this->env, $this->source,         // line 32
($context["badge"] ?? null), "apply", [["style" => ((        // line 34
array_key_exists("style", $context)) ? (Twig\Extension\CoreExtension::default(($context["style"] ?? null), "primary")) : ("primary")), "iconFirst" =>         // line 35
($context["is_icon_first"] ?? null)],         // line 37
($context["additional_classes"] ?? null)], "method", false, false, true, 32);
        // line 40
        yield "
";
        // line 41
        if ((($context["has_url"] ?? null) == "yes")) {
            // line 42
            yield "  <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true);
            yield "\" aria-label=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
            yield "\" class=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["badge_classes"] ?? null), "html", null, true);
            yield "\">
    ";
            // line 43
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["icon"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 44
                yield "      ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "@byte_theme/components/icon/icon.twig", ["icon" =>                 // line 48
($context["icon"] ?? null), "icon_size" => "extra-small"], false));
                // line 53
                yield "
    ";
            }
            // line 55
            yield "    <span class=\"font-sans text-sm leading-none font-normal text-inherit select-none\">";
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("label", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "label");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "label");
                }
            }
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("label", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "label");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "label");
                }
            }
            yield "</span>
  </a>
";
        } else {
            // line 58
            yield "  <span aria-label=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
            yield "\" class=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["badge_classes"] ?? null), "html", null, true);
            yield "\">
    ";
            // line 59
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["icon"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 60
                yield "      ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "@byte_theme/components/icon/icon.twig", ["icon" =>                 // line 64
($context["icon"] ?? null), "icon_size" => "extra-small"], false));
                // line 69
                yield "
    ";
            }
            // line 71
            yield "    <span class=\"font-sans text-sm leading-none font-normal text-inherit select-none\">";
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("label", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "label");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "label");
                }
            }
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("label", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "label");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "label");
                }
            }
            yield "</span>
  </span>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["url", "icon_first", "badge_classes", "style", "label", "icon"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "byte_theme:badge";
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
        return array (  138 => 71,  134 => 69,  132 => 64,  130 => 60,  128 => 59,  121 => 58,  100 => 55,  96 => 53,  94 => 48,  92 => 44,  90 => 43,  81 => 42,  79 => 41,  76 => 40,  74 => 37,  73 => 35,  72 => 34,  71 => 32,  70 => 31,  67 => 30,  65 => 10,  62 => 9,  58 => 7,  56 => 6,  54 => 5,  51 => 3,  49 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "byte_theme:badge", "themes/contrib/byte_theme/components/badge/badge.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "if" => 6];
        static $filters = ["default" => 5, "join" => 7, "escape" => 42];
        static $functions = ["html_cva" => 11, "include" => 45];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['default', 'join', 'escape'],
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
