<?php

namespace Codilar\UiForm\Controller\Adminhtml\Employee;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Codilar\UiForm\Model\EmployeeDetailFactory;

class Save extends Action
{
    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $resultPageFactory;
    /**
     * @var EmployeeDetailFactory
     */
    private EmployeeDetailFactory $employeeDetailFactory;

    /**
     * @param Context $context
     * @param EmployeeDetailFactory $employeeDetailFactory
     */
    public function __construct(
        Context $context,
        EmployeeDetailFactory $employeeDetailFactory
    ) {
        parent::__construct($context);
        $this->employeeDetailFactory = $employeeDetailFactory;
    }

    /**
     * Execute
     *
     * @return \Magento\Framework\Controller\Result\Redirect
     */
    public function execute()
    {
        $resultRedirect = $this->resultRedirectFactory->create();
        if (!$this->getRequest()->isPost()) {
            $this->messageManager->addError(__("Something went wrong"));
            return $resultRedirect->setPath('*/*/');
        }
        try {
            $model = $this->employeeDetailFactory->create();
            if ($this->getRequest()->getParam('entity_id')) {
                $model->load($this->getRequest()->getParam('entity_id'));
            }
            $params = $this->getRequest()->getParams();
            $model->setData($params);
            $model->save();
            if ($model->getId()) {
                $this->messageManager->addSuccess(__("Employee saved successfully"));
                return $resultRedirect->setPath('*/*/edit/id/'.$model->getId());
            }
        } catch (\Exception $e) {
            $this->messageManager->addError(__("Something went wrong"));
            return $resultRedirect->setPath('*/*/edit');
        }
    }
}
