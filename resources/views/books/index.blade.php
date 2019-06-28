
 @extends('layouts.app')      
   @section ('content')   
       <style>
          .card-img-top{
            object-fit:cover;
            height: 15vw;
         
          }
        .card{
          border:none;
          box-shadow: 3px 3px 4px;
          
        }
        
        </style>

    
      
            
            <div class="container bg-dark " style= "height:auto"   >
              <div class=row>
                <div class="col-md-12 px-0 ">
                  
                      <div class="heading bg-secondary " style= "max-width:100% ; height:auto;">
                          <div class="d-flex justify-content-center text-white p-5">  
                           <h2> Find your books here!</h2>
                         </div>
                      </div>
                  </div>
              </div>                
              
             
             
                  
              <div class=container >
             <div class="row d-flex justify-content-start mt-4"  > 
                  @foreach($books as $book)
                <div class="col-md-4 d-flex mb-5 justify-content-center ">
                        <div class="card">
                                <img class="card-img-top" src="{{asset('images/')}}/{{$book->image}}"alt="Card image cap">
                                <div class="card-body">
                                  <h5 class="card-title">{{$book->bookname}}</h5>
                                  <p class="card-text"> Price:<strong> Rs {{$book->price}}</strong></p>
                                  <a href="/books/{{$book->id}}" class="btn btn-primary">Buy</a>
                                </div>
                        </div>
                  </div> 
                @endforeach  
                
               </div>
              </div>
            </div>
            @endsection
          
            
          
              
            
    
