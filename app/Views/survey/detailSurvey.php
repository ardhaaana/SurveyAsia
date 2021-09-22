<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>


<div class="container mt-3 mb-5">
    <div class="row mb-3">
        <div class="col">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Pertanyaan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/survey/detailSurveyResponden/<?= $survey->id_survey ?>"" ">Responden</a>
                </li>

            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <?php if (session()->getFlashData('success')) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong> <?= session()->getFlashData('success') ?></strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>
            <div class="card">
                <div class="card-header">
                    <h3><?= $survey->judul ?></h3>
                </div>
                <div class="card-body">
                    <form action="/survey/edit" method="post" enctype="multipart/form-data">
                        <div class="row mb-3">
                            <input type="hidden" class="form-control" id="inputEmail3" name="id_survey" value="<?= $survey->id_survey ?>">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Judul</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputEmail3" name="judul" value="<?= $survey->judul ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Deskripsi</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="deskripsi" id="" cols="30" rows="5"><?= $survey->deskripsi ?></textarea>
                                <!-- <input type="text" class="form-control" id="inputEmail3" name="deskripsi" value="<?= $survey->deskripsi ?>"> -->
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Jumlah Responden</label>
                            <div class="col-sm-10">
                                <p class="form-control"><?= $survey->jumlah_responden ?></p>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-secondary">Edit Survey</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">

        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-md-2">
                            <h4>Pertanyaan</h4>
                        </div>
                        <div class="col-md-3">
                            <!-- Modal Tambah Pertanyaan -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Tambah Pertanyaan
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Tambah Pertanyaan</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="/pertanyaan/save" method="post" enctype="multipart/form-data">
                                                <input type="hidden" class="form-control" id="inputEmail3" name="id_survey" value="<?= $survey->id_survey ?>">
                                                <div class="row mb-3">
                                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Pertanyaan</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="inputEmail3" name="pertanyaan">
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Pertanyaan</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($pertanyaanbyIdSurvey as $p) : ?>
                                <tr>
                                    <th scope="row"><?= $p->id_survey_pertanyaan ?>.</th>
                                    <td><a href=""><?= $p->pertanyaan ?></a></td>
                                    <td><a href="">edit</a></td>
                                </tr>
                        </tbody>
                    <?php endforeach; ?>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>