<?php
namespace Codilar\UiForm\Controller\Adminhtml\Employee;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\Controller\Result\JsonFactory;
use Codilar\UiForm\Model\EmployeeDetailFactory;
use Codilar\UiForm\Model\ResourceModel\EmployeeDetail as DataResourceModel;

class EditEmployeeInline extends Action
{
    protected JsonFactory $jsonFactory;
    private EmployeeDetailFactory $employeeDetailFactory;
    private DataResourceModel $dataResourceModel;

    public function __construct(
        Context $context,
        JsonFactory $jsonFactory,
        EmployeeDetailFactory $employeeDetailFactory,
        DataResourceModel $dataResourceModel)
    {
        parent::__construct($context);
        $this->jsonFactory = $jsonFactory;
        $this->employeeDetailFactory = $employeeDetailFactory;
        $this->dataResourceModel = $dataResourceModel;
    }

    public function execute()
    {
        $resultJson = $this->jsonFactory->create();
        $error = false;
        $messages = [];

        if ($this->getRequest()->getParam('isAjax'))
        {
            $postItems = $this->getRequest()->getParam('items');
            if (!count($postItems))
            {
                $messages[] = __('Please correct the data sent.');
                $error = true;
            }
            else
            {
                foreach (array_keys($postItems) as $modelid)
                {
                    $model = $this->employeeDetailFactory->create();
                    $this->dataResourceModel->load($model, $modelid);
                    try
                    {
                        $model->setData(array_merge($model->getData(), $postItems[$modelid]));
                        $this->dataResourceModel->save($model);
                    }
                    catch (\Exception $e)
                    {
                        $messages[] = "[Error : {$modelid}]  {$e->getMessage()}";
                        $error = true;
                    }
                }
            }
        }
        return $resultJson->setData([
            'messages' => $messages,
            'error' => $error]);
    }
}
