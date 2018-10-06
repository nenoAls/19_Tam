<?php include "includes/header.php" ?>

<div class="container">
    <div class="border m-4 p-3 mx-auto bg-white" style="max-width: 40rem">
        <h4 class="h4 text-center text-secondary">إضافة مشروع</h4>
        <form action="">
            <div class="form-group" style="max-width: 20rem;">
                <label for="">اسم المشروع:</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group" style="max-width: 13rem;">
               <label>الجهات ذات العلاقة:</label>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                  <label class="form-check-label text-secondary" for="defaultCheck1">
                    وزارة الداخلية
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                  <label class="form-check-label text-secondary" for="defaultCheck1">
                    وزارة الخارجية
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                  <label class="form-check-label text-secondary" for="defaultCheck1">
                    أمانة جدة
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                  <label class="form-check-label text-secondary" for="defaultCheck1">
                    شركة المياه
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                  <label class="form-check-label text-secondary" for="defaultCheck1">
                    شركة الكهرباء
                  </label>
                </div>
            </div>
            <div class="form-group" style="max-width: 13rem;">
                <label for="">تاريخ البداية:</label>
                <input type="date" class="form-control">
            </div>
            <div class="form-group" style="max-width: 13rem;">
                <label for="">تاريخ الانتهاء:</label>
                <input type="date" class="form-control">
            </div>
            <div class="form-group" style="max-width: 13rem;">
                <label for="">إحداثيات المشروع:</label>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text">X</div>
                </div>
                <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="21.350799">
              </div>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text">Y</div>
                </div>
                <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="39.787803">
              </div>
              </div>
            <div class="form-group" style="max-width: 13rem;">
                <label for="">اسم القائم على المشروع:</label>
                <input type="text" class="form-control">
            </div>
            <button class="btn btn-outline-success block">إنشاء مشروع</button>
        </form>
    </div>
</div>


<?php include "includes/footer.php" ?>