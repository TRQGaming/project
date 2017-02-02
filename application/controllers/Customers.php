<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customers extends CI_Controller {


public function cart()
			{
            $this->session->set_userdata($customer_shoplist);
						$customer_shoplist = array(
              'id' =>
              'qty'=>
              'price'=>


            )
						if (!empty($customer_shoplist))
							{
									foreach($customer_shoplist as $key=>$value)
											{
													return $customer_shoplist;
											}
							}
			}

public function empty_cart()
      			{

      			}


}
