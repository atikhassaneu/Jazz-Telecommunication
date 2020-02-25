@extends('admin.layouts.master_layout')
@section('title','Service')
@section('navbar-brand')
    <a class="navbar-brand" href=""><h2>Service</h2></a>
    <a class="btn btn-primary mt-3" href="" data-toggle="modal" data-target="#serviceModal">Add A New Service</a>
@endsection
@push('css')
    <style>
        #serviceForm{
            padding: 15px 10px;
        }
        #serviceForm input,textarea{
            margin: 0px;
            width: 100%;
            padding: 10px;
            background: rgba(242, 242, 242,.3);
            font-size: 16px;
            color: rgba(35, 35, 35, 0.99);
            border: none;
            outline: none;
            border-radius: 7px;
            border: 1px solid #dddddd;
        }
        #serviceForm p{
            margin: 0px;
            padding: 0px;
        }
        #serviceForm label{
            color: #343434;
            font-size: 18px;
            font-family: "Times New Roman";
        }
        #serviceForm div{
            margin: 5px 0;
        }

    </style>
@endpush
@section('content')
    <div class="row py-5">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3>List All Services</h3>
                </div>
                <div class="card-body">
                    @if(count($services))
                    <table class="table table-bordered">
                        <tr>
                            <th>serial</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Icon</th>
                            <th width="22%">Action</th>
                        </tr>
                        @php($i = 1)
                        @foreach($services as $service)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$service->title}}</td>
                                <td>{{$service->description}}</td>
                                <td><i class="fa {{$service->icon}}"></i> </td>
                                <td>
                                    <a class="btn btn-sm btn-info" data-toggle="modal" data-target="#serviceDataShowModal" data-title="{{$service->title}}" data-description="{{$service->description}}" href=""><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-sm btn-primary" data-toggle="modal" data-target="#serviceEditModal" data-id="{{$service->id}}" data-title="{{$service->title}}" data-description="{{$service->description}}" data-icon="{{$service->icon}}"  href=""><i class="fa fa-pencil"></i></a>
                                    <a onclick="deleteConfirm({{$service->id}});" class="btn btn-sm btn-secondary" href=""><i class="fa fa-trash"></i></a>

                                    <form style="display: none;" id="delete-form-{{$service->id}}" method="post" action="{{route('admin.service.destroy',$service->id)}}">
                                        @csrf;
                                        @method('DELETE');
                                    </form>

                                </td>
                            </tr>
                        @endforeach

                    </table>
                    @else
                        <h4>No services found</h4>
                      @endif

                </div>
                <div class="card-footer">
                    {{$services->links()}}
                </div>
            </div>
        </div>
    </div>
        <div class="modal fade" id="serviceModal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <form id="serviceForm" action="{{route("admin.service.store")}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="title">
                                <p><label for="title">Title</label></p>
                                <input type="text" id="title" name="title">
                            </div>
                            <div class="description">
                                <p><label for="description">Description</label></p>
                                <textarea name="description" rows="7"  id="description" ></textarea>
                            </div>
                            <div class="icon">
                                <p><label for="icon">Icon</label></p>
                                <input type="text" name="icon" id="icon">
                            </div>

                        </div>
                        <div class="modal-footer">
                            <span style="color: #ff5654; padding-right: 20px;" id="error"></span>
                           <button class="btn btn-primary">submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade" id="serviceEditModal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <form id="serviceForm" class="serviceUpdateForm" action="{{route('admin.service.update')}}" method="post" enctype="multipart/form-data">
                        @method('put')
                        @csrf

                        <div class="modal-body">
                            <input type="hidden" id="id" value="" name="id">
                            <div class="title">
                                <p><label for="title">Title</label></p>
                                <input type="text" id="title" name="title">
                            </div>
                            <div class="description">
                                <p><label for="description">Description</label></p>
                                <textarea name="description" rows="7"  id="description" ></textarea>
                            </div>
                            <div class="icon">
                                <p><label for="icon">Icon</label></p>
                                <input type="text" name="icon" id="icon">
                            </div>

                        </div>
                        <div class="modal-footer">
                            <span style="color: #ff5654; padding-right: 20px;" id="error"></span>
                           <button class="btn btn-primary" onclick="updateConfirm()">submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade" id="serviceDataShowModal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                        <div class="modal-header" id="showTitle">

                        </div>
                        <div class="modal-body" id="showDescription">

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

@stop

@push('js')
    <script>
        $("#serviceForm").submit(function (e) {
            let title = $("#title").val();
            let description = $("#description").val();
            let icon = $("#icon").val();

            if (title.length === 0 || title === '' || title === undefined || description.length === 0 || description === '' || description === undefined || icon.length === 0 || icon === '' || icon === undefined ||title.length === 0 || title === '' || title === undefined ){
                $("#error").html("Field is Required");
                e.preventDefault();
                return false;
            }
        });

        function deleteConfirm(formId){
            event.preventDefault();
            Swal.fire({
                title: 'Are you sure?',
                text: "do you want to delete?",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {
                    Swal.fire({
                        type: 'success',
                        title: 'Service has been Deleted',
                        showConfirmButton: false,
                        timer: 1500
                    }).then((result) => {
                        $("#delete-form-"+formId).submit();
                    })
                }
            })
        }

        function updateConfirm(){
            event.preventDefault();
            Swal.fire({
                title: 'Are you sure?',
                text: "do you want to save?",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, save it!'
            }).then((result) => {
                if (result.value) {
                    Swal.fire({
                        type: 'success',
                        title: 'Service has been saved',
                        showConfirmButton: false,
                        timer: 1500
                    }).then((result) => {
                        $('.serviceUpdateForm').submit();
                    })
                }
            })
        }

        function showImage(url) {
            event.preventDefault();
            Swal.fire({
                imageUrl: url,
                imageHeight: 600,
                imageAlt: 'Image'
            })
        }


        $('#serviceEditModal').on('show.bs.modal', function (event) {
            let button = $(event.relatedTarget)
            let id = button.data('id')
            let title = button.data('title')
            let description = button.data('description')
            let icon = button.data('icon')

            let modal = $(this)
            modal.find('.modal-body #id').val(id);
            modal.find('.modal-body #title').val(title);
            modal.find('.modal-body #description').val(description);
            modal.find('.modal-body #icon').val(icon);

        })


        $('#serviceDataShowModal').on('show.bs.modal', function (event) {
            let button = $(event.relatedTarget)
            let title = button.data('title')
            let description = button.data('description')
            let modal = $(this)
            modal.find('.modal-body #showTitle').append(title);
            modal.find('.modal-body #showDescription').append(description);
        })
    </script>
@endpush
