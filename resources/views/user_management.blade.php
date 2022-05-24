<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <title>Whitezip, #DevTest!</title>
  </head>
  <body>
    <h1>Users View</h1>   
    <hr> 
    <table>
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Job Position</th>
        <th>Boss's Name</th>
        <th>Boss's Email</th>
    </tr>      
    @foreach ($users as $user)  
        <tr valign="top">
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->last_name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <font color="blue">{{ $user->job_relation->job_position->name ?? '' }}</font><br> 

                @if(!empty($user->job_history))  
                    @foreach($user->job_history as $job) 
                        @if($job->id != $user->job_relation->id)
                            <font color="red">{{ $job->job_position->name }}</font><br>
                        @endif
                    @endforeach
                @endif

            </td> 
            <td>{{ $user->job_relation->boss->name ?? '' }} {{ $user->job_relation->boss->last_name  ?? '' }}</td> 
            <td>{{ $user->job_relation->boss->email ?? '' }}</td>
        </tr>
    @endforeach 
    </table>
 
</body>
 
 
</html>






