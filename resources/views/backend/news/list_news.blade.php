@extends('backend.layout.admin_layout')
@section('main')
    <div class="table-agile-info">
        <div class="panel panel-default">
            <a href="javascript:void(0)">
            <div class="panel-heading">
                Liệt kê danh sách tin tức
            </div>
            </a>

            <div class="w3-res-tb" ><a href="{{url('admin/add-news')}}" class="btn btn-primary ">Thêm tin tức</a></div>
            <div class="text-danger text-center @if(isset($message)) w3-res-tb  @endif ">
{{--                Danh sách tin tức--}}
            </div>
            <div class="row w3-res-tb" style="margin-top: -35px;">
                <p class="text-left" style="margin-top: 10px; margin-bottom: 3px; color:red;">&nbsp;&nbsp;&nbsp;
                    @if(session('message')!=null) {{session('message')}} @else @endif
                </p>
                <div class="col-sm-5 m-b-xs">
                    <form action="{{url("admin/fil-product")}}" method="get">
                        <select class="input-sm form-control w-sm inline v-middle" name="news_category_id">
                            @foreach($all_news_category as $rows)
                                check de kiem tra selected
                                <option value="{{$rows->news_category_id}}" @if(isset($check) && $check == $rows->news_category_id ) selected @endif >{{$rows->news_category_name}}</option>
                            @endforeach
                        </select>
                        <button class="btn btn-sm btn-default">Lọc theo danh mục</button>
                    </form>
                </div>
                <div class="col-sm-4">
                </div>
                <div class="col-sm-3">
                    <form action="{{url('admin/search-product')}}" method="get">
                        <div class="input-group">
                            <input type="text" name="key" class="input-sm form-control" >
                            <span class="input-group-btn">
                     <button class="btn btn-sm btn-default" type="submit">Tìm kiếm</button>
                    </form>
                    </span>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped b-t b-light">
                <thead>
                <tr>
                    <th  style="color: black; text-align: center" width="3%" >STT</th>
                    <th  style="color: black; text-align: center" >Image</th>
                    <th  style="color: black; text-align: center" >Title</th>
                    <th style="color: black; text-align: center; width: 100px"  >Category</th>
                    <th style="color: black; text-align: center" >Hot</th>
                    <th style="color: black; text-align: center" >Display</th>
                    <th style="color: black; text-align: center" >Action</th>
                </tr>
                </thead>

                <tbody>
                @foreach($news as $key => $rows)
                    <tr>
                        <td style="color: black;">{{ $key + $news->firstItem() }}</td>
                        <td style="color: black;">
                            <img class="" style="width: 80px; height: 65px; border: 1px solid #dddddd;" src="upload/news/{{$rows->news_image}}" alt="">
                        </td>
                        <td style="color: black;" >
                            {{ $rows->news_title }}
                        </td>
                        <td style="color: black;" class="text-center">
                            <?php
                                $news_category_name = DB::table('tbl_news_category')
                                    ->where('news_category_id', $rows->news_category_id)
                                    ->value('news_category_name');
                                echo $news_category_name;
                            ?>
                        </td>

                        <td class="text-center">
                            <span class="text-ellipsis" style="color: red">
                                @if($rows->news_hot == 1) HOT @endif
                            </span>
                        </td>

                        <td class="text-center">
                            <span class="text-ellipsis" style="@if($rows->news_status==1) color:black; @endif ">
                                @if($rows->news_status == 1) Hiện @else Ẩn @endif
                            </span>
                        </td>

                        <td class="text-center">
                             <a href="{{url('admin/edit-news/'.$rows->news_id )}}" class="active" ui-toggle-class="">
                                <i class="fa fa-pencil-square-o text-success text-active" alt="Sửa">Sửa</i>
                            </a>
                            &nbsp;
                            <a href="{{url('admin/delete-news/'.$rows->news_id )}}" >
                                <i class="fa fa-times text-danger text" onclick="return window.confirm('Are you sure?');" id="delete">Xóa</i>
                            </a>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
        <div style="padding: 10px;" class="text-center">
            {{$news->render()}}
        </div>

        <footer class="panel-footer">
            <div class="row">
            </div>
        </footer>
    </div>
    </div>
@endsection
