<?php
// 連想配列の作成
$elements = ['名前' => '玉ねぎ', '値段' => 200, '産地'=> '北海道'];

// キーと値の出力
foreach ($elements as $key => $value) {
  echo "{$key} : {$value}<br>";
}
?>