@extends('layouts.authenticated')

@section('title', htmlentities($word->word))

@section('content')
	@include('words.partials.imageAndDefinitions')

	<div class="space-for-stick-to-bottom">
	</div>

    <div class="stick-to-bottom button-panel">
	    <div class="row">
		    <div class="col-xs-6 col-sm-offset-1 col-sm-3">
			    {!! Form::open(array('method' => 'DELETE', 'route' => array('delete_word', $word->slug))) !!}
				    <button type="submit" class="btn btn-danger btn-block">
					    <i class="fa fa-btn fa-trash"></i> Delete
				    </button>
			    {!! Form::close() !!}
		    </div>
		    <div class="col-xs-6 col-sm-3">
			    <a href="{{ route('edit_word', $word->slug) }}" class="btn btn-default btn-block">
				    <span class="glyphicon glyphicon-edit"></span> Edit
			    </a>
		    </div>
	    </div>
    </div>
@endsection