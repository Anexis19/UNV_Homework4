<?php
$month = isset($_GET['month']) ? intval($_GET['month']) : date('n');
$year = isset($_GET['year']) ? intval($_GET['year']) : date('Y');

// Ajustar mes/año para la navegación
if ($month < 1) {
    $month = 12;
    $year--;
} elseif ($month > 12) {
    $month = 1;
    $year++;
}

$firstDay = mktime(0, 0, 0, $month, 1, $year);
$daysInMonth = date('t', $firstDay);
$monthName = date('F', $firstDay);
$startDay = date('w', $firstDay);

$prevMonth = $month - 1;
$prevYear = $year;
$nextMonth = $month + 1;
$nextYear = $year;

if ($prevMonth < 1) {
    $prevMonth = 12;
    $prevYear--;
}
if ($nextMonth > 12) {
    $nextMonth = 1;
    $nextYear++;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Calendario PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .today {
            background-color: #198754;
            color: white;
            border-radius: 50%;
        }

        .calendar td {
            height: 80px;
            text-align: center;
            vertical-align: middle;
        }
    </style>
</head>

<body class="bg-light">
    <div class="container py-5">
        <div class="card shadow">
            <div class="card-header d-flex justify-content-between align-items-center">
                <a href="?month=<?= $prevMonth ?>&year=<?= $prevYear ?>" class="btn btn-outline-secondary btn-sm">
                    << </a>
                        <h4 class="mb-0"><?= $monthName . ' ' . $year ?></h4>
                        <a href="?month=<?= $nextMonth ?>&year=<?= $nextYear ?>" class="btn btn-outline-secondary btn-sm">>></a>
            </div>
            <div class="card-body">
                <table class="table table-bordered calendar">
                    <thead class="table-dark">
                        <tr>
                            <th>Sun</th>
                            <th>Mon</th>
                            <th>Tue</th>
                            <th>Wed</th>
                            <th>Thu</th>
                            <th>Fri</th>
                            <th>Sat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $day = 1;
                        $today = date('j');
                        $thisMonth = date('n');
                        $thisYear = date('Y');

                        for ($i = 0; $i < 6; $i++) {
                            echo "<tr>";
                            for ($j = 0; $j < 7; $j++) {
                                if (($i == 0 && $j < $startDay) || ($day > $daysInMonth)) {
                                    echo "<td></td>";
                                } else {
                                    $isToday = ($day == $today && $month == $thisMonth && $year == $thisYear);
                                    echo "<td" . ($isToday ? " class='today'" : "") . ">$day</td>";
                                    $day++;
                                }
                            }
                            echo "</tr>";
                            if ($day > $daysInMonth) break;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>