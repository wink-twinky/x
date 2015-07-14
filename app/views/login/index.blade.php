
@extends('master.login')

@section('header')

{{ HTML::style('css/main.css') }}

<title>Login</title>





<div id="headcover">

           <div id="logo">
               <img src="{{URL::asset('image/mvote.png')}}"width="420px" height="50px" > 


           </div>

       
            

           <div id="login">

                  {{Form::open(['route'=>'login.show'])}}
             
                     <table id="logtable">
                
                        <tr>
                         

                            <td>
                                 

                                 {{Form::label('admission','Admission')}}</br>{{Form::input('text','admission')}}

                            </td>

                            <td>

                                 {{Form::label('password','Password')}}</br>{{Form::input('password','password')}}

                            </td>

                            <td>
                                  </br> {{Form::submit('login')}}
                                  
                                  

                             </td>
                              

                         </tr>

                         <tr>
                    
                             <td>

                                   <a href="login.edit"><input type="submit" value="Forgot password?" />
                     
                             </td>
                   
                             <td>
                      
                                    <a href="http://localhost:8000/login/create"><input type="submit" value="Sign up" />
                    
                             </td>

                         </tr>

                     </table>
      
                 {{Form::close()}}
                 
            </div>
           
</div>
@stop
</br></br>
@section('content')
</br></br></br>
<center>
<div id= "pictureframe">


<img id="pix" src="{{URL::asset('image/empty.jpg')}}"width="1030px" height="400px" > 



</div>

</center>


@stop

@section('footer')
<div id ="bottom">
</br>
</br>
</br>
</br>

<hr>
<center><p><b>C</b> An <b>MVoter</b> production . All rights reserved to <b>Mvoter</b>. Helpline Number<b> (+254701998579) </b>Email address : help@mvote.com</p></center> 
</div>
@stop