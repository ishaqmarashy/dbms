<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class GetFromTablesController extends Controller
{
    function customerAccountResult(){
        $first = $_POST['first'];
        $last = $_POST['last'];
        $query = "SELECT * FROM CUSTOMERINFO WHERE FIRSTNAME='$first' and LASTNAME='$last'";
        $result = DB::select($query);
        $result = json_decode(json_encode($result),true);
        $numrows =sizeof($result);
        $resultS='';
        if ($numrows == 0)
        {
            $resultS= "No customer with name = $first $last\n";
        }
        else{
            $resultS.= "<h3>customer with name = $first $last</h3>";
            $resultS.=displayTable($result);}            
        $query = "SELECT CARDTYPE,CARDHOLDERNAME,CARDNUMBER,EXPIRYDATE,A.ADDRESS FROM SAVEDCARD A, CUSTOMERINFO B WHERE B.FIRSTNAME='$first' and B.LASTNAME='$last' AND B.CUSTOMERID=A.CUSTOMERID";
        $result = DB::select($query);
        $result = json_decode(json_encode($result),true);
        $numrows =sizeof($result);
        if ($numrows == 0){$resultS.= "No Cards Were Added\n\n";}
        else{
            $resultS.=displayTable($result);}
        $query = "SELECT RESTAURANTNAME, POINTS FROM LOYALTY A,CUSTOMERINFO B WHERE B.FIRSTNAME='$first' and B.LASTNAME='$last' AND B.CUSTOMERID=A.CUSTOMERID";
        $result = DB::select($query);
        $result = json_decode(json_encode($result),true);
        $numrows =sizeof($result);
        if ($numrows == 0){$resultS.= "No Loyalty points owned\n";}
        else{$resultS.=displayTable($result);}
            $query = "select c.fulfilled,c.orderdate,c.ordernumber,b.productid,b.quantity,e.restaurantname,e.productname from customerinfo a, orderinfo b, customerorder c,product e where a.FIRSTNAME='$first' and a.LASTNAME='$last'
            and e.productid=b.productid and a.customerid=c.customerid and c.ordernumber=b.ordernumber ";
            $result = DB::select($query);
            $result = json_decode(json_encode($result),true);
            $numrows =sizeof($result);
        if ($numrows == 0) 
        {
            $resultS.=  "No Orders \n";
        }
        else{
            $resultS.=displayTable($result);}
        return view('posts.allData')->with('resultS', $resultS);}
        

    function restaurantProductsResult(){
        $RID = $_POST['RID'];
        $query = "SELECT * FROM PRODUCT WHERE PRODUCTNAME= '$RID'";
        $result = DB::select($query);
        $result = json_decode(json_encode($result),true);
        $numrows =sizeof($result);
        $resultS='';
        if ($numrows == 0) 
        {
            $resultS.=  "No Product With Name = $RID";
            return view('posts.allData')->with('resultS', $resultS);
        }
        $resultS.=  "<h3> Product With Name = $RID</h3>";
        $resultS.= displayTable($result);
        return view('posts.allData')->with('resultS', $resultS);
    }
    
}
