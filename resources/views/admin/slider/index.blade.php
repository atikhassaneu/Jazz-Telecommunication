@extends('admin.layouts.master_layout')
@section('title','Slider')
@section('navbar-brand')
    <a class="navbar-brand" href=""><h2>Slider</h2></a>
    <a class="btn btn-primary mt-3" href="" data-toggle="modal" data-target="#upload">Add A New Slider</a>
@endsection

@section('content')
    <div class="row py-5">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3>List All Sliders</h3>
                </div>
                <div class="card-body">
                    @if(count($sliders))
                    <table class="table table-bordered">
                        <tr>
                            <th>serial</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        @php($i = 1)
                        @foreach($sliders as $slider)
                            <tr>
                                <td>{{$i++}}</td>
                                <td><img height="150px" src="{{asset("uploads/slider/{$slider->img_slug}")}}"></td>
                                <td>
                                    <a class="btn btn-sm btn-primary" href="{{asset('uploads/slider/'.$slider->img_slug)}}" target="_blank"><i class="fa fa-eye"></i></a>
                                    <a onclick="deleteConfirm({{$slider->id}});" class="btn btn-sm btn-secondary" href=""><i class="fa fa-trash"></i></a>

                                    <form style="display: none;" id="delete-form-{{$slider->id}}" method="post" action="{{route('admin.slider.destroy',$slider->id)}}">
                                        @csrf;
                                        @method('DELETE');
                                    </form>

                                </td>
                            </tr>
                        @endforeach

                    </table>
                    @else
                        <h4>No sliders found</h4>
                      @endif

                </div>
                <div class="card-footer">
                    {{$sliders->links()}}
                </div>
            </div>
        </div>
    </div>
        <div class="modal fade" id="upload" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <form id="uploadImage" action="{{route('admin.slider.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <fieldset>
                                <legend>Upload Photo  <span style="padding-left: 20px; padding-bottom: 5px; color: #ff3d1b; font-size: 16px;" id="error"></span> </legend>
                                <input type="file" id="image" name="image" class="form-control">
                            </fieldset>
                        </div>
                        <div class="modal-footer">
                           <input type="submit" name="submit" class="btn btn-primary" value="Upload">
                        </div>
                    </form>
                </div>
            </div>
        </div>

@stop

@push('js')
    <script>
        $("#uploadImage").submit(function (e) {
            let image = $("#image").val();
            let extension = image.substr(image.lastIndexOf('.') + 1);
            if (image.length === 0 || image === '' || image === undefined){
                $("#error").html("Field is Required");
                e.preventDefault();
                return false;
            }else if (extension !== "jpg" && extension !== "jpeg" && extension !== "png"){
                $("#error").html("only supported jpg jpeg png");
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
                        title: 'Slider has been Deleted',
                        showConfirmButton: false,
                        timer: 1500
                    }).then((result) => {
                        $("#delete-form-"+formId).submit();
                    })
                }
            })
        }
    </script>
@endpush
