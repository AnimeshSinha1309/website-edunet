<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Expense Manager</title>
    <link href="../libraries/foundation/css/foundation.css" rel="stylesheet" type="text/css" />
    <link href="../images/favicon.ico" rel="icon" />
</head>
<style>
	body{background-color:#DDD;}
	.button.large{width:100%; margin-bottom:0; padding-top:50px; padding-bottom:40px;}
	.columns{padding:0;}
	.icon-bar.five-up{padding-bottom:11px; padding-top:10px; padding-right:20px; padding-left:20px;}
	.main-window{padding-left:20px; padding-right:40px;}
</style>
<body class="container-fluid">
  <nav class="top-bar" data-topbar role="navigation">
    <ul class="title-area">
      <li class="name">
        <h1><a href="#">Expense Monitor</a></h1>
      </li>
    </ul>
    <section class="top-bar-section">
      <ul class="right">
        <li><a href="#">Edunet</a></li>
      </ul>
    </section>
  </nav>
  <div>
    <div class="large-10 columns">
      <div class="icon-bar five-up">
        <a class="item"><img src="../images/assets-general/fi-home.svg" ><label>Home</label></a>
        <a class="item"><img src="../images/assets-general/fi-bookmark.svg" ><label>Bookmark</label></a>
        <a class="item"><img src="../images/assets-general/fi-info.svg" ><label>Info</label></a>
        <a class="item"><img src="../images/assets-general/fi-mail.svg" ><label>Mail</label></a>
        <a class="item"><img src="../images/assets-general/fi-like.svg" ><label>Like</label></a>
      </div>
	  <div class="large-3 columns">
    	<a href="#" class="button disabled success large">Present Balance</a>
    	<a href="#" class="button disabled alert large">Upcoming Expenditure</a>
    	<a href="#" class="button disabled large">Upcoming Income</a>
    	<a href="#" class="button disabled warning large">Planner Targets</a>
      </div>
      <div class="large-9 columns main-window" id="new-income">
      	<h2>Add New Income</h2>
        <br/>
        <form method="post" action="expense-monitor.php">
          <div class="row">
            <label for="new-income--name" class="large-11"> <strong>Name of the Income</strong>
              <input type="text" id="new-income--name" placeholder="Name or Heading">
            </label>
          </div>
          <div class="row">
            <label for="new-income--amount" class="large-5 columns"> <strong>Total Value</strong>
              <input type="text" id="new-income--amount" placeholder="Total Amount in Rupees">
            </label>
            <div class="large-6 columns">
              <label><strong>Type of Income</strong></label>
              <input type="radio" name="recurrence" value="recur" id="new-income--type-recur">
              <label for="new-income--type-recur">Recurring</label>
              <input type="radio" name="recurrence" value="once" id="new-income--type-once">
              <label for="new-income--type-once">One Time</label>
            </div>
          </div>
          <div class="row">
            <br/>
            <input type="submit" value="Add the Income" class="button" />
          </div>
        </form>
      </div>
    </div>
	<div class="large-2 columns">
    	<a href="#" class="button large">Add Income</a>
    	<a href="#" class="button secondary large">Add Expense</a>
    	<a href="#" class="button alert large">View Graphs</a>
    	<a href="#" class="button warning large">New Item</a>
    	<a href="#" class="button success large">New Item</a>
    </div>
  </div>
</body>
</html>