<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    @include('header')
    <div class="container">
        <div class="col-6 mx-auto">
            <div class="card">
                <div class="card-header">Edit Result</div>
                <div class="card-body">
                    <form action=""method="post">
                        @csrf
                        <div class="mb-3">
                            <lable for= "">Name</lable>
                            <input type="text" name="name" value="{{$result->name}}"class="from-control">
                            @error('name')
                            <p class="text-danger small">{{($message)}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <lable for="">Father</lable>
                            <input type="text" name="father" value="{{$result->father}}"class="from-control">
                            @error('father')
                            <p class="text-danger small">{{($message)}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <lable for="">contact</lable>
                            <input type="text" name="contact" value="{{$result->contact}}"class="from-control">
                            @error('contact')
                            <p class="text-danger small">{{($message)}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <lable for="">school_name</lable>
                            <input type="text" name="school_name" value="{{$result->school_name}}"class="from-control">
                            @error('school_name')
                            <p class="text-danger small">{{($message)}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <lable for="">maths</lable>
                            <input type="text" name="maths" value="{{$result->maths}}"class="from-control">
                            @error('maths')
                            <p class="text-danger small">{{($message)}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <lable for="">science</lable>
                            <input type="text" name="science" value="{{$result->science}}"class="from-control">
                            @error('science')
                            <p class="text-danger small">{{($message)}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <lable for="">sst</lable>
                            <input type="text" name="sst" value="{{$result->sst}}"class="from-control">
                            @error('sst')
                            <p class="text-danger small">{{($message)}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <lable for="">hindi</lable>
                            <input type="text" name="hindi" value="{{$result->hindi}}"class="from-control">
                            @error('hindi')
                            <p class="text-danger small">{{($message)}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <lable for="">english</lable>
                            <input type="text" name="english" value="{{$result->english}}"class="from-control">
                            @error('english')
                            <p class="text-danger small">{{($message)}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="submit" value="update Result"class="btn btn-success w-100">
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>

</body>
</html>