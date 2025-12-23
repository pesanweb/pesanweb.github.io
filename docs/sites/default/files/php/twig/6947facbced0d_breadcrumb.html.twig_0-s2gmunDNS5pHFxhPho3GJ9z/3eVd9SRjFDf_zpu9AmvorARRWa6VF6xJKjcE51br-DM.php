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

/* themes/contrib/byte_theme/templates/navigation/breadcrumb.html.twig */
class __TwigTemplate_fc5fc0af886ac705617bded860ee8440 extends Template
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
        // line 10
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("byte_theme/breadcrumb"), "html", null, true);
        yield "
";
        // line 11
        if ((($tmp = ($context["breadcrumb"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 12
            yield "  ";
            $context["needs_truncation"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["breadcrumb"] ?? null)) > 3);
            // line 13
            yield "
  <nav aria-label=\"breadcrumb\" class=\"container mx-auto mb-2 w-full px-4 md:my-3 2xl:my-4\">
    <h2 id=\"system-breadcrumb\" class=\"sr-only\">";
            // line 15
            yield "Breadcrumb";
            yield "</h2>
    <ol class=\"m-0 flex list-none flex-row items-center gap-1 p-0 leading-none text-foreground md:gap-2\">
      ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumb"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 18
                yield "        ";
                $context["is_first"] = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 18);
                // line 19
                yield "        ";
                $context["is_last_two"] = (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "revindex", [], "any", false, false, true, 19) <= 2);
                // line 20
                yield "        ";
                $context["should_show"] = (( !($context["needs_truncation"] ?? null) || ($context["is_first"] ?? null)) || ($context["is_last_two"] ?? null));
                // line 21
                yield "
        ";
                // line 22
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 22)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 23
                    yield "          <li class=\"flex items-center gap-1 text-xs md:gap-2 md:text-sm 2xl:text-base\" aria-labelledby=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 23), "html", null, true);
                    yield "\">
            <a href=\"";
                    // line 24
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 24), "html", null, true);
                    yield "\" class=\"flex items-center no-underline hover:opacity-80\">
              ";
                    // line 25
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "@byte_theme/components/icon/icon.twig", ["weight" => "bold", "icon" => "house", "icon_size" => "extra-small"]));
                    // line 34
                    yield "
            </a>
          </li>
        ";
                }
                // line 38
                yield "
        ";
                // line 40
                yield "        ";
                if ((($context["needs_truncation"] ?? null) && (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 40) == 2))) {
                    // line 41
                    yield "          <li aria-hidden=\"true\" class=\"flex items-center text-xs md:text-sm\">
            ";
                    // line 42
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "@byte_theme/components/icon/icon.twig", ["weight" => "bold", "icon" => "dots-three", "icon_size" => "extra-small"]));
                    // line 51
                    yield "
          </li>
          <li aria-hidden=\"true\" class=\"flex items-center text-xs md:text-sm\">
            ";
                    // line 54
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "@byte_theme/components/icon/icon.twig", ["weight" => "bold", "icon" => "caret-right", "icon_size" => "extra-small"]));
                    // line 63
                    yield "
          </li>
        ";
                }
                // line 66
                yield "
        ";
                // line 68
                yield "        ";
                if ((($tmp = ($context["should_show"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 69
                    yield "          ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 69)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 70
                        yield "            <li class=\"active flex items-center text-xs md:text-sm 2xl:text-base\" aria-current=\"page\">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 70), "html", null, true);
                        yield "</li>
          ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 71
$context["item"], "url", [], "any", false, false, true, 71) &&  !($context["is_first"] ?? null))) {
                        // line 72
                        yield "            <li class=\"flex items-center text-xs md:text-sm 2xl:text-base\">
              <a href=\"";
                        // line 73
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 73), "html", null, true);
                        yield "\" class=\"no-underline hover:underline hover:underline-offset-2 focus:underline\">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 73), "html", null, true);
                        yield "</a>
            </li>
          ";
                    }
                    // line 76
                    yield "
          ";
                    // line 78
                    yield "          ";
                    if (( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 78) && (( !($context["needs_truncation"] ?? null) || ($context["is_last_two"] ?? null)) || ($context["is_first"] ?? null)))) {
                        // line 79
                        yield "            <li aria-hidden=\"true\" class=\"flex items-center text-xs md:text-sm\">
              ";
                        // line 80
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "@byte_theme/components/icon/icon.twig", ["weight" => "bold", "icon" => "caret-right", "icon_size" => "extra-small"]));
                        // line 89
                        yield "
            </li>
          ";
                    }
                    // line 92
                    yield "        ";
                }
                // line 93
                yield "      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            yield "    </ol>
  </nav>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["breadcrumb", "loop"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/byte_theme/templates/navigation/breadcrumb.html.twig";
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
        return array (  193 => 94,  179 => 93,  176 => 92,  171 => 89,  169 => 80,  166 => 79,  163 => 78,  160 => 76,  152 => 73,  149 => 72,  147 => 71,  142 => 70,  139 => 69,  136 => 68,  133 => 66,  128 => 63,  126 => 54,  121 => 51,  119 => 42,  116 => 41,  113 => 40,  110 => 38,  104 => 34,  102 => 25,  98 => 24,  93 => 23,  91 => 22,  88 => 21,  85 => 20,  82 => 19,  79 => 18,  62 => 17,  57 => 15,  53 => 13,  50 => 12,  48 => 11,  44 => 10,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/byte_theme/templates/navigation/breadcrumb.html.twig", "/var/www/html/web/themes/contrib/byte_theme/templates/navigation/breadcrumb.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 11, "set" => 12, "for" => 17];
        static $filters = ["escape" => 10, "length" => 12];
        static $functions = ["attach_library" => 10, "include" => 26];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape', 'length'],
                ['attach_library', 'include'],
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
