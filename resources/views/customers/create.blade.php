@extends('layouts.backend')

@section('title', 'Create Customer')

@section('content')
	<div class="row">
		<div class="col-lg-12">
			<?php echo Form::open(['action' => ['CustomersController@save']]); ?>
			<?php
				echo Form::text('first_name', [
					'class' => 'form-control'
				]);
			?>
			<?php
				echo Form::text('last_name', [
					'class' => 'form-control'
				]);
			?>
			<?php
				echo Form::text('email', [
					'class' => 'form-control'
				]);
			?>
			<?php echo Form::close(); ?>
		</div>
	</div>
@endsection
