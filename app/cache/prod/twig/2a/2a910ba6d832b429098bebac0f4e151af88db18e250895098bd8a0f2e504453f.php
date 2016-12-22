<?php

/* AdminBundle:Default:index.html.twig */
class __TwigTemplate_2304a063c66f8b60a4950dbcf8c79b26d5aa349ad4abd9a57d2ec36893dad291 extends Twig_Template
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
        $__internal_c855283d4a8e7062f479b5a40cca8bc6e648e3d51770b831d459e5d3d56e445f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c855283d4a8e7062f479b5a40cca8bc6e648e3d51770b831d459e5d3d56e445f->enter($__internal_c855283d4a8e7062f479b5a40cca8bc6e648e3d51770b831d459e5d3d56e445f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Default:index.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <!--Import Google Icon Font-->
    <link href=\"http://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    <!--Import materialize.css-->
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" media=\"screen\"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
</head>
<style>
    .modal-body .form-horizontal .col-sm-2,
    .modal-body .form-horizontal .col-sm-10 {
        width: 100%
    }

    .modal-body .form-horizontal .control-label {
        text-align: left;
    }
    .modal-body .form-horizontal .col-sm-offset-2 {
        margin-left: 15px;
    }
    .table-emp{
        position: relative;
        top:5px;
    }
</style>
<body>
<div class=\"container\">
    <h3 class=\"#cand\"> Employee Information</h3>
    <button type=\"submit\" class=\"btn btn-primary AddEmpInfo\" id=\"btnAddEmpInfo\" data-toggle=\"modal\" data-target=\"#myModalHorizontal\">Add Employee</button>









        <div id=\"renderTable\">



        </div>
    </div>




    <!-- Modal -->
    <div class=\"modal fade\" id=\"myModalHorizontal\" tabindex=\"-1\" role=\"dialog\"
         aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <!-- Modal Header -->
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\"
                            data-dismiss=\"modal\">
                        <span aria-hidden=\"true\">&times;</span>
                        <span class=\"sr-only\">Close</span>
                    </button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">
                        Modal title
                    </h4>
                </div>

                <!-- Modal Body -->
                <div class=\"modal-body\">

                    <form class=\"form-horizontal\" role=\"form\">
                        <div class=\"form-group\">
                            <label  class=\"col-sm-2 control-label\"
                                    for=\"inputemployeefname\">First Name</label>
                            <div class=\"col-sm-10\">
                                <input type=\"text\" class=\"form-control\"
                                       id=\"inputEmployeeFname\" placeholder=\"First Name\"/>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\"
                                   for=\"inputEmployeeLname\" >Last Name</label>
                            <div class=\"col-sm-10\">
                                <input type=\"text\" class=\"form-control\"
                                       id=\"inputEmployeeLname\" placeholder=\"Last Name\"/>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\"
                                   for=\"inputEmployeeMname\" >Middile Name</label>
                            <div class=\"col-sm-10\">
                                <input type=\"text\" class=\"form-control\"
                                       id=\"inputEmployeeMname\" placeholder=\"Middle Name\"/>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\"
                                   for=\"inputEmpAddress\" >Password</label>
                            <div class=\"col-sm-10\">
                                <input type=\"text\" class=\"form-control\"
                                       id=\"inputEmpAddress\" placeholder=\"Address\"/>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\"
                                   for=\"inputEmpAge\" >Password</label>
                            <div class=\"col-sm-10\">
                                <input type=\"text\" class=\"form-control\"
                                       id=\"inputEmpAge\" placeholder=\"Age\"/>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\"
                                   for=\"selectDept\" >Select Department</label>
                            <div class=\"col-sm-10\">
                                <select class=\"form-control\" id=\"selectEmpDepartment\">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-sm-offset-2 col-sm-10\">
                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\"/> Remember me
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-sm-offset-2 col-sm-10\">
                                <button type=\"submit\" class=\"btn btn-default\">Sign in</button>
                            </div>
                        </div>
                    </form>






                </div>

                <!-- Modal Footer -->
                <div class=\"modal-footer\">

                        <button type=\"submit\" class=\"btn btn-default\" data-dismiss=\"modal\">
                           Close
                        </button>

                    <button type=\"submit\" class=\"btn btn-primary\" onclick=\"add_employee()\" id=\"#btnAdd\">
                        Add
                    </button>

                </div>
            </div>
        </div>
    </div>


</div>
<!--Import jQuery before materialize.js-->
<script type=\"text/javascript\" src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery-3.1.1.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script>

    function add_employee() {

        \$(document).ready(function ()
        {
                var loadingModal = \$(\"#myModalHorizontal\");

                var fname = \$(\"#inputEmployeeFname\").val();
                var lname = \$(\"#inputEmployeeLname\").val();
                var mname = \$(\"#inputEmployeeMname\").val();
                var emp_add = \$(\"#inputEmpAddress\").val();
                var emp_age = \$(\"#inputEmpAge\").val();
                var emp_dept = \$(\"#selectEmpDepartment\").val();
                var data = {
                    \"fname\": fname,
                    \"lname\": lname,
                    \"mname\": mname,
                    \"emp_add\": emp_add,
                    \"emp_age\": emp_age,
                    \"emp_dept\": emp_dept
                };

                \$.ajax({
                    method: \"POST\",
                    url: \"";
        // line 200
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_employee");
        echo "\",
                    data: data,
                    datatype: 'json',
                    success: function (data) {

                        setTimeout(function() {
                            loadingModal.modal(\"hide\");
                            load_data();
                        }, 3000);
                    }
                });

            });

    }
    function load_data()
    {
        \$(document).ready(function() {
            \$.ajax({
               method: \"POST\",
                url: \"";
        // line 220
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("read_data");
        echo "\",
                data: {},
                success:function(data){
                    \$('#renderTable').html(data);

                }
            });
        });
    }

    load_data();


</script>
</body>
</html>

";
        
        $__internal_c855283d4a8e7062f479b5a40cca8bc6e648e3d51770b831d459e5d3d56e445f->leave($__internal_c855283d4a8e7062f479b5a40cca8bc6e648e3d51770b831d459e5d3d56e445f_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 220,  232 => 200,  203 => 174,  199 => 173,  34 => 11,  22 => 1,);
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
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <!--Import Google Icon Font-->
    <link href=\"http://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    <!--Import materialize.css-->
    <link type=\"text/css\" rel=\"stylesheet\" href=\"{{ asset('assets/css/bootstrap.min.css') }}\" media=\"screen\"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
</head>
<style>
    .modal-body .form-horizontal .col-sm-2,
    .modal-body .form-horizontal .col-sm-10 {
        width: 100%
    }

    .modal-body .form-horizontal .control-label {
        text-align: left;
    }
    .modal-body .form-horizontal .col-sm-offset-2 {
        margin-left: 15px;
    }
    .table-emp{
        position: relative;
        top:5px;
    }
</style>
<body>
<div class=\"container\">
    <h3 class=\"#cand\"> Employee Information</h3>
    <button type=\"submit\" class=\"btn btn-primary AddEmpInfo\" id=\"btnAddEmpInfo\" data-toggle=\"modal\" data-target=\"#myModalHorizontal\">Add Employee</button>









        <div id=\"renderTable\">



        </div>
    </div>




    <!-- Modal -->
    <div class=\"modal fade\" id=\"myModalHorizontal\" tabindex=\"-1\" role=\"dialog\"
         aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <!-- Modal Header -->
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\"
                            data-dismiss=\"modal\">
                        <span aria-hidden=\"true\">&times;</span>
                        <span class=\"sr-only\">Close</span>
                    </button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">
                        Modal title
                    </h4>
                </div>

                <!-- Modal Body -->
                <div class=\"modal-body\">

                    <form class=\"form-horizontal\" role=\"form\">
                        <div class=\"form-group\">
                            <label  class=\"col-sm-2 control-label\"
                                    for=\"inputemployeefname\">First Name</label>
                            <div class=\"col-sm-10\">
                                <input type=\"text\" class=\"form-control\"
                                       id=\"inputEmployeeFname\" placeholder=\"First Name\"/>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\"
                                   for=\"inputEmployeeLname\" >Last Name</label>
                            <div class=\"col-sm-10\">
                                <input type=\"text\" class=\"form-control\"
                                       id=\"inputEmployeeLname\" placeholder=\"Last Name\"/>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\"
                                   for=\"inputEmployeeMname\" >Middile Name</label>
                            <div class=\"col-sm-10\">
                                <input type=\"text\" class=\"form-control\"
                                       id=\"inputEmployeeMname\" placeholder=\"Middle Name\"/>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\"
                                   for=\"inputEmpAddress\" >Password</label>
                            <div class=\"col-sm-10\">
                                <input type=\"text\" class=\"form-control\"
                                       id=\"inputEmpAddress\" placeholder=\"Address\"/>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\"
                                   for=\"inputEmpAge\" >Password</label>
                            <div class=\"col-sm-10\">
                                <input type=\"text\" class=\"form-control\"
                                       id=\"inputEmpAge\" placeholder=\"Age\"/>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\"
                                   for=\"selectDept\" >Select Department</label>
                            <div class=\"col-sm-10\">
                                <select class=\"form-control\" id=\"selectEmpDepartment\">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-sm-offset-2 col-sm-10\">
                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\"/> Remember me
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-sm-offset-2 col-sm-10\">
                                <button type=\"submit\" class=\"btn btn-default\">Sign in</button>
                            </div>
                        </div>
                    </form>






                </div>

                <!-- Modal Footer -->
                <div class=\"modal-footer\">

                        <button type=\"submit\" class=\"btn btn-default\" data-dismiss=\"modal\">
                           Close
                        </button>

                    <button type=\"submit\" class=\"btn btn-primary\" onclick=\"add_employee()\" id=\"#btnAdd\">
                        Add
                    </button>

                </div>
            </div>
        </div>
    </div>


</div>
<!--Import jQuery before materialize.js-->
<script type=\"text/javascript\" src=\"{{ asset('assets/js/jquery-3.1.1.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('assets/js/bootstrap.min.js') }}\"></script>
<script>

    function add_employee() {

        \$(document).ready(function ()
        {
                var loadingModal = \$(\"#myModalHorizontal\");

                var fname = \$(\"#inputEmployeeFname\").val();
                var lname = \$(\"#inputEmployeeLname\").val();
                var mname = \$(\"#inputEmployeeMname\").val();
                var emp_add = \$(\"#inputEmpAddress\").val();
                var emp_age = \$(\"#inputEmpAge\").val();
                var emp_dept = \$(\"#selectEmpDepartment\").val();
                var data = {
                    \"fname\": fname,
                    \"lname\": lname,
                    \"mname\": mname,
                    \"emp_add\": emp_add,
                    \"emp_age\": emp_age,
                    \"emp_dept\": emp_dept
                };

                \$.ajax({
                    method: \"POST\",
                    url: \"{{ path('add_employee') }}\",
                    data: data,
                    datatype: 'json',
                    success: function (data) {

                        setTimeout(function() {
                            loadingModal.modal(\"hide\");
                            load_data();
                        }, 3000);
                    }
                });

            });

    }
    function load_data()
    {
        \$(document).ready(function() {
            \$.ajax({
               method: \"POST\",
                url: \"{{ path('read_data') }}\",
                data: {},
                success:function(data){
                    \$('#renderTable').html(data);

                }
            });
        });
    }

    load_data();


</script>
</body>
</html>

", "AdminBundle:Default:index.html.twig", "C:\\xampp\\htdocs\\CMS\\src\\AdminBundle/Resources/views/Default/index.html.twig");
    }
}
