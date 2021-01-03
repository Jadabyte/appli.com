<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

use App\Models\Student;

class github extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'github:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This wil update github every day';

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
     * @return int
     */
    public function handle()
    {
        $students = Student::all();

        foreach ($students as $student) {
            $github = $student->github;
            
                
                Student::where('id', $student->id)->update(['github' => $github]);
                echo("  updated info  ");
            
            
        }
        
        
    }
}
