@extends('layouts.main')

@section('container')
    <div class="card shadow mb-4">
            <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Pilih Barang</h6>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="/addProduct">
                                    @csrf
                                    <div class="form-group">
                                        <label for="id"> Id </label>
                                        <select class="form-control"  id="brg_id" class="barang_id">
                                        <option value="" disabled="true" selected="true"> Select </option>
                                         @foreach($products as $b)
                                        <option value="{{$b->id}}">{{$b->id}}</option>
                                        @endforeach
                                    </select> 
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                        <label>Nama Barang</label>
                                        <input id="nama" class="form-control"  readonly>
                                        </div>
                                        <div class="form-group col-md-4">
                                        <label>Harga Barang</label>
                                        <input id="harga" class="form-control"  readonly>
                                        </div>
                                        <div class="form-group col-md-2">
                                        <label>Qty</label>
                                        <input type="number" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Total</label>
                                        <input id="total" class="form-control"  readonly>
                                    </div>
                                    <a href="{{ route('add.to.cart', $b->id) }}" class="btn btn-success">
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
				url:'/findProductName',
				data:{'id':b_id},
				dataType:'json',//return data will be json
				success:function(data){
					// console.log(data);
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
				url:'/findProductPrice',
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
				url:'/findProductPrice',
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
