
@extends('layouts.app')

  @section('content')      
    <div class="row">
        
      <div class="card text-white">
          <img  src="{{url('images/image2.jpg')}}" class="card-img-top" style= "max-width:100% ; height : auto " >
          
          <div class= card-img-overlay >
        <div class="col-md-6 ">
              <div class= "card-title pl-3" style= "font-family:'Montserrat',sans-serif ;   text-shadow:1px 1px 2px grey; font-weight:600">    
                <h1 class= display-3 >Welcome to our Book shelf</h1>
                   <div class=row>
                     <div class="col-md-11 pt-3 ">

                  <p class="card-text" style= font-family:Montserrat,sans-serif;>A place where
                     people like you who love books and want to have no boundaries on finding them. We bring you a platform where you can fimd the book youve been searching a lot probably, in reasonable price, but thats not all you can also sell all your old books which someone might be in need of. So go ahead and explore this great bookshelf</p>
                  </div>
  

              </div>
        
            <div class="row"> 
                <div class="col-md-12 mt-5 pt-2">

                <div class="btn-grp" >

                    <a href="{{url('/index')}}" class= "btn btn-primary btn-lg shadow rounded"  >
                        Explore
                    </a>
                    </div>
                  </div>
            </div>
            @endsection
              
          
          
      
     

   

    
         
  