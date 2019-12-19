<!DOCTYPE>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container">
		<form action="" method="post">
				 <div class="form-group">

			      <div class="col-lg-10">
			        <input type="text" name="keyword" size="40"   class="form-control" autofocus placeholder="masukan keyword" autocomplete="off" id="keyword" >
			      </div>
			      <div class="form-group">
			     <label for="inputEmail" class="col-lg-2 control-label"></label>
			      <div class="col-lg-10">
			      <button class="btn btn-danger" type="submit" name="cari" id="tombol-cari">Cari!</button>
			      </div>
			 
			</form>
			

		  <div class="row">
		  <a href="#" class="btn btn-success" id="tambah">Create</a>
		 
			<div id="container">
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
			$konek = mysqli_connect("localhost","root","") or die (mysql_error());
			$conn = mysqli_select_db($konek,"pwd") or die (mysql_error());
		  $query=mysqli_query($konek,"SELECT *FROM pwd2 ORDER BY nim DESC") or die (mysqli_error($konek));
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
		</div>

	<script src="javascript/jquery-3.4.1.min.js"></script>
	<script src="javascript/jquery.js"></script>
</body>
</html>