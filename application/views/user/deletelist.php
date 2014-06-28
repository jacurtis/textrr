        <section id="content">
          <section class="vbox">          
            <section class="scrollable wrapper">
              <div class="top-area">
                <div class="row">
                  <div class="col-sm-8">
                    <h1>Delete List</h1>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12">
                    <hr>
                  </div>
                </div>

                <!-- 
                The rows of lists -->
                <section class="panel panel-default">
                  <div class="panel-body">
                    <h3>Delete <strong class="green-title"><?= $list['list_name'] ?></strong>?</h3>
                    <h4>There is no way to recover a deleted list. If you are sure that you want to delete the list please confirm below. Otherwise you may select the red 'Cancel' button below to go back</h4>
                    <hr>
                    <form role="form" action="/lists/delete/<?= $list['id'] ?>" method="POST">
                      <div class="form-group">
                        <label for="deletelist">Confirm Deletion</label>
                        <input type="text" class="form-control" name="deletelist" id="deletelist" placeholder="Type DELETE in all CAPS to confirm">
                      </div>
                      <hr>
                      <button type="submit" class="btn btn-sm pull-right" id="confirm-delete-btn" disabled>
                        Confirm&nbsp;&nbsp;
                        <i class="fa fa-check-circle"></i>
                         </button>
                      <a href="/lists" class="btn btn-sm btn-danger">Cancel</a>
                    </form>
                  </div>
                </section>
                <div class="row">
                  <div class="col-xs-12"><hr></div>
                </div>

              </div>
            </section>
          </section>
          <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a>
        </section>
