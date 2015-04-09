<script src="js/circle-progress.js"></script>

<?php

    $goal = 2500;
    $count = 1250;
    $countervalue = $count / $goal;

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
    <h2>Progress</h2>
    <p><span class="kcal-from-goal">880 kcal</span> removed from goal</p>
    
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
            gradient: ["#f84f3e", "#e3812f"]
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
