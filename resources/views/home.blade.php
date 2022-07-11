@extends('sidebar')
@section('content')

<section class="home-section">
    <div class="home-content">
        <i class='bx bx-menu'></i>
        <span class="text">Dashboard</span>
        @if (session('error'))
        <div class="alert alert-danger m-4" role="alert">
            {{ session('error') }}
        </div>
        @endif
        @if(session('success'))
        <div class="alert alert-success m-4">
            {{ session('success') }}
        </div>
        @endif
        <div class="profile-right">
            <div class="profile-content">
                <img style="height: 50px; width: 50px; border-radius: 10px; padding: 5px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTQAiSbUgqCbN_h3H7g5tjIZK4ljpN7cOAOFg&usqp=CAU" alt="profileImg">
            </div>
            <div class="name-job">
                <div class="profile_name" style="color: #000000; margin: 10px; font-weight: 500;">Hai Dang</div>
            </div>
        </div>
    </div>
    </div>
</section>

<div class="showMain" style="padding: 5px;">

    <section>
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <p class="text-uppercase small mb-2">
                            <strong>USERS</strong>
                        </p>
                        <h5 class="mb-0">
                            <strong>14 567</strong>
                            <small class="text-success ms-2">
                                <i class="fas fa-arrow-up fa-sm pe-1"></i>13,48%</small>
                        </h5>

                        <hr />

                        <p class="text-uppercase text-muted small mb-2">
                            Previous period
                        </p>
                        <h5 class="text-muted mb-0">11 467</h5>
                    </div>
                </div>
                <!-- Card -->
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <p class="text-uppercase small mb-2">
                            <strong>PAGE VIEWS</strong>
                        </p>
                        <h5 class="mb-0">
                            <strong>51 354 </strong>
                            <small class="text-success ms-2">
                                <i class="fas fa-arrow-up fa-sm pe-1"></i>23,58%</small>
                        </h5>

                        <hr />

                        <p class="text-uppercase text-muted small mb-2">
                            Previous period
                        </p>
                        <h5 class="text-muted mb-0">38 454</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <p class="text-uppercase small mb-2">
                            <strong>AVERAGE TIME</strong>
                        </p>
                        <h5 class="mb-0">
                            <strong>00:04:20</strong>
                            <small class="text-danger ms-2">
                                <i class="fas fa-arrow-down fa-sm pe-1"></i>23,58%</small>
                        </h5>

                        <hr />

                        <p class="text-uppercase text-muted small mb-2">
                            Previous period
                        </p>
                        <h5 class="text-muted mb-0">00:05:20</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <p class="text-uppercase small mb-2">
                            <strong>BOUNCE RATE</strong>
                        </p>
                        <h5 class="mb-0">
                            <strong>32.35%</strong>
                            <small class="text-danger ms-2">
                                <i class="fas fa-arrow-down fa-sm pe-1"></i>23,58%</small>
                        </h5>

                        <hr />

                        <p class="text-uppercase text-muted small mb-2">
                            Previous period
                        </p>
                        <h5 class="text-muted mb-0">24.35%</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Section: Design Block-->

    <!--Section: Content-->
    <section>
        <div class="row">
            <div class="col-md-8 mb-4">
                <div class="card">
                    <div class="card-body">
                        <!-- Pills navs -->
                        <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="ex1-tab-1" data-mdb-toggle="pill" href="#ex1-pills-1" role="tab" aria-controls="ex1-pills-1" aria-selected="true">Users</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="ex1-tab-2" data-mdb-toggle="pill" href="#ex1-pills-2" role="tab" aria-controls="ex1-pills-2" aria-selected="false">Page views</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="ex1-tab-3" data-mdb-toggle="pill" href="#ex1-pills-3" role="tab" aria-controls="ex1-pills-3" aria-selected="false">Average time</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="ex1-tab-4" data-mdb-toggle="pill" href="#ex1-pills-4" role="tab" aria-controls="ex1-pills-4" aria-selected="false">Bounce rate</a>
                            </li>
                        </ul>
                        <!-- Pills navs -->

                        <!-- Pills content -->
                        <div class="tab-content" id="ex1-content">
                            <div class="tab-pane fade show active" id="ex1-pills-1" role="tabpanel" aria-labelledby="ex1-tab-1">
                                <div id="chart-users"></div>
                            </div>
                            <div class="tab-pane fade" id="ex1-pills-2" role="tabpanel" aria-labelledby="ex1-tab-2">
                                <div id="chart-page-views"></div>
                            </div>
                            <div class="tab-pane fade" id="ex1-pills-3" role="tabpanel" aria-labelledby="ex1-tab-3">
                                <div id="chart-average-time"></div>
                            </div>
                            <div class="tab-pane fade" id="ex1-pills-4" role="tabpanel" aria-labelledby="ex1-tab-4">
                                <div id="chart-bounce-rate"></div>
                            </div>
                        </div>
                        <!-- Pills content -->
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <p class="text-center"><strong>Current period</strong></p>
                        <div id="pie-chart-current"></div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <p class="text-center"><strong>Previous period</strong></p>
                        <div id="pie-chart-previous"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Section: Content-->
    <!--/ Copy this code to have a working example -->
</div>
</div>
</div>
<!-- User chart -->
<script>
    const dataLine = {
        type: "line",
        data: {
            labels: [
                "Monday",
                "Tuesday",
                "Wednesday",
                "Thursday",
                "Friday",
                "Saturday",
                "Sunday ",
            ],
            datasets: [{
                    label: "Current period",
                    data: [65, 59, 80, 81, 56, 55, 40],
                },
                {
                    label: "Previous period",
                    data: [28, 48, 40, 19, 86, 27, 90],
                    backgroundColor: "rgba(66, 133, 244, 0.0)",
                    borderColor: "#33b5e5",
                    pointBorderColor: "#33b5e5",
                    pointBackgroundColor: "#33b5e5",
                },
            ],
        },
    };

    new mdb.Chart(document.getElementById("chart-users"), dataLine);
</script>

<!-- Page views chart -->
<script>
    const dataPageViews = {
        type: "line",
        data: {
            labels: [
                "Monday",
                "Tuesday",
                "Wednesday",
                "Thursday",
                "Friday",
                "Saturday",
                "Sunday ",
            ],
            datasets: [{
                    label: "Current period",
                    data: [25, 49, 40, 21, 56, 75, 30],
                },
                {
                    label: "Previous period",
                    data: [58, 18, 30, 59, 46, 77, 90],
                    backgroundColor: "rgba(66, 133, 244, 0.0)",
                    borderColor: "#33b5e5",
                    pointBorderColor: "#33b5e5",
                    pointBackgroundColor: "#33b5e5",
                },
            ],
        },
    };

    new mdb.Chart(document.getElementById("chart-page-views"), dataPageViews);
</script>

<!-- Average time chart -->
<script>
    const dataAverageTime = {
        type: "line",
        data: {
            labels: [
                "Monday",
                "Tuesday",
                "Wednesday",
                "Thursday",
                "Friday",
                "Saturday",
                "Sunday ",
            ],
            datasets: [{
                    label: "Current period",
                    data: [431, 123, 435, 123, 345, 234, 124],
                },
                {
                    label: "Previous period",
                    data: [654, 234, 123, 432, 533, 422, 222],
                    backgroundColor: "rgba(66, 133, 244, 0.0)",
                    borderColor: "#33b5e5",
                    pointBorderColor: "#33b5e5",
                    pointBackgroundColor: "#33b5e5",
                },
            ],
        },
    };

    new mdb.Chart(
        document.getElementById("chart-average-time"),
        dataAverageTime
    );
</script>

<!-- Bounce rage chart -->
<script>
    const dataBounceRate = {
        type: "line",
        data: {
            labels: [
                "Monday",
                "Tuesday",
                "Wednesday",
                "Thursday",
                "Friday",
                "Saturday",
                "Sunday ",
            ],
            datasets: [{
                    label: "Current period",
                    data: [41, 12, 35, 13, 45, 34, 12],
                },
                {
                    label: "Previous period",
                    data: [65, 24, 13, 43, 33, 42, 22],
                    backgroundColor: "rgba(66, 133, 244, 0.0)",
                    borderColor: "#33b5e5",
                    pointBorderColor: "#33b5e5",
                    pointBackgroundColor: "#33b5e5",
                },
            ],
        },
    };

    new mdb.Chart(document.getElementById("chart-bounce-rate"), dataBounceRate);
</script>

<!-- Pie charts -->
<script>
    const pieChartsOptions = {
        dataLabelsPlugin: true,
        options: {
            legend: {
                position: "right",
                labels: {
                    boxWidth: 10,
                },
            },
            plugins: {
                datalabels: {
                    formatter: (value, ctx) => {
                        let sum = 0;
                        let dataArr = dataPieCurrent.data.datasets[0].data;
                        dataArr.map((data) => {
                            sum += data;
                        });
                        let percentage = ((value * 100) / sum).toFixed(2) + "%";
                        return percentage;
                    },
                    color: "white",
                    labels: {
                        title: {
                            font: {
                                size: "14",
                            },
                        },
                    },
                },
            },
        },
    };

    // Pie chart current
    const dataPieCurrent = {
        type: "pie",
        data: {
            labels: ["New visitor", "Returning visitor"],
            datasets: [{
                label: "Traffic",
                data: [502355, 423545],
                backgroundColor: [
                    "rgba(66, 133, 244, 0.6)",
                    "rgba(77, 182, 172, 0.6)",
                ],
            }, ],
        },
    };

    new mdb.Chart(
        document.getElementById("pie-chart-current"),
        dataPieCurrent,
        pieChartsOptions
    );

    // Pie chart previous
    const dataPiePrevious = {
        type: "pie",
        data: {
            labels: ["New visitor", "Returning visitor"],
            datasets: [{
                label: "Traffic",
                data: [402355, 523545],
                backgroundColor: [
                    "rgba(66, 133, 244, 0.6)",
                    "rgba(77, 182, 172, 0.6)",
                ],
            }, ],
        },
    };

    new mdb.Chart(
        document.getElementById("pie-chart-previous"),
        dataPiePrevious,
        pieChartsOptions
    );
</script>
@endsection