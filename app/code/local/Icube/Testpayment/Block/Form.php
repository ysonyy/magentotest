<?php
class Icube_Testpayment_Block_Form extends Mage_Payment_Block_Form
{
    protected function _construct()
    {
        parent::_construct();
        $this->setTemplate('testpayment/form.phtml');
    }
}
?>