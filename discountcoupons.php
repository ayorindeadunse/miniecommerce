<?php
class DiscountCoupons {


	//declare a method that accepts the coupon name, $totalquantity,coupon percent off, minimum amount, maximum amount and discount price as parameters

	function applyDiscount($coupon_name,$quantity,$discount_percentage,$min_amt,$max_amt,$discount_price,$carttotalamount)
	{
		
		if($coupon_name == 'COUPONFIXED10') 
		{
			// get quantity and upper and lower limits of cart amount
			if($quantity >= 1 && (($carttotalamount > $min_amt) && ($carttotalamount < $max_amt)))
			{	
				// apply discount return discount amount
				$finaldiscountprice = $discount_price;
			}
			
		}

		if ($coupon_name == 'COUPONPERCENT10')
		{
			if($quantity >=2 && (($carttotalamount > $min_amt) && ($carttotalamount < $max_amt)))
			{
				$percentagediscountamount = $discount_percentage * $carttotalamount;
				//$finalpercentagediscountamount = $carttotalamount - $percentagediscountamount;

				$finaldiscountprice = $percentagediscountamount;
			}
		}

		if ($coupon_name == 'COUPONMIXED10')
		{
			if($quantity >=3 && (($carttotalamount > $min_amt) && ($carttotalamount < $max_amt)))
			{
				//calculate initial discount
				$percentagediscountamount = $discount_percentage * $carttotalamount;
				$fixeddiscountamount = $discount_price;

				//check which is greater
				if($percentagediscountamount > $fixeddiscountamount)
				{
					$finaldiscountprice = $percentagediscountamount;
				}
				else
				{
					$finaldiscountprice = $fixeddiscountamount;
				}
			}
		}

		if($coupon_name == 'COUPONREJECTED10')
		{
			if($carttotalamount > $min_amt)
			{
				//take 10 percent off the cart total
				$percentagediscountamount = $discount_percentage * $carttotalamount;
			
				$fixeddiscountamount = $discount_price;

				//sum both to give total discount accrued for customer
				$finaldiscountprice = $percentagediscountamount + $fixeddiscountamount;

			}
		}

		if(($quantity > 0) && (($coupon_name == 'COUPONFIXED10') || 
		($coupon_name == 'COUPONPERCENT10') || ($coupon_name == 'COUPONMIXED10') 
		|| ($coupon_name == 'COUPONREJECTED10')) && ($carttotalamount < $min_amt ))
		{
			$finaldiscountprice = 0;
		}
		return $finaldiscountprice;
	}	
}
?>
