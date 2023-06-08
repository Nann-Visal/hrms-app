@extends('layouts.main')
@section('content')

    <!-- start form input -->
    <form action="" class="box-employee-form">
        <div class="row">
            <div class="col-xl-4 col-lg-4">
                <label for="">Full Name</label><br>
                <input class="box-input" type="text" placeholder="enter here . . .">
            </div>
            <div class="col-xl-4 col-lg-4">
                <label for="">Phone Number</label><br>
                <input class="box-input" type="text" placeholder="0XXXXXXXX">
            </div>
            <div class="col-xl-4 col-lg-4">
                <label for="">Date of Birth</label><br>
                <input class="box-input" type="date" >
            </div>
            <div class="col-xl-4 col-lg-4">
                <label for="">Email</label><br>
                <input class="box-input" type="email" placeholder="example@gmail.com">
            </div>
            <div class="col-xl-4 col-lg-4">
                <label for="">Address</label><br>
                <input class="box-input" type="text" placeholder="enter address here . . . .">
            </div>
            <div class="col-xl-4 col-lg-4">
                <label for="">Bank Account</label><br>
                <input class="box-input" type="text" placeholder="enter only number . . .">
            </div>
            <div class="col-xl-3 col-lg-3">
                <label for="">Start Date</label><br>
                <input class="box-input" type="date" >
            </div>
            <div class="col-xl-3 col-lg-3">
                <label for="">Salary</label><br>
                <input class="box-input" type="text" placeholder="enter only number . . .">
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
                <label for="">Departments</label><br>
                <select class="box-input" name="" id="">
                    <option value="Department 1">Department 1</option>
                    <option value="Department 2">Department 2</option>
                    <option value="Department 3">Department 3</option>
                    <option value="Department 4">Department 4</option>
                </select>
            </div>
            <div class="col-xl-4"></div>
            <div class="col-xl-4 col-lg-4">
                <label for="">CV</label><br>
                <input class="form-control form-control-xl box-input" id="formFileLg" type="file" />
            </div>
            <div class="col-xl-4 col-lg-4">
                <label for="">Profile</label><br>
                <input class="form-control form-control-xl box-input" id="formFileLg" type="file" />
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
                        <span><p>example@email.com</p></span>
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
                        <span><p>example@email.com</p></span>
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
                        <span><p>example@email.com</p></span>
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
                        <span><p>example@email.com</p></span>
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
                        <span><p>example@email.com</p></span>
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
                        <span><p>example@email.com</p></span>
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
                        <span><p>example@email.com</p></span>
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
                        <span><p>example@email.com</p></span>
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
                        <span><p>example@email.com</p></span>
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
                        <span><p>example@email.com</p></span>
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
                    <div class="col-xl-4 col-lg-4"><span>Possition</span></div>
                    <div class="col-xl-1 col-lg-1"><span>:</span></div>
                    <div class="col-xl-7 col-lg-7"><span>Developer</span></div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xl-4 col-lg-4"><span>Start Date</span></div>
                    <div class="col-xl-1 col-lg-1"><span>:</span></div>
                    <div class="col-xl-7 col-lg-7"><span>09/01/2022</span></div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xl-4 col-lg-4"><span>Salary</span></div>
                    <div class="col-xl-1 col-lg-1"><span>:</span></div>
                    <div class="col-xl-7 col-lg-7"><span>900$</span></div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xl-4 col-lg-4"><span>Date of Birth</span></div>
                    <div class="col-xl-1 col-lg-1"><span>:</span></div>
                    <div class="col-xl-7 col-lg-7"><span>05/13/1999</span></div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xl-4 col-lg-4"><span>Phone Number</span></div>
                    <div class="col-xl-1 col-lg-1"><span>:</span></div>
                    <div class="col-xl-7 col-lg-7"><span>0976749945</span></div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xl-4 col-lg-4"><span>Email</span></div>
                    <div class="col-xl-1 col-lg-1"><span>:</span></div>
                    <div class="col-xl-7 col-lg-7"><span>example@gmail.com</span></div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xl-4 col-lg-4"><span>Bank Account</span></div>
                    <div class="col-xl-1 col-lg-1"><span>:</span></div>
                    <div class="col-xl-7 col-lg-7"><span>500 404 004</span></div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xl-4 col-lg-4"><span>Address</span></div>
                    <div class="col-xl-1 col-lg-1"><span>:</span></div>
                    <div class="col-xl-7 col-lg-7"><span>29. thirs streed. phnom-penh</span></div>
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