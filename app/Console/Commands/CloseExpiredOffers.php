<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Offer;

class CloseExpiredOffers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:close-expired-offers';

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
        Offer::whereDate('closing_date', now()->toDateString())
        ->where('status', 'open')
        ->update(['status' => 'closed']);
    }
}
