@extends('admin.layouts.app')

@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Thêm mới Banner</h3>
            </div>
            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Form Design <small>different form elements</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            {{--<li class="dropdown">--}}
                                {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>--}}
                                {{--<ul class="dropdown-menu" role="menu">--}}
                                    {{--<li><a href="#">Settings 1</a>--}}
                                    {{--</li>--}}
                                    {{--<li><a href="#">Settings 2</a>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li><a class="close-link"><i class="fa fa-close"></i></a>--}}
                            {{--</li>--}}
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form action="{{ route('banner.store') }}" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('POST') }}
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tiêu đề <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="title" id="first-name"  class="form-control col-md-7 col-xs-12 @if ($errors->has('title')) parsley-error @endif">
                                    @if ($errors->has('title'))
                                        <ul class="parsley-errors-list filled" id=""><li class="parsley-required">{{ $errors->first('title') }}</li></ul>
                                    @endif

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Ảnh <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="file" name="img">
                                    @if ($errors->has('img'))
                                        <ul class="parsley-errors-list filled" id=""><li class="parsley-required">{{ $errors->first('img') }}</li></ul>
                                    @endif
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    {{--<button class="btn btn-primary" type="button">Cancel</button>--}}
                                    {{--<button class="btn btn-primary" type="reset">Reset</button>--}}
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection