@extends('layouts.main')

@section('container')
    @php $total = 0 @endphp
    <div class="card shadow mb-4">
            <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Pilih Barang</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
                                        <tr>
                                            <td>Id Barang</td>
                                            <td>
                                                <select style="width: 200px" id="brg_id" class="barang_id">
                                                    <option value="" disabled="true" selected="true"> Select </option>
                                                    @foreach($barangs as $b)
                                                    <option value="{{$b->id}}">{{$b->id}}</option>
                                                     @endforeach
                                                </select> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Nama Barang</td>
                                            <td>
                                                <input id="nama" readonly>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Harga Satuan</td>
                                            <td>
                                                Rp. <input id="harga" readonly>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Kuantitas</td>
                                            <td>
                                                <input type="text" id="kuantitas">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td>
                                                Rp. <input id="total" readonly>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="my-2"></div>
                                    <a href="#" class="btn btn-success btn-icon-split">
                                        <span class="text">Add</span>
                                    </a>
                        </div>   
        </div>  
        
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Transaksi :</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <tr>
                                            <td>Id Barang</td>
                                            <td>Nama Barang</td>
                                            <td>Harga Satuan</td>
                                            <td>Kuantitas</td>
                                            <td>Sub Total</td>
                                        </tr>
                                        <tr>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" >Total Harga</td>
                                            <td>0</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="my-1"></div>
                                    <a href="#" class="btn btn-primary btn-icon-split">
                                        <span class="text">Save</span>
                                    </a>
                        </div>   
                </div>  
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript">

	    $(document).on('change','#brg_id',function () {
			var b_id=$(this).val();
			var a=$(this).parent();
			var op="";
			$.ajax({
				type:'GET',
				url:'/cariNamaBarang',
				data:{'id':b_id},
				dataType:'json',//return data will be json
				success:function(data){
					console.log(data);

					$('#nama').val(data.nama_barang);

				},
				error:function(){

				}
			});


        }); 

        $(document).on('change','#brg_id',function () {
			var b_id=$(this).val();
			var a=$(this).parent();
			var op="";
			$.ajax({
				type:'GET',
				url:'/cariHargaBarang',
				data:{'id':b_id},
				dataType:'json',//return data will be json
				success:function(data){
					console.log(data);

					$('#harga').val(data.harga_satuan);

				},
				error:function(){

				}
			});


        }); 

        $(document).on('change','#brg_id',function () {
			var b_id=$(this).val();
			var a=$(this).parent();
			var op="";
			$.ajax({
				type:'GET',
				url:'/cariHargaBarang',
				data:{'id':b_id},
				dataType:'json',//return data will be json
				success:function(data){
					console.log(data);
					$('#total').val(data.harga_satuan);
				},
				error:function(){

				}
			});


        }); 

    </script>

@endsection
