@include('common.header')
@include('common.sidebar')
<div class="content-wrapper" style="min-height: 498px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h6>RF Feding Form</h6>
                </div>

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
            <?php
            $redirect = isset($results) ? 'update/'.$results['rf_id']: 'save';
            ?>
            <form id="rf_feding" name="rf_feding" method="POST" action="{{url('/admin/rf-feding/'.$redirect)}}">
                @csrf
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 col-xm-6">
                            <div class="form-group ">
                                <h5 style="text-align: center;">Store Incharge</h5>
                                <select class="form-control select2 select2-hidden-accessible" name="rf_strore_incharge" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                    <option selected="selected"  data-select2-id="3">Select</option>
                                    <option value="1">Ramesh</option>
                                    <option value="2">shyam</option>
                                    <option value="3">mohan</option>
                                    <option value="4">tender</option>

                                </select>
                            </div>
                        </div>
                        <!-- /.form-group -->
                        <div class="col-md-6 col-xs-6">
                            <div class="form-group">
                                <h5 style="text-align: center;">Shift</h5>
                                <select class="form-control select2 select2-hidden-accessible" name="rf_shift" id="shift" style="width: 100%;" data-select2-id="4" tabindex="-1" aria-hidden="true">
                                    <option selected="selected" data-select2-id="6">Select</option>
                                    <option>8:00 AM to 4:00 PM</option>
                                    <option>9:00 AM to 6:00 PM</option>
                                    <option>10:00 AM to 7:00 PM</option>
                                    <option>12:00 AM to 9:00 PM</option>

                                </select>
                            </div>
                        </div>
                        <!-- /.form-group -->
                    </div>

                </div>

            </div>
            <!-- /.card -->

            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">

                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <h5 style="">Fly Ash Bulker (Kg)</h5>
                                <input type="text" class="form-control" name="rf_fly_ash_bulker" value="<?=isset($results) ? $results['rf_fly_ash_bulker']:''?>" placeholder="Enter ...">
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <h5 style="">Fly Ash Dumper (Kg)</h5>
                                <input type="text" class="form-control" name="rf_fly_ash_dumper" value="<?=isset($results) ? $results['rf_fly_ash_dumper']:''?>" placeholder="Enter ...">
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <h5>Cement Bulker (Kg)</h5>
                                <input type="text" class="form-control" name="rf_cement_bulker" value="<?=isset($results) ? $results['rf_cement_bulker']:''?>" placeholder="Enter ...">
                            </div>

                            <div class="form-group">
                                <h5>Cement Bag (Kg)</h5>
                                <input type="text" class="form-control" name="rf_cement_beg" value="<?=isset($results) ? $results['rf_cement_beg']:''?>" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <h5>Gypsum (Kg)</h5>
                                <input type="text" class="form-control" name="rf_gypsum" value="<?=isset($results) ? $results['rf_gypsum']:''?>" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <h5>Lime Bulker (Kg)</h5>
                                <input type="text" class="form-control" name="rf_lime_bulker" value="<?=isset($results) ? $results['rf_lime_bulker']:''?>" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <h5>Lime Bag (Kg)</h5>
                                <input type="text" class="form-control" name="rf_lime_bag" value="<?=isset($results) ? $results['rf_lime_bag']:''?>" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <h5>Aluminium (Kg)</h5>
                                <input type="text" class="form-control" name="rf_alumimium" value="<?=isset($results) ? $results['rf_alumimium']:''?>" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <h5>Husk (Kg)</h5>
                                <input type="text" class="form-control" name="rf_husk" value="<?=isset($results) ? $results['rf_husk']:''?>" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <h5>Soluble (Kg)</h5>
                                <input type="text" class="form-control" name="rf_soluble" value="<?=isset($results) ? $results['rf_soluble']:''?>" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <h5>moud Oil (litre)</h5>
                                <input type="text" class="form-control" name="rf_moud_oil" value="<?=isset($results) ? $results['rf_moud_oil']:''?>" placeholder="Enter ...">
                            </div>

                        </div>
                        <div class="card-footer">
                            <input class="form-check-input" type="checkbox">
                            I/We herby Confirm that I have properly maintained &amp; cleaned the machines &amp; area under my operation at the end of shift...
                        </div>
                        <button type="submit" id="form_submit" class="btn btn-block btn-secondary btn-sm">Submit</button>
                    </div>

                </div>


            </div>
            </form>

            <!-- /.row -->
        </div>
    </section>
    <!-- /.content -->
</div>
@include('common.footer')
{{--<script>--}}
    {{--$(document).ready(function () {--}}
        {{--$("#form_submit").on('click',function () {--}}
           {{--var form_id = $("#rf_feding");--}}
           {{--var targate_loaction = form_id.attr('action');--}}
           {{--var form_type = form_id.attr('method');--}}
           {{--var form_data = form_id.serialize();--}}
           {{--SaveDataUsingAjax(targate_loaction,form_type,form_data);--}}

        {{--});--}}
    {{--});--}}
{{--</script>--}}
{{--<script src="{{asset('assets/common.js')}}"></script>--}}
