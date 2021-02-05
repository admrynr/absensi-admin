

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
                                <h4 class="mt-0 pb-2 header-title">Rekap Absen Total</h4>
                                <!--<?php echo var_dump($month);?>-->
                                <div class="d-flex pb-2 flex-row justify-content-center">
                                <form method="POST" action="<?php echo site_url('home/filterByMonth')?>">
                                <label for="bulan">Tanggal absen : </label>
                                <input type="month" id="bulan" name="bulan" value=<?php echo $bln; ?>>
                                <div class="d-flex-row justify-content-between" style="margin: 0px; padding: 0px;">
                                    <button type="submit" class="btn btn-primary" style="color: white;">OK</button>
                                    <a class="btn btn-warning" style="display: inline-block; margin-left: 180px;" href="<?php echo site_url('home/index')?>" style="color: white;">Reset</a>
                                </div>
                                </form>
                                </div>
                                <table id="tabelLengkap" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr>
                                        <th <?php if (!empty($month)) {echo 'rowspan="2"';}?>>Nama Pegawai</th>
                                        <th <?php if (!empty($month)) {echo 'colspan="'.$month.'"';}?> class="text-center">Tanggal</th>
                                    </tr>
                                    <?php if (!empty($month))
                                    {
                                        echo '<tr>';
                                        for($x=1; $x<=$month; $x++)
                                        {
                                            echo '<th class="text-center">'.$x.'</th>';
                                        }
                                        echo '</tr>';
                                    }
                                    ?>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($absen_lengkap as $absen_data): ?>
                                    <?php if (!empty($month))
                                    {
                                        echo '<tr>';
                                        echo 
                                        '<td>'.$absen_data->pgw_nama.'</td>';
                                        for($x=1; $x<=$month; $x++)
                                        {
                                            echo '<td>1</td>';
                                        }
                                        echo '</tr>';
                                    }else{
                                        echo '<tr>';
                                        echo '<td>'.$absen_data->pgw_nama.'</td>';
                                        echo '<td>'.$absen_data->absen_tgl.'</td>';
                                        echo '</tr>';
                                    }
                                    ?>    
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

