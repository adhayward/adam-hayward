@extends('layouts.app', ['title'=>'Event Scoreboard/Survey'])
 
@section('content')
    <div class="card-body">
        <div class="lead">
            <p>An company providing games and entertainment facilities for major events were looking for a system to incentivise visitors to complete surveys by creating leaderboards for their games.</p>
            <p class="reqs">Key Requirements:</p>
            <ul>
                <li>Events should be configured in advance</li>
                <li>Customisable surveys with lists of questions each with defined answer types (Free Text, Numeric, Date, Time, Dropdown list, Checkbox etc.)</li>
                <li>Surveys should be filled in on one of multiple iPads in use during the event</li>
                <li>A leaderboard should be displayed on a large screen at the event</li>
                <li>Survey responses should be collated and exportable to give to the event sponsor</li>
                <li>The app and leaderboard should be brandable based on the event sponsor</li>
                <li>Internet access is not guaranteed for the events</li>
            </ul>
            <p>The lack of internet access was a major challenge for this project. The solution I developed was that when an event was completely set up in the online portal, the user was able to download custom Bitnami package that would install a configured webserver on a host laptop. Once the laptop and the iPads were connected to a common Wi-Fi hotspot (even one without internet access) the iPads could scan a QR code from the laptops locally hosted webpage to connect to the relevant event. This host system would attempt to upload all data to the online portal if there was internet access with an option to upload everything when the laptop was back online if no connection was available during the event.</p>
            <p>This was also my first major project involving developing an iOS app and creating the dynamic UI required to adopt whatever survey was set up for the event proved to be a challenge. The Eureka iOS form builder library came in very useful for this and I was able to successfully create a configuration for Eureka based on the survey criteria laid out when the event was created.</p>
            
            <hr>
            <p class="reqs">Conclusion:</p>
            <p>This was a particularly interesting project to work on. Finding an easy to deploy solution for events where there was no internet was an enjoyable challenge that I feel was achieved with great success. Even though this was a far from a typical iOS app, I found it enjoyable to get involved in app development and it gave me a great insight into how the world of app development works.</p>
        </div>
    </div> 

@endsection