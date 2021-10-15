
@extends('layouts.landing')
@section('content')  
<h2>Enter Restaurant Details</h2>
<form method="post" action="{{route('addRestaurantLocationResult')}}">@csrf
<table class='table'>
<tr> <td>Restaurant Name: <input type="text" size="20" name="name" placeholder="Restaurant Name"/> </td> </tr>
<tr> <td>Location: <input type="text" size="20" name="lpickup" placeholder="Address"/> </td> </tr>
<td><input type="submit" value="Submit"/> </td>
</table>
</form>
@endsection