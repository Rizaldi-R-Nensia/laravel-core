<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\User;
use DB;

class DeleteInactiveUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'DeleteInactiveUser:deleteUser';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'deleting the users that have inactive status';

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
        DB::table('users')->delete(11);

        // DB::beginTransaction();
        // try{
        //     $date 	= date('Y-m-d');
        //     $dateInt= str_replace('-', '', $date);
        //     $time 	= date('H:i:s');
        //     $timeInt= str_replace(':', '', $time);

        //     $requestDate = array(
        //         'updated_at'   => date('Y-m-d H:i:s')
        //     );


        //     $religion = User::all();

        //     $religion_data = $requestDate;


        //     if($religion){
        //         $religion->update($religion_data);
        //         DB::commit();
        //     }else{
        //         DB::rollBack();
        //     }

        // } catch(\Illuminate\Database\QueryException $ex){
        //     DB::rollBack();
        // }
    }
}
