        <section id="content">
          <section class="hbox stretch">
            <aside class="aside-md bg-white b-r" id="subNav">
              <div class="wrapper b-b header">Phone Number Lists</div>
              <ul class="nav">
                <li class="b-b b-light"><a href="#"><i class="fa fa-chevron-right pull-right m-t-xs text-xs icon-muted"></i>Phasellus at ultricies</a></li>
                <li class="b-b b-light"><a href="#"><i class="fa fa-chevron-right pull-right m-t-xs text-xs icon-muted"></i>Malesuada augue</a></li>
                <li class="b-b b-light"><a href="#"><i class="fa fa-chevron-right pull-right m-t-xs text-xs icon-muted"></i>Donec eleifend</a></li>
                <li class="b-b b-light"><a href="#"><i class="fa fa-chevron-right pull-right m-t-xs text-xs icon-muted"></i>Dapibus porta</a></li>
                <li class="b-b b-light"><a href="#"><i class="fa fa-chevron-right pull-right m-t-xs text-xs icon-muted"></i>Dacus eu neque</a></li>
              </ul>
            </aside>
            <aside>
              <section class="vbox">
                <header class="header bg-white b-b clearfix">
                  <div class="row m-t-sm">
                    <div class="col-sm-8 m-b-xs">
                      <a href="#subNav" data-toggle="class:hide" class="btn btn-sm btn-default active"><i class="fa fa-caret-right text fa-lg"></i><i class="fa fa-caret-left text-active fa-lg"></i></a>
                      <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-default" title="Refresh"><i class="fa fa-refresh"></i></button>
                        <button type="button" class="btn btn-sm btn-default" title="Remove"><i class="fa fa-trash-o"></i></button>
                        <button type="button" class="btn btn-sm btn-default" title="Filter" data-toggle="dropdown"><i class="fa fa-filter"></i> <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                          <li><a href="#">Action</a></li>
                          <li><a href="#">Another action</a></li>
                          <li><a href="#">Something else here</a></li>
                          <li class="divider"></li>
                          <li><a href="#">Separated link</a></li>
                        </ul>
                      </div>
                      <a href="modal.html" data-toggle="ajaxModal" class="btn btn-sm btn-default"><i class="fa fa-plus"></i> Create</a>
                    </div>
                    <div class="col-sm-4 m-b-xs">
                      <div class="input-group">
                        <input type="text" class="input-sm form-control" placeholder="Search">
                        <span class="input-group-btn">
                          <button class="btn btn-sm btn-default" type="button">Go!</button>
                        </span>
                      </div>
                    </div>
                  </div>
                </header>
                <section class="scrollable wrapper w-f">
                  <section class="panel panel-default">
                    <div class="table-responsive">
                      <table class="table table-striped m-b-none">
                        <thead>
                          <tr>
                            <th width="20"><input type="checkbox"></th>
                            <th width="20"></th>
                            <th class="th-sortable" data-toggle="class">Project
                              <span class="th-sort">
                                <i class="fa fa-sort-down text"></i>
                                <i class="fa fa-sort-up text-active"></i>
                                <i class="fa fa-sort"></i>
                              </span>
                            </th>
                            <th>Task</th>
                            <th>Date</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><input type="checkbox" name="post[]" value="2"></td>
                            <td><a href="#modal" data-toggle="modal"><i class="fa fa-search-plus"></i></a></td>
                            <td>Idrawfast</td>
                            <td>4c</td>
                            <td>Jul 25, 2013</td>
                          </tr>
                          <tr>
                            <td><input type="checkbox" name="post[]" value="3"></td>
                            <td><a href="#modal" data-toggle="modal"><i class="fa fa-search-plus"></i></a></td>
                            <td>Formasa</td>
                            <td>8c</td>
                            <td>Jul 22, 2013</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </section>
                </section>
                <footer class="footer bg-white b-t">
                  <div class="row text-center-xs">
                    <div class="col-md-6 hidden-sm">
                      <p class="text-muted m-t">Showing 20-30 of 50</p>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right text-center-xs">                
                      <ul class="pagination pagination-sm m-t-sm m-b-none">
                        <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </footer>
              </section>
            </aside>
          </section>
          <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a>
        </section>
        <aside class="bg-light lter b-l aside-md hide" id="notes">
          <div class="wrapper">Notification</div>
        </aside>
      </section>
    </section>
  </section>
  <script src="<?= js_url('jquery.min.js') ?>"></script>
  <!-- Bootstrap -->
  <script src="<?= js_url('bootstrap.js') ?>"></script>
  <!-- App -->
  <script src="<?= js_url('app.js') ?>"></script> 
  <script src="<?= js_url('slimscroll/jquery.slimscroll.min.js') ?>"></script>
    <div class="modal fade" id="modal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Idrawfast 02/2013</h4>
        </div>
        <div class="modal-body">
          <p>This is a table in a modal, click the trash icon to remove the item</p>
          <section class="panel panel-default m-l-n-md  m-r-n-md m-b-none">
            <header class="panel-heading">
              <span class="label bg-danger pull-right">4 left</span>
              Tasks
            </header>
            <table class="table table-striped m-b-none text-sm">
              <thead>
                <tr>
                  <th>Progress</th>
                  <th>Item</th>                    
                  <th width="20"></th>
                </tr>
              </thead>
              <tbody>
                <tr id="item-1">
                  <td>
                    <div class="progress progress-sm progress-striped active m-t-xs m-b-none">
                      <div class="progress-bar progress-bar-success" data-toggle="tooltip" data-original-title="80%" style="width: 80%"></div>
                    </div>
                  </td>
                  <td>App prototype design</td>
                  <td class="text-right">
                    <a href="#item-1" data-dismiss="alert"><i class="fa fa-trash-o"></i></a>
                  </td>
                </tr>
                <tr id="item-2">
                  <td>
                    <div class="progress progress-xs m-t-xs m-b-none">
                      <div class="progress-bar progress-bar-info" data-toggle="tooltip" data-original-title="40%" style="width: 40%"></div>
                    </div>
                  </td>
                  <td>Design documents</td>
                  <td class="text-right">
                     <a href="#item-2" data-dismiss="alert"><i class="fa fa-trash-o"></i></a>
                  </td>
                </tr>
                <tr id="item-3">                    
                  <td>
                    <div class="progress progress-xs m-t-xs m-b-none">
                      <div class="progress-bar progress-bar-warning" data-toggle="tooltip" data-original-title="20%" style="width: 20%"></div>
                    </div>
                  </td>
                  <td>UI toolkit</td>
                  <td class="text-right">
                     <a href="#item-3" data-dismiss="alert"><i class="fa fa-trash-o"></i></a>
                  </td>
                </tr>
                <tr id="item-4">                    
                  <td>
                    <div class="progress progress-xs m-t-xs m-b-none">
                      <div class="progress-bar progress-bar-danger" data-toggle="tooltip" data-original-title="15%" style="width: 15%"></div>
                    </div>
                  </td>
                  <td>Testing</td>
                  <td class="text-right">
                     <a href="#item-4" data-dismiss="alert"><i class="fa fa-trash-o"></i></a>
                  </td>
                </tr>
              </tbody>
            </table>
          </section>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-info" data-loading-text="Updating...">Save changes</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>
  <script src="<?= js_url('app.plugin.js') ?>"></script>
</body>
</html>