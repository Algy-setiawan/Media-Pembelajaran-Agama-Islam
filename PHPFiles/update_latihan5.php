<?php
$data = simplexml_load_file('../XMLFiles/Bab5.xml');

if(isset($_POST)) {

	foreach($data->soal as $soal){
		if($soal['id']==$_GET['id']){
			$soal->isi =$_POST['isi'];
			$soal->a = $_POST['a'];
			$soal->b = $_POST['b'];
			$soal->c = $_POST['c'];
			$soal->d = $_POST['d'];
			$soal->jawaban = $_POST['jawaban'];
			break;
		}
	}
	file_put_contents('../XMLFiles/Bab5.xml', $data->asXML());
	
}

foreach($data->soal as $soal){
	if($soal['id']==$_GET['id']){
		$id = $soal['id'];
		$isi = $soal->isi;
		$a = $soal->a;
		$b = $soal->b;
		$c = $soal->c;
		$d = $soal->d;
		$jawaban = $soal->jawaban;
		break;
	}
}

?>
