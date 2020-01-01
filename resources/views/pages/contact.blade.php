@extends('main')
@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h1>Contact me</h1>
                <hr>
                <form action="">
                    <div class="form-group">
                        <label name ="email">Email:</label>
                        <input id="email" name ="email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label name ="subject">Subject:</label>
                        <input id="subject" name ="subject" class="form-control">
                    </div>

                    <div class="form-group">
                        <label name ="message">Subject:</label>
                        <textarea id="message" name="messgae" class="form-control">Type your message here...</textarea>
                    </div>

                    <input type="submit" value="Send Email" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>
@endsection