<?php
/**
 * @author      Guidance Magento Team <magento@guidance.com>
 * @category    Guidance
 * @package     Error
 * @copyright   Copyright (c) 2014 Guidance Solutions (http://www.guidance.com)
 */

class Guidance_Error_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        Mage::throwException('Error page test');
    }
}