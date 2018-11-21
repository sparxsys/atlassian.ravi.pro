<?php

/* partials/navigation.html.twig */
class __TwigTemplate_57e15e29a8524ea7dfcbe9ef068dc1be99a29be99568b0d5f780ef916ce4ce10 extends Twig_Template
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
        $context["macros"] = $this->loadTemplate("macros/macros.html.twig", "partials/navigation.html.twig", 1);
        // line 2
        echo "
<ul ";
        // line 3
        echo (((isset($context["tree"]) ? $context["tree"] : null)) ? ("class=\"tree\"") : (""));
        echo ">
    ";
        // line 4
        echo $context["macros"]->getnav_loop((isset($context["pages"]) ? $context["pages"] : null));
        echo "
</ul>

";
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import 'macros/macros.html.twig' as macros %}

<ul {{ tree ? 'class=\"tree\"' : '' }}>
    {{ macros.nav_loop(pages) }}
</ul>

", "partials/navigation.html.twig", "/Users/ravisagar/projects/grav-admin/user/themes/quark/templates/partials/navigation.html.twig");
    }
}
