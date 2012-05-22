<h2>Create a news item</h2>
<?php echo form_open('jogadores/create') ?>
  <label for="id">Player ID</label> 
  <input type="input" name="id" /><br />
  <label for="name">Player Name</label>
  <textarea name="name"></textarea><br />
  <label for="date">Date Joined</label>
  <textarea name="date"></textarea><br />
  <label for="description">Info</label>
  <textarea name="description"></textarea><br />
  <input type="submit" name="submit" value="Create news item" /> 
</form>
