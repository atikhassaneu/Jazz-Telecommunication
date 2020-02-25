@extends('admin.layouts.master_layout')
@section('title','Slider')
@section('content')
    <div class="row" style="padding-top: 0px !important;">
        <div class="col-md-8">
            <h2>Create A New Slider</h2>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" class="form-control">
                </div>

            </form>
        </div>
    </div>
@stop
