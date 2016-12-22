<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_ccd78161b9ad75bd96c4502d07070de7334732897bd1589106c511c7a6ee0964 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eb7a6d04d9617963abd0c99acb6092e16202aaca734229420d4eed93cc257ee6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb7a6d04d9617963abd0c99acb6092e16202aaca734229420d4eed93cc257ee6->enter($__internal_eb7a6d04d9617963abd0c99acb6092e16202aaca734229420d4eed93cc257ee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb7a6d04d9617963abd0c99acb6092e16202aaca734229420d4eed93cc257ee6->leave($__internal_eb7a6d04d9617963abd0c99acb6092e16202aaca734229420d4eed93cc257ee6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_41cb9af2da48d9392daed482fb018f900a0ff0d193621d26c581db74fe2c3701 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41cb9af2da48d9392daed482fb018f900a0ff0d193621d26c581db74fe2c3701->enter($__internal_41cb9af2da48d9392daed482fb018f900a0ff0d193621d26c581db74fe2c3701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_41cb9af2da48d9392daed482fb018f900a0ff0d193621d26c581db74fe2c3701->leave($__internal_41cb9af2da48d9392daed482fb018f900a0ff0d193621d26c581db74fe2c3701_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5705f4201d3cf14bd2e9b471f3f7f04e20adcd875031dee5c6c2834022a4c5f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5705f4201d3cf14bd2e9b471f3f7f04e20adcd875031dee5c6c2834022a4c5f9->enter($__internal_5705f4201d3cf14bd2e9b471f3f7f04e20adcd875031dee5c6c2834022a4c5f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5705f4201d3cf14bd2e9b471f3f7f04e20adcd875031dee5c6c2834022a4c5f9->leave($__internal_5705f4201d3cf14bd2e9b471f3f7f04e20adcd875031dee5c6c2834022a4c5f9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d8db0850d2a2a47c450b0ab83a6cc4ac414aecffadbc91892671ee1db11db00c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8db0850d2a2a47c450b0ab83a6cc4ac414aecffadbc91892671ee1db11db00c->enter($__internal_d8db0850d2a2a47c450b0ab83a6cc4ac414aecffadbc91892671ee1db11db00c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_d8db0850d2a2a47c450b0ab83a6cc4ac414aecffadbc91892671ee1db11db00c->leave($__internal_d8db0850d2a2a47c450b0ab83a6cc4ac414aecffadbc91892671ee1db11db00c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'TwigBundle::layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include 'TwigBundle:Exception:exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "C:\\xampp\\htdocs\\CMS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
