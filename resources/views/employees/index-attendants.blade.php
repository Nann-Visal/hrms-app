@extends('layouts.main')
@section('content')
    <!-- start form input attendants -->
    <!-- start form input -->
    <form action="" class="box-employee-form">
        <div class="row">
            <div class="col-xl-4 col-lg-4">
                <label for="">Employee</label><br>
                <input class="box-input" type="text" placeholder="enter here . . .">
            </div>
            <div class="col-xl-4 col-lg-4">
                <label for="">Date</label><br>
                <input class="box-input" type="date" >
            </div>
            <div class="col-xl-4 col-lg-4">
                <label for="">Hour</label><br>
                <input class="box-input" type="number">
            </div>
            <div class="col-xl-4 col-lg-4">
                <label for="">Sign In Time</label><br>
                <input class="box-input" type="time">
            </div>
            <div class="col-xl-4 col-lg-4">
                <label for="">Sign Out Time</label><br>
                <input class="box-input" type="time">
            </div>
            <div class="col-xl-2 col-lg-2">
                <button type="button" class="btn-attendant-action" id="btn-attendants-list">
                    <i class="fa-solid fa-clipboard-user"></i> Attendants
                </button>
            </div>
            <div class="col-xl-2 col-lg-2">
                <button type="button" class="btn-attendant-action" id="btn-attendants-report">
                    <i class="fa-sharp fa-solid fa-flag"></i> Reports
                </button>
            </div>
        </div>
    </form>
    <!-- end form input attendants -->
    <!-- start action -->
    <div class="row">
        <div class="col-xl-6 col-lg-6"></div>
        <div class="col-xl-2 col-lg-2">
            <button type="button" class="box-action" id="btn-refresh">
                    Refresh
            </button>
        </div>
        <div class="col-xl-2 col-lg-2">
            <button type="button" class="box-action" id="btn-cancel">
                    Cancel
            </button>
        </div>
        <div class="col-xl-2 col-lg-2">
            <button type="button" class="box-action" id="btn-save">
                    Save
            </button>
        </div>
    </div>
    <!-- end action -->

    <!-- start table content -->
    <table class="table table-striped table-hover box-table-attendants">
            <thead>
                <tr>
                    <th>PIN</th>
                    <th>Employees Name</th>
                    <th>Date</th>
                    <th>Hour</th>
                    <th>In</th>
                    <th>Out</th>
                    <th>Late</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>0002</td>
                    <td>Sijo Nathan</td>
                    <td>05/23/2023</td>
                    <td>7</td>
                    <td>07:00</td>
                    <td>4:00</td>
                    <td>00h 15mn</td>
                </tr>
                <tr>
                    <td>0002</td>
                    <td>Sijo Nathan</td>
                    <td>05/23/2023</td>
                    <td>7</td>
                    <td>07:00</td>
                    <td>4:00</td>
                    <td>00h 15mn</td>
                </tr>
                <tr>
                    <td>0002</td>
                    <td>Sijo Nathan</td>
                    <td>05/23/2023</td>
                    <td>7</td>
                    <td>07:00</td>
                    <td>4:00</td>
                    <td>00h 15mn</td>
                </tr>
                <tr>
                    <td>0002</td>
                    <td>Sijo Nathan</td>
                    <td>05/23/2023</td>
                    <td>7</td>
                    <td>07:00</td>
                    <td>4:00</td>
                    <td>00h 15mn</td>
                </tr>
                <tr>
                    <td>0002</td>
                    <td>Sijo Nathan</td>
                    <td>05/23/2023</td>
                    <td>7</td>
                    <td>07:00</td>
                    <td>4:00</td>
                    <td>00h 15mn</td>
                </tr>
                <tr>
                    <td>0002</td>
                    <td>Sijo Nathan</td>
                    <td>05/23/2023</td>
                    <td>7</td>
                    <td>07:00</td>
                    <td>4:00</td>
                    <td>00h 15mn</td>
                </tr>
                <tr>
                    <td>0002</td>
                    <td>Sijo Nathan</td>
                    <td>05/23/2023</td>
                    <td>7</td>
                    <td>07:00</td>
                    <td>4:00</td>
                    <td>00h 15mn</td>
                </tr>
                <tr>
                    <td>0002</td>
                    <td>Sijo Nathan</td>
                    <td>05/23/2023</td>
                    <td>7</td>
                    <td>07:00</td>
                    <td>4:00</td>
                    <td>00h 15mn</td>
                </tr>
            </tbody>
    </table>
    <!-- end table content -->
@endsection('content')