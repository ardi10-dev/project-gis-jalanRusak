<div class="content-padder content-background">
            <div class="uk-section-small uk-section-default header">
                <div class="uk-container uk-container-large">
                    <h2><span uk-icon="icon: users; ratio: 2"></span>  <?=$judul?></h2>
                </div>
            </div>
<div class="uk-section-small">
        <div class="uk-container uk-container-large">
        <div class="uk-container uk-container-large">
<div class="uk-card uk-card-default uk-card-body uk-width-1-1@m">


	<div class="uk-clearfix uk-margin-small-userstom">
		<div class="uk-float-right">
		<form class="uk-search uk-search-default uk-margin-remove-righ">
			<span uk-search-icon></span>
			<input class="uk-search-input" name="search_key" id="search_key" type="text" placeholder="Pencarian...">
		</form>
		<button class="uk-button uk-button-default" id="resetBtn" ><span uk-icon="refresh"></span></button>
		</div>
		<div class="tambah uk-float-left">
		<button class="uk-button uk-button-danger uk-margin-small-right" id="tambahmodal" type="button"><span uk-icon="icon: plus"></span> 
		<span class="uk-visible@s">Tambah Data</span></button>
		</div>
	</div>
	<div id="ajaxUsers">

			<!-- Loading Image -->
			<div class="loading" style="display: none;">
				<div class="contentloading"><img src="<?php echo base_url('public/img/loading.gif'); ?>"/></div>
			</div>
			<!-- Loading Image -->
	</div>
</div>
</div>
<script src="<?=base_url('public/')?>admin/users.js"></script>

<!-- Modal Tambah dan edit -->
<div id="modalusers"  uk-modal>
    <div class="uk-modal-dialog">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <div class="uk-modal-header">
            <h2 class="uk-modal-title" id="tambahdata">Tambah Users</h2>
        </div>
        <div class="uk-modal-body">
		<form class="uk-form-stacked">
				<div class="uk-margin">
					<label class="uk-form-label" for="form-stacked-text">Nama Lengkap</label>
					<div class="uk-form-controls">
						<input class="uk-input" id="idusers" type="hidden">
						<input class="uk-input" id="namalengkap" type="text" placeholder="Nama Lengkap">
					</div>
				</div>
				<div class="uk-margin">
					<label class="uk-form-label" for="form-stacked-text">Username</label>
					<div class="uk-form-controls">
						
						<input class="uk-input" id="username" type="text" placeholder="Username">
					</div>
				</div>
				<div class="uk-margin">
					<label class="uk-form-label" for="form-stacked-text">Password *) <span id="statususers"> Tolong diingat passwordnya</span> </label>
					<div class="uk-form-controls">
						
						<input class="uk-input" id="password" type="password" placeholder="Password">
					</div>
				</div>
				<div class="uk-margin">
					<label class="uk-form-label" for="form-stacked-text">Confirmasi Password</label>
					<div class="uk-form-controls">
						
						<input class="uk-input" id="conpassword" type="password" placeholder="Confirmasi Password">
					</div>
				</div>

				<div class="uk-margin">
					<label class="uk-form-label" for="form-stacked-text">Status</label>
					<div class="uk-form-controls">
						<label><input class="uk-radio" type="radio" value="users" checked name="status" id="users"> Users</label>
						<label><input class="uk-radio" type="radio" value="admin"  name="status" id="admin"> Admin</label><br>
					</div>
				</div>
				
				

		</form>


        </div>
        <div class="uk-modal-footer uk-text-right">
            <button class="uk-button uk-button-default uk-modal-close" type="button">Batal</button>
            <button class="uk-button uk-button-primary" type="button" id="simpandata">Simpan Users</button>
        </div>
    </div>
<!-- Modal Tambah dan edit -->


        </div>
</div>


		