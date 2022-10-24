<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
  <div class="container w-100">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Title</th>
          <th scope="col">starting_date</th> 
          <th scope="col">Closing_date</th>
          <th scope="col">Description</th>
        </tr>
      </thead>
      <tbody>
        <tr>
        @foreach($tickets as $ticket)
          <th scope="row">{{ $ticket->id }}</th>
          <td>{{ $ticket->title }}</td>
          <td>{{ $ticket->starting_date }}</td>
          <td>{{ $ticket->closing_date }}</td>
          <td>{{ $ticket->description }}</td>
        </tr>
        <!-- <tr>
          <th scope="row">2</th>
          <td></td>
          <td></td>
          <td></td>
        </tr> -->
        <!-- <tr>
          <th scope="row">3</th>
          <td></td>
          <td></td>
          <td></td>
        </tr> -->
        @endforeach
      </tbody>
    </table>
    </div>
</body>
</html>