@extends('layouts.app')
 
<!-- @section('title', 'Open Ticket') -->
 
@section('content')
 
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Report Customer Complain</div>
            </br>
                    <div  align="right">
                        <a href="{{ url('rpt_ticketdate/pdf')}}" class="btn btn-danger">Convert To PDF</a>
                    </div>            
                <div class="table-responsive"> 
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
 
                   <table class="table table-hover">
                      <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Title</th>
                          <th scope="col">Priority</th>
                          <th scope="col">Message</th>
                          <th scope="col">Status</th>
                          <th scope="col">Date</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($ticket_data as $ticket)
                            <tr>
                              <td>{{ $ticket->ticket_id }}</td>
                              <td>{{ $ticket->title }}</td>
                              <td>{{ $ticket->priority }}</td>
                              <td>{{ $ticket->message }}</td>
                              <td>{{ $ticket->status }}</td>
                              <td>{{ $ticket->created_at }}</td>
                            </tr>
                        @endforeach                        
                      </tbody>
                    </table>
                </div>
            </div>        
    </div>
    </div>
 
@endsection