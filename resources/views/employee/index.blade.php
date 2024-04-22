<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Employees</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>

    <h2 class="text-center mt-4">All Employees</h2>
    <div class="container">
        @if(session('status'))
              <div class="alert alert-success">
                   {{ session('status') }}
              </div>
        @endif
          <table class="table table-dark table-bordered">
                  <thead>
                      <tr>
                         <th>Emp Name</th>
                         <th>Emp Age</th>
                         <th>Emp Address</th>
                         <th>Emp Department</th>
                         <th>Action</th>
                      </tr>
                  </thead>

                  <tbody>

                    @foreach ($employees as $employee)
                      <tr>
                        <td>{{$employee->name}}</td>
                        <td>{{$employee->age}}</td>
                        <td>{{$employee->address}}</td>
                        <td>{{$employee->department}}</td>
                        <td>
                            <a href="{{ route('employee.edit',$employee->id) }}" class="btn btn-success">Edit</a>
                            <a href="{{ route('employee.delete',$employee->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
          </table>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>