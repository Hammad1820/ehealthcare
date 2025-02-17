@extends('master-admin')
@section('title', 'E Health Care - Dashboard')
@section('admin-css')
    <link href="{{ asset('css/plugins/footable/footable.core.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div id="wrapper">
        @include('admin/nav')
        <div id="page-wrapper" class="gray-bg">
            @include('admin.shared.breadcrumbs', ['title' => 'Doctors', 'page'=> 'Doctors'])
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row m-b-lg m-t-lg">
                    <div class="col-md-6">

                        <div class="profile-image">
                            <img src="img/a4.jpg" class="rounded-circle circle-border m-b-md" alt="profile">
                        </div>
                        <div class="profile-info">
                            <div class="">
                                <div>
                                    <h2 class="no-margins">
                                        Alex Smith
                                    </h2>
                                    <h4>Founder of Groupeq</h4>
                                    <small>
                                        There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration in some form Ipsum available.
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <table class="table small m-b-xs">
                            <tbody>
                            <tr>
                                <td>
                                    <strong>142</strong> Projects
                                </td>
                                <td>
                                    <strong>22</strong> Followers
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <strong>61</strong> Comments
                                </td>
                                <td>
                                    <strong>54</strong> Articles
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>154</strong> Tags
                                </td>
                                <td>
                                    <strong>32</strong> Friends
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-3">
                        <small>Sales in last 24h</small>
                        <h2 class="no-margins">206 480</h2>
                        <div id="sparkline1"></div>
                    </div>


                </div>
                <div class="row">

                    <div class="col-lg-3">

                        <div class="ibox">
                            <div class="ibox-content">
                                <h3>About Alex Smith</h3>

                                <p class="small">
                                    There are many variations of passages of Lorem Ipsum available, but the majority
                                    have
                                    suffered alteration in some form, by injected humour, or randomised words which
                                    don't.
                                    <br/>
                                    <br/>
                                    If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                                    anything embarrassing
                                </p>

                                <p class="small font-bold">
                                    <span><i class="fa fa-circle text-navy"></i> Online status</span>
                                </p>

                            </div>
                        </div>

                        <div class="ibox">
                            <div class="ibox-content">
                                <h3>Followers and friends</h3>
                                <p class="small">
                                    If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                                    anything embarrassing
                                </p>
                                <div class="user-friends">
                                    <a href=""><img alt="image" class="rounded-circle" src="img/a3.jpg"></a>
                                    <a href=""><img alt="image" class="rounded-circle" src="img/a1.jpg"></a>
                                    <a href=""><img alt="image" class="rounded-circle" src="img/a2.jpg"></a>
                                    <a href=""><img alt="image" class="rounded-circle" src="img/a4.jpg"></a>
                                    <a href=""><img alt="image" class="rounded-circle" src="img/a5.jpg"></a>
                                    <a href=""><img alt="image" class="rounded-circle" src="img/a6.jpg"></a>
                                    <a href=""><img alt="image" class="rounded-circle" src="img/a7.jpg"></a>
                                    <a href=""><img alt="image" class="rounded-circle" src="img/a8.jpg"></a>
                                    <a href=""><img alt="image" class="rounded-circle" src="img/a2.jpg"></a>
                                    <a href=""><img alt="image" class="rounded-circle" src="img/a1.jpg"></a>
                                </div>
                            </div>
                        </div>

                        <div class="ibox">
                            <div class="ibox-content">
                                <h3>Personal friends</h3>
                                <ul class="list-unstyled file-list">
                                    <li><a href=""><i class="fa fa-file"></i> Project_document.docx</a></li>
                                    <li><a href=""><i class="fa fa-file-picture-o"></i> Logo_zender_company.jpg</a></li>
                                    <li><a href=""><i class="fa fa-stack-exchange"></i> Email_from_Alex.mln</a></li>
                                    <li><a href=""><i class="fa fa-file"></i> Contract_20_11_2014.docx</a></li>
                                    <li><a href=""><i class="fa fa-file-powerpoint-o"></i> Presentation.pptx</a></li>
                                    <li><a href=""><i class="fa fa-file"></i> 10_08_2015.docx</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="ibox">
                            <div class="ibox-content">
                                <h3>Private message</h3>

                                <p class="small">
                                    Send private message to Alex Smith
                                </p>

                                <div class="form-group">
                                    <label>Subject</label>
                                    <input type="email" class="form-control" placeholder="Message subject">
                                </div>
                                <div class="form-group">
                                    <label>Message</label>
                                    <textarea class="form-control" placeholder="Your message" rows="3"></textarea>
                                </div>
                                <button class="btn btn-primary btn-block">Send</button>

                            </div>
                        </div>

                    </div>

                    <div class="col-lg-9">

                        <div class="social-feed-box">

                            <div class="float-right social-action dropdown">
                                <button data-toggle="dropdown" class="dropdown-toggle btn-white">
                                </button>
                                <ul class="dropdown-menu m-t-xs">
                                    <li><a href="#">Config</a></li>
                                </ul>
                            </div>
                            <div class="social-avatar">
                                <a href="" class="float-left">
                                    <img alt="image" src="img/a1.jpg">
                                </a>
                                <div class="media-body">
                                    <a href="#">
                                        Andrew Williams
                                    </a>
                                    <small class="text-muted">Today 4:21 pm - 12.06.2014</small>
                                </div>
                            </div>
                            <div class="social-body">
                                <p>
                                    Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                                    default model text, and a search for 'lorem ipsum' will uncover many web sites still
                                    in their infancy. Packages and web page editors now use Lorem Ipsum as their
                                    default model text.
                                </p>

                                <div class="btn-group">
                                    <button class="btn btn-white btn-xs"><i class="fa fa-thumbs-up"></i> Like this!
                                    </button>
                                    <button class="btn btn-white btn-xs"><i class="fa fa-comments"></i> Comment</button>
                                    <button class="btn btn-white btn-xs"><i class="fa fa-share"></i> Share</button>
                                </div>
                            </div>
                            <div class="social-footer">
                                <div class="social-comment">
                                    <a href="" class="float-left">
                                        <img alt="image" src="img/a1.jpg">
                                    </a>
                                    <div class="media-body">
                                        <a href="#">
                                            Andrew Williams
                                        </a>
                                        Internet tend to repeat predefined chunks as necessary, making this the first
                                        true generator on the Internet. It uses a dictionary of over 200 Latin words.
                                        <br/>
                                        <a href="#" class="small"><i class="fa fa-thumbs-up"></i> 26 Like this!</a> -
                                        <small class="text-muted">12.06.2014</small>
                                    </div>
                                </div>

                                <div class="social-comment">
                                    <a href="" class="float-left">
                                        <img alt="image" src="img/a2.jpg">
                                    </a>
                                    <div class="media-body">
                                        <a href="#">
                                            Andrew Williams
                                        </a>
                                        Making this the first true generator on the Internet. It uses a dictionary of.
                                        <br/>
                                        <a href="#" class="small"><i class="fa fa-thumbs-up"></i> 11 Like this!</a> -
                                        <small class="text-muted">10.07.2014</small>
                                    </div>
                                </div>

                                <div class="social-comment">
                                    <a href="" class="float-left">
                                        <img alt="image" src="img/a3.jpg">
                                    </a>
                                    <div class="media-body">
                                        <textarea class="form-control" placeholder="Write comment..."></textarea>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="social-feed-box">

                            <div class="float-right social-action dropdown">
                                <button data-toggle="dropdown" class="dropdown-toggle btn-white">
                                </button>
                                <ul class="dropdown-menu m-t-xs">
                                    <li><a href="#">Config</a></li>
                                </ul>
                            </div>
                            <div class="social-avatar">
                                <a href="" class="float-left">
                                    <img alt="image" src="img/a6.jpg">
                                </a>
                                <div class="media-body">
                                    <a href="#">
                                        Andrew Williams
                                    </a>
                                    <small class="text-muted">Today 4:21 pm - 12.06.2014</small>
                                </div>
                            </div>
                            <div class="social-body">
                                <p>
                                    Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                                    default model text, and a search for 'lorem ipsum' will uncover many web sites still
                                    in their infancy. Packages and web page editors now use Lorem Ipsum as their
                                    default model text.
                                </p>
                                <p>
                                    Lorem Ipsum as their
                                    default model text, and a search for 'lorem ipsum' will uncover many web sites still
                                    in their infancy. Packages and web page editors now use Lorem Ipsum as their
                                    default model text.
                                </p>
                                <img src="img/gallery/3.jpg" class="img-fluid">
                                <div class="btn-group">
                                    <button class="btn btn-white btn-xs"><i class="fa fa-thumbs-up"></i> Like this!
                                    </button>
                                    <button class="btn btn-white btn-xs"><i class="fa fa-comments"></i> Comment</button>
                                    <button class="btn btn-white btn-xs"><i class="fa fa-share"></i> Share</button>
                                </div>
                            </div>
                            <div class="social-footer">
                                <div class="social-comment">
                                    <a href="" class="float-left">
                                        <img alt="image" src="img/a1.jpg">
                                    </a>
                                    <div class="media-body">
                                        <a href="#">
                                            Andrew Williams
                                        </a>
                                        Internet tend to repeat predefined chunks as necessary, making this the first
                                        true generator on the Internet. It uses a dictionary of over 200 Latin words.
                                        <br/>
                                        <a href="#" class="small"><i class="fa fa-thumbs-up"></i> 26 Like this!</a> -
                                        <small class="text-muted">12.06.2014</small>
                                    </div>
                                </div>

                                <div class="social-comment">
                                    <a href="" class="float-left">
                                        <img alt="image" src="img/a2.jpg">
                                    </a>
                                    <div class="media-body">
                                        <a href="#">
                                            Andrew Williams
                                        </a>
                                        Making this the first true generator on the Internet. It uses a dictionary of.
                                        <br/>
                                        <a href="#" class="small"><i class="fa fa-thumbs-up"></i> 11 Like this!</a> -
                                        <small class="text-muted">10.07.2014</small>
                                    </div>
                                </div>

                                <div class="social-comment">
                                    <a href="" class="float-left">
                                        <img alt="image" src="img/a8.jpg">
                                    </a>
                                    <div class="media-body">
                                        <a href="#">
                                            Andrew Williams
                                        </a>
                                        Making this the first true generator on the Internet. It uses a dictionary of.
                                        <br/>
                                        <a href="#" class="small"><i class="fa fa-thumbs-up"></i> 11 Like this!</a> -
                                        <small class="text-muted">10.07.2014</small>
                                    </div>
                                </div>

                                <div class="social-comment">
                                    <a href="" class="float-left">
                                        <img alt="image" src="img/a3.jpg">
                                    </a>
                                    <div class="media-body">
                                        <textarea class="form-control" placeholder="Write comment..."></textarea>
                                    </div>
                                </div>

                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('admin-js')
    <script>
        $(document).ready(function () {
            $("#sparkline1").sparkline([34, 43, 43, 35, 44, 32, 44, 48], {
                type: 'line',
                width: '100%',
                height: '50',
                lineColor: '#1ab394',
                fillColor: "transparent"
            });
        });
    </script>
@endsection
