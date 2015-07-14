<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Userstablmigration extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Users', function(Blueprint $table)
		{
			$table->char('firstname' , 60);
			$table->char('medianname' , 60);
			$table->char('lastname' , 60);
            $table->string('admission');
			$table->biginteger('nationalid');
			$table->text('year');
			$table->string('email');
			$table->biginteger('mobile');
			$table->text('password');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 **firstname
      *medianname
      *lastname
      *admission
      *nationalid
      *year
      *email
      *mobile
      *password
	 * @return void
	 */
	public function down()
	{
	      Schema::drop('Users');
	}

}
