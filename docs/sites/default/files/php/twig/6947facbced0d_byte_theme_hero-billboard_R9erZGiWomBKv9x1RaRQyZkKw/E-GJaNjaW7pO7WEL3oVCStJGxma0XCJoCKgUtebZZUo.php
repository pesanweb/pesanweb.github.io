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

/* byte_theme:hero-billboard */
class __TwigTemplate_e2b2e9aa98123da8d7417f119bbb06a0 extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.byte_theme--hero-billboard"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "byte_theme:hero-billboard"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "byte_theme:hero-billboard"));
        $context["hero_height"] = ((array_key_exists("height", $context)) ? (Twig\Extension\CoreExtension::default(($context["height"] ?? null), "full")) : ("full"));
        // line 2
        $context["hero_flex_position"] = ((array_key_exists("flex_position", $context)) ? (Twig\Extension\CoreExtension::default(($context["flex_position"] ?? null), "center-left")) : ("center-left"));
        // line 3
        $context["hero_overlay_opacity"] = ((array_key_exists("overlay_opacity", $context)) ? (Twig\Extension\CoreExtension::default(($context["overlay_opacity"] ?? null), "40%")) : ("40%"));
        // line 4
        $context["hero_object_position"] = ((array_key_exists("object_position", $context)) ? (Twig\Extension\CoreExtension::default(($context["object_position"] ?? null), "center")) : ("center"));
        // line 5
        yield "
";
        // line 7
        $context["additional_classes"] = ((array_key_exists("classes", $context)) ? (Twig\Extension\CoreExtension::default(($context["classes"] ?? null), "")) : (""));
        // line 8
        if (is_iterable(($context["additional_classes"] ?? null))) {
            // line 9
            yield "  ";
            $context["additional_classes"] = Twig\Extension\CoreExtension::join(($context["additional_classes"] ?? null), " ");
        }
        // line 11
        yield "
";
        // line 12
        $context["hero_variants"] = Twig\Extra\Html\HtmlExtension::htmlCva(["hero-overlay", "relative", "flex", "flex-col"], ["height" => ["full" => "h-dvh", "large" => ["h-3/4", "min-h-[500px]", "md:max-h-[600px]", "xl:max-h-[800px]"], "ribbon" => ["h-1/2", "md:min-h-[400px]", "md:max-h-[450px]", "xl:max-h-[600px]"]], "flexPosition" => ["top-left" => "justify-start", "center-left" => "justify-center-safe", "bottom-left" => "justify-end", "hero-center" => "justify-center"]]);
        // line 30
        yield "
";
        // line 31
        $context["overlay_variants"] = Twig\Extra\Html\HtmlExtension::htmlCva(["absolute", "inset-0"], ["opacity" => ["0%" => "bg-black/0", "20%" => "bg-black/20", "40%" => "bg-black/40", "60%" => "bg-black/60", "75%" => "bg-black/75"]]);
        // line 45
        yield "
";
        // line 46
        $context["image_variants"] = Twig\Extra\Html\HtmlExtension::htmlCva(["h-full", "w-full", "object-cover"], ["position" => ["top" => "object-top", "center" => "object-center", "bottom" => "object-bottom"]]);
        // line 58
        yield "
";
        // line 59
        $context["content_variants"] = Twig\Extra\Html\HtmlExtension::htmlCva(["hero-overlay--content", "relative", "z-1", "flex", "flex-col", "gap-6", "py-6", "md:py-10", "xl:py-20"], ["flexPosition" => ["top-left" => "lg:max-w-2/3", "center-left" => "lg:max-w-2/3", "bottom-left" => "lg:max-w-2/3", "hero-center" => ["text-center", "items-center", "lg:mx-auto", "lg:max-w-2/3"]]]);
        // line 72
        yield "
<section
  class=\"";
        // line 74
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source,         // line 75
($context["hero_variants"] ?? null), "apply", [["height" =>         // line 77
($context["hero_height"] ?? null), "flexPosition" =>         // line 78
($context["hero_flex_position"] ?? null)],         // line 80
($context["additional_classes"] ?? null)], "method", false, false, true, 75), "html", null, true);
        // line 82
        yield "\"
>
  ";
        // line 84
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["media"] ?? null), "src", [], "any", false, false, true, 84))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 85
            yield "    <div class=\"hero-overlay--media absolute z-[-1] h-full w-full\">
      ";
            // line 86
            yield from $this->unwrap()->yieldBlock('hero_media', $context, $blocks);
            // line 106
            yield "    </div>
  ";
        }
        // line 108
        yield "  <div class=\"container mx-auto px-4\">
    <div
      class=\"";
        // line 110
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source,         // line 111
($context["content_variants"] ?? null), "apply", [["flexPosition" =>         // line 112
($context["hero_flex_position"] ?? null)]], "method", false, false, true, 111), "html", null, true);
        // line 114
        yield "\"
    >
      ";
        // line 116
        yield from $this->unwrap()->yieldBlock('hero_content', $context, $blocks);
        // line 121
        yield "    </div>
  </div>
</section>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["height", "flex_position", "overlay_opacity", "object_position", "classes", "media"]);        yield from [];
    }

    // line 86
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_hero_media(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 87
        yield "        ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["media"] ?? null), "src", [], "any", false, false, true, 87))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 88
            yield "          <div
            class=\"";
            // line 89
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source,             // line 90
($context["overlay_variants"] ?? null), "apply", [["opacity" =>             // line 91
($context["hero_overlay_opacity"] ?? null)]], "method", false, false, true, 90), "html", null, true);
            // line 93
            yield "\"
          ></div>
        ";
        }
        // line 96
        yield "        ";
        try {
            $_v0 = $this->load("canvas:image", 96);
        } catch (LoaderError $e) {
            // ignore missing template
            $_v0 = null;
        }
        if ($_v0) {
            yield from $_v0->unwrap()->yield(CoreExtension::toArray(["src" => CoreExtension::getAttribute($this->env, $this->source,             // line 97
($context["media"] ?? null), "src", [], "any", false, false, true, 97), "alt" => CoreExtension::getAttribute($this->env, $this->source,             // line 98
($context["media"] ?? null), "alt", [], "any", false, false, true, 98), "width" => CoreExtension::getAttribute($this->env, $this->source,             // line 99
($context["media"] ?? null), "width", [], "any", false, false, true, 99), "height" => CoreExtension::getAttribute($this->env, $this->source,             // line 100
($context["media"] ?? null), "height", [], "any", false, false, true, 100), "class" => CoreExtension::getAttribute($this->env, $this->source,             // line 101
($context["image_variants"] ?? null), "apply", [["position" =>             // line 102
($context["hero_object_position"] ?? null)]], "method", false, false, true, 101)]));
        }
        // line 105
        yield "      ";
        yield from [];
    }

    // line 116
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_hero_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 117
        yield "        ";
        yield from $this->unwrap()->yieldBlock('hero_slot', $context, $blocks);
        // line 120
        yield "      ";
        yield from [];
    }

    // line 117
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_hero_slot(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 118
        yield "
        ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "byte_theme:hero-billboard";
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
        return array (  203 => 118,  196 => 117,  191 => 120,  188 => 117,  181 => 116,  176 => 105,  173 => 102,  172 => 101,  171 => 100,  170 => 99,  169 => 98,  168 => 97,  159 => 96,  154 => 93,  152 => 91,  151 => 90,  150 => 89,  147 => 88,  144 => 87,  137 => 86,  128 => 121,  126 => 116,  122 => 114,  120 => 112,  119 => 111,  118 => 110,  114 => 108,  110 => 106,  108 => 86,  105 => 85,  103 => 84,  99 => 82,  97 => 80,  96 => 78,  95 => 77,  94 => 75,  93 => 74,  89 => 72,  87 => 59,  84 => 58,  82 => 46,  79 => 45,  77 => 31,  74 => 30,  72 => 12,  69 => 11,  65 => 9,  63 => 8,  61 => 7,  58 => 5,  56 => 4,  54 => 3,  52 => 2,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "byte_theme:hero-billboard", "themes/contrib/byte_theme/components/hero-billboard/hero-billboard.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "if" => 8, "block" => 86, "include" => 96];
        static $filters = ["default" => 1, "join" => 9, "escape" => 75];
        static $functions = ["html_cva" => 13];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block', 'include'],
                ['default', 'join', 'escape'],
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
