<!doctype html>
<html class="no-js" lang="en">

<?php 
    if(isset($_GET['id_barang'])){
        $id_barang    =$_GET['id_barang'];
    }
    else {
        die ("Error. No ID Selected!");    
    }
	include 'cek.php';
	include '../dbconnect.php';
    $query    =mysqli_query($conn, "SELECT * FROM sstock_brg WHERE idx='$id_barang'");
    $result    =mysqli_fetch_array($query);
?>

<html>
<head>
<title>Detail Stock</title>
<link rel="icon" type="image/png" href="favicon.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</head>

<body>	

    <div class="container mt-5">
        <div class="card text-center">
            <div class="card-header">
                Detail Stok Barang
            </div>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $result['nama']?></h5>
                    <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td>Nama Barang</td>
                        <td><?php echo $result['nama']?></td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td>Jenis</td>
                        <td><?php echo $result['jenis']?></td>
                        </tr>
                        <th scope="row">3</th>
                        <td>Merk</td>
                        <td><?php echo $result['merk']?></td>
                        </tr>
                        <th scope="row">4</th>
                        <td>Ukuran</td>
                        <td><?php echo $result['ukuran']?></td>
                        </tr>
                        <th scope="row">5</th>
                        <td>Stock</td>
                        <td><?php echo $result['stock']?></td>
                        </tr>
                        <th scope="row">6</th>
                        <td>Satuan</td>
                        <td><?php echo $result['satuan']?></td>
                        </tr>
                        <th scope="row">7</th>
                        <td>Lokasi</td>
                        <td><?php echo $result['lokasi']?></td>
                        </tr>
                    </tbody>
                    </table>
                </div>
        </div>
    </div>
    
    
    
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
</body>

</html>