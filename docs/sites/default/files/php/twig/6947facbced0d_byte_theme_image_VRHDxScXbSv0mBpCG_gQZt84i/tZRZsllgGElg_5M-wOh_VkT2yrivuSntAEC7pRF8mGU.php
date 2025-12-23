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

/* byte_theme:image */
class __TwigTemplate_4aa510263899a3d4bbb33579d557ad1d extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.byte_theme--image"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "byte_theme:image"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "byte_theme:image"));
        $context["has_radius"] = (((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["radius"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("yes") : ("no"));
        // line 2
        $context["has_url"] = (((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["url"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("yes") : ("no"));
        // line 3
        yield "
";
        // line 4
        $context["image_container"] = Twig\Extra\Html\HtmlExtension::htmlCva("w-full", ["size" => ["2:1" => "aspect-2/1", "16:9" => "aspect-16/9", "3:2" => "aspect-3/2", "4:3" => "aspect-4/3", "1:1" => "aspect-1/1"], "hasRadius" => ["yes" => "overflow-hidden", "no" => "rounded-none"], "radius" => ["small" => "rounded-sm", "large" => "rounded-xl md:rounded-2xl", "extra-large" => "rounded-[24px] md:rounded-[32px]"]]);
        // line 27
        yield "
";
        // line 28
        $context["container_classes"] = CoreExtension::getAttribute($this->env, $this->source,         // line 29
($context["image_container"] ?? null), "apply", [["size" =>         // line 30
($context["size"] ?? null), "hasRadius" =>         // line 31
($context["has_radius"] ?? null), "radius" =>         // line 32
($context["radius"] ?? null)]], "method", false, false, true, 29);
        // line 35
        yield "
<figure>
  <div class=\"";
        // line 37
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["container_classes"] ?? null), "html", null, true);
        yield "\">
    ";
        // line 38
        yield from $this->unwrap()->yieldBlock('media', $context, $blocks);
        // line 59
        yield "  </div>
  ";
        // line 60
        if ((($tmp = ($context["caption"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 61
            yield "    <figcaption class=\"block py-1 text-sm lg:py-2 lg:text-base\">
      ";
            // line 62
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("caption", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "caption");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "caption");
                }
            }
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["caption"] ?? null), "html", null, true);
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("caption", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "caption");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "caption");
                }
            }
            yield "
    </figcaption>
  ";
        }
        // line 65
        yield "</figure>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["radius", "url", "size", "caption", "media"]);        yield from [];
    }

    // line 38
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_media(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 39
        yield "      ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["url"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 40
            yield "        <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true);
            yield "\" class=\"group\">
          ";
            // line 41
            try {
                $_v0 = $this->load("canvas:image", 41);
            } catch (LoaderError $e) {
                // ignore missing template
                $_v0 = null;
            }
            if ($_v0) {
                yield from $_v0->unwrap()->yield(CoreExtension::toArray(["src" => CoreExtension::getAttribute($this->env, $this->source,                 // line 42
($context["media"] ?? null), "src", [], "any", false, false, true, 42), "alt" => CoreExtension::getAttribute($this->env, $this->source,                 // line 43
($context["media"] ?? null), "alt", [], "any", false, false, true, 43), "class" => "object-cover w-full h-full group-hover:scale-105 duration-300", "width" => CoreExtension::getAttribute($this->env, $this->source,                 // line 45
($context["media"] ?? null), "width", [], "any", false, false, true, 45), "height" => CoreExtension::getAttribute($this->env, $this->source,                 // line 46
($context["media"] ?? null), "height", [], "any", false, false, true, 46)]));
            }
            // line 48
            yield "        </a>
      ";
        } else {
            // line 50
            yield "        ";
            try {
                $_v1 = $this->load("canvas:image", 50);
            } catch (LoaderError $e) {
                // ignore missing template
                $_v1 = null;
            }
            if ($_v1) {
                yield from $_v1->unwrap()->yield(CoreExtension::toArray(["src" => CoreExtension::getAttribute($this->env, $this->source,                 // line 51
($context["media"] ?? null), "src", [], "any", false, false, true, 51), "alt" => CoreExtension::getAttribute($this->env, $this->source,                 // line 52
($context["media"] ?? null), "alt", [], "any", false, false, true, 52), "class" => "object-cover w-full h-full", "width" => CoreExtension::getAttribute($this->env, $this->source,                 // line 54
($context["media"] ?? null), "width", [], "any", false, false, true, 54), "height" => CoreExtension::getAttribute($this->env, $this->source,                 // line 55
($context["media"] ?? null), "height", [], "any", false, false, true, 55)]));
            }
            // line 57
            yield "      ";
        }
        // line 58
        yield "    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "byte_theme:image";
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
        return array (  162 => 58,  159 => 57,  156 => 55,  155 => 54,  154 => 52,  153 => 51,  144 => 50,  140 => 48,  137 => 46,  136 => 45,  135 => 43,  134 => 42,  126 => 41,  121 => 40,  118 => 39,  111 => 38,  104 => 65,  84 => 62,  81 => 61,  79 => 60,  76 => 59,  74 => 38,  70 => 37,  66 => 35,  64 => 32,  63 => 31,  62 => 30,  61 => 29,  60 => 28,  57 => 27,  55 => 4,  52 => 3,  50 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "byte_theme:image", "themes/contrib/byte_theme/components/image/image.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "block" => 38, "if" => 60, "include" => 41];
        static $filters = ["escape" => 37];
        static $functions = ["html_cva" => 5];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if', 'include'],
                ['escape'],
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
