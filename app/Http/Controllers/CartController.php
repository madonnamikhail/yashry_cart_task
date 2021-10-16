<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\Country;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    //
    public function index(Request $request)
    {

        $productCount=count($request->id);
        $subtotal=array_sum($request->pricequantity);
        $vat=$subtotal * 0.14;
        $product_weight=$request->Productwight;
        $productCounrty=Product::whereIn('id',$request->id)->get();
        $shoesdiscount=0;
        $jacketdiscount=0;
        foreach($productCounrty as $row){
            if($row->name == 'shoes'){
                $shoesdiscount=1;
            }
            if($row->name == 'Jacket'){
                $jacketdiscount=1;
            }
        }
        $country =Country::select('countries.*','products.*'
        ,DB::raw('(1000 * products.weight)*(countries.rate)/(100) as Total'))
                    ->whereIn('product_id',$request->id)
                    ->leftjoin('products','countries.product_id','=','products.id')
        ->get();
        $shipping=0;
        foreach($country as $item) {
                $shipping+=$item->Total;
        }

    return view('invoice',compact('subtotal','shipping','vat','shoesdiscount','jacketdiscount','productCount'));
    }
}
