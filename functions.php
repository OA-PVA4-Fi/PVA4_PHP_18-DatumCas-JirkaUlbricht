<?php

function dateLocalized($languageCode) {
    $translations = array(
        'days' => array(
            'Monday'    => 'Pondělí',
            'Tuesday'   => 'Úterý',
            'Wednesday' => 'Středa',
            'Thursday'  => 'Čtvrtek',
            'Friday'    => 'Pátek',
            'Saturday'  => 'Sobota',
            'Sunday'    => 'Neděle',
        ),
        'months' => array(
            'January'   => 'Leden',
            'February'  => 'Únor',
            'March'     => 'Březen',
            'April'     => 'Duben',
            'May'       => 'Květen',
            'June'      => 'Červen',
            'July'      => 'Červenec',
            'August'    => 'Srpen',
            'September' => 'Září',
            'October'   => 'Říjen',
            'November'  => 'Listopad',
            'December'  => 'Prosinec',
        ),
    );

    $timestamp = time();
    $dayName = strftime('%A', $timestamp);
    $monthName = strftime('%B', $timestamp);
    $translatedDay = $translations['days'][$dayName];
    $translatedMonth = $translations['months'][$monthName];
    $localizedDate = $translatedDay . ', ' . strftime('%e', $timestamp) . ' ' . $translatedMonth;
    return $localizedDate;
    }