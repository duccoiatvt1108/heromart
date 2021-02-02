<!-- footer -->
    <footer>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12 segment-one">
                        <img src="source/style_frontend/style/src/logo.png" style="max-width: 80%; margin-bottom: 20px;"/>
                        <ul>
                            <li><a href=""><i class="fas fa-home mr-2"></i>Hải Phòng</a></li>
                            <li><a href=""><i class="fas fa-envelope mr-2"></i>do73779@st.vimaru.edu.vn</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-12 segment-two">
                        <h2>HỖ TRỢ KHÁCH HÀNG</h2>
                        <ul>
                            <li><a href="">Hướng dẫn mua hàng</a></li>
                            <li><a href="">Hình thức thanh toán</a></li>
                            <li><a href="">Chính sách bảo hành</a></li>
                            <li><a href="">Chính sách bảo mật</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 segment-three">
                        <h2>ĐĂNG KÝ NHẬN TIN</h2>
                        <p>Hãy nhập email của bạn tại đây để nhận tin!</p>
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Your email" aria-label="" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-warning" type="submit">SUBCRIBE</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 segment-four">
                        <h2>KẾT MỐI VỚI CHÚNG TÔI</h2>
                        <a href=""><i class="fab fa-facebook-square" style="color: #ffc107"></i></a>
                        <a href=""><i class="fab fa-instagram-square" style="color: #ffc107"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script>
        function detailproduct() {
            location.replace("{{route('chi-tiet-san-pham')}}")
        }
    </script>
</body>
</html>