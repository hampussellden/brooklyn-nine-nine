<?php
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
        } else {
            continue;
        }
    }
    return $points;
}
function evaluation(int $points): string
{
    switch ($points) {
        case 3:
            return 'WOW you got all questions right! You must be a huge fan of the show!';
            break;
        case 2:
            return 'You scored 2 points, almost got all of them, maybe we should binge the series again to find out what we missed out on?';
            break;
        case 1:
            return 'Only 1 point, was that good guess or is your knowledge of the show just bad.';
            break;
        default:
            return 'No correct answers, are you even a fan of the show?';
            break;
    }
}
