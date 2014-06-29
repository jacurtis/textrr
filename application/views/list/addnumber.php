<section id="content">
  <section class="vbox">          
    <section class="scrollable wrapper">
      <div class="top-area">
        <div class="row">
          <div class="col-sm-8">
            <h1>Add New Phone Number</h1>
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
          <header class="panel-heading font-bold">Add Number</header>
          <div class="panel-body">
            <form role="form" action="/list/add/<?= $list['id'] ?>" method="POST" id="add-number-to-list-form">
              <div class="row">
                <div class="col-md-12">
                  <div class="message-area"></div>
                  <div class="form-group">
                    <label for="addNumber">Phone Number*</label>
                    <input type="text" class="form-control phone-mask" name="addNumber" id="addNumber">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form-firstname">First Name</label>
                    <input type="text" class="form-control" name="first_name" id="form-firstname">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form-lastname">Last Name</label>
                    <input type="text" class="form-control" name="last_name" id="form-lastname">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6 col-sm-offset-6">
                  <div class="checkbox">
                    <label class="checkbox-custom">
                      <input type="checkbox" name="phone-number-consent" id="phone-number-consent">
                      <i class="fa fa-fw fa-square-o"></i> I have permission to add this number to my list
                    </label>
                  </div>
                </div>
              </div>
              <hr>
              <button type="submit" class="btn btn-sm btn-success pull-right">
                Add Number&nbsp;&nbsp;
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
