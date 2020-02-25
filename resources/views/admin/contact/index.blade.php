@extends('admin.layouts.master_layout')
@section('title','Service')
@section('navbar-brand')
    <a class="navbar-brand" href=""><h2>Contact</h2></a>

@endsection
@push('css')

@endpush
@section('content')
    <div class="row py-5">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3>List All Contacts</h3>
                </div>
                <div class="card-body">
                    @if(count($contacts))
                    <table class="table table-bordered">
                        <tr>
                            <th>serial</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th width="10%">Seen</th>
                            <th width="20%">Action</th>
                        </tr>
                        @php($i = 1)
                        @foreach($contacts as $contact)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$contact->name}}</td>
                                <td>{{$contact->email}}</td>
                                <td>
                                    @if ($contact->seen == 0)
                                        <span class="btn btn-sm btn-info"><i class="fa fa-eye-slash"></i></span>
                                    @else
                                        <span class="btn btn-sm btn-danger"><i class="fa fa-eye"></i></span>
                                    @endif
                                </td>
                                <td>
                                    <a class="btn btn-sm btn-info"  href="{{route('admin.contact.show',$contact->id)}}"><i class="fa fa-eye"></i></a>
                                    <a onclick="deleteConfirm({{$contact->id}});" class="btn btn-sm btn-secondary" href=""><i class="fa fa-trash"></i></a>

                                    <form style="display: none;" id="delete-form-{{$contact->id}}" method="post" action="{{route('admin.contact.destroy',$contact->id)}}">
                                        @csrf;
                                        @method('DELETE');
                                    </form>

                                </td>
                            </tr>
                        @endforeach

                    </table>
                    @else
                        <h4>No contact found</h4>
                      @endif

                </div>
                <div class="card-footer">
                    {{$contacts->links()}}
                </div>
            </div>
        </div>
    </div>

@stop

@push('js')
    <script>
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
                        title: 'Contact has been Deleted',
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
