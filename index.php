<?php 
trait msg1
{
    public function msg1()
    {
        echo "my first msg";
    }
}
trait msg2
{
    public function msg2()
    {
        echo "my second msg";
    }
}
class msg3
{
    use msg1;
}
class msg4
{
    use msg1,msg2;
}
$msg = new msg4();
$msg->msg1();
$msg->msg2();
?>
