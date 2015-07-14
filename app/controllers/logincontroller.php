<?php

class logincontroller extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
		return View::make('login.index');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('login.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
      
          $admission =  Input::get('admission') ;   

         if ($voter = Voter::whereadmission($admission)->first())


          {

       echo "<center></br></br></br> Sorry you are  already registred with your admission number.".$admission." .Please correct your admission number in the registretion form or login.</br></br> Incase it is a technical problem please contact us via mail with the subject as your admission number.</center></br><center>Thank you.</center>";

           }

         else 
         {

           $password1 =Input::get('password1');
		  $password2 = Input::get('password2');

          if ($password1==$password2) 
              {
         	
         	        $password = $password2 ;
                    $Voter = new Voter;
					$Voter->firstname = Input::get('firstname');
					$Voter->medianname = Input::get('medianname');
					$Voter->lastname = Input::get('lastname');
					$Voter->admission = Input::get('admission');
					$Voter->idnumber = Input::get('nationalid');
					$Voter->year = Input::get('year');
					$Voter->email = Input::get('email');
					$Voter->mobile = Input::get('mobile');
					$Voter->email = Input::get('email');
					$Voter->password = Hash::make($password);
			        $Voter->save();

                    $success = "You've successfully sing up to Mvote.Please log in to  view more and vote.";
               
                     exit($success) ;

                     return Redirect::route('login.index');
               }

               else

               {

                    echo "Your passwords do not match .Please check your password.";
                     
                     exit("Your passwords do not match .Please check your password.");

                     return Redirect :: route ('login.index');
                    
               }
        

		}
		
/**
*list of all form inputs in just the exact way
*firstname
*medianname
*lastname
*admission
*nationalid
*year
*email
*mobile
*password1
*password2
*/


	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($admission)
	{
		   
        $passwordtemp = Input :: get('password');
		$useradmission = Input :: get('admission');
		$eureca = Hash::make($passwordtemp);

		if(isset($passwordtemp)&&isset($useradmission))

		{
            $voter = Voter::whereadmission($admission)->first();
            $spirit = $voter->admission;
            $mortal = $user->password;

            if ($eureca ==$mortal  &&   $spirit == $useradmission)
             {
         
                return Redirect::route('vote.index');

                
              }
              else
              {

                 echo "<center>Your password and admission do not much.</br></center><center>please check  your password and admission inorder to login.</center><center></br>Incase its  a technical problem please report the problem via our help mail.</center>";
                       

              }

		}
		else
		{

                  echo "Please fill in your password and admission number.";

		}

	        
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($admission)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($admission)
	{
		//





	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($admission)
	{
		
		
		

        if ($user = user::whereadmission($admission)->first()) 
           {
        	 $spirit = $user->admission;
		     $mortal = $user->password;

		     if ($passwordtemp == $mortal ) 
                  {
         	    
                 return Redirect :: route ('vote.index');

                   }
            }
            else
            {


                 echo "Your admission number does not existe.\n Please check whether your admission number is correct. \n Otherwise first sign up with us to log in.";
                 
                 return Redirect :: route ('login.index');

            }
	}

}
