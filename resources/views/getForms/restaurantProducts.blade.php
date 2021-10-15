

@extends('layouts.landing')
@section('content')
<form method="post"  action="{{ route('restaurantProductsResult')}}">     @csrf
Enter the products name: <input type="text" size="10" name="RID" />
<input type="submit" value="submit"/>
</form>
@endsection