<?php

namespace App\Console\Commands;

use App\MyClass\hotel;
use App\MyClass\rumahSakit;
use Illuminate\Console\Command;

class displayData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:display-data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $hotel = new hotel('hotel');
        $rs = new rumahSakit('rs');

        $this->info(json_encode([
            'hotel' => $hotel->threeMusketier(),
            'rs' => $rs->threeMusketier()
        ]));
    }
}
