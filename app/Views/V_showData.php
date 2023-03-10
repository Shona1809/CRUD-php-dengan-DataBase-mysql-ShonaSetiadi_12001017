<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>

    <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel ="stylesheet" href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css">
    

</head>
<body>
    
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="#">Features</a>
        <a class="nav-link" href="#">Pricing</a>
        <a class="nav-link disabled">Disabled</a>
      </div>
    </div>
  </div>
</nav>

<!-- Background image -->
<div
    class="p-5 text-center bg-image"
    style="
      background-image: url('https://themes10.win/wp-content/uploads/2019/04/road-trees-bw-dark-forest-1-1024x576.jpg');
      height: 400px;
    "
  >
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
      <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-white">
          <h1 class="mb-3">Selamat Datang </h1>
          >
        </div>
      </div>
    </div>
  </div>
  <!-- Background image -->
    
<a href="data/insertData/" class="btn btn-primary">Tambah Data</a>
    

    <table id="example" class="table table-striped" style="width:100%">
        <thead>
        <tr>
            <td>Nim</td>
            <td>Nama</td>
            <td>Fakultas</td>
            <td>Alamat</td>
        </tr>
        </thead>

        <tbody>
        <?php 
            foreach ($hasil as $row) {        
        ?>
        <tr>
            <td><?php echo $row->nim; ?></td>
            <td><?php echo $row->nama; ?></td>
            <td><?php echo $row->fakultas; ?></td>
            <td><?php echo $row->alamat; ?></td>
            <td> <a href="data/editData/<?php echo $row->nim; ?>">Edit </a>
                 <a href="data/hapusData/<?php echo $row->nim; ?>">Hapus </a>
            </td>
        </tr>
        <?php
            }
        ?>
        </tbody>
    </table>

    <script>
    $(document).ready(function () 
    {
        $('#example').DataTable();
    });
    </script>

</body>
</html>