$(document).ready(function() {
    $('select[name="cname"]').on('change', function() {
        var subID = $(this).val();
        if(subID) {
            $.ajax({
               
                url: '/add_course/'+subID,
                type: "GET",
                dataType: "json",
                success:function(data) {
                    $('select[name="name"]').empty();
                    $.each(data, function(key, value) {
                        $('select[name="name"]').append('<option value="'+ value.id +'">'+ value.name +'</option>');
                    });
                }
            });
        }else{
            $('select[name="name"]').empty();
        }
    });
});