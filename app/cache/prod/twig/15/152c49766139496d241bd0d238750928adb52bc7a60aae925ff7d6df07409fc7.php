<?php

/* AdminBundle:Default:mainpage.html.twig */
class __TwigTemplate_4f84833a9757152f9608fe55ca7253527a13b170b7793b4036cabb496c0a991f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4653124c353f17fac206e22c6322ca03c7a46a5f3b6f00641034906749608de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4653124c353f17fac206e22c6322ca03c7a46a5f3b6f00641034906749608de->enter($__internal_a4653124c353f17fac206e22c6322ca03c7a46a5f3b6f00641034906749608de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Default:mainpage.html.twig"));

        // line 1
        echo "

<!doctype html>
<html>
<head>
   ";
        // line 6
        $this->displayBlock('head', $context, $blocks);
        // line 10
        echo "</head>
<body>
    <div id=\"content\">";
        // line 12
        $this->displayBlock('content', $context, $blocks);
        echo "</div>

    <div id=\"footer\">
        ";
        // line 15
        $this->displayBlock('footer', $context, $blocks);
        // line 18
        echo "    </div>

</body>

</html>
";
        
        $__internal_a4653124c353f17fac206e22c6322ca03c7a46a5f3b6f00641034906749608de->leave($__internal_a4653124c353f17fac206e22c6322ca03c7a46a5f3b6f00641034906749608de_prof);

    }

    // line 6
    public function block_head($context, array $blocks = array())
    {
        $__internal_2830320958c107c353b017a3108e6c19a6f2bdffd00062f31c7e230f9a5901ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2830320958c107c353b017a3108e6c19a6f2bdffd00062f31c7e230f9a5901ee->enter($__internal_2830320958c107c353b017a3108e6c19a6f2bdffd00062f31c7e230f9a5901ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 7
        echo "    <link rel=\"stylesheet\" href=\"style.css\">
    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo " - My WebPage</title>
    ";
        
        $__internal_2830320958c107c353b017a3108e6c19a6f2bdffd00062f31c7e230f9a5901ee->leave($__internal_2830320958c107c353b017a3108e6c19a6f2bdffd00062f31c7e230f9a5901ee_prof);

    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_6a8e203d99ea154130559ebcdcd0d466ba94063dbd7a2ddb192c9a55118984f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a8e203d99ea154130559ebcdcd0d466ba94063dbd7a2ddb192c9a55118984f4->enter($__internal_6a8e203d99ea154130559ebcdcd0d466ba94063dbd7a2ddb192c9a55118984f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_6a8e203d99ea154130559ebcdcd0d466ba94063dbd7a2ddb192c9a55118984f4->leave($__internal_6a8e203d99ea154130559ebcdcd0d466ba94063dbd7a2ddb192c9a55118984f4_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_dc25c7e3357b075411e7e117bd523a2d55f9558aaefc9ed8c5c6b184d85085e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc25c7e3357b075411e7e117bd523a2d55f9558aaefc9ed8c5c6b184d85085e5->enter($__internal_dc25c7e3357b075411e7e117bd523a2d55f9558aaefc9ed8c5c6b184d85085e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " ";
        
        $__internal_dc25c7e3357b075411e7e117bd523a2d55f9558aaefc9ed8c5c6b184d85085e5->leave($__internal_dc25c7e3357b075411e7e117bd523a2d55f9558aaefc9ed8c5c6b184d85085e5_prof);

    }

    // line 15
    public function block_footer($context, array $blocks = array())
    {
        $__internal_cf0b2d6d52f96ca11c567cf160cf86df0d98a1c55bde6d528ca65300b77aa39a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf0b2d6d52f96ca11c567cf160cf86df0d98a1c55bde6d528ca65300b77aa39a->enter($__internal_cf0b2d6d52f96ca11c567cf160cf86df0d98a1c55bde6d528ca65300b77aa39a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 16
        echo "            &copy; Copyright 2011 by <a href=\"http://domain.invalid/\">you</a>.
        ";
        
        $__internal_cf0b2d6d52f96ca11c567cf160cf86df0d98a1c55bde6d528ca65300b77aa39a->leave($__internal_cf0b2d6d52f96ca11c567cf160cf86df0d98a1c55bde6d528ca65300b77aa39a_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Default:mainpage.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  106 => 16,  100 => 15,  88 => 12,  68 => 8,  65 => 7,  59 => 6,  47 => 18,  45 => 15,  39 => 12,  35 => 10,  33 => 6,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("

<!doctype html>
<html>
<head>
   {% block head %}
    <link rel=\"stylesheet\" href=\"style.css\">
    <title>{% block title %} {% endblock %} - My WebPage</title>
    {% endblock %}
</head>
<body>
    <div id=\"content\">{% block content %} {% endblock %}</div>

    <div id=\"footer\">
        {% block footer %}
            &copy; Copyright 2011 by <a href=\"http://domain.invalid/\">you</a>.
        {% endblock %}
    </div>

</body>

</html>
", "AdminBundle:Default:mainpage.html.twig", "C:\\xampp\\htdocs\\CMS\\src\\AdminBundle/Resources/views/Default/mainpage.html.twig");
    }
}
