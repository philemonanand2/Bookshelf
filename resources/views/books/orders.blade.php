
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,600i&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}"> 
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    
<body>
    <div class="container text-center pt-5">
        <h1 class=display>Orders details</h1>
<table class="table">
<thead>
    
    <tr>
      <th scope="col">Sr.no</th>
      <th scope="col">Customer name</th>
      <th scope="col">email</th>
      <th scope="col">addrees</th>
   
    </tr>
  </thead>
  <tbody>
  
@foreach($users as $user) 

   
@if(auth()->user()->id == $user->user_id )

<tr>
   <th scope="row">2</th>
   <td>{{$user->name}}</td>
   <td>{{$user->email}}</td>
   <td> {{$user->address}}
    </td>
 </tr>

    
  
   

  @endif

  
 
  
@endforeach
  
  @php
  $i=1;
  
  
  @endphp
 
    
</tbody>
</table>
</div>




</body>
</html>