@extends('layouts.main.master')
@section('title')
Liên hệ với chúng tôi
@endsection
@section('description')
Liên hệ với chúng tôi
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<div class="breadcrumb-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="breadcrumb-content">
					<ul class="nav">
						<li><a href="{{route('home')}}">Home</a></li>
						<li>Liên hệ</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="contact-area mtb-60px">
	<div class="container">
		<div class="contact-map mb-10">
			<div class="mapouter">
				<div class="gmap_canvas">
					{!!$setting->iframe_map!!}
				</div>
			</div>
		</div>
		<div class="custom-row-2">
			<div class="col-lg-4 col-md-5 mb-lm-30px">
				<div class="contact-info-wrap">
					<div class="single-contact-info">
						<div class="contact-icon">
							<i class="ion-android-call"></i>
						</div>
						<div class="contact-info-dec">
							<p><a href="tel:{{$setting->phone1}}">{{$setting->phone1}}</a></p>
						</div>
					</div>
					<div class="single-contact-info">
						<div class="contact-icon">
							<i class="ion-android-globe"></i>
						</div>
						<div class="contact-info-dec">
							<p><a href="mailto:{{$setting->email}}">{{$setting->email}}</a></p>
						</div>
					</div>
					<div class="single-contact-info">
						<div class="contact-icon">
							<i class="ion-android-pin"></i>
						</div>
						<div class="contact-info-dec">
							<p>{{$setting->address1}}</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-8 col-md-7">
				<div class="contact-form">
					<div class="contact-title mb-30">
						<h2>Gửi tin nhắn</h2>
					</div>
					<form class="contact-form-style" action="{{route('postcontact')}}" method="post">
						@csrf
						<div class="row">
							<div class="col-lg-6">
								<input name="name" placeholder="Họ và tên" type="text" required>
							</div>
							<div class="col-lg-6">
								<input name="email" placeholder="Email" type="email">
							</div>
							<div class="col-lg-12">
								<input name="phone" placeholder="Subject*" type="text" required>
							</div>
							<div class="col-lg-12">
								<textarea name="mess" placeholder="Lời nhắn"></textarea>
								<button type="submit">Gửi</button>
							</div>
						</div>
					</form>
					<p class="form-messege"></p>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection