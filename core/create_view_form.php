<?php 

$string = " 

<h2 style=\"margin-top:0px\">".ucfirst($table_name)." <?php echo \$button ?></h2>
    <form action=\"<?php echo \$action; ?>\" method=\"post\">
    <table class='table'>";
        foreach ($non_pk as $row) {
            if ($row["data_type"] == 'text')
            {
            $string .= "
                <tr>
                    <td>".label($row["column_name"])." <?php echo form_error('".$row["column_name"]."') ?></td>
                    <td><textarea class=\"form-control\" rows=\"3\" name=\"".$row["column_name"]."\" id=\"".$row["column_name"]."\" placeholder=\"".label($row["column_name"])."\"><?php echo $".$row["column_name"]."; ?></textarea></td>
                </tr>";
            } else
            {
            $string .= "
                <tr>
                    <td>".label($row["column_name"])." <?php echo form_error('".$row["column_name"]."') ?></td>
                    <td><input type=\"text\" class=\"form-control\" name=\"".$row["column_name"]."\" id=\"".$row["column_name"]."\" placeholder=\"".label($row["column_name"])."\" value=\"<?php echo $".$row["column_name"]."; ?>\" /></td>
                </tr>";
            }

        }
    echo "</table>";
    $string .= "</table>";
$string .= "\n\t    <input type=\"hidden\" name=\"".$pk."\" value=\"<?php echo $".$pk."; ?>\" /> ";
$string .= "\n\t    <button type=\"submit\" class=\"btn btn-primary\"><?php echo \$button ?></button> ";
$string .= "\n\t    <a href=\"<?php echo site_url('".$c_url."') ?>\" class=\"btn btn-default\">Cancel</a>";
$string .= "\n\t</form>";

$hasil_view_form = createFile($string, $target."views/" . $c_url . "/" . $v_form_file);

?>