@extends('layouts.main')
@section('content')

    <!-- start form input -->
    <form action="" class="box-employee-form">
        <div class="row">
            <div class="col-xl-5 col-lg-5">
                <label for="">Full Name</label><br>
                <input class="box-input" type="text" placeholder="enter here . . .">
            </div>
            <div class="col-xl-4 col-lg-4">
                <label for="">Start Date</label><br>
                <input class="box-input" type="date" >
            </div>
            <div class="col-xl-3 col-lg-3">
                <label for="">Departments</label><br>
                <select class="box-input" name="" id="">
                    <option value="Department 1">Department 1</option>
                    <option value="Department 2">Department 2</option>
                    <option value="Department 3">Department 3</option>
                    <option value="Department 4">Department 4</option>
                </select>
            </div>
            <div class="col-xl-3 col-lg-3">
                <label for="">Position</label><br>
                <select class="box-input" name="" id="">
                    <option value="Internship">Internship</option>
                    <option value="Advisor">Advisor</option>
                    <option value="Manager">Manager</option>
                    <option value="Laber">Laber</option>
                </select>
            </div>
            <div class="col-xl-3 col-lg-3">
                <label for="">Duration</label>
                <input class="box-input" type="number" name="" id="">
            </div>
            <div class="col-xl-6 col-lg-6">
                <label for="">Reasons</label>
                <textarea class="" name="" id="" cols="30" rows="100" placeholder="Enter here . . ."></textarea>
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
    <div class="row">
        <div class="col-xl-6 col-lg-6">
                <div class="box-search">
                    <input type="text" name="" id="" placeholder="search . . . .">
                    <button><img src="/assets/images/icons/search_ic.png" alt=""></button>
                </div>
        </div>
        <div class="col-xl-6 col-lg-6">
                <div class="box-search">
                    <select name="" id="">
                        <option value="id">ID</option>
                        <option value="name">Name</option>
                        <option value="status">Status</option>
                        <option value="project">Project</option>
                    </select>
                </div>
        </div>
    </div>
    <!-- end action -->
    <!-- start card employees -->
    <div class="row">
        <div class="col-xl-3 col-lg-3">
            <div class="box-employees" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <img src="/assets/images/img/OIP.jpeg" alt="">
                <div class="box-contents">
                    <span><h6>Jonathan.Jr</h6></span>
                    <span><p>Web Design</p></span>
                    <div class="box-email">
                        <span><p>Lasts 4 days</p></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3">
            <div class="box-employees" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <img src="/assets/images/img/OIP.jpeg" alt="">
                <div class="box-contents">
                    <span><h6>Jonathan.Jr</h6></span>
                    <span><p>Web Design</p></span>
                    <div class="box-email">
                        <span><p>Lasts 4 days</p></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3">
            <div class="box-employees" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <img src="/assets/images/img/OIP.jpeg" alt="">
                <div class="box-contents">
                    <span><h6>Jonathan.Jr</h6></span>
                    <span><p>Web Design</p></span>
                    <div class="box-email">
                        <span><p>Lasts 4 days</p></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3">
            <div class="box-employees" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <img src="/assets/images/img/OIP.jpeg" alt="">
                <div class="box-contents">
                    <span><h6>Jonathan.Jr</h6></span>
                    <span><p>Web Design</p></span>
                    <div class="box-email">
                        <span><p>Lasts 4 days</p></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3">
            <div class="box-employees" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <img src="/assets/images/img/OIP.jpeg" alt="">
                <div class="box-contents">
                    <span><h6>Jonathan.Jr</h6></span>
                    <span><p>Web Design</p></span>
                    <div class="box-email">
                        <span><p>Lasts 4 days</p></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3">
            <div class="box-employees" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <img src="/assets/images/img/OIP.jpeg" alt="">
                <div class="box-contents">
                    <span><h6>Jonathan.Jr</h6></span>
                    <span><p>Web Design</p></span>
                    <div class="box-email">
                        <span><p>Lasts 4 days</p></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3">
            <div class="box-employees" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <img src="/assets/images/img/OIP.jpeg" alt="">
                <div class="box-contents">
                    <span><h6>Jonathan.Jr</h6></span>
                    <span><p>Web Design</p></span>
                    <div class="box-email">
                        <span><p>Lasts 4 days</p></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end card employees -->
@endsection('content')
@section('modal')
<div class="modal fade modal-box" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog box-modal">
        <div class="modal-content">
            <div class="modal-header box-header-modal-employees">
                <h5 class="modal-title" id="exampleModalLabel">
                    <img src="/assets/images/img/OIP.jpeg" alt="">
                </h5>
            </div>
            <div class="modal-body box-body-modal-employees">
                <br>
                <div class="row">
                    <div class="col-xl-4 col-lg-4"><span>Employee Name</span></div>
                    <div class="col-xl-1 col-lg-1"><span>:</span></div>
                    <div class="col-xl-7 col-lg-7"><span>Visal Nann</span></div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xl-4 col-lg-4"><span>Department</span></div>
                    <div class="col-xl-1 col-lg-1"><span>:</span></div>
                    <div class="col-xl-7 col-lg-7"><span>Developments</span></div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xl-4 col-lg-4"><span>Possiton</span></div>
                    <div class="col-xl-1 col-lg-1"><span>:</span></div>
                    <div class="col-xl-7 col-lg-7"><span>Internship</span></div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xl-4 col-lg-4"><span>From Date</span></div>
                    <div class="col-xl-1 col-lg-1"><span>:</span></div>
                    <div class="col-xl-7 col-lg-7"><span>09/01/2022</span></div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xl-4 col-lg-4"><span>Lasts Days</span></div>
                    <div class="col-xl-1 col-lg-1"><span>:</span></div>
                    <div class="col-xl-7 col-lg-7"><span>1 days</span></div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xl-4 col-lg-4"><span>Reasons</span></div>
                    <div class="col-xl-1 col-lg-1"><span>:</span></div>
                    <div class="col-xl-7 col-lg-7"><span>Casual leave should be usually an emergency, such as illness or injury, family or pets emergencies, house incidents, etc., or for personal reasons, such as a mental health day</span></div>
                </div>
                <br>
            </div>
            <div class="modal-footer box-footer-modal-employees">
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