<?php
namespace Codilar\UiForm\Controller\Adminhtml\Employee;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Codilar\UiForm\Api\EmployeeDetailsRepositoryInterface;

class Edit extends Action
{
    protected PageFactory $_resultPageFactory;
    /**
     * @var EmployeeDetailsRepositoryInterface
     */
    private EmployeeDetailsRepositoryInterface $employeeResource;

    public function __construct(Context $context, PageFactory $resultPageFactory,EmployeeDetailsRepositoryInterface
    $employeeResource) {
        $this->_resultPageFactory = $resultPageFactory;
        $this->employeeResource = $employeeResource;

        return parent::__construct($context);
    }

    public function execute()
    {
        $id = $this->getRequest()->getParam('entity_id');
        $employee = $this->employeeResource->getById($id);
        $resultpage = $this->_resultPageFactory->create();
        $resultpage->getConfig()->getTitle()->prepend($employee->getName());
        return $resultpage;
    }
}
