<?php
class Icube_Testpayment_Model_Testpayment extends Mage_Payment_Model_Method_Abstract {
    protected $_code = 'testpayment';

    protected $_isInitializeNeeded      = true;
    protected $_canUseInternal          = true;
    protected $_canUseForMultishipping  = false;

    protected $_formBlockType = 'testpayment/form';
    protected $_infoBlockType = 'testpayment/info';

//    const TCASH_STATUS_SUCCESS_COMPLETED = 'SUCCESS_COMPLETED';
//    const ORDER_STATUS_CONFIRMED = 'confirmed';
//    const ORDER_STATUS_PENDING = 'pending';
//    const TCASH_CODE = 'tcash';
//
//    public function getOrderPlaceRedirectUrl() {
//        return Mage::getUrl('tcash/index/redirect', array('_secure' => true));
//    }

//    public function assignData($data)
//    {
//        Mage::log('data:'.print_r($data,true),null,'assignData.log',true);
//        $param = Mage::app()->getRequest()->getPost();
//        Mage::log('$param[numbername]:'.$param[numbername],null,'assignData.log',true);
//        if (is_array($data)) {
//            $this->getInfoInstance()->addData($data);
//        }
//        elseif ($data instanceof Varien_Object) {
//            $this->getInfoInstance()->addData($data->getData());
//        }
//        return $this;
//    }

}
?>