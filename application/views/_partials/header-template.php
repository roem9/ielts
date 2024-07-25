<?php $this->load->view("_partials/header")?>
    
    <form action="<?= base_url()?>soal/add_jawaban_ielts" method="post" id="formIelts">
        <div class="page page-center" id="login">
            <div class="container-tight py-4">
                <div class="card">
                    <div class="card-body">
                        <!-- <div class="text-center mt-4 mb-4">
                            <a href="javascript:void()"><img src="<?= base_url()?>/assets/img/topenglish.png" height="80" alt=""></a>
                        </div> -->
                        <?php if( $this->session->flashdata('pesan') ) : ?>
                            <div class="text-center mb-4">
                                <a href="javascript:void()"><img src="<?= base_url().'/assets/img/topenglish.png'?>" height="80" alt=""></a>
                            </div>
                            <?= $this->session->flashdata('pesan')?>
                        <?php else: ?>
                            <img src="<?= base_url()?>assets/img/poster.jpeg" alt="">
                            <div class="mb-2 mt-3">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-floating mb-3">
                                            <input type="text" name="first_name" class="form form-control required">
                                            <label for="">First Name</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-floating mb-3">
                                            <input type="text" name="last_name" class="form form-control required">
                                            <label for="">Last Name</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" name="email" class="form form-control required">
                                    <label for="">Email</label>
                                </div>
                            </div>
                            <div class="form-footer">
                                <button type="button" class="btn btn-primary w-100 btnTransisiSatu">Start</button>
                            </div>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </div>

        <!-- tambahan -->
        <div id="worksheet">
            <div class="page page-center transisi-sesi-1 session" id="transisi-sesi-1" style="display: none">
                <div class="container-tight py-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center mb-4">
                                <a href="javascript:void()"><img src="<?= base_url().'/assets/img/topenglish.png'?>" height="80" alt=""></a>
                            </div>
                            <center>
                                <p><b>First Session : LISTENING</b></p>
                                <p><i>Time : 40 Minutes</i></p>
                            </center>
                            <div class="form-footer">
                                <button type="button" class="btn btn-primary w-100 btnListening" >Start</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="page page-center transisi-sesi-2 session" id="transisi-sesi-2" style="display: none">
                <div class="container-tight py-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center mb-4">
                                <a href="javascript:void()"><img src="<?= base_url().'/assets/img/topenglish.png'?>" height="80" alt=""></a>
                            </div>
                            <center>
                                <p><b>Second Session : READING</b></p>
                                <p><i>Time : 60 Minutes</i></p>
                            </center>
                            <div class="form-footer">
                                <button type="button" class="btn btn-primary w-100 btnReading">Start</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="page page-center transisi-sesi-3 session" id="transisi-sesi-3" style="display: none">
                <div class="container-tight py-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center mb-4">
                                <a href="javascript:void()"><img src="<?= base_url().'/assets/img/topenglish.png'?>" height="80" alt=""></a>
                            </div>
                            <center>
                                <p><b>Third Session : WRITING</b></p>
                                <p><i>Time : 60 Minutes</i></p>
                            </center>
                            <div class="form-footer">
                                <button type="button" class="btn btn-primary w-100 btnWriting">Start</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="soal_tes" style="display: none">
                <div class="wrapper" id="elementtoScrollToID">
                    <div class="sticky-top">
                        <?php $this->load->view("_partials/navbar-header")?>
                    </div>
                    <div class="page-wrapper" id="">
                        <div class="page-body">
                            <div class="container-xl">
                                <input type="hidden" name="id_tes" value="<?= $id?>">