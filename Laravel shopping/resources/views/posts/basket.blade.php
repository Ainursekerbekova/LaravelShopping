<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Snow Shopping</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/basket.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

@include('layouts.nav')
<section>
    <h3>Order Details</h3>
    <div class="table-responsive">
        <table id="table_fd" class="table table-bordered">
            <tr>
                <th width="50%">Item Name</th>
                <th width="5%">Count</th>
                <th width="15%">Price</th>
                <th width="15%">Total</th>
                <th width="15%">Action</th>
            </tr>

                @foreach($prod as $element )
                <tr id='row{{$element[0]->id}}'>
                    <td>{{$element[0]->name}}</td>
                    <td class='count' id='count{{$element[0]->id}}'>
                        <input class='input_' id='{{$element[0]->id}}' type='number' value="{{$basket[$element[0]->id]}}">
                        <button id='svb{{$element[0]->id}}' hidden onclick='change({{$element[0]->id}})'></button>
                    </td>
                    <td>{{$element[0]->price}}$</td>
                    <td>{{ ($basket[$element[0]->id])*($element[0]->price)}}$</td>
                    <td class='text-danger' onclick='remove({{$element[0]->id}})'>Remove line</td>
                </tr>
                @endforeach

            <?php
            if (isset( $basket )) {
                echo "<tr  id='right_td'><td colspan='5'  onclick='buy()'>Buy</td></tr>";
            }
            else{
                echo "<tr><td class='text-danger'>You didn't add anything to the cart</td><td>0</td><td>0</td><td>0</td><td>:)</td></tr>";
            }
            ?>
        </table>
    </div>
</section>
</body>
<script>
    function out() {
        document.cookie="user=; expires=Thu, 01 Jan 1970 00:00:01 GMT;";
        change=document.getElementById("change_admin1");
        change.innerHTML="<a class='dropdown-toggle' data-toggle='dropdown' href='basket.blade.php'><img id='basket_icon' src='css/images/profile.png'><span class='caret'></span></a>";
    }
    function remove(a) {
        // Здесь мы отправляем данные на сервер
        $.get("/admin?remove="+a, {}, onAjaxSuccess );
    }
    function change(a) {
        let input=document.getElementById(a);
        var value = input.value;
        $.get("/admin?idc="+a+"&change="+value, {}, onChangeSuccess );
    }

    $(function(){
        $('.input_').keypress(function(e){
            let index=this.id;
            if(e.keyCode==13)
                $('#svb'+index).click();
        });
    });
    function onAjaxSuccess(data) {
        // Здесь мы получаем данные, отправленные сервером и выводим их на экран.
        let table = document.getElementById("table_fd");
        let tr=document.getElementById("row"+data);
        tr.parentNode.removeChild(tr);
    }
    function onChangeSuccess(data) {
        // Здесь мы получаем данные, отправленные сервером и выводим их на экран.
        alert("please update the page");
    }
    function onBuySuccess(data) {
        // Здесь мы получаем данные, отправленные сервером и выводим их на экран.
        if(data=="buy1"){
            alert("YOU BUYing the products");
        }
        else if(data=="buy0"){
            alert("You need to be loged in for buying smth");
            location.assign("http://localhost:8888/shopping/login.php");
        }
    }
    function buy() {
        // Здесь мы отправляем данные на сервер
        $.post("/admin?buy=1", {}, onBuySuccess );
    }
</script>
</html>
