@extends('layout')




@section('content')


<div class="card">
            <div class="card-body">
              <h2 class="card-title">MBA Student Table</h2>
              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                      <tr>
                          <th>Student Roll</th>
                          <th>Student  Name</th>
                          <th>Student Email</th>
                          <th>Student Image</th>
                          <th>Student Address </th>
                          <th>Student Department</th>
                        
                          <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($mba_student_info as $mba_student)
                      <tr>
                          <td>{{$mba_student->student_roll}}</td>
                          <td>{{$mba_student->student_name}}</td>
                          <td>{{$mba_student->student_email}}</td>
                          <<td> <img src="{{URL::to($mba_student->student_image)}}"  height="80" width="100" style="border-radius: 50%;" > </td>
                          <td>{{$mba_student->student_address}}</td>
                          <td>{{$mba_student->student_department}} </td>
                          
                          <td>
                            <!-- <button class="btn btn-outline-primary">View</button>
                            <button class="btn btn-outline-warning">Edit</button> -->
                            <a href="{{URL::to ('/deletemba/'.$mba_student->student_id)}}"  id="delete">  <button class="btn btn-outline-danger">Delete</button> </a>
                          </td>
                      </tr>
                      @endforeach
                
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>


@endsection