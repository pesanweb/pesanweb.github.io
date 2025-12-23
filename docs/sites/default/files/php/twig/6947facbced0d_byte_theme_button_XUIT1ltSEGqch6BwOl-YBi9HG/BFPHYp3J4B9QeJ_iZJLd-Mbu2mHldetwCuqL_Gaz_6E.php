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

/* byte_theme:button */
class __TwigTemplate_0f142b748b1ed5e788862c4f9053859f extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.byte_theme--button"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "byte_theme:button"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "byte_theme:button"));
        $context["button_variant"] = ((array_key_exists("variant", $context)) ? (Twig\Extension\CoreExtension::default(($context["variant"] ?? null), "primary")) : ("primary"));
        // line 2
        $context["button_size"] = ((array_key_exists("size", $context)) ? (Twig\Extension\CoreExtension::default(($context["size"] ?? null), "medium")) : ("medium"));
        // line 3
        $context["is_disabled"] = ((array_key_exists("disabled", $context)) ? (Twig\Extension\CoreExtension::default(($context["disabled"] ?? null), false)) : (false));
        // line 4
        $context["has_icon"] =  !Twig\Extension\CoreExtension::testEmpty(($context["icon"] ?? null));
        // line 5
        yield "
";
        // line 6
        $context["button_variants"] = Twig\Extra\Html\HtmlExtension::htmlCva(["group flex items-center justify-center transition duration-300 ease-in-out", "leading-tight font-medium", "cursor-pointer no-underline outline-none hover:no-underline", "focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px]", "disabled:pointer-events-none disabled:opacity-50"], ["size" => ["small" => "gap-1 rounded-md px-4 py-[6px] text-sm", "medium" => "gap-2 rounded-lg px-5 py-[10px] text-base", "large" => "gap-3 rounded-xl px-6 py-3 text-lg leading-[22px]"], "variant" => ["primary" => ["bg-primary text-primary-foreground duration-300 ease-in-out hover:bg-primary/85"], "secondary" => ["bg-secondary text-secondary-foreground duration-300 ease-in-out hover:bg-secondary/80"], "primary-inverted" => ["bg-primary-foreground text-primary duration-300 ease-in-out hover:bg-primary-foreground/85"], "secondary-inverted" => ["bg-secondary-foreground text-secondary duration-300 ease-in-out hover:bg-secondary-foreground/80"]], "width" => ["full" => "w-full sm:w-fit", "fit" => "w-fit"], "iconPosition" => ["first" => "flex-row", "last" => "flex-row-reverse"]]);
        // line 38
        yield "
";
        // line 39
        $context["icon_size_map"] = ["small" => "extra-extra-small", "medium" => "extra-small", "large" => "small"];
        // line 44
        yield "
";
        // line 45
        $context["button_width"] = (((($tmp = ((array_key_exists("mobile_width", $context)) ? (Twig\Extension\CoreExtension::default(($context["mobile_width"] ?? null), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("full") : ("fit"));
        // line 46
        $context["icon_position"] = (((($tmp = ((array_key_exists("icon_first", $context)) ? (Twig\Extension\CoreExtension::default(($context["icon_first"] ?? null), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("first") : ("last"));
        // line 47
        $context["icon_classes"] = "transition duration-300 ease-in-out group-hover:translate-x-1";
        // line 48
        yield "
";
        // line 50
        $context["additional_classes"] = ((array_key_exists("btn_classes", $context)) ? (Twig\Extension\CoreExtension::default(($context["btn_classes"] ?? null), "")) : (""));
        // line 51
        if (is_iterable(($context["additional_classes"] ?? null))) {
            // line 52
            yield "  ";
            $context["additional_classes"] = Twig\Extension\CoreExtension::join(($context["additional_classes"] ?? null), " ");
        }
        // line 54
        yield "
";
        // line 56
        $context["disabled_attr"] = (((($tmp = ($context["is_disabled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("aria-disabled=\"true\"") : (""));
        // line 57
        $context["button_disabled_attr"] = (((($tmp = ($context["is_disabled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
        // line 58
        $context["href"] = (((($tmp = ((array_key_exists("disabled", $context)) ? (Twig\Extension\CoreExtension::default(($context["disabled"] ?? null), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (null) : (($context["href"] ?? null)));
        // line 59
        yield "
";
        // line 60
        if ((($tmp = ($context["href"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 61
            yield "  <a
    href=\"";
            // line 62
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["href"] ?? null), "html", null, true);
            yield "\"
    class=\"";
            // line 63
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source,             // line 64
($context["button_variants"] ?? null), "apply", [["size" =>             // line 66
($context["button_size"] ?? null), "variant" =>             // line 67
($context["button_variant"] ?? null), "width" =>             // line 68
($context["button_width"] ?? null), "iconPosition" => (((($tmp =             // line 69
($context["has_icon"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["icon_position"] ?? null)) : ("last"))],             // line 71
($context["additional_classes"] ?? null)], "method", false, false, true, 64), "html", null, true);
            // line 73
            yield "\"
    ";
            // line 74
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["disabled_attr"] ?? null), "html", null, true);
            yield "
  >
    ";
            // line 76
            if ((($tmp = ($context["has_icon"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 77
                yield "      <span class=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["icon_classes"] ?? null), "html", null, true);
                yield "\">
        ";
                // line 78
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "@byte_theme/components/icon/icon.twig", ["weight" => "bold", "icon" =>                 // line 83
($context["icon"] ?? null), "icon_size" => (($_v0 =                 // line 84
($context["icon_size_map"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0[($context["button_size"] ?? null)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["icon_size_map"] ?? null), ($context["button_size"] ?? null), [], "array", false, false, true, 84))], false));
                // line 88
                yield "
      </span>
    ";
            }
            // line 91
            yield "    ";
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
            yield "
  </a>
";
        } else {
            // line 94
            yield "  <button
    class=\"";
            // line 95
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source,             // line 96
($context["button_variants"] ?? null), "apply", [["size" =>             // line 98
($context["button_size"] ?? null), "variant" =>             // line 99
($context["button_variant"] ?? null), "width" =>             // line 100
($context["button_width"] ?? null), "iconPosition" => (((($tmp =             // line 101
($context["has_icon"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["icon_position"] ?? null)) : ("last"))],             // line 103
($context["additional_classes"] ?? null)], "method", false, false, true, 96), "html", null, true);
            // line 105
            yield "\"
    ";
            // line 106
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["button_disabled_attr"] ?? null), "html", null, true);
            yield "
  >
    ";
            // line 108
            if ((($tmp = ($context["has_icon"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 109
                yield "      <span class=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["icon_classes"] ?? null), "html", null, true);
                yield "\">
        ";
                // line 110
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "@byte_theme/components/icon/icon.twig", ["weight" => "bold", "icon" =>                 // line 115
($context["icon"] ?? null), "icon_size" => (($_v1 =                 // line 116
($context["icon_size_map"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1[($context["button_size"] ?? null)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["icon_size_map"] ?? null), ($context["button_size"] ?? null), [], "array", false, false, true, 116))], false));
                // line 120
                yield "
      </span>
    ";
            }
            // line 123
            yield "    ";
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
            yield "
  </button>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["variant", "size", "disabled", "icon", "mobile_width", "icon_first", "btn_classes", "label"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "byte_theme:button";
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
        return array (  194 => 123,  189 => 120,  187 => 116,  186 => 115,  185 => 110,  180 => 109,  178 => 108,  173 => 106,  170 => 105,  168 => 103,  167 => 101,  166 => 100,  165 => 99,  164 => 98,  163 => 96,  162 => 95,  159 => 94,  138 => 91,  133 => 88,  131 => 84,  130 => 83,  129 => 78,  124 => 77,  122 => 76,  117 => 74,  114 => 73,  112 => 71,  111 => 69,  110 => 68,  109 => 67,  108 => 66,  107 => 64,  106 => 63,  102 => 62,  99 => 61,  97 => 60,  94 => 59,  92 => 58,  90 => 57,  88 => 56,  85 => 54,  81 => 52,  79 => 51,  77 => 50,  74 => 48,  72 => 47,  70 => 46,  68 => 45,  65 => 44,  63 => 39,  60 => 38,  58 => 6,  55 => 5,  53 => 4,  51 => 3,  49 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "byte_theme:button", "themes/contrib/byte_theme/components/button/button.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "if" => 51];
        static $filters = ["default" => 1, "join" => 52, "escape" => 62];
        static $functions = ["html_cva" => 7, "include" => 79];

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
