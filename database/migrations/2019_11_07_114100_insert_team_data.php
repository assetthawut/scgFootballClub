<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

class InsertTeamData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        DB::table('teams')->insert([
            ['name' => 'C-home', 'logo_img' => '', 'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
            ['name' => 'Vinicius', 'logo_img' => '', 'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
            ['name' => 'หัวกะทิ', 'logo_img' => '', 'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
            ['name' => 'SCG Ngachang', 'logo_img' => '', 'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
            ['name' => 'Chemicals', 'logo_img' => '', 'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
            ['name' => 'อย่าวู่วาม', 'logo_img' => '', 'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
            ['name' => 'Home Solution', 'logo_img' => '', 'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
            ['name' => 'SCG Inter&Friends', 'logo_img' => '', 'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
            ['name' => 'Precast', 'logo_img' => '', 'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
            ['name' => 'CPAC', 'logo_img' => '', 'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
            ['name' => 'ไอติม', 'logo_img' => '', 'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
            ['name' => 'IT One', 'logo_img' => '', 'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
            ['name' => 'ลอยชาย', 'logo_img' => '', 'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //

    }
}
