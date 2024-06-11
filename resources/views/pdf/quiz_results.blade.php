<!DOCTYPE html>
<html>
<head>
    <title>Quiz Results</title>
    <style>
        body { font-family: Arial, sans-serif; }
        table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
        table, th, td { border: 1px solid black; }
        th, td { padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h1>Quiz Results for {{$category}}</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>{{$name}}</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td>Points</td>
                <td>{{$points}}</td>
            </tr>

        </tbody>
    </table>
    <h5> All Question You have Submit is - </h5>
    @foreach ($result->category->questions as $q )

     <p>{{$q->name}} </p>



    @endforeach
</body>
</html>
