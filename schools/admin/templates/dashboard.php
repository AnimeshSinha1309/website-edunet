    <div id="page-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <h1 class="page-header">
              Dashboard <small>Statistics Overview</small>
            </h1>
            <ol class="breadcrumb">
              <li class="active">
                <i class="fa fa-dashboard"></i> Dashboard
              </li>
            </ol>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="alert alert-info alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <i class="fa fa-info-circle"></i>  <strong>Like SB Admin?</strong> Try out <a href="http://startbootstrap.com/template-overviews/sb-admin-2" class="alert-link">SB Admin 2</a> for additional features!
            </div>
          </div>
        </div>
        <div class="row">
          <?php for($i = 1; $i <= 4; $i += 1) { ?>
            <div class="col-lg-3 col-md-6">
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <div class="row">
                    <div class="col-xs-3">
                      <i class="fa fa-comments fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                      <div class="huge">26</div>
                      <div>New Comments!</div>
                    </div>
                  </div>
                </div>
                <a href="#">
                  <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                  </div>
                </a>
              </div>
            </div>
          <?php } ?>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Area Chart</h3>
              </div>
              <div class="panel-body">
                <div id="morris-area-chart"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i> Donut Chart</h3>
              </div>
              <div class="panel-body">
                <div id="morris-donut-chart"></div>
                <div class="text-right">
                  <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Tasks Panel</h3>
              </div>
              <div class="panel-body">
                <div class="list-group">
                  <?php for($i = 1; $i <= 8; $i+= 1){ ?>
                    <a href="#" class="list-group-item">
                      <span class="badge">4 minutes ago</span>
                      <i class="fa fa-fw fa-comment"></i> Commented on a post
                    </a>
                  <?php } ?>
                </div>
                <div class="text-right">
                  <a href="#">View All Activity <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Transactions Panel</h3>
              </div>
              <div class="panel-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-hover table-striped">
                    <thead>
                      <tr>
                        <th>Order #</th>
                        <th>Order Date</th>
                        <th>Order Time</th>
                        <th>Amount (USD)</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php for($i = 1; $i <= 7; $i+= 1) { ?>
                        <tr>
                          <td>3326</td>
                          <td>10/21/2013</td>
                          <td>3:29 PM</td>
                          <td>$321.33</td>
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
                <div class="text-right">
                  <a href="#">View All Transactions <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script> donut('morris-donut-chart', <?php echo(json_encode($userTypeSplit)); ?>) </script>
</body>
</html>