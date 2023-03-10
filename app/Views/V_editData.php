<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    foreach($data as $row)
    ?>
<form action="<?php echo base_url('data/saveeditData/'.$row->nim.'')?>" method="post">
    <table> 
    <tr>
            <td>NIM</td>
            <td><input type="text" name="nim" value="<?php echo $row->nim; ?>"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" value="<?php echo $row->nama; ?>"></td>
        </tr>
        <tr>
            <td>Fakultas</td>
            <td><input type="text" name="fakultas" value="<?php echo $row->fakultas; ?>"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><textarea name="alamat" cols="30" rows="10">
            <?php echo $row->alamat;?>
            </textarea></td>
        <tr>
            <td><input type="submit" values="submit" name="submit"></td>
            <td><input type="reset" values="reset" ></td>
        </tr>

    </table>
    </form>
</body>
</html>