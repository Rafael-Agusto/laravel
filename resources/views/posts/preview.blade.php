<!DOCTYPE html>
<html>
<head>
	<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Membuat Laporan PDF Dengan DOMPDF Laravel</h4>
	</center>

	<table class='table table-bordered'>
		<thead>
			<tr>
                <th>Nomor</th>
				<th>Judul</th>
				<th>slug</th>
				<th>isi</th>
				<th>User Id</th>
				<th>Created at</th>
				<th>Update At</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($posts as $p)
			<tr>
				<td>{{ $i++ }}</td>
				<td>{{$p->judul}}</td>
				<td>{{$p->slug}}</td>
				<td>{{$p->isi}}</td>
				<td>{{$p->user_id}}</td>
				<td>{{$p->created_at}}</td>
				<td>{{$p->updated_at}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

</body>
</html>