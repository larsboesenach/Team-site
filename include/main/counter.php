<script src="js/circle-progress.js"></script>

<?php
$logtime = gettime();
    $goal = 2500;
    $count = totalcalories($logtime['utctimestamp'], $_SESSION['userid']);
    $countervalue = $count / $goal;
$distance = $goal - $count; 
$negative_distance = $distance - $distance - $distance;
if ($distance < 0) {
    $subline = '<span class="kcal-from-goal">' . $negative_distance . 'kcal</span> over your goal';
}elseif ($distance == 0) {
    $subline = 'you have reached your goal';
}else {
    $subline = '<span class="kcal-from-goal">' . $distance . 'kcal</span> away from your goal';
}
?>

<div class="Circle-aligncenter">
    <div id="circle">
        <div class="Circle-goal top">
            <p class="text"></p>
        </div>
    
        <div class="Circle-goal hr">
            <div class="hr--"></div>
        </div>

        <div class="Circle-goal bottom">
            <p><?php echo $goal; ?></p>
        </div>
    </div>
</div>

<div class="Circle-progress-text">
    <h2>Today's progress</h2>
    <p><?php echo $subline; ?></p>
</div>



<script>
    <?php
        if (isset($goal) && isset($count)) { ?>
    $('#circle').circleProgress({
        value: <?php echo $countervalue ?>,
        size: 180,
        startAngle: -Math.PI *0.5,
        thickness: 20,
        lineCap: 'round',
        <?php if ($countervalue > 1) { ?>
        value: <?php echo $countervalue - 1; ?>,
        fill: {
            gradient: ["#FC3845", "#FF7D27"]
        },
        emptyFill: 'rgba(63, 251, 104, 1)',
       <?php }else{ ?>
        value: <?php echo $countervalue ?>,
        fill: {
            gradient: ["#3ffb68", "#5ce0af"]
        }
        <?php };  ?>
    }).on('circle-animation-progress', function(event, progress, stepValue) {
    $(this).find('.text').html(parseInt(<?php echo $count; ?> * progress) + '<i>kcal</i>'); <?php }; ?>
});


</script>
