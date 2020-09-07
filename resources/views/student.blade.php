<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Students Management System</title>
  </head>
  <body>

      @include('navbar')

      <div class="row header-container justify-content-center">
          <div class="header">
              <h1>Students Management System</h1>
          </div>
      </div>

    @if ($layout == 'index')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col-md-7">
                    @include('studentslist')
                </section>
                <section class="col-md-5"></section>
            </div>
        </div>

    @elseif ($layout == 'create')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col-md-7">
                    @include('studentslist')
                </section>
                <section class="col-md-5">

                    <div class="card mb-3">
                        <img src="https://static.vecteezy.com/system/resources/previews/000/274/360/non_2x/exchange-student-global-education-concept-vector.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Create new student :</h5>
                          <form action="{{ url('/store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                              <label for="cne">CNE</label>
                              <input name="cne" type="texte" class="form-control" id="cne" placeholder="Enter CNE">
                            </div>
    
                            <div class="form-group">
                                <label for="firstName">First Name</label>
                                <input name="firstName" type="texte" class="form-control" id="firstName" placeholder="Enter First Name">
                            </div>
    
                            <div class="form-group">
                                <label for="secondName">Last Name</label>
                                <input name="secondName" type="texte" class="form-control" id="secondName" placeholder="Enter Last Name">
                            </div>
    
                            <div class="form-group">
                                <label for="age">Age</label>
                                <input name="age" type="texte" class="form-control" id="age" placeholder="Enter Age">
                            </div>
                            
                            <div class="form-group">
                                <label for="speciality">Speciality</label>
                                <input name="speciality" type="texte" class="form-control" id="speciality" placeholder="Enter Speciality">
                            </div>
                            <input type="submit" class="btn btn-info" value="Save">
                            <input type="reset" class="btn btn-warning" value="Reset">
                        </form>
                        </div>
                      </div>
                </section>
            </div>
        </div>

    @elseif ($layout == 'show')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col-md-7">
                    @include('studentslist')
                </section>
                <section class="col-md-5"></section>
            </div>
        </div>

    @elseif ($layout == 'edit')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-md-7">
                @include('studentslist')
            </section>
            <section class="col-md-5">
                <form action="{{ url('/update/'.$student->id) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="cne">CNE</label>
                        <input name="cne" type="texte" value="{{ $student->cne }}" class="form-control" id="cne" placeholder="Enter CNE">
                    </div>

                    <div class="form-group">
                        <label for="firstName">First Name</label>
                        <input name="firstName" type="texte" value="{{ $student->firstName }}" class="form-control" id="firstName" placeholder="Enter First Name">
                    </div>

                    <div class="form-group">
                        <label for="secondName">Last Name</label>
                        <input name="secondName" type="texte" value="{{ $student->secondName }}" class="form-control" id="secondName" placeholder="Enter Last Name">
                    </div>

                    <div class="form-group">
                        <label for="age">Age</label>
                        <input name="age" type="texte" value="{{ $student->age }}" class="form-control" id="age" placeholder="Enter Age">
                    </div>
                    
                    <div class="form-group">
                        <label for="speciality">Speciality</label>
                        <input name="speciality" type="texte" value="{{ $student->speciality }}" class="form-control" id="speciality" placeholder="Enter Speciality">
                    </div>
                    <input type="submit" class="btn btn-info" value="Update">
                    <input type="reset" class="btn btn-warning" value="Reset">
                </form>
            </section>
        </div>
    </div>
    @endif

    <footer></footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>