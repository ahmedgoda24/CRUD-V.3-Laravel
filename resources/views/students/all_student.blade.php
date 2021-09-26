@include('students.header')


@if(Session::has('done'))
<div class="my-3 alert alert-success text-center" role="alert">
{{Session::get('done')}}
</div>
@endif


  <div class="b container-fluid  my-2">
    <table border="1px" class= "table  m-auto">
      <tr  class="thead-dark">
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Age</th>
        <th>Action</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
      @foreach($students as $student)
        <tr>
          <td>{{$student->id}}</td>
          <td>{{$student->name}}</td>
          <td>{{$student->email}}</td>
          <td>{{$student->age}}</td>
          <td><a class="btn btn-primary" href="{{Route('student.details',[$student->id])}}"><i class="fa fa-eye"></i></a></td>
          <td><a class="btn btn-info" href="{{Route('student.edit',[$student->id])}}"><i class="fa fa-edit"></i></a></td>
          <td>
          <form action="{{Route('student.delete',[$student->id])}}" method="post">
          @csrf
          @method("DELETE")
          <button class="btn btn-danger"><i class="fa fa-close"></i></button>
        
          </form>

          </td>

        </tr>
      @endforeach
  
    </table>
  </div>




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
