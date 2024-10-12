<!DOCTYPE html>
<html lang="en" class="group" data-sidebar-size="lg" data-theme-mode="light">
 <head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Login || Firsthale Admin</title>
  <meta name="robots" content="">
  <meta name="description" content="">
  <meta name="viewport" content="">
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="{{url('/assets/admindashboard/new-images/favicon.jpg')}}">
  <!-- Style CSS -->
  <link rel="stylesheet" href="{{url('/assets/admindashboard/css/output.css')}}">
   <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
</head>
<body class="bg-body-light dark:bg-dark-body">
    <div id="loader" class="w-screen h-screen flex-center bg-white dark:bg-dark-card fixed inset-0 z-[9999]">
        <img src="{{url('/assets/admindashboard/images/dot-loader.gif')}}" alt="loader">
    </div>
    <!-- Start Main Content -->
    <div class="main-content m-4">
        <div class="grid grid-cols-12 gap-y-7 sm:gap-7 card px-4 sm:px-10 2xl:px-[70px] py-15 lg:items-center lg:min-h-[calc(100vh_-_32px)]">
            <!-- Start Overview Area -->
            <div class="col-span-full lg:col-span-6">
                <div class="flex flex-col items-center justify-center gap-10 text-center">
                    <div class="hidden sm:block">
                        <img src="{{url('/assets/admindashboard/images/loti/loti-auth.svg')}}" alt="loti" class="group-data-[theme-mode=dark]:hidden">
                        <img src="{{url('/assets/admindashboard/images/loti/loti-auth-dark.svg')}}" alt="loti" class="group-data-[theme-mode=light]:hidden">
                    </div>
                    <div>
                        <h3 class="text-xl md:text-[28px] leading-none font-semibold text-heading">
                            Welcome back!
                        </h3>
                        <p class="font-medium text-gray-500 dark:text-dark-text mt-4 px-[10%]">
                            Whether you're launching a stunning online store  optimizing your our object-oriented
                        </p>
                    </div>
                </div>
            </div>
            <!-- End Overview Area -->
            <!-- Start Form Area -->
            <div class="col-span-full lg:col-span-6 w-full lg:max-w-[600px]">
                <div class="border border-form dark:border-dark-border p-5 md:p-10 rounded-20 md:rounded-30">
                    <h3 class="text-xl md:text-[28px] leading-none font-semibold text-heading">
                        Sign In
                    </h3>
                    <p class="font-medium text-gray-500 dark:text-dark-text mt-4">
                        Welcome Back! Log in to your account
                    </p>
                    <form action="{{url('admin/loginauth')}}" method="post" id="login" data-url="{{url('admin/')}}" class="leading-none mt-8">
                    {{ csrf_field() }}
                        <div class="mb-2.5">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" name="email" placeholder="Enter Email" required class="form-input px-4 py-3.5 rounded-lg">
                        </div>
                        <div class="mt-5">
                            <label for="password" class="form-label">Password</label>
                            <div class="relative">
                                <input type="password" id="password" name="password" placeholder="Enter Password" required class="form-input px-4 py-3.5 rounded-lg">
                                <label for="toggleInputType" class="size-8 rounded-md flex-center hover:bg-gray-200 dark:hover:bg-dark-icon foucs:bg-gray-200 dark:foucs:bg-dark-icon position-center left-[95%]">
                                    <input type="checkbox" id="toggleInputType" class="inputTypeToggle peer/it" hidden>
                                    <i class="ri-eye-off-line text-gray-500 dark:text-dark-text peer-checked/it:before:content-['\ecb5']"></i>
                                </label>
                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-3 mb-7">
                            <div class="flex items-center gap-1 select-none">
                                <input type="checkbox" name="remember-me" id="rememberMe">
                                <label for="rememberMe" class="font-spline_sans text-sm leading-none text-gray-900 dark:text-dark-text cursor-pointer">Remember Me</label>
                            </div>
                            <a href="forgot-password.html" class="text-xs leading-none text-primary-500 font-semibold">Forgot password?</a>
                        </div>
                        <!-- Submit Button -->
                        <button type="submit" id="loginnow" class="btn b-solid btn-primary-solid w-full">Sign In</button>
                    </form>
                </div>
            </div>
            <!-- End Form Area -->
        </div>
    </div>
    <!-- End Main Content -->
    <script src="{{url('/assets/admindashboard/js/vendor/jquery.min.js')}}"></script>
    <script src="{{url('/assets/admindashboard/js/layout.js')}}"></script>
    <script src="{{url('/assets/admindashboard/js/main.js')}}"></script>
</body>
</html>