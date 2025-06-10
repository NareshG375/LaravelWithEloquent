<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Student Detial</title>
</head>
<body>
        <div class="container-fluid">
  <div class="row justify-content-center align-items-center h-100">
              <div class="col-md-6">
                    <h3> Student Detail</h3>
    <table class="table table-striped">

  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Age</th>
      <th scope="col">City</th>
      <th scope="col">Phone</th>

    </tr>
  </thead>
  <tbody>
    
    <tr>
      <th scope="row">1</th>
      <td>{{ $student->name}}</td>
      <td>{{ $student->email}}</td>
      <td>{{ $student->city}}</td>
      <td>{{ $student->age}}</td>
      <td>{{ $student->phone}}</td>

    </tr>
    
  </tbody>
</table>
              </div>
  </div>
        </div>
</body>
</html>