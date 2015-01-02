<form action="cash.php" method="post">
    <fieldset>
        <select class="form-control" name="type">
            <option value="add"> ADD MONEY </option>
            <option value="subtract"> TAKE AWAY </option>
        </select>
        <br/><br/>
        <div class="form-group">
            <input autofocus class="form-control" name="money" placeholder="Amount" type="text"/>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default">Complete Transaction</button>
        </div>
    </fieldset>
</form>
