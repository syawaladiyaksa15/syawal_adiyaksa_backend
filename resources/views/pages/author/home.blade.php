@extends('layouts.dashboard.master')

@section('title','Home')

@section('content')
    <!-- Body: Header -->
    <div class="body-header d-flex py-lg-3 py-2 px-lg-5 px-md-4">
        <div class="container-fluid">

            <div class="row align-items-center">
                <div class="col">
                    <small class="text-muted">Welcome to my Dashboard.</small>
                    <h1 class="h4 mt-1">Fitness Dashboard</h1>
                </div>
                <div class="col-auto">
                    <a href="https://themeforest.net/user/wrraptheme" title="Download" target="_blank" class="btn btn-white border lift">Download</a>
                    <button type="button" class="btn btn-dark lift">Generate Report</button>
                </div>
            </div> <!-- Row end  -->

        </div>
    </div>

    <!-- Body: Body -->
    <div class="body d-flex py-lg-3 py-md-2 px-lg-5 px-md-4">
        <div class="container-fluid">

            <div class="row g-4 mb-4">
                <div class="col-lg-8 col-md-12">
                    <ul class="nav nav-tabs tab-card px-3 bg-secondary rounded">
                        <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#summery-today" role="tab">Today</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#summery-week" role="tab">Week</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#summery-month" role="tab">Month</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#summery-year" role="tab">Year</a></li>
                    </ul>
                    <div class="tab-content mt-1">
                        <div class="tab-pane fade show active" id="summery-today">
                            <div class="row g-1 mb-4 row-deck">
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                    <div class="card">
                                        <div class="card-body py-xl-4 py-3">
                                            <span class="text-muted">Steps</span>
                                            <div><span class="fs-6 fw-bold me-2">14,208</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                    <div class="card">
                                        <div class="card-body py-xl-4 py-3 position-relative">
                                            <div class="position-absolute top-0 end-0 p-2"><a href="#" class="fa fa-info-circle text-muted"></a></div>
                                            <span class="text-muted">Heart Rate</span>
                                            <div><span class="fs-6 fw-bold me-2">2314 bpms</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                    <div class="card">
                                        <div class="card-body py-xl-4 py-3">
                                            <span class="text-muted">Running</span>
                                            <div><span class="fs-6 fw-bold me-2">17 mins</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                    <div class="card">
                                        <div class="card-body py-xl-4 py-3">
                                            <span class="text-muted">Distance</span>
                                            <div><span class="fs-6 fw-bold me-2">18.5 kms</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                    <div class="card">
                                        <div class="card-body py-xl-4 py-3">
                                            <span class="text-muted">Swimming</span>
                                            <div><span class="fs-6 fw-bold me-2">35 mins</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                    <div class="card">
                                        <div class="card-body py-xl-4 py-3">
                                            <span class="text-muted">Yoga</span>
                                            <div><span class="fs-6 fw-bold me-2">1 Hr</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                    <div class="card">
                                        <div class="card-body py-xl-4 py-3 position-relative">
                                            <div class="position-absolute top-0 end-0 p-2"><a href="#" class="fa fa-info-circle text-muted"></a></div>
                                            <span class="text-muted">GYM</span>
                                            <div><span class="fs-6 fw-bold me-2">2 Hr</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                    <div class="card">
                                        <div class="card-body py-xl-4 py-3">
                                            <span class="text-muted">Cycling</span>
                                            <div><span class="fs-6 fw-bold me-2">1 Hr</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- .end row -->
                        </div>
                        <div class="tab-pane fade" id="summery-week">
                            <div class="row g-1 mb-4 row-deck">
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                    <div class="card">
                                        <div class="card-body py-xl-4 py-3">
                                            <span class="text-muted">Steps</span>
                                            <div><span class="fs-6 fw-bold me-2">64,208</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                    <div class="card">
                                        <div class="card-body py-xl-4 py-3 position-relative">
                                            <div class="position-absolute top-0 end-0 p-2"><a href="#" class="fa fa-info-circle text-muted"></a></div>
                                            <span class="text-muted">Heart Rate</span>
                                            <div><span class="fs-6 fw-bold me-2">2205 bpms</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                    <div class="card">
                                        <div class="card-body py-xl-4 py-3">
                                            <span class="text-muted">Running</span>
                                            <div><span class="fs-6 fw-bold me-2">12 Hr</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                    <div class="card">
                                        <div class="card-body py-xl-4 py-3">
                                            <span class="text-muted">Distance</span>
                                            <div><span class="fs-6 fw-bold me-2">80.5 kms</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                    <div class="card">
                                        <div class="card-body py-xl-4 py-3">
                                            <span class="text-muted">Swimming</span>
                                            <div><span class="fs-6 fw-bold me-2">35 Hr</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                    <div class="card">
                                        <div class="card-body py-xl-4 py-3">
                                            <span class="text-muted">Yoga</span>
                                            <div><span class="fs-6 fw-bold me-2">16.5 Hr</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                    <div class="card">
                                        <div class="card-body py-xl-4 py-3 position-relative">
                                            <div class="position-absolute top-0 end-0 p-2"><a href="#" class="fa fa-info-circle text-muted"></a></div>
                                            <span class="text-muted">GYM</span>
                                            <div><span class="fs-6 fw-bold me-2">10 Hr</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                    <div class="card">
                                        <div class="card-body py-xl-4 py-3">
                                            <span class="text-muted">Cycling</span>
                                            <div><span class="fs-6 fw-bold me-2">9 Hr</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- .end row -->
                        </div>
                        <div class="tab-pane fade" id="summery-month">
                            <div class="row g-1 mb-4 row-deck">
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                    <div class="card">
                                        <div class="card-body py-xl-4 py-3">
                                            <span class="text-muted">Steps</span>
                                            <div><span class="fs-6 fw-bold me-2">64,208</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                    <div class="card">
                                        <div class="card-body py-xl-4 py-3 position-relative">
                                            <div class="position-absolute top-0 end-0 p-2"><a href="#" class="fa fa-info-circle text-muted"></a></div>
                                            <span class="text-muted">Heart Rate</span>
                                            <div><span class="fs-6 fw-bold me-2">2205 bpms</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                    <div class="card">
                                        <div class="card-body py-xl-4 py-3">
                                            <span class="text-muted">Running</span>
                                            <div><span class="fs-6 fw-bold me-2">12 Hr</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                    <div class="card">
                                        <div class="card-body py-xl-4 py-3">
                                            <span class="text-muted">Distance</span>
                                            <div><span class="fs-6 fw-bold me-2">80.5 kms</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                    <div class="card">
                                        <div class="card-body py-xl-4 py-3">
                                            <span class="text-muted">Swimming</span>
                                            <div><span class="fs-6 fw-bold me-2">35 Hr</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                    <div class="card">
                                        <div class="card-body py-xl-4 py-3">
                                            <span class="text-muted">Yoga</span>
                                            <div><span class="fs-6 fw-bold me-2">16.5 Hr</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                    <div class="card">
                                        <div class="card-body py-xl-4 py-3 position-relative">
                                            <div class="position-absolute top-0 end-0 p-2"><a href="#" class="fa fa-info-circle text-muted"></a></div>
                                            <span class="text-muted">GYM</span>
                                            <div><span class="fs-6 fw-bold me-2">10 Hr</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                    <div class="card">
                                        <div class="card-body py-xl-4 py-3">
                                            <span class="text-muted">Cycling</span>
                                            <div><span class="fs-6 fw-bold me-2">9 Hr</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- .end row -->
                        </div>
                        <div class="tab-pane fade" id="summery-year">
                            <div class="row g-1 mb-4 row-deck">
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                    <div class="card">
                                        <div class="card-body py-xl-4 py-3">
                                            <span class="text-muted">Steps</span>
                                            <div><span class="fs-6 fw-bold me-2">1,64,208</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                    <div class="card">
                                        <div class="card-body py-xl-4 py-3 position-relative">
                                            <div class="position-absolute top-0 end-0 p-2"><a href="#" class="fa fa-info-circle text-muted"></a></div>
                                            <span class="text-muted">Heart Rate</span>
                                            <div><span class="fs-6 fw-bold me-2">2205 bpms</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                    <div class="card">
                                        <div class="card-body py-xl-4 py-3">
                                            <span class="text-muted">Running</span>
                                            <div><span class="fs-6 fw-bold me-2">102 Hr</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                    <div class="card">
                                        <div class="card-body py-xl-4 py-3">
                                            <span class="text-muted">Distance</span>
                                            <div><span class="fs-6 fw-bold me-2">280 kms</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                    <div class="card">
                                        <div class="card-body py-xl-4 py-3">
                                            <span class="text-muted">Swimming</span>
                                            <div><span class="fs-6 fw-bold me-2">135 Hr</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                    <div class="card">
                                        <div class="card-body py-xl-4 py-3">
                                            <span class="text-muted">Yoga</span>
                                            <div><span class="fs-6 fw-bold me-2">160.5 Hr</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                    <div class="card">
                                        <div class="card-body py-xl-4 py-3 position-relative">
                                            <div class="position-absolute top-0 end-0 p-2"><a href="#" class="fa fa-info-circle text-muted"></a></div>
                                            <span class="text-muted">GYM</span>
                                            <div><span class="fs-6 fw-bold me-2">10 Hr</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                    <div class="card">
                                        <div class="card-body py-xl-4 py-3">
                                            <span class="text-muted">Cycling</span>
                                            <div><span class="fs-6 fw-bold me-2">9 Hr</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- .end row -->
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                            <h6 class="mb-0">Fitness Activity</h6>
                            <div class="dropdown">
                                <button class="btn btn-sm btn-link text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"></button>
                                <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow border-0">
                                    <li><a class="dropdown-item" href="#">Action<i class="fa fa-arrow-right"></i></a></li>
                                    <li><a class="dropdown-item" href="#">Another action<i class="fa fa-arrow-right"></i></a></li>
                                    <li><a class="dropdown-item" href="#">Something else here<i class="fa fa-arrow-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="apex-FitnessActivity"></div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                            <h6 class="card-title m-0">Workout Statistic</h6>
                            <div class="dropdown">
                                <button class="btn btn-sm btn-link text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"></button>
                                <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow border-0">
                                    <li><a class="dropdown-item" href="#">Action<i class="fa fa-arrow-right"></i></a></li>
                                    <li><a class="dropdown-item" href="#">Another action<i class="fa fa-arrow-right"></i></a></li>
                                    <li><a class="dropdown-item" href="#">Something else here<i class="fa fa-arrow-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="ac-line-transparent" id="apex-WorkoutStatistics"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="row g-4 row-deck">
                        <div class="col-lg-12 col-md-4 col-sm-12">
                            <div class="card text-center">
                                <div class="card-body">
                                    <h6 class="card-title">Today Workout</h6>
                                    <div id="apex-TodayWorkout"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-4 col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title text-center">Progress Reports</h6>
                                    <div id="apex-ProgressReport"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-4 col-sm-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                                    <h6 class="mb-0">Top Trainers</h6>
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-link text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"></button>
                                        <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow border-0">
                                            <li><a class="dropdown-item" href="#">Action<i class="fa fa-arrow-right"></i></a></li>
                                            <li><a class="dropdown-item" href="#">Another action<i class="fa fa-arrow-right"></i></a></li>
                                            <li><a class="dropdown-item" href="#">Something else here<i class="fa fa-arrow-right"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group list-group-flush list-group-custom">
                                        <li class="list-group-item d-flex px-0">
                                            <img class="avatar rounded-circle" src="../../../assets/images/xs/avatar1.jpg" alt="">
                                            <div class="flex-fill ms-3">
                                                <h6 class="mb-0">XY fitnesss care</h6>
                                                <small class="text-muted">25k Subscribers</small>
                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex px-0">
                                            <img class="avatar rounded-circle" src="../../../assets/images/xs/avatar2.jpg" alt="">
                                            <div class="flex-fill ms-3">
                                                <h6 class="mb-0">Body line care</h6>
                                                <small class="text-muted">31k Subscribers</small>
                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex px-0">
                                            <img class="avatar rounded-circle" src="../../../assets/images/xs/avatar3.jpg" alt="">
                                            <div class="flex-fill ms-3">
                                                <h6 class="mb-0">A to Z fitnesss</h6>
                                                <small class="text-muted">22k Subscribers</small>
                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex px-0">
                                            <img class="avatar rounded-circle" src="../../../assets/images/xs/avatar4.jpg" alt="">
                                            <div class="flex-fill ms-3">
                                                <h6 class="mb-0">XY fitnesss care</h6>
                                                <small class="text-muted">12k Subscribers</small>
                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex px-0">
                                            <img class="avatar rounded-circle" src="../../../assets/images/xs/avatar5.jpg" alt="">
                                            <div class="flex-fill ms-3">
                                                <h6 class="mb-0">Gym Here Center</h6>
                                                <small class="text-muted">5k Subscribers</small>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> <!-- .end row -->
                </div>
            </div> <!-- .end row -->

        </div>
    </div>
@endsection

@section('script')
    <script>

        // Fitness Activity
        $(document).ready(function() {

            var options = {
                series: [{
                    name: 'Swimming',
                    data: [45, 25, 44, 23, 25, 41, 32, 25, 22, 65, 22, 29]
                }, {
                    name: 'Yoga',
                    data: [45, 12, 25, 22, 19, 22, 29, 23, 23, 25, 41, 32]
                }, {
                    name: 'GYM',
                    data: [45, 25, 32, 25, 22, 65, 44, 23, 25, 41, 22, 29]
                }, {
                    name: 'Cycling',
                    data: [32, 25, 22, 11, 22, 29, 16, 25, 9, 23, 25, 13]
                }],
                chart: {
                    type: 'bar',
                    height: 300,
                    stacked: true,
                    toolbar: {
                        show: false
                    },
                    zoom: {
                        enabled: true
                    }
                },
                colors: ['var(--chart-color1)','var(--chart-color2)','var(--chart-color3)','var(--chart-color4)'],
                responsive: [{
                    breakpoint: 480,
                    options: {
                        legend: {
                            position: 'bottom',
                            offsetX: -10,
                            offsetY: 0
                        }
                    }
                }],
                xaxis: {
                    categories: ['Jan','Feb','March','Apr','May','Jun','July','Aug','Sept','Oct','Nov','Dec'],
                },
                legend: {
                    position: 'top', // top, bottom
                    horizontalAlign: 'right', // left, right
                },
                dataLabels: {
                    enabled: false,
                },
                fill: {
                    opacity: 1
                }
            };

            var chart = new ApexCharts(document.querySelector("#apex-FitnessActivity"), options);
            chart.render();
        });

        // Workout reports
        $(document).ready(function() {

            var options = {
                series: [75],
                chart: {
                    height: 275,
                    type: 'radialBar',
                    toolbar: {
                        show: false
                    }
                },
                plotOptions: {
                    radialBar: {
                        startAngle: -135,
                        endAngle: 225,
                            hollow: {
                                margin: 0,
                                size: '70%',
                                background: '#fff',
                                image: undefined,
                                imageOffsetX: 0,
                                imageOffsetY: 0,
                                position: 'front',
                                dropShadow: {
                                enabled: true,
                                top: 3,
                                left: 0,
                                blur: 4,
                                opacity: 0.24
                            }
                        },
                        track: {
                            background: '#fff',
                            strokeWidth: '67%',
                            margin: 0, // margin is in pixels
                            dropShadow: {
                            enabled: true,
                            top: -3,
                            left: 0,
                            blur: 4,
                            opacity: 0.35
                            }
                        },

                        dataLabels: {
                            show: true,
                            name: {
                                offsetY: -10,
                                show: true,
                                color: '#888',
                                fontSize: '14px'
                            },
                            value: {
                                formatter: function(val) {
                                    return parseInt(val);
                                },
                                color: '#111',
                                fontSize: '36px',
                                show: true,
                            }
                        }
                    }
                },
                stroke: {
                    lineCap: 'round',
                    colors: ['var(--chart-color2)']
                },
                fill: {
                    type: 'gradient',
                    gradient: {
                        shade: 'dark',
                        gradientToColors: [ "var(--chart-color3)" ],
                        shadeIntensity: 1,
                        type: 'horizontal',
                        opacityFrom: 1,
                        opacityTo: 1,
                        stops: [0, 50, 100],
                        colorStops: []
                    },
                },
                labels: ['Workout %'],
            };

            var chart = new ApexCharts(document.querySelector("#apex-TodayWorkout"), options);
            chart.render();
        });

        // Progress reports
        $(document).ready(function() {
            var options = {
                series: [76, 67, 61, 90],
                chart: {
                    height: 280,
                    type: 'radialBar',
                },
                plotOptions: {
                    radialBar: {
                        offsetY: 0,
                        startAngle: 0,
                        endAngle: 270,
                        hollow: {
                            margin: 0,
                            size: '30%',
                            background: 'transparent',
                            image: 'undefined',
                        },
                        dataLabels: {
                            name: {
                                show: true,
                            },
                            value: {
                                show: true,
                            }
                        }
                    }
                },
                colors: ['var(--chart-color1)','var(--chart-color2)','var(--chart-color3)','var(--chart-color4)'],
                labels: ['Steps', 'Running', 'Time', 'Cardio'],
                legend: {
                    show: false,
                },
                responsive: [{
                    breakpoint: 480,
                    options: {
                        legend: {
                            show: false
                        }
                    }
                }]
            };

            var chart = new ApexCharts(document.querySelector("#apex-ProgressReport"), options);
            chart.render();
        });

        // <h6 class="card-title m-0">Workout Statistic</h6>s
        $(document).ready(function() {
            var options = {
                series: [{
                    name: "This Week",
                    data: [15, 19, 11, 17, 21, 18, 20],
                },{
                    name: 'Last Week',
                    data: [12, 15, 14, 16, 18, 13, 17],
                }],

                chart: {
                    height: 270,
                    type: 'line', // line , bar

                    toolbar: {
                        show: false
                    },
                    zoom: {
                        enabled: false
                    }
                },
                dataLabels: {
                    enabled: false
                },
                legend: {
                    position: 'top', // top, bottom
                    horizontalAlign: 'right', // left, right
                },
                stroke: {
                    width: 2,
                    curve: 'smooth' // straight, smooth
                },
                yaxis: {
                    show: false,
                },
                xaxis: {
                    categories: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
                }
            };

            var chart = new ApexCharts(document.querySelector("#apex-WorkoutStatistics"), options);
            chart.render();
        });

    </script>
@endsection
