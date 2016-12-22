<?php

namespace CoreBundle\Model;

use CoreBundle\Model\om\BaseEmpInfoPeer;
use \Criteria;
class EmpInfoPeer extends BaseEmpInfoPeer
{
    public static function selectData(\Criteria $c = null)
    {
        if(is_null($c))
        {
            $c = new \Criteria();
        }
        $_self = self::doSelect($c);
        return $_self ? $_self : null;
    }
}
