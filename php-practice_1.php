<?php
// Q1 変数と文字列

$name = "横山";
$message = "私の名前は" . $name . "です。";

echo $message; 

// Q2 四則演算

$num = 5 * 4;
$aaa = $num / 2;

echo $num . "\n";  
echo $aaa . "\n"; 



// Q3 日付操作

$time = date("Y年m月d日　H時i分s秒");  
$message = "現在時刻は、" . $time . "です。";

echo $message; 

// Q4 条件分岐-1 if文

$device ='mac';

if ($device =='mac'|| $device =='windors'){
    echo '使用OSは、' . $device . 'です。';
    
} else {
    echo 'どちらでもありません。';
}

// Q5 条件分岐-2 三項演算子

$age = 33;
$message = ($age > 18) ? '成人です。' : '未成年です。';

echo $message;


// Q6 配列

$kanto = ["東京都", "神奈川県", "千葉県", "埼玉県", "茨城県", "栃木県", "群馬県", "山梨県"];

echo  $kanto[5] . 'と'. $kanto[2] .'は関東地方の都道府県です。';


// Q7 連想配列-1

$kanto = [
  "東京都"=>"新宿区",
  "神奈川県"=>"横浜市",
  "千葉県"=>"千葉市",
  "埼玉県"=>"さいたま市",
  "茨城県"=>"水戸市", 
  "栃木県"=>"宇都宮市", 
  "群馬県"=>"前橋市"
];

foreach ($kanto as $ken => $city) {
  echo $city. "\n";
}


// Q8 連想配列-2

$kanto = [
  "埼玉県"=>"さいたま市",
];

foreach ($kanto as $ken => $city) {
if ($kanto ='埼玉県'|| $kanto ='さいたま市'){
  echo $ken.'の県庁所在地は、'.$city. 'です。';
  
}
}


// Q9 連想配列-3

$kanto = [
  "東京都"=>"新宿区",
  "神奈川県"=>"横浜市",
  "千葉県"=>"千葉市",
  "埼玉県"=>"さいたま市",
  "茨城県"=>"水戸市", 
  "栃木県"=>"宇都宮市", 
  "群馬県"=>"前橋市",
  "愛知県"=>"",
  "大阪府"=>""
];


foreach ($kanto as $ken => $city) {
if ($ken && $city){
  echo $ken.'の県庁所在地は、'.$city. 'です。'."\n";
}
else  {
 echo $ken.'は関東地方ではありません'."\n";
}
}

// Q10 関数-1
function hello($name)
{
    echo $name.'さん、こんにちは。'."\n";;
}

hello('金谷');
hello('安藤');

// Q11 関数-2
function calcTaxInPrice($prce)
{
  return $prce * (1 + 0.1);
    
}

$price = 1000;
$taxInPrice = calcTaxInPrice($price); 

echo $price . "円の商品の税込価格は" . $taxInPrice . "円です。"; 


// Q12 関数とif文

function distinguishNum($number)
{
 if ($number % 2 == 0){
  echo $number.'は偶数です。'."\n";
}
else  {
 echo $number.'は奇数です。'."\n";
}
}

distinguishNum(11);
distinguishNum(24);

// Q13 関数とswitch文

function distinguishNum($ABCD)
{

switch ($ABCD) {
    case 'A':
    case 'B':
        echo '合格です。'."\n";
        break;

    case 'C':
        echo '合格ですが追加課題があります。'."\n";
        break;

    case 'D':
        echo '不合格です。'."\n";
        break;
        
    default:
        echo '判定不明です。講師に問い合わせてください。'."\n";
        break;

}
}

distinguishNum('A');
distinguishNum('H');




?>