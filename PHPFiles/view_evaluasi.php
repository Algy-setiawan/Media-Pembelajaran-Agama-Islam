<?php
if(isset($_GET['action'])) {
	$data = simplexml_load_file('evaluasi.xml');
	$id = $_GET['id'];
	$index = 0;
	$i = 0;
	foreach($data->evaluasi as $evaluasi){
		if($evaluasi['id']==$id){
			$index = $i;
			break;
		}
		$i++;
	}
	unset($data->evaluasi[$index]);
	file_put_contents('evaluasi.xml', $data->asXML());
}
$data = simplexml_load_file('evaluasi.xml');


echo 'Number of data: '.count($data);
echo '<br>List evaluasi Information';
?>
<br>
<a href="add.php">Add new evaluasi</a>
<br>
<table cellpadding="2" cellspacing="2" border="1">
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>kelas</th>
		<th>nilai</th>
		<th>Option</th>
	</tr>
	<?php foreach($data->evaluasi as $evaluasi) { ?>
	<tr>
		<td><?php echo $evaluasi['id']; ?></td>
		<td><?php echo $evaluasi->nama; ?></td>
		<td><?php echo $evaluasi->kelas; ?></td>
		<td><?php echo $evaluasi->nilai; ?></td>
		<td><a href="update.php?id=<?php echo $evaluasi['id']; ?>">Edit</a> |
			<a href="index.php?action=delete&id=<?php echo $evaluasi['id']; ?>" onclick="return confirm('Are you sure?')">Delete</a></td>
	</tr>
	<?php } ?>
</table>