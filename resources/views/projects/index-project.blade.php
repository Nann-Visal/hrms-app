@extends('layouts.main')
@section('content')
    <div class="box-project-input">

        <!-- start form input -->
        <form action="">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <label class="box-label" for="">Project Name</label><br>
                    <input class="box-input"type="text" name="" id="" placeholder="Example Name . . .">
                </div>
                <div class="col-xl-6 col-lg-6">
                    <label class="box-label" for="">Project Status</label><br>
                    <select name="" id="" class="box-input">
                        <option value="Runnin">Running</option>
                        <option value="New">New</option>
                        <option value="Completed">Completed</option>
                        <option value="Failed">Failed</option>
                    </select>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <label class="box-label" for="">Start date</label><br>
                    <input class="box-input" type="date" name="" id="" >
                </div>
                <div class="col-xl-6 col-lg-6">
                    <label class="box-label" for="">End date</label><br>
                    <input class="box-input" type="date" name="" id="">
                </div>
                <div class="col-xl-12 col-lg-12">
                    <label class="box-label" for="">Description</label><br>
                    <textarea class="box-input-description" placeholder="Enter here . . . . ." name="" id="" cols="30" rows="100"></textarea>
                </div>
            </div>
        </form>
        <!-- end form input -->

        <!-- start action -->
        <div class="row">
            <div class="col-xl-5 col-lg-5">
                <div class="box-search">
                    <input type="text" name="" id="" placeholder="search . . . .">
                    <button><img src="/assets/images/icons/search_ic.png" alt=""></button>
                </div>
            </div>
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

        <!-- start progress bar chart -->
        <div class=" row card-project">
            <div class="col-xl-4 col-lg-4">
                <div class="box-card-project">
                    <div class="row">
                        <div class="col-xl-10 col-lg-10">
                            <h6>Project 1</h6>
                            <p id="id-txt-title">Web-App</p>
                        </div>
                        <div class="col-xl-2 col-lg-2">
                            <i class="fa-sharp fa-solid fa-code"></i>
                            <p id="id-txt-progress">64%</p>
                        </div>
                    </div>
                    <div class="box-progress">
                        <div class="box-progressbar"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4">
                <div class="box-card-project">
                    <div class="row">
                        <div class="col-xl-10 col-lg-10">
                            <h6>Project 1</h6>
                            <p id="id-txt-title">Web-App</p>
                        </div>
                        <div class="col-xl-2 col-lg-2">
                            <i class="fa-sharp fa-solid fa-code"></i>
                            <p id="id-txt-progress">64%</p>
                        </div>
                    </div>
                    <div class="box-progress">
                        <div class="box-progressbar"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4">
                <div class="box-card-project">
                    <div class="row">
                        <div class="col-xl-10 col-lg-10">
                            <h6>Project 1</h6>
                            <p id="id-txt-title">Web-App</p>
                        </div>
                        <div class="col-xl-2 col-lg-2">
                            <i class="fa-sharp fa-solid fa-code"></i>
                            <p id="id-txt-progress">64%</p>
                        </div>
                    </div>
                    <div class="box-progress">
                        <div class="box-progressbar"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4">
                <div class="box-card-project">
                    <div class="row">
                        <div class="col-xl-10 col-lg-10">
                            <h6>Project 1</h6>
                            <p id="id-txt-title">Web-App</p>
                        </div>
                        <div class="col-xl-2 col-lg-2">
                            <i class="fa-sharp fa-solid fa-code"></i>
                            <p id="id-txt-progress">64%</p>
                        </div>
                    </div>
                    <div class="box-progress">
                        <div class="box-progressbar"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4">
                <div class="box-card-project">
                    <div class="row">
                        <div class="col-xl-10 col-lg-10">
                            <h6>Project 1</h6>
                            <p id="id-txt-title">Web-App</p>
                        </div>
                        <div class="col-xl-2 col-lg-2">
                            <i class="fa-sharp fa-solid fa-code"></i>
                            <p id="id-txt-progress">64%</p>
                        </div>
                    </div>
                    <div class="box-progress">
                        <div class="box-progressbar"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4">
                <div class="box-card-project">
                    <div class="row">
                        <div class="col-xl-10 col-lg-10">
                            <h6>Project 1</h6>
                            <p id="id-txt-title">Web-App</p>
                        </div>
                        <div class="col-xl-2 col-lg-2">
                            <i class="fa-sharp fa-solid fa-code"></i>
                            <p id="id-txt-progress">64%</p>
                        </div>
                    </div>
                    <div class="box-progress">
                        <div class="box-progressbar"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end progress bar chart -->

        <!-- start tabel for detail -->
        <div class="box-table">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Projecs Name</th>
                        <th>Status</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Descriptions</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1234</td>
                        <td>App Store</td>
                        <td>Running</td>
                        <td>12/27/2023</td>
                        <td>02/10/2024</td>
                        <td>
                            <button type="button btn" id="btn-detail" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="fa-solid fa-circle-info"></i>
                                <span>Detail</span>
                            </button>
                        </td>
                        <td>
                            <button type="button" id="btn-edit">
                                <i class="fa-solid fa-square-pen"></i>
                                <span>Edit</span>
                            </button>
                            <button type="button" id="btn-deleted">
                                <i class="fa-solid fa-trash"></i>
                                <span>Delete</span>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>1234</td>
                        <td>App Store</td>
                        <td>Running</td>
                        <td>12/27/2023</td>
                        <td>02/10/2024</td>
                        <td>
                            <button type="button btn" id="btn-detail" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="fa-solid fa-circle-info"></i>
                                <span>Detail</span>
                            </button>
                        </td>
                        <td>
                            <button type="button" id="btn-edit">
                                <i class="fa-solid fa-square-pen"></i>
                                <span>Edit</span>
                            </button>
                            <button type="button" id="btn-deleted">
                                <i class="fa-solid fa-trash"></i>
                                <span>Delete</span>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>1234</td>
                        <td>App Store</td>
                        <td>Running</td>
                        <td>12/27/2023</td>
                        <td>02/10/2024</td>
                        <td>
                            <button type="button btn" id="btn-detail" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="fa-solid fa-circle-info"></i>
                                <span>Detail</span>
                            </button>
                        </td>
                        <td>
                            <button type="button" id="btn-edit">
                                <i class="fa-solid fa-square-pen"></i>
                                <span>Edit</span>
                            </button>
                            <button type="button" id="btn-deleted">
                                <i class="fa-solid fa-trash"></i>
                                <span>Delete</span>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>1234</td>
                        <td>App Store</td>
                        <td>Running</td>
                        <td>12/27/2023</td>
                        <td>02/10/2024</td>
                        <td>
                            <button type="button btn" id="btn-detail" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="fa-solid fa-circle-info"></i>
                                <span>Detail</span>
                            </button>
                        </td>
                        <td>
                            <button type="button" id="btn-edit">
                                <i class="fa-solid fa-square-pen"></i>
                                <span>Edit</span>
                            </button>
                            <button type="button" id="btn-deleted">
                                <i class="fa-solid fa-trash"></i>
                                <span>Delete</span>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>1234</td>
                        <td>App Store</td>
                        <td>Running</td>
                        <td>12/27/2023</td>
                        <td>02/10/2024</td>
                        <td>
                            <button type="button btn" id="btn-detail" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="fa-solid fa-circle-info"></i>
                                <span>Detail</span>
                            </button>
                        </td>
                        <td>
                            <button type="button" id="btn-edit">
                                <i class="fa-solid fa-square-pen"></i>
                                <span>Edit</span>
                            </button>
                            <button type="button" id="btn-deleted">
                                <i class="fa-solid fa-trash"></i>
                                <span>Delete</span>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- end table for detail -->
    </div>
@endsection('content')

@section('modal')
<div class="modal fade modal-box" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog box-modal">
        <div class="modal-content">
            <div class="modal-header box-header-modal">
                <h5 class="modal-title" id="exampleModalLabel">Project 1</h5>
            </div>
            <div class="modal-body box-body-modal">
                <br>
                <div class="row">
                    <div class="col-xl-4 col-lg-4"><span>Project Name</span></div>
                    <div class="col-xl-1 col-lg-1"><span>:</span></div>
                    <div class="col-xl-7 col-lg-7"><span>System HRMS</span></div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xl-4 col-lg-4"><span>Start Date</span></div>
                    <div class="col-xl-1 col-lg-1"><span>:</span></div>
                    <div class="col-xl-7 col-lg-7"><span>27/06/2023</span></div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xl-4 col-lg-4"><span>End Date</span></div>
                    <div class="col-xl-1 col-lg-1"><span>:</span></div>
                    <div class="col-xl-7 col-lg-7"><span>27/08/2023</span></div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xl-4 col-lg-4"><span>Status</span></div>
                    <div class="col-xl-1 col-lg-1"><span>:</span></div>
                    <div class="col-xl-7 col-lg-7"><span>Running</span></div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xl-4 col-lg-4"><span>Task Summary</span></div>
                    <div class="col-xl-1 col-lg-1"><span>:</span></div>
                    <div class="col-xl-7 col-lg-7"><span>17</span></div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xl-4 col-lg-4"><span>Employees</span></div>
                    <div class="col-xl-1 col-lg-1"><span>:</span></div>
                    <div class="col-xl-7 col-lg-7"><span>7</span></div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xl-4 col-lg-4"><span>Descriptions</span></div>
                    <div class="col-xl-1 col-lg-1"><span>:</span></div>
                    <div class="col-xl-7 col-lg-7"><span>A Helmet Mounted Radar System (HRMS) is a technology that uses radar to locate targets. The system weighs less than 2 12 pounds with less than one pound mounted on the helmet, and several options are being investigated to cue the soldier to the whereabouts of the targets.</span></div>
                </div>
                <br>
            </div>
            <div class="modal-footer box-footer-modal">
                <button type="button" class="btn-action-depa" id="btn-action-close" data-bs-dismiss="modal">
                    <i class="fa-solid fa-xmark"></i> &nbsp; Close
                </button>
            </div>
        </div>
    </div>
</div>
@endsection('modal')