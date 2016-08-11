<?php
/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 10/08/2016
 * Time: 09:45
 */
class DangHung_CheckUser_Model_Observer
{
    public function checkUser($observer)
    {
        $controller = $observer->getEvent()->getControllerAction();
        $grand = Mage::getSingleton('checkout/cart')->getQuote()->getGrandTotal();
        if ($controller)
        {
            if(!Mage::getSingleton('customer/session')->isLoggedIn() || $grand < 50)
            {
                Mage::getSingleton('core/session')->addError('Please login and try again!');
                Mage::app()->getFrontController()->getResponse()->setRedirect(Mage::getBaseUrl())->sendResponse();
                Mage::app()->getResponse()->sendResponse();
                exit;
            }
              
        }
    }


}
