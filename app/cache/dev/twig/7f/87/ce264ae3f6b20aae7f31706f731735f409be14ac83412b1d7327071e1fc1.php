<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_7f87ce264ae3f6b20aae7f31706f731735f409be14ac83412b1d7327071e1fc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace"))) {
            // line 2
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace"));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->env->loadTemplate("TwigBundle:Exception:trace.txt.twig")->display(array("trace" => (isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace"))));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 14,  38 => 13,  35 => 4,  87 => 20,  55 => 13,  31 => 5,  25 => 3,  21 => 2,  94 => 22,  89 => 20,  85 => 19,  79 => 18,  75 => 17,  72 => 16,  64 => 12,  56 => 9,  24 => 4,  201 => 92,  199 => 91,  196 => 90,  187 => 84,  183 => 82,  173 => 74,  171 => 73,  168 => 72,  163 => 70,  158 => 67,  156 => 66,  142 => 59,  138 => 57,  136 => 56,  133 => 55,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  112 => 42,  105 => 40,  91 => 31,  86 => 28,  69 => 25,  66 => 15,  51 => 15,  49 => 19,  39 => 6,  19 => 1,  98 => 40,  93 => 9,  88 => 6,  78 => 40,  36 => 7,  27 => 4,  22 => 2,  57 => 16,  54 => 21,  43 => 8,  30 => 3,  176 => 65,  172 => 64,  169 => 63,  166 => 71,  161 => 61,  154 => 12,  151 => 63,  145 => 6,  125 => 67,  122 => 62,  120 => 61,  106 => 49,  101 => 24,  92 => 21,  90 => 45,  80 => 19,  68 => 14,  62 => 23,  50 => 8,  46 => 7,  44 => 10,  40 => 8,  33 => 10,  28 => 3,  26 => 5,  23 => 1,  70 => 34,  67 => 33,  41 => 9,  32 => 12,  29 => 3,);
    }
}