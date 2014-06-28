        <section id="content">
          <section class="vbox">          
            <section class="scrollable wrapper">
              <div class="top-area">
                <div class="row">
                  <div class="col-sm-8">
                    <h1>Lists</h1>
                  </div>
                  <div class="col-sm-4 adjust-btn-top-flush">
                    <a class="btn btn-success btn-lrg pull-right" href="#">Create New List</a>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12">
                    <hr>
                  </div>
                </div>

                <!-- 
                The rows of lists -->
                <?php
                  foreach ($lists as $list) {
                ?>
                <div class="row list-item">
                  <div class="col-md-6">
                    <h3 class="green-title"><a href="#"><?= $list['list_name'] ?></a></h3>
                    <p class="hidden-xs hidden-sm">Created on Dec 12, 2014</p>
                  </div>
                  <div class="col-md-3 col-xs-6">
                    <h3 class="subscriber-number"><strong><?= $list['list_count'] ?></strong></h3>
                    <p class="hidden-xs hidden-sm">Subscribers</p>
                    <p class="number-label visible-xs visible-sm"><span class="label bg-success">(801) 369-0041</span></p>
                  </div>
                  <div class="col-md-3 col-xs-6">
                    <div class="pull-right">
                      <div class="btn-group more-btn-top">
                        <button class="btn btn-default dropdown-toggle more-btn" data-toggle="dropdown">
                          Actions <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu more-dropdown-menu">
                          <li><a href="#">View Full List</a></li>
                          <li><a href="#">Add New Number</a></li>
                          <li><a href="#">Create Campaign</a></li>
                          <li class="divider"></li>
                          <li><a href="#">Delete this list</a></li>
                        </ul>
                      </div>
                      <p class="number-label hidden-xs hidden-sm"><span class="label bg-success">(801) 369-0041</span></p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12"><hr></div>
                </div>
                <?php } ?>

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
  <script src="<?= js_url('jquery.min.js') ?>"></script>
  <!-- Bootstrap -->
  <script src="<?= js_url('bootstrap.js') ?>"></script>
  <!-- App -->
  <script src="<?= js_url('app.js') ?>"></script> 
  <script src="<?= js_url('slimscroll/jquery.slimscroll.min.js') ?>"></script>
  <script src="<?= js_url('app.plugin.js') ?>"></script>
</body>
</html>