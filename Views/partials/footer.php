</div>
<!-- content-wrapper ends -->
<!-- partial:partials/_footer.html -->
<footer class="footer">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2023 <a href="https://www.bootstrapdash.com/" target="_blank">BootstrapDash</a>. All rights reserved.</span>
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
    </div>
</footer>
<!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="../../src/assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="../../src/assets/vendors/chart.js/chart.umd.js"></script>
<script src="../../src/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="../../src/assets/js/off-canvas.js"></script>
<script src="../../src/assets/js/misc.js"></script>
<script src="../../src/assets/js/settings.js"></script>
<script src="../../src/assets/js/todolist.js"></script>
<script src="../../src/assets/js/jquery.cookie.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="../../src/assets/js/dashboard.js"></script>
<!-- End custom js for this page -->

<script>
$(document).ready(function() {
//   // إزالة الكلاس "active" من جميع الروابط
//   $('a.nav-link').removeClass('active');
//   $('li.nav-item').removeClass('active');
//   // إزالة الكلاس "show" من جميع عناصر القائمة المنسدلة
//   $('.collapse').removeClass('show');

$('.sidebar .nav li.navy').on('click', function() {
    console.log('50');

    // إزالة الكلاس "active" من جميع الروابط
    // إضافة الكلاس "active" إلى الرابط الحالي الذي تم النقر عليه
    $(this).addClass('active');
    console.log(' 10');

    // إزالة الكلاس "show" من جميع عناصر القائمة المنسدلة
    // إضافة الكلاس "show" إلى القائمة المنسدلة المتعلقة بالرابط الحالي
    $(this).closest('.collapse').addClass('show');

    // طباعة رسالة في وحدة التحكم
    console.log('تم تنفيذ الكود بنجاح!');
  });
  // تفعيل الحدث على الروابط
  $('.sidebar .nav.sub-menu .nav-item .nav-link').on('click', function() {
    console.log('50');

    // إزالة الكلاس "active" من جميع الروابط
    // إضافة الكلاس "active" إلى الرابط الحالي الذي تم النقر عليه
    $(this).addClass('active');
    console.log(' 10');

    // إزالة الكلاس "show" من جميع عناصر القائمة المنسدلة
    // إضافة الكلاس "show" إلى القائمة المنسدلة المتعلقة بالرابط الحالي
    $(this).closest('.collapse').addClass('show');

    // طباعة رسالة في وحدة التحكم
    console.log('تم تنفيذ الكود بنجاح!');
  });
});


</script>
</body>
</html>


