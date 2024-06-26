<?php
// クラスからメソッドを呼び出してみよう
class Player {
    public $myName;

    public function __construct($name) {
        $this->myName = $name;
    }

    public function attack($enemy) {
        echo $this->myName."は、".$enemy."を攻撃した！\n";
    }
}

class Wizard extends Player {
    public function __construct(){
        parent::__construct("魔法使い");
    }
    public function attack($enemy) {
        $this->spell();
        echo $this->myName."は、".$enemy."に炎を放った！\n";
    }
    private function spell(){
        echo "どりゃああああああああ\n";
    }
}

echo "=== パーティーでスライムと戦う ===\n";
$hero = new Player("勇者");
// $hero->attack("スライム");
$warrior = new Player("戦士");
$wizard = new Wizard();

$party = [$hero, $warrior, $wizard];
foreach ($party as $member) {
    $member->attack("スライム");
}
?>
