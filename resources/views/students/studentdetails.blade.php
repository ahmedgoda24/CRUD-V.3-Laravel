
@include('students.header')



 <div class=" my-5">

    <ul class="list-group list-group w-50">
        <li class="list-group-item"><h4>Name:{{$student->name}}</h4></li>
        <li class="list-group-item"><h4>Email:{{$student->email}}</h4></li>
        <li class="list-group-item"><h4>Age:{{$student->age}}</h4></li>

    </ul>
 </div>