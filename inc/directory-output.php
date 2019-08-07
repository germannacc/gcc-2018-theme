<?php

echo '<div class="medium-6 columns">';

echo '<div class="callout primary small employee-profile" data-equalizer-watch>';
echo '<h2>'. $employees->employee_info->displayName. '</h2>';

echo '<div class="row profile-container">';

echo '<div class="medium-3 columns">';
echo '<img src="'. $employees->employee_info->picturePath.'" height="300" width="300"  />';
echo '</div>';

echo '<div class="medium-9 columns">';
echo '<h3>' . $employees->employee_info->title . '</h3>';
echo '<p class="position-info">' . $employees->employee_info->department . '</p>';

echo '<h4>';

_e('Contact information', 'gcc-wp-2018');

echo '</h4>';

echo '<p class="contact-info">' . $employees->employee_info->locationCampus . '<br/>';

echo '<a href="mailto:'. $employees->employee_info->email.'">' . $employees->employee_info->email. '</a><br/><span class="phone">' . $employees->employee_info->phone . '</p>';

echo '</div>';
echo '</div>';
echo '</div>';

echo '</div>';