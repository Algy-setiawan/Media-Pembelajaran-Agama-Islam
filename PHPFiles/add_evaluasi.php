<?php
if(isset($_POST)) {
	$data = simplexml_load_file('../XMLFiles/evaluasi.xml');
	$root = $data->documentElement;
	$total = $root->childNodes->length;

	$evaluasi = $data->addChild('evaluasi');
	$evaluasi->addAttribute('id',date("Ymdhis"));
	$evaluasi->addChild('nama', $_POST['nama']);
	$evaluasi->addChild('kelas', $_POST['kelas']);
	$evaluasi->addChild('bab', $_POST['bab']);
	$evaluasi->addChild('nilai', $_POST['nilai']);
	file_put_contents('../XMLFiles/evaluasi.xml', $data->asXML());
	
}
?>
<form method="post">
	<table cellpadding="2" cellspacing="2">
		<tr>
			<td>Id</td>
			<td><input type="text" name="id"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>kelas</td>
			<td><input type="text" name="kelas"></td>
		</tr>
		<tr>
			<td>Nilai</td>
			<td><input type="text" name="nilai"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" value="Save" name="submitSave"></td>
		</tr>
	</table>
</form>