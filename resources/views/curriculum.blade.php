@extends('layouts.main')

@section('title')
    Curriculum Vitae - @parent
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <!-- .item-box Details -->
            <div class="item-box">
                <div class="item-title">
                    <h3><i class="fa fa-info"></i></h3>

                    <h3><strong>Details</strong></h3>
                </div>
                <div class="item-content">
                    <div class="row">
                        <address>
                            <strong class="lead">{{$me->name}}</strong><br/>

                            <div class="col-md-6">
                                {{$me->addr1}}<br/>
                                @if (isset($me->addr2))
                                    {{$me->addr2}}<br/>
                                @endif
                                @if (isset($me->addr3))
                                    {{$me->addr3}}<br/>
                                @endif
                                <abbr title="Phone Number">N°</abbr>: <a
                                        href="tel:{{$me->phone}}">{{$me->phone}}</a><br/>
                                <abbr title="eMail Address">eMail</abbr>: <a
                                        href="mailto:{{$me->name}}%20<{{$me->email}}>">{{$me->email}}</a><br/>
                                @if (isset($me->email2))
                                    <abbr title="eMail Address">eMail</abbr>: <a
                                            href="mailto:{{$me->name}}%20<{{$me->email2}}>">{{$me->email2}}</a><br/>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <dl>
                                    <dt>French</dt>
                                    <dd>Birth Language.</dd>
                                    <dt>English</dt>
                                    <dd>Good level. (TOEIC: 840)</dd>
                                    <dt>Spanish</dt>
                                    <dd>College level.</dd>
                                </dl>
                            </div>
                        </address>
                    </div>
                </div>
            </div>
            <!-- /.item-box Details -->
        </div>

        <div class="row">
            <!-- .item-box Studies -->
            <div class="item-box">
                <div class="item-title">
                    <h3><i class="fa fa-graduation-cap"></i></h3>

                    <h3><strong>Studies</strong></h3>
                </div>
                <div class="item-content">
                    <dl>
                        @foreach ($studies as $study)
                            <dt>{{$study->year}}</dt>
                            <dd><strong>{{$study->school}}</strong> &mdash; {{$study->title}}</dd>
                        @endforeach
                    </dl>
                </div>
            </div>
            <!-- /.item-box Studies -->
        </div>
        <div class="row">
            <!-- .item-box Experiences -->
            <div class="item-box">
                <div class="item-title">
                    <h3><i class="fa fa-building"></i></h3>

                    <h3><strong>Working Experiences</strong></h3>
                </div>
                <div class="item-content">
                    <table id="work-exp" class="table table-hover table-responsive">
                        <thead>
                        <tr>
                            <th>Dates</th>
                            <th>Company</th>
                            <th>Subject</th>
                        </tr>
                        </thead>
                        @foreach($experiences as $experience)
                            <tbody class="experience-hover" data-content="{!! $experience->commentary !!}"
                                   rel="popover"
                                   data-placement="bottom"
                                   data-original-title="{{$experience->company}}  -  Rating [{{$experience->rating}}/5]"
                                   data-trigger="hover">
                            <tr class="{{$experience->bsClass()}}">
                                <td>
                                    {{$experience->begin_date->format('M j Y')}}
                                </td>
                                <th>{{$experience->company}}</th>
                                <td>{{$experience->subject}}</td>
                            </tr>
                            <tr class="{{$experience->bsClass()}}">
                                <td>{{$experience->end_date->format('M j Y')}}</td>
                                <td colspan="2">
                                    @foreach($experience->skills as $skill)
                                        <a class="tag goto" href="#skill-{{$skill->id}}">{{$skill->name}}</a>
                                    @endforeach
                                </td>
                            </tr>

                            </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
            <!-- /.item-box Experiences -->
        </div>
        <div class="row">
            <!-- .item-box Skills -->
            <div class="item-box">
                <div class="item-title">
                    <h3><i class="fa fa-code"></i></h3>

                    <h3><strong>Skills</strong></h3>
                </div>
                <div class="item-content">
                    <table class="table table-hover table-responsive">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Progress</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($skills as $skill)
                            <tr class="{{$skill->bsClass()}}" id="skill-{{$skill->id}}">
                                <th>{{$skill->name}}</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-{{$skill->bsClass()}}" role="progressbar"
                                             aria-valuenow="{{$skill->progress}}" aria-valuemin="0" aria-valuemax="100"
                                             style="{{'width:'.$skill->progress}}%"></div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.item-box Skills -->
        </div>
    </div>

@endsection