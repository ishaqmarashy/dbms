@extends('layouts.landing')
@section('content')  
<h2>Enter Order Details</h2>
<form method="post" action="{{route('addOrdersResult')}}">@csrf
    <table class='table'>
        <tr>
            <td> Customer ID: <input type="text" size="20" name="id" placeholder="Customer ID" />
            </td>
        </tr>
        <tr>
            <td> Order Date: &nbsp;&nbsp;&nbsp;<input type="text" size="20" name="date" placeholder="Order Date" />
            </td>
        </tr>
        <td><input type="submit" value="Submit" /> </td>
    </table>
</form>
@endsection