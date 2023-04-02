
<x-layout>


    <div class="container">
        <div class="row">
            <div class="col-12" style="padding:20px;">
                <div class="upload-card">
                    <div class="card-header">Laravel 9 Image Upload and Display in Datatable | File Storage</div>
                    <div class="card-body">
                        <a href="{{ url('/upload/create') }}" class="btn btn-success btn-sm" title="Add New Contact">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Picture</th>
                                </thead>
                                </thead>
                                <tbody>
                                @foreach($posts as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td>
                                            <img src="{{ asset($item->image->photo) }}" width= '50' height='50' class="img img-responsive" />


                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>