<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student</title>
</head>
<body>
    <table>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Grade 1</th>
          <th>Grade 2</th>
          <th>Grade 3</th>
          <th>Grade 4</th>
          <th>Average</th>
          <th>Result</th>
        </tr>
        <tr>
          <td>{{$data['id']}}</td>
          <td>{{$data['name']}}</td>
          <td>{{$data['grade_1'] ?? 'N/A'}}</td>
          <td>{{$data['grade_2'] ?? 'N/A'}}</td>
          <td>{{$data['grade_3'] ?? 'N/A'}}</td>
          <td>{{$data['grade_4'] ?? 'N/A'}}</td>
          <td>{{$data['average']}}</td>
          <td>{{$data['final']}}</td>
        </tr>
</body>
</html>