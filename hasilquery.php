
<?php
 //https://dev.mysql.com/doc/refman/5.5/en/fulltext-boolean.html
 //ALTER TABLE dokumen
//ADD FULLTEXT INDEX `FullText` 
//(`token` ASC, 
 //`tokenstem` ASC);
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbstbi";
$katakunci="";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)
	{
		die("Connection failed: " . $conn->connect_error);
	} 
	$hasil=$_POST['katakunci'];
	$results=$conn->query("SELECT distinct nama_file,token,tokenstem FROM `dokumen` where token like '%$hasil%'");
	//$sql = "SELECT distinct nama_file,token,tokenstem FROM `dokumen` WHERE MATCH (token,tokenstem) AGAINST ('$hasil' IN BOOLEAN MODE)";
	$num = $results->num_rows;
	//echo $sql;;

if ($num== 0) 
	{
		//pesan jika tidak ada hasil
		echo '<p>Pencarian dengan kata kunci <b>'.$hasil.'</b> tidak ada hasil.</p>';
	}
	else
	{
		//pesan jika ada hasil pencarian
		echo '<p>Pencarian dari kata kunci <b>'.$hasil.'</b> mendapatkan '.$num.' hasil:</p>';
		//perulangan untuk menampilkan data
		while($row = $results->fetch_assoc())
			{
				//menampilkan data
				echo '
				<p>
					<b>Nama file:'.$row['nama_file'].'</b><br>
					Token : '.$row['token'].'<br>
					'.$row['tokenstem'].'<br>
					</p>
					';
			}
	}
$conn->close();

?>

