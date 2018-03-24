@extends('admin.layouts.app')

@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Sửa Content</h3>
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
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form action="{{ route('content.update',$content->id) }}" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="form-group">
                                <label class="control-label col-md-1 col-sm-1 col-xs-12" for="first-name">About us <span class="required">*</span>
                                </label>
                                <div class="col-md-11 col-sm-11 col-xs-12">
                                    <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor-one">
                                        <div class="btn-group">
                                            <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="fa fa-font"></i><b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                            </ul>
                                        </div>

                                        <div class="btn-group">
                                            <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a data-edit="fontSize 5">
                                                        <p style="font-size:17px">Huge</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a data-edit="fontSize 3">
                                                        <p style="font-size:14px">Normal</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a data-edit="fontSize 1">
                                                        <p style="font-size:11px">Small</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="btn-group">
                                            <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
                                            <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
                                            <a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="fa fa-strikethrough"></i></a>
                                            <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
                                        </div>

                                        <div class="btn-group">
                                            <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a>
                                            <a class="btn" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a>
                                            <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="fa fa-dedent"></i></a>
                                            <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a>
                                        </div>

                                        <div class="btn-group">
                                            <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
                                            <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>
                                            <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
                                            <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a>
                                        </div>

                                        <div class="btn-group">
                                            <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="fa fa-link"></i></a>
                                            <div class="dropdown-menu input-append">
                                                <input class="span2" placeholder="URL" type="text" data-edit="createLink" />
                                                <button class="btn" type="button">Add</button>
                                            </div>
                                            <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="fa fa-cut"></i></a>
                                        </div>

                                        <div class="btn-group">
                                            <a class="btn" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="fa fa-picture-o"></i></a>
                                            <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
                                        </div>

                                        <div class="btn-group">
                                            <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
                                            <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
                                        </div>
                                    </div>
                                    <div id="editor-one" class="editor-wrapper">{{$content->about_us}}</div>
                                    <textarea name="about_us" id="descr" style="display:none;">{{$content->about_us}}</textarea>
                                    @if ($errors->has('about_us'))
                                        <ul class="parsley-errors-list filled" id=""><li class="parsley-required">{{ $errors->first('about_us') }}</li></ul>
                                    @endif

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-1 col-sm-1 col-xs-12" for="first-name">Hot Line <span class="required">*</span>
                                </label>
                                <div class="col-md-11 col-sm-11 col-xs-12">
                                    <input value="{{$content->hot_line}}" type="text" name="hot_line" id="first-name"  class="form-control col-md-7 col-xs-12 @if ($errors->has('hot_line')) parsley-error @endif">
                                    @if ($errors->has('hot_line'))
                                        <ul class="parsley-errors-list filled" id=""><li class="parsley-required">{{ $errors->first('hot_line') }}</li></ul>
                                    @endif

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-1 col-sm-1 col-xs-12" for="last-name">Logo <span class="required">*</span>
                                </label>
                                <div class="col-md-11 col-sm-11 col-xs-12">
                                    <input type="file" name="logo">
                                    <input type="hidden" name="hidden_logo" value="{{$content->logo}}">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <img src="{{ asset('upload/contents/'.$content->logo) }}" width="200px" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-1 col-sm-1 col-xs-12" for="last-name">Img Abt <span class="required">*</span>
                                </label>
                                <div class="col-md-11 col-sm-11 col-xs-12">
                                    <input type="file" name="img_about">
                                    <input type="hidden" name="hidden_about" value="{{$content->img_about}}">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <img src="{{ asset('upload/contents/'.$content->img_about) }}" width="200px" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-1 col-sm-1 col-xs-12" for="last-name">Img center <span class="required">*</span>
                                </label>
                                <div class="col-md-11 col-sm-11 col-xs-12">
                                    <input type="file" name="img_center">
                                    <input type="hidden" name="hidden_center" value="{{$content->img_center}}">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <img src="{{ asset('upload/contents/'.$content->img_center) }}" width="200px" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-1 col-sm-1 col-xs-12" for="last-name">Img right <span class="required">*</span>
                                </label>
                                <div class="col-md-11 col-sm-11 col-xs-12">
                                    <input type="file" name="img_right">
                                    <input type="hidden" name="hidden_right" value="{{$content->img_right}}">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <img src="{{ asset('upload/contents/'.$content->img_right) }}" width="200px" alt="">
                                    </div>
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