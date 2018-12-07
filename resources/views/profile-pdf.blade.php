@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <?php $url = Storage::disk('public')->url('profile.pdf'); ?>
            <div id="example1"></div>
        </div>
    </div>
</div>
<script src="{{ asset('js/pdfobject.js') }}"></script>
<script>PDFObject.embed("{{$url}}", "#example1");</script>
@endsection
