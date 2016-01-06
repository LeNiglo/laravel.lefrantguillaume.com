@extends('layouts.main')

@section('title')
    Contact - @parent
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="item-box">
                <div class="item-content">
                    <form id="sendmail" role="form">
                        <legend style="padding-left: 15px;">Thank you for your interest. Please, fill the form.</legend>

                        {!! csrf_field() !!}

                        <div class="col-sm-12 col-md-8">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="from" class="control-label">From</label>
                                        <input type="text" name="from" id="from" class="form-control"
                                               required="required"
                                               placeholder="You" value="{{old('from')}}"/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email" class="control-label">Email</label>
                                        <input type="email" name="email" id="email" class="form-control"
                                               required="required"
                                               placeholder="you@gmail.com" value="{{old('email')}}"/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="subject" class="control-label">Subject</label>
                                <input type="text" name="subject" id="subject" class="form-control" required="required"
                                       placeholder="Job Proposal" value="{{old('subject')}}"/>
                            </div>
                            <div class="form-group">
                                <label for="body" class="control-label">Body</label>
                            <textarea name="body" id="body" class="form-control" rows="6" required="required"
                                      placeholder="Hello Guillaume...">{{old('body')}}</textarea>
                            </div>

                            <p class="text-center">
                                <button type="submit" class="btn btn-lg btn-primary">Send</button>
                            </p>

                        </div>
                        <div class="hidden-xs hidden-sm col-md-4">
                            <div class="spacer"></div>
                            <div class="row text-center">
                                <div class='fln-hireme' data-username='LeNiglo' data-style='plain_footer'
                                     data-type='badge'
                                     data-bg='#eee' data-theme=''></div>
                                <script type='text/javascript'>
                                    (function (d) {
                                        var po = d.createElement('script');
                                        po.type = 'text/javascript';
                                        po.async = true;
                                        po.src = '//static.flnwdgt.com/build/js/hireme-sdk.js';
                                        var s = d.getElementsByTagName('script')[0];
                                        s.parentNode.insertBefore(po, s);
                                    })(document);
                                </script>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

