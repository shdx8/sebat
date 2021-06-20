<!-- <?php
              include '<?= base_url(); ?>/conn.php';

              $query = mysqli_query($koneksi, "SELECT max(id_pinjam) as kodeTerbesar FROM pinjam");
              $data = mysqli_fetch_array($query);
              $id_pinjam = $data['kodeTerbesar'];

              // mengambil angka dari kode barang terbesar, menggunakan fungsi substr
              // dan diubah ke integer dengan (int)
              $urutan = (int) substr($id_pinjam, 3, 3);

              // bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
              $urutan++;

              // membentuk kode barang baru
              // perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
              // misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015'
              // angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya BRG 
              $huruf = "S-";
              $id_pinjam = $huruf . sprintf("%03s", $urutan);
              ?> -->