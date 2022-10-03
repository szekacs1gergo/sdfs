<p>Üdvözlet a weboldalamon :D</p>
<table border="5px">
<tr>
	<th>Megye</th>
	<th>Népesség<br>ezer fő</th>
	<th>Székhely</th>
	<th>Népesség ezer fő</th>
	<th>Arány</th>
	</tr>
<?php
$cont=mysqli_connect("localhost", "root", "","foldrajz");
$dt=mysqli_query($cont,"
SELECT * FROM momegye
");
$sor=mysqli_fetch_assoc($dt);
$osszeg=round($sor['mnep']%$sor['sznep'])/100;
while($sor=mysqli_fetch_assoc($dt))
{
	print"
	
	<tr>
		
		<td>$sor[mnev]</td>
		
		<td>$sor[mnep]</td>
		
		<td>$sor[szekhely]</td>
		
		<td>$sor[sznep]</td>
		
		<td>$osszeg</td>
	</tr>
	";
	
}
?>
</table>