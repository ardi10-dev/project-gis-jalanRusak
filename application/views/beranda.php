<div class="content-padder content-background">
    <div class="uk-section-small uk-section-default header">
        <div class="uk-container uk-container-large">
            <h2><span class="ion-speedometer"></span> Beranda</h2>
            <p>
                Selamat Datang, <?= $this->session->userdata('nama') ?>, <?= $judul ?>
            </p>
        </div>
    </div>
    <div class="row" style="margin-top:20px; margin-left:20px; margin-right:20px;">
        <div class="col-lg col-md-3 col-sm-3 mb-3">
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
        <div class="col-lg col-md-3 col-sm-3 mb-3">
            <div class="stats-small stats-small--1 card card-small">
                <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                        <div class="stats-small__data text-center">
                            <span class="stats-small__label text-uppercase">Data Jalan Rusak Yang Parah</span>
                            <h6 class="stats-small__value count my-3"><?php $this->db->select('*');
                                                        $this->db->from('bencana');
                                                        $this->db->like('kategori', 'parah');
                                                        echo $this->db->count_all_results(); ?></h6>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg col-md-3 col-sm-3 mb-3">
            <div class="stats-small stats-small--1 card card-small">
                <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                        <div class="stats-small__data text-center">
                            <span class="stats-small__label text-uppercase">Data Jalan Rusak Yang Sedang</span>
                            <h6 class="stats-small__value count my-3"><?php $this->db->select('*');
                                                        $this->db->from('bencana');
                                                        $this->db->like('kategori', 'sedang');
                                                        echo $this->db->count_all_results(); ?></h6>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg col-md-3 col-sm-3 mb-3">
            <div class="stats-small stats-small--1 card card-small">
                <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                        <div class="stats-small__data text-center">
                            <span class="stats-small__label text-uppercase">Data Jalan Rusak Yang Ringan</span>
                            <h6 class="stats-small__value count my-3"><?php $this->db->select('*');
                                                        $this->db->from('bencana');
                                                        $this->db->like('kategori', 'ringan');
                                                        echo $this->db->count_all_results(); ?></h6>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="uk-section-small">
        <div class="uk-container uk-container-large">
            <div id="mapid"></div>
        </div>
    </div>



    <script type="text/javascript">
    var data = [
        <?php
            foreach ($bencana as $key => $r) { ?> {
            "lokasi": [<?= $r->latitude ?>, <?= $r->longitude ?>],
            "kecamatan": "<?= $r->kecamatan ?>",
            "keterangan": "<?= $r->keterangan ?>",
            "tempat": "<?= $r->lokasi ?>",
            "kategori": "<?= $r->kategori ?>",
            "gambar": "<?= $r->gambar ?>"
        },
        <?php } ?>
    ];

    var map = new L.Map('mapid', {
        zoom: 12,
        center: new L.latLng(0.463829, 101.42173)
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
        var layerGroupRingan = L.layerGroup().addTo(map)
        var layerGroupSedang = L.layerGroup().addTo(map)
        var layerGroupParah = L.layerGroup().addTo(map)  
        var layerGroupSemua = L.layerGroup().addTo(map)
        for (i in data) {
            var kecamatan = data[i].kecamatan;
            var lokasi = data[i].lokasi;
            var tempat = data[i].tempat;
            var keterangan = data[i].keterangan;
            var kategori = data[i].kategori;
            var gambar = data[i].gambar;

            if (kategori == "ringan") {
                icons = ringan;
                var marker = new L.Marker(new L.latLng(lokasi), {
                    title: tempat,
                    icon: icons
                });

                marker.bindPopup("<img src ='" + data[i].gambar + "' width='300' height='300'/>" + '<br>Kecamatan: ' +
                    kecamatan + ' <br> Lokasi: ' + tempat + '<br> Keterangan: ' + keterangan + '</b>');
                markersLayer.addLayer(marker);
                marker.addTo(layerGroupRingan);
            } else if (kategori == "sedang") {
                icons = sedang;
                var marker = new L.Marker(new L.latLng(lokasi), {
                    title: tempat,
                    icon: icons
                });

                marker.bindPopup("<img src ='" + data[i].gambar + "' width='300' height='300'/>" + '<br>Kecamatan: ' +
                    kecamatan + ' <br> Lokasi: ' + tempat + '<br> Keterangan: ' + keterangan + '</b>');
                markersLayer.addLayer(marker);
                marker.addTo(layerGroupSedang);
            } else if (kategori == "parah") {
                icons = parah;
                var marker = new L.Marker(new L.latLng(lokasi), {
                    title: tempat,
                    icon: icons
                });
                marker.bindPopup("<img src ='" + data[i].gambar + "' width='300' height='300'/>" + '<br>Kecamatan: ' +
                    kecamatan + ' <br> Lokasi: ' + tempat + '<br> Keterangan: ' + keterangan + '</b>');
                markersLayer.addLayer(marker);
                marker.addTo(layerGroupParah);

            }


        }
        var baseLayers = {
            "Ringan": layerGroupRingan,
            "Sedang": layerGroupSedang,
            "Parah" : layerGroupParah,


        };
        L.control.layers(baseLayers).addTo(map);
    </script>