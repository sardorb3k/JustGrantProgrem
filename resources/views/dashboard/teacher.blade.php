@section('title', 'Dashboard')
@extends('layouts.app')
@section('content')
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">Dashboard</h3>
                <div class="nk-block-des text-soft">
                    <p>{{ __('dashboard.welcome')}}, {{ Auth::user()->firstname.' '.Auth::user()->lastname }}.</p>
                </div>
            </div><!-- .nk-block-head-content -->
        </div><!-- .nk-block-between -->
    </div><!-- .nk-block-head -->
    <div class="col-md-6 col-xxl-3">
        <div class="card card-bordered h-100">
            <div class="card-inner mb-n2">
                <div class="card-title-group">
                    <div class="card-title card-title-sm">
                        <h6 class="title">Students who did not attend class</h6>
                    </div>
                </div>
            </div>
            <div class="card-inner">
                <table class="datatable-init nk-tb-list nk-tb-ulist no-footer" data-auto-responsive="false" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
                    <thead>
                        <tr class="nk-tb-item nk-tb-head">
                            <th class="nk-tb-col sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1">
                                <span class="sub-text">#</span>
                            </th>
                            <th class="nk-tb-col sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1">
                                <span class="sub-text">Student</span>
                            </th>
                            <th class="nk-tb-col tb-col-mb sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1">
                                <span class="sub-text">Missed days</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($attendance_n as $attendance)
                            <tr class="nk-tb-item odd">
                                <td class="nk-tb-col nk-tb-col-check sorting_1">
                                    <span>{{ $loop->iteration }}</span>
                                </td>
                                <td class="nk-tb-col">
                                    <span class="text-capitalize">{{ $attendance->fullname }}</span>
                                </td>
                                <td class="nk-tb-col tb-col-lg">
                                    <span>{{ $attendance->day }}</span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div><!-- .card -->
    </div>
@endsection
