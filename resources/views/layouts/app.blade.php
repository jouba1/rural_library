<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <style>
        /* Navigation Bar Styles */

        nav {
        display: flex; /* Make the nav bar a flexbox container */
        align-items: center; /* Center content vertically */
        justify-content: space-between; /* Distribute content horizontally with space between */
        padding: 1rem 2rem; /* Add some padding */
        background-color: #f0f2f5; /* Set background color */
        }

        /* Logo Styles */

        nav a.logo img {
        max-width: 100px; /* Set a maximum width for the logo */
        }

        /* Navigation Links Styles */

        nav ul {
        list-style: none; /* Remove default bullet points */
        margin: 0; /* Remove default margin */
        padding: 0; /* Remove default padding */
        display: flex;
        }

        nav ul li {
        margin-right: 1rem; /* Add margin between list items */
        }

        nav a {
        text-decoration: none; /* Remove underline from links */
        color: #333; /* Set link color */
        font-weight: 500; /* Set font weight for links */
        }

        nav a:hover {
        color: #666; /* Change link color on hover */
        }

        /* User Profile Dropdown Styles */

        nav .user-dropdown {
        position: relative; /* Enable positioning for the dropdown */
        }

        nav .user-dropdown button {
        background: none; /* Remove default button styles */
        border: none; /* Remove default button border */
        cursor: pointer; /* Set cursor to pointer on hover */
        display: flex;
        align-items: center;
        }

        nav .user-dropdown button svg {
        margin-left: 5px; /* Add margin between name and icon */
        }

        nav .user-dropdown ul {
        position: absolute; /* Make the dropdown menu absolute */
        top: 100%; /* Position the dropdown menu below the button */
        right: 0; /* Position the dropdown menu to the right */
        background-color: #fff; /* Set background color for the dropdown */
        list-style: none; /* Remove default bullet points */
        padding: 0; /* Remove default padding */
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1); /* Add a slight shadow */
        display: none; /* Hide the dropdown menu by default */
        }

        nav .user-dropdown:hover ul {
        display: block; /* Show the dropdown menu on hover */
        }

        nav .user-dropdown ul li {
        padding: 0.5rem 1rem; /* Add padding to list items */
        }

        nav .user-dropdown ul a {
        color: #333; /* Set text color for dropdown links */
        }

        nav .user-dropdown ul a:hover {
        background-color: #f0f2f5; /* Add a hover background color for dropdown links */
        }

        /* Hamburger Menu Styles */

        nav .hamburger {
        display: none; /* Hide the hamburger menu initially */
        }

        /* Media Queries for Responsive Design */

        @media (max-width: 768px) {
        nav ul {
            display: none; /* Hide navigation links on smaller screens */
        }

        nav .hamburger {
            display: block; /* Show hamburger menu on smaller screens */
        }
        }


        /* Table Styles */

        table {
        width: 100%;  /* Make the table fill the available space */
        border-collapse: collapse; /* Collapse table borders */
        }

        th, td {
        padding: 1rem; /* Add some padding to cells */
        border: 1px solid #ddd; /* Add a solid border to cells */
        text-align: left; /* Align content to the left */
        }

        th {
        background-color: #f0f2f5; /* Set a background color for table headers */
        font-weight: bold; /* Make table headers bold */
        }

        tr:nth-child(even) { /* Style even rows (zebra striping) */
        background-color: #f8f9fa;
        }

        /* Optional Styles */

        table caption {
        caption-side: top; /* Position caption above the table */
        font-size: 1.2rem; /* Increase caption font size */
        padding-bottom: 0.5rem; /* Add some space below the caption */
        }

        .table-striped tr:nth-child(even) { /* Alternative zebra striping class */
        background-color: #ececec;
        }

        .table-bordered td,
        .table-bordered th {
        border: 1px solid #dee2e6; /* Adjust border color */
        }
        </style>
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <!-- Page Heading -->
        {{-- @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif --}}

        <!-- Page Content -->
        <main style="margin:50px">

            @yield('content')

        </main>
    </div>
</body>
</html>
