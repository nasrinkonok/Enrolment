@extends('layout')
@section('content')

              <div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h1 class="card-title">Add Student</h1>
                          <form class="forms-sample" method="post" action="{{url('/save_student')}}" enctype="multipart/form-data">
                          	 {{ csrf_field() }}
                              <div class="form-group">
                                  <label for="">Student Name</label>
                                  <input type="text" class="form-control p-input" name="student_name" placeholder="Enter student Name">
                              </div>
                              <div class="form-group">
                                  <label for="">Student Password</label>
                                  <input type="password" class="form-control p-input" name="student_password" placeholder="Enter student Password">
                              </div> 
                              <div class="form-group">
                                  <label for="">Student Roll</label>
                                  <input type="text" class="form-control p-input" name="student_roll" placeholder="Enter student roll">
                              </div>
                               <div class="form-group">
                                  <label for="">Student Department</label>
                                 <select class="form-control p-input" name="student_department">
                                 	<option value="1">CSE</option>
                                 	<option value="2">CSSE</option>
                                 	<option value="3">CIS</option>
                                 	<option value="4">BBA</option>
                                 	<option value="5">EEE</option>

                                 </select>
                              </div>
                               <div class="form-group">
                                  <label for="">Student Admission Year</label>
                                  <input type="date" class="form-control p-input" name="student_admissionyear" placeholder="Enter student Admission year">
                              </div>
                               <div class="form-group">
                                  <label for="">Student Phone</label>
                                  <input type="text" class="form-control p-input" name="student_phone" placeholder="Enter student phone">
                              </div>
                               <div class="form-group">
                                  <label for="">Student Email</label>
                                  <input type="email" class="form-control p-input" name="student_email" placeholder="Enter student email">
                              </div>
                               <div class="form-group">
                                  <label for="">Student Father's Name</label>
                                  <input type="text" class="form-control p-input" name="student_fathersname" placeholder="Enter student Father's Name">
                              </div>
                               <div class="form-group">
                                  <label for="">Student Mother's Name</label>
                                  <input type="text" class="form-control p-input" name="student_mothersname" placeholder="Enter student Mother's Name">
                              </div>
                               <div class="form-group">
                                  <label for="">Student Address</label>
                                  <input type="text" class="form-control p-input" name="student_address" placeholder="Enter student Address">
                              </div>
                              <!--  <div class="form-group">
                                  <label for="">Student Image</label>
                                  <input type="text" class="form-control p-input" name="student_image" placeholder="Enter student Image">
                             </div> -->

                              <!-- <div class="form-group">
                                  <label for="exampleTextarea">Example textarea</label>
                                  <textarea class="form-control p-input" id="exampleTextarea" rows="3"></textarea>
                              </div> -->                             
                             
                             
                               <div class="form-group">
                                  <label>Upload Image</label>
                                  <div class="row">
                                    <div class="col-12">
                                      <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Image</label>
                                      <input type="file" class="form-control-file" id="exampleInputFile2" name="student_image" aria-describedby="fileHelp">
                                      <small id="fileHelp" class="form-text text-muted">Upload Student's Image....</small>
                                    </div>
                                  </div>
                              </div>
                              <button type="submit" class="btn btn-primary btn-label-left">Submit</button>
                          </form>
                      </div>
                  </div>
              </div>


@endsection