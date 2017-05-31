<?php
// 將各個物件創建好在呼叫 會比較容易維護 但是效能較高
class Cart{
    private $member;
    private $list;
    function __construct($member)
    {
        // no price because only need product code and quantity
        $this->list = array();
        $this->member =$member;
    }
    function addItem($pid,$qty){
        $this->list[$pid] = $qty;
    }
    function removeItem($pid){
        // unset removes function
        unset($this->list[$pid]);
    }
    function getList(){
        return $this->list;
    }
    function getmember(){
        return $this -> member;
    }
}
// there is a member, member has id,
class Member{
    var $twid;// Member's object has a TWID object
    function __construct($twid)
    {
        $this -> twid = new TWID($twid);
    }
}
class TWID{
    var $id;
    static $counter = 0;
    function __construct($id)
    {
        $this->id = $id;
        // set static --> 所有類別共同擁有的
        TWID::$counter++;
    }
    function getTWID($twid){
        return $twid;
    }
    function getGender(){
        TWID::$counter++;
        return true;
    }
    function getArea(){
        return 'Taipei';
    }
    //如果跟前面的功能沒聯繫 static cannot call object, but function can call static
    static public function checkId($twid){
        $ret = 0;   // 格式錯誤
        if (preg_match('/^[A-Z][12][0-9]{8}$/', $twid)>0){
            $n12s = substr($twid, 0, 1);
            //echo $n12s;
            $letters = 'ABCDEFGHJKLMNPQRSTUVXYWZIO';
            $n12 = strpos($letters, $n12s) + 10;
            $n1 = (int)($n12 / 10);
            $n2 = $n12 % 10;
            $n3 = substr($twid, 1, 1);
            $n4 = substr($twid, 2, 1);
            $n5 = substr($twid, 3, 1);
            $n6 = substr($twid, 4, 1);
            $n7 = substr($twid, 5, 1);
            $n8 = substr($twid, 6, 1);
            $n9 = substr($twid, 7, 1);
            $n10 = substr($twid, 8, 1);
            $n11 = substr($twid, 9, 1);
            $sum = $n1*1 + $n2*9 + $n3*8 + $n4*7 + $n5*6 +
                $n6*5 + $n7*4 + $n8*3 + $n9*2 + $n10*1 + $n11*1;
            if ($sum %10 == 0){
                $ret = 1;   // OK
            }else{
                $ret =-1;   // 檢查碼沒過
            }
        }
        return $ret;
    }
}
class Bike {
    protected $speed = 0;
    //建構式
    function __construct()
    {
        //初始化
        echo 'construct';
    }
    //解構式--較少使用
    function __destruct()
    {
        // TODO: Implement __destruct() method.
    }

    function upSpeed($gear=1){
        $this->speed =
            ($this->speed<1)?1:$this->speed*1.2;
    }
    function downSpeed(){
        $this->speed =
            ($this->speed<1)?0:$this->speed*0.7;
    }
    function getSpeed(){
        return $this->speed;
    }
}

// extends 繼承bike的設定
// 如果只是創建一個新的物件 ex: Bikev2 只是overwrite 重複寫而已 覆蓋而已
class Scooter extends Bike{
    function __construct()
    {
        // add parent 繼承 parent's 建構式( construct)
        parent::__construct();
        echo 'V2';
    }
    function upSpeed($gear=1){
        parent::upSpeed($gear);
        $this->speed *=2;
    }
    // create new object
    function changegear(){

    }
}

function isRightTWId(string $twid){
    $ret = 0;   // 格式錯誤
    if (preg_match('/^[A-Z][12][0-9]{8}$/', $twid)>0){
        $n12s = substr($twid, 0, 1);
        //echo $n12s;
        $letters = 'ABCDEFGHJKLMNPQRSTUVXYWZIO';
        $n12 = strpos($letters, $n12s) + 10;
        $n1 = (int)($n12 / 10);
        $n2 = $n12 % 10;
        $n3 = substr($twid, 1, 1);
        $n4 = substr($twid, 2, 1);
        $n5 = substr($twid, 3, 1);
        $n6 = substr($twid, 4, 1);
        $n7 = substr($twid, 5, 1);
        $n8 = substr($twid, 6, 1);
        $n9 = substr($twid, 7, 1);
        $n10 = substr($twid, 8, 1);
        $n11 = substr($twid, 9, 1);
        $sum = $n1*1 + $n2*9 + $n3*8 + $n4*7 + $n5*6 +
            $n6*5 + $n7*4 + $n8*3 + $n9*2 + $n10*1 + $n11*1;
        if ($sum %10 == 0){
            $ret = 1;   // OK
        }else{
            $ret =-1;   // 檢查碼沒過
        }
    }
    return $ret;
}
function createLottery(){
    $lottery = range(1,49);
    shuffle($lottery);
    for ($i=0; $i<6; $i++){
        $ret[] = $lottery[$i];
    }
    sort($ret);
    return $ret;
}

