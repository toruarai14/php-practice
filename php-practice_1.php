<?php
// Q1 変数と文字列
$name = "荒井";
echo "私の名前は「" . $name . "」です。" . "\n";

// Q2 四則演算
$num = 4 * 5;
echo $num . "\n";
echo $num / 2 . "\n";

// Q3 日付操作
echo date("現在時刻はY年m月d日n時i分s秒です。") . "\n";

// Q4 条件分岐-1 if文
$device = "mac";
if ($device === "mac" || $device === "windows") {
  echo "使用OSは、" . $device . "です。" . "\n";
} else {
  "どちらでもありません。" . "\n";
}

// Q5 条件分岐-2 三項演算子
$age = 19;
$message = ($age >= 18) ? "成人です。" : "未成年です。";
echo $message . "\n";


// Q6 配列
$kanto = ["東京", "神奈川", "栃木", "千葉", "茨城", "埼玉", "群馬"];
echo ($kanto[2]) . "と" . ($kanto[3]) . "は関東地方の都道府県です。" . "\n";

// Q7 連想配列-1
$city = [
  "東京" => "新宿",
  "神奈川" => "横浜市",
  "栃木" => "宇都宮市",
  "千葉" => "千葉市",
  "茨城" => "水戸市",
  "埼玉" => "さいたま市",
  "群馬" => "前橋市",
];
foreach ($city as $key => $value) {
  echo $value . "\n";
}
;

// Q8 連想配列-2
foreach ($city as $key => $value) {
  if ($key === $kanto[5]) {
    echo ($key) . "の県庁所在地は" . ($value) . "です。";
  }
}

// Q9 連想配列-3
$kanto[7] = ["愛知"];
$kanto[8] = ["大阪"];
$city = ["愛知" => "名古屋"];
$city = ["大阪" => "大阪市"];

foreach ($city as $key => $value) {
  if ($key === "愛知" || $key === "大阪") {
    echo $key . "は関東地方ではありません。" . "\n";
  } else {
    echo $key . "の県庁所在地は" . $value . "です。" . "\n";
  }
}

// Q10 関数-1
function hello($name)
{
  echo $name . "さん、こんにちは。" . "\n";

}

hello("金谷");
hello("安藤");
// Q11 関数-2
function calcTaxInPrice($Price)
{
  $TaxInPrice = $Price * 1.1;
  echo $Price . "円の商品の税込み価格は" . $TaxInPrice . "円です。";
}

calcTaxInPrice(1000);

// Q12 関数とif文
function distinguisNum($num)
{
  if ($num % 2 === 0) {
    echo $num . "は偶数です。" . "\n";
  } else {
    echo $num . "は奇数です。" . "\n";
  }
}

distinguisNum(11);
distinguisNum(24);

// Q13 関数とswitch文
function evaluteGrade($score)
{
  switch ($score) {
    case "A":
      echo "合格です。" . "\n";
      // code...
      break;
    case 'B':
      echo "合格です。" . "\n";
      // code...
      break;
    case 'C':
      echo "合格ですが追加課題があります。" . "\n";
      // code...
      break;
    case 'D':
      echo "不合格です。" . "\n";
      // code...
      break;
    default:
      echo "判定不明です。講師に問い合わせてください。" . "\n";
      // code...
      break;
  }
  ;
}

evaluteGrade("A");
evaluteGrade("E");


?>