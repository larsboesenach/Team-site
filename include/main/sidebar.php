<div id="change">

 <?php

if(isset($_POST['add_week'])){
     $last_week_ts = strtotime($_POST['last_week']);
     $display_week_ts = $last_week_ts + (3600 * 24 * 7);
} else if (isset($_POST['back_week'])) {
     $last_week_ts = strtotime($_POST['last_week']);
     $display_week_ts = $last_week_ts - (3600 * 24 * 7);
} else {
    $dagvandeweek = (date("w") - 1) *  (3600*24);
    $roundedtime =  floor(time() / (3600 * 24)) * 3600 * 24;
    $display_week_ts = $roundedtime - $dagvandeweek;
}
//problem with wintertijd/zomertijd
if (($display_week_ts - 1445810400) === 0){
    $display_week_ts = $display_week_ts + 3600;

}
if (($display_week_ts - 1427670000) === 0){
    $display_week_ts = $display_week_ts - 3600;
}

$week_start = date('d-m-Y', $display_week_ts);
    ?>
    <div class="Sidebar-log-wrap">
        <div class="Sidebar-log">
            <div class="Week-wrap">
                
                <div class="Week-count">
                    <div class="week-count-rel">
                        <input id="back_week" class="navigator left" type="submit" name="back_week" value="<" />
                        <input id="last_week" type="hidden" name="last_week" value="<? echo $week_start; ?>" />

                        <h2>Week <?php echo date('W', $display_week_ts); ?></h2>
                        <p>your goal</p>
                        
                        <input id="add_week" class="navigator right" type="submit" name="add_week" value=">" />
                    </div>
                </div>

    <div class="Week-output">
            <div class="Indicators">
                <table>
                    <tr>
                        <td class="dayCount"><p>Day</p></td>
                        <td class="day"><p></p></td>
                        <td class="exercise"><p>Exercise</p></td>
                        <td class="kcal"><p>Kcal</p></td>
                    </tr>
                </table>
            </div>
                        <div class="Week-content">
                  <table>
<?php

for ($i = 0; $i < 7; $i++) {
    $current_day_ts = $display_week_ts + ($i * 3600 *24);

        if (date("Ymd", $current_day_ts) < date("Ymd")) {
    echo '<tr class="log_hyperlink" logtime="'. $current_day_ts . '">';
} elseif (date("Ymd", $current_day_ts) > date("Ymd")) {
    echo "<tr>";
}
if (date("Ymd", $current_day_ts) == date("Ymd")) {
    echo '<tr class="log_hyperlink" logtime="'. $current_day_ts . '">';
}
  
    echo '<td class="dayCount"><p>' . 
            date('d', $current_day_ts) . 
            '</p></td><td class="day"><p>' . 
            date('l', $current_day_ts) . '</p></td><td class="exercise"><p>0</p></td> <td class="kcal"><p>' . totalcalories($current_day_ts, $_SESSION['userid']). "</p></td>";
    echo "</tr>";

}
?>
                  </table>
                </div><!-- Week-content -->
            </div><!-- Week-output -->
            </div><!-- Week-wrap -->
        </div><!-- Sidebar-log -->
    </div><!-- Sidebar-log-wrap -->
</div>