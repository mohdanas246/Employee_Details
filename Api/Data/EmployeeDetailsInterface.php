<?php
/**
 * Codilar Software.
 *
 * @category Codilar
 * @package Codilar_UiForm
 * @author Codilar
 * @copyright Copyright (c) Codilar Software Private Limited (https://webkul.com)
 * @license https://store.codilar.com/license.html
 */

namespace Codilar\UiForm\Api\Data;

/**
 * EmployeeDetail Model Interface
 */
interface EmployeeDetailsInterface
{
    public const ENTITY_ID = 'entity_id';

    public const EMPLOYEE_ID = 'employee_id';

    public const NAME = 'name';

    public const SALARY = 'salary';

    public const ADDRESS = 'address';

    public const CREATED_AT = 'created_at';

    public const UPDATED_AT = 'updated_at';

    public function getId();

    /**
     * @param int $id
     * @return void
     */
    public function setId($id);
    /**
     * @param string $employeeId
     * @return void
     */
    public function setEmployeeId($employeeId);
    /**
     * Get EmployeeId
     *
     * @return int
     */
    public function getEmployeeId();
    /**
     * @param string $name
     * @return void
     */
    public function setName($name);
    /**
     * Get Name
     *
     * @return string
     */
    public function getName();
    /**
     * @param string $salary
     * @return void
     */
    public function setSalary($salary);
    /**
     * Get Salary
     *
     * @return string
     */
    public function getSalary();
    /**
     * @param string $address
     * @return void
     */
    public function setAddress($address);
    /**
     * Get Address
     *
     * @return string
     */
    public function getAddress();
    /**
     * @param string $createdAt
     * @return void
     */
    public function setCreatedAt($createdAt);
    /**
     * Get CreatedAt
     *
     * @return string
     */
    public function getCreatedAt();
    /**
     * @param string $updatedAt
     * @return void
     */
    public function setUpdatedAt($updatedAt);
    /**
     * Get UpdatedAt
     *
     * @return string
     */
    public function getUpdatedAt();

}
