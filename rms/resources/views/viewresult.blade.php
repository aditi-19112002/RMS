<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    @include('header')
    <div class="container">
        <div class="col-6 mx-auto">
               <h2>View{{$result->name}}'s Result</h2>
               <table class="table">
                <tr>
                    <th class="bg-primary text-white"colspan="4">Personal Details</th>
                </tr>
                <tr>
                <th colspan="2">Name</th>
                <th colspan="2">{{$result->name}}</th>
                </tr>
                <tr>
                <th colspan="2"> Father Name</th>
                <th colspan="2">{{$result->father}}</th>
                </tr>
                <tr>
                <th colspan="2">contact</th>
                <th colspan="2">{{$result->contact}}</th>
                </tr>
                <tr>
                <th colspan="2">school_name</th>
                <th colspan="2">{{$result->school_name}}</th>
                </tr>
                <tr>
                    <th class="bg-danger text-white"colspan="4">Marks's Details</th>
                </tr>
                <tr>
                    <th>Subjects</th>
                    <th>TotalMarks</th>
                    <th>Pass Marks</th>
                    <th>Obtain Marks</th>
                </tr>
                <tr>
                    <th>Maths</th>
                    <td>100</td>
                    <td>30</td>
                    <td>{{$result->maths}}</td>
                </tr>
                <tr>
                    <th>Science</th>
                    <td>100</td>
                    <td>30</td>
                    <td>{{$result->science}}</td>
                </tr>
                <tr>
                    <th>Sst</th>
                    <td>100</td>
                    <td>30</td>
                    <td>{{$result->sst}}</td>
                </tr>
                <tr>
                    <th>English</th>
                    <td>100</td>
                    <td>30</td>
                    <td>{{$result->english}}</td>
                </tr>
                <tr>
                    <th>Hindi</th>
                    <td>100</td>
                    <td>30</td>
                    <td>{{$result->hindi}}</td>
                </tr>
                <tr>
                    <th class="bg-success text-white"colspan="4">Result Details</th>
                    </tr>
                    <td colspan="2">Total Marks</td>
                    <td colspan="2">{{$total = $result->english + $result->hindi + $result->science + $result->sst + $result->maths}}</td>
                  </tr>
                  <tr>
               <td colspan="2">Percentage</td>
                <td colspan="2">{{ $persentage = $total/500*100}}%</td>
                </tr>
                <tr>
                    <th colspan="2">Division</th>
                <td colspan="2">
                @if ($persentage >=60)
                    {{"1st division"}}
                    @elseif($persentage >=50)
                     {{"2nd division"}}
                     @elseif($persentage >= 30)
                     {{"3rd division"}}
                     @else
                     {{"Fail"}}
                     @endif
                </td>
                </tr>
                <a href="{{route('home')}}" class="btn btn-dark m-2">Go Back</a>
               </table>
                     
        </div>
    </div>
    </div>

</body>
</html>