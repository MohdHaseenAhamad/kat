@include('admin.common.header')
@include('admin.common.sidebar')
<style>
    .btn-size {

    }
</style>
<div class="content-wrapper" style="min-height: 498px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h6>RF Feding List</h6>
                </div>
                <!--<div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Advanced Form</li>
                  </ol>
                </div>-->
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <button type="button" id="add_id" data-action="{{url('/admin/batching-report/add')}}"
                                        class="btn btn-block btn-success add_id">Add Batching
                                </button>

                            </h3>
                            {{--<h3 class="card-title" >--}}
                                {{--<button type="button" class="btn btn-primary float-right" style="margin-right: 5px;"--}}
                                        {{--onclick="fnExcelReport('logbook_table');">--}}
                                    {{--<i class="fas fa-download"></i> Excel--}}
                                {{--</button>--}}

                            {{--</h3>--}}
                            <div class="row no-print">
                                <div class="col-12">
                                    {{--<button type="button" id="add_id" data-action="{{url('/admin/batching-report/add')}}"--}}
                                            {{--class="btn btn-block btn-success add_id">Add Batching--}}
                                    {{--</button>--}}
                                    <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                                    {{--<button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit--}}
                                        {{--Payment--}}
                                    {{--</button>--}}
                                    <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;"  onclick="fnExcelReport('logbook_table');">
                                        <i class="fas fa-download"></i> Generate Excel
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap" id="logbook_table">
                                <thead>
                                <tr>
                                    <th>Sr no.</th>
                                    <th>Operator Name</th>
                                    <th>Shift</th>
                                    <th>Mould/Slide Plate</th>
                                    <th>Flow/Height</th>
                                    <th>F. Slurry</th>
                                    <th>R. Slurry</th>
                                    <th>Cement</th>
                                    <th>Lime</th>
                                    <th>Gypsum</th>
                                    <th>Aluminium Powder</th>
                                    <th>Extra Water</th>
                                    <th>S. Oil</th>
                                    <th>Discharge Temp.</th>
                                    <th>Discharge Time</th>
                                    <th>Mixing Time.</th>
                                    <?php if (session()->has('superadmin')) {
                                    ?>
                                    <th><?=CREATE_DATE?></th>
                                    <th><?=MODIFIED_DATE?></th>
                                    <?php }?>

                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $i = 1;
                                if(isset($results))
                                {
                                foreach ($results as $value)
                                {
                                ?>
                                <tr>
                                    <td><?=$i?>.</td>
                                    <td><?=isset($value->employee_name) ? $value->employee_name : ''?></td>
                                    <td><?=isset($value->shift) ? SHIFT[$value->shift] : ''?></td>
                                    <td><?=isset($value->slide_plate) ? $value->slide_plate : ''?></td>
                                    <td><?=isset($value->flow_and_height) ? $value->flow_and_height : ''?></td>
                                    <td><?=isset($value->f_slurry) ? $value->f_slurry : ''?></td>
                                    <td><?=isset($value->r_slurry) ? $value->r_slurry : ''?></td>
                                    <td><?=isset($value->cement) ? $value->cement : ''?></td>
                                    <td><?=isset($value->lime) ? $value->lime : ''?></td>
                                    <td><?=isset($value->gypsum) ? $value->gypsum : ''?></td>
                                    <td><?=isset($value->aluminium_powder) ? $value->aluminium_powder : ''?></td>
                                    <td><?=isset($value->extra_water) ? $value->extra_water : ''?></td>
                                    <td><?=isset($value->s_oil) ? $value->s_oil : ''?></td>
                                    <td><?=isset($value->discharge_temp) ? $value->discharge_temp : ''?></td>
                                    <td><?=isset($value->discharge_time) ? $value->discharge_time : ''?></td>
                                    <td><?=isset($value->mixing_time) ? $value->mixing_time : ''?></td>
                                    <?php if (session()->has('superadmin')) {
                                    ?>
                                    <td><?=isset($value->created_at) ? $value->created_at : ''?></td>
                                    <td><?=isset($value->updated_at) ? $value->updated_at : ''?></td>
                                    <?php } ?>

                                    <td>
                                        <div class="btn-group">
                                            <a href="{{url('/admin/batching-report/edit/'.$value->id)}}"
                                               class="btn btn-info btn-sm">Edit</a>&nbsp;&nbsp;<a
                                                href="javascript:void(0);" onclick="return deleteIt(this,<?=$i?>)"
                                                data-href="{{url('/admin/batching-report/delete/'.$value->id)}}"
                                                class="btn btn-sm btn-danger">Delete</a></div>
                                    </td>
                                </tr>
                                <?php
                                $i++;
                                }
                                }

                                ?>


                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <div class="row">
                        <div class="col-6">
                            <div class="d-flex justify-content-start">
                                <b>({!! $results->firstItem().' to '.$results->lastItem()." Total Records ".$results->total()!!}
                                    )</b>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="d-flex justify-content-end">
                                {!! $results->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- /.content -->
</div>

@include('admin.common.footer')
<script>
    function fnExcelReport($table_id) {
        var tab_text = "<table border='2px'><tr bgcolor='#87AFC6'>";
        var textRange;
        var j = 0;
        tab = document.getElementById($table_id); // id of table

        for (j = 0; j < tab.rows.length; j++) {
            tab_text = tab_text + tab.rows[j].innerHTML + "</tr>";
            //tab_text=tab_text+"</tr>";
        }

        tab_text = tab_text + "</table>";
        tab_text = tab_text.replace(/<A[^>]*>|<\/A>/g, "");//remove if u want links in your table
        tab_text = tab_text.replace(/<img[^>]*>/gi, ""); // remove if u want images in your table
        tab_text = tab_text.replace(/<input[^>]*>|<\/input>/gi, ""); // reomves input params

        var ua = window.navigator.userAgent;
        var msie = ua.indexOf("MSIE ");

        if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))      // If Internet Explorer
        {
            txtArea1.document.open("txt/html", "replace");
            txtArea1.document.write(tab_text);
            txtArea1.document.close();
            txtArea1.focus();
            sa = txtArea1.document.execCommand("SaveAs", true, "Say Thanks to Sumit.xls");
        } else                 //other browser not tested on IE 11
            sa = window.open('data:application/vnd.ms-excel,' + encodeURIComponent(tab_text));

        return (sa);
    }
</script>
