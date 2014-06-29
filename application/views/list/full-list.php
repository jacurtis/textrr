<section id="content">
  <section class="vbox">          
    <section class="scrollable wrapper">
      <div class="top-area">
        <div class="row">
          <div class="col-sm-8">
            <h1><?= $list['list_name'] ?></h1>
          </div>
          <div class="col-sm-4 adjust-btn-top-flush">
            <a class="btn btn-success btn-lrg pull-right" href="/list/add/<?= $list['id'] ?>">Add New Subscriber</a>
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
        <header class="panel-heading">
          Full Details
        </header>
        <div class="row wrapper">
          <div class="col-sm-5 m-b-xs">
            <select class="input-sm form-control input-s-sm inline v-middle">
              <option value="0">Bulk action</option>
              <option value="1">Delete selected</option>
              <option value="2">Bulk edit</option>
              <option value="3">Export</option>
            </select>
            <button class="btn btn-sm btn-default">Apply</button>                
          </div>
          <!-- <div class="col-sm-4 m-b-xs">
            <div class="btn-group" data-toggle="buttons">
              <label class="btn btn-sm btn-default active">
                <input type="radio" name="options" id="option1"> Day
              </label>
              <label class="btn btn-sm btn-default">
                <input type="radio" name="options" id="option2"> Week
              </label>
              <label class="btn btn-sm btn-default">
                <input type="radio" name="options" id="option2"> Month
              </label>
            </div>
          </div> -->
          <div class="col-sm-3 col-sm-offset-4">
            <div class="input-group">
              <input type="text" class="input-sm form-control" placeholder="Search">
              <span class="input-group-btn">
                <button class="btn btn-sm btn-default" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table table-striped b-t b-light">
            <thead>
              <tr>
                <th width="20"><input type="checkbox"></th>
                <th width="40%" class="th-sortable" data-toggle="class">Number
                  <!-- <span class="th-sort">
                    <i class="fa fa-sort-down text"></i>
                    <i class="fa fa-sort-up text-active"></i>
                    <i class="fa fa-sort"></i>
                  </span> -->
                </th>
                <th width="30%">Name</th>
                <th width="20%">Date Added</th>
                <!-- <th width="30"></th> -->
              </tr>
            </thead>
            <tbody>
            <?php foreach ($numbers as $number) { 
              $time = strtotime($number['date_added']);
              $pretty_time = date("m/d/y  @  g:ia", $time);
            ?>
              <tr>
                <td><input type="checkbox" name="post[]" value="2"></td>
                <td><?= friendlyUSAFormat($number['phone_number']) ?></td>
                <td><?= $number['first_name']." ".$number['last_name'] ?></td>
                <td><?= $pretty_time ?></td>
                <!-- <td>
                  <a href="#" class="active" data-toggle="class"><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>
                </td> -->
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
        <footer class="panel-footer">
          <div class="row">
            <div class="col-sm-4 hidden-xs">
              <select class="input-sm form-control input-s-sm inline v-middle">
                <option value="0">Bulk action</option>
                <option value="1">Delete selected</option>
                <option value="2">Bulk edit</option>
                <option value="3">Export</option>
              </select>
              <button class="btn btn-sm btn-default">Apply</button>                  
            </div>
            <div class="col-sm-4 text-center">
              <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
            </div>
            <div class="col-sm-4 text-right text-center-xs">                
              <ul class="pagination pagination-sm m-t-none m-b-none">
                <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                <li><a href="#">1</a></li>
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
  </section>
  <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a>
</section>