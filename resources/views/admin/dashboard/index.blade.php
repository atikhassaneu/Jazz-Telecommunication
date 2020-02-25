@extends('admin.layouts.master_layout')
@section('title','Dashboard')
@section('header','Dashboard')
@section('content')
    <div class="row">
        <div class="col-4">
            <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">slideshow</i>
                    </div>
                    <p class="card-category">Total slides</p>
                    <h3 class="card-title">{{count($sliders)}}
                    </h3>
                </div>
                <div class="card-footer">

                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">store</i>
                    </div>
                    <p class="card-category">Services</p>
                    <h3 class="card-title">{{count($services)}}</h3>
                </div>
                <div class="card-footer">

                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">contact_support</i>
                    </div>
                    <p class="card-category">unread contacts</p>
                    <h3 class="card-title">{{count($unreadContacts)}}</h3>
                </div>
                <div class="card-footer">

                </div>
            </div>
        </div>

    </div>
    <div class="row py-5">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3>List All Unread Contacts</h3>
                </div>
                <div class="card-body">
                    @if(count($unreadContacts))
                        <table class="table table-bordered">
                            <tr>
                                <th>serial</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th width="20%">Action</th>
                            </tr>
                            @php($i = 1)
                            @foreach($unreadContacts as $contact)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$contact->name}}</td>
                                    <td>{{$contact->email}}</td>

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
