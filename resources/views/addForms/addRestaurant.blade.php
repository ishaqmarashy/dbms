
@extends('layouts.landing')
@section('content')
<h2>Enter Restaurant Details</h2>
<form method="post" action="{{route('addRestaurantResult')}}">@csrf
<table class='table'>
<tr> <td>Restaurant Name: <input type="text" size="20" name="name" placeholder="Restaurant Name"/> </td> </tr>
<tr> <td>Loyalty Points Given for Pickup: <input type="text" size="20" name="lpickup" placeholder="int value"/> </td> </tr>
<tr> <td>Loyalty Points Given for Delivery: <input type="text" size="20" name="ldelivery" placeholder="int value"/> </td> </tr>
<td><input type="submit" value="Submit"/> </td>
</table>
</form>
@endsection