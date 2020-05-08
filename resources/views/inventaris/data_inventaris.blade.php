@extends('layouts.main_layout')
@section('page-name') Data Inventaris @endsection
@section('content')
{{-- CONTENT 1--}}
{{-- TABEL UTAMA--}}
<div class="row">
	<div class="col-lg-12 grid-margin stretch-card">
		<div class="card">
			<h2 class="text-center" style="background-color: green; color: white">Data Inventaris</h2>

			{{-- ADD RECORD BUTTON --}}
			<div class="row pl-3 pb-2">
				<div class="col-md-3">
					<a type="button" class="btn btn-block btn-inverse-primary btn-icon-text pl-0 p-2"							data-toggle="modal" href="#TambahData">
						<i class="mdi mdi-plus-circle-outline btn-icon-prepend"></i>
						Tambah Data Inventaris
					</a>
				</div>
			</div>

			<div class="card-body">
				<h4 class="card-title text-center">Pencarian</h4>
				<form class="form-sample">
					<div class="row">
						{{-- KOLOM Gedung --}}
						<div class="col-md-6">
							<div class="form-group row">
								<div class="text-center col-sm-12">
									<label class="" for="tahun">Gedung</label>
									<select class="form-control" required id="search-building">
										<option disabled selected> --Pilih-- </option>
										@foreach ($buildings as $building)
										<option value="{{ $building->id }}">{{ $building->nama_gedung }}</option>
										@endforeach
									</select>
								</div>
							</div>
						</div>
						{{-- RUANGAN --}}
						<div class="col-md-6">
							<div class="form-group row">
								<div class="text-center col-sm-12">
									<label class="" for="tahun">Ruangan</label>
									<select class="form-control col-sm-12" required id="search-room">
										<option disabled selected> --Pilih-- </option>
									</select>
								</div>
							</div>
						</div>
					</div>

					<div class="row justify-content-center">
						<button type="search" class="btn btn-gradient-primary mr-2">Cari</button>
					</div>

				</form>
			</div>

            <h5 class="card-title text-center"> Hasil Pencarian <br> Gedung {A} Ruang {Kelas 1B} </h5>

			{{-- TABEL UTAMA --}}
			<div class="table">
				<table id="summary" class="table table-bordered table-responsive">
					<thead>
						<tr class="text-center">
							<th> Jenis Inventaris </th>
							<th> Kode Inventaris </th>
							<th> Tanggal Mulai Pakai </th>
							<th> Status Kelayakan </th>
							<th> Ruangan </th>
							<th> Aksi </th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Meja</td>
							<td>021A</td>
							<td>23/04/2020</td>
							<td>Layak</td>
							<td>Ruang Kantin</td>
							<td class="p-0 text-center">
								<a type="button" class="btn btn-inverse-warning btn-icon p-2" data-toggle="modal" 								align="center" title="Edit" href="#Edit">
									<i class="mdi mdi-pencil"></i>
								</a>
								<a href="" type="button" class="btn tn-inverse-danger btn-icon p-2" title="Hapus" X								onclick="return confirm('Yakin hapus data?')">
									<i class="mdi mdi-delete"></i>
								</a>
							</td>
						</tr>
						<tr>
							<td>Meja Lipat</td>
							<td>021B</td>
							<td>23/04/2020</td>
							<td>Tidak Layak</td>
							<td>Ruang Kelas 1A</td>
							<td class="p-0 text-center">
								<a type="button" class="btn btn-inverse-warning btn-icon p-2" data-toggle="modal" 								align="center" title="Edit" href="#Edit">
									<i class="mdi mdi-pencil"></i>
								</a>
								<a href="" type="button" class="btn btn-inverse-danger btn-icon p-2" title="Hapus" 							onclick="return confirm('Yakin hapus data?')">
									<i class="mdi mdi-delete"></i>
								</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>

		</div>
	</div>
</div>

{{-- WINDOW TAMBAH DATA --}}
<div id="TambahData" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Masukkan Data</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="" method="">
				{{ csrf_field() }}
				{{-- FIELD --}}
				<div class="modal-body">
					{{-- Jenis Inventaris --}}
					<div class="form-group row">
						<label for="jenis_inventaris" class="col-md-4 col-form-label text-md-right">Jenis
						Inventaris</label>
						<div class="col-md-6">
							<select id="jenis_inventaris" type="jenis_inventaris" name="jenis_inventaris" 							class="form-control" required data-val="true" 													data-val-required="Pilih Jenis Inventaris.">
								<option disabled selected> --Pilih-- </option>
								<option>Meja</option>
								<option>Kursi</option>
								<option>Papan Tulis</option>
								<option>Proyektor</option>
							</select>
						</div>
					</div>
					{{-- Kode Inventaris --}}
					<div class="form-group row">
						<label for="kelas" class="col-md-4 col-form-label text-md-right">Kode Inventaris</label>
						<div class="col-md-6">
							<input type="text" class="form-control">
						</div>
					</div>
					{{-- Tanggal Mulai Pakai --}}
					<div class="form-group row">
						<label for="namaguru" class="col-md-4 col-form-label text-md-right">Tanggal Mulai Pakai</label>
						<div class="col-md-6">
							<input type="text" name="" id="" class="form-control">
						</div>
					</div>
					{{-- Status Kelayakan --}}
					<div class="form-group row">
						<label for="semester" class="col-md-4 col-form-label text-md-right">Status Kelayakan</label>
						<div class="col-md-6">
							<select id="semester" type="semester" name="semester" class="form-control"						required="required" data-validation-required-message="Pilih semester.">
								<option disabled selected> --Pilih-- </option>
								<option>Layak</option>
								<option>Rusak</option>
							</select>
						</div>
					</div>
					{{-- Gedung --}}
					<div class="form-group row">
						<label for="semester" class="col-md-4 col-form-label text-md-right">Gedung</label>
						<div class="col-md-6">
							<select id="semester" type="semester" name="semester" class="form-control"							required="required" data-validation-required-message="Pilih semester.">
								<option disabled selected> --Pilih-- </option>
								<option>Gedung A</option>
								<option>Gedung B</option>
							</select>
						</div>
					</div>
					{{-- Ruangan --}}
					<div class="form-group row">
						<label for="semester" class="col-md-4 col-form-label text-md-right">Ruangan</label>
						<div class="col-md-6">
							<select id="semester" type="semester" name="semester" class="form-control" 							required="required" data-validation-required-message="Pilih semester.">
								<option disabled selected> --Pilih-- </option>
								<option>Ruang A</option>
								<option>Ruang B</option>
							</select>
						</div>
					</div>
				</div>
				{{-- BUTTON --}}
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>

{{-- WINDOW EDIT DATA --}}
<div id="Edit" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Ubah Data Inventaris</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="" method="">
				{{ csrf_field() }}
				{{-- FIELD --}}
				<div class="modal-body">
					{{-- Jenis Inventaris --}}
					<div class="form-group row">
						<label for="jenis_inventaris" class="col-md-4 col-form-label text-md-right">Jenis
						Inventaris</label>
						<div class="col-md-6">
							<select id="jenis_inventaris" type="jenis_inventaris" name="jenis_inventaris" class="form-control" required data-val="true" data-val-required="Pilih Jenis Inventaris.">
								<option disabled> --Pilih-- </option>
								<option selected>Meja</option>
								<option>Kursi</option>
								<option>Papan Tulis</option>
								<option>Proyektor</option>
							</select>
						</div>
					</div>
					{{-- Kode Inventaris --}}
					<div class="form-group row">
						<label for="kelas" class="col-md-4 col-form-label text-md-right">Kode Inventaris</label>
						<div class="col-md-6">
							<input type="text" class="form-control" value="DAS7D2">
						</div>
					</div>
					<div class="form-group row">
						<label for="namaguru" class="col-md-4 col-form-label text-md-right">Tanggal Mulai Pakai</label>
						<div class="col-md-6">
							<input type="text" name="" id="" class="form-control" value="11-2-2020">
						</div>
					</div>
					<div class="form-group row">
						<label for="semester" class="col-md-4 col-form-label text-md-right">Status Kelayakan</label>
						<div class="col-md-6">
							<select id="semester" type="semester" name="semester" class="form-control"						required="required" data-validation-required-message="Pilih semester.">
								<option disabled selected> --Pilih-- </option>
								<option selected>Layak</option>
								<option>Rusak</option>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label for="semester" class="col-md-4 col-form-label text-md-right">Gedung</label>
						<div class="col-md-6">
							<select id="semester" type="semester" name="semester" class="form-control"						required="required" data-validation-required-message="Pilih semester.">
								<option disabled selected> --Pilih-- </option>
								<option selected>Gedung A</option>
								<option>Gedung B</option>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label for="semester" class="col-md-4 col-form-label text-md-right">Ruangan</label>
						<div class="col-md-6">
							<select id="semester" type="semester" name="semester" class="form-control"						required="required" data-validation-required-message="Pilih semester.">
								<option disabled> --Pilih-- </option>
								<option selected>Ruang A</option>
								<option>Ruang B</option>
							</select>
						</div>
					</div>
				</div>
				{{-- BUTTON --}}
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
					<button type="submit" class="btn btn-primary">Simpan Perubahan</button>
				</div>
			</form>

		</div>
	</div>
</div>
@endsection
@section('script')
<script src="{{ asset('assets/js/inventory-data.js') }}"></script>
@endsection
