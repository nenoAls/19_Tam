<?php include "includes/header.php" ?>
    
    <div class="container">				
        <div class="card mx-auto m-5" style="max-width: 35rem">
            <div class="card-body">
               <h5 class="card-title text-center">تسجيل الدخول</h5>				
                <form action="admin.php">
                  <div class="form-group">
                      <label for="userName">اسم المستخدم</label>
                      <input type="text" id="userName" class="form-control">
                      <small class="form-text text-muted">الرجاء ادخال اسم المسخدم المسجل لدى الوزارة</small>
                  </div>
                  <div class="form-group">
                      <label for="password">كلمة المرور</label>
                      <input type="password" class="form-control">
                  </div>
                  <button class="btn btn-outline-primary">دخول</button>
                </form>					
            </div>
        </div>
    </div>		

<?php include "includes/footer.php" ?>