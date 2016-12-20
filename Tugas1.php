<?php
$angka = array(3,18,10,9,7,15,5,2,16,4);
$jml = count($angka)-1;

	for($i=0;$i<=$jml;$i++)
	{
		echo $angka[$i].'&nbsp';
	}
	
	for($a=0;$a<=$jml;$a++)
	{
		for($b=$a;$b<=$jml;$b++)
		{
			if($angka[$b]<$angka[$a]) 
			{
				$tmp = $angka[$b];
				$angka[$b] = $angka[$a];
				$angka[$a] = $tmp;
			}
		}
	}

echo "<br>";
echo "<br>";

echo "Hasil Urutan Angka :<br><br>";

	for($i=0;$i<=$jml;$i++)
	{
		echo $angka[$i].'&nbsp';
	}

?>
