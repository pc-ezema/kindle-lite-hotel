<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $baseUrl = config('app.url') . '/storage/rooms/';

        $rooms = [
            [
                'type' => 'Standard Room',
                'description' => 'The Standard Room is ideal for travelers seeking affordability and comfort. It typically comes with a cozy double bed, air conditioning, flat-screen TV, Wi-Fi, work desk, and an en-suite bathroom with modern fittings.',
                'price' => 50000,
                'image' => $baseUrl . 'standard.jpg',
            ],
            [
                'type' => 'Deluxe Room',
                'description' => 'The Deluxe Room offers a touch of elegance for guests who desire more than just the basics. With a spacious layout, larger bed, upgraded furniture, and soft lighting, it creates a relaxed atmosphere. Best suited for business travelers and guests looking for extra comfort.',
                'price' => 60000,
                'image' => $baseUrl . 'deluxe.jpg',
            ],
            [
                'type' => 'Executive Room',
                'description' => 'Executive Rooms are designed with the business traveler in mind. They combine comfort with functionality, featuring king-size beds, a sitting area, dedicated workspace, mini-bar, and complimentary high-speed Wi-Fi.',
                'price' => 80000,
                'image' => $baseUrl . 'executive.jpg',
            ],
            [
                'type' => 'Luxury Suite',
                'description' => 'The Luxury Suite is designed for guests who want a full home-away-from-home experience. Typically featuring a separate bedroom and living room, elegant furniture, premium bedding, and a well-stocked mini-bar, it’s ideal for long stays or special occasions.',
                'price' => 100000,
                'image' => $baseUrl . 'luxury-suite.jpg',
            ],
            // [
            //     'type' => 'Presidential Suite',
            //     'description' => 'The ultimate luxury experience in '.config('app.name').'. Presidential Suites feature palatial living spaces, multiple bedrooms, private lounges, and luxury bathrooms fitted with jacuzzis or spa showers. Designed for royalty, VIPs, and high-profile guests, they come with top-tier security, 24-hour concierge, and exclusive access to premium facilities.',
            //     'price' => 150000,
            //     'image' => $baseUrl . 'presidential.jpg',
            // ],
        ];

        foreach ($rooms as $room) {
            DB::table('rooms')->insert([
                'id' => Str::uuid(),
                'type' => $room['type'],
                'description' => $room['description'],
                'price' => $room['price'],
                'image' => $room['image'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
