@extends('admin.layout')

@section('css')
    <style>
        body {
            font-size: 40px;
        }
    </style>
@endsection

@section('content')
    <h2>Responsive Form</h2>
    <p>Resize the browser window to see the effect. When the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other.</p>

    <div class="container">
        <form action="/news/create" method="POST">
            @csrf()
            {{--        {{csrf_token()}}--}}
            <div class="row">
                <div class="col-25">
                    <label for="fname">Title</label>
                </div>
                <div class="col-75">
                    <input type="text" id="title" name="title" placeholder="News title">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="content">Content</label>
                </div>
                <div class="col-75">
                    <input type="text" id="content" name="content" placeholder="News Content">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="status">Status</label>
                </div>
                <div class="col-75">
                    <select id="status" name="status">
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="subject">Subject</label>
                </div>
                <div class="col-75">
                    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
                </div>
            </div>
            <div class="row">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
@endsection
