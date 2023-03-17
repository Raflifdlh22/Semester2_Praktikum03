<?php
$arrayMahasiswa = [
  [
      'nama_mahasiswa' => 'budi',
      'mata_kuliah' => 'Pemrograman Web 2',
      'nilai_uts' => 90,
      'nilai_uas' => 85,
      'nilai_tugas' => 78,

  ],
  [
      'nama_mahasiswa' => 'Saepullah',
      'mata_kuliah' => 'Basis Data',
      'nilai_uts' => 86,
      'nilai_uas' => 91,
      'nilai_tugas' => 80,
  ],
  [
      'nama_mahasiswa' => 'Rizky',
      'mata_kuliah' => 'Pemrograman Web 2',
      'nilai_uts' => 80,
      'nilai_uas' => 84,
      'nilai_tugas' => 78,
      'rata_rata' => 80.67,
      'grade' => 'A'
  ],
  [
      'nama_mahasiswa' => 'Rizky',
      'mata_kuliah' => 'Pemrograman Web 2',
      'nilai_uts' => 80,
      'nilai_uas' => 84,
      'nilai_tugas' => 78,
      'rata_rata' => 80.67,
      'grade' => 'A'
  ],
  [
      'nama_mahasiswa' => 'Rizky',
      'mata_kuliah' => 'Pemrograman Web 2',
      'nilai_uts' => 80,
      'nilai_uas' => 84,
      'nilai_tugas' => 78,
      'rata_rata' => 80.67,
      'grade' => 'A'
  ]
  ];
if(isset($_POST['submit'])) {
    $nama = $_POST['nama_mahasiswa'];
    $mata_kuliah = $_POST['mata_kuliah'];
    $nilai_uts = $_POST['nilai_uts'];
    $nilai_uas = $_POST['nilai_uas'];
    $nilai_tugas = $_POST['nilai_tugas'];
    
    // data baru mahasiswa
    $dataMahasiswaBaru = [
        'nama_mahasiswa' => $nama,
        'mata_kuliah' => $mata_kuliah,
        'nilai_uts' => $nilai_uts,
        'nilai_uas' => $nilai_uas,
        'nilai_tugas' => $nilai_tugas,
        'r'
    ];
    // menyiapkan array untuk menampung data mahasiswa
    array_push($arrayMahasiswa, $dataMahasiswaBaru);
}




    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Mahasiswa</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
      <div class="mt-4 d-flex justify-content-between">
        <h3>Daftar Nilai Mahasiswa</h3>
        <a href="form_nilai.php" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
      </div> 
      <div class="table-responsive mt-3">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>Nama Mahasiswa</th>
              <th>Mata Kuliah</th>
              <th>Nilai UTS</th>
              <th>Nilai UAS</th>
              <th>Nilai Tugas</th>
              <th>Rata-rata</th>
              <th>Grade</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach($arrayMahasiswa as $key => $mahasiswa) {
              ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $mahasiswa['nama_mahasiswa']; ?></td>
                <td><?php echo $mahasiswa['mata_kuliah']; ?></td>
                <td><?php echo $mahasiswa['nilai_uts']; ?></td>
                <td><?php echo $mahasiswa['nilai_uas']; ?></td>
                <td><?php echo $mahasiswa['nilai_tugas']; ?></td>
                <td>
                  <?php
                  $rataRata = ($mahasiswa['nilai_uts'] + $mahasiswa['nilai_uas'] + $mahasiswa['nilai_tugas']) / 3;
                  echo number_format($rataRata, 2);
                  ?>
                </td>

                <td>
                  <?php
                  if($rataRata >= 85 && $rataRata <= 100) {
                    echo 'A';
                  } else if($rataRata >= 70 && $rataRata < 85) {
                    echo 'B';
                  } else if($rataRata >= 56 && $rataRata < 70) {
                    echo 'C';
                  } else if($rataRata >= 36 && $rataRata < 56) {
                    echo 'D';
                  } else if($rataRata >= 0 && $rataRata < 35) {
                    echo 'E';
                  }
                  ?>
                </td>
              </tr>
              <?php
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
</body>
</html>