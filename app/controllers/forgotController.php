<?php

class ForgotController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /forgot
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('forgot.index');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /forgot/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /forgot
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /forgot/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($admission)
	{
		    $admission = "dit/2013/51306";
		   
		
		    if ($Voter = Voter::whereadmission($admission)->first())
		        

		         {
			      
			       $admissionnumb = $Voter->admission;
		           $mypassword = $Voter->password;
		           $mymail = $Voter->email;
     			   $to = $mymail ;
	               $subject= ' Your requested password.' ;
	               $body='This is your requested password '.''. $mypassword ;
	               $headers='From:admin@mvoter.com' ;


		           if (mail($to, $subject, $body,$headers )) 
		                 
		                  {

		    	         return View::make('login.show');

		                   }

		                  else

		                      {
               
                              echo  "Unable to send mail.Please retry again ";
                             

		                      }
		   		
                            return Redirect :: route ('login.index');


		        }

		        else

		        {


                    echo '<center></br></br>We are sorry we are unable to send  you your password mail  for  your admission '.' ' . $admission . ' because we  can not retrive your password. </br></br>
                    You might not be a registered user or check if your <b>admission number</b> is correct.</br></br>Please retry again .Incase this is a technical problem please notify us via our email or helpline.</center></br><center>Thank you.</center>';
	               



		        }
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /forgot/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /forgot/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /forgot/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}