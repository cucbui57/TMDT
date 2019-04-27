<div id="all">

        <div id="content">
            <div class="container">
                <?php require APP . 'view/_templates/side-bar-user.php'; ?>
                <div class="col-md-9" id="customer-orders">
                    <div class="box">
                        <h1>Đơn hàng</h1>

                        <p class="lead">Các đơn hàng bạn đã đặt và tình trạng đơn hàng.</p>
                       

                        <hr>

                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Mã đơn</th>
                                        <th>Ngày đặt</th>
                                        <th>Tổng tiền</th>
                                        <th>Trạng thái</th>
                                        <th>Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- label-success label-danger label-warning -->
                                    <?php foreach ($orders as $order) { ?>
                                        
                                    <tr>
                                        <th>#<?php echo $order->id ?></th>
                                        <td><?php echo date('d/m/Y', strtotime($order->date_order)) ?></td>
                                        <td><?php echo $order->total ?> VND</td>
                                        <?php if($order->status == '0') { ?>
                                            <td><span class="label label-warning">Chờ xử lý</span>
                                            </td>
                                        <?php } ?>
                                        <?php if($order->status == '1') { ?>
                                            <td><span class="label label-info">Đang vận chuyển</span>
                                            </td>
                                        <?php } ?>
                                        <?php if($order->status == '2') { ?>
                                            <td><span class="label label-success">Đã xong</span>
                                            </td>
                                        <?php } ?>
                                        <?php if($order->status == '3') { ?>
                                            <td><span class="label label-danger">Đã hủy</span>
                                            </td>
                                        <?php } ?>
                                        <td>
                                            <a href="<?php echo URL ?>donhang/chitiet/<?php echo $order->id ?>" class="btn btn-primary btn-sm">Xem</a>
                                            <?php if($order->status == '0') { ?>
                                            <button class="btn btn-danger btn-sm" onclick="cfdelete(<?php echo htmlspecialchars($order->id, ENT_QUOTES, 'UTF-8') ?>);">Hủy đơn</button>
                                            <?php } ?>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    <script>
        function cfdelete(id){
            $.confirm({
                title: "Xác nhận!",
                content: "Bạn có chắc chắn muốn hủy không?",
                backgroundDismiss: true,
                type: 'red',
                typeAnimated: false,
                buttons: {
                    OK: {
                        btnClass: 'btn-red',
                        action: function(){
                            window.location.href="<?php echo URL . 'donhang/huy/'?>"+id;
                        }
                    },
                    Hủy: function(){
                    },
                }
            });
        }
    </script>

