<?php
	require_once("../includes/config.php");
	if($_SERVER['REQUEST_METHOD'] === "POST")
	{
		// request handler code here
	}
	else
	{
		require("../templates/header.php");
		if(!isset($_GET["timeobsvered"]))
		{
			$rows = query("SELECT `head`, `category`, `amount` FROM expensemanager WHERE `userid` = ?", $_SESSION["id"]);
		}
		else if($_GET["timeobsvered"] === "all")
		{
			$rows = query("SELECT `head`, `category`, `amount` FROM expensemanager WHERE `userid` = ?", $_SESSION["id"]);
		}
		else if($_GET["timeobsvered"] === "week")
		{
			$rows = query("SELECT `head`, `category`, `amount` FROM expensemanager WHERE `userid` = ? AND `date` BETWEEN ? AND ?", $_SESSION["id"], date("Y-m-d", strtotime(date("Y-m-d") . "-7 days")), date("Y-m-d"));
		}
		else if($_GET["timeobsvered"] === "month")
		{
			$rows = query("SELECT `head`, `category`, `amount` FROM expensemanager WHERE `userid` = ? AND `date` BETWEEN ? AND ?", $_SESSION["id"], date("Y-m-d", strtotime(date("Y-m-d") . "-1 month")), date("Y-m-d"));
		}
		else if($_GET["timeobsvered"] === "year")
		{
			$rows = query("SELECT `head`, `category`, `amount` FROM expensemanager WHERE `userid` = ? AND `date` BETWEEN ? AND ?", $_SESSION["id"], date("Y-m-d", strtotime(date("Y-m-d") . "-1 year")), date("Y-m-d"));
		}
		$listing = array();
		foreach($rows as $row)
		{
			if(!isset($listing[$row["category"]])) $listing[$row["category"]] = intval(0);
			$listing[$row["category"]] += intval($row["amount"]);
		}
		echo("<script>");
		echo("list = ".json_encode($listing).";\n");
		echo("query = ".json_encode($rows));
		echo("</script>");
		require("../templates/analyze-graphs.php");
		require("../templates/footer.php");
	}
?>
