<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">

    @include("admin.admincss")

</head>

<body>

    <div class="container-scroller">

        @include("admin.navbar")

        <form action="{{url('/updatefoodchef',$data->id) }}" method="Post" enctype="multipart/form-data">
            @csrf

            <div>
                <label>Chef name</label>
                <input style="color: blue;" type="text" name="name" value="{{ $data->name }}">
            </div>
            <div>
                <label>Speciality</label>
                <input style="color: blue;" type="text" name="speciality" value="{{ $data->speciality }}">
            </div>
            <div>
                <label>Old Image</label>
                <img style="width: 150%; height: 250px;" width="150%" height="250px"
                    src="/chefimage/{{ $data->image }}">
            </div>
            <div>
                <label>New Image</label>
                <input type="file" name="image" require="">
            </div>
            <div>

                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>

    </div>

    @include("admin.adminscript")

</body>

</html>