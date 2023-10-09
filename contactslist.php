<h1> Broadmind Technologies LTD.</h1>
<h2>Contact List Table Data. </h2>
<style> 
	h1,h2{
		text-align: center;
	}
	table{
		border-collapse: collapse;
		margin: 20px auto;
		postion: relative;
		width: 100%;
	}
	table, td, th{
		text-align: center;
		border: 1px solid #ccc;
		padding: 10px;
	}
	@media print{
		button {
			display: none;
			position: relative;
		}
	}
	
</style>

<?php
include 'config.php';

$sql = "SELECT * FROM contacts;";
$result = mysqli_query($conn ,$sql);

$i = 1;
if(mysqli_num_rows($result) > 0)
{

?>
<button type="reset"><a href="index.php" visited>Home</a></button>


	<table id="example" class="table table-boardered table-hover table-striped display">
		<thead>
			<tr>
				<th>No.</th>
				<th>Name.</th>
				<th>Email.</th>
				<th>Subject.</th>
				<th>Mesage.</th>
			</tr>
		</thead>
	
<?php 
	while($row =mysqli_fetch_assoc($result))
	{
?>
		<tbody>
			<tr>
				<td><?php echo $i; ?></td>
				<td><?php echo $row['name']; ?></td>
				<td><?php echo $row['email']; ?></td>
				<td><?php echo $row['subject']; ?></td>
				<td><?php echo $row['message']; ?></td>
			</tr>
		</tbody>
	
<?php 
	$i++;
	}
?>
	</table>
	
	<button onclick="print()">
		Print
	</button>
 

 
<?php 
	}
?>	

<script language="javascript">
	
	var content = document.getElementById("example").innerHTML;
	
	//var doc=window.open(""," ",disp);
	doc.document.open();
	doc.document.write('<html> <head> <title> BroadMind Technologies Limited | Contacts List </title>');
	doc.document.write(content);
	doc.document.write('</body> </html>');
	doc.document.close();
	doc.focus();
</script>



