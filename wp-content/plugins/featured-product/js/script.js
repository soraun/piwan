jQuery(document).ready(function($) {

    $('.featured-products-carousel').owlCarousel({
        items: 4,
        loop: true,
        nav: true,
        dots: false,
        navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            768: {
                items: 3
            },
            992: {
                items: 4
            }
        }
    });

    $('#featured-product-upload-button').on('click', function(e) {
        e.preventDefault();
        var imageUploader = wp.media({
            title: 'Upload Image',
            multiple: false
        }).on('select', function() {
            var attachment = imageUploader.state().get('selection').first().toJSON();
            $('#featured-product-image').val(attachment.url);
            $('#featured-product-image-preview img').attr('src', attachment.url);
        }).open();
    });
});
