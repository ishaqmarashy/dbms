

@extends('layouts.landing')
@section('content') 
    <h1>Search Customer Database</h1>
    <br/>
    <form method="post" action="{{ route('customerAccountResult')}}">
    @csrf
    Enter first and last name of the customer you wish to know about: 
    <table>
    <tr>  
    <td>First Name: <input type="text" size="20" name="first" placeholder="FirstName" /> </td> </tr>
    <tr>  
    <td>Last Name: <input type="text" size="20" name="last" placeholder="LastName" /> </td> </tr>
    </table>
    <input type="submit" value="submit"/>
    </form>
@endsection