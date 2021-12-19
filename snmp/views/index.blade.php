@extends('layouts.master')

@section('content')
<h2 class="text-bold">{{ __("Liman Eğitim Kampı, Nesne Yönelimli Eklenti Geliştirme") }}</h2>

<ul class="nav nav-tabs" role="tablist" style="margin-bottom: 15px;">
    <li class="nav-item">
        <a class="nav-link active" onclick="getHostname()" href="#hostname" data-toggle="tab">
            <i class="fas fa-server"></i> {{ __("Hostname") }}
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" onclick="" href="#snmp" data-toggle="tab">
        <i class="fas fa-network-wired"></i> {{ __("SNMP Monitor") }}
        </a>
    </li>
</ul>

<div class="tab-content">
    <div id="hostname" class="tab-pane active">
        @include('hostname.main')
    </div>
    
    <div id="snmp" class="tab-pane">
        @include('snmp.main')
    </div>
</div>
@endsection