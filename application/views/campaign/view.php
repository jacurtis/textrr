<section id="content">
  <section class="vbox">          
    <section class="scrollable wrapper">
      <div class="top-area">
        <div class="row">
          <div class="col-sm-8">
            <h1><?= $campaign['camp_title'] . " id = " . $campaign['users_id'] . "/ " . $userid ?></h1>
          </div>
          <?php if ($campaign['camp_was_sent'] == 0) {?>
          <div class="col-sm-4 adjust-btn-top-flush">
            <div class="row">
              <div class="col-md-12">
                <a class="btn btn-success btn-lrg pull-right" href="/campaign/semd/<?= $campaign['id'] ?>">Send Campaign Now</a>
              </div>
            </div>
          </div> <?php } ?>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <hr>
          </div>
        </div>

      <section>
        <div class="row">
          <div class="col-md-4">
            <label>Message: </label>
            <p class="pre-text"><?= $campaign['camp_text'] ?></p>
          </div>
          <div class="col-md-3 text-right">
            <h3 class="subscriber-number"><strong>
            <?php if ($campaign['camp_was_sent'] == 1) {
              echo $campaign['r_count'];
            } else {
              echo $campaign['list_count'];
            }?></strong></h3>
            <p class="hidden-xs hidden-sm">Recipients</p>
          </div>
          <div class="col-md-5 text-right">
            <h3 class="subscriber-number"><strong><?= $campaign['list_name'] ?></strong></h3>
            <p>Send To List</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <hr>
          </div>
        </div>

        <div class="row">
        <?php if ($campaign['camp_was_sent'] == 0) {?>       
          <div class="col-md-6">
            <a href="/campaign/delete/<?= $campaign['id'] ?>" class="btn btn-danger btn-sm" id="campaign-delete-btn">Delete</a>
            <a href="/campaign/edit/<?= $campaign['id'] ?>" class="btn btn-default btn-sm" id="campaign-edit-btn">Edit</a>
          </div> <?php } ?>
          <div class="col-md-6 <?= ($campaign['camp_was_sent'] == 1 ? 'col-md-offset-6' : '') ?>">
            <div class="scheduled-time pull-right">
            <?php
              $time = strtotime($campaign['camp_sent']);
              $pretty_time = date("M dS, Y  @  g:ia", $time);
            if ($campaign['camp_was_sent'] == 1) {
              echo '<p>Successfully Sent On <span>' . $pretty_time . '</span></p>';
            } else {
              echo "<p>Scheduled to Send on " . $pretty_time . '</span></p>';
            }?>
            </div>
          </div>
        </div>
      </section>
      </div> <!-- end of .top area -->
    </section> <!-- end of scrollable wrapper -->
  <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a>
</section>