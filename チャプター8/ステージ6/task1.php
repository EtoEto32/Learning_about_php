<?php
// 学生メソッドを呼び出す
class Gakusei {
    // この下に、合計得点を戻り値として返すsumメソッドを記述する
    public static function sum($kokugo, $sansu) {
        return $kokugo+$sansu;
    }
}

// この下に、合計得点を戻り値として返すGakuseiクラスsumメソッドを呼び出す
// 国語 = 70点、算数 = 43点
$total=Gakusei::sum(70,43);
echo "合計は" . $total . "点です。";
//メソッド内からクラス変数を呼び出すときはself::変数名で、クラスの外からstaticなメソッドを呼び出すときはクラス名::メソッド名って事

//self:: と クラス名:: の使い方とイメージ
//クラス内からのアクセス: self::
//静的プロパティやメソッドをクラス内から参照する場合、self::を使用します。
//イメージ: クラス自体を指して「このクラスの」という意味合い。
//クラス外からのアクセス: クラス名::
//静的プロパティやメソッドをクラス外から呼び出す場合、クラス名::を使用します。
//イメージ: 「特定のクラスの」という意味合いで、そのクラスに直接アクセスしているイメージ。
?>
