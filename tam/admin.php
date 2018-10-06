<?php include "includes/header.php" ?>

<div class="container">
   <div class="p-4">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">المشاريع</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">التقارير</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">الإجتماعات</a>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
          <h4 class="h2 text-center m-3 text-secondary">المشاريع القائمة</h4>
          <h4 class="h4 text-success">المشاريع المستمرة</h4>
          <table class="table mt-3 mb-5 table-hover">
              <thead>
                  <tr>
                      <th>#</th>
                      <th>المشروع</th>
                      <th>نسبة الاتمام</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <th scope="row">١</th>
                      <td><a href="project.php">بناء فندق</a></td>
                      <td><div class="progress">
                          <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">90%</div>
                      </div></td>
                  </tr>
                  <tr>
                      <th scope="row">٢</th>
                      <td>انشاء جسر</td>
                      <td><div class="progress">
                          <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">85%</div>
                      </div></td>
                  </tr>
                  <tr>
                      <th scope="row">٣</th>
                      <td>حفر نفق</td>
                      <td><div class="progress">
                          <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">80%</div>
                      </div></td>
                  </tr>
              </tbody>
          </table>
          <h4 class="h4 text-warning mt-4">المشاريع المتعثرة</h4>
          <table class="table table-hover mt-3">
              <thead>
                  <tr>
                      <th>#</th>
                      <th>المشروع</th>
                      <th>نسبة الاتمام</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <th scope="row">١</th>
                      <td>قطار مترو جدة</td>
                      <td><div class="progress">
                          <div class="progress-bar bg-warning" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                      </div></td>
                  </tr>
                  <tr>
                      <th scope="row">٢</th>
                      <td>انشاء انابيب مياه</td>
                      <td><div class="progress">
                          <div class="progress-bar bg-warning" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                      </div></td>
                  </tr>
                  <tr>
                      <th scope="row">٣</th>
                      <td>انشاء مخطط بنائي</td>
                      <td><div class="progress">
                          <div class="progress-bar bg-danger" role="progressbar" style="width: 20%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">10%</div>
                      </div></td>
                  </tr>
              </tbody>
          </table>
      </div>
      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
          dsd
      </div>
      <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
          
      </div>
    </div>
   </div>
</div>


<?php include "includes/footer.php" ?>