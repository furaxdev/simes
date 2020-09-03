<?php

use Illuminate\Database\Seeder;
use App\Channel;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $channels = [
            ['title' => 'Applied'],
            ['title' => 'Fluid Mechanics'],
            ['title' => 'Meterology'],
            ['title' => 'Material Science'],
            ['title' => 'C Programming'],
            ['title' => 'Math'],
            ['title' => 'Probability'],
            ['title' => 'Numerical Methods']

        ];

        foreach ($channels as $channel) {
            $channel['slug'] = str_slug($channel['title']);
            Channel::create($channel);
        }
    }
}