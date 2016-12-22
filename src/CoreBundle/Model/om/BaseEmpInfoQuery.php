<?php

namespace CoreBundle\Model\om;

use \Criteria;
use \Exception;
use \ModelCriteria;
use \PDO;
use \Propel;
use \PropelException;
use \PropelObjectCollection;
use \PropelPDO;
use CoreBundle\Model\EmpInfo;
use CoreBundle\Model\EmpInfoPeer;
use CoreBundle\Model\EmpInfoQuery;

/**
 * @method EmpInfoQuery orderById($order = Criteria::ASC) Order by the emp_id column
 * @method EmpInfoQuery orderByFirstName($order = Criteria::ASC) Order by the first_name column
 * @method EmpInfoQuery orderByLastName($order = Criteria::ASC) Order by the last_name column
 * @method EmpInfoQuery orderByMiddleName($order = Criteria::ASC) Order by the middle_name column
 * @method EmpInfoQuery orderByEmpAddress($order = Criteria::ASC) Order by the emp_address column
 * @method EmpInfoQuery orderByEmpAge($order = Criteria::ASC) Order by the emp_age column
 * @method EmpInfoQuery orderByEmpDepartment($order = Criteria::ASC) Order by the emp_department column
 *
 * @method EmpInfoQuery groupById() Group by the emp_id column
 * @method EmpInfoQuery groupByFirstName() Group by the first_name column
 * @method EmpInfoQuery groupByLastName() Group by the last_name column
 * @method EmpInfoQuery groupByMiddleName() Group by the middle_name column
 * @method EmpInfoQuery groupByEmpAddress() Group by the emp_address column
 * @method EmpInfoQuery groupByEmpAge() Group by the emp_age column
 * @method EmpInfoQuery groupByEmpDepartment() Group by the emp_department column
 *
 * @method EmpInfoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method EmpInfoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method EmpInfoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method EmpInfo findOne(PropelPDO $con = null) Return the first EmpInfo matching the query
 * @method EmpInfo findOneOrCreate(PropelPDO $con = null) Return the first EmpInfo matching the query, or a new EmpInfo object populated from the query conditions when no match is found
 *
 * @method EmpInfo findOneByFirstName(string $first_name) Return the first EmpInfo filtered by the first_name column
 * @method EmpInfo findOneByLastName(string $last_name) Return the first EmpInfo filtered by the last_name column
 * @method EmpInfo findOneByMiddleName(string $middle_name) Return the first EmpInfo filtered by the middle_name column
 * @method EmpInfo findOneByEmpAddress(string $emp_address) Return the first EmpInfo filtered by the emp_address column
 * @method EmpInfo findOneByEmpAge(int $emp_age) Return the first EmpInfo filtered by the emp_age column
 * @method EmpInfo findOneByEmpDepartment(string $emp_department) Return the first EmpInfo filtered by the emp_department column
 *
 * @method array findById(int $emp_id) Return EmpInfo objects filtered by the emp_id column
 * @method array findByFirstName(string $first_name) Return EmpInfo objects filtered by the first_name column
 * @method array findByLastName(string $last_name) Return EmpInfo objects filtered by the last_name column
 * @method array findByMiddleName(string $middle_name) Return EmpInfo objects filtered by the middle_name column
 * @method array findByEmpAddress(string $emp_address) Return EmpInfo objects filtered by the emp_address column
 * @method array findByEmpAge(int $emp_age) Return EmpInfo objects filtered by the emp_age column
 * @method array findByEmpDepartment(string $emp_department) Return EmpInfo objects filtered by the emp_department column
 */
abstract class BaseEmpInfoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseEmpInfoQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = null, $modelName = null, $modelAlias = null)
    {
        if (null === $dbName) {
            $dbName = 'default';
        }
        if (null === $modelName) {
            $modelName = 'CoreBundle\\Model\\EmpInfo';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new EmpInfoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   EmpInfoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return EmpInfoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof EmpInfoQuery) {
            return $criteria;
        }
        $query = new EmpInfoQuery(null, null, $modelAlias);

        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return   EmpInfo|EmpInfo[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = EmpInfoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(EmpInfoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 EmpInfo A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneById($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 EmpInfo A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `emp_id`, `first_name`, `last_name`, `middle_name`, `emp_address`, `emp_age`, `emp_department` FROM `emp_info` WHERE `emp_id` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new EmpInfo();
            $obj->hydrate($row);
            EmpInfoPeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return EmpInfo|EmpInfo[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|EmpInfo[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return EmpInfoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(EmpInfoPeer::EMP_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return EmpInfoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(EmpInfoPeer::EMP_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the emp_id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE emp_id = 1234
     * $query->filterById(array(12, 34)); // WHERE emp_id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE emp_id >= 12
     * $query->filterById(array('max' => 12)); // WHERE emp_id <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpInfoQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(EmpInfoPeer::EMP_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(EmpInfoPeer::EMP_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EmpInfoPeer::EMP_ID, $id, $comparison);
    }

    /**
     * Filter the query on the first_name column
     *
     * Example usage:
     * <code>
     * $query->filterByFirstName('fooValue');   // WHERE first_name = 'fooValue'
     * $query->filterByFirstName('%fooValue%'); // WHERE first_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $firstName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpInfoQuery The current query, for fluid interface
     */
    public function filterByFirstName($firstName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($firstName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $firstName)) {
                $firstName = str_replace('*', '%', $firstName);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpInfoPeer::FIRST_NAME, $firstName, $comparison);
    }

    /**
     * Filter the query on the last_name column
     *
     * Example usage:
     * <code>
     * $query->filterByLastName('fooValue');   // WHERE last_name = 'fooValue'
     * $query->filterByLastName('%fooValue%'); // WHERE last_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lastName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpInfoQuery The current query, for fluid interface
     */
    public function filterByLastName($lastName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lastName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lastName)) {
                $lastName = str_replace('*', '%', $lastName);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpInfoPeer::LAST_NAME, $lastName, $comparison);
    }

    /**
     * Filter the query on the middle_name column
     *
     * Example usage:
     * <code>
     * $query->filterByMiddleName('fooValue');   // WHERE middle_name = 'fooValue'
     * $query->filterByMiddleName('%fooValue%'); // WHERE middle_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $middleName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpInfoQuery The current query, for fluid interface
     */
    public function filterByMiddleName($middleName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($middleName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $middleName)) {
                $middleName = str_replace('*', '%', $middleName);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpInfoPeer::MIDDLE_NAME, $middleName, $comparison);
    }

    /**
     * Filter the query on the emp_address column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpAddress('fooValue');   // WHERE emp_address = 'fooValue'
     * $query->filterByEmpAddress('%fooValue%'); // WHERE emp_address LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empAddress The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpInfoQuery The current query, for fluid interface
     */
    public function filterByEmpAddress($empAddress = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empAddress)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empAddress)) {
                $empAddress = str_replace('*', '%', $empAddress);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpInfoPeer::EMP_ADDRESS, $empAddress, $comparison);
    }

    /**
     * Filter the query on the emp_age column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpAge(1234); // WHERE emp_age = 1234
     * $query->filterByEmpAge(array(12, 34)); // WHERE emp_age IN (12, 34)
     * $query->filterByEmpAge(array('min' => 12)); // WHERE emp_age >= 12
     * $query->filterByEmpAge(array('max' => 12)); // WHERE emp_age <= 12
     * </code>
     *
     * @param     mixed $empAge The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpInfoQuery The current query, for fluid interface
     */
    public function filterByEmpAge($empAge = null, $comparison = null)
    {
        if (is_array($empAge)) {
            $useMinMax = false;
            if (isset($empAge['min'])) {
                $this->addUsingAlias(EmpInfoPeer::EMP_AGE, $empAge['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($empAge['max'])) {
                $this->addUsingAlias(EmpInfoPeer::EMP_AGE, $empAge['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EmpInfoPeer::EMP_AGE, $empAge, $comparison);
    }

    /**
     * Filter the query on the emp_department column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpDepartment('fooValue');   // WHERE emp_department = 'fooValue'
     * $query->filterByEmpDepartment('%fooValue%'); // WHERE emp_department LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empDepartment The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpInfoQuery The current query, for fluid interface
     */
    public function filterByEmpDepartment($empDepartment = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empDepartment)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empDepartment)) {
                $empDepartment = str_replace('*', '%', $empDepartment);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpInfoPeer::EMP_DEPARTMENT, $empDepartment, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   EmpInfo $empInfo Object to remove from the list of results
     *
     * @return EmpInfoQuery The current query, for fluid interface
     */
    public function prune($empInfo = null)
    {
        if ($empInfo) {
            $this->addUsingAlias(EmpInfoPeer::EMP_ID, $empInfo->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
