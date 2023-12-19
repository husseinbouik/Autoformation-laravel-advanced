<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TasksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('tasks')->delete();
        
        DB::table('tasks')->insert(array (
            0 => 
            array (
                'id' => 1,
                
                'name' => 'Design Product Pages',
                'description' => '<p>Create user-friendly product pages with images and descriptions</p>',
            
                'completed' => false,
                'priority' => 'Medium', // Set an end date if applicable
                'created_at' => now(),
                'updated_at' => now(),
            ),
            1 => 
            array (
                'id' => 2,
                
                'name' => 'Implement Shopping Cart',
                'description' => 'Develop a functional shopping cart for users to add and manage items',
                'completed' => false,
                'priority' => 'Medium', // Set an end date if applicable
                'created_at' => now(),
                'updated_at' => now(),
            ),
            2 => 
            array (
                'id' => 3,
                
                'name' => 'Integrate Payment Gateway',
                'description' => 'Connect the website to a secure payment gateway for online transactions',
                'completed' => false,
                'priority' => 'Medium', // Set an end date if applicable
                'created_at' => now(),
                'updated_at' => now(),
            ),
            3 => 
            array (
                'id' => 4,
                
                'name' => 'User Authentication',
                'description' => 'Implement a secure user authentication system for bloggers',
                'completed' => false,
                'priority' => 'Medium', // Set an end date if applicable
                'created_at' => now(),
                'updated_at' => now(),
            ),
            4 => 
            array (
                'id' => 5,
                
                'name' => 'Create Blog Post Editor',
                'description' => 'Build a WYSIWYG editor for users to write and format blog posts',
                'completed' => false,
                'priority' => 'Medium', // Set an end date if applicable
                'created_at' => now(),
                'updated_at' => now(),
            ),
            5 => 
            array (
                'id' => 6,
                
                'name' => 'Implement Comments Section',
                'description' => 'Develop a comment system for users to interact with blog posts',
                'completed' => false,
                'priority' => 'Medium', // Set an end date if applicable
                'created_at' => now(),
                'updated_at' => now(),
            ),
            6 => 
            array (
                'id' => 7,
                
                'name' => 'Task CRUD Operations',
            'description' => 'Enable users to perform CRUD operations on tasks (Create, Read, Update, Delete)',
                'completed' => false,
                'priority' => 'Medium', // Set an end date if applicable
                'created_at' => now(),
                'updated_at' => now(),
            ),
            7 => 
            array (
                'id' => 8,
                
                'name' => 'User Roles and Permissions',
            'description' => 'Implement roles and permissions for different user levels (Admin, Member)',
                'completed' => false,
                'priority' => 'Medium', // Set an end date if applicable
                'created_at' => now(),
                'updated_at' => now(),
            ),
            8 => 
            array (
                'id' => 9,
                
                'name' => 'Task Filtering and Sorting',
                'description' => 'Add functionality to filter and sort tasks based on different criteria',
                'completed' => false,
                'priority' => 'Medium', // Set an end date if applicable
                'created_at' => now(),
                'updated_at' => now(),
            ),
            9 => 
            array (
                'id' => 10,
                
                'name' => 'User Profile Creation',
                'description' => 'Allow users to create and customize their profiles',
                'completed' => false,
                'priority' => 'Medium', // Set an end date if applicable
                'created_at' => now(),
                'updated_at' => now(),
            ),
            10 => 
            array (
                'id' => 11,
                
                'name' => 'Post Sharing Feature',
                'description' => 'Implement functionality for users to share posts and media content',
                'completed' => false,
                'priority' => 'Medium', // Set an end date if applicable
                'created_at' => now(),
                'updated_at' => now(),
            ),
            11 => 
            array (
                'id' => 12,
                
                'name' => 'Friend Request System',
                'description' => 'Develop a system for users to send and accept friend requests',
                'completed' => false,
                'priority' => 'Medium', // Set an end date if applicable
                'created_at' => now(),
                'updated_at' => now(),
            ),
            12 => 
            array (
                'id' => 13,
                
                'name' => 'Design Portfolio Layout',
                'description' => 'Create an appealing and responsive layout for the portfolio',
                'completed' => false,
                'priority' => 'Medium', // Set an end date if applicable
                'created_at' => now(),
                'updated_at' => now(),
            ),
            13 => 
            array (
                'id' => 14,
                
                'name' => 'Project Showcase Section',
                'description' => 'Build a section to showcase completed projects with details',
                'completed' => false,
                'priority' => 'Medium', // Set an end date if applicable
                'created_at' => now(),
                'updated_at' => now(),
            ),
            14 => 
            array (
                'id' => 15,
                
                'name' => 'Contact Form Integration',
                'description' => 'Implement a contact form for users to get in touch',
                'completed' => false,
                'priority' => 'Medium', // Set an end date if applicable
                'created_at' => now(),
                'updated_at' => now(),
            ),
            15 => 
            array (
                'id' => 16,
                
                'name' => 'Event Registration Module',
                'description' => 'Develop a module for users to register for events',
                'completed' => false,
                'priority' => 'Medium', // Set an end date if applicable
                'created_at' => now(),
                'updated_at' => now(),
            ),
            16 => 
            array (
                'id' => 17,
                
                'name' => 'Venue Management',
                'description' => 'Create a system for managing and booking event venues',
                'completed' => false,
                'priority' => 'Medium', // Set an end date if applicable
                'created_at' => now(),
                'updated_at' => now(),
            ),
            17 => 
            array (
                'id' => 18,
                
                'name' => 'Ticketing System',
                'description' => 'Implement a ticketing system for selling event tickets online',
                'completed' => false,
                'priority' => 'Medium', // Set an end date if applicable
                'created_at' => now(),
                'updated_at' => now(),
            ),
            18 => 
            array (
                'id' => 19,
                
                'name' => 'Course Creation Dashboard',
                'description' => 'Build a dashboard for instructors to create and manage courses',
                'completed' => false,
                'priority' => 'Medium', // Set an end date if applicable
                'created_at' => now(),
                'updated_at' => now(),
            ),
            19 => 
            array (
                'id' => 20,
                
                'name' => 'User Progress Tracking',
                'description' => 'Implement a system to track and display user progress in courses',
                'completed' => false,
                'priority' => 'Medium', // Set an end date if applicable
                'created_at' => now(),
                'updated_at' => now(),
            ),
            20 => 
            array (
                'id' => 21,
                
                'name' => 'Discussion Forum',
                'description' => 'Create a forum for students to discuss course-related topics',
                'completed' => false,
                'priority' => 'Medium', // Set an end date if applicable
                'created_at' => now(),
                'updated_at' => now(),
            ),
            21 => 
            array (
                'id' => 22,
                
                'name' => 'Product Catalog Management',
                'description' => 'Develop a system for managing the product catalog',
                'completed' => false,
                'priority' => 'Medium', // Set an end date if applicable
                'created_at' => now(),
                'updated_at' => now(),
            ),
            22 => 
            array (
                'id' => 23,
                
                'name' => 'Order Processing Workflow',
                'description' => 'Implement a workflow for processing and fulfilling customer orders',
                'completed' => false,
                'priority' => 'Medium', // Set an end date if applicable
                'created_at' => now(),
                'updated_at' => now(),
            ),
            23 => 
            array (
                'id' => 24,
                
                'name' => 'Inventory Replenishment Alerts',
                'description' => 'Set up alerts for low stock levels and inventory replenishment',
                'completed' => false,
                'priority' => 'Medium', // Set an end date if applicable
                'created_at' => now(),
                'updated_at' => now(),
            ),
            24 => 
            array (
                'id' => 25,
                
                'name' => 'Search and Filter Functionality',
                'description' => 'Enable users to search and filter travel options based on preferences',
                'completed' => false,
                'priority' => 'Medium', // Set an end date if applicable
                'created_at' => now(),
                'updated_at' => now(),
            ),
            25 => 
            array (
                'id' => 26,
                
                'name' => 'Booking and Reservation System',
                'description' => 'Implement a secure system for users to book flights, hotels, etc.',
                'completed' => false,
                'priority' => 'Medium', // Set an end date if applicable
                'created_at' => now(),
                'updated_at' => now(),
            ),
            26 => 
            array (
                'id' => 27,
                
                'name' => 'User Account Dashboard',
                'description' => 'Create a dashboard for users to manage bookings and preferences',
                'completed' => false,
                'priority' => 'Medium', // Set an end date if applicable
                'created_at' => now(),
                'updated_at' => now(),
            ),
        ));
        
        
    }
}