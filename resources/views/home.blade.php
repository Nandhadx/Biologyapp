@extends('layouts.app')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Container-->
        <div class="container" id="kt_content_container">
            <!--begin::Row-->
            <div class="row g-5 gx-xxl-8 mb-xxl-3">
                <!--begin::Col-->
                <div class="col-xxl-4">
                    <!--begin::Engage Widget 1-->
                    <div class="card card-xxl-stretch">
                        <!--begin::Card body-->
                        <div class="card-body d-flex flex-column justify-content-between h-100">
                            <!--begin::Section-->
                            <div class="pt-12">
                                <!--begin::Title-->
                                <h3 class="text-dark text-center fs-1 fw-boldest line-height-lg">Kickstart
                                    <br />First Application
                                </h3>
                                <!--end::Title-->
                                <!--begin::Text-->
                                <div class="text-center text-gray-600 fs-5 fw-bold pt-4">Outlines keep you honest. They
                                    stoping you from amazing poorly about mega drive</div>
                                <!--end::Text-->
                                <!--begin::Action-->
                                <div class="text-center py-7 mb-18">
                                    <a href="#" class="btn btn-primary fs-6 px-6" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_create_app">Create App</a>
                                </div>
                                <!--end::Action-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Image-->
                            <div class="flex-grow-1 bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom card-rounded-bottom h-150px"
                                style="background-image:url('assets/media/illustrations/user-welcome.png')"></div>
                            <!--end::Image-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Engage Widget 1-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xxl-8">
                    <!--begin::Chart Widget 1-->
                    <div class="card card-xxl-stretch mb-5 mb-xxl-8">
                        <!--begin::Card header-->
                        <div class="card-header border-0 pt-5">
                            <!--begin::Card title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-boldest fs-3 text-dark">Authors Overview</span>
                                <span class="text-gray-400 mt-2 fw-bold fs-6">22M total income</span>
                            </h3>
                            <!--end::Card title-->
                            <!--begin::Card toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Nav-->
                                <ul class="nav nav-pills">
                                    <li class="nav-item me-1">
                                        <a class="nav-link btn btn-active-light active btn-color-gray-400 btn-active-color-gray-700"
                                            data-kt-countup-tabs="true" data-bs-toggle="tab"
                                            href="#kt_chart_widget_1_tab_pane_1">30 Days</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link btn btn-active-light btn-color-gray-400 btn-active-color-gray-700"
                                            data-kt-countup-tabs="true" data-bs-toggle="tab"
                                            href="#kt_chart_widget_1_tab_pane_2">Sep 2020</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link btn btn-active-light btn-color-gray-400 btn-active-color-gray-700"
                                            data-kt-countup-tabs="true" data-bs-toggle="tab"
                                            href="#kt_chart_widget_1_tab_pane_3">Oct 2020</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link btn btn-active-light btn-color-gray-400 btn-active-color-gray-700"
                                            data-kt-countup-tabs="true" data-bs-toggle="tab"
                                            href="#kt_chart_widget_1_tab_pane_4">More</a>
                                    </li>
                                </ul>
                                <!--end::Nav-->
                            </div>
                            <!--end::Card toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Card body-->
                        <div class="card-body p-0">
                            <!--begin::Tab content-->
                            <div class="tab-content pt-10">
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade active show" id="kt_chart_widget_1_tab_pane_1">
                                    <!--begin::Row-->
                                    <div class="row p-0 px-9">
                                        <!--begin::Col-->
                                        <div class="col">
                                            <!--begin::Stat-->
                                            <div
                                                class="border border-dashed border-gray-300 text-center min-w-125px rounded pt-6 pb-4 my-3">
                                                <span class="fs-4 fw-bold text-gray-400 d-block">User Sign-in</span>
                                                <span class="fs-2x fw-boldest text-gray-800" data-kt-countup="true"
                                                    data-kt-countup-value="3899">0</span>
                                            </div>
                                            <!--end::Stat-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col">
                                            <!--begin::Stat-->
                                            <div
                                                class="border border-dashed border-gray-300 text-center min-w-125px rounded pt-6 pb-4 my-3">
                                                <span class="fs-4 fw-bold text-gray-400 d-block">Admin Sign-in</span>
                                                <span class="fs-2x fw-boldest text-gray-800" data-kt-countup="true"
                                                    data-kt-countup-value="72">0</span>
                                            </div>
                                            <!--end::Stat-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col">
                                            <!--begin::Stat-->
                                            <div
                                                class="border border-dashed border-gray-300 text-center min-w-125px rounded pt-6 pb-4 my-3">
                                                <span class="fs-4 fw-bold text-gray-400 d-block">Author Sign-in</span>
                                                <span class="fs-2x fw-boldest text-gray-800" data-kt-countup="true"
                                                    data-kt-countup-value="291">0</span>
                                            </div>
                                            <!--end::Stat-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col">
                                            <!--begin::Stat-->
                                            <div
                                                class="border border-dashed border-gray-300 text-center min-w-125px rounded pt-6 pb-4 my-3">
                                                <span class="fs-4 fw-bold text-gray-400 d-block">Failed Attempts</span>
                                                <span class="fs-2x fw-boldest text-gray-800" data-kt-countup="true"
                                                    data-kt-countup-value="6">0</span>
                                            </div>
                                            <!--end::Stat-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                    <!--begin::Chart-->
                                    <div class="px-4 mt-7" id="kt_charts_widget_1_chart_1" style="height: 350px"></div>
                                    <!--end::Chart-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_chart_widget_1_tab_pane_2">
                                    <!--begin::Row-->
                                    <div class="row p-0 px-9">
                                        <!--begin::Col-->
                                        <div class="col">
                                            <!--begin::Stat-->
                                            <div
                                                class="border border-dashed border-gray-300 text-center min-w-125px rounded pt-6 pb-4 my-3">
                                                <span class="fs-4 fw-bold text-gray-400 d-block">User Sign-in</span>
                                                <span class="fs-2x fw-boldest text-gray-800" data-kt-countup="true"
                                                    data-kt-countup-value="2472">0</span>
                                            </div>
                                            <!--end::Stat-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col">
                                            <!--begin::Stat-->
                                            <div
                                                class="border border-dashed border-gray-300 text-center min-w-125px rounded pt-6 pb-4 my-3">
                                                <span class="fs-4 fw-bold text-gray-400 d-block">Admin Sign-in</span>
                                                <span class="fs-2x fw-boldest text-gray-800" data-kt-countup="true"
                                                    data-kt-countup-value="34">0</span>
                                            </div>
                                            <!--end::Stat-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col">
                                            <!--begin::Stat-->
                                            <div
                                                class="border border-dashed border-gray-300 text-center min-w-125px rounded pt-6 pb-4 my-3">
                                                <span class="fs-4 fw-bold text-gray-400 d-block">Author Sign-in</span>
                                                <span class="fs-2x fw-boldest text-gray-800" data-kt-countup="true"
                                                    data-kt-countup-value="419">0</span>
                                            </div>
                                            <!--end::Stat-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col">
                                            <!--begin::Stat-->
                                            <div
                                                class="border border-dashed border-gray-300 text-center min-w-125px rounded pt-6 pb-4 my-3">
                                                <span class="fs-4 fw-bold text-gray-400 d-block">Failed Attempts</span>
                                                <span class="fs-2x fw-boldest text-gray-800" data-kt-countup="true"
                                                    data-kt-countup-value="12">0</span>
                                            </div>
                                            <!--end::Stat-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                    <!--begin::Chart-->
                                    <div class="px-4 mt-7" id="kt_charts_widget_1_chart_2" style="height: 350px"></div>
                                    <!--end::Chart-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_chart_widget_1_tab_pane_3">
                                    <!--begin::Row-->
                                    <div class="row p-0 px-9">
                                        <!--begin::Col-->
                                        <div class="col">
                                            <!--begin::Stat-->
                                            <div
                                                class="border border-dashed border-gray-300 text-center min-w-125px rounded pt-6 pb-4 my-3">
                                                <span class="fs-4 fw-bold text-gray-400 d-block">User Sign-in</span>
                                                <span class="fs-2x fw-boldest text-gray-800" data-kt-countup="true"
                                                    data-kt-countup-value="2917">0</span>
                                            </div>
                                            <!--end::Stat-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col">
                                            <!--begin::Stat-->
                                            <div
                                                class="border border-dashed border-gray-300 text-center min-w-125px rounded pt-6 pb-4 my-3">
                                                <span class="fs-4 fw-bold text-gray-400 d-block">Admin Sign-in</span>
                                                <span class="fs-2x fw-boldest text-gray-800" data-kt-countup="true"
                                                    data-kt-countup-value="102">0</span>
                                            </div>
                                            <!--end::Stat-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col">
                                            <!--begin::Stat-->
                                            <div
                                                class="border border-dashed border-gray-300 text-center min-w-125px rounded pt-6 pb-4 my-3">
                                                <span class="fs-4 fw-bold text-gray-400 d-block">Author Sign-in</span>
                                                <span class="fs-2x fw-boldest text-gray-800" data-kt-countup="true"
                                                    data-kt-countup-value="219">0</span>
                                            </div>
                                            <!--end::Stat-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col">
                                            <!--begin::Stat-->
                                            <div
                                                class="border border-dashed border-gray-300 text-center min-w-125px rounded pt-6 pb-4 my-3">
                                                <span class="fs-4 fw-bold text-gray-400 d-block">Failed Attempts</span>
                                                <span class="fs-2x fw-boldest text-gray-800" data-kt-countup="true"
                                                    data-kt-countup-value="15">0</span>
                                            </div>
                                            <!--end::Stat-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                    <!--begin::Chart-->
                                    <div class="px-4 mt-7" id="kt_charts_widget_1_chart_3" style="height: 350px"></div>
                                    <!--end::Chart-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_chart_widget_1_tab_pane_4">
                                    <!--begin::Row-->
                                    <div class="row p-0 px-9">
                                        <!--begin::Col-->
                                        <div class="col">
                                            <!--begin::Stat-->
                                            <div
                                                class="border border-dashed border-gray-300 text-center min-w-125px rounded pt-6 pb-4 my-3">
                                                <span class="fs-4 fw-bold text-gray-400 d-block">User Sign-in</span>
                                                <span class="fs-2x fw-boldest text-gray-800" data-kt-countup="true"
                                                    data-kt-countup-value="7392">0</span>
                                            </div>
                                            <!--end::Stat-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col">
                                            <!--begin::Stat-->
                                            <div
                                                class="border border-dashed border-gray-300 text-center min-w-125px rounded pt-6 pb-4 my-3">
                                                <span class="fs-4 fw-bold text-gray-400 d-block">Admin Sign-in</span>
                                                <span class="fs-2x fw-boldest text-gray-800" data-kt-countup="true"
                                                    data-kt-countup-value="23">0</span>
                                            </div>
                                            <!--end::Stat-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col">
                                            <!--begin::Stat-->
                                            <div
                                                class="border border-dashed border-gray-300 text-center min-w-125px rounded pt-6 pb-4 my-3">
                                                <span class="fs-4 fw-bold text-gray-400 d-block">Author Sign-in</span>
                                                <span class="fs-2x fw-boldest text-gray-800" data-kt-countup="true"
                                                    data-kt-countup-value="418">0</span>
                                            </div>
                                            <!--end::Stat-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col">
                                            <!--begin::Stat-->
                                            <div
                                                class="border border-dashed border-gray-300 text-center min-w-125px rounded pt-6 pb-4 my-3">
                                                <span class="fs-4 fw-bold text-gray-400 d-block">Failed Attempts</span>
                                                <span class="fs-2x fw-boldest text-gray-800" data-kt-countup="true"
                                                    data-kt-countup-value="11">0</span>
                                            </div>
                                            <!--end::Stat-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                    <!--begin::Chart-->
                                    <div class="px-4 mt-7" id="kt_charts_widget_1_chart_4" style="height: 350px"></div>
                                    <!--end::Chart-->
                                </div>
                                <!--end::Tap pane-->
                            </div>
                            <!--end::Tab content-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Chart Widget 1-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
@endsection
