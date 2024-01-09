@extends('layouts.main')

@section('konten')
    <div class="page-wrapper">
        <div class="container mr-5 ml-5">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="">Report</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-12">
                    <form method="GET" action="">
                        @csrf
                        <label for="">Data Range</label>

                        <input type="date" class="" name="start_date">
                        <input type="date" class="" name="end_date">
                        <div class="mb-3">
                        </div>
                        <button type="submit" class="btn btn-primary">Search</button>
                        <div class="mb-3">
                        </div>
                    </form>
                    @if (session('error_message'))
                        <div class="alert alert-danger">
                            {{ session('error_message') }}
                        </div>
                    @endif

                    @if ($profit)
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Profit</th>
                                    <!-- Tambahkan header lainnya jika diperlukan -->
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $startdate }}</td>
                                    <td>{{ $enddate }}</td>
                                    <td>{{ $profit }}</td>
                                    <!-- Tambahkan data lainnya jika diperlukan -->
                                </tr>
                            </tbody>
                        </table>
                        @php
                            $subscription = App\Models\Subscription::where('user_id', auth()->user()->id)->first();
                        @endphp

                        @if ($subscription && $subscription->sub_id == '2')
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                <span class="text-futura-bold">AI Suggest</span>
                            </button>
                        @endif
                        @if ($subscription && $subscription->sub_id == '1')
                        @endif
                        @if ($subscription && $subscription->sub_id == '3')
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                <span class="text-futura-bold">AI Suggest</span>
                            </button>
                        @endif
                        <a href="/export_report_pdf/{{ session('myworkspaceid') }}" class="btn btn-primary"> <span
                            data-feather="plus-circle"></span>
                        Export pdf</a>
                        

                        <!-- Modal -->
                        <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered ">
                                <div class="modal-content bg-light">
                                    <div class="modal-body">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                        <div class="myform bg-light text-black container">
                                            <h1 class="text-center">AI Suggest</h1>
                                            <div class="row mb-3"></div>
                                            <div class="mb-2">
                                                <p style="color: black ;">Persentase profit anda yaitu
                                                    @if ($perprof > 20)
                                                        <span
                                                            style="color: green ;font-size: 18px">{{ $perprof }}%</span>
                                                    @else
                                                        <span
                                                            style="color: red ;font-size: 18px">{{ $perprof }}%</span>
                                                    @endif
                                                </p>
                                                @if ($perprof > 30)
                                                    <p style="color: black">Usaha Anda sangat bagus! Terus pertahankan
                                                        dan kembangkan
                                                        strategi yang sudah berjalan.</p>
                                                @elseif($perprof > 20)
                                                    <p style="color: black">Usaha Anda berjalan dengan baik, namun masih
                                                        ada potensi untuk
                                                        ditingkatkan. Coba evaluasi
                                                        dan temukan peluang baru.</p>
                                                @elseif($perprof >= 0)
                                                    <p style="color: black">Usaha Anda menghasilkan profit, namun
                                                        mungkin ada aspek-aspek
                                                        yang perlu diperbaiki untuk
                                                        meningkatkan efisiensi dan profitabilitas.</p>
                                                @else
                                                    <p style="color: black">Usaha Anda mengalami kerugian. Pertimbangkan
                                                        untuk mengevaluasi
                                                        strategi bisnis dan mencari
                                                        cara untuk meminimalkan kerugian.</p>
                                                @endif
                                            </div>
                                            <div class="row mb-3"></div>
                                            <div class="row mb-2"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="card" style="padding: 15px">

                            <div class="mt-3">
                                <h2>Saran</h2>
                                <!-- Tambahkan konten saran di sini -->
                                <p style="color: black">Persentase profit anda yaitu {{ $perprof }}%</p>
                                @if ($perprof > 30)
                                    <p style="color: black">Usaha Anda sangat bagus! Terus pertahankan dan kembangkan
                                        strategi yang sudah berjalan.</p>
                                @elseif($perprof > 20)
                                    <p style="color: black">Usaha Anda berjalan dengan baik, namun masih ada potensi untuk
                                        ditingkatkan. Coba evaluasi
                                        dan temukan peluang baru.</p>
                                @elseif($perprof >= 0)
                                    <p style="color: black">Usaha Anda menghasilkan profit, namun mungkin ada aspek-aspek
                                        yang perlu diperbaiki untuk
                                        meningkatkan efisiensi dan profitabilitas.</p>
                                @else
                                    <p style="color: black">Usaha Anda mengalami kerugian. Pertimbangkan untuk mengevaluasi
                                        strategi bisnis dan mencari
                                        cara untuk meminimalkan kerugian.</p>
                                @endif --}}
                </div>
            </div>
            @endif
        </div>
    </div>
    </div>
    </div>
@endsection
