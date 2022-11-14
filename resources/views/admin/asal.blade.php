<?php 
    use \App\Http\Controllers\UserController;
    session_start();
    $level = UserController::getLevel();   
    if($level == "admin"){
?>
<h1>halo banh</h1>
<?php 
    }elseif($level == "operator"){
?>
<h1>Kamu nanya?</h1>
<?php 
    }elseif($level == "user"){
?>
<h1>Affh iya?</h1>
<?php 
    }else{
?>
<h1>?</h1>
<?php 
    }
?>
