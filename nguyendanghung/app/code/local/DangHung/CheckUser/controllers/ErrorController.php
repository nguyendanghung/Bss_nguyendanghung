<?php
/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 10/08/2016
 * Time: 14:51
 */
class DangHung_CheckUser_Controller_Varien_Exception extends Mage_Core_Controller_Varien_Exception
{
    /**
     * @param mixed $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }
}