@extends('layout')

@section('content')
<style>
th, td {
  padding: 10px;
}
</style>

<h1 class="text-left mx-sm-3 mb-2">List of Mailings</h1>
<br><br>
<table class="table mx-sm-3 mb-2">
<tr>
<td>Mail Name</td>
<td>Mail Date</td>
<td>File</td>
</tr>
@foreach($files as $file)
<tr>
<td>{{$file['mailing_name']}}</td>
<td>{{$file['mailing_date']}}</td>
<td><a href="/details/{{$file['name']}}">{{$file['name']}}</a></td>
<!--<td><a href={{$file['file_path']}}>{{$file['name']}}</a></td>
-->
</tr>
@endforeach

</table>

@stop