<!DOCTYPE html>
<html lang="ja
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>成績判定プログラム</title>
</head>
<body>

<?php
// ページタイトル表示
echo "<h1>成績判定システム</h1>";

// 学生データの定義
$students = [
    ["name" => "田中太郎", "score" => 85],
    ["name" => "佐藤花子", "score" => 92],
    ["name" => "鈴木一郎", "score" => 78],
    ["name" => "高橋美咲", "score" => 65],
    ["name" => "伊藤健太", "score" => 58],
];

// セクションタイトル表示
echo "<h2>【個別成績】</h2>";

// 成績判定ロジック
foreach ($students as $student) {
    $name = $student["name"];
    $score = $student["score"];

    if ($score >= 90) {
        $grade = "A";
        $status = "優秀";
    } elseif ($score >= 80) {
        $grade = "B";
        $status = "良好";
    } elseif ($score >= 70) {
        $grade = "C";
        $status = "可";
    } elseif ($score >= 60) {
        $grade = "D";
        $status = "不可";
    } else {
        $grade = "F";  
        $status = "不合格";
    }


    // 個別の成績表示
    echo "{$name}: {$score}点 - 評価{$grade} ({$status})<br>";
}

// 成績の統計情報を初期化
$pass_count = 0;
$fail_count = 0;

// 合格者と不合格者のカウント
foreach ($students as $student) {
    if ($student["score"] >= 60) {
        $pass_count++;
    } else {
        $fail_count++;
    }
}

// 平均点の計算
$total_score = 0;
foreach ($students as $student) {
    $total_score += $student["score"];
}
$average_score = $total_score / count($students);

// 統計情報の表示
echo "<h2>【統計情報】</h2>";
echo "合格者数: {$pass_count}人<br>";
echo "不合格者数: {$fail_count}人<br>";
echo "平均点: " . round($average_score, 2) . "点<br>";
?>

</body>
</html>