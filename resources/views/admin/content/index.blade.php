@extends('admin.layouts.app')

@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Contents
                    <small>Some examples to get you started</small>
                </h3>
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
                        <h2>Default Example
                            <small>Contents</small>
                        </h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <p class="text-muted font-13 m-b-30">
                            {{--DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code>--}}
                        </p>
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Logo</th>
                                <th>Image About</th>
                                <th>Image Center</th>
                                <th>Image Right</th>
                                <th>Hot Line</th>
                                <th>Thao tác</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{ $content->id }}</td>
                                <td><img src="{{ asset('upload/contents/'.$content->logo) }}" width="100px" alt=""></td>
                                <td><img src="{{ asset('upload/contents/'.$content->img_about) }}" width="100px" alt="">
                                </td>
                                <td><img src="{{ asset('upload/contents/'.$content->img_center) }}" width="100px" alt="">
                                </td>
                                <td><img src="{{ asset('upload/contents/'.$content->img_right) }}" width="100px" alt="">
                                </td>
                                <td>{{ $content->hot_line }}</td>
                                <td><a href="{{ route('content.edit',$content->id) }}"><i
                                                class="fa fa-edit fa-2x"></i></a></td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection