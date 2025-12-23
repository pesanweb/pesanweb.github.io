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

/* byte_theme:accordion */
class __TwigTemplate_0b7b0bf359003d458b96fbd27410b4fa extends Template
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
            'accordion_content' => [$this, 'block_accordion_content'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.byte_theme--accordion"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "byte_theme:accordion"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "byte_theme:accordion"));
        $context["button_id"] = \Drupal\Component\Utility\Html::getUniqueId("accordion--title");
        // line 2
        $context["content_id"] = \Drupal\Component\Utility\Html::getUniqueId("accordion--content");
        // line 3
        $context["heading_level"] = ((array_key_exists("heading_level", $context)) ? (Twig\Extension\CoreExtension::default(($context["heading_level"] ?? null), "3")) : ("3"));
        // line 4
        yield "
";
        // line 5
        $context["section"] = Twig\Extra\Html\HtmlExtension::htmlCva(["accordion", "overflow-hidden", "border-b border-border", "bg-clip-padding", "bg-background"]);
        // line 6
        yield "
";
        // line 7
        $context["section_classes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["section"] ?? null), "apply", [[]], "method", false, false, true, 7);
        // line 8
        yield "
";
        // line 9
        $context["title_button"] = Twig\Extra\Html\HtmlExtension::htmlCva(["accordion--title", "flex w-full cursor-pointer items-center justify-between", "bg-card hover:bg-muted", "p-4 text-left text-2xl"]);
        // line 12
        yield "
";
        // line 13
        $context["title_button_classes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["title_button"] ?? null), "apply", [[]], "method", false, false, true, 13);
        // line 14
        yield "
";
        // line 15
        $context["content"] = Twig\Extra\Html\HtmlExtension::htmlCva(["accordion--content", "h-0 overflow-hidden px-4 py-0", "text-base text-foreground", "transition-[height,padding] duration-0 in-[.accordion--animate]:duration-500", "[&>:first-child]:mt-0 [&>:last-child]:mb-0", "in-[.accordion--open]:overflow-visible in-[.accordion--open]:py-5", "in-[.accordion--open:not(.accordion--js)]:h-auto", "in-[.accordion--js.accordion--open]:h-(--natural-height)", "in-[.accordion--resizing.accordion--open]:h-auto"]);
        // line 30
        yield "
";
        // line 31
        $context["content_classes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "apply", [[]], "method", false, false, true, 31);
        // line 32
        yield "
<div class=\"";
        // line 33
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["section_classes"] ?? null), "html", null, true);
        yield "\" data-open-by-default=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($tmp = ($context["open_by_default"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false")));
        yield "\">
  ";
        // line 35
        yield "  ";
        $context["heading_class"] = "text-2xl";
        // line 36
        yield "  ";
        $context["button_content"] = ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
            // line 37
            yield "    <button id=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["button_id"] ?? null), "html", null, true);
            yield "\" aria-controls=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_id"] ?? null), "html", null, true);
            yield "\" class=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_button_classes"] ?? null), "html", null, true);
            yield "\">
      ";
            // line 38
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("title", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "title");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "title");
                }
            }
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("title", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "title");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "title");
                }
            }
            yield "
      <span class=\"accordion--icon transition-transform duration-500 in-[.accordion--js.accordion--open]:rotate-180\">
        ";
            // line 40
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "@byte_theme/components/icon/icon.twig", ["icon" => "caret-down", "icon_size" => "small"], false));
            // line 49
            yield "
      </span>
    </button>
  ";
            yield from [];
        })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 53
        yield "
  ";
        // line 54
        if ((($context["heading_level"] ?? null) == "1")) {
            // line 55
            yield "    <h1 class=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["heading_class"] ?? null), "html", null, true);
            yield "\">";
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("button_content", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "button_content");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "button_content");
                }
            }
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["button_content"] ?? null), "html", null, true);
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("button_content", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "button_content");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "button_content");
                }
            }
            yield "</h1>
  ";
        } elseif ((        // line 56
($context["heading_level"] ?? null) == "2")) {
            // line 57
            yield "    <h2 class=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["heading_class"] ?? null), "html", null, true);
            yield "\">";
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("button_content", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "button_content");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "button_content");
                }
            }
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["button_content"] ?? null), "html", null, true);
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("button_content", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "button_content");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "button_content");
                }
            }
            yield "</h2>
  ";
        } elseif ((        // line 58
($context["heading_level"] ?? null) == "3")) {
            // line 59
            yield "    <h3 class=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["heading_class"] ?? null), "html", null, true);
            yield "\">";
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("button_content", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "button_content");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "button_content");
                }
            }
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["button_content"] ?? null), "html", null, true);
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("button_content", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "button_content");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "button_content");
                }
            }
            yield "</h3>
  ";
        } elseif ((        // line 60
($context["heading_level"] ?? null) == "4")) {
            // line 61
            yield "    <h4 class=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["heading_class"] ?? null), "html", null, true);
            yield "\">";
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("button_content", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "button_content");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "button_content");
                }
            }
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["button_content"] ?? null), "html", null, true);
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("button_content", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "button_content");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "button_content");
                }
            }
            yield "</h4>
  ";
        } elseif ((        // line 62
($context["heading_level"] ?? null) == "5")) {
            // line 63
            yield "    <h5 class=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["heading_class"] ?? null), "html", null, true);
            yield "\">";
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("button_content", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "button_content");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "button_content");
                }
            }
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["button_content"] ?? null), "html", null, true);
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("button_content", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "button_content");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "button_content");
                }
            }
            yield "</h5>
  ";
        } elseif ((        // line 64
($context["heading_level"] ?? null) == "6")) {
            // line 65
            yield "    <h6 class=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["heading_class"] ?? null), "html", null, true);
            yield "\">";
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("button_content", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "button_content");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "button_content");
                }
            }
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["button_content"] ?? null), "html", null, true);
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("button_content", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "button_content");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "button_content");
                }
            }
            yield "</h6>
  ";
        } else {
            // line 67
            yield "    <h3 class=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["heading_class"] ?? null), "html", null, true);
            yield "\">";
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("button_content", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "button_content");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "button_content");
                }
            }
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["button_content"] ?? null), "html", null, true);
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("button_content", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "button_content");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "button_content");
                }
            }
            yield "</h3>
  ";
        }
        // line 69
        yield "
  <div class=\"";
        // line 70
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_classes"] ?? null), "html", null, true);
        yield "\" id=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_id"] ?? null), "html", null, true);
        yield "\" role=\"region\" aria-labelledby=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["button_id"] ?? null), "html", null, true);
        yield "\">
    ";
        // line 71
        yield from $this->unwrap()->yieldBlock('accordion_content', $context, $blocks);
        // line 74
        yield "  </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["open_by_default", "title"]);        yield from [];
    }

    // line 71
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_accordion_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 72
        yield "
    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "byte_theme:accordion";
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
        return array (  328 => 72,  321 => 71,  313 => 74,  311 => 71,  303 => 70,  300 => 69,  278 => 67,  256 => 65,  254 => 64,  233 => 63,  231 => 62,  210 => 61,  208 => 60,  187 => 59,  185 => 58,  164 => 57,  162 => 56,  141 => 55,  139 => 54,  136 => 53,  129 => 49,  127 => 40,  108 => 38,  99 => 37,  96 => 36,  93 => 35,  87 => 33,  84 => 32,  82 => 31,  79 => 30,  77 => 15,  74 => 14,  72 => 13,  69 => 12,  67 => 9,  64 => 8,  62 => 7,  59 => 6,  57 => 5,  54 => 4,  52 => 3,  50 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "byte_theme:accordion", "themes/contrib/byte_theme/components/accordion/accordion.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "if" => 54, "block" => 71];
        static $filters = ["clean_unique_id" => 1, "default" => 3, "escape" => 33];
        static $functions = ["html_cva" => 5, "include" => 41];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_unique_id', 'default', 'escape'],
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
