<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

   class TableViewsController extends Controller
{
    public function home(){
        return view('index.home');
    }  

    public function allCustomers(){
        $query ="SELECT * FROM CUSTOMERINFO";
        $result = DB::select($query);
        $resultS='';
        if (!$result) 
        {
            $resultS="No Customers Exist";
        } else{
            $resultS=(displayTable($result));
        }
        return view('posts.allData')->with('resultS', $resultS);
    }
    public function allRestaurants(){
        $query = "SELECT * FROM RESTAURANT ";
        $result = DB::select($query);
        $resultS='';
        if (!$result) 
        {
            $resultS="No Restaurants Exist";
        } else{
            $resultS=(displayTable($result));
        }
        return view('posts.allData')->with('resultS', $resultS);
    }

    public function allProducts(){
        $query = "SELECT * FROM PRODUCT ";
        $result = DB::select($query);
        $resultS='';
        if (!$result) 
        {
            $resultS="No Products Exist";
        } else{
            $resultS=(displayTable($result));
        }
        return view('posts.allData')->with('resultS', $resultS);
    }
    
    public function allOrders(){
        $query = "SELECT A.FULFILLED,Z.CUSTOMERID,Z.FIRSTNAME,Z.LASTNAME,A.ORDERNUMBER,Z.ADDRESS,B.PRODUCTID,C.PRODUCTNAME,C.PRODUCTNAME,C.PRODUCTPRICE FROM CUSTOMERINFO Z,CUSTOMERORDER A,ORDERINFO B, PRODUCT C WHERE Z.CUSTOMERID=A.CUSTOMERID AND A.ORDERNUMBER=B.ORDERNUMBER AND B.PRODUCTID=C.PRODUCTID";
        $result = DB::select($query);
        $resultS='';
        if (!$result) 
        {
            $resultS="No Order Exist";
        } else{
            $resultS=(displayTable($result));
        }
        return view('posts.allData')->with('resultS', $resultS);
    }

    public function allCustomerLoyalty(){
        $query = "SELECT A.FIRSTNAME, A.LASTNAME, A.CUSTOMERID, B.POINTS ,B.RESTAURANTNAME FROM CUSTOMERINFO A, LOYALTY B WHERE A.CUSTOMERID=B.CUSTOMERID";
        $result = DB::select($query);
        $resultS='';
        if (!$result) 
        {
            $resultS="No CustomerLoyaltys Exist";
        } else{
            $resultS=(displayTable($result));
        }
        return view('posts.allData')->with('resultS', $resultS);
    }


}
