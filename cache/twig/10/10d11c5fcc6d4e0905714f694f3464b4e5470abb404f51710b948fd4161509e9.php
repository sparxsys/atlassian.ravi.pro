<?php

/* default.html.twig */
class __TwigTemplate_592170c48f52c13c14e2d20a46283c20ec9b22007394fafb2aaac717ee1dbbe7 extends Twig_Template
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
        $this->loadTemplate("default.html.twig", "default.html.twig", 1, "1523577510")->display(array_merge($context, array("github_link_position" => false)));
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' with { github_link_position: false } %}

    {% block content %}
        {% include 'partials/page.html.twig' %}
    {% endblock %}

    {% block footer %}{% endblock %}

{% endembed %}
", "default.html.twig", "/Users/ravisagar/projects/grav-admin/user/themes/learn2/templates/default.html.twig");
    }
}


/* default.html.twig */
class __TwigTemplate_592170c48f52c13c14e2d20a46283c20ec9b22007394fafb2aaac717ee1dbbe7_1523577510 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "default.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "        ";
        $this->loadTemplate("partials/page.html.twig", "default.html.twig", 4)->display($context);
        // line 5
        echo "    ";
    }

    // line 7
    public function block_footer($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 7,  92 => 5,  89 => 4,  86 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' with { github_link_position: false } %}

    {% block content %}
        {% include 'partials/page.html.twig' %}
    {% endblock %}

    {% block footer %}{% endblock %}

{% endembed %}
", "default.html.twig", "/Users/ravisagar/projects/grav-admin/user/themes/learn2/templates/default.html.twig");
    }
}
