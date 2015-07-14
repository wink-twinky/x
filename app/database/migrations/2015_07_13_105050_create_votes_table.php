<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVotesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('votes', function(Blueprint $table)
		{
			
			$table->timestamps();
			$table->string('snifer');
			$table->biginteger('president');
			$table->biginteger('vicepresident');
			$table->biginteger('secretarygeneral');
			$table->biginteger('assistantsecretarygeneral');
			$table->biginteger('extenalaffairs');
			$table->biginteger('academics');
			$table->biginteger('sports');
			$table->biginteger('healthsecurityandaccomodation');
			$table->biginteger('finance');
			$table->biginteger('cateringandenvironment');
			$table->biginteger('entertainmentt');

		});
	}
 
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('votes');
	}

}
