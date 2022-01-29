<?php
$flag="ok";
$msg="";
if($_POST['userid'])
{
    if (!ereg('[A-Z a-z]', $POST['userid']))
    {
        $msg ="enter only characters";
        $flag="Not Ok";
    }
}
else
{
    $flag="Not OK";
}
?>