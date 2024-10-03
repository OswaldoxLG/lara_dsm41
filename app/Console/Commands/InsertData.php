<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Producto;

class InsertData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:insert-data';

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

        $this->info('Datos insertados exitosamente.');
    }
}
