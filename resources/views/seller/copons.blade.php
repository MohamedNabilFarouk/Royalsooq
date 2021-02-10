@extends('layouts.user')
@section('breadcrumb')
<a-breadcrumb style="margin: 16px 0">
    <a-breadcrumb-item>
      <a href="{{ route('home') }}" title="home">
        Home
      </a>
    </a-breadcrumb-item>
    <a-breadcrumb-item>
      <a href="{{ route('account.dashboard') }}" title="user dashboard">
        Seller Dashboard
      </a>
    </a-breadcrumb-item>

    <a-breadcrumb-item>
        Create Copons
    </a-breadcrumb-item>
</a-breadcrumb>
@endsection

@section('content')

<h4> Create copons </h4>

@endsection