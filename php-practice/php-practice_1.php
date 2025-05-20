<?php
// Q1 変数と文字列
$name = '斎藤';
echo '私の名前は「' . $name . '」です。';

// Q2 四則演算
$num = 5 * 4;
echo "$num\n";
echo $num / 2;

// Q3 日付操作
echo '現在時刻は、' . date('Y年m月d日 H時i分s秒') . 'です。';

// Q4 条件分岐-1 if文
$device = 'mac';
if ($device === 'windows' || $device === 'mac') {
    echo "使用OSは、{$device}です。";
} else {
    echo 'どちらでもありません。';
}

// Q5 条件分岐-2 三項演算子
$age = 31;
echo ($age < 18) ? '未成年です。' : '成人です。';

// Q6 配列
$kanto = ['茨城県', '栃木県', '群馬県', '埼玉県', '千葉県', '東京都', '神奈川県'];
echo "{$kanto[2]}と{$kanto[3]}は関東地方の都道府県です。";

// Q7 連想配列-1
$kencho = [
    '東京都'   => '新宿区',
    '神奈川県' => '横浜市',
    '千葉県'   => '千葉市',
    '埼玉県'   => 'さいたま市',
    '栃木県'   => '宇都宮市',
    '群馬県'   => '前橋市',
    '茨城県'   => '水戸市',
];

echo implode("\n", $kencho); // implode() 配列に文字列を挟んで1つの文字列にして返す

// Q8 連想配列-2
foreach ($kencho as $index => $array) {
    if ($index === '埼玉県') {
        echo "{$index}の県庁所在地は、{$array}です。";
    };
};

// Q9 連想配列-3
$kencho['北海道'] = '札幌市';
$kencho['新潟県'] = '新潟市';

foreach ($kencho as $kenchoIndex => $kenchoArray) {
    if (in_array($kenchoIndex, $kanto, true)) {
        echo "{$kenchoIndex}の県庁所在地は、{$kenchoArray}です。\n";
    } else {
        echo "{$kenchoIndex}は関東地方ではありません。\n";
    };
};

// Q10 関数-1
function hello($name) {
    return "{$name}さん、こんにちは。\n";
};

echo hello('金谷');
echo hello('安藤');

// Q11 関数-2
function calcTaxinPrice($taxOutPrice) {
    $tax = 0.1;

    return $taxOutPrice + $taxOutPrice * $tax;
};

$price = 1000;
$taxInPrice = calcTaxinPrice($price);

echo "{$price}円の商品の税込価格は{$taxInPrice}円です。";

// Q12 関数とif文
function distinguishNum($num) {
    if($num % 2 === 0) {
        return "{$num}は偶数です。\n";
    } else {
        return "{$num}は奇数です。\n";
    };
};

echo distinguishNum(11);
echo distinguishNum(24);

// Q13 関数とswitch文
function evaluateGrade($grade) {
    switch($grade) {
        case 'A':
        case 'B':
            return "合格です。\n";
            break;

        case 'C':
            return "合格ですが追加課題があります。\n";
            break;

        case 'D':
            return "不合格です。\n";
            break;

        default:
            return "判定不明です。講師に問い合わせてください。\n";
            break;
    };
};

echo evaluateGrade('A');
echo evaluateGrade('a');