@extends('layouts.landing')
@section('content') 
<h2>Enter Customer Details</h2>
<form method="post" action="{{ route('addCardResult')}}">
  <table class='table'> @csrf
    <tr>
      <td>Customer ID:&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" size="30" name="ID" placeholder="Customer ID" />
      </td>
    </tr>
    <tr>
      <td>Type:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" size="30" name="Type"
          placeholder="Ex. Visa, Mastercard, Debit." /> </td>
    </tr>
    <tr>
      <td>Card Holder Name: <input type="text" size="30" name="Name"
          placeholder="Holder Name(first and last)" /> </td>
    </tr>
    <tr>
      <td>Card Number: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" size="30" name="Num"
          placeholder="Card Number" /> </td>
    </tr>
    <tr>
      <td>Expiry Date: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"
          size="30" name="EPD" placeholder="Expiry Date yyyy-mm-dd" /> </td>
    </tr>
    <tr> <br />
      <td>Address:
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input
          type="text" size="30" name="Adr" placeholder="Address" /> </td>
    </tr>
    <td><input type="submit" value="Submit" /> </td>
  </table>
</form>
@endsection