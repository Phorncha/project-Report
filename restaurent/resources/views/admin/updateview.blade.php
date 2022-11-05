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

        <div style="position: relative; top: 60px; right: -150px">
            <form action="{{ url('/update',$data->id) }}" method="post" enctype="multipart/form-data">

                @csrf

                <div>
                    <label>Title</label>
                    <input style="color: blue;" type="text" name="title" value="{{$data->title}}" require>
                </div>

                <div>
                    <label>Price</label>
                    <input style="color: blue;" type="number" name="price" value="{{ $data->price }}" require>
                </div>

                <div>
                    <label>Desciption</label>
                    <input style="color: blue;" type="text" name="description" value="{{ $data->description }}" require>
                </div>

                <div>
                    <label>Old Image</label>
                    <img style="width: 70%; height: 200px;" width="70%" height="200px" src="/foodimage/{{ $data->image }}">
                </div>

                <div>
                    <label>New Image</label>
                    <input type="file" name="image" require>
                </div>

                <div>
                    <input style="color: black; background: white" type="submit" value="Save">
                </div>

            </form>

        </div>

    </div>

    @include("admin.adminscript")

</body>

</html>