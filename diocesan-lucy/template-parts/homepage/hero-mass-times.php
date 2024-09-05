<?php

/**
 * Partial for the hero section: Mass Times
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package patrick
 */

$mass_times = get_field("mass_times_days", "options"); //get mass times from theme settings
$today = new DateTime("today"); //get a DateTime object of today

$today_index = $today->format("w"); //get today's number of day in the week

$i = 0; //set an index
foreach ($mass_times as $day) :

    $dt = new DateTime($day["day"]); //get a dateTime object for each day of the mass time schedule
    $dti = $dt->format("w"); //get the day's number in the week

    if ($dti >= $today_index) break; //if day is later than or equal to today, break the loop

    $i++; //increase index

endforeach;

$schedule[] = $mass_times[$i]; //get next mass time on the schedule
$schedule[] = $mass_times[$i + 1] ?  $mass_times[$i + 1] : $mass_times[0]; //get the mass time after the next one on the schedule

?>

<?php if ($mass_times) : ?>

<div class="hero-mass-times">

    <h3>Mass Times</h3>

    <?php foreach ($schedule as $day) :

            if (strtolower($day["day"]) === strtolower($today->format("l"))) :
                //if next mass time is today set the header to today
                $day_name = "Today";
            else :
                //otherwise get the three letter representation of the day
                $day_name = new DateTime($day["day"]);
                $day_name = $day_name->format("D");
            endif;

            $times = $day["mass_times_times"];

            get_template_part("template-parts/homepage/hero", "mass-time", array("times" => $times, "day" => $day_name));

        endforeach; ?>
    <div class="mass-times-schedule-link">
        <?php echo acfLink(get_field("mass_times_link")["url"], "the-button", get_field("mass_times_link")["title"]); ?>
    </div>
</div>

<?php endif; ?>