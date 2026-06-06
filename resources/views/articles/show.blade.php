@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <!-- Article Header -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">{{ $article->category->name }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $article->title }}</li>
                </ol>
            </nav>

            <h1 class="mb-3 font-weight-bold">{{ $article->title }}</h1>
            
            <div class="d-flex align-items-center mb-4 text-muted">
                <span class="mr-3"><i class="fas fa-user mr-1"></i> {{ $article->user->name }}</span>
                <span class="mr-3"><i class="fas fa-calendar-alt mr-1"></i> {{ $article->created_at->format('d M Y') }}</span>
                <span><i class="fas fa-folder mr-1"></i> {{ $article->category->name }}</span>
            </div>

            <!-- Article Image -->
            @if($article->image)
                <div class="mb-4">
                    <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}" class="img-fluid rounded shadow-sm w-100" style="max-height: 500px; object-fit: cover;">
                </div>
            @endif

            <!-- Article Content -->
            <div class="article-content mb-5" style="line-height: 1.8; font-size: 1.1rem;">
                {!! nl2br(e($article->content)) !!}
            </div>

            <!-- Article Tags -->
            @if($article->tags->count() > 0)
                <div class="mb-5">
                    <h5 class="font-weight-bold mb-3">Tags:</h5>
                    @foreach($article->tags as $tag)
                        <a href="#" class="btn btn-sm btn-outline-secondary rounded-pill px-3 mr-2 mb-2">#{{ $tag->name }}</a>
                    @endforeach
                </div>
            @endif

            <hr class="my-5">

            <!-- Author Profile Box -->
            <div class="card border-0 shadow-sm bg-light mb-5">
                <div class="card-body p-4">
                    <div class="row align-items-center">
                        <div class="col-md-2 text-center mb-3 mb-md-0">
                            <img src="{{ asset('sbadmin2/img/undraw_profile.svg') }}" alt="{{ $article->user->name }}" class="rounded-circle img-fluid shadow-sm" style="max-width: 80px;">
                        </div>
                        <div class="col-md-10">
                            <h5 class="font-weight-bold mb-1">Tentang Penulis: {{ $article->user->name }}</h5>
                            @if($article->user->profile)
                                <p class="text-muted mb-2"><i class="fas fa-phone mr-1"></i> {{ $article->user->profile->phone ?? 'Tidak ada nomor telepon' }}</p>
                                <p class="card-text">{{ $article->user->profile->bio ?? 'Penulis belum menulis biografi.' }}</p>
                            @else
                                <p class="card-text text-muted">Informasi profil tidak tersedia.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
@endpush
