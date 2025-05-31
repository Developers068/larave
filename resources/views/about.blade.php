@extends('layout.app')

@section('title', 'about')

@section('contents')
<div class="container mt-3 bg-light">
    <div class="text-center mb-4">
        <h2>About Our Company</h2>
        <p class="lead">Empowering teams with purpose, culture, and passion.</p>
        <img src="https://source.unsplash.com/1200x400/?team,people" class="img-fluid rounded" alt="Team">
    </div>

    <div class="row mt-4">
        <div class="col-md-6">
            <h4 class="text-success">Our Mission</h4>
            <p>To foster innovation and excellence in every aspect of our operations by empowering our team and delivering top-tier services.</p>
        </div>
        <div class="col-md-6">
            <h4>Our Values</h4>
            <ul>
                <li>Integrity</li>
                <li>Collaboration</li>
                <li>Customer Focus</li>
                <li>Continuous Improvement</li>
            </ul>
        </div>
    </div>
</div>
@endsection