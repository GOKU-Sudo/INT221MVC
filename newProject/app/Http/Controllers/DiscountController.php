<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiscountController extends Controller
{
    //
    public function calculate($price,$discount){
      $result=$this->discnt($discount,$price,);
      if(is_numeric($result)) return "The final price after discount is :".$result;
      else return "Invalid discount. NO DISCOUNT APPLIED. The price remains :".$price;

    }

    private function discnt($discount,$price){
        if($discount>=0 && $discount<=50){
            $newPrice= $price-($price*$discount/100);
            return $newPrice;
        }
            else{
                return "INVALID";
            }
    }

}
