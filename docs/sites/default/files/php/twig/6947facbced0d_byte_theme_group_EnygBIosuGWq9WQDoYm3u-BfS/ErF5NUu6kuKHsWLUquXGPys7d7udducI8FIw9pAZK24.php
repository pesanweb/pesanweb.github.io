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

/* byte_theme:group */
class __TwigTemplate_5a615957d603c9cc11ec71b5db4ce086 extends Template
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
            'group_slot' => [$this, 'block_group_slot'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.byte_theme--group"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "byte_theme:group"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "byte_theme:group"));
        $context["group"] = Twig\Extra\Html\HtmlExtension::htmlCva(["flex", "bg-none"], ["flexDirection" => ["column" => "flex-col", "row" => "flex-row", "column-reverse" => "flex-col-reverse", "row-reverse" => "flex-row-reverse"], "groupAlign" => ["start" => "items-start justify-start", "center" => "items-center justify-center", "end" => "items-end justify-end"], "flexAlign" => ["start" => "self-start", "center" => "self-center", "end" => "self-end"], "flexGap" => ["sm" => "gap-2", "md" => "gap-4", "lg" => "gap-8", "xl" => "gap-16"], "radius" => ["sm" => "rounded-sm", "md" => "rounded-md", "lg" => "rounded-lg", "xl" => "rounded-xl"], "padding" => ["sm" => "p-4", "md" => "p-8", "lg" => "p-16", "xl" => "p-32"], "background" => ["primary" => "bg-primary", "secondary" => "bg-secondary", "accent" => "bg-accent"]]);
        // line 47
        yield "
";
        // line 48
        $context["group_classes"] = CoreExtension::getAttribute($this->env, $this->source,         // line 49
($context["group"] ?? null), "apply", [["flexDirection" =>         // line 50
($context["flex_direction"] ?? null), "groupAlign" => ((        // line 51
array_key_exists("items_align", $context)) ? (Twig\Extension\CoreExtension::default(($context["items_align"] ?? null), "start")) : ("start")), "flexAlign" => ((        // line 52
array_key_exists("flex_align", $context)) ? (Twig\Extension\CoreExtension::default(($context["flex_align"] ?? null), "center")) : ("center")), "flexGap" =>         // line 53
($context["flex_gap"] ?? null), "radius" =>         // line 54
($context["radius"] ?? null), "padding" =>         // line 55
($context["padding"] ?? null), "background" =>         // line 56
($context["background"] ?? null)]], "method", false, false, true, 49);
        // line 59
        yield "
<div class=\"";
        // line 60
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["group_classes"] ?? null), "html", null, true);
        yield "\">
  ";
        // line 61
        yield from $this->unwrap()->yieldBlock('group_slot', $context, $blocks);
        // line 64
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["flex_direction", "items_align", "flex_align", "flex_gap", "radius", "padding", "background"]);        yield from [];
    }

    // line 61
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_group_slot(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 62
        yield "
  ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "byte_theme:group";
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
        return array (  86 => 62,  79 => 61,  72 => 64,  70 => 61,  66 => 60,  63 => 59,  61 => 56,  60 => 55,  59 => 54,  58 => 53,  57 => 52,  56 => 51,  55 => 50,  54 => 49,  53 => 48,  50 => 47,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "byte_theme:group", "themes/contrib/byte_theme/components/group/group.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "block" => 61];
        static $filters = ["default" => 51, "escape" => 60];
        static $functions = ["html_cva" => 2];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block'],
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
