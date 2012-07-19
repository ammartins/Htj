<div id='field'>
    <ul id='starting'>
        <li class='keeper'>
            <select name=keeper">
                <?php var_dump($team_select) ?>
            </select>
        </li>
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
        <li class="right">
            <select name="right">
                <?php var_dump($team_select) ?>
            </select>
        </li>
        <li>Left Winger
            <select name="">
                <?php var_dump($team_select) ?>
            </select>
        </li>
        <li>Inner M
            <select name="">
                <?php var_dump($team_select) ?>
            </select>
        </li>
        <li>Inner M
            <select name="">
                <?php var_dump($team_select) ?>
            </select>
        </li>
        <li>Inner M
            <select name="">
                <?php var_dump($team_select) ?>
            </select>
        </li>
        <li>Right Winger
            <select name="">
                <?php var_dump($team_select) ?>
            </select>
        </li>
        <li>Forward
            <select name="">
                <?php var_dump($team_select) ?>
            </select>
        </li>
        <li>Forward
            <select name="">
                <?php var_dump($team_select) ?>
            </select>
        </li>
        <li>Forward
            <select name="">
                <?php var_dump($team_select) ?>
            </select>
        </li>
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
  <input id="startingE" type="checkbox"/>

  <input id="newT" class="new_team" type="submit" value="Send Team" />
</div>
