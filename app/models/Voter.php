<?php

class Voter extends \Eloquent {


    protected $table = 'voter';

	protected $fillable = [ 'firstname','medianname','lastname','admission','idnumber','year','email','mobile','password','snifer'];
}



