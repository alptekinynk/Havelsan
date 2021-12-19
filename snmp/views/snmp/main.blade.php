<div class="row">

    <div class="col-12 mb-2">
    <b>Sorgulama biraz uzun sürmektedir. Lütfen bekleyin</b>
    </div>

    <div class="col-12">
        @include('modal-button',[
        "class"     => "btn btn-primary mb-2",
        "target_id" => "setIPmodal",
        "text"      => "IP Bilgisi Girin",
        "icon"      => "fas fa-plug"
        ])
               
    
        
        @component("modal-component", [
            "id"         => "setIPmodal",
            "title"      => "IP Bilgisi girin",
            "notSized"   => true,
            "footer" => [
                "class" => "btn btn-primary mb-2",
                "onclick" => "modalDialogEvent()",
                "text" => "OK"
            ]
        ])    
            <input type="text" name="ip" id="ip_field" class="form-control">
            <small>Sorgulamak istediğiniz IP bilgisini giriniz.</small>
        @endcomponent
    </div>
    <div>
    <span id="snmp_script">Henüz bir IP adresi girilmedi</span>
    </div>

   

</div>

@include("snmp.scripts")