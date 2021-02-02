

        <div class="wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mt-0 header-title">Rekap Absen Harian</h4>
                                <br>
                                <h4 class="mt-0 header-title text-center"><?php echo $day.', '.$date?></h4>
                                <table id="tabelHarian" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr>
                                        <th>Nama Pegawai</th>
                                        <th>Absen Masuk</th>
                                        <th>Absen Keluar</th>
                                        <th>Keterangan</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <?php foreach ($absen_harian as $adh): ?>    
                                    <tr>
                                        <td><?php echo $adh->pgw_nama;?></td>
                                        <td><?php echo $adh->absen_cin;?></td>
                                        <td><?php echo $adh->absen_cout;?></td>
                                        <td><?php echo $adh->absen_ket;?></td>
                                    </tr>
                                <?php endforeach?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mt-0 header-title">Rekap Absen Total</h4>
                                <table id="tabelLengkap" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr>
                                        <th>Nama Pegawai</th>
                                        <th>Tanggal</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($absen_lengkap as $absen_data): ?>    
                                    <tr>
                                        <td><?php echo $absen_data->pgw_nama;?></td>
                                        <td><?php echo $absen_data->absen_tgl;?></td>
                                    </tr>
                                <?php endforeach?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                

            </div> <!-- end container-fluid -->
        </div>
        <!-- end wrapper -->

