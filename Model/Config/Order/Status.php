<?php

class Intelipost_Push_Model_Config_Order_Status
{        

public function toOptionArray()
{
	$status = Mage::getSingleton('sales/order_config')->getStatuses();
	$options = array();
	foreach ($status as $key => $value) 
	{
		$options[] = array('label' => $value, 'value'=> $key);
	}

	return $options;
}

}

