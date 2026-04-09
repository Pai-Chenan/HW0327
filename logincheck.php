<?

$fID="derrick";
$fPWD="12345678";
if(isset($_POST["uID"]) && sset($_POST["uPWD"])){

$uID=$_POST["uID"];
$uPWD=$_POST["uPWD"];

if($fID==$uID&&$fPWD==$uPWD){
    echo "成功";
}else{
    echo "失敗"
}

}

?>