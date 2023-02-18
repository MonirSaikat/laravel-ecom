<?php

namespace Database\Seeders;

use App\Models\NavLink;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NavLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        NavLink::create([
            'name' => 'home',
            'text' => 'Home',
            'slug' => '/'
        ]);

        NavLink::create([
            'name' => 'products',
            'text' => 'Products',
            'slug' => '/products'
        ]);

        NavLink::create([
            'name' => 'about',
            'text' => 'About Us',
            'slug' => '/about'
        ]);

        NavLink::create([
            'name' => 'contact',
            'text' => 'Contact Us',
            'slug' => '/contact'
        ]);
    }
}
