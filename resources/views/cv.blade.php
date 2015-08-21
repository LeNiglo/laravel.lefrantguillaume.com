@extends('layouts.main')

@section('page')
<div id="page" class="container clearfix">
  <div class="row">
    <div class="col-xs-6 col-md-3 text-left pull-left">
      <h3><strong>Contact</strong></h3>
      <p>
        <address>
          <strong>Guillaume Lefrant</strong><br />
          108b Cours Saint Louis E208<br />
          France, Bordeaux, 33300<br />
          <abbr title="Phone Number">N°</abbr>: <a href="tel:+33659698601">+33 659698601</a><br />
          <abbr title="Primary eMail Address">eMail</abbr>: <a href="mailto:LEFRANT%20Guillaume%20<lefrantguillaume@gmail.com>">lefrantguillaume@gmail.com</a><br />
          <abbr title="Secondary eMail Address"> `` </abbr>: <a href="mailto:LEFRANT%20Guillaume%20<guillaume.lefrant@epitech.eu>">guillaume.lefrant@epitech.eu</a><br />
        </address>
      </p>
    </div>
    <div class="col-xs-6 col-md-3 pull-right">
      <h3><strong>Languages</strong></h3>
      <dl>
        <dt>French</dt>
        <dd>Birth Language.</dd>
        <dt>English</dt>
        <dd>Good level. (TOEIC: 840)</dd>
        <dt>Spanish</dt>
        <dd>College level.</dd>
      </dl>
    </div>
    <div class="col-xs-12 col-md-6">
      <h3><strong>Studies</strong></h3>
      <dl>
        <dt>2012</dt>
        <dd>Started Epitech - School Innovation and IT expertise.</dd>
        <dt>2012</dt>
        <dd>Baccalauréat(FR) with honors.</dd>
        <dt>2009</dt>
        <dd>Brevet(FR) with honors.</dd>
      </dl>
    </div>
  </div>
  <div class="container col-xs-12 col-sm-6 col-md-6" style="border-right: 1px solid #eee;">
    <?php $skills = DB::table('skills')->where('type', '=', 0)->orderBy('level', 'desc')->get(); ?>
    <table class="table-hover">
      <thead>
        <tr><td colspan=3><h3><strong>IT Skills<strong></h3></td></tr>
        <tr>
          <td class="col-xs-1"><h4>Techno</h4></td>
          <td class="col-xs-4"><h4>Skill</h4></td>
          <td class="col-xs-1"><h4>Thumbs</h4></td>
        </tr>
      </thead>
      <tbody>
        @foreach($skills as $skill)
        <tr class="<?php if ($skill->level > 71) echo 'success'; elseif ($skill->level > 51) echo 'info'; elseif ($skill->level > 31) echo 'warning'; else echo 'danger'; ?>">
          <th>{{{ $skill->language }}}</th>
          <td>
            <div class="progress">
              <div class="progress-bar progress-bar-<?php if ($skill->level > 71) echo 'success'; elseif ($skill->level > 51) echo 'info'; elseif ($skill->level > 31) echo 'warning'; else echo 'danger'; ?>" role="progressbar" aria-valuenow="{{{ $skill->level }}}" aria-valuemin="0" aria-valuemax="100" style="width: {{{ $skill->level }}}%"></div>
            </div>
          </td>
          <td>
            <a href="#" class="thumbUp" data-id="{{{ $skill->id }}}" data-state="ok" style="display: block;">
              <i class="glyphicon glyphicon-thumbs-up"></i>
              <?php if ($skill->thumbs > 0) echo ' +' . $skill->thumbs; ?>
            </a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <div class="container col-xs-12 col-sm-6 col-md-6">
    <?php $expes = DB::table('experiences')->orderBy('end_date', 'desc')->get(); ?>
    <table class="table-hover">
      <thead>
        <tr><td colspan=3><h3><strong>Working Experiences</strong></h3></td></tr>
        <tr>
          <td class="col-xs-1"><h4>Begin<br />End</h4></td>
          <td class="col-xs-2"><h4>Company</h4></td>
          <td class="col-xs-3"><h4>Subject</h4></td>
        </tr>
      </thead>
      <tbody>
        @foreach($expes as $exp)
        <tr class="experience-hover <?php if ($exp->rating >= 7) echo 'success'; elseif ($exp->rating >= 5) echo 'info'; elseif ($exp->rating >= 3) echo 'warning'; else echo 'danger'; ?>" data-content="{{{ $exp->commentary }}}" rel="popover" data-placement="bottom" data-original-title="{{{ $exp->company }}}  -  Rating [{{{ $exp->rating }}}/10]" data-trigger="hover">
          <td>{{{ date('M j Y', strtotime($exp->begin_date)) }}}<br />{{{ date('M j Y', strtotime($exp->end_date)) }}}</td>
          <td>{{{ $exp->company }}}</td>
          <td>{{{ $exp->subject }}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <div class="container col-xs-12 col-sm-6 col-md-6">
    <?php $oss = DB::table('skills')->where('type', '=', 1)->orderBy('level', 'desc')->get(); ?>
    <table class="table-hover">
      <thead>
        <tr><td colspan=2><h3><strong>OS Knowledge</strong></h3></td></tr>
      </thead>
      <tbody>
        @foreach($oss as $os)
        <tr class="<?php if ($os->level > 71) echo 'success'; elseif ($os->level > 51) echo 'info'; elseif ($os->level > 31) echo 'warning'; else echo 'danger'; ?>">
          <th class="col-xs-2">{{{ $os->language }}}</th>
          <td class="col-xs-4">
            <div class="progress">
              <div class="progress-bar progress-bar-<?php if ($os->level > 71) echo 'success'; elseif ($os->level > 51) echo 'info'; elseif ($os->level > 31) echo 'warning'; else echo 'danger'; ?>" role="progressbar" aria-valuenow="{{{ $os->level }}}" aria-valuemin="0" aria-valuemax="100" style="width: {{{ $os->level }}}%"></div>
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<div id="thumbSuccess" class="alert alert-success alert-dismissable hidden">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  Thank You for updating.
</div>
<div id="thumbError" class="alert alert-danger alert-dismissable hidden">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  Something went wrong.
</div>
@stop
