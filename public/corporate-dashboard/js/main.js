(function($) {
    "use strict";

    //show modal for branch editing with data
    $('.branch_edit_modal_btn').on('click',function(){

        const id = parseInt($(this).attr("id"));

        //get employee data
        console.log("testing");

        $.ajax({
            type:'get',
            url: "/get-branch-data/"+id,
            processData: false,
            contentType: false,
            success: (data) => {

                let branch_data = data.branch;

                $('#edited_branch_code').val(branch_data[0].branch_code);
                $('#edited_branch_name').val(branch_data[0].branch_name);

                 //show edit modal
                 $('#editbranchModal').modal('show');
            
            },
            error: function(data){
                   
                console.log("There was an error editing branch");

             }
           });
    
    });


})(jQuery);