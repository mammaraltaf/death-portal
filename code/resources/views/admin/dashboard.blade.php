@extends('layouts.adminlayout');
@section('content')
<div class="main-content container-fluid">
    <div class="page-title">
        <h3>Dashboard</h3>
        <p class="text-subtitle text-muted">A good dashboard to display your statistics</p>
    </div>
    <section class="section">
        <div class="row mb-2" style="display:flex; justify-content:center">
            <div class="col-12 col-md-4">
                <div class="card card-statistic">
                    <div class="card-body p-0">
                        <div class="d-flex flex-column">
                            <div class='px-3 py-3 justify-content-between'>
                                <h3 class='card-title' style="text-align:center">All Users</h3>
                                <div class="card-right align-items-center">
                                    <p style="text-align:center">$50 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card card-statistic">
                    <div class="card-body p-0">
                        <div class="d-flex flex-column">
                            <div class='px-3 py-3 justify-content-between'>
                                <h3 class='card-title' style="text-align:center">All Forms</h3>
                                <div class="card-right align-items-center">
                                    <p style="text-align:center">$532,2 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
</div>
@endsection