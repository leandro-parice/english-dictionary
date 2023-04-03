@extends('layouts.index')

@section('page')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <nav class="navbar navbar-expand-lg bg-body-tertiary">
                        <div class="container-fluid">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item me-2">
                                        <a href="{{ route('word.index') }}" class="btn btn-sm btn-primary">List</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('word.create') }}" class="btn btn-sm btn-success">Add</a>
                                    </li>
                                </ul>
                                <form class="d-flex">
                                    <div class="input-group">
                                        <input type="text" class="form-control form-control-sm" placeholder="Search">
                                        <button class="btn btn-sm btn-info" type="button">Send</button>
                                      </div>
                                </form>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="card-body">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
@stop
