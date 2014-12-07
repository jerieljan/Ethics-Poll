<?php function ask($action, $number, $captions)
{ ?>

    <table>
        <tr>
            <td colspan="12" style="font-style:italic; text-align:center">
                Action: <?php echo $action; ?> </td>
        </tr>
        <tr>
            <th colspan="12"><?php echo $captions['question']; ?></th>
        </tr>

        <tr>
            <td style="text-align:right;width:33%"><?php echo $captions['least']; ?></td>
            <?php for ($j = 1; $j <= 10; $j++) { ?>
                <td class="tick"><input type="radio" name="<?php echo "q" . ($number + 1) . "_"
                        . $captions['type']; ?>" value=<?php echo $j ?> <?php if ($j == 5) {
                        echo "CHECKED";
                    } ?>/></td>
            <?php } ?>
            <td style="text-align:left;width:33%"><?php echo $captions['greatest']; ?></td>
        </tr>
        <tr>
            <td></td>
            <?php for ($j = 1; $j <= 10; $j++) { ?>
                <td class="tick"><?php echo $j ?></td>
            <?php } ?>
            <td></td>
        </tr>
    </table>
<?php } ?>

<?php function askPersonalInfo()
{ ?>
    <div id="personalinfo">
        <h2>Personal Information</h2>
        <ol>
            <li>What is your name? <br/><input type="textbox" name="name"/></li>
            <li>What is your gender? <br/><input type="radio" name="gender" value="M">Male</input>
                <input type="radio" name="gender" value="F">Female</input></li>
            <li>What is your age?<br/><input type="textbox" name="age"/></li>
            <li>What is your email address? <br/><input type="textbox" name="email"/></li>
        </ol>
    </div>
<?php } ?>

