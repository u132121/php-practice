<?php
// Q1 tic-tac問題
echo "1から100までのカウントを開始します。\n\n";

for($i = 1; $i <= 100; $i++) {
    switch($i) {
        case $i % 4 !== 0 && $i % 5 !== 0:
            echo "{$i}\n";
            break;

        case $i % 4 === 0 && $i % 5 === 0:
            echo "tic-tac\n";
            break;

        case $i % 4 === 0:
            echo "tic\n";
            break;

        default:    // $i % 5 === 0 のとき
            echo "tac\n";
            break;
    };
};

// Q2 多次元連想配列
$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];

// Q2 問題1
echo "{$personalInfos[1]['name']}の電話番号は{$personalInfos[1]['tel']}です。";

// Q2 問題2
foreach($personalInfos as $index => $personalInfosArray) {
    $index++;
    echo "{$index}番目の{$personalInfosArray['name']}のメールアドレスは{$personalInfosArray['mail']}で、電話番号は{$personalInfosArray['tel']}です。\n";
};

// Q2 問題3
$ageList = [25, 30, 18];

foreach($personalInfos as $index => $personalInfosArray) {
    $personalInfos[$index]['age'] = $ageList[$index];
};

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
};

$yamada = new Student(120, '山田');
var_dump($yamada);
echo "学籍番号{$yamada->studentId}番の生徒は{$yamada->studentName}です。";

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

    public function attend($lang)
    {
        echo "{$this->studentName}は{$lang}の授業に参加しました。学籍番号：{$this->studentId}";
    }
};

$yamada = new Student(120, '山田');
$yamada->attend('PHP');

// Q5 定義済みクラス
// Q5 問題1
$nowDate = new DateTime('now');
$agoDate = $nowDate->modify('-1 month')->format('Y-m-d');

echo $agoDate;

// Q5 問題2
$agoDays = $nowDate->diff(new DateTime("1992-04-25"));

echo "あの日から{$agoDays->days}日経過しました。";
?>