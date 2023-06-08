@extends('layouts.main')
@section('content')
    <!-- start form input -->
    <form action="" class="box-employee-form">
        <div class="row">
            <div class="col-xl-4 col-lg-4">
            <label for="">Employees</label><br>
                <select class="box-input" name="" id="">
                    <option value="Department 1">Employee 1</option>
                    <option value="Department 2">Employee 2</option>
                    <option value="Department 3">Employee 3</option>
                    <option value="Department 4">Employee 4</option>
                </select>
            </div>
            <div class="col-xl-4 col-lg-4">
                <label for="">Hour</label><br>
                <input class="box-input" type="number" step="0.1">
            </div>
            <div class="col-xl-4 col-lg-4">
                <label for="">Late Time</label><br>
                <input class="box-input" type="number" step="0.1">
            </div>
            <div class="col-xl-4 col-lg-4">
                <label for="">Main Salary</label><br>
                <input class="box-input" type="number" >
            </div>
            <div class="col-xl-4 col-lg-4">
                <label for="">OT hour</label><br>
                <input class="box-input" type="number" step="0.1">
            </div>
            <div class="col-xl-4 col-lg-4">
                <label for="">OT Salary</label><br>
                <input class="box-input" type="number">
            </div>
            <div class="col-xl-4 col-lg-4">
            </div>
            <div class="col-xl-4 col-lg-4">
                <label for="">Date Pay</label><br>
                <input class="box-input" type="date">
            </div>
            <div class="col-xl-4 col-lg-4">
                <label for="">Pay Method</label><br>
                <select class="box-input"name="" id="">
                    <option value="500 004 404">500 004 404</option>
                </select>
            </div>
            <div class="col-xl-4 col-lg-4">
            </div>
            <div class="col-xl-8 col-lg-8">
                <label for="">Note</label>
                <textarea name="" id="" cols="30" rows="100" placeholder="eter here . . ."></textarea>
            </div>
        </div>
    </form>
    <!-- end form input attendants -->
    <!-- start action -->
    <div class="row">
        <div class="col-xl-6 col-lg-6">
        </div>
        <div class="col-xl-2 col-lg-2">
            <button type="button" class="box-action" id="btn-refresh">
                <i class="fa-sharp fa-solid fa-arrows-rotate"></i>  Refresh
            </button>
        </div>
        <div class="col-xl-2 col-lg-2">
            <button type="button" class="box-action" id="btn-cancel">
                <i class="fa-solid fa-xmark"></i>  Cancel
            </button>
        </div>
        <div class="col-xl-2 col-lg-2">
            <button type="button" class="box-action" id="btn-save">
                <i class="fa-solid fa-floppy-disk"></i>    Save
            </button>
        </div> 
        <div class="col-xl-4 col-lg-4">
            <div class="box-search">
                <select name="" id="">
                    <option value="">Select Report</option>
                    <option value="New">New</option>
                    <option value="Month">Month</option>
                    <option value="PIN">PIN</option>
                </select>
            </div>
        </div>
    </div>
    <!-- end action -->

    <!-- start table content -->
    <table class="table table-striped table-hover box-table-attendants">
            <thead>
                <tr>
                    <th>PIN</th>
                    <th>Employees Name</th>
                    <th>Possition</th>
                    <th>Department</th>
                    <th>Takeleaves</th>
                    <th>Goal Salary</th>
                    <th>OT Salary</th>
                    <th>Paid</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>000 001</td>
                    <td>Sijo Nathan</td>
                    <td>Designer</td>
                    <td>Design</td>
                    <td>3</td>
                    <td>900$</td>
                    <td>100$</td>
                    <td>
                        <button type="button" id="btn-paid" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                            paid
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>000 001</td>
                    <td>Sijo Nathan</td>
                    <td>Designer</td>
                    <td>Design</td>
                    <td>3</td>
                    <td>900$</td>
                    <td>100$</td>
                    <td>
                        <button type="button" id="btn-unpaid" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                            unpaid
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>000 001</td>
                    <td>Sijo Nathan</td>
                    <td>Designer</td>
                    <td>Design</td>
                    <td>3</td>
                    <td>900$</td>
                    <td>100$</td>
                    <td>
                        <button type="button" id="btn-paid" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                            paid
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>000 001</td>
                    <td>Sijo Nathan</td>
                    <td>Designer</td>
                    <td>Design</td>
                    <td>3</td>
                    <td>900$</td>
                    <td>100$</td>
                    <td>
                        <button type="button" id="btn-unpaid" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                            unpaid
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>000 001</td>
                    <td>Sijo Nathan</td>
                    <td>Designer</td>
                    <td>Design</td>
                    <td>3</td>
                    <td>900$</td>
                    <td>100$</td>
                    <td>
                        <button type="button" id="btn-paid" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                            paid
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>000 001</td>
                    <td>Sijo Nathan</td>
                    <td>Designer</td>
                    <td>Design</td>
                    <td>3</td>
                    <td>900$</td>
                    <td>100$</td>
                    <td>
                        <button type="button" id="btn-unpaid" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                            unpaid
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>000 001</td>
                    <td>Sijo Nathan</td>
                    <td>Designer</td>
                    <td>Design</td>
                    <td>3</td>
                    <td>900$</td>
                    <td>100$</td>
                    <td>
                        <button type="button" id="btn-paid" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                            paid
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>000 001</td>
                    <td>Sijo Nathan</td>
                    <td>Designer</td>
                    <td>Design</td>
                    <td>3</td>
                    <td>900$</td>
                    <td>100$</td>
                    <td>
                        <button type="button" id="btn-unpaid" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                            unpaid
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>000 001</td>
                    <td>Sijo Nathan</td>
                    <td>Designer</td>
                    <td>Design</td>
                    <td>3</td>
                    <td>900$</td>
                    <td>100$</td>
                    <td>
                        <button type="button" id="btn-paid" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                            paid
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>000 001</td>
                    <td>Sijo Nathan</td>
                    <td>Designer</td>
                    <td>Design</td>
                    <td>3</td>
                    <td>900$</td>
                    <td>100$</td>
                    <td>
                        <button type="button" id="btn-unpaid" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                            unpaid
                        </button>
                    </td>
                </tr>
            </tbody>
    </table>
    <!-- end table content -->
@endsection('content')
@section('modal')
<div class="modal fade modal-box" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-body p-0 ">
                <div class="box-body-modal-payment">
                    <button type="button" class="btn-action-payments" id="btn-action-close" data-bs-dismiss="modal">
                        <i class="fa-solid fa-xmark"></i> &nbsp; Close
                    </button>
                    <div class="row">
                        <div class="col-xl-5 col-lg-5">
                            <br>
                            <div class="row">
                                <div class="col-xl-4 col-lg-4"><span>Employee</span></div>
                                <div class="col-xl-1 col-lg-1"><span>:</span></div>
                                <div class="col-xl-7 col-lg-7"><span>Sejo Nathan</span></div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-xl-4 col-lg-4"><span>Job Title</span></div>
                                <div class="col-xl-1 col-lg-1"><span>:</span></div>
                                <div class="col-xl-7 col-lg-7"><span>Designer</span></div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-xl-4 col-lg-4"><span>Department</span></div>
                                <div class="col-xl-1 col-lg-1"><span>:</span></div>
                                <div class="col-xl-7 col-lg-7"><span>Design</span></div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-xl-4 col-lg-4"><span>Hour</span></div>
                                <div class="col-xl-1 col-lg-1"><span>:</span></div>
                                <div class="col-xl-7 col-lg-7"><span>200</span></div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-xl-4 col-lg-4"><span>Over Time</span></div>
                                <div class="col-xl-1 col-lg-1"><span>:</span></div>
                                <div class="col-xl-7 col-lg-7"><span>48</span></div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-xl-4 col-lg-4"><span>Late Time</span></div>
                                <div class="col-xl-1 col-lg-1"><span>:</span></div>
                                <div class="col-xl-7 col-lg-7"><span>14</span></div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-xl-4 col-lg-4"><span>Summary Time</span></div>
                                <div class="col-xl-1 col-lg-1"><span>:</span></div>
                                <div class="col-xl-7 col-lg-7"><span>235</span></div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-xl-4 col-lg-4"><span>Goal Salary</span></div>
                                <div class="col-xl-1 col-lg-1"><span>:</span></div>
                                <div class="col-xl-7 col-lg-7"><span>900$</span></div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-xl-4 col-lg-4"><span>OT Salary</span></div>
                                <div class="col-xl-1 col-lg-1"><span>:</span></div>
                                <div class="col-xl-7 col-lg-7"><span>240$</span></div>
                            </div>
                        </div>
                        <div class="col-xl-1 col-lg-1">
                            <div class="box-slash"></div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class=" row box-desc">
                                <div class="col-xl-4 col-lg-4"><span>PIN Payments</span></div>
                                <div class="col-xl-1 col-lg-1"><span>:</span></div>
                                <div class="col-xl-7 col-lg-7"><span>000 001</span></div>
                                <br>
                                <br>
                                <div class="col-xl-4 col-lg-4"><span>Total Payments</span></div>
                                <div class="col-xl-1 col-lg-1"><span>:</span></div>
                                <div class="col-xl-7 col-lg-7"><span>1140$</span></div>
                                <br>
                                <br>
                                <div class="col-xl-4 col-lg-4"><span>Date Payments</span></div>
                                <div class="col-xl-1 col-lg-1"><span>:</span></div>
                                <div class="col-xl-7 col-lg-7"><span>08/01/2022</span></div>
                                <br>
                                <br>
                                <div class="col-xl-4 col-lg-4"><span>Method</span></div>
                                <div class="col-xl-1 col-lg-1"><span>:</span></div>
                                <div class="col-xl-7 col-lg-7"><span>500 004 404</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade modal-box" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-body p-0 ">
                <div class="box-body-modal-payment">
                   <div class="box-back-paid" data-bs-dismiss="modal">
                        <span>go to paids! . . . .</span>
                   </div>
                </div>
            </div>
        </div>
    </div>
@endsection('modal')