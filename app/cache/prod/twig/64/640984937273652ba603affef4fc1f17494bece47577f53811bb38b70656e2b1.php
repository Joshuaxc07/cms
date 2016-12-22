<?php

/* AdminBundle:Default:cont.html.twig */
class __TwigTemplate_285eaed247c75a03df831b37eac50d5a6aca7b1ab6555fea235ed5ccaadc7936 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("mainpage.html.twig", "AdminBundle:Default:cont.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "mainpage.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_19615ee47782dad49d0e1381e9c3996649bb1d32875b28c93f3b89e966f93a02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19615ee47782dad49d0e1381e9c3996649bb1d32875b28c93f3b89e966f93a02->enter($__internal_19615ee47782dad49d0e1381e9c3996649bb1d32875b28c93f3b89e966f93a02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Default:cont.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19615ee47782dad49d0e1381e9c3996649bb1d32875b28c93f3b89e966f93a02->leave($__internal_19615ee47782dad49d0e1381e9c3996649bb1d32875b28c93f3b89e966f93a02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_13bbde1909ddaa0d04f88669dba7bd174f95aabee9e1ea9978ed9b301edf71ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13bbde1909ddaa0d04f88669dba7bd174f95aabee9e1ea9978ed9b301edf71ab->enter($__internal_13bbde1909ddaa0d04f88669dba7bd174f95aabee9e1ea9978ed9b301edf71ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Index";
        
        $__internal_13bbde1909ddaa0d04f88669dba7bd174f95aabee9e1ea9978ed9b301edf71ab->leave($__internal_13bbde1909ddaa0d04f88669dba7bd174f95aabee9e1ea9978ed9b301edf71ab_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_792b107c00147e5bb452d6404dd31935a817a6cf788b592d9191e539e962c454 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_792b107c00147e5bb452d6404dd31935a817a6cf788b592d9191e539e962c454->enter($__internal_792b107c00147e5bb452d6404dd31935a817a6cf788b592d9191e539e962c454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 5
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <style type=\"text/css\">
        .important { color: #336699; }
    </style>
";
        
        $__internal_792b107c00147e5bb452d6404dd31935a817a6cf788b592d9191e539e962c454->leave($__internal_792b107c00147e5bb452d6404dd31935a817a6cf788b592d9191e539e962c454_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_a32aecd1614c3f4712bbfb800923f53ed51e3b4b67347c29ec6d190024ec7506 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a32aecd1614c3f4712bbfb800923f53ed51e3b4b67347c29ec6d190024ec7506->enter($__internal_a32aecd1614c3f4712bbfb800923f53ed51e3b4b67347c29ec6d190024ec7506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "    <h1>Index</h1>
    <p class=\"important\">
        Welcome to my awesome homepage.
    </p>
";
        
        $__internal_a32aecd1614c3f4712bbfb800923f53ed51e3b4b67347c29ec6d190024ec7506->leave($__internal_a32aecd1614c3f4712bbfb800923f53ed51e3b4b67347c29ec6d190024ec7506_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Default:cont.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 11,  67 => 10,  54 => 5,  48 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"mainpage.html.twig\" %}

{% block title %}Index{% endblock %}
{% block head %}
    {{ parent() }}
    <style type=\"text/css\">
        .important { color: #336699; }
    </style>
{% endblock %}
{% block content %}
    <h1>Index</h1>
    <p class=\"important\">
        Welcome to my awesome homepage.
    </p>
{% endblock %}", "AdminBundle:Default:cont.html.twig", "C:\\xampp\\htdocs\\CMS\\src\\AdminBundle/Resources/views/Default/cont.html.twig");
    }
}
