$(function(){
    $('#insert').click(function(){
        let image_name = $('#image').val();
        if(image_name == ''){
            alert('veuillez selectionner une image');
            return false;
        }
        else{
            let ext = $('#image').val().split('.').pop().toLowerCase();
            if(jQuery.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1){
                alert('format pas valide00');
                $('#image').val('');
                return false;
            }
        }
    });
})