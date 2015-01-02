<form action="sell.php" method="post">
    <fieldset>
        <select class="form-control" name="sold">
            <option value=""> </option>
            <?php
                foreach ($stocks as $stock)
                {
                    print("<option value = " . $stock["symbol"] . "> " . $stock["symbol"] . " </option>");
                }
            ?>
        </select>
        <br/><br/>
        <div class="form-group">
            <input autofocus class="form-control" name="shares" placeholder="Number of shares to sell" type="text"/>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default">Sell Shares</button>
        </div>
    </fieldset>
</form>
