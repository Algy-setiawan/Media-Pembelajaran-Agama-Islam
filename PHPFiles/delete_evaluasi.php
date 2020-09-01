<?php
if(isset($_GET)) {
	$data = simplexml_load_file('../XMLFiles/evaluasi.xml');
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
	file_put_contents('../XMLFiles/evaluasi.xml', $data->asXML());
}
$data = simplexml_load_file('../XMLFiles/evaluasi.xml');
echo 'Number of data: '.count($data);
echo '<br>List evaluasi Information';
?>