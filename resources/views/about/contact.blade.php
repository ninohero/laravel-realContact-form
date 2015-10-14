<h1>Contact TODOParrot</h1>

<ul>
	@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
	@endforeach
</ul>

{!! Form::open(array('route' => 'contact_store', 'class' => 'form')) !!}

<div class="form-group">
{!! Form::label('Your name') !!}
{!! Form::text('name', null,
		array('required',
					'class' => 'form-control',
					'placeholder' => 'Your name')) !!}
</div>

<div class="form-group">
{!! Form::label('Enter email') !!}
{!! Form::text('email', null,
		array('required',
					'class' => 'form-control',
					'placeholder' => 'Your e-mail address')) !!}
</div>

<div class="form-group">
{!! Form::label('Enter Message') !!}
{!! Form::textarea('message', null,
		array('required',
					'class' => 'form-control',
					'placeholder' => 'Your message')) !!}
</div>

<div class="form-group">
	{!! Form::submit('Contact Us!',
	array('class' => 'btn btn-primary')) !!}
</div>
{!! Form::close() !!}
