 @extends('backend.layout.master')
 @section('page_title')
    Dashboard
@endsection

@section('content') 

<!-- Start Main Content -->
    <div class="main-content group-data-[sidebar-size=lg]:xl:ml-[calc(theme('spacing.app-menu')_+_16px)] group-data-[sidebar-size=sm]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_16px)] px-4 ac-transition">
        <div class="grid grid-cols-12 gap-x-4">
            <!-- Start Dashboard Overview Header -->
            <div class="col-span-full card p-3 sm:p-7">
                <div class="flex-center-between flex-col sm:flex-row items-start sm:items-center gap-3">
                    <div>
                        <h6 class="card-title">Welcome Admin! 👋</h6>
                        <p class="card-description today">Today is...</p>
                    </div>
                    <div class="flex items-center gap-2 sm:gap-4 flex-wrap">
                        <div class="max-w-36">
                            <input type="date" class="form-input" placeholder="Select date">
                        </div>
                        <div>
                            <a href="#" class="btn b-solid btn-primary-solid py-4">
                                <i class="ri-download-cloud-2-line text-inherit hidden sm:block"></i>
                                Download Report
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Dashboard Overview Header -->

            <!-- Start Project Status Chart -->
            <div class="col-span-full sm:col-span-6 lg:col-span-4 card">
                <div class="flex-center-between">
                    <h6 class="card-title text-[20px]">Total Driver</h6>
                    <select class="form-input form-select">
                        <option value="this-month">This Month</option>
                        <option value="this-week">This Week</option>
                        <option value="this-year">This Year</option>
                        <option value="today">Today</option>
                    </select>
                </div>
                <div class="grid grid-cols-12 gap-y-4 mt-4 items-center">
                    <div class="col-span-full 3xl:col-span-7">
                        <div id="projectStatus"></div>
                    </div>
                    <div class="col-span-full 3xl:col-span-5">
                        <div class="flex 3xl:flex-col justify-around *:shrink-0">
                            <div>
                                <h6 class="text-xs font-semibold text-gray-500 dark:text-dark-text">Total Driver</h6>
                                <div class="flex items-center gap-2 mt-1.5">
                                    <div class="card-title text-2xl sm:text-[42px] counter-value" data-value="1200">1200</div>
                                    <div class="size-[30px] rounded-xl border border-secondary text-secondary flex-center">
                                        <i class="ri-corner-right-up-line text-inherit rotate-45"></i>
                                    </div>
                                </div>
                            </div>
                            <ul class="text-xs leading-none text-gray-500 dark:text-dark-text *:flex-center *:justify-start *:gap-2 space-y-2 3xl:mt-5">
                                <li class="before:size-1.5 before:rounded-50 before:bg-primary-500">70% Car Insurance</li>
                                <li class="before:size-1.5 before:rounded-50 before:bg-primary-300">20% Bike Insurance</li>
                                <li class="before:size-1.5 before:rounded-50 before:bg-primary-200">10% Auto Insurance</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Project Status Chart -->

            <!-- Start Total Task Chart -->
            <div class="col-span-full sm:col-span-6 lg:col-span-4 card">
                <div class="flex-center-between">
                    <h6 class="card-title text-[20px]">Policy Issued</h6>
                    <select class="form-input form-select">
                        <option value="this-month">This Month</option>
                        <option value="this-week">This Week</option>
                        <option value="this-year">This Year</option>
                        <option value="today">Today</option>
                    </select>
                </div>
                <div class="grid grid-cols-12 gap-y-4 mt-4 items-center">
                    <div class="col-span-full 3xl:col-span-7">
                        <div id="total-task-chart"></div>
                    </div>
                    <div class="col-span-full 3xl:col-span-5 sm:translate-y-1/2 3xl:transform-none">
                        <div class="flex 3xl:flex-col justify-around *:shrink-0">
                            <div>
                                <h6 class="text-xs font-semibold text-gray-500 dark:text-dark-text">Total Policy</h6>
                                <div class="flex items-center gap-2 mt-1.5">
                                    <div class="card-title text-2xl sm:text-[42px] counter-value" data-value="1500">1500</div>
                                    <div class="size-[30px] rounded-xl border border-secondary text-secondary flex-center">
                                        <i class="ri-corner-right-up-line text-inherit rotate-45"></i>
                                    </div>
                                </div>
                            </div>
                            <ul class="text-xs leading-none text-gray-500 dark:text-dark-text *:flex-center *:justify-start *:gap-2 space-y-2 3xl:mt-5">
                                <li class="before:size-1.5 before:rounded-50 before:bg-primary-200">Policies Active</li>                               
                                <li class="before:size-1.5 before:rounded-50 before:bg-primary-300">Policies Inactive</li>
                                <li class="before:size-1.5 before:rounded-50 before:bg-primary-500">Policies collapsed</li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Total Task Chart -->

            <!-- Start Finance Status Chart -->
            <div class="col-span-full lg:col-span-4 card">
                <div class="flex-center-between">
                    <h6 class="card-title text-[20px]">Claim issued</h6>
                    <select class="form-input form-select">
                        <option value="this-month">This Month</option>
                        <option value="this-week">This Week</option>
                        <option value="this-year">This Year</option>
                        <option value="today">Today</option>
                    </select>
                </div>
                <div class="grid grid-cols-12 gap-y-4 mt-4 items-center">
                    <div class="col-span-full 3xl:col-span-7">
                        <div id="finance-status-chart"></div>
                    </div>
                    <div class="col-span-full 3xl:col-span-5">
                        <div class="flex 3xl:flex-col justify-around *:shrink-0">
                            <div>
                                <h6 class="text-xs font-semibold text-gray-500 dark:text-dark-text">Claim issued</h6>
                                <div class="flex items-center gap-2 mt-1.5">
                                    <div class="card-title text-[42px]">$<span class="counter-value" data-value="50">50</span>k</div>
                                    <div class="size-[30px] rounded-xl border border-secondary text-secondary flex-center">
                                        <i class="ri-corner-right-up-line text-inherit rotate-45"></i>
                                    </div>
                                </div>
                            </div>
                            <ul class="text-xs leading-none text-gray-500 dark:text-dark-text *:flex-center *:justify-start *:gap-2 space-y-2 3xl:mt-5">
                                <li class="before:size-1.5 before:rounded-50 before:bg-primary-500">Claim Intiated</li>
                                <li class="before:size-1.5 before:rounded-50 before:bg-success">In Process</li>
                                <li class="before:size-1.5 before:rounded-50 before:bg-warning">
                                   Settled 
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Total Task Chart -->


            <!--Start Average Course Selling Chart -->
            <div class="col-span-full 2xl:col-span-12 card">
                <div class="flex-center-between">
                    <h6 class="card-title">Payment Overview</h6>
                    <select class="form-input form-select">
                        <option>This Month</option>
                        <option>This Year</option>
                        <option>This Week</option>
                    </select>
                </div>
                <div id="average-course-selling-chart"></div>
            </div>
            <!--End Average Course Selling Chart-->


            

            <!-- Start Calendar -->
            <div class="col-span-full 2xl:col-span-6 card p-0 overflow-hidden">
                <div class="grid grid-cols-12 h-full">
                    <div class="col-span-full md:col-span-6 2xl:col-span-7 p-4 sm:px-5 sm:py-7">
                        <div class="flex-center-between">
                            <h6 class="card-title text-[20px]">Calendar</h6>
                            <button class="btn b-solid btn-primary-solid !bg-primary-400 btn-sm">Create new</button>
                        </div>
                        <div class="flex-center mt-6">
                            <input id="inline_calendar_input" type="text" class="sr-only size-0"> 
                        </div>
                    </div>
                    <div class="col-span-full md:col-span-6 2xl:col-span-5 p-4 sm:px-5 sm:py-7 bg-primary-200 dark:bg-dark-card-two">
                        <h6 class="card-title text-[16px]">Calendar</h6>
                        <div class="text-xs font-semibold text-gray-500 dark:text-dark-text mt-1">Sunday</div>
                        <ul class="space-y-2 mt-6">
                            <li class="bg-task-before rounded-10 pl-1">
                                <div class="p-4 bg-white dark:bg-dark-card-shade rounded-10">
                                    <h6 class="card-title text-[16px] line-clamp-1" title="Meeting with marketing team">Agent 1</h6>
                                    <div class="text-xs text-gray-500 dark:text-dark-text mt-1.5"> <!-- 🕒 01 Jan - 26 Jan -->
                                        Username: ABC
                                        <br>
                                        PASSWORD: 1234
                                    </div>
                                </div>
                            </li>
                            <li class="bg-task-before rounded-10 pl-1">
                                <div class="p-4 bg-white dark:bg-dark-card-shade rounded-10">
                                    <h6 class="card-title text-[16px] line-clamp-1" title="Project planning session">Agent 2</h6>
                                    <div class="text-xs text-gray-500 dark:text-dark-text mt-1.5"> Username: ABC
                                        <br>
                                        PASSWORD: 1234</div>
                                </div>
                            </li>
                            <li class="bg-task-before rounded-10 pl-1">
                                <div class="p-4 bg-white dark:bg-dark-card-shade rounded-10">
                                    <h6 class="card-title text-[16px] line-clamp-1" title="Team building workshop">Agent 3</h6>
                                    <div class="text-xs text-gray-500 dark:text-dark-text mt-1.5"> Username: ABC
                                        <br>
                                        PASSWORD: 1234</div>
                                </div>
                            </li>
                            <li class="bg-task-before rounded-10 pl-1">
                                <div class="p-4 bg-white dark:bg-dark-card-shade rounded-10">
                                    <h6 class="card-title text-[16px] line-clamp-1" title="Client feedback review">Agent 4</h6>
                                    <div class="text-xs text-gray-500 dark:text-dark-text mt-1.5"> Username: ABC
                                        <br>
                                        PASSWORD: 1234</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Calendar -->

            <!-- Start Recent Activities -->
            <div class="col-span-full xl:col-span-6 2xl:col-span-6 card px-0 relative">
                <div class="flex-center-between px-6 mb-5">
                    <h6 class="card-title text-lg leading-none">Chats</h6>
                    <div class="relative">
                        <button data-popover-target="recentActivities" data-popover-trigger="click" data-popover-placement="bottom-end" type="button" class="size-6 flex-center rounded-md hover:bg-gray-200 dark:hover:bg-dark-icon focus:bg-gray-200 dark:focus:bg-dark-icon">
                            <i class="ri-more-fill text-gray-500 dark:text-dark-text text-lg"></i>
                        </button>
                        <ul id="recentActivities" class="popover-target invisible" data-popover role="tooltip">
                            <li>
                                <a class="popover-item" href="#">More one</a>
                            </li>
                            <li>
                                <a class="popover-item" href="#">More two</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Activitiy List -->
                <div class="max-h-[330px] smooth-scrollbar" data-scrollbar>
                    <ul class="space-y-3 text-sm leading-none px-6">
                        <li>
                            <a href="#" class="flex items-center flex-grow hover:bg-primary-100/50 dark:hover:bg-dark-icon p-2 rounded-md">
                                <div class="size-10 rounded-50 overflow-hidden shrink-0">
                                    <img src="assets/images/user/user-1.png" alt="student">
                                </div>
                                <div class="pl-3">
                                    <h6 class="text-xs leading-none text-heading font-bold">James Miller</h6>
                                    <p class="font-light mt-1 text-xs leading-none text-gray-500 dark:text-dark-text">Sent a mail at today at 10 pm...</p>
                                </div>
                                <i class="ri-arrow-right-s-line text-gray-500 dark:text-dark-text ms-auto"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center flex-grow hover:bg-primary-100/50 dark:hover:bg-dark-icon p-2 rounded-md">
                                <div class="size-10 rounded-50 overflow-hidden shrink-0">
                                    <img src="assets/images/user/user-2.png" alt="student">
                                </div>
                                <div class="pl-3">
                                    <h6 class="text-xs leading-none text-heading font-bold">Sophia Brown</h6>
                                    <p class="font-light mt-1 text-xs leading-none text-gray-500 dark:text-dark-text">Sent a mail today at 9 am...</p>
                                </div>
                                <i class="ri-arrow-right-s-line text-gray-500 dark:text-dark-text ms-auto"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center flex-grow hover:bg-primary-100/50 dark:hover:bg-dark-icon p-2 rounded-md">
                                <div class="size-10 rounded-50 overflow-hidden shrink-0">
                                    <img src="assets/images/user/user-3.png" alt="student">
                                </div>
                                <div class="pl-3">
                                    <h6 class="text-xs leading-none text-heading font-bold">Liam Johnson</h6>
                                    <p class="font-light mt-1 text-xs leading-none text-gray-500 dark:text-dark-text">Sent a mail yesterday at 11:30 pm...</p>
                                </div>
                                <i class="ri-arrow-right-s-line text-gray-500 dark:text-dark-text ms-auto"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center flex-grow hover:bg-primary-100/50 dark:hover:bg-dark-icon p-2 rounded-md">
                                <div class="size-10 rounded-50 overflow-hidden shrink-0">
                                    <img src="assets/images/user/user-4.png" alt="student">
                                </div>
                                <div class="pl-3">
                                    <h6 class="text-xs leading-none text-heading font-bold">Olivia Williams</h6>
                                    <p class="font-light mt-1 text-xs leading-none text-gray-500 dark:text-dark-text">Sent a mail today at 2 pm...</p>
                                </div>
                                <i class="ri-arrow-right-s-line text-gray-500 dark:text-dark-text ms-auto"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center flex-grow hover:bg-primary-100/50 dark:hover:bg-dark-icon p-2 rounded-md">
                                <div class="size-10 rounded-50 overflow-hidden shrink-0">
                                    <img src="assets/images/user/user-5.png" alt="student">
                                </div>
                                <div class="pl-3">
                                    <h6 class="text-xs leading-none text-heading font-bold">Noah Davis</h6>
                                    <p class="font-light mt-1 text-xs leading-none text-gray-500 dark:text-dark-text">Sent a mail yesterday at 4:45 pm...</p>
                                </div>
                                <i class="ri-arrow-right-s-line text-gray-500 dark:text-dark-text ms-auto"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center flex-grow hover:bg-primary-100/50 dark:hover:bg-dark-icon p-2 rounded-md">
                                <div class="size-10 rounded-50 overflow-hidden shrink-0">
                                    <img src="assets/images/user/user-6.png" alt="student">
                                </div>
                                <div class="pl-3">
                                    <h6 class="text-xs leading-none text-heading font-bold">Emma Garcia</h6>
                                    <p class="font-light mt-1 text-xs leading-none text-gray-500 dark:text-dark-text">Sent a mail today at 6:15 am...</p>
                                </div>
                                <i class="ri-arrow-right-s-line text-gray-500 dark:text-dark-text ms-auto"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End Recent Activities -->

            
        </div>
    </div>
    <!-- End Main Content -->
@endsection