<div class="large-10 columns">
  <div class="icon-bar five-up">
    <a class="item"><i class="fi-home"></i><label>Home</label></a>
    <a class="item"><i class="fi-bookmark"></i><label>Bookmark</label></a>
    <a class="item"><i class="fi-info"></i><label>Info</label></a>
    <a class="item"><i class="fi-mail"></i><label>Mail</label></a>
    <a class="item"><i class="fi-like"></i><label>Like</label></a>
  </div>
  <div class="row">
    <div class="large-5 columns">
      <div class="panel panel-yellow">
        <div class="panel-heading">
          <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i>Expenses Split</h3>
        </div>
        <div class="panel-body">
          <div id="donut-split-chart" style="height:370px;"></div>
          <div class="text-right">
          </div>
        </div>
      </div>
    </div>
    <div class="large-5 columns">
      <div class="panel panel-yellow">
        <div class="panel-heading">
          <h3 class="panel-title" id="split-category">Full Split</h3>
        </div>
        <div class="panel-body">
          <div id="donut-category-chart" style="height:370px;"></div>
          <div class="text-right">
          </div>
        </div>
      </div>
    </div>
    <div class="large-2 columns" style="padding-left:10px;">
      <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="get">
        <label><strong>Get Data From:</strong></label>
        <select name="timeobsvered" style="width:250px; margin-bottom:5px;">
          <option value="all">The Beginning of Time</option>
          <option value="week">This Week</option>
          <option value="month">This Month</option>
          <option value="year">This Year</option>
        </select>
        <a href="#">Use Refined Search</a>
        <label class="hide"><strong>Search</strong></label>
	    <input type="submit" value="Search" class="button success" style="width:100%; margin-top:20px;" />
        </div>
      </form>
    </div>
  </div>
</div>
<script src="../javascript/graphs.js"></script>