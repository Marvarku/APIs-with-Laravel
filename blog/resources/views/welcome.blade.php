<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 15px;
            }
            ul {
                text-align: center;
                list-style: inside;
}

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>

              


            <div class="title m-b-md text-center">
                 <ul>
                 <li><a href="students">Home page</a></li>
                 <li><a href="students/create">Create A Student Record</a></li>
                 <ul>

              <div class ='col-sm-12'><br><br><br>
                <h4 class ="display-3"> Students list</h4>
                <table class =" table table-striped">
                 <thead>
                 <tr>
                   
                   <td>Name</td>
                   <td>course</td>
                <td colspan =2>Actions</td>
                 </tr>
                 </thead>
                 <tbody>

                 
                 @foreach($students as $student)
                 <tr>
                    
                    <td>{{$student->name}}</td>
                    <td>{{$student->course}}</td>
                    <td>
                    <a href="{{ route ('editStudent', $student->id) }}" >Edit</a>
                    </td>
                    <td>

                    <!-- $student = '<b>{{$student->name}}</b>'; -->

                    <a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete {{$student->name}}?')"href="{{ route ('deleteStudent', $student->id) }}" ><i class="fa fa-trash"></i>Delete</a>
 


                    </td>
                  <tr>
                @endforeach
                </tbody>
                </table>

            </div> <hr>
           
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
