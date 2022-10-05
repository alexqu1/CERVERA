
<?php


include_once 'user.php';
include_once 'user_session.php';



$userSession = new UserSession();
$user = new User();

if(isset($_SESSION['user'])){
    //echo "hay sesion";
    $user->setUser($userSession->getCurrentUser());

}else{
    //echo "login";
    Header("Location:../vistas/errorUrl.php");

}

?>