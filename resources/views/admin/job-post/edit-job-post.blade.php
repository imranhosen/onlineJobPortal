@extends('admin.master')



@section('body')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="container-fluid banner_full_bg">
                        <div class="container">
                            <div class="row">
                                <div style="margin-top: 10px">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <h1 class="text-center">Edit Job Post</h1>
                                        <hr>
                                        @if($message=Session::get('message'))
                                            <div class="well">
                                                <h3 class="text-center text-success">{{$message}}</h3>
                                            </div>

                                        @endif
                                        <form name="editJobPostForm" class="form-horizontal" method="POST" action="{{url('job-post/update-job-post')}}" enctype="multipart/form-data">
                                            {{csrf_field()}}
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Job Title</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="job_title" class="form-control" id="inputEmail3" placeholder="Job Title" value="{{$jobsInfo->job_title}}">
                                                    <input type="hidden" name="job_id" value="{{$jobsInfo->id}}">
                                                    <span class="text-danger">{{$errors->has('job_title')?$errors->first('job_title'):''}}</span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Job Designation</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="job_designation" class="form-control" id="inputEmail3" placeholder="Job designation" value="{{$jobsInfo->job_designation}}">
                                                    <span class="text-danger">{{$errors->has('job_designation')?$errors->first('job_designation'):''}}</span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">No of Vacancies</label>
                                                <div class="col-sm-9">
                                                    <input type="number" name="vacancey" class="form-control" id="inputEmail3" placeholder="No of Vacancies" value="{{$jobsInfo->vacancey}}">
                                                    <span class="text-danger">{{$errors->has('vacancey')?$errors->first('vacancey'):''}}</span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Job Category</label>
                                                <div class="col-sm-9">
                                                    <select class="form-control" name="category_id">
                                                        <option>Select Job Category</option>
                                                        @foreach($categories as $category)
                                                            <option value="{{$category->id}}">{{$category->category_name}}</option>
                                                        @endforeach

                                                    </select>
                                                    <span class="text-danger">{{$errors->has('job_categroy')?$errors->first('job_categroy'):''}}</span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Educational Requirements</label>
                                                <div class="col-sm-9">
                                                    <select class="form-control" name="educational_requirements">
                                                        <option>Select Education Requirements</option>
                                                        <option value="MBA">MBA</option>
                                                        <option value="MBS/Masters">MBS/Masters</option>
                                                        <option value="MA">MA</option>
                                                        <option value="BBA">BBA</option>
                                                        <option value="BBS">BBS</option>
                                                        <option value="BSc">BSc</option>
                                                        <option value="HSC">HSC</option>
                                                        <option value="SSC">SSC</option>


                                                    </select>
                                                    <span class="text-danger">{{$errors->has('educational_requirements')?$errors->first('educational_requirements'):''}}</span>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Experience Requirements</label>
                                                <div class="col-sm-9">
                                                    <select class="form-control" name="experience_requirements" required>
                                                        <option>Select Experience Requirements</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4+</option>

                                                    </select>

                                                </div>
                                                <span class="text-danger">{{$errors->has('experience_requirements')?$errors->first('experience_requirements'):''}}</span>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Job Description</label>

                                                <div class="col-sm-9">

                                                    <textarea name="job_descripton" class="form-control" rows="6">{{$jobsInfo->job_descripton}}</textarea>
                                                    <span class="text-danger">{{$errors->has('job_descripton')?$errors->first('job_descripton'):''}}</span>

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Job Location</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="job_location" class="form-control" id="inputEmail3" placeholder="Job Loacation" value="{{$jobsInfo->job_location}}">
                                                    <span class="text-danger">{{$errors->has('job_location')?$errors->first('job_location'):''}}</span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Company Name</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="company_name" class="form-control" id="inputEmail3" placeholder="Company Name" value="{{$jobsInfo->company_name}}">
                                                    <span class="text-danger">{{$errors->has('company_name')?$errors->first('company_name'):''}}</span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Company Logo</label>
                                                <div class="col-sm-9">
                                                    <input type="file" name="company_logo" accept="image/*">
                                                    <span class="text-danger">{{$errors->has('salary')?$errors->first('salary'):''}}</span>
                                                    <span><img src="{{asset($jobsInfo->company_logo)}}" width="50px" height="60px"></span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Company Address</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="company_address" class="form-control" id="inputEmail3" placeholder="Company Address" value="{{$jobsInfo->company_address}}">
                                                    <span class="text-danger">{{$errors->has('company_address')?$errors->first('company_address'):''}}</span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Job Nature</label>
                                                <div class="col-sm-9">
                                                    <select class="form-control" name="job_nature">
                                                        <option>Select Job Nature</option>
                                                        <option value="Full Time">Full Time</option>
                                                        <option value="Part Time">Part Time</option>
                                                        <option value="Contracttual">Contracttual</option>

                                                    </select>
                                                    <span class="text-danger">{{$errors->has('job_nature')?$errors->first('job_nature'):''}}</span>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Salary</label>
                                                <div class="col-sm-9">
                                                    <input type="number" name="salary" class="form-control" id="inputEmail3" placeholder="Salary" value="{{$jobsInfo->salary}}">
                                                    <span class="text-danger">{{$errors->has('salary')?$errors->first('salary'):''}}</span>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <div class="col-sm-offset-9 col-sm-3">
                                                    <button type="submit" name="btn" class="btn btn-success btn-block">Update Job Info</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>



                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        {{--document.forms['editJobPostForm'].elements['category_id'].value="{{$category->id}}";--}}
        document.forms['editJobPostForm'].elements['category_id'].value="{{$jobsInfo->category_id}}";
        document.forms['editJobPostForm'].elements['educational_requirements'].value="{{$jobsInfo->educational_requirements}}";
        document.forms['editJobPostForm'].elements['experience_requirements'].value="{{$jobsInfo->experience_requirements}}";
        document.forms['editJobPostForm'].elements['job_nature'].value="{{$jobsInfo->job_nature}}";
    </script>
@endsection

