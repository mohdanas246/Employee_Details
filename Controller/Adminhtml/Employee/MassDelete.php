<?php
namespace Codilar\UiForm\Controller\Adminhtml\Employee;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Ui\Component\MassAction\Filter;
use Codilar\UiForm\Model\ResourceModel\EmployeeDetail\CollectionFactory;
use Codilar\uiForm\Model\ResourceModel\EmployeeDetail as EmployeeResource;
use Magento\Framework\View\Result\PageFactory;

class MassDelete extends Action
{
    protected $_resultPageFactory;
    /**
     * @var Filter
     */
    protected $filter;

    /**
     * @var CollectionFactory
     */
    protected $collectionFactory;

    /**
     * @var EmployeeResource
     */
    private $employeeResource;


    public function __construct(Context $context, PageFactory $resultPageFactory, Filter $filter,
                                CollectionFactory $collectionFactory, EmployeeResource $employeeResource) {
        $this->_resultPageFactory = $resultPageFactory;
        $this->filter = $filter;
        $this->collectionFactory = $collectionFactory;
        $this->employeeResource = $employeeResource;
        return parent::__construct($context);
    }

    public function execute()
    {
        $collection = $this->filter->getCollection($this->collectionFactory->create());
        $size = $collection->getSize();
        foreach ($collection as $data)
        {
            //dd(get_class_methods($data));
            $data->delete();
        }
        $this->messageManager->addSuccessMessage($size . "Employess deleted successfully");
        $redirect = $this->resultRedirectFactory->create();
        $redirect->setPath('uiform/employee/employeegrid');
        return $redirect ;
    }
}
