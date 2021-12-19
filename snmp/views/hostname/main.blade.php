<div class="row">
    <div class="col-12 mb-2">
        <b>{{ __('Hostname') }}</b>:
        <div class="hostname"></div>
    </div>
    <div class="col-12">
        @include('modal-button',[
            "class"     => "btn btn-primary mb-2",
            "target_id" => "setHostnameModal",
            "text"      => "Hostname Değiştir",
            "icon"      => "fas fa-plus"
        ])

        @include('modal',[
            "id" => "setHostnameModal",
            "title" => "Hostname Değiştir",
            "url" => API('set_hostname'),
            "next" => "getHostname",
            "inputs" => [
                "Hostname" => "hostname:text"
            ],
            "submit_text" => "Hostname Değiştir"
        ])
    </div>
</div>

@include("hostname.scripts")