<?php
$students = [
    ["name" => "田中太郎", "score" => 85],
    ["name" => "佐藤花子", "score" => 92],
    ["name" => "鈴木一郎", "score" => 78],
    ["name" => "高橋美咲", "score" => 65],
    ["name" => "伊藤健太", "score" => 58],
];
function getGrade($score)
{
    if ($score >= 90) {
        return "A";
    } elseif ($score >= 80) {
        return "B";
    } elseif ($score >= 70) {
        return "C";
    } elseif ($score >= 60) {
        return "D";
    } else {
        return "F";
    }
}

$pass_count = 0;
$fail_count = 0;
$total_score = 0;

echo "<h2>成績判定システム</h2>";
echo "<h3>【個別成績】</h3>";

foreach ($students as $student) {
    $name = $student["name"];
    $score = $student["score"];
    $grade = getGrade($score);

    if ($score >= 60) {
        $pass_count++;
    } else {
        $fail_count++;
    }
    $total_score += $score;
    echo "{$name}: {$score}点 - 評価{$grade}<br>";
}

$average = $total_score / count($students);

echo "<h3>【統計情報】</h3>";
echo "合格者数: {$pass_count}人<br>";
echo "不合格者数: {$fail_count}人<br>";
echo "平均点: " . number_format($average, 1) . "点<br>";
?>