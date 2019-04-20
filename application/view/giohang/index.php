<div id="all">
    <div id="content">
        <div class="container">
            <div class="col-md-9" id="basket">
                <div class="box">
                    <form method="post" action="checkout1.html">
                        <h1>Giỏ hàng</h1>
                        <p class="text-muted">Bạn hiện có <strong>3</strong> sản phẩm trong giỏ hàng.</p>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan="2">Sản phẩm</th>
                                        <th>Quantity</th>
                                        <th>Đơn giá</th>
                                        <th colspan="2">Tổng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <a href="#">
                                                <img src="img/detailsquare.jpg" alt="White Blouse Armani">
                                            </a>
                                        </td>
                                        <td><a href="#">White Blouse Armani</a>
                                        </td>
                                        <td>
                                            <input type="number" value="2" class="form-control">
                                        </td>
                                        <td>$123.00</td>
                                        <td>$246.00</td>
                                        <td><a href="#"><i class="fa fa-trash-o"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="5">Tổng</th>
                                        <th colspan="2">$446.00</th>
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

                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Tổng tiền</td>
                                    <th>$446.00</th>
                                </tr>
                                <tr>
                                    <td>Phí vận chuyển</td>
                                    <th>$10.00</th>
                                </tr>
                                <tr>
                                    <td>VAT</td>
                                    <th>$0.00</th>
                                </tr>
                                <tr class="total">
                                    <td>Tổng tiền</td>
                                    <th>$456.00</th>
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

