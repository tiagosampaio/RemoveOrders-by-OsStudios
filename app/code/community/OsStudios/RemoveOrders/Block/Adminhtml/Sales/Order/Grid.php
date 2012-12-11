<?php
class OsStudios_RemoveOrders_Block_Adminhtml_Sales_Order_Grid extends Mage_Adminhtml_Block_Sales_Order_Grid
{
    
    protected function _prepareMassaction()
    {
        parent::_prepareMassaction();
        $this->getMassactionBlock()->addItem('delete_order', array(
             'label'=> Mage::helper('sales')->__('Delete Order'),
             'url'  => $this->getUrl('removeOrders/adminhtml_sales_order/removeorder'),
        ));	
        return $this;
    }

}
