<div id="all">
    <div id="content">
        <div class="container">
            <div class="col-md-9" id="basket">
                <div class="box">
                    <form method="post" action="checkout1.html" id="cartList">
                        <h1>Giỏ hàng</h1>
                        <p class="text-muted">Bạn hiện có <strong>
                            <?php
                                if (isset($_SESSION['cart'])){
                                    echo count($_SESSION['cart']);
                                } else {
                                    echo "0";
                                }
                            ?>
                        </strong> sản phẩm trong giỏ hàng.</p>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan="2">Sản phẩm</th>
                                        <th>Size</th>
                                        <th>Số lượng</th>
                                        <th>Đơn giá</th>
                                        <th colspan="2">Tổng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        if (isset($_SESSION['cart'])) {
                                            $total = 0;
                                            foreach ($_SESSION['cart'] as $key => $cart) {
                                    ?>
                                    <tr>
                                        <td>
                                            <a href="#">
                                                <img src="<?php echo URL . $cart['item']->image ?>" alt="<?php echo $cart['item']->name ?>">
                                            </a>
                                        </td>
                                        <td><a href="<?php echo URL . "sanpham/chitiet/" . $cart['item']->id ?>"><?php echo $cart['item']->name ?></a>
                                        </td>
                                        <td id="size_<?php echo $key ?>" value = "<?php echo $key ?>">
                                            <?php echo $cart['size'] ?>
                                        </td>
                                        <td class="form-inline">
                                            <input disabled class="form-control" type="text" id="quantity_<?php echo $key ?>" name="quantity_<?php echo $key ?>" autocomplete="off" value="<?php echo $cart["quantity"] ?>">
                                            <a href="javascript:void(0)" onclick="downItem('<?php echo $key ?>')" class="btn btn-default">-</a>
                                            <a href="javascript:void(0)" onclick="upItem('<?php echo $key ?>')" class="btn btn-default"> + </a>
                                        </td>
                                        <td><?php echo $cart['item']->price ?></td>
                                        <td><?php echo $subtotal = $cart['item']->price *  $cart['quantity'] ?></td>
                                        <td><a class="btn btn-mini btn-danger" onclick="deleteItem('<?php echo $key ?>')" href="javascript:void(0)" type="button"><i class="fa fa-trash-o"></i></a>
                                        </td>
                                    </tr>
                                    <?php
                                        $total += $subtotal;
                                    } } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="5">Tổng</th>
                                        <th colspan="2"><?php echo $total ?></th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </form>
                </div>
                
                <div class="box">
                    <form method="post" action="checkout2.html">
                        <h1>Thông tin vận chuyển</h1>

                        <div class="content">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Họ tên</label>
                                        <input type="text" class="form-control" id="name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="phone">Số điện thoại</label>
                                        <input type="text" class="form-control" id="phone">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="address">Địa chỉ</label>
                                        <textarea class="form-control" id="address" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-md-3">
                <div class="box" id="order-summary">
                    <div class="box-header">
                        <h3>Hóa đơn</h3>
                    </div>

                    <div class="table-responsive" id="checkout-cart">
                        <table class="table">
                            
                            <tbody>
                                <tr>
                                    <td>Tổng tiền</td>
                                    <th><?php echo $total ?></th>
                                </tr>
                                <tr>
                                    <td>Phí vận chuyển</td>
                                    <th><?php if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) { echo $ship = 20000; } else { echo $ship = 0; } ?></th>
                                </tr>
                                <tr>
                                    <td>VAT</td>
                                    <th><?php echo $total / 10 ?></th>
                                </tr>
                                <tr class="total">
                                    <td>Tổng tiền</td>
                                    <th><?php echo $total + $total / 10 + $ship?></th>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="box-footer">
                        <div class="pull-left">
                            <button type="submit" class="btn btn-primary">Thanh toán <i class="fa fa-chevron-right"></i>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

