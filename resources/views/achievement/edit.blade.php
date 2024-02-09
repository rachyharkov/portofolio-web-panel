@extends('layouts.app')

@section('title', __('Edit achievement'))

@section('page-heading')
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-8 order-md-1 order-last">
                <h3>{{ __('achievement') }}</h3>
                <p class="text-subtitle text-muted">
                    {{ __('Edit an achievement.') }}
                </p>
            </div>

            <x-breadcrumb>
                <li class="breadcrumb-item">
                    <a href="/">{{ __('Dashboard') }}</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('achievements.index') }}">{{ __('achievement') }}</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    {{ __('Edit') }}
                </li>
            </x-breadcrumb>
        </div>
@endsection

@section('content')
        <section class="section">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('achievements.update', $achievement->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                @include('achievement.include.form')

                                <a href="{{ route('achievements.index') }}" class="btn btn-secondary">{{ __('Back') }}</a>

                                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
