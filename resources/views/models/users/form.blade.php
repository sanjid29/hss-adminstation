<?php
use App\Upload;
?>
@extends('template.forms.form')

@section('form-input')

    <div class="form-row">
        <div class="form-group col-md-6">
            {{Form::label('first_name','Email',['class' => 'control-label'])}}
            {{Form::text('email',old('email', $element->email ?? ''),['class' => 'form-control','placeholder' =>'Email' ])}}
        </div>
        <div class="form-group col-md-3">
            {{Form::label('password','Password',['class' => 'control-label'])}}
            <div class="clearfix"></div>
            {{ Form::password('password',['class'=> 'form-control','placeholder'=>'Enter your Password']) }}
        </div>
        <div class="form-group col-md-3">
            {{Form::label('password_confirmation','Confirm Password',['class' => 'control-label'])}}
            {{ Form::password('password_confirmation', ['class' => 'form-control','placeholder'=>'Re-enter your Password']) }}
        </div>

        <div class="form-group col-md-4">
            {{Form::label('first_name','First Name',['class' => 'control-label'])}}
            {{Form::text('first_name',old('first_name', $element->first_name ?? ''),['class' => 'form-control','placeholder' =>'First Name' ])}}
        </div>
        <div class="form-group col-md-4">
            {{Form::label('last_name','Last Name',['class' => 'control-label'])}}
            {{Form::text('last_name',old('last_name', $element->last_name ?? ''),['class' => 'form-control','placeholder' =>'Last Name' ])}}
        </div>
        <div class="form-group col-md-4">
            {{Form::label('name','Full Name',['class' => 'control-label'])}}
            {{Form::text('name',old('name', $element->name ?? ''),['class' => 'form-control','placeholder' =>'Full Name' ])}}
        </div>
        <div class="form-group col-md-4">
            {{Form::label('mobile_no','Mobile',['class' => 'control-label'])}}
            {{Form::text('mobile_no',old('mobile_no', $element->mobile_no ?? ''),['class' => 'form-control','placeholder' =>'Mobile' ])}}
        </div>
        <div class="form-group col-md-4">
            {{Form::label('designation','Designation',['class' => 'control-label'])}}
            {{Form::text('designation',old('designation', $element->designation ?? ''),['class' => 'form-control','placeholder' =>'Designation' ])}}
        </div>
        <div class="form-group col-md-12">
            {{Form::label('address','Address',['class' => 'control-label'])}}
            {{Form::text('address',old('address', $element->address ?? ''),['class' => 'form-control','placeholder' =>'Address' ])}}
        </div>
    </div>
    <div class="clearfix"></div>
@endsection

@section('after-form-input')
    @if(isset($element->id))
        <?php
        $profilePic = Upload::where('element_id', $element->id)->first();
        ?>
        <div class="clearfix"></div>

        @if($profilePic)
            <div class="form-row">
                <img src="{{ asset($profilePic->file_path) }}" alt="" title="profile_pic" class="img-thumbnail"
                     width="300px">
            </div>

            <form method="POST" action="{{ route('uploads.update',$profilePic->id) }}" enctype="multipart/form-data">
                @method('put')

                @else
                    <form method="POST" action="{{ route('uploads.store') }}" enctype="multipart/form-data">

                        @endif
                        @csrf
                        <input type="hidden" name="element_id" value={{$element->id}}>
                        <div class="form-row">
                            <div class="custom-file col-md-3">
                                <label class="custom-file-label" for="chooseFile">Select file</label>
                                <input type="file" name="file" class="custom-file-input" id="chooseFile">
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <br>
                        <div class="form-row">
                            <div class="col-md-3">
                                <button type="submit" name="submit" class="btn btn-primary btn-block">
                                    Upload Files
                                </button>
                            </div>
                        </div>
                    </form>
        @endif
@endsection