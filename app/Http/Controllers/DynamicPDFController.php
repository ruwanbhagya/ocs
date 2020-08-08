<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;

class DynamicPDFController extends Controller
{
    function index()
    {
    	$ticket_data = $this->get_ticket_data();    
    	return view('rpt_ticketdate')->with('ticket_data', $ticket_data);	
    }

    function get_ticket_data()
    {
    	$ticket_data = DB::table('tickets')
    					->limit(10)
    					->get();

    	return $ticket_data;
    }

    function pdf()
    {
    	$pdf = \App::make('dompdf.wrapper');
    	$pdf->loadHTML($this->convert_ticket_data_to_html());
    	return $pdf->stream();    	
    }

    function convert_ticket_data_to_html()
    {
    	$ticket_data = $this->get_ticket_data();
      $output = '
      <style>
      body {
        font-family: "iskolapotha";
      }
      </style>
      <meta http-equiv="Content-Type" content="text; charset=utf-8"/>
      
      <link href="http://fonts.googleapis.com/css2?family=Abhaya_Libre&display=swap" rel="stylesheet">
      <table style="">
                      <thead>
                        <tr>
                          <th scope="col">Ticket Id</th>
                          <th scope="col">Title</th>
                          <th scope="col">Priority</th>
                          <th scope="col">Message</th>
                          <th scope="col">Status</th>
                          <th scope="col">Date</th>
                        </tr>
                      </thead>
                      ';
                      foreach($ticket_data as $ticket)
                      {
                      	$output .= '
                      			<tr>
	                              <td>'.$ticket->ticket_id.' </td>
	                              <td>'.$ticket->title.'</td>
	                              <td>'.$ticket->priority.'</td>
	                              <td>'.$ticket->message.'</td>
	                              <td>'.$ticket->status.'</td>
	                              <td>'.$ticket->created_at.'</td>
                               </tr>
                      	';
                      }   
                      $output .= '</table>';      
                      return $output;            
    }
}
