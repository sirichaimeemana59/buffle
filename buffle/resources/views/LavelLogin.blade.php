@extends('layout.master')

<style type="text/css">
    .title {
        font-size: 30px;
        color:burlywood;
        text-align: center;
    }
    . text{
        font-size: 25px;
        color:#bbbfc3;
        text-align: center;
    }
    .button {
        display: inline-block;
        padding: 15px 25px;
        font-size: 24px;
        cursor: pointer;
        text-align: center;
        text-decoration: none;
        outline: none;
        color: #fff;
        background-color: #EED27E;
        border: none;
        border-radius: 15px;
    }
    img {
        display: block;
        margin: auto;
        border-radius: 50%;
    }
</style>
<br><br><br>
<body>
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="title">ระบบบริหารจัดการร้านบุฟเฟ่ต์</h2>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-4 text-center" style="margin-bottom: 20px;">

                {{--แบ่งการเข้าสู่ระบบของ User--}}
                <a href="/LoginEmployee" >
                    <img src="../img/LoginEmployee.jpg"
                         class="center-block img-circle img-responsive" width="300" height="300">
                </a>
                <hr>
                <p class="text">เข้าสู่ระบบ</p>
                <blockquote>
                    <p class="text">( สำหรับพนักงาน )</p>
                </blockquote>
                <a href="/LoginEmployee"  class="button"><i class="fa fa-sign-in fa-fw"></i>
                    เข้าระบบพนักงาน</a>
            </div>
            <div class="col-md-4 text-center" style="margin-bottom: 20px;">
                <a href="/LoginPerson" >
                    <img src="../img/LoginPerson.jpg"
                         class="center-block img-circle img-responsive" width="300" height="300">
                </a>
                <hr>
                <p class="text">เข้าสู่ระบบ</p>
                <blockquote>
                    <p class="text">( สำหรับเจ้าของร้าน )</p>
                </blockquote>
                <a href="/LoginPerson"  class="button"><i class="fa fa-sign-in fa-fw"></i>
                    เข้าระบบเจ้าของร้าน</a>
            </div>
            <div class="col-md-4 text-center">
                <a href="/Login">
                    <img src="../img/LoginCustomer.jpg"
                         class="center-block img-circle img-responsive" width="300" height="300">
                </a>
                <hr>
                <p class="text">เข้าสู่ระบบ</p>
                <blockquote>
                    <p class="text">( สำหรับสมาชิก )</p>
                </blockquote>
                <a href="/Login"  class="button"><i class="fa fa-sign-in fa-fw"></i>
                    เข้าระบบสมาชิก</a>
            </div>
        </div>
    </div>
</div>
</body>