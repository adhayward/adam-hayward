@extends('layouts.app', ['title'=>'Business to Business Storefront'])
 
@section('content')
    <div class="card-body">
        <div class="lead">
            <p>A clothing supplier that was already using our Uniform Management System approached us for something similar but without the uniform requirements.</p>
            <p class="reqs">Key Requirements:</p>
            <ul>
                <li>The ability to set up multiple branded webshops to accomodate multiple brands that the business operated under</li>
                <li>Detailed product information complete with safety specifcation documents</li>
                <li>Control over what products appeared in each webshop</li>
                <li>All orders should integrate directly into their internal stock management and financial systems</li>
                <li>Unlike ordinary webshops, there were to be no payments taken on the store as invoices were to be raised by the separate financial system</li>
                <li>Ability for users to track their orders online, with status and delivery tracking information automatically updated via API's</li>                    
            </ul>

            <p>Whilst baring many similarities to the existing uniform management system, I was now far more adept with PHP than I was during the initial development of that system. As such I decided to create a new solution from scratch rather than build on the groundwork of prior projects. As such this allowed me to develop using more modern versions of tools and better utilising the features of the Yii2 framework it was developed in. The downside to this was a slower start to development howerver the overall cleaner codebase meant that later stages of development proceded far more smoothly than they have on previous projects.</p>
            
            <p class="reqs">Conclusion:</p>
            <p>After completing this project, the customer immediately put multiple webshops to use. As their customers could now place and track their orders without having to directly speak to a representitive, this drastically reduced the workload of their Sales team and allowed them more time to prioritise new business.</p>
            <p>Similarly to the Uniform Management System, this project was also prepared for launching as a standalone product however other commitments have meant that it has not yet been launched</p>
        </div> 
    </div> 

@endsection