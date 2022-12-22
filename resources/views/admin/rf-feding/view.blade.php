@include('common.header');
@include('common.sidebar');
<div class="content-wrapper" style="min-height: 498px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h6>Raw Material feeding Report Listing</h6>
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
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <!-- <div class="card-header">
                   <h3 class="card-title">Select2 (Default Theme)</h3>
       
                   <div class="card-tools">
                     <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                     <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                   </div>
                 </div>-->
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                       <h3 style="text-align: center">Rf Feding Listing Page</h3>
                    </div>
                    <!-- /.col -->
                    <!-- <div class="col-md-6">
                       <div class="form-group">
                         <label>Multiple</label>
                         <select class="select2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;">
                           <option>Alabama</option>
                           <option>Alaska</option>
                           <option>California</option>
                           <option>Delaware</option>
                           <option>Tennessee</option>
                           <option>Texas</option>
                           <option>Washington</option>
                         </select>
                       </div>
                     
                       <div class="form-group">
                         <label>Disabled Result</label>
                         <select class="form-control select2" style="width: 100%;">
                           <option selected="selected">Alabama</option>
                           <option>Alaska</option>
                           <option disabled="disabled">California (disabled)</option>
                           <option>Delaware</option>
                           <option>Tennessee</option>
                           <option>Texas</option>
                           <option>Washington</option>
                         </select>
                       </div>
                       
                     </div>
                    
                   </div>
                   
       
                   <h5>Custom Color Variants</h5>
                   <div class="row">
                     <div class="col-12 col-sm-6">
                       <div class="form-group">
                         <label>Minimal (.select2-danger)</label>
                         <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
                           <option selected="selected">Alabama</option>
                           <option>Alaska</option>
                           <option>California</option>
                           <option>Delaware</option>
                           <option>Tennessee</option>
                           <option>Texas</option>
                           <option>Washington</option>
                         </select>
                       </div>
                      
                     </div>
                     
                     <div class="col-12 col-sm-6">
                       <div class="form-group">
                         <label>Multiple (.select2-purple)</label>
                         <div class="select2-purple">
                           <select class="select2" multiple="multiple" data-placeholder="Select a State" data-dropdown-css-class="select2-purple" style="width: 100%;">
                             <option>Alabama</option>
                             <option>Alaska</option>
                             <option>California</option>
                             <option>Delaware</option>
                             <option>Tennessee</option>
                             <option>Texas</option>
                             <option>Washington</option>
                           </select>
                         </div>
                       </div>
                       
                     </div>
                   
                   </div>-->
                    <!-- /.row -->
                </div>
                <!-- /.card-body -->
                <!--<div class="card-footer">
                  Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
                  the plugin.
                </div>-->
            </div>
            <!-- /.card -->

            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <!--  <div class="card-header">
                    <h3 class="card-title">Select2 (Bootstrap4 Theme)</h3>
        
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                    </div>
                  </div>-->
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <h5 style="">Fly Ash Bulker (Kg)</h5>
                                <input type="text" class="form-control" placeholder="Enter ...">
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <h5 style="">Fly Ash Dumper (Kg)</h5>
                                <input type="text" class="form-control" placeholder="Enter ...">
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <h5>Cement Bulker (Kg)</h5>
                                <input type="text" class="form-control" placeholder="Enter ...">
                            </div>

                            <div class="form-group">
                                <h5>Cement Bag (Kg)</h5>
                                <input type="text" class="form-control" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <h5>Gypsum (Kg)</h5>
                                <input type="text" class="form-control" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <h5>Lime Bulker (Kg)</h5>
                                <input type="text" class="form-control" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <h5>Lime Bag (Kg)</h5>
                                <input type="text" class="form-control" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <h5>Aluminium (Kg)</h5>
                                <input type="text" class="form-control" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <h5>Husk (Kg)</h5>
                                <input type="text" class="form-control" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <h5>Soluble (Kg)</h5>
                                <input type="text" class="form-control" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <h5>moud Oil (litre)</h5>
                                <input type="text" class="form-control" placeholder="Enter ...">
                            </div>

                        </div>
                        <div class="card-footer">
                            <input class="form-check-input" type="checkbox">
                            I/We herby Confirm that I have properly maintained &amp; cleaned the machines &amp; area under my operation at the end of shift...
                        </div>
                        <button type="button" class="btn btn-block btn-secondary btn-sm">Submit</button>
                    </div>

                </div>


            </div>
            <!--
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">Bootstrap Duallistbox</h3>
    
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
             
              <div class="card-body">
                <div class="row">
                  <div class="col-12">
                    <div class="form-group">
                      <label>Multiple</label>
                      <select class="duallistbox" multiple="multiple">
                        <option selected>Alabama</option>
                        <option>Alaska</option>
                        <option>California</option>
                        <option>Delaware</option>
                        <option>Tennessee</option>
                        <option>Texas</option>
                        <option>Washington</option>
                      </select>
                    </div>
                   
                  </div>
                 
                </div>
               
              </div>
            
              <div class="card-footer">
                Visit <a href="https://github.com/istvan-ujjmeszaros/bootstrap-duallistbox#readme">Bootstrap Duallistbox</a> for more examples and information about
                the plugin.
              </div>
            </div>
            
    
            <div class="row">
              <div class="col-md-6">
    
                <div class="card card-danger">
                  <div class="card-header">
                    <h3 class="card-title">Input masks</h3>
                  </div>
                  <div class="card-body">
                    
                    <div class="form-group">
                      <label>Date masks:</label>
    
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                        </div>
                        <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                      </div>
                      
                    </div>
                    
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                        </div>
                        <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="mm/dd/yyyy" data-mask>
                      </div>
                     
                    </div>
                    
                    <div class="form-group">
                      <label>US phone mask:</label>
    
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-phone"></i></span>
                        </div>
                        <input type="text" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask>
                      </div>
                     
                    </div>
                    
                    <div class="form-group">
                      <label>Intl US phone mask:</label>
    
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-phone"></i></span>
                        </div>
                        <input type="text" class="form-control"
                               data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask>
                      </div>
                      
                    </div>
                    
                    <div class="form-group">
                      <label>IP mask:</label>
    
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-laptop"></i></span>
                        </div>
                        <input type="text" class="form-control" data-inputmask="'alias': 'ip'" data-mask>
                      </div>
                     
                    </div>
                   
    
                  </div>
                 
                </div>
               
    
                <div class="card card-info">
                  <div class="card-header">
                    <h3 class="card-title">Color & Time Picker</h3>
                  </div>
                  <div class="card-body">
                   
                    <div class="form-group">
                      <label>Color picker:</label>
                      <input type="text" class="form-control my-colorpicker1">
                    </div>
                   
                    <div class="form-group">
                      <label>Color picker with addon:</label>
    
                      <div class="input-group my-colorpicker2">
                        <input type="text" class="form-control">
    
                        <div class="input-group-append">
                          <span class="input-group-text"><i class="fas fa-square"></i></span>
                        </div>
                      </div>
                     
                    </div>
                   
                    <div class="bootstrap-timepicker">
                      <div class="form-group">
                        <label>Time picker:</label>
    
                        <div class="input-group date" id="timepicker" data-target-input="nearest">
                          <input type="text" class="form-control datetimepicker-input" data-target="#timepicker"/>
                          <div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
                              <div class="input-group-text"><i class="far fa-clock"></i></div>
                          </div>
                          </div>
                        
                      </div>
                   
                    </div>
                  </div>
                 
                </div>
               
    
              </div>
            
              <div class="col-md-6">
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Date picker</h3>
                  </div>
                  <div class="card-body">
                 
                    <div class="form-group">
                      <label>Date:</label>
                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                            <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                  
                    <div class="form-group">
                      <label>Date range:</label>
    
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="far fa-calendar-alt"></i>
                          </span>
                        </div>
                        <input type="text" class="form-control float-right" id="reservation">
                      </div>
                    
                    </div>
                    
                    <div class="form-group">
                      <label>Date and time range:</label>
    
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="far fa-clock"></i></span>
                        </div>
                        <input type="text" class="form-control float-right" id="reservationtime">
                      </div>
                     
                    </div>
                  
                    <div class="form-group">
                      <label>Date range button:</label>
    
                      <div class="input-group">
                        <button type="button" class="btn btn-default float-right" id="daterange-btn">
                          <i class="far fa-calendar-alt"></i> Date range picker
                          <i class="fas fa-caret-down"></i>
                        </button>
                      </div>
                    </div>
                  
                  </div>
                    <div class="card-footer">
                      Visit <a href="https://tempusdominus.github.io/bootstrap-4/Usage/">tempusdominus </a> for more examples and information about
                      the plugin.
                    </div>
                 
                </div>
               
                <div class="card card-success">
                  <div class="card-header">
                    <h3 class="card-title">iCheck Bootstrap - Checkbox &amp; Radio Inputs</h3>
                  </div>
                  <div class="card-body">
                    
                    <div class="row">
                      <div class="col-sm-6">
                       
                        <div class="form-group clearfix">
                          <div class="icheck-primary d-inline">
                            <input type="checkbox" id="checkboxPrimary1" checked>
                            <label for="checkboxPrimary1">
                            </label>
                          </div>
                          <div class="icheck-primary d-inline">
                            <input type="checkbox" id="checkboxPrimary2">
                            <label for="checkboxPrimary2">
                            </label>
                          </div>
                          <div class="icheck-primary d-inline">
                            <input type="checkbox" id="checkboxPrimary3" disabled>
                            <label for="checkboxPrimary3">
                              Primary checkbox
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        
                        <div class="form-group clearfix">
                          <div class="icheck-primary d-inline">
                            <input type="radio" id="radioPrimary1" name="r1" checked>
                            <label for="radioPrimary1">
                            </label>
                          </div>
                          <div class="icheck-primary d-inline">
                            <input type="radio" id="radioPrimary2" name="r1">
                            <label for="radioPrimary2">
                            </label>
                          </div>
                          <div class="icheck-primary d-inline">
                            <input type="radio" id="radioPrimary3" name="r1" disabled>
                            <label for="radioPrimary3">
                              Primary radio
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  
                    <div class="row">
                      <div class="col-sm-6">
                       
                        <div class="form-group clearfix">
                          <div class="icheck-danger d-inline">
                            <input type="checkbox" checked id="checkboxDanger1">
                            <label for="checkboxDanger1">
                            </label>
                          </div>
                          <div class="icheck-danger d-inline">
                            <input type="checkbox" id="checkboxDanger2">
                            <label for="checkboxDanger2">
                            </label>
                          </div>
                          <div class="icheck-danger d-inline">
                            <input type="checkbox" disabled id="checkboxDanger3">
                            <label for="checkboxDanger3">
                              Danger checkbox
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6">
                    
                        <div class="form-group clearfix">
                          <div class="icheck-danger d-inline">
                            <input type="radio" name="r2" checked id="radioDanger1">
                            <label for="radioDanger1">
                            </label>
                          </div>
                          <div class="icheck-danger d-inline">
                            <input type="radio" name="r2" id="radioDanger2">
                            <label for="radioDanger2">
                            </label>
                          </div>
                          <div class="icheck-danger d-inline">
                            <input type="radio" name="r2" disabled id="radioDanger3">
                            <label for="radioDanger3">
                              Danger radio
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                   
                    <div class="row">
                      <div class="col-sm-6">
                       
                        <div class="form-group clearfix">
                          <div class="icheck-success d-inline">
                            <input type="checkbox" checked id="checkboxSuccess1">
                            <label for="checkboxSuccess1">
                            </label>
                          </div>
                          <div class="icheck-success d-inline">
                            <input type="checkbox" id="checkboxSuccess2">
                            <label for="checkboxSuccess2">
                            </label>
                          </div>
                          <div class="icheck-success d-inline">
                            <input type="checkbox" disabled id="checkboxSuccess3">
                            <label for="checkboxSuccess3">
                              Success checkbox
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6">
                     
                        <div class="form-group clearfix">
                          <div class="icheck-success d-inline">
                            <input type="radio" name="r3" checked id="radioSuccess1">
                            <label for="radioSuccess1">
                            </label>
                          </div>
                          <div class="icheck-success d-inline">
                            <input type="radio" name="r3" id="radioSuccess2">
                            <label for="radioSuccess2">
                            </label>
                          </div>
                          <div class="icheck-success d-inline">
                            <input type="radio" name="r3" disabled id="radioSuccess3">
                            <label for="radioSuccess3">
                              Success radio
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                 
                  <div class="card-footer">
                    Many more skins available. <a href="https://bantikyan.github.io/icheck-bootstrap/">Documentation</a>
                  </div>
                </div>
               
                <div class="card card-secondary">
                  <div class="card-header">
                    <h3 class="card-title">Bootstrap Switch</h3>
                  </div>
                  <div class="card-body">
                    <input type="checkbox" name="my-checkbox" checked data-bootstrap-switch>
                    <input type="checkbox" name="my-checkbox" checked data-bootstrap-switch data-off-color="danger" data-on-color="success">
                  </div>
                </div>
                
              </div>
             
            </div>-->
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@include('common.footer');
