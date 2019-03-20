<!DOCTYPE html>
<html lang="en">
<head>
    <title>Snow Shopping</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/add.js') }}" defer></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>

@include('layouts.nav')

<section class="prod_sec">
<div class="section_products">
    <div class="cards">
        <?php
        foreach ($products as $product){
            echo "<div class = 'card'>";
            if($product->img== ''){?>
                @if(Auth::user()->name == 'Admin' )
                    <div id='add_img'>
                        <img id='item-img2' src='css/images/add.png' onclick='add_img()'>
                    </div>
                @else
                    <img class='item-img' src='css/images/noprod.png' >
                @endif
                <?php
            }else{
                echo "<img class='item-img' src=$product->img>";
            }
            echo "<div class='item-desc'>";
            echo "<p style='color:grey;'>Originals</p>";
            echo "<h5 class='item-name'><a href='item.php?index=".$product->id."'>$product->Name</a></h5>";
            echo "<h6>$$product->price</h6>";
            ?>
            @if(Auth::user()->name != 'Admin' )
                <button class='item-button' onclick='addToBasket($product-id)'>Add to Cart</button>
            @endif
                <?php
                echo "</div>";
                ?>
            @if(Auth::user()->name == 'Admin' )
                <form action='../../public/admin.php' method='post' class='del'>
                    <input type='submit' class='del' value='X''>
                    <input type='hidden' name='namedel' value='".$product->id."'>
                </form>
            @endif
            <?php
            echo "</div>";
        }
        ?>
        @if(Auth::user()->name == 'Admin' )
            <div class = 'card' id='add_product'>
            <label class='add_label'>ADD PRODUCT</label>
            <img  id='add_img1' src='css/images/add.png' onclick='add()'>
            </div>
        @endif
    </div>
</div>
</section>
</body>

<script>
    function out() {
        document.cookie="admin=; expires=Thu, 01 Jan 1970 00:00:01 GMT;";
        document.cookie="user=; expires=Thu, 01 Jan 1970 00:00:01 GMT;";
        change1=document.getElementById("change_admin1");
        change1.innerHTML="<a class='dropdown-toggle' data-toggle='dropdown' href='basket.php'><img id='basket_icon' src='css/images/profile.png'><span class='caret'></span></a>\n";
        change2=document.getElementById("change_admin2");
        change2.innerHTML="<a href='basket.php'><img id='basket_icon' src='css/images/basket.png'></a>";
    }
    function addToBasket(a) {
        // Здесь мы отправляем данные на сервер
        $.get("admin.php?basket="+a, { }, onAjaxSuccess );
    }
    function onAjaxSuccess(data) {
        // Здесь мы получаем данные, отправленные сервером и выводим их на экран.
        alert(data);
    }
</script>
</html>
