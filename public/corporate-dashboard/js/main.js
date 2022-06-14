(function($) {
    "use strict";

    //show modal for branch editing with data
    $('.branch_edit_modal_btn').on('click',function(){

        const id = parseInt($(this).attr("id"));
        $('#branch_id').val(id);

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


     //show modal for employee editing with data
     $('.employee_edit_modal_btn').on('click',function(){
       
        const id = parseInt($(this).attr("id"));
        $('#employee_id').val(id);


        //get employee data
        $.ajax({
            type:'get',
            url: "/get-employee-data/"+id,
            processData: false,
            contentType: false,
            success: (data) => {

                    let employee_data = data.employee;

                    $('#edited_first_name').val(employee_data[0].first_name);
                    $('#edited_last_name').val(employee_data[0].last_name);
                    $('#edited_id_number').val(employee_data[0].id_number);
                    $('#edited_email').val(employee_data[0].email);
                    $('#edited_phone').val(employee_data[0].phone_number);
               

                 //show edit modal
                 $('#editemployeeModal').modal('show');
            
            },
            error: function(data){
                   
                console.log("There was an error editing employee");

             }
           });
    
    });


})(jQuery);