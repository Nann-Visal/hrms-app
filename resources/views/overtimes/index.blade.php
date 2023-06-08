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
                <label for="">Date</label><br>
                <input class="box-input" type="date">
            </div>
            <div class="col-xl-4 col-lg-4">
                <label for="">Hour</label><br>
                <input class="box-input" type="number" step="0.1">
            </div>
            <div class="col-xl-4 col-lg-4">
                <label for="">SignIn Time</label><br>
                <input class="box-input" type="time" >
            </div>
            <div class="col-xl-4 col-lg-4">
                <label for="">SignOut Time</label><br>
                <input class="box-input" type="time">
            </div>
            <div class="col-xl-4 col-lg-4">
                <label for="">Salary/Hour</label><br>
                <input class="box-input" type="number" step="0.1">
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
                    <option value="">Select By</option>
                    <option value="All">All</option>
                    <option value="This Month">This Month</option>
                    <option value="Today">Today</option>
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
                    <th>Employees</th>
                    <th>Date</th>
                    <th>Hour</th>
                    <th>SignIn</th>
                    <th>SignOut</th>
                    <th>Salary/Hour</th>
                    <th>Note</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>0001</td>
                    <td>Sijo Nathan</td>
                    <td>05/22/2023</td>
                    <td>2 hour</td>
                    <td>06:00 PM</td>
                    <td>08:00 PM</td>
                    <td>5$</td>
                    <td>Something else . . . .</td>
                    <td>
                        <button type="button" id="btn-edit">
                            Edit
                        </button>
                        <button type="button" id="btn-delet">
                            Delete
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>0001</td>
                    <td>Sijo Nathan</td>
                    <td>05/22/2023</td>
                    <td>2 hour</td>
                    <td>06:00 PM</td>
                    <td>08:00 PM</td>
                    <td>5$</td>
                    <td>Something else . . . .</td>
                    <td>
                        <button type="button" id="btn-edit">
                            Edit
                        </button>
                        <button type="button" id="btn-delet">
                            Delete
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>0001</td>
                    <td>Sijo Nathan</td>
                    <td>05/22/2023</td>
                    <td>2 hour</td>
                    <td>06:00 PM</td>
                    <td>08:00 PM</td>
                    <td>5$</td>
                    <td>Something else . . . .</td>
                    <td>
                        <button type="button" id="btn-edit">
                            Edit
                        </button>
                        <button type="button" id="btn-delet">
                            Delete
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>0001</td>
                    <td>Sijo Nathan</td>
                    <td>05/22/2023</td>
                    <td>2 hour</td>
                    <td>06:00 PM</td>
                    <td>08:00 PM</td>
                    <td>5$</td>
                    <td>Something else . . . .</td>
                    <td>
                        <button type="button" id="btn-edit">
                            Edit
                        </button>
                        <button type="button" id="btn-delet">
                            Delete
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>0001</td>
                    <td>Sijo Nathan</td>
                    <td>05/22/2023</td>
                    <td>2 hour</td>
                    <td>06:00 PM</td>
                    <td>08:00 PM</td>
                    <td>5$</td>
                    <td>Something else . . . .</td>
                    <td>
                        <button type="button" id="btn-edit">
                            Edit
                        </button>
                        <button type="button" id="btn-delet">
                            Delete
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>0001</td>
                    <td>Sijo Nathan</td>
                    <td>05/22/2023</td>
                    <td>2 hour</td>
                    <td>06:00 PM</td>
                    <td>08:00 PM</td>
                    <td>5$</td>
                    <td>Something else . . . .</td>
                    <td>
                        <button type="button" id="btn-edit">
                            Edit
                        </button>
                        <button type="button" id="btn-delet">
                            Delete
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>0001</td>
                    <td>Sijo Nathan</td>
                    <td>05/22/2023</td>
                    <td>2 hour</td>
                    <td>06:00 PM</td>
                    <td>08:00 PM</td>
                    <td>5$</td>
                    <td>Something else . . . .</td>
                    <td>
                        <button type="button" id="btn-edit">
                            Edit
                        </button>
                        <button type="button" id="btn-delet">
                            Delete
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>0001</td>
                    <td>Sijo Nathan</td>
                    <td>05/22/2023</td>
                    <td>2 hour</td>
                    <td>06:00 PM</td>
                    <td>08:00 PM</td>
                    <td>5$</td>
                    <td>Something else . . . .</td>
                    <td>
                        <button type="button" id="btn-edit">
                            Edit
                        </button>
                        <button type="button" id="btn-delet">
                            Delete
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>0001</td>
                    <td>Sijo Nathan</td>
                    <td>05/22/2023</td>
                    <td>2 hour</td>
                    <td>06:00 PM</td>
                    <td>08:00 PM</td>
                    <td>5$</td>
                    <td>Something else . . . .</td>
                    <td>
                        <button type="button" id="btn-edit">
                            Edit
                        </button>
                        <button type="button" id="btn-delet">
                            Delete
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>0001</td>
                    <td>Sijo Nathan</td>
                    <td>05/22/2023</td>
                    <td>2 hour</td>
                    <td>06:00 PM</td>
                    <td>08:00 PM</td>
                    <td>5$</td>
                    <td>Something else . . . .</td>
                    <td>
                        <button type="button" id="btn-edit">
                            Edit
                        </button>
                        <button type="button" id="btn-delet">
                            Delete
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>0001</td>
                    <td>Sijo Nathan</td>
                    <td>05/22/2023</td>
                    <td>2 hour</td>
                    <td>06:00 PM</td>
                    <td>08:00 PM</td>
                    <td>5$</td>
                    <td>Something else . . . .</td>
                    <td>
                        <button type="button" id="btn-edit">
                            Edit
                        </button>
                        <button type="button" id="btn-delet">
                            Delete
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>0001</td>
                    <td>Sijo Nathan</td>
                    <td>05/22/2023</td>
                    <td>2 hour</td>
                    <td>06:00 PM</td>
                    <td>08:00 PM</td>
                    <td>5$</td>
                    <td>Something else . . . .</td>
                    <td>
                        <button type="button" id="btn-edit">
                            Edit
                        </button>
                        <button type="button" id="btn-delet">
                            Delete
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>0001</td>
                    <td>Sijo Nathan</td>
                    <td>05/22/2023</td>
                    <td>2 hour</td>
                    <td>06:00 PM</td>
                    <td>08:00 PM</td>
                    <td>5$</td>
                    <td>Something else . . . .</td>
                    <td>
                        <button type="button" id="btn-edit">
                            Edit
                        </button>
                        <button type="button" id="btn-delet">
                            Delete
                        </button>
                    </td>
                </tr>
            </tbody>
    </table>
    <!-- end table content -->
@endsection('content')