<?php
$data = simplexml_load_file('../XMLFiles/Setting_latihan.xml');

if(isset($_POST)) {

	foreach($data->bab as $bab){
		if($bab['id']==$_GET['id']){
			$bab->aktif =$_POST['aktif'];
			$bab->status = $_POST['status'];
			break;
		}
	}
	file_put_contents('../XMLFiles/Setting_latihan.xml', $data->asXML());
	
}

foreach($data->bab as $bab){
	if($bab['id']==$_GET['id']){
		$id = $bab['id'];
		$aktif = $bab->aktif;
		$status = $bab->status;
		break;
	}
}

?>
