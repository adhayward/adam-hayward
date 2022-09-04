@extends('layouts.app', ['title'=>'Order Management System'])
 
@section('content')
    <div class="card-body">
        <div class="lead">
            <p>A tableware company approached us to create a bespoke order management system for their business. Primarily using an array of Excel spreadsheets to manage their entire business, after some rapid expansion they were struggling to keep track of everything.</p>
            <p class="reqs">Key Requirements:</p>
            <ul>
                <li>All of the data contained in the Excel spreadsheets should be available in the system, including a series of specific formulae used for calculating costs</li>
                <li>The system would need to be available online to allow overseas factories to see orders and enter data</li>
                <li>The data would need cleaning up and normalising into a relational database removing a lot of duplicate data entry</li>
                <li>Customisable reporting should be available, allowing users to query the database, similar to Excel's Pivot Tables. These reports needed to be saved in the users menu with the option to share them with other users.</li>
            </ul>
            <p>The heavy reliance on calculated data and large quantities of fields proved difficult for the performance of this system, particularly in the reporting. I was able to develop a solution using triggers on the database to store the calculated values which made queries significantly faster.</p>
            <hr>
            <p class="reqs">Conclusion:</p>
            <p>Once completed, this system became an essential tool for the customer and they rely heavily on it to this day. For me personally, it was a significant learning experience as I had not worked with data in these quantities on a PHP application up until this point. A number of techniques I learned while developing this system have also been reused across the projects I have developed since to ensure each project runs as efficiently as possible.</p>
        </div>
    </div> 
@endsection