<div id="all">
    <div id="content">
        <div class="container">
            <?php require APP . 'view/_templates/side-bar-user.php'; ?>

            <div class="col-md-9" id="customer-order">
                <div class="box">
                    <h1>Đơn hàng #<?php echo $id ?></h1>

                    <p class="lead">Đơn hàng #<?php echo $id ?> được đặt vào <strong><?php echo date("d/m/Y",strtotime($order[0]->date_order)) ?></strong> và
                        <strong>
                        <?php if($order[0]->status == '0') { ?>
                            Đang chờ xử lý
                        <?php } ?>
                        <?php if($order[0]->status == '1') { ?>
                            Đang vận chuyển
                        <?php } ?>
                        <?php if($order[0]->status == '2') { ?>
                            Đã xong
                        <?php } ?>
                        <?php if($order[0]->status == '3') { ?>
                            Đã hủy
                        <?php } ?>
                        </strong>.</p>
                    <hr>
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
                                        if (isset($order_details)) {
                                            $total = 0;
                                            foreach ($order_details as $key => $order_detail) {
                                    ?>
                                    <tr>
                                        <td>
                                            <a target="blank" href="<?php echo URL . "sanpham/chitiet/" . $order_detail->product_id ?>">
                                                <img src="<?php echo URL . $order_detail->product_image ?>" alt="<?php echo $order_detail->product_name ?>">
                                            </a>
                                        </td>
                                        <td><a target="blank" href="<?php echo URL . "sanpham/chitiet/" . $order_detail->product_id ?>"><?php echo $order_detail->product_name ?></a>
                                        </td>
                                        <td id="size_<?php echo $key ?>" value = "<?php echo $key ?>">
                                            <?php echo $order_detail->size ?>
                                        </td>
                                        <td class="form-inline">
                                            <?php echo $order_detail->quantity ?>
                                        </td>
                                        <td><?php echo $order_detail->price ?></td>
                                        <td><?php echo $subtotal = $order_detail->price *  $order_detail->quantity ?></td>
                                    </tr>
                                    <?php
                                        $total += $subtotal;
                                    } } ?>
                                </tbody>
                            <tfoot>
                                <tr>
                                    <th colspan="5" class="text-right">Tổng</th>
                                    <th><?php echo $total; ?></th>
                                </tr>
                                <tr>
                                    <th colspan="5" class="text-right">Phí vận chuyển</th>
                                    <th>20000</th>
                                </tr>
                                <tr>
                                    <th colspan="5" class="text-right">Tổng đơn</th>
                                    <th><?php echo $order[0]->total; ?></th>
                                </tr>
                            </tfoot>
                        </table>

                    </div>

                    <div class="row addresses">
                        <div class="col-md-12">
                            <h2>Thông tin vận chuyển</h2>
                            <p><?php echo $order[0]->receiver_name ?>
                                <br><?php echo $order[0]->receiver_phone ?>
                                <br><?php echo $order[0]->receiver_email ?>
                                <br><?php echo $order[0]->receiver_address ?>
                            </p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
