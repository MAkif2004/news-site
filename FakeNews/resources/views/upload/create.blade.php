<x-layout>
    <div class="container">
        <div class="upload-card" style="margin: 20px;">
            <div class="upload-card-header">Create New Image</div>
            <div class="upload-card-body">

                <form action="{{ url('upload') }}" method="POST" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <label>Title</label><br>
                    <input type="text" name="name" id="name" class="form-control"><br>
                    <label>Description</label><br>
                    <textarea name="desc" id="desc" class="form-control" style="height: 200px; line-height: 1;"></textarea><br>
                    <input class="form-control" name="photo" type="file" id="photo">

                    <input type="submit" value="Save" class="btn btn-success"><br>
                </form>

            </div>
        </div>
    </div>
</x-layout>
