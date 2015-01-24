<div class="large-10 columns">
  <div class="icon-bar five-up">
    <a class="item"><i class="fi-home"></i><label>Home</label></a>
    <a class="item"><i class="fi-bookmark"></i><label>Bookmark</label></a>
    <a class="item"><i class="fi-info"></i><label>Info</label></a>
    <a class="item"><i class="fi-mail"></i><label>Mail</label></a>
    <a class="item"><i class="fi-like"></i><label>Like</label></a>
  </div>
  <div class="large-9 columns main-window" id="new-expense">
    <h2>Add New Expense</h2>
    <br/>
    <form method="post" action="<?php echo($_SERVER['PHP_SELF']); ?>">
      <div class="row">
        <label for="newexpense-head" class="large-6 columns"><strong>Expenditure Head</strong>
          <input type="text" id="newexpense-head" name="head" placeholder="eg. Grocery, School Fees, etc.">
        </label>            
        <label for="newexpense-amount" class="large-5 columns"><strong>Total Value</strong>
          <input type="number" id="newexpense-amount" name="amount" placeholder="Total Amount in Rupees">
        </label>
      </div>
      <div class="row">
        <label for="newexpense-category" class="large-6 columns"><strong>Category</strong>
          <input type="text" id="newexpense-category" name="category" placeholder="eg. Food, Education, etc.">
        </label>
        <div class="large-5 columns" style="padding-top:10px;">
          <label class="hide"><strong>Type of Income</strong></label>
          <a href="#" class="button success split-btn" data-reveal-id="modal-list">
            Attach Items List<span><i class="fi-plus"></i></span>
          </a>
        </div>
      </div>
      <div class="row">
        <div class="large-6 columns">
          <label for="newexpense-comment" class="columns"><strong>Additional Comments</strong></label>
          <textarea name="newexpense-comment" name="comments" rows="4" cols="15" placeholder="Place extra comments about the transaction, if any"></textarea>
        </div>
      </div>
      <div class="row">
        <div class="large-6 columns">
          <label for="newexpense-date"><strong>Date of the transaction </strong><small>Default: Today</small></label>
          <input type="date" name="date" id="newexpense-date"/>
        </div>
        <div class="large-5 large-offset-1 columns">
          <input type="submit" value="Add the Expense" class="button" />
        </div>
      </div>
      <div id="modal-list" class="reveal-modal" data-reveal>
        <h2><?php echo($_SESSION["id"]); ?>, We will get there, soon.</h2>
        <a class="close-reveal-modal">&#215;</a>
      </div>
      <div id="modal-recurrence" class="reveal-modal" data-reveal>
        <h2>We will get there, soon.</h2>
        <a class="close-reveal-modal">&#215;</a>
      </div>
    </form>
  </div>
</div>
<script src="../javascript/autocomplete-expense.js"></script>