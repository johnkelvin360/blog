<div class="card mb-3">
  <img src="https://media-exp1.licdn.com/dms/image/C4D1BAQG3PNP_Uoi_zw/company-background_10000/0?e=2159024400&v=beta&t=fN1erqY4bzgfK_uEFdEJa-7cBDYRs5Clf_URdMCbbRE" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">List of Students</h5>
    <p class="card-text">Find information about all students here</p>
    

    <table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Matric Number</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Age</th>
      <th scope="col">Course</th>
      <th scope="col">Operations</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach($students as $student)
    <tr>
      <td>{{$student->matNumber}}</td>
      <td>{{$student->firstName}}</td>
      <td>{{$student->lastName}}</td>
      <td>{{$student->age}}</td>
      <td>{{$student->course}}</td>
      <td>
      <a href="{{ url('/edit/'.$student->id)}}" class="btn btn-sm btn-warning">Edit</a>
      <a href="" class="btn btn-sm btn-danger">Delete</a>
      </td>

    
    </tr>
    @endforeach
  </tbody>
</table>
  </div>
</div>



  