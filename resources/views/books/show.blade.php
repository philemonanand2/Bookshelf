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
  <style>
     
      .form-container{
          box-shadow: 1px 3px 10px;
          background-color: #ffffff;
          padding: 35px;
          border-radius:2%;
      }
        .form-container h1{

        
        text-align: center;
        }
        
            
    
    
    </style>
<body >
        
    <div class= container-fluid>
            
        <div class="row ">
            <div class="col-md-2 "></div>
              <div class="col-md-8 mt-5 ">
                  
                    
                <form class="form-container" action="{{url('books')}}" method="POST" >
                      
                    
                    <div class=img-fluid>
                                <img src="{{url('images/book.svg')}}" class="rounded mx-auto d-block" style="width:5rem; height: 5rem">
                                </div>
                                <h1>Bookshelf</h1>
                                <div class="row">
                        <div class="col-md-6 d-flex border-right " style="justify-content: center">
                                <div class="card " style="width: 20rem;">
                                        <img class="card-img-top" src="{{asset('images/')}}/{{$book->image}}"alt="Card image cap">
                                        <div class="card-body">
                                          <h5 class="card-title">{{$book->bookname}}</h5>
                                          <p class="card-text">price Rs {{$book->price}}</p>
                                          </div>
                                        <div class="d-flex justify-content-end p-4 bg-light" >
                                          <h5><strong>Total:-{{$book->price}}</strong>
                                          </h5>
                                          </div>
                                        </div>
                                        </div>
                 <div class="col-md-6 " style="padding: 5%">
                     <div class="form-group ">
                            <input type="hidden" class=form-control  name=id value="{{$book->id}}">
            
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" name=email id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" class="form-control" name=name id="name"placeholder="Enter full name">
                    </div>
                    <div class="form-group">
                            <label for="contact">Contact No</label>
                            <input type="number" class="form-control" name=contact id="contact" placeholder="contact">
                        </div>
                    <div class="form-group">
                            <label for="address">Shipping Address</label>
                            <textarea class="form-control" name=address id="address" rows="3"></textarea>
                    </div>
                    {{csrf_field()}}
                    
                    <button type="submit" class="btn btn-primary">Place order</button>
                 </div> 
                </div> 
                
                </form>

                </div>
                
                <div class="col-md-2"></div>
            
            
            </div>
            </div>
    


</body>
</html>