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
                        <h4 class="card-title">Apointment Table</h4>


                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Customer name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Doctor name</th>
                                    <th>Date</th>
                                    <th>Message</th>
                                    <th>Status</th>
                                    <th>Approved</th>
                                    <th>Cancel</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $appoint)
                                    <tr>
                                        <td>{{$appoint->name}}</td>
                                        <td>{{$appoint->email}}</td>
                                        <td>{{$appoint->phone}}</td>
                                        <td>{{$appoint->doctor}}</td>
                                        <td>{{$appoint->date}}</td>
                                        <td>{{$appoint->message}}</td>
                                        <td>{{$appoint->status}}</td>

                                        <td><a class="btn btn-success" onclick="return confirm('Are you sure to approved')"

                                               href="{{url('approved',$appoint->id)}}">
                                                Approved</a>
                                        </td>
                                        <td><a class="btn btn-danger" onclick="return confirm('Are you sure to canceled')"

                                               href="{{url('canceled',$appoint->id)}}">
                                                Cancelled</a>
                                        </td>

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
