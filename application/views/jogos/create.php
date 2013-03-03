<div class='field'>
    <ul class='starting'>
        <li class='keeper'>
            <select name=keeper">
                <?php var_dump($team_select) ?>
            </select>
        </li>
        <ul class="defender">
          <li class="left">
            <select name="left">
              <?php var_dump($team_select) ?>
            </select>
          </li>
          <li class="centralL">
            <select name="centralL">
              <?php var_dump($team_select) ?>
            </select>
          </li>
          <li class="centralC">
            <select name="centralC">
              <?php var_dump($team_select) ?>
            </select>
          </li>
          <li class="centralD">
            <select name="centralD">
              <?php var_dump($team_select) ?>
            </select>
          </li>
          <li>
            <select name="right">
              <?php var_dump($team_select) ?>
            </select>
          </li>
        </ul>
        <ul class="midfield">
          <li>
            <select name="">
              <?php var_dump($team_select) ?>
            </select>
          </li>
          <li>
            <select name="">
              <?php var_dump($team_select) ?>
            </select>
          </li>
          <li>
            <select name="">
              <?php var_dump($team_select) ?>
            </select>
          </li>
          <li>
            <select name="">
              <?php var_dump($team_select) ?>
            </select>
          </li>
          <li>
            <select name="">
              <?php var_dump($team_select) ?>
            </select>
          </li>
        </ul>
        <ul class="forward">
          <li>
            <select name="">
              <?php var_dump($team_select) ?>
            </select>
          </li>
          <li>
            <select name="">
              <?php var_dump($team_select) ?>
            </select>
          </li>
          <li>
            <select name="">
              <?php var_dump($team_select) ?>
            </select>
          </li>
        </ul>
        <ul class="subs">
          <li class='keeper'>Keeper _
            <label for=""></label>
            <select name="">
              <?php var_dump($team_select) ?>
            </select>
          </li>
          <li class='central'>Central D _
            <label for=""></label>
            <select name="">
              <?php var_dump($team_select) ?>
            </select>
          </li>
          <li class='inner'>Inner M _
            <label for=""></label>
            <select name="">
              <?php var_dump($team_select) ?>
            </select>
          </li>
          <li class='forward'>Forward _
            <label for=""></label>
            <select name="">
              <?php var_dump($team_select) ?>
            </select>
          </li>
          <li class='winger'>Winger _
            <label for=""></label>
            <select name="">
              <?php var_dump($team_select) ?>
            </select>
          </li>
        </ul>
    </ul>
  <div class='clearboth'></div>
  <label for="startingE">
    Set Starting Eleven
  </label>
  <input class="startingE" type="checkbox"/>
  <input class="newT" class="new_team" type="submit" value="Send Team" />
</div>
