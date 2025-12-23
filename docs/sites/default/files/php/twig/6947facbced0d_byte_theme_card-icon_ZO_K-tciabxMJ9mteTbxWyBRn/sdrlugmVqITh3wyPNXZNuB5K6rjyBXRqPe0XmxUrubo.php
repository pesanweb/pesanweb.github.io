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

/* byte_theme:card-icon */
class __TwigTemplate_d97ea871593c2230c257b355e367520a extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.byte_theme--card-icon"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "byte_theme:card-icon"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "byte_theme:card-icon"));
        $context["has_url"] = (((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["url"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("yes") : ("no"));
        // line 2
        yield "
";
        // line 3
        $context["tile"] = Twig\Extra\Html\HtmlExtension::htmlCva(["relative p-6"], ["hasUrl" => ["yes" => "group cursor-pointer transition duration-300 hover:scale-103", "no" => ""], "backgroundColor" => ["primary" => "bg-primary text-primary-foreground hover:bg-primary/80", "secondary" => "bg-secondary text-secondary-foreground hover:bg-secondary/80", "accent" => "bg-accent text-accent-foreground hover:bg-accent/80", "muted" => "bg-muted text-muted-foreground hover:bg-muted/80", "noColor" => "border border-border bg-none text-foreground hover:bg-background/80"], "tileSize" => ["square" => "aspect-square", "4:3" => "aspect-4/3", "16:9" => "aspect-16/9", "noSize" => "aspect-none"], "borderRadius" => ["small" => "rounded-sm", "medium" => "rounded-xl md:rounded-2xl", "large" => "rounded-[24px] md:rounded-[32px]", "noRadius" => "rounded-none"]]);
        // line 33
        yield "
";
        // line 34
        $context["tile_classes"] = CoreExtension::getAttribute($this->env, $this->source,         // line 35
($context["tile"] ?? null), "apply", [["hasUrl" =>         // line 36
($context["has_url"] ?? null), "backgroundColor" => ((        // line 37
array_key_exists("background_color", $context)) ? (Twig\Extension\CoreExtension::default(($context["background_color"] ?? null), "noColor")) : ("noColor")), "tileSize" => ((        // line 38
array_key_exists("tile_size", $context)) ? (Twig\Extension\CoreExtension::default(($context["tile_size"] ?? null), "noSize")) : ("noSize")), "borderRadius" => ((        // line 39
array_key_exists("border_radius", $context)) ? (Twig\Extension\CoreExtension::default(($context["border_radius"] ?? null), "noRadius")) : ("noRadius"))]], "method", false, false, true, 35);
        // line 42
        yield "
";
        // line 43
        $context["icon_container"] = Twig\Extra\Html\HtmlExtension::htmlCva(["flex", "w-full"], ["iconAlign" => ["left" => "justify-start", "center" => "justify-center", "right" => "justify-end"]]);
        // line 55
        yield "
";
        // line 56
        $context["icon_container_classes"] = CoreExtension::getAttribute($this->env, $this->source,         // line 57
($context["icon_container"] ?? null), "apply", [["iconAlign" => ((        // line 58
array_key_exists("icon_align", $context)) ? (Twig\Extension\CoreExtension::default(($context["icon_align"] ?? null), "center")) : ("center"))]], "method", false, false, true, 57);
        // line 61
        yield "
";
        // line 62
        $context["icon_size_map"] = ["small" => "small", "medium" => "medium", "large" => "large", "extra-large" => "extra-large"];
        // line 68
        yield "
";
        // line 69
        $context["text_container"] = Twig\Extra\Html\HtmlExtension::htmlCva(["w-full", "pt-2"], ["textAlign" => ["left" => "text-start", "center" => "text-center", "right" => "text-end"]]);
        // line 81
        yield "
";
        // line 82
        $context["text_container_classes"] = CoreExtension::getAttribute($this->env, $this->source,         // line 83
($context["text_container"] ?? null), "apply", [["textAlign" => ((        // line 84
array_key_exists("text_align", $context)) ? (Twig\Extension\CoreExtension::default(($context["text_align"] ?? null), "center")) : ("center"))]], "method", false, false, true, 83);
        // line 87
        yield "
<div class=\"";
        // line 88
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["tile_classes"] ?? null), "html", null, true);
        yield "\">
  <div class=\"flex h-full flex-col justify-center\">
    <div class=\"";
        // line 90
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["icon_container_classes"] ?? null), "html", null, true);
        yield "\">
      ";
        // line 91
        if ((($tmp = ($context["icon"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 92
            yield "        ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "@byte_theme/components/icon/icon.twig", ["icon" =>             // line 96
($context["icon"] ?? null), "icon_size" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 97
($context["icon_size_map"] ?? null), ($context["icon_size"] ?? null), [], "array", true, true, true, 97)) ? (Twig\Extension\CoreExtension::default((($_v0 = ($context["icon_size_map"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0[($context["icon_size"] ?? null)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["icon_size_map"] ?? null), ($context["icon_size"] ?? null), [], "array", false, false, true, 97)), "medium")) : ("medium"))], false));
            // line 101
            yield "
      ";
        }
        // line 103
        yield "    </div>

    <div class=\"";
        // line 105
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["text_container_classes"] ?? null), "html", null, true);
        yield "\">
      ";
        // line 106
        if (( !Twig\Extension\CoreExtension::testEmpty(($context["text"] ?? null)) ||  !Twig\Extension\CoreExtension::testEmpty(($context["description"] ?? null)))) {
            // line 107
            yield "        ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["url"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 108
                yield "          <a href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true);
                yield "\" class=\"flex w-full flex-col before:absolute before:inset-0 before:content-['']\">
            ";
                // line 109
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["text"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 110
                    yield "              <h3>";
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
                    yield "</h3>
            ";
                }
                // line 112
                yield "            ";
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["description"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 113
                    yield "              <span class=\"mt-3 opacity-75\">";
                    if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                        if (array_key_exists("canvas_slot_ids", $context) && in_array("description", $context["canvas_slot_ids"], TRUE)) {
                            yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "description");
                        } else {
                            yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "description");
                        }
                    }
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["description"] ?? null), "html", null, true);
                    if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                        if (array_key_exists("canvas_slot_ids", $context) && in_array("description", $context["canvas_slot_ids"], TRUE)) {
                            yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "description");
                        } else {
                            yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "description");
                        }
                    }
                    yield "</span>
            ";
                }
                // line 115
                yield "          </a>
        ";
            } else {
                // line 117
                yield "          <span class=\"flex w-full flex-col before:absolute before:inset-0 before:content-['']\">
            ";
                // line 118
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["text"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 119
                    yield "              <h3>";
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
                    yield "</h3>
            ";
                }
                // line 121
                yield "            ";
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["description"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 122
                    yield "              <span class=\"mt-3\">";
                    if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                        if (array_key_exists("canvas_slot_ids", $context) && in_array("description", $context["canvas_slot_ids"], TRUE)) {
                            yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "description");
                        } else {
                            yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "description");
                        }
                    }
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["description"] ?? null), "html", null, true);
                    if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                        if (array_key_exists("canvas_slot_ids", $context) && in_array("description", $context["canvas_slot_ids"], TRUE)) {
                            yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "description");
                        } else {
                            yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "description");
                        }
                    }
                    yield "</span>
            ";
                }
                // line 124
                yield "          </span>
        ";
            }
            // line 126
            yield "      ";
        }
        // line 127
        yield "    </div>
  </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["url", "background_color", "tile_size", "border_radius", "icon_align", "text_align", "icon", "icon_size", "text", "description"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "byte_theme:card-icon";
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
        return array (  238 => 127,  235 => 126,  231 => 124,  211 => 122,  208 => 121,  188 => 119,  186 => 118,  183 => 117,  179 => 115,  159 => 113,  156 => 112,  136 => 110,  134 => 109,  129 => 108,  126 => 107,  124 => 106,  120 => 105,  116 => 103,  112 => 101,  110 => 97,  109 => 96,  107 => 92,  105 => 91,  101 => 90,  96 => 88,  93 => 87,  91 => 84,  90 => 83,  89 => 82,  86 => 81,  84 => 69,  81 => 68,  79 => 62,  76 => 61,  74 => 58,  73 => 57,  72 => 56,  69 => 55,  67 => 43,  64 => 42,  62 => 39,  61 => 38,  60 => 37,  59 => 36,  58 => 35,  57 => 34,  54 => 33,  52 => 3,  49 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "byte_theme:card-icon", "themes/contrib/byte_theme/components/card-icon/card-icon.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "if" => 91];
        static $filters = ["default" => 37, "escape" => 88];
        static $functions = ["html_cva" => 4, "include" => 93];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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
