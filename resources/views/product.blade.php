@extends('layouts.app')
@section('content')
<div class="container">
		<table class="table">
		<th>Product Name</th>
		<th>Price</th>
			<tbody>
               @foreach($data as $d)
               <tr>
               	<td>{{$d->productName}}</td>
               	<td>{{$d->price}}</td>
               	<td><button class="btn btn-primary">Add To Cart</button></td>
               </tr>
               @endforeach	
               </tbody>
        </table>
</div>
@endsection