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


namespace Codilar\UiForm\Model\ResourceModel;

/**
 * EmployeeDetail RosourceModel Class
 */
class EmployeeDetail extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init("employee_detail", "entity_id");
    }
}
