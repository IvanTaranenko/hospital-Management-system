@extends('admin.home')

<style type="text/css">
    label {
        display: inline-block;
        margin-bottom: 30px;
    }
</style>
@section('content')



    <div class="container " style="margin-top: 50px">
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card ">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Doctor form</h4>
                        <p class="card-description"> Fill in information about doctor </p>
                        @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{session()->get('message')}}


                            </div>

                        @endif


                        <form action="{{url('editdoctor,$doctors->id')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Doctor Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                       value="{{$doctors->name}}">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone"
                                       value="{{$doctors->phone}}">
                            </div>
                            <div class="form-group">

                            <div class="form-group">
                                <label for="room">Room No</label>
                                <input type="text" class="form-control" id="room" name="room"
                                       value="{{$doctors->room}}">
                            </div>
                                <div class="form-group">
                                    <label for="room">Speciality</label>
                                    <input type="text" class="form-control" id="room" name="speciality"
                                           value="{{$doctors->speciality}}">
                                </div>
{{--                            <div class="form-group">--}}
{{--                                <label >Old Image</label>--}}
{{--                                <img src="doctors/Image/{{$doctors->image}}" alt=""  type="file" class="form-control" id="file" multiple name="image">--}}
{{--                            </div>--}}

{{--                                <div class="form-group">--}}
{{--                                    <label >Change  Image</label>--}}
{{--                                    <input    type="file" class="form-control"  multiple name="image">--}}
{{--                                </div>--}}

                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
