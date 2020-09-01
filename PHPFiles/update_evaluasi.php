<?php
$data = simplexml_load_file('../XMLFiles/evaluasi.xml');

if(isset($_POST)) {

	foreach($data->evaluasi as $evaluasi){
		if($evaluasi['id']==$_GET['id']){
			$evaluasi->nama =  $_POST['nama'];
			$evaluasi->kelas = $_POST['kelas'];
			$evaluasi->nilai = $_POST['nilai'];
			$evaluasi->bab = $_POST['bab'];
			break;
		}
	}
	file_put_contents('../XMLFiles/evaluasi.xml', $data->asXML());
	
}

foreach($data->evaluasi as $evaluasi){
	if($evaluasi['id']==$_GET['id']){
		$id = $evaluasi['id'];
		$nama = $evaluasi->nama;
		$kelas = $evaluasi->kelas;
		$nilai = $evaluasi->nilai;
		$bab = $evaluasi->bab;
		break;
	}
}

?>
