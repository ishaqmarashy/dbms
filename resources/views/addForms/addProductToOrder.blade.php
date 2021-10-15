

@extends('layouts.landing')
@section('content')  
<h2>Enter Product Details</h2>
<form method="post" action="{{route('addProductToOrderResult')}}">@csrf
<table class='table'>
<tr>  
<td>Order Number: <input type="text" size="30" name="ON" placeholder="Order Number" /> </td> </tr>
<tr>  
<td>Product ID: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" size="30" name="ID" placeholder="Product ID" /> </td> </tr>
<tr> 
<td>Quantity: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" size="30" name="QT" placeholder="Quantity" /> </td> </tr>
<td> Delivery  :<input type="radio" value="M" name="gen"/><br/>
Pickup :<input type="radio" value="F" name="gen"/></td>
<td><input type="submit" value="Submit"/> </td>
</table>
</form>
@endsection