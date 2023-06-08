@extends('layouts.main')
@section('content')

    <!-- start form input -->
    <form action="" class="box-depa-form">
        <div class="row">
            <div class="col-xl-6 col-lg6">
                <label for="">Department Name</label><br>
                <input class="box-input" type="text" name="" id="" placeholder="Enter here . . . .">
            </div>
            <div class="col-xl-3 col-lg3">
                <label for="">Create At</label><br>
                <input class="box-input" type="date" name="" id="">
            </div>
            <div class="col-xl-3 col-lg3">
                <label for="">Choose Advisor</label><br>
                <select class="box-input" name="" id="">
                    <option value="Advisor 1">Advisor 1</option>
                    <option value="Advisor 2">Advisor 2</option>
                    <option value="Advisor 3">Advisor 3</option>
                    <option value="Advisor 4">Advisor 4</option>
                    <option value="Advisor 5">Advisor 5</option>
                </select>
            </div>
            <div class="col-xl-6 col-lg-6">
                <label for="">Choose Employees</label>
                <div class="box-employee">
                    <div class="row box-items">
                        <div class="col-lx-1 col-lg-1">
                            <img src="/assets/images/img/OIP.jpeg" alt="">
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <h5>PalonamagaZing</h5>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <p>Web developer</p>
                        </div>
                        <div class="col-xl-1 col-lg-1">
                            <input type="checkbox" name="" id="">
                        </div>
                    </div>
                    <div class="row box-items">
                        <div class="col-lx-1 col-lg-1">
                            <img src="/assets/images/img/OIP.jpeg" alt="">
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <h5>PalonamagaZing</h5>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <p>Web developer</p>
                        </div>
                        <div class="col-xl-1 col-lg-1">
                            <input type="checkbox" name="" id="">
                        </div>
                    </div>
                    <div class="row box-items">
                        <div class="col-lx-1 col-lg-1">
                            <img src="/assets/images/img/OIP.jpeg" alt="">
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <h5>PalonamagaZing</h5>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <p>Web developer</p>
                        </div>
                        <div class="col-xl-1 col-lg-1">
                            <input type="checkbox" name="" id="">
                        </div>
                    </div>
                    <div class="row box-items">
                        <div class="col-lx-1 col-lg-1">
                            <img src="/assets/images/img/OIP.jpeg" alt="">
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <h5>PalonamagaZing</h5>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <p>Web developer</p>
                        </div>
                        <div class="col-xl-1 col-lg-1">
                            <input type="checkbox" name="" id="">
                        </div>
                    </div>
                    <div class="row box-items">
                        <div class="col-lx-1 col-lg-1">
                            <img src="/assets/images/img/OIP.jpeg" alt="">
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <h5>PalonamagaZing</h5>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <p>Web developer</p>
                        </div>
                        <div class="col-xl-1 col-lg-1">
                            <input type="checkbox" name="" id="">
                        </div>
                    </div>
                    <div class="row box-items">
                        <div class="col-lx-1 col-lg-1">
                            <img src="/assets/images/img/OIP.jpeg" alt="">
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <h5>PalonamagaZing</h5>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <p>Web developer</p>
                        </div>
                        <div class="col-xl-1 col-lg-1">
                            <input type="checkbox" name="" id="">
                        </div>
                    </div>
                    <div class="row box-items">
                        <div class="col-lx-1 col-lg-1">
                            <img src="/assets/images/img/OIP.jpeg" alt="">
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <h5>PalonamagaZing</h5>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <p>Web developer</p>
                        </div>
                        <div class="col-xl-1 col-lg-1">
                            <input type="checkbox" name="" id="">
                        </div>
                    </div>
                    <div class="row box-items">
                        <div class="col-lx-1 col-lg-1">
                            <img src="/assets/images/img/OIP.jpeg" alt="">
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <h5>PalonamagaZing</h5>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <p>Web developer</p>
                        </div>
                        <div class="col-xl-1 col-lg-1">
                            <input type="checkbox" name="" id="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <label for="">Description</label>
                <textarea class="box-textarea" placeholder="Enter here . . . ." name="" id="" cols="30" rows="100"></textarea>
            </div>
        </div>
    </form>
    <!-- end form input -->

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

    <!-- start card depa -->
    <div class="row">
        <div class="col-xl-4 col-lg-4">
            <div class="box-depa-items">
                <h5>Department 1</h5>
                <img src="/assets/images/img/OIP.jpeg" alt="">
                <p>Advisor &nbsp; : &nbsp; NorakAlbhakhan</p>
                <div class="box-depa-action">
                    <p>Employees&nbsp; : &nbsp;8</p>
                    <p>Create At&nbsp; : &nbsp;08/20/2023</p>
                    <button type="button" class="btn-view-depa" data-bs-toggle="modal" data-bs-target="#exampleModal">view detail</button>
                </div>
                
            </div>
        </div>
        <div class="col-xl-4 col-lg-4">
            <div class="box-depa-items">
                <h5>Department 1</h5>
                <img src="/assets/images/img/OIP.jpeg" alt="">
                <p>Advisor &nbsp; : &nbsp; NorakAlbhakhan</p>
                <div class="box-depa-action">
                    <p>Employees&nbsp; : &nbsp;8</p>
                    <p>Create At&nbsp; : &nbsp;08/20/2023</p>
                    <button type="button" class="btn-view-depa" data-bs-toggle="modal" data-bs-target="#exampleModal">view detail</button>
                </div>
                
            </div>
        </div>
        <div class="col-xl-4 col-lg-4">
            <div class="box-depa-items">
                <h5>Department 1</h5>
                <img src="/assets/images/img/OIP.jpeg" alt="">
                <p>Advisor &nbsp; : &nbsp; NorakAlbhakhan</p>
                <div class="box-depa-action">
                    <p>Employees&nbsp; : &nbsp;8</p>
                    <p>Create At&nbsp; : &nbsp;08/20/2023</p>
                    <button type="button" class="btn-view-depa" data-bs-toggle="modal" data-bs-target="#exampleModal">view detail</button>
                </div>
                
            </div>
        </div>
        <div class="col-xl-4 col-lg-4">
            <div class="box-depa-items">
                <h5>Department 1</h5>
                <img src="/assets/images/img/OIP.jpeg" alt="">
                <p>Advisor &nbsp; : &nbsp; NorakAlbhakhan</p>
                <div class="box-depa-action">
                    <p>Employees&nbsp; : &nbsp;8</p>
                    <p>Create At&nbsp; : &nbsp;08/20/2023</p>
                    <button type="button" class="btn-view-depa" data-bs-toggle="modal" data-bs-target="#exampleModal">view detail</button>
                </div>
                
            </div>
        </div>
        <div class="col-xl-4 col-lg-4">
            <div class="box-depa-items">
                <h5>Department 1</h5>
                <img src="/assets/images/img/OIP.jpeg" alt="">
                <p>Advisor &nbsp; : &nbsp; NorakAlbhakhan</p>
                <div class="box-depa-action">
                    <p>Employees&nbsp; : &nbsp;8</p>
                    <p>Create At&nbsp; : &nbsp;08/20/2023</p>
                    <button type="button" class="btn-view-depa" data-bs-toggle="modal" data-bs-target="#exampleModal">view detail</button>
                </div>
                
            </div>
        </div>
        <div class="col-xl-4 col-lg-4">
            <div class="box-depa-items">
                <h5>Department 1</h5>
                <img src="/assets/images/img/OIP.jpeg" alt="">
                <p>Advisor &nbsp; : &nbsp; NorakAlbhakhan</p>
                <div class="box-depa-action">
                    <p>Employees&nbsp; : &nbsp;8</p>
                    <p>Create At&nbsp; : &nbsp;08/20/2023</p>
                    <button type="button" class="btn-view-depa" data-bs-toggle="modal" data-bs-target="#exampleModal">view detail</button>
                </div>
                
            </div>
        </div>
        <div class="col-xl-4 col-lg-4">
            <div class="box-depa-items">
                <h5>Department 1</h5>
                <img src="/assets/images/img/OIP.jpeg" alt="">
                <p>Advisor &nbsp; : &nbsp; NorakAlbhakhan</p>
                <div class="box-depa-action">
                    <p>Employees&nbsp; : &nbsp;8</p>
                    <p>Create At&nbsp; : &nbsp;08/20/2023</p>
                    <button type="button" class="btn-view-depa" data-bs-toggle="modal" data-bs-target="#exampleModal">view detail</button>
                </div>
                
            </div>
        </div>
        <div class="col-xl-4 col-lg-4">
            <div class="box-depa-items">
                <h5>Department 1</h5>
                <img src="/assets/images/img/OIP.jpeg" alt="">
                <p>Advisor &nbsp; : &nbsp; NorakAlbhakhan</p>
                <div class="box-depa-action">
                    <p>Employees&nbsp; : &nbsp;8</p>
                    <p>Create At&nbsp; : &nbsp;08/20/2023</p>
                    <button type="button" class="btn-view-depa" data-bs-toggle="modal" data-bs-target="#exampleModal">view detail</button>
                </div>
                
            </div>
        </div><div class="col-xl-4 col-lg-4">
            <div class="box-depa-items">
                <h5>Department 1</h5>
                <img src="/assets/images/img/OIP.jpeg" alt="">
                <p>Advisor &nbsp; : &nbsp; NorakAlbhakhan</p>
                <div class="box-depa-action">
                    <p>Employees&nbsp; : &nbsp;8</p>
                    <p>Create At&nbsp; : &nbsp;08/20/2023</p>
                    <button type="button" class="btn-view-depa" data-bs-toggle="modal" data-bs-target="#exampleModal">view detail</button>
                </div>
                
            </div>
        </div>
    </div>
    <!-- end card depa -->
@endsection('content')
@section('modal')
<div class="modal fade modal-box" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog box-modal">
        <div class="modal-content">
            <div class="modal-header box-header-modal-depa">
                <h5 class="modal-title" id="exampleModalLabel">Department 1</h5>
            </div>
            <div class="modal-body box-body-modal-depa">
                <br>
                <div class="row">
                    <div class="col-xl-4 col-lg-4"><span>Department Name</span></div>
                    <div class="col-xl-1 col-lg-1"><span>:</span></div>
                    <div class="col-xl-7 col-lg-7"><span>IT</span></div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xl-4 col-lg-4"><span>Create At</span></div>
                    <div class="col-xl-1 col-lg-1"><span>:</span></div>
                    <div class="col-xl-7 col-lg-7"><span>05/23/2022</span></div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xl-4 col-lg-4"><span>Advisor Name</span></div>
                    <div class="col-xl-1 col-lg-1"><span>:</span></div>
                    <div class="col-xl-7 col-lg-7"><span>Khhun Ahtit</span></div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xl-4 col-lg-4"><span>Descriptions</span></div>
                    <div class="col-xl-1 col-lg-1"><span>:</span></div>
                    <div class="col-xl-7 col-lg-7"><span>A Helmet Mounted Radar System (HRMS) is a technology that uses radar to locate targets. The system weighs less than 2 12 pounds with less than one pound mounted on the helmet, and several options are being investigated to cue the soldier to the whereabouts of the targets.</span></div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xl-4 col-lg-4"><span>Employees</span></div>
                    <div class="col-xl-1 col-lg-1"><span>:</span></div>
                    <div class="col-xl-7 col-lg-7">
                        <div class="box-modal-employees-items" id="box-modal-advisor-items">
                                <img src="/assets/images/img/OIP.jpeg" alt="">
                                <span><p>Dalindy</p></span>
                            </div>
                        <div class="box-modal-employees">
                            <div class="box-modal-employees-items">
                                <img src="/assets/images/img/OIP.jpeg" alt="">
                                <span><p>Dalindy</p></span>
                            </div>
                            <div class="box-modal-employees-items">
                                <img src="/assets/images/img/OIP.jpeg" alt="">
                                <span><p>Dalindy</p></span>
                            </div>
                            <div class="box-modal-employees-items">
                                <img src="/assets/images/img/OIP.jpeg" alt="">
                                <span><p>Dalindy</p></span>
                            </div>
                            <div class="box-modal-employees-items">
                                <img src="/assets/images/img/OIP.jpeg" alt="">
                                <span><p>Dalindy</p></span>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
            </div>
            <div class="modal-footer box-footer-modal-depa">
               <button type="button" class="btn-action-depa" id="btn-action-delete">
                    <i class="fa-solid fa-trash"></i> &nbsp; Delete
                </button>
                <button type="button" class="btn-action-depa" id="btn-action-edit">
                    <i class="fa-solid fa-pen-nib"></i> &nbsp; Edit
                </button>
                <button type="button" class="btn-action-depa" id="btn-action-close" data-bs-dismiss="modal">
                    <i class="fa-solid fa-xmark"></i> &nbsp; Close
                </button>
            </div>
        </div>
    </div>
</div>
@endsection('modal')