<?php
// RPGのPlayerクラスを継承で記述　その2
class Player {
    public $myName;

    public function __construct($name) {
        $this->myName = $name;
    }

    public function attack($enemy) {
        echo $this->myName."は、".$enemy."を攻撃した！\n";
    }
}
class Wizard extends Player{
    public function attack($enemy){
        echo "どりゃあああああああああああああ";
        echo $this->myName."は".$enemy."に炎を放った!\n";
    }
}

echo "=== パーティーでスライムと戦う ===\n";
$hero = new Player("勇者");
$warrior = new Player("戦士");
$wizard=new Wizard("魔法使い");

$party = [$hero, $warrior,$wizard];
foreach ($party as $member) {
    $member->attack("スライム");
}
?>
