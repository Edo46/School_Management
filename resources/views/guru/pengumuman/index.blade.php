@extends('guru/templates/index')
@section('js')
<script src='{{asset('assets/js/controller/guru-pengumuman.js')}}'></script>
@stop
@section('content')
<!-- end: SPANEL CONFIGURATION MODAL FORM -->
<!-- start: PAGE HEADER -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Foo Tables</h4> </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button>
                <a href="javascript: void(0);" target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Buy Admin Now</a>
                <ol class="breadcrumb">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Tables</a></li>
                    <li class="active">Foo Tables</li>
                </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    <h3 class="box-title">Contact listing</h3>
                    <div class="scrollable">
                        <div class="panel-body">
                            <a class="btn btn-green add-row" href="{{route('pengumuman.create')}}">
                                Add New <i class="fa fa-plus"></i>
                            </a>
                            <div class="pull-right col-sm-5">
                                <input class="form-control col-md-12" ng-model="query"  placeholder="Search">
                            </div>
                            <table id="sample-table-1" class="table table-hover">
                                <thead>
                                <tr>
                                    <th>Judul Pengumuman</th>
                                    <th>Tanggal</th>
                                    <th>Penulis</th>
                                    <th class="hidden-xs center">Aksi Data</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr ng-repeat="status in data| filter:paginate" ng-if="data.length > 0">
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="center">
                                        <div class="visible-md visible-lg hidden-sm hidden-xs">
                                            <a data-original-title="Edit" data-placement="top" class="btn btn-xs btn-teal tooltips" href="{{url('guru/pengumuman')}}/<% status['id_pengumuman']%>/edit"><i class="fa fa-edit"></i></a>
                                            <a data-original-title="Remove" data-placement="top" class="btn btn-xs btn-bricky tooltips" href="#" ng-click="delete(status['id_pengumuman'])"><i class="fa fa-times fa fa-white"></i></a>
                                        </div>
                                        <div class="visible-xs visible-sm hidden-md hidden-lg">
                                            <div class="btn-group">
                                                <a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm">
                                                    <i class="fa fa-cog"></i> <span class="caret"></span>
                                                </a>
                                                <ul class="dropdown-menu pull-right" role="menu">
                                                    <li role="presentation">
                                                        <a href="{{url('guru/pengumuman')}}/<% status['id_data']%>/edit" tabindex="-1" role="menuitem">
                                                            <i class="fa fa-edit"></i> Edit
                                                        </a>
                                                    </li>
                                                    <li role="presentation">
                                                        <a href="#" tabindex="-1" role="menuitem" ng-click="delete(status['id_pengumuman'])">
                                                            <i class="fa fa-times"></i> Remove
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr ng-if="data.length == 0">
                                    <td colspan="4" class="center">Belum Ada Data</td>
                                </tr>
                                </tbody>
                            </table>
                            <pagination total-items="totalItems" ng-model="currentPage"
                                        max-size="10" boundary-links="true"
                                        items-per-page="numPerPage" class="pagination-sm">
                            </pagination>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- /.row -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- /.container-fluid -->
    <footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by themedesigner.in </footer>
</div>
    @stop