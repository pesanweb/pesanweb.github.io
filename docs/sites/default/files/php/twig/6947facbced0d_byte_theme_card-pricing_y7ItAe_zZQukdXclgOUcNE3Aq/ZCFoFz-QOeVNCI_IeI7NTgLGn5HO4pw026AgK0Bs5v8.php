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

/* byte_theme:card-pricing */
class __TwigTemplate_ef2f462c27a310810af16663c70478cf extends Template
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
            'richtext' => [$this, 'block_richtext'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.byte_theme--card-pricing"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "byte_theme:card-pricing"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "byte_theme:card-pricing"));
        $context["is_promoted"] = (((($tmp = ((array_key_exists("promote", $context)) ? (Twig\Extension\CoreExtension::default(($context["promote"] ?? null), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("yes") : ("no"));
        // line 2
        $context["button_variant"] = (((($tmp = ((array_key_exists("promote", $context)) ? (Twig\Extension\CoreExtension::default(($context["promote"] ?? null), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("secondary") : ("primary"));
        // line 3
        yield "
";
        // line 4
        $context["card"] = Twig\Extra\Html\HtmlExtension::htmlCva(["group relative flex flex-col gap-4 rounded-sm p-5 shadow-lg transition-colors duration-300 md:gap-6 xl:gap-7 2xl:p-8"], ["promoted" => ["no" => ["bg-card text-card-foreground hover:bg-muted hover:text-muted-foreground"], "yes" => ["bg-primary text-primary-foreground hover:bg-primary/80"]]]);
        // line 15
        yield "
";
        // line 16
        $context["price_direction"] = (((((array_key_exists("symbol_position", $context)) ? (Twig\Extension\CoreExtension::default(($context["symbol_position"] ?? null), "before")) : ("before")) == "before")) ? ("flex-row") : ("flex-row-reverse flex-align-start"));
        // line 17
        yield "
";
        // line 18
        $context["card_classes"] = CoreExtension::getAttribute($this->env, $this->source,         // line 19
($context["card"] ?? null), "apply", [["promoted" =>         // line 20
($context["is_promoted"] ?? null)]], "method", false, false, true, 19);
        // line 23
        yield "
<article class=\"";
        // line 24
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["card_classes"] ?? null), "html", null, true);
        yield "\">
  <header class=\"flex flex-col gap-2\">
    ";
        // line 26
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "byte_theme:heading", ["heading_text" => ((        // line 30
array_key_exists("heading_text", $context)) ? (Twig\Extension\CoreExtension::default(($context["heading_text"] ?? null), "")) : ("")), "level" => 3, "url" => "No URL", "text_color" => "default", "text_size" => "heading-responsive-4xl", "align" => "left", "heading_classes" => ["text-[1.375rem]", "leading-tight", "font-bold", "text-inherit"]], false));
        // line 40
        yield "

    <p class=\"text-lg leading-[1.2]\">
      ";
        // line 43
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
        yield "
    </p>
  </header>

  <div>
    <h4 class=\"flex text-4xl leading-none lg:text-5xl 2xl:text-[3.15rem] [&_sup]:!text-[60%]\">
      <data value=\"";
        // line 49
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["price"] ?? null), "html", null, true);
        yield "\" data-currency=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("currency_code", $context)) ? (Twig\Extension\CoreExtension::default(($context["currency_code"] ?? null), "USD")) : ("USD")), "html", null, true);
        yield "\" class=\"flex ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["price_direction"] ?? null), "html", null, true);
        yield "\">
        <span>";
        // line 50
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["currency_symbol"] ?? null), "html", null, true);
        yield "</span>
        <span>";
        // line 51
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["price"] ?? null), "html", null, true);
        yield "</span>
      </data>
    </h4>
  </div>

  ";
        // line 56
        if ((        $this->unwrap()->hasBlock("richtext", $context, $blocks) &&  !Twig\Extension\CoreExtension::testEmpty(($context["text"] ?? null)))) {
            // line 57
            yield "    <div class=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["features_hover_bg"] ?? null), "html", null, true);
            yield " rich-text border-t border-foreground/50 pt-4 text-inherit md:pt-6 2xl:pt-7 [&_li]:text-base [&_ul]:my-0\">
      ";
            // line 58
            yield from $this->unwrap()->yieldBlock('richtext', $context, $blocks);
            // line 71
            yield "    </div>
  ";
        }
        // line 73
        yield "
  <footer class=\"mt-auto\">
    ";
        // line 75
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "byte_theme:button", ["href" => ((        // line 79
array_key_exists("button_url", $context)) ? (Twig\Extension\CoreExtension::default(($context["button_url"] ?? null), "")) : ("")), "label" =>         // line 80
($context["button_label"] ?? null), "variant" =>         // line 81
($context["button_variant"] ?? null), "size" => "medium", "btn_classes" => ["before:absolute", "before:content-['']", "before:inset-0"]], false));
        // line 87
        yield "
  </footer>
</article>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["promote", "symbol_position", "heading_text", "description", "price", "currency_code", "currency_symbol", "text", "features_hover_bg", "button_url", "button_label"]);        yield from [];
    }

    // line 58
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_richtext(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 59
        yield "        ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "byte_theme:text", ["text" =>         // line 63
($context["text"] ?? null), "text_color" => "default", "text_size" => "normal"], false));
        // line 69
        yield "
      ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "byte_theme:card-pricing";
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
        return array (  170 => 69,  168 => 63,  166 => 59,  159 => 58,  150 => 87,  148 => 81,  147 => 80,  146 => 79,  145 => 75,  141 => 73,  137 => 71,  135 => 58,  130 => 57,  128 => 56,  120 => 51,  116 => 50,  108 => 49,  85 => 43,  80 => 40,  78 => 30,  77 => 26,  72 => 24,  69 => 23,  67 => 20,  66 => 19,  65 => 18,  62 => 17,  60 => 16,  57 => 15,  55 => 4,  52 => 3,  50 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "byte_theme:card-pricing", "themes/contrib/byte_theme/components/card-pricing/card-pricing.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "if" => 56, "block" => 58];
        static $filters = ["default" => 1, "escape" => 24];
        static $functions = ["html_cva" => 5, "include" => 27];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
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
