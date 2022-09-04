@extends('layouts.app', ['title'=>'Uniform Management System'])
 
@section('content')
    <div class="card-body">
        <div class="lead">
            <p>Cuskit were approached to create a bespoke business to business webshop for a Uniform Supplier which had some specific requirements that made any popular webshop platform unviable.</p>
            <p class="reqs">Key Requirements:</p>
            <ul>
                <li>The products purchased needed to be assigned to specific employees at the customer</li>
                <li>Each employee would be assigned a uniform kit that determined what items they were allowed to order and how many of each item</li>
                <li>Reporting needed to be available to both the supplier and the customer which employees had used their full allowance</li>
                <li>Access to the webshop would be restricted to specific users determined by the supplier</li>
                <li>Once logged in, the webshop would use the customers branding to provide reassurance that users were ordering the correct uniform for their company</li>
            </ul>
            <p>This kind of uniform management was available in Cuskit's ERP system but this was not available online and did not include the webshop element. This meant I was able to use my knowledge of how this kind of ordering should work to build a webshop around these requirements.</p>
            <hr>
            
            <p class="reqs">Ongoing Deveopment:</p>
            <p>After the initial suppliers success with the system we developed, we identified a gap in the market for a product like this. While many uniform suppliers had bespoke systems providing this functionality, there were no third parties selling software designed for this purpose.</p>
            <p>So I was then tasked with expanding on the initial brief for this project to develop a product that could be sold to many more uniform suppliers.</p>
            <p>Some examples of the added functionality includes:</p>
            <ul>
                <li>Allowing different types of allowance restrictions - Total Cost or Points based rather than specific units</li>
                <li>API's & Webhooks for integration with third party software</li>
                <li>Options to require full or partial payments via credit/debit cards during checkout</li>
                <li>Customisable email notifications</li>
                <li>Options to adjust terminology within the system to better suit the needs of different businesses - e.g. Changing "Employee" to "Student"</li>
            </ul>
            <p>This product quickly became a huge success for Cuskit and went on to become a major part of the business's income. It gained a wide variety of popularity with smaller uniform suppliers who otherwise would not have been able to fund the development of their own bespoke system and eventually saw success internationally with a large Austrailian uniform supplier too.</p>
            <hr>
            
            <p class="reqs">Conclusion:</p>
            <p>For many years, this product was developed primarily by myself with very limited assistance from any other members of the team. The fact that it went on to be such a key aspect of our business will always be one of my proudest professional achievements.</p>
        </div> 
    </div> 

@endsection