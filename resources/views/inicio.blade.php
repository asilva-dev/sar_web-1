@extends("theme.$theme.layout")
@section('titulo')
	Home
@endsection

@section('conteudo')
<div class="row">
  <!-- Left col -->
  <section class="col-lg-7 connectedSortable">

     <!-- BAR CHART -->
     <div class="box box-success">
      <div class="box-header with-border">
        <h3 class="box-title">Gráfico de Barras</h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
        <div class="chart">
          <canvas id="barChart" style="height:230px"></canvas>
        </div>
      </div>
      <!-- /.box-body -->
    </div> 
          <!-- /.box -->
    <!-- /.nav-tabs-custom -->

    <!-- TABLE: LATEST ORDERS -->
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Lista de ordens de Serviços</h3>
      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
        </button>
        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
      </div>  
      <div class="box-body">
        <div class="table-responsive">
        <table class="table no-margin">
          <thead>
          <tr>
            <th>ID</th>
            <th>Serviço</th>
            <th>Status</th>
          </tr>
          </thead>
          <tbody>
            <tr>
              <td><a href="#">OR9842</a></td>
              <td>Instalar TV a cabo</td>
              <td><span class="label label-success">Enviado</span></td> 
            </tr>
            <tr>
              <td><a href="#">OR1848</a></td>
              <td>Reparo de ponto de telefone</td>
              <td><span class="label label-warning">Pendente</span></td>              
            </tr>
            
            <tr>
              <td><a href="#">OR7429</a></td>
              <td>Instalar Fibra Ótica</td>
              <td><span class="label label-info">Pendente</span></td>              
            </tr>
            <tr>
              <td><a href="#">OR1848</a></td>
              <td>Reparo de Sinal de Internet </td>
              <td><span class="label label-warning">Pendente</span></td>              
            </tr>
            <tr>
              <td><a href="#">OR7429</a></td>
              <td>Instalação de TV a cabo</td>
              <td><span class="label label-danger">Entregue</span></td>              
            </tr>
            </tbody>
          </table>
          <div class="box-footer clearfix">
              <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Nova Ordem</a>
              
            </div>
      </div>

</section>
  <!-- /.Left col -->
  <!-- right col (We are only adding the ID to make the widgets sortable)-->
  <section class="col-lg-5 connectedSortable">
    <!-- solid sales graph -->
    <div class="box box-solid bg-teal-gradient">
      <div class="box-header">
        <i class="fa fa-th"></i>

        <h3 class="box-title">Gráfico de Ordens de Serviço</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn bg-teal btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn bg-teal btn-sm" data-widget="remove"><i class="fa fa-times"></i>
          </button>
        </div>
      </div>
      <div class="box-body border-radius-none">
        <div class="chart" id="line-chart" style="height: 250px;"></div>
      </div>
      <!-- /.box-body -->
      <div class="box-footer no-border">
        <div class="row">
          <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
            <input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60"
                    data-fgColor="#39CCCC">

            <div class="knob-label">Aguardando Atendimento</div>
          </div>
          <!-- ./col -->
          <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
            <input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60"
                    data-fgColor="#39CCCC">

            <div class="knob-label">Em Atendimento</div>
          </div>
          <!-- ./col -->
          <div class="col-xs-4 text-center">
            <input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60"
                    data-fgColor="#39CCCC">
            <div class="knob-label">Resolvidas</div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.box-footer -->
    </div>
    <!-- /.box -->

    <!-- Calendar -->
    <div class="box box-solid bg-green-gradient">
      <div class="box-header">
        <i class="fa fa-calendar"></i>
        <h3 class="box-title">Calendário</h3>
        <!-- tools box -->
        <div class="pull-right box-tools">
          <!-- button with a dropdown -->
          <div class="btn-group">
            <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bars"></i></button>
            <ul class="dropdown-menu pull-right" role="menu">
              <li><a href="#">Adicionar novo evento</a></li>
              <li><a href="#">Limpar eventos</a></li>
              <li class="divider"></li>
              <li><a href="#">Visualizar Calendário</a></li>
            </ul>
          </div>
          <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
          </button>
        </div>
        <!-- /. tools -->
      </div>
      <!-- /.box-header -->
      <div class="box-body no-padding">
        <!--The calendar -->
        <div id="calendar" style="width: 100%"></div>
      </div>
</section>

  <!-- right col -->
</div>
<!-- /.row (main row) -->

    </section>
    <!-- /.content -->
</div>

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
    // This will get the first returned node in the jQuery collection.
    var areaChart       = new Chart(areaChartCanvas)

    var areaChartData = {
      labels  : ['Janeiro', 'February', 'March', 'April', 'May', 'June', 'July'],
      datasets: [
        {
          label               : 'Electronics',
          fillColor           : 'rgba(210, 214, 222, 1)',
          strokeColor         : 'rgba(210, 214, 222, 1)',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [65, 59, 80, 81, 56, 55, 40]
        },
        {
          label               : 'Digital Goods',
          fillColor           : 'rgba(60,141,188,0.9)',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [28, 48, 40, 19, 86, 27, 90]
        }
      ]
    }

    var areaChartOptions = {
      //Boolean - If we should show the scale at all
      showScale               : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : false,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - Whether the line is curved between points
      bezierCurve             : true,
      //Number - Tension of the bezier curve between points
      bezierCurveTension      : 0.3,
      //Boolean - Whether to show a dot for each point
      pointDot                : false,
      //Number - Radius of each point dot in pixels
      pointDotRadius          : 4,
      //Number - Pixel width of point dot stroke
      pointDotStrokeWidth     : 1,
      //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
      pointHitDetectionRadius : 20,
      //Boolean - Whether to show a stroke for datasets
      datasetStroke           : true,
      //Number - Pixel width of dataset stroke
      datasetStrokeWidth      : 2,
      //Boolean - Whether to fill the dataset with a color
      datasetFill             : true,
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].lineColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio     : true,
      //Boolean - whether to make the chart responsive to window resizing
      responsive              : true
    }

    //Create the line chart
    areaChart.Line(areaChartData, areaChartOptions)

    //-------------
    //- LINE CHART -
    //--------------
    var lineChartCanvas          = $('#lineChart').get(0).getContext('2d')
    var lineChart                = new Chart(lineChartCanvas)
    var lineChartOptions         = areaChartOptions
    lineChartOptions.datasetFill = false
    lineChart.Line(areaChartData, lineChartOptions)

    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieChart       = new Chart(pieChartCanvas)
    var PieData        = [
      {
        value    : 700,
        color    : '#f56954',
        highlight: '#f56954',
        label    : 'Chrome'
      },
      {
        value    : 500,
        color    : '#00a65a',
        highlight: '#00a65a',
        label    : 'IE'
      },
      {
        value    : 400,
        color    : '#f39c12',
        highlight: '#f39c12',
        label    : 'FireFox'
      },
      {
        value    : 600,
        color    : '#00c0ef',
        highlight: '#00c0ef',
        label    : 'Safari'
      },
      {
        value    : 300,
        color    : '#3c8dbc',
        highlight: '#3c8dbc',
        label    : 'Opera'
      },
      {
        value    : 100,
        color    : '#d2d6de',
        highlight: '#d2d6de',
        label    : 'Navigator'
      }
    ]
    var pieOptions     = {
      //Boolean - Whether we should show a stroke on each segment
      segmentShowStroke    : true,
      //String - The colour of each segment stroke
      segmentStrokeColor   : '#fff',
      //Number - The width of each segment stroke
      segmentStrokeWidth   : 2,
      //Number - The percentage of the chart that we cut out of the middle
      percentageInnerCutout: 50, // This is 0 for Pie charts
      //Number - Amount of animation steps
      animationSteps       : 100,
      //String - Animation easing effect
      animationEasing      : 'easeOutBounce',
      //Boolean - Whether we animate the rotation of the Doughnut
      animateRotate        : true,
      //Boolean - Whether we animate scaling the Doughnut from the centre
      animateScale         : false,
      //Boolean - whether to make the chart responsive to window resizing
      responsive           : true,
      // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio  : true,
      //String - A legend template
      legendTemplate       : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<segments.length; i++){%><li><span style="background-color:<%=segments[i].fillColor%>"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>'
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    pieChart.Doughnut(PieData, pieOptions)

    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas                   = $('#barChart').get(0).getContext('2d')
    var barChart                         = new Chart(barChartCanvas)
    var barChartData                     = areaChartData
    barChartData.datasets[1].fillColor   = '#00a65a'
    barChartData.datasets[1].strokeColor = '#00a65a'
    barChartData.datasets[1].pointColor  = '#00a65a'
    var barChartOptions                  = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero        : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : true,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - If there is a stroke on each bar
      barShowStroke           : true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth          : 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing         : 5,
      //Number - Spacing between data sets within X values
      barDatasetSpacing       : 1,
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to make the chart responsive
      responsive              : true,
      maintainAspectRatio     : true
    }
    barChartOptions.datasetFill = false
    barChart.Bar(barChartData, barChartOptions)
  })
</script>
@endsection

