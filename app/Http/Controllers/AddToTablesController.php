<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class AddToTablesController extends Controller
{
    public function addCustomerResult(){
        $first = $_POST['first'];
        $last = $_POST['last'];
        $add = $_POST['add'];
        $email = $_POST['email'];
        $doB = $_POST['doB'];
        $regdate =$_POST['regdate'];
        $gen = $_POST['gen'];
        $query =  "INSERT INTO CUSTOMERINFO VALUES (NULL,'$first', '$last', '$add','$email', '$doB', '$regdate','$gen' )";
        $insResult = DB::insert($query);
        $resultS='';
        if ($insResult){
            $resultS=("Details for " . $first . " " . $last . " have been inserted<br/>");
            $query =  "SELECT CUSTOMERID FROM CUSTOMERINFO WHERE FIRSTNAME='$first' AND LASTNAME='$last' AND EMAIL='$email'";
            $insResult = DB::select($query);
            $temp=json_decode(json_encode($insResult),true);
            $resultS.=("The given id is " . $temp[sizeOf($temp)-1]['CUSTOMERID'] . ".<br/>");
        }else{
          $resultS=("Failed to Insert Customer Information");
        }
        return view('posts.allData')->with('resultS', $resultS);;}
    public function addCardResult(){
        $ID = $_POST['ID'];
        $Type = $_POST['Type'];
        $Name = $_POST['Name'];
        $Num = $_POST['Num'];
        $EPD = $_POST['EPD'];
        $Adr =$_POST['Adr'];
        $query =  "INSERT INTO SAVEDCARD VALUES ($ID ,'$Type', '$Name', $Num, '$EPD', '$Adr')";
        $resultS='';
        try{
            $insResult = DB::insert($query);
            $resultS=("Details for ".$Name."".$EPD."" .$Adr. " have been inserted<br/>");
            }
        catch (Exception $e){            
            $resultS=("Insert Failed<br/>");
        }
        return view('posts.allData')->with('resultS', $resultS);;}
    public function addOrdersResult(){
        $date = $_POST['date'];
        $id = $_POST['id'];
        $query =  "INSERT INTO CUSTOMERORDER VALUES (NULL,'$id', '$date',default,default)";
        $resultS='';
        try{
            $insResult = DB::insert($query);
            if ($insResult){
                $resultS=("Details for ".$id." ".$date. " have been inserted<br/>");
                $query =  "SELECT ORDERNUMBER FROM CUSTOMERORDER WHERE CUSTOMERID='$id' AND ORDERDATE='$date'";
                $insResult = DB::select($query);
                $temp=json_decode(json_encode($insResult),true);
                $resultS.=("The given id is " .$temp[sizeOf($temp)-1]['ORDERNUMBER']. ".<br/>");
            }else
            $resultS=("Insert Failed<br/>");
        }
        catch (Exception $e){            
            $resultS=("Insert Failed<br/>");
        }
        return view('posts.allData')->with('resultS', $resultS);;    }
    public function addProductResult(){
        $RST = $_POST['RST'];
        $Name = $_POST['Name'];
        $PC = $_POST['PC'];
        $query =  "INSERT INTO PRODUCT VALUES (NULL,'$RST', '$Name', '$PC' )";
        try{
            $insResult = DB::insert($query);
            if ($insResult)
            {
                $resultS=("Details for " . $RST . " ".$PC."" . $Name . " have been inserted<br/>");
                $query =  "SELECT PRODUCTID FROM PRODUCT WHERE RESTAURANTNAME='$RST' AND PRODUCTNAME='$Name' AND PRODUCTPRICE='$PC'";
                $insResult = DB::select($query);
                $temp=json_decode(json_encode($insResult),true);
                $resultS.=("The given id is " .$temp[sizeOf($temp)-1]['PRODUCTID']. ".<br/>");
            }
            else
                $resultS=("Insert Failed<br/>");
        }
        catch (Exception $e){            
            $resultS=("Insert Failed<br/>");
        }
        return view('posts.allData')->with('resultS', $resultS);}
    public function addProductToOrderResult(){
        $ON = $_POST['ON'];
        $ID = $_POST['ID'];
        $QT = $_POST['QT'];
        $gen = $_POST['gen'];
        $resultS='';
        $query =  "INSERT INTO ORDERINFO VALUES ($ON,$ID,$QT)";
        $q1 = "SELECT PRODUCTPRICE FROM PRODUCT WHERE PRODUCTID =$ID";
        try{
            $result = DB::select($q1);
            $p = json_decode(json_encode($result),true);
            $v = $QT*$p[0]['PRODUCTPRICE'];
            $q2 = "UPDATE CUSTOMERORDER SET Value=Value+".$v." WHERE ORDERNUMBER = $ON";
            $insResult =  DB::insert($query);
            if ($insResult)
            {
                $resultS=("Details for " . $ON . " ".$ID."" . $QT . " have been inserted<br/>");
                DB::update($q2);
                $query = "select * from customerorder a, orderinfo b,restaurant d,product c where b.ORDERNUMBER=$ON and a.ORDERNUMBER=$ON and c.restaurantname= d.restaurantname group by a.CUSTOMERID";
                $result = DB::select($query);
                $finfo = json_decode(json_encode($result),true);
                $query2 = "select restaurantname from loyalty where RESTAURANTNAME= '".$finfo[8]['RESTAURANTNAME']."' and CUSTOMERID= '".$finfo[1]['CUSTOMERID'];
                dd($query);
                $result2 = DB::select($query2);
                $jar=json_decode(json_encode($result),true);
                if(sizeOf($jar)==0){
                    $query3 = "insert into loyalty values('".$finfo[8]['RESTAURANTNAME']."',0,'".$finfo[1]['CUSTOMERID']."')";
                    $result3 = DB::insert($query3);
                    }
                if($gen=="M"){
                    $query = "update loyalty set points=points+'".$finfo[9]['points']."' where customerid='".$finfo[1]['customerid']."' and restaurantname='".$finfo[12]['restaurantname']."'";
                    $result = DB::update($query);
                    $temp=json_decode(json_encode($result),true);
                    $result.=("The given id is " . $temp[sizeOf($temp)-1] . ".<br/>");}
                else{
                    $query = "update loyalty set points=points+'".$finfo[10]['points']."' where customerid='".$finfo[1]['customerid']."' and restaurantname='".$finfo[12]['restaurantname']."'";
                    $result =  DB::update($query);
                    $temp=json_decode(json_encode($result),true);
                    $resultS.=("The given id is " . $temp[sizeOf($temp)-1] . ".<br/>");}
            }
            else  $resultS=("Insert Failed<br/>");
        }
        catch (Exception $e){            
            $resultS=("Insert Failed<br/>");
        }
        return view('posts.allData')->with('resultS', $resultS);}    
    public function addRestaurantResult(){
        $name = $_POST['name'];
        $lpickup = $_POST['lpickup'];
        $ldelivery = $_POST['ldelivery'];
        $query =  "INSERT INTO RESTAURANT VALUES ('$name',$lpickup,$ldelivery)";
        $insResult = DB::insert($query);
        if ($insResult)
        {
            $resultS=("Details for " .$name ." have been inserted<br/>");
        }
        else
            $resultS=("Insert Failed<br/>");
        return view('posts.allData')->with('resultS', $resultS);}
    public function addRestaurantLocationResult(){
        try{
            $name = $_POST['name'];
            $lpickup = $_POST['lpickup'];
            $query =  "INSERT INTO restaurantlocation VALUES('$name','$lpickup')";
            $insResult = DB::insert($query);
            $resultS='';
            if ($insResult)
            {
                $resultS=("Details for " .$name ." have been inserted<br/>");
            }
            else
            $resultS=("Details for " .$name ." have been inserted<br/>"+e.getMessage());
            return view('posts.allData')->with('resultS', $resultS);
     }
        catch (Exception $e){            
            $resultS=("Details for " .$name ." have been inserted<br/>"+e.getMessage());
            return view('posts.allData')->with('resultS', $resultS);
        }
}
}