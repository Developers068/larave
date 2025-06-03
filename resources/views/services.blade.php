@extends('layout.app')

@section('title', 'Services')

@section('contents')
    <div class="text-center mb-4">
        <h1 class="display-5 fw-bold">Our Hotel Services</h1>
        <p class="lead text-muted">Enjoy luxury, comfort, and elegance during your stay with us.</p>
    </div>

    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow">
                <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Room Service">
                <div class="card-body">
                    <h5 class="card-title">24/7 Room Service</h5>
                    <p class="card-text">Order food, drinks, and essentials anytime from the comfort of your room.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow">
                <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Spa & Wellness">
                <div class="card-body">
                    <h5 class="card-title">Spa & Wellness</h5>
                    <p class="card-text">Relax with our full-service spa, massage therapy, and wellness programs.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow">
                <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Free Wi-Fi">
                <div class="card-body">
                    <h5 class="card-title">Free High-Speed Wi-Fi</h5>
                    <p class="card-text">Stay connected with fast and reliable internet throughout the hotel.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
