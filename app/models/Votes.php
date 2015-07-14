<?php

class Votes extends \Eloquent {
 
    protected $table = 'votes';

	protected $fillable = ['snifer', 'president','vicepresident','secretarygeneral','assistantsecretarygeneral','extenalaffairs','academics','sports','healthsecurityandaccomodation','finance','cateringandenvironment','entertainment'];

}


