@extends('teacher.layout.master')
@section('content')

<div class="row">
                  <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">{{ $page_name }}</strong>
                        </div>
                        <div class="card-body">
                          <!-- Credit Card -->
                          <div id="pay-invoice">
                              <div class="card-body">
                                @if(count($errors) > 0)
                                    <div class="alert alert-danger" role="alert">
                                        <ul>
                                        @foreach($errors->all() as $error)
                                            <li>
                                                {{ $error }}
                                            </li>
                                        @endforeach
                                        </ul>
                                    </div>
                                @endif

                                  <hr>
                                  {{ Form::open(['url' => 'dashboard/course/store', 'method'=>'post', 'enctype'=>'multipart/form-data']) }}
                                      
                                      <div class="form-group">
                                      {{ Form::label('c_name', 'Course Name', ['class' => 'control-label mb-1', 'id' => 'c_name']) }}
                                      {{ Form::text('c_name', null, ['class' => 'form-control']) }}
                                      </div>

                                      <div class="form-group">
                                      {{ Form::label('c_curriculum', 'Course Curriculum', ['class' => 'control-label mb-1', 'id' => 'c_curriculum']) }}
                                      {{ Form::textarea('c_curriculum', null, ['class' => 'form-control']) }}
                                      </div>

                                      <div class="form-group">
                                      {{ Form::label('c_link', 'Video Call Link', ['class' => 'control-label mb-1', 'id' => 'c_link']) }}
                                      {{ Form::text('c_link', null, ['class' => 'form-control']) }}
                                      </div>

                                      <div class="form-group">
                                        <input type="file" name="c_image" class="form-control-file text-primary" id="course-pic">
                                    </div>

                                    <div class="form-group">
                                      {{ Form::label('schedule', 'Select Schedule', ['class' => 'control-label mb-1']) }}
                                      {{ Form::select('schedule[]', $schedule, $selectedPermission, ['class' => 'form-control myselect', 'data-placeholder' => 'Select Schedules', 'multiple']) }}
                                    </div>


                                      <div>
                                          <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                              <i class="fa fa-lock fa-lg"></i>&nbsp;
                                              <span id="payment-button-amount">Create</span>
                                              <span id="payment-button-sending" style="display:none;">Sending…</span>
                                          </button>
                                      </div>
                                      {{ Form::close() }}
                              </div>
                          </div>

                        </div>
                    </div> <!-- .card -->

                  </div><!--/.col-->

                  <script src="{{ asset('teacher/assets/js/vendor/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('teacher/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('teacher/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('teacher/assets/js/main.js') }}"></script>

    <script src="{{ asset('teacher/assets/js/lib/data-table/datatables.min.js') }}"></script>
    <script src="{{ asset('teacher/assets/js/lib/data-table/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('teacher/assets/js/lib/data-table/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('teacher/assets/js/lib/data-table/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('teacher/assets/js/lib/data-table/jszip.min.js') }}"></script>
    <script src="{{ asset('teacher/assets/js/lib/data-table/pdfmake.min.js') }}"></script>
    <script src="{{ asset('teacher/assets/js/lib/data-table/vfs_fonts.js') }}"></script>
    <script src="{{ asset('teacher/assets/js/lib/data-table/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('teacher/assets/js/lib/data-table/buttons.print.min.js') }}"></script>
    <script src="{{ asset('teacher/assets/js/lib/data-table/buttons.colVis.min.js') }}"></script>

    <script>
    $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable(
            {
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            }
          );
        } );
    </script>


@endsection