<!DOCTYPE html>
<html lang="en">

    <?php $this->load->view('include/head'); ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

      <?php $this->load->view('include/sidebar');?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                
              <?php $this->load->view('include/navbar');?>

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h2 mb-4 text-center text-gray-800">Data Pasien</h1>
                    <a href="<?php echo base_url()?>index.php/pasien/save" class="btn btn-primary">Tambah</a>
                
                    <table class="table table-striped">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th>Tanggal</th>
                                <th>Jam</th>
                                <th>Date Time</th>
                                <th>Magnitudo</th>
                                <th>Tanggal Lahir</th>
                                <th>Lingkar</th>
                                <th>Bujur</th>
                                <th>Lingkar</th>
                                <th>Lokasi</th>
                                <th>Potensi Gempa</th>
                            </tr>
                            
                        </thead>
                        <tbody>
                        <?php
  $data = simplexml_load_file("https://data.bmkg.go.id/DataMKG/TEWS/gempaterkini.xml") or die ("Gagal ambil!");
  echo "<h2>Daftar 15 Gempabumi M 5.0+</h2>";
  foreach($data->gempa as $gempaM5) {
    echo "<tr>";
    
    echo "<td>Tanggal: " . $gempaM5->Tanggal . "</td><br>";
    echo "<td>Jam: " .  $gempaM5->Jam . "</td><br>";
    echo "<td>DateTime: " . $gempaM5->DateTime . "</td><br>";
    echo "<td>Magnitudo: " . $gempaM5->Magnitude . "</td><br>";
    echo "<td>Kedalaman: " . $gempaM5->Kedalaman . "</td><br>";
    echo "<td>Koordinat: " . $gempaM5->point->coordinates . "</td><br>";
    echo "<td>Lintang: " . $gempaM5->Lintang . "</td><br>";
    echo "<td>Bujur: " . $gempaM5->Bujur . "</td><br>";
    echo "<td>Lokasi: " . $gempaM5->Wilayah . "</td><br>";
    echo "<td>Potensi: " . $gempaM5->Potensi . "</td><br><br>";
    echo "</tr>";
  }
?>
                        </tbody>
                    </table>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="l<?php echo base_url()?>index.php/login/logout ">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <?php $this->load->view('include/script'); ?>

</body>

</html>