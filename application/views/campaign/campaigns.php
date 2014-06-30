<section id="content">
  <section class="vbox">          
    <section class="scrollable wrapper">
      <div class="top-area">
        <div class="row">
          <div class="col-sm-8">
            <h1>Campaigns</h1>
          </div>
          <div class="col-sm-4 adjust-btn-top-flush">
            <a class="btn btn-success btn-lrg pull-right" href="/campaign/create">Create New Campaign</a>
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
          foreach ($campaigns as $campaign) {
        ?>
        <div class="row list-item">
          <div class="col-md-4">
            <h3 class="green-title"><a href="/campaign/<?= $campaign['id'] ?>"><?= $campaign['camp_title'] ?></a></h3>
            <?php $timestamp = strtotime($campaign['camp_sent']);
            if ($timestamp < 2114380799) {
      ?>        <p class="hidden-xs hidden-sm">Sent on <?= date("F jS, Y @ g:ia", $timestamp) ?></p>
<?php       } else { ?>
                <p class="hidden-xs hidden-sm">Not sent yet</p>
<?php       } ?>
          </div>
          <div class="col-md-2 col-xs-6">
            <h3 class="subscriber-number"><strong><?= $campaign['r_count'] ?></strong></h3>
            <p class="hidden-xs hidden-sm">Recipients</p>
            
          </div>

          <div class="col-md-3 col-xs-12" id="msg-preview<?= $campaign['id'] ?>">
            <p class="pre-text">Message: <?= $campaign['camp_text'] ?></p>
          </div>
          
          <div class="col-md-3 col-xs-6" data-toggle="shift:insertBefore" data-target="#msg-preview<?= $campaign['id'] ?>">
            <div class="pull-right">
              <div class="btn-group more-btn-top">
                <button class="btn btn-default dropdown-toggle more-btn" data-toggle="dropdown">
                  Actions <span class="caret"></span>
                </button>
                <ul class="dropdown-menu more-dropdown-menu">
                  <li><a href="/campaign/<?= $campaign['id'] ?>">View Full Details</a></li>
                  <li><a href="#">Stats (coming soon)</a></li>
                  <li><a href="#">Duplicate Campaign</a></li>
                <?php if ($timestamp == 2114380799) { ?>
                  <li class="divider"></li>
                  <li><a href="#">Send Campaign Now</a></li> <?php
                } ?>
                </ul>
              </div>
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