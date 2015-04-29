<?php

$logtime = gettime();
    $totalintake = 0;

?>
          <div class="Content-Logo">
            <img src="img/CC_grey.svg">
            <h2 class="log-title">your entries</h2>
            <p class="log-subtitle"><?php echo $logtime['formatteddate']; ?></p>
          </div>
          <div class="Entry-contents">
          <h2 class="Entry-intake">Intake</h2>

        <div class="Entry-entries">
          <table class="intake">
            <tr>
              <td><p>Amount</p></td>
              <td><p>Product name</p></td>
              <td><p>Kilo Calories (KCAL)</p></td>
            </tr>
<?php $dataq = query_logread($logtime['utctimestamp'], $_SESSION['userid']); 
  $totalintake1 = 0;
  if(mysqli_num_rows($dataq) == 0){    echo '<p class="no-records"> No records of today.</p>';
  } else { ?>
              <table class="intake">
            <tr>
              <td><p>Amount</p></td>
              <td><p>Product name</p></td>
              <td><p>Kilo Calories (KCAL)</p></td>
            </tr> <?php
   while ($logdata = mysqli_fetch_assoc($dataq)){
         echo "<tr><td><p>" . $logdata["amount"] . "x</p></td><td><p>";
         echo $logdata["name"] . "</p></td><td><p>" . $logdata["calories"] . " kcal";
         $totalcalories =  ($logdata["calories"] *  $logdata["amount"]);
         echo "</p></td></tr>";

    }; ?> </table> <?php

//echo "<br>total intake today is: " .  totalcalories($logtime['utctimestamp'], $_SESSION['userid']);
  }
  
?>
</table>

  </div><!-- Entry-entries -->
  <!-- button -->
  <form class="log_add" timestamp="<?php echo time(); ?>" method="post">

<div class="Add-Button" id="Add-Button">
    <div class="pos-relative">
        <p>+</p>
        
        <span></span>
        
        <input type="submit" class="submit">
    </div>
</div>

  <div class="Entry-make-new-entry">
          <p>Make a new entry</p>
        </div>

        <div class="Entry-input-form">
          <div class="Make-entry-content">     

            <div class="text-center">
            <div class="radio">
                  <input id="intake" type="radio" name="IntOrEx" value="intake" checked>
                <label for="intake"><span>Intake</span></label>
                
                <input id="exercise" type="radio" name="IntOrEx" value="exercise">
                <label for="exercise"><span>Exercise</span></label>
                </div>
         </div>

            <table>             
              <tr class="intake-field show Uppercase">
                <td><p>amount</p></td>
                <td><p>prod. name</p></td>
                <td><p>calories</p></td>
              </tr>

              <tr class="intake-field show">
                <td class="amount"><input id="amount" type="text" name="amount" placeholder="2"></td>
                <td class="prodname">  <input id="name" type="text" name="name" placeholder="banaan"></td>
                <td class="calories"><input id="calories" type="text" name="calories" placeholder="76"></td>
              </tr>

                <tr class="exercise-field hidden">
                <td><p> coming soon </p></td>
                </tr>
            </table>
</form>

          </div>
        </div>
