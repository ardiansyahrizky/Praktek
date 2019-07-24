<?php
$filename = 'temp.txt';

//fopen($filename,'r');

if (file_exists($filename)) {
	echo "fILE @filename ditemukan";
	$file=fopen($filename,'w+');

	for ($x =0; $x  <= 10; $x++) {
		fwrite($file,$x. "Di tulis dengan program sublime\r\n");
}
	fclose($file);
}else{
	echo "file $filename tidak ditemukan";
	fopen($filename, 'w');
	echo "<br/> file berhasil di buat";
}
?>