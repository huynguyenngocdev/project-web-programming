 <!-- Modal -->
 <div class="modal fade" id="ModalAccessories<?php echo $row['IDaccessories']?>" tabindex="-1" role="dialog" aria-labelledby="ModalAccessoriesLabel">
     <div class="modal-dialog" role="document">
         <div class="modal-content" style="width: 50vw;">
             <div class="modal-header">
                 <h5 class="modal-title" id="ModalAccessoriesLabel">Chi tiết sản phẩm</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 <div class="skin-light row" aria-busy="true">
                     <div class="col-md-6 col-0">

                         <div id="mdb-lightbox-ui">
                             <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
                                 <div class="pswp__bg"></div>
                                 <div class="pswp__scroll-wrap">
                                     <div class="pswp__container">
                                         <div class="pswp__item"></div>
                                         <div class="pswp__item"></div>
                                         <div class="pswp__item"></div>
                                     </div>
                                     <div class="pswp__ui pswp__ui--hidden">

                                         <div class="pswp__top-bar">

                                             <div class="pswp__counter"></div>

                                             <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                                             <!--<button class="pswp__button pswp__button--share" title="Share"></button>-->

                                             <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                                             <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>


                                             <div class="pswp__preloader">
                                                 <div class="pswp__preloader__icn">
                                                     <div class="pswp__preloader__cut">
                                                         <div class="pswp__preloader__donut"></div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>

                                         <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>

                                         <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>

                                         <div class="pswp__caption">
                                             <div class="pswp__caption__center"></div>
                                         </div>

                                     </div>

                                 </div>

                             </div>
                         </div>

                         <div class="mdb-lightbox" data-pswp-uid="1">

                             <div class="row product-gallery mx-1">

                                 <div class="col-12 mb-0">
                                     <figure class="view overlay rounded z-depth-1 main-img" style="max-height: 700px;">
                                         <a href="<?php echo $row['Image'] ?>" data-size="710x823">
                                             <img src="<?php echo $row['Image'] ?>" class="img-fluid z-depth-1" style="transform-origin: center center; transform: scale(1);">
                                         </a>
                                     </figure>
                                     <figure class="view overlay rounded z-depth-1" style="visibility: hidden;">
                                         <a href="<?php echo $row['Image'] ?>" data-size="710x823">
                                             <img src="<?php echo $row['Image'] ?>" class="img-fluid z-depth-1">
                                         </a>
                                     </figure>
                                     <figure class="view overlay rounded z-depth-1" style="visibility: hidden;">
                                         <a href="<?php echo $row['Image'] ?>" data-size="710x823">
                                             <img src="<?php echo $row['Image'] ?>" class="img-fluid z-depth-1">
                                         </a>
                                     </figure>
                                 </div>
                                 <div class="col-12">
                                     <div class="row">
                                         <div class="col-4">
                                             <div class="view overlay rounded z-depth-1 gallery-item hoverable">
                                                 <img src="<?php echo $row['Image'] ?>" class="img-fluid">
                                                 <div class="mask rgba-white-slight"></div>
                                             </div>
                                         </div>
                                         <div class="col-4">
                                             <div class="view overlay rounded z-depth-1 gallery-item hoverable">
                                                 <img src="<?php echo $row['Image'] ?>" class="img-fluid">
                                                 <div class="mask rgba-white-slight"></div>
                                             </div>
                                         </div>
                                         <div class="col-4">
                                             <div class="view overlay rounded z-depth-1 gallery-item hoverable">
                                                 <img src="<?php echo $row['Image'] ?>" class="img-fluid">
                                                 <div class="mask rgba-white-slight"></div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>

                         </div>

                     </div>
                     <div class="col-md-6 col-0">
                         <h5><?php echo $row['AccessoriesName'] ?></h5>
                         <p>
                             <span class="mr-1">
                                 <b style="color: red">
                                     <?php
                                        if ($row['Discount'] != 0) {
                                            echo  number_format($row['Discount']) . '₫ &nbsp;<span style="color: gray;"><del>' .   number_format($row['Price']) . '₫</del>';
                                        } else echo number_format($row['Price']) . '₫';
                                        ?>
                                 </b>
                             </span>
                         </p>
                         <p><?php echo $row['Description']?></p>
                         <hr>
                         <div class="table-responsive mb-2">
                             <form action="Cart/addToCartSmartphone/<?php echo $row['IDaccessories']?>" method="post">
                                 <table class="table table-sm table-borderless">
                                     <tbody>
                                         <tr>
                                             <td class="pl-0 pb-0 w-25">Số lượng</td>
                                         </tr>
                                         <tr>
                                             <td class="pl-0">
                                                 <div class="def-number-input number-input safari_only mb-0">
                                                     <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                                                     <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                     <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                                                 </div>
                                             </td>
                                         </tr>
                                     </tbody>
                                 </table>
                                 <a href="Cart/Buy/<?php echo $row['IDaccessories']?>">
                                     <button type="button" class="btn btn-primary btn-md mr-1 mb-2 waves-effect waves-light">
                                         Mua ngay
                                     </button>
                                 </a>

                                 <button type="submit" class="btn btn-light btn-md mr-1 mb-2 waves-effect waves-light"><i class="fas fa-cart-plus">
                                     </i><b>Thêm vào giỏ</b>
                                 </button>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>