$(".usun_produkt_z_koszyka").click(function () {
        var product_id = $(this).data('product_id');
        $.post('/cart_update', {
                'product_id': product_id
            },

            function (data) {
                $('#ilosc').html(data);
            });
    });
