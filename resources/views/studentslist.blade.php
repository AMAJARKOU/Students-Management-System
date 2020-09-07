<div class="card mb-3">
    <img src="https://allea.org/wp-content/uploads/2019/06/shutterstock_520698799small-1500x430.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">List of Students </h5>
      <p class="card-text">Here you can find all the information about students in the system.</p>

      <table class="table">
        <thead class="thead-light">
          <tr>
            <th scope="col">CNE</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Age</th>
            <th scope="col">Speciality</th>
            <th scope="col">Operations</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($students as $student)
            <tr>
                <td>{{ $student->cne }}</td>
                <td>{{ $student->firstName }}</td>
                <td>{{ $student->secondName }}</td>
                <td>{{ $student->age }}</td>
                <td>{{ $student->age }}</td>
                <td>
                    <a href="#" class="btn btn-info btn-sm">Show</a>
                    <a href="{{ url('/edit/'.$student->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
          @endforeach
          
        </tbody>
      </table>
    </div>
</div>


