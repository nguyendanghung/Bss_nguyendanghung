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
//                $result = array();
//                $result['error'] = '-1';
//                $result['message'] = 'My error message';
//                $controller->getResponse()->setBody(Mage::helper('core')->jsonEncode($result));
//                $controller = $observer->getControllerAction();
//                    $controller->getResponse()
//                                ->setRedirect(Mage::getUrl(''),301)
//                                ->sendResponse();
                }
                exit;
            }
        }


}
