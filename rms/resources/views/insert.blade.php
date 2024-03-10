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
                <div class="card-header">Insert New Result</div>
                <div class="card-body">
                    <form action=""method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <lable for= "">Name</lable>
                            <input type="text" name="name" value="{{old('name')}}"class="form-control">
                            @error('name')
                            <p class="text-danger small">{{($message)}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <lable for= "">Image</lable>
                            <input type="file" name="image"class="form-control">
                            @error('file')
                            <p class="text-danger small">{{($message)}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <lable for="">Father</lable>
                            <input type="text" name="father" value="{{old('father')}}"class="form-control">
                            @error('father')
                            <p class="text-danger small">{{($message)}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <lable for="">contact</lable>
                            <input type="text" name="contact" value="{{old('contact')}}"class="form-control">
                            @error('contact')
                            <p class="text-danger small">{{($message)}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <lable for="">school_name</lable>
                            <input type="text" name="school_name" value="{{old('school_name')}}"class="form-control">
                            @error('school_name')
                            <p class="text-danger small">{{($message)}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <lable for="">maths</lable>
                            <input type="text" name="maths" value="{{old('maths')}}"class="form-control">
                            @error('maths')
                            <p class="text-danger small">{{($message)}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <lable for="">science</lable>
                            <input type="text" name="science" value="{{old('science')}}"class="form-control">
                            @error('science')
                            <p class="text-danger small">{{($message)}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <lable for="">sst</lable>
                            <input type="text" name="sst" value="{{old('sst')}}"class="form-control">
                            @error('sst')
                            <p class="text-danger small">{{($message)}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <lable for="">hindi</lable>
                            <input type="text" name="hindi" value="{{old('hindi')}}"class="form-control">
                            @error('hindi')
                            <p class="text-danger small">{{($message)}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <lable for="">english</lable>
                            <input type="text" name="english" value="{{old('english')}}"class="form-control">
                            @error('english')
                            <p class="text-danger small">{{($message)}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="submit"class="btn btn-success w-100">
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>

</body>
</html>