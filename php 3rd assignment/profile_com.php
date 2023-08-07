<?php
// Calculate Profile Completion Percentage
$total_fields = 5; // Change this based on the total number of profile fields
$filled_fields = 0;

if (!empty($profile_data['name'])) $filled_fields++;
if (!empty($profile_data['email'])) $filled_fields++;
// Add other profile fields here

$completion_percentage = ($filled_fields / $total_fields) * 100;
$completion_percentage = round($completion_percentage);
?>
