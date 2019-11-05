<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 20)->create();
        factory(App\NetworkProvider::class, 2)->create();
        factory(App\Device::class, 10)->create();
        factory(App\PhoneNumber::class, 10)->create(['network_provider_id' => 1]);
        factory(App\SimCard::class, 10)->create(['network_provider_id' => 1]);
        factory(App\PhoneNumber::class, 10)->create(['network_provider_id' => 2]);
        factory(App\SimCard::class, 10)->create(['network_provider_id' => 2]);
    }
}
