<?php
// Q1 tic-tac問題
$i = 1;

while ($i <= 100) {
  echo $i++ . "\n";
}
for ($i = 0; $i < 101; $i++) {
  switch ($i) {
    case $i % 20 === 0:
      echo "tictac" . "\n";
      break;
    case $i % 4 === 0:
      echo "tic" . "\n";
      break;
    case $i % 5 === 0:
      echo "tac" . "\n";
      break;
    default:
      echo $i . "\n";
  }

}

// Q2 多次元連想配列
$personalInfos = [
  [
    'name' => 'Aさん',
    'mail' => 'aaa@mail.com',
    'tel' => '09011112222'
  ],
  [
    'name' => 'Bさん',
    'mail' => 'bbb@mail.com',
    'tel' => '08033334444'
  ],
  [
    'name' => 'Cさん',
    'mail' => 'ccc@mail.com',
    'tel' => '09055556666'
  ],
];

// 問1
echo $personalInfos[1]["name"] . "の電話番号は" . $personalInfos[1]["tel"] . "です。" . "\n";
// 問2
foreach ($personalInfos as $key => $value) {
  echo ($key + 1) . "番目の" . $value["name"] . "のメールアドレスは" . $value["mail"] .
    "で電話番号は" . $value["tel"] . "です。" . "\n";
// 問3
  $agelist = [25, 30, 18];
  foreach ($personalInfos as $key => $value) {
    $personalInfos[$key]["age"] = [$agelist[$key]];
  }
}
var_dump($personalInfos)

  // Q3 オブジェクト-1
  class Student
  {
      public $studentId;
      public $studentName;
  
      public function __construct($id, $name)
      {
          $this->studentId = $id;
          $this->studentName = $name;
      }
  
      public function attend()
      {
          echo '授業に出席しました。';
      }
  }
  
  $Yamada = new student (120,"山田");
  echo "学籍番号".$Yamada->studentId."番の生徒は".$Yamada->studentName."です。". "\n";

  // Q4 オブジェクト-2
  class Student
  {
      public $studentId;
      public $studentName;
  
      public function __construct($id, $name)
      {
          $this->studentId = $id;
          $this->studentName = $name;
      }
  
      public function attend($class)
      {
          echo '授業に出席しました。'. "\n";
          echo $this->studentName."は".$class."の授業に参加しました。学籍番号：".$this->studentId."です。"."\n";
      }
  }
  
  $yamada = new Student(120, '山田');
  $yamada->attend('PHP');

  // Q5 定義済みクラス
   // 問1
  $date = new DateTime();
  $date->modify("-1 months");
  echo $date->format("Y-m-d");
  
  // 問2
  $past = new DateTime("1992-04-25");
  $difference = $date->diff($past);
  echo $difference->format("あの日から%a日経過しました。"). "\n";

  ?>