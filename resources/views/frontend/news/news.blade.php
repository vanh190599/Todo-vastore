@extends('frontend.news.layout_news')
@section('content')

<div class="col-sm-10">
	<h2 class="title text-center" style="margin-top: 2px; color: orangered">
    	Trang tin tức
    </h2>
	<!-- row-->
    <div class="rows">
    	<!-- one new-->
        <div class="col-lg-8 col-md-8 col-sm-12" style="margin-bottom: 10px;">
			<div class="box">
                @if(!empty($big->news_id))
                <a href="{{ url('news-detail/'.$big->news_id) }}">
                    <div class="photo-news">
                        <img src="upload/news/{{ $big->news_image }}" alt="">
                    </div>
                    <div class="tilte-news"><a href="{{ url('news-detail/'.$big->news_id) }}">
                            {{$big->news_title}}
                        </a></div>
                    <p>

                    </p>
                    <p style="padding-top: 20px; font-size: 12px">{{ isset($big->created_at)?$big->created_at:'' }}</p>
                </a>
                @endif
			</div>
        </div>
        <!-- one new-->

		<!-- news latest -->
        <div class="col-lg-4 col-md-4 col-sm-12 " style="padding: 0; margin: 0 ">
        	<div class="box-right">
        		<p class="text-center title-lastest" style="background: #FE980F">TIN MỚI NHẤT</p>
        		<ul>
                    @foreach($news_new as $rows)
        			<li style="display: flex;">
        				<a href="{{ url('news-detail/'.$rows->news_id) }}">
        					<img src="upload/news/{{ $rows->news_image }}" style="width: 90px; height: 70px; " alt="">
							<div class="content-right">
								<a href="{{ url('news-detail/'.$rows->news_id) }}">
                                   {{ $rows->news_title }}
                                </a>
								<p style="padding-top: 20px; font-size: 10px">
                                    {{ isset($rows->created_at)?$rows->created_at:'' }}
                                </p>
							</div>
        				</a>
        			</li>
        			<div style="border: 1px dashed #dddddd"></div>
                    @endforeach
        		</ul>
        		<p class="text-right" style="padding: 0; margin: 0px; padding-bottom: 8px; margin-right: 15px"><a href="{{ url('tin-moi') }}">Xem thêm</a></p>
        	</div>
        </div>
        <!-- end news latest -->
        <div class="clearfix"></div>
    </div>
    <!-- end rows -->

	<hr>

	<!-- row -->
	<div class="row">
		<!-- tin hot -->
		<div class="col-lg-6 col-md-12 col-sm-12" >
			<p class="title-hot-news" style="background: #333333" >TIN HOT</p>

            @foreach($news_hot as $rows)
			<div class="border"></div>
			<div class="hot-new-content" >
				<a href="{{ url('news-detail/'.$rows->news_id) }}" style="display: flex;" class="box-content-hot">
					<img src="upload/news/{{ $rows->news_image }}" class="img-thumbnail" alt="">

					<div class="title-news-hot" style="background: none; margin-left: 5px"><b>
                            {{$rows->news_title}}
					</b>

					<p style="color: gray; font-size: 13px; ">{{ isset($rows->created_at)?$rows->created_at:'' }}</p>
					<p>
                        {!! $rows->news_desc !!}
                    </p>
				</div>
				</a>
			</div>
            @endforeach
		</div>
		<!-- end tin hot -->

		<!-- tin ngau nhien -->
		<div class="col-lg-6 col-md-12 col-sm-12">
			<p class="title-rand-news" style="background: #333333" >BÀI VIẾT NGẤU NHIÊN</p>

            @foreach($news_rand as $rows)
                <div class="border"></div>
                <div class="hot-new-content" >
                    <a href="{{ url('news-detail/'.$rows->news_id) }}" style="display: flex;" class="box-content-hot">
                        <img src="upload/news/{{ $rows->news_image }}" class="img-thumbnail" alt="">

                        <div class="title-news-hot" style="background: none; margin-left: 5px"><b>
                                {{ $rows->news_title }}
                            </b>

                            <p style="color: gray; font-size: 13px; ">{{ isset($rows->created_at)?$rows->created_at:'' }}</p>
                            <p>
                            </p>
                            {!! $rows->news_desc !!}
                        </div>
                    </a>
                </div>
            @endforeach

		</div>
		<!-- tin ngau nhien -->
	</div>
	<!-- end row -->
    <br>
    <div class="row">
        <div class="col-sm-12 text-center">
            {{ $news_hot->render() }}
        </div>
    </div>

</div>
    @endsection
