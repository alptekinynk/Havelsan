<script>
    function modalDialogEvent(){
        showSwal("{{__('Yükleniyor...')}}", 'info');

        let data = new FormData();
        
        data.append("ip", $("#setIPmodal").find("#ip_field").val());
        
            request("{{ API('set_ip') }}", data, function(response){
        $('#snmp_script').text(response);
        // işlem yapıldıktan sonra modal penceresini gizle.
        $("#setIPmodal").modal("hide");
        // Yükleniyor mesajını işlem bittiği için kapatıyoruz.
        Swal.close();
        showSwal(response.message, 'success', 2500);
     }, function(error){
        error = JSON.parse(error);
        showSwal(error.message, 'error');
        });
       

       


        
        
    }
</script>