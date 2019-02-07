@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @include('inc.messages')

                    <button name="button" id="button" class="btn btn-primary btl-lg" type="button" data-toggle="modal"
                        data-target="#addModal">Add Bookmark</button>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- modal --}}
<div class="modal" tabindex="-1" role="dialog" id="addModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title">Add Bookmark</h5>
            </div>
            <div class="modal-body">
                <form action="{{route('bookmark.store')}}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="url">Url</label>
                        <input type="text" class="form-control" name="url" id="url" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="name">Description</label>
                        <textarea class="form-control" name="desc" id="desc" placeholder=""></textarea>
                    </div>
                    <input type="submit" class="btn btn-success">
                </form>
            </div>

        </div>
    </div>
</div>
@endsection