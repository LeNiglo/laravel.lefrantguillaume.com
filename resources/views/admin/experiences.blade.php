@extends('layouts.admin')

@section('header')
        <!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        My Working Experiences
        <small>Where did I work ?</small>
    </h1>
</section>
@endsection

@section('content')
    <div class='row'>
        <div class='col-md-12'>
            <!-- Box -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Working Experiences</h3>
                </div>
                <div class="box-body">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Company</th>
                            <th>Subject</th>
                            <th>Rating</th>
                            <th>Skills</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($experiences as $experience)
                            <tr>
                                <td class="company">{{$experience->company}}</td>
                                <td class="subject">{{$experience->subject}}</td>
                                <td class="rating">{{$experience->rating}}</td>
                                <td class="skills">
                                    @foreach($experience->skills as $skill)
                                        <span data-id={{$skill->id}}>{{$skill->name}}</span>
                                    @endforeach
                                </td>
                                <td data-commentary="{{$experience->commentary}}"
                                    data-begin-date="{{$experience->begin_date->format('Y-m-d')}}"
                                    data-end-date="{{$experience->end_date->format('Y-m-d')}}">
                                    <a href="#" class="update-experience" data-id="{{$experience->id}}" title="Edit">
                                        <i class="fa fa-pencil text-olive"></i>
                                    </a>
                                    &nbsp;
                                    <a href="#" class="delete-experience" data-id="{{$experience->id}}" title="Delete">
                                        <i class="fa fa-trash-o text-red"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div><!-- /.row -->

    <div class='row'>
        <div class='col-md-12'>
            <!-- Box -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Add a Working Experience</h3>
                </div>
                <div class="box-body">
                    <form id="form-experience" action="{{ route('admin::forms::manageExperience') }}"
                          method="POST" role="form">
                        {!! csrf_field() !!}
                        <input type="hidden" name="id" id="id" value=""/>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="begin_date">Begin Date</label>
                                    <input type="date" id="begin_date" name="begin_date" class="form-control"
                                           value="{{old('begin_date')}}"/>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="end_date">End Date</label>
                                    <input type="date" id="end_date" name="end_date" class="form-control"
                                           value="{{old('end_date')}}"/>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="company">Company</label>
                                    <input type="text" id="company" name="company" class="form-control"
                                           placeholder="Company" value="{{old('company')}}"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="subject">Subject</label>
                                    <input type="text" id="subject" name="subject" class="form-control"
                                           placeholder="Subject" value="{{old('subject')}}"/>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="rating">Rating</label>
                                    <span class="star-rating">
                                        <input type="radio" name="rating" value="1"><i></i>
                                        <input type="radio" name="rating" value="2"><i></i>
                                        <input type="radio" name="rating" value="3"><i></i>
                                        <input type="radio" name="rating" value="4"><i></i>
                                        <input type="radio" name="rating" value="5"><i></i>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="skills[]">Skills</label>
                                    <select name="skills[]" id="skills[]" class="form-control select2"
                                            multiple="multiple"
                                            data-tags="true" data-placeholder="Select relevant skills"
                                            data-allow-clear="true">
                                        <option value=""></option>
                                        @foreach($skills as $skill)
                                            <option value="{{$skill->id}}">{{$skill->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="commentary">Commentary</label>
                                    <textarea name="commentary" id="commentary" cols="30" rows="10"
                                              class="form-control">{{old('commentary')}}</textarea>
                                </div>
                            </div>
                        </div>


                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div><!-- /.row -->
@endsection
