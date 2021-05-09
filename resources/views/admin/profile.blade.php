<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from coderthemes.com/adminto/layouts/vertical/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Mar 2021 17:37:08 GMT -->
<head>
    <meta charset="utf-8" />
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('backend/assets/images/favicon.ico')}}">

    <!-- Bootstrap Css -->
    <link href="{{asset('backend/assets/css/bootstrap.min.css')}}" id="bootstrap-stylesheet" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('backend/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('backend/assets/css/app.min.css')}}" id="app-stylesheet" rel="stylesheet" type="text/css" />

</head>


<body class="authentication-bg">

<div class="account-pages mt-5 mb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="text-center">
                    <a href="" class="logo">
                        <img src="{{asset('backend/assets/images/logo-light.png')}}" alt="" height="22" class="logo-light mx-auto">
                        <img src="{{asset('backend/assets/images/logo-dark.png')}}" alt="" height="22" class="logo-dark mx-auto">
                    </a>
                </div>
                <div class="card">

                    <div class="card-body p-4">
                        <table class="table table-hover">
                            <thead>
                                <th>Name</th>
                                <th>Email</th>
                                <th></th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$LoggedUserInfo->name}}</td>
                                    <td>{{$LoggedUserInfo->email}}</td>
                                    <td><a href="logout">Logout</a></td>
                                </tr>
                            </tbody>
                        </table>




                    </div> <!-- end card-body -->
                </div>


            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end page -->


<!-- Vendor js -->
<script src="{{asset('backend/assets/js/vendor.min.js')}}"></script>

<!-- App js -->
<script src="{{asset('backend/assets/js/app.min.js')}}"></script>

</body>

<!-- Mirrored from coderthemes.com/adminto/layouts/vertical/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Mar 2021 17:37:08 GMT -->
</html>
