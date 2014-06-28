
        <section id="content">
          <section class="vbox">          
            <section class="scrollable">
              <div class="wrapper-lg">
                <h3 class="m-b-xs font-bold m-t-none">Welcome back, <?= $first_name ?></h3>
                <div class="text-muted text-sm"><a href="#" class="text-primary font-bold">25</a> Lists, <a href="#" class="text-primary font-bold">50</a> Phone Numbers</div>
              </div>
              <ul class="nav nav-tabs">                
                <li class="active m-l-lg"><a href="#sales" data-toggle="tab">Sales</a></li>
                <li><a href="#revenue" data-toggle="tab">Revenue</a></li>
                <li><a href="#orders" data-toggle="tab">Orders</a></li>
              </ul>
              <div class="wrapper-lg bg-white b-b b-light">
                <div class="tab-content">
                  <div class="tab-pane active" id="sales">
                    <div id="flot-1ine" style="height:240px"></div>
                  </div>
                  <div class="tab-pane" id="revenue">
                    <div id="flot-chart"  style="width:100%;height:240px"></div>
                  </div>
                  <div class="tab-pane" id="orders">
                    <div id="flot-live"  style="width:100%;height:240px"></div>
                  </div>
                </div>
                <div class="row text-center no-gutter">
                  <div class="col-xs-3 b-r b-light">
                    <span class="h4 font-bold m-t block">5,860</span>
                    <small class="text-muted block">Orders</small>
                  </div>
                  <div class="col-xs-3 b-r b-light">
                    <span class="h4 font-bold m-t block">10,450</span>
                    <small class="text-muted block">Sellings</small>
                  </div>
                  <div class="col-xs-3 b-r b-light">
                    <span class="h4 font-bold m-t block">21,230</span>
                    <small class="text-muted block">Items</small>
                  </div>
                  <div class="col-xs-3">
                    <span class="h4 font-bold m-t block">7,230</span>
                    <small class="text-muted block">Customers</small>
                  </div>
                </div>
              </div>
              <div class="hbox">
                <aside>
                  <div class="wrapper-lg">
                    <h4 class="m-t-none font-bold">Tasks</h4>
                    <div class="text-center">
                      <div class="inline m">
                        <div class="easypiechart text-success" data-percent="25" data-line-width="5" data-track-Color="#f0f0f0" data-bar-color="#8ec165" data-rotate="270" data-scale-Color="false" data-size="120" data-animate="2000">
                          <span class="h2 step font-bold">25</span>%
                          <div class="easypie-text text-muted">task done</div>
                        </div>
                        <div class="font-bold m-t">Total 150</div>
                      </div>
                      <div class="inline m">
                        <div class="easypiechart text-info" data-percent="65" data-line-width="5" data-track-Color="#f0f0f0" data-bar-color="#4cc0c1" data-rotate="115" data-scale-Color="false" data-size="120" data-animate="2000">
                          <span class="h2 step font-bold">65</span>%
                          <div class="easypie-text text-muted">in progress</div>
                        </div>
                        <div class="font-bold m-t">Total 9</div>
                      </div>                    
                      <div class="inline m">
                        <div class="easypiechart text-danger" data-percent="50" data-line-width="5" data-track-Color="#f0f0f0" data-bar-color="#fb6b5b" data-rotate="180" data-scale-Color="false" data-size="120" data-animate="2000">
                          <span class="h2 step font-bold">50</span>%
                          <div class="easypie-text text-muted">remaining</div>
                        </div>
                        <div class="font-bold m-t">Total 25</div>
                      </div>
                    </div>
                    <h4 class="font-bold m-t m-b">Todos</h4>
                    <ul class="list-group gutter list-group-lg list-group-sp sortable">
                      <li class="list-group-item box-shadow" draggable="true">
                        <a href="#" class="pull-right" data-dismiss="alert">
                          <i class="fa fa-times icon-muted"></i>
                        </a>
                        <span class="pull-left media-xs">
                          <i class="fa fa-sort icon-muted fa m-r-sm"></i>
                          <a href="#todo-1" data-toggle="class:text-lt text-success" class="active">
                            <i class="fa fa-square-o fa-fw text"></i>
                            <i class="fa fa-check-square-o fa-fw text-active text-success"></i>
                          </a>
                        </span>
                        <div class="clear text-success text-lt" id="todo-1">
                          Browser compatibility
                        </div>
                      </li>
                      <li class="list-group-item box-shadow" draggable="true">
                        <a href="#" class="pull-right" data-dismiss="alert">
                          <i class="fa fa-times icon-muted"></i>
                        </a>
                        <span class="pull-left media-xs">
                          <i class="fa fa-sort icon-muted fa m-r-sm"></i>
                          <a href="#todo-2" data-toggle="class:text-lt text-danger">
                            <i class="fa fa-square-o fa-fw text"></i>
                            <i class="fa fa-check-square-o fa-fw text-active text-danger"></i>
                          </a>
                        </span>
                        <div class="clear" id="todo-2">
                          Looking for more example templates
                        </div>
                      </li>
                      <li class="list-group-item box-shadow" draggable="true">
                        <a href="#" class="pull-right" data-dismiss="alert">
                          <i class="fa fa-times icon-muted"></i>
                        </a>
                        <span class="pull-left media-xs">
                          <i class="fa fa-sort icon-muted fa m-r-sm"></i>
                          <a href="#todo-3" data-toggle="class:text-lt">
                            <i class="fa fa-square-o fa-fw text"></i>
                            <i class="fa fa-check-square-o fa-fw text-active text-success"></i>
                          </a>
                        </span>
                        <div class="clear" id="todo-3">
                          Customizing components
                        </div>
                      </li>
                      <li class="list-group-item box-shadow" draggable="true">
                        <a href="#" class="pull-right" data-dismiss="alert">
                          <i class="fa fa-times icon-muted"></i>
                        </a>
                        <span class="pull-left media-xs">
                          <i class="fa fa-sort icon-muted fa m-r-sm"></i>
                          <a href="#todo-4" data-toggle="class:text-lt">
                            <i class="fa fa-square-o fa-fw text"></i>
                            <i class="fa fa-check-square-o fa-fw text-active text-success"></i>
                          </a>
                        </span>
                        <div class="clear" id="todo-4">
                          The fastest way to get started
                        </div>
                      </li>
                    </ul> 
                  </div>
                </aside>
                <aside class="b-l b-light">
                  <div class="wrapper-lg">
                    <h4 class="m-t-none font-bold">Map</h4>
                    <div id="world_map" style="height:180px;"></div>
                    <h4 class="font-bold m-t m-b">Stats</h4>
                    <div class="panel panel-default">
                      <table class="table table-striped m-b-none">
                        <thead>
                          <tr>
                            <th>Graph</th>
                            <th>Item</th>                    
                            <th width="70"></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>                    
                            <td>
                              <div class="sparkline" data-bar-color="#5cb85c" data-type="bar" data-height="19"><!--20,10,15,21,12,5,21,30,24,15,8,19--></div>
                            </td>
                            <td>App downloads</td>
                            <td class="text-success">
                              <i class="fa fa-level-up"></i> 40%
                            </td>
                          </tr>
                          <tr>                    
                            <td>
                              <div class="sparkline" data-bar-color="#61a1e1" data-type="bar" data-height="19"><!--,5,21,30,24,15,8,19,20,10,15,21,12--></div>
                            </td>
                            <td>Social connection</td>
                            <td class="text-success">
                              <i class="fa fa-level-up"></i> 20%
                            </td>
                          </tr>
                          <tr>                    
                            <td>
                              <div class="sparkline" data-bar-color="#999900" data-type="bar" data-height="19"><!--200,400,500,100,90,1200,1500,1000,800,500,80,50--></div>
                            </td>
                            <td>Revenue</td>
                            <td class="text-warning">
                              <i class="fa fa-level-down"></i> 5%
                            </td>
                          </tr>
                          <tr>                    
                            <td>
                              <div class="sparkline" data-bar-color="#ff5f5f" data-type="bar" data-height="19"><!--15,21,30,24,15,8,19,20,10,15,21,12--></div>
                            </td>
                            <td>Customer increase</td>
                            <td class="text-danger">
                              <i class="fa fa-level-down"></i> 20%
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <ul class="pagination pagination-sm m-t-none">
                      <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                      <li class="active"><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                  </div>
                </aside>
              </div>
            </section>
          </section>
          <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a>
        </section>
        <aside class="bg-light lter b-l aside-md hide" id="notes">
          <div class="wrapper">Notification</div>
        </aside>
      </section>
    </section>
  </section>
  <script src="<?= js_url('/jquery.min.js')?>"></script>
  <!-- Bootstrap -->
  <script src="<?= js_url('bootstrap.js')?>"></script>
  <!-- App -->
  <script src="<?= js_url('app.js')?>"></script> 
  <script src="<?= js_url('slimscroll/jquery.slimscroll.min.js')?>"></script>
  <script src="<?= js_url('charts/easypiechart/jquery.easy-pie-chart.js')?>"></script>
  <script src="<?= js_url('charts/sparkline/jquery.sparkline.min.js')?>"></script>
  <script src="<?= js_url('charts/flot/jquery.flot.min.js')?>"></script>
  <script src="<?= js_url('charts/flot/jquery.flot.tooltip.min.js')?>"></script>
  <script src="<?= js_url('charts/flot/jquery.flot.resize.js')?>"></script>
  <script src="<?= js_url('charts/flot/jquery.flot.grow.js')?>"></script>
  <script src="<?= js_url('charts/flot/demo.js')?>"></script>

  <script src="<?= js_url('calendar/bootstrap_calendar.js')?>"></script>
  <script src="<?= js_url('calendar/demo.js')?>"></script>

  <script src="<?= js_url('sortable/jquery.sortable.js')?>"></script>

  <script src="<?= js_url('jvectormap/jquery-jvectormap-1.2.2.min.js')?>"></script>
  <script src="<?= js_url('jvectormap/jquery-jvectormap-world-mill-en.js')?>"></script>
  <script src="<?= js_url('jvectormap/demo.js')?>"></script>
  <script src="<?= js_url('app.plugin.js')?>"></script>
</body>
</html>