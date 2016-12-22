<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 12/9/2016
 * Time: 2:17 PM
 */

namespace AdminBundle\Controller;


use AdminBundle\AdminBundle;
use Beta\A;
use CoreBundle\Model\EmpInfo;
use CoreBundle\Model\EmpInfoPeer;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
class EmployeeInformationController extends Controller
{
    public function renderDataAction(Request $request)
    {
        $emp_info = EmpInfoPeer::selectdata();
        if($request ->getMethod() == "POST")
        {
            return $this->render('AdminBundle:Default:employee_table.html.twig', array("data1" => $emp_info));
        }
        return $this->render('AdminBundle:Default:index.html.twig');
    }

    public function add_employeeAction()
    {
        $request = $this->getRequest();
        if($request ->getMethod() == "POST")
        {
            $params   = $request->request->all();
            $fname    = $params["fname"];
            $lname    = $params['lname'];
            $mname    = $params['mname'];
            $emp_add  = $params['emp_add'];
            $emp_age  = $params['emp_age'];
            $emp_dept = $params['emp_dept'];

            $emp_info = new EmpInfo();
            $emp_info->setFirstName($fname);
            $emp_info->setLastName($lname);
            $emp_info->setMiddleName($mname);
            $emp_info->setEmpAddress($emp_add);
            $emp_info->setEmpAge($emp_age);
            $emp_info->setEmpDepartment($emp_dept);
            $emp_info->save();
            
            return new JsonResponse($emp_info);
        }


        return $this->render('AdminBundle:Default:index.html.twig');
    }
    public function connect()
    {
        global $propel_conf_path,$debug;
        Propel::init($propel_conf_path);
        $conn = Propel::getConnection('default', Propel::CONNECTION_WRITE);
        $conn->useDebug($debug);

    }
    public function disconnect()
    {
            Propel::close();
    }
    public function delete_empAction()
    {
        $request = $this->getRequest();
        if($request->getMethod() == "POST")
        {
            $this->connect();

        }
      
        
    }

    public function mainAction()
    {
        return $this->render("AdminBundle:Default:mainpage.html.twig");
    }

}