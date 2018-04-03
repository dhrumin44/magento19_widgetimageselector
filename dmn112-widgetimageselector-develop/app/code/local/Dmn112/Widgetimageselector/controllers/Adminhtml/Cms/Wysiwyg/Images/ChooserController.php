<?php
/**
 * Images manage controller to configure widgets in the Cms WYSIWYG editor.
 *
 * @category    Dmn112
 * @package     Dmn112_Widgetimageselector
 * @author      Gerrit Pechmann <gp@dmn112.de>
 * @copyright   Copyright (c) 2012 dmn112 GmbH (http://www.dmn112.de)
 */
require_once  'Mage/Adminhtml/controllers/Cms/Wysiwyg/ImagesController.php';

class Dmn112_Widgetimageselector_Adminhtml_Cms_Wysiwyg_Images_ChooserController extends Mage_Adminhtml_Cms_Wysiwyg_ImagesController
{
    /**
     * Fire when select image.
     *
     * @return void
     */
    public function onInsertAction()
    {
        $helper = Mage::helper('cms/wysiwyg_images');
        $storeId = $this->getRequest()->getParam('store');

        $filename = $this->getRequest()->getParam('filename');
        $filename = $helper->idDecode($filename);

        Mage::helper('catalog')->setStoreId($storeId);
        $helper->setStoreId($storeId);

        $fileUrl = $helper->getCurrentUrl() . $filename;
        $mediaPath = str_replace(Mage::getBaseUrl('media'), '', $fileUrl);

        $this->getResponse()->setBody($mediaPath);
    }

    /**
     * Allow requests for all admin users
     *
     * @return bool
     */
    protected function _isAllowed()
    {
        return true;
    }
}
