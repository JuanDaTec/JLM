<?php headerAdmin($data); ?>   
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fas fa-circle-notch"></i> <?= $data['page_title']?></h1>
          <p>Bienvenido a JLM WorkShop</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">Espacio de trabajo</div>
          </div>
        </div>
      </div>
    </main>
<?php footerAdmin($data); ?>   