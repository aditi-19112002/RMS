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


    <div class="container mt-5">
        <div class="row">
            <div class="col-6 mx-auto">
            @if(session("msg"))
    <div class="col-12">
        <div class="alert alert-success">
          {{session('msg')}}
        </div>
    </div>
    @endif
    @if(session("error"))
    <div class="col-12">
        <div class="alert alert-danger">
          {{session('error')}}
        </div>
    </div>
    @endif
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="col-12">
        <div class="row mt-4">
            <div class="col-9"><h2>Manage Results</h2></div>
            <div class="col">
                <form action="{{route('search')}}" method="get"class="d-flex">
                    <input type="search"name="search" value="@if(isset($search)) {{$search}} @endif"class="form-control rounded-0" placeholder="Search with name">
                    <input type="submit" value="Go"class="btn btn-dark rounded-0">
                </form>
            </div>
        </div>
            <table class="table">
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>father</th>
                    <th>contact</th>
                    <th>school_name</th>
                    <th>maths</th>
                    <th>science</th>
                    <th>sst</th>
                    <th>hindi</th>
                    <th>english</th>
                    <th>totalmarks</th>
                    <th>persentage</th>
                    <th>Division</th>
                    <th>Action</th>
                </tr>
               @foreach ($results as $item)
               <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->father}}</td>
                <td>{{$item->contact}}</td>
                <td>{{$item->school_name}}</td>
                <td>{{$item->maths}}</td>
                <td>{{$item->science}}</td>
                <td>{{$item->sst}}</td>
                <td>{{$item->hindi}}</td>
                <td>{{$item->english}}</td>
                <td>{{$total = $item->english + $item->hindi + $item->science + $item->sst + $item->maths}}</td>
                <td>{{ $persentage = $total/500*100}}%</td>
                <td>
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
                <td class="btn btn-group">
                    <a href="{{route('delete',$item->id)}}" class="btn btn-danger">X</a>
                    <a href="{{route('viewResult',$item->id)}}"class="btn btn-dark">View</a>
                    <a href="{{route('edit',$item->id)}}"class="btn btn-primary">edit</a>
                </td>
               </tr>
               @endforeach
            </table>
        </div>
    </div>
    </div>

</body>
</html>