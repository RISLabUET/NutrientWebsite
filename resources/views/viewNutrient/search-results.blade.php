<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>NutriTransform: Uncovering the Science of Cooking</title>
</head>
<body>
<div style="background-color: rgba(197, 161, 147, 0.85);">
    <h2>Search result</h2>
    <button href="{{url()->previous()}}" class="btn btn-success">Back</button>
    <hr>
    @if($results->isEmpty())
        <p>Can't find any result with your searching. Try again!</p>
    @else
        <div class="table-responsive">
            <table class="table table-striped align-middle table-bordered">
                <thead class="table-primary table-group-divider align-middle text-center">
                <tr>
                    <th rowspan="2">ID</th>
                    <th rowspan="2">Name</th>
                    <th colspan="2">Water</th>
                    <th colspan="2">Protein</th>
                    <th colspan="2">Total lipid (fat)</th>
                    <th colspan="2">Vitamin B-6</th>
                    <th colspan="2">Vitamin B-12</th>
                    <th colspan="2">Vitamin A</th>
                    <th colspan="2">Cholesterol</th>
                    <th colspan="2">Fatty acids, total sturated</th>
                    <th rowspan="2">Show more</th>
                </tr>
                <tr>
                    <th>Raw</th>
                    <th>Cooked</th>
                    <th>Raw</th>
                    <th>Cooked</th>
                    <th>Raw</th>
                    <th>Cooked</th>
                    <th>Raw</th>
                    <th>Cooked</th>
                    <th>Raw</th>
                    <th>Cooked</th>
                    <th>Raw</th>
                    <th>Cooked</th>
                    <th>Raw</th>
                    <th>Cooked</th>
                    <th>Raw</th>
                    <th>Cooked</th>
                </tr>
                </thead>
                <tbody class="text-center">
                @foreach($results as $food)
                    <tr>
                        <td>{{ $food->id }}</td>
                        <td>{{ $food->name }}</td>
                        <td>{{$food->rawFoodNutrient->Water ?? 'N/A'}}</td>
                        <td>{{$food->cookedFoodNutrient->Water ?? 'N/A'}}</td>
                        <td>{{$food->rawFoodNutrient->Protein ?? 'N/A'}}</td>
                        <td>{{$food->cookedFoodNutrient->Protein ?? 'N/A'}}</td>
                        <td>{{$food->rawFoodNutrient->Total_lipid_fat ?? 'N/A'}}</td>
                        <td>{{$food->cookedFoodNutrient->Total_lipid_fat ?? 'N/A'}}</td>
                        <td>{{$food->rawFoodNutrient->Vitamin_B6 ?? 'N/A'}}</td>
                        <td>{{$food->cookedFoodNutrient->Vitamin_B6 ?? 'N/A'}}</td>
                        <td>{{$food->rawFoodNutrient->Vitamin_B12 ?? 'N/A'}}</td>
                        <td>{{$food->cookedFoodNutrient->Vitamin_B12 ?? 'N/A'}}</td>
                        <td>{{$food->rawFoodNutrient->Vitamin_A_RAE ?? 'N/A'}}</td>
                        <td>{{$food->cookedFoodNutrient->Vitamin_A_RAE ?? 'N/A'}}</td>
                        <td>{{$food->rawFoodNutrient->Cholesterol ?? 'N/A'}}</td>
                        <td>{{$food->cookedFoodNutrient->Cholesterol ?? 'N/A'}}</td>
                        <td>{{$food->rawFoodNutrient->Fatty_acids_total_saturated ?? 'N/A'}}</td>
                        <td>{{$food->cookedFoodNutrient->Fatty_acids_total_saturated ?? 'N/A'}}</td>
                        <td><a href="/food-detail/{{ $food->id }}" class="btn btn-info">More...</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
</body>
</html>
