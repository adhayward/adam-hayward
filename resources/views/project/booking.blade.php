@extends('layouts.app', ['title'=>'Event Booking System'])
 
@section('content')
    <div class="card-body">
        <div class="lead">
            <p>An events equipment hire company approached us to develop a booking system to keep track of their inventory.</p>
            <p class="reqs">Key Requirements:</p>
            <ul>
                <li>An inventory list detailing all items that can be hired out</li>
                <li>Ability to register events with multiple locations, customer contacts and required equipment</li>
                <li>Customer approval processes to log that the customer had agreed to the requirements</li>
                <li>Single detailed view of the event</li>
                <li>Ability to view events on calendar apps</li>
            </ul>

            <p>The first major hurdle with this project was the single detailed view of each event. The events themselves consisted of large quantities of nested data that all needed to be editable. The solution I came up with was a series of nested view files to build the detailed view. Using a javascript library called Pjax I was able to allow individual sections of the page to be replaced with editable versions when part of the event needed changes without reloading the whole page. This allowed for a more seamless operation for the end user without having the strain of submitting all data for the entire event for every small change.</p>
            <p>This was also my first time working with the iCalendar data format. I was able to take the data for each event and dynamically produce an iCalendar file at a given URL ensuring that any calendar app they registered the URL with would always give the latest information.</p>
            
            <p class="reqs">Conclusion:</p>
            <p>This was one of my first experiences of developing a PHP web application and I was very pleased with the result. There are many aspects I would do differently now but there were many valuable skills I learnt while developing this system that I still use today.</p>
        </div> 
    </div> 
@endsection