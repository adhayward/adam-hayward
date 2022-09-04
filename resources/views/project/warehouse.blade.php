@extends('layouts.app', ['title'=>'Warehouse Scanner App'])
 
@section('content')
    <div class="card-body">
        <div class="lead">
            <p>Part of Cuskit's ERP system involved warehousing using a now obsolete RFID based barcode scanner. With replacement scanners and parts becoming increasingly scarce, it became essential that we develop a replacement system.</p>
            <p class="reqs">Key Requirements:</p>
            <ul>
                <li>App running on Android based barcode scanners - with option to input barcodes via dedicated scanner hardware or a camera feed.</li>
                <li>Authorisation and available processes would need to be handled by the ERP system</li>
                <li>The app should simply send data to the server and report the result back</li>
            </ul>
            <p>Interacting with Zebra specific barcode scanner hardware was an interesting challenge. Firstly, I needed to learn how their hardware reports scanned barcodes, for which there was plenty of documentation. Secondly, we wanted the application to fall back to using the devices camera if the Zebra hardware was not available but there was very little information available on how to do this. I eventually found a solution where I was able to detect an whether a Zebra configuration app was installed which was the only reliable method we could find.</p>
            <p>This project also involved porting a portion of the ERP systems codebase from VB.NET into PHP so that the ERP database could be directly accessed via the web server that the android devices were connected to.</p>
            
            <hr>
            <p class="reqs">Conclusion:</p>
            <p>This project was a great opportunity to get stuck into a more complex android project and I gained a lot of experience with how development for that platform works while working on it. It was also great to see a significantly more modern solution to something that I had been working with for a long time. I took great steps while developing this application to not just port the existing functionality but to expand upon it, providing ways to utilise features previously unavailable such as a large, colour, touch-capable display. I feel that the end result was a significant improvement over what came before and I hope my efforts to future proof the app go some way to ensure ongoing development of the platform is relatively simple</p>
        </div>
    </div> 

@endsection