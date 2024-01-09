@extends('layouts.main')

@section('konten')
    <div class="page-wrapper">
        <div class="main_content_iner ">
            <div class="container-fluid plr_30 body_white_bg pt_30">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="single_element">
                            <div class="quick_activity">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="quick_activity_wrap">
                                            <div class="single_quick_activity">
                                                <h4>Total Income</h4>
                                                <h3>Rp. <span class="counter">
                                                        {{ $dtl->first() == null ? 0 : $dtl->total_price }}
                                                    </span> </h3>
                                            </div>
                                            <div class="single_quick_activity">
                                                <h4>Total Expences</h4>
                                                <h3>Rp. <span class="counter">
                                                        {{ $dtl2->first() == null ? 0 : $dtl2->total_pricex }}


                                                    </span> </h3>
                                            </div>
                                            <div class="single_quick_activity">
                                                <h4>Cash on Hand</h4>
                                                <h3>Rp. <span class="counter">

                                                        @foreach ($coh as $item)
                                                            {{ $item->cash_on_hand }}
                                                        @endforeach
                                                    </span> </h3>
                                            </div>
                                            <div class="single_quick_activity">
                                                <h4>Net Profit Margin</h4>
                                                <h3>Rp. <span class="counter">{{ $selisih }}</span> </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-6">
                        <div class="white_box mb_30 min_430">
                            <div class="box_header  box_header_block ">
                                <div class="main-title">
                                    <h3 class="mb-0">Profit and Loss</h3>
                                </div>
                                <div class="box_select d-flex">
                                    <select class="nice_Select2 mr_5">
                                        <option value="1">Monthly</option>
                                        <option value="1">Monthly</option>
                                    </select>
                                    <select class="nice_Select2 ">
                                        <option value="1">Last Year</option>
                                        <option value="1">this Year</option>
                                    </select>
                                </div>
                            </div>
                            <div id="bar_active"></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 ">
                        <div class="white_box mb_30 min_430">
                            <div class="box_header  box_header_block">
                                <div class="main-title">
                                    <h3 class="mb-0">% of Income Budget</h3>
                                </div>
                            </div>
                            <div id="radial_2"></div>
                            <div class="radial_footer">
                                <div class="radial_footer_inner d-flex justify-content-between">
                                    <div class="left_footer">
                                        <h5> <span style="background-color: #EDECFE;"></span> Blance</h5>
                                        <p>- Rp. <span class="counter">
                                            {{ $dtl2->first() == null ? 0 : $dtl2->total_pricex }}


                                        </span></p>
                                    </div>
                                    <div class="left_footer">
                                        <h5> <span style="background-color: #A4A1FB;"></span> Blance</h5>
                                        <p>Rp. <span class="counter">
                                            {{ $dtl->first() == null ? 0 : $dtl->total_price }}
                                        </span> </p>
                                    </div>
                                </div>
                                <div class="radial_bottom">
                                    <p><a href="#">View Full Report</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="white_box min_430">
                            <div class="box_header  box_header_block">
                                <div class="main-title">
                                    <h3 class="mb-0">% of Expenses Budget</h3>
                                </div>
                            </div>
                            <div id="radial_1"></div>
                            <div class="radial_footer">
                                <div class="radial_footer_inner d-flex justify-content-between">
                                    <div class="left_footer">
                                        <h5> <span style="background-color: #EDECFE;"></span> Blance</h5>
                                        <p>- Rp. <span class="counter">
                                            {{ $dtl->first() == null ? 0 : $dtl->total_price }}
                                        </span> </p>
                                    </div>
                                    <div class="left_footer">
                                        <h5> <span style="background-color: #A4A1FB;"></span> Blance</h5>
                                        <p>Rp. <span class="counter">
                                            {{ $dtl2->first() == null ? 0 : $dtl2->total_pricex }}


                                        </span></p>
                                    </div>
                                </div>
                                <div class="radial_bottom">
                                    <p><a href="#">View Full Report</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scriptapar')
    <script>
        var options = {
            colors: ['#A66DD4'],
            series: [{
                name: 'Monthly',
                type: 'column',
                data: [440, 505, 414, 671, 227, 413, 201, 352, 752, 320, 257, 160],
            }, {
                name: 'Yearly',
                type: 'line',
                data: [23, 42, 35, 27, 43, 22, 17, 31, 22, 22, 12, 16]
            }],
            chart: {
                height: 265,
                type: 'line',
                toolbar: {
                    show: false
                }
            },
            stroke: {
                width: [0, 4]
            },
            dataLabels: {
                enabled: false,
                enabledOnSeries: [1]
            },
            legend: {
                show: false
            },
            labels: ['01 Jan 2001', '02 Jan 2001', '03 Jan 2001', '04 Jan 2001', '05 Jan 2001', '06 Jan 2001',
                '07 Jan 2001', '08 Jan 2001', '09 Jan 2001', '10 Jan 2001', '11 Jan 2001', '12 Jan 2001'
            ],
            xaxis: {
                type: 'datetime'
            },
            yaxis: [{
                title: {},
            }, {
                opposite: true,
                title: {}
            }]
        };
        var chart = new ApexCharts(document.querySelector("#bar_active"), options);
        chart.render();
    </script>
@endsection
@section('scriptradial')
    <script>
        var options = {
            chart: {
                height: 200,
                type: "radialBar",
            },
            series: [{{ $persentaseexpand }}],
            colors: ["#6DD4B1"],
            plotOptions: {
                radialBar: {
                    hollow: {
                        margin: 0,
                        size: "55%",
                    },
                    track: {
                        dropShadow: {
                            enabled: false,
                            top: 0,
                            left: 0,
                            opacity: 0.15
                        }
                    },
                    style: {
                        fontSize: '14px',
                        fontFamily: "'Muli', sans-serif",
                        fontWeight: '700',
                        colors: '#000'
                    },
                    dataLabels: {
                        name: {
                            offsetY: 18,
                            color: "#A3A5AD",
                            fontSize: "13px",
                            fontWeight: 700,
                            fontFamily: "'Muli', sans-serif",
                        },
                        value: {
                            offsetY: -18,
                            color: "#4D4F5C",
                            fontSize: "21px",
                            fontWeight: 900,
                            show: true,
                            fontFamily: "'Muli', sans-serif",
                        }
                    }
                }
            },
            fill: {
                type: "gradient",
                gradient: {
                    shade: "dark",
                    type: "vertical",
                    gradientToColors: ["#4D71EC"],
                    stops: [0, 100]
                }
            },
            stroke: {
                lineCap: "round"
            },
            labels: ["Profit"]
        };
        var chart = new ApexCharts(document.querySelector("#radial_1"), options);
        chart.render();
        var options = {
            chart: {
                height: 200,
                type: "radialBar",
            },
            series: [{{ $persentaseincome }}],
            colors: ["#6DD4B1"],
            plotOptions: {
                radialBar: {
                    hollow: {
                        margin: 0,
                        size: "55%",
                    },
                    track: {
                        dropShadow: {
                            enabled: false,
                            top: 0,
                            left: 0,
                            opacity: 0.15
                        }
                    },
                    style: {
                        fontSize: '14px',
                        fontFamily: "'Muli', sans-serif",
                        fontWeight: '700',
                        colors: '#000'
                    },
                    dataLabels: {
                        name: {
                            offsetY: 18,
                            color: "#A3A5AD",
                            fontSize: "13px",
                            fontWeight: 700,
                            fontFamily: "'Muli', sans-serif",
                        },
                        value: {
                            offsetY: -18,
                            color: "#4D4F5C",
                            fontSize: "21px",
                            fontWeight: 900,
                            show: true,
                            fontFamily: "'Muli', sans-serif",
                        }
                    }
                }
            },
            fill: {
                type: "gradient",
                gradient: {
                    shade: "dark",
                    type: "vertical",
                    gradientToColors: ["#4D71EC"],
                    stops: [0, 100]
                }
            },
            stroke: {
                lineCap: "round"
            },
            labels: ["Budget"]
        };
        var chart = new ApexCharts(document.querySelector("#radial_2"), options);
        chart.render();
    </script>
@endsection
