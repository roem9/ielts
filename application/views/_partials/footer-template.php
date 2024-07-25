
</div>
                        </div>
                        <?php $this->load->view("_partials/footer-bar")?>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- tambahan  -->
    <div class="modal modal-blur bg-danger" id="alertModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Alert</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Leaving the worksheet is not allowed. You'll lose your progress and your test result will be unvalid</p>
                    <p>You will lose your progress in <span id="count">10</span> seconds</p>
                </div>
                <div class="modal-footer">
                <div class="d-flex justify-content-end">
                    <button type="button" class="btn me-auto mr-3 btn-primary" data-bs-dismiss="modal">Stay on the Worksheet</button>
                </div>
            </div>
            </div>
        </div>
    </div>

    <?php  
        if(isset($js)) :
            foreach ($js as $i => $js) :?>
                <script src="<?= base_url()?>assets/myjs/<?= $js?>"></script>
                <?php 
            endforeach;
        endif;    
    ?>

<?php $this->load->view("_partials/footer")?>

<script>
    // tambahan 
    var start = false;

    // localStorage
    var audioArray = [];

    $(document).ready(function() {
        // localStorage digunakan untuk menghitung lama peserta meninggalkan page
        let now = new Date();
        let hours = now.getHours() * 60 * 60;
        let minutes = now.getMinutes() * 60;
        let seconds = now.getSeconds();
        let totalTime = parseInt(hours + minutes + seconds);

        if(totalTime - localStorage.getItem('currentTime') >=  <?= $time_reload['value']?>){
            localStorage.clear();
        }
        // localStorage digunakan untuk menghitung lama peserta meninggalkan page


        // localStorage menghitung waktu sekarang
        if (!localStorage.getItem('currentTime')) {
            updateTimeInLocalStorage();
        }
        
        setInterval(updateTimeInLocalStorage, 1000);
        // localStorage menghitung waktu sekarang

        // localStorage jumlah reload dan proses yang terjadi ketika reload
        let reloadCount = localStorage.getItem('reload');
    
        if (reloadCount === null) {
            // Jika tidak ada nilai localStorage reload, atur ke 3
            localStorage.setItem('reload', <?= $reload_page['value']?>);
        } else {
            if(localStorage.getItem('sesi')){
                // Jika ada nilai localStorage reload, kurangi 1
                reloadCount = parseInt(reloadCount);
                localStorage.setItem('reload', reloadCount - 1);
            }

            // Hapus localStorage jika reload = 0
            if (localStorage.getItem('reload') < 0) {
                localStorage.clear();
                localStorage.setItem('reload', <?= $reload_page['value']?>);
            }
        }
        // localStorage jumlah reload dan proses yang terjadi ketika reload
        
        // localStorage jika data sudah berhasil diinput maka lakukan clear storage
        <?php if( $this->session->flashdata('pesan') ) : ?>
            localStorage.clear();
        <?php endif;?>
        // localStorage jika data sudah berhasil diinput maka lakukan clear storage

        // localStorage untuk menyimpan semua hasil input
        $('form input, form select, form textarea').on('input change', function() {
            // Simpan nilai elemen ke localStorage
            localStorage.setItem($(this).attr('name'), $(this).val());
        });
        // localStorage untuk menyimpan semua hasil input

        // localStorage untuk mengambil semua hasil input
        $('form input:not([type="radio"]), form select, form textarea').each(function() {
            // Ambil nilai dari localStorage berdasarkan id elemen
            const storedValue = localStorage.getItem($(this).attr('name'));
            if (storedValue !== null) {
                // Setel nilai elemen dari localStorage jika ada
                $(this).val(storedValue);
            }
        });
        // localStorage untuk mengambil semua hasil input

        // localStorage untuk mengambil semua hasil input jawaban
        for (let i = 0; i < localStorage.length; i++) {
            const key = localStorage.key(i);
            
            // Periksa apakah kunci mengandung kata 'jawaban_sesi_'
            if (key.includes('jawaban_')) {
                const value = localStorage.getItem(key);
                
                // Temukan elemen form yang sesuai dengan kunci (name attribute)
                // Misalnya, jika key adalah 'jawaban_sesi_1', maka cari elemen dengan name='jawaban_sesi_1[]'
                // atau sesuaikan dengan struktur name attribute Anda
                const $element = $(`[name="${key}"]`);
                
                // Periksa apakah elemen ditemukan
                if ($element.length > 0) {
                    // Setel nilai elemen form dari localStorage
                    $element.val(value);

                    var radios = $(`[data-id="${key}"]`) // list of radio buttons
                    for(var r=0;r<radios.length;r++){
                        if(radios[r].value == value){
                            radios[r].checked = true; // marking the required radio as checked
                        }
                    }

                }
            }
        }
        // localStorage untuk mengambil semua hasil input jawaban

        // localStorage mengatur semua yang terjadi jika terset localStorage item
        if(localStorage.getItem('sesi')){
            let id = localStorage.getItem('sesi');
            start = true;

            $("#login").hide();
            $("#soal_tes").show();
            $(".session").hide();
            $("."+id).show();

            // audio 
            if(localStorage.getItem('audioArray') && localStorage.getItem('audioTime')){

                // Retrieve the array from localStorage
                const storedAudioArray = localStorage.getItem('audioArray');
    
                // Parse the JSON string back into a JavaScript array
                const storedAudio = JSON.parse(storedAudioArray) || []; // Initialize as empty array if no data found
    
                audioArray = storedAudio;
    
                // Get the last item from the array
                const lastItem = storedAudio[storedAudio.length - 1];
    
                storedAudio.forEach(audio => {
                    if(audio != lastItem){
                        $(`button[data-id="${audio}"]`).hide();
                    }
                });
    
                const audioElement = $('#audio-'+lastItem)[0]; // Select audio element by ID
    
                const audioTime = localStorage.getItem('audioTime');
                audioElement.currentTime = audioTime;
            }

            if(id != 'transisi-sesi-1' && id != 'transisi-sesi-2' && id != 'transisi-sesi-3'){
                sec = localStorage.getItem('time');
                countDiv = document.getElementById("waktu"),
                secpass,
                countDown = setInterval(function () {
                    'use strict';
                    secpass(id);
                }, 1000);
            } else {
                $(".navbar-waktu").hide();
            }

            $('#count-textarea-1').text(localStorage.getItem('word-text-1'));
            $('#count-textarea-2').text(localStorage.getItem('word-text-2'));
        }
        // localStorage mengatur semua yang terjadi jika terset localStorage item

        $(document).mouseleave(function () {
            showAlertWithCountdown(10)
        });

        $(document).mouseenter(function () {
            returnWorkSheet()
        });

        $("#textarea-1").on('keyup', function(e) {
            var words = $.trim(this.value).length ? this.value.match(/\S+/g).length : 0;
            // if (words <= 150) {
                $('#count-textarea-1').text(words);
            //     $('#count-left-1').text(150-words)
            // }else{
            //     // Split the string on first 200 words and rejoin on spaces
            //     var trimmed = $(this).val().split(/\s+/, 150).join(" ");
            //     // Add a space at the end to keep new typing making new words
            //     $(this).val(trimmed + " ");
            // }

            localStorage.setItem('word-text-1', words);
        });

        $("#textarea-2").on('keyup', function(e) {
            var words = $.trim(this.value).length ? this.value.match(/\S+/g).length : 0;
            // if (words <= 250) {
                $('#count-textarea-2').text(words);
            //     $('#count-left-2').text(250-words)
            // }else{
            //     // Split the string on first 200 words and rejoin on spaces
            //     var trimmed = $(this).val().split(/\s+/, 250).join(" ");
            //     // Add a space at the end to keep new typing making new words
            //     $(this).val(trimmed + " ");
            // }
            localStorage.setItem('word-text-2', words);
        });
        
        $('.form-autosize').on('input', function () {
            this.style.width = '60px';
                
            this.style.width = (this.scrollWidth) + 'px';
        });

        $(".btnTransisiSatu").click(function(){
            var first_name = $("[name='first_name']").val();
            var last_name = $("[name='last_name']").val();
            var email = $("[name='email']").val();
            var id_tes = $("[name='id_tes']").val();

            if(first_name == "" || last_name == "" || email == ""){
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Lengkapi data terlebih dahulu',
                })
            } else {

                // cek email 
                var email = ajax(url_base+"soal/cek_email", "POST", {id_tes: id_tes, email: email});

                if(email == 1){
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Email Anda telah digunakan',
                    })
                } else {
                    $("#login").hide();
                    $("#soal_tes").show();
                    $(".session").hide();
                    $(".navbar-waktu").hide();
                    $(".transisi-sesi-1").show();

                    // tambahan 
                    start = true;

                    // localStorage menympan data sesi
                    localStorage.setItem('sesi', 'transisi-sesi-1');
                    // localStorage menympan data sesi

                    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                        $([document.documentElement, document.body]).animate({
                            scrollTop: $("#elementtoScrollToID").offset().top
                        }, 1000);
                    }
                }
            }

        })

        $(".btnTransisiDua").click(function(){
            Swal.fire({
                icon: 'question',
                html: 'Once you close, you cannot open the previous section',
                showCloseButton: true,
                showCancelButton: true,
                confirmButtonText: 'Yes',
                cancelButtonText: 'No'
            }).then(function (result) {
                if (result.value) {
                    if (typeof countDown !== 'undefined' && countDown !== null) {
                        clearInterval(countDown);
                    }

                    $(".session").hide();
                    $(".navbar-waktu").hide();
                    $(".transisi-sesi-2").show();

                    // localStorage menympan data sesi
                    localStorage.setItem('sesi', 'transisi-sesi-2');
                    // localStorage menympan data sesi

                    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                        $([document.documentElement, document.body]).animate({
                            scrollTop: $("#elementtoScrollToID").offset().top
                        }, 1000);
                    }

                    var audios = document.getElementsByTagName('audio');  
                    for(var i = 0, len = audios.length; i < len;i++){  
                        if(audios[i]){  
                            audios[i].pause();  
                        }  
                    }
                }
            })
        })

        $(".btnTransisiTiga").click(function(){
            Swal.fire({
                icon: 'question',
                html: 'Once you close, you cannot open the previous section',
                showCloseButton: true,
                showCancelButton: true,
                confirmButtonText: 'Yes',
                cancelButtonText: 'No'
            }).then(function (result) {
                if (result.value) {
                    if (typeof countDown !== 'undefined' && countDown !== null) {
                        clearInterval(countDown);
                    }

                    $(".session").hide();
                    $(".navbar-waktu").hide();
                    $(".transisi-sesi-3").show();

                    // localStorage menympan data sesi
                    localStorage.setItem('sesi', 'transisi-sesi-3');
                    // localStorage menympan data sesi

                    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                        $([document.documentElement, document.body]).animate({
                            scrollTop: $("#elementtoScrollToID").offset().top
                        }, 1000);
                    }
                }
            })
        })

        $(".btnListening").click(function(){
            Swal.fire({
                icon: 'question',
                html: 'Start the session now?',
                showCloseButton: true,
                showCancelButton: true,
                confirmButtonText: 'Yes',
                cancelButtonText: 'No'
            }).then(function (result) {
                if (result.value) {
                    $(".session").hide();
                    $(".navbar-waktu").show();
                    $(".sesi-listening").show();

                    // localStorage menympan data sesi
                    localStorage.setItem('sesi', 'sesi-listening');
                    // localStorage menympan data sesi
            
                    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                        $([document.documentElement, document.body]).animate({
                            scrollTop: $("#elementtoScrollToID").offset().top
                        }, 1000);
                    }
            
                    // clearInterval(countDown);
                    
                    sec = 40 * 60;
                    // sec = 30;
            
                    countDiv = document.getElementById("waktu"),
                    secpass,
                    countDown = setInterval(function () {
                        'use strict';
                        secpass("sesi-listening");
                    }, 1000);
                }
            })
        })

        $(".btnReading").click(function(){
            Swal.fire({
                icon: 'question',
                html: 'Start the session now?',
                showCloseButton: true,
                showCancelButton: true,
                confirmButtonText: 'Yes',
                cancelButtonText: 'No'
            }).then(function (result) {
                if (result.value) {
                    $(".session").hide();
                    $(".navbar-waktu").show();
                    $(".sesi-reading").show();

                    // localStorage menympan data sesi
                    localStorage.setItem('sesi', 'sesi-reading');
                    // localStorage menympan data sesi
            
                    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                        $([document.documentElement, document.body]).animate({
                            scrollTop: $("#elementtoScrollToID").offset().top
                        }, 1000);
                    }
            
                    if (typeof countDown !== 'undefined' && countDown !== null) {
                        clearInterval(countDown);
                    }

                    sec = 60 * 60;
                    // sec = 40;
            
                    countDiv = document.getElementById("waktu"),
                    secpass,
                    countDown = setInterval(function () {
                        'use strict';
                        secpass("sesi-reading");
                    }, 1000);
                }
            })
        })

        $(".btnWriting").click(function(){
            Swal.fire({
                icon: 'question',
                html: 'Start the session now?',
                showCloseButton: true,
                showCancelButton: true,
                confirmButtonText: 'Yes',
                cancelButtonText: 'No'
            }).then(function (result) {
                if (result.value) {
                    $(".session").hide();
                    $(".navbar-waktu").show();
                    $(".sesi-writing").show();

                    // localStorage menympan data sesi
                    localStorage.setItem('sesi', 'sesi-writing');
                    // localStorage menympan data sesi
            
                    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                        $([document.documentElement, document.body]).animate({
                            scrollTop: $("#elementtoScrollToID").offset().top
                        }, 1000);
                    }
            
                    if (typeof countDown !== 'undefined' && countDown !== null) {
                        clearInterval(countDown);
                    }

                    sec = 60 * 60;
                    // sec = 40;
            
                    countDiv = document.getElementById("waktu"),
                    secpass,
                    countDown = setInterval(function () {
                        'use strict';
                        secpass("sesi-writing");
                    }, 1000);
                }
            })
        })

        $(".btnSimpan").click(function(){
            Swal.fire({
                icon: 'question',
                html: 'Finish the test?',
                showCloseButton: true,
                showCancelButton: true,
                confirmButtonText: 'Yes',
                cancelButtonText: 'No'
            }).then(function (result) {
                if (result.value) {
                    swal.fire({
                        html: '<h4>Submit your answer ...</h4>',
                        allowOutsideClick: false,
                        showConfirmButton: false,
                        onBeforeOpen: () => {
                            Swal.showLoading()
                        },
                    });

                    $(".btnSimpan").html("Saving...");
                    $(".btnSimpan").prop("disabled", true);
                    $("#formIelts").submit()
                }
            })
        })

        $('input:radio').click(function () {
            let id = $(this).data("id");
            let value = $(this).val();

            $(`[name="`+id+`"]`).val(value);
            localStorage.setItem(id, value);
        });

        for (let i = 1; i < 54; i++) {
            // var words = $( ".reading-"+i).first().text().split( /\s+/ );
            var words = $( ".reading-"+i).first().text().split(" ");
            var text = words.join( "</span> <span>" );

            text = text.replace("()", "<i>");
            text = text.replace("(*)", "</i>");

            text = text.replace("((b))", "<b>");
            text = text.replace("((/b))", "</b>");
            
            text = text.replace("((u))", "<u>");
            text = text.replace("((/u))", "</u>");

            $( ".reading-"+i ).first().html( "<span>" + text + "</span>" );
        }

        $( "span" ).on( "click", function() {
            $( this ).toggleClass( "highlight" );
            return false;
        });

        // audio
            $('.audio').on('timeupdate', function() {
                let id = $(this).data("id");
                $('#seekbar-'+id).attr("value", this.currentTime / this.duration);

                localStorage.setItem('audioTime', this.currentTime);
            });

            $(".btnAudio").click(function(){
                id = $(this).data("id");
                $("#audio-"+id)[0].play();
                $(this).hide();

                // localStorage mengatur audio
                audioArray.push(id)
                const arrayString = JSON.stringify(audioArray);
                localStorage.setItem('audioArray', arrayString);
                // localStorage mengatur audio
            })

            document.addEventListener('play', function(e){  
                var audios = document.getElementsByTagName('audio');  
                for(var i = 0, len = audios.length; i < len;i++){  
                    if(audios[i] != e.target){  
                        audios[i].pause();  
                    }  
                }  
            }, true);
        // audio 

        $("textarea").keydown(function(e) {
            if(e.keyCode === 9) { // tab was pressed
                // get caret position/selection
                var start = this.selectionStart;
                    end = this.selectionEnd;

                var $this = $(this);

                // set textarea value to: text before caret + tab + text after caret
                $this.val($this.val().substring(0, start)
                            + "\t"
                            + $this.val().substring(end));

                // put caret at right position again
                this.selectionStart = this.selectionEnd = start + 1;

                // prevent the focus lose
                return false;
            }
        });
    })

    function secpass(id) {
        'use strict';
        var min = Math.floor(sec / 60),
        remSec  = sec % 60;
        if (remSec < 10) {
            remSec = '0' + remSec;
        }
        if (min < 10) {
            min = '0' + min;
        }

        countDiv.innerHTML = min + ":" + remSec;
        if (sec > 0) {
            sec = sec - 1;

            // localStorage store data waktu
            localStorage.setItem('time', sec);
            // localStorage store data waktu
        } else {
            if(id == 'sesi-listening'){
                if (typeof countDown !== 'undefined' && countDown !== null) {
                    clearInterval(countDown);
                }

                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Time out',
                    allowOutsideClick: false,
                }).then(function (result) {
                    
                    $(".session").hide();
                    $(".navbar-waktu").hide();
                    $(".transisi-sesi-2").show();

                    // localStorage menympan data sesi
                    localStorage.setItem('sesi', 'transisi-sesi-2');
                    // localStorage menympan data sesi

                    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                        $([document.documentElement, document.body]).animate({
                            scrollTop: $("#elementtoScrollToID").offset().top
                        }, 1000);
                    }
                    
                })
            } else if(id == 'sesi-reading'){
                if (typeof countDown !== 'undefined' && countDown !== null) {
                    clearInterval(countDown);
                }

                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Time out',
                    allowOutsideClick: false,
                }).then(function (result) {
                    
                    $(".session").hide();
                    $(".navbar-waktu").hide();
                    $(".transisi-sesi-3").show();

                    // localStorage menympan data sesi
                    localStorage.setItem('sesi', 'transisi-sesi-3');
                    // localStorage menympan data sesi

                    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                        $([document.documentElement, document.body]).animate({
                            scrollTop: $("#elementtoScrollToID").offset().top
                        }, 1000);
                    }
                    
                })
            } else if(id == 'sesi-writing'){
                if (typeof countDown !== 'undefined' && countDown !== null) {
                    clearInterval(countDown);
                }

                // scroll to top 
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    $([document.documentElement, document.body]).animate({
                        scrollTop: $("#elementtoScrollToID").offset().top
                    }, 1000);
                }

                swal.fire({
                    title: 'Time out',
                    html: '<h4>Submit your answer ...</h4>',
                    allowOutsideClick: false,
                    showConfirmButton: false,
                    onBeforeOpen: () => {
                        Swal.showLoading()
                    },
                });

                $(".btnSimpan").html("Saving...");
                $(".btnSimpan").prop("disabled", true);
                $(".btnBack").prop("disabled", true);
                $("#formIelts").submit()
            }
        }
    }

    // tambahan 
    let countdownInterval;

    function showAlertWithCountdown(seconds) {
        if(start){
            clearInterval(countdownInterval);
            $("#count").html(`<b>10</b>`);
            $("#alertModal").modal('show');
            countdownInterval = setInterval(() => {
                $("#count").html(`<b>${seconds}</b>`);
                seconds--;
    
                if(seconds === 0){
                    clearInterval(countdownInterval);
                    location.reload();
                }
            }, 1000);
        }
    }

    function returnWorkSheet() {
        if(start){
            // $("#alertModal").modal('hide');
            clearInterval(countdownInterval);
        }
    }

    // localStorage function untuk menentukan current time
    function getCurrentTime() {
        let now = new Date();
        let hours = now.getHours() * 60 * 60;
        let minutes = now.getMinutes() * 60;
        let seconds = now.getSeconds();
        return parseInt(hours + minutes + seconds);
    }

    function updateTimeInLocalStorage() {
        let currentTime = getCurrentTime();
        localStorage.setItem('currentTime', currentTime);
    }
    // localStorage function untuk menentukan current time

</script>