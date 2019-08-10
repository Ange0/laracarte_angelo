@extends("layouts.master",['title'=>'contact'])
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                <h2>Get in Touch </h2>
                <p class="text-muted">If you having trouble with this service, please ask for help.
                    <a href="mailto:kouassiangey@gmail.com">ask for help</a>
                </p>
                <form action="#" method="POST">
                    <div class="form-group">
                        <label for="name" class="control-label">
                        Name
                        </label>
                        <input type="text" name="name" id="name" class="form-control"require="">
                    </div>
                    <div class="form-group">
                        <label for="email" class="control-label">
                        Email
                        </label>
                        <input type="email" name="name" id="name" class="form-control"require="">
                    </div>
                    <div class="form-group">
                        <label for="name" class="control-label sr-only">
                        Message
                        </label>
                        <textarea require="" class="form-control" name="message" id="" cols="10" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-block">Submit Enquiry &raquo;</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection