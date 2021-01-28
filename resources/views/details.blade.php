@extends('layout')

@section('content')

<style>
th, td {
  padding: 10px;
}
</style>

<h1 class="text-left mx-sm-3 mb-2">{{ $name }} File Details</h1>
<br><br>
<table class="table mx-sm-3 mb-2">
<tr>
<td>ID</td>
<td>Name</td>
<td>Postal Code</td>
</tr>
@foreach($files as $file)
<tr>
<td>{{$file['ID']}}</td>
<td>{{$file['NAME']}}</td>
<td>{{$file['Postal Code']}}</td>

</tr>
@endforeach

</table>

@stop