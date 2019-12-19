<?php
	$konek = mysqli_connect("localhost","root","") or die (mysql_error());
	$conn = mysqli_select_db($konek,"pwd") or die (mysql_error());

	$keyword = $_GET["keyword"];
	$query = mysqli_query($konek,"SELECT * FROM pwd2 WHERE nim LIKE '%$keyword%' OR username LIKE '%$keyword%' OR jenis_kelamin LIKE '%$keyword%' OR alamat LIKE '%$keyword%'OR asal LIKE '%$keyword%' OR email LIKE '%$keyword%' OR ttl LIKE '%$keyword%'") or die (mysqli_error($konek));
?>
   <table id="table" class="table table-striped table-hover ">


		  <thead>
		    <tr>
		      <th>No</th>
		      <th>NIM</th>
		      <th>Username</th>
		      <th>Email</th>
		      <th>Jenis Kelamin</th>
		      <th>Alamat</th>
		      <th>Asal</th>
		      <th>Tangal Lahir</th>
		      
		    </tr>
		  </thead>
		  <?php 
		 //include '../koneksi.php';
		  // $query=mysqli_query($konek,"SELECT *FROM pwd2 ORDER BY nim DESC") or die (mysqli_error($konek));
		  if(mysqli_num_rows($query)==0){
		    echo '<tbody>
		    <tr class="active">
		      <td colspan="5">Tidak ada data yang di entrikan </td>
		    </tr>
		  </tbody>';
		    
		  }
		  else{
		    $no=1;
		    while($data=mysqli_fetch_assoc($query)){
		    echo '<tbody>
		    <tr class="active">';
		    echo '<td>'.$no.'</td>';
		    echo '<td>'.$data['nim'].'</td>';
		    echo '<td>'.$data['username'].'</td>';
		    echo '<td>'.$data['email'].'</td>';
		    echo '<td>'.$data['jenis_kelamin'].'</td>';
			echo '<td>'.$data['alamat'].'</td>';
			echo '<td>'.$data['asal'].'</td>';    
		    echo '<td>'.$data['ttl'].'</td>';

		   
		    echo '</tr>';
		    $no++;
		    }

		  }
		  
		  ?>
		</table> 