
@extends('master.login')

@section('header')

{{ HTML::style('css/main.css') }}

<title>Sign Up</title>





<div id="headcover">

           <div id="logo">
               <img src="{{URL::asset('image/mvote.png')}}"width="420px" height="50px" > 


           </div>

        
            

           <div id="login">

                
             
                     <table id="logtable">
                
                        <tr>
                                  {{Form::open(['route'=>'login.show'])}}
                            <td>
                                
                                 
                                 {{Form::label('admission','Admission')}}</br>{{Form::input('text','admission')}}

                            </td>

                            <td>

                                 {{Form::label('password','Passsword')}}</br>{{Form::input('password','password')}}

                            </td>

                            <td>
                                  </br> {{Form::submit('login')}}
                                
                             </td>
                                      {{Form::close()}}
                         </tr>

                         <tr>
                    
                             <td>

                                   <a href="forgot.index"><input type="submit" value="Forgot password?" />
                     
                             </td>
                    
                             <td>
                      
                                    <a href="login.create"><input type="submit" value="Sign up" />
                    
                             </td>

                         </tr>

                     </table>
      
                 

            </div>
           
</div>

@stop

</br>
</br>

@section('content')
</br>
</br>
</br>

<div>
  
	{{Form::open(['route'=>'forgot.show'])}}
	     <table>


		        <tr>
                       <td id="fonty"><center>Please fill in your admission number and click the <b> Request </b> button below</center></td>
                </tr>
                <tr>
                     <td></br><center>{{Form::label('admission','Admission')}}</br>{{Form::input('text','admission')}}</center></td>
	            </tr>
	            <tr>
                       <td> </br><center> {{Form::submit('Request')}}</center></td>
	            </tr>
                <tr>
                <center>
                	<td>
</br>
</br><center>
                         <p id="fonty">We are sending your  recovered password to your  email address.However ensure you have filled the correct admission number on the field above.</p></br>
                         <p id="fonty">Please check your email address and incase it has not reached you, click on <b>Request</b> button on the header after 10 seconds to resend your password mail.</p></br>
                         <p id="fonty">All measures are taken to ensure your account remains safe at all times.</p></br>
                         <p id="fonty">Incase of any persistant problem, your account is hacked or enquiries , Please  send a mail to  <strong>Mvote</strong>   provided on the footer with  subject as your relevant problem.</p>
    </center>                                                           
                   </td>
               </center>
                 </tr>

       
        </table>

   {{Form::close()}}                     
</div>

@stop

@section('footer')
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
<hr>

<center><p><b>C </b> An <b>MVoter</b> production . All rights reserved to <b>Mvoter</b>. Helpline Number<b> (+254701998579) </b>Email address : help@mvote.com</p></center> 
@stop