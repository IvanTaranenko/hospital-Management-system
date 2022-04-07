@extends('admin.home')

<style type="text/css">
    label{
        display: inline-block;
        margin-bottom: 30px;
    }
</style>
@section('content')


    <div class="container " style="margin-top: 50px">
<div class="row">
    <div class="col-md-6 grid-margin stretch-card " >
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Doctor form</h4>
                <p class="card-description"> Fill in information about doctor </p>
                <form class="forms-sample" method="POST" action="{{url('upload_doctor')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Doctor Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Write the name">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Write the phone">
                    </div>
                    <div class="form-group">
                        <label for="speciality">Speciality</label>
                        <select class="form-control form-control-lg" id="speciality" name="speciality">
                            <option>----Select-----</option>
                            <option value="Skin">Skin</option>
                            <option value="Heart">Heart</option>
                            <option value="eye">eye</option>
                            <option value="nose">nose</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="room">Room No</label>
                        <input type="text" class="form-control" id="room" name="room" placeholder="Write the Room No">
                    </div>
                    <div class="form-group">
                        <label for="file">Doctor Image</label>
                        <input type="file"  class="form-control" id="file"    multiple  name="image">
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
    </div>

@endsection
