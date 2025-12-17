<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khmer Date</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: white;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
        }
        .date-card {
            background: white;
            border-radius: 15px;
            padding: 30px 40px;
            text-align: center;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }
        .date-card h1 {
            color: #2c3e50;
            font-size: 1.8rem;
        }
    </style>
</head>
<body>

<?php
date_default_timezone_set("Asia/Bangkok");

$month = date("n");
$day   = date("D");
$year  = date("Y");
$numD  = date("j");

$khmerMonths = [
    1 => 'មករា', 2 => 'កុម្ភៈ', 3 => 'មីនា', 4 => 'មេសា',
    5 => 'ឧសភា', 6 => 'មិថុនា', 7 => 'កក្កដា', 8 => 'សីហា',
    9 => 'កញ្ញា', 10 => 'តុលា', 11 => 'វិច្ឆិកា', 12 => 'ធ្នូ'
];

$khmerDays = [
    "Mon" => "ថ្ងៃចន្ទ៍",
    "Tue" => "ថ្ងៃអង្គារ",
    "Wed" => "ថ្ងៃពុធ",
    "Thu" => "ថ្ងៃព្រហស្បតិ៍",
    "Fri" => "ថ្ងៃសុក្រ",
    "Sat" => "ថ្ងៃសៅរ៍",
    "Sun" => "ថ្ងៃអាទិត្យ"
];

function toKhmerNumber($number){
    $english = ['0','1','2','3','4','5','6','7','8','9'];
    $khmer   = ['០','១','២','៣','៤','៥','៦','៧','៨','៩'];
    return str_replace($english, $khmer, $number);
}
?>

<div class="date-card">
    <h1>
        <?= $khmerDays[$day]; ?>
        ទី <?= toKhmerNumber($numD); ?>
        ខែ <?= $khmerMonths[$month]; ?>
        ឆ្នាំ <?= toKhmerNumber($year); ?>
    </h1>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
