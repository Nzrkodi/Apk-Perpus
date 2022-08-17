       <br><br><br>
       <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2018. All rights reserved. Template by <a href="https://colorlib.com/wp/templates/">Colorlib</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- jquery
        ============================================ -->
    <script src="<?= base_url(); ?>assets/static/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="<?= base_url(); ?>assets/static/js/bootstrap.min.js"></script>
    <!-- wow JS
        ============================================ -->
    <script src="<?= base_url(); ?>assets/static/js/wow.min.js"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src="<?= base_url(); ?>assets/static/js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="<?= base_url(); ?>assets/static/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="<?= base_url(); ?>assets/static/js/owl.carousel.min.js"></script>
    <!-- sticky JS
        ============================================ -->
    <script src="<?= base_url(); ?>assets/static/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="<?= base_url(); ?>assets/static/js/jquery.scrollUp.min.js"></script>
    <!-- counterup JS
        ============================================ -->
    <script src="<?= base_url(); ?>assets/static/js/counterup/jquery.counterup.min.js"></script>
    <script src="<?= base_url(); ?>assets/static/js/counterup/waypoints.min.js"></script>
    <script src="<?= base_url(); ?>assets/static/js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="<?= base_url(); ?>assets/static/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?= base_url(); ?>assets/static/js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
        ============================================ -->
    <script src="<?= base_url(); ?>assets/static/js/metisMenu/metisMenu.min.js"></script>
    <script src="<?= base_url(); ?>assets/static/js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
        ============================================ -->
    <script src="<?= base_url(); ?>assets/static/js/morrisjs/raphael-min.js"></script>
    <script src="<?= base_url(); ?>assets/static/js/morrisjs/morris.js"></script>
    <script src="<?= base_url(); ?>assets/static/js/morrisjs/morris-active.js"></script>
    <!-- morrisjs JS
        ============================================ -->
    <script src="<?= base_url(); ?>assets/static/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?= base_url(); ?>assets/static/js/sparkline/jquery.charts-sparkline.js"></script>
    <script src="<?= base_url(); ?>assets/static/js/sparkline/sparkline-active.js"></script>
    <!-- calendar JS
        ============================================ -->
    <script src="<?= base_url(); ?>assets/static/js/calendar/moment.min.js"></script>
    <script src="<?= base_url(); ?>assets/static/js/calendar/fullcalendar.min.js"></script>
    <script src="<?= base_url(); ?>assets/static/js/calendar/fullcalendar-active.js"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="<?= base_url(); ?>assets/static/js/plugins.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="<?= base_url(); ?>assets/static/js/main.js"></script>

    <!-- data table JS
        ============================================ -->
    <script src="<?= base_url(); ?>assets/static/js/data-table/bootstrap-table.js"></script>
    <script src="<?= base_url(); ?>assets/static/js/data-table/tableExport.js"></script>
    <script src="<?= base_url(); ?>assets/static/js/data-table/data-table-active.js"></script>
    <script src="<?= base_url(); ?>assets/static/js/data-table/bootstrap-table-editable.js"></script>
    <script src="<?= base_url(); ?>assets/static/js/data-table/bootstrap-editable.js"></script>
    <script src="<?= base_url(); ?>assets/static/js/data-table/bootstrap-table-resizable.js"></script>
    <script src="<?= base_url(); ?>assets/static/js/data-table/colResizable-1.5.source.js"></script>
    <script src="<?= base_url(); ?>assets/static/js/data-table/bootstrap-table-export.js"></script>
    <!--  editable JS
        ============================================ -->
    <script src="<?= base_url(); ?>assets/static/js/editable/jquery.mockjax.js"></script>
    <script src="<?= base_url(); ?>assets/static/js/editable/mock-active.js"></script>
    <script src="<?= base_url(); ?>assets/static/js/editable/select2.js"></script>
    <script src="<?= base_url(); ?>assets/static/js/editable/moment.min.js"></script>
    <script src="<?= base_url(); ?>assets/static/js/editable/bootstrap-datetimepicker.js"></script>
    <script src="<?= base_url(); ?>assets/static/js/editable/bootstrap-editable.js"></script>
    <script src="<?= base_url(); ?>assets/static/js/editable/xediable-active.js"></script>

    <script src="<?= base_url(); ?>assets/static/js/chosen/chosen.jquery.js"></script>
    <script src="<?= base_url(); ?>assets/static/js/chosen/chosen-active.js"></script>
    <script src="<?= base_url(); ?>assets/static/js/select2/select2.full.min.js"></script>
    <script src="<?= base_url(); ?>assets/static/js/select2/select2-active.js"></script>

    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready( function () {
            $('#table1').DataTable();
        } );

        $(document).ready( function () {
            $('#table2').DataTable();
        } );
    </script>   

    <script>
    $(".fileSelection1 #Select_File1").click(function (e) {
        document.getElementsByName('anggota_id')[0].value = $(this).attr("data_id");
        $('#TableAnggota').modal('hide');
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('transaksi/result');?>",
            data:'kode_anggota='+$(this).attr("data_id"),
            beforeSend: function(){
                $("#result").html("");
                $("#result_tunggu").html('<p style="color:green"><blink>tunggu sebentar</blink></p>');
            },
            success: function(html){
                $("#result").html(html);
                $("#result_tunggu").html('');
            }
        });
    });
    </script>
      
    <script>
    // AJAX call for autocomplete 
    $(document).ready(function(){
        $("#search-box").keyup(function(){
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('transaksi/result');?>",
                data:'kode_anggota='+$(this).val(),
                beforeSend: function(){
                    $("#result").html("");
                    $("#result_tunggu").html('<p style="color:green"><blink>tunggu sebentar</blink></p>');
                },
                success: function(html){
                    $("#result").html(html);
                    $("#result_tunggu").html('');
                }
            });
        });
    });
    </script>

    <script>
    $(".fileSelection1 #Select_File2").click(function (e) {
        document.getElementsByName('buku_id')[0].value = $(this).attr("data_id");
        $('#TableBuku').modal('hide');
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('transaksi/buku');?>",
            data:'kode_buku='+$(this).attr("data_id"),
            beforeSend: function(){
                $("#result_buku").html("");
                $("#result_tunggu_buku").html('<p style="color:green"><blink>tunggu sebentar</blink></p>');
            },
            success: function(html){
                $("#result_buku").load("<?= base_url('transaksi/buku_list');?>");
                $("#result_tunggu_buku").html('');
            }
        });
    });
    </script>
      
    <script>
    // AJAX call for autocomplete 
    $(document).ready(function(){
        $("#buku-search").keyup(function(){
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('transaksi/buku');?>",
                data:'kode_buku='+$(this).val(),
                beforeSend: function(){
                    $("#result_tunggu_buku").html('<p style="color:green"><blink>tunggu sebentar</blink></p>');
                },
                success: function(html){
                    $("#result_buku").load("<?= base_url('transaksi/buku_list');?>");
                    $("#result_tunggu_buku").html('');
                }
            });
        });
    });
    </script>

</body>

</html>
