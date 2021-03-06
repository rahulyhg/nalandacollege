@extends('admin.layouts.master')

@section('title')
    {{ $head['page_header'] }}
@stop


@section('page-header')
    Show {{ $head['page_header'] }} Information
@stop



@section('right-content')
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
            
                <a href="{{ URL::action('StaffController@index') }}" class="btn btn-primary ">
                    <span class="fa fa-list"> </span>  {{ $head['page_header'] }} List 
                </a>
                <!-- /.panel-heading -->
            </div>

            <div class="panel-body">
                
                <div class="col-lg-6">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            
                            <tr>
                                <td colspan="2" align="center">
                                {{ HTML::image( asset('assets/uploads/achievers/'. $result->profile_picture) , $result->name, array('width'=> '200px' ) ) }}
                                </td>
                            </tr>
                                
                            <tr>
                                <th>Name</th>
                                <td> {{ $result->first_name .' '.  $result->last_name }} </td>
                            </tr>
                                
                            <tr>
                                <th>Email</th>
                                <td> {{ $result->email }} </td>
                            </tr>
                                
                            
                            <tr>
                                <th>Contact No</th>
                                <td> {{ $result->contact_no }} </td>
                            </tr>
                                
                            <tr>
                                <th>Contact No</th>
                                <td> {{ $result->birth_date }} </td>
                            </tr>
                            
                            
                            <tr>
                                <th>Position</th>
                                <td> {{ $result->joining_date }} </td>
                            </tr>
                                
                            <tr>
                                <th>Address</th>
                                <td> {{ $result->address }} </td>
                            </tr>
                            
                        </table>
                    </div>
                        
                </div>

            </div>
            <!-- /.panel-body -->
        
            </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
@stop
