<?php
$sumber = file_get_contents('index3.json');
$data	=json_decode($sumber);

?>
<html>
<head>
	<title>presensi : data_absensi_mobile</title>
</head>
<body>
	<h3>
		Sumber Data : index3.json
	</h3>
	<table border="1">
		<thead>
			<th>id</th>
			<th>nip</th>
			<th>longitude</th>
			<th>presensi ke</th>
			<th>photo</th>
			<th>macaddress</th>
			<th>created at</th>
		</thead>
		<tbody>
			<?php
				for($i=0;$i<1;$i++){
				echo "<tr>
						<td>".$data->presensi->data_absensi_mobile[0]->id."</td>
						<td>".$data->presensi->data_absensi_mobile[0]->nip."</td>
						<td>".$data->presensi->data_absensi_mobile[0]->longitude."</td>
						<td>".$data->presensi->data_absensi_mobile[0]->presensi_ke."</td>
						<td>".$data->presensi->data_absensi_mobile[0]->photo."</td>
						<td>".$data->presensi->data_absensi_mobile[0]->macaddress."</td>
						<td>".$data->presensi->data_absensi_mobile[0]->created_at."</td>
					</tr>";

				echo "<tr>
						<td>".$data->presensi->data_absensi_mobile[1]->id."</td>
						<td>".$data->presensi->data_absensi_mobile[1]->nip."</td>
						<td>".$data->presensi->data_absensi_mobile[1]->longitude."</td>
						<td>".$data->presensi->data_absensi_mobile[1]->presensi_ke."</td>
						<td>".$data->presensi->data_absensi_mobile[1]->photo."</td>
						<td>".$data->presensi->data_absensi_mobile[1]->macaddress."</td>
						<td>".$data->presensi->data_absensi_mobile[1]->created_at."</td>
					</tr>";
				}	
			?>
		</tbody>
	</table>
</body>

<body>
	<h3>
		Sumber Data : index3.json
	</h3>
	<table border="1">
		<thead>
			<th>finger_id</th>
			<th>nip</th>
			<th>tag_date</th>
			<th>finger_ip</th>
		</thead>
		<tbody>
			<?php
				for($i=0;$i<1;$i++){
				echo "<tr>
						<td>".$data->presensi->data_absensi_finger[0]->finger_id."</td>
						<td>".$data->presensi->data_absensi_finger[0]->nip."</td>
						<td>".$data->presensi->data_absensi_finger[0]->tag_date."</td>
						<td>".$data->presensi->data_absensi_finger[0]->finger_ip."</td>
					</tr>";
				}	
			?>
		</tbody>
	</table>
</body>
</html>