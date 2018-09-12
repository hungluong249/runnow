<section id="checkout">
    <div class="cover">
        <div class="mask">
            <img src="https://images.unsplash.com/photo-1491553895911-0055eca6402d?ixlib=rb-0.3.5&s=19b8447dd20f42ec20ee7ec60296ebcb&auto=format&fit=crop&w=1000&q=80" alt="image checkout cover">
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="left col-xs-12 col-lg-8">
                <div id="checklist">

                </div>

                <div id="extra">
                    <div class="item item-discount">
                        <h3 class="title-sm">
                            Free expedited shipping
                        </h3>
                    </div>
                </div>
            </div>

            <div class="right col-xs-12 col-lg-4">
                <div id="bill">
                    <table class="table">
                        <tr>
                            <td>Cart Subtotal</td>
                            <td>$ Price</td>
                        </tr>
                        <tr>
                            <td>Shipping</td>
                            <td>$ Price</td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td>$ Price</td>
                        </tr>
                    </table>

                    <button class="btn btn-primary" role="button">
                        Checkout
                    </button>

                    <a class="btn btn-light" href="<?php echo base_url('products/') ?>">
                        Continue Shopping
                    </a>
                </div>
            </div>
        </div>
    </div>

	<script type="text/javascript">
        var cart = localStorage.getItem('cart') ? JSON.parse(localStorage.getItem('cart')) : [];
        var elmCartItem = '';

        cart.forEach( function(item, index) {
            // var color = '';
            // item.product.color.forEach(function(value, index){
            //     color += '<p class="paragraph"><div style="width: 30px; height: 15px ;background-color: '+value[]+'"></div></p>';
            // })
            elmCartItem += `
            <div class="item">
                <div class="d-flex justify-content-between">
                    <div class="item-left d-flex">
                        <div class="item-image">
                            <div class="mask">
                                <img src="<?php echo site_url('assets/img/shoes/') ?>${item.product.image}" alt="image ">
                            </div>
                        </div>

                        <div class="item-info">
                            <h3 class="title-sm">${item.product.title}</h3>
                                <p class="paragraph"><div style="width: 30px; height: 15px ;background-color: ${item.product.color}"></div></p>
                            <div class="item-buttons">
                                <form class="d-flex">
                                    <input type="number" class="form-control" min="0" value=${item.quantity}>

                                    <a class="btn btn-light" href="<?php echo base_url('products/detail/') ?>" role="button">
                                        Edit
                                    </a>

                                    <button class="btn btn-light" role="button">
                                        Remove
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="item-right">
                        <h3 class="title-sm">$ ${item.product.price}</h3>
                    </div>
                </div>
            </div>
        `;
        });
        $('#checklist').html(elmCartItem);

        console.log(cart);
	</script>
</section>