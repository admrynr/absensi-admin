<!-- Footer -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        © 2021 - <span class="d-none d-sm-inline-block"> Crafted with <i class="mdi mdi-heart text-danger"></i> by SMI</span>.
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->


        <script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js')?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.slimscroll.js')?>"></script>
        <script src="<?php echo base_url('assets/js/waves.min.js')?>"></script>

        <script src="<?php echo base_url('plugins/jquery-sparkline/jquery.sparkline.min.js')?>"></script>

        <!--Morris Chart-->
        <script src="<?php echo base_url('plugins/morris/morris.min.js')?>"></script>
        <script src="<?php echo base_url('plugins/raphael/raphael-min.js')?>"></script>
        <script src="<?php echo base_url('assets/pages/dashboard.js')?>"></script>

        <!--Datatables-->
        <script src="//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
        <script> 
                    $(document).ready( function () {
                        $('#tabelLengkap').DataTable({
                            paging: false,
                            dom: 'Bfrtip',
                            scrollY: 400,
                            lengthChange: false,
                            buttons: ['copy', 'excel','pdf']
                        });

                        $('#tabelHarian').DataTable({
                        });
                        
                    });
        </script>

        <script>
                                $(document).ready(function() {
                                   var span = 1;
                                   var prevTD = "";
                                   var prevTDVal = "";
                                   $("#tabelLengkap tr td:first-child").each(function() { //for each first td in every tr
                                      var $this = $(this);
                                      if ($this.text() == prevTDVal) { // check value of previous td text
                                         span++;
                                         if (prevTD != "") {
                                            prevTD.attr("rowspan", span); // add attribute to previous td
                                            $this.remove(); // remove current td
                                         }
                                      } else {
                                         prevTD     = $this; // store current td 
                                         prevTDVal  = $this.text();
                                         span       = 1;
                                      }
                                   });
                                });
                            </script>
        

        <!-- Required datatable js -->
        <script src="//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.colVis.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        
        <!-- App js -->
        <script src="<?php echo base_url('assets/js/app.js')?>"></script>

    </body>
</html>