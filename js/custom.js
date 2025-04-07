$(document).on('click','inc',function(){
    let productId = $(this).closest('.qtyBox').find('.pId').val();
    console.log(productId,typeof(productId));
    let productQty = $(this).closest('.qtyBox').find('.num-product');
    let productQtyInt = parseInt(productQty.val());
    console.log(productQtyInt,typeof(productQtyInt));
    if(!isNaN(productQtyInt)){
        let updateQty = productQtyInt;
        console.log(updateQty);
    }
})
$(document).on('click','dec',function(){
    let productId = $(this).closest('.qtyBox').find('.pId').val();
    console.log(productId,typeof(productId));
    let productQty = $(this).closest('.qtyBox').find('.num-product');
    let productQtyInt = parseInt(productQty.val());
    console.log(productQtyInt,typeof(productQtyInt));
    if(!isNaN(productQtyInt)){
        let updateQty = productQtyInt;
        console.log(updateQty);
    }
})
function updateQtyIncDec(pId,pQty){
    $.ajax({
        url :"shopping-cart.php",
        type : "POST",
        data : {
            "qtyIncDec" : true,
            "productId" : pId,
            "productQty" : pQty

        },
        success:function(response){
           console.log(response);
        }
    })
}