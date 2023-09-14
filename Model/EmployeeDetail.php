<?php
/**
 * Codilar Software.
 *
 * @category Codilar
 * @package Webkul_UiForm
 * @author Webkul
 * @copyright Copyright (c) Codilar Software Private Limited (https://webkul.com)
 * @license https://store.codilar.com/license.html
 */


namespace Codilar\UiForm\Model;

use Magento\Framework\Model\AbstractModel;
use Codilar\UiForm\Api\Data\EmployeeDetailsInterface;
use Magento\Framework\DataObject\IdentityInterface;

/**
 * EmployeeDetail Model Class
 */
class EmployeeDetail extends AbstractModel implements IdentityInterface, EmployeeDetailsInterface
{
    public const NOROUTE_ENTITY_ID = 'no-route';

    public const CACHE_TAG = 'employee_detail';

    protected $_cacheTag = 'employee_detail';

    protected $_eventPrefix = 'employee_detail';

    /**
     * Set resource model
     */
    public function _construct()
    {
        $this->_init(\Codilar\UiForm\Model\ResourceModel\EmployeeDetail::class);
    }

    /**
     * Load No-Route Indexer.
     *
     * @return $this
     */
    public function noRouteReasons()
    {
        return $this->load(self::NOROUTE_ENTITY_ID, $this->getIdFieldName());
    }

    /**
     * Get identities.
     *
     * @return []
     */
    public function getIdentities()
    {
        return [self::CACHE_TAG.'_'.$this->getId()];
    }

    /**
     * Set EntityId
     *
     * @param int $entityId
     * @return EmployeeDetail
     */
    public function setEntityId($entityId)
    {
        return $this->setData(self::ENTITY_ID, $entityId);
    }

    /**
     * Get EntityId
     *
     * @return int
     */
    public function getEntityId()
    {
        return parent::getData(self::ENTITY_ID);
    }

    /**
     * Set EmployeeId
     *
     * @param int $employeeId
     * @return EmployeeDetail
     */
    public function setEmployeeId($employeeId)
    {
        return $this->setData(self::EMPLOYEE_ID, $employeeId);
    }

    /**
     * Get EmployeeId
     *
     * @return int
     */
    public function getEmployeeId()
    {
        return parent::getData(self::EMPLOYEE_ID);
    }

    /**
     * Set Name
     *
     * @param string $name
     * @return EmployeeDetail
     */
    public function setName($name)
    {
        return $this->setData(self::NAME, $name);
    }

    /**
     * Get Name
     *
     * @return string
     */
    public function getName()
    {
        return parent::getData(self::NAME);
    }

    /**
     * Set Salary
     *
     * @param string $salary
     * @return EmployeeDetail
     */
    public function setSalary($salary)
    {
        return $this->setData(self::SALARY, $salary);
    }

    /**
     * Get Salary
     *
     * @return string
     */
    public function getSalary()
    {
        return parent::getData(self::SALARY);
    }

    /**
     * Set Address
     *
     * @param string $address
     * @return EmployeeDetail
     */
    public function setAddress($address)
    {
        return $this->setData(self::ADDRESS, $address);
    }

    /**
     * Get Address
     *
     * @return string
     */
    public function getAddress()
    {
        return parent::getData(self::ADDRESS);
    }

    /**
     * Set CreatedAt
     *
     * @param string $createdAt
     * @return EmployeeDetail
     */
    public function setCreatedAt($createdAt)
    {
        return $this->setData(self::CREATED_AT, $createdAt);
    }

    /**
     * Get CreatedAt
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return parent::getData(self::CREATED_AT);
    }

    /**
     * Set UpdatedAt
     *
     * @param string $updatedAt
     * @return EmployeeDetail
     */
    public function setUpdatedAt($updatedAt)
    {
        return $this->setData(self::UPDATED_AT, $updatedAt);
    }

    /**
     * Get UpdatedAt
     *
     * @return string
     */
    public function getUpdatedAt()
    {
        return parent::getData(self::UPDATED_AT);
    }
}
