@extends('layout.app')

@section('contents')
<div class="container py-5">
    <div class="text-center mb-5">
        <h1 class="display-4 text-primary">Welcome to Our Website</h1>
        <p class="lead text-secondary">Explore our features, enjoy fast services, and connect with a helpful community.</p>
        <a href="{{ url('/About') }}" class="btn btn-primary btn-lg mt-3">Get Started</a>
    </div>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">🚀 Fast Performance</h5>
                    <p class="card-text">Experience blazing speed and seamless navigation across our platform.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">🔒 Secure Access</h5>
                    <p class="card-text">Your data is protected with top-tier security and privacy features.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">✨ Easy to Use</h5>
                    <p class="card-text">Enjoy a simple, clean, and user-friendly experience with every click.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
