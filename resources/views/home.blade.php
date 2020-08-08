@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
 
                <div class="panel-body">
 
                    <h1>You are logged in As a <b> {{ Auth::user()->name }}</b></h1>
 
                    @if(Auth::user()->is_admin)
 
                        <!-- <p>
                            See all <a href="{{ url('admin/tickets') }}">tickets</a>
                        </p> -->

                        <div class="row">
                          <div class="col-sm-6">
                            <div class="card">
                              <div class="card-body">
                                <h4 class="card-title">See All Complains</h4>
                                <p class="card-text">Please click following button to see the all <b>Complains.</b></p>
                                <a href="{{ url('admin/tickets') }}" class="btn btn-primary">All Complains</a>
                              </div>
                            </div>
                          </div>
                        </div>

                    @else
 
                        <!-- <p>
                            See all your <a href="{{ url('my_tickets') }}">tickets</a> or <a href="{{ url('new-ticket') }}">open new ticket</a>
                        </p> -->

                        <div class="row">
                          <div class="col-sm-6">
                            <div class="card">
                              <div class="card-body">
                                <h4 class="card-title">See All Your Complains</h4>
                                <p class="card-text">Please click following button to see the all Your <b>Complains.</b></p>
                                <a href="{{ url('my_tickets') }}" class="btn btn-primary">My All Complains</a>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="card">
                              <div class="card-body">
                                <h4 class="card-title">Open New Complain</h4>
                                <p class="card-text">Please click following button to Open New <b>Complain.</b></p>
                                <a href="{{ url('new-ticket') }}" class="btn btn-success">New Complain</a>
                              </div>
                            </div>
                          </div>
                        </div>

                     @endif
 
                </div>
            </div>
        </div>
    </div>
</div>


<!-- <div class="col-lg-2 col-xs-3">
          <div class="small-box bg-aqua padding">
            <div class="inner left"><p>Chief Sec.</p></div>
            <div class="right"><h3>Good</h3></div>
          </div>
        </div> -->

@endsection