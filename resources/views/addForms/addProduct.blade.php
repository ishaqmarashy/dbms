
@extends('layouts.landing')
@section('content') 
<h2>Enter Customer Details</h2>
<form method="post" action="{{route('addProductResult')}}">
@csrf
<table class='table'>
<tr>  
<td>Restaurant Name: <input type="text" size="30" name="RST" placeholder="Restaurant Name" /> </td> </tr>
<tr>  
<td>Product Name:&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" size="30" name="Name" placeholder="Product Name" /> </td> </tr>
<tr> 
<td>Price: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" size="30" name="PC" placeholder="Price" /> </td> </tr>
<td><input type="submit" value="Submit"/> </td>
</table>
</form>
@endsection