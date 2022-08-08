<?php
/*
Template Name: Create product
*/
get_header();
?>
    <div id="noticeAddProduct"></div>
    <form class="container form_product"  id="creatProduct" method="POST">
        <img class="form_cust" id="cust_img" src="" alt="" width="320">
        <div class="input-group mb-3">
        <input type="file" class="form-control" id="myfile" name="wp_custom_attachment" onchange="readFile(this)">
            <label class="input-group-text" for="myfile">Upload file</label>
        </div>
        <p><a href="#" id="remove-post-thumbnail" onclick="event.preventDefault(); clear_img()">Delete
                image</a>
        </p>
        <div class="mb-3">
            <label for="exampleInput">Product Name</label>
            <input type="text" id="exampleInput" name="product_name">
        </div>
        <div class="mb-3">
            <label for="exampleInputPrice">Price</label>
            <input type="text" id="exampleInputPrice" name="product_price">
        </div>
        <div class="mb-3">
            <label for="exampleType">Select type</label>
            <select id="exampleType" name="product_type">
                <option value="rare">rare</option>
                <option value="frequent">frequent</option>
                <option value="unusual">unusual</option>
            </select>
        </div>
        <input type="hidden" name="action" value="add_product_ajax">
        <button type="submit" class="btn main__btn">Send</button>
    </form>

    <script>
jQuery(function ($) {

$('#creatProduct').submit(function (e) {
  const newFormData = new FormData(this);
  
    e.preventDefault()
    $('#noticeAddProduct').text('');

    $.ajax({
        url: '<?php echo admin_url("admin-ajax.php") ?>',
        type: 'POST',
        data: newFormData ,
        contentType: false,
        processData: false,
        success: function (data) {
          if (typeof data.error === 'undefined')
            $('#noticeAddProduct').text(data);
            $('#creatProduct')[0].reset();
            document.getElementById('cust_img').src = ''
        }
    });
});
});
    </script>
<?php

get_footer();
