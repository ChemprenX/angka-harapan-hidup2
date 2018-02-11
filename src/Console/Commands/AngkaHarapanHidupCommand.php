<?php namespace ChemprenX\AngkaHarapanHidup\Console\Commands;

use Illuminate\Console\Command;

/**
 * The AngkaHarapanHidupCommand class.
 *
 * @package ChemprenX\AngkaHarapanHidup
 * @author  chemprenx <developer.chemprenx@gmail.com>
 */
class AngkaHarapanHidupCommand extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'chemprenx:angka-harapan-hidup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Demo command for ChemprenX\AngkaHarapanHidup package';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info('Welcome to command for ChemprenX\AngkaHarapanHidup package');
    }
}
