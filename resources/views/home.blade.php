@extends('layouts.app')

@section('content')
<div class="video-container">
    <video autoplay muted loop playsinline class="hero-video">
        <source src="{{ asset('image/Vinfast/Tuyệt tác công nghệ dẫn đầu VF 9.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="video-overlay">
        <h1>TUYỆT TÁC CÔNG NGHỆ DẪN ĐẦU</h1>
        <p>Khám phá thế giới VinFast</p>
    </div>
</div>
@endsection
