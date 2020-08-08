<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Student Management System</title>
  </head>
  <body>

    @include("navbar")

    <div class="row header-container justify-content-center">
        <div class="header">
        <h1>Student Management System</h1>
        </div>
    </div>

    @if($layout == 'index')
        <div class="container-fluid mt-4">
             <div class ="container-fluid mt-4">
                 <div class="row justify-content-center">
                     <section class="col-md-7">
                         @include("studentlist")
                    </section>
            </div>   
        </div>
    @elseif($layout == 'create')
        <div class="container-fluid mt-4">
            <div class ="row">
                <section class = "col-md-7">
                    @include("studentlist")
                </section>
                <section class = "col-md-5">

                <div class="card mb-3">
                <img src="https://www.socialmoms.com/wp-content/uploads/2012/02/art-child-project.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Enter information of new student</h5>

            
    <form action="{{ url('/store') }}" method="post">
                        @csrf
            <div class="form-group">
                <label>Matric Number </label>
                <input name="matNumber" type="text" class="form-control" placeholder="Enter Mat number">
            </div>
            <div class="form-group">
                <label>First Name </label>
                <input name="firstName" type="text" class="form-control" placeholder="Enter first name">
            </div>
            <div class="form-group">
                <label>Last Name </label>
                <input name="lastName" type="text" class="form-control" placeholder="Enter last name">
            </div>
            <div class="form-group">
                <label>Age </label>
                <input name="age" type="number" class="form-control" placeholder="Enter the Age">
            </div>
            <div class="form-group">
                <label>Course </label>
                <input name="course" type="text" class="form-control" placeholder="Enter the course">
            </div>
            <input type="submit" class = "btn btn-info" value ="Save">
            <input type="reset" class = "btn btn-warning" value ="Reset">
    </form>

                </div>
                </div>

                </section>
            </div>
        </div>
    @elseif($layout == 'show')
        <div class="container-fluid mt-4">
                <div class = "row">
                    <section class = "col-md-7">
                        @include("studentlist")
                    </section>
                    <section class = "col-md-5">
                    </section>
                </div>
        </div>
    @elseif($layout == 'edit')
        <div class="container-fluid mt-4">
                <div class ="row">
                    <section class = "col-md-7">
                   
                        @include("studentlist")
                    </section>
                    <section class = "col-md-5">

                    <div class="card mb-3">
  <img src="https://static.scientificamerican.com/blogs/cache/file/5563E220-FF2F-435E-A5283B8EEF56BA97_source.jpg?w=590&h=800&AB6D87AD-580E-4BC8-AA457C693205AB2E" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Update student informations</h5>

    <form action="{{ url('/update/'.$student->id) }}" method="post">
                        @csrf
            <div class="form-group">
                <label>Matric Number </label>
                <input value ="{{ $student->matNumber}}" name="matNumber" type="text" class="form-control" placeholder="Enter Mat number">
            </div>
            <div class="form-group">
                <label>First Name </label>
                <input value ="{{ $student->firstName}}" name="firstName" type="text" class="form-control" placeholder="Enter first name">
            </div>
            <div class="form-group">
                <label>Last Name </label>
                <input value = "{{ $student->lastName}}" name="lastName" type="text" class="form-control" placeholder="Enter last name">
            </div>
            <div class="form-group">
                <label>Age </label>
                <input value ="{{ $student->age}}" name="age" type="number" class="form-control" placeholder="Enter the Age">
            </div>
            <div class="form-group">
                <label>Course </label>
                <input value ="{{ $student->course}}" name="course" type="text" class="form-control" placeholder="Enter the course">
            </div>
            <input type="submit" class = "btn btn-info" value ="Update">
            <input type="reset" class = "btn btn-warning" value ="Reset">
            </form>
    
  </div>
</div>

        
                    </section>
                </div>
        </div>
    @endif

    <div class="footer">&copy;LordKelvin. 2020</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>