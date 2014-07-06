<section id="content">
  <section class="vbox">          
    <section class="scrollable wrapper">
      <div class="top-area">
        <div class="row">
          <div class="col-sm-8">
            <h1>Create New Campaign</h1>
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
          <header class="panel-heading font-bold">Campaign Details</header>
          <div class="panel-body">
            <form role="form" action="/campaign/create" method="POST" class="parsley-validate">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="form-campaign-title">Campaign Title</label>
                    <input type="text" required data-parsley-range="[5,80]" class="form-control" name="form-campaign-title" id="form-campaign-title">
                  </div>
                  <div class="form-group">
                    <label for="form-list-selection">Send from List</label>
                              <?php if (!empty($lists)) { ?>
                        <select required id="form-list-selection" name="form-list-selection" class="form-control m-b">
                        <?php foreach ($lists as $list) { ?>
                          <option value="<?= $list['id'] ?>"><?= $list['list_name'] ?></option>
                              <?php   } ?>
                        </select>
                              <?php   } else { ?>
                        <select id="form-list-selection" name="form-list-selection" class="form-control m-b" disabled>
                          <option value="">No Lists Set up for your account yet</option>
                        </select>
                              <?php   }
                      ?>
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="form-campaign-message">Text Message:</label>
                  <textarea placeholder="Type your text message here (160 Characters Max)" required data-parsley-range="[2,160]" rows="4" class="form-control text-msg-preview" name="form-campaign-message" id="form-campaign-message"></textarea>
                  <div class="char-count"><span>0</span> Characters</div>
                </div>
              </div>
              <hr>
              <button type="submit" id="btn-create-campaign" class="btn btn-sm btn-success pull-right">
                Create Campaign&nbsp;&nbsp;
                <i class="fa fa-plus-circle"></i>
                 </button>
              <a href="/campaigns" class="btn btn-sm btn-danger">Cancel</a>
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
