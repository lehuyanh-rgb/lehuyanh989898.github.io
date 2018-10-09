    <style type="text/css">
        span.error p{width: auto; padding: 0 0 0 120px; color: red; font-size: 90%; margin-left:270px; margin-bottom: -5px;margin-top: 10px;}
        .row.hidden {display: none;}
        img#blah {
            margin-left: 122px;
            margin-top: 10px;
        }
    </style>
    <form id='form_add_product' action="" method="post" enctype="multipart/form-data">
  <div class="modal fade" id="addProduct" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content edit-ajax">

        <div class="modal-body">

                <h5 class="card-title text-center">Thêm sản phẩm</h5>

                             <div class="row mb-3 align-items-center">
                    <div class="col-lg-3 col-md-12 text-right">
                        <span>Tên</span>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <input type="text" data-toggle="tooltip" class="form-control" id="add_ten_san_pham" placeholder="Nhập tên sản phẩm" name="add_ten_san_pham" value="">
                        
                    </div>
                    <span class="error"><?php echo form_error('ten_san_pham'); ?></span>
                    
                </div>
                <div class="form-group row mb-3 align-items-center">
                    <label class="col-lg-3 col-md-12 text-right">Hình ảnh</label>
                    <div class="col-lg-8 col-md-12">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="add_hinh" onchange="readURL(this);" name="add_hinh">
                            <script type="text/javascript">
                                function readURL(input) {
                                  if (input.files && input.files[0]) {
                                    var reader = new FileReader();
                                    reader.onload = function (e) {
                                      $('#blah')
                                        .attr('src', e.target.result)
                                        .width(100)
                                        .height(100);
                                    };
                                    $('#add_title_image').html(input.files[0].name.slice(0, 30)+'...');
                                    reader.readAsDataURL(input.files[0]);
                                  }
                                }
                            </script>                                                        
                            <label class="custom-file-label" for="validatedCustomFile" id="add_title_image">Chọn hình ảnh...</label>
                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <img src="<?php echo base_url()."assets/admin/images/background/no-image.png"?>" id="blah" alt="no Image" width="130" height="130">
                    </div>
                </div>

                <div class="row mb-3 align-items-center">
                    <div class="col-lg-3 col-md-12 text-right">
                        <span>Danh mục</span>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <select class="select2 form-control custom-select select2-hidden-accessible form-control" id="add_parent_cate" name="add_parent_cate">
                            <option disabled selected>---Chọn danh mục sản phẩm---</option>
                            <?php foreach ($list as $value): ?>
                                <option value="<?= $value['ma_loai'] ?>"><?= $value['ten_loai'] ?></option>
                            <?php endforeach ?>
                            
                        </select>
                    </div>
                </div>
                
                <div class="row mb-3 align-items-center hidden" id="add_row_child_cate" name="add_row_child_cate">
                   <!-- <div class="col-lg-3 col-md-12 text-right">
                       <span>Loại sản phẩm</span>
                   </div>
                   <div class="col-lg-8 col-md-12">
                       <select class="select2 form-control custom-select select2-hidden-accessible form-control" name="add_ma_loai" id="child_cate">
                           <option disabled selected>---Chọn loại sản phẩm---</option>
                           <option>A</option>
                           <option>B</option>
                           
                       </select>
                   </div> -->
                </div>

                <div class="row mb-3 align-items-center">
                    <div class="col-lg-3 col-md-12 text-right">
                        <span>Giá tiền</span>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="5.000" aria-describedby="basic-addon2" name="add_don_gia" id="add_don_gia">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">đ</span>
                            </div>
                        </div>
                    </div>
                     <span class="error"><?php echo form_error('don_gia'); ?></span>
                </div>

                <div class="row mb-3 align-items-center">
                    <div class="col-lg-3 col-md-12 text-right">
                        <span>Mô tả tóm tắt</span>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <textarea class="form-control" name="add_mo_ta_tom_tat" id="add_mo_ta_tom_tat"></textarea>
                    </div>
                </div>

            </div>

            <div class="border-top" style="margin: auto">
               <div class="card-body">
                   <input type="submit" class="btn btn-success" value="Thêm" id="add_product" name="add"></input>
                   <button type="button" class="btn btn-default" data-dismiss="modal">Thoát</button>
               </div>
           </div>
<!--         </div> 
    </div> -->


        </div> <!-- end body -->

      </div> 
      
    </div>
  </div>
  </form>


