        <section id="content">
          <section class="vbox">          
            <section class="scrollable wrapper">
              <div class="top-area">
                <div class="row">
                  <div class="col-sm-8">
                    <h1>Create New List</h1>
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
                  <header class="panel-heading font-bold">List Details</header>
                  <div class="panel-body">
                    <form role="form" action="/lists/create" method="POST">
                      <div class="form-group">
                        <label for="listname">List Name</label>
                        <input type="text" class="form-control" name="listname" id="listname">
                      </div>
                      <div class="form-group">
                        <label for="form-phonenumber">Send from Phone Number</label>
                    <?php if (!empty($numbers)) { ?>
                            <select id="form-phonenumber" name="form-phonenumber" class="form-control m-b">
                            <?php foreach ($numbers as $number) { ?>
                              <option value="<?= $number['number'] ?>"><?= friendlyUSAFormat($number['number']) ?></option>
                    <?php   } ?>
                            </select>
                    <?php   } else { ?>
                            <select id="form-phonenumber" name="form-phonenumber" class="form-control m-b" disabled>
                              <option>No Phone Numbers Set up for your account yet</option>
                            </select>
                    <?php   }
                          ?>
                      </div>
                      <hr>
                      <button type="submit" class="btn btn-sm btn-success pull-right">
                        Create List&nbsp;&nbsp;
                        <i class="fa fa-plus-circle"></i>
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
