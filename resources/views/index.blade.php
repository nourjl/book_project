<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name ="viewport" content="width=device-width, user-scalable=no, intial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Book Application</title>

</head>
<body>
    <div class="container-fluid">
        
        <div class="jumbotron jumbotron-fluid bg-danger">

            <div class="hero-image">
                
                <div class="hero-image">
                     <img src="img/book.jpeg" alt="a book picture">
                </div>


                <div class="hero-text">
                    <h1>Are you searching for a book ?</h1>
                    <p>Here you go !</p>
                </div>
        </div>
       
        </div> 

        
        <div class="row">
            <div class="col-md-6">
                <form action="{{route('books.create')}}" method="post">
                    @csrf
                    <div class="row form-group">
                        <div class="col-md-12">
                        <label for="">Name:</label>
                        <input type="text" name="Name" class="forml-control" required>     
                        </div>
                    </div>



                    <div class="row form-group">
                        <div class="col-md-12">
                        <label for="">Author:</label>
                        <input type="text" name="Author" class="forml-control" required>     
                        </div>
                    </div>


                    <div class="row form-group">
                        <div class="col-md-12">
                        <label for="">Genre:</label>
                        <input type="text" name="Genre" class="forml-control" required>     
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                        <button type="submit" class="btn btn-success" float-right style=" float: right; width: 50%;">Add Book</button>
                        </div>
                    
                    </div>

                
                </form>
            </div>
            <div class="col-md-6">
                <table class="table table-striped table-hover">
                    <tr>
                        <th>Name</th>
                        <th>Author</th>
                        <th>Genre</th>
                
                     </tr>
            
                
                
                <!-- 
                    // suppression du "@" et "{{}}" pour que le navigateur exceute la page
                    puisque j'ai un probleme de base de donnees.
                    
                    
                    foreach($books as $book)

                    <tr>
                        <td>$book->Name</td>
                        <td>$book->Author</td>
                        <td>$book->Genre</td>
 
                    </tr>
                endforeach 
                
                -->
                

                </table>
            </div>
        </div>
    </div>
</body>
</html>