

<?php $__env->startSection('content'); ?>

<div>
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/main3.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Forms</h1>
                <ul class="bread-crumb clearfix">
                    
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Property Forms Section -->
    <section class="property-filter-section" style="background: #2e2e2e">
        <div class="auto-container">
            <!--MixitUp Galery-->
            <div class="mixitup-gallery">
                <div class="upper-box clearfix">
                    <div class="sec-title">
                        <span class="title">FIND AND DOWNLOAD FORMS</span>
                        <h2 style="color: #FFFFFF;">TRANSFER FORMS</h2>
                    </div>
                </div>

                <div class="row">
                    <div class="table-responsive table-striped">
                        <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col" style="color: white;">#</th>
                                <th scope="col" style="color: white;">Description</th>
                                <th scope="col" style="color: white;">Download</th>
                            </tr>
                        </thead>
                        <tbody style="color: white; font-size: 15px;">
                            <tr>
                                <th scope="row">1</th>
                                <td><a href="<?php echo e(asset('images/forms/AM-Form.pdf')); ?>" download style="color:#fff;">Associate Membership Form</a></td>
                                <td style="font-size: 25px;"><a href="<?php echo e(asset('images/forms/AM-Form.pdf')); ?>" download><span class="la la-download"></span></a></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td><a href="<?php echo e(asset('images/forms/NDC-Final.pdf')); ?>" download style="color:#fff;">No Demand Certificate Form</a></td>
                                <td style="font-size: 25px;"><a href="<?php echo e(asset('images/forms/NDC-Final.pdf')); ?>" download><span class="la la-download"></span></a></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td><a href="<?php echo e(asset('images/forms/Verification-of-Property-Final.pdf')); ?>" download style="color:#fff;">Verification of Plot/Property</a></td>
                                <td style="font-size: 25px;"><a href="<?php echo e(asset('images/forms/Verification-of-Property-Final.pdf')); ?>" download><span class="la la-download"></span></a></td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td><a href="<?php echo e(asset('images/forms/Final-Application-of-Possession-of-Plot-Site-Plan-15-11-19.pdf')); ?>" download style="color:#fff;">Application for possession of plot (Site Plan)</a></td>
                                <td style="font-size: 25px;"><a href="<?php echo e(asset('images/forms/Final-Application-of-Possession-of-Plot-Site-Plan-15-11-19.pdf')); ?>" download><span class="la la-download"></span></a></td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td><a href="<?php echo e(asset('images/forms/Final-Authority-Letter-for-Dues-13-11-19.pdf')); ?>" download style="color:#fff;">Authority Letter for Dues</a></td>
                                <td style="font-size: 25px;"><a href="<?php echo e(asset('images/forms/Final-Authority-Letter-for-Dues-13-11-19.pdf')); ?>" download><span class="la la-download"></span></a></td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Forms Section -->
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.ads', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\22-10-20\defenceEstate1\resources\views/ads/forms.blade.php ENDPATH**/ ?>