<!DOCTYPE html>
<html>

<head>
    <title>Aplikasi Informasi Jalan Rusak</title>

    <meta charset="UTF-8">
    <meta name="description" content="Clean and responsive administration panel">
    <meta name="keywords" content="Admin,Panel,HTML,CSS,XML,JavaScript">
    <meta name="author" content="Erik Campobadal">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?= base_url('public/') ?>images/logo.png">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0"
        href="<?=base_url("assets/")?>styles/shards-dashboards.1.1.0.min.css">
    <link rel="stylesheet" href="<?=base_url("assets/")?>styles/extras.1.1.0.min.css">

    <link rel="stylesheet" href="<?= base_url('public/') ?>css/uikit.min.css" />
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="<?= base_url('public/') ?>css/style.css" />
    <link rel="stylesheet" href="<?= base_url('public/') ?>css/search.css" />
    <link rel="stylesheet" href="<?= base_url('public/') ?>css/notyf.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="<?= base_url('public/') ?>js/uikit.min.js"></script>
    <script src="<?= base_url('public/') ?>js/uikit-icons.min.js"></script>
    <!-- leaflet koneksi -->
    <link rel="stylesheet" href="<?= base_url('public/') ?>leaflet/leaflet.css" />
    <script src="<?= base_url('public/') ?>leaflet/leaflet.js"></script>
    <!-- leaflet koneksi -->
    <!-- Pencarian GIS -->

    <link rel="stylesheet" href="<?= base_url('public/') ?>leaflet-cari/src/leaflet-search.css" />
    <script src="<?= base_url('public/') ?>leaflet-cari/src/leaflet-search.js"></script>
    <!-- Pencarian GIS -->

    <style typle="text/css">
    #mapid {
        height: 700px;
    }
    </style>
</head>

<body>
    <div class="uk-navbar-container tm-navbar-container uk-active">
        <div class="uk-container uk-container-expand">
            <nav uk-navbar>
                <div class="uk-navbar-left">
                    <a href="#" class="uk-navbar-item uk-logo">
                        <img width="140" src="<?= base_url('public/') ?>images/logo.png" /> &nbsp;Informasi Jalan Rusak
                        Pekanbaru
                    </a>
                </div>
                <div class="uk-navbar-right">
                    <div>
                        <nav class="navbar align-items-stretch navbar-light flex-md-nowrap p-0">
                            <form action="<?php echo base_url('Utama/search')?>" method="post"
                                class="main-navbar__search w-100 d-none d-md-flex d-lg-flex">
                                <div class="input-group input-group-seamless ml-3">
                                    <div class="input-group-prepend">

                                    </div>
                                    <input class="navbar-search form-control" type="text" placeholder="Search"
                                        aria-label="Search" name="search">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </form>
                        </nav>
                    </div>
                    <div class="uk-navbar-item">
                        <form action="javascript:void(0)">
                            <a class="uk-button uk-button-default" href="/gis/login">LOGIN</a>
                            <a class="uk-button uk-button-default" href="#modal-center" uk-toggle>Info Web</a>


                    </div>
                </div>



                </form>
        </div>




</body>

</html>
<div class="row">
    <div class="col-lg col-md-6 col-sm-6 mb-4">
        <div class="stats-small stats-small--1 card card-small">
            <div class="card-body p-0 d-flex">
                <div class="d-flex flex-column m-auto">
                    <div class="stats-small__data text-center">
                        <span class="stats-small__label text-uppercase">Data jumlah Jalan</span>
                        <h6 class="stats-small__value count my-3">
                            <?php echo $this->db->count_all_results('bencana'); ?></h6>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <div class="col-lg col-md-4 col-sm-6 mb-4">
        <div class="stats-small stats-small--1 card card-small">
            <div class="card-body p-0 d-flex">
                <div class="d-flex flex-column m-auto">
                    <div class="stats-small__data text-center">
                        <span class="stats-small__label text-uppercase">Data Jalan Rusak</span>
                        <h6 class="stats-small__value count my-3"><?php $this->db->select('*');
                                                        $this->db->from('bencana');
                                                        $this->db->like('kategori', 'parah');
                                                        echo $this->db->count_all_results(); ?></h6>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

</div>
<div class="row">
    <div class="col-12">
        <div id="map">

        </div>
    </div>
</div>
<!-- End Small Stats Blocks -->

</div>
<div class="uk-container uk-container-large">
        <article class="uk-comment uk-comment-primary">
            <div id="mapid"></div>
        </article>

        <script type="text/javascript">
        var data = [
            <?php
                foreach ($bencana as $key => $r) { ?> {
                "lokasi": [<?= $r->latitude ?>, <?= $r->longitude ?>],
                "kecamatan": "<?= $r->kecamatan ?>",
                "keterangan": "<?= $r->keterangan ?>",
                "tempat": "<?= $r->lokasi ?>",
                "latitude": "<?= $r->latitude ?>",
                "longitude": "<?= $r->longitude ?>",
                "kategori": "<?= $r->kategori ?>",
                "gambar": "<?= $r->gambar ?>"

            },
            <?php } ?>
        ];

        var map = new L.Map('mapid', {
            zoom: 12,
            center: [<?php echo $data['latitude']?>,<?php echo $data['longitude']?>],
        });
        map.addLayer(new L.tileLayer(
            'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                    '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                    'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                id: 'mapbox/streets-v11'
            }));

        var markersLayer = new L.LayerGroup();
        map.addLayer(markersLayer);

        var controlSearch = new L.Control.Search({
            position: 'topleft',
            layer: markersLayer,
            initial: false,
            zoom: 25,
            marker: false
        });

        map.addControl(new L.Control.Search({

            layer: markersLayer,
            initial: false,
            collapsed: true,
        }));

        var ringan = L.icon({
            iconUrl: '<?= base_url('public/icon/ringan.png') ?>',
            iconSize: [30, 30]
        });

        var sedang = L.icon({
            iconUrl: '<?= base_url('public/icon/sedang.png') ?>',
            iconSize: [30, 30]
        });

        var parah = L.icon({
            iconUrl: '<?= base_url('public/icon/parah.png') ?>',
            iconSize: [30, 30]
        });

        var icons = "";
        for (i in data) {
            var kecamatan = data[i].kecamatan;
            var lokasi = data[i].lokasi;
            var tempat = data[i].tempat;
            var keterangan = data[i].keterangan;
            var kategori = data[i].kategori;
            var gambar = data[i].gambar;

            if (kategori == "ringan") {
                icons = ringan;
            } else if (kategori == "sedang") {
                icons = sedang;
            } else if (kategori == "parah") {
                icons = parah;

            }

            var marker = new L.Marker(new L.latLng(lokasi), {
                title: kecamatan,
                icon: icons
            });
            marker.bindPopup("<img src ='" + data[i].gambar + "' width='300' height='300'/>" + '<br>Kecamatan: ' +
                kecamatan + ' <br> Lokasi: ' + tempat + '<br> Keterangan: ' + keterangan + '</b>' +
                '<br><button> <a href="<?= base_url('readmore') ?>" >readmore</a>  </button>');
            markersLayer.addLayer(marker);
        }
        </script>
    </div>



<!-- MODAl -->
<div id="modal-center" class="uk-flex-top" uk-modal>
    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">

        <button class="uk-modal-close-default" type="button" uk-close></button>

        <div class="uk-container uk-container-large">
            <article class="uk-comment uk-comment-primary">
                <header class="uk-comment-header">
                    <div class="uk-grid-medium uk-flex-middle" uk-grid>
                        <div class="uk-width-auto">
                            <img class="uk-comment-avatar" src="<?= base_url('public/') ?>images/logo.png" width="80"
                                height="80" alt="">
                        </div>
                        <div class="uk-width-expand">
                            <h4 class="uk-comment-title uk-margin-remove"><a class="uk-link-reset" href="#">Project
                                    Kelompok 6</a></h4>
                            <h4 class="uk-comment-title uk-margin-remove"><a class="uk-link-reset" href="#">Aplikasi
                                    Jalan Rusak Pekanbaru</a></h4>

                        </div>
                    </div>
                </header>
                <div class="uk-comment-body">
                    <b>
                        <center>Aplikasi Tentang Lokasi Pemetaan</center>
                    </b>
                </div>
            </article>


        </div>

    </div>
</div>

<!-- <script>
$(document).on('ready', function() {

    $('.field').on('focus', function() {
        $('body').addClass('is-focus');
    });

    $('.field').on('blur', function() {
        $('body').removeClass('is-focus is-type');
    });

    $('.field').on('keydown', function(event) {
        $('body').addClass('is-type');
        if ((event.which === 8) && $(this).val() === '') {
            $('body').removeClass('is-type');
        }
    });

});
</script> -->

<!-- MODAl -->