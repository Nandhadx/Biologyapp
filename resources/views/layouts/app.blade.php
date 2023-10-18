<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Learning App') }}</title>
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" defer></script>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="/assets/media/logos/favicon.ico" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700" />
    <link href="/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
</head>

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed aside-fixed aside-secondary-disabled">
    <div class="d-flex flex-column flex-root">
        <div class="page d-flex flex-row flex-column-fluid">
            <div id="kt_aside" class="aside aside-extended bg-white" data-kt-drawer="true" data-kt-drawer-name="aside"
                data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                data-kt-drawer-width="auto" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_toggle">
                <!--begin::Primary-->
                <div class="aside-primary d-flex flex-column align-items-lg-center flex-row-auto">
                    <!--begin::Logo-->
                    <div class="aside-logo d-none d-lg-flex flex-column align-items-center flex-column-auto pt-10"
                        id="kt_aside_logo">
                        <a href="index.html">
                            <img alt="Logo" src="assets/media/logos/logo-compact.svg" class="h-55px" />
                        </a>
                    </div>
                    <div class="aside-nav d-flex flex-column flex-lg-center flex-column-fluid w-100 pt-5 pt-lg-0"
                        id="kt_aside_nav">
                        <!--begin::Primary menu-->
                        <div id="kt_aside_menu"
                            class="menu menu-column menu-title-gray-600 menu-icon-gray-400 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold fs-5"
                            data-kt-menu="true">
                            <div class="menu-item py-2">
                                <a class="menu-link active menu-center" href="index.html" title="Dashboard"
                                    data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click"
                                    data-bs-placement="right">
                                    <span class="menu-icon me-0">
                                        <!--begin::Svg Icon | path: icons/duotone/Home/Home2.svg-->
                                        <span class="svg-icon svg-icon-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path
                                                    d="M21.4622 10.699C21.4618 10.6986 21.4613 10.6981 21.4609 10.6977L13.3016 2.53955C12.9538 2.19165 12.4914 2 11.9996 2C11.5078 2 11.0454 2.1915 10.6974 2.5394L2.54246 10.6934C2.53971 10.6961 2.53696 10.699 2.53422 10.7018C1.82003 11.42 1.82125 12.5853 2.53773 13.3017C2.86506 13.6292 3.29739 13.8188 3.75962 13.8387C3.77839 13.8405 3.79732 13.8414 3.81639 13.8414H4.14159V19.8453C4.14159 21.0334 5.10833 22 6.29681 22H9.48897C9.81249 22 10.075 21.7377 10.075 21.4141V16.707C10.075 16.1649 10.516 15.7239 11.0582 15.7239H12.941C13.4832 15.7239 13.9242 16.1649 13.9242 16.707V21.4141C13.9242 21.7377 14.1866 22 14.5102 22H17.7024C18.8909 22 19.8576 21.0334 19.8576 19.8453V13.8414H20.1592C20.6508 13.8414 21.1132 13.6499 21.4613 13.302C22.1786 12.5844 22.1789 11.4171 21.4622 10.699V10.699Z"
                                                    fill="#00B2FF" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                </a>
                            </div>

                            <div data-kt-menu-trigger="click" data-kt-menu-placement="right-start"
                                data-kt-menu-flip="bottom" class="menu-item py-2">
                                <span class="menu-link menu-center" title="Students Pages" data-bs-toggle="tooltip"
                                    data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                                    <span class="menu-icon me-0">
                                        <!--begin::Svg Icon | path: icons/duotone/Shopping/Chart.svg-->
                                        <span class="svg-icon svg-icon-1">
                                            <svg height="200px" width="200px" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:#000000;} </style> <g> <path class="st0" d="M505.837,180.418L279.265,76.124c-7.349-3.385-15.177-5.093-23.265-5.093c-8.088,0-15.914,1.708-23.265,5.093 L6.163,180.418C2.418,182.149,0,185.922,0,190.045s2.418,7.896,6.163,9.627l226.572,104.294c7.349,3.385,15.177,5.101,23.265,5.101 c8.088,0,15.916-1.716,23.267-5.101l178.812-82.306v82.881c-7.096,0.8-12.63,6.84-12.63,14.138c0,6.359,4.208,11.864,10.206,13.618 l-12.092,79.791h55.676l-12.09-79.791c5.996-1.754,10.204-7.259,10.204-13.618c0-7.298-5.534-13.338-12.63-14.138v-95.148 l21.116-9.721c3.744-1.731,6.163-5.504,6.163-9.627S509.582,182.149,505.837,180.418z"></path> <path class="st0" d="M256,346.831c-11.246,0-22.143-2.391-32.386-7.104L112.793,288.71v101.638 c0,22.314,67.426,50.621,143.207,50.621c75.782,0,143.209-28.308,143.209-50.621V288.71l-110.827,51.017 C278.145,344.44,267.25,346.831,256,346.831z"></path> </g> </g></svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                </span>
                                <div class="menu-sub menu-sub-dropdown w-225px px-1 py-4">
                                    <div class="menu-item">
                                        <div class="menu-content">
                                            <span class="menu-section fs-5 fw-bolder ps-1 py-1">Student Account</span>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="{{route('students.index')}}">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Students</span>
                                        </a>
                                    </div>
                                    {{-- <div class="menu-item">
                                        <a class="menu-link" href="account/overview.html">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Add Student</span>
                                        </a>
                                    </div> --}}
                                </div>
                            </div>
                            <div data-kt-menu-trigger="click" data-kt-menu-placement="right-start"
                            data-kt-menu-flip="bottom" class="menu-item py-2">
                            <span class="menu-link menu-center" title="courses Pages" data-bs-toggle="tooltip"
                                data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                                <span class="menu-icon me-0">
                                    <!--begin::Svg Icon | path: icons/duotone/Shopping/Chart.svg-->
                                    <span class="svg-icon svg-icon-1">
                                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M3 18H7M10 18H21M5 21H12M16 21H19M8.8 15C6.14903 15 4 12.9466 4 10.4137C4 8.31435 5.6 6.375 8 6C8.75283 4.27403 10.5346 3 12.6127 3C15.2747 3 17.4504 4.99072 17.6 7.5C19.0127 8.09561 20 9.55741 20 11.1402C20 13.2719 18.2091 15 16 15L8.8 15Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </span>
                            </span>
                            <div class="menu-sub menu-sub-dropdown w-225px px-1 py-4">
                                <div class="menu-item">
                                    <div class="menu-content">
                                        <span class="menu-section fs-5 fw-bolder ps-1 py-1">courses</span>
                                    </div>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="{{route('courses.index')}}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">courses</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="{{route('courses.create')}}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Add courses</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                            <div data-kt-menu-trigger="click" data-kt-menu-placement="right-start"
                                data-kt-menu-flip="bottom" class="menu-item py-2">
                                <span class="menu-link menu-center" title="Categories Pages" data-bs-toggle="tooltip"
                                    data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                                    <span class="menu-icon me-0">
                                        <!--begin::Svg Icon | path: icons/duotone/Shopping/Chart.svg-->
                                        <span class="svg-icon svg-icon-1">
                                            <svg fill="#000000" viewBox="0 0 32 32" id="icon" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><defs><style>.cls-1{fill:none;}</style></defs><title>categories</title><path d="M6.76,6l.45.89L7.76,8H12v5H4V6H6.76m.62-2H3A1,1,0,0,0,2,5v9a1,1,0,0,0,1,1H13a1,1,0,0,0,1-1V7a1,1,0,0,0-1-1H9L8.28,4.55A1,1,0,0,0,7.38,4Z" transform="translate(0 0)"></path><path d="M22.76,6l.45.89L23.76,8H28v5H20V6h2.76m.62-2H19a1,1,0,0,0-1,1v9a1,1,0,0,0,1,1H29a1,1,0,0,0,1-1V7a1,1,0,0,0-1-1H25l-.72-1.45a1,1,0,0,0-.9-.55Z" transform="translate(0 0)"></path><path d="M6.76,19l.45.89L7.76,21H12v5H4V19H6.76m.62-2H3a1,1,0,0,0-1,1v9a1,1,0,0,0,1,1H13a1,1,0,0,0,1-1V20a1,1,0,0,0-1-1H9l-.72-1.45a1,1,0,0,0-.9-.55Z" transform="translate(0 0)"></path><path d="M22.76,19l.45.89L23.76,21H28v5H20V19h2.76m.62-2H19a1,1,0,0,0-1,1v9a1,1,0,0,0,1,1H29a1,1,0,0,0,1-1V20a1,1,0,0,0-1-1H25l-.72-1.45a1,1,0,0,0-.9-.55Z" transform="translate(0 0)"></path><rect id="_Transparent_Rectangle_" data-name="<Transparent Rectangle>" class="cls-1" width="32" height="32"></rect></g></svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                </span>
                                <div class="menu-sub menu-sub-dropdown w-225px px-1 py-4">
                                    <div class="menu-item">
                                        <div class="menu-content">
                                            <span class="menu-section fs-5 fw-bolder ps-1 py-1">Categories</span>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="{{ route('categories.index')}}">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Categories</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div data-kt-menu-trigger="click" data-kt-menu-placement="right-start"
                                data-kt-menu-flip="bottom" class="menu-item py-2">
                                <span class="menu-link menu-center" title="Instructors Pages" data-bs-toggle="tooltip"
                                    data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                                    <span class="menu-icon me-0">
                                        <!--begin::Svg Icon | path: icons/duotone/Shopping/Chart.svg-->
                                        <span class="svg-icon svg-icon-1">
                                            <svg height="200px" width="200px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 56.312 56.312" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path style="fill:#010002;" d="M44.004,28.479c0.978-2.201,3.86-7.76,3.86-7.76s-4.671-5.496-6.354-7.012 c-0.412-0.369-0.86-0.51-1.299-0.499v-0.009c-0.49-0.101-1.031-0.213-1.58,0.138c-0.307,0.196-1.215,1.323-1.215,1.323 l0.162,1.742l-1.656-0.915l-1.172,2.594c0,0-0.809-1.457-1.599-2.81c-0.188-0.322-1.321,0.308-1.495,0.019 c0,0,0.641-1.449,0.51-1.651c-0.257-0.399-0.441-0.65-0.49-0.632c0,0-0.764-0.883-3.561,0.375 c-1.845,0.396-3.69,0.792-5.535,1.189c-1.236-1.375-2.338-2.87-3.196-4.508c-0.57-1.089-1.64-1.309-2.542-1.005l-7.331-8.84 C9.3-0.038,8.921-0.073,8.666,0.139C8.412,0.36,8.374,0.731,8.586,0.986l7.24,8.731c-0.52,0.57-0.736,1.395-0.267,2.291 c1.051,2.008,5.563,7.656,5.563,7.656s4.077-1.138,6.835-1.823c0.339,0.703,0.654,1.199,0.654,1.199l0.476,4.986l-3.258,16.431 h3.218c0,4.51,0,9.021,0,13.528c0,3.103,4.812,3.103,4.812,0c0-4.509,0-9.019,0-13.528h1.474 c0.146,4.979,1.154,9.935,3.665,14.291c1.547,2.688,5.704,0.267,4.154-2.426c-2.096-3.638-2.875-7.732-3.005-11.865h3.271 l-2.473-11.094C41.95,29.961,43.39,29.857,44.004,28.479z M40.267,26.32l-0.412-1.846l-0.042-0.002 c0.063-2.755,0.71-2.765,0.712-5.272l-0.03-0.575c0.751,0.777,1.446,1.607,2.086,2.48C41.81,22.843,41.037,24.582,40.267,26.32z"></path> <path style="fill:#010002;" d="M34.672,6.618c-0.244,1.659,3.278,3.208,3.278,3.208c0.075-0.25,0.126-0.501,0.154-0.754 c0.071,0.12,0.147,0.239,0.229,0.359c0.147,0.217,0.306,0.438,0.501,0.654c0.194,0.214,0.42,0.431,0.709,0.615 c0.282,0.183,0.653,0.312,1.008,0.299c0.355-0.013,0.664-0.145,0.888-0.326c0.225-0.181,0.386-0.397,0.502-0.631 c0.058-0.118,0.106-0.237,0.143-0.366c0.017-0.064,0.033-0.129,0.05-0.194c0.012-0.068,0.021-0.131,0.027-0.204 c-0.066,0.003-0.125,0.016-0.188,0.021c-0.059,0.009-0.113,0.017-0.172,0.023c-0.115,0.014-0.222,0.03-0.326,0.04 c-0.201,0.022-0.387,0.03-0.533,0.008c-0.148-0.021-0.247-0.071-0.299-0.129c-0.049-0.057-0.073-0.103-0.129-0.174 c-0.113-0.14-0.271-0.432-0.407-0.768c-0.136-0.341-0.269-0.723-0.404-1.121c-0.138-0.397-0.282-0.812-0.457-1.237 C39.07,5.517,38.873,5.083,38.6,4.62c-0.142-0.231-0.301-0.47-0.525-0.726c-0.115-0.129-0.247-0.26-0.422-0.388 c-0.173-0.125-0.395-0.255-0.658-0.308c-0.262-0.056-0.542-0.014-0.75,0.091c-0.206,0.104-0.347,0.261-0.436,0.421 c-0.137,0.263-0.172,0.544-0.108,0.863c-0.062-0.028-0.12-0.054-0.183-0.079c-1.988-0.796-4.119,0.298-4.762,2.446 C30.754,6.942,33.576,8.724,34.672,6.618z"></path> </g> </g> </g></svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                </span>
                                <div class="menu-sub menu-sub-dropdown w-225px px-1 py-4">
                                    <div class="menu-item">
                                        <div class="menu-content">
                                            <span class="menu-section fs-5 fw-bolder ps-1 py-1">Instructors Account</span>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="{{route('instructors.index')}}">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Instructors</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Primary menu-->
                    </div>
                    <!--end::Nav-->
                    <!--begin::Footer-->
                    <div class="aside-footer d-flex flex-column align-items-center flex-column-auto"
                        id="kt_aside_footer">
                        <!--begin::Menu-->
                        <!--end::Menu-->
                    </div>
                    <!--end::Footer-->
                </div>
                <!--end::Primary-->
                <!--begin::Action-->
                <!--end::Action-->
            </div>
            <!--end::Aside-->
            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <!--begin::Header-->
                <div id="kt_header" class="header" data-kt-sticky="true" data-kt-sticky-name="header"
                    data-kt-sticky-offset="{default: '200px', lg: '300px'}">
                    <!--begin::Container-->
                    <div class="container-fluid d-flex align-items-stretch justify-content-between"
                        id="kt_header_container">
                        <!--begin::Page title-->
                        <div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-2 pb-lg-0"
                            data-kt-swapper="true" data-kt-swapper-mode="prepend"
                            data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_container'}">
                            <!--begin::Heading-->
                            <h1 class="text-dark fw-bolder my-1 fs-2">Welcome to Jet
                                <small class="text-muted fs-6 fw-normal ms-1"></small>
                            </h1>
                            <!--end::Heading-->
                            <!--begin::Breadcrumb-->
                            <ul class="breadcrumb fw-bold fs-base my-1">
                                <li class="breadcrumb-item text-muted">
                                    <a href="index.html" class="text-muted">Home</a>
                                </li>
                                <li class="breadcrumb-item text-dark">Dashboard</li>
                            </ul>
                            <!--end::Breadcrumb-->
                        </div>

                        <!--end::Toolbar wrapper-->
                    </div>
                    <!--end::Container-->
                </div>
                @yield('content')
                <!--begin::Footer-->
                <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
                    <!--begin::Container-->
                    <div class="container-fluid d-flex flex-column flex-md-row flex-stack">
                        <!--begin::Copyright-->
                        <div class="text-dark order-2 order-md-1">
                            <span class="text-gray-400 fw-bold me-1">Created by</span>
                            <a href="" target="https://www.exciteon.com/"
                                class="text-muted text-hover-primary fw-bold me-2 fs-6">Exciteon</a>
                        </div>
                        <!--end::Copyright-->
                        <!--begin::Menu-->
                        {{-- <ul class="menu menu-gray-600 menu-hover-primary fw-bold order-1">
                            <li class="menu-item">
                                <a href="" target="_blank" class="menu-link px-2">About us</a>
                            </li>
                            <li class="menu-item">
                                <a href="" target="_blank" class="menu-link px-2">Tearms And Condition</a>
                            </li>
                        </ul> --}}
                        <!--end::Menu-->
                    </div>
                    <!--end::Container-->
                </div>
            </div>
        </div>
    </div>
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <!--begin::Svg Icon | path: icons/duotone/Navigation/Up-2.svg-->
        <span class="svg-icon">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <polygon points="0 0 24 0 24 24 0 24" />
                    <rect fill="#000000" opacity="0.5" x="11" y="10" width="2"
                        height="10" rx="1" />
                    <path
                        d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z"
                        fill="#000000" fill-rule="nonzero" />
                </g>
            </svg>
        </span>
        <!--end::Svg Icon-->
    </div>
    <script src="/assets/plugins/global/plugins.bundle.js"></script>
    <script src="/assets/js/scripts.bundle.js"></script>
    <script src="/assets/js/custom/widgets.js"></script>
</body>

</html>
