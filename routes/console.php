<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

// The President publishes the decrees during the working day, so the sync runs
// at the end of the day in the timezone of the site.
Schedule::command('decrees:sync')
    ->timezone('Europe/Kyiv')
    ->dailyAt('23:30')
    ->withoutOverlapping();
