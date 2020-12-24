

<?php $__env->startSection('content'); ?>
<style type="text/css">
    .form-contact{
        border: thin solid ;
    }
</style>
    <!--Section: Contact v.2-->
<section class="mb-4">
     <!-- Success message -->
        <?php if(Session::has('success')): ?>
            <div class="alert alert-success">
                <?php echo e(Session::get('success')); ?>

            </div>
        <?php endif; ?>

<div class="container">
    <h2 class="h1-responsive font-weight-bold text-center my-4">Liên Hệ Với Chúng Tôi</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Vui lòng điền thông tin vào các trường bên dưới chúng tôi sẽ sớm liên hệ với bạn. Thanks & Best Regards!</p>
    <div class="row">
        <div class="col">
           <form class="form-contact " action="" method="post" action="<?php echo e(route('contact.store')); ?>">
                <?php echo csrf_field(); ?>
                <!--Grid row-->
                

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="name" class="">Họ và tên</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Nhập họ tên...">
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="email" class="">Địa chỉ email</label>
                            <input type="text" id="email" name="email" class="form-control" placeholder="Nhập email...">
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="phone" class="">Điện thoại</label>
                            <input type="text" id="phone" name="phone" class="form-control" placeholder="Nhập số điện thoại...">
                        </div>
                    </div>
                    <!--Grid column-->

                
                <!--Grid row-->

                <!--Grid row-->
              
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <label for="subject" class="">Tiêu đề</label>
                            <input type="text" id="subject" name="subject" class="form-control" placeholder="Nhập tiêu đề...">
                        </div>
                    </div>
                
                <!--Grid row-->

                <!--Grid row-->
               

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <label for="message">Nội dung</label>
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" placeholder="Nhập nội dung"></textarea>
                        </div>

                    </div>
              
                <!--Grid row-->

                <button type="submit" name="send" class="btn btn-info btn-block">Gửi</button>  
            </form>
            
        
        </div>
        <div class="col all-center">
            <ul class="list-unstyled mb-0">
                <li><img src="<?php echo e(asset('/public/images/icon/address.svg')); ?>" width="50px" /></i>
                    <p>Long Xuyên, An Giang, Việt Nam</p>
                </li>

                <li><img src="<?php echo e(asset('/public/images/icon/phone.svg')); ?>" width="50px" /></i>
                    <p><a href="tel:094117339">+ 84 941 173 39</a></p>
                </li>

                <li><img src="<?php echo e(asset('/public/images/icon/email.svg')); ?>" width="50px" /></i>
                    <p><a href="mailto:nmtriet_18pm@student.agu.edu.vn">nmtriet_18pm@student.agu.edu.vn</a></p>
                </li>
            </ul>
        </div>
    </div>
</div>



























    <!--Section heading-->
    

    <div class="row">

        <!--Grid column-->
        
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-8 mb-md-0 mb-5">
            
        <!--Grid column-->

    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp\www\CNWeb\resources\views/contact.blade.php ENDPATH**/ ?>