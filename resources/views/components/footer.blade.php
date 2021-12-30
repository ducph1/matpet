<!-- phần footer -->
<footer class="footer">
            <div class="container-fluid dogs-row">
                <div class="container footer-dogs">
                    <div class="row row-dogs">
                        <div class="grid_column-1-5 footer_dogs">
                            <div class="footer_dogs-info">
                                <h3 class="footer_dogs-name">Jack Russel</h3>
                            </div>
                            <div class="dog-item" style="background-image: url('/assets/img/dog1.png')"></div>
                        </div>
                        <div class="grid_column-1-5 footer_dogs">
                            <div class="footer_dogs-info">
                                <h3 class="footer_dogs-name">Parson Russel</h3>
                            </div>
                            <div class="dog-item" style="background-image: url('/assets/img/dog2.png')"></div>
                        </div>
                        <div class="grid_column-1-5 footer_dogs">
                            <div class="footer_dogs-info">
                                <h3 class="footer_dogs-name">Golden Retriever</h3>
                            </div>
                            <div class="dog-item" style="background-image: url('/assets/img/dog3.png')"></div>
                        </div>
                        <div class="grid_column-1-5 footer_dogs">
                            <div class="footer_dogs-info">
                                <h3 class="footer_dogs-name">Yorkie</h3>
                            </div>
                            <div class="dog-item" style="background-image: url('/assets/img/dog4.png')"></div>
                        </div>
                        <div class="grid_column-1-5 footer_dogs">
                            <div class="footer_dogs-info">
                                <h3 class="footer_dogs-name">Bull Pháp</h3>
                            </div>
                            <div class="dog-item" style="background-image: url('/assets/img/dog5.png')"></div>
                        </div>
                        <div class="grid_column-1-5 footer_dogs">
                            <div class="footer_dogs-info">
                                <h3 class="footer_dogs-name">Bull Pháp</h3>
                            </div>
                            <div class="dog-item" style="background-image: url('/assets/img/dog6.png')"></div>
                        </div>
                        <div class="grid_column-1-5 footer_dogs">
                            <div class="footer_dogs-info">
                                <h3 class="footer_dogs-name">Beagle</h3>
                            </div>
                            <div class="dog-item" style="background-image: url('/assets/img/dog7.png')"></div>
                        </div>
                        <div class="grid_column-1-5 footer_dogs">
                            <div class="footer_dogs-info">
                                <h3 class="footer_dogs-name">PUG</h3>
                            </div>
                            <div class="dog-item" style="background-image: url('/assets/img/dog8.png')"></div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="container-fluid footer-main">
                <div class="container">
                    <div class="row row-footer-info">
                        <div class="grid__column-4pe">
                            <h3 class="footer-heading">Liên Lạc</h3>
                            <ul class= "footer-list">
                                <li><a href=""><i class="footer-icon fas fa-map-marker-alt"></i><span class="footer-textbold">Địa chỉ:</span> {{ getConfigValueFromSettingTable('address1') }}</a></li>
                                <li><a href=""><i class="footer-icon fas fa-map-marker-alt"></i><span class="footer-textbold">Địa chỉ:</span> {{ getConfigValueFromSettingTable('address2') }}</a></li>
                                <li><a href=""><i class="footer-icon fas fa-phone-alt"></i><span class="footer-textbold">Điện Thoại:</span>  {{ getConfigValueFromSettingTable('phone_contact') }}</a></li>
                                <li><a href=""><i class="footer-icon far fa-envelope"></i><span class="footer-textbold">Email:</span>  {{ getConfigValueFromSettingTable('email') }}</a></li>
                            </ul>
                        </div>
                        <div class="grid__column-2pe">
                            <h3 class="footer-heading">Hỗ Trợ</h3>
                            <ul class= "footer-list">
                                <li><a href="">Hướng dẫn mua hàng</a></li>
                                <li><a href="">Chính sách giao hàng</a></li>
                                <li><a href="">Chính sách đổi trả</a></li>
                                <li><a href="">Chính sách bảo hành</a></li>
                            </ul>
                        </div>
                        <div class="grid__column-2pe">
                            <h3 class="footer-heading">Theo Dõi</h3>
                            <ul class= "footer-list">
                                <li><a href=""><i class="footer-icon fab fa-facebook"></i> Facebook</a></li>
                                <li><a href=""><i class="footer-icon fab fa-instagram"></i> Instagram</a></li>
                                <li><a href=""><i class="footer-icon fab fa-youtube"></i> Youtube</a></li>
                            </ul>
                        </div>
                        <div class="grid__column-2pe">
                            <h3 class="footer-heading">Về Chúng Tôi</h3>
                            <ul class= "footer-list">
                                <li><a href="">Giới thiệu</a></li>
                                <li><a href="">Các chi nhánh</a></li>
                                <li><a href="">Liên hệ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="footer-sub">
                    <div class="footer-sub-img">
                        <img src="./assets/img/logomatpet.png" alt="logo">
                    </div>
                    <div class="footer-sub-text">
                        <div class="footer-sub-link">
                            <a href="">Chính sách</a> -- <a href="">Terms & Conditions</a> -- <a href="">Cookies</a> -- <a href="">Blog</a> -- <a href="">Thông tin</a> -- <a href="">Site Map</a>
                        </div>
                        <p>@2021 - Design by: Zero Team</p>
                    </div>
                </div>
            </div>

    <!-- <div class="footer-bottom">
        <div class="container">
            <div class="row">
              {!! getConfigValueFromSettingTable('footer_information') !!}
            </div>
        </div>
    </div> -->

</footer><!--/Footer-->
