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
    <style>
        .equal-width-columns th, .equal-width-columns td {
            width: 33.33%;
        }
    </style>
    <title>NutriTransform: Uncovering the Science of Cooking</title>
</head>
<body>
<div style="background-color: rgba(197, 161, 147, 0.85);">
    <h2>Nutrient Details</h2>
    <div>
        <p><strong>ID:</strong> {{$foodDetail->id}}</p>
        <p><strong>Name:</strong> {{$foodDetail->name}}</p>
        <a href="{{url()->previous()}}" class="btn btn-secondary">Back</a>
        <a href="/" class="btn btn-primary">Keep searching</a>
    </div>
    <hr>
    <div class="table-responsive">
        <table class="table table-striped align-middle table-bordered equal-width-columns">
            <thead class="table-primary table-group-divider align-middle text-center">
            <tr>
                <th class="text-start">Nutrients</th>
                <th>Raw</th>
                <th>Cooked</th>
            </tr>
            </thead>
            <tbody class="text-center">
            <tr>
                <td class="text-start">Water</td>
                <td>{{$foodDetail->rawFoodNutrient->Water ?? 'N/A'}}</td>
                <td>{{$foodDetail->cookedFoodNutrient->Water ?? 'N/A'}}</td>
            </tr>
            <tr>
                <td class="text-start">Protein</td>
                <td>{{$foodDetail->rawFoodNutrient->Protein ?? 'N/A'}}</td>
                <td>{{$foodDetail->cookedFoodNutrient->Protein ?? 'N/A'}}</td>
            </tr>
            <tr>
                <td class="text-start">Total lipid (fat)</td>
                <td>{{$foodDetail->rawFoodNutrient->Total_lipid_fat ?? 'N/A'}}</td>
                <td>{{$foodDetail->cookedFoodNutrient->Total_lipid_fat ?? 'N/A'}}</td>
            </tr>
            <tr>
                <td class="text-start">Carbohydrate, by difference</td>
                <td>{{$foodDetail->rawFoodNutrient->Carbohydrate_by_difference ?? 'N/A'}}</td>
                <td>{{$foodDetail->cookedFoodNutrient->Carbohydrate_by_difference ?? 'N/A'}}</td>
            </tr>
            <tr>
                <td class="text-start">Calcium, Ca</td>
                <td>{{$foodDetail->rawFoodNutrient->Calcium_Ca ?? 'N/A'}}</td>
                <td>{{$foodDetail->cookedFoodNutrient->Calcium_Ca ?? 'N/A'}}</td>
            </tr>
            <tr>
                <td class="text-start">Iron, Fe</td>
                <td>{{$foodDetail->rawFoodNutrient->Iron_Fe ?? 'N/A'}}</td>
                <td>{{$foodDetail->cookedFoodNutrient->Iron_Fe ?? 'N/A'}}</td>
            </tr>
            <tr>
                <td class="text-start">Magnesium, Mg</td>
                <td>{{$foodDetail->rawFoodNutrient->Magnesium_Mg ?? 'N/A'}}</td>
                <td>{{$foodDetail->cookedFoodNutrient->Magnesium_Mg ?? 'N/A'}}</td>
            </tr>
            <tr>
                <td class="text-start">Phosphorus, P</td>
                <td>{{$foodDetail->rawFoodNutrient->Phosphorus_P ?? 'N/A'}}</td>
                <td>{{$foodDetail->cookedFoodNutrient->Phosphorus_P ?? 'N/A'}}</td>
            </tr>
            <tr>
                <td class="text-start">Potassium, K</td>
                <td>{{$foodDetail->rawFoodNutrient->Potassium_K ?? 'N/A'}}</td>
                <td>{{$foodDetail->cookedFoodNutrient->Potassium_K ?? 'N/A'}}</td>
            </tr>
            <tr>
                <td class="text-start">Sodium, Na</td>
                <td>{{$foodDetail->rawFoodNutrient->Sodium_Na ?? 'N/A'}}</td>
                <td>{{$foodDetail->cookedFoodNutrient->Sodium_Na ?? 'N/A'}}</td>
            </tr>
            <tr>
                <td class="text-start">Zinc, Zn</td>
                <td>{{$foodDetail->rawFoodNutrient->Zinc_Zn ?? 'N/A'}}</td>
                <td>{{$foodDetail->cookedFoodNutrient->Zinc_Zn ?? 'N/A'}}</td>
            </tr>
            <tr>
                <td class="text-start">Copper_Cu</td>
                <td>{{$foodDetail->rawFoodNutrient->Copper_Cu ?? 'N/A'}}</td>
                <td>{{$foodDetail->cookedFoodNutrient->Copper_Cu ?? 'N/A'}}</td>
            </tr>
            <tr>
                <td class="text-start">Manganese, Mn</td>
                <td>{{$foodDetail->rawFoodNutrient->Manganese_Mn ?? 'N/A'}}</td>
                <td>{{$foodDetail->cookedFoodNutrient->Manganese_Mn ?? 'N/A'}}</td>
            </tr>
            <tr>
                <td class="text-start">Selenium, Se</td>
                <td>{{$foodDetail->rawFoodNutrient->Selenium_Se ?? 'N/A'}}</td>
                <td>{{$foodDetail->cookedFoodNutrient->Selenium_Se ?? 'N/A'}}</td>
            </tr>
            <tr>
                <td class="text-start">Vitamin C, total ascorbic acid</td>
                <td>{{$foodDetail->rawFoodNutrient->Vitamin_C_total_ascorbic_acid ?? 'N/A'}}</td>
                <td>{{$foodDetail->cookedFoodNutrient->Vitamin_C_total_ascorbic_acid ?? 'N/A'}}</td>
            </tr>
            <tr>
                <td class="text-start">Thiamin</td>
                <td>{{$foodDetail->rawFoodNutrient->Thiamin ?? 'N/A'}}</td>
                <td>{{$foodDetail->cookedFoodNutrient->Thiamin ?? 'N/A'}}</td>
            </tr>
            <tr>
                <td class="text-start">Riboflavin</td>
                <td>{{$foodDetail->rawFoodNutrient->Riboflavin ?? 'N/A'}}</td>
                <td>{{$foodDetail->cookedFoodNutrient->Riboflavin ?? 'N/A'}}</td>
            </tr>
            <tr>
                <td class="text-start">Niacin</td>
                <td>{{$foodDetail->rawFoodNutrient->Niacin ?? 'N/A'}}</td>
                <td>{{$foodDetail->cookedFoodNutrient->Niacin ?? 'N/A'}}</td>
            </tr>
            <tr>
                <td class="text-start">Pantothenic acid</td>
                <td>{{$foodDetail->rawFoodNutrient->Pantothenic_acid ?? 'N/A'}}</td>
                <td>{{$foodDetail->cookedFoodNutrient->Pantothenic_acid ?? 'N/A'}}</td>
            </tr>
            <tr>
                <td class="text-start">Vitamin B-6</td>
                <td>{{$foodDetail->rawFoodNutrient->Vitamin_B6 ?? 'N/A'}}</td>
                <td>{{$foodDetail->cookedFoodNutrient->Vitamin_B6 ?? 'N/A'}}</td>
            </tr>
            <tr>
                <td class="text-start">Riboflavin</td>
                <td>{{$foodDetail->rawFoodNutrient->Folate_total  ?? 'N/A'}}</td>
                <td>{{$foodDetail->cookedFoodNutrient->Folate_total  ?? 'N/A'}}</td>
            </tr>
            <tr>
                <td class="text-start">Vitamin B-12</td>
                <td>{{$foodDetail->rawFoodNutrient->Vitamin_B12 ?? 'N/A'}}</td>
                <td>{{$foodDetail->cookedFoodNutrient->Vitamin_B12 ?? 'N/A'}}</td>
            </tr>
            <tr>
                <td class="text-start">Vitamin A</td>
                <td>{{$foodDetail->rawFoodNutrient->Vitamin_A_RAE ?? 'N/A'}}</td>
                <td>{{$foodDetail->cookedFoodNutrient->Vitamin_A_RAE ?? 'N/A'}}</td>
            </tr>
            <tr>
                <td class="text-start">Cholesterol</td>
                <td>{{$foodDetail->rawFoodNutrient->Cholesterol ?? 'N/A'}}</td>
                <td>{{$foodDetail->cookedFoodNutrient->Cholesterol ?? 'N/A'}}</td>
            </tr>
            <tr>
                <td class="text-start">Fatty acids, total saturated</td>
                <td>{{$foodDetail->rawFoodNutrient->Fatty_acids_total_saturated ?? 'N/A'}}</td>
                <td>{{$foodDetail->cookedFoodNutrient->Fatty_acids_total_saturated ?? 'N/A'}}</td>
            </tr>
            <tr>
                <td class="text-start">Fatty acids, total monounsaturated</td>
                <td>{{$foodDetail->rawFoodNutrient->Fatty_acids_total_monounsaturated ?? 'N/A'}}</td>
                <td>{{$foodDetail->cookedFoodNutrient->Fatty_acids_total_monounsaturated ?? 'N/A'}}</td>
            </tr>
            <tr>
                <td class="text-start">Fatty acids, total polyunsaturated</td>
                <td>{{$foodDetail->rawFoodNutrient->Fatty_acids_total_polyunsaturated ?? 'N/A'}}</td>
                <td>{{$foodDetail->cookedFoodNutrient->Fatty_acids_total_polyunsaturated ?? 'N/A'}}</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
