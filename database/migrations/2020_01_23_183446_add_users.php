<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;
use App\User;

class AddUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        User::create([
            'name' =>"Admin",
            'admission_number'=>"root",
            'password'=>Hash::make("root@3200rsh"),
            'role' =>"admin",
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $flight = App\User::where('name', 'Admin');

        if($flight){
            $flight->delete();
        }
        
    }
}
