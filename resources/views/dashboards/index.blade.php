@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-xl-3 col-lg-3">
            <div class="box-project-dsh">
                <div class="box-contents">
                    <i class="fa-solid fa-diagram-project"></i>
                    <p>Project Summary</p>
                </div>
                <span><p>57</p></span>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3">
            <div class="box-project-dsh">
                <div class="box-contents">
                    <i class="fa-solid fa-diagram-project"></i>
                    <p>Project Completed</p>
                </div>
                <span><p>37</p></span>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3">
            <div class="box-project-dsh">
                <div class="box-contents">
                    <i class="fa-solid fa-diagram-project"></i>
                    <p>Project Running</p>
                </div>
                <span><p>15</p></span>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3">
            <div class="box-project-dsh">
                <div class="box-contents">
                    <i class="fa-solid fa-diagram-project"></i>
                    <p>Project Failed</p>
                </div>
                <span><p>5</p></span>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6">
            <div class="box-emp-contents">
                    <div class="col-xl-3">
                        <i class="fa-solid fa-user-minus"></i>
                    </div>
                    <div class="col-xl-9">
                        <span><p>Former Employees <br>
                            0
                        </p></span>
                    </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6">
            <div class="box-emp-contents">
                    <div class="col-xl-3">
                        <i class="fa-solid fa-user-minus"></i>
                    </div>
                    <div class="col-xl-9">
                        <span><p>Pending Leaves <br>
                            3
                        </p></span>
                    </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6">
            <div class="box-emp-contents">
                    <div class="col-xl-3">
                        <i class="fa-solid fa-user-minus"></i>
                    </div>
                    <div class="col-xl-9">
                        <span><p>Employees Summary<br>
                            100
                        </p></span>
                    </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6">
            <div class="box-emp-contents">
                    <div class="col-xl-3">
                        <i class="fa-solid fa-user-minus"></i>
                    </div>
                    <div class="col-xl-9">
                        <span><p>Take Leave<br>
                            5
                        </p></span>
                    </div>
            </div>
        </div>
        <div class="col-xl-12] col-lg-12">
            <div class="box-dsh-project-running">
                <h5>Running Projects</h5>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Projects Name</th>
                            <th>Start date</th>
                            <th>Finish date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="box-td">project 1</td>
                            <td>2020-04-10</td>
                            <td>2020-05-10</td>
                        </tr>
                        <tr>
                            <td class="box-td">project 2</td>
                            <td>2020-04-10</td>
                            <td>2020-05-10</td>
                        </tr>
                        <tr>
                            <td class="box-td">project 3</td>
                            <td>2020-04-10</td>
                            <td>2020-05-10</td>
                        </tr>
                        <tr>
                            <td class="box-td">project 4</td>
                            <td>2020-04-10</td>
                            <td>2020-05-10</td>
                        </tr>
                        <tr>
                            <td class="box-td">project 5</td>
                            <td>2020-04-10</td>
                            <td>2020-05-10</td>
                        </tr>
                        <tr>
                            <td class="box-td">project 6</td>
                            <td>2020-04-10</td>
                            <td>2020-05-10</td>
                        </tr>
                        <tr>
                            <td class="box-td">project 7</td>
                            <td>2020-04-10</td>
                            <td>2020-05-10</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection('content')