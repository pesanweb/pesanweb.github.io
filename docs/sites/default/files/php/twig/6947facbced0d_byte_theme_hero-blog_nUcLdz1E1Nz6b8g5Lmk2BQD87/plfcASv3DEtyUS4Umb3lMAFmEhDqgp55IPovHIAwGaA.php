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

/* byte_theme:hero-blog */
class __TwigTemplate_13b8883abdb4298fee9a12be4be14870 extends Template
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
            'title' => [$this, 'block_title'],
            'author' => [$this, 'block_author'],
            'blog_media' => [$this, 'block_blog_media'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.byte_theme--hero-blog"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "byte_theme:hero-blog"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "byte_theme:hero-blog"));
        $context["classes"] = Twig\Extension\CoreExtension::filter($this->env, Twig\Extension\CoreExtension::merge(((array_key_exists("classes", $context)) ? (Twig\Extension\CoreExtension::default(($context["classes"] ?? null), [])) : ([])), ["hero-blog", "py-8", "md:py-12"]), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return  !Twig\Extension\CoreExtension::testEmpty(($context["v"] ?? null)); });
        // line 2
        yield "
";
        // line 3
        $context["date_formatted"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate(($context["date"] ?? null), "m.d.Y");
        // line 4
        yield "
<section class=\"";
        // line 5
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::join(($context["classes"] ?? null), " "), "html", null, true);
        yield "\">
  <div class=\"hero-blog--content container mx-auto flex flex-col gap-8 px-6 md:w-full md:gap-12 lg:w-10/12 xl:w-8/12\">
    <p>
      <time datetime=\"";
        // line 8
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["date_formatted"] ?? null), "html", null, true);
        yield "\">";
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("date_formatted", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "date_formatted");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "date_formatted");
            }
        }
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["date_formatted"] ?? null), "html", null, true);
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("date_formatted", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "date_formatted");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "date_formatted");
            }
        }
        yield "</time>
    </p>

    ";
        // line 11
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 27
        yield "
    ";
        // line 28
        yield from $this->unwrap()->yieldBlock('author', $context, $blocks);
        // line 35
        yield "  </div>

  ";
        // line 37
        if (        $this->unwrap()->hasBlock("blog_media", $context, $blocks)) {
            // line 38
            yield "    <div class=\"w:full relative\">
      <div class=\"relative mx-auto mt-8 px-6 md:mt-12 lg:w-full xl:w-10/12\">
        ";
            // line 40
            yield from $this->unwrap()->yieldBlock('blog_media', $context, $blocks);
            // line 43
            yield "      </div>
      <div class=\"absolute -bottom-8 z-[-1] h-[calc(33.3%+32px)] w-full bg-accent md:-bottom-12 md:h-[calc(33.3%+48px)]\"></div>
    </div>
  ";
        }
        // line 47
        yield "</section>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["v", "date", "heading_text", "level", "author"]);        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 12
        yield "      ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "byte_theme:heading", ["heading_text" => ((        // line 16
array_key_exists("heading_text", $context)) ? (Twig\Extension\CoreExtension::default(($context["heading_text"] ?? null), "")) : ("")), "level" => ((        // line 17
array_key_exists("level", $context)) ? (Twig\Extension\CoreExtension::default(($context["level"] ?? null), 1)) : (1)), "url" => "No URL", "text_color" => "default", "text_size" => "heading-responsive-4xl", "align" => "left"], false));
        // line 25
        yield "
    ";
        yield from [];
    }

    // line 28
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_author(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 29
        yield "      ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["author"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 30
            yield "        <p>
          By ";
            // line 31
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("author", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "author");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "author");
                }
            }
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["author"] ?? null), "html", null, true);
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("author", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "author");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "author");
                }
            }
            yield "
        </p>
      ";
        }
        // line 34
        yield "    ";
        yield from [];
    }

    // line 40
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_blog_media(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 41
        yield "
        ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "byte_theme:hero-blog";
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
        return array (  183 => 41,  176 => 40,  171 => 34,  151 => 31,  148 => 30,  145 => 29,  138 => 28,  132 => 25,  130 => 17,  129 => 16,  127 => 12,  120 => 11,  113 => 47,  107 => 43,  105 => 40,  101 => 38,  99 => 37,  95 => 35,  93 => 28,  90 => 27,  88 => 11,  66 => 8,  60 => 5,  57 => 4,  55 => 3,  52 => 2,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "byte_theme:hero-blog", "themes/contrib/byte_theme/components/hero-blog/hero-blog.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "block" => 11, "if" => 37];
        static $filters = ["filter" => 1, "merge" => 1, "default" => 1, "date" => 3, "escape" => 5, "join" => 5];
        static $functions = ["include" => 13];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['filter', 'merge', 'default', 'date', 'escape', 'join'],
                ['include'],
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
