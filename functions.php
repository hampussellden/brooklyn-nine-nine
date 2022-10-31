<?php

declare(strict_types=1);
function getPoints(array $arrays): int
{
    $points = 0;
    foreach ($arrays as $array => $value) {
        if ($value === 'answer1') {
            $points++;
        } else if ($value === 'answer5') {
            $points++;
        } else if ($value === 'answer8') {
            $points++;
        } else if ($value === 'answer12') {
            $points++;
        } else if ($value === 'answer15') {
            $points++;
        } else if ($value === 'answer17') {
            $points++;
        } else if ($value === 'answer19') {
            $points++;
        } else if ($value === 'answer24') {
            $points++;
        } else {
            continue;
        }
    }
    return $points;
}
function evaluation(int $points): string
{
    return match (true) {
        $points == 8 => 'WOW you got all ' . $points . ' questions right! You must be a huge fan of the show!',
        $points > 5 => 'You got ' . $points . ' questions right! maybe we should binge the series again to find out what we missed out on?',
        $points > 3 => 'You scored 2 points, almost got all of them, maybe we should binge the series again to find out what we missed out on?',
        $points > 0 => $points . ' points is not a good result at all... Have you even seen the show?',
        default => 'No correct answers, why are you even here?'
    };
}
