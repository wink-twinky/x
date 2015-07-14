<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVoterTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('voter', function(Blueprint $table)
		{
			
			$table->timestamps();
			$table->char('firstname' , 60);
			$table->char('medianname' , 60);
			$table->char('lastname' , 60);
            $table->string('admission');
			$table->biginteger('idnumber');
			$table->text('year');
			$table->string('email');
			$table->biginteger('mobile');
			$table->text('password');
			$table->string('snifer');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('voter');
	}

}
