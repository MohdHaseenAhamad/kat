<footer class="main-footer">
    <!-- <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
     All rights reserved.
     <div class="float-right d-none d-sm-inline-block">
       <b>Version</b> 3.0.5
     </div>-->
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/dist/js/bootbox.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="{{asset('assets/plugins/clock-js/script.adjustment.js')}}"></script>
<script src="{{asset('assets/plugins/clock-js/script.clock.js')}}"></script>
<script src="{{asset('assets/plugins/clock-js/script.main.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('assets/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('assets/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('assets/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('assets/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('assets/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('assets/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('assets/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('assets/dist/js/demo.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-validation/additional-methods.min.js')}}"></script>
<script>
    $(document).ready(function () {
        $(".add_id").click(function () {
            var web_location =$(this).attr('data-action');
            window.location.href = web_location;
        });
        $(".paid").click(function () {
            bootbox.alert({
                message: 'This is an alert with a callback!',
                callback: function () {
                    console.log('This was logged in the callback!');
                }
            });
        });
    });
    function paid()
    {
        bootbox.alert({
            message: 'This is an alert with additional classes!',
            className: 'rubberBand animated',

        });
    }
    function deleteIt(_this,id) {
        var url = $(_this).attr('data-href');
        var msg = "Are you sure ? You want to delete record no. "+id;
        bootbox.confirm({
            message: msg,
            buttons: {
                confirm: {
                    label: 'Yes',
                    className: 'btn-success'
                },
                cancel: {
                    label: 'No',
                    className: 'btn-danger'
                }
            },
            callback: function (result) {
                if(result==true)
                {
                    window.location.href = url;
                }
            }
        });
    }
    function fnExcelReport($table_id)
    {
        var tab_text="<table border='2px'><tr bgcolor='#87AFC6'>";
        var textRange; var j=0;
        tab = document.getElementById($table_id); // id of table

        for(j = 0 ; j < tab.rows.length ; j++)
        {
            tab_text=tab_text+tab.rows[j].innerHTML+"</tr>";
            //tab_text=tab_text+"</tr>";
        }

        tab_text=tab_text+"</table>";
        tab_text= tab_text.replace(/<A[^>]*>|<\/A>/g, "");//remove if u want links in your table
        tab_text= tab_text.replace(/<img[^>]*>/gi,""); // remove if u want images in your table
        tab_text= tab_text.replace(/<input[^>]*>|<\/input>/gi, ""); // reomves input params

        var ua = window.navigator.userAgent;
        var msie = ua.indexOf("MSIE ");

        if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))      // If Internet Explorer
        {
            txtArea1.document.open("txt/html","replace");
            txtArea1.document.write(tab_text);
            txtArea1.document.close();
            txtArea1.focus();
            sa=txtArea1.document.execCommand("SaveAs",true,"Say Thanks to Sumit.xls");
        }
        else                 //other browser not tested on IE 11
            sa = window.open('data:application/vnd.ms-excel,' + encodeURIComponent(tab_text));

        return (sa);
    }
</script>
</body>
</html>
