<?php

?>
@extends('template.forms.form')

@section('form-input')
    <div class="form-row">
        <div class="form-group col-md-6">
            {{Form::label('for_name','Name',['class' => 'control-label'])}}
            {{Form::text('name',old('name', $element->name ?? ''),['class' => 'form-control','placeholder' =>'Name' ])}}
        </div>
        <div class="form-group col-md-6">
            {{Form::label('for_element','Element',['class' => 'control-label'])}}
            {{Form::text('element_id',old('element_id', $element->element_id ?? ''),['class' => 'form-control','placeholder' =>'Name' ])}}
        </div>
        @if(isset($element->id))
            <div class="form-row">
                <img src="{{ asset($element->file_path) }}" alt="" title="profile_pic" class="img-thumbnail"
                     width="300px">
            </div>
        @endif
        <div class="custom-file col-md-6">
            <label class="custom-file-label" for="chooseFile">Select file</label>
            <input type="file" name="file" class="custom-file-input" id="chooseFile">
        </div>
        <div class="clearfix"></div>
@endsection
@section('after-form-input')

@endsection