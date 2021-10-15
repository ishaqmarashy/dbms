@extends('layouts.landing')
@section('content')  
<h2>Enter Customer Details</h2>
<form method="post" action="{{route('addCustomerResult')}}">
    <table class='table'>@csrf
        <tr>
            <td>First Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" size="30"
                    name="first" placeholder="FirstName" /> </td>
        </tr>
        <tr>
            <td>Last Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" size="30"
                    name="last" placeholder="LastName" /> </td>
        </tr>
        <tr>
            <td>Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input
                    type="text" size="30" name="add" placeholder="Address" /> </td>
        </tr>
        <tr>
            <td>Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input
                    type="text" size="30" name="email" placeholder="Email" /> </td>
        </tr>
        <tr>
            <td>Date Of Birth:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" size="20" name="doB"
                    placeholder="Date Of Birth" /> yyyy-mm-dd</td>
        </tr>
        <tr> <br />
            <td>Registration Date:<input type="text" size="20" name="regdate" placeholder="Registration Date" /> </td>
        </tr>
        <tr>
            <td>Gender:
             Male <input type="radio" value="M" name="gen" />
             Female <input type="radio" value="F" name="gen" /></td>
        </tr>
        <td><input type="submit" value="Submit" /> </td>
    </table>
</form>
@endsection
