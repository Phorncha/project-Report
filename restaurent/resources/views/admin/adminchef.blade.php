<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>

    @include("admin.admincss")

</head>

<body>

    <div class="container-scroller">

        @include("admin.navbar")
        <form action="{{ url('/uploadchef') }}" method="Post" enctype="multipart/form-data">

            @csrf

            <div>
                <label>Name</label>
                <input style="color:blue;" type="text" name="name" required="" placeholder="Enter Chef name">
            </div>
            <div>
                <label>Speciality</label>
                <input style="color:blue;" type="text" name="speciality" required=""
                    placeholder="Enter Chef speciality">
            </div>
            <div>
                <label>Chef Image</label>
                <input type="file" name="image" required="">
            </div>
            <br>
            <div>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>


        <div>
            <table bgcolor="black">
                <tr>
                    <th style="padding: 30px; ">Chef Name</th>
                    <th style="padding: 30px; ">Speciality</th>
                    <th style="padding: 30px; ">Image</th>
                    <th style="padding: 30px; ">Action1</th>
                    <th style="padding: 30px; ">Action2</th>

                </tr>

                @foreach($data as $data)

                <tr align="center">
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->speciality }}</td>
                    <td><img style="width: 70%; height: 200px;" width="70%" height="200px"
                            src="/chefimage/{{ $data->image }}">
                    </td>
                    <td>
                        <a href="{{ url('/deletechef',$data->id) }}">Delete</a>
                    </td>
                    <td>
                        <a href="{{ url('/updatechef',$data->id) }}">Update</a>
                    </td>
                </tr>

                @endforeach

            </table>
        </div>
    </div>

    @include("admin.adminscript")

</body>

</html>