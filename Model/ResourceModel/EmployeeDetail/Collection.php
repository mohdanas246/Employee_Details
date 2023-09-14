<?php
/**
 * Webkul Software.
 *
 * @category Codilar
 * @package Codilar_UiForm
 * @author Codilar
 * @copyright Copyright (c) Codilar Software Private Limited (https://webkul.com)
 * @license https://store.codilar.com/license.html
 */


namespace Codilar\UiForm\Model\ResourceModel\EmployeeDetail;

/**
 * EmployeeDetail Collection Class
 */
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'entity_id';

    /**
     * Initialize resource model
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init(
            \Codilar\UiForm\Model\EmployeeDetail::class,
            \Codilar\UiForm\Model\ResourceModel\EmployeeDetail::class
        );
        $this->_map['fields']['entity_id'] = 'main_table.entity_id';
    }
}
