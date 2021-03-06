@extends("layouts.master",['title'=>'contact'])
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                <h2>Get in Touch </h2>
                <p class="text-muted">If you having trouble with this service, please ask for help.
                    <a href="mailto:{{ config('laracarte.laracarte_support') }}">ask for help</a>
                </p>
                <form action="{{ route('contact_path') }}" method="POST">
                    {{  csrf_field()}}

                    <div class="form-group {{ $errors->has('name')?'has-error':'' }}">
                        <label for="name" class="control-label">Name</label>
                        <input require="required" type="text" name="name" id="name" class="form-control" values="{{ old('name') }}" />
                        {!! $errors->first('name','<span class="help-block">:message</span>') !!} <!-- POUR AFFICHER LES ERREURS DE VALIDATION-->
                    </div>

                    <div class="form-group {{ $errors->has('name')?'has-error':'' }}">
                        <label for="email" class="control-label">
                        Email
                        </label>
                        <input type="email" name="email" id="email" class="form-control" values="{{ old('email') }}"  require=""/>
                        {!! $errors->first('email','<span class="help-block">:message</span>') !!}
                    </div>

                    <div class="form-group {{ $errors->has('name')?'has-error':'' }}">
                        <label for="msg" class="control-label sr-only">
                        Message
                        </label>
                        <textarea require="" class="form-control" name="msg" id="" cols="10" rows="10"> {{ old('msg') }}</textarea>
                        {!! $errors->first('msg','<span class="help-block">:message</span>') !!}
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-block" type="submit">Submit Enquiry &raquo;</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection