@extends('layout.app')

@section('contents')
<header>
  <h1>My Web Gallery</h1>
  <p>Explore a collection of beautiful images</p>
</header>

<style>
  body {
    margin: 0;
    font-family: Arial, sans-serif;
    background: #f5f5f5;
  }

  header {
    background-color: #222;
    color: white;
    padding: 1rem 2rem;
    text-align: center;
  }

  .gallery {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 15px;
    padding: 2rem;
  }

  .gallery-item {
    text-align: center;
  }

  .gallery img {
    width: 100%;
    height: auto;
    border-radius: 8px;
    cursor: default;
  }

  .gallery-title {
    margin-top: 0.5rem;
    font-weight: bold;
    color: #333;
  }

  footer {
    text-align: center;
    background: #222;
    color: #ccc;
    padding: 1rem;
    margin-top: 2rem;
  }
</style>

<main>
  <div class="gallery">
    @for ($i = 1; $i <= 84; $i++)
      @if (!in_array($i, [7, 17, 30, 34, 46]))
        <div class="gallery-item">
          <img src="https://picsum.photos/id/{{ 1000 + $i }}/600/400" alt="Image {{ $i }}">
          <div class="gallery-title">Image {{ $i }}</div>
        </div>
      @endif
    @endfor
  </div>
</main>

<footer>
  <p>&copy; 2025 My Web Gallery. All rights reserved.</p>
</footer>
@endsection
