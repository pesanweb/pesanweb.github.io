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

/* byte_theme:card-logo */
class __TwigTemplate_bc2560b9ea285bd4ae38117bd2c094d9 extends Template
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
            'logo' => [$this, 'block_logo'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.byte_theme--card-logo"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "byte_theme:card-logo"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "byte_theme:card-logo"));
        $context["has_url"] = (((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["url"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("yes") : ("no"));
        // line 2
        yield "
";
        // line 3
        $context["tile"] = Twig\Extra\Html\HtmlExtension::htmlCva(["max-w-full md:min-h-[150px]"], ["hasUrl" => ["yes" => "group cursor-pointer transition duration-300 hover:scale-103 hover:opacity-90", "no" => ""], "backgroundColor" => ["primary" => "bg-primary text-primary-foreground", "secondary" => "bg-secondary text-secondary-foreground", "accent" => "bg-accent text-accent-foreground", "muted" => "bg-muted text-muted-foreground", "inverted" => "bg-foreground text-background", "noColor" => "bg-none text-foreground"], "borderRadius" => ["small" => "rounded-sm", "medium" => "rounded-xl md:rounded-2xl", "large" => "rounded-[24px] md:rounded-[32px]", "noRadius" => "rounded-none"]]);
        // line 28
        yield "
";
        // line 29
        $context["tile_classes"] = CoreExtension::getAttribute($this->env, $this->source,         // line 30
($context["tile"] ?? null), "apply", [["hasUrl" =>         // line 31
($context["has_url"] ?? null), "backgroundColor" => ((        // line 32
array_key_exists("background_color", $context)) ? (Twig\Extension\CoreExtension::default(($context["background_color"] ?? null), "noColor")) : ("noColor")), "borderRadius" => ((        // line 33
array_key_exists("border_radius", $context)) ? (Twig\Extension\CoreExtension::default(($context["border_radius"] ?? null), "noRadius")) : ("noRadius"))]], "method", false, false, true, 30);
        // line 36
        yield "
<div class=\"";
        // line 37
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["tile_classes"] ?? null), "html", null, true);
        yield "\">
  <div class=\"flex h-[100%] items-center justify-center p-[10%]\">
    ";
        // line 39
        yield from $this->unwrap()->yieldBlock('logo', $context, $blocks);
        // line 62
        yield "  </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["url", "background_color", "border_radius", "media"]);        yield from [];
    }

    // line 39
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_logo(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 40
        yield "      ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["url"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 41
            yield "        <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true);
            yield "\">
          ";
            // line 42
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["media"] ?? null), "src", [], "any", false, false, true, 42))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 43
                yield "            ";
                try {
                    $_v0 = $this->load("canvas:image", 43);
                } catch (LoaderError $e) {
                    // ignore missing template
                    $_v0 = null;
                }
                if ($_v0) {
                    yield from $_v0->unwrap()->yield(CoreExtension::toArray(["src" => CoreExtension::getAttribute($this->env, $this->source,                     // line 44
($context["media"] ?? null), "src", [], "any", false, false, true, 44), "alt" => CoreExtension::getAttribute($this->env, $this->source,                     // line 45
($context["media"] ?? null), "alt", [], "any", false, false, true, 45), "width" => CoreExtension::getAttribute($this->env, $this->source,                     // line 46
($context["media"] ?? null), "width", [], "any", false, false, true, 46), "height" => CoreExtension::getAttribute($this->env, $this->source,                     // line 47
($context["media"] ?? null), "height", [], "any", false, false, true, 47)]));
                }
                // line 49
                yield "          ";
            }
            // line 50
            yield "        </a>
      ";
        } else {
            // line 52
            yield "        ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["media"] ?? null), "src", [], "any", false, false, true, 52))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 53
                yield "          ";
                try {
                    $_v1 = $this->load("canvas:image", 53);
                } catch (LoaderError $e) {
                    // ignore missing template
                    $_v1 = null;
                }
                if ($_v1) {
                    yield from $_v1->unwrap()->yield(CoreExtension::toArray(["src" => CoreExtension::getAttribute($this->env, $this->source,                     // line 54
($context["media"] ?? null), "src", [], "any", false, false, true, 54), "alt" => CoreExtension::getAttribute($this->env, $this->source,                     // line 55
($context["media"] ?? null), "alt", [], "any", false, false, true, 55), "width" => CoreExtension::getAttribute($this->env, $this->source,                     // line 56
($context["media"] ?? null), "width", [], "any", false, false, true, 56), "height" => CoreExtension::getAttribute($this->env, $this->source,                     // line 57
($context["media"] ?? null), "height", [], "any", false, false, true, 57)]));
                }
                // line 59
                yield "        ";
            }
            // line 60
            yield "      ";
        }
        // line 61
        yield "    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "byte_theme:card-logo";
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
        return array (  145 => 61,  142 => 60,  139 => 59,  136 => 57,  135 => 56,  134 => 55,  133 => 54,  124 => 53,  121 => 52,  117 => 50,  114 => 49,  111 => 47,  110 => 46,  109 => 45,  108 => 44,  99 => 43,  97 => 42,  92 => 41,  89 => 40,  82 => 39,  74 => 62,  72 => 39,  67 => 37,  64 => 36,  62 => 33,  61 => 32,  60 => 31,  59 => 30,  58 => 29,  55 => 28,  53 => 3,  50 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "byte_theme:card-logo", "themes/contrib/byte_theme/components/card-logo/card-logo.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "block" => 39, "if" => 40, "include" => 43];
        static $filters = ["default" => 32, "escape" => 37];
        static $functions = ["html_cva" => 4];

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
