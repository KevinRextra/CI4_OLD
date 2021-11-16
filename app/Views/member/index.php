<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <nav class="navbar">
            <h1>Member list</h1>
                 <form class="d-flex" action="" method="POS">
                    <input class="form-control me-2" type="search" placeholder="Search" name="search" aria-label="Search">
                    <button class="btn btn-primary" type="submit">
                         <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                          <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                         </svg>
                    </button>
               </form>      
             </nav>

            <table class="table table-bordered">
               <thead>
                    <tr>
                         <th scope="col">#</th>
                         <th scope="col">Nama</th>
                         <th scope="col">Alamat</th>
                         <th scope="col">Waktu dibuat</th>
                         <th scope="col">Waktu diupdate</th>
                         <th scope="col">Aksi</th>

                    </tr>
               </thead>
               <tbody>

                    <?php foreach($member as $d) : ?>
                    <tr>
                         <td><?= $d['id']?></td>
                         <td><?= $d['nama']?></td>
                         <td><?= $d['alamat']?></td>
                         <td><?= $d['created_at']?></td>
                         <td><?= $d['updated_at']?></td>
                         <td>
                              <a href="" class="btn btn-primary">Details</a>
                         </td>
                         
                    </tr>
                    <?php endforeach; ?>
               </tbody>
          </table>
          <?= $pager->links('member','member_page') ?>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>