<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Employee Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
    
    <h2 class="text-center mt-4">Edit Employee</h2>
    <div class="container">
         <div>
            @if ($errors->any())
                        <div class="alert alert-danger" role="alert">
                            @foreach($errors->all() as $error)
                              <div> {{ $error }} </div>
                            @endforeach
                        </div>
            @endif
         </div>
         <form action="{{ route('employee.update',$employee->id) }}" method="post">
            @csrf

            <label>Employee Name</label>
            <input type="text" name="empname" class="form-control" value="{{ $employee->name }}" placeholder="Enter Employee Name"/>
            <br/>
            <label>Employee Age</label>
            <input type="text" name="empage" class="form-control" value="{{ $employee->age }}" placeholder="Enter Employee Age"/>
            <br/>
            <label>Employee Address</label>
            <input type="text" name="empaddress" class="form-control" value="{{ $employee->address }}" placeholder="Enter Employee Address"/>
            <br/>
            <label>Employee Department</label>
            <select name="empdep" class="form-control">
                <option>---Choose Department---</option>
                <option value="finance" {{ $employee->department == 'finance' ? 'selected' : '' ;}}>Finance</option>
                <option value="technical" {{ $employee->department == 'technical' ? 'selected' : '' ;}}>Technical</option>
                <option value="hr" {{ $employee->department == 'hr' ? 'selected' : '' ;}}>HR</option>
                <option value="marketing" {{ $employee->department == 'marketing' ? 'selected' : '' ;}}>Marketing</option>
            </select>
            <br/>
            <input type="submit" value="Update" class="btn btn-success"/>

         </form>

    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>