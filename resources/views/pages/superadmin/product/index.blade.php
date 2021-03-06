@extends('layouts.superadmin')
@section('title','Dashboard MarketPlace ')
    
@section('content')
    <!-- Page Content -->
       

          <div
            class="section-content section-dashboard-home"
            data-aos="fade-up"
          >
            <div class="container-fluid">
              <div class="dashboard-heading">
                <h2 class="dashboard-title">Superadmin Dashboard</h2>
                <p class="dashboard-subtitle">
                  List Of Product
                </p>
              </div>
              <div class="dashboard-content">
                <div class="row">
                    <div class="col-md-12">
                      <div class="card">
                        <div class="card-body">
                         <a href="{{route('products.create')}}" class="btn btn-primary mb-3">Tambah Product Baru</a>
                          <div class="table-responsive">
                            <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">
                              <thead>
                                <tr>
                                  <td>ID</td>
                                  <td>Nama</td>
                                  <td>Pemilik</td>
                                  <td>Kategori</td>
                                  <td>Harga</td>
                                  <td>Aksi</td>
                                </tr>
                              </thead>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
@endsection

@push('addon-script')
<script>
  var datatable = $('#crudTable').DataTable({
      proccesing:true,
      serverSide:true,
      ordering:true,
      ajax:{
        url: '{!! route('products.index') !!}',
      },
      columns:[
        { data:'id', name:'id'},
        { data:'name', name:'name'},
        { data:'user.name',name:'user.name'},
        { data:'category.name', name:'category.name'},
        { data:'price', name:'price'},
        {
          data:'action',
          name:'action',
          orderable: false,
          searcable: false,
          width:'15%'
        },
      ]

  })
</script>
    
@endpush