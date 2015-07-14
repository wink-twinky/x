
@extends('session.static')

@section('header')

{{ HTML::style('css/vote.css') }}

<title>User</title>

<div id="top">

<table id="logo">
<tr>
<td><img src="{{URL::asset('image/mvote.png')}}" width="420px" height="50px"  ></td>
</tr>
</table>
</div>

@stop


@section('content')
</br>
</br>
<table>
	<tr>
<td>
	<article>
		<table >
			<tr>
				<td id="bd"><img src="{{URL::asset('image/candidates.png')}}" id="circle"></br><h2>Candidates</h2></br></td>
			</tr>
			<tr>
				<td  id="bd"><img src="{{URL::asset('image/strike.jpeg')}}" id="circle1"></br><h4>Vote</h4></br></td>
			</tr>
			<tr>
				<td  id="bd"><img src="{{URL::asset('image/Chart.svg')}}" id="circle1"></br><h3>Resuilts</h3></br></td>
			</tr>
			<tr>
				<td  id="bd"><img src="{{URL::asset('image/bribe.svg')}}" id="circle2"></br><h5>Report</h5></br></td>
			</tr>
			<tr>
				<td  id="bd"><img src="{{URL::asset('image/Agreement.png')}}" id="circle3"></br><h3>Agreement</h3></br></td>
			</tr>
			<tr>
				<td  id="bd"><img src="{{URL::asset('image/help.svg')}}" id="circle4"></br><h1>Help</h1></br></td>
			</tr>
			<tr>
				<td  id="bd"><img src="{{URL::asset('image/about.svg')}}" id="circle5"></br><h3>About Us</h3></td>
			</tr>
		</table>
	
    </article>

</td>
<td >
    <div id="container">

       <table>
       @foreach($candidate as candidate)
       <tr>
       	<td>$candidate->picture </br>$candidate->name</br>$candidate->year</td>
       	<td>$candidate->bio</td>
       </tr>
       <tr>
       	<td>$candidate->manufesto</td>
       	<
       </tr>
       </table>



    </div>
</td>

    </tr>

</table>
@stop


@section('footer')

@stop