<?php
// Q1 tic-tac問題
for ($i = 0; $i <= 100; $i++) {
  switch ($i) {
      
  case ($i % 5 == 0 && $i % 4 == 0):
      echo 'tic-tac '."\n";
      break;
      
  case ($i % 4 == 0):
      echo 'tic '."\n";
      break;

  case ($i % 5 == 0):
      echo 'tac'."\n";
      break;
      
  default:
      echo $i."\n";
      break;
}
}


// Q2 多次元連想配列

//問題１
foreach( $personalInfos as $vals){
  if ($vals['name']=='Bさん') 
 echo $vals['name'].'の電話番号は'.$vals['tel'].'です。';
}

//問題２
foreach( $personalInfos as $key => $vals){
  echo ($key+1).'番目の'.$vals['name'].'のメールアドレスは'.$vals['mail'].'で、電話番号は'.$vals['mail'].'です。'."\n";
}

//問題３
$ageList = [25, 30, 18];

foreach($personalInfos as $vals=>&$key){
  $key["age"]=$ageList[$vals];
}

var_dump($personalInfos);


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

$yamada = new Student (120, '山田');
echo '学籍番号は'. $yamada->studentId .'番の生徒は'. $yamada->studentName .'です。';


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

    public function attend($clss)
    {
        return( $this->studentName.'は'. $clss.'の授業に出席しました。学籍番号:'. $this->studentId);
        }
}


$yamada = new Student(120, '山田');

echo $yamada->attend('PHP')


// Q5 定義済みクラス

//問題１
$time = new DateTime(); 
$time->modify('-1 month');
echo $time->format('Y-m-d');

//問題２
$time1 = strtotime('1992-4-25'); 
$time2 = strtotime('2025-01-28');
$time3= ($time2 - $time1);
echo 'あの日から'.$time3.'日経過しました。'
?>