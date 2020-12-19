<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="Register_assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="Register_assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
        rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="Register_assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="Register_assets/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="Register_assets/css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title"> ایجاد کاربر جدید</h2>
                </div>
                <div class="card-body">
                    <form method="POST">
                        @csrf
                        <div class="form-row m-b-55">
                            <div class="name" >نام و نام خانوادگی</div>
                            <div class="value">
                               
                                <div class="input-group">
                                    <div class="input-group-desc">
                                          <input id="name" type="text" class="form-control input--style-5 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>              
                                        </div> 
                             </div> 
                                   
                                
                            </div>
                        </div>

                        
                        <div class="form-row">
                            <div class="name">ایمیل</div>
                            <div class="value">
                                <div class="input-group">
                                <input id="email" type="email" class="form-control input--style-5 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
             
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">رمز ورود</div>
                            <div class="value">
                                <div class="input-group">
                                    <input id="password" type="password" class="form-control input--style-5 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name"> تکرار رمز ورود</div>
                            <div class="value">
                                <div class="input-group">
                                <input id="password-confirm" type="password" class="form-control input--style-5" name="password_confirmation" required autocomplete="new-password">                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">سطح دسترسی</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="rule"  id="rule" class="form-control @error('rule') is-invalid @enderror" rule="rule" value="{{ old('rule') }}" required autocomplete="rule" autofocus>
                                            <option disabled selected>گزینه ها </option>
                                            <option value="سردبیر"> سردبیر </option>
                                            <option value="ویراستار"> ویراستار </option>
                                            <option value="ادمین"> ادمین </option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">وضعیت</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="status"  id="status" class="form-control @error('status') is-invalid @enderror" status="status" value="{{ old('status') }}" required autocomplete="status" autofocus>       
                                            <option value="غیرفعال"> غیر فعال </option>
                                            <option value="فعال">فعال</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <div style="text-align:center;">
                            <button class="btn btn--radius-2 btn--red " type="submit">ایجاد</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="Register_assets/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="Register_assets/vendor/select2/select2.min.js"></script>
    <script src="Register_assets/vendor/datepicker/moment.min.js"></script>
    <script src="Register_assets/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="Register_assets/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->