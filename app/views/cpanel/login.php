<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Đăng nhập Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo BASE_URL ?>./public/template/css/login.css">
</head>


<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <div class="mt-2">
                    <div class="mana">
                        <h4>PVCcooking Management</h4>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header border">
                        <h3>Đăng Nhập ADMIN</h3>
                    </div>
                    <div class="card-body">
                        <form class="main" autocomplete="off" action="<?php echo BASE_URL ?>/login/authentication_login"
                            method="POST" id="loginForm" class="form-horizontal">

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label" for="username">Tên đăng nhập</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="username" name="username"
                                        placeholder="Tên đăng nhập" />
                                </div>
                            </div>



                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label" for="password">Mật khẩu</label>
                                <div class="col-sm-5">
                                    <input type="password" class="form-control" id="password" name="password"
                                        placeholder="Mật khẩu" />
                                </div>
                            </div>




                            <div class="row">
                                <div class="col-sm-5 offset-sm-4">
                                    <button type="submit" class="btn" name="login" value="login">
                                        Đăng Nhập
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Cột nội dung -->
        </div>
        <!-- Dòng nội dung -->
    </div>
    <!-- Container -->

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>


    <script type="text/javascript">
        $.validator.setDefaults({
            submitHandler: function () { alert("submitted!"); }
        });

        $(document).ready(function () {
            $("#loginForm").validate({
                rules: {

                    username: { required: true, minlength: 2 },
                    password: { required: true, minlength: 5 },

                },

                messages: {

                    username: {
                        required: "Bạn chưa nhập vào tên đăng nhập",
                        minlength: "Tên đăng nhập phải có ít nhất 2 ký tự",
                    },
                    password: {
                        required: "Bạn chưa nhập mật khẩu",
                        minlength: "Mật khẩu phải có ít nhất 5 ký tự",
                    },

                },

                errorElement: "div",
                errorPlacement: function (error, element) {
                    error.addClass("invalid-feedback");
                    if (element.prop("type") === "checkbox") {
                        error.insertAfter(element.siblings("label"));
                    } else {
                        error.insertAfter(element);
                    }
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).addClass("is-invalid").removeClass("is-valid");
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).addClass("is-valid").removeClass("is-invalid");
                },
            });
        });
    </script>
 -->



</body>

</html>