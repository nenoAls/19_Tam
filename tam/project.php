<?php include "includes/header.php" ?>

<div class="container m-4">
    <div class="border mx-auto p-4" style="">
        <h4 class="h2 text-center text-success">بناء فندق</h4>
        <ul class="list-inline">
          <li class="list-inline-item h5">اسم القائم على المشروع:</li>
          <li class="list-inline-item text-secondary h6">محمد عبدالله الغامدي</li>
        </ul>
        <ul class="list-inline">
          <li class="list-inline-item h5">الجهات ذات العلاقة:</li>
          <li class="list-inline-item text-secondary h6">شركة المياه،</li>
          <li class="list-inline-item text-secondary h6">وزارة الاسكان،</li>
          <li class="list-inline-item text-secondary h6">شركة المقاولات الاولى</li>
        </ul>
        <ul class="list-inline">
          <li class="list-inline-item h5">تاريخ البداية:</li>
          <li class="list-inline-item text-secondary h6">١٤٣٩/٥/٢١ هـ</li>
        </ul>
        <ul class="list-inline">
          <li class="list-inline-item h5">تاريخ الانتهاء:</li>
          <li class="list-inline-item text-secondary h6">١٤٣٩/١٠/٢٩ هـ</li>
        </ul>
        <ul class="list-inline">
          <li class="list-inline-item h5">إحداثيات المشروع:</li>
          <li class="list-inline-item text-secondary h6">21.185221, 40.221342</li>
        </ul>
           <form action="تقرير بناء فندق.pdf" method="get">
               <button type="submit" class="btn btn-outline-info">انشاء تقرير PDF</button>
               <button class="btn btn-outline-warning float-right">تعديل البيانات</button>
           </form>
            
    </div>
</div>



<?php include "includes/footer.php" ?>