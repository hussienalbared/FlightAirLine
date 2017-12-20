
<style type="text/css">
	tr{
		display: flex;
	}
td{
	flex: 1;
}
</style>
<h1>hello from index</h1>
<table>
@foreach($flights as $flight)
<tr style="background-color: #dddddd;">
<td>{{$flight->name}}</td><td>{{$flight->from}}</td><td>{{$flight->to}}</td><td>{{$flight->department}}</td>
</tr>
@endforeach
</table>