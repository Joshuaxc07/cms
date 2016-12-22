<?php

/* AdminBundle:Default:employee_table.html.twig */
class __TwigTemplate_c2549f5f3f4f91e87462e500fd5c5ac26bc9da8a2dd1dc938b8d042109ec66d4 extends Twig_Template
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
        $__internal_6d7782160b37b96a4abfd37f9c0ddc07587011fb85b282bf8133ed02a1ea88db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d7782160b37b96a4abfd37f9c0ddc07587011fb85b282bf8133ed02a1ea88db->enter($__internal_6d7782160b37b96a4abfd37f9c0ddc07587011fb85b282bf8133ed02a1ea88db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Default:employee_table.html.twig"));

        // line 1
        echo "

<table class=\"table table-responsive table-bordered\">
    <thead>
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Middle Name</th>
        <th>Address</th>
        <th>Age</th>
        <th>Department</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data1"]) ? $context["data1"] : $this->getContext($context, "data1")));
        foreach ($context['_seq'] as $context["_key"] => $context["emp_info"]) {
            // line 17
            echo "        <tr>
            <td>    ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["emp_info"], "Id", array()), "html", null, true);
            echo "            </td>
            <td>    ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["emp_info"], "firstName", array()), "html", null, true);
            echo "      </td>
            <td>    ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["emp_info"], "lastName", array()), "html", null, true);
            echo "     </td>
            <td>    ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["emp_info"], "middleName", array()), "html", null, true);
            echo "    </td>
            <td>   ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["emp_info"], "empAddress", array()), "html", null, true);
            echo "    </td>
            <td>        ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["emp_info"], "empAge", array()), "html", null, true);
            echo "          </td>
            <td>   ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["emp_info"], "empDepartment", array()), "html", null, true);
            echo "     </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['emp_info'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    </tbody>
</table>";
        
        $__internal_6d7782160b37b96a4abfd37f9c0ddc07587011fb85b282bf8133ed02a1ea88db->leave($__internal_6d7782160b37b96a4abfd37f9c0ddc07587011fb85b282bf8133ed02a1ea88db_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Default:employee_table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 27,  70 => 24,  66 => 23,  62 => 22,  58 => 21,  54 => 20,  50 => 19,  46 => 18,  43 => 17,  39 => 16,  22 => 1,);
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

<table class=\"table table-responsive table-bordered\">
    <thead>
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Middle Name</th>
        <th>Address</th>
        <th>Age</th>
        <th>Department</th>
    </tr>
    </thead>
    <tbody>
    {% for emp_info in data1 %}
        <tr>
            <td>    {{ emp_info.Id }}            </td>
            <td>    {{ emp_info.firstName }}      </td>
            <td>    {{ emp_info.lastName }}     </td>
            <td>    {{ emp_info.middleName}}    </td>
            <td>   {{ emp_info.empAddress }}    </td>
            <td>        {{ emp_info.empAge }}          </td>
            <td>   {{ emp_info.empDepartment }}     </td>
        </tr>
    {% endfor %}
    </tbody>
</table>", "AdminBundle:Default:employee_table.html.twig", "C:\\xampp\\htdocs\\CMS\\src\\AdminBundle/Resources/views/Default/employee_table.html.twig");
    }
}
