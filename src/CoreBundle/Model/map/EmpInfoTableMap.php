<?php

namespace CoreBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'emp_info' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.src.CoreBundle.Model.map
 */
class EmpInfoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.CoreBundle.Model.map.EmpInfoTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('emp_info');
        $this->setPhpName('EmpInfo');
        $this->setClassname('CoreBundle\\Model\\EmpInfo');
        $this->setPackage('src.CoreBundle.Model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('emp_id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('first_name', 'FirstName', 'VARCHAR', true, 100, null);
        $this->addColumn('last_name', 'LastName', 'VARCHAR', true, 100, null);
        $this->addColumn('middle_name', 'MiddleName', 'VARCHAR', true, 100, null);
        $this->addColumn('emp_address', 'EmpAddress', 'VARCHAR', true, 100, null);
        $this->addColumn('emp_age', 'EmpAge', 'INTEGER', true, 100, null);
        $this->addColumn('emp_department', 'EmpDepartment', 'VARCHAR', true, 100, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // EmpInfoTableMap
