 <!-- Footer -->
 <div class="logo-page">
            <img src="./assets/img/mona.jpg" alt="">
        </div>
        <!-- quote -->
        <div class="qoute">
            <p class="margin-r20"> "Công ty Cổ Phần MONA Việt Nam Giấy phép kinh doanh số 0107875555 do sở kế hoạch và đầu tư thành phố Hồ Chí Minh cấp ngày 06/06/2016

Văn phòng HCM: 319 - C16 Lý Thường Kiệt, phường 15, quận 11, TP. HCM

Hotline :1900 636 648 | Email: mon@mona.media"
            </p>
        </div>
<div id="footer">
            <div class="footer">
                <div class="blog margin-r20 ">
                    <h4>THÔNG TIN CÔNG TY </h4>
                    <div class="callout ">
                        <ul>
                            <li>Công ty Cổ Phần MONA Việt Nam Giấy phép kinh doanh số 0107875555 do sở kế hoạch và đầu tư thành phố Hồ Chí Minh cấp ngày 06/06/2016</li>
                            <li>Văn phòng HCM: 319 - C16 Lý Thường Kiệt, phường 15, quận 11, TP. HCM</li>
                           
                        </ul>
                    </div>

                    <hr>
                    <h4>EMAIL</h4>
                    <div class="callout ">
                        <ul>
                            <li>Đặt hàng: <a href="mailto:sales@organica.vn"> mon@mona.media</a></li>
                            <li>Hợp tác: <a href="mailto:organica@organica.vn"> demonhunterg@gmail.com</a></li>
                        </ul>
                    </div>

                    <h4>ĐƯỜNG DÂY NÓNG</h4>
                    <div class="callout ">
                        <ul>
                            <li><span style="text-decoration: underline;"><span style="color: #0000ff; text-decoration: underline;">&nbsp;Hotline :1900 636 648</span></span>&nbsp;</li>
                        </ul>
                    </div>
                </div>

                <div class="popular">
                    <div>
                        <h3> HỆ THỐNG CỬA HÀNG </h3>
                            <p>
                                
                                <span class="item-popular"> Chi nhánh 1 : 123 Võ Văn Ngân </span>
                                
                                <span class="item-popular"> Chi nhánh 2 : 23 Nguyễn Thị Minh Khai </span>
                                
                                <span class="item-popular"> Chi nhánh 3 : 17 Cách Mạng Tháng 8 </span>
                                
                                <span class="item-popular"> Chi nhánh 4 : 127 Lê Văn Việt </span>
                            </p>
                    </div>

                    <div class="login-free">
                        <p>Đăng kí nhận khuyến mãi</p>

                        <input type="email" name="email" placeholder="Nhập Email nhận thông tin khuyến mãi" value="">
                        <button>Gửi</button>
                        
                    </div>
                    
                    
                </div>
            </div>
        </div>

</body>
    <script type="text/javascript">
 const imgItem = document.querySelectorAll(".aspect-ratio-169 img")
 const imgItemContainer = document.querySelector(".aspect-ratio-169")
 const dotItem = document.querySelectorAll(".dot")
 let index = 0;
 let imgLeng = imgItem.length
 imgItem.forEach(function(image,index){
     image.style.left = index*100 + "%"
     dotItem[index].addEventListener("click",function(){
     slideRun (index)
     })
 })
 function slider (){
     index++;
     if(index >= imgLeng){index=0}
   
     slideRun (index)
 }
 function slideRun (index) {
     imgItemContainer.style.left = "-" + index*100 + "%"
     const dotActive = document.querySelector(".active")
     dotActive.classList.remove("active")
     dotItem[index].classList.add("active");
 }
 
 setInterval (slider,5000)




const toP = document.querySelector(".top")
window.addEventListener("scroll",function(){
    const X = this.pageYOffset;
  if(X>1){toP.classList.add("active")}
  else {
      toP.classList.remove("active")
  }
}) 
                        
    </script>
</html>    