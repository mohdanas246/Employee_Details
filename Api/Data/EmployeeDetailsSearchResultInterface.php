<?php

namespace Codilar\UiForm\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

interface EmployeeDetailsSearchResultInterface extends SearchResultsInterface
{
    /**
     * Get items list.
     *
     * @return \Codilar\UiForm\Api\Data\EmployeeDetailsInterface[]
     */
    public function getItems();

    /**
     * Set items list.
     *
     * @param \Codilar\UiForm\Api\Data\EmployeeDetailsInterface[] $items
     * @return void
     */
    public function setItems(array $items);

}
