//Getting value from "post_ajax.php".
function fill_category(name,value) {
   //Assigning value to "search" div in "add_post.php" file.
   //$('#search').attr('category-id',value);
   $('#search').val(name);
   $('#category_id').val(value);
   //Value.attr('category-id');
   
   //Hiding "display" div in "search.php" file.
   $('#display').hide();
}
$(document).ready(function() {
   
  
   //On pressing a key on "Search box" in "add_company.php" file. This function will be called.
   $("#search").keyup(function() {
        
       //Assigning search box value to javascript variable company_named as "category_name".
       var category_name = $('#search').val();
      
       //Validating, if "category_name" is empty.
       if (category_name === "") {
           //Assigning empty value to "display" div in "add_company.php" file.
           $("#display").html("");
           
       }
       //If category_name is not empty.
       else {
          
           //AJAX is called.
           $.ajax({
               //AJAX type is "Post".
               type: "POST",
               //Data will be sent to "post_ajax.php".
               url: "post_ajax.php",
               //Data, that will be sent to "post_ajax.php".
               data: {
                   //Assigning value of "category_name" into "search" variable.
                   search: category_name
                   
               },
               
               //If result found, this funtion will be called.
               success: function(html) {
                    
                   //Assigning result to "display" div in "add_company.php" file.
                   $("#display").html(html).show();
                  
               }
           });
       }
   });
});