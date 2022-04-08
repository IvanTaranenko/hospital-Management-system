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
            <div class="col-lg-12 grid-margin stretch-card mt-lg-5 ">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Doctor Table</h4>


                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Doctor name</th>
                                    <th>Phone</th>
                                    <th>Speciality</th>
                                    <th>Room No</th>
                                    <th>Image</th>
                                    <th>Delete</th>
                                    <th>Update</th>


                                </tr>
                                </thead>
                                <tbody>
                                @foreach($doctors as $doctor)
                                    <tr>
                                        <td>{{$doctor->name}}</td>
                                        <td>{{$doctor->phone}}</td>
                                        <td>{{$doctor->speciality}}</td>
                                        <td>{{$doctor->room}}</td>
                                        {{--                                        <td>{{$doctor->image}}</td>--}}
                                        <td><img src="doctors/Image/{{$doctor->image}}" alt="doctor-img" width="45">
                                        </td>
                                        <td><a href="{{url('deletedoctor',$doctor->id)}}" class="btn btn-danger">Delete</a></td>
                                        <td><a href="{{url('updatedoctor',$doctor->id)}}" class="btn btn-primary">Update</a></td>




                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

