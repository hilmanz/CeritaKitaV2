<div class="row">
	<div class="page-title">
    	<div class="col-md-4">
        	<h2>JOIN NOW!</h2>
        </div>
    	<div class="col-md-8">
        	<p class="page-desc">Daftar di sini untuk jadi bagian dari kontributor Cerita Kita! Kamu bisa berbagi dan juga mengekspresikan talentamu bersama dengan teman-teman lainnya. Selain itu, kamu juga bisa bertemu mentor-mentor di bidang yang kamu suka dan berkesempatan buat menangin iPad mini serta magang di Gogirl! Magazine.<br> Yuk, tunggu apa lagi!</p>
        </div>
    </div>
    
     <div class="pagecontainer">
    	<div id="errorbox" class="errorbox">
        	<p><i class="icon-report-problem"></i> Semua data wajib diisi</p>
        </div>
    	<form class="theform" action="" method="post" enctype="multipart/form-data">
        	<div class="row">
                <div class="col-md-4">
                    <label>Tipe Kontributor</label>
                </div><!-- end .col-md-4 -->
				
		
                <div class="col-md-8">
                	<div class="checkbox-row">
                        <input type="radio" name="tipe" value="writer" />
                        <span>Writer</span>
                    </div>
                	<div class="checkbox-row">
                        <input type="radio" name="tipe" value="beauty" />
                        <span>Beauty Enthusiast</span>
                    </div>
                	<div class="checkbox-row">
                        <input type="radio" name="tipe" value="graphic_designer"/>
                        <span>Graphic Designer</span>
                    </div>
                	<div class="checkbox-row">
                        <input type="radio" name="tipe" value="shotographer" />
                        <span>Photographer</span>
                    </div>
					<div class="checkbox-row">
                        <input type="radio" name="tipe" value="fashion_stylist" />
                        <span>Fashion Stylist</span>
                    </div>
					    <i>Pilih salah satu (Tipe Contributor)</i>
                </div><!-- end .col-md-8 -->
        	</div><!-- end .row -->
        	<div class="row">
                <div class="col-md-4">
                    <label>Nama</label>
                </div><!-- end .col-md-4 -->
                <div class="col-md-8">
                	<input type="text"  class="required" name="name" id='name' value="{$name}"/>
                </div><!-- end .col-md-8 -->
        	</div><!-- end .row -->
        	<div class="row">
                <div class="col-md-4">
                    <label>Alamat</label>
                </div><!-- end .col-md-4 -->
                <div class="col-md-8">
                	<input type="text"  class="required" name="alamat"  id='alamat'/>
                </div><!-- end .col-md-8 -->
        	</div><!-- end .row -->
        	<div class="row">
                <div class="col-md-4">
                    <label>No. Hp</label>
                </div><!-- end .col-md-4 -->
                <div class="col-md-8">
                	<input type="text"  class="required number" name="telp"  id='telp'/>
                    <i>Tim Cerita Kita akan mengirimkan kode unik untuk diskon 50% pembelian produk Clean and Clear FFW di Alfamart</i>
                </div><!-- end .col-md-8 -->
        	</div><!-- end .row -->
        	<div class="row">
                <div class="col-md-4">
                    <label>Email</label>
                </div><!-- end .col-md-4 -->
                <div class="col-md-8">
                	<input type="text"  class="required" name="email"  id='email'/>
                </div><!-- end .col-md-8 -->
        	</div><!-- end .row -->
        	<div class="row">
                <div class="col-md-4">
                    <label>Your Story</label>
                </div><!-- end .col-md-4 -->
                <div class="col-md-8">
                	<textarea class="required" name="story" id='story'></textarea>
                    <i>Ceritakan singkat tentang kamu, passion kamu dan kenapa kamu ingin menjadi kontributor di Cerita Kita (max 270 karakter)</i>
                </div><!-- end .col-md-8 -->
        	</div><!-- end .row -->
        	<div class="row">
                <div class="col-md-4">
                    <label>Upload File</label>
                </div><!-- end .col-md-4 -->
                <div class="col-md-8">
                	<div class="inputfile">
                        <input id="uploadFile" type="text" class="required inputfile1" readonly/>
                         <div class="file_upload">
                          	<input id="uploadBtn" type="file"  class="custom-file-input" name="resume" />
                          </div>
                    </div>
                    <i>Sertakan tulisan atau foto karya kamu (dalam bentuk Doc)</i>
                </div><!-- end .col-md-8 -->
        	</div><!-- end .row -->
        	<div class="row">
                <div class="col-md-4">
                    <label>Upload Foto Kamu</label>
                </div><!-- end .col-md-4 -->
                <div class="col-md-8">
                	<div class="inputfile">
                        <input id="uploadFileImage" type="text" class="required inputfile2" name="rsss" readonly/>
                        <div class="file_upload">
                        	<input id="uploadBtnImage" type="file"  class="custom-file-input resume2" name="resume2">
                        </div>
                    </div>
                </div><!-- end .col-md-8 -->
        	</div><!-- end .row -->
        	<div class="row">
                <div class="col-md-8">
                	<div class="checkbox-row">
                        <input type="hidden"  name="submit" value="1"/>
						 <input type="checkbox" id="myCheck" name="agree"/>
                        <span>Saya sudah membaca dan menyetujui  <a href="{$basedomain}register/termandcondition" target="_blank">Terms and Conditions</a> dari tim Cerita Kita</a></span>
						
                    </div>
                </div><!-- end .col-md-8 -->
        	</div><!-- end .row -->
        	<div class="row">
                <div class="col-md-12">
					<input type="hidden" >
					<input type="submit" name="send" id='send' class="send" style="display:none">
					 <button class="button fr okeh" id="send">SUBMIT</button>
                	<!--a href="{$basedomain}register#"  id="joinform" class="button fr okeh">SUBMIT</a-->
                </div><!-- end .col-md-8 -->
        	</div><!-- end .row -->
        </form>
    </div><!-- end .entry-detail -->
</div>