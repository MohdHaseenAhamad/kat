@include('superadmin.common.header')
@include('superadmin.common.sidebar')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
@endif
<!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0 text-dark">Dashboard</h1>
                    <?php if(true): ?>
                    <h3>
                        <b>If You are Update Website and Create New Website Please Contact
                            <a href="tel:<?=CONTACT_NUMBER?>"><?=CONTACT_NUMBER?></a>
                            <span class="fas fa-phone"></span>
                        </b>
                    </h3>
                    <?php endif; ?>
                </div><!-- /.col -->
                <!--<div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard v1</li>
                  </ol>
                </div>--><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <?php foreach ($table_array as $key=>$value)
                { ?>
                <div class="col-lg-3 col-6">
                    <div class="small-box " style="background: #<?php echo mt_rand(100000, 999999) ?>">
                        <div class="inner">
                            <h3 style="color: white;"><?=$counter[$value['table']]?></h3>
                            <p style="color: white;"><?=ucfirst(str_replace("_"," ",$value['table']))?></p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="{{url($value['url'])}}" target="_blank" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                    <?php } ?>

            </div>

        </div><!-- /.container-fluid -->
    </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <!-- AREA CHART -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Area Chart</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="chart">
                                    <canvas id="areaChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                        <!-- DONUT CHART -->
                        <div class="card card-danger">
                            <div class="card-header">
                                <h3 class="card-title">Donut Chart</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                        <!-- PIE CHART -->
                        <div class="card card-danger">
                            <div class="card-header">
                                <h3 class="card-title">Pie Chart</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                    </div>
                    <!-- /.col (LEFT) -->
                    <div class="col-md-6">
                        <!-- LINE CHART -->
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Line Chart</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="chart">
                                    <canvas id="lineChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                        <!-- BAR CHART -->
                        <div class="card card-success">
                            <div class="card-header">
                                <h3 class="card-title">Bar Chart</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="chart">
                                    <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                        <!-- STACKED BAR CHART -->
                        <div class="card card-success">
                            <div class="card-header">
                                <h3 class="card-title">Stacked Bar Chart</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="chart">
                                    <canvas id="stackedBarChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                    </div>
                    <!-- /.col (RIGHT) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@include('superadmin.common.footer')
<script>
    $(function () {
        /* ChartJS
         * -------
         * Here we will create a few charts using ChartJS
         */

        //--------------
        //- AREA CHART -
        //--------------

        // Get context with jQuery - using jQuery's .get() method.
        var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

        var areaChartData = {
            labels  : ['RF Feding', 'Cutting', 'Batching','Flow', 'Autoclave', 'logbook', 'Raising', 'Labour'],
            datasets: [
                {
                    label               : 'Digital Goods',
                    backgroundColor     : 'rgba(60,141,188,0.9)',
                    borderColor         : 'rgba(60,141,188,0.8)',
                    pointRadius          : false,
                    pointColor          : '#3b8bba',
                    pointStrokeColor    : 'rgba(60,141,188,1)',
                    pointHighlightFill  : '#fff',
                    pointHighlightStroke: 'rgba(60,141,188,1)',
                    data                : [<?=$counter['rf_feding']?>, <?=$counter['cutting']?>, <?=$counter['batching']?>,<?=$counter['flow']?>, <?=$counter['autoclave']?>, <?=$counter['logbook']?>, <?=$counter['raising']?>, <?=$counter['labour']?>]
                },
                {
                    label               : 'Electronics',
                    backgroundColor     : 'rgba(210, 214, 222, 1)',
                    borderColor         : 'rgba(210, 214, 222, 1)',
                    pointRadius         : false,
                    pointColor          : 'rgba(210, 214, 222, 1)',
                    pointStrokeColor    : '#c1c7d1',
                    pointHighlightFill  : '#fff',
                    pointHighlightStroke: 'rgba(220,220,220,1)',
                    data                : [<?=$counter['rf_feding']?>, <?=$counter['cutting']?>, <?=$counter['batching']?>,<?=$counter['flow']?>, <?=$counter['autoclave']?>, <?=$counter['logbook']?>, <?=$counter['raising']?>, <?=$counter['labour']?>]
                },
            ]
        }

        var areaChartOptions = {
            maintainAspectRatio : false,
            responsive : true,
            legend: {
                display: false
            },
            scales: {
                xAxes: [{
                    gridLines : {
                        display : false,
                    }
                }],
                yAxes: [{
                    gridLines : {
                        display : false,
                    }
                }]
            }
        }

        // This will get the first returned node in the jQuery collection.
        var areaChart       = new Chart(areaChartCanvas, {
            type: 'line',
            data: areaChartData,
            options: areaChartOptions
        })

        //-------------
        //- LINE CHART -
        //--------------
        var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
        var lineChartOptions = jQuery.extend(true, {}, areaChartOptions)
        var lineChartData = jQuery.extend(true, {}, areaChartData)
        lineChartData.datasets[0].fill = false;
        lineChartData.datasets[1].fill = false;
        lineChartOptions.datasetFill = false

        var lineChart = new Chart(lineChartCanvas, {
            type: 'line',
            data: lineChartData,
            options: lineChartOptions
        })

        //-------------
        //- DONUT CHART -
        //-------------
        // Get context with jQuery - using jQuery's .get() method.
        var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
        var donutData        = {
            labels: ['RF Feding', 'Cutting', 'Batching','Flow', 'Autoclave', 'logbook', 'Raising', 'Labour'],
            datasets: [
                {
                    data: [<?=$counter['rf_feding']?>, <?=$counter['cutting']?>, <?=$counter['batching']?>,<?=$counter['flow']?>, <?=$counter['autoclave']?>, <?=$counter['logbook']?>, <?=$counter['raising']?>, <?=$counter['labour']?>],
                    backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
                }
            ]
        }
        var donutOptions     = {
            maintainAspectRatio : false,
            responsive : true,
        }
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        var donutChart = new Chart(donutChartCanvas, {
            type: 'doughnut',
            data: donutData,
            options: donutOptions
        })

        //-------------
        //- PIE CHART -
        //-------------
        // Get context with jQuery - using jQuery's .get() method.
        var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
        var pieData        = donutData;
        var pieOptions     = {
            maintainAspectRatio : false,
            responsive : true,
        }
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        var pieChart = new Chart(pieChartCanvas, {
            type: 'pie',
            data: pieData,
            options: pieOptions
        })

        //-------------
        //- BAR CHART -
        //-------------
        var barChartCanvas = $('#barChart').get(0).getContext('2d')
        var barChartData = jQuery.extend(true, {}, areaChartData)
        var temp0 = areaChartData.datasets[0]
        var temp1 = areaChartData.datasets[1]
        barChartData.datasets[0] = temp1
        barChartData.datasets[1] = temp0

        var barChartOptions = {
            responsive              : true,
            maintainAspectRatio     : false,
            datasetFill             : false
        }

        var barChart = new Chart(barChartCanvas, {
            type: 'bar',
            data: barChartData,
            options: barChartOptions
        })

        //---------------------
        //- STACKED BAR CHART -
        //---------------------
        var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
        var stackedBarChartData = jQuery.extend(true, {}, barChartData)

        var stackedBarChartOptions = {
            responsive              : true,
            maintainAspectRatio     : false,
            scales: {
                xAxes: [{
                    stacked: true,
                }],
                yAxes: [{
                    stacked: true
                }]
            }
        }

        var stackedBarChart = new Chart(stackedBarChartCanvas, {
            type: 'bar',
            data: stackedBarChartData,
            options: stackedBarChartOptions
        })
    })
</script>
