@extends('admin.layouts.master')

@section('title')
    {{ $head['page_header'] }}
@stop

@section('css-section')
    {{ HTML::style('assets/admin/js/plugins/datepicker/css/datepicker.css'); }}
@stop

@section('page-header')
    Edit {{ $head['page_header'] }}
@stop



@section('right-content')
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
            
                <a href="{{ URL::action('UserController@index') }}" class="btn btn-primary ">
                    <span class="fa fa-list"> </span>  {{ $head['page_header'] }} List 
                </a>
                <!-- /.panel-heading -->
            </div>

            <div class="panel-body">
                
                <div class="col-lg-6">
                    {{ Form::model($data, array( 'route' => array('admin.users.update', $id), 'method' => 'patch' , 'id' => 'frm_caste', 'class' => 'form-horizontal') ) }}
                        
                        <div class="form-group">
                            {{ Form::label('email', 'Email', array('class' => 'control-label' ) ); }}
                            {{ Form::text('email', null, array('class' => 'form-control')); }}
                            <p class="help-inline">
                                {{ $errors->first('email'); }}
                            </p>
                        </div>
                            
                        <div class="form-group">
                            {{ Form::label('username', 'Username', array('class' => 'control-label' ) ); }}
                            {{ Form::text('username', null, array('class' => 'form-control')); }}
                            <p class="help-inline">
                                {{ $errors->first('username'); }}
                            </p>
                        </div>
                            
                        <div class="form-group">
                            {{ Form::label('password', 'Password', array('class' => 'control-label' ) ); }}
                            {{ Form::password('password',  array('class' => 'form-control')); }}
                            <p class="help-inline">
                                {{ $errors->first('password'); }}
                            </p>
                        </div>
                            
                            
                        <div class="form-group">
                            {{ Form::label('first_name', 'First Name', array('class' => 'control-label' ) ); }}
                            {{ Form::text('first_name',null, array('class' => 'form-control')); }}
                            <p class="help-inline">
                                {{ $errors->first('first_name'); }}
                            </p>
                        </div>
                            
                            
                        <div class="form-group">
                            {{ Form::label('last_name', 'Last Name', array('class' => 'control-label' ) ); }}
                            {{ Form::text('last_name', null, array('class' => 'form-control')); }}
                            <p class="help-inline">
                                {{ $errors->first('last_name'); }}
                            </p>
                        </div>
                            
                        <div class="form-group">
                            {{ Form::label('date_of_birth', 'Birth Date', array('class' => 'control-label' ) ); }}
                            {{ Form::text('date_of_birth', null, array('class' => 'form-control')); }}
                            <p class="help-inline">
                                {{ $errors->first('date_of_birth'); }}
                            </p>
                        </div>
                            
                            
                        <div class="form-group">
                            {{ Form::label('gender', 'Gender', array('class' => 'control-label' ) ); }}
                            {{ Form::select('gender', $gender_results , null, array("class" => 'form-control') ) }}
                            <p class="help-inline">
                                {{ $errors->first('gender'); }}
                            </p>
                        </div>
                        
                        
                        {{ Form::submit('Submit', array('class' => 'btn btn-success')); }}
                        
                        <a href="{{ URL::action('UserController@index') }}" class="btn btn-danger">
                            Cancel
                        </a>
                        
                    {{ Form::close() }} 
                </div>
                                    
            </div>
            <!-- /.panel-body -->
        
            </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
@stop

@section('js-section')
    
    {{ HTML::script('assets/admin//js/plugins/datepicker/js/bootstrap-datepicker.js'); }}
    
    <script type="text/javascript">
    $(document).ready(function(){
    
        $('#start_date').datepicker({
            format : 'yyyy-mm-dd',
            autoclose : true
            
        }).on('changeDate', function(ev){
           
            $(this).datepicker('hide');
        });
        
        $('#end_date').datepicker({
            format : 'yyyy-mm-dd',
            autoclose : true
            
        }).on('changeDate', function(ev){
            console.log(ev);
            $(this).datepicker('hide');
        });
        
        @if ( $errors->first('title') != false )
            $('#title').closest('.form-group').addClass('has-error');
            $('#title').siblings('.help-inline').addClass('text-danger');
        @endif
    });
    </script>
@stop


