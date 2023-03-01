<?php

    $ns1 = [  'id'=>1  , 'nim'=>'01101' , 'uts'=>80 , 'uas'=>90 , 'tugas'=>100];
    $ns2 = [  'id'=>1  , 'nim'=>'01102' , 'uts'=>83 , 'uas'=>92 , 'tugas'=>90];
    $ns3 = [  'id'=>1  , 'nim'=>'01103' , 'uts'=>84 , 'uas'=>93 , 'tugas'=>85];
    $ns4 = [  'id'=>1  , 'nim'=>'01104' , 'uts'=>87 , 'uas'=>85 , 'tugas'=>90];
    $ns5 = [  'id'=>1  , 'nim'=>'01105' , 'uts'=>82 , 'uas'=>84 , 'tugas'=>80];
    $ns6 = [  'id'=>1  , 'nim'=>'01106' , 'uts'=>81 , 'uas'=>81 , 'tugas'=>90];


    $ar_nilai = [$ns1, $ns2, $ns3, $ns4, $ns5, $ns6];


   
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>

  </body>
</html>
<table class="table">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">NIM</th>
      <th scope="col">UTS</th>
      <th scope="col">UAS</th>
      <th scope="col">TUGAS</th>
      <th scope="col">NILAI AKHIR</th>
    </tr>
  </thead>
  <tbody>
   

  <?php

    $nomor = 1;


    foreach($ar_nilai as $ns){
    
        $nilai_akhir = ( $ns['uts'] + $ns['uas'] + $ns['tugas']) / 3 ;
    
    ?>

        <tr>
            <td> <?= $nomor ?> </td>
            <td> <?= $ns['nim'] ?> </td>
            <td> <?= $ns['uts'] ?> </td>
            <td> <?= $ns['uas'] ?> </td>
            <td> <?= $ns['tugas'] ?> </td>
            <td> <?= number_format($nilai_akhir,2   ,',',',')            ?> </td>
        </tr>

    <?php
        $nomor++;
    }
    ?>

  </tbody>
</table>