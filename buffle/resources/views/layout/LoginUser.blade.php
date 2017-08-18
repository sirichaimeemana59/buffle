@extends('layout.master')
<html>
<head>
    <title></title>
    <style type="text/css">
        .font {
            font-size: 30px;
            color: #9b8a30;
            text-align: center;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 20px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            outline: none;
            color: #fff;
            background-color: #EED27E;
            border: none;
            border-radius: 15px;
            /*margin-left: 350px;
            margin-right: 300px;*/
        }
    </style>
</head>
<body>
<br><br><br><br>
<div class="container">
    @yield('LoginEmployee')
    @yield('LoginCustomer')
    @yield('LoginPerson')
    <form action="/action_page.php">
        <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">ประเภทผู้ใช้งาน
                <span class="caret"></span></button>
            <ul class="dropdown-menu">
                <li><a href="#">ผู้ดูแลระบบ</a></li>
                <li><a href="#">เจ้าของร้าน</a></li>
                <li><a href="#">พนักงาน</a></li>
                <li><a href="#">สมาชิก</a></li>
            </ul>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
        </div>
        <div class="checkbox">
            {{--<label><input type="checkbox" name="remember"> Remember me</label>--}}
        </div>
        <button type="submit" class="button">เข้าสู่ระบบ</button>
        <button type="reset" class="button">ยกเลิก</button>
    </form>
</div>
</body>
</html>