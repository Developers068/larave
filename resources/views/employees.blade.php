@extends('layout.app')

@section('title', 'Employees')

@section('contents')
<div class="container mt-4">
    <h1 class="mb-4 text-primary">Employees List</h1>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Name</th>
                <th>Age</th>
            </tr>
        </thead>
        <tbody>
            <tr><td>Happy Johnson</td><td>28</td></tr>
            <tr><td>Chacha Mwita</td><td>34</td></tr>
            <tr><td>Grace Daniel</td><td>25</td></tr>
            <tr><td>Kelvin Mkude</td><td>30</td></tr>
            <tr><td>Esther Lema</td><td>26</td></tr>
            <tr><td>James Mushi</td><td>38</td></tr>
            <tr><td>Sarah John</td><td>29</td></tr>
            <tr><td>George Kimaro</td><td>32</td></tr>
            <tr><td>Nancy Paul</td><td>24</td></tr>
            <tr><td>Emmanuel Sanga</td><td>31</td></tr>
        </tbody>
    </table>
</div>
@endsection
