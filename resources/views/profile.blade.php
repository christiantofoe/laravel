@extends('layouts.app')
@section('content')
<div class="container">
</h1>
	<h1>PROFILE PAGE</h1>
	<table class="table">
                          <tbody>
                      
                            <tr>
                               <td>Name : </td>
                              <td>{{$data->name}}</td>
                            </tr>
                             <tr>
                               <td>Email : </td>
                              <td>{{$data->email}}</td>
                            </tr>
                             <tr>
                               <td>Gender : </td>
                              <td> {{$data->gender}}</td>
                            </tr>
                             <tr>
                               <td>DOB : </td>
                              <td> {{$data->dob}}</td>
                            </tr>
                             <tr>
                               <td>Password : </td>
                               <td>{{$data->password}}</td>
                            </tr>
                           
                          </tbody>
                        </table>
</div>
@endsection