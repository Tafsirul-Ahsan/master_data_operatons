<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 CRUD Application</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <style>
        table, td, th {
          border: 1px solid black;
          text-align: center;
        }
        
        table {
          width: 100%;
          border-collapse: collapse;
        }
        
        </style>
</head>
<body>
  
    <table>
        <thead>
            <tr>
                <td>UId</td>
                <th>user_id</th>
                <th>Timestamp</th>
            </tr>
        </thead>
        <thead>
           
            @foreach($data as $row)
            <tr>
                <td>{{ $row['uid'] }}</td>
                <td>{{ $row['user_id'] }}</td>
                <td>{{ $row['timestamp'] }}</td>
            </tr>
            @endforeach
        </thead>
      </table>

</body>
</html>