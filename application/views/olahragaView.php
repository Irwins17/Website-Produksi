<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intro to Codeigniter 3</title>

    <style>
        table {
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
    </style>

</head>
<body>
    <h1>Data barang</h1>
    <table border="1">
        
    <a href="#"> tambah</a>
        <tr>
            <td>Nama Barang</td>
            <td>Jumlah</td>
            <td>Kondisi</td>
        </tr>
        
        <?php
        foreach ($olahraga as $row) : ?>
        <tr>
            <td><?php echo $row['nama_barang'] ?></td>
            <td><?php echo $row['jumlah'] ?></td>
            <td><?php echo $row['kondisi'] ?></td>
            <td><a href="#"> edit</td>
            <td><a href="#"> delete</td>
        </tr>
    <?php endforeach; 
    ?>

    </table>
</body>
</html>