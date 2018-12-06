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
       // $this->call(UsersTableSeeder::class);
        factory(App\Model\Cofo::class, 200)
            ->create()
            ->each(function ($user) {$user->documents()
                ->save(factory(App\Model\Document::class)
                    ->make());
            });

        factory(App\Model\DocumentList::class, 1)
            ->create();
        factory(App\Model\User::class, 1)
            ->create();
    }
}
