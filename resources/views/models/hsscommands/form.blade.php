<?php

?>
@extends('template.forms.form')

@section('form-input')
    <div class="form-row">
        <div class="form-group col-md-12">
            {{Form::label('for_name','Name',['class' => 'control-label'])}}
            {{Form::text('name',old('name', $element->name ?? ''),['class' => 'form-control','placeholder' =>'Name' ])}}
        </div>
        <div class="form-group col-md-4">
            {{Form::label('for_source','Source',['class' => 'control-label'])}}
            {{Form::select('source',\App\HssCommand::dataSourceTypes(),old('source', $element->source ?? '',),['class' => 'form-control' ])}}
        </div>
        <div class="form-group col-md-4">
            {{Form::label('for_period','Period',['class' => 'control-label'])}}
            {{Form::select('period',\App\HssCommand::periodTypes(),old('period', $element->period ?? '',),['class' => 'form-control'])}}
        </div>
        <div class="clearfix"></div>
        <div class="form-group col-md-3">
            {{Form::label('for_is_uhc','Is UHC?',['class' => 'control-label'])}}
            {{Form::select('is_uhc',\App\HssCommand::yesNoTypes(),old('is_uhc', $element->is_uhc ?? '',),['class' => 'form-control'])}}
        </div>
        <div class="form-group col-md-3">
            {{Form::label('for_is_mch','Is MCH?',['class' => 'control-label'])}}
            {{Form::select('is_mch',\App\HssCommand::yesNoTypes(),old('is_mch', $element->is_mch ?? '',),['class' => 'form-control'])}}
        </div>
        <div class="form-group col-md-3">
            {{Form::label('for_is_dh','Is DH?',['class' => 'control-label'])}}
            {{Form::select('is_dh',\App\HssCommand::yesNoTypes(),old('is_dh', $element->is_dh ?? '',),['class' => 'form-control'])}}
        </div>
        <div class="form-group col-md-3">
            {{Form::label('for_is_sp','IS SP',['class' => 'control-label'])}}
            {{Form::select('is_sp',\App\HssCommand::yesNoTypes(),old('is_sp', $element->is_sp ?? '',),['class' => 'form-control'])}}
        </div>
        <div class="form-group col-md-12">
            {{Form::label('for_api_path','Api Path',['class' => 'control-label'])}}
            {{Form::textarea('api_path',old('api_path', $element->name ?? ''),['class' => 'form-control','placeholder' =>'Api Path' ])}}
        </div>
        <div class="form-group col-md-12">
            {{Form::label('for_file_path','File Path',['class' => 'control-label'])}}
            {{Form::textarea('file_path',old('file_path', $element->file_path ?? ''),['class' => 'form-control','placeholder' =>'File Path' ])}}
        </div>
        <div class="form-group col-md-12">
            {{Form::label('for_command','Command',['class' => 'control-label'])}}
            {{Form::textarea('command',old('command', $element->command ?? ''),['class' => 'form-control','placeholder' =>'Command' ])}}
        </div>

@endsection
@section('after-form-input')

@endsection