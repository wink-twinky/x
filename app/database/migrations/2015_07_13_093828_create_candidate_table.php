<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCandidateTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('candidate', function(Blueprint $table)
		{
			
			$table->timestamps();
			$table->string('photo');
			$table->char('name' , 60);
			$table->text('admission');
			$table->char('nickname' , 60);
			$table->text('year');
			$table->text('bio');
			$table->text('manufesto');
			$table->biginteger('vnumber');
			$table->string('email');
			$table->biginteger('mobile');
			$table->text('password');


		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('candidate');
	}

}
