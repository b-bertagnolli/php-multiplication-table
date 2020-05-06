<?php

$n1 = $_GET;
$n2 = $_GET;

?>
<form method="get">
    <input type="text" name="n1" />
    <input type="text" name="n2" />
    <input type="submit" name="submit" />
</form>

<table style="width 60%">
    <tr>
        <td></td>
        <?php
        if ($n1['n1'] <= $n2['n2']) {
            for ($i = $n1['n1']; $i <= $n2['n2']; $i++){
                print "<th>" . $i . "</th>";
            }
        }
        if ($n2['n2'] <= $n1['n1']) {
            for ($i = $n2['n2']; $i <= $n1['n1']; $i++){
                print "<th>" . $i . "</th>";
            }
        }
        ?>
    </tr>
    <?php
    if ($n1['n1'] <= $n2['n2']) {
        for ($i = $n1['n1']; $i <= $n2['n2']; $i++){
            print "<tr><th>" . $i . "</th>";
                for ($il = $n1['n1']; $il <= $n2['n2']; $il++){
                    print "<td>" . $il * $i . "</td>";
                }
            print "</tr>";
        }
    }
    if ($n2['n2'] <= $n1['n1']) {
        for ($i = $n2['n2']; $i <= $n1['n1']; $i++){
            print "<tr><th>" . $i . "</th>";
            for ($il = $n2['n2']; $il <= $n1['n1']; $il++){
                print "<td>" . $il * $i . "</td>";
            }
            print "</tr>";
        }
    }
    ?>

</table>
