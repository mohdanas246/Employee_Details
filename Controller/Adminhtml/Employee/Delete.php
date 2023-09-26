<?php
namespace Codilar\UiForm\Controller\Adminhtml\Employee;

use Codilar\UiForm\Api\EmployeeDetailsRepositoryInterface;
use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Delete extends Action
{
    protected $_resultPageFactory;
    /**
     * @var EmployeeDetailsRepositoryInterface
     */
    private $employeeRepository;

    public function __construct(Context $context, PageFactory $resultPageFactory,
                                EmployeeDetailsRepositoryInterface $employeeRepository) {
        $this->_resultPageFactory = $resultPageFactory;
        $this->employeeRepository = $employeeRepository;
        return parent::__construct($context);
    }

    public function execute()
    {
        $id = $this->getRequest()->getParam('entity_id');
        try {
            $this->employeeRepository->deleteById($id);
            $this->messageManager->addSuccessMessage(__("Employee delete successfully"));

        }catch (\Exception $e)
        {
//            $this->messageManager->addErrorMessage($e->getMessage());
            $this->messageManager->addErrorMessage(__("Something went wrong"));

        }
        $redirect = $this->resultRedirectFactory->create();
        $redirect->setPath('uiform/employee/employeegrid');
        return $redirect;
    }
}
