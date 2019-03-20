<?php
session_start();



//Добавляет продукт в корзину
$basketid=filter_input(INPUT_GET,'basket');
if($basketid!=null){
    $session = session('basket');
    if (isset($session)) {
        echo "session was set ";
        if (isset($session[$basketid])){
            $value=$session[$basketid]+1;
            $session[$basketid]=$value;
        }
        else{
            $session[$basketid]=1;
        }
        session(['basket'=>$session]);
        echo $basketid."'s  count is ".$value;

    }
    else{
        echo "I created the session and key, now count is 1";
        $value=1;
        $session=array($basketid => $value);
        session(['basket'=>$session]);
    }
}

//Удаляет продукт из корзины
$remove=filter_input(INPUT_GET,'remove');
if($remove!=null){
    $session = session('basket');
    unset($session[$remove]);
    echo $remove;
}

//меняет кол-во продукта в корзине
$idc=filter_input(INPUT_GET,'idc');
$valuec=filter_input(INPUT_GET,'change');
if($idc!=null){
    $session = session('basket');
    $session[$idc]=$valuec;
    session(['basket'=>$session]);
    echo "[".$idc.",".$valuec."]";
}


//Покупка
$buy=filter_input(INPUT_POST,'buy');
if(isset($buy)){
    $session = session('basket');
    if(isset($_COOKIE['user'])){
        echo "buy1";
    }
    else{
        echo "buy0";
    }
}

//Удаляет продукт из списка
$namedel=$_POST['namedel'];
$gender=$_POST['gender'];
echo $namedel;
if ($namedel!=null){
    $query="DELETE FROM `prod` WHERE `id` = '$namedel'";
    $results = mysqli_query($conn, $query);
    header("Location:  prod.php?gender=".$gender."&update=1");
    die();
}

//Добавляет продукт в списки
$name=$_POST['name'];
$size=$_POST['size'];
$balance=$_POST['balance'];
$img=$_POST['img'];
$price=$_POST['price'];
$gender=$_POST['gender'];
if($name!=null){
    $query="SELECT * FROM `prod`";
    $results = mysqli_query($conn, $query);
    $id= mysqli_num_rows($results) + 1;
    echo mysqli_num_rows($results);
    $query="INSERT INTO `prod` (`id`, `gender`, `name`, `size`,`balance`, `img`, `price`) VALUES ('".$id."','".$gender."','".$name."','".$size."','".$balance."','','".$price."')";
    $results = mysqli_query($conn, $query);
    header("Location:  prod.php?gender=".$gender."&remember=1");
    die();
    //echo $query;
}
