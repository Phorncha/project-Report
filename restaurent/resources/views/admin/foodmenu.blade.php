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

        <div style="position: relative; top: 60px; right: -20px">
            <form action="{{ url('/uploadfood') }}" method="post" enctype="multipart/form-data">

                @csrf

                <div>
                    <label>Title</label>
                    <input style="color: blue;" type="text" name="title" placeholder="Write a title" require>
                </div>

                <div>
                    <label>Price</label>
                    <input style="color: blue;" type="number" name="price" placeholder="Enter price" require>
                </div>

                <div>
                    <label>Image</label>
                    <input type="file" name="image" require>
                </div>

                <div>
                    <label>Desciption</label>
                    <input style="color: blue;" type="text" name="description" placeholder="Desciption" require>
                </div>

                <div>

                    <button type="submit" class="btn btn-primary">Save</button>

                </div>

            </form>

            <div>
                <table bgcolor="black">
                    <tr align="center">
                        <th style="padding: 30px">Food Name</th>
                        <th style="padding: 30px">Price</th>
                        <th style="padding: 30px">Description</th>
                        <th style="padding: 30px">Image</th>
                        <th style="padding: 30px">Action</th>
                        <th style="padding: 30px">Action2</th>
                    </tr>

                    @foreach($data as $data)

                    <tr align="center">
                        <td>{{ $data->title }}</td>
                        <td>{{ $data->price }}</td>
                        <td>{{ $data->description }}</td>
                        <td><img style="width: 70%; height: 200px;" width="70%" height="200px"
                                src="/foodimage/{{ $data->image }}"></td>
                        <td>
                            <a href="{{ url('/deletemenu',$data->id) }}">Delete</a>
                        </td>
                        <td>
                            <a href="{{ url('/updateview',$data->id) }}">Update</a>
                        </td>
                    </tr>

                    @endforeach

                </table>
            </div>

        </div>

    </div>

    @include("admin.adminscript")

</body>

</html>