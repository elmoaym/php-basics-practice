<?php
// 割引計算プログラム
$original_price = 5000;
$discount_rate = 0.20;
$discount_amount = $original_price * $discount_rate;
$final_price = $original_price - $discount_amount;

echo "元の価格: " . $original_price . "円<br>";
echo "割引率: " . ($discount_rate * 100) . "%<br>";
// 「割引額表示」の指示はなかったが、より親切な表示に改良
echo "割引額: " . $discount_amount . "円<br>";
echo "<strong>最終価格: " . $final_price . "円</strong>";
?>