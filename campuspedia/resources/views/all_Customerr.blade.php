<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;    
}
</style>
<table style="width:100%">
   <tr>
    <th>Judul Beasiswa:</th>
    <th>Penyelenggara:</th> 
    <th>Detail Beasiswa:</th>
	<th>Edit</th>
	<th>Delete</th>
  </tr>
	@foreach ($all_customerr as $customerr)
	  <tr>
		<td>{{ $customerr->name }}</td>
		<td>{{ $customerr->email }}</td> 
		<td>{{ $customerr->occupation }}</td> 
		<td><a href ="{{route(('edit'),  $customerr->id )}}" >Edit</a></td>
		<td><a href ="{{route(('delete'),  $customerr->id)}}" >Delete</a></td>
	  </tr>
	@endforeach

</table>