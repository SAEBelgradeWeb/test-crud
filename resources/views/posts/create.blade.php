@extends('layouts.app')

@section('main')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="/posts" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="body">Body</label>
                        <textarea name="body" id="body" cols="30" rows="10" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="category_id">Category</label>
                        <select name="category_id" id="category_id" class="form-control">
                            @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->title}}</option>
                            @endforeach
                        </select>
                    </div>


                    <div class="form-group">
                        <label for="user_id">Author</label>
                        <select name="user_id" id="user_id" class="form-control">
                            @foreach($users as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>

                </form>


            </div>
        </div>

    </div>
@endsection
