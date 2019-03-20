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
    <h3>User Orders</h3>
    <div class="table-responsive">
        <table id="table_fd" class="table table-bordered">
            <tr>
                <th width="50%">Items Names</th>
                <th width="5%">User id</th>
                <th width="15%">User name</th>
                <th width="15%">Total sum</th>
                <th width="15%">Time</th>
            </tr>
            @foreach($orders as $order)
            <tr>
                <td ><?php echo DB::table('products')->find($order['prod_id'])->name; ?></td>
                <td ><?php echo DB::table('users')->find($order['user_id'])->id; ?></td>
                <td ><?php echo DB::table('users')->find($order['user_id'])->name; ?></td>
                <td >{{$order->total_sum}}</td>
                <td >{{$order->updated_at}}</td>
            </tr>
            @endforeach
        </table>
    </div>
</section>
</body>
</html>
