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

/* byte_theme:footer */
class __TwigTemplate_4f7b7fd656359ca748852e3e65ee5853 extends Template
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
            'footer_first' => [$this, 'block_footer_first'],
            'footer_last' => [$this, 'block_footer_last'],
            'footer_utility_first' => [$this, 'block_footer_utility_first'],
            'footer_utility_last' => [$this, 'block_footer_utility_last'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.byte_theme--footer"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "byte_theme:footer"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "byte_theme:footer"));
        // line 2
        $context["additional_classes"] = ((array_key_exists("footer_classes", $context)) ? (Twig\Extension\CoreExtension::default(($context["footer_classes"] ?? null), "")) : (""));
        // line 3
        if (is_iterable(($context["additional_classes"] ?? null))) {
            // line 4
            yield "  ";
            $context["additional_classes"] = Twig\Extension\CoreExtension::join(($context["additional_classes"] ?? null), " ");
        }
        // line 6
        yield "
";
        // line 7
        $context["footer_variants"] = Twig\Extra\Html\HtmlExtension::htmlCva(["flex", "flex-col"]);
        // line 8
        yield "
";
        // line 9
        $context["footer_top_variants"] = Twig\Extra\Html\HtmlExtension::htmlCva(["flex w-full flex-col justify-between gap-6 py-8 md:grid md:grid-cols-2 md:gap-6 [&_li]:text-lg [&_li]:xl:text-xl [&_li]:2xl:text-2xl", "border-t border-border"]);
        // line 17
        yield "
";
        // line 18
        $context["footer_first_col_variants"] = Twig\Extra\Html\HtmlExtension::htmlCva(["flex", "flex-col", "gap-6", "[&_.branding]:h-6"]);
        // line 19
        yield "
";
        // line 20
        $context["footer_last_col_variants"] = Twig\Extra\Html\HtmlExtension::htmlCva(["flex flex-col gap-2 md:mx-0 md:ms-auto md:w-xs lg:w-md", "[&_form]:flex [&_form]:flex-row [&_form]:gap-2 md:[&_form]:items-end"]);
        // line 23
        yield "
";
        // line 24
        $context["footer_bottom_variants"] = Twig\Extra\Html\HtmlExtension::htmlCva(["flex w-full flex-col gap-2 py-3 [&_li]:text-sm [&_li]:xl:text-md [&_li]:2xl:text-lg", "md:grid md:grid-cols-[minmax(0,2fr)_minmax(0,1fr)] md:gap-6 md:py-4", "border-t border-border"]);
        // line 33
        yield "
";
        // line 34
        $context["footer_bottom_col_variants"] = Twig\Extra\Html\HtmlExtension::htmlCva(["site-footer--bottom-col"], ["align" => ["left" => "", "right" => ["md:flex md:justify-end"]]]);
        // line 45
        yield "
<section class=\"site-footer container mx-auto px-4\">
  <div class=\"";
        // line 47
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["footer_variants"] ?? null), "apply", [[], ($context["additional_classes"] ?? null)], "method", false, false, true, 47), "html", null, true);
        yield "\">
    <div class=\"";
        // line 48
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["footer_top_variants"] ?? null), "apply", [[]], "method", false, false, true, 48), "html", null, true);
        yield "\">
      ";
        // line 49
        if (        $this->unwrap()->hasBlock("footer_first", $context, $blocks)) {
            // line 50
            yield "        <div class=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["footer_first_col_variants"] ?? null), "apply", [[]], "method", false, false, true, 50), "html", null, true);
            yield "\">
          ";
            // line 51
            yield from $this->unwrap()->yieldBlock('footer_first', $context, $blocks);
            // line 54
            yield "        </div>
      ";
        }
        // line 56
        yield "
      ";
        // line 57
        if (        $this->unwrap()->hasBlock("footer_last", $context, $blocks)) {
            // line 58
            yield "        <div class=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["footer_last_col_variants"] ?? null), "apply", [[]], "method", false, false, true, 58), "html", null, true);
            yield "\">
          ";
            // line 59
            yield from $this->unwrap()->yieldBlock('footer_last', $context, $blocks);
            // line 62
            yield "        </div>
      ";
        }
        // line 64
        yield "    </div>

    <div class=\"";
        // line 66
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["footer_bottom_variants"] ?? null), "apply", [[]], "method", false, false, true, 66), "html", null, true);
        yield "\">
      ";
        // line 67
        if (        $this->unwrap()->hasBlock("footer_utility_first", $context, $blocks)) {
            // line 68
            yield "        <div
          class=\"";
            // line 69
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source,             // line 70
($context["footer_bottom_col_variants"] ?? null), "apply", [["align" => "left"]], "method", false, false, true, 70), "html", null, true);
            // line 73
            yield "\"
        >
          ";
            // line 75
            yield from $this->unwrap()->yieldBlock('footer_utility_first', $context, $blocks);
            // line 78
            yield "        </div>
      ";
        }
        // line 80
        yield "
      ";
        // line 81
        if (        $this->unwrap()->hasBlock("footer_utility_last", $context, $blocks)) {
            // line 82
            yield "        <div
          class=\"";
            // line 83
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source,             // line 84
($context["footer_bottom_col_variants"] ?? null), "apply", [["align" => "right"]], "method", false, false, true, 84), "html", null, true);
            // line 87
            yield "\"
        >
          ";
            // line 89
            yield from $this->unwrap()->yieldBlock('footer_utility_last', $context, $blocks);
            // line 92
            yield "        </div>
      ";
        }
        // line 94
        yield "    </div>
  </div>
</section>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["footer_classes"]);        yield from [];
    }

    // line 51
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer_first(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 52
        yield "            ";
        // line 53
        yield "          ";
        yield from [];
    }

    // line 59
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer_last(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 60
        yield "            ";
        // line 61
        yield "          ";
        yield from [];
    }

    // line 75
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer_utility_first(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 76
        yield "            ";
        // line 77
        yield "          ";
        yield from [];
    }

    // line 89
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer_utility_last(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 90
        yield "            ";
        // line 91
        yield "          ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "byte_theme:footer";
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
        return array (  238 => 91,  236 => 90,  229 => 89,  224 => 77,  222 => 76,  215 => 75,  210 => 61,  208 => 60,  201 => 59,  196 => 53,  194 => 52,  187 => 51,  178 => 94,  174 => 92,  172 => 89,  168 => 87,  166 => 84,  165 => 83,  162 => 82,  160 => 81,  157 => 80,  153 => 78,  151 => 75,  147 => 73,  145 => 70,  144 => 69,  141 => 68,  139 => 67,  135 => 66,  131 => 64,  127 => 62,  125 => 59,  120 => 58,  118 => 57,  115 => 56,  111 => 54,  109 => 51,  104 => 50,  102 => 49,  98 => 48,  94 => 47,  90 => 45,  88 => 34,  85 => 33,  83 => 24,  80 => 23,  78 => 20,  75 => 19,  73 => 18,  70 => 17,  68 => 9,  65 => 8,  63 => 7,  60 => 6,  56 => 4,  54 => 3,  52 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "byte_theme:footer", "themes/contrib/byte_theme/components/footer/footer.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 2, "if" => 3, "block" => 51];
        static $filters = ["default" => 2, "join" => 4, "escape" => 47];
        static $functions = ["html_cva" => 7];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
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
