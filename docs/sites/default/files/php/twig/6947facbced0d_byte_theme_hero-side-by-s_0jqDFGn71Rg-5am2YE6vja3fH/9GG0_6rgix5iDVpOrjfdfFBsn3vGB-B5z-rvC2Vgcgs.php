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

/* byte_theme:hero-side-by-side */
class __TwigTemplate_3d9a11cd11241d267b35b10059975fb2 extends Template
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
            'hero_media' => [$this, 'block_hero_media'],
            'hero_content' => [$this, 'block_hero_content'],
            'hero_slot' => [$this, 'block_hero_slot'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.byte_theme--hero-side-by-side"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "byte_theme:hero-side-by-side"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "byte_theme:hero-side-by-side"));
        $context["hero"] = Twig\Extra\Html\HtmlExtension::htmlCva(["relative", "h-full", "flex"], ["imagePosition" => ["left" => "md:flex-row", "right" => "md:flex-row-reverse"], "heroFlexGap" => ["large" => "gap-4 md:gap-6 xl:gap-8", "extra-large" => "gap-16 md:gap-24 xl:gap-32"], "heroFlexDirectionMobile" => ["vertical" => "flex-col", "vertical-reverse" => "flex-col-reverse"], "paddingBlockStart" => ["0" => "pt-0", "16" => "pt-4", "32" => "pt-6 md:pt-7 xl:pt-8", "64" => "pt-10 md:pt-13 xl:pt-16"], "paddingBlockEnd" => ["0" => "pb-0", "16" => "pb-4", "32" => "pb-6 md:pb-7 xl:pb-8", "64" => "pb-10 md:pb-13 xl:pb-16"]]);
        // line 32
        yield "
";
        // line 33
        $context["bgd"] = Twig\Extra\Html\HtmlExtension::htmlCva(["absolute", "inset-0", "z-[-1]"], ["background" => ["primary" => "bg-primary text-primary-foreground", "secondary" => "bg-secondary text-secondary-foreground", "accent" => "bg-accent text-accent-foreground"]]);
        // line 45
        yield "
";
        // line 46
        $context["image"] = Twig\Extra\Html\HtmlExtension::htmlCva(["flex-1", "overflow-hidden", "rounded-none"], ["imageSize" => ["2:1" => "aspect-2/1", "16:9" => "aspect-16/9", "3:2" => "aspect-3/2", "4:3" => "aspect-4/3", "1:1" => "aspect-1/1"], "imageRadius" => ["small" => "rounded-sm", "large" => "rounded-xl md:rounded-2xl", "extra-large" => "rounded-[24px] md:rounded-[32px]"]]);
        // line 65
        yield "
";
        // line 66
        $context["hero_classes"] = CoreExtension::getAttribute($this->env, $this->source,         // line 67
($context["hero"] ?? null), "apply", [["imagePosition" =>         // line 68
($context["image_position"] ?? null), "heroFlexGap" => ((        // line 69
array_key_exists("hero_flex_gap", $context)) ? (Twig\Extension\CoreExtension::default(($context["hero_flex_gap"] ?? null), "large")) : ("large")), "heroFlexDirectionMobile" =>         // line 70
($context["hero_flex_direction_mobile"] ?? null), "paddingBlockStart" =>         // line 71
($context["padding_block_start"] ?? null), "paddingBlockEnd" =>         // line 72
($context["padding_block_end"] ?? null)]], "method", false, false, true, 67);
        // line 75
        yield "
";
        // line 76
        $context["bgd_classes"] = CoreExtension::getAttribute($this->env, $this->source,         // line 77
($context["bgd"] ?? null), "apply", [["background" =>         // line 78
($context["background"] ?? null)]], "method", false, false, true, 77);
        // line 81
        yield "
";
        // line 82
        $context["image_classes"] = CoreExtension::getAttribute($this->env, $this->source,         // line 83
($context["image"] ?? null), "apply", [["imageSize" =>         // line 84
($context["image_size"] ?? null), "imageRadius" =>         // line 85
($context["image_radius"] ?? null)]], "method", false, false, true, 83);
        // line 88
        yield "
<section class=\"";
        // line 89
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["hero_classes"] ?? null), "html", null, true);
        yield "\">
  ";
        // line 90
        if (( !Twig\Extension\CoreExtension::testEmpty(($context["background"] ?? null)) && (($context["background"] ?? null) != "None"))) {
            // line 91
            yield "    <div class=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["bgd_classes"] ?? null), "html", null, true);
            yield "\"></div>
  ";
        }
        // line 93
        yield "
  <div class=\"";
        // line 94
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["image_classes"] ?? null), "html", null, true);
        yield "\">
    ";
        // line 95
        yield from $this->unwrap()->yieldBlock('hero_media', $context, $blocks);
        // line 105
        yield "  </div>
  <div class=\"flex flex-1 flex-col gap-6\">
    ";
        // line 107
        yield from $this->unwrap()->yieldBlock('hero_content', $context, $blocks);
        // line 112
        yield "  </div>
</section>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["image_position", "hero_flex_gap", "hero_flex_direction_mobile", "padding_block_start", "padding_block_end", "background", "image_size", "image_radius", "media"]);        yield from [];
    }

    // line 95
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_hero_media(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 96
        yield "      ";
        try {
            $_v0 = $this->load("canvas:image", 96);
        } catch (LoaderError $e) {
            // ignore missing template
            $_v0 = null;
        }
        if ($_v0) {
            yield from $_v0->unwrap()->yield(CoreExtension::toArray(["src" => CoreExtension::getAttribute($this->env, $this->source,             // line 97
($context["media"] ?? null), "src", [], "any", false, false, true, 97), "alt" => CoreExtension::getAttribute($this->env, $this->source,             // line 98
($context["media"] ?? null), "alt", [], "any", false, false, true, 98), "class" => "object-cover w-full h-full", "width" => CoreExtension::getAttribute($this->env, $this->source,             // line 100
($context["media"] ?? null), "width", [], "any", false, false, true, 100), "height" => CoreExtension::getAttribute($this->env, $this->source,             // line 101
($context["media"] ?? null), "height", [], "any", false, false, true, 101), "sizes" => "50vw"]));
        }
        // line 104
        yield "    ";
        yield from [];
    }

    // line 107
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_hero_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 108
        yield "      ";
        yield from $this->unwrap()->yieldBlock('hero_slot', $context, $blocks);
        // line 111
        yield "    ";
        yield from [];
    }

    // line 108
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_hero_slot(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 109
        yield "
      ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "byte_theme:hero-side-by-side";
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
        return array (  175 => 109,  168 => 108,  163 => 111,  160 => 108,  153 => 107,  148 => 104,  145 => 101,  144 => 100,  143 => 98,  142 => 97,  133 => 96,  126 => 95,  118 => 112,  116 => 107,  112 => 105,  110 => 95,  106 => 94,  103 => 93,  97 => 91,  95 => 90,  91 => 89,  88 => 88,  86 => 85,  85 => 84,  84 => 83,  83 => 82,  80 => 81,  78 => 78,  77 => 77,  76 => 76,  73 => 75,  71 => 72,  70 => 71,  69 => 70,  68 => 69,  67 => 68,  66 => 67,  65 => 66,  62 => 65,  60 => 46,  57 => 45,  55 => 33,  52 => 32,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "byte_theme:hero-side-by-side", "themes/contrib/byte_theme/components/hero-side-by-side/hero-side-by-side.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "if" => 90, "block" => 95, "include" => 96];
        static $filters = ["default" => 69, "escape" => 89];
        static $functions = ["html_cva" => 2];

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
