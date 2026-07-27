<?php
// 複合代入演算子（+=、-=、*=）を使ったゲームのスコア計算プログラム
$score = 100;
echo "初期スコア: {$score}点<br>";

$score += 50; // ボーナスステージクリア
echo "ボーナス後: {$score}点<br>";

$score -= 30; // ダメージ
echo "ダメージ後: {$score}点<br>";

$score *= 2; //2倍アイテム

echo "<strong>最終スコア: {$score}点</strong><br>"; //最終スコアを強調
?>